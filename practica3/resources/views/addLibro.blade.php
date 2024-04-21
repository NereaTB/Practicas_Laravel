<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Libro</title>
</head>

<body>
    <h2>Crear libro</h2>
    <form action ="{{ route('addLibro') }}" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <label for="autor">Autor</label>
        <input type="text" name="autor">
        <label for="fechaPublicacion">Fecha de Publicacion</label>
        <input type="date" name="fechaPublicacion">
        <button type="submit">Guardar Libro</button>
    </form>
</body>

</html>
