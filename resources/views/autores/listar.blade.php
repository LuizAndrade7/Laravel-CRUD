<h1>Lista de Autores</h1>
<table border="1">
    <tr>
        <th>Nome</th>
    </tr>
    @foreach ($autores as $autores)
    <tr>
        <td>{{$autores->nome}}</td>
        <td><a href="/autores/remover/{{$autores->id}}">Remover</a></td>
        <td><a href="/autores/cadastro/{{$autores->id}}">Update</a></td>
    </tr>
    @endforeach

    <button><a href="autores/cadastro">Cadastrar</a></button>
    <button><a href="/">Home</a></button>
</table>