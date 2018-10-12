<html>   
<head>   
<title>Borrar otros documentos</title>
</head>   
<body>
<center>
<script language="JavaScript">   
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
if(confirm('Quiere borrar este documento?')==true)
{   
return true;   
}   
else  
{   
return false;   
}   
}   
</script>   
<form name="frmMain" action="?mod=checkbox2_otrosdocs" method="post"  OnSubmit="return onDelete();">
<?   
require_once("includes/mysql.php");
$db = new MySQL();

$strSQL = "SELECT * FROM otrosdocs";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");   
?>   
<table width="500" border="1">
<tr>   
<th width="30"> <div align="center"><font color="#4698ca">ID  </font></div></th>
<th width="120"> <div align="center"><font color="#4698ca">Nombre  </font></div></th>
<th width="300"> <div align="center"><font color="#4698ca">Url  </font></div></th>
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
<td><div  align="center"><?=$objResult["linkid"];?></div></td>
<td><?=$objResult["linkname"];?></td>
<td><?=$objResult["link"];?></td>
<td align="center"><input type="checkbox" name="chkDel[]"  id="chkDel<?=$i;?>"  value="<?=$objResult["linkid"];?>"></td>
</tr>   
<?   
}   
?>   
</table>   
<?   
//mysql_close($objConnect);
?>   
	<br />
	<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">  
</form>
<!--<meta http-equiv="refresh" content="0;URL=checkbox3.php">-->
</body>   
</html>
