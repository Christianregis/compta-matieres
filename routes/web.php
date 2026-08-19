<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Public\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');

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
Route::prefix('/user')->middleware(['auth'])->group(function(){
    Route::get('/index', [DashboardController::class, 'index'])->name('user.dashboard');
});

// Route pour un Adminstrateur 
Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('/index', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Route pour la deconnection
Route::middleware('auth')->get('/logout', [AuthController::class, 'logout'])->name('logout');
