<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;


class PracticesController extends Controller
{
    public function index()
    {
        $practices = Practice::where('published', '=', true)->get();
        return view('practices.index', compact('practices'));
    }
    public function show(Practice $practice)
    {
        $practices = Practice::where('id', '!=', $practice->id)->get();

        return view('practices.show', compact('practice', 'practices'));
    }
}
