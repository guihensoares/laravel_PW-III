<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show() {
        $alunos = [
            (Object) ['nome' => 'seleide', 'telefone' => '19 22234-0192', 'email' => 'seleide.pinto012@gmail.com'],
            (Object) ['nome' => 'miriam', 'telefone' => '19 19234-9162', 'email' => 'miri.ane@gmail.com'],
            (Object) ['nome' => 'isasa', 'telefone' => '19 88216-2983', 'email' => 'is.asasPQ@gmail.com']
        ];
        return view('aluno', compact('alunos'));
    }

    function add($nome, $telefone, $email) {
        $aluno = (Object) ['nome' => $nome, 'telefone' => $telefone, 'email' => $email];
        return view('alunoAdd', compact('aluno'));
        
    }
}
