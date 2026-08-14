<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('connexion');

Route::get('/register', function () {
    return view('register');
})->name('inscription');

// Rote pour l'Authentification
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route pour un Utilisateur connecte en tamps que User
Route::middleware(['auth'])->group(function(){
    Route::get('/user/index', [DashboardController::class, 'index'])->name('user.dashboard');
});
