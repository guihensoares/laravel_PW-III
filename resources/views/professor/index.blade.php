<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->


<div>
    <h2>Professores</h2>
    <form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">

        <button type="submit">Salvar</button>
        @isset($success)
                <p>{{ $success }}</p>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Professor</td>
            <td>Telefone</td>
            <td>E-mail</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($professores)
                @foreach($professores as $professor)
                    <tr>
                        <td>
                            <p>{{ $professor->nome }}</p>
                        </td>
                        <td>
                            <p>{{ $professor->telefone }}</p>
                        </td>
                        <td>
                            <p>{{ $professor->email }}</p>
                        </td>
                        <td>
                            <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('professor.atualizar', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>