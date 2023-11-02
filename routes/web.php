<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnviarDatosControlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function(){
    return view('hola');
});

Route::post('/printForm', [EnviarDatosControlador::class, 'envioDatos']);

Route::get('/printForm/{edad}/{numTlfno?}', [EnviarDatosControlador::class, 'printarDatos']);

Route::get('/sumar', function(){
    return view('sumar');
});