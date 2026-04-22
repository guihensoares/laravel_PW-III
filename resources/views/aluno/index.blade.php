<!-- Be present above all else. - Naval Ravikant -->

<style>
    .container {
        max-width: 500px;
        margin: 2rem auto;
        padding: 20px;
        font-family: sans-serif;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color:rgb(40, 70, 167);
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color:rgb(33, 45, 136);
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        padding: 10px;
        border-radius: 4px;
        margin-top: 15px;
        text-align: center;
    }

    .aluno-list {
        margin-top: 30px;
        border-top: 2px solid #eee;
        padding-top: 20px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        background: #fff;
        margin-bottom: 5px;
        padding: 10px;
        border-left: 5px solidrgb(49, 40, 167);
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
</style>

<div class="container">
    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Aluno</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome completo" required>
        </div>

        <button type="submit">Adicionar Aluno</button>

        @isset($sucess)
            <div class="alert-success">
                {{ $sucess }}
            </div>
        @endisset
    </form>

    @isset($alunos)
        <div class="aluno-list">
            <h2>Alunos Cadastrados</h2>
            <ul>
                @foreach ($alunos as $aluno)
                    <li>{{ $aluno->nome }}</li>
                @endforeach
            </ul>
        </div>
    @endisset
</div>
