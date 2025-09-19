<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

// Default: langsung ke register
Route::get('/', [UserController::class, 'showRegister'])->name('user.showRegister');

// Register
Route::get('/register', [UserController::class, 'showRegister'])->name('user.showRegister');
Route::post('/register', [UserController::class, 'register'])->name('user.register');

// Login
Route::get('/login', [LoginController::class, 'showLogin'])->name('user.showLogin');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');

// Logout
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

// Home (hanya bisa diakses kalau login)
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
