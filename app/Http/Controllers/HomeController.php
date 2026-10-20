<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Post;
use App\Models\Practice;


class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::where('published', '=', true)->limit(2)->get();
        $practices = Practice::all();
        return view('home.index', compact('posts', 'practices'));
    }
}
