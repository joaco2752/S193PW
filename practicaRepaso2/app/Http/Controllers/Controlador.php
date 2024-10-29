<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function principio()
    {
        return view('principal');
    }

    public function register()
    {
        return view('registro');
    }

    public function procesarRegistro(Request $peticion)
    {
        return view('registro');
    }
}
