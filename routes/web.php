<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/register', 'Auth\RegisterController@index')->name('register'); - old way
Route::get('/register', [RegisterController::class, 'index'])->name('register'); // new way for laravel 8 and 9
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/posts', function () {
    return view('posts.index');
});