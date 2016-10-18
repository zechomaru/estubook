<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{

    protected $table = 'libros';
    protected $fillable = ['titulo', 'isbn', 'numero_paginas', 'ano_publicacion', 'edicion', 'observaciones', 'precio'];

    public function autores(){
        return $this->belongsToMany(Autor::class, 'autores_libros', 'autor_id', 'libro_id');
    }
}
