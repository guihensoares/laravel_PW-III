<!-- He who is contented is rich. - Laozi -->

<div>
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
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($cursos)
            @foreach($cursos as $curso)
                <h3>{{ $curso->nome }}</h3>
                <h3>{{ $curso->periodo }}</h3>
            @endforeach
    @endisset
</div>