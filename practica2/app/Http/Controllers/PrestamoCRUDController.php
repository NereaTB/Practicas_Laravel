<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoCRUDController extends Controller
{
    //Inserto el CONSTRUCTOR


    protected $prestamo;

    public function __construct(Prestamo $prestamo)
    {
        $this->prestamo = $prestamo;
    }

    //Añadir un préstamo

    //Primero hago el form donde tengo que insertar la información del prestamo cuando doy al boton prestar libro

    public function mostrarFormularioPrestamo()
    {
        return view('addPrestamo'); //Es el addPrestamo.blade.php
    }

    public function mostrarElFormularioDetails()
    {
        return view('detailsPrestamo'); //Es el detailsPrestamo.blade.php
    }

    public function mostrarFormularioFinalizar()
    {
        return view('finalizarPrestamo'); //Es el finalizarPrestamo.blade.php
    }

    public function addPrestamo(Request $datosEnviados)
    {
        return $this->prestamo->savePrestamo(
            $datosEnviados->input('titulo'),
            $datosEnviados->input('fechaPrestamo'),
            $datosEnviados->input('disponible')
        );
    }

    public function showPrestamos()
    {
        $allPrestamos = $this->prestamo->obtenerPrestamos();
        return view('mostrarPrestamo', ['prestamos' => $allPrestamos]);
    }

    public function detailsPrestamo(Request $datosEnviados)
    {

        $prestamo = Prestamo::getPrestamoTitulo($datosEnviados->input('titulo'))->first();
        if ($prestamo) {
            return $prestamo;
        }
        return "No existe ese Titulo de prestamo";
    }

    public function finalizarPrestamo(Request $datosEnviados)
    {
        return $this->prestamo->updatePrestamo(
            $datosEnviados->input('id'),
            $datosEnviados->input('titulo'),
            $datosEnviados->input('fechaDevolucion'),
        );
    }
}
