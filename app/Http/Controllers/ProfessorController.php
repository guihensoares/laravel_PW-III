<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index()
    {
        return view('professor.index');
    }

    function add(Request $dados)
    {
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

        //RECUPERANDO TODOS PROFESSORES DO BANCO E ENVIANDO PARA A VIEW

        $professores = new \App\Models\ProfessorModel();

        return view('professor.index', ['success' => 'Cadastrado!', 'professores' => $professores::all()]);
    }
}
