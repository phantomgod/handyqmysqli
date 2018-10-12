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

//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM inspecciones ) m');

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

<form name="frmMain" action="?seccion=checkbox2_inspecciones"
	method="post" OnSubmit="return onDelete();">
	<?php
    $strSQL = "SELECT * FROM inspecciones ORDER BY fecha DESC";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

		<span class="yellow"><?php echo INSPECCIONES_BORRAR_INSPECCION; ?></span>

	<table id="myTable" class="sortable">

		<thead>
			<tr>
				<th>ID</th>
				<th width="20%"><?php echo INSPECCIONES_INSPECTOR; ?></th>
				<th><?php echo FECHA; ?></th>
				<!--<th>Servicio  </th>
        <th>Hora  </th>
        <th>Trabajador  </th>
        <th>Incidencia  </th> -->
				<th><?php echo RESULTADO; ?></th>
				<th width="10%">
					<a href="#" alt="<?php echo INSPECCIONES_EDITAR_INSPECCION; ?>" title="<?php echo INSPECCIONES_EDITAR_INSPECCION; ?>" />
					<i class="fa fa-edit" style="color:#673ab7;"></i>
				</th>
				<th width="10%">
					<a href="#" alt="<?php echo IMPRIMIR_INSPECCION; ?>" title="<?php echo IMPRIMIR_INSPECCION; ?>" />
					<i class="fa fa-print" style="color:#673ab7;"></i>
				</th>
				<th><input name="CheckAll" type="checkbox" Id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>
		</thead>
		<tbody>

			<?php
        $i = 0;
while ($objResult = mysqli_fetch_array($objQuery)) {
        $i++;
        ?>

			<tr>
				<td><?php echo $objResult['Id'];?></td>
				<td><?php echo $objResult['inspector'];?></td>
				<td><?php echo $objResult['fecha'];?></td>
				<!--<td><?php echo $objResult['servicio'];?></td>
        <td><?php echo $objResult['hora'];?></td>
        <td><?php echo $objResult['vigilante'];?></td>-->
				<td><?php echo $objResult['incidencia'];?></td>
				<!--<td><?php echo $objResult['codigo_incidencia'];?></td>-->
				
				
				<td><a
					href="?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=<?php echo $objResult['Id'];?>" 
						alt="<?php echo INSPECCIONES_EDITAR_INSPECCION; ?> - <?php echo $objResult[0]; ?>"
						title="<?php echo NCS_EDITAR; ?> - <?php echo $objResult[0]; ?>" />
						<i class="fa fa-pencil" style="color:#673ab7;"></i>
					</a>
				</td>
				<td><a
					href="?seccion=inspecciones_print&amp;aktion=print_id&amp;id=<?php echo $objResult['Id'];?>" 
						alt="<?php echo IMPRIMIR_INSPECCION; ?> - <?php echo $objResult[0]; ?>"
						title="<?php echo IMPRIMIR_INSPECCION; ?> - <?php echo $objResult[0]; ?>" />
						<i class="fa fa-print" style="color:#673ab7;"></i>
					</a>
				</td>
				
				
				<td><input class="borrar" type="checkbox" name="chkDel[]"
					Id="chkDel<?php echo $i;?>" value="<?php echo $objResult['Id'];?>"></td>
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