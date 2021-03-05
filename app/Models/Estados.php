<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;

    public function municipios () {
     	return $this->hasMany(Municipios::class, 'id_estado', 'id');    
    }
}
