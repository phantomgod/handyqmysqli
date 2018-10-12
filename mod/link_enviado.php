<?php 
require_once("includes/mysql.php"); 
$db = new MySQL(); 
# AÑADIMOS EL NUEVO REGISTRO 
mysqli_query($mysqli, "INSERT INTO links (linkname,link) VALUES ('{$_POST['nombrecal']}','{$_POST['urlcal']}')"); 
mysqli_query($mysqli, "INSERT INTO admindocs (linkname,link) VALUES ('{$_POST['nombreadmin']}','{$_POST['urladmin']}')"); 
mysqli_query($mysqli, "INSERT INTO otrosdocs (linkname,link) VALUES ('{$_POST['nombreotros']}','{$_POST['urlotros']}')"); 
echo "<h4>Registro A&Ntilde;ADIDO</b></h4>"; 
echo "<a href=\"../modulares/?mod=docurl\"><b>Poner otro documento</b></a>"; 
?> 
