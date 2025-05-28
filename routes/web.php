<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/libraries', function () {
    return view('libraries');
});

Route::get('/views', function () {
    return view('views');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', [FilmController::class, 'showRegister'])->name('register');
Route::post('/register', [FilmController::class, 'register'])->name('register.store');
Route::post('/login', [FilmController::class, 'login'])->name('login.store');
