<?php

/**
* Mod borrar auditorías al sistema de calidad
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

/*
 * requires the class require "class.datepicker.php"; // instantiate the object $db = new datepicker (); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
 */
?>

		<?php echo FORMACION_ADMINISTRAR_FORMACION; ?> / 
		<a href="?seccion=cursos_admin&amp;aktion=add"><?php echo FORMACION_ANADIR_CURSO; ?></a>::
		<a href="?seccion=cursos_admin&amp;aktion=change"><?php echo MODIFICAR_CURSO; ?></a>

		<br />
<?php

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['trabajador'] )) and (empty ( $_POST ['curso'] )) and (empty ( $_POST ['lugar'] )) and (empty ( $_POST ['validacion'] )) and (empty ( $_POST ['comentarios'] ))) {
		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>' . FORMACION_CAPTION_ADD . '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . TRABAJADOR . ':</th>';
		echo '<td>';
		echo '<select name="trabajador">';
		echo '<option>...</option>';
		$sql = "SELECT * FROM members					
					WHERE active='Yes'
					ORDER BY username ASC";
		$sql = mysqli_query($mysqli,  $sql );

		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row ['username'] . '">' . $row ['username'] . ' - ' . $row ['actividad'] . '</option>';
		}
		echo '</select>';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo CURSO;
		echo '</th>';
		echo '<th><input type="text" class="form-control input-xlarge" id="capapart" name="curso" value="">&nbsp;&nbsp;';
		echo '' . FECHA . ': ';
		?>
		<input id='date' class='datepicker' name='fecha' />
		<?php
		echo '</th>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FORMACION_LUGAR . ':</th>';
		echo '<th><input type="text" class="form-control input-xlarge" id="capapart" name="lugar" value="">&nbsp;&nbsp;';
		echo '</tr>';
		echo '<tr>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . HORAS . ':</th>';
		echo '<th><input type="text" class="form-control input-mini" id="capapart" name="horas" value="">&nbsp;&nbsp;';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FORMACION_VALIDACION . ':</th>';
		echo '<th><input type="text" class="form-control input-xxlarge" id="capapart" name="validacion" value="">&nbsp;&nbsp;';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . COMENTARIOS . ':</th>';
		echo '<td><textarea class="textareanormal" name="comentarios" value=""></textarea></td>';
		echo '</tr>';
		echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
		
		echo "<div align='center'>";	
		echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward" style="color:Black;"></i></a></div>';
	
	} else {
		
		if (isset ( $_POST ['trabajador'] )) {
			$trabajador_Post = $_POST ['trabajador'];
		}
		if (isset ( $_POST ['curso'] )) {
			$curso_Post = $_POST ['curso'];
		}
		if (isset ( $_POST ['lugar'] )) {
			$lugar_Post = $_POST ['lugar'];
		}
		if (isset ( $_POST ['fecha'] )) {
			$fecha_Post = $_POST ['fecha'];
		}
		if (isset ( $_POST ['horas'] )) {
			$horas_Post = $_POST ['horas'];
		}
		if (isset ( $_POST ['validacion'] )) {
			$validacion_Post = $_POST ['validacion'];
		}
		if (isset ( $_POST ['comentarios'] )) {
			$comentarios_Post = $_POST ['comentarios'];
		}
		$sql = mysqli_query($mysqli,  "INSERT INTO cursos (trabajador, curso, lugar, fecha, horas, validacion, comentarios) VALUES ('" . $trabajador_Post . "', '" . $curso_Post . "', '" . $lugar_Post . "', '" . $fecha_Post . "', '" . $horas_Post . "', '" . $validacion_Post . "', '" . $comentarios_Post . "')" );
		
		if ($sql) {
			echo "<span class='documenttitle'>";
			echo CURSO_ANADIDO;
			echo "</span>";
		} else {
			echo ERROR_ANADIR_REGISTRO;
		}
	}
}

