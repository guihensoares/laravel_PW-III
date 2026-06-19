<?php

namespace App\Http\Controllers;

use App\Models\GastosModel as Gasto;
use App\Models\RegistroFinanceiroModel as RegistroFinanceiro;
use App\Models\VendasModel as Venda;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    // ─── Página principal ─────────────────────────────────────────────
    public function index()
    {
        // Pega o registro de hoje, ou cria um novo zerado
        $registro = RegistroFinanceiro::firstOrCreate(
            ['data' => date('Y-m-d')],
            ['total_ganhos' => 0, 'total_gastos' => 0]
        );
        $registro->load(['ganhos', 'gastos', 'vendas']);

        // Pega os últimos 30 dias e monta os arrays dos gráficos
        $ultimos30 = RegistroFinanceiro::where('data', '>=', date('Y-m-d', strtotime('-29 days')))
            ->orderBy('data')
            ->get();

        $labels = [];
        $ganhos = [];
        $gastos = [];
        $lucros = [];

        foreach ($ultimos30 as $r) {
            $labels[] = date('d/m', strtotime($r->data));
            $ganhos[] = (float) $r->total_ganhos;
            $gastos[] = (float) $r->total_gastos;
            $lucros[] = (float) $r->total_ganhos - (float) $r->total_gastos;
        }

        // Produtos mais vendidos nos últimos 30 dias
        $topProdutos = Venda::selectRaw('produto, SUM(quantidade) as total_qtd')
            ->whereHas('registro', function ($q) {
                $q->where('data', '>=', date('Y-m-d', strtotime('-29 days')));
            })
            ->groupBy('produto')
            ->orderByDesc('total_qtd')
            ->limit(6)
            ->get();

        // Gastos agrupados por categoria
        $gastosCategorias = Gasto::selectRaw('categoria, SUM(valor) as total')
            ->whereHas('registro', function ($q) {
                $q->where('data', '>=', date('Y-m-d', strtotime('-29 days')));
            })
            ->groupBy('categoria')
            ->get();

        // Totais do mês
        $totalMesGanhos = RegistroFinanceiro::where('data', '>=', date('Y-m-01'))->sum('total_ganhos');
        $totalMesGastos = RegistroFinanceiro::where('data', '>=', date('Y-m-01'))->sum('total_gastos');

        return view('financeiro.index', compact(
            'registro', 'labels', 'ganhos', 'gastos', 'lucros',
            'topProdutos', 'gastosCategorias', 'totalMesGanhos', 'totalMesGastos'
        ));
    }

    // ─── Salva o formulário ────────────────────────────────────────────
    public function salvar(Request $request)
    {
        // Pega ou cria o registro do dia
        $registro = RegistroFinanceiro::firstOrCreate(
            ['data' => $request->data],
            ['total_ganhos' => 0, 'total_gastos' => 0]
        );

        $registro->update(['observacoes' => $request->observacoes]);

        // Apaga os registros antigos e salva os novos
        $registro->ganhos()->delete();
        foreach ($request->ganhos ?? [] as $g) {
            if (!empty($g['descricao']) && !empty($g['valor'])) {
                $registro->ganhos()->create($g);
            }
        }

        $registro->gastos()->delete();
        foreach ($request->gastos ?? [] as $g) {
            if (!empty($g['descricao']) && !empty($g['valor'])) {
                $registro->gastos()->create($g);
            }
        }

        $registro->vendas()->delete();
        foreach ($request->vendas ?? [] as $v) {
            if (!empty($v['produto']) && !empty($v['quantidade'])) {
                $registro->vendas()->create($v);
            }
        }

        $registro->calcularTotais();

        return redirect()->route('financeiro.index')->with('sucesso', 'Registro salvo!');
    }

    // ─── Página de histórico ───────────────────────────────────────────
    public function historico(Request $request)
    {
        $query = RegistroFinanceiro::with(['ganhos', 'gastos', 'vendas'])->orderByDesc('data');

        if ($request->filled('de'))  $query->where('data', '>=', $request->de);
        if ($request->filled('ate')) $query->where('data', '<=', $request->ate);

        $registros = $query->paginate(15)->withQueryString();

        return view('financeiro.historico', compact('registros'));
    }
}