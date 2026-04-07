<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>
</head>
<body>
    <h1>Cadastro Produto</h1>

    @if(session('success'))
        <p style="color:pink">{{ session('success') }}</p>
    @endif

    <form action="{{route('produto.salvar') }}" method="POST">
        @csrf
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome..."
            require value="{{ old('nome') }}">
        <br><br>

        <label for="quantidade">Quantidade: </label>
        <input type="text" name="quantidade" id="quantidade" placeholder="Quantidade..."
            required value="{{ old('Quantidade')}}"
        >

        <input type="submit" value= "Cadastrar">
    </form>

    @if($errors->any())
        <div style="color:blueviolet">
            <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $errom}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
</body>
</html>