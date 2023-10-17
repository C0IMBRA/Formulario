<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>

    <a href="http://localhost:8000/clientes/adicionar"><button type="button" style="background-color: #28a745 ; color: white;">Adicionar</button></a> <br><br>
    <table border="1">   
        <tr>
            <td>Codigo</td>
            <td>Nome</td>
            <td>Idade</td>
            <td>Saldo</td>
            <td>Sexo</td>
            <td>Ações</td>
        <tr>

        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->idade}}</td>
            <td>{{$cliente->saldo}}</td>
            <td>{{$cliente->sexo}}</td>
            <td>
                <a href="http://localhost:8000/clientes/visualizar/{{$cliente->id}}">
                    <button type="button" style="background-color: #17a2b8 ; color: white;" >Visualizar</button>
                </a>
                <a href="http://localhost:8000/clientes/editar/{{$cliente->id}}">
                    <button type="button" style="background-color: #ffc107 ; color: white;" >Editar</button>
                </a>
                <a href="http://localhost:8000/clientes/deletar/{{$cliente->id}}">
                    <button type="button" style="background-color: #dc3545 ; color: white;">Deletar</button>
                </a>
            </td>
        <tr>
        @endforeach   
    </table>
</body>
</html>