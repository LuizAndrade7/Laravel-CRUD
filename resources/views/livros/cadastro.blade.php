@extends('index')
@section('conteudo')
<h1>Cadastro Livros</h1>

<form action="/livros/cadastrar" method="post">
    @csrf
    Título:<input type="text" name="titulo" value="{{$resultado ? $resultado->nome : ''}}"><br><br>
    Autor:  <select name="id_aut">
                @foreach($autores as $valor)
                <option value="{{$valor->id}}">{{$valor->nome}}</option>
                @endforeach
            </select>
    <input type="hidden" name="id" value="{{$resultado ? $resultado->id : ''}}">
    <input type="submit" value="Salvar"><br>
</form>
<a href="/livros">Voltar</a>
@endsection