<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    public function scopebuscarpor($query,$tipo,$texto){

        if(($tipo)&&($texto))
        {
            return $query->where($tipo,'LIKE','%'.$texto.'%')->get();
        }
<<<<<<< HEAD
        return $query->select('id','nombre','descripcion','precio','cantidad','marca','imagen','descuento','empresaProveedora')->get();
=======
        return $query->select('id','nombre','descripcion','precio','cantidad', 'marca', 'imagen', 'descuento', 'empresaProveedora')->get();
>>>>>>> 493f074545b4b609a74ebc23d40d32df16489fe7
    }
}
