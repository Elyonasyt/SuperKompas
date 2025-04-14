<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'ID_Venta';
    public $timestamps = false;

    protected $fillable = [
        'ID_Cliente',
        'Fecha_Venta',
        'Total_Venta',
    ];  
}
