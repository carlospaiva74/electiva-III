<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    public function categoria (){
        return $this->belongsTo('App\Models\Categorias','id_categoria');
    }

    public function fotos(){
    	return $this->hasMany(Fotos::class, 'id_producto', 'id');
    }

    public function portada(){
    	$fotos = $this->fotos;

    	if ($fotos->isEmpty()) {
    		return asset('img/img.jpg');
    	}else{
    		return asset($fotos[0]->foto);
    	}
    }
}
