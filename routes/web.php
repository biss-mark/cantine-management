<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SemaineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/semaines', [SemaineController::class, 'index'])->name('semaines.index');
Route::get('/semaines/create', [SemaineController::class, 'create'])->name('semaines.create');
Route::get('/semaines/show/{semaine}', [SemaineController::class, 'show'])->name('semaines.show');
Route::get('/semaines/edit/{semaine}', [SemaineController::class, 'edit'])->name('semaines.edit');
Route::post('/semaines', [SemaineController::class, 'store'])->name('semaines.store');
Route::put('/semaines/{semaine}', [SemaineController::class, 'update'])->name('semaines.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
