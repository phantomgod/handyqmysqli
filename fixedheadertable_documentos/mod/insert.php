 <?php  
require '../../lang/spanish.lang.php';
require_once '../../includes/mysqli.php';
//header('Content-Type: text/html;charset=UTF-8');
 $sql = "INSERT INTO servicios(idsolicitud,fecha,titulo,link,comment,seccionid,clave1) VALUES(
					'".$_POST["idsolicitud"]."',
					'".$_POST["fecha"]."',
					'".$_POST["titulo"]."',
					'".$_POST["link"]."',
					'".$_POST["comment"]."',
					'".$_POST["seccionid"]."',
					'".$_POST["clave1"]."')";  
 if(mysqli_query($mysqli, $sql))  
 {  
      echo 'Documento añadido!';  
 }  