
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión </title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <link href="{{asset('css/snackbar.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
    <link href="{{asset('css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/loader.js')}}"></script>        
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/form-1.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/switches.css')}}">
</head>
<body class="form">   
    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Iniciar <span class="brand-name">Sesión</span></h1>
                        <p class="signup-link">Nuevo por aquí ? <a href="{{route('register')}}">Crea una cuenta</a></p>

                        <form class="text-left" action="{{route('login')}}" method="post">
                            @csrf
                            @error('email')  
                                <br>                                  
                                <div class="alert alert-danger" role="alert">                                
                                   {{ $message }}
                                </div> 
                            @enderror                            

                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="email" type="text" class="form-control" placeholder="Correo electrónico"  value="{{ old('email') }}" required="required">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" required="required">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Mostrar contraseña</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper ml-3">
                                        <button type="submit" class="btn btn-primary" value="">Iniciar ahora</button>
                                    </div>
                                    
                                </div>

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input" name="remember"
                                          {{ old('remember') ? 'checked' : '' }}
                                          >
                                          <span class="new-control-indicator"></span>Mantenme conectado
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="terms-conditions">
                            Todo los derechos reservado, sistema de ingresos para electiva III. Carlos Paiva, Informática trayecto IV
                        </p>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script type="text/javascript">
        var togglePassword = document.getElementById("toggle-password");

        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
              var x = document.getElementById("password");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            });
        }
    </script>

</body>
</html>
