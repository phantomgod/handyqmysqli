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
	<a href="?seccion=avisos_admin&amp;aktion=add">A&ntilde;adir aviso</a> :: <a href="?seccion=avisos_admin&amp;aktion=change">Cambiar aviso</a>

	<br /><br /><br />
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
			echo '<th style="width: 15%;">' . FECHA . '</th>';
			echo '<td><input id="date" class="datepicker" name="fecha" /></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>Comunicado por: </th>';
			echo '<td><input type="text" class="form-control input-xlarge" id="comunicado_por" name="comunicado_por"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<tH>' . COMENTARIOS . '</td>';
			echo '<td><textarea name="comentarios"></textarea></td>';
			echo '</tr>';
			echo '<td colspan="2"><button type="submit" class="btn btn-info">'.ANADIR.'</button></td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</form>';
		} else {


			if (isset ( $_POST ['fecha'] )) {
				$fecha_Post = $_POST ['fecha'];
			}
			if (isset ( $_POST ['comunicado_por'] )) {
				$comunicado_por_Post = $_POST ['comunicado_por'];
			}
			if (isset ( $_POST ['comentarios'] )) {
				//$comentarios_Post = $_POST ['comentarios'];
				$comentarios_Post = mysqli_real_escape_string($mysqli,$_POST['comentarios']);
			}

			$sql = mysqli_query($mysqli,  "INSERT INTO avisos (fecha, comunicado_por, comentarios) VALUES ('" . $fecha_Post . "', '" . $comunicado_por_Post . "', '" . $comentarios_Post . "')"); 
			

			if ($sql) {
				echo "<span class='documenttitle'>";
				echo AVISO_ANADIDO;
				echo "</span>";
			} else {
				echo ERROR_ANADIR_REGISTRO;
				
				
			}
		}
	}

	if ($aktion == "change") {
		$sql = mysqli_query($mysqli,  "SELECT * FROM avisos ORDER BY id DESC" );

		echo '<table class="sortable">';
		echo '<tbody>';
		echo '<tr><th>' . ID . '</th><th>' . FECHA . '</th><th>' . AVISOS_COMUNICADOPOR . '</th><th>' . COMENTARIOS . '</th>';
		 echo '<th><a href="#" title="' . EDITAR . '"><i class="fa fa-edit" style="color:White;"></i></th></tr>';
		while ( $row = mysqli_fetch_row( $sql ) ) {
			echo "<tr>";
			echo "<td style='border-bottom-style: dotted;'>" . $row ['0'] . "</td>";
			echo "<td style='width:10%;  border-bottom-style: dotted;'>" . $row ['1'] . "</td>";
			echo "<td style='border-bottom-style: dotted;'>" . $row ['2'] . "</td>";
			echo "<td style='border-bottom-style: dotted;'>" . $row ['3'] . "</td>";
			echo '<td>
			<a href="?seccion=avisos_admin&amp;aktion=change_id&amp;id='.$row['0'].'" title="'.EDITAR.' - ' . $row['0'] . '">
					<i class="fa fa-pencil" style="color:White;"></i>
			</a>
		  </td>'; 
			echo "</tr>";
		}
		echo '</tbody>';
		echo "</table>";
	}
	if ($aktion == "change_id") {
		if ((empty ( $_POST ['fecha_change'] )) and (empty ( $_POST ['comunicado_por_change'] ))) {
			$id = $_GET ['id'];
			$sql = mysqli_query($mysqli,  "SELECT * FROM avisos WHERE id = $_GET[id]");
			$data = mysqli_fetch_row( $sql );

			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<tbody>';
			echo '<thead></thead>';
			echo '<tr>';
			echo '<th>Fecha: </th>';
			// echo '<td><input style="width:90%" name="fecha_change" value="'.$data[1].'"></td>';
			echo '<td>';
			?>
			
			<input id='date' class='datepicker' name='fecha_change'
			value="<?php echo $data[1];?>" />
			
	<!--<input type="text" id="date" class="inputfecha" name="fecha_change"
		value="< ?php echo $data[1];?>" />
	<input type="button" value="::" onclick="< ?php=$db->show('date')?>">-->
	<?php
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>Comunicado por: </th>';
			echo '<td><input type="text" class="form-control input-large" id="comunicado_por_change" name="comunicado_por_change" value="'.$data[2].'"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>Comentarios: </th>';
			echo '<td><textarea name="comentarios_change">' . $data [3] . '</textarea></td>';
			echo '</tr>';
			echo '<td colspan="2"><button type="submit" class="btn btn-info">'.MODIFICAR.'</button></td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</form>';
		} else {
			$sql = mysqli_query($mysqli,  "UPDATE avisos SET fecha='$_POST[fecha_change]',comunicado_por='$_POST[comunicado_por_change]',comentarios='$_POST[comentarios_change]' WHERE id=$_GET[id]" );
			echo AVISO_ANADIDO;
			echo '<meta http-equiv="refresh" content="3; URL=?seccion=avisos_admin&aktion=change">';
		}
	}
	?>
</body>		

			<script>
			$(document).ready(function() {
				$('#myTable').DataTable( {
					"order": [[ 0, "desc" ]],
					"deferRender": true
				} );
			} );
			</script>
</html>