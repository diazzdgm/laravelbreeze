<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperheroController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/superhero', [SuperheroController::class, 'index'])->name('superhero.index');
Route::get('/superhero/create', [SuperheroController::class, 'create'])->name('superhero.create');
Route::post('/superhero', [SuperheroController::class, 'store'])->name('superhero.store');
Route::get('/superhero/{superhero}/edit', [SuperheroController::class, 'edit'])->name('superhero.edit');
Route::put('/superhero/{superhero}/update', [SuperheroController::class, 'update'])->name('superhero.update');
Route::delete('/superhero/{superhero}/destroy', [SuperheroController::class, 'destroy'])->name('superhero.destroy');
Route::get('/superheros/{id}', [SuperheroController::class, 'show'])->name('superheros.show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
