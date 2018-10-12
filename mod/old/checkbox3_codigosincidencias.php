<?php 
/** 
* Mod borrar códigos de incidencias de 
* inspecciones de servicio
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
 
<br /> 
<form name="frmMain" action="?seccion=checkbox2_codigosincidencias" method="post"  OnSubmit="return onDelete();"> 
<?php 
  
        $strSQL = "SELECT * FROM codigosincidencias"; 
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");    
?>    
<table class="print" summary="Muestra la lista de áreas sensibles a incidencias de proveedores"> 
 <caption><?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?></caption> 
<thead><?php echo DELETE_ADVERTICE; ?></thead> 
  <tbody>  
    <tr> 
        <th><?php echo CODIGO; ?></th> 
        <th><?php echo NOMBRE_INCIDENCIA; ?></th>         
        <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
    </tr> 
 
    <?php    
    $i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
    $i++;    
    ?> 
    <tr>    
        <td><?=$objResult["cod"];?></td> 
        <td><?=$objResult["codname"];?></td> 
        <td><input type="checkbox" name="chkDel[]"  id="chkDel<?=$i;?>"  value="<?=$objResult["id"];?>"></td> 
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