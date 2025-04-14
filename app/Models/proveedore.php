<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedore extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'ID_Proveedor';
    public $timestamps = false;  // Si no tienes columnas `created_at` y `updated_at`

    protected $fillable = [
        'ID_Persona', 'Nombre_Proveedor',
    ];
}
