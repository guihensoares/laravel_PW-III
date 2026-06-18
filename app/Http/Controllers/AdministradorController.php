<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdministradorController extends Controller
{
    function index(){ 
        $administrador = new \App\Models\AdministracaoModel();

        return view('administrador.index', ['administradores'=>$administrador::all()]);
    }

    function add(Request $dados) {
        $validator = Validator::make(
            $dados->all(),
            [
                'nome' => 'required|min:3|max:255',
                'email' => 'required|email',
                'telefone' => 'required|min:11|max:14',
                'cpf' => 'required|min:11|max:14',
                'usuario' => 'required:min:3|max:255',
                'senha' => 'required',
                'status' => 'required',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório!',
                'nome.min' => 'O campo nome deve conter no minimo 3 caracteres.',
                'nome.max' => 'O campo nome deve conter no maximo 255 caracteres.',

                'email.required' => 'O campo email é obrigatório!',
                'email.email' => 'Deve informar um email valido.',

                'telefone.required' => 'O campo telefone é obrigatório!',
                'telefone.min' => 'O campo telefone deve conter no minimo 11 caracteres.',
                'telefone.max' => 'O campo telefone deve conter no maximo 14 caracteres.',

                'cpf.required' => 'O campo de cpf é obrigatório!',
                'cpf.min' => 'O campo cpf deve conter no minimo 11 caracteres.',
                'cpf.max' => 'O campo cpf deve conter no maximo 14 caracteres.',

                'usuario.required' => 'O campo do usuario é obrigatório!',
                'usuario.min' => 'O campo usuario deve conter no minimo 3 caracteres.',
                'usuario.max' => 'O campo usuario deve conter no maximo 255 caracteres.',

                'senha.required' => 'O campo senha é obrigatório!',

                'status.required' => 'O campo status é obrigatório!',
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('administrador.index')
                ->withErrors($validator)
                ->withInput();
        }

        $administrador = new \App\Models\AdministracaoModel();
        $administrador::create($dados->all());

        //RECUPERANDO TODOS ADMINISTRADORES DO BANCO E ENVIANDO PARA A VIEW
        $administradores = new \App\Models\AdministracaoModel();

        return view('administrador.index', ['success'=>'Cadastrado!', 'administradores'=>$administradores::all()]);
    }

    function remove(string $id) {
        $administrador = new \App\Models\AdministracaoModel();
        $administrador::destroy($id);

        return view('administrador.index', ['success'=>'Removido!', 'administradores'=>$administrador::all()]);
    }

    function atualizar(string $id) {
        $administrador = new \App\Models\AdministracaoModel();
        $administrador = $administrador::find($id);

        return view('administrador.atualizar', ['administrador'=>$administrador]);
    }

    function save(Request $dados) {
        $administrador = new \App\Models\AdministracaoModel();
        $administrador = $administrador::find($dados->id);
        $administrador->update($dados->all());

        return view('administrador.index', ['success'=>'Atualizado!', 'administradores'=>$administrador::all()]);
    }
}
