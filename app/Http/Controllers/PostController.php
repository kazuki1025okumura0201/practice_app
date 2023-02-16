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
        $posts = Post::latest()->get();

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
        $hoge = Pokemon::find($choice);
        return view('posts.create')
            ->with(['choice' => $hoge]);
    }

    public function store()
    {

    }
}
