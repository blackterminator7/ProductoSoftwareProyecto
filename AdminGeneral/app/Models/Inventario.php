<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'establecimiento_id'];

    public function establecimientos()
    {
        return $this->HasMany('App\Models\Establecimiento');
    }
}
