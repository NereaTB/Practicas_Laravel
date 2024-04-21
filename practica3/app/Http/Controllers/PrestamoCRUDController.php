<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrestamoCRUDController extends Controller
{
    //Inserto el CONSTRUCTOR


    protected $prestamo;

    public function __construct(Prestamo $prestamo)
    {
        $this->prestamo = $prestamo;
        $this->middleware('auth'); // Agrega autenticación a todas las funciones del controlador
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
        $user = Auth::user(); // Obtener el usuario autenticado
        $prestamo = new Prestamo();
        $prestamo->titulo = $datosEnviados->input('titulo');
        $prestamo->fecha_prestamo = $datosEnviados->input('fechaPrestamo');
        $prestamo->user_id = $user->id; // Asociar el préstamo con el usuario autenticado
        $prestamo->save();

        return "Prestamo guardado con éxito";
    }

    public function showPrestamos()
    {
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Por favor, inicia sesión para ver esta página.');
        }

        $user = Auth::user();

        if ($user->hasRole('admin')) {
            // Si el usuario es administrador, obtener todos los préstamos
            $prestamos = Prestamo::with('user')->get();
        } else {
            // Si el usuario es normal, obtener solo sus préstamos
            $prestamos = $user->prestamos;
        }

        return view('mostrarPrestamo', ['prestamos' => $prestamos]);
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
        $prestamo = Prestamo::findOrFail($datosEnviados->input('id'));
        // Verificar si el préstamo pertenece al usuario autenticado
        if ($prestamo->user_id === Auth::id()) {
            $prestamo->fecha_devolucion = $datosEnviados->input('fechaDevolucion');
            $prestamo->save();
            return "Prestamo finalizado con éxito";
        } else {
            return "Error";
        }
    }
}
