<html>   
<head>   
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
if (confirm('<?php echo NCS_QUIERE_BORRAR; ?>')==true)
{   
return true;   
}   
else  
{   
return false;   
}   
}   
</script>   
<form name="frmMain" action="?seccion=checkbox2_ncs" method="post"  OnSubmit="return onDelete();">
<?php  
$strSQL = "SELECT * FROM hojasdemejora ORDER BY numhoja DESC";
$objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");   
?>   
<table class="print" summary="Esta tabla muestra NC&acute;s a borrar">
    <caption><?php echo NCS_BORRAR_NC; include('acciones/acciones_ncs.php'); ?></caption>
    <thead><?php echo DELETE_ADVERTICE; ?></thead>  
    <tbody>  
        <tr>   
        <!--<th>ID</th>
        <th>Auditor&iacute;a</th>-->
        <th><?php echo NCS_NUMERO; ?></th>
        <!--<th>Cód</th>-->
        <th><?php echo NCS_DESCRIPCION; ?></th>
        <th style width="100px"><?php echo FECHA; ?></th>
        <!--<th>Ref. Doc</th>
        <th>Abri&oacute;</th>
        <th>Afecta a</th>
        <th>Causas</th>
        <th>Acciones</th>
        <th>Plazo</th>
        <th>Cierre parc</th>
        <th>Eficacia</th>
        <th>Cerrado</th>
        <th>Desviaci&oacute;n</th>
        <th>Visible</th>-->
        <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>   
        </tr>

    <?php  
    $i = 0;   
    while ($objResult = mysql_fetch_array($objQuery))   
    {   
    $i++;   
    ?>     
    <tr>   
    <!--<td><div  align="center"><?=$objResult['id'];?></div></td>
    <td><?=$objResult['ai'];?></td>-->
    <td><?=$objResult['numhoja'];?></td>
    <!--<td><?=$objResult['codhoja'];?></td>-->
    <td><div  align="center"><?=$objResult['descripcion'];?></div></td>
    <td><?=$objResult['fecha'];?></td>
    <!--<td><?=$objResult['docum'];?></td>
    <td><?=$objResult['abiertopor'];?></td>
    <td><?=$objResult['afectaa'];?></td>
    <td><div  align="center"><?=$objResult['causas'];?></div></td>
    <td><div  align="center"><?=$objResult['acciones'];?></div></td>
    <td><?=$objResult['plazo'];?></td>
    <td><?=$objResult['cierresparc'];?></td>
    <td><?=$objResult['eficacia'];?></td>
    <td><?=$objResult['cerradofecha'];?></td>
    <td><?=$objResult['desviacion'];?></td>
    <td><?=$objResult['visible'];?></td>-->
    <td><input type="checkbox" name="chkDel[]"  id="chkDel<?=$i;?>"  value="<?=$objResult['id'];?>"></td>
    </tr>   
    <?php  
    }   
    ?>
    </tbody>
    </table>   
    <p align="right"><input type="submit" name="btnDelete" value="<?php echo BORRAR; ?>">
    <input type="hidden" name="hdnCount" value="<?=$i;?>">   
    </form>
    </body>   
    </html>