<?php
/**
* Mod ADMINISTRAR inspecciones
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

		<?php echo INSPECCIONES_EDITAR_INSPECCION;?> /  
			<a href="?seccion=inspecciones_admin&amp;aktion=add"><?php echo INSPECCIONES_ANADIR_INSPECCION; ?></a> ::
			<a href="?seccion=inspecciones_admin&amp;aktion=change"><?php echo INSPECCIONES_CAMBIAR_INSPECCION; ?></a>

<br />
<?php
error_reporting ( E_ALL );

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['inspector_add'] )) 
			and (empty ( $_POST ['fecha_add'] )) 
			and (empty ( $_POST ['servicio_add'] )) 
			and (empty ( $_POST ['hora_add'] )) 
			and (empty ( $_POST ['vigilante_add'] )) 
			and (empty ( $_POST ['incidencia_add'] )) 
			and (empty ( $_POST ['codigo_incidencia_add'] )) 
			and (empty ( $_POST ['servicio2_add'] )) 
			and (empty ( $_POST ['hora2_add'] )) 
			and (empty ( $_POST ['vigilante2_add'] )) 
			and (empty ( $_POST ['incidencia2_add'] )) 
			and (empty ( $_POST ['codigo_incidencia2_add'] )) 
			and (empty ( $_POST ['servicio3_add'] )) 
			and (empty ( $_POST ['hora3_add'] )) 
			and (empty ( $_POST ['vigilante3_add'] )) 
			and (empty ( $_POST ['incidencia3_add'] )) 
			and (empty ( $_POST ['codigo_incidencia3_add'] )) 
			and (empty ( $_POST ['servicio4_add'] )) 
			and (empty ( $_POST ['hora4_add'] )) 
			and (empty ( $_POST ['vigilante4_add'] )) 
			and (empty ( $_POST ['incidencia4_add'] )) 
			and (empty ( $_POST ['codigo_incidencia4_add'] )) 
			and (empty ( $_POST ['servicio5_add'] )) 
			and (empty ( $_POST ['hora5_add'] )) 
			and (empty ( $_POST ['vigilante5_add'] )) 
			and (empty ( $_POST ['incidencia5_add'] )) 
			and (empty ( $_POST ['codigo_incidencia5_add'] )) 
			and (empty ( $_POST ['servicio6_add'] )) 
			and (empty ( $_POST ['hora6_add'] )) 
			and (empty ( $_POST ['vigilante6_add'] )) 
			and (empty ( $_POST ['incidencia6_add'] )) 
			and (empty ( $_POST ['codigo_incidencia6_add'] )) 
			and (empty ( $_POST ['servicio7_add'] )) 
			and (empty ( $_POST ['hora7_add'] )) 
			and (empty ( $_POST ['vigilante7_add'] )) 
			and (empty ( $_POST ['incidencia7_add'] )) 
			and (empty ( $_POST ['codigo_incidencia7_add'] ))) {
		
		echo '&emsp;&emsp;<span class="yellow">' . INSPECCIONES_ANADIR_INSPECCION . '</span>';

		?>
				<div align="left">
					<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question-circle fa-2x"></i>					
						<span>
						<?php echo INSPECCION_EXTINTORES; ?>
						</span>
					</div>
				</div>
		<?php
	
		echo '<form action="" method="POST">';
		echo '<table class="print">';		
		echo '<tbody>';
		echo '<tr>';
		echo '<th style width="10%">Inspector:</th>';
		echo '<td>';
		echo '<select name="inspector_add">';
		echo '<option>..inspector</option>';
		$sql = "SELECT * FROM inspectores WHERE activo=1";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'inspector' )) {
			define ( 'INSPECTOR', 'inspector' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {

			echo '<option value="' . $row [INSPECTOR] . '">' . $row [INSPECTOR] . '</option>';
		}
		echo '</select>';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo FECHA;
		echo '</th>';
		echo '<td>';

		$sql = "SELECT id, fecha, servicio FROM inspecciones ORDER BY id DESC LIMIT 1";
		$sql = mysqli_query($mysqli,  $sql );

		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo ULTIMA;
			echo ':' . $row ['fecha'] . ' - ' . $row ['servicio'] . '';
		}
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';

		?>

		<input id='date' class='datepicker' name='fecha_add'
			value="<?php echo SELECCIONAR_FECHA; ?>" /> &nbsp;&nbsp;&nbsp;&nbsp; <input class="btn btn-warning" type="button" value="Programa Mant." onclick="Abrir_ventana('uploads/calidad/pdf/programa_manto.pdf');">
	<?php
		echo '</td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';

		echo '<br /><br />';

		// ---Corte de tabla-----------------------------------------------------------

		echo '<table class="print">';
		echo '<tbody>';
		echo '<tr>';

		echo '<th>';
		echo SERVICIO_SERVICIO;
		echo '</th>';

		echo '<td>';

		$sql2 = "SELECT * FROM servicios WHERE activo=1";
		$resultado = mysqli_query($mysqli,  $sql2 );
		while ( $servicio = mysqli_fetch_array( $resultado ) ) {
			echo '<input name="servicio_add[]" type="checkbox" value="' . $servicio ['servicio'] . '">&nbsp;' . $servicio ['servicio'] . '&nbsp;&nbsp;';
		}
		echo '</td>';
		echo '<tr>';
		echo '<th></th>';
		echo '<td>';
		$sql = mysqli_query($mysqli,  "SELECT * FROM codigosincidenciasinspecciones ORDER BY id ASC" );
		while ( $row = mysqli_fetch_row( $sql ) ) {
			echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
			echo "<th>";
			echo GRAVEDAD;
			echo "</th><th>";
			echo CODIGO;
			echo "</th><th>";
			echo TIPO;
			echo "</th></tr>";
			echo "<tr><td>";
			echo "$row[1]";
			echo "</td><td>";
			echo "$row[2]";
			echo "</td><td colspan=2>";
			echo "$row[3]";
			echo "</td></tr>";
			echo "</tr></table>'>";
			echo "$row[2], </a>";
		}
		echo '</td>';
		echo '</tr>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo INCIDENCIA;
		echo '</th>';
		echo '<td><textarea class="textareanormal"  name="incidencia_add" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo HORA;
		echo '</th>';
		echo '<td><input type="text" class="form-control input-mini" id="hora_add" name="hora_add" value="hora.."></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo TRABAJADOR;
		echo '</th>';

		echo '<td>';
		$sql3 = "SELECT * FROM trabajadores WHERE activo=1";
		$resultado = mysqli_query($mysqli,  $sql3 );
		while ( $trabajador = mysqli_fetch_array( $resultado ) ) {
			echo '<input name="vigilante_add[]" type="checkbox" value="' . $trabajador ['trabajador'] . '">&nbsp;' . $trabajador ['trabajador'] . '&nbsp;&nbsp;';
		}
		echo '<td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';

				
				echo '<div align="right">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . CODIGO . '<span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>
				' . AYUDA . '</em>' . SELECCIONE_EL_CODIGO . '</span></a></p>
				</div>';
		
		echo '</th>';
		echo '<td colspan="2">';
		echo '<select name="codigo_incidencia_add">';
		echo '<option>0</option>';
		$sql = "SELECT * FROM codigosincidenciasinspecciones";
		$sql = mysqli_query($mysqli,  $sql );

		if (! defined ( 'gravedad' )) {
			define ( 'GRAVEDAD', 'gravedad' );
		}
		if (! defined ( 'codincid' )) {
			define ( 'CODINCID', 'codincid' );
		}
		if (! defined ( 'nombreincid' )) {
			define ( 'NOMBREINCID', 'nombreincid' );
		}

		while ( $row = mysqli_fetch_assoc( $sql ) ) {

			echo '<option value="' . $row [CODINCID] . '">' . $row [CODINCID] . '--' . $row [NOMBREINCID] . '</option>';
		}
		echo '</select>';
		echo '</td>';

		echo '</tr>';
		echo '<tr>';
		echo '<td colspan="5"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {

		if (isset ( $_POST ['inspector_add'] )) {
			$inspector_Post = $_POST ['inspector_add'];
		}

		if (isset ( $_POST ['fecha_add'] )) {
			$fecha_Post = $_POST ['fecha_add'];
		}
		if (isset ( $_POST ['servicio'] )) {
			$servicio_Post = $_POST ['servicio'];
		}

		$servicio_Post = (isset ( $_POST ['servicio'] )) ? $_POST ['servicio'] : '';

		foreach ( $_POST ['servicio_add'] as $servicio ) {
			$servicio_Post .= ', ' . $servicio . '';
		}

		if (isset ( $_POST ['hora_add'] )) {
			$hora_Post = $_POST ['hora_add'];
		}
		if (isset ( $_POST ['trabajador'] )) {
			$trabajador_Post = $_POST ['trabajador'];
		}

		$trabajador_Post = (isset ( $_POST ['trabajador'] )) ? $_POST ['trabajador'] : '';

		foreach ( $_POST ['vigilante_add'] as $trabajador ) {
			$trabajador_Post .= ', ' . $trabajador . '';
		}

		if (isset ( $_POST ['incidencia_add'] )) {
			$incidencia_Post = $_POST ['incidencia_add'];
		}
		if (isset ( $_POST ['codigo_incidencia_add'] )) {
			$codigo_incidencia_Post = $_POST ['codigo_incidencia_add'];
		}

		$sql = mysqli_query($mysqli,  "INSERT INTO inspecciones (inspector, fecha, servicio, hora, vigilante, incidencia, codigo_incidencia) VALUES ('" . $inspector_Post . "', '" . $fecha_Post . "', '" . $servicio_Post . "', '" . $hora_Post . "', '" . $trabajador_Post . "', '" . $incidencia_Post . "', '" . $codigo_incidencia_Post . "')" );
		if ($sql) {
			echo "Inspección añadida";
		} else {
			echo "Error al añadir el registro!";
		}
	}
}

if ($aktion == "change") {
	$sql = mysqli_query($mysqli,  "SELECT * FROM inspecciones ORDER BY Id DESC" );
	echo '<span class="yellow">' . INSPECCIONES_CAMBIAR_INSPECCION . '</span>';
	echo '<table id="myTable" class="sortable">';
	echo '<thead>';
	echo '<tr><th>Id</th><th>' . FECHA . '</th><th>' . INSPECCIONES_INSPECTOR . '</th><th>' . SERVICIO_SERVICIO . '</th></tr>';
	echo '</thead><tbody>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		// echo "<td>".$row['0']."</td>";
		echo "<td><a href='?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['0'] . "</a></td>";
		echo "<td>";

		?>
		<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
		<a href="index.php?seccion=inspecciones_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>
		
		<span>
			<br />								
			<a href="?seccion=inspecciones_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo INSPECCION; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#673ab7;"></i></a>
			
			<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo INSPECCION; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#673ab7;"></i></a>								
		
			<a href="?seccion=inspecciones_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo INSPECCION; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#673ab7;"></i></a>
		<?php				
				echo "<table class=print2>";
						echo "<tr>";
						echo "<th><font color='white'>" . ID . "</font></th>";
						echo "<th><font color='white'>" . FECHA . "</font></th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>$row[0]</td>";
							echo "<td>$row[2]</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><font color='white'>" . INSPECCIONES_INSPECTOR . "</font></th>";
						echo "<th><font color='white'>" . SERVICIO_SERVICIO . "</font></th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>$row[1]</td>";
							echo "<td>$row[3]</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><font color='white'>" . TRABAJADOR . "</font></th>";
						echo "<th><font color='white'>" . HORA . "</font></th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>$row[5]</td>";
							echo "<td>$row[4]</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><font color='white'>" . INCIDENCIA . "</font></th>";
						echo "<th><font color='white'>" . CODIGO_INCIDENCIA . "</font></th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>$row[6]</td>";
							echo "<td>$row[7]</td>";
						echo "</tr>";
						echo "</table>'>$row[2]</a>";
			?>
			</span>
	</div>
		<?php

		echo "</td>";
		echo "<td><a href='?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
		echo "<td><a href='?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . substr($row ['3'], 1) . "</a></td>";
		echo "</tr>";
	}
	echo "<tbody>";
	echo "</table>";
}
if ($aktion == "change_id") {
	if ((empty ( $_POST ['Id'] )) and (empty ( $_POST ['inspector'] )) and (empty ( $_POST ['fecha'] )) and (empty ( $_POST ['servicio'] )) and (empty ( $_POST ['hora'] )) and (empty ( $_POST ['vigilante'] )) and (empty ( $_POST ['incidencia'] )) and (empty ( $_POST ['codigo_incidencia'] ))) {
		$id = ( int ) $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM inspecciones WHERE Id = $id " );
		$data = mysqli_fetch_row( $sql );

		echo "<br /><button class='btn btn-primary' onclick='history.go(-1);'>";
		echo VOLVER;
		echo "</button>";

		echo '<form action="" method="POST">';
		// echo 'Id: <input class="inputfecha" name="id" value="'.$data[0].'"></td>';
		// echo '<br>';

		echo '<table class="print">';
		echo '<caption>Modificar una inspecci&oacute;n</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . INSPECCIONES_INSPECTOR . ':</th>';
		
		echo '<td>';
			echo '<select name="inspector" class="btn btn-success">';
			echo '<option>' . $data [1] . '</option>';
			$sql = "SELECT inspector FROM inspectores";
			$sql = mysqli_query($mysqli,  $sql );
			if (! defined ( 'inspector' )) {
				define ( 'INSPECTOR', 'inspector' );
			}
			while ( $row = mysqli_fetch_assoc( $sql ) ) {
				echo '<option value="' . $row [INSPECTOR] . '">' . $row [INSPECTOR] . '</option>';
			}
			echo '</select>';
		echo '</td>';
		
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FECHA . ':</th>';

				echo '<td><input id="date1" class="datepicker" name="fecha"
	value="' . $data [2] . '" /></td>';

		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . SERVICIO_SERVICIO . ':</th>';
		
				echo '<td>';
			echo '<select name="servicio" class="btn btn-success">';
			echo '<option>' . substr($data [3], 1) . '</option>';
			$sql = "SELECT * FROM servicios";
			$sql = mysqli_query($mysqli,  $sql );
			if (! defined ( 'servicio' )) {
				define ( 'SERVICIO', 'servicio' );
			}
			while ( $row = mysqli_fetch_assoc( $sql ) ) {
				echo '<option value="' . $row [SERVICIO] . '">' . $row [SERVICIO] . '</option>';
			}
			echo '</select>';
		echo '</td>';
		
		
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . HORA . ':</th><td><input type="text" class="form-control input-mini" name="hora" value="' . $data [4] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . TRABAJADOR . ':</th>';
		echo '<td>';
		echo '<select name="vigilante">';
			echo '<option>' . $data [5] . '</option>';
			$sql = "SELECT * FROM trabajadores WHERE activo=1";
			$sql = mysqli_query($mysqli,  $sql );
			if (! defined ( 'trabajador' )) {
				define ( 'TRABAJADOR', 'trabajador' );
			}
			while ( $row = mysqli_fetch_assoc( $sql ) ) {
				echo '<option value="' . $row [TRABAJADOR] . '">' . $row [TRABAJADOR] . '</option>';
			}
			echo '</select>';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . SERVICIO_INCIDENCIA . ':</th><td><textarea class="textareanormal" name="incidencia">' . $data [6] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th style width="10%">';
		
		
			  	echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#"><b>'.CODIGO.':</b><span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . AYUDA . '</em>' . SELECCIONE_EL_CODIGO . '</span></a></p>
				</div>';
		
		echo '</th>';
		echo '<td colspan="2">';
		echo '<select name="codigo_incidencia">';
		echo '<option>' . $data [7] . '</option>';
		$sql = "SELECT * FROM incidenciasinspeccion";
		$sql = mysqli_query($mysqli,  $sql );

		if (! defined ( 'cod' )) {
			define ( 'COD', 'cod' );
		}
		if (! defined ( 'codname' )) {
			define ( 'CODNAME', 'codname' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {

			echo '<option value="' . $row [COD] . '">' . $row [COD] . '--' . $row [CODNAME] . '</option>';
		}
		echo '</select>';
		echo '</td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '<br>';

		echo '<td colspan="5"><button type="submit" class="btn btn-info">' . ENVIAR . '</button>&nbsp;&nbsp;';

		echo '</td>';

		echo '</form>';
	} else {

		$id = ( int ) $_GET ['id'];
		$sql = mysqli_query($mysqli,  "UPDATE inspecciones
                        SET inspector='$_POST[inspector]',
                        fecha='$_POST[fecha]',
                        servicio='$_POST[servicio]',
                        hora='$_POST[hora]',
                        vigilante='$_POST[vigilante]',
                        incidencia='$_POST[incidencia]',
                        codigo_incidencia='$_POST[codigo_incidencia]'
                        WHERE id=$id" );
		if ($sql) {
			echo 'Inspecci&oacute;n actualizada!';
		}
		echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
	}
}
// mysql_close($db);
?>
			<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /><br />