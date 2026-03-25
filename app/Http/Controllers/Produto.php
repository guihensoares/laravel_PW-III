<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function listar(){
        //modelo das infos de um B.D
        $produtos = [ 
            "produto1"  => ["id" => 1,  "nome" => "computador", "preco" => 2000.00],
            "produto2"  => ["id" => 2,  "nome" => "monitor 24 polegadas", "preco" => 850.00],
            "produto3"  => ["id" => 3,  "nome" => "teclado mecanico", "preco" => 250.00],
            "produto4"  => ["id" => 4,  "nome" => "mouse gamer", "preco" => 150.00],
            "produto5"  => ["id" => 5,  "nome" => "headset usb", "preco" => 180.00],
            "produto6"  => ["id" => 6,  "nome" => "impressora laser", "preco" => 1200.00],
            "produto7"  => ["id" => 7,  "nome" => "cadeira escritorio", "preco" => 900.00],
            "produto8"  => ["id" => 8,  "nome" => "webcam full hd", "preco" => 300.00],
            "produto9"  => ["id" => 9,  "nome" => "ssd 1tb", "preco" => 450.00],
            "produto10" => ["id" => 10, "nome" => "memoria ram 16gb", "preco" => 380.00],
            "produto11" => ["id" => 11, "nome" => "roteador wi-fi 6", "preco" => 550.00],
            "produto12" => ["id" => 12, "nome" => "hd externo 2tb", "preco" => 400.00],
            "produto13" => ["id" => 13, "nome" => "caixa de som bluetooth", "preco" => 220.00],
            "produto14" => ["id" => 14, "nome" => "microfone condensador", "preco" => 350.00],
            "produto15" => ["id" => 15, "nome" => "nobreak 1500va", "preco" => 1100.00],
            "produto16" => ["id" => 16, "nome" => "tablet 10 polegadas", "preco" => 1500.00],
            "produto17" => ["id" => 17, "nome" => "smartphone", "preco" => 2500.00],
            "produto18" => ["id" => 18, "nome" => "suporte articulado monitor", "preco" => 200.00],
            "produto19" => ["id" => 19, "nome" => "luminaria de mesa", "preco" => 80.00],
            "produto20" => ["id" => 20, "nome" => "hub usb-c", "preco" => 120.00],
            "produto21" => ["id" => 21, "nome" => "mochila para notebook", "preco" => 190.00]
        ];

        return View('estoque', ["produtos"=>$produtos]);
    }

}


