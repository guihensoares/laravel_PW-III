<?php
// database/seeders/FinanceiroSeeder.php

namespace Database\Seeders;

use App\Models\RegistroFinanceiroModel;
use App\Models\GanhosModel;
use App\Models\GastosModel;
use App\Models\VendasModel;
use Illuminate\Database\Seeder;

class FinanceiroSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 13; $i >= 0; $i--) {

            $data = date('Y-m-d', strtotime("-{$i} days"));

            $registro = RegistroFinanceiroModel::firstOrCreate(
                ['data' => $data],
                ['total_ganhos' => 0, 'total_gastos' => 0]
            );

            GanhosModel::create([
                'registro_financeiro_id' => $registro->id,
                'descricao'   => 'Vendas no ponto',
                'valor'       => rand(80, 250),
            ]);

            GastosModel::create([
                'registro_financeiro_id' => $registro->id,
                'descricao'   => 'Cana de açúcar',
                'valor'       => rand(20, 60),
                'categoria'   => 'materia_prima',
            ]);

            GastosModel::create([
                'registro_financeiro_id' => $registro->id,
                'descricao'   => 'Copos descartáveis',
                'valor'       => rand(5, 15),
                'categoria'   => 'embalagem',
            ]);

            $produtos = [
                ['nome' => 'Caldo natural',    'preco' => 5.00],
                ['nome' => 'Caldo com limão',  'preco' => 6.00],
                ['nome' => 'Caldo com gengibre', 'preco' => 7.00],
            ];

            foreach ($produtos as $p) {
                VendasModel::create([
                    'registro_financeiro_id'    => $registro->id,
                    'produto'        => $p['nome'],
                    'quantidade'     => rand(5, 20),
                    'valor_unitario' => $p['preco'],
                ]);
            }

            $registro->calcularTotais();
        }
    }
}