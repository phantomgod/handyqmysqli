<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php 
require_once("includes/mysql.php"); 
$db = new MySQL(); 
# AÑADIMOS EL NUEVO REGISTRO 
mysqli_query($mysqli, "INSERT INTO partedetrabajo (fecha,centrotrabajo,empleado,h1,c1,h2,c2,h3,c3,h4,c4,h5,c5,h6,c6,h7,c7,h8,c8,h9,c9,h10,c10,h11,c11,h12,c12,h13,c13,h14,c14,h15,c15,h16,c16,h17,c17,h18,c18,h19,c19,h20,c20,h21,c21,h22,c22,h23,c23,h24,c24) VALUES ('{$_POST['fecha']}','{$_POST['centrotrabajo']}','{$_POST['empleado']}','{$_POST['h1']}','{$_POST['c1']}','{$_POST['h2']}','{$_POST['c2']}','{$_POST['h3']}','{$_POST['c3']}','{$_POST['h4']}','{$_POST['c4']}','{$_POST['h5']}','{$_POST['c5']}','{$_POST['h6']}','{$_POST['c6']}','{$_POST['h7']}','{$_POST['c7']}','{$_POST['h8']}','{$_POST['c8']}','{$_POST['h9']}','{$_POST['c9']}','{$_POST['h10']}','{$_POST['c10']}','{$_POST['h11']}','{$_POST['c11']}','{$_POST['h12']}','{$_POST['c12']}','{$_POST['h13']}','{$_POST['c13']}','{$_POST['h14']}','{$_POST['c14']}','{$_POST['h15']}','{$_POST['c15']}','{$_POST['h16']}','{$_POST['c16']}','{$_POST['h17']}','{$_POST['c17']}','{$_POST['h18']}','{$_POST['c18']}','{$_POST['h19']}','{$_POST['c19']}','{$_POST['h20']}','{$_POST['c20']}','{$_POST['h21']}','{$_POST['c21']}','{$_POST['h22']}','{$_POST['c22']}','{$_POST['h23']}','{$_POST['c23']}','{$_POST['h24']}','{$_POST['c24']}')"); 
echo "<h2>Registro A&Ntilde;ADIDO</b></h2>"; 
echo "<a href=\"../modulares/?mod=poner_partetrabajo\"><font color=000000><b>Poner otro parte</b></font></a>"; 
?>