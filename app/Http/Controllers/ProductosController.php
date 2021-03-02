<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categorias;
use App\Models\Fotos;
use App\Http\Requests\ProductosRequest;
use Auth;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        $i=1;
        return view('productos.index',compact('productos','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::all();
        return view('productos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductosRequest $request)
    {
        $producto = new Productos();
        $producto->producto     = $request->producto;
        $producto->id_categoria = $request->categoria;
        $producto->precio       = $request->precio;
        $producto->stock        = $request->stock;
        $producto->save();

        if (is_null($request->foto)==false) {
            foreach ($request->foto as $key) {
                $foto = new Fotos();
                $foto->id_producto = $producto->id;
                $foto->foto = $key;
                $foto->save();
            }
        }

        return redirect()->route('productos.index')->with('mensaje','Producto registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    public function fotos(Request $request){

        $file    = $request->file('archivos');

        $code = generar_code(16);

        $name    = Auth::user()->id.$code;

        $path = \Storage::disk('fotos')->put($name,  \File::get($file));

        return 'img/fotos/'.$name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categorias::all();

        $producto = Productos::find($id);

        $fotos = Fotos::where('id_producto',$producto->id)->get();

        $array = array();

        foreach ($fotos as $key) {
            array_push($array, $key->foto);
        }

        session()->flashInput([
            'producto' => $producto->producto,
            'precio'   => $producto->precio,
            'stock'    => $producto->stock,
            'descripcion' => $producto->descripcion,
            'foto' => $array,
        ]);

        return view('productos.edit',compact('categorias','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductosRequest $request, $id)
    {
        $producto = Productos::find($id);
        $producto->producto     = $request->producto;
        $producto->id_categoria = $request->categoria;
        $producto->precio       = $request->precio;
        $producto->stock        = $request->stock;
        $producto->save();

        $fotos = Fotos::where('id_producto',$producto->id)->delete();

        if (is_null($request->foto)==false) {
            foreach ($request->foto as $key) {
                $foto = new Fotos();
                $foto->id_producto = $producto->id;
                $foto->foto = $key;
                $foto->save();
            }
        }

        return redirect()->route('productos.index')->with('mensaje','Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Productos::find($id);

        if (is_null($producto)==false) {
            
            $validate = 0;

            if ($validate==0) {
                $producto->delete();
                return redirect()->route('productos.index')->with('mensaje','Producto eliminado con éxito');
            }else{
                #Condición
            }

        }else{
            return redirect()->route('productos.index')->with('mensaje','Error al eliminar el producto');
        }
    }
}
