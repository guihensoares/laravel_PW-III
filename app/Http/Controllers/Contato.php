<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato extends Controller
{
    function index(){
        return view('pagina-contato');
    }

    
}
