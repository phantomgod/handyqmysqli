<?php
/**
* Mod borrar partes de trabajo
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

<form name="frmMain" action="?seccion=checkbox2_partes" method="post"  OnSubmit="return onDelete();">
<?php
    $strSQL = "SELECT * FROM partedetrabajo";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

    <?php echo DELETE_ADVERTICE; ?>
   <table class="sortable">
     <caption><?php echo PARTES_BORRAR; ?></caption>
       <tbody>
            <tr>
            <th style="width:40px">ID  </th>
            <th style="width:100px"><?php echo FECHA; ?>  </th>
            <th><?php echo SERVICIO_SERVICIO; ?>  </th>
            <th><?php echo TRABAJADOR_TRABAJADOR; ?>  </th>
            <th style="width:40px"><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>
            </tr>

            <?php
            $i = 0;
while ($objResult = mysqli_fetch_array($objQuery)) {
            $i++;
            ?>

            <tr>
            <td style="width:40px"><?php echo $objResult['id'];?></td>
            <td style="width:100px"><?php echo $objResult['fecha'];?></td>
            <td><?php echo $objResult['centrotrabajo'];?></td>
            <td><?php echo $objResult['empleado'];?></td>
            <td style="width:40px"><input class="borrar" type="checkbox" name="chkDel[]"  id="chkDel<?php echo $i;?>"  value="<?php echo $objResult['id'];?>"></td>
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