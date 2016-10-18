<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = ['name', 'lastname', 'birthdate'];

    public function books(){
        return $this->belongsToMany('App\Models\Book', 'authors_books', 'author_id', 'book_id');
    }
}
