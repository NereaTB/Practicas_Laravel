<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroCRUDController;
use App\Http\Controllers\PrestamoCRUDController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Controller::class, 'home'])->name('home');

//Rutas para Libro
Route::get('/addLibro', [LibroCRUDController::class, 'mostrarFormularioAdd'])->name('FormularioAddLibro');

Route::post('/addLibroPost', [LibroCRUDController::class, 'addLibro'])->name('addLibro');

Route::get('/showLibros', [LibroCRUDController::class, 'showLibros'])->name('mostrarFormularioAdd');

Route::get('/editLibro', [LibroCRUDController::class, 'mostrarFormularioEdit'])->name('FormularioEditLibro');

Route::post('/editLibroPost', [LibroCRUDController::class, 'editLibro'])->name('editLibro');

Route::get('/detailsLibro', [LibroCRUDController::class, 'mostrarFormularioDetails'])->name('FormularioDetailsLibro');

Route::post('/detailsLibroPost', [LibroCRUDController::class, 'detailsLibro'])->name('detailsLibro');

//Rutas para Prestamo
Route::get('/addPrestamo', [PrestamoCRUDController::class, 'mostrarFormularioPrestamo'])->name('FormularioPrestamoLibro');

Route::post('/addPrestamoPost', [PrestamoCRUDController::class, 'addPrestamo'])->name('addPrestamo');

Route::get('/showPrestamos', [PrestamoCRUDController::class, 'showPrestamos'])->name('mostrarFormularioPrestamo');

Route::get('/detailsPrestamo', [PrestamoCRUDController::class, 'mostrarElFormularioDetails'])->name('FormularioDetailsPrestamo');

Route::post('/detailsPrestamoPost', [PrestamoCRUDController::class, 'detailsPrestamo'])->name('detailsPrestamo');

Route::get('/finalizarPrestamo', [PrestamoCRUDController::class, 'mostrarFormularioFinalizar'])->name('FormularioFinalizarPrestamo');

Route::post('/finalizarPrestamoPost', [PrestamoCRUDController::class, 'finalizarPrestamo'])->name('finalizarPrestamo');


