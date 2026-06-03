<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
    function index()
    {
        $professor = new \App\Models\ProfessorModel();

        return view('professor.index', ['professores' => $professor::all()]);
    }

    function add(Request $dados)
    {
        $validator = \Illuminate\Support\Facades\Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
                'telefone' => 'required|min:11|max:14',
                'email' => 'required|email',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

                'email.required' => 'O campo email é obrigatório.',
                'email.email' => 'O campo email deve ser um endereço de email válido.',

                'telefone.required' => 'O campo telefone é obrigatório.',
                'telefone.min' => 'O campo telefone deve conter no mínimo 11 caracteres.',
                'telefone.max' => 'O campo telefone deve conter no máximo 14 caracteres.',
            ]
        );
        if ($validator->fails()) {
            return redirect()
                ->route('professor.index')
                ->withErrors($validator)
                ->withInput();
        }

        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

        //RECUPERANDO TODOS PROFESSORES DO BANCO E ENVIANDO PARA A VIEW

        $professores = new \App\Models\ProfessorModel();

        return view('professor.index', ['success' => 'Cadastrado!', 'professores' => $professores::all()]);
    }

    function remove(string $id)
    {
        $professor = new \App\Models\ProfessorModel();
        $professor::destroy($id);

        return view('professor.index', ['success' => 'Removido!', 'professores' => $professor::all()]);
    }

    function atualizar(string $id)
    {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor' => $professor]);
    }

    function save(Request $dados)
    {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['success' => 'Atualizado!', 'professores' => $professor::all()]);
    }
}
