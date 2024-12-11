<h1>Cadastro usuários</h1>

<form action="/usuarios/cadastrar" method="post">
    @csrf
    Nome:<input type="text" name="nome" value="{{$resultado ? $resultado->nome : ''}}"><br><br>
    Email:<input type="email" name="email" value="{{$resultado ? $resultado->email : ''}}"><br><br>
    Senha:<input type="password" name="senha" value=""><br><br>

    <input type="hidden" name="id" value="{{$resultado ? $resultado->id : ''}}">
    <input type="submit" value="Salvar"><br>
</form>
<a href="/usuarios">Voltar</a>