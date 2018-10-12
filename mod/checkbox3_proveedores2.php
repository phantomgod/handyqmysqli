<html>
<head>
<link rel="stylesheet" type="text/css" href="/modulares/style.css">
<title>Borrar proveedores</title>
</head>
<body bgcolor=999999>

<script type="JavaScript">
function ClickCheckAll(vol)
{

var i=1;
for(i=1;i<=document.frmMain.hdnCount.value;i++)
{
if(vol.checked == true)
{
eval("document.frmMain.chkDel"+i+".checked=true");
}
else
{
eval("document.frmMain.chkDel"+i+".checked=false");
}
}
}

function onDelete()
{
if(confirm('Quiere borrar a este proveedor?')==true)
{
return true;
}
else
{
return false;
}
}
</script>
<form name="frmMain" action="../modulos/checkbox2_proveedores2.php" method="post"  OnSubmit="return onDelete();">
<?
require_once("../includes/mysql.php");
$db = new MySQL();
$strSQL = "SELECT * FROM proveedores";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table class="print">
<tr>
<th width="20"> <div align="center"><font color="#4698ca">ID  </font></div></th>
<th width="55"> <div align="center"><font color="#4698ca">Proveedor  </font></div></th>
<th width="60"> <div align="center"><font color="#4698ca">Estado  </font></div></th>
<th width="110"> <div align="center"><font color="#4698ca">CIF  </font></div></th>
<th width="100"> <div align="center"><font color="#4698ca">Direcci&oacute;n  </font></div></th>
<th width="80"> <div align="center"><font color="#4698ca">Suministro  </font></div></th>
<th width="100"> <div align="center"><font color="#4698ca">Criterios  </font></div></th>
<th width="300"> <div align="center"><font color="#4698ca">Datos  </font></div></th>
<th width="20"> <div align="center"><font color="#4698ca">Activo  </font></div></th>
<th width="30"> <div align="center">
<input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);">
</div></th>
</tr>
<?
$i = 0;
while($objResult = mysql_fetch_array($objQuery))
{
$i++;
?>
<tr>
<td><div  align="center"><?=$objResult["id"];?></div></td>
<td><?=$objResult["proveedor"];?></td>
<td><?=$objResult["estado"];?></td>
<td><?=$objResult["cif"];?></td>
<td><?=$objResult["direccion"];?></td>
<td><div  align="justify"><?=$objResult["suministro"];?></div></td>
<td><div  align="justify"><?=$objResult["criteriosdeevaluacion"];?></div></td>
<td><div  align="justify"><?=$objResult["datos"];?></div></td>
<td><?=$objResult["activo"];?></td>
<td align="center"><input type="checkbox" name="chkDel[]"  id="chkDel<?=$i;?>"  value="<?=$objResult["id"];?>"></td>
</tr>
<?
}
?>
</table>
	<br />
	<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</form>
</body>
</html>
