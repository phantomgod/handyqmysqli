<?php 
/** 
* Mod borrar auditorías al sistema de calidad 
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
while ($objResult = mysql_fetch_array($objQuery)) {    
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
<input type="submit" name="btnDelete" value="<?php echo BORRAR; ?>"> 
<input type="hidden" name="hdnCount" value="<?=$i;?>">    
</form> 
</body>    
</html>