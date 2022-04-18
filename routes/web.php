<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/register', 'Auth\RegisterController@index')->name('register'); - old way
Route::get('/register', [RegisterController::class, 'index'])->name('register'); // new way for laravel 8 and 9

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/posts', function () {
    return view('posts.index');
});