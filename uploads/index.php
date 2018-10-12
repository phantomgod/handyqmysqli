<!DOCTYPE html>
<head>
<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>

<body>
<?php
include("config.php");

function path_options()
{
 global $upload_dirs;
  $option = "";
  foreach ($upload_dirs as $path => $pinfo)
  {
    $option .= '<option value="'.$path.'">'.$pinfo["name"].'</option>';
  }
 return $option;
}

function check_vals()
{
 global $upload_dirs, $err;
	if (!ini_get("file_uploads")) { $err .= "El archivo no sube por la configuraci&oacute;n de su php.ini. Por favor, contecte con su proveedor de hosting."; return 0; }
	$pos = strpos(ini_get("disable_functions"), "move_uploaded_file");
	if ($pos !== false) { $err .= "El archivo no se mueve por la configuraci&oacute;n de su php.ini. Por favor, contecte con su proveedor de hosting."; return 0; }
  if (!isset($_POST["path"]) || (strlen($_POST["path"]) == 0)) { $err .= "Por favor, ponga la ruta"; return 0; }
  if (!isset($upload_dirs[$_POST["path"]])) { $err .= "Incorrect path"; return 0; }
  if (!isset($_POST["pwd"]) || (strlen($_POST["pwd"]) == 0)) { $err .= "<div class='span4 alert alert-danger'>Por favor, ponga el password</div>"; return 0; }
  elseif ($_POST["pwd"] != $upload_dirs[$_POST["path"]]["password"]) { $err .= "<div class='span4 alert alert-warning'>El password del upload es incorrecto</div>"; return 0; }
  if (!isset($_FILES["userfile"])) { $err .= "Empty file"; return 0; }
  elseif (!is_uploaded_file($_FILES['userfile']['tmp_name'])) { $err .= "Empty file"; return 0; }
 return 1;
}

$err = ""; $status = 0;
if (isset($_POST["upload"])) {
  if (check_vals()) {
    if (filesize($_FILES["userfile"]["tmp_name"]) > $max_file_size) $err .= "Tamaño m&aacute;ximo de archivo: $max_file_size bytes";
    else {
      if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $upload_dirs[$_POST["path"]]["dir"].$_FILES["userfile"]["name"])) {
				$status = 1;
			}
      else $err .= "Hay algunos errores!";
    }
  }
}

if (!$status) {
  if (strlen($err) > 0) echo "<h4>$err</h4>";
}
else {
  echo "<div class='span4 alert alert-success'>&quot;".$_FILES["userfile"]["name"]."&quot; se subi&oacute; satisfactoriamente.</div>";
}
?>
<p>Usted está subiendo archivos al servidor</p>
<!--<p class="cnt">&laquo; <a href="http://www.energyscripts.com/Products/product2.html">Back to Product page</a> &laquo;</p>-->
<p>(seleccione la carpeta, ponga su password, y dele al botón "subir").
	<br />Nota:<br> 
		Carpeta: &quot;Calidad&quot;, Password: &quot;calidad&quot;&nbsp;//&nbsp;
		Carpeta: &quot;Medioambiente&quot;, Password: &quot;medioambiente&quot;<br>
		Carpeta: &quot;PRL&quot;, Password: &quot;prl&quot;&nbsp;//&nbsp;
		Carpeta: &quot;Administrativos&quot;, Password: &quot;administrativos&quot;&nbsp;<br>
		Carpeta: &quot;Legales&quot;, Password: &quot;legales&quot;<br>
		Carpeta: &quot;Otros&quot;, Password: &quot;otros&quot;<br>
		Carpeta: &quot;pdf&quot;, Password: &quot;pdf&quot;<br>
		Usted tambi&eacute;n puede subir los archivos por ftp sin límite de tama&ntilde;o<br>
		Tama&ntilde;o m&aacute;ximo del archivo: <?php echo $max_file_size/1024?> Kb.</p><br />
<form enctype="multipart/form-data" action="index.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size?>" />
<table class="print" align="center">
  <tr>
    <td colspan="2" class="head_line">&nbsp;</td>
  </tr>
  <tr>
    <td>Carpeta:</td>
    <td><select name="path"><?php echo path_options()?></select></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" class="form-control input-large" id="ai_change" name="pwd"></td>
  </tr>
  <tr>
    <td>Archivo:</td>
    <td><input type="file" class="btn btn-success" name="userfile"></input></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><button type="submit" class="btn btn-primary" name="upload">Subir</button></td>
  </tr>
</table>
</form>
<!--<p class="cnt_powered">Powered by <a href="http://www.energyscripts.com" target="_blank">EnergyScripts</a>
<p class="cnt_small">Find more power solution: <a href="http://www.energyscripts.com/Products/product1.html" target="_blank">ES File Upload &amp; Download Manager</a>-->

</body>
</html>