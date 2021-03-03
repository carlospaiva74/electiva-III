
@extends('layouts.app')

@section('content')
    <div class="page-title-overlap bg-banner pt-4" style="background: #607d8b;">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">{{$producto->producto}}</h1>
        </div>
      </div>
    </div>  
    
    <div class="container">
      <!-- Gallery + details-->
      <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-5">
        <div class="px-lg-3">
          <div class="row">
            <!-- Product gallery-->
            <div class="col-lg-7 pr-lg-0 pt-lg-4">
            @if($producto->fotos->isEmpty())
              <div class="cz-product-gallery fotos" id="fotos">
                    <div class="cz-preview order-sm-2">
                        <div class="cz-preview-item img-zoom-modal active" id="data-img">
                          <img class="cz-image-zoom img-zoom-modal" src="{{asset('img/img.jpg')}}" data-zoom="{{asset('img/img.jpg')}}" alt="">
                          <div class="cz-image-zoom-pane"></div>
                        </div>
                    </div>
                    <div class="cz-thumblist order-sm-1">
                        <a class="cz-thumblist-item active" href="#data-img">
                            <img src="{{asset('img/img.jpg')}}" class="img-miniatura-modal" alt="">
                        </a>
                    </div>
              </div>
            @else
              <div class="cz-product-gallery" >
                  <div class="cz-preview order-sm-2">
                    <?php $x=0; $count=0;?>
                    @foreach($producto->fotos as $key)
                      <div class="cz-preview-item @if($x==0) active @endif img-zoom-modal" id="data-img-{{$key->id}}">
                        <img class="cz-image-zoom img-zoom-modal" src="{{asset($key->foto)}}" data-zoom="{{asset($key->foto)}}" alt="">
                        <div class="cz-image-zoom-pane" ></div>
                      </div>
                      <?php $x++; $count++;?>
                    @endforeach
                    @if($count==0)
                      <div class="cz-preview-item active img-zoom-modal" id="data-img">
                        <img class="cz-image-zoom img-zoom-modal" src="{{asset('img/img.jpg')}}" data-zoom="{{asset('img/img.jpg')}}" alt="">
                        <div class="cz-image-zoom-pane"></div>
                      </div>
                    @endif
                  </div>

                  <div class="cz-thumblist order-sm-1">
                    <?php $x=0; $count=0;?>                  
                      @foreach($producto->fotos as $key)
                        <a class="cz-thumblist-item @if($x==0) active @endif " href="#data-img-{{$key->id}}">
                          <img src="{{asset($key->foto)}}" class="img-miniatura-modal" alt="">
                        </a>
                        <?php $x++;$count++;?>
                      @endforeach
                      @if($count==0)
                        <a class="cz-thumblist-item active" href="#data-img">
                          <img src="{{asset('img/img.jpg')}}" class="img-miniatura-modal" alt="">
                        </a>
                      @endif
                    </div>
                </div>              
            @endif
            </div>
            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
              <div class="product-details ml-auto pb-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                </div>
                <div class="mb-3 mt-5">
                  <span class="h3 font-weight-normal text-accent mr-1"> {{money($producto->precio)}} 
                      </span>                 
                </div>

                @if(check_carrito($producto->id)==false)
                    <?php $action = route('carrito.add'); ?>
                @else
                  <?php $action = route('carrito.remove'); ?>
                @endif


                <form action="{{$action}}" method="post">           
                  @csrf 
                  <div>
                    <input type="hidden" name="producto" value="{{$producto->id}}">
                  </div>
                  <div class="position-relative mr-n4 mb-3">
                    <div class="custom-control custom-option custom-control-inline mb-2" id="stock-div">
                      <h3 class="text-muted"> 
                        <?php   $stock_max = $producto->stock; ?>
                        {{$stock_max}}
                        <small>Disponibles</small>
                       </h3>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      
                    </div>
                    <div id="status-stock">

                      @if($producto->stock == 0)
                        <div class="product-badge product-no-disponible mt-n1">
                          <i class="czi-security-close"></i>
                          Agotado
                        </div>
                      @else
                        <div class="product-badge product-available mt-n1">
                          <i class="czi-security-check"></i>Producto disponible
                        </div>
                      @endif
                    </div>
                    
                    
                  </div>
                  <div class="form-group d-flex align-items-center">

                    @if(check_carrito($producto->id)==false)
                      <input type="number" class="form-control mr-3 cantidad-validate" 
                        style="width: 5rem;" placeholder="Ej. 1" 
                        value="1"                  
                        min="1" 
                        name="cantidad" 
                        max="{{$stock_max}}" 
                        id="comprar"
                      >
                      <button class="btn btn-primary btn-shadow btn-block modal_button_agregar_carrito" 
                      type="submit"><i class="czi-cart font-size-lg mr-2"></i>Añadir al carrito</button>
                    @else
                      <button class="btn btn-danger btn-shadow btn-block modal_button_agregar_carrito" 
                      type="submit"><i class="czi-trash font-size-lg mr-2"></i>Eliminar del carrito</button>
                    @endif
                  </div>
                </form>                  
              </div>
            </div>
          </div>          
          <br><br>
        </div>
      </div>
    </div> 

     <section class="container mb-4 mb-lg-5">
      <div class="tab-content pt-2">
        <div class="show active">
          <div class="row">
            <div class="col-lg-12">
              {!!$producto->descripcion!!}
            </div>
          </div>
        </div>       
      </div>
    </section>
@endsection