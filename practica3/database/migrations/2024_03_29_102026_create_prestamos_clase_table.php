<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prestamos_clase', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('fecha_prestamo');
            $table->boolean('devuelto')->default(false);

            //Creamos un nuevo campo que nos va servir para crear la CLAVE PRIMARIA
            //Será de tipo unsigned

            $table->unsignedBigInteger('libro_id');
            //Aquí ponemos la referencia
            $table->foreign('libro_id')->references('id')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
