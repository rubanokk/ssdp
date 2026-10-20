<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')
                    ->where('published', '=', true)
                    ->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        $posts = Post::where('id', '!=', $post->id)
                ->limit(2)        
                ->get();

        // $expiresAt = now()->addHours(3);
        // views($post)
        //     ->cooldown($expiresAt)
        //     ->record();
        return view('posts.show', compact('post', 'posts'));
    }
}
