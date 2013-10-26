<!doctype html>
<html>
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
        	<div class="col-md-3"><a href="index.php" class="text-center"><img src="img/logo.png" width="100%"></a></div>
            <div class="col-md-9">&nbsp;</div>
            <div class="col-md-5 col-md-offset-4 text-right visible-lg">
            		<a class="btn btn-default">Inicio</a>&nbsp;
                    <a class="btn btn-default">Portafolio</a>&nbsp;
                    <a class="btn btn-default">Nosotros</a>&nbsp;
                    <a class="btn btn-default">Contacto</a>&nbsp;
            </div>
            <div class="col-md-5 col-md-offset-4 text-center hidden-lg">
            		<a class="btn btn-default" style="margin-top:3px;">Inicio</a>&nbsp;
                    <a class="btn btn-default" style="margin-top:3px;">Portafolio</a>&nbsp;
                    <a class="btn btn-default" style="margin-top:3px;">Nosotros</a>&nbsp;
                    <a class="btn btn-default" style="margin-top:3px;">Contacto</a>&nbsp;
            </div>
        </div>
        <hr>
        <hr style="margin-top:-10px;">
        <div class="row">
        	<div class="col-md-12">
            	<h2>Acerca de</h2>
                <h4 align="justify">Hoy en día las soluciones web cumplen un gran papel para el crecimiento de las empresas o para dar a conocer tanto a personas como grupos sociales. <br><br>
SlashInn ofrece el analisis, diseño y desarrollo de soluciones para su negocio. Haciendo uso de herramientas y modelos de construcción basados en las tecnologías actuales de información y comunicación.<br><br>
La construcción de soluciones para SlashInn nace de las necesidades de adaptación a las nuevas tecnologías, así como para difundir  y extender su negocio. Dichas necesidades serán analizadas dentro de las metodologías de desarrollo y modelos de soluciones, para asegurar que cada una de los objetivos del proyecto serán cubiertos en su totalidad.<br><br></h4>
            </div>
            <div class="col-md-3">
            	<div align="center">
                	<span class="btn btn-default active boton" style="width:80%; margin-bottom:2px;">Misión</span>
                    <span class="btn btn-default boton" style="width:80%; margin-bottom:2px;">Visión</span>
                    <span class="btn btn-default boton" style="width:80%;">Valores</span>
                </div>
            </div>
            <div class="col-md-12 hidden-lg hidden-md">&nbsp;</div>
            <div class="col-md-9 panel-heading panel contenido">
            	<h3 align="center">Misión</h3>Desarrollar soluciones tecnológicas innovadoras y de valor que permitan  satisfacer las necesidades de negocios, personas o instituciones, mejorando sus procesos productivos, ampliando su campo de venta o rango social y aumentando su competitividad ante un mundo moderno, a través de un equipo de trabajo cien porciento confiable, competente, honesto y comprometido con el desarrollo y mejoramiento constante.<br><br>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">&nbsp;</div>
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8"><blockquote>En SlashInn estamos comprometidos para la satisfacción total de nuestros clientes, brindándoles una gama extensa de opciones para la optimización de sus datos llevándolos a un nuevo mercado</blockquote>
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
		$('.boton').click(function() {
			var x;
			x=$(this).index();
			$('.boton:eq('+x+')').addClass("active");
			$('.boton:lt('+x+')').removeClass("active");
			$('.boton:gt('+x+')').removeClass("active");
			if(x==0){$('.contenido').html("<h3 align='center'>Misión</h3>Desarrollar soluciones tecnológicas innovadoras y de valor que permitan  satisfacer las necesidades de negocios, personas o instituciones, mejorando sus procesos productivos, ampliando su campo de venta o rango social y aumentando su competitividad ante un mundo moderno, a través de un equipo de trabajo cien porciento confiable, competente, honesto y comprometido con el desarrollo y mejoramiento constante.<br><br>")}
			
			if(x==1){$('.contenido').html("<h3 align='center'>Visión</h3>Posicionarnos como empresa líder en el mercado de desarrollo de soluciones en Tecnologías de Información en México, reconocidos por su calidad, excelencia y\n satisfacción total de los clientes.<br><br>")}
			
			if(x==2){$('.contenido').html("<h3 align='center'>Valores</h3>Los Valores  de SlashInn son las cualidades que nos distinguen y nos orientan para un buen trabajo. Es necesario que nuestra labor cotidiana los tenga presentes siempre, y los lleve a la práctica. <br>Los Valores de nuestra cultura corporativa son:<br><br> <ul><li>Responsabilidad</li><li>Puntualidad</li><li>Honestidad</li><li>Confidencialidad</li><li>Trabajo en equipo</li></ul><br><br>")}
		});
		$('.contenido li').click(function() {
			var i = $(this).index();
			$('.descripcion:eq('+i+')').css('display', 'inline');
		});
	</script>
</body>
</html>