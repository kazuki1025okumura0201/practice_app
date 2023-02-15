<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index')
            ->with(['posts' => $posts]);
    }

}
