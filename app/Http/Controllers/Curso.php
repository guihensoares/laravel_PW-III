<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show() {
        $cursos = [
            (Object) ['nome' => 'administração', 'periodo' => 'diurno'],
            (Object) ['nome' => 'analise de sistemas', 'periodo' => 'noturno'],
            (Object) ['nome' => 'calculo', 'periodo' => 'noturno']
        ];
        return view('curso', compact('cursos'));
    }
}
