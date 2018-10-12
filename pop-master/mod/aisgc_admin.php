<?php
/**
* Mod administrar auditorías
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
<table class="print">
	<caption>
		<?php echo AUDITORIAS_ADMINISTRAR_AUDITORIAS; ?>
	</caption>
	<tbody>
		<tr>
			<td width="20%"><a href="?seccion=aisgc_admin&amp;aktion=add"><?php echo AUDITORIAS_ANADIR_AUDITORIA; ?></a></td>
			<td><a href="?seccion=aisgc_admin&amp;aktion=change"><?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?></a></td>
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
	if ((empty ( $_POST ['fecha'] )) and (empty ( $_POST ['ai'] )) and (empty ( $_POST ['auditor1'] )) and (empty ( $_POST ['auditor2'] )) and (empty ( $_POST ['auditor3'] )) and (empty ( $_POST ['docum'] )) and (empty ( $_POST ['trabajador1'] )) and (empty ( $_POST ['trabajador2'] )) and (empty ( $_POST ['trabajador3'] )) and (empty ( $_POST ['servicio1'] )) and (empty ( $_POST ['servicio2'] )) and (empty ( $_POST ['vehiculos'] )) and (empty ( $_POST ['obstrat'] )) and (empty ( $_POST ['obscal'] )) and (empty ( $_POST ['obsalmac'] )) and (empty ( $_POST ['obscompras'] )) and (empty ( $_POST ['obsformac'] )) and (empty ( $_POST ['obsdocum'] )) and (empty ( $_POST ['obslegio'] ))) {
		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>';
		echo AUDITORIAS_ANADIR_AUDITORIA;
		echo '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_FECHA;
		echo '</th>';
		//echo '<td><input type="text" id="date" class="inputfecha" name="fecha" value="">';
		echo '<td>';
		?>
<!-- <input type="button" value="::"
	onclick="< ?php echo $db->show('date') ?>">-->

	<input id='date' class='datepicker' name='fecha' />

<?php

		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		?>
<div id="help"
	onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CODIGO_HELP; ?>');"
	onMouseOut="hiddenDiv()" style='display: table;'>

	<?php echo AUDITORIAS_NUMERO_AUDITORIA; ?>
	&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png" alt="" />
</div>
<?php

		echo '</th>';
		echo '<td>';
		$sql = "SELECT * FROM aisgc ORDER BY id DESC LIMIT 1";
		$sql = mysql_query ( $sql );
		if (! defined ( 'id' )) {
			define ( 'ID', 'id' );
		}
		if (! defined ( 'ai' )) {
			define ( 'AI', 'ai' );
		}
		if (! defined ( 'fecha' )) {
			define ( 'FECHA', 'fecha' );
		}
		while ( $row = mysql_fetch_assoc ( $sql ) ) {
			echo LAULTIMAAUDITORIA_FUE;
			echo '&nbsp;&nbsp;' . $row [AI] . ' - ' . $row [FECHA] . '';
		}
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<input class="inputchico" name="ai" value="">';

		?>
&nbsp;&nbsp;&nbsp;&nbsp;
<!--<input type="button" value="Mirar NC`s" onclick="Abrir_ventana('mod/ncslistadesplegable/index.php');">-->
<a
	href="mod/ncslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
	title="Consultar auditorias" class="thickbox"><img
	src="images/ncs_black.png" alt="Consultar no conformidades"
	title="Consultar no conformidades"></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a
	href="mod/aisgclistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
	title="Consultar auditorias" class="thickbox"><img
	src="images/menu_auditorias_black.png" alt="Consultar auditorias"
	title="Consultar auditorias"></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a
	href="mod/informeauditorialistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
	title="Consultar auditorias" class="thickbox"><img
	src="images/menu_informes_black.png"
	alt="Consultar informes de auditoría"
	title="Consultar informes de auditoría"></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a
	href="mod/objetivoslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
	title="Consultar auditorias" class="thickbox"><img
	src="images/menu_objetivos_black.png" alt="Consultar objetivos"
	title="Consultar objetivos"></a>
<?php

		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AUDITORIAS_AUDITOR;
		echo '</th>';
		echo '<td>';

		$sql2 = "SELECT * FROM auditores WHERE activo=1";
		if (! defined ( 'auditor1_add' )) {
			define ( 'AUDITOR1_ADD', 'auditor1_add' );
		}
		if (! defined ( 'auditor' )) {
			define ( 'AUDITOR', 'auditor' );
		}

		$resultado = mysql_query ( $sql2 );
		while ( $auditor1 = mysql_fetch_array ( $resultado ) ) {
			echo '<input id="IDauditor[]" name="auditor1_add[]" type="checkbox" value="' . $auditor1 [AUDITOR] . '">&nbsp;&nbsp;' . $auditor1 [AUDITOR] . '';
			echo '&nbsp;&nbsp;';
		}

		echo '<td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_DOCUMENTOS;
		echo '</th>';
		echo '<td><textarea class="textareanormal" name="docum" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th style="width:100px">';
		echo TRABAJADOR_TRABAJADOR;
		echo '</th>';
		echo '<td>';

		$sql2 = "SELECT * FROM trabajadores WHERE activo=1";
		if (! defined ( 'trabajador1_add' )) {
			define ( 'TRABAJADOR1_ADD', 'trabajador1_add' );
		}
		if (! defined ( 'trabajador' )) {
			define ( 'TRABAJADOR', 'trabajador' );
		}
		$resultado = mysql_query ( $sql2 );
		while ( $trabajador = mysql_fetch_array ( $resultado ) ) {
			echo '<input id="IDtrabajador1[]" name="trabajador1_add[]" type="checkbox" value="' . $trabajador [TRABAJADOR] . '">&nbsp;&nbsp;' . $trabajador [TRABAJADOR] . '';
			echo '&nbsp;&nbsp;';
		}

		echo '<td>';
		echo '<tr>';
		echo '<th style="width:100px">';
		echo GENERAL_CLIENTE;
		echo '</th>';
		echo '<td>';
		echo '<select name="servicio1">';
		echo '<option>...</option>';
		$sql = "SELECT * FROM servicios WHERE activo=1";
		$sql = mysql_query ( $sql );
		if (! defined ( 'servicio' )) {
			define ( 'SERVICIO', 'servicio' );
		}
		while ( $row = mysql_fetch_assoc ( $sql ) ) {
			echo '<option value="' . $row [SERVICIO] . '">' . $row [SERVICIO] . '</option>';
		}
		echo '</select>';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th style="width:100px">';
		echo GENERAL_CLIENTE;
		echo '</th>';
		echo '<td>';
		echo '<select name="servicio2">';
		echo '<option>...</option>';
		$sql = "SELECT * FROM servicios WHERE activo=1";
		$sql = mysql_query ( $sql );
		while ( $row = mysql_fetch_assoc ( $sql ) ) {
			// $row['servicio'] = htmlentities($row['servicio']);
			echo '<option value="' . $row [SERVICIO] . '">' . $row [SERVICIO] . '</option>';
		}
		echo '</select>';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_VEHICULOS;
		echo '</th>';
		echo '<td><input class="inputlargo" name="vehiculos" value=""></td>';
		echo '</tr>';
		?>
<tr>
	<th>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<?php echo CUESTIONARIO_TRATAMIENTOS; ?>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png"
				alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_SERVICIO_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div>
	</th>
	<td><textarea class="textareanormal" name="obstrat" cols="" rows=""></textarea></td>
</tr>
<tr>
	<th>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<?php echo CUESTIONARIO_CALIDAD; ?>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png"
				alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_OFICINA_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div>

	</th>
	<td><textarea class="textareanormal" name="obscal" cols="" rows=""></textarea></td>
</tr>
<tr>
	<th>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALMACEN; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
			<?php echo CUESTIONARIO_ALMACEN; ?>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png"
				alt="" />
		</div>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo CUESTIONARIOALMACEN_ADVERTENCIA; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/red_admiracion.gif" alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_ALMACEN_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div>

	</th>
	<td><textarea class="textareanormal" name="obsalmac" cols="" rows=""></textarea></td>
</tr>
<tr>
	<th>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACOMPRAS; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<?php
		echo CUESTIONARIO_COMPRAS;
		?>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png"
				alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_COMPRAS_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div>

	</th>

	<td><textarea class="textareanormal" name="obscompras" cols="" rows=""></textarea></td>
</tr>
<tr>
	<th>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOAFORMACION; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<?php echo CUESTIONARIO_FORMACION; ?>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png"
				alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_FORMACION_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
			<img src="images/help_red.png" alt="" />
		</div>
	</th>
	<td><textarea class="textareanormal" name="obsformac" cols="" rows=""></textarea></td>
</tr>
<tr>
	<th>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<?php echo CUESTIONARIO_DOCUMENTACION; ?>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png"
				alt="" />
		</div>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_DOCUMENTACION_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div>
	</th>
	<td><textarea class="textareanormal" name="obsdocum" cols="" rows=""></textarea></td>
</tr>
<tr>
	<th><?php  echo CUESTIONARIO_TALLER;?> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOATALLER; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<img src="images/help.png" alt="" />
		</div>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_INFRAESTRUCTURA_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
			<img src="images/help_red.png" alt="" />
		</div></th>
	<td><textarea class="textareanormal" name="obslegio" cols="" rows=""></textarea></td>
</tr>
<?php
		echo '<td colspan="2"><input type="submit" value="' . GENERAL_ANADIR . '"></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {

		// $id_Post = $_POST['id'];
		if (isset ( $_POST ['fecha'] )) {
			$fecha_Post = $_POST ['fecha'];
		}
		if (isset ( $_POST ['ai'] )) {
			$ai_Post = $_POST ['ai'];
		}
		if (isset ( $_POST ['auditor1'] )) {
			$auditor1_Post = $_POST ['auditor1'];
		}

		$auditor1_Post = (isset ( $_POST ['auditor1'] )) ? $_POST ['auditor1'] : '';

		foreach ( $_POST ['auditor1_add'] as $auditor1 ) {
			$auditor1_Post .= '' . $auditor1 . ', ';
		}
		if (isset ( $_POST ['docum'] )) {
			$docum_Post = $_POST ['docum'];
		}
		if (isset ( $_POST ['trabajador'] )) {
			$trabajador_Post = $_POST ['trabajador'];
		}

		$trabajador_Post = (isset ( $_POST ['trabajador'] )) ? $_POST ['trabajador'] : '';

		foreach ( $_POST ['trabajador1_add'] as $trabajador ) {
			$trabajador_Post .= '' . $trabajador . ', ';
		}

		if (isset ( $_POST ['servicio1'] )) {
			$servicio1_Post = $_POST ['servicio1'];
		}
		if (isset ( $_POST ['servicio2'] )) {
			$servicio2_Post = $_POST ['servicio2'];
		}
		if (isset ( $_POST ['vehiculos'] )) {
			$vehiculos_Post = $_POST ['vehiculos'];
		}
		if (isset ( $_POST ['obstrat'] )) {
			$obstrat_Post = $_POST ['obstrat'];
		}
		if (isset ( $_POST ['obscal'] )) {
			$obscal_Post = $_POST ['obscal'];
		}
		if (isset ( $_POST ['obsalmac'] )) {
			$obsalmac_Post = $_POST ['obsalmac'];
		}
		if (isset ( $_POST ['obscompras'] )) {
			$obscompras_Post = $_POST ['obscompras'];
		}
		if (isset ( $_POST ['obsformac'] )) {
			$obsformac_Post = $_POST ['obsformac'];
		}
		if (isset ( $_POST ['obsdocum'] )) {
			$obsdocum_Post = $_POST ['obsdocum'];
		}
		if (isset ( $_POST ['obslegio'] )) {
			$obslegio_Post = $_POST ['obslegio'];
		}

		$sql = mysql_query ( "INSERT INTO aisgc (fecha, ai, auditor1, docum, trabajador1, servicio1, servicio2, vehiculos, obstrat, obscal, obsalmac, obscompras, obsformac, obsdocum, obslegio) VALUES ('" . $fecha_Post . "', '" . $ai_Post . "', '" . $auditor1_Post . "', '" . $docum_Post . "', '" . $trabajador_Post . "', '" . $servicio1_Post . "', '" . $servicio2_Post . "', '" . $vehiculos_Post . "', '" . $obstrat_Post . "', '" . $obscal_Post . "', '" . $obsalmac_Post . "', '" . $obscompras_Post . "', '" . $obsformac_Post . "', '" . $obsdocum_Post . "', '" . $obslegio_Post . "')" );
		if ($sql) {
			echo "Auditoría añadida";
		} else {
			echo "Error al añadir el registro!";
		}
		// echo "Error message = ".mysql_error();
	}
}

if ($aktion == "change") {
	$sql = mysql_query ( "SELECT * FROM aisgc ORDER BY id DESC" );
	echo AUDITORIAS_ADVERTICE;
	echo '<table class="sortable">';
	echo '<caption>';
	echo AUDITORIAS_CAMBIAR_AUDITORIA;
	echo '</caption>';
	echo '<tbody>';
	echo '<tr>';
	// <th>Id</th>';
	echo '<th>';
	echo AUDITORIAS_NUMERO_AUDITORIA;
	echo '</th>';
	echo '<th>';
	echo GENERAL_FECHA;
	echo '</th>';

	echo '<th style width="10%"><img src="images/red_print.gif" alt="';
	echo IMPRIMIR_AUDITORIA;
	echo '" title="';
	echo IMPRIMIR_AUDITORIA;
	echo '" /></th>';
	echo '</tr>';
	while ( $row = mysql_fetch_row ( $sql ) ) {
		echo "<tr>";
		// echo "<td>".$row['0']."</td>";
		echo "<td>";
		echo "<a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
		echo "<th>";
		echo GENERAL_FECHA;
		echo "</th><th>";
		echo AUDITORIAS_AUDITORIA;
		echo "</th><th>";
		echo AUDITORIAS_AUDITOR;
		echo "</th><th></th></tr>";
		echo "<tr><td>";
		echo "$row[1]";
		echo "</td><td>";
		echo "$row[2]";
		echo "</td><td colspan=2>";
		echo "$row[3]";
		echo "</td></tr>";
		echo "<tr><th colspan=2>";
		echo GENERAL_DOCUMENTACION;
		echo "</th><th colspan=2>";
		echo TRABAJADOR_TRABAJADOR;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[6]";
		echo "</td><td colspan=2>";
		echo "$row[7]";
		echo "</td></tr>";
		echo "<tr><th colspan=2>";
		echo SERVICIO_SERVICIO;
		echo "</th><th>";
		echo GENERAL_VEHICULOS;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[10]";
		echo "</td><td colspan=2>";
		echo "$row[12]";
		echo "</td></tr>";
		echo "<tr><th colspan=2>";
		echo CUESTIONARIO_TRATAMIENTOS;
		echo "</th><th>";
		echo CUESTIONARIO_CALIDAD;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[13]";
		echo "</td><td colspan=2>";
		echo "$row[14]";
		echo "</td></tr>";
		echo "<tr><th colspan=2>";
		echo CUESTIONARIO_ALMACEN;
		echo "</th><th>";
		echo CUESTIONARIO_COMPRAS;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[15]";
		echo "</td><td colspan=2>";
		echo "$row[16]";
		echo "</td></tr>";
		echo "<tr><th colspan=2>";
		echo CUESTIONARIO_FORMACION;
		echo "</th><th>";
		echo CUESTIONARIO_DOCUMENTACION;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[17]";
		echo "</td><td colspan=2>";
		echo "$row[18]";
		echo "</td></tr>";
		echo "<tr><th colspan=2>";
		echo CUESTIONARIO_LEGIONELLA;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[19]";
		echo "</td></tr>";

		echo "</tr></table>'>";

		echo "$row[2]</a>";

		// <a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a>

		echo "</td>";
		echo "<td><a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
		echo "<td><a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "'><img src='images/red_print.gif' alt='" . IMPRIMIR_AUDITORIA . "' title='" . IMPRIMIR_AUDITORIA . "' /></a></td>";

		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}

if ($aktion == "change_id") {
	if ((empty ( $_POST ['fecha_change'] )) and (empty ( $_POST ['ai_change'] )) and (empty ( $_POST ['auditor1_change'] )) and (empty ( $_POST ['auditor2_change'] )) and (empty ( $_POST ['auditor3_change'] )) and (empty ( $_POST ['docum_change'] )) and (empty ( $_POST ['trabajador1_change'] )) and (empty ( $_POST ['trabajador2_change'] )) and (empty ( $_POST ['trabajador3_change'] )) and (empty ( $_POST ['servicio1_change'] )) and (empty ( $_POST ['servicio2_change'] )) and (empty ( $_POST ['vehiculos_change'] )) and (empty ( $_POST ['obstrat_change'] )) and (empty ( $_POST ['obscal_change'] )) and (empty ( $_POST ['obsalmac_change'] )) and (empty ( $_POST ['obscompras_change'] )) and (empty ( $_POST ['obsformac_change'] )) and (empty ( $_POST ['obsdocum_change'] )) and (empty ( $_POST ['obslegio_change'] ))) {
		$id = ( int ) $_GET ['id'];
		$sql = mysql_query ( "SELECT * FROM aisgc WHERE id = $id " );
		$data = mysql_fetch_row ( $sql );

		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>';
		echo AUDITORIAS_PRINT_DETAILS;
		echo '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_FECHA;
		echo '</th>';
		echo '<td>';
		?>
<!--<input type="text" id="date" class="inputfecha" name="fecha_change"
	value="< ?php echo $data[1];?>" />
<input type="button" value="::"
	onclick="< ?php echo $db->show('date') ?>">-->

	<input id='date1' class='datepicker' name='fecha_change'
	value="<?php echo $data[1]; ?>" />


	<?php
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AUDITORIAS_AUDITORIA;
		echo '</th>';
		echo '<td><input class="inputlargo" name="ai_change" value="' . $data [2] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AUDITORIAS_AUDITOR;
		echo '</th>';

		echo '<td>';
		echo '<select name="auditor1_change">';
		echo '<option>' . $data [3] . '</option>';
		$sql = "SELECT auditor
                                        FROM auditores
                                        UNION SELECT inspector
                                        FROM inspectores";
		$sql = mysql_query ( $sql );
		if (! defined ( 'auditor' )) {
			define ( 'AUDITOR', 'auditor' );
		}
		while ( $row = mysql_fetch_assoc ( $sql ) ) {
			echo '<option value="' . $row [AUDITOR] . '">' . $row [AUDITOR] . '</option>';
		}
		echo '</select>';
		echo '</td>';

		// echo '<td><input class="inputlargo" name="auditor1_change" value="'.$data[3].'"></td>';

		echo '</tr>';

		echo '<tr>';
		echo '<th>';
		echo GENERAL_DOCUMENTACION;
		echo '</th>';
		echo '<td><textarea class="textareanormal" rows="5" name="docum_change">' . $data [6] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo TRABAJADOR_TRABAJADOR;
		echo '</th>';
		echo '<td><input class="inputlargo" name="trabajador1_change" value="' . $data [7] . '"></td>';
		echo '</tr>';

		echo '<tr>';
		echo '<th>';
		echo SERVICIO_SERVICIO;
		echo '</th>';
		echo '<td><input class="inputlargo" name="servicio1_change" value="' . $data [10] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo SERVICIO_SERVICIO;
		echo '</th>';
		echo '<td><input class="inputlargo" name="servicio2_change" value="' . $data [11] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_VEHICULOS;
		echo '</th>';
		echo '<td><input class="inputlargo" name="vehiculos_change" value="' . $data [12] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo CUESTIONARIO_TRATAMIENTOS;
		?>
<div id="help"
	onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?>');"
	onMouseOut="hiddenDiv()" style='display: table;'>
	<img src="images/help.png" alt="" />
</div>
<div id="help"
	onMouseOver="showdiv(event,'<?php echo INDICADOR_SERVICIO_HELP; ?>');"
	onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
	<img src="images/help_red.png" alt="" />
</div>

<?php
		echo '</th>';
		echo '<td><textarea class="textareanormal" rows="5" name="obstrat_change">' . $data [13] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo CUESTIONARIO_CALIDAD;
		?>
<div id="help"
	onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?>');"
	onMouseOut="hiddenDiv()" style='display: table;'>
	<img src="images/help.png" alt="" />
</div>
<div id="help"
	onMouseOver="showdiv(event,'<?php echo INDICADOR_OFICINA_HELP; ?>');"
	onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
	<img src="images/help_red.png" alt="" />
</div>

<?php
		echo '</th>';
		echo '<td><textarea class="textareanormal" rows="5" name="obscal_change">' . $data [14] . '</textarea></td>';
		echo '</tr>';

		?>
<tr>
	<th><?php echo CUESTIONARIO_ALMACEN; ?>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALMACEN ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<img src="images/help.png" alt="" />
		</div>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo CUESTIONARIOALMACEN_ADVERTENCIA; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
			<img src="images/red_admiracion.gif" alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_ALMACEN_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
			<img src="images/help_red.png" alt="" />
		</div></th>
	<td><textarea class="textareanormal" rows="5" name="obsalmac_change"
			cols="">
			<?php echo $data[15]?>
		</textarea></td>
	<th></th>
</tr>
<tr>
	<th><?php echo CUESTIONARIO_COMPRAS;?>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACOMPRAS ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>

			<img src="images/help.png" alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_COMPRAS_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div></th>
	<td><textarea class="textareanormal" rows="5" name="obscompras_change"
			cols="">
			<?php echo $data[16]?>
		</textarea></td>
</tr>
<tr>
	<th><?php echo CUESTIONARIO_FORMACION; ?>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOAFORMACION ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>

			<img src="images/help.png" alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_FORMACION_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div></th>
	<td><textarea class="textareanormal" rows="5" name="obsformac_change"
			cols="">
			<?php echo $data[17]?>
		</textarea></td>
</tr>
<tr>
	<th><?php echo CUESTIONARIO_DOCUMENTACION; ?>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>

			<img src="images/help.png" alt="" />
		</div>

		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_DOCUMENTACION_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>

			<img src="images/help_red.png" alt="" />
		</div></th>
	<td><textarea class="textareanormal" rows="5" name="obsdocum_change"
			cols="">
			<?php echo $data[18]?>
		</textarea></td>
</tr>
<tr>
	<th><?php  echo CUESTIONARIO_TALLER; ?>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOATALLER ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<img src="images/help.png" alt="" />
		</div>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo INDICADOR_INFRAESTRUCTURA_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table; margin-top: 3px;'>
			<img src="images/help_red.png" alt="" />
		</div></th>
	<td><textarea class="textareanormal" rows="5" name="obslegio_change"
			cols="">
			<?php echo $data[19]?>
		</textarea></td>
</tr>
<?php
		echo '<td colspan="2"><input type="submit" value="' . GENERAL_MODIFICAR . '">';
		echo "<button onclick='history.go(-1);'>";
		echo GENERAL_VOLVER;
		echo "</button>";
		echo '</td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {

		$id = ( int ) $_GET ['id'];
		$sql = mysql_query ( "UPDATE aisgc SET fecha='$_POST[fecha_change]',
            ai='$_POST[ai_change]',
            auditor1='$_POST[auditor1_change]',
            docum='$_POST[docum_change]',
            trabajador1='$_POST[trabajador1_change]',
            servicio1='$_POST[servicio1_change]',
            servicio2='$_POST[servicio2_change]',
            vehiculos='$_POST[vehiculos_change]',
            obstrat='$_POST[obstrat_change]',
            obscal='$_POST[obscal_change]',
            obsalmac='$_POST[obsalmac_change]',
            obscompras='$_POST[obscompras_change]',
            obsformac='$_POST[obsformac_change]',
            obsdocum='$_POST[obsdocum_change]',
            obslegio='$_POST[obslegio_change]'
            WHERE id=$id" );
		if ($sql) {

			$id = ( int ) $_GET ['id'];
			$sql2 = mysql_query ( "SELECT * FROM aisgc WHERE id = $id " );
			$data = mysql_fetch_row ( $sql2 );
			echo AUDITORIAS_AUDITORIA;
			echo '&nbsp;<span class="documenttitle">' . $data [2] . '</span>&nbsp;';
			echo GENERAL_ACTUALIZADA;
			echo '!';
			// echo AUDITORIA_ACTUALIZADA;
		}
		// echo "Error message = ".mysql_error();
	}
}
?>
<br />
<br />
<br />