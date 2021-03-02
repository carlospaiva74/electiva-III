        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">

                <ul class="navbar-item theme-brand flex-row  text-center">
                    <li class="nav-item theme-text">
                        <a href="{{route('home')}}" class="nav-link"> 
                           ELECTIVA III
                        </a>
                    </li>
                </ul>

                <ul class="navbar-item flex-row ml-md-auto">
                    <li class="nav-item ml-3 mr-1">
                        <h5 class="text-white" style="margin-top: .7rem !important;">{{Auth::user()->name}}</h5>
                    </li>
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                           <img src="{{asset('img/90x90.png')}}"> 
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="">

                                <div class="">
                                    <div class="dropdown-item">
                                        <a class="" href="{{asset('')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        Ir al portal</a>
                                    </div>
                                </div>
                                
                                <div class="dropdown-item">
                                    <a class="" href="" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        Cerrar Sesión
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>

        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
                <ul class="navbar-nav flex-row">
                    @yield('breadcrumb')
                </ul>
            </header>
        </div>