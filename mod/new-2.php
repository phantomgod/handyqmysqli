<html>   
<head>
</head>   
<body>
<form name="frmMain" action="?seccion=checkbox2_trabajadores" method="post"  OnSubmit="return onDelete();">
<?php
require_once("../includes/mysql.php");
$db = new MySQL();  
$strSQL = "SELECT * FROM trabajadores";
$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']"); 

//Crea un checkbox 
echo "<center><input type=checkbox name=campos[] value='campo1_campo2_campo3'></center>"; 
//Aqui analizamos los checkeamos y los insertamos 
for($i=0;$i<count($_POST['campos']);$i++) {    
$field=explode("_",$_POST['campos'][$i]);    
$consulta = "INSERT INTO tabla (campo1,campo2,campo3) VALUES (".$field[0].",".$field[1].",".$field[2].")"; 
//Ejecuto la consulta 
$resultado = mysqli_query($Sistema, $consulta) or die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));    
} 

?>
</body>
</html>