<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Captura imagenes</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
	<link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-4">&nbsp;</div>
<div class="col-md-4">
<?

if ($_POST['subirBtn']) {
	echo"Entro<br>";
$nombre_archivo = $_FILES['imagen']['name']; 
$tipo_archivo = $_FILES['imagen']['type']; 
$tamano_archivo = $_FILES['imagen']['size']; 
echo "$nombre_archivo $tamano_archivo $tipo_archivo";
//compruebo si las características del archivo son las que deseo 
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 100000))) { 
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>"; 
}else{ 
   	if (move_uploaded_file($_FILES['imagen']['tmp_name'], "../idp/$nombre_archivo")){ 
      	 echo "El archivo ha sido cargado correctamente."; 
   	}else{ 
      	 echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
   	} 
} 
}
?>
<form id="subirImg" name="subirImg" enctype="multipart/form-data" method="post" action="imagen.php">
<label for="imagen">Subir imagen:</label>
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
<input type="file" name="imagen" id="imagen" />
<input type="submit" name="subirBtn" id="subirBtn" value="Subir imagen" />
</form>
</div>
</div>
</div>
<p>&nbsp;</p>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>