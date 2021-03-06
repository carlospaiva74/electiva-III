<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    use HasFactory;

    public function estado(){
        return $this->belongsTo(Estados::class,'id_estado');
    }

    public function municipio(){
        return $this->belongsTo(Municipios::class,'id_municipio');
    }

    public function parroquia(){
        return $this->belongsTo(Parroquias::class,'id_parroquia');
    }
}
