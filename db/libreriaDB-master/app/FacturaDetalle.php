<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaDetalle extends Model
{
    protected $table = 'factura_detalles';
    protected $fillable = ['factura_id', 'descripcion', 'precio_unitario', 'descuento', 'cantidad', 'subtotal'];

    public function factura(){
        return $this->belongsTo(Factura::class);
    }
}
