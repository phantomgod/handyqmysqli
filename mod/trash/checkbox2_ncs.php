<html>   
<head>   
</head>   
<body>   
<?php
for($i=0;$i<count($_POST["chkDel"]);$i++)   
{   
if ($_POST["chkDel"][$i] != "")   
{   
$strSQL = "DELETE FROM hojasdemejora ";
$strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' ";
$objQuery = mysql_query($strSQL);   
}   
}   
echo NCS_NC_BORRADA;
echo "<br>";
?>
<a href="?seccion=checkbox3_ncs"><br><br><?php echo VOLVER; ?></a>
</body>   
</html>
