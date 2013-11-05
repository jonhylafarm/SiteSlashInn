<?php require_once('../Connections/SlashInn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO Proyecto (Nombre, Descripcion, Miniatura, Tipo, Link, Estado) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Descripcion'], "text"),
                       GetSQLValueString($_POST['Miniatura'], "text"),
                       GetSQLValueString($_POST['Tipo'], "int"),
                       GetSQLValueString($_POST['Link'], "text"),
                       GetSQLValueString(isset($_POST['Estado']) ? "true" : "", "defined","1","0"));

  mysql_select_db($database_SlashInn, $SlashInn);
  $Result1 = mysql_query($insertSQL, $SlashInn) or die(mysql_error());
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Captura</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
	<link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-4">&nbsp;</div>
<div class="col-md-4"><h3 class="text-center">Nuevo Proyecto</h3></div>
<div class="col-md-4">&nbsp;</div>
</div>
<div class="row">
<div class="col-md-4">&nbsp;</div>
<div class="col-md-4">
<form method="post" name="form1" class="form-group" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td>&nbsp;</td>
      <td class="input-group" width="100%"><span class="input-group-addon">N</span><input class="form-control" placeholder="Nombre" type="text" name="Nombre" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
    <td>&nbsp;</td>
      <td class="input-group"><textarea class="form-control" placeholder="Descripción" name="Descripcion" cols="50" rows="5"></textarea></td>
    </tr>
    <tr valign="baseline">
    <td>&nbsp;</td>
      <td class="input-group" width="100%"><span class="input-group-addon glyphicon glyphicon-picture"></span><input class="form-control" placeholder="Miniatura" type="text" name="Miniatura" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td valign="middle">Tipo:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input class="radio-inline" type="radio" name="Tipo" value="0" >
            Empresa</td>
        </tr>
        <tr>
          <td><input class="radio-inline" type="radio" name="Tipo" value="1" >
            Web</td>
        </tr>
        <tr>
          <td><input class="radio-inline" placeholder="Aplicación" type="radio" name="Tipo" value="2" >
            Aplicación</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
    	<td>&nbsp;</td>
      <td class="input-group" width="100%"><span class="input-group-addon glyphicon glyphicon-hand-up"></span><input class="form-control" placeholder="Link" type="text" name="Link" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td width="60">Activo:</td>
      <td><input class="checkbox" type="checkbox" name="Estado" value="" ></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="form-control" type="submit" value="Insert record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
</div>
</div>
</div>
<p>&nbsp;</p>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>