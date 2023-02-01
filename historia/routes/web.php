<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalesController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\NodosController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\PartidasController;



Route::resource('finales', FinalesController::class);
Route::resource('jugadores', JugadoresController::class);
Route::resource('nodos', NodosController::class);
Route::resource('links', LinksController::class);
Route::resource('partidas', PartidasController::class);


Route::get('/juego', function() {
    return view('/paginas/juegos/juego');
})->name('juego');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
