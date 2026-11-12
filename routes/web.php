<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\PracticesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PeopleController;


Route::localize(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/people', [PeopleController::class, 'index']);
    Route::get('/people/{person}', [PeopleController::class, 'show']);
    Route::get('/practices', [PracticesController::class, 'index']);
    Route::get('/practices/{practice}', [PracticesController::class, 'show']);
    Route::resource('posts', PostsController::class);
    Route::post('/leads', [LeadsController::class, 'store']);
    Route::get('/{page}', [PagesController::class, 'show']);
});