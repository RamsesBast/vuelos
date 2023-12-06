<?php

use App\Http\Controllers\AerolineasController;
use App\Http\Controllers\AeropuertosController;
use App\Http\Controllers\PasajerosController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VuelosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('users',UsersController::class);
Route::resource('flights', VuelosController::class);
Route::resource('passengers', PasajerosController::class);
Route::resource('reservations', ReservasController::class);

Route::resource('airlines', AerolineasController::class);
Route::resource('airport', AeropuertosController::class);
