<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = 'modalidades';
    protected $fillable = ['descripcion'];

    public function carreras(){
        return $this->hasMany(Carrera::class, 'modalidad_id');
    }
}
