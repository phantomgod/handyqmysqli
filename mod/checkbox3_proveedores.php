<?php
/**
* Mod borrar proveedores
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM proveedores ) m');

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

if($result === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

//--------------------------fin contar registros
?>

<form name="frmMain" action="?seccion=checkbox2_proveedores" method="post"  OnSubmit="return onDelete();">
<?php
    $strSQL = "SELECT * FROM proveedores";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

    <span class="yellow"><?php echo PROVEEDORES_BORRAR_PROVEEDOR; ?></span>
	
    <table id="myTable" class="sortable">
       <thead>
			<tr>
				<th>ID  </th>
				<th><?php echo PROVEEDORES_PROVEEDOR; ?></th>
				<th><i class="fa fa-eye"></i></th>
				<th><?php echo ESTADO; ?></th>
				
				<!--<th>Direcci&oacute;n  </th>-->
				<th><?php echo PROVEEDORES_SUMINISTRO; ?></th>
				<!--<th>Criterios  </th>
				<th>Datos  </th>-->
				<th><?php echo PROVEEDORES_ACTIVESTATUS; ?></th>
				<th width="30"><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>
			</tr>
		</thead>
		<tbody>		

        <?php
        $i = 0;
while ($row = mysqli_fetch_array($objQuery)) {
        $i++;
        ?>
         <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['proveedor'];?></td>
       	<td>
			
			<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							<a href="mod/javaformdelete_proveedores.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo PROVEEDORES_PROVEEDOR; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-eye" style="color:#ffffff;"></i></a>								
								<span>
								<br />
								<a href="?seccion=proveedores_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo PROVEEDORES_PROVEEDOR; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
								
								<a href="mod/javaformdelete_proveedores.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo PROVEEDORES_PROVEEDOR; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>
								
								<br />
																
								<?php
								
									echo "<table class=print>
										<tbody> 
										<tr> 
										<th>".PROVEEDORES_PROVEEDOR."</th> 
										<td width='30%'><font class='spanredchico'>$row[1]</font></td> 
										<th>".ESTADO."</th> 
										<td width='40%'><font class='spanredchico'>$row[2]</font></td> 
										</tr> 
										<tr> 
										<th>".PROVEEDORES_CIF."</th> 
										<td><font class='spanredchico'>$row[3]</font></td> 
										<th>".FECHA."</th> 
										<td><font class='spanredchico'>$row[4]</font></td> 
										</tr> 
										<tr> 
										<th>".PROVEEDORES_SUMINISTRO."</th> 
										<td><font class='spanredchico'>$row[5]</font></td> 
										<th>".PROVEEDORES_CRITERIOS_EVALUACION."</th> 
										<td><font class='spanredchico'>" . mysqli_real_escape_string($mysqli,$row[6]) . "</font></td> 
										</tr> 
										<tr> 
										<th>".PROVEEDORES_DATOS."</th> 
										<td><font class='spanredchico'>" . mysqli_real_escape_string($mysqli,$row[7]) . "</font></td> 
										<th>".ACTIVO."</th> 
										<td><font class='spanredchico'>$row[8]</font></td> 
										</tr> 
										</tbody> 
										</table>";
										
								?>
								</span>
						</div>
			
			</td>
			
			 <td><?php echo $row['estado'];?></td>
			<td><?php echo $row['suministro'];?></td>
			<td><?php echo $row['activo'];?></td>
			<td align="center">
				<input class="borrar" type="checkbox" name="chkDel[]"  id="chkDel<?php echo $i;?>"  value="<?php echo $row['id'];?>">
			</td>
        </tr>
        <?php
}
        ?>
      </tbody>
</table>
		<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</form>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script>
$(".answer").hide();
$(".borrar").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show();
    } else {
        $(".answer").hide();
    }
});
</script>