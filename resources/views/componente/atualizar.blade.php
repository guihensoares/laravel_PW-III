<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

<div>
    <form action="{{ route('componente.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $componente->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $componente->nome }}">

    <!-- continuar aqui -->

        <button type="submit">Salvar</button>
        @isset($success)
            <p>{{ $success }}</p>
        @endisset
    </form>
</div>