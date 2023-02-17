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
        $choices = Pokemon::inRandomOrder()->take(6)->get();

        return view('posts.quiz')
            ->with(['choices' => $choices]);
    }

    public function create($choice)
    {
        $pokemon = Pokemon::find($choice);

        return view('posts.create')
            ->with(['choice' => $pokemon]);
    }

    public function store(Request $request)
    {
        $pokemonId = $request->input('pokemon-id');


        $post = new Post();
        $post->body = $request->body;
        $post->quiz_correct = 1;
        $post->save();

        // postとpokemonのリレーションデータを作成
        $post->pokemons()->attach($pokemonId);

        return redirect()
            ->route('posts.index');
    }
}
