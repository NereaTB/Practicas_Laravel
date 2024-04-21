<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;

class AutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Crear autores de ejemplo
        Autor::create([
            'nombre' => 'Jane Austen',
        ]);

        Autor::create([
            'nombre' => 'Miguel de Cervantes',
        ]);

        Autor::create([
            'nombre' => 'Ken Follet',
        ]);

        Autor::create([
            'nombre' => 'Agatha Christie',
        ]);
    }
}

