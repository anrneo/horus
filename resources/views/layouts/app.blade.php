<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/horus/logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

</head>

<body class="adminbody">
    <div id="main">
            <div class="headerbar">
                <!-- LOGO -->
                <div class="headerbar-left">
                    <a href="{{ url('/') }}" class="logo"><img alt="Logo" src="{{ asset('img/horus/logo.png') }}" /> <span><img alt="Logo" src="{{ asset('img/horus/text.png') }}"/></span></a>
                </div>
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        @guest
                        <a href="{{ route('login') }}" class="nav-link dropdown-toggle nav-user" role="button" aria-haspopup="false" aria-expanded="false"><i class="fa fa-fw fa fa-user"></i>
                                <span class="min-width" style="font-size:15px; color:white">{{ __('Iniciar Session') }}</span>
                                </a> @else @if(Auth::check())
                        <li class="list-inline-item dropdown notif">

                        </li>
                        @endif
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="fa fa-fw fa fa-user"></i>
                                    <span class="min-width" style="font-size:15px; color:white">{{ Auth::user()->name }}</span>
                                    </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Bienvenido</small> </h5>
                                </div>
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>
                                <!-- item-->
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>{{ __('Cerrar sesión') }}</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                                <!-- item-->
                            </div>
                        </li>
                        @endguest

                    </ul>
                    @auth
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>
                    </ul>
                    @endauth
                </nav>
            </div>
            <!-- Left Sidebar -->
            @auth
            <div class="left main-sidebar">

                <div class="sidebar-inner leftscroll">

                    <div id="sidebar-menu">

                        <ul>
                            <li class="submenu">
                                <a class="{{ request()->is( 'home') ? 'active' : '' }}" href="{{ url('home')}}"><i class="fa fa-fw fa-home"></i><span> Inicio </span> </a>
                            </li>
                            <li class="submenu">
                                <a class="{{ request()->is( 'referencia') ? 'active' : '' }}" href="{{ route('referencia.index')}}"><i class="fa fa-fw fa-table"></i> <span> Referencias </span> <span class="menu-arrow"></span></a>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
            @endauth
            <!-- End Sidebar -->

        <div class="content-page">

                <!-- Start content -->
                <div class="content">

                    <div class="container-fluid">

                        </div>
                        <!-- end row -->
                        <div class="row">
                            @yield('content')
                        </div>

                    </div>
                    <!-- END container-fluid -->

                </div>
                <!-- END content -->

            </div>
            <!-- END content-page -->
            @auth
        <footer class="footer">
            <span class="float-right">
                Copyright <a target="_blank" href="#">SUMIMEDICAL.COM</a>
        </span>
        </footer>
        @endauth
        <script>
            $(function(){
        
           $('.button-menu-mobile').click()
        
        });
        
        </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.error("{{ Session::get('message') }}");
                break;
        }

        @endif
    </script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/mdb.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}" defer></script>
    <script src="{{ asset('js/detect.js') }}" defer></script>
    <script src="{{ asset('js/fastclick.js') }}" defer></script>
    <script src="{{ asset('js/pikeadmin.js') }}" defer></script>
</body>

</html>
