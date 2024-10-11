<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/* Route::get('/', function () {
    return view(view: 'inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view(view: 'formulario');
})->name('rutaFormulario');

Route::get('/consultar', function () {
    return view(view: 'clientes');
})->name('rutaClientes'); */

/* Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaFormulario');
Route::view('/consultar','clientes')->name('rutaClientes');
Route::view('/component','componentes')->name('rutaComponent'); */

Route::get('/',[ControladorVistas::class, 'home'])->name('rutaInicio');
Route::get('/form',[ControladorVistas::class, 'formulario'])->name('rutaFormulario');
Route::get('/consultar',[ControladorVistas::class, 'consulta'])->name('rutaClientes');
