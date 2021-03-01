<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Http\Requests\CategoriasRequest;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::orderby('id','desc')->get();
        $i=1;
        return view('categorias.index',compact('categorias','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriasRequest $request)
    {
        $categoria = new Categorias();
        $categoria->nombre = $request->categoria;
        $categoria->save();

        return redirect()->route('categorias.index')->with('mensaje','Categoría registrada con éxito');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categorias::find($id);
        if (is_null($categoria)) {
            abort(404);
        }else{
            return view('categorias.edit',compact('categoria'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriasRequest $request, $id)
    {
        $categoria = Categorias::find($id);
        $categoria->nombre = $request->categoria;
        $categoria->save();        

        return redirect()->route('categorias.index')->with('mensaje','Categoría actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $validate = 0;

        $delete = Categorias::find($id);

        if ($validate==0 && is_null($delete)==false) {
            $delete->delete();
            return redirect()->route('categorias.index')->with('mensaje','Categoría eliminada con éxito');

        }else{

            return redirect()->route('categorias.index')->with('mensaje','No se puede eliminar la categoría: '.$delete->nombre. ' debido a que uno o más artículos están relacionado con esta categoría');
        }

    }
}
