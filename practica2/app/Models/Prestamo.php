<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamos'; //Indica a que tabla hace referencia
    protected $fillable = ['book_id', 'disponible']; //Indica que campos/ atributos queremos usar

    //Métodos

    public static function obtenerPrestamos()
    {
        return Prestamo::all(); //Es lo mismo que poner SELECT*FROM PRESTAMOS
    }


    public static function getPrestamoID($book_id)
    { //Buscamos prestamo por su id
        return Prestamo::find($book_id);
    }

    public static function getPrestamoTitulo($titulo)
    { //Buscamos prestamo por su titulo
        return Prestamo::where('titulo', '=', $titulo); //
    }


    public static function savePrestamo($titulo, $fecha_prestamo)
    {   //Guardamos un prestamo

        $prestamo = new Prestamo;
        $prestamo->titulo = $titulo;
        $prestamo->fecha_prestamo = $fecha_prestamo;
        $prestamo->disponible = false; //El libro pasa a no estar disponible
        $prestamo->save();

        return $prestamo;
    }

    public static function updatePrestamo($book_id, $titulo, $fecha_devolucion)
    {   //Actualizamos una devolución
        $prestamo = Prestamo::find($book_id);
        if (isset($prestamo)) {
            $prestamo->titulo = $titulo;
            $prestamo->fecha_devolucion = $fecha_devolucion; //Se actualiza la fecha devolución
            $prestamo->disponible = true; //El libro pasa a estar disponible
            $prestamo->save();
            return $prestamo;
        }
        return "No existe ese ID de prestamo";
    }

    public static function deletePrestamo($id)
    {
        $prestamo = Prestamo::find($id);
        if (isset($prestamo)) {
            $prestamo->delete();
            return "OK";
        }
        return "No existe ese ID del libro";
    }
}
