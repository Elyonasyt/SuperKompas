<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    protected $table = 'inventario';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['id_producto', 'cantidad_disponible', 'fecha_actualizacion'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
