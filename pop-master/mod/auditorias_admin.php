<?php
/**
* Mod editar y añadir auditorías al sistema de calidad
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
		<?php echo AINFORMES_ADMINISTRAR; ?>
	</caption>
	<tbody>
		<tr>
			<td width="20%"><a
				href="?seccion=auditorias_admin&amp;aktion=add"><?php echo AINFORMES_ANADIR; ?></a></td>
			<td><a href="?seccion=auditorias_admin&amp;aktion=change"><?php echo AINFORMES_CAMBIAR; ?></a></td>
		</tr>
	</tbody>
</table>
<br>


<?php
/*
 * requires the class require "class.datepicker.php"; // instantiate the object $db=new datepicker(); // uncomment the next line to have the calendar show up in german //$db->language = "dutch"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
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
	if ((empty ( $_POST ['ai'] )) and (empty ( $_POST ['Fecha'] )) and (empty ( $_POST ['AreaAuditada'] )) and (empty ( $_POST ['Documentacion'] )) and (empty ( $_POST ['Auditor'] )) and (empty ( $_POST ['ObjetoAuditoria'] )) and (empty ( $_POST ['Resultado'] ))) {

		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>';
		echo AINFORMES_ANADIR;
		echo '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th style width="15%">';
		echo AINFORMES_NUMERO;
		echo '</th>';
		echo '<td>';
		echo ' <select name="ai" value="">';
		echo '<option>...</option>';
		$sql = "SELECT * FROM aisgc ORDER BY fecha DESC";
		$sql = mysql_query ( $sql );
		mysql_query ( "SET NAMES 'utf8'" );
		if (! defined ( 'fecha' )) {
			define ( 'FECHA', 'fecha' );
		}
		if (! defined ( 'ai' )) {
			define ( 'AI', 'ai' );
		}
		while ( $row = mysql_fetch_assoc ( $sql ) ) {
			echo '<option value="' . $row [AI] . '">' . $row [AI] . ' de fecha: ' . $row [FECHA] . '</option>';
		}
		echo '</select>';

		?>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Mirar NC`s"
	onclick="Abrir_ventana('mod/ncslistadesplegable/index.php');">
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" onClick="Abrir_ventana('mod/ncsporarea_revsistema.php')"><img
	src="images/blue_graph.gif" alt=""></a>

<?php
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_FECHA;
		echo '</th>';

		//echo '<td><input type="text" id="date" class="inputfecha" name="Fecha" value="">';
		echo '<td><input id="date" class="datepicker" name="Fecha" />';
		
		

		?>
<!-- <input type="button" value="::"
	onclick="< ?php echo $db->show('date') ?>"> 

	<input id='date' class='datepicker' name='Fecha' />-->


	<?php
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_AREA_AUDITADA;
		echo '</th>';
		echo '<td>';
		$sql2 = "(SELECT afectaa FROM afectaa)
                          UNION
                           (SELECT nombrearea FROM areassensibles)";

		if (! defined ( 'nombrearea' )) {
			define ( 'NOMBREAREA', 'nombrearea' );
		}
		if (! defined ( 'afectaa' )) {
			define ( 'AFECTAA', 'afectaa' );
		}
		if (! defined ( 'AreaAuditada' )) {
			define ( 'AREAAUDITADA', 'AreaAuditada' );
		}

		$resultado = mysql_query ( $sql2 );
		while ( $nombrearea = mysql_fetch_array ( $resultado ) ) {
			echo '&nbsp;&nbsp;&nbsp;<input id="IDnombrearea[]" name="AreaAuditada[]" type="checkbox" value="' . $nombrearea [AFECTAA] . '">&nbsp;' . $nombrearea [AFECTAA] . '';
		}
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_DOCUMENTACION;
		echo '</th>';
		echo '<td><textarea class="textareasmall" name="Documentacion" value=""></textarea></td>';
		// echo '<td><input class="inputlargo" name="Documentacion" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AUDITORIAS_AUDITOR;
		echo '</th>';
		echo '<td>';
		$sql3 = "SELECT * FROM auditores WHERE activo=1";

		if (! defined ( 'auditor' )) {
			define ( 'AUDITOR', 'auditor' );
		}
		$resultado = mysql_query ( $sql3 );
		while ( $nombreauditor = mysql_fetch_array ( $resultado ) ) {
			echo '&nbsp;&nbsp;&nbsp;<input id="IDnombreauditor[]" name="Auditor[]" type="checkbox" value="' . $nombreauditor [AUDITOR] . '">&nbsp;' . $nombreauditor [AUDITOR] . '';
		}
		echo '<td>';

		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_OBJETO;
		echo '</th>';
		echo '<td><textarea class="textareasmall" name="ObjetoAuditoria" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_RESULTADO;
		echo '</th>';
		echo '<td><textarea class="textareanormal" name="Resultado" value=""></textarea></td>';
		echo '</tr>';
		echo '<td colspan="2"><input type="submit" value="' . GENERAL_ANADIR . '"></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {

		if (isset ( $_POST ['ai'] )) {
			$ai_Post = $_POST ['ai'];
		}
		if (isset ( $_POST ['Fecha'] )) {
			$Fecha_Post = $_POST ['Fecha'];
		}
		if (isset ( $_POST ['AreaAuditada'] )) {
			$AreaAuditada_Post = $_POST ['AreaAuditada'];
		}
		if (isset ( $_POST ['auditor'] )) {
			@$Auditor_Post = $_POST ['auditor'];
		}

		foreach ( $_POST ['AreaAuditada'] as $afectaa ) {
			@$afectaa_Post .= '' . $afectaa . ', ';
		}

		$Documentacion_Post = mysql_real_escape_string ( $_POST ['Documentacion'] );

		// @$Auditor_Post = mysql_real_escape_string($_POST['Auditor']);
		if (isset ( $_POST ['afectaa'] )) {
			@$afectaa_Post = $_POST ['afectaa'];
		}

		foreach ( $_POST ['Auditor'] as $auditor ) {
			@$Auditor_Post .= '' . $auditor . ', ';
		}

		$ObjetoAuditoria_Post = mysql_real_escape_string ( $_POST ['ObjetoAuditoria'] );
		$Resultado_Post = mysql_real_escape_string ( $_POST ['Resultado'] );
		$sql = mysql_query ( "INSERT INTO informeauditoria (ai, Fecha, AreaAuditada, Documentacion, Auditor, ObjetoAuditoria, Resultado) VALUES ('" . $ai_Post . "', '" . $Fecha_Post . "', '" . $afectaa_Post . "', '" . $Documentacion_Post . "', '" . $Auditor_Post . "', '" . $ObjetoAuditoria_Post . "', '" . $Resultado_Post . "')" );

		if ($sql) {
			echo "<span class='documenttitle'>";
			echo AINFORMES_INFORME;
			echo GENERAL_ANADIDO;
			echo "</span>";
		} else {
			echo GENERAL_ERROR_ANADIR_REGISTRO;
		}
	}
}

if ($aktion == "change") {
	$sql = mysql_query ( "SELECT * FROM informeauditoria ORDER BY id DESC" );
	mysql_query ( "SET NAMES 'utf8'" );

	if (! defined ( 'ai' )) {
		define ( 'AI', 'ai' );
	}
	echo AINFORMES_ADVERTICE;
	echo '<table class="sortable">';
	echo '<caption>';
	echo AINFORMES_CAMBIAR;
	echo '</caption>';
	echo '<tbody>';
	echo '<tr>';
	echo '<th>Id</th>';
	echo '<th>';
	echo AINFORMES_INFORME;
	echo '</th>';
	echo '<th>';
	echo GENERAL_FECHA;
	echo '</th>';
	echo '<th>';
	echo AINFORMES_AREA_AUDITADA;
	echo '</th>';
	// <!--<th>Documentaci&oacute;n</th>-->
	echo '<th>';
	echo AUDITORIAS_AUDITOR;
	echo '</th>';
	// <!--<th>Objeto</th><th>Resultado</th>-->
	echo '</tr>';
	while ( $row = mysql_fetch_row ( $sql ) ) {
		echo "<tr>";
		echo "<td>" . $row ['0'] . "</td>";
		echo "<td>";

		echo "<a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
		echo "<th>";
		echo AUDITORIAS_AUDITORIA;
		echo "</th><th>";
		echo GENERAL_FECHA;
		echo "</th><th>";
		echo AINFORMES_AREA_AUDITADA;
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
		echo AUDITORIAS_AUDITOR;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[4]";
		echo "</td><td colspan=2>";
		echo "$row[5]";
		echo "</td></tr>";
		echo "<tr><th colspan=2>";
		echo AINFORMES_OBJETO;
		echo "</th><th>";
		echo GENERAL_RESULTADO;
		echo "</th></tr>";
		echo "<tr><td colspan=2>";
		echo "$row[6]";
		echo "</td><td colspan=2>";
		echo "$row[7]";
		echo "</td></tr>";
		echo "</td></tr></table>'>";

		echo "$row[1]</a>";

		// <a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a>

		echo "</td>";

		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
		// echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['5'] . "</a></td>";
		/*
		 * echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['6']."</a></td>"; echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";
		 */
		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}

