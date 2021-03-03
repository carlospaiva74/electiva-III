
@extends('layouts.app')

@section('content')
    
   @if($buscar=='')
   <section class="">
        <div class="">
            <div class="px-lg-5" style="
                    background: 
                        linear-gradient(
                            rgba(0, 0, 0, 0.40), 
                            rgba(0, 0, 0, 0.40)
                        ),
                        
                        url('{{asset('img/banner.jpg')}}');
                        background-size: 100% 100%;
                        background-repeat: no-repeat;">
                <div class="d-lg-flex justify-content-between align-items-center pl-lg-4">
                          
                    <div class="position-relative mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1 mt-5" style="max-width: 42rem; z-index: 10;">
                        <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap ">
                            <h2 class="text-light font-weight-light">
                                Tienda para ELECTIVA III
                            </h2>
                            <h5 class="text-light font-weight-light">
                                Carlos Paiva, Trayecto IV - Informática
                            </h5>                              
                        </div>
                    </div>

                </div>
            </div>            
        </div>
   </section>
   @else
        <div class="page-title-overlap pt-4" style="background: #607d8b;">
          <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
              <h1 class="h3 text-light mb-0">Resultado para la busqueda: {{$buscar}}</h1>
            </div>
          </div>
      </div>
   @endif

   <section class="container pt-md-3 pb-5 mb-md-3">
        <h2 class="h3 text-center"></h2>
        <div class="pt-4 mx-n2">
              <!-- Product--> 

            <?php $existe=0; ?>
            <div class="row">
                @foreach ($productos as $key)
                    <div class="col-md-3">
                        @include('layouts.card')
                    </div>
                <?php $existe=1; ?>

                @endforeach
            </div>            

            @if($existe==0)
                <div class="col-md-12 col-sm-6 px-2 mb-4">
                    <center>
                    <i class="czi-search product-title" style="font-size: 300px"></i>
                    <h1 class="product-title">No se encontraron resultados</h1>
                    </center>
                </div>                
            @endif

        </div>
    </section>
@endsection