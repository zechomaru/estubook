<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 'periodos';
    protected $fillable = ['carrera_id', 'descripcion', 'inicio', 'fin'];

    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
}
