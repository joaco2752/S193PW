<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

/* Route::get('/', function () {
    return view('principal');
})->name('rutaPrincipal');

Route::get('/registrar', function () {
    return view('registro');
})->name('rutaRegistro'); */


Route::get('/', [Controlador::class, 'principio'])->name('rutaPrincipio');
Route::get('/registrar', [Controlador::class, 'register'])->name('rutaRegistro');
Route::post('/enviarRegistroLibro', [Controlador::class, 'procesarRegistro'])->name('rutaEnviarRegistro');