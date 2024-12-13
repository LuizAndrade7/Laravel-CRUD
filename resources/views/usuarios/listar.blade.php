@extends('index')
@section('conteudo')
<h1>Lista de Usuários</h1> <i class="fa-solid fa-pencil"></i>
<table class="table">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Remover</th>
        <th>Update</th>
    </tr>
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->nome}}</td>
        <td>{{$usuario->email}}</td>
        <td><a href="/usuarios/remover/{{$usuario->id}}"><i class="bi bi-trash"></i></a></td>
        <td><a href="/usuarios/cadastro/{{$usuario->id}}"><i class="bi bi-pencil"></i></a></td>

    </tr>
    @endforeach
    <button><a href="/">Home</a></button>
    <button><a href="usuarios/cadastro">Cadastrar</a></button>
</table>
@endsection