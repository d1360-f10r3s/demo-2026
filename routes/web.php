<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola-mundo', function () {
    return view('hola');
});

Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'contacto']);

Route::post('recibe-formulario', [App\Http\Controllers\ContactoController::class, 'recibeFormulario']);

Route::get('lista-contactos', [ContactoController::class, 'listaContactos']);