<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RepasController;
use App\Http\Controllers\SemaineController;
use Illuminate\Support\Facades\Route;



Route::get('/semaines', [SemaineController::class, 'index'])->name('semaines.index');
Route::get('/semaines/create', [SemaineController::class, 'create'])->name('semaines.create');
Route::get('/semaines/show/{semaine}', [SemaineController::class, 'show'])->name('semaines.show');
Route::get('/semaines/edit/{semaine}', [SemaineController::class, 'edit'])->name('semaines.edit');
Route::post('/semaines', [SemaineController::class, 'store'])->name('semaines.store');
Route::put('/semaines/{semaine}', [SemaineController::class, 'update'])->name('semaines.update');

Route::get('users-all', [RegisteredUserController::class, 'index'])->name('users.index');
Route::get('/', [RegisteredUserController::class, 'create'])->name('users.register');
Route::post('inscription', [RegisteredUserController::class, 'store'])->name('users.store');
Route::get('connexion', [AuthenticatedSessionController::class, 'create'])->name('users.login');
Route::post('connexion', [AuthenticatedSessionController::class, 'store'])->name('users.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route controller repas
    Route::get('/repas',[RepasController::class,'create'])->name('repas.create');
});

require __DIR__ . '/auth.php';
