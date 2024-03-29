<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibroCRUDController extends Controller
{

    //Inserto el CONSTRUCTOR
    //Cada vez que pasemos por el controlador LibroCRUDController,
    //va a usar este constructor, donde tenemos el libro inicializado

    protected $libro;

    public function __construct(Libro $libro)
    {
        $this->libro = $libro;
    }

    //
    public function mostrarFormularioAdd()
    {
        return view('addLibro'); //Es el addLibro.blade.php
    }

    public function mostrarFormularioEdit()
    {
        return view('editLibro'); //Es el editLibro.blade.php
    }

    public function mostrarFormularioDetails()
    {
        return view('detailsLibro'); //Es el detailsLibro.blade.php
    }

    public function showLibros()
    {
        $allLibros = $this->libro->obtenerTodos();
        return view('mostrarLibro', ['libros' => $allLibros]);
    }

    public function addLibro(Request $datosEnviados)
    {
        return $this->libro->saveLibro(
            $datosEnviados->input('titulo'),
            $datosEnviados->input('autor'),
            $datosEnviados->input('fechaPublicacion')
        );
    }

    public function editLibro(Request $datosEnviados)
    {
        return $this->libro->updateLibro(
            $datosEnviados->input('id'),
            $datosEnviados->input('titulo'),
            $datosEnviados->input('autor'),
            $datosEnviados->input('fechaPublicacion')
        );
    }

    public function detailsLibro(Request $datosEnviados)
    {

        $libro = Libro::getLibroTitulo($datosEnviados->input('titulo'))->first();
        if ($libro) {
            return $libro;
        }
        return "No existe ese Titulo de libro";
    }
}
