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
        <!-- Login Background -->
        
            <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
        {{ HTML::image('img/resources/misc/background.jpg', 'Login Background', array( 'class' => 'full-bg animation-pulseSlow' ) ) }} 
        
        <!-- END Login Background -->

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><i class="gi gi-hospital"></i> <strong>Hospital Santa Catalina</strong></h1>
                @if(Session::get('msg'))
                    {{ "<br><h5 class='text-danger'><strong>". Session::get( 'msg' )."</strong></h5>" }}
                @elseif(Session::get('msg-logout'))
                    {{ "<br><h5 class='text-success'><strong>". Session::get( 'msg-logout' )."</strong></h5>" }}
                @endif
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form action="{{ URL::to( '/logon' ) }}" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="username" name="username" class="form-control input-lg" placeholder="Usuario">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="gi gi-ok_2"></i>Ingresar</button>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->
       <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        {{ HTML::script( 'js/vendor/bootstrap.min.js' ) }}
        {{ HTML::script( 'js/plugins.js' ) }}
        {{ HTML::script( 'js/app.js' ) }}

        {{ HTML::script( 'js/pages/tablesDatatables.js' ) }}
        <script>
            $(function(){ 
                TablesDatatables.init(); 
                setTimeout(function(){ $("#slider-right").trigger("click"); }, 8000);
            });
            </script>
    </body>
</html>