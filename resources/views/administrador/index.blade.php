<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

<div>
    <h2>Administrador</h2>
    <form action="{{ route('administrador.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf">

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

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

    <table border="1">
        <tr>
            <td>Nome do Admin</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>Cpf</td>
            <td>Usuario</td>
            <td>Senha</td>
            <td>Status</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($administradores)
                @foreach($administradores as $administrador)
                    <tr>
                        <td>
                            <p>{{ $administrador->nome }}</p>
                        </td>
                        <td>
                            <p>{{ $administrador->email }}</p>
                        </td>
                        <td>
                            <p>{{ $administrador->telefone }}</p>
                        </td>
                        <td>
                            <p>{{ $administrador->cpf }}</p>
                        </td>
                        <td>
                            <p>{{ $administrador->usuario }}</p>
                        </td>
                        <td>
                            <p>{{ $administrador->senha }}</p>
                        </td>
                        <td>
                            <p>{{ $administrador->status }}</p>
                        </td>
                        <td>
                            <form action="{{ route('administrador.remove', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('administrador.atualizar', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>