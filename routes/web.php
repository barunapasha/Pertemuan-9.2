<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;

Route::get('/', [RegisterController::class, 'showRegistrationForm'])
    ->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])
        ->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');
});