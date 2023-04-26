<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="college, campus, university, courses, school, educational, preescolar, primaria, secundaria, preparatoria, ensenada, tijuana, licenciaturas ">
    <meta name="description" content="UNIFRONT - Colegio Ensenada, Educación">
    <meta name="autor" content="unifront">
	<!-- FB -->
	<meta name="facebook-domain-verification" content="rk8usig9cffuehly603eefge61civ6" />
	
    <title>UNIFRONT - COLEGIO ENSENADA</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/main_font/main_font.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/elegant_font/elegant_font.min.css" rel="stylesheet">
    <link href="css/icon_font/pe-icon-7-stroke.min.css" rel="stylesheet">
    <link href="css/fontello/css/fontello.min.css" rel="stylesheet">
    <link href="css/edu_fonts/edu_fonts.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
	<link href="layerslider/css/layerslider.css" rel="stylesheet">
    <link href="css/tabs.css" rel="stylesheet">
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RZTWG9NFNW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RZTWG9NFNW');
</script>
	
	
</head>
<body>

<div id="preloader">
	<div class="pulse"></div>
</div><!-- Pulse Preloader -->

<header>
	<a id="logo" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="100%" alt="UNIFRONT" data-retina="true"></a>
	<nav id="top-nav">
		<ul>
			<li><a href="#">Oferta Académica</a></li>
		</ul>
	</nav>
	<a id="menu-trigger" href="#"><span class="menu-trigger-text">Menú</span><span class="menu-trigger-icon"></span></a>
</header> <!-- End Header -->


    <nav id="side-nav">
		<ul class="side-nav-menu">    
         <li class="item-has-children">
				<a href="#">Educaci&oacute;n</a>
				<ul>
    				<li><a href="{{ url('/preescolar') }}">Preescolar</a></li>
    				<li><a href="{{ url('/primaria') }}">Primaria</a></li>
    				<li><a href="{{ url('/secundaria') }}">Secundaria</a></li>
    				<li><a href="{{ url('/preparatoria') }}">Preparatoria</a></li>
				</ul>
				<li class="item-has-children">
		<a href="#">Licenciaturas</a>
		<ul class="sub-menu">
			<li><a href="{{ url('/cienciasdelaeducacion') }}">Ciencias de la Educación</a></li>
			<li><a href="{{ url('/cosmetologia') }}">Cosmetología e Imagen</a></li>
			<li><a href="{{ url('/educacionnormalprimaria') }}">Normal Primaria</a></li>
			<li><a href="{{ url('/educacionnormalpreescolar') }}">Normal Preescolar</a></li>
			<li><a href="{{ url('/criminologia') }}">Criminología</a></li>
			<!--<li><a href="#">Enología</a></li>-->
			<li><a href="{{ url('/gastronomia') }}">Gastronomía</a></li>
			<li><a href="{{ url('/mdce') }}">Mercadotecnia, Dirección Estratégica y Diseño</a></li>
			<li><a href="{{ url('/nutricion') }}">Nutrición</a></li>
			<li><a href="{{ url('/psicologia') }}">Psicología</a></li>
			<li><a href="{{ url('/psicopedagogia') }}">Psicopedagogía</a></li>
			<li><a href="{{ url('/trabajosocial') }}">Trabajo Social</a></li>
		</ul>
	
	</li> <!-- item-has-children -->
			<li class="item-has-children">
				<a href="#">Campus</a>
				<ul class="sub-menu">
					<li><a href="#">Ensenada</a></li>
                    <li><a href="#">Tijuana</a></li>
				</ul>
			</li> <!-- item-has-children -->
            <li>

            <li>
            <ul class="side-nav-menu single-item-wp">
                    <li><a href="#">Contacto</a></li>
            </ul> <!--single-item-wp -->
            <ul class="side-nav-menu single-item-wp">
                <li><a href="xtrs/reglamentoensenada.pdf">Reglamento campus Ensenada</a></li>
                <li><a href="xtrs/reglamento-general-completo-enero-2018.pdf">Reglamento campus Tijuana</a></li></li>
               
            </ul> <!--single-item-wp -->
			
<div id="social">
	<ul>
		<li><a href="https://www.facebook.com/unifrontcampustijuana/"><i class="icon-facebook"></i></a></li>
		<li><a href="https://www.instagram.com/unifrontcolegioensenada"><i class="icon-instagram"></i></a></li>
	</ul>
       </div>
	</nav><!--End nav-->
    
	<div class="main-wrapper">

	@if(request()->has('pagina'))

    @php 
        $paginas_permitidas = [
            'cosmetologia',
            'gastronomia',
            'criminologia',
            'psicologia',
            'psicopedagogia',
            'nutricion',
            'preparatoria',
            'preescolar',
            'trabajosocial',
            'secundaria',
            'cienciasdelaeducacion',
            'educacionnormalpreescolar',
            'educacionnormalprimaria',
            'primaria',
            'encuestas'
        ];
    @endphp

    @if(in_array(request('pagina'), $paginas_permitidas))
        @include('paginas.'. request('pagina'))
    @else
        @include('paginas.404')
    @endif

