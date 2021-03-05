
@extends('layouts.app')

@section('content')
    
    <div class="page-title-overlap pt-4" style="background: #607d8b;">
          <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
              <h1 class="h3 text-light mb-0">Mis compras</h1>
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
                        <thead>
                          <tr>
                            <th>Fecha</th>
                            <th>Número de compra</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach($compras as $key)
                                <tr>
                                    <td>{{date_format($key->created_at,'d-m-Y')}}</td>
                                    <td>{{$key->numero_compra}}</td>
                                    <td>
                                        <span class="badge badge-success badge-shadow">
                                            Aprobado
                                        </span>
                                    </td>
                                    <td>
                                        <a class="nav-link-style mr-2" href="{{route('pedidos.show',$key->id)}}" data-toggle="tooltip" title="Ver detalles de la compra">
                                            <i class="czi-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>

            @if($compras->count()==0)
              <section class="main">
                <div class="p-3">
                  <div>
                    <section class="container pt-md-3 pb-1 mb-md-1">
                        <h2 class="h3 text-center"></h2>
                        <div class="row pt-4 mx-n2">
                          <div class="col-md-12 col-sm-6 px-2 mb-4">
                            <center>
                              <i class="czi-cart product-title" style="font-size: 150px"></i>
                              <h2 class="product-title">Aun no realizas tu primera compra</h2>
                              <h6>aquí se mostrara las compras que has realizado</h6>
                            </center>
                          </div>                  
                        </div>
                      </section>
                  </div>
                </div>
              </section>
            @endif

        </div>
    </section>
@endsection