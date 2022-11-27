<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function fHome(){
        return view('home');
    }

    function fIngresar(){
        return view('ingresar');
    }

    function fRecuerdos($nombre="Invitado"){
        $arrnombres =['Gerson','Amy','Sara'];
        return view('recuerdos', compact('nombre', 'arrnombres'));
    }

    public function procesarRecuerdos(validadorForm1 $req){
        return redirect("/ingresar")-> with('confirmacion', 'Tu recuerdo llego al controlador');
        
    }
}
