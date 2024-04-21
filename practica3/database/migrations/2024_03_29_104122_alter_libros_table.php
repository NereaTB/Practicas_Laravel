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
        Schema::table('libros', function (Blueprint $table) {
            $table->unsignedBigInteger('autor_id')->nullable();
            //Añadimos el campo autor_id que hace referencia al campo id de la tabla autores
            $table->foreign('autor_id')->references('id')->on('autores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->dropColumn('autor_id');
         });
    }
};
