<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorPrenda;

class Controlador extends Controller
{
    public function home()
    {
        return view('registro');
    }

    public function procesarPrenda(validadorPrenda $peticion)
    {
        $ropa= $peticion->input('txtprenda');
        session()->flash('exito','La prenda registrada es: '.$ropa);
        return to_route('rutaRegistro');

    }
}
