 <?php  
require '../../lang/spanish.lang.php';
require_once '../../includes/mysqli.php';
header('Content-Type: text/html;charset=UTF-8');
 $sql = "INSERT INTO servicios(servicio,activo,tiposervicio) VALUES('".$_POST["servicio"]."','".$_POST["activo"]."','".$_POST["tiposervicio"]."')";  
 if(mysqli_query($mysqli, $sql))  
 {  
      echo 'Servicio añadido!';  
 }  