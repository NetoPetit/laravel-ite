<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Carros</title>
</head>
<body>
    <h1>Lista de Carros</h1>
    <ul>
        @foreach ($carros as $carro)
            <li>
                {{ $carro->marca }} - {{ $carro->modelo }} - 
                {{ $carro->cor }} - {{ $carro->ano_fabricacao }}
            </li>
        @endforeach
    </ul>
</body>
</html>
