<?php 
require_once("includes/mysql.php"); 
$db = new MySQL(); 
# AÑADIMOS EL NUEVO REGISTRO 
mysqli_query($mysqli, "INSERT INTO proveedores (proveedor,estado,cif,direccion,suministro,criteriordeevaluacion,datos,activo) VALUES ('{$_POST['proveedor']}','{$_POST['estado']}','{$_POST['cif']}','{$_POST['direccion']}','{$_POST['suministro']}','{$_POST['criteriosdeevaluacion']}','{$_POST['datos']}','{$_POST['activo']}')"); 
echo "<h4>Proveedor A&Ntilde;ADIDO</h4>"; 
echo "<a href=\"../modulares/?mod=poner_proveedor\"><font color=#4698ca><b>Añadir otro proveedor</b></font></a>"; 
?>