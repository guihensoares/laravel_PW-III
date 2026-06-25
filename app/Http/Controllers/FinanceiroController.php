<?php

namespace App\Http\Controllers;

use App\Models\GastosModel as Gasto;
use App\Models\RegistroFinanceiroModel as RegistroFinanceiro;
use App\Models\VendasModel as Venda;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function index()
    {
        $registro = RegistroFinanceiro::firstOrCreate(
            ['data' => date('Y-m-d')],
            ['total_ganhos' => 0, 'total_gastos' => 0]
        );
        $registro->load(['ganhos', 'gastos', 'vendas']);
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

        $topProdutos = Venda::selectRaw('produto, SUM(quantidade) as total_qtd')
            ->whereHas('registro', function ($q) {
                $q->where('data', '>=', date('Y-m-d', strtotime('-29 days')));
            })
            ->groupBy('produto')
            ->orderByDesc('total_qtd')
            ->limit(6)
            ->get();

        $gastosCategorias = Gasto::selectRaw('categoria, SUM(valor) as total')
            ->whereHas('registro', function ($q) {
                $q->where('data', '>=', date('Y-m-d', strtotime('-29 days')));
            })
            ->groupBy('categoria')
            ->get();

        $totalMesGanhos = RegistroFinanceiro::where('data', '>=', date('Y-m-01'))->sum('total_ganhos');
        $totalMesGastos = RegistroFinanceiro::where('data', '>=', date('Y-m-01'))->sum('total_gastos');

        return view('financeiro.index', compact(
            'registro', 'labels', 'ganhos', 'gastos', 'lucros',
            'topProdutos', 'gastosCategorias', 'totalMesGanhos', 'totalMesGastos'
        ));
    }

    public function salvar(Request $request)
    {
        $registro = RegistroFinanceiro::firstOrCreate(
            ['data' => $request->data],
            ['total_ganhos' => 0, 'total_gastos' => 0]
        );

        $registro->update(['observacoes' => $request->observacoes]);

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

    public function historico(Request $request)
    {
        $query = RegistroFinanceiro::with(['ganhos', 'gastos', 'vendas'])->orderByDesc('data');

        if ($request->filled('de'))  $query->where('data', '>=', $request->de);
        if ($request->filled('ate')) $query->where('data', '<=', $request->ate);

        $registros = $query->paginate(15)->withQueryString();

        return view('financeiro.historico', compact('registros'));
    }

    public function remove($id)
{
    $registro = RegistroFinanceiro::findOrFail($id);

    $registro->ganhos()->delete();
    $registro->gastos()->delete();
    $registro->vendas()->delete();

    $registro->delete();

    return redirect()
        ->route('financeiro.historico')
        ->with('sucesso', 'Registro removido com sucesso!');
}

}