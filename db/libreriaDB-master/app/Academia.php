<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Academia extends Model
{
    protected $table = "academias";

    protected $fillable =['tipo_academia_id', 'nombre', 'descripcion', 'informacion_extra'];

    public function tipo_academia(){
        return $this->belongsTo(TipoAcademia::class);
    }

    public function carreras(){
        return $this->hasMany(Carrera::class, 'academia_id');
    }
}
