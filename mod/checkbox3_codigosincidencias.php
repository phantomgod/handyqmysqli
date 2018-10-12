<?php
/**
* Mod borrar códigos de incidencias de
* inspecciones de servicio
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
<br />
<form name="frmMain" action="?seccion=checkbox2_codigosincidencias"
	method="post" OnSubmit="return onDelete();">
	<?php

        $strSQL = "SELECT * FROM codigosincidencias";
        $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query [".$strSQL."]");
?>


	<span class="yellow"><?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?></span>
	<table id="myTable" class="sortable">
		<thead>
			<tr>
				<th><?php echo CODIGO; ?></th>
				<th><?php echo NOMBRE_INCIDENCIA; ?></th>
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
				<td><?php echo $objResult["id"];?></td>
				<td><?php echo $objResult["codname"];?></td>
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
		</div>	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
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