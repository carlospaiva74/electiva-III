
@extends('layouts.app')

@section('content')

        <div class="page-title-overlap pt-4" style="background: #607d8b;">
          <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
              <h1 class="h3 text-light mb-0">Compra número: {{$compra->numero_compra}}</h1>
            </div>
          </div>
      </div>

      <section class="container pt-md-3 pb-5 mb-md-3">
        <h2 class="h3 text-center"></h2>
        <div class="pt-4 mx-n2">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive font-size-md">
                      <table class="table table-hover mb-0">        
                          <tbody>
                            <tr>
                              <th class="bg-dark text-white" style="width: 35%;">Número de compra</th>
                              <td>{{$compra->numero_compra}}</td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>

            <br>

            <div class="card">
                <div class="card-body">
                    <center><h4>Productos</h4></center>
                    <br>
                    <div class="table-responsive font-size-md">
                      <table class="table table-hover mb-0">
                        <thead>
                          <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>SubTotal</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php $total = 0; ?>
                            @foreach($compra->detalles as $key)
                                <tr>
                                    <td> {{$key->producto->producto}} </td>
                                    <td> {{money($key->producto->precio)}} </td>
                                    <td> {{$key->cantidad}} </td>
                                    <td> 
                                      <?php $total = $total + $key->producto->precio * $key->cantidad; ?>
                                        {{money( $key->producto->precio * $key->cantidad)}}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                              <td colspan="3">
                                <center><strong><h1 class="h3">Total:</h1></strong></center>
                              </td>
                              <td>
                                <h1 class="h3">{{money($total)}}</h1>
                              </td>
                            </tr>
                          </tbody>
                      </table>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection