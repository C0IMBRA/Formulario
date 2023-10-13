<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes - Adicionar</title>
</head>
<body>
    <form action="\clientes/adicionar" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="">
        <br>
        <label for="idade">Idade</label>
        <input type="text" name="idade" value="">
        <br>
        <label for="saldo">Saldo</label>
        <input type="text" name="saldo" value="">
        <br>

        <button type="submit">Enviar</button>
    </form>

    
</body>
</html>