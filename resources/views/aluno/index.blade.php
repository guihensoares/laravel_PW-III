<!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
<style>
    body {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        color: white;
        font-family: Arial, Helvetica, sans-serif
    }

    .container {
        width: 100%;
        max-width: 500px;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #131313;
        padding: 20px;
        border-radius: 10px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
    }

    label {
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 10px;
        outline: none;
        font-size: 1rem;
        background: #f1f5f9;
    }

    input:focus {
        border: 2px solid lightgreen;
    }

    button {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 10px;
        background: lightgreen;
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        background: rgb(88, 146, 88);
        transform: translateY(-2px);
    }

    .alunos {
        margin: 5px;
        width: 100%;
        background: #ffffff15;
        border: 1px solid #ffffff20;
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 10px;
    }

    .sucess {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>

<div class="container">
    <h2>Alunos</h2>
    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
        @isset($success)
            <div class="sucess">
                <p>{{ $success }}</p>
            </div>

        @endisset
    </form>

    @isset($alunos)
            @foreach($alunos as $aluno)
            <div class="alunos">
                <h3>{{ $aluno->nome }}</h3>
            </div>
            @endforeach
    @endisset
</div>