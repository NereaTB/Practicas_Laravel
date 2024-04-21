<?php

namespace App\Models;


use App\Models\Autor;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros'; //Indica a que tabla hace referencia
   // protected $fillable = ['titulo', 'autor']; //Indica que campos/ atributos queremos usar

   //Para hacer el JOIN que nos hace Laravel

   //Un libro pertenece a un autor
   public function autor(){
        return $this->belongsTo(Autor::class);
   }

   //Un libro tiene muchos prestamos
   public function prestamo(){
    return $this->hasMany(Prestamo::class);
    }

    //Métodos

    public static function obtenerTodos()
    {
        // El static nos sirve para usar la función sin tener que instanciar el objeto
        return Libro::all(); //Es lo mismo que poner SELECT*FROM LIBROS
    }


    public static function getLibroID($id)
    { //Buscamos libro por su id
        return Libro::find($id); //Find solo me sirve para buscar por la clave primaria
    }

    public static function getLibroTitulo($titulo)
    { //Buscamos libro por su titulo
        return Libro::where('titulo', '=', $titulo); //
    }

    public static function saveLibro($titulo, $autor, $fechaPublicacion)
    {
        //OPCION 1
        //Libro::create([
        //  'titulo' => $titulo,
        //'autor' => $autor,
        //'fechaPublicacion' => $fechaPublicacion,
        //]);

        //OPCIÓN 2 Es Mejor
        $libro = new Libro;
        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->fechaPublicacion = $fechaPublicacion;
        $libro->save();

        return $libro;
    }

    public static function updateLibro($id, $titulo, $autor, $fechaPublicacion)
    {
        $libro = Libro::find($id);
        if (isset($libro)) {
            $libro->titulo = $titulo;
            $libro->autor = $autor;
            $libro->fechaPublicacion = $fechaPublicacion;
            $libro->save();
            return $libro;
        }
        return "No existe ese ID del libro";
    }

    public static function deleteLibro($id)
    {
        $libro = Libro::find($id);
        if (isset($libro)) {
            $libro->delete();
            return "OK";
        }
        return "No existe ese ID del libro";
    }
}
