<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $fillable = ['order_id', 'book_id', 'price', 'discount', 'quantity'];


    public function factura(){
        return $this->belongsTo('App\Models\Order');
    }

}
