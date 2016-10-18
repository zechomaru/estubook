<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $table = "academies";

    protected $fillable =['type_academy_id', 'name', 'description', 'direction', 'phone', 'color', 'zip_code', 'avatar', 'slug'];


    public function type_academy(){
        return $this->belongsTo('App\Models\TypeAcademy');
    }

    public function careers(){
        return $this->hasMany('App\Models\Career', 'academy_id');
    }
}
