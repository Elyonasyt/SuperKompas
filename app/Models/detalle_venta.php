<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalle_venta extends Model
{

    protected $table = 'detalle_venta';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['id_venta', 'id_producto', 'cantidad', 'precio_unitario'];

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
