<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

/* Route::get('/', function () {
    return view('registro');
}); */

Route::get('/', [Controlador::class, 'home'])->name('rutaRegistrar');
Route::get('/registrarPrenda', [Controlador::class, 'procesarPrenda'])->name('rutaRegistro');
Route::post('/registrarPrenda', [Controlador::class, 'procesarPrenda'])->name('rutaRegistro');
