<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ControladorVistas extends Controller
{
    /* usamos este controlador para administrar la logica de las vistas */
    
    public function home()
    {
        return view('inicio');
    }


    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }


    public function procesarCliente(validadorCliente $peticionV)
    {
        
        $usuario= $peticionV->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaFormulario');
    }
}
