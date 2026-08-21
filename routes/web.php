<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\User\Category\CategoryController;
use App\Http\Controllers\User\Items\ItemsController;
use App\Http\Controllers\User\Movements\MovementsController;
use App\Http\Controllers\User\Status\StatusController;
use App\Http\Controllers\User\Report\ReportController;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/login', function () {
    return view('login');
})->name('connexion');

Route::get('/register', function () {
    return view('register');
})->name('inscription');

// Route pour l'Authentification
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route pour un Utilisateur connecte en tamps que User
Route::prefix('/user')->middleware(['auth'])->group(function(){
    Route::get('/index', [DashboardController::class, 'index'])->name('user.dashboard');

    Route::get('/items', [ItemsController::class, 'show'])->name('user.items.show');
    Route::post('/items', [ItemsController::class, 'save'])->name('user.items.save');


    Route::get('/category', [CategoryController::class, 'show'])->name('user.category.show');
    Route::post('/category', [CategoryController::class, 'save'])->name('user.category.add');
    Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('user.category.delete');

    Route::get('/status', [StatusController::class, 'show'])->name('user.status.show');

    Route::get('/reports', [ReportController::class, 'show'])->name('user.reports.show');

    Route::get('/movements', [MovementsController::class, 'show'])->name('user.movements.show');
});

// Route pour un Adminstrateur
Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('/index', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Route pour la deconnection
Route::middleware('auth')->get('/logout', [AuthController::class, 'logout'])->name('logout');
