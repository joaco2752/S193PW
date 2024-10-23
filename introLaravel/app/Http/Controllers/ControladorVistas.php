<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /* public function procesarCliente(Request $peticion)
    {
        
        /* return 'Si llego la info del Cliente :)'; */

        //mostramos todo lo que trae la petición
        /* return $peticion->all(); */

        //ruta de donde se realizo la petición
        /* return $peticion->path(); */

        //url del origen la peticion
        /* return $peticion->url(); */

        //url del origen la peticion
        /* return $peticion->ip(); */
        
 /*    } */ 

    public function procesarCliente(Request $peticion)
    {
        // respuestas de redireccion
        /* return redirect('/'); */

        //redireccion usando el nombre de la ruta
        //return redirect()->route('rutaClientes');

        // redireccion al origen de la peticion
        //return back();

        //redireccion con variable adjunta
        /* $id= [['usuario'=>1],['usuario'=>2]];

        return view('formulario',compact('id')); */

        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaFormulario');
    }
}
