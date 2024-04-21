<?php

namespace App\Http\Controllers;


class UserController extends Controller

{
    public function mostrarMisPrestamos()
    {
        // Obtener el usuario autenticado
        $user = Auth()->user();

        // Obtener los préstamos del usuario
        $prestamos = $user->prestamo;

        // Devolver los préstamos del usuario a la vista
        return view('prestamos.index', ['prestamos' => $prestamos]);
    }
}
