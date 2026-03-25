<style>
    body {
        background-color: #0f172a; /* Fundo da página */
        margin: 0;
        padding: 0;
    }

    .estoque-container {
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        max-width: 1000px;
        margin: 2rem auto;
        padding: 24px;
        background-color: #1e293b; /* Fundo do card */
        border-radius: 12px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
        border: 1px solid #334155;
    }

    .estoque-titulo {
        color: #f1f5f9;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .tabela-estoque {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #334155;
    }

    .tabela-estoque th {
        background-color: #334155;
        color: #94a3b8;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        padding: 14px 15px;
        text-align: left;
    }

    .tabela-estoque td {
        padding: 14px 15px;
        color: #cbd5e1;
        border-bottom: 1px solid #334155;
        font-size: 0.95rem;
    }

    .tabela-estoque tr:last-child td {
        border-bottom: none;
    }

    .tabela-estoque tr:hover {
        background-color: #2d3748; /* Efeito de destaque na linha */
    }

    /* Estilo dos Botões */
    .btn {
        margin: 5px;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        font-size: 0.85rem;
    }

    .btn-editar {
        background-color: #38bdf8; /* Azul claro para contraste no escuro */
        color: #0c4a6e;
    }

    .btn-editar:hover {
        background-color: #7dd3fc;
        transform: translateY(-1px);
    }

    .btn-remover {
        background-color: #ef4444;
        color: white;
    }

    .btn-remover:hover {
        background-color: #f87171;
        transform: translateY(-1px);
    }

    .preco-tag {
        color: #4ade80; /* Verde neon suave */
        font-weight: 700;
    }
</style>

<div class="estoque-container">
    <h2 class="estoque-titulo">📦 Gestão de Estoque</h2>

    <table class="tabela-estoque">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto['id'] }}</td>
                    <td style="font-weight: 500;">{{ $produto['nome'] }}</td>
                    <td class="preco-tag">R$ {{ number_format($produto['preco'], 2, ',', '.') }}</td>
                    <td>
                        <button class="btn btn-editar">editar</button>
                        <button class="btn btn-remover">remover</button>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
</div>