<h1>Lista de Emprestimos</h1>
<table border="1">
    <tr>
        <th>Usuário</th>
        <th>Título</th>
        <th>Data de emprestimo</th>
        <th>Data de devolução</th>
        <th>Remover</th>
        <th>Update</th>
    </tr>
    @foreach ($emprestimos as $emprestimo)
    <tr>
        <td>{{isset($emprestimo->usuario) ? $emprestimo->usuario->nome : 'Sem Nome'}}</td>
        <td>{{isset($emprestimo->livro) ? $emprestimo->livro->titulo : 'Sem Titulo'}}</td>
        <td>{{ $emprestimo->data_emprestimo }}</td>
        <td>{{ $emprestimo->data_devolucao }}</td>
        <td><a href="/emprestimos/remover/{{$emprestimo->id}}">Remover</a></td>
        <td><a href="/emprestimos/cadastro/{{$emprestimo->id}}">Update</a></td>
    </tr>
    @endforeach

    <button><a href="emprestimos/cadastro">Cadastrar</a></button>
    <button><a href="/">Home</a></button>
</table>