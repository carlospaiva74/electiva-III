<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direcciones;
use App\Models\Estados;
use Auth;

use App\Http\Requests\DireccionesRequest;

class DireccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = Direcciones::where('id_user',Auth::user()->id)->get();

        if ($direcciones->count()==0) {
            return redirect()->route('direcciones.create');
        }else{
            return view('direcciones.index',compact('direcciones'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estados::all();
        $json = $this->ubicaciones($estados);
        return view('direcciones.create',compact('estados','json'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DireccionesRequest $request)
    {   
        $direccion = new Direcciones();
        $direccion->id_user = Auth::user()->id;
        $direccion->nombre = $request->nombre;
        $direccion->telefono = $request->telefono;
        $direccion->id_estado = $request->estado;
        $direccion->id_municipio = $request->municipio;
        $direccion->id_parroquia = $request->parroquia;
        $direccion->direccion = $request->direccion;
        $direccion->save();

        $direcciones = Direcciones::where('id_user',Auth::user()->id)->count();

        if ($direcciones<=1) {
            return redirect()->route('direcciones.index')->with('mensaje','Dirección registrada con éxito');
        }else{
            return redirect()->route('direcciones.index')->with('mensaje','Dirección registrada con éxito');
        }
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
        $direccion = Direcciones::find($id);
        $estados = Estados::all();

        session()->flashInput([

            'nombre'           => $direccion->nombre,
            'estado'           => $direccion->id_estado,
            'municipio'        => $direccion->id_municipio,
            'parroquia'        => $direccion->id_parroquia,
            'direccion'        => $direccion->direccion,
            'telefono'         => $direccion->telefono,
        ]);

        $json = $this->ubicaciones($estados);
        return view('direcciones.edit',compact('id','estados','json'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DireccionesRequest $request, $id)
    {   
        $direccion = Direcciones::find($id);
        $direccion->nombre = $request->nombre;
        $direccion->telefono = $request->telefono;
        $direccion->id_estado = $request->estado;
        $direccion->id_municipio = $request->municipio;
        $direccion->id_parroquia = $request->parroquia;
        $direccion->direccion = $request->direccion;
        $direccion->save();

        return redirect()->route('direcciones.index')->with('mensaje','Dirección actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
