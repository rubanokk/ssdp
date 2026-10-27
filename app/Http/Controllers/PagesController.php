<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function show(Page $page)
    {
        // dd($page);
        return view('pages.show', compact('page'));
    }
}
