<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    protected $table = 'formas_pago';
    protected $fillable = ['forma', 'info_extra'];

    public function facturas(){
        return $this->hasMany(Factura::class, 'forma_pago_id');
    }

    public function pagos(){
        return $this->hasMany(Pago::class, 'forma_pago_id');
    }
}
