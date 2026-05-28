<!-- He who is contented is rich. - Laozi -->

<div>
    <h2>Cursos</h2>
    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <select name="periodo" id="periodo" type="text">
            <option value="diurno">Diurno</option>
            <option value="tarde">Tarde</option>
            <option value="noturno">Noturno</option>
        </select>

        <button type="submit">Salvar</button>
        @isset($success)
                <p>{{ $success }}</p>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Curso</td>
            <td>Periodo</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($cursos)
                @foreach($cursos as $curso)
                    <tr>
                        <td>
                            <p>{{ $curso->nome }}</p>
                        </td>
                        <td>
                            <p>{{ $curso->periodo }}</p>
                        </td>
                        <td>
                            <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('curso.atualizar', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>