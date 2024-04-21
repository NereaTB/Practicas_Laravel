<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscar un libro</title>
</head>

<body>
    <h2>Buscar un libro</h2>
    <form action ="{{ route('detailsLibro') }}" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <button type="submit">Buscar Libro</button>
    </form>
</body>

</html>
