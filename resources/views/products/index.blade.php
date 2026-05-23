<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Produtos</title>
</head>
<body>
    <h3>Lista de produtos </h3>
    <ul>
        @foreach ($products as $product)
        <li> {{$product['name']}} {{$product['price']}}
                <a href="{{ url('/products/update', ['id' => $product->id]) }}">Editar</a>
                <a href="{{ url('/products/delete', ['id' => $product->id]) }}">Deletar</a>
        </li>
        @endforeach

    </ul>
</body>
</html>