<?php 
/** 
* Mod borrar áreas sensibles 
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
 
<form name="frmMain" action="?seccion=checkbox2_areassensibles" method="post"  OnSubmit="return onDelete();"> 
<?php 
  
$strSQL = "SELECT * FROM areassensibles"; 
$objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");    
?>    
<table class="print" summary="Muestra la lista de áreas sensibles a incidencias de proveedores"> 
 <caption><?php echo PROVEEDORES_BORRAR_AREASSENSIBLES;?></caption> 
 
<thead><?php echo DELETE_ADVERTICE; ?></thead> 
  <tbody>  
    <tr> 
        <th>ID</th> 
        <th><?php echo PROVEEDORES_AREASENSIBLE; ?></th>         
        <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
    </tr> 
 
    <?php    
    $i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
    $i++;    
    ?> 
    <tr>    
        <td><?=$objResult['id'];?></td> 
        <td><?=$objResult['nombrearea'];?></td> 
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