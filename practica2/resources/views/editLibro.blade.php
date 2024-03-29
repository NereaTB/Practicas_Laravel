@extends('home')

@section ('title', 'Editar Libro')


@section ('content')
<form action ="{{route ('editLibro')}}" method="POST">
    @csrf
    <label for="id">ID</label>
    <input type="number" name="id">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">
    <label for="autor">Autor</label>
    <input type="text" name="autor">
    <label for="fechaPublicacion">Fecha de Publicacion</label>
    <input type="date" name="fechaPublicacion">
    <button type="submit" >Editar Libro</button>
    </form>
    @endsection
