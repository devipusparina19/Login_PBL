<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

// Default ke register sesuai praktikum
Route::get('/', [UserController::class, 'showRegister'])->name('user.showRegister');

// Register
Route::get('/register', [UserController::class, 'showRegister'])->name('user.showRegister');
Route::post('/register', [UserController::class, 'register'])->name('user.register');

// Logout
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

// Login
Route::get('/login', [LoginController::class, 'showLogin'])->name('user.showLogin');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');

// Home setelah login
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
