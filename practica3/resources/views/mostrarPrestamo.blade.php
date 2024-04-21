@extends('home')

@section ('title', 'Mostrar Prestamos')


@section ('content')
    @if (count ($prestamos) > 0)
        @foreach ($prestamos as $prestamo )
        <p> Usuario {{$prestamo->user->name}}</p>
        <p> Titulo {{$prestamo->titulo}}</p>
        <p> Fecha Préstamo {{$prestamo->fecha_prestamo}} </p>
        <p> Fecha Devolución {{$prestamo->fecha_devolucion}} </p>
        <p> Disponible {{$prestamo->disponible}} </p>
        @endforeach
    @endif
@endsection
