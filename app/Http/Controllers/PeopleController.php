<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = Person::where('published', '=', true)->get();
        return view('people.index', compact('people'));
    }
    public function show(Person $person)
    {
        $people = Person::where('id', '!=', $person->id)->get();

        return view('people.show', compact('person', 'people'));
    }
}