if ($aktion == "change") {
	$sql = mysqli_query($mysqli,  "SELECT * FROM cursos ORDER BY id DESC" );
	
	echo FORMACION_THEAD_MODIFY_ADVERTICE;
	echo '&emsp;&emsp;<span class="yellow">' . FORMACION_CAPTION_MODIFY . '</span>';
	echo '<table id="myTable" class="sortable">';
	echo '<thead>';
	echo '<tr><th>Id</th>
                        <th>' . TRABAJADOR . '</th>
                        <th>' . CURSO . '</th>
                        <th>' . FORMACION_LUGAR . '</th>
                        <th>' . FECHA . '</th>
                        <th>' . HORAS . '</th>
                        <th>' . FORMACION_VALIDACION . '</th>
                        <th>' . COMENTARIOS . '</th>
						<th><a href="#" title="' . MODIFICAR_CURSO . '" /><i class="fa fa-edit" style="color:#9fff30"></i></a></th>
                    </tr></thead><tbody>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
			echo "<td>" . $row ['0'] . "</td>";
			echo "<td>" . $row ['1'] . "</td>";
			echo "<td><a href='?seccion=cursos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
			echo "<td>" . $row ['3'] . "</td>";
			echo "<td>" . $row ['4'] . "</td>";
			echo "<td>" . $row ['5'] . "</td>";
			echo "<td>" . $row ['6'] . "</td>";
			echo "<td>" . $row ['7'] . "</td>";
			echo "<td>	
						<a href='?seccion=cursos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "' title='".NCS_EDITAR_NC."-$row[0]' />
							<i class='fa fa-pencil' style='color:#9fff30'></i>
						</a>
				  </td>";
			echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}
if ($aktion == "change_id") {
	if ((empty ( $_POST ['trabajador_change'] )) and (empty ( $_POST ['curso_change'] )) and (empty ( $_POST ['lugar_change'] )) and (empty ( $_POST ['fecha_change'] )) and (empty ( $_POST ['horas_change'] )) and (empty ( $_POST ['validacion_change'] )) and (empty ( $_POST ['comentarios_change'] ))) {
		$id = ( int ) $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM cursos WHERE id = $id " );
		$data = mysqli_fetch_row( $sql );
		
		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>' . FORMACION_CAPTION_MODIFY . '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . TRABAJADOR . ':</th>';
		echo '<td><input type="text" class="input-xlarge" name="trabajador_change" value="' . $data [1] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . CURSO . ':</th>';
		echo '<td><input type="text" class="input-xxlarge" name="curso_change" value="' . $data [2] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FORMACION_LUGAR . ':</th>';
		echo '<td><input type="text" class="input-xlarge" name="lugar_change" value="' . $data [3] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FECHA . ':</th>';
		echo '<td>';
		?>

<!--<input type="text" id="date1" class="inputid" name="fecha_change"
			value="< ?php echo $data[4]; ?>">
		<input type="button" value="::"
			onclick="< ?php echo $db->show('date1') ?>">-->

<input id='date1' class='datepicker' name='fecha_change'
	value="<?php echo $data[4]; ?>" />




<?php
		echo '</td>';
		// echo '<td><input input class="inputid" name="fecha_change" value="'.$data[4].'"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . HORAS . ':</th>';
		echo '<td><input type="text" class="input-mini" name="horas_change" value="' . $data [5] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FORMACION_VALIDACION . ':</th>';
		echo '<td><input type="text" class="input-xxlarge" name="validacion_change" value="' . $data [6] . '">';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . COMENTARIOS . ':</th>';
		echo '<td><textarea class="textareasmall" name="comentarios_change">' . $data [7] . '</textarea></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$sql = mysqli_query($mysqli,  "UPDATE cursos SET trabajador='$_POST[trabajador_change]',curso='$_POST[curso_change]',lugar='$_POST[lugar_change]',fecha='$_POST[fecha_change]',horas='$_POST[horas_change]',validacion='$_POST[validacion_change]',comentarios='$_POST[comentarios_change]' WHERE id=$_GET[id]" );
		echo '<br />';
		echo '<a class="btn btn-warning" href="?seccion=cursos_admin&amp;aktion=change" title="' . VOLVER . '"><i class="fa fa-step-backward" style="color:Black;"></i></a>&emsp;';
		echo '<span class="btn btn-success">';
		echo CURSO_ACTUALIZADO;
		echo '</span>';
		
		//echo '<meta http-equiv="refresh" content="3"; URL=?seccion=cursos_admin&amp;aktion=change">';
	}
	
}
