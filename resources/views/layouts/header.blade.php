<header class="box-shadow-sm">
  <div class="navbar-sticky">    
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand d-none d-lg-block mr-3 flex-shrink-0" href="{{asset('')}}" style="min-width: 7rem;">
          <h3 class="text-white h4 m-0 p-0">ELECTIVA III</h3>
        </a>
        <a class="navbar-brand d-lg-none mr-2" href="#" style="min-width: 2.125rem;">
          <h3 class="text-white h4 m-0 p-0">ELECTIVA III</h3>
        </a>
            <form class="input-group-overlay d-none d-lg-block mx-4" action="{{asset('')}}" method="get">
              <div class="input-group-prepend-overlay">
                <span class="input-group-text">
                  <a href="javascript:buscar()"><i class="czi-search"></i></a>
                </span></div>
                <input class="form-control prepended-form-control appended-form-control" type="text" placeholder="Buscar productos" id="buscar_input" required="required" name="buscar"
                <?php if (isset($buscar)) {
                    echo "value='".$buscar."'";
                } ?>
                >
                <div class="input-group-append-overlay">
                  <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
              </form>
        <div class="navbar-toolbar d-flex align-items-center">          

          <a class="navbar-tool navbar-stuck-toggler ml-1 mr-2" href="#">
            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-menu"></i></div>
            <div class="navbar-tool-text ml-n3 dropdown-toggle">Menu</div>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>   

          <div class="navbar-tool ml-2 mr-2">
            <a class="navbar-tool-icon-box bg-secondary" href="{{route('carrito.index')}}">
              <span class="navbar-tool-label" id="numero_carrito" <?php if(count_carrito()<=0){echo "style='display:none;'";} ?>>{{count_carrito()}}</span>
              <i class="navbar-tool-icon czi-cart"></i>
            </a>
          </div>   

          <div class="dropdown">
            @auth
              <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" data-toggle="dropdown">
                <div class="navbar-tool-icon-box">
                  @if(Auth::user()->img=='')
                    <i class="navbar-tool-icon czi-user"></i>
                  @else
                    <img class="navbar-tool-icon" src="{{asset(Auth::user()->img)}}" style="border-radius: 50%; height: 46px;">
                  @endif 
                                        
                </div>
                <div class="navbar-tool-text ml-n2">
                  <small class="">Hola, bienvenido</small>{{ Auth::user()->name}}
                </div>
                <ul class="dropdown-menu bg-white" id='ul-user' style="box-shadow: 0 0 3px grey !important;">
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="{{route('home')}}">
                        <i class="czi-laptop mr-2"></i> Panel
                      </a>                      
                    </li>                  
                      
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="{{route('pedidos.index')}}">
                        <i class="czi-bag mr-2"></i> Mis Compras
                      </a>                      
                    </li>

                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" 
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        <i class="czi-sign-out mr-2"></i> Cerrar Sesión
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>

                </ul>
              </a>
            @else
              <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" data-toggle="dropdown"> 
                <div class="navbar-tool-icon-box">
                  <i class="navbar-tool-icon czi-user"></i>
                </div>
                <div class="navbar-tool-text ml-n2">
                  <small class="">Hola, Inicia sesión en</small>Mi Cuenta                        
                </div>
                <ul class="dropdown-menu bg-white" id='ul-user' style="box-shadow: 0 0 3px grey !important;">
                    <li>
                      <a class="dropdown-item" href="{{route('login')}}">Iniciar sesión</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('register')}}">Crear una cuenta</a>
                    </li>
                </ul>  
              @endauth
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="navbar navbar-expand-lg navbar-dark bg-dark navbar-stuck-menu mt-n2 pt-0 pb-2">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <hr class="hr-light d-lg-none mt-3 mb-2">
          <!-- Search-->
              <div class="input-group-overlay d-lg-none my-3">
                <div class="input-group-prepend-overlay"><span class="input-group-text buscar_icon" id_buscar='2'><i class="czi-search" onclick="buscar();"></i></span></div>
                <input class="form-control prepended-form-control buscar_input" id="buscador_2" type="text" placeholder="Buscar"
                <?php if (isset($buscar)) {
                    echo "value='".$buscar."'";
                } ?>
                >
              </div>
        </div>
      </div>
    </div>
  </div>
</header>