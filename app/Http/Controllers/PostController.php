<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Pokemon;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('pokemons')->get();

        return view('posts.index')
            ->with(['posts' => $posts]);
    }

    /**
     * クイズ画面のアクション
     * ポケモンクラスからランダムで抽出する
     */
    public function quiz()
    {
        $choicesOfQuiz = Pokemon::inRandomOrder()->take(6)->get();
        $correctPokemon = $choicesOfQuiz->random();

        return view('posts.quiz')
            ->with(['choicesOfQuiz' => $choicesOfQuiz, 'correctPokemon' => $correctPokemon]);
    }

    public function create($choicedPokemonId, $quizResult)
    {
        $choicedPokemon = Pokemon::find($choicedPokemonId);

        return view('posts.create')
            ->with(['choicedPokemon' => $choicedPokemon, 'quizResult' => $quizResult]);
    }

    public function store(Request $request)
    {
        $pokemonId = $request->input('choiced-pokemon-id');


        $post = new Post();
        $post->body = $request->body;
        $post->quiz_correct = $request->input('quizResult');
        $post->save();

        // postとpokemonのリレーションデータを作成
        $post->pokemons()->attach($pokemonId);

        return redirect()
            ->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->body = $request->body;
        $post->save();
        return redirect()
            ->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('posts.index');
    }
}
