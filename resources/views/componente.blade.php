    <!-- Be present above all else. - Naval Ravikant -->

    <style>
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        border-radius: 8px 8px 0 0;
        overflow: hidden;
    }

    .custom-table thead tr {
        background-color: #f8f9fa;
        color: #333;
        text-align: left;
        font-weight: bold;
        border-bottom: 2px solid #ececec;
    }

    .custom-table th, .custom-table td {
        padding: 12px 15px;
    }

    .custom-table tbody tr {
        border-bottom: 1px solid #f2f2f2;
        transition: background-color 0.2s ease;
    }

    .custom-table tbody tr:hover {
        background-color: #fcfcfc;
    }

    /* Estilização dos Botões */
    .btn {
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 12px;
        font-weight: 600;
        transition: opacity 0.2s;
    }

    .btn-edit { background-color: #e3f2fd; color: #1976d2; margin-right: 5px; }
    .btn-delete { background-color: #ffebee; color: #c62828; }
    .btn:hover { opacity: 0.8; }
</style>

<table class="custom-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Horário</th>
            <th style="text-align: center;">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($componentes as $componente)
        <tr>
            <td><strong>{{$componente->nome}}</strong></td>
            <td>{{$componente->horario}}</td>
            <td style="text-align: center;">
                <button class="btn btn-edit">Editar</button>
                <button class="btn btn-delete">Remover</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
