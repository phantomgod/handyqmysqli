<?php
/**
* Mod borrar calibraciones
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

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM calibraciones ) m');

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

<form name="frmMain" action="?seccion=checkbox2_calibraciones"
	method="post" OnSubmit="return onDelete();">
	<?php

    $strSQL = "SELECT * FROM calibraciones";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
    ?>

	<span class="documenttitle"><?php echo CALIBRACIONES_BORRAR; ?></span>
	<?php echo DELETE_ADVERTICE; ?>
	<table id="myTable" class="sortable">

		<thead>
			<tr>
				<th><?php echo EQUIPOS_EQUIPO; ?></th>
				<th><?php echo EQUIPOS_EQUIPO; ?></th>
				<th><?php echo ULTIMA_CALIBRACION; ?></th>
				<th><?php echo PROXIMA_CALIBRACION; ?></th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
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
				<!--<td>< ?php echo $row['equipo'];?></td>-->
								
				<td>
					<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<?php echo $row['1'] ?>						
						<span>
						<br />								
						<a href="?seccion=calibraciones_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo CALIBRACION; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
						
						<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo CALIBRACION; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>								
					
						<a href="?seccion=calibraciones_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo CALIBRACION; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
						<?php echo $row ['0']; ?>
						
						<?php
						
							echo "<table class='print2'>
								<tr>"; 
								echo "<th style width=20%><font color='yellow'>" . ID . "</font></th>
										<th><font color='yellow'>" . EQUIPOS_EQUIPO. "</font></th>
										<th><font color='yellow'>" . ACCION . "</font></th>
										<th></th>
								</tr>
								<tr>
									<td style width=20%>$row[0]</td>
									<td>$row[1]</td>
									<td colspan=2>$row[2]</td>
								</tr>
								<tr>
									<th colspan=2><font color='yellow'>" . PROCEDIMIENTO . "</font></th>
									<th colspan=2><font color='yellow'>" . FECHA . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[3]</td>
									<td colspan=2>$row[5]</td>
								</tr>
								<tr>
									<th colspan=2><font color='yellow'>" . RESULTADO . "</font></th>
									<th><font color='yellow'>" . ESTADO . "</font></th>
								</tr>
								<tr>
									<td colspan=2>" . strip_tags($row[6]) . "</td>
									<td colspan=2>";
									
									$cadena =$row[6];
									$patrones[0] = '<span>';
									$sustituciones[0] = '<div>';
									echo strip_tags(preg_replace($patrones, $sustituciones,  $row[6]), '<p><font><div><style><strong><li><h1><h2><h3>');									
									echo "</td>
								</tr>
								
								<tr>
									<th colspan=2><font color='yellow'>" . LUGAR . "</font></th>
									<th colspan=2><font color='yellow'>" . OBSERVACIONES . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[4]</td>
									<td colspan=2>";
									
									$cadena =$row[10];
									$patrones[0] = '<span>';
									$sustituciones[0] = '<div>';
									echo strip_tags(preg_replace($patrones, $sustituciones,  $row[10]), '<p><font><div><style><strong><li><h1><h2><h3><table><tr><td>');									
									echo "</td>
								</tr>
								
								
							</table>";  
						?>
						</span>
				</div>
				</td>




				<td><?php echo $row['fecha'];?></td>
				<td><?php echo $row['proxima'];?></td>
				<td><input class="borrar" type="checkbox" name="chkDel[]" id="chkDel<?php echo $i;?>" value="<?php echo $row['id'];?>"></td>
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