<!-- It is never too late to be what you might have been. - George Eliot -->

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($professores as $professor)
        <tr>
            <td>{{$professor->nome}}</td>
            <td>{{$professor->cpf}}</td>
            <td>
                <button>Editar</button>
                <button>Remover</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>