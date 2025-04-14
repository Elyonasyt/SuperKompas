<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false; // ✅ ESTA LÍNEA ES CLAVE

    protected $fillable = ['id_persona'];
}
