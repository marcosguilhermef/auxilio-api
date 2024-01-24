<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('throttle:10,1')->post('/auxilio-cpf',[App\Http\Controllers\ConsultarAuxilio::class, 'index']);
Route::middleware('throttle:10,1')->post('/bolsa-familia',[App\Http\Controllers\BolsaFamilia::class, 'index']);
Route::middleware('throttle:10,1')->post('/auxilio-brasil',[App\Http\Controllers\AuxilioBrasil::class, 'index']);
Route::middleware('throttle:10,1')->post('/novo-bolsa-familia',[App\Http\Controllers\NovoBolsaFamilia::class, 'index']);
Route::middleware('throttle:10,1')->post('/peti',[App\Http\Controllers\Peti::class, 'index']);
