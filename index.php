<!doctype html>
<html>


<?php
function ObtenerNavegador($user_agent) {
     $navegadores = array(
          'Internet Explorer 8' => '(MSIE 8\.[0-9]+)',
          'Internet Explorer 7' => '(MSIE 7\.[0-9]+)',
          'Internet Explorer 6' => '(MSIE 6\.[0-9]+)',
          'Internet Explorer 5' => '(MSIE 5\.[0-9]+)',
          'Internet Explorer 4' => '(MSIE 4\.[0-9]+)',
);
foreach($navegadores as $navegador=>$pattern){
       if (eregi($pattern, $user_agent))
       
	   return 'Este sitio Funciona mejor en Exploradores mâs recientes, Opciones:
	   <html> 
	   <a href="https://www.google.com/intl/es/chrome/browser/?hl=es"> Chrome </a>
	   <a href="http://www.mozilla.org/es-MX/firefox/new/"> FireFox </a>
	   <a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie"> Internet Explorer </a>
	   
	   </html>
	    ';
    }
return '';
}
?>



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
<title> &lt; Slash/Inn &gt; - Soluciones en TI</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">&nbsp;</div>
        	<?php echo ObtenerNavegador($_SERVER['HTTP_USER_AGENT']) ?>
            <div class="col-md-3"><a href="index.php" class="text-center"><img src="img/logo.png" width="100%"></a></div>
            <div class="col-md-9">&nbsp;</div>
            <div class="col-md-5 col-md-offset-4 text-right visible-lg">
            
            		<a class="btn btn-default" href="index.php">Inicio</a>&nbsp;
                    <a class="btn btn-default" href="portafolio.php">Portafolio</a>&nbsp;
                    <a class="btn btn-default" href="nosotros.php">Nosotros</a>&nbsp;
                    <a class="btn btn-default" href="contacto.php">Contacto</a>&nbsp;
            </div>
            <div class="col-md-5 col-md-offset-4 text-center hidden-lg">
            		<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Menú</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    	<li><a href="index.php">Inicio</a></li>
        <li><a href="portafolio.php">Portafolio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>          
            </div>
        </div>
        <hr>
        <hr style="margin-top:-10px;">
        <div class="row visible-lg">
        <div class="col-md-12">
        	<div class="nube">
            		
            		<div class="cNube" style="margin:0 0 0 65px;">Bienvenida</div>
                    <div class="cNube" style="margin:0 0 0 -25px;">Análisis</div>
                    <div class="cNube" style="margin:-50px 0 0 0;">Diseño</div>
                    <div class="cNube" style="margin:-40px 0 0 -35px;">Desarrollo</div>
                    <div class="cNube" style="margin:-55px 0 0 -15px; padding-top:50px; font-size:16px;">Administración y mantenimiento</div>
                    <p class="text-center"><img src="img/slashinn.png" height="72" width="391"></p>
                    <h4 class="text-center">/* Llevando tus requerimientos y adaptando tus necesidades al mundo moderno */</h4>
            </div>
            <div class="conte">
            		<div class="cerrar"> X </div>
            		<p align="center"><img src="img/nubehome.png" width="90%"></p>
            		<p align="justify">Dedicados a la Creación y Optimización de soluciones para su empresa o negocio, haciendo uso de Tecnologías de Información y desarrollando alternativas viables para el mejoramiento y adaptación a nuevas tecnologías.</p>
            </div>
            <div class="conte">
            		<div class="cerrar"> X </div>
            		<p align="center"><img src="img/nubeanalisis.png" width="90%"></p>
            		<p align="justify">Estudio de ideas y objetivos para su empresa; haciendo uso de estructuras y modelos de construcción web.<br>
Estudio sobre viabilidad de soluciones haciendo uso de herramientas estadísticas tomando en cuenta las necesidades y/o intereses de a quien va dirigida la solución.
</p>
            </div>
            <div class="conte">
            		<div class="cerrar"> X </div>
            		<p align="center"><img src="img/nubediseno.png" width="90%"></p>
            		<p align="justify">Creación de elementos visuales que sean atractivos y a la vez funcional para su sitio.<br>
Estructuras estáticas y dinámicas, haciendo uso de elementos visuales adecuados para su empresa.<br>
Personalización de sitios.<br>
Retoque de logos, banners e imágenes emblemáticas de su empresa.
</p>
            </div>
            <div class="conte">
            		<div class="cerrar"> X </div>
            		<p align="center"><img src="img/nubedesarrollo.png" width="90%"></p>
            		<p align="justify">Ingeniería del Software para la creación o reestructuración de sitios, sistemas o soluciones.<br>
