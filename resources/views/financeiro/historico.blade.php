<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>
</head>
<body>

<nav>
    <span>Histórico</span>
    <a href="{{ route('financeiro.index') }}">📊 Painel do Dia</a>
</nav>

<div class="container">

    <h2>Histórico de Registros</h2>

    <form method="GET" action="{{ route('financeiro.historico') }}" class="filtro">
        <div>
            <label>De</label>
            <input type="date" name="de" value="{{ request('de') }}">
        </div>
        <div>
            <label>Até</label>
            <input type="date" name="ate" value="{{ request('ate') }}">
        </div>
        <button type="submit" class="btn btn-verde">🔍 Filtrar</button>
        <a href="{{ route('financeiro.historico') }}" class="btn btn-cinza">✕ Limpar</a>
    </form>

    @if ($registros->isEmpty())
        <div class="vazio">
            <p style="font-size:32px;">🗂️</p>
            <p>Nenhum registro encontrado.</p>
        </div>
    @else
        @foreach ($registros as $reg)
        @php
            $lucro = $reg->total_ganhos - $reg->total_gastos;
        @endphp
        <div class="dia">

            <div class="dia-header">
                <strong>📆 {{ \Carbon\Carbon::parse($reg->data)->isoFormat('dddd, D [de] MMMM [de] YYYY') }}</strong>
                <div class="badges">
                    <span class="badge badge-verde">Ganhos R$ {{ number_format($reg->total_ganhos, 2, ',', '.') }}</span>
                    <span class="badge badge-vermelho">Gastos R$ {{ number_format($reg->total_gastos, 2, ',', '.') }}</span>
                    <span class="badge {{ $lucro >= 0 ? 'badge-azul' : 'badge-vermelho' }}">
                        Lucro R$ {{ number_format($lucro, 2, ',', '.') }}
                    </span>
                </div>
            </div>

            <div class="tabelas">

                <div class="tabela-secao">
                    <p>Ganhos</p>
                    @if ($reg->ganhos->isEmpty())
                        <span style="color:#bbb; font-size:13px;">Nenhum</span>
                    @else
                        <table>
                            <thead><tr><th>Descrição</th><th>Valor</th></tr></thead>
                            <tbody>
                                @foreach ($reg->ganhos as $g)
                                <tr>
                                    <td>{{ $g->descricao }}</td>
                                    <td>R$ {{ number_format($g->valor, 2, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <div class="tabela-secao">
                    <p>Gastos</p>
                    @if ($reg->gastos->isEmpty())
                        <span style="color:#bbb; font-size:13px;">Nenhum</span>
                    @else
                        <table>
                            <thead><tr><th>Descrição</th><th>Categoria</th><th>Valor</th></tr></thead>
                            <tbody>
                                @foreach ($reg->gastos as $g)
                                <tr>
                                    <td>{{ $g->descricao }}</td>
                                    <td>{{ \App\Models\GastosModel::CATEGORIAS[$g->categoria] ?? $g->categoria }}</td>
                                    <td>R$ {{ number_format($g->valor, 2, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <div class="tabela-secao">
                    <p>🥤 Vendas</p>
                    @if ($reg->vendas->isEmpty())
                        <span style="color:#bbb; font-size:13px;">Nenhuma</span>
                    @else
                        <table>
                            <thead><tr><th>Produto</th><th>Qtd</th><th>Preço</th><th>Total</th></tr></thead>
                            <tbody>
                                @foreach ($reg->vendas as $v)
                                <tr>
                                    <td>{{ $v->produto }}</td>
                                    <td>{{ $v->quantidade }}</td>
                                    <td>R$ {{ number_format($v->valor_unitario, 2, ',', '.') }}</td>
                                    <td>R$ {{ number_format($v->quantidade * $v->valor_unitario, 2, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

            </div>

            @if ($reg->observacoes)
                <div class="obs">📝 <strong>Obs:</strong> {{ $reg->observacoes }}</div>
            @endif

        </div>
        @endforeach

        <div class="paginacao">
            {{ $registros->links() }}
        </div>
    @endif

</div>

</body>
</html>