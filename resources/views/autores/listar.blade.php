@extends('index')
@section('conteudo')
<h1>Lista de Autores</h1>
<table class="table">
    <tr>
        <th>Nome</th>
        <th>Remover</th>
        <th>Update</th>
    </tr>
    @foreach ($autores as $autores)
    <tr>
        <td>{{$autores->nome}}</td>
        <td><a href="/autores/remover/{{$autores->id}}"><i class="bi bi-trash"></i></a></td>
        <td><a href="/autores/cadastro/{{$autores->id}}"><i class="bi bi-pencil"></i></a></td>
    </tr>
    @endforeach

    <button><a href="autores/cadastro">Cadastrar</a></button>
    <button><a href="/">Home</a></button>
</table>
@endsection