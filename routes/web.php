<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\PracticesController;


Route::localize(function () {
    Route::view('/', 'home.index');
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/practices/{practice}', [PracticesController::class, 'show']);
    Route::resource('posts', PostsController::class);
    Route::post('/leads', [LeadsController::class, 'store']);
});

// Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
//     Route::view('/', 'home.index');
//     Route::resource('posts', PostsController::class);
//     // Route::get('/{category}', [PostsController::class, 'category']);
//     // Route::get('/posts/{post}', [PostsController::class, 'show'])->name('post');
// });