@extends('layouts.admin.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page"><span>Productos</span></li>
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
                            <div class="row">
                                <div class="col">
                                    <h4 class="mt-2">Productos</h4>
                                </div>
                                <div class="col">
                                    <a href="{{route('productos.create')}}" class="btn btn-primary mb-2 float-right">Registrar</a>
                                </div>
                            </div>
                            
                           
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%; text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Precio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($productos as $key)
                                        <tr>
                                            <td style="font-size: 18px;">{{$i++}}</td>
                                            <td style="font-size: 18px;">{{$key->producto}}</td>
                                            <td style="font-size: 18px;">{{money($key->precio)}}</td>
                                            <td>

                                                <a href="{{route('productos.edit',$key->id)}}" 
                                                class="bs-tooltip" 
                                                data-toggle="tooltip" data-placement="bottom"
                                                 title="Editar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                </a>


                                                <a href="javascript:eliminar('{{route('productos.destroy',$key->id)}}','{{$key->producto}}')"
                                                    class="bs-tooltip" 
                                                    data-toggle="tooltip mr-5" data-placement="bottom"
                                                    title="Eliminar"

                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach             
                                    </tbody>
                                    
                                </table>
                            </div>                           
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    
    <form id="destroy-form" action="#" method="POST" style="display: none;">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
    </form>

    <script type="text/javascript" src="{{asset('js/datatables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/table-data.js')}}"></script>
    <script type="text/javascript">
        table_data('#zero-config');
    </script>

    <script type="text/javascript">
        function eliminar (link,name){
            swal({   
                title: "¿Estás seguro?",
                text: "¿Deseas eliminar el producto: "+name+"  ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: false 
            }, function(isConfirm){
                if (isConfirm) {
                    $('#destroy-form').attr('action',link);
                    $('#destroy-form').submit();
                } else {
                    swal("Cancelado", "Tu producto "+name+" no fue eliminado", "error");
                }
            });
        }
    </script>
@endsection