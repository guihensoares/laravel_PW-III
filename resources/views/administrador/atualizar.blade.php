<!-- Very little is needed to make a happy life. - Marcus Aurelius -->

<div>
    <form action="{{ route('administrador.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $administrador->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $administrador->nome }}">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="{{ $administrador->email }}">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $administrador->telefone }}">
        
        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf" value="{{ $administrador->cpf }}">

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="{{ $administrador->usuario }}">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="{{ $administrador->senha }}">

        <label for="status">Status</label>
        <select name="status" id="status" type="text">
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
        </select>

        <button type="submit">Salvar</button>
        @isset($success)
            <p>{{ $success }}</p>
        @endisset
    </form>
</div>