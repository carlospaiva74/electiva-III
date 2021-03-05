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

	            <a class="step-item active current " href="#">
	            <div class="step-progress"><span class="step-count">2</span></div>
	            <div class="step-label"><i class="czi-package"></i>Dirección de entrega</div></a>

	            <a class="step-item  active current ">
	              
	            <div class="step-progress"><span class="step-count">3</span></div>
	            <div class="step-label"><i class="czi-card"></i>Caja</div></a>

	            <a class="step-item  ">

	            <div class="step-progress"><span class="step-count">4</span></div>
	            <div class="step-label"><i class="czi-check-circle"></i>Completado</div></a>
	        </div>
              <div id="cart-detalles">
              		<center><h4 class="mt-4 mb-4">Metodos de pagos</h4></center>
                <div class="accordion mb-2" id="payment-method" role="tablist">
                  <div class="card box-shadow">
                    <div class="card-header" role="tab">
                      <h3 class="accordion-heading"><a href="#card" data-toggle="collapse"><i class="czi-card font-size-lg mr-2 mt-n1 align-middle"></i>Pagar con tarjeta de crédito o débito<span class="accordion-indicator"><i data-feather="chevron-up"></i></span></a></h3>
                    </div>

                    <div class="collapse show" id="card" data-parent="#payment-method" role="tabpanel">
                      <div class="card-body">

                        <form action="{{route('carrito.pagar')}}" method="post" class="interactive-credit-card row" id="myCCForm">
                          @csrf
                          <input type="hidden" name="direccion" value="{{$direccion}}">
                          <input id="token" name="token" type="hidden" value="">
                          <div class="form-group col-sm-12">
                            <div class="card-wrapper"></div>
                            <div id="mensaje"></div>
                          </div>
                          <div class="form-group col-sm-6">
                            <input class="form-control" type="text" name="number" placeholder="Número de tarjeta" required id="numero">
                          </div>
                          <div class="form-group col-sm-6">
                            <input class="form-control" type="text" name="name" id="nombre" placeholder="Nombre" required value="{{Auth::user()->name}}">
                          </div>
                          <div class="form-group col-sm-3">
                            <input class="form-control" type="date" name="expiry" placeholder="12/<?php echo date('Y'); ?>" required id="expirar" >
                          </div>
                          <div class="form-group col-sm-3">
                            <input class="form-control" type="text" name="cvc" placeholder="CVC" required id="CVC">
                          </div>
                          <div class="col-sm-6">
                            <button type="submit" class="btn btn-outline-primary btn-block mt-0">Comprar ahora</button>
                          </div>                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
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