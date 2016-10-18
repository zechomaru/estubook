<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['cliente_id', 'forma_pago_id', 'numero', 'impuesto', 'costo_envio', 'descuento', 'total', 'fecha'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function forma_pago(){
        return $this->belongsTo(FormaPago::class);
    }

    public function detalles(){
        return $this->hasMany(FacturaDetalle::class, 'factura_id');
    }

    public function pagos(){
        return $this->hasMany(Pago::class, 'factura_id');
    }
}
