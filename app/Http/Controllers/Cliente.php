<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cliente extends Controller
{
    function listar(){
        //modelo das infos de um B.D
        $clientes = [
            "cliente1"  => ["id" => 1,  "nome" => "maria josé", "telefone" => "15 91102-0192", "endereco" => "rua batata doce nº201"],
            "cliente2"  => ["id" => 2,  "nome" => "joão pedro", "telefone" => "11 92203-0293", "endereco" => "avenida brasil nº10"],
            "cliente3"  => ["id" => 3,  "nome" => "ana beatriz", "telefone" => "21 93304-0394", "endereco" => "rua das flores nº45"],
            "cliente4"  => ["id" => 4,  "nome" => "carlos eduardo", "telefone" => "31 94405-0495", "endereco" => "alameda santos nº800"],
            "cliente5"  => ["id" => 5,  "nome" => "fernanda lima", "telefone" => "41 95506-0596", "endereco" => "praça da sé nº1"],
            "cliente6"  => ["id" => 6,  "nome" => "ricardo alves", "telefone" => "51 96607-0697", "endereco" => "rua amazonas nº123"],
            "cliente7"  => ["id" => 7,  "nome" => "patrícia gomes", "telefone" => "61 97708-0798", "endereco" => "quadra 102 sul nº5"],
            "cliente8"  => ["id" => 8,  "nome" => "lucas oliveira", "telefone" => "71 98809-0899", "endereco" => "rua laranjeiras nº99"],
            "cliente9"  => ["id" => 9,  "nome" => "juliana paiva", "telefone" => "81 99910-0900", "endereco" => "estrada do arraial nº250"],
            "cliente10" => ["id" => 10, "nome" => "marcos souza", "telefone" => "85 91111-1011", "endereco" => "rua dragão do mar nº40"],
            "cliente11" => ["id" => 11, "nome" => "gabriela costa", "telefone" => "19 92222-1122", "endereco" => "rua barão de itapura nº500"],
            "cliente12" => ["id" => 12, "nome" => "felipe santos", "telefone" => "12 93333-1233", "endereco" => "avenida nove de julho nº33"],
            "cliente13" => ["id" => 13, "nome" => "larissa melo", "telefone" => "27 94444-1344", "endereco" => "rua das palmeiras nº12"],
            "cliente14" => ["id" => 14, "nome" => "thiago silva", "telefone" => "48 95555-1455", "endereco" => "servidão da paz nº7"],
            "cliente15" => ["id" => 15, "nome" => "camila rocha", "telefone" => "16 96666-1566", "endereco" => "rua xv de novembro nº101"],
            "cliente16" => ["id" => 16, "nome" => "bruno henrique", "telefone" => "34 97777-1677", "endereco" => "avenida rondon pacheco nº20"],
            "cliente17" => ["id" => 17, "nome" => "amanda nunes", "telefone" => "62 98888-1788", "endereco" => "rua t-7 nº88"],
            "cliente18" => ["id" => 18, "nome" => "rafael vitti", "telefone" => "24 99999-1899", "endereco" => "rua do imperador nº300"],
            "cliente19" => ["id" => 19, "nome" => "isabela freitas", "telefone" => "13 91234-1900", "endereco" => "rua da praia nº55"],
            "cliente20" => ["id" => 20, "nome" => "diego mendes", "telefone" => "92 92345-2011", "endereco" => "rua das águas nº14"],
            "cliente21" => ["id" => 21, "nome" => "beatriz araújo", "telefone" => "11 93456-2122", "endereco" => "travessa da sorte nº8"]
        ];

        return View('clientes', ["clientes"=>$clientes]);
    }

}


