<?php
/**
* Mod borrar servicios
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

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM servicios ) m');

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

<form name="frmMain" action="?seccion=checkbox2_servicios" method="post"  OnSubmit="return onDelete();">
<?php

    $strSQL = "SELECT * FROM servicios";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

    <?php echo DELETE_ADVERTICE; ?>
   <table class="sortable">
     <caption><?php echo SERVICIO_BORRAR_SERVICIO; ?>
     </caption>
       <tbody>
        <tr>
            <th>ID</th>
            <th><?php echo SERVICIO_SERVICIO; ?></th>
            <th><?php echo SERVICIO_ACTIVESTATUS; ?></th>
            <!--<th>Url</th>-->
            <th><input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);"></th>
        </tr>
        <?php
        $i = 0;
while ($objResult = mysqli_fetch_array($objQuery)) {
        $i++;
        ?>
        <tr>
        <td><?php echo $objResult['id'];?></td>
        <td><?php echo $objResult['servicio'];?></td>
        <td><?php echo $objResult['activo'];?></td>
        <!--<td align="center"><?php echo $objResult['urlquery'];?></td>-->
        <td><input class="borrar" type="checkbox" name="chkDel[]"  id="chkDel<?php echo $i;?>"  value="<?php echo $objResult['id'];?>"></td>
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