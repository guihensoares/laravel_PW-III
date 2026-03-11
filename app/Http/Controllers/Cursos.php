<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{
    function ds(){
        return view('pagina-ds');
    }

    function adm(){
        return view('pagina-adm');
    }

    function meioAmbiente(){
        return view('pagina-meio-ambiente');
    }

    function farmacia(){
        return view('pagina-farmacia');
    }

    
}
