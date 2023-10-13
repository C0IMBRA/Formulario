<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>

    <ul>
        @foreach($clientes as $cliente)
            <li>{{ $cliente->nome }} - {{ $cliente->idade }} anos - Saldo: {{ $cliente->saldo }}</li>
        @endforeach
    </ul>
</body>
</html>
