<html>   
<head>   
<title>Borrar documentos de calidad</title>
</head>   
<body>   
<?php
require_once("includes/mysql.php");
$db = new MySQL();

for($i=0;$i<count($_POST["chkDel"]);$i++)   
{   
if ($_POST["chkDel"][$i] != "")   
{   
$strSQL = "DELETE FROM enlaces ";
$strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' ";
$objQuery = mysql_query($strSQL);   
}   
}   
  
echo "Registro borrado.";

?>
<a href="?seccion=checkbox3_links"><br><br>Volver</a>
</body>   
</html>