Transformando sus ideas y solucionando sus necesidades en el mundo moderno estructurando  ideas y requerimientos.
</p>
            </div>
            <div class="conte">
            		<div class="cerrar"> X </div>
            		<p align="center"><img src="img/nubeaym.png" width="90%"></p>
            		<p align="justify">Constancia en el monitoreo de desarrollos, actualización de datos, cambios según requerimientos.<br>
Brindando a nuestros clientes la capacidad de realizar cambios en sus sitios y a su vez brindándole nuestro apoyo para dudas o cambios.
</p>
            </div>
        </div>
        </div>
        <div class="row hidden-lg">
        	<div class="col-md-1">&nbsp;</div>
       		<div class="col-md-10">
            		<div id="carousel" class="carousel slide" data-ride="carousel">
  						<!-- Wrapper for slides -->
  						<div class="carousel-inner">
    					<div class="item active">
      						<img src="img/nube1.png" alt="Slash Inn" width="100%">
                            <div class="carousel-caption">Dedicados a la Creación y Optimización de soluciones para su empresa o negocio<spam class="hidden-xs">haciendo uso de Tecnologías de Información y desarrollando alternativas viables para el mejoramiento y adaptación a nuevas tecnologías.</spam></div>
    					</div>
    					<div class="item">
      						<img src="img/nube2.png" alt="Slash Inn" width="100%">
                            <div class="carousel-caption">Estudio de ideas y objetivos para su empresa; haciendo uso de estructuras y modelos de construcción web.<br>
<spam class="hidden-xs">Estudio sobre viabilidad de soluciones haciendo uso de herramientas estadísticas tomando en cuenta las necesidades y/o intereses de a quien va dirigida la solución.</spam></div>
    					</div>
                        <div class="item">
      						<img src="img/nube3.png" alt="Slash Inn" width="100%">
                            <div class="carousel-caption">Creación de elementos visuales que sean atractivos y a la vez funcional para su sitio.<br><spam class="hidden-xs">
Estructuras estáticas y dinámicas, haciendo uso de elementos visuales adecuados para su empresa.<br>
Personalización de sitios.<br>
Retoque de logos, banners e imágenes emblemáticas de su empresa.</spam></div>
    					</div>
                        <div class="item">
      						<img src="img/nube4.png" alt="Slash Inn" width="100%">
                            <div class="carousel-caption">Ingeniería del Software para la creación o reestructuración de sitios, sistemas o soluciones.<br><spam class="hidden-xs">
Transformando sus ideas y solucionando sus necesidades en el mundo moderno estructurando  ideas y requerimientos.</spam></div>
    					</div>
                        <div class="item">
      						<img src="img/nube5.png" alt="Slash Inn" width="100%">
                            <div class="carousel-caption">Constancia en el monitoreo de desarrollos, actualización de datos, cambios según requerimientos.<br><spam class="hidden-xs">
Brindando a nuestros clientes la capacidad de realizar cambios en sus sitios y a su vez brindándole nuestro apoyo para dudas o cambios.</spam></div>
    					</div>
  					</div>
  					<!-- Controls -->
  					<a class="left carousel-control" href="#carousel" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left"></span>
  					</a>
  					<a class="right carousel-control" href="#carousel" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right"></span>
  					</a>
				</div>
            </div>
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-12" style="margin:-5px 0 10px 0;">
        		<img src="img/twitter.png" height="40" width="40">&nbsp;&nbsp;
                <img src="img/FB.png" height="40" width="40">
            	<span class="pull-right" style=" margin-top:10px;">Slash Inn 2013 &copy;</span>
        	</div>
    </div>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
		var ancho = $(document).width();
		var mi;
		if(ancho>1200){mi=375}
		else { mi=(ancho-450)/2;}
		$('.nube').css('margin-left',mi);
		$( ".cNube" ).click(function() {
			var x;
			x=$(this).index();
			$('.nube').animate({marginLeft:0},2000);
  			$( '.conte:eq('+x+')').delay(1000).fadeIn(2000);
			$('.conte:lt('+x+')').fadeOut(1000);
			$('.conte:gt('+x+')').fadeOut(1000);
			$('.cNube:eq('+x+')').addClass("cAct");
			$('.cNube:lt('+x+')').removeClass("cAct");
			$('.cNube:gt('+x+')').removeClass("cAct");
		});
		$('.cerrar').click(function(){
			$('.conte').fadeOut(2000);
			$('.nube').delay(1000).animate({marginLeft:mi},2000);
			$('.cNube').removeClass("cAct");
		}
		)
		$('#carousel').carousel({
  			interval: 5500
		})
	</script>
</body>
</html>