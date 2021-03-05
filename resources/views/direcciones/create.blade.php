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
            				<center><h4 class="h4 mb-2">Ingrese su dirección</h4></center>
            				<br>
            				<form action="{{route('direcciones.store')}}" method="post">
            					@csrf
            					@include('direcciones.input')
	            				<div class="row">
	                                <div class="col">
	                                    <button type="submit" class="btn btn-primary float-right">Registrar</button>
	                                </div>
	                            </div>
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

@section('script')
	<script type="text/javascript">
		var estados = <?php echo $json; ?>
	</script>
	<script type="text/javascript" src="{{asset('js/ubicaciones.js')}}"></script>
@endsection