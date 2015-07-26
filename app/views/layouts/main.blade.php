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

    <!--Modals Section-->
    <div>
        <!-- Modal -->
        @foreach($nav_menus as $menu)
            <div class='modal fade' id='nav_modal{{ $menu->id }}' tabindex='-1' role='dialog' aria-labelledby='{{ $menu->menu }}_modal'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>
                            <h4 class='modal-title' id='{{ $menu->menu }}_modal'><strong>{{ $menu->title }}</strong></h4>
                        </div>
                        <div class='modal-body'>
        
                            @if($menu->image_link != '')
                                {{ HTML::image($menu->image_link) }}
                            @endif
                          <p>{{ $menu->text }}</p>
                        </div>
                        <div class='modal-footer'>
        
                            @if($menu->link != '')
                                {{ "<a class='btn btn-default pull-left' role='button' href='". URL::to($menu->link) ."' target='_blank'>Visitar Enlace</a>" }}
                            @endif
        
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>

    <!-- End of Modals Section-->
        <div id="page-container" class="header-fixed-top sidebar-visible-lg sidebar-alt-visible-lg sidebar-no-animations footer-fixed">
            <!-- Alternative Sidebar -->
            <div id="sidebar-alt">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <a class="sidebar-title">
                            <i class="gi gi-globe_af fa-2x"></i><strong>Publicidad</strong>
                        </a>
                        @foreach($advertisings as $ad)
                            @if($ad->position == 'right')
                                {{ "<a href='". URL::to($ad->link) . "'>".HTML::image($ad->image, $ad->name, array( 'class' => 'img-responsive') ) ."</a>" }}
                            @endif
                        @endforeach                   
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a class="sidebar-brand">
                            <i class="gi gi-globe_af fa-2x"></i><strong>Publicidad</strong>
                        </a>
                        @foreach($advertisings as $ad)
                            @if($ad->position == 'left')
                                {{ "<a href='". URL::to($ad->link) . "'>".HTML::image($ad->image, $ad->name, array( 'class' => 'img-responsive') ) ."</a>" }}
                            @endif

                        @endforeach                   
                        <!-- END Brand -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <header class="navbar navbar-default navbar-fixed-top">
                     <div id="horizontal-menu-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                @foreach ($nav_menus as $menu)
                                    {{ "<li><a href='' data-toggle='modal' data-target='#nav_modal". $menu->id ."' >".$menu->menu."</a></li>"}}
                                @endforeach
                            </ul>
                        </div>
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- Fixed Top Header + Footer Header -->
                    <div class="content-header">
                        <div class="header-section">
                                <!-- With Animation and no Info Carousel Block -->
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="block">
                                            <!-- With Animation and no Info Carousel Content -->
                                            <div id="main_carousel" class="carousel slide">
                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    
                                                    <?php $flag = 0 ?>
                                                    @foreach($slider_images as $slide)
                                                        @if($flag == 0)
                                                            {{ "<div class='active item'>". HTML::image($slide->link, $slide->description, array( 'class' => 'img-responsive') ) ."</div>"}}
                                                            <?php $flag = 1 ?>
                                                        @else
                                                            {{ "<div class='item'>". HTML::image($slide->link, $slide->description, array( 'class' => 'img-responsive') ) ."</div>"}}
                                                        @endif
                                                    @endforeach

                                                </div>
                                                <!-- END Wrapper for slides -->

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#main_carousel" data-slide="prev">
                                                    <span><i class="fa fa-chevron-left"></i></span>
                                                </a>
                                                <a class="right carousel-control" href="#main_carousel" data-slide="next">
                                                    <span><i class="fa fa-chevron-right"></i></span>
                                                </a>
                                                <!-- END Controls -->
                                            </div>
                                            <!-- END With Animation and no Info Carousel Content -->
                                        </div>                            
                                    <!-- END Alternative Carousel -->
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="text-center"><strong>Visión</strong></h2><br>
                                        <div class="text-justify">
                                            <p>
                                                Nos visulaizamos en 2017 Posicionados como un hospital de especialidades, 
                                                consolidado por su equipo humano, infraestructura, sistema de calidad y 
                                                seguridad eficiente que genere rentabilidad a sus socios y beneficios a 
                                                sus usuarios.
                                            </p>
                                        </div>
                                        <h2 class="text-center"><strong>Misión</strong></h2><br>
                                        <div class="text-justify">
                                            <p>
                                                Brindamos servicios especializados de salud otorgados por capital humano 
                                                comprometido y capacitado, en un entorno de trabajo digno, basados en un 
                                                sistema de calidad y seguridad a nuestros usuarios, con una atención 
                                                confiable y recomendable.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        {{ HTML::image('img/resources/misc/cert.jpg', 'Hospital Santa Catalina', array( 'class' => 'img-responsive' ) ) }}
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                    <!-- END Fixed Top Header + Footer Header -->

                    <!-- Dummy Content -->
                    <div class="block full block-alt-noborder">
                        <!-- Horizontal Menu + Search -->
                        <header class="navbar navbar-default">
                            <!-- Navbar Header -->
                            <div class="navbar-header">
                                <!-- Horizontal Menu Toggle + Alternative Sidebar Toggle Button, Visible only in small screens (< 768px) -->
                                <ul class="nav navbar-nav-custom pull-right visible-xs text-center">
                                    <li>
                                        <a href="javascript:void(0)" data-toggle="collapse" data-target="#horizontal-menu-collapse">Desplegar Menu</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                                            <i class="fa fa-bars fa-fw"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Horizontal Menu Toggle + Alternative Sidebar Toggle Button -->

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

                            <!-- Alternative Sidebar Toggle Button, Visible only in large screens (> 767px) -->
                            <ul class="nav navbar-nav-custom pull-right hidden-xs">
                                <li><a class="btn btn-default" href="http://serviciodefarmaciahec.blogspot.mx/" target="_blank">Blogspot</a></li>
                                <li>
                                    <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                                        <i class="fa fa-bars fa-fw"></i>
                                    </a>
                                </li>

                            </ul>
                            <!-- END Alternative Sidebar Toggle Button -->

                            <div class="block">
                            <!-- Search Styles Title -->
                            <div class="block-title">
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="active"><a href="#tab-home">Inicio</a></li>
                                    <li><a href="#tab-services">Servicios</a></li>
                                    <li><a href="#tab-budgets">Presupuestos</a></li>
                                    <li><a href="#tab-promos">Promociones</a></li>
                                    <li><a href="#tab-doctors">Medicos</a></li>
                                    <li><a href="#tab-aboutus">Nosotros</a></li>
                                    <li><a href="#tab-contact">Contacto</a></li>
                                </ul>
                            </div>
                            <!-- END Search Styles Title -->

                            <!-- Search Styles Content -->
                            <div class="tab-content">
                                
                                <div class="tab-pane active animation-fadeInQuick" id="tab-home">
                                    <!-- Article Content -->
                                        <!-- Article Block -->
                                        <div class="block block-alt-noborder">
                                            <!-- Article Content -->
                                            <article>                                         
                                                {{ HTML::image('img/resources/misc/logo.jpg', 'Hospital Santa Catalina', array( 'class' => 'img-responsive' ) ) }}
                                                <br>
                                                <div class="sub-header"></div>
                                                <p>
                                                    Somos un Hospital dentro del proceso de certificación que da cuenta de como aseguramos la calidad y seguridad en la atención 
                                                    del paciente y su familia,dentro de estándares normativos como un que hacer cotidiano y como parte de nuestra cultura 
                                                    organizacional.
                                                </p>

                                                <p>
                                                    Contamos con personal médico de guardia y de urgencias las 24 horas del día. Más de 42 médicos en Staff de especialistas 
                                                    para la oportuna atención ante eventos inesperados como son:
                                                </p>
                                                <ul>
                                                    <li>Ginecología y Obstetricia</li>
                                                    <li>Traumatología y Ortopedia</li>
                                                    <li>Cirugía General</li>
                                                    <li>Gastroenterología</li>
                                                    <li>Pediatría y Cirugía Pediátrica</li>
                                                    <li>Urología</li>
                                                    <li>Medicina Interna</li>
                                                    <li>Oncología</li>
                                                    <li>Entre otros</li>
                                                </ul>
 
                                                <p>
                                                    Hoy día tenemos convenios institucionales con el seguro popular, mutuales, aseguradoras, compañías privadas que amplían la 
                                                    captación de pacientes que requieren ser atendidos por médicos que garantizan, así mismo existen diferentes tipos de paquetes 
                                                    o presupuestos, desde maternidad, cirugía general y otras especialidades.
                                                </p>

                                                <p>
                                                    Farmacia Hospitalaria es una unidad de preparación de mezclas simples, garantizando la calidad y seguridad en la aplicación 
                                                    de cada uno de los medicamentos prescritos por nuestro personal médico.
                                                </p>

                                                <p>
                                                    Nutrición clínica, realizando un tamizaje nutricional al ingreso todos nuestros pacientes para detectar problemas de 
                                                    desnutrición que requieren seguimiento y orientación.
                                                </p>

                                                <p>
                                                    El servicio de Ingeniería Biomédica de planta apoya los servicios integrales de atención medica y verifica el funcionamiento 
                                                    correcto del equipamiento médico.
                                                </p>

                                                <p>
                                                    Existen el Comité de Calidad y Seguridad del Paciente del cual dependen los comités de operación hospitalaria; el Comité de 
                                                    infecciones nosocomiales, comité de expediente clínico, el comité de Farmacia y Terapéutica, de mortalidad y mortalidad 
                                                    materno infantil, de bioética hospitalaria, desastres y comisión de seguridad e higiene, como apoyo al cuerpo de gobierno 
                                                    y a la dirección para tomar conocimiento de medición por indicadores y su control, así como elementos de detección de riesgos, 
                                                    acciones de mejora.
                                                </p>

                                            </article>
                                            <!-- END Article Content -->
                                        </div>
                                        <!-- END Article Block -->
                                    <!-- END Article Content -->
                                </div>

                                <div class="tab-pane animation-fadeInQuick" id="tab-services">
                                    <!-- Article Content -->
                                        <!-- Article Block -->
                                        <div class="block block-alt-noborder">
                                            @foreach($services as $service)  
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <h1>{{ $service->service }}</h1>
                                                        <p>{{ $service->description }}</p>    
                                                    </div>
                                                    <div class="col-xs-4">
                                                        {{ HTML::image( $service->image, $service->service, array( 'class' => 'img-responsive') ) }}
                                                    </div>
                                                </div>
                                                <br>
                                            @endforeach
                                        </div>
                                        <!-- END Article Block -->
                                    <!-- END Article Content -->
                                </div>

                                <div class="tab-pane animation-fadeInQuick" id="tab-budgets">
                                    <!-- Article Content -->
                                        <!-- Article Block -->
                                        <div class="block block-alt-noborder">
                                            @foreach($budgets as $budget)  
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <h1>{{ $budget->name }}</h1>
                                                        <p>{{ $budget->description }}</p>    
                                                    </div>
                                                    <div class="col-xs-3">
                                                        {{ HTML::image( $budget->image, $budget->service, array( 'class' => 'img-responsive') ) }}
                                                    </div>
                                                    <div class="col-xs-2">
                                                        <i class="gi gi-usd"></i><span class="text-success">{{ $budget->price }}</span>
                                                    </div>
                                                </div>
                                                <br>
                                            @endforeach
                                        </div>
                                        <!-- END Article Block -->
                                    <!-- END Article Content -->
                                </div>

                                <div class="tab-pane animation-fadeInQuick" id="tab-promos">
                                    <!-- Article Content -->
                                        <!-- Article Block -->

                                        <div class="block block-alt-noborder">
                                            <!-- Lightbox Gallery Title -->
                                            <div class="block-title">
                                                <h2><strong>Promociones</strong></h2>
                                            </div>
                                            <!-- END Lightbox Gallery Title -->

                                            <!-- Lightbox Gallery Content -->
                                            <!--
                                            Just create a div with the class .gallery and put the images any way you like in grid.
                                            If you would like to enable the lightbox gallery, just add the attribute data-toggle="lightbox-image" to the div. If you do that
                                            make sure that you put your images inside links with the class .gallery-link and the source of your large image as the value of each href attribute!
                                            -->
                                            <div class="gallery" data-toggle="lightbox-gallery">
                                                <div class="row">
                                                    @foreach($promos as $promo)
                                                        <div class="col-sm-4">
                                                            <a href="{{ URL::to($promo->link) }}" class="gallery-link" title="{{ $promo->description }}">
                                                                {{ HTML::image($promo->link, $promo->description, array( 'class' => 'img-responsive' ) )}}
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- END Lightbox Gallery Content -->
                                        </div>
                                        <!-- END Article Block -->
                                    <!-- END Article Content -->
                                </div>

                                <div class="tab-pane animation-fadeInQuick" id="tab-doctors">
                                    <!-- Article Content -->
                                        <!-- Article Block -->
                                        <div class="block block-alt-noborder">
 
                                        </div>
                                        <!-- END Article Block -->
                                    <!-- END Article Content -->
                                </div>

                                <div class="tab-pane animation-fadeInQuick" id="tab-aboutus">
                                    <!-- Article Content -->
                                        <!-- Article Block -->
                                        <div class="block block-alt-noborder">
                                            <article>
                                            <h2><strong>Nosotros</strong></h2>
                                                <p class="text-justify">
                                                    La maternidad Santa Catalina fue fundada en el año de 1953, por el Dr. Gregorio Quintero Menchaca (1920-2000).
                                                    Durante su dirección (1953-2000) éste hospital fue Maternidad por Excelencia, tanto que en el año 2000 recibió el galardón “Sol de oro a la excelencia en el servicio 2000”, que se otorga a las empresas que cumplen con altos niveles de calidad y servicio en México y Latinoamérica.
                                                    En ese mismo evento, se hizo hincapié que el Hospital es el único “hospital amigo del niño y de la madre en México y Latinoamérica”, reconocimiento otorgado por la UNICEF.
                                                    Después del sensible fallecimiento del Dr. Gregorio Quintero Menchaca, el hospital cierra sus puertas en el 2004.
                                                    Reaperturado como el nuevo Hospital de Especialidades Catalina en el 2009 bajo una nueva administración de Hospital empresa, brindando a los pacientes de nuestra zona geográfica de influencia un nuevo enfoque de atención en un continum servicios médicos hospitalarios buscando servicios integrales punta a punta, contando con un nutrido grupo de médicos especialistas acreditados.
                                                    Cumplimos 60 años de tradición Tapatía, un Diamante de excelencia en la práctica médica, ahora con servicios de Especialidad como; Ginecología y Obstetricia, Traumatología y Ortopedia, Cirugía General, Gastroenterología, Urología, Medicina Interna, medicina preventiva, e integrando programas médicos innovadores en la zona como los de Clínica de Cirugía de Hombro y Codo, Centro de trauma, así como programas médicos estratégicos de alta especialidad como la clínica de Cáncer, clínica de Cardiología, Unidad de Nefrología.
                                                    El Hospital celebra este aniversario fortaleciendo las especialidades que nos dan sello distintivo, con lo cual se destacan las fortalezas y oportunidades, se le reconoce (Secretaría de salud estatal y federal) ya la acreditación recibida por el Gobierno Federal en el año 2013 para la atención de pacientes del Catalogo Universal de Servicios, así como ser el primer Hospital privado en Jalisco en contar con las acreditaciones para la atención de Cáncer de Mama y Cérvico Uterino.
                                                    En el año 2012 fue enviada la inscripción para la certificación por el Consejo de Salubridad General, se viven los procesos que garantizan el cumplimiento de estándares internacionales y nacionales que dan forma a nuestro modelo de calidad y la seguridad en la atención médica de nuestros pacientes y sus familiares.
                                                    Hoy nuestra institución se percibe en la sociedad con una confianza renovada y de ello dan cuenta los múltiples convenios institucionales y empresariales firmados a la fecha, que mantienen hoy alianzas estratégicas de mutuo beneficio con particulares, partidos políticos, aseguradoras de gastos médicos mayores y siniestros, mutuales del transporte público, seguro popular, el fondo de protección contra gastos catastróficos del gobierno federal para la atención de Cáncer y cajas populares, cumpliendo así nuestra misión y nuestro compromiso con la comunidad a la cual servimos.
                                                </p>
                                            </article>
                                        </div>
                                        <!-- END Article Block -->
                                    <!-- END Article Content -->
                                </div>

                                <div class="tab-pane animation-fadeInQuick" id="tab-contact">
                                    <!-- Article Content -->
                                        <!-- Article Block -->
                                        <div class="block block-alt-noborder">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <!-- Basic Form Elements Content -->
                                                    <form action="page_forms_general.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="example-text-input">Nombre:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="example-text-input">Correo electrónico:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="masked_phone">Teléfono:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="masked_phone" name="masked_phone" class="form-control" placeholder="(999) 999-9999">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="example-text-input">Asunto:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="example-textarea-input">Mensaje:</label>
                                                            <div class="col-md-9">
                                                                <textarea id="example-textarea-input" name="example-textarea-input" rows="9" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-actions">
                                                            <div class="col-md-9 col-md-offset-3">
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Enviar correo</button>
                                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Borrar formulario</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- END Basic Form Elements Content -->
                                                </div>
                                                <div class="col-xs-6">
                                                    <iframe style='width: 100%; height: 500px;' frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="maps"  src="https://maps.google.com/maps/ms?msa=0&amp;msid=204252204387720342702.0004dcc350667ab609f20&amp;ie=UTF8&amp;t=m&amp;ll=20.682628,-103.3281&amp;spn=0.004818,0.006866&amp;z=17&amp;iwloc=0004dcc35b2eed56e277f&amp;output=embed"></iframe>
                                                    <br>
                                                    <small>
                                                        Ver <a id="maplink" href="https://maps.google.com/maps/ms?msa=0&amp;msid=204252204387720342702.0004dcc350667ab609f20&amp;ie=UTF8&amp;t=m&amp;ll=20.682628,-103.3281&amp;spn=0.004818,0.006866&amp;z=17&amp;iwloc=0004dcc35b2eed56e277f&amp;source=embed">
                                                        Hospital de Especialidades Catalina</a> en un mapa ampliado
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Article Block -->
                                    <!-- END Article Content -->
                                </div>
                                
                            </div>
                            <!-- END Search Styles Content -->
                            </div>
                        </header>
                    </div>
                    <!-- END Dummy Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="row">
                        <div class="col-xs-5 text-center">
                            <h6>Hospital de Especialidades Catalina</h6>
                            <p>Pablo Valdéz No. 719 Col. San Juan de Dios Guadalajara, Jal.</p>
                        </div>
                        <div class="col-xs-1 text-center">
                            <h6>Telefonos</h6>
                            <p>3883-1080<br>3617-8652</p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <h6>Contacto <i class="hi hi-envelope"></i></h6>
                            <p>promocionydifusion@hospitalcatalina.com</p>
                        </div>
                        <div class="col-xs-2 text-center">
                            <h6>Redes Sociales</h6>
                            <p>
                                <a href="{{ URL::to('https://www.facebook.com/hospitalcatalina') }}" target="_blank"><i class="si si-facebook fa-3x text-info"></i></a>&nbsp;
                                <a href="{{ URL::to('https://twitter.com/HECatalina') }}" target="_blank"><i class="si si-twitter fa-3x"></i></a>
                            </p>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="pull-right">
                                Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://www.hospitalcatalina.com" target="_blank">Mario Badillo</a>    
                            </div>
                        </div>
                    </div>
                    -->
                </footer>
                <!-- END Footer -->
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
        {{ HTML::script('js/vendor/bootstrap.min.js') }}
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/app.js') }}

        @section('scripts')
        @show
    </body>
</html>