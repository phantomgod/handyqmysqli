<html>
<head>
<meta http-equiv="refresh"
	content="3; URL=?seccion=checkbox3_extintores">
</head>
<body>
	<?php
require_once("includes/mysql.php");
$db = new MySQL();

for($i=0;$i<count($_POST["chkDel"]);$i++)
{
if ($_POST["chkDel"][$i] != "")
{
$strSQL = "DELETE FROM extintores ";
$strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' ";
$objQuery = mysqli_query($mysqli, $strSQL);
}
}
echo EXTINTORES_EXTINTOR_BORRADO;
	echo "<br>";
	
	echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>';

?>

</body>
</html>