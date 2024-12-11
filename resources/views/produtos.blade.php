@extends('index')

@section('meio')
Página de Produtos
<br><br>

<form action="/produtos/salvar" method="post">
    Nome: <input type="text" name="nome" value="">
    Quantidade: <input type="text" name="quantidade" value="">
    @csrf
    <input type="submit" name="" value="Salvar">
</form>

<table border="1">
    <tr>
        <td>Nome</td>
        <td>Quantidade</td>
        <td>Remover</td>
    </tr>
    @foreach($produtos as $valor)
    <tr>
        <td>{{$valor->nome}}</td>
        <td>{{$valor->quantidade}}</td>
        <td><a href='/produtos/remover/{{$valor->id}}'>(remover)</a></td>
    </tr>
    @endforeach
</table>
@endsection 