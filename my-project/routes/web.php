<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('auth.dashboard');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

