<?php 
/** 
* Mod borrar auditores 
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
 
<form name="frmMain" action="?seccion=checkbox2_auditores" method="post"  OnSubmit="return onDelete();"> 
<?php    
 
$strSQL = "SELECT * FROM auditores"; 
$objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");    
?>    
    <table class="print" summary="Esta tabla muestra los auditores a borrar"> 
    <caption><?php echo AUDITORIAS_BORRAR_AUDITOR; ?></caption> 
    <thead><?php echo DELETE_ADVERTICE; ?></thead> 
    <tbody>  
    <tr>    
    <th>ID</th> 
    <th><?php echo AUDITORIAS_AUDITOR; ?></th> 
    <th><?php echo IMAGEN; ?></th> 
    <th><?php echo ESTADO; ?></th> 
    <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
    </tr> 
   
<?php    
$i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
    $i++;    
    ?>    
 
    <tr>  
    <td><?=$objResult['id'];?></td> 
    <td><?=$objResult['auditor'];?></td> 
    <td><img src="../<?=$objResult['imgsrc'];?>"></td> 
    <td><?=$objResult["activo"];?></td> 
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