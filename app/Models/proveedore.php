<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedore extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'contacto'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_proveedor');
    }
}
