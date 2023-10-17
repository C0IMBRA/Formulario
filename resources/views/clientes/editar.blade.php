<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes - Editar</title>
</head>
<body>
    <form action="\clientes/editar/{{$cliente->id}}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{$cliente->nome}}">
        <br>
        <label for="idade">Idade</label>
        <input type="text" name="idade" value="{{$cliente->idade}}">
        <br>
        <label for="saldo">Saldo</label>
        <input type="text" name="saldo" value="{{$cliente->saldo}}">
        <br>
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" value="{{$cliente->sexo}}">
        <br>

        <button type="submit">Enviar</button>
    </form>

    
</body>
</html>