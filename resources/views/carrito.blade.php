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
           	<div class="steps steps-light pt-2 pb-3 mb-5">
				<a class="step-item active current" href="#">
				<div class="step-progress"><span class="step-count">1</span></div>			
	            <div class="step-label"><i class="czi-cart"></i>Detalles</div></a>

	            <a class="step-item  " href="#">
	            <div class="step-progress"><span class="step-count">2</span></div>
	            <div class="step-label"><i class="czi-package"></i>Dirección de entrega</div></a>

	            <a class="step-item   ">
	              
	            <div class="step-progress"><span class="step-count">3</span></div>
	            <div class="step-label"><i class="czi-card"></i>Caja</div></a>

	            <a class="step-item  ">

	            <div class="step-progress"><span class="step-count">4</span></div>
	            <div class="step-label"><i class="czi-check-circle"></i>Completado</div></a>
	        </div>
              <div id="cart-detalles">
              		<?php $total = 0; ?>
              		@if(count($productos)==0)
	                    <center>
		                    <br><br><br><br>
		                    <i class="navbar-tool-icon czi-cart" style="font-size: 100px;"></i>
		                    <br>
		                    No hay nada en el carrito
	                  	</center>
	                @else
	           
	                	@foreach($productos as $key)
			               	<div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
		                      <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="{{route('portal.producto',$key['id'])}}" style="width: 10rem;">
		                          <img src="{{asset($key['foto'])}}" alt="" style="min-height: 150px; max-height: 150px; width: 100%;">
		                        </a>
		                        <div class="media-body pt-2">
		                          <h3 class="product-title font-size-base mb-2"><a href="{{route('portal.producto',$key['id'])}}">{{$key['producto']}}</a></h3>

		                          <div class="font-size-lg text-accent pt-2">
		                            {{money($key['precio'])}}  <small>x</small> {{$key['cantidad']}}
		                            <?php 
		                            	$total = $total + ($key['cantidad'] * $key['precio']);
		                             ?>
		                          </div>
		                        </div>                        
		                      </div>
		                      <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
		                        <form id="delete-cart-{{$key['id']}}" action="{{route('carrito.remove')}}" method="POST" style="display: none;">
		                          @csrf
		                          <input type="hidden" name="producto" value="{{$key['id']}}">
		                        </form>                        

		                        <a class="btn btn-link px-0 text-danger" type="button"><i class="czi-close-circle mr-2"></i><span class="font-size-sm" onclick="event.preventDefault();
		                            document.getElementById('delete-cart-<?php echo $key['id']; ?>').submit();">Eliminar</span>
		                        </a>
		                      </div>
		                    </div>
	                	@endforeach
	                	<center>
	                    	<a class="btn btn-primary btn-shadow btn-block mt-4" href="{{route('direcciones.index')}}"><i class="czi-card font-size-lg mr-2"></i>Continuar</a>
	                  </center>
                  	@endif
              </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          	<div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
                <div class="widget mb-3">
                <h2 class="widget-title text-center">TOTAL</h2>                    
              </div>
              <h3 class="font-weight-normal text-center my-2" id="total-compra">
                {{money($total)}}
              </h3>
            </div>
        </aside>  
    </div>      
</div>
@endsection		