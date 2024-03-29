@extends('home')

@section ('title', 'Crear Libro')


@section ('content')
<form action ="{{route ('addLibro')}}" method="POST">
    @csrf
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">
    <label for="autor">Autor</label>
    <input type="text" name="autor">
    <label for="fechaPublicacion">Fecha de Publicacion</label>
    <input type="date" name="fechaPublicacion">
    <button type="submit" >Guardar Libro</button>
    </form>
    @endsection

