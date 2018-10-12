<?php
$varrand = substr(md5(uniqid(rand())),0,10);
$varallw = array("image/bmp","image/gif","image/jpeg","image/pjpeg","image/png","image/x-png");
$varpath = "http://handyq.textblock.org/mod/faces/imagehosting.php?image=";
$varstat = "";

if (isset($_POST['action'])) {

if ($_POST["action"] == "upload") {
    if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
        $varname = $_FILES["imagen"]['name'];
        $vartemp = $_FILES['imagen']['tmp_name'];
        $vartype = mime_content_type($vartemp);

        if (in_array($vartype, $varallw) && $varname != "") {
            $arrname = explode(".", $varname);
            $varname = $varrand.".".$arrname[1];
            if (copy($vartemp, "tmp/".$varname)) {
                $varpath = $varpath.$varname;
                $varstat = "ok";
            } else {
                $varstat = "Error al subir el archivo";
            }
        } else {
            $varstat = "Archivo no valido";
        }
    }
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subir imagen</title>
<link href="cssupload.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table class="print">
  <tr>
    <td width="413" height="40" class="titulo">Subir imagen</td>
  </tr>
  <tr>
    <td class="text">Ponga una imagen digna:</td>
  </tr>
  <tr>
    <td height="50" valign="top" class="text">
   <form action="imagehosting.php" method="post" enctype="multipart/form-data">
      <input name="imagen" type="file" class="casilla" id="imagen" size="35" />
      <input name="enviar" type="submit" class="boton" id="enviar" value="Upload Image" />
      <input name="action" type="hidden" value="upload" />
   </form>
    </td>

  </tr>
  <?php if ($varstat == "ok") { ?>
  <tr>
    <td class="textinf"><strong>Confirmaci&oacute;n:</strong><br>
    Archivo publicado satisfactoriamente. Puedes utilizar las siguientes opciones para enlazarlo:<br>
    <strong>Enlace HTML:</strong> <br>
    <input name='txt1' type='text' value='<a href="<?php echo $varpath; ?>"><img src="<?php echo $varpath; ?>" border="0" /></a>' size='60'>
    <br>
    <strong>Enlace Directo: </strong><br>
    <input name='txt2' type='text' value='<?php echo $varpath; ?>' size='60'></td>
  </tr>
  <?php } else { ?>
      <?php if ($varstat != "") { ?>
      <tr>
        <td class="textinf"><strong>Error:</strong><br>
        <?php echo $varstat; ?>&nbsp;</td>
      </tr>
      <?php } ?>
  <?php } ?>
</table>
<?php if ($varstat == "ok") { ?>
<p align="center"><img src="tmp/<?php echo $varname; ?>"></p>
<?php } ?>
<?php

if (isset($_GET['image'])) {
if ($_GET['image'] != "") {



?>
<p align="center"><img src="tmp/<?php echo $_GET['image']; ?>"></p>
<?php
}
}
 ?>
</body>
</html>
