<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Periodo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->nome}}</td>
            <td>{{$curso->periodo}}</td>
            <td>
                <button>Editar</button>
                <button>Remover</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>