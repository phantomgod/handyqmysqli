<?php 
/** 
* Mod borrar documentos insertos en la bd 
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
  
<form name="frmMain" action="?seccion=checkbox2_docmanager" method="post"  OnSubmit="return onDelete();"> 
<?php 
    
$strSQL = "SELECT * FROM docmanager"; 
$objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");    
?>    
    <table class="print" summary="Esta tabla muestra los documentos a borrar"> 
    <caption><?php echo BORRAR_DOCUMENTO; ?></caption> 
    <thead><?php echo DELETE_ADVERTICE; ?></thead> 
    <tbody>   
    <tr>   
    <th><?php echo NOMBRE_DOCUMENTO; ?></th> 
    <th><?php echo DOCUMENTO_AUTOR; ?></th> 
    <th><?php echo FECHA; ?></th> 
    <th width="30"><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
    </tr> 
     
    <?php 
    $i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
    $i++;    
    ?> 
     <tr>    
    <td><?=$objResult['titulo'];?></td> 
    <td><?=$objResult['autor'];?></td> 
    <td><?=$objResult['fecha'];?></td> 
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