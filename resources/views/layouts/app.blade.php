<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Electiva III - Carlos Paiva </title>
        <meta name="description" content="@yield('description')"/>
        <meta charset="utf-8">
        <link rel="icon" href="{{asset('img/icon.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" media="screen" href="{{asset('css/vendor.min.css')}}">
        <link rel="stylesheet" media="screen" id="main-styles" href="{{asset('css/theme.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/cultivolibre.css')}}">
        <link href="{{asset('css/snackbar.min.css')}}" rel="stylesheet" type="text/css"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style type="text/css">
          @media (min-width: 992px){
            .navbar-expand-lg .mega-nav .dropdown-menu>.mega-dropdown .dropdown-menu::before {
                right: 0rem;
                width: 0px;
            }
          }

          body{
            background: #f1f1f1;
          }
        </style>
        
        @yield('css')
    </head>
    <body>
      
        @include('layouts.header')

        @yield('content')

        
        <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>

        <script src="{{asset('js/vendor.min.js')}}"></script>
        <script src="{{asset('js/theme.min.js')}}"></script>
        <script src="{{asset('js/snackbar.min.js')}}"></script>
        @yield('script')
        @if(session('success'))
           <script>
                Snackbar.show({
                    text: `{{session("success")}}`,
                    pos: 'bottom-right',
                    actionText:"Ok"
                });
           </script>            
        @endif
          <script type="text/javascript" src="{{asset('js/cultivolibre.js')}}"></script>
        @yield('script')
    </body>
</html>