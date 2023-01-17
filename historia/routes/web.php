<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalesAlcanzadosController;
use App\Http\Controllers\FinalesController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\NodosController;
use App\Http\Controllers\PartidasController;



Route::resource('Finales_alcanzados', FinalesAlcanzadosController::class);
Route::resource('Finales', FinalesController::class);
Route::resource('Jugadores', JugadoresController::class);
Route::resource('Links', LinksController::class);
Route::resource('nodo', NodosController::class);
Route::resource('Partidas', PartidasController::class);

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
