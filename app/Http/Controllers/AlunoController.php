<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index() {
        return view('aluno.index');
    }
    
    function add(Request $dados) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        $alunos = new \App\Models\AlunoModel();
        
        return view('aluno.index', ['sucess'=>'Aluno cadastrado!', 'alunos'=>$alunos::all()] );
    }

    function remove(Request $request) {
       
    }

    function edit(Request $request) {
        
    }

    function list(Request $request) {
        
    }
}
