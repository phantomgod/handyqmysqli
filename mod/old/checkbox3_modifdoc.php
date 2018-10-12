<?php 
/** 
* Mod borrar modificaciones a los documentos 
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

<form name="frmMain" action="?seccion=checkbox2_modifdoc" method="post"  OnSubmit="return onDelete();"> 
<?php 
   
    $strSQL = "SELECT * FROM modifdoc"; 
    $objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");    
?>    
    <table class="print" summary="Muestra la lista de modificaciones de documentos a borrar"> 
     <caption><?php echo DOCUMENTOS_BORRAR_MODIFICACION; ?></caption> 
      <thead><?php echo DELETE_ADVERTICE; ?></thead> 
       <tbody>  
        <tr> 
            <!--<th>ID</th>--> 
            <th><?php echo NOMBRE_DOCUMENTO; ?></th> 
            <th><?php echo DOCUMENTOS_NUMEROREVISION; ?></th> 
            <th><?php echo DOCUMENTOS_MODIFICACION; ?></th> 
            <th><?php echo DOCUMENTOS_CAPAPART; ?></th> 
            <th><?php echo DOCUMENTOS_FECHAMODIFICACION; ?></th> 
            <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
        </tr> 
 
    <?php   
    $i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
    $i++;    
    ?> 
    <tr>    
        <!--<td><?=$objResult['id'];?></td>--> 
        <td><?=$objResult['titulo'];?></td> 
        <td><?=$objResult['revision_num'];?></td> 
        <td><?=$objResult['modificacion'];?></td> 
        <td><?=$objResult['capapart'];?></td> 
        <td><?=$objResult['fechamodificacion'];?></td> 
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