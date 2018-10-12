<html>   
<head>
<?php include('acciones/acciones_aisgc.php'); ?>
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
    if (confirm('<?php echo AUDITORIAS_QUIERE_BORRAR; ?>')==true)
        {   
        return true;   
        }   
    else  
        {   
        return false;   
        }   
    }   
</script>   
<form name="frmMain" action="?seccion=checkbox2_aisgc" method="post"  OnSubmit="return onDelete();">
<?php 

$strSQL = "SELECT * FROM aisgc";
$objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");   
?>   
<table class="print" summary="Esta tabla muestra las auditorías a borrar">
<caption><?php echo AUDITORIAS_BORRAR_AUDITORIA; ?></caption>
<thead><?php echo DELETE_ADVERTICE; ?></thead> 
<tbody> 
<tr>   
<th>ID</th>
<th><?php echo FECHA; ?></th>
<th><?php echo AINFORMES_NUMERO; ?></th>
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
<td><?=$objResult['fecha'];?></td>
<td><?=$objResult['ai'];?></td>
<td><input type="checkbox" name="chkDel[]"  id="chkDel<?=$i;?>"  value="<?=$objResult['id'];?>"></td>
</tr>   
<?php   
}   
?>   
</tbody>
</table>   
<div style="text-align:right;">
<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
</div>
<input type="hidden" name="hdnCount" value="<?php=$i;?>">   
</form>
</body>   
</html>