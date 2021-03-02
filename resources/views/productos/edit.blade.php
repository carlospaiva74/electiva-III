@extends('layouts.admin.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{route('productos.index')}}">Productos</a></li>
    <li class="breadcrumb-item active" aria-current="page"><span>Editar</span></li>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dt-global_style.css')}}">
@endsection

@section('content')
    <div class="row layout-spacing layout-top-spacing feather-icon">
    <div id="font-icon_feather" class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area bx-top-6">
                <div class="icon-section">
                    <div class="row">
                        <div class="col-xl-12">

                            <a href="{{ route('productos.index') }}" class="ml-1 btn btn-dark float-left rounded-circle" data-toggle="tooltip"
                                data-placement="right" title="Volver">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                            </a>
                            
                            <center><h4>                                
                                Editar producto                               
                            </h4></center>
                            <hr>

                            <form action="{{route('productos.update',$id)}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <div class="mb-3 h6">
                                    <strong>Los campos con un <span class="text-danger">*</span> son obligatorios</strong>
                                </div>
                                
                                @include('productos.input')


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

@section('script')
    <script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('descripcion');
        var df_img = '<?php echo asset('img/img.png') ?>';
        var df_route_cargar = '<?php echo route('productos.fotos'); ?>';
    </script>
    <script type="text/javascript" src="{{asset('js/fotos.js')}}"></script>
@endsection