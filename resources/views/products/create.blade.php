<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação</title>
</head>

<body>
    <form action="{{url('/products/new')}}" method="POST">
        @csrf
        <label>Nome:</label>
        <input name="name" type="text" />
        <br>
        <label>Descrição:</label>
        <input name="description" type="textarea" />
        <br>
        <label>Quantidade:</label>
        <input name="quantity" type="number" />
        <br>
        <label>Preço:</label>
        <input name="price" type="number" />
        <br>
        <label>Tipo do produto:</label><br>
        <select name="type_id">
            <option value="">Selecione</option>
            {{-- ADICIONADO: percorre os tipos vindos do controller --}}
            @foreach($types as $type)
            <option value="{{ $type->id }}">
                {{ $type->name }}
            </option>
            @endforeach
        </select>
        <br><br>

        <br>
        <input type="submit" value="Salvar" />
    </form>
</body>

</html>