<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAcademy extends Model
{
    protected $table ='type_academies';

    protected $fillable = ['name'];


    public function academies(){
        return $this->hasMany('App\Models\Academy');
    }
}
