<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';
    protected $fillable = ['academia_id', 'modalidad_id', 'nombre', 'descripcion'];

    public function academia()
    {
        return $this->belongsTo(Academia::class);
    }

    public function modalidad(){
        return $this->belongsTo(Modalidad::class);
    }

    public function periodos(){
        return $this->hasMany(Periodo::class, 'carrera_id');
    }
}
