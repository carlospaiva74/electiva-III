<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <title>Electiva III - Carlos Paiva</title> 
        <link href="{{asset('css/snackbar.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
        <link href="{{asset('css/loader.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('js/loader.js')}}"></script>        
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('css')
        <style>
            .layout-px-spacing {
                min-height: calc(100vh - 166px)!important;
            }
        </style>
    </head>
    <body>
        <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        @include('layouts.admin.header')
        <!--  END NAVBAR  -->

        <!--  BEGIN NAVBAR  -->
        
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            @include('layouts.admin.sidebar')
            <!--  END SIDEBAR  -->
            
            <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    @yield('content')
                </div>
                @include('layouts.admin.footer')
            </div>
            <!--  END CONTENT PART  -->

        </div>
        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
        <script src="{{asset('js/snackbar.min.js')}}"></script>
        @yield('script')
        @if(session('mensaje'))
           <script>
                Snackbar.show({
                    text: `{{session("mensaje")}}`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });
           </script>            
        @endif
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </body>
</html>