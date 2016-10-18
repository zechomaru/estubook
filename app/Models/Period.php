<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = 'periods';
    protected $fillable = ['career_id', 'name', 'start', 'end'];

    public function career(){
        return $this->belongsTo('App\Models\Career');
    }
     public function books()
    {
        return $this->belongsToMany('App\Models\Book', 'books_periods');
    }
}
