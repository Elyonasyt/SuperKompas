<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    // Si el nombre de la tabla no es plural o no sigue las convenciones de Laravel, se debe especificar.
    protected $table = 'personas'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'ID_Persona'; // Clave primaria de la tabla
    public $timestamps = false; // Si no usas created_at y updated_at

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'Nombre', 'Apellido_Paterno', 'Apellido_Materno',
        'Telefono', 'Correo', 'Direccion'
    ];
}
