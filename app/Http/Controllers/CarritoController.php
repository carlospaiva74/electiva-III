<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class CarritoController extends Controller
{

    public function index(){
        return \Session::get('carrito');
    }

    public function add(Request $request){

    	if ($request->cantidad<=0) {
    		$request->cantidad = 1;
    	}

    	$data = [
    		'producto' => $request->producto, 
    		'cantidad' => $request->cantidad,
    	];

    	if (check_carrito($request->producto)) {
    		
    	}else{
            if ($request->producto>=1 && $request->producto!='') {
                $request->session()->push('carrito',$data);
            }
    		
    	}    	

    	return redirect()->back()->with('mensaje','Añadido al carrito con éxito');
    }

    public function remove(Request $request){
    	
        $carrito = \Session::get('carrito');

        if ($carrito==NULL or $carrito=='') {
            $carrito=array();
        }

        $nuevo_carrito = array();

        foreach ($carrito as $key) {
                        
            if ($key['producto']  != $request->producto) {                             
                array_push($nuevo_carrito, $key);
            }
        }

        session(['carrito'=>NULL]);

        foreach ($nuevo_carrito as $key) {
            $request->session()->push('carrito',$key);
        }

        return redirect()->back()->with('success','Producto eliminado del carrito');
    }

}