if ($aktion == "change_id") {
	if ((empty ( $_POST ['ai_change'] )) and (empty ( $_POST ['Fecha_change'] )) and (empty ( $_POST ['AreaAuditada_change'] )) and (empty ( $_POST ['Documentacion_change'] )) and (empty ( $_POST ['Auditor_change'] )) and (empty ( $_POST ['ObjetoAuditoria_change'] )) and (empty ( $_POST ['Resultado_change'] ))) {

		$id = ( int ) $_GET ['id'];
		mysql_query ( "SET NAMES 'utf8'" );
		$sql = mysql_query ( "SELECT * FROM informeauditoria WHERE id=$id " );
		$data = mysql_fetch_row ( $sql );

		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>';
		echo AINFORMES_PRINT_DETAILS;
		echo '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_INFORME;
		echo '</th>';
		echo '<td><input class="inputlargo" name="ai_change" value="' . $data [1] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_FECHA;
		echo '</th>';
		// echo '<td><input class="inputlargo" name="Fecha_change" value="'.$data[2].'"></td>';
		echo '<td>';
		?>

		<!-- <input type="text" id="date" class="inputfecha" name="Fecha_change"
	value="< ?php echo $data[2];?>" />

	<input type="button" value="::"
	onclick="< ?php echo $db->show('date') ?>"> -->

<input id='date1' class='datepicker' name='Fecha_change'
	value="<?php echo $data[2]; ?>" />

	<?php
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_AREA_AUDITADA;
		echo '</th>';
		echo '<td><input class="inputlargo" name="AreaAuditada_change" value="' . $data [3] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_DOCUMENTACION;
		echo '</th>';
		echo '<td><textarea class="inputlargo" name="Documentacion_change">' . $data [4] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AUDITORIAS_AUDITOR;
		echo '</th>';

		echo '<td><input class="inputlargo" name="Auditor_change" value="' . $data [5] . '"></td>';

		/*
		 * echo '<td>'; $sql3="SELECT * FROM auditores WHERE activo=1"; if (!defined('auditor')) { define('AUDITOR', 'auditor'); } $resultado=mysql_query($sql3); while ($nombreauditor=mysql_fetch_array($resultado)) { echo "<input id='IDnombreauditor[]' name='Auditor_change[]' type='checkbox' value='.$data[5].''>'$data[5]'"; } echo '<td>';
		 */

		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_OBJETO;
		echo '</th>';
		echo '<td><textarea class="inputlargo" rows="5" name="ObjetoAuditoria_change">' . $data [6] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo GENERAL_RESULTADO;
		echo '</th>';
		echo '<td><textarea class="textareanormal" rows="15" name="Resultado_change">' . $data [7] . '</textarea></td>';
		echo '</tr>';
		echo '<td colspan="2"><input type="submit" value="' . GENERAL_MODIFICAR . '"></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$id = ( int ) $_GET ['id'];
		$sql = mysql_query ( "UPDATE informeauditoria SET ai='$_POST[ai_change]',
                            Fecha='$_POST[Fecha_change]',
                            AreaAuditada='$_POST[AreaAuditada_change]',
                            Documentacion='$_POST[Documentacion_change]',
                            Auditor='$_POST[Auditor_change]',
                            ObjetoAuditoria='$_POST[ObjetoAuditoria_change]',
                            Resultado='$_POST[Resultado_change]'
                            WHERE id=$id" );
		$id = ( int ) $_GET ['id'];
		$sql2 = mysql_query ( "SELECT * FROM informeauditoria WHERE id = $id " );
		$data = mysql_fetch_row ( $sql2 );
		echo AINFORMES_INFORME;
		echo '&nbsp;<span class="documenttitle">' . $data [1] . '</span>&nbsp;';
		echo GENERAL_ACTUALIZADO;
	}
}
?>