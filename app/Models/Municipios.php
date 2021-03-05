<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;

    public function parroquias () {
     	return $this->hasMany(Parroquias::class, 'id_municipio', 'id');    
    }
}
