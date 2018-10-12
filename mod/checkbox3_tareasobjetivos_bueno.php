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

<form name="frmMain" action="?seccion=checkbox2_tareasobjetivos" method="post"  OnSubmit="return onDelete();"> 
<?php   
    $strSQL = "SELECT * FROM objetivosseguimiento"; 
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");    
?>    

    <?php echo DELETE_ADVERTICE; ?>
    <table class="sortable"> 
     <caption><?php echo OBJETIVOS_BORRAR_TAREA; ?></caption> 
        <tbody>  
            <tr> 
                <th>ID</th> 
                <th><?php echo CODIGO; ?></th> 
                <th><?php echo ACCION; ?></th> 
                <th><?php echo RESPONSABLE; ?></th> 
                <th><?php echo LIMITE; ?></th> 
                <th><?php echo TERMINACION; ?></th> 
                <th><?php echo OBSERVACIONES; ?></th> 
                <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>    
            </tr> 
          
        <?php   
        $i = 0;    
while ($objResult = mysqli_fetch_array($objQuery)) {    
        $i++;    
        ?> 
             
        <tr>    
        <td><?php echo $objResult['Id'];?></td>
        <td><?php echo $objResult['codigoobjetivo'];?></td> 
        <td><?php echo $objResult['accion'];?></td> 
        <td><?php echo $objResult['responsable'];?></td> 
        <td><?php echo $objResult['fechalimite'];?></td> 
        <td><?php echo $objResult['fechaterminacion'];?></td>
        <td><?php echo $objResult['observaciones'];?></td>
        <td><input type="checkbox" name="chkDel[]"  Id="chkDel<?php echo $i;?>"  value="<?php echo $objResult['Id'];?>"></td> 
        </tr>    
        <?php   
}    
        ?> 
       </tbody>    
</table>   
	<br />
	<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">  
</form>