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
        <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <?php
	$nombre = $_GET['nombre'];
	$correo = $_GET['correo'];
	$tel = $_GET['tel'];
	$asunto = $_GET['asunto'];
	$mensaje = $_GET['mensaje'];
	
	$mailcontenido = " Correo: $correo  \n\t Nombre: $nombre \n\t Telefono: $tel \n\t Asunto: $asunto \n\t Mensaje: $mensaje ";
	
	if(!$nombre || !$correo || !$tel || !$mensaje || !$asunto){
		echo "<div class='alert alert-danger col-md-10'>El correo no se envio, verifica los campos.<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
	}
	else{
	mail("contacto@slashinn.com", "Formulario enviado de $nombre", $mailcontenido, "From: $correo");
	
	echo "<html><div class='alert alert-success col-md-10'>El correo se envio con exito.<button type='button' class='close' data-dismiss='alert'>&times;</button></div></html>";	
	}
	
	
	?>
        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
        <form class="form-signin" action="formulario.php" method="get">
        <h2 class="form-signin-heading">Formulario de contacto</h2>
        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
        <input type="email" class="form-control" placeholder="Correo" name="correo">
        <input type="tel" class="form-control" placeholder="Teléfono" name="tel">
        <h4>Asunto</h4>
        <select class="form-control" name="asunto">
          <option value="Comentario">Comentario</option>
          <option value="Queja">Queja</option>
          <option value="Sugerencia">Sugerencia</option>
        </select>
        <textarea class="form-control" placeholder="Mensaje" name="mensaje" rows="5"></textarea>
        <button class="btn btn-lg btn-default" type="submit">Enviar</button>
      </form>
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
</body>
</html>

