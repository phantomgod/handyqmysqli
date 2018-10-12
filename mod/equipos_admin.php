<?php
/**
* Mod ADMINISTRAR equipos de medida
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

			echo EQUIPOS_ADMINISTRAR; ?> / 
			<a href="?seccion=equipos_admin&amp;aktion=add"><?php echo EQUIPOS_ANADIR; ?></a> :: 
			<a href="?seccion=equipos_admin&amp;aktion=change"><?php echo EQUIPOS_CAMBIAR; ?></a>

	<br>
	<?php

	/* requires the class
	require "class.datepicker.php";

	// instantiate the object
	$db = new datepicker ();

	// uncomment the next line to have the calendar show up in german
	$db->language = "spanish";

	$db->firstDayOfWeek = 1;

	// set the format in which the date to be returned
	$db->dateFormat = "Y-m-d";*/

	// Aktionen
	$aktion = '';
	if (isset ( $_GET ['aktion'] )) {
		$aktion = $_GET ['aktion'];
	}

	if ($aktion == "") {
		echo 'Admin Area';
	}

	if ($aktion == "add") {
		if ((empty ( $_POST ['equipo'] )) and (empty ( $_POST ['modelo'] )) and (empty ( $_POST ['fechalta'] )) and (empty ( $_POST ['frecuencalib'] )) and (empty ( $_POST ['criterioaceptacion'] )) and (empty ( $_POST ['ubicacion'] )) and (empty ( $_POST ['descripcion'] ))) {

			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<caption>';
			echo '<button type="submit" class="btn btn-info">' . ANADIR . '</button></caption>';
			echo '<tbody>';
			echo '<tr>';
			/*echo '<th style="width: 15%">';
			echo EQUIPOS_EQUIPO;
			echo '</th>';*/
			echo '<td><input type="text" class="input-xlarge" name="equipo" placeholder="' . EQUIPOS_EQUIPO . '"></td>';
			echo '</tr>';
			echo '<tr>';
			/*echo '<th>';
			echo EQUIPOS_MODELO;
			echo '</th>';*/
			echo '<td><input type="text" class="input-xlarge" name="modelo" placeholder="' . EQUIPOS_MODELO . '"></td>';
			echo '</tr>';
			echo '<tr>';
			/*echo '<th>';
			echo FECHA;
			echo '</th>';*/
			//echo '<td><input type="text" id="date" class="inputfecha" name="fechalta" value="">';
			echo '<td><input id="date" class="datepicker" name="fechalta" />';


	/*<input type="button" value="::"
		onclick="< ?php echo $db->show('date') ?>">*/

			echo '</td>';

			echo '</tr>';
			echo '<tr>';
			/*echo '<th>';
			echo EQUIPOS_FRECUENCALIB;
			echo '</th>';*/
			echo '<td><input type="text" class="input-xlarge" name="frecuencalib" placeholder="' . EQUIPOS_FRECUENCALIB . '"></td>';
			echo '</tr>';
			echo '<tr>';
			/*echo '<th>';
			echo EQUIPOS_CRITERIO;
			echo '</th>';*/
			echo '<td><input type="text" class="input-xlarge" name="criterioaceptacion" placeholder="' . EQUIPOS_CRITERIO . '"></td>';
			echo '</tr>';
			echo '<tr>';
			/*echo '<th>';
			echo EQUIPOS_UBICACION;
			echo '</th>';*/
			echo '<td><input type="text" class="input-xlarge" name="ubicacion" placeholder="' . EQUIPOS_UBICACION . '"></td>';
			echo '</tr>';
			echo '<tr>';
			/*echo '<th>';
			echo DESCRIPCION;
			echo '</th>';*/
			echo '<td><textarea class="textareanormal" name="descripcion" value=""></textarea></td>';
			echo '</tr>';
			echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</form>';
		} else {

			if (isset ( $_POST ['equipo'] )) {
				$equipo_Post = $_POST ['equipo'];
			}
			if (isset ( $_POST ['modelo'] )) {
				$modelo_Post = $_POST ['modelo'];
			}
			if (isset ( $_POST ['fechalta'] )) {
				$fechalta_Post = $_POST ['fechalta'];
			}
			if (isset ( $_POST ['frecuencalib'] )) {
				$frecuencalib_Post = $_POST ['frecuencalib'];
			}
			if (isset ( $_POST ['criterioaceptacion'] )) {
				$criterioaceptacion_Post = $_POST ['criterioaceptacion'];
			}
			if (isset ( $_POST ['ubicacion'] )) {
				$ubicacion_Post = $_POST ['ubicacion'];
			}
			if (isset ( $_POST ['descripcion'] )) {
				$descripcion_Post = $_POST ['descripcion'];
			}
			$sql = mysqli_query($mysqli,  "INSERT INTO equiposdemedida (equipo, modelo, fechalta, frecuencalib, criterioaceptacion, ubicacion, descripcion)
                            VALUES ('" . $equipo_Post . "',
                            '" . $modelo_Post . "',
                            '" . $fechalta_Post . "',
                            '" . $frecuencalib_Post . "',
                            '" . $criterioaceptacion_Post . "',
                            '" . $ubicacion_Post . "',
                            '" . $descripcion_Post . "')" );

			if ($sql) {
				echo "Equipo a&ntilde;adido!";
			} else {
				echo "Error al añadir el registro!";
			}
		}
	}

	if ($aktion == "change") {
		$sql = mysqli_query($mysqli,  "SELECT * FROM equiposdemedida ORDER BY id DESC" );
		echo '&emsp;&emsp;<span class="yellow">' . EQUIPOS_CAMBIAR . '</span>';
		echo '<table id="myTable" class="sortable">';
		echo '<thead>';
			echo '<tr>';
				echo '<th>';
				echo 'ID';
				echo '</th>';
				echo '<th>';
				echo EQUIPOS_EQUIPO;
				echo '</th>';
				echo '<th>';
				echo EQUIPOS_MODELO;
				echo '</th>';
				echo '<th>';
				echo EQUIPOS_FRECUENCALIB;
				echo '</th>';
				echo '<th>';
				echo FECHA;
				echo '</th>';
				echo '<th>';
				echo '<i class="fa fa-edit" style="color:#FFC107;"></i>';
				echo '</th>';
				echo '<th>';
				echo '<i class="fa fa-print" style="color:#FFC107;"></i>';
				echo '</th>';
			echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while ( $row = mysqli_fetch_row( $sql ) ) {
			echo "<tr>";
			echo "<td>" . $row ['0'] . "</td>";
			echo "<td><a href='?seccion=equipos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
			echo "<td><a href='?seccion=equipos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
			echo "<td><a href='?seccion=equipos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['4'] . "</a></td>";
			echo "<td><a href='?seccion=equipos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
			echo "<td><a href='?seccion=equipos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "' alt='editar: " . $row ['1'] . "' title='editar: " . $row ['1'] . "'><i class='fa fa-pencil' style='color:#FFC107;'></i></a></td>";
			echo "<td><a href='?seccion=equipos_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "' alt='Imprimir: " . $row ['1'] . "' title='Imprimir: " . $row ['1'] . "'><i class='fa fa-print' style='color:#FFC107;'></i></a></td>";
			echo "</tr>";
		}
		echo '</tbody>';
		echo "</table>";
	}

	if ($aktion == "change_id") {
		if ((empty ( $_POST ['equipo_change'] )) and (empty ( $_POST ['modelo_change'] )) and (empty ( $_POST ['fechalta_change'] )) and (empty ( $_POST ['frecuencalib_change'] )) and (empty ( $_POST ['criterioaceptacion_change'] )) and (empty ( $_POST ['ubicacion_change'] )) and (empty ( $_POST ['descripcion_change'] ))) {
			$id = ( int ) $_GET ['id'];
			$sql = mysqli_query($mysqli,  "SELECT * FROM equiposdemedida WHERE id = $id " );
			$data = mysqli_fetch_row( $sql );

			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<caption>';
			echo EQUIPOS_PRINT_DETAILS;
			echo '</caption>';
			echo '<tbody>';
			echo '<tr>';
			echo '<th>';
			echo EQUIPOS_EQUIPO;
			echo '</th>';
			echo '<td><input type="text" class="input-xlarge" name="equipo_change" value="' . $data [1] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>';
			echo EQUIPOS_MODELO;
			echo '</th>';
			echo '<td><input type="text" class="input-xlarge" name="modelo_change" value="' . $data [2] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>';
			echo FECHA;
			echo '</th>';
			echo '<td>';
            echo '<input id="date1" class="datepicker" name="fechalta_change" value="' . $data [3] . '" />';
			
	/*<input type="button" value="::"
		onclick="<?php echo $db->show('date') ?>">*/

			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>';
			echo EQUIPOS_FRECUENCALIB;
			echo '</th>';
			echo '<td><input type="text" class="input-xlarge" name="frecuencalib_change" value="' . $data [4] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>';
			echo EQUIPOS_CRITERIO;
			echo '</th>';
			echo '<td><input type="text" class="input-xlarge" name="criterioaceptacion_change" value="' . $data [5] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>';
			echo EQUIPOS_UBICACION;
			echo '</th>';
			echo '<td><input type="text" class="input-xlarge" name="ubicacion_change" value="' . $data [6] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>';
			echo DESCRIPCION;
			echo '</th>';
			echo '<td><textarea class="textareanormal" rows="15" name="descripcion_change">' . $data [7] . '</textarea></td>';
			echo '</tr>';
			echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary" onclick="history.go(-1);">' . VOLVER . '</button></td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</form>';
		} else {
			$id = ( int ) $_GET ['id'];
			$sql = mysqli_query($mysqli,  "UPDATE equiposdemedida SET equipo='$_POST[equipo_change]',
                            modelo='$_POST[modelo_change]',
                            fechalta='$_POST[fechalta_change]',
                            frecuencalib='$_POST[frecuencalib_change]',
                            criterioaceptacion='$_POST[criterioaceptacion_change]',
                            ubicacion='$_POST[ubicacion_change]',
                            descripcion='$_POST[descripcion_change]'
                            WHERE id=$id" );
			if ($sql) {
				echo 'Equipo actualizado!';
			}
		}
	}
?>