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
            <div class="col-md-5 col-md-offset-4 text-center hidden-lg hidden-md">
            		<a class="btn btn-default" href="index.php">Inicio</a>&nbsp;
                    <a class="btn btn-default" href="portafolio.php">Portafolio</a>&nbsp;
                    <a class="btn btn-default" href="nosotros.php">Nosotros</a>&nbsp;
                    <a class="btn btn-default" href="contacto.php">Contacto</a>&nbsp;
            </div>
        </div>
        <hr>
        <hr style="margin-top:-10px;">
        <div class="row">
        	<div class="col-sm-3">
            	<a href="proyecto.php"><img class="img-rounded imgP" src="idp/detec.jpg" width="100%"></a>
                <span class="sobre">Detec Altech</span>
            </div>
        	<div class="col-sm-3">
            	<img class="img-rounded imgP" src="idp/detec.jpg" width="100%">
                <span class="sobre">Detec Altech</span>
            </div>
            <div class="col-sm-3">
            	<img class="img-rounded imgP" src="idp/detec.jpg" width="100%">
                <span class="sobre">Detec Altech</span>
            </div>
            <div class="col-sm-3">
            	<img class="img-rounded imgP" src="idp/detec.jpg" width="100%">
                <span class="sobre">Detec Altech</span>
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
		$('.col-sm-3').hover(function(){
			var x = $(this).index();
			$('.sobre:eq('+x+')').css('visibility','visible')},
			function(){$('.sobre').css('visibility','hidden')}
		);
	</script>
</body>
</html>