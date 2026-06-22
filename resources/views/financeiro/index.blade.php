<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Painel do Dia</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/financeiro/index.css') }}">
</head>
<body>

<nav>
    <img src=" {{ asset('favicon_cana.ico') }} " alt="icone_cana">
    <span>Cariocaldo — Painel Principal</span>
    <a href="{{ route('financeiro.historico') }}">Ver Histórico</a>
</nav>

<div class="container">

    @if (session('sucesso'))
        <div class="alerta">✅ {{ session('sucesso') }}</div>
    @endif

    <h2>Resumo do Dia — {{ date('d/m/Y') }}</h2>

    <div class="cards">
        <div>
            <p>Ganhos hoje</p>
            <strong>R$ {{ number_format($registro->total_ganhos, 2, ',', '.') }}</strong>
        </div>
        <div>
            <p>Gastos hoje</p>
            <strong>R$ {{ number_format($registro->total_gastos, 2, ',', '.') }}</strong>
        </div>
        <div class="card {{ $registro->getLucro() >= 0 ? 'azul' : 'vermelho' }}">
            <p>Lucro hoje</p>
            <strong>R$ {{ number_format($registro->getLucro(), 2, ',', '.') }}</strong>
        </div>
        <div>
            <p>Copos vendidos</p>
            <strong>{{ $registro->vendas->sum('quantidade') }}</strong>
        </div>
    </div>

    <p style="margin-bottom:20px; color:#555;">
        <strong>Mês atual:</strong>
        Ganhos R$ {{ number_format($totalMesGanhos, 2, ',', '.') }} &nbsp;|&nbsp;
        Gastos R$ {{ number_format($totalMesGastos, 2, ',', '.') }} &nbsp;|&nbsp;
        Lucro R$ {{ number_format($totalMesGanhos - $totalMesGastos, 2, ',', '.') }}
    </p>

    <div class="graficos">
        <div class="grafico-box">
            <h3>Ganhos × Gastos × Lucro (30 dias)</h3>
            <canvas id="graficoLinha" height="180"></canvas>
        </div>
        <div class="grafico-box">
            <h3>Gastos por Categoria</h3>
            <canvas id="graficoRosca" height="180"></canvas>
        </div>
        <div class="grafico-box">
            <h3>Produtos mais vendidos</h3>
            <canvas id="graficoBarra" height="180"></canvas>
        </div>
    </div>

    <form action="{{ route('financeiro.salvar') }}" method="POST">
        @csrf
        <input type="hidden" name="data" value="{{ date('Y-m-d') }}">

        <div class="formulario">

            <div class="secao">
                <h3>Ganhos do Dia</h3>
                <div id="lista-ganhos">
                    @foreach ($registro->ganhos as $i => $g)
                    <div class="linha">
                        <input type="text"   name="ganhos[{{ $i }}][descricao]" value="{{ $g->descricao }}" placeholder="Descrição">
                        <input type="number" name="ganhos[{{ $i }}][valor]"     value="{{ $g->valor }}"     placeholder="R$ 0,00" step="0.01">
                        <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>
                    </div>
                    @endforeach

                    @if ($registro->ganhos->isEmpty())
                    <div class="linha">
                        <input type="text"   name="ganhos[0][descricao]" placeholder="Ex: Vendas no ponto">
                        <input type="number" name="ganhos[0][valor]"     placeholder="0,00" step="0.01">
                        <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>
                    </div>
                    @endif
                </div>
                <button type="button" class="btn-adicionar" onclick="adicionarLinha('lista-ganhos', 'ganhos')">
                    + Adicionar ganho
                </button>
            </div>

            <div class="secao">
                <h3>Gastos do Dia</h3>
                <div id="lista-gastos">
                    @foreach ($registro->gastos as $i => $g)
                    <div class="linha">
                        <input type="text"   name="gastos[{{ $i }}][descricao]" value="{{ $g->descricao }}" placeholder="Descrição">
                        <input type="number" name="gastos[{{ $i }}][valor]"     value="{{ $g->valor }}"     placeholder="0,00" step="0.01">
                        <select name="gastos[{{ $i }}][categoria]">
                            <option value="materia_prima"  {{ $g->categoria == 'materia_prima' ? 'selected' : '' }}>Matéria-prima</option>
                            <option value="equipamento"    {{ $g->categoria == 'equipamento'   ? 'selected' : '' }}>Equipamento</option>
                            <option value="transporte"     {{ $g->categoria == 'transporte'    ? 'selected' : '' }}>Transporte</option>
                            <option value="embalagem"      {{ $g->categoria == 'embalagem'     ? 'selected' : '' }}>Embalagem</option>
                            <option value="outros"         {{ $g->categoria == 'outros'        ? 'selected' : '' }}>Outros</option>
                        </select>
                        <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>
                    </div>
                    @endforeach
                    @if ($registro->gastos->isEmpty())
                    <div class="linha">
                        <input type="text"   name="gastos[0][descricao]" placeholder="Ex: Cana de açúcar">
                        <input type="number" name="gastos[0][valor]"     placeholder="0,00" step="0.01">
                        <select name="gastos[0][categoria]">
                            <option value="materia_prima">Matéria-prima</option>
                            <option value="equipamento">Equipamento</option>
                            <option value="transporte">Transporte</option>
                            <option value="embalagem">Embalagem</option>
                            <option value="outros">Outros</option>
                        </select>
                        <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>
                    </div>
                    @endif
                </div>
                <button type="button" class="btn-adicionar" onclick="adicionarLinha('lista-gastos', 'gastos')">
                    + Adicionar gasto
                </button>
            </div>

            <div class="secao">
                <h3>Vendas do Dia</h3>
                <div id="lista-vendas">
                    @foreach ($registro->vendas as $i => $v)
                    <div class="linha">
                        <input type="text"   name="vendas[{{ $i }}][produto]"        value="{{ $v->produto }}"        placeholder="Produto">
                        <input type="number" name="vendas[{{ $i }}][quantidade]"     value="{{ $v->quantidade }}"     placeholder="Qtd" min="1" style="width:60px;">
                        <input type="number" name="vendas[{{ $i }}][valor_unitario]" value="{{ $v->valor_unitario }}" placeholder="Preço" step="0.01" style="width:80px;">
                        <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>
                    </div>
                    @endforeach
                    @if ($registro->vendas->isEmpty())
                    <div class="linha">
                        <input type="text"   name="vendas[0][produto]"        placeholder="Ex: Caldo natural">
                        <input type="number" name="vendas[0][quantidade]"     placeholder="Qtd"   min="1"   style="width:60px;">
                        <input type="number" name="vendas[0][valor_unitario]" placeholder="Preço" step="0.01" style="width:80px;">
                        <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>
                    </div>
                    @endif
                </div>
                <button type="button" class="btn-adicionar" onclick="adicionarLinha('lista-vendas', 'vendas')">
                    Adicionar venda
                </button>
            </div>

        </div>

        <div class="secao">
            <h3>Observações</h3>
            <textarea name="observacoes" rows="3" placeholder="Alguma anotação do dia...">{{ $registro->observacoes }}</textarea>
        </div>

        <button type="submit" class="btn-salvar">Salvar Registro do Dia</button>

    </form>

