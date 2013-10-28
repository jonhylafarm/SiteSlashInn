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
            		<a class="btn btn-default">Inicio</a>&nbsp;
                    <a class="btn btn-default">Portafolio</a>&nbsp;
                    <a class="btn btn-default">Nosotros</a>&nbsp;
                    <a class="btn btn-default">Contacto</a>&nbsp;
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
            		<p align="center"><img src="img/nubehome.png" height="169" width="302"></p>
            		<p align="justify">Dedicados a la Creación y Optimización de soluciones para su empresa o negocio, haciendo uso de Tecnologías de Información y desarrollando alternativas viables para el mejoramiento y adaptación a nuevas tecnologías.</p>
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
		
		$( ".cNube" ).click(function() {
			var x;
			x=$(this).index();
			$(".nube").animate({marginLeft:-400},2000);
  			$( ".conte" ).delay(1000).fadeIn(2000);
			$('.cNube:eq('+x+')').addClass("cAct");
			$('.cNube:lt('+x+')').removeClass("cAct");
			$('.cNube:gt('+x+')').removeClass("cAct");
		});
	</script>
</body>
</html>