@extends('home')

@section ('title', 'Mostrar Prestamos')


@section ('content')
    @if (count ($prestamos) > 0)
        @foreach ($prestamos as $prestamo )
            <a href="/borrarPrestamo/{{$prestamo->id}}">
                <p id="{{$prestamo-> id}}">{{$prestamo -> titulo}} // {{$prestamo->fechaPrestamo}} // {{$prestamo->fechaDevolucion}}// {{$prestamo->disponible}}</p>
            </a>
        @endforeach
    @endif
@endsection
