<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\ArticuloController;

use App\Http\Controllers\ConexionController;

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
    return view('welcome');
});

Route::resource('establecimientos', 'App\Http\Controllers\EstablecimientoController');
Route::get('/login', LoginController::class);
//Route::resource('articulos', 'App\Http\Controllers\ArticuloController');
Route::resource('/articulos', ArticuloController::class);
Route::resource('inventarios', 'App\Http\Controllers\InventariosController');

Route::resource('conexion', 'App\Http\Controllers\ConexionController');
Route::post('/conexion/conectar', [ConexionController::class, 'conectar']);
