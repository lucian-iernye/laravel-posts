<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/register', 'Auth\RegisterController@index')->name('register'); - old way
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/posts', function () {
    return view('posts.index');
});
