<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finalizar un prestamo</title>
</head>

<body>
    <h2>Finalizar un préstamo</h2>
    <form action ="{{ route('finalizarPrestamo') }}" method="POST">
        @csrf
        <label for="id">ID</label>
        <input type="number" name="id">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <label for="fechaDevolucion">Fecha de Devolucion</label>
        <input type="date" name="fechaDevolucion">
        <button type="submit">Guardar Devolucion</button>
    </form>
</body>

</html>
