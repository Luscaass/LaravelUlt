<h1>Dados de uma Mensagem:</h1>
<br>
<h2>{{$mensagem->titulo}}</h2>
<h2>{{$mensagem->autor}}</h2>
<h2>{{$mensagem->texto}}</h2>
<h2>{{$mensagem->created_at}}</h2>
<h2>{{$mensagem->updated_at}}</h2>
<br>

    <a href="/mensagens/{{$mensagem->id}}/edit">Editar</a>
    <br>
    <a href="/mensagens/{{$mensagem->id}}/delete">Deletar</a>