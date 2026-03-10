<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

// Rutas para las vistas básicas antes del CRUD

Route::get('/', function () {
    return view('basicas.welcome');
});

Route::get('hola-mundo', function () {
    return view('basicas.hola');
});

/*
Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'contacto']);

Route::post('recibe-formulario', [App\Http\Controllers\ContactoController::class, 'recibeFormulario']);

Route::get('lista-contactos', [ContactoController::class, 'listaContactos']);
*/

// Rutas para el CRUD de Contacto
Route::resource('contactos', ContactoController::class);
//Para comporbar que todo esta bien con estas rutas usar php artisan route:list