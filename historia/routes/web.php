<?php

use Illuminate\Support\Facades\Route;

Route::resource('Finales_alcanzados', FinalesAlcanzadosController::class);
Route::resource('Finales', FinalesController::class);
Route::resource('Jugadores', JugadoresController::class);
Route::resource('Links', LinksController::class);
Route::resource('Nodos', NodosController::class);
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
