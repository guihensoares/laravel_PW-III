<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show() {
        $componentes = [
            (Object) ['nome' => 'programação web', 'horario' => '14:50'],
            (Object) ['nome' => 'calculo avançado', 'horario' => '16:30'],
            (Object) ['nome' => 'fundamentos da informatica', 'horario' => '18:00']
        ];
        return view('componente', compact('componentes'));
    }
    
}
