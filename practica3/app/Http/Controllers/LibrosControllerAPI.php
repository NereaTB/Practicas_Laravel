<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosControllerAPI extends Controller
{
    //Muestra todos los libros
    public function index(){
        return Libro::obtenerTodos();
    }

    public function store (Request $datosEnviados){
        return Libro::saveLibro(
            $datosEnviados->input('titulo'),
            $datosEnviados->input('autor'),
            $datosEnviados->input('fechaPublicacion')
        );
    }

    public function show($id){
        return Libro::getLibroID($id);
    }
}
