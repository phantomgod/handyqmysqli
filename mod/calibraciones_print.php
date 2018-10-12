<?php

/**
* Mod imprimir CALIBRACIONES
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "print") {
	$sql = mysqli_query($mysqli,  "SELECT * FROM calibraciones ORDER BY id DESC" );

	echo '&emsp;&emsp;<span class="yellow">' . CALIBRACIONES_LISTA . '</span>';
	echo '<table id="myTable" class="sortable">';
	echo '<thead>';
		echo '<tr>';
		echo '<th>ID</th>';
		echo '<th>' . EQUIPOS_EQUIPO . '</th>';
		echo '<th>' . ACCION . '</th>';
		echo '<th>' . ULTIMA . '</th>';
		echo '<th>' . PROXIMA . '</th>';
		echo '<th><i class="fa fa-print " style="color:#ffffff"></i></th>';
		echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		echo "<td>" . $row ['0'] . "</td>";

		echo "<td>";
		   ?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=calibraciones_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>

						<span>
						<br />
						<a href="?seccion=calibraciones_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#ffffff;"></i></a>

						<a href="mod/javaformdelete_calibraciones.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#ffffff;"></i></a>


						<a href="?seccion=calibraciones_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#ffffff;"></i></a>
						<br />

						<?php

							 echo "<table class=print>
								<tr>
								<th>" . EQUIPOS_EQUIPO . "</th>
								<th>" . ACCION . "</th>
								</tr><tr>
								<td>$row[1]</td>
								<td>$row[2]</td>
								</tr><tr>
								<th>" . ULTIMA_CALIBRACION . "</th>
								<th>" . PROXIMA_CALIBRACION . "</th>
								</tr><tr>
								<td>$row[5]</td>
								<td>$row[9]</td>
								</tr><tr>
								<th>" . ESTADO . "</th>
								<th>" . OBSERVACIONES . "</th>
								</tr><tr>
								<td>$row[7]</td>
								<td>" . strip_tags($row['10'], '<table>,<tr>,<th>,<td>,<br>,<font>,<p>') . "</td>
								</tr>
								</table>";
						?>
						</span>
				</div>
			<?php

    echo "</td>";

		echo "<td>" . $row ['2'] . "</td>";
		echo "<td>" . $row ['5'] . "</td>";
		echo "<td>" . $row ['9'] . "</td>";
		echo "<td><a href='?seccion=calibraciones_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "' alt='Imprimir ID: " . $row ['0'] . "' title='Imprimir ID: " . $row ['0'] . "'><i class='fa fa-print ' style='color:#ffffff'></i></a></td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
}

if ($aktion == "print_id") {
	if ((empty ( $_POST ['auditor'] )) and (empty ( $_POST ['activo'] ))) {
		$id = $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM calibraciones WHERE id = $_GET[id] " );
		$data = mysqli_fetch_row( $sql );

		echo '<br /><center>';
		echo "<a href='?seccion=calibraciones_admin&amp;aktion=change_id&amp;id=" . $data [0] . "'><i class='fa fa-edit ' style='color:#ffffff'></i></a>";
		echo '</center>';

		echo '<table class="print">';
		echo '<caption>';
		echo CALIBRACIONES_DETALLES;
		echo '</caption>';
		echo '<thead>';
		echo EQUIPOS_EQUIPO;
		echo "&nbsp;<span class='documenttitle'>" . $data [1] . "</span>";
		echo '</thead>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . EQUIPOS_EQUIPO . '</th>';
		echo "<td>" . $data [1] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . ACCION . '</th>';
		echo "<td>" . $data [2] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . PROCEDIMIENTO . '</th>';
		echo "<td>" . $data [3] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . LUGAR . '</th>';
		echo "<td>" . $data [4] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FECHA . '</th>';
		echo "<td>" . $data [5] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . RESULTADO . '</th>';
		echo "<td>" . $data [6] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DESVIACION . '</th>';
		echo "<td>" . $data [7] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . ESTADO . '</th>';
		echo "<td>" . $data [8] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . PROXIMA . '</th>';
		echo "<td>" . $data [9] . "</td>";
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . OBSERVACIONES . '</th>';
		echo "<td>" . $data [10] . "</td>";
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';

		echo '<p id="para1">';
		echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward " style="color:Black;"></i></a>';
		echo '</p>';
	}
}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<script>
	$(document).ready(function() {
		$('#myTable').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
	} );
	</script>
