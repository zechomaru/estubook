<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id', 'tax', 'shipping', 'discount', 'status', 'total'];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function orderItems(){
        return $this->hasMany('App\Models\OrderItem', 'order_id');
    }


}
