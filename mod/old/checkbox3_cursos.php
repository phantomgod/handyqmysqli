<?php 
/** 
* Mod borrar cursos de formación 
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
 
<form name="frmMain" action="?seccion=checkbox2_cursos" method="post"  OnSubmit="return onDelete();"> 
<?php    
        $strSQL = "SELECT * FROM cursos"; 
        $objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");    
?>    
    <table class="print" summary="Esta tabla muestra los cursos a borrar"> 
    <caption><?php echo FORMACION_BORRAR_CURSO; ?></caption> 
    <thead></thead> 
    <tbody>    
    <tr>    
    <th>ID</th> 
    <th><?php echo SERVICIO_TRABAJADOR; ?></th> 
    <th><?php echo FORMACION_CURSO; ?></th> 
    <th><?php echo FECHA; ?></th> 
    <th><input name="CheckAll" type="checkbox" Id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
    </tr> 
       
    <?php    
    $i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
        $i++;    
        ?>    
     
    <tr>      
    <td><?=$objResult['id'];?></td> 
    <td><?=$objResult['trabajador'];?></td> 
    <td><?=$objResult['curso'];?></td> 
    <td style="width:100px"><?=$objResult['fecha'];?></td> 
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
