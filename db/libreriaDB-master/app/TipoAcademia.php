<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAcademia extends Model
{
    protected $table ='tipos_academia';

    protected $fillable = ['descripcion'];

    public function academias(){
        return $this->hasMany(Academia::class, 'tipo_academia_id');
    }
}
