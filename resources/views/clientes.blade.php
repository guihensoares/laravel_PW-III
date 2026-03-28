<style>
    :root {
    --bg-color: #121214;
    --surface-color: #1e1e26;
    --text-primary: #e1e1e6;
    --text-secondary: #a8a8b3;
    --accent-color: #8257e5; /* Roxo moderno */
    --danger-color: #f75a68;
    --border-color: #29292e;
}

body {
    background-color: var(--bg-color);
    font-family: 'Inter', sans-serif; /* Recomendo usar esta fonte */
    color: var(--text-primary);
    padding: 20px;
}

.table-container {
    overflow-x: auto;
    border-radius: 8px;
    background: var(--surface-color);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.modern-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

/* Cabeçalho */
.modern-table thead th {
    background-color: rgba(255, 255, 255, 0.05);
    color: var(--text-secondary);
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 0.05em;
    padding: 16px 24px;
    border-bottom: 2px solid var(--border-color);
}

/* Linhas e Células */
.modern-table tbody td {
    padding: 16px 24px;
    border-bottom: 1px solid var(--border-color);
    font-size: 0.9rem;
}

.modern-table tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.02);
    transition: background 0.2s ease;
}

.font-bold { font-weight: 600; color: #fff; }

/* Botões de Ação */
.actions {
    display: flex;
    gap: 8px;
    justify-content: center;
}

.btn {
    padding: 6px 12px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    font-size: 0.85rem;
    font-weight: 600;
    transition: filter 0.2s;
}

.btn:hover {
    filter: brightness(1.2);
}

.btn-editar {
    background-color: var(--accent-color);
    color: white;
}

.btn-remover {
    background-color: transparent;
    color: var(--danger-color);
    border: 1px solid var(--danger-color);
}

.btn-remover:hover {
    background-color: var(--danger-color);
    color: white;
}
</style>

<div class="table-container">
    <table class="modern-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente['id'] }}</td>
                    <td class="font-bold">{{ $cliente['nome'] }}</td>
                    <td>{{ $cliente['telefone'] }}</td>
                    <td>{{ $cliente['endereco'] }}</td>
                    <td class="actions">
                        <button class="btn btn-editar">Editar</button>
                        <button class="btn btn-remover">Remover</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>