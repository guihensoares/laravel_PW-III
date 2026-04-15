<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap');

    .form-aluno {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        max-width: 360px;
        padding: 2rem;
        border: 0.5px solid #ddd;
        border-radius: 12px;
        font-family: 'Inter', sans-serif;
        background: #fff;
    }

    .form-aluno label {
        font-size: 12px;
        font-weight: 500;
        color: #555;
        margin-bottom: 2px;
        display: block;
    }

    .form-aluno input {
        width: 100%;
        padding: 8px 10px;
        font-size: 14px;
        font-family: inherit;
        border: 0.5px solid #ccc;
        border-radius: 8px;
        background: #f9f9f7;
        color: #1a1a1a;
        outline: none;
        box-sizing: border-box;
        margin-bottom: 0.5rem;
    }

    .form-aluno input:focus {
        border-color: #378ADD;
        box-shadow: 0 0 0 3px rgba(55, 138, 221, 0.1);
        background: #fff;
    }

    .form-aluno button {
        padding: 9px;
        font-size: 13px;
        font-weight: 500;
        font-family: inherit;
        background: #185FA5;
        color: #e6f1fb;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 0.25rem;
    }

    .form-aluno button:hover { background: #0C447C; }

    .form-aluno h1 {
        font-size: 13px;
        font-weight: 500;
        color: #3B6D11;
        background: #eaf3de;
        border: 0.5px solid #639922;
        border-radius: 8px;
        padding: 8px 12px;
        margin: 0.25rem 0 0;
    }
</style>

<form class="form-aluno" action="{{ route('aluno.adicionar') }}" method="post">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">

    <button type="submit">Salvar</button>
    @isset($sucesso)
        <h1>{{ $sucesso }}</h1>
    @endisset
</form>