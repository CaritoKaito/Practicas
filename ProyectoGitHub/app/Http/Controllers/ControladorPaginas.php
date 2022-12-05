<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorForm1;

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

    public function procesarDatos(ValidadorForm1 $req){
        return redirect("/formulario")-> with('confirmacion', 'Tu formulario se esta procesando');
    }
}
