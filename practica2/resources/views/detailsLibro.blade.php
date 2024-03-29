@extends('home')

@section ('title', 'Detalle Libro')


@section ('content')
    <form action ="{{route ('detailsLibro')}}" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <button type="submit" >Buscar Libro</button>
    </form>
@endsection
