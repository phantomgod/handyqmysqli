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
		<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>
<form name="frmMain" action="?seccion=checkbox2_auditores" method="post"
	OnSubmit="return onDelete();">
	<?php

$strSQL = "SELECT * FROM auditores";
$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

	<?php echo DELETE_ADVERTICE; ?>
	<table class="sortable">
		<caption>
			<?php echo AUDITORIAS_BORRAR_AUDITOR; ?>
		</caption>

		<tbody>
			<tr>
				<th>ID</th>
				<th><?php echo AUDITORIAS_AUDITOR; ?></th>
				<th><?php echo IMAGEN; ?></th>
				<th><?php echo ESTADO; ?></th>
				<th><i class="fa fa-print fa-2x" style="color:#00BCD4;"></i></th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>

			<?php
$i = 0;
while ($objResult = mysqli_fetch_array($objQuery)) {
    $i++;
    ?>

			<tr>
				<td><?php echo $objResult['id'];?></td>
				<td><?php echo $objResult['auditor'];?></td>
				<td><img src="<?php echo $objResult['imgsrc'];?>" width="100px"
					alt=""></td>
				<td><?php echo $objResult["activo"];?></td>
				<td><a
					href="?seccion=auditores_admin2c&amp;aktion=change_id&amp;id=<?php echo $objResult['id'];?>" 
					alt="<?php echo AUDITORES_EDITAR_AUDITOR; ?>-<?php echo $objResult['auditor'];?>"
					title="<?php echo AUDITORES_EDITAR_AUDITOR; ?>-<?php echo $objResult['auditor'];?>" />
					<i class="fa fa-print fa-2x" style="color:#00BCD4;"></i>
					</a>
				</td>
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