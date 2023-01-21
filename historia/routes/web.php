<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalesController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\NodosController;
use App\Http\Controllers\PartidasController;



Route::resource('finales', FinalesController::class);
Route::resource('jugadores', JugadoresController::class);
Route::resource('nodos', NodosController::class);
Route::resource('links', LinksController::class);
Route::resource('partidas', PartidasController::class);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/zzz/welcome');
});
