<h1>Lista de livros</h1>
<table border="1">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Remover</th>
        <th>Update</th>
    </tr>
    @foreach ($livros as $livro)
    <tr>
        <td>{{$livro->titulo}}</td>
        <td>{{isset($livro->autor) ? $livro->autor->nome : 'Sem Autor'}}</td>
        <td><a href="/livros/remover/{{$livro->id}}">Remover</a></td>
        <td><a href="/livros/cadastro/{{$livro->id}}">Update</a></td>
    </tr>
    @endforeach

    <button><a href="livros/cadastro">Cadastrar</a></button>
    <button><a href="/">Home</a></button>
</table>