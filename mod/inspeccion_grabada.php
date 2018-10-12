<?php 
require_once("includes/mysql.php"); 
$db = new MySQL(); 
# AÑADIMOS EL NUEVO REGISTRO 
mysqli_query($mysqli, "INSERT INTO seguimientoinspecciones (fecha,inspector,site1,site2,site3,site4,site5,site6,site7,site8) VALUES ('{$_POST['fecha']}','{$_POST['inspector']}','{$_POST['site1']}','{$_POST['site2']}','{$_POST['site3']}','{$_POST['site4']}','{$_POST['site5']}','{$_POST['site6']}','{$_POST['site7']}','{$_POST['site8']}')"); 
echo "<H4>Registro A&Ntilde;ADIDO</b></H4><br><a href=\"../modulares/?mod=grabar_inspeccion\"><font color=ffffff><b>Grabar otra inspecci&oacute;n</b></font></a>"; 
?> 
