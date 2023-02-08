<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalesController;
use App\Http\Controllers\NodosController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\PartidasController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;




Route::resource('finales', FinalesController::class);
Route::resource('nodos', NodosController::class);
Route::resource('links', LinksController::class);
Route::resource('partidas', PartidasController::class);
Route::resource('users', ProfileController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/juego', function () {
    return view('/paginas/juegos/juego');
})->middleware(['auth', 'verified'])->name('juego');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
