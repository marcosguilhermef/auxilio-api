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
