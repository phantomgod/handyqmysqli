<?php
/**
* Mod IMPRIMIR equipos de medida
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
	$sql = mysqli_query($mysqli,  "SELECT * FROM equiposdemedida ORDER BY id DESC" );

	echo '&emsp;&emsp;<span class="yellow">' . AUDITORIAS_CAMBIAR_AUDITORIA . '</span>';
	echo '<table id="myTable" class="sortable">';
	echo "<thead>";
		echo '<tr>';
			echo '<th>Id</th>';
			echo '<th>';
			echo EQUIPOS_EQUIPO;
			echo '</th>';
			echo '<th>';
			echo EQUIPOS_MODELO;
			echo '</th>';
			echo '<th>';
			echo EQUIPOS_UBICACION;
			echo '</th>';
			echo '<th>';
			echo "<i class='fa fa-print' style='color:#FFC107;'></i>";
			echo '</th>';
		echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		echo "<td>" . $row ['0'] . "</td>";
		echo "<td><a href='?seccion=equipos_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
		echo "<td><a href='?seccion=equipos_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
		echo "<td><a href='?seccion=equipos_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
		echo "<td><a href='?seccion=equipos_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "' alt='editar: " . $row ['1'] . "' title='editar: " . $row ['1'] . "'><i class='fa fa-print' style='color:#FFC107;'></i></a></td>";
		echo "</tr>";
	}
	echo "<tbody>";
	echo "</table>";
}
if ($aktion == "print_id") {
	if ((empty ( $_POST ['equipo'] )) and (empty ( $_POST ['modelo'] )) and (empty ( $_POST ['fechalta'] )) and (empty ( $_POST ['frecuencalib'] )) and (empty ( $_POST ['criterioaceptacion'] )) and (empty ( $_POST ['ubicacion'] )) and (empty ( $_POST ['descripcion'] ))) {
		$id = $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM equiposdemedida WHERE id = $_GET[id] " );
		$data = mysqli_fetch_row( $sql );

		?>

		
		&nbsp;&nbsp;&nbsp;
		<a href='?seccion=equipos_admin&amp;aktion=change_id&amp;id=<?php echo $data [0] ?>'><button type="submit" class="btn btn-info"><?php echo  EDITAR; ?></button></a>
		<table class="print">
		 <caption><?php echo EQUIPOS_PRINT_DETAILS; ?></caption>
		<tr>
		<th style="width:20%"><?php echo EQUIPOS_EQUIPO; ?></th>
		<td><span class="yellow"><?php echo $data [1] ?></span></td>
		</tr>
		<tr>
		<th><?php echo EQUIPOS_MODELO; ?></th>
		<td><?php echo $data [2] ?></td>
		</tr>
		<tr>
		<th><?php echo FECHA; ?></th>
		<td><?php echo $data [3] ?></td>
		</tr>
		<tr>
		<th><?php echo EQUIPOS_FRECUENCALIB; ?></th>
		<td><?php echo $data [4] ?></td>
		</tr>
		<tr>
		<th><?php echo EQUIPOS_CRITERIO; ?></th>
		<td><?php echo $data [5] ?></td>
		</tr>
		<tr>
		<th><?php echo EQUIPOS_UBICACION; ?></th>
		<td><?php echo $data [6] ?></td>
		</tr>
		<tr>
		<th><?php echo DESCRIPCION; ?></th>
		<td><?php echo $data [7] ?></td>
		</tr>
		 </tbody>
		</table>
		<?php
	}
}
?>