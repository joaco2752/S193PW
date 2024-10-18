<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function repasar()
    {
        return view('repaso1',['resultado' => null, 'unidad'=>null]);
    }

    public function repaso($resultado, $unidad)
    {
        return view('repaso1');
    }

    public function convert(Request $request)
    {
        $opcion = $request->input('opciones');
        $valor = $request->input('valor');
        $resultado = 0;

        switch ($opcion) {
            case 0:
                $resultado = $valor / 1024;
                $unidad = "GB";
                break;
            case 1:
                $resultado = $valor * 1024;
                $unidad = "MB";
                break;
            case 2:
                $resultado = $valor / 1024;
                $unidad = "TB";
                break;
            case 3:
                $resultado = $valor * 1024;
                $unidad = "GB";
                break;
        }

         $texto = "Resultado: $resultado $unidad";

         return view('repaso1', ['resultado' => $texto]);
    }


}
