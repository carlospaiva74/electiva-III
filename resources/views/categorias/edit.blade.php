@extends('layouts.admin.app')

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
    <li class="breadcrumb-item" aria-current="page"><span><a href="{{route('categorias.index')}}">Categorías</a></span></li>
    <li class="breadcrumb-item" aria-current="page"><span>Editar</span></li>
@endsection

@section('css')

@endsection

@section('content')
<div class="row layout-spacing layout-top-spacing feather-icon">
    <div id="font-icon_feather" class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area bx-top-6">
                <div class="icon-section">
                    <div class="row">
                        <div class="col-xl-12">

                            <a href="{{ route('categorias.index') }}" class="ml-1 btn btn-dark float-left rounded-circle" data-toggle="tooltip"
                                data-placement="right" title="Volver">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                            </a>
                            
                            <center><h4>                                
                                Editar categoría                                
                            </h4></center>
                            <hr>

                            <form action="{{route('categorias.update',$categoria->id)}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="id" value="{{$categoria->id}}">
                                <div class="mb-3 h6">
                                    <strong>Los campos con un <span class="text-danger">*</span> son obligatorios</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6>Categoría <strong class="text-danger">*</strong></h6>
                                            <input type="text" name="categoria" 
                                            class="form-control @error('categoria') is-invalid @enderror"
                                             placeholder="Categoría" 
                                             maxlength="60" 
                                             required="required" 
                                             value="{{$categoria->nombre}}" 
                                            >
                                            @error('categoria')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <br>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary float-right">Actualizar</button>
                                    </div>
                                </div>
                            </form>                                         
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
</div>
@endsection
