<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

<div>
    <form action="{{ route('professor.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $professor->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $professor->nome }}">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $professor->telefone }}">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="{{ $professor->email }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <p>{{ $success }}</p>
        @endisset
    </form>
</div>
