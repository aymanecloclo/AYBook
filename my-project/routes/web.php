<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Models\User;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('auth.dashboard');
// });
Route::resource('posts', PostController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register');
