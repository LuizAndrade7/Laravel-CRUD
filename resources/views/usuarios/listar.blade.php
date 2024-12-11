<h1>Lista de Usuários</h1>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Delete</th>
    </tr>
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->nome}}</td>
        <td>{{$usuario->email}}</td>
        <td><a href="/usuarios/remover/{{$usuario->id}}">Remover</a></td>
        <td><a href="/usuarios/cadastro/{{$usuario->id}}">Update</a></td>
    </tr>
    @endforeach
    <button><a href="/">Home</a></button>
    <button><a href="usuarios/cadastro">Cadastrar</a></button>
</table>