<div class="card product-card box-shadow" style="min-width: 100%; max-width: 100%; min-height: 300px; max-height: 300px;">     
      <?php $url = route('portal.producto',$key->id); ?>
      <a class="card-img-top d-block overflow-hidden" href="{{$url}}">
        <img src="{{$key->portada()}}" alt="{{$key->producto}}" 
        style="
          max-height: 190px;
          min-height: 190px;
          min-width: 100%;
          max-width: 100%;
        " 
        >
      </a>

      <div class="card-body py-2">
        <a class="product-meta d-block font-size-xs pb-1 pt-1" href="#">
          @if(is_null($key->id_categoria)==false)
            {{$key->categoria->nombre}}
          @endif
          </a>
          <h3 class="product-title font-size-sm"><a href="{{$url}}">{{$key->producto}}</a></h3>

          <div class="d-flex justify-content-between">
            <div class="product-price">
              <span class="text-accent">{{money($key->precio)}} </span>
          </div>
        </div>
        <br>
        <div class="card-body card-body-hidden">
          <div class="text-center">
              <a class="nav-link-style font-size-ms" href="{{$url}}">
                <i class="czi-eye align-middle mr-1"></i>Ver producto
              </a>
          </div>
        </div>
    </div>
    <hr class="d-sm-none">
</div>