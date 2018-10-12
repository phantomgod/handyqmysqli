<html>   
<head>   
</head>   
<body>   
<?php   
require_once("includes/mysql.php");
$db = new MySQL();

for($i=0;$i<count($_POST["chkDel"]);$i++)   
{   
if ($_POST["chkDel"][$i] != "")   
{   
$strSQL = "DELETE FROM aisgc ";
$strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' ";
$objQuery = mysql_query($strSQL);   
}   
}   
echo AUDITORIAS_AUDITORIA_BORRADA;
  
?>
<a href="?seccion=checkbox3_aisgc"><br><br><?php echo VOLVER; ?></a>
</body>   
</html>
