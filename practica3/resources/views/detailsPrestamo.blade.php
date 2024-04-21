<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscar un prestamo</title>
</head>

<body>
    <h2>Buscar un préstamo</h2>
    <form action ="{{ route('detailsPrestamo') }}" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <button type="submit">Buscar Prestamo</button>
    </form>
</body>

</html>
