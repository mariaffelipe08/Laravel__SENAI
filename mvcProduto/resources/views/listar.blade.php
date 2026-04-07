<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produto</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NOME</th>
                <th>QUANTIDADE</th>
                <th>Atualizar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->quantidade}}</td>
                    <td>
                        <a href="{{route('produto.atualizar', $produto->id)}}">Atualizar</a>
                    </td>
                    <td> Faremos na próxima aula </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3"> Nenhum Produto Encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>