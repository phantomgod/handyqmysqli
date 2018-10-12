<html>   
<head>   
<title>Borrar proveedor</title>
</head>   
<body>   
<?php
require_once("../includes/mysql.php");
$db = new MySQL();

for($i=0;$i<count($_POST["chkDel"]);$i++)   
{   
if($_POST["chkDel"][$i] != "")   
{   
$strSQL = "DELETE FROM proveedores";
$strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' ";
$objQuery = mysqli_query($mysqli, $strSQL);   
}   
}   
echo "Proveedor borrado.";
echo "<br>";
echo 'MySQL Error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
?>
<a href="../modulos/checkbox3_proveedores2.php"><br><br>Volver</a>
</body>   
</html>
