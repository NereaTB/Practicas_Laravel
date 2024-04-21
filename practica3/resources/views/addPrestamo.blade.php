<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear prestamo</title>
</head>

<body>
    <h2>Crear Préstamo</h2>
    <form action ="{{ route('addPrestamo') }}" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <label for="fechaPrestamo">Fecha de Prestamo</label>
        <input type="date" name="fechaPrestamo">
        <button type="submit">Guardar Prestamo</button>
    </form>
</body>

</html>
