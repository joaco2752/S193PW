<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistro;

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

    public function procesarRegistro(validadorRegistro $peticion)
    {
        $nombreLibro = $peticion->input('txttitulo');
        session()->flash('perfecto','Todo Correcto: Libro '.$nombreLibro.' guardado');
        return to_route('rutaRegistro');
    }
}
