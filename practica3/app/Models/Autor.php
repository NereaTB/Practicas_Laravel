<?php

namespace App\Models;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Model;



class Autor extends Model
{

    protected $table = 'autores';

    public function libro()
    {
        return $this->hasMany(Libro::class);
    }
}
