<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes - Visualizar</title>
</head>
<body>
   
    <label for="nome">Nome</label>
    <input type="text" name="nome" disabled value="{{$cliente->nome}}">
    <br><br>
    <label for="idade">Idade</label>
    <input type="text" name="idade" disabled value="{{$cliente->idade}}">
    <br><br>
    <label for="saldo">Saldo</label>
    <input type="text" name="saldo" disabled value="{{$cliente->saldo}}">
    <br><br>
    <label for="sexo">Sexo</label>
    <input type="text" name="sexo" disabled value="{{$cliente->sexo}}">

</body>
</html>