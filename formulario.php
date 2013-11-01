
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Beehouse &middot; La Casa de la Abeja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1500px;
      }
	  .form-signin {
        max-width: 400px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"],
      .form-signin input[type="email"],
      .form-signin input[type="tel"],
      .form-signin textarea,
      .form-signin select {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
    <div class="row">
    	<div class="span4"><a href="index.php"><img src="img/logo.png" width="100%"></a></div>
        <div class="span4">&nbsp;</div>
        <div class="span4 text-right" style="padding-top:5%;">
        	Telefono: 01 (712) 122 1815<br>
        	Correo: <a href="mailto:ventas@beehouse.mx">ventas@beehouse.mx</a><br>
           <a href="http://www.facebook.com/pages/Bee-House-La-miel-es-salud/192126234210973">Facebook</a>
        </div>
        <div class="span12">&nbsp;</div>
    </div>
      <div class="navbar">
  <div class="navbar-inner">
    <div class="container">

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" style="height:10px; margin:8px 0 0 0;" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-chevron-down" style=" margin:-5px 0 0 0;"></span>
      </a>

      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand visible-tablet visible-phone" href="#">Inicio</a>

      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <ul class="nav">
        	<li class="dropdown">
            	<a data-toggle="dropdown" class="dropdown-toggle" href="#" onClick="return false;">Productos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                	<li><a href="#" onClick="return false;">Acero Inoxidable</a></li>
                    <li><a href="#" onClick="return false;">Material Biológico</a></li>
                    <li><a href="#" onClick="return false;">Equipo de campo</a></li>
                    <li><a href="#" onClick="return false;">Implementos</a></li>
                    <li><a href="#" onClick="return false;">Miel</a></li>
                    <li><a href="#" onClick="return false;">Seguridad</a></li>
                </ul>
          	</li>
            <li><a href="emp.php">Empresa</a></li>
  			<li><a href="#">Contacto</a></li>
		</ul>
      </div>
    </div>
  </div>
</div>
<?php
	$nombre = $_GET['nombre'];
	$correo = $_GET['correo'];
	$tel = $_GET['tel'];
	$asunto = $_GET['asunto'];
	$mensaje = $_GET['mensaje'];
	
	$mailcontenido = " Correo: $correo  \n\t Nombre: $nombre \n\t Telefono: $tel \n\t Asunto: $asunto \n\t Mensaje: $mensaje ";
	
	if(!$nombre || !$correo || !$tel || !$mensaje || !$asunto){
		echo "<div class='alert alert-error'>El correo no se envio, verifica los campos.<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
	}
	else{
	mail("azael261188@hotmail.com", "Formulario enviado de $nombre", $mailcontenido, "From: $correo");
	
	echo "<div class='alert alert-success'>El correo se envio con exito.<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";	
	}
	
	
	?>
	  <form class="form-signin" action="formulario.php" method="get">
        <h2 class="form-signin-heading">Formulario de contacto</h2>
        <input type="text" class="input-block-level" placeholder="Nombre" name="nombre">
        <input type="email" class="input-block-level" placeholder="Correo" name="correo">
        <input type="tel" class="input-block-level" placeholder="Teléfono" name="tel">
        <h4>Asunto</h4>
        <select class="input-block-level" name="asunto">
          <option value="Comentario">Comentario</option>
          <option value="Queja">Queja</option>
          <option value="Sugerencia">Sugerencia</option>
        </select>
        <textarea class="input-block-level" placeholder="Mensaje" name="mensaje" rows="5"></textarea>
        <button class="btn btn-large btn-primary" type="submit">Enviar</button>
      </form>

      <hr>
      <div class="footer">
        <p class="text-right">&copy; Beehouse</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
