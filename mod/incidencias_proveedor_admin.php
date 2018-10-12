<?php
/**
* Mod ADMINISTRAR INCIDENCIAS DE PROVEEDORES
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
            echo PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN; ?> /
			<a href="?seccion=incidencias_proveedor_admin&amp;aktion=add"><?php echo PROVEEDORES_ANOTAR_INCIDENCIA; ?></a> ::
			<a href="?seccion=incidencias_proveedor_admin&amp;aktion=change"><?php echo PROVEEDORES_MODIFICAR_INCIDENCIA; ?></a>
			<br>
<?php

/*
 * requires the class require "class.datepicker.php"; // instantiate the object $db=new datepicker(); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
 */

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['proveedor'] )) and (empty ( $_POST ['incidencia'] )) and (empty ( $_POST ['codigoincidencia'] )) and (empty ( $_POST ['afectaa'] )) and (empty ( $_POST ['fecha'] ))) {
		echo '<form action="" method="POST">';


		echo '<table class="print">';
		echo '<thead>' . PROVEEDORES_ANOTAR_INCIDENCIA . '</thead>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . PROVEEDORES_PROVEEDOR . ':</td>';
		echo '<td>';
		echo '<select name="proveedor">';
		echo '<option>...proveedor</option>';
		$sql = "SELECT * FROM proveedores WHERE activo=1";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'proveedor' )) {
			define ( 'PROVEEDOR', 'proveedor' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row [PROVEEDOR] . '">' . $row [PROVEEDOR] . '</option>';
		}
		echo '</select></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . PROVEEDORES_INCIDENCIA . ':</td>';
		echo '<td><textarea rows="10" cols="50" name="incidencia" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>C&oacute;digo: </td>';
		echo '<td>';
		echo '<select name="codigoincidencia">';
		echo '<option>...</option>';
		$sql = "SELECT * FROM codigosincidencias";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'codname' )) {
			define ( 'CODNAME', 'codname' );
		}
		if (! defined ( 'cod' )) {
			define ( 'COD', 'cod' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row [COD] . '">' . $row [COD] . ' - ' . $row [CODNAME] . '</option>';
		}
		echo '</select>';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th><b>&Aacute;rea afectada:</b></td>';
		echo '<td>';
		echo '<select name="afectaa">';
		echo '<option>...</option>';
		$sql = "SELECT * FROM areassensibles";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'nombrearea' )) {
			define ( 'NOMBREAREA', 'nombrearea' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row [NOMBREAREA] . '">' . $row [NOMBREAREA] . '</option>';
		}
		echo '</select>';
		echo ' </td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th><b>' . FECHA . ':</b></td>';
		echo '<td><input type="text" id="date" class="datepicker" name="fecha" value="' . SELECCIONAR_FECHA . '">';//Date picker
		echo '</td>';
		echo '</tr>';
		echo '<td></td>';
		echo '<td align=left><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
		echo '</tr>';
		echo '</table>';
		echo '</form>';
	} else {

		if (isset ( $_POST ['proveedor'] )) {
			$proveedor_Post = $_POST ['proveedor'];
		}
		if (isset ( $_POST ['incidencia'] )) {
			$incidencia_Post = $_POST ['incidencia'];
		}
		if (isset ( $_POST ['codigoincidencia'] )) {
			$codigoincidencia_Post = $_POST ['codigoincidencia'];
		}
		if (isset ( $_POST ['afectaa'] )) {
			$afectaa_Post = $_POST ['afectaa'];
		}
		if (isset ( $_POST ['fecha'] )) {
			$fecha_Post = $_POST ['fecha'];
		}
		$sql = mysqli_query($mysqli,  "INSERT INTO incidenciasdeproveedor (proveedor, incidencia, codigoincidencia, afectaa, fecha)
             VALUES ('" . $proveedor_Post . "', '" . $incidencia_Post . "', '" . $codigoincidencia_Post . "', '" . $afectaa_Post . "', '" . $fecha_Post . "')" );
		if ($sql) {
			echo "Incidencia anotada";
		} else {
			echo "Error al añadir el registro!";
		}
	}
}

