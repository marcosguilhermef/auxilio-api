<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('throttle:10,1')
    ->post('/auxilio-cpf',[App\Http\Controllers\ConsultarAuxilio::class, 'index']);

Route::get('/politicas',[App\Http\Controllers\Politicas::class, 'index']);
