<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function contato(string $nome){
        // echo "O nome do contato é: $nome";
        $contato = [
            "nome" => $nome
        ];
        return view('contato', $contato);
    }

    function contatoNomeCompleto(string $nome, string $sobrenome){
        echo "O nome completo do contato é: $nome $sobrenome";
    }

    function assunto(string $nome, string $sobrenome, string $assunto){
        echo " <h1>O nome completo do contato é: $nome $sobrenome</h1>";
        echo " <marquee>$assunto</marquee>";
    }

    function mensagem(string $nome, string $sobrenome, string $assunto, string $email, string $telefone = 'Telefone não informado'){
        echo " <h1>O nome completo do contato é: $nome $sobrenome</h1>";
        echo " <h4>e-mail: $email</h4>";
        echo " <h4>telefone: $telefone</h4>";
        echo " <marquee>$assunto</marquee>";
    }

    
}


