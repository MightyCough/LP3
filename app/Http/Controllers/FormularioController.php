<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function mostrarForm(){
        return view('formulario');
    }

    public function procesarForm(Request $request){
        $nombre = $request->input('nombre');
        $edad = $request->input('edad');
        if($edad < 18)
            echo $edad = "Menor de edad";
        else
            echo $edad = "Mayor de edad";
        return view('resultado')->with('nombre',$nombre)->with('edad',$edad);
    }
}
