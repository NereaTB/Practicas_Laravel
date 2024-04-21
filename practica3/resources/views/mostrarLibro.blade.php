<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>libros disponibles</title>
</head>

<body>
    <h2>Libros disponibles</h2>
    @if (count($libros) > 0)
        @foreach ($libros as $libro)
            {{-- <a href="/borrarLibro/{{ $libro->id }}"> --}}
            <li>Id {{ $libro->id }}</li>
            <li>Titulo {{ $libro->titulo }}</li>
            <li>Autor {{ $libro->autor }}</li>
            <li>Fecha Publicacion {{ $libro->fechaPublicacion }}</li>
            </a>
            {{-- <p> Titulo {{$libro->titulo}}</p>
            <p> Autor {{$libro->autor->nombre}} </p> --}}
        @endforeach
    @else
        <p>No existen libros para mostrar</p>
    @endif
</body>

</html>
