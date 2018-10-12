<html>   
<head>
<?php include('acciones/acciones_documentos.php');?>
</head>   
<body>
<script language="JavaScript">   
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
if (confirm('Quiere borrar el documento?')==true)
{   
return true;   
}   
else  
{   
return false;   
}   
}   
</script>   
<form name="frmMain" action="?seccion=checkbox2_links" method="post"  OnSubmit="return onDelete();">
<?php   
$strSQL = "SELECT * FROM enlaces";
$objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");   
?>
   
<table class="print" summary="Esta tabla muestra los documentos a borrar">
    <caption><?php echo BORRAR_DOCUMENTO; ?></caption>
    <thead><?php echo DELETE_ADVERTICE; ?></thead>
    <tbody> 
        <tr>   
            <th>ID</th>
            <th><?php echo NOMBRE_DOCUMENTO; ?></th>
            <th>Url</th>
            <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>   
        </tr>
      
    <?php   
    $i = 0;   
    while ($objResult = mysql_fetch_array($objQuery))   
    {   
    $i++;   
    ?>
  
        <tr>   
            <td><?=$objResult['id'];?></td>
            <td><?=$objResult['titulo'];?></td>
            <td><?=$objResult['link'];?></td>
            <td align="center"><input type="checkbox" name="chkDel[]"  id="chkDel<?=$i;?>"  value="<?=$objResult['id'];?>"></td>
        </tr>   
    <?php   
    }   
    ?>
    </tbody>   
</table>   
<input type="submit" name="btnDelete" value="<?php echo BORRAR; ?>">
<input type="hidden" name="hdnCount" value="<?=$i;?>">   
</form>
</body>   
</html>