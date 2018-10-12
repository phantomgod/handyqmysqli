<html>
<head>
<title>Borrar documento administrativo</title>
</head>
<body>
<p class="pcenter">
<script type="JavaScript">
function ClickCheckAll(vol)
{

var i=1;
for(i=1;i<=document.frmMain.hdnCount.value;i++)
{
if (vol.checked == true)
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
if (confirm('Quiere borrar?')==true)
{
return true;
}
else
{
return false;
}
}
</script>
<form name="frmMain" action="?mod=checkbox2_admindocs" method="post"  OnSubmit="return onDelete();">
<?php
require_once("includes/mysql.php");
$db = new MySQL();

//$objConnect = mysql_connect("localhost","root","root") or  die(mysql_error());
//$objDB = mysql_select_db("copt");

$strSQL = "SELECT * FROM admindocs";
$objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");
?>
<table class="print">
<tr>
<th width="30"> <div align="center"><font color="#4698ca">ID  </font></div></th>
<th width="120"> <div align="center"><font color="#4698ca">Nombre  </font></div></th>
<th width="300"> <div align="center"><font color="#4698ca">Url  </font></div></th>
<th width="30"> <div align="center">
<input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);">
</div></th>
</tr>
<?php
$i = 0;
while ($objResult = mysql_fetch_array($objQuery))
{
$i++;
?>
<tr>
<td><div  align="center"><?php $objResult['linkid'];?></div></td>
<td><?php $objResult['linkname'];?></td>
<td><?php $objResult['link'];?></td>
<td align="center"><input type="checkbox" name="chkDel[]"  id="chkDel<?php $i;?>"  value="<?php $objResult['linkid'];?>"></td>
</tr>
<?php
}
?>
</table>
<?php
//mysql_close($objConnect);
?>
<input type="submit" name="btnDelete" value="Borrar">
<input type="hidden" name="hdnCount" value="<?php $i;?>">
</form>
</body>
</html>
