<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    protected $table = 'inventario';

    protected $primaryKey = 'ID_Inventario';

    public $timestamps = false; // No tiene created_at ni updated_at

    protected $fillable = [
        'ID_Producto',
        'Cantidad_Disponible',
        'Fecha_Actualizacion',
    ];
}
