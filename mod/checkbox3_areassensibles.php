<?php
/**
* Mod borrar Áreas sensibles
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


		<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>
<form name="frmMain" action="?seccion=checkbox2_areassensibles" method="post" OnSubmit="return onDelete();">
	<?php
		$strSQL = "SELECT * FROM areassensibles";
		$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
	?>

	<span class="yellow"><?php echo PROVEEDORES_BORRAR_AREASSENSIBLES; ?></span>
	<table id="myTable" class="sortable">
		<thead>
			<tr>
				<th>ID</th>
				<th><?php echo PROVEEDORES_AREASENSIBLE; ?></th>
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
				<td><?php echo $objResult['id'];?></td>
				<td><?php echo $objResult['nombrearea'];?></td>
				<td><input class="borrar" type="checkbox" name="chkDel[]" id="chkDel<?php echo $i;?>" value="<?php echo $objResult['id'];?>"></td>
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