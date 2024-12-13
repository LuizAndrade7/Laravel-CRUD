@extends('index')
@section('conteudo')
<h1>Cadastro Autores</h1>

<form action="/autores/cadastrar" method="post">
    @csrf
    Nome:<input type="text" name="nome" value="{{$resultado ? $resultado->nome : ''}}"><br><br>

    <input type="hidden" name="id" value="{{$resultado ? $resultado->id : ''}}">
    <input type="submit" value="Salvar"><br>
</form>
<a href="/autores">Voltar</a>
@endsection