<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de bienes raíces
Route::get('/', function () {
    return view('inmobiliaria');
});

// Ruta para la página de inicio original (opcional)
Route::get('/inicio', function () {
    return view('welcome');
});
