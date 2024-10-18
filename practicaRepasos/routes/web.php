<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/* Route::get('/', function () {
    return view('inicio');
});


Route::get('/repasar', function () {
    return view('repaso1');
}); */

Route::get('/',[ControladorVistas::class, 'home'])->name('rutaInicio');
Route::get('/repasar',[ControladorVistas::class, 'repasar'])->name('rutaRepaso');
Route::post('/convert', [ControladorVistas::class, 'convert'])->name('rutaConvert');