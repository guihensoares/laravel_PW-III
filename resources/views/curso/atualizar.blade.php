<!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

<div>
    <form action="{{ route('curso.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $curso->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $curso->nome }}">

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
</div>
