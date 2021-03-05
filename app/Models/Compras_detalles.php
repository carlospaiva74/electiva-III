<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras_detalles extends Model
{
    use HasFactory;

    public function producto () {
        return $this->belongsTo('App\Models\Productos','id_producto');
    }
}
