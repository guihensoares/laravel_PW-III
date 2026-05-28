<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

<div>
    <h2>Componentes Curriculares</h2>
    <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="hora_inicio">Hora do Inicio</label>
        <input type="datetime" name="hora_inicio" id="hora_inicio">

        <label for="hora_fim">Hora do Término</label>
        <input type="datetime" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>
        @isset($success)
                <p>{{ $success }}</p>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Componente</td>
            <td>Hora Inicio</td>
            <td>Hora Fim</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($componentes)
                @foreach($componentes as $componente)
                    <tr>
                        <td>
                            <p>{{ $componente->nome }}</p>
                        </td>
                        <td>
                            <p>{{ $componente->periodo }}</p>
                        </td>
                        <td>
                            <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>