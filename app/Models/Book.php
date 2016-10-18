<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $hidden = array('pivot');
    protected $table = 'books';
    protected $fillable = ['title', 'isbn', 'number_page', 'year_publication', 'edition', 'observations', 'price', 'avatar'];

    public function authors(){
        return $this->belongsToMany('App\Models\Author', 'authors_books', 'book_id', 'author_id');
    }

    public function periods()
       {
           return $this->belongsToMany('App\Models\Period', 'books_periods');
       }
}
