<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento'];

    public function libros(){
        return $this->belongsToMany(Libro::class, 'autores_libros', 'autor_id', 'libro_id');
    }
}
