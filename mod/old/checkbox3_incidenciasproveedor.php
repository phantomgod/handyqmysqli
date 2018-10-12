<?php 
/** 
* Mod borrar incidencias de proveedor 
* 
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 
?> 
<html>    
<head>   
<script src="includes/checkbox3.js"></script> 
</head>    
<body> 


<form name="frmMain" action="?seccion=checkbox2_incidenciasproveedor" method="post"  OnSubmit="return onDelete();"> 
<?php 
        $strSQL = "SELECT * FROM incidenciasdeproveedor"; 
        $objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");    
?>    
    <table class="print" summary="Muestra la lista de los trabajadores a borrar"> 
    <caption><?php echo PROVEEDORES_BORRAR_INCIDENCIAS; ?></caption> 
     <thead><?php echo DELETE_ADVERTICE; ?></thead> 
      <tbody>  
       <tr> 
        <th>ID</th> 
        <th><?php echo PROVEEDORES_PROVEEDOR; ?></th> 
        <th><?php echo PROVEEDORES_INCIDENCIA; ?></th> 
        <th><?php echo PROVEEDORES_INCIDENCIA_CODIGO; ?></th> 
        <th><?php echo NCS_AFECTAA; ?></th> 
        <th><?php echo FECHA; ?></th> 
        <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
      </tr> 
 
    <?php    
    $i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
    $i++;    
    ?> 
    <tr>    
        <td><?=$objResult['id'];?></td> 
        <td><?=$objResult['proveedor'];?></td> 
        <td><?=$objResult['incidencia'];?></td> 
        <td><?=$objResult['codigoincidencia'];?></td> 
        <td><?=$objResult['afectaa'];?></td> 
        <td><?=$objResult['fecha'];?></td> 
        <td><input type="checkbox" name="chkDel[]"  id="chkDel<?=$i;?>"  value="<?=$objResult['id'];?>"></td> 
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