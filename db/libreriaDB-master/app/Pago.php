<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';
    protected $fillable = ['forma_pago_id', 'factura_id', 'monto', 'estatus', 'nro_transaccion', 'banco'];

    public function factura(){
        return $this->belongsTo(Factura::class);
    }

    public function forma(){
        return $this->belongsTo(FormaPago::class);
    }

}
