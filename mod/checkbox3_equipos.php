<?php
/**
* Mod borrar equipos de medida
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

<form name="frmMain" action="?seccion=checkbox2_equipos" method="post"
	OnSubmit="return onDelete();">
	<?php
    $strSQL = "SELECT * FROM equiposdemedida";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

	<span class="yellow"><?php echo EQUIPOS_BORRAR; ?></span>
	<table id="myTable" class="sortable">
		<thead>
			<tr>

				<th><?php echo EQUIPOS_EQUIPO; ?></th>
				<th><?php echo EQUIPOS_MODELO; ?></th>
				<th><?php echo FECHA; ?></th>
				<th><?php echo EQUIPOS_UBICACION; ?></th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
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
				<td><?php echo $objResult['equipo'];?></td>
				<td><?php echo $objResult['modelo'];?></td>
				<td><?php echo $objResult['fechalta'];?></td>
				<td><?php echo $objResult['ubicacion'];?></td>
				<td>
					<input class="borrar" type="checkbox" name="chkDel[]" id="chkDel<?php echo $i;?>" value="<?php echo $row['id'];?>">	
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