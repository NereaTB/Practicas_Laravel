@extends('home')

@section ('title', 'Crear Prestamo')


@section ('content')
<form action ="{{route ('addPrestamo')}}" method="POST">
    @csrf
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">
    <label for="fechaPrestamo">Fecha de Prestamo</label>
    <input type="date" name="fechaPrestamo">
    <button type="submit" >Guardar Prestamo</button>
    </form>
    @endsection
