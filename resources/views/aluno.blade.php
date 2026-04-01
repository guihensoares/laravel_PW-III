    <!-- The only way to do great work is to love what you do. - Steve Jobs -->

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
        <tr>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->telefone}}</td>
            <td>{{$aluno->email}}</td>
            <td>
                <button>Editar</button>
                <button>Remover</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>