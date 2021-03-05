@extends('layouts.app')

@section('content')
  <div id="df"></div>
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
          <!-- Steps-->
              
              <div class="steps steps-light pt-2 pb-3 mb-5">
                  <a class="step-item active current" href="#">
                  <div class="step-progress"><span class="step-count">1</span></div>      
                  <div class="step-label"><i class="czi-cart"></i>Detalles</div></a>

                  <a class="step-item  active current" href="#">
                  <div class="step-progress"><span class="step-count">2</span></div>
                  <div class="step-label"><i class="czi-package"></i>Dirección de entrega</div></a>

                  <a class="step-item   active current">
                    
                  <div class="step-progress"><span class="step-count">3</span></div>
                  <div class="step-label"><i class="czi-card"></i>Caja</div></a>

                  <a class="step-item  active current">

                  <div class="step-progress"><span class="step-count">4</span></div>
                  <div class="step-label"><i class="czi-check-circle"></i>Completado</div></a>
              </div>    

              <div class="card">
                <div class="card-body">
                  <center>
                    <h2 class="h4 pb-3">Muchas gracias por su compra!</h2>
                    <i class="czi-check-circle text-success" style="font-size: 100px;"></i>
                    <br><br>
                    <p class="font-size-md mb-2">
                      Gracias por realizar tu pedido, su pedido se encuentra en un estado: <span class="font-weight-medium">Aprobado</span> con el número de compra: <span class="font-weight-medium">{{$compra->numero_compra}}</span>
                    </p>
                    
                    
                    <a class="btn btn-secondary mt-3 mr-3" href="{{asset('')}}">Ir al inicio</a>
                    <a class="btn btn-primary mt-3" href="{{route('pedidos.show',$compra->id)}}">
                      Ver pedido
                    </a>
                  </center>
                </div>
              </div>

        </section>
        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
                <center>
                  <br>
                  <i class="czi-check-circle text-success" style="font-size: 150px;"></i>
                  <br><br>
                  <span class="font-weight-medium text-success h3 mt-1">Aprobado</span>
                </center>
            </div>
        </aside>  
      </div>      
    </div>

    
@endsection
