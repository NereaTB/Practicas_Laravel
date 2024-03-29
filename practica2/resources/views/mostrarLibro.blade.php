@extends('home')

@section ('title', 'Mostrar Libros')


@section ('content')
    @if (count ($libros) > 0)
        @foreach ($libros as $libro )
            <a href="/borrarLibro/{{$libro->id}}">
                <p id="{{$libro -> id}}">{{$libro -> titulo}} // {{$libro->autor}} // {{$libro->fechaPublicacion}}</p>
            </a>
        @endforeach
    @endif
@endsection
