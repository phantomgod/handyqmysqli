<html>
<head>
<title>Borrar otros documentos</title>
</head>
<body>
	<?
require_once("includes/mysql.php");
$db = new MySQL();

for($i=0;$i<count($_POST["chkDel"]);$i++)
{
if ($_POST["chkDel"][$i] != "")
{
$strSQL = "DELETE FROM otrosdocs ";
$strSQL .="WHERE linkid = '".$_POST["chkDel"][$i]."' ";
$objQuery = mysql_query($strSQL);
}
}

echo "Registro borrado.";

?>
	<a href="../modulares/?mod=checkbox3_otrosdocs"><br>
	<br>Volver</a>
</body>
</html>
