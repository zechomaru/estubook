<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';
    protected $hidden = array('pivot');
    protected $fillable = ['academy_id', 'modality_id', 'name', 'description'];

    public function academy()
    {
        return $this->belongsTo('App\Models\Academy');
    }

    public function modality(){
        return $this->belongsTo('App\Models\Modality');
    }

    public function periods(){
        return $this->hasMany('App\Models\Period', 'career_id');
    }
}
