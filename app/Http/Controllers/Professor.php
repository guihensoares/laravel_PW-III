<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show() {
        $professores = [
            (Object) ['nome' => 'mario', 'cpf' => '17289'],
            (Object) ['nome' => 'marcia', 'cpf' => '94753'],
            (Object) ['nome' => 'marcos', 'cpf' => '16728']
        ];
        return view('professor', compact('professores'));
    }

}
