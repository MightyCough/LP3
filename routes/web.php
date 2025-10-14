<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/formulario',[FormularioController::class,'mostrarForm']);
Route::post('/resultado',[FormularioController::class,'procesarForm']);

Route::get('/', [ClienteController::class, 'crear']);
Route::post('/guardar-cliente', [ClienteController::class, 'guardar']);
Route::get('/compra', [CompraController::class, 'crear']);
Route::post('/guardar-compra', [CompraController::class, 'guardar']);