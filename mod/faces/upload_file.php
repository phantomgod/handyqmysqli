<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../../includes/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="includes/printstyle.css" media="print" />
</head>
<body>
<h1>Subir immagen</h1>

<?php
$allowedExts = array("gif", "jpeg", "jpg", "png", "PNG", "JPG");


$separado = explode(".", $_FILES["file"]["name"]);
$extension = array_pop($separado);


//$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Imagen subida:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . "<span class=resaltartexto4> " . $_FILES["file"]["name"] . "</span>" . "<br>";
    echo "Extensión:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . "<span class=resaltartexto4> " . $_FILES["file"]["type"] ."</span>" . "<br>";
    echo "Tamaño:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . "<span class=resaltartexto4> " . ($_FILES["file"]["size"] / 20000000) . " kB </span><br>";
    echo "Archivo temporal:<span class=resaltartexto4>&nbsp;&nbsp;" . $_FILES["file"]["tmp_name"] . "</span><br>";

    if (file_exists("tmp/" . $_FILES["file"]["name"]))
      {
      echo "<br /><span class=resaltartexto2>" . $_FILES["file"]["name"] . " ya existe!. " . "<span>";
      echo "<button onclick='history.go(-1);'>Reitentar </button>";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "tmp/" . $_FILES["file"]["name"]);
      echo "<br />Enlace a la imagen: -->&nbsp;<span class=resaltartexto3>" . "mod/faces/tmp/" . $_FILES["file"]["name"] . "</span>";
      }
    }
  }
else
  {
  echo "Invalid file";
  echo "<button onclick='history.go(-1);'>Reitentar </button>";
  }
?>
</body>
</html>