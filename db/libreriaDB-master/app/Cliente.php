<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nombre', 'email', 'apellido', 'rif', 'direccion', 'telefono'];

    public function facturas(){
        return $this->hasMany(Factura::class, 'cliente_id');
    }
}
