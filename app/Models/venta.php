<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['id_cliente', 'fecha_venta', 'total_venta'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class, 'id_venta');
    }
}
