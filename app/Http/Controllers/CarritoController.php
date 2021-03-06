<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

use App\Models\Compras;
use App\Models\Compras_detalles as Detalles;
use Auth;

class CarritoController extends Controller
{

    public function index(){
        $carrito = \Session::get('carrito');

        if ($carrito==NULL or $carrito=='') {
            $carrito=array();
        }

        $productos = array();

        foreach ($carrito as $key) {

            $producto = Productos::find($key['producto']);

            if (is_null($producto)==false) {

                $data = [
                    "id"       => $producto->id,
                    "producto" => $producto->producto,
                    "foto"     => $producto->portada(),
                    "precio"   => $producto->precio,
                    "cantidad" => $key['cantidad'],
                ];

                array_push($productos, $data);
            }
        }    

        return view('carrito',compact('productos'));
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

    public function compra(Request $request){

        if (is_null($request->direccion)) {
            return redirect()->back();
        }else{
            $total = DireccionesController::total();
            $direccion = $request->direccion;
            return view('compras',compact('total','direccion'));
        }
    }

    public function pagar(Request $request){

        $carrito = \Session::get('carrito');

        if ($carrito==NULL or $carrito=='') {
            $carrito=array();
        }

        if (count($carrito)==0) {
            return redirect()->route('carrito.index');
        }

        $code = generar_code(16);

        $compra = new Compras();
        $compra->id_user = Auth::user()->id;
        $compra->numero_compra = $code;
        $compra->id_direccion = $request->direccion;
        $compra->save();

        foreach ($carrito as $key) {
            $detalles = new Detalles();
            $detalles->id_compra = $compra->id;
            $detalles->id_producto = $key['producto'];
            $detalles->cantidad    = $key['cantidad'];
            $detalles->save();

            $producto = Productos::find($key['producto']);

            $producto->stock = $producto->stock - $key['cantidad'];
            $producto->save();
        }

        session(['carrito'=>NULL]);

        return redirect()->route('carrito.gracias',$compra->id);
    }

    public function gracias ($id){

        $compra = Compras::find($id);
        return view('gracias',compact('compra'));
    }
}