@else

    @include('paginas.inicio')

@endif


	<footer>
        <div class="container">
            <div class="row ">
                <div class="col-md-3 col-sm-3">
                    <p id="logo_footer">
                        <img src="/img/logo.png" width="125" height="50" alt="UNIFRONT" data-retina="true">
                    </p>
                </div>
               <div class="col-md-3 col-sm-3">
                    <h4>Educaci&oacute;n</h4>
                    <ul>
					<li><a href="index.php?pagina=preescolar">Preescolar</a></li>
                    <li><a href="https://wa.me/526461783139?text=Me%20interesa%20primaria">Primaria</a></li>
					<li><a href="index.php?pagina=secundaria">Secundaria</a></li>
                    <li><a href="index.php?pagina=preparatoria">Preparatoria</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Licenciaturas</h4>
                    <ul>
					<li><a href="index.php?pagina=cienciasdelaeducacion">Ciencias de la Educaci&oacute;n</a></li>
					<li><a href="index.php?pagina=cosmetologia">Cosmetolog&iacute;a e Imagen</a></li>
					<li><a href="index.php?pagina=educacionnormalprimaria">Normal Primaria</a></li>
					<li><a href="index.php?pagina=educacionnormalpreescolar">Normal Preescolar</a></li>
					<li><a href="index.php?pagina=criminologia">Criminolog&iacute;a</a></li>
				<!--	<li><a href="https://wa.me/526461783139?text=Me%20interesa%20enologia%20Tijuana">Enolog&iacute;a</a></li>-->
					<li><a href="index.php?pagina=gastronomia">Gastronom&iacute;a</a></li>
					<li><a href="https://wa.me/526461783139?text=Me%20interesa%20mercadotecnia,%20direccion%20estrategica%20y%20diseño%20Tijuana">Mercadotecn&iacute;a, Direcci&oacute;n Estrat&eacute;gica y Dise&ntilde;o</a></li>
					<li><a href="index.php?pagina=nutricion">Nutrici&oacute;n</a></li>
					<li><a href="index.php?pagina=psicologia">Psicolog&iacute;a</a></li>
					<li><a href="index.php?pagina=psicopedagogia">Psicopedagog&iacute;a</a></li>
					<li><a href="index.php?pagina=trabajosocial">Trabajo Social</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Contacto</h4>
                    <ul>
                        <li><a href="https://wa.me/526461783139?text=Me%20interesa">Contacto</a></li>
                        <li><a href="https://wa.me/526461783139?text=Me%20interesa%20agendar%20una%20visita">Agenda una visita</a></li>
                    </ul>
                    <ul id="contacts_footer">
                        <li>Ensenada - <a href="tel://6461783235">+52 646 1783235</a></li>
						<li>Tijuana - <a href="tel://6646601989">+52 664 6601989</a></li>
                        <li>Correo - <a href="mailto:contacto@unifront.mx">contacto@unifront.mx</a></li>
                    </ul>
 
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
        </footer><!-- End footer -->
        <div id="copy">
            <div class="container">
                 © UNIFRONT COLEGIO ENSENADA, CAMPUS ENSENADA Y TIJUANA.
            </div>
        </div><!-- End copy -->
	</div> <!-- main-wrapper -->
	
<!-- Login modal -->   
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myLogin">
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_1" id="check_1" name="check_1" />
							<label for="check_1"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>  
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myRegister">
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password">
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div>
    
<!-- Search modal -->   
<div id="search">
    <button type="button" class="close"></button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" >
        <button type="submit" class="button">Search</button>
    </form>
</div>
    
<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- LayerSlider script files -->
<script src="layerslider/js/greensock.js"></script>
<script src="layerslider/js/jquery.js"></script>
 <script src="layerslider/js/layerslider.transitions.js"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript">
    // Running the code when the document is ready
    $(document).ready(function(){
		'use strict';
        // Calling LayerSlider on the target element with adding custom slider options
        $('#layerslider').layerSlider({
            autoStart: true,
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1170,
            skinsPath: 'layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>
<!-- Newsletter validate -->
<script src="js/test.js"></script> <!-- Resource jQuery -->
<script src="assets/validate.js"></script>
<script src="js/tabs.js"></script>
		<script>
			new CBPFWTabs( document.getElementById( 'tabs' ) );
		</script>
</body>
</html>