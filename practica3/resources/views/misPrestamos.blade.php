<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mis Préstamos</title>
</head>

<body>
    <h2>Mis Préstamos</h2>
    <ul>
        {{-- Verifica si $prestamos está vacío --}}
        @if ($prestamos->isEmpty())
            <li>Este usuario no tiene préstamos</li>
        @else
            {{-- Itera sobre los préstamos --}}
            @foreach ($prestamos as $prestamo)
                <li>Titulo {{ $prestamo->titulo }}</li>
                <li>Fecha prestamo {{ $prestamo->fecha_prestamo }}</li>
                <li>Fecha devolución {{ $prestamo->fecha_devolucion }}</li>
            @endforeach
        @endif
    </ul>
</body>

</html>
