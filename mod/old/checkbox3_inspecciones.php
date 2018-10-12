<?php 
/** 
* Mod borrar inspecciones de servicio 
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
   
<form name="frmMain" action="?seccion=checkbox2_inspecciones" method="post"  OnSubmit="return onDelete();"> 
<?php   
    $strSQL = "SELECT * FROM inspecciones ORDER BY fecha DESC"; 
    $objQuery = mysql_query($strSQL) or die ("Error Query ['.$strSQL.']");    
?>    
    <table class="print" summary="Esta tabla muestra las auditorías a borrar"> 
     <caption><?php echo INSPECCIONES_BORRAR_INSPECCION; ?></caption> 
      <thead></thead> 
       <tbody> 
        <tr>    
        <th>ID  </th> 
        <th><?php echo INSPECCIONES_INSPECTOR; ?></th> 
        <th><?php echo FECHA; ?></th> 
        <!--<th>Servicio  </th> 
        <th>Hora  </th> 
        <th>Trabajador  </th> 
        <th>Incidencia  </th> 
        <th>C&oacute;digo  </th>--> 
        <th><input name="CheckAll" type="checkbox" Id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
        </tr> 
          
        <?php   
        $i = 0;    
while ($objResult = mysql_fetch_array($objQuery)) {    
        $i++;    
        ?> 
             
        <tr>    
        <td><?=$objResult['Id'];?></td> 
        <td><?=$objResult['inspector'];?></td> 
        <td><?=$objResult['fecha'];?></td> 
        <!--<td><?=$objResult['servicio'];?></td> 
        <td><?=$objResult['hora'];?></td> 
        <td><?=$objResult['vigilante'];?></td>--> 
        <td><?=$objResult['incidencia'];?></td> 
        <!--<td><?=$objResult['codigo_incidencia'];?></td>--> 
        <td><input type="checkbox" name="chkDel[]"  Id="chkDel<?=$i;?>"  value="<?=$objResult['Id'];?>"></td> 
        </tr>    
        <?php   
}    
        ?> 
       </tbody>    
</table>   
<br />  
<input type="submit" name="btnDelete" value="<?php echo BORRAR; ?>"> 
<input type="hidden" name="hdnCount" value="<?=$i;?>">    
</form> 
</body>    
</html>