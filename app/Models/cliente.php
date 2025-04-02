<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_cliente');
    }
}
