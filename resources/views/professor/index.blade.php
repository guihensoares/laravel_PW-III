<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->

<div>
    <form action="{{ route(professor.add) }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
    @isset($cursos)
            @foreach($cursos as $curso)
                <h3>{{ $profesor->nome }}</h3>
                <h3>{{ $professor->telefone }}</h3>
                <h3>{{ $professor->email }}</h3>
            @endforeach
    @endisset
</div>