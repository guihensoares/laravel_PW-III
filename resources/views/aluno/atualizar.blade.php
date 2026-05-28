<!-- An unexamined life is not worth living. - Socrates -->

<div>
    <form action="{{ route('aluno.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $aluno->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <p>{{ $success }}</p>
        @endisset
    </form>
</div>
