<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalle_venta extends Model
{
    protected $table = 'detalle_venta'; // este es el nombre de la tabla en la base de datos

    protected $primaryKey = 'ID_Detalle'; // clave primaria personalizada (si aplica)

    public $timestamps = false; // si tu tabla NO tiene campos created_at y updated_at

    protected $fillable = [
        'ID_Venta',
        'ID_Producto',
        'Cantidad',
        'Precio_Unitario'
    ];
}
