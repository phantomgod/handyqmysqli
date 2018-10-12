<?php
/**
* Mod ADMINISTRAR avisos
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
<html>
<head>
</head>
<body>
	<p class="pcenter"></p>
	<table class="print">
		<thead></thead>
		<tbody>
			<tr>
				<td><a href="?seccion=avisos_admin&amp;aktion=add">A&ntilde;adir
						aviso</a> :: <a href="?seccion=avisos_admin&amp;aktion=change">Cambiar
						aviso</a> ::</td>
			</tr>
		</tbody>
	</table>
	<br>
	<?php

	/*
	 * requires the class require "class.datepicker.php"; // instantiate the object $db = new datepicker (); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
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
		if ((empty ( $_POST ['fecha'] )) and (empty ( $_POST ['comunicado_por'] )) and (empty ( $_POST ['comentarios'] ))) {
			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<thead></thead>';
			echo '<tbody>';
			echo '<tr>';
			echo '<th>Fecha:</th>';
			// echo '<td><input type="text" id="date" class="inputfecha" name="fecha" value="">';
			echo '<td><input id="date" class="datepicker" name="fecha" />';
			?>

	<!--<input type="button" value="::"
		onclick="< ?php echo $db->show('date') ?>">-->


	<?php
			echo '</td>';
			// echo '<td><input id="inputfecha" name="fecha" value=""></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>Comunicado por: </td>';
			echo '<td><input style="width:70%" name="comunicado_por" value=""></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>Comentarios: </td>';
			echo '<td><textarea style="width:90%" rows="20" name="comentarios" value=""></textarea></td>';
			echo '</tr>';
			echo '<td colspan="2"><input type="submit" value="Submit"></td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</form>';
		} else {
			$values = $_POST;
			foreach ( $values as &$value ) {
				$value = mysql_real_escape_string ( $value );
			}

			if (isset ( $_POST ['fecha'] )) {
				$fecha_Post = $_POST ['fecha'];
			}
			if (isset ( $_POST ['comunicado_por'] )) {
				$comunicado_por_Post = $_POST ['comunicado_por'];
			}
			if (isset ( $_POST ['comentarios'] )) {
				$comentarios_Post = $_POST ['comentarios'];
			}

			$sql = mysql_query ( "INSERT INTO avisos (fecha, comunicado_por, comentarios) VALUES ('" . $fecha_Post . "', '" . $comunicado_por_Post . "', '" . $comentarios_Post . "')" );

			if ($sql) {
				echo "<span class='documenttitle'>";
				echo AVISO_ANADIDO;
				echo "</span>";
			} else {
				echo GENERAL_ERROR_ANADIR_REGISTRO;
			}
		}
	}

	if ($aktion == "change") {
		$sql = mysql_query ( "SELECT * FROM avisos ORDER BY id DESC" );

		echo '<table class="print">';
		echo '<thead></thead>';
		echo '<tbody>';
		echo '<tr><td>Id</td><td>Fecha</td><td>Comunicado por</td><td>Comentarios</td></tr>';
		while ( $row = mysql_fetch_row ( $sql ) ) {
			echo "<tr>";
			echo "<td>" . $row ['0'] . "</td>";
			echo "<td><a href='?seccion=avisos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
			echo "<td><a href='?seccion=avisos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
			echo "<td><a href='?seccion=avisos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
			echo "</tr>";
		}
		echo '</tbody>';
		echo "</table>";
	}
	if ($aktion == "change_id") {
		if ((empty ( $_POST ['fecha_change'] )) and (empty ( $_POST ['comunicado_por_change'] ))) {
			$id = $_GET ['id'];
			$sql = mysql_query ( "SELECT * FROM avisos WHERE id = $_GET[id] " );
			$data = mysql_fetch_row ( $sql );

			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<tbody>';
			echo '<thead></thead>';
			echo '<tr>';
			echo '<th>Fecha: </th>';
			// echo '<td><input style="width:90%" name="fecha_change" value="'.$data[1].'"></td>';
			echo '<td>';
			?>
	<input type="text" id="date" class="inputfecha" name="fecha_change"
		value="<?php echo $data[1];?>" />
	<input type="button" value="::" onclick="<?=$db->show("date")?>">
	<?php
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>Comunicado por: </th>';
			echo '<td><input style="width:90%" name="comunicado_por_change" value="' . $data [2] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>Comentarios: </th>';
			echo '<td><textarea style="width:90%" rows="30" cols="60" name="comentarios_change">' . $data [3] . '</textarea></td>';
			echo '</tr>';
			echo '<td colspan="2"><input type="submit" value="Enviar"></td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</form>';
		} else {
			$sql = mysql_query ( "UPDATE avisos SET fecha='$_POST[fecha_change]',comunicado_por='$_POST[comunicado_por_change]',comentarios='$_POST[comentarios_change]' WHERE id=$_GET[id]" );
			echo AVISO_ANADIDO;
			echo '<meta http-equiv="refresh" content="3; URL=index.php">';
		}
	}
	?>
</body>
</html>