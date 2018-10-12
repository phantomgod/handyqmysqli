<?php
/**
* Mod borrar documentos insertos en la bd
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

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM docmanager ) m');

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

<form name="frmMain" action="?seccion=checkbox2_docmanager"
	method="post" OnSubmit="return onDelete();">
	<?php

$strSQL = "SELECT * FROM docmanager";
$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");

?>

	<?php echo DELETE_ADVERTICE; ?>
	<table class="sortable">
		<caption>
			<?php echo BORRAR_DOCUMENTO; ?>
		</caption>
		<tbody>
			<tr>
				<th><?php echo NOMBRE_DOCUMENTO; ?></th>
				<th><a href="#" title="<?php echo IMPRIMIR; ?>">
						<i class="fa fa-print " style="color:#00bcd4;"></i>
					</a>
				</th>
				<th><?php echo DOCUMENTO_AUTOR; ?></th>
				<th><?php echo FECHA; ?></th>
				<th width="30"><input name="CheckAll" type="checkbox"
					id="CheckAll" value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>

			<?php
    $i = 0;
while ($objResult = mysqli_fetch_array($objQuery)) {
    $i++;
    ?>
			<tr>
				<td>
				<?php echo $objResult['titulo']; ?>
				</td>
				<td>
					<?php 
					
						echo "<a href='mod/docmanagerprint.php?aktion=print_id&amp;id=$objResult[id]' 
								target='blank'
								title='" . IMPRIMIR . " - $objResult[titulo]'>";
						echo '<i class="fa fa-print " style="color:#00bcd4;"></i>';
						echo"</a>";
					?>
				</td>
				<td><?php echo $objResult['autor'];?></td>
				<td><?php echo $objResult['fecha'];?></td>
				<td align="center">
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