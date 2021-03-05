@extends('layouts.app')

@section('content')
	<div class="page-title-overlap bg-banner pt-4" style="background: #607d8b;">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Mi carrito</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <section class="col-lg-8">
           	@include('direcciones.banner')
            <div id="cart-detalles">
            	<div class="card">
            		<div class="card-body">
            			<div class="p-2">

                    <div class="row">
                      <div class="col-md-7">
                        <center><h4 class="h4 mb-2">Selecciona una dirección</h4></center><br>
                      </div>
                      <div class="col-md-5">
                        <a class="btn btn-outline-primary btn-shadow float-right " href="{{route('direcciones.create')}}">Registrar</a>
                      </div>
                    </div>

            				<br>
            				<form action="{{route('carrito.compra')}}" method="get">
            					<div class="table-responsive font-size-md">
                                    <table class="table table-hover mb-0">
                                      <thead>
                                        <tr>
                                          <th>Dirección</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php $check = 'Y'; ?>
                                        @foreach($direcciones as $key)
                                            <tr>
                                              <td class="py-3 align-middle">
                                                <div class="custom-control custom-radio">
                                                  <input class="custom-control-input" type="radio" id="ex-radio-{{$key->id}}" name="direccion" required="required"
                                                  value="{{$key->id}}"
                                                  <?php  
                                                    if ($check=='Y') {
                                                        echo 'checked="checked"';
                                                    }
                                                  ?>
                                                  >
                                                  <label class="custom-control-label" for="ex-radio-{{$key->id}}">
                                                       {{$key->direccion}}
                                                  </label>
                                                </div>
                                              </td>

                                               <?php $check = 'N'; ?>

                                              <td class="py-3 align-middle">

                                                <a class="nav-link-style mr-2 float-right" href="{{route('direcciones.edit',$key->id)}}" data-toggle="tooltip" title="" data-original-title="Editar"><i class="czi-edit"></i>
                                                </a>

                                                <!--<a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Eliminar">
                                                  <div class="czi-trash"></div>-->
                                                </a>
                                              </td>
                                            </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
            				    <center>
                                    <button type='submit' class="btn btn-primary btn-shadow btn-block mt-4"><i class="czi-card font-size-lg mr-2"></i>Continuar</button>
                                </center>
                            </form>            				
            			</div>
            		</div>
            	</div>
            </div>
        </section>

        @include('direcciones.resumen')

    </div>      
</div>
@endsection		