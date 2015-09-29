<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Hospital Santa Catalina Especialidades y Oncologia Integral</title>

        <meta name="description" content="Hospital Santa Catalina Especialidades y Oncologia Integral.">
        <meta name="author" content="Mario Alberto Badillo Ortiz">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <link rel="shortcut icon" href="{{ URL::to('img/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ URL::to('img/icon57.png') }}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{ URL::to('img/icon72.png') }}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{ URL::to('img/icon76.png') }}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{ URL::to('img/icon114.png') }}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{ URL::to('img/icon120.png') }}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{ URL::to('img/icon144.png') }}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{ URL::to('img/icon152.png') }}" sizes="152x152">

        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/plugins.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/themes.css') }}
        {{ HTML::style('css/specifics.css') }}

        {{ HTML::script('js/vendor/modernizr-2.7.1-respond-1.4.2.min.js') }}
    </head>

    <body>
        <div id="page-container" class="sidebar-visible-lg sidebar-no-animations">
            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a class="sidebar-brand active" href="{{ URL::to('/admin/user') }}">
                            <strong>Anuncios</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/budget') }}">
                            <strong>Presupuestos</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/doctor') }}">
                            <strong>Medicos</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/nav_menu') }}">
                            <strong>Menu Superior</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/promo') }}">
                            <strong>Promociones</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/service') }}">
                            <strong>Servicios</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/slider') }}">
                            <strong>Imagenes Visor</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/speciality') }}">
                            <strong>Especialidades</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/admin/user') }}">
                            <strong>Usuarios</strong>
                        </a>
                        <a class="sidebar-brand" href="{{ URL::to('/logout') }}">
                            <strong>Cerrar Sesión</strong>
                        </a>
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Page content -->
                <div id="page-content">


                    <!-- Dummy Content -->
                    <div class="block full block-alt-noborder">
                        <!-- Horizontal Menu + Search -->
                        <header class="navbar navbar-default">
                            <!-- Navbar Header -->
                            <div class="navbar-header">
                                <!-- Main Sidebar Toggle Button -->
                                <ul class="nav navbar-nav-custom">
                                    <li>
                                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                            <i class="fa fa-bars fa-fw"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Main Sidebar Toggle Button -->
                            </div>
                            <!-- END Navbar Header -->
                            <div class="block">
                            <!-- Search Styles Title -->
                            <div class="block-title">
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li><a href="#tab-add">Agregar</a></li>
                                    <li><a href="#tab-edit">Editar</a></li>
                                </ul>
                                @section('title')

                                @show

                            </div>
                            <!-- END Search Styles Title -->

                            <!-- Search Styles Content -->
                            <div class="tab-content">
                                @yield('menu')

                            </div>
                            <!-- END Search Styles Content -->
                            </div>
                        </header>
                    </div>
                    <!-- END Dummy Content -->
                </div>
                <!-- END Page Content -->

            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- END User Settings -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        {{ HTML::script( 'js/vendor/bootstrap.min.js' ) }}
        {{ HTML::script( 'js/plugins.js' ) }}
        {{ HTML::script( 'js/app.js' ) }}

        {{ HTML::script('js/data/data.js') }}
        {{ HTML::script('js/common.js') }}

        <script>
            var main_path = '{{ URL::to("/") }}';
            $(function(){ Control.init(); });
        </script>

        @section('scripts')

        @show
    </body>
</html>
