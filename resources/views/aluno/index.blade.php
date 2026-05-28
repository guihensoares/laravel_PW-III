<!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
<div>
    <h2>Alunos</h2>
    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
        @isset($success)
            <p>{{ $success }}</p>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($alunos)
                @foreach($alunos as $aluno)
                    <tr>
                        <td>
                            <p>{{ $aluno->nome }}</p>
                        </td>
                        <td>
                            <form action="{{ route('aluno.remove', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('aluno.atualizar', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>