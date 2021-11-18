<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_establecimiento', 'telefono', 'encargado', 'direccion' ];

    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario');
    }
}
