<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'precio', 'id_proveedor'];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    public function inventario()
    {
        return $this->hasOne(Inventario::class, 'id_producto');
    }

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class, 'id_producto');
    }
}