if ($aktion == "change") {
	$sql = mysqli_query($mysqli,  "SELECT * FROM incidenciasdeproveedor ORDER BY id ASC" );

	echo '&emsp;&emsp;<span class="yellow">' . PROVEEDORES_JOIN . '</span>';

	echo '<table id="myTable" class="sortable">';
	echo '<thead>';
		echo '<tr><th>' . FECHA . '</th><th>Proveedor</th><th>Incidencia</th></tr>';
	echo '</thead>';
	echo '<tbody>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		echo "<td>" . $row ['5'] . "</td>";
		echo "<td><a href='?seccion=incidencias_proveedor_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
		echo "<td><a href='?seccion=incidencias_proveedor_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}
if ($aktion == "change_id") {
	if ((empty ( $_POST ['id_change'] )) and (empty ( $_POST ['proveedor_change'] )) and (empty ( $_POST ['incidencia_change'] )) and (empty ( $_POST ['codigoincidencia_change'] )) and (empty ( $_POST ['afectaa_change'] )) and (empty ( $_POST ['fecha_change'] ))) {
		$id = ( int ) $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM incidenciasdeproveedor WHERE id = $id " );
		$data = mysqli_fetch_row( $sql );

		echo '<form action="" method="POST">';
		echo '&emsp;&emsp;<span class="yellow">' . PROVEEDORES_DETALLES . '</span>';
		echo '<table class="print">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>' . PROVEEDORES_PROVEEDOR . ': </th>';
		echo '<td><input class="inputlargo" name="proveedor_change" value="' . $data [1] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . PROVEEDORES_INCIDENCIA . ':</th>';
		echo '<td><textarea class="textareanormal" name="incidencia_change">' . $data [2] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . CODIGO . ': </th>';
		echo '<td>';
		echo '<select name="codigoincidencia_change">';
		echo '<option>' . $data [3] . '</option>';
		$sql = "SELECT codname FROM codigosincidencias";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'codname' )) {
			define ( 'CODNAME', 'codname' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row [CODNAME] . '">' . $row [CODNAME] . '</option>';
		}
		echo '</select>';
		echo '&nbsp&nbsp';
		echo NCS_SELECCIONE_PARA_CAMBIAR;
		echo '</td>';

		// <input class="inputfecha" name="codigoincidencia_change" value="'.$data[3].'"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . NCS_AFECTAA . ': </th>';
		echo '<td>';
		echo '<select name="afectaa_change">';
		echo '<option>' . $data [4] . '</option>';
		$sql = "SELECT nombrearea FROM areassensibles";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'nombrearea' )) {
			define ( 'NOMBREAREA', 'nombrearea' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row [NOMBREAREA] . '">' . $row [NOMBREAREA] . '</option>';
		}
		echo '</select>';
		echo '&nbsp&nbsp';
		echo NCS_SELECCIONE_PARA_CAMBIAR;

		// <input class="inputlargo" name="afectaa_change" value="'.$data[4].'">

		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FECHA . ': </th>';
		// echo '<td><input class="inputfecha" name="fecha_change" value="'.$data[5].'"></td>';
		echo '<td>';

		 echo '<input type="text" id="date" class="datepicker" name="fecha_change" value="'.$data[5].'" />';
			/*?>
			<input type="text" id="date" class="inputfecha" name="fecha_change"
				value="<?php echo $data[5];?>" />
			<input type="button" value="::"
				onclick="<?php echo $db->show('date') ?>">
			<?php*/
		echo '</td>';

		echo '</tr>';
		echo '<td><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$sql = mysqli_query($mysqli,  "UPDATE incidenciasdeproveedor
             SET proveedor='$_POST[proveedor_change]', incidencia='$_POST[incidencia_change]', codigoincidencia='$_POST[codigoincidencia_change]', afectaa='$_POST[afectaa_change]', fecha='$_POST[fecha_change]'
             WHERE id=$_GET[id]" );
		if ($sql) {
			echo 'Incidencia actualizada!';
		}
	}
}
?>

<script>
	$(document).ready(function() {
		$('#myTable').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
	} );
	</script>
