@extends('home')

@section ('title', 'Detalle Prestamo')


@section ('content')
    <form action ="{{route ('detailsPrestamo')}}" method="POST">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <button type="submit" >Buscar Prestamo</button>
    </form>
@endsection