</div>

<script>
let contadores = { ganhos: {{ $registro->ganhos->count() ?: 1 }}, gastos: {{ $registro->gastos->count() ?: 1 }}, vendas: {{ $registro->vendas->count() ?: 1 }} };

function adicionarLinha(listaId, tipo) {
    let lista = document.getElementById(listaId);
    let i = contadores[tipo]++;
    let div = document.createElement('div');
    div.className = 'linha';

    if (tipo === 'ganhos') {
        div.innerHTML = `
            <input type="text"   name="ganhos[${i}][descricao]" placeholder="Descrição">
            <input type="number" name="ganhos[${i}][valor]"     placeholder="0,00" step="0.01">
            <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>`;

    } else if (tipo === 'gastos') {
        div.innerHTML = `
            <input type="text"   name="gastos[${i}][descricao]" placeholder="Descrição">
            <input type="number" name="gastos[${i}][valor]"     placeholder="0,00" step="0.01">
            <select name="gastos[${i}][categoria]">
                <option value="materia_prima">Matéria-prima</option>
                <option value="equipamento">Equipamento</option>
                <option value="transporte">Transporte</option>
                <option value="embalagem">Embalagem</option>
                <option value="outros">Outros</option>
            </select>
            <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>`;

    } else {
        div.innerHTML = `
            <input type="text"   name="vendas[${i}][produto]"        placeholder="Produto">
            <input type="number" name="vendas[${i}][quantidade]"     placeholder="Qtd"   min="1"    style="width:60px;">
            <input type="number" name="vendas[${i}][valor_unitario]" placeholder="Preço" step="0.01" style="width:80px;">
            <button type="button" class="btn-remover" onclick="this.parentElement.remove()">✕</button>`;
    }

    lista.appendChild(div);
}

new Chart(document.getElementById('graficoLinha'), {
    type: 'line',
    data: {
        labels: @json($labels),
        datasets: [
            { label: 'Ganhos', data: @json($ganhos), borderColor: '#2d7a45', tension: 0.4, fill: false },
            { label: 'Gastos', data: @json($gastos), borderColor: '#c0392b', tension: 0.4, fill: false },
            { label: 'Lucro',  data: @json($lucros), borderColor: '#d4a843', tension: 0.4, fill: false, borderDash: [5,3] },
        ]
    },
    options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
    }
});

let numLabels = @json($gastosCategorias->pluck('categoria'));
let numValores = @json($gastosCategorias->pluck('total'));

new Chart(document.getElementById('graficoRosca'), {
    type: 'doughnut',
    data: {
        labels: numLabels,
        datasets: [{ data: numValores, backgroundColor: ['#2d7a45','#d4a843','#c0392b','#2980b9','#8b5e3c'] }]
    },
    options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
    }
});

new Chart(document.getElementById('graficoBarra'), {
    type: 'bar',
    data: {
        labels: @json($topProdutos->pluck('produto')),
        datasets: [{ label: 'Unidades', data: @json($topProdutos->pluck('total_qtd')), backgroundColor: '#4aad66' }]
    },
    options: {
        indexAxis: 'y',
        responsive: true,
        plugins: { legend: { display: false } }
    }
});
</script>

</body>
</html>