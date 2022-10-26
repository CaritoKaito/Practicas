<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    function fPrincipal(){
        return view('principal');
    }

    function fFormulario(){
        return view('formulario');
    }

    function fConsulta(){
        return view('consulta');
    }

    public function procesarDatos(){
        if(request()->filled('txtNombre')){
            return 'Se lleno el campo de nombre:'.request()->input('txtNombre');
        }
            return 'No se lleno el campo de nombre';
}
}
