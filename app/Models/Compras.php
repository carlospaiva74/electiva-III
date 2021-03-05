<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    public function detalles () {
     	return $this->hasMany(Compras_detalles::class, 'id_compra', 'id');    
    }
}
