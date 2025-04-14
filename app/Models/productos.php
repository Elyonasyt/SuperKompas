<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'ID_Producto';
    public $timestamps = false; // Si no estás utilizando created_at y updated_at

    protected $fillable = [
        'Nombre_Producto', 'Descripcion', 'Precio', 'Unidades_Stock', 'ID_Proveedor'
    ];
}
