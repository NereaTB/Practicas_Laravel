<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class PrestamoWebController extends Controller
{
    public function misPrestamos()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Obtener los préstamos asociados al usuario autenticado
        $prestamos = $user->prestamos;

        return view('misPrestamos', ['prestamos' => $prestamos]);
    }
}
