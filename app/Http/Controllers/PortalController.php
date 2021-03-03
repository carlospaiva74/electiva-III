<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class PortalController extends Controller
{
    public function index(Request $request){
    	
    	$buscar = $request->buscar;

    	if ($buscar=='') {
    		$productos = Productos::orderBy('id','DESC')->get();
    	}else{
    		$productos = Productos::where('producto','LIKE', '%'.$buscar.'%')->orderBy('id','DESC')->get();
    	}
    	

    	return view('welcome',compact('productos','buscar'));
    }

    public function single($id){
        $producto = Productos::find($id);

        if (is_null($producto)) {
            abort(404);
        }else{
            return view('single',compact('producto'));
        }
    }
}
