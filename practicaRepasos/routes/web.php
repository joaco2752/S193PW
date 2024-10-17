<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});


Route::get('/repasar', function () {
    return view('repaso1');
});