@extends('index')
@section('conteudo')
<h1>Cadastro Livros</h1>

<form action="/emprestimos/cadastrar" method="post">
    @csrf
    Usuario: <select name="id_usuario">
        @foreach($usuarios as $valor)
        <option value="{{$valor->id}}">{{$valor->nome}}</option>
        @endforeach
    </select><br><br>

    Livro: <select name="id_livro">
        @foreach($livros as $valor)
        <option value="{{$valor->id}}">{{$valor->titulo}}</option>
        @endforeach
    </select><br><br>
    Data de emprestimo:<input type="date" name="data_emprestimo" value=""><br><br>
    Data de devolução:<input type="date" name="data_devolucao" value=""><br><br>

    <input type="hidden" name="id" value="{{$resultado ? $resultado->id : ''}}">
    <input type="submit" value="Salvar"><br>
</form>
<a href="/emprestimos">Voltar</a>
@endsection