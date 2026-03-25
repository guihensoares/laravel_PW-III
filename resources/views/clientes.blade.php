
<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>telefone</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $clientes['id'] }}</td>
                    <td>{{ $clientes['nome'] }}</td>
                    <td>{{ $clientes['telefone'] }}</td>
                    <td>{{ $clientes['endereco'] }}</td>
                    <td>
                        <button class="btn btn-editar">editar</button>
                        <button class="btn btn-remover">remover</button>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>