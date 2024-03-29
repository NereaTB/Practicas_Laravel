@extends('home')

@section ('title', 'Finzalizar Prestamo')


@section ('content')
<form action ="{{route ('finalizarPrestamo')}}" method="POST">
    @csrf
    <label for="id">ID</label>
    <input type="number" name="id">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">
    <label for="fechaDevolucion">Fecha de Devolucion</label>
    <input type="date" name="fechaDevolucion">
    <button type="submit" >Guardar Devolucion</button>
    </form>
    @endsection
