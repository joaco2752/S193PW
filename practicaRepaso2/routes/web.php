<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
})->name('rutaPrincipal');

Route::get('/registrar', function () {
    return view('registro');
})->name('rutaRegistro');