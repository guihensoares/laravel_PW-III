<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobre extends Controller
{
    function index(){
        return view('pagina-sobre');
    }

    
}
