<?php
/**
* Mod ADMINISTRAR documentos
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

<?php

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

/*if ($aktion == "add") { 
	if ((empty($_POST['proveedor'])) 
	AND (empty($_POST['incidencia'])) 
	AND (empty($_POST['codigoincidencia'])) 
	AND (empty($_POST['afectaa'])) 
	AND (empty($_POST['fecha']))) { 
			echo '<form action="" method="POST">'; 
			echo '<table class="print">'; 
			echo '<thead>'.PROVEEDORES_ANOTAR_INCIDENCIA.'</thead>'; 
			echo '<tbody>'; 
			echo '<tr>'; 
			echo '<th>'.PROVEEDORES_PROVEEDOR.':</td>'; 
			echo '<td>'; echo '<select name="proveedor">'; 
				echo '<option>...proveedor</option>'; 
					$sql = "SELECT * FROM proveedores WHERE activo=1"; 
					$sql = mysql_query($sql); 
					while ($row = mysql_fetch_assoc($sql)) {
						$row['proveedor'] = htmlentities($row['proveedor']); 
							echo '<option value="'.$row[proveedor].'">'.$row[proveedor].'</option>'; 
					} 
					echo '</select></td>'; 
					echo '</tr>'; 
					echo '<tr>'; 
					echo '<th>'.PROVEEDORES_INCIDENCIA.':</td>'; 
					echo '<td><textarea rows="10" cols="50" name="incidencia" value=""></textarea></td>'; 
					echo '</tr>'; 
					echo '<tr>'; 
					echo '<th>C&oacute;digo: </td>'; 
					echo '<td>'; 
					echo '<select name="codigoincidencia">'; 
					echo '<option>...</option>'; 
						$sql = "SELECT * FROM codigosincidencias"; 
						$sql = mysql_query($sql); 
						while ($row = mysql_fetch_assoc($sql)) {
						$row['codname'] = htmlentities($row['codname']); 
							echo '<option value="'.$row[codname].'">'.$row[codname].'</option>'; 
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
							$sql = mysql_query($sql); 
						while ($row = mysql_fetch_assoc($sql)) {
							$row['nombrearea'] = htmlentities($row['nombrearea']); 
							echo '<option value="'.$row[nombrearea].'">'.$row[nombrearea].'</option>'; 
						} 
						echo '</select>'; 
						echo ' </td>'; 
						echo '</tr>'; 
						echo '<tr>'; 
						echo '<th><b>'.FECHA.':</b></td>'; 
						echo '<td><input style="width:15%" name="fecha" value=""></td>'; 
						echo '</tr>'; echo '<td></td>'; 
						echo '<td align=left><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>'; 
						echo '</tr>'; 
						echo '</table>'; 
						echo '</form>'; 
							} else {
							$proveedor_Post = $_POST['proveedor']; 
							$incidencia_Post = $_POST['incidencia']; 
							$codigoincidencia_Post = $_POST['codigoincidencia']; 
							$afectaa_Post = $_POST['afectaa']; 
							$fecha_Post = $_POST['fecha']; 
								sql = mysql_query("INSERT INTO incidenciasdeproveedor (proveedor, incidencia, codigoincidencia, afectaa, fecha) VALUES ('".$proveedor_Post."', '".$incidencia_Post."', '".$codigoincidencia_Post."', '".$afectaa_Post."', '".$fecha_Post."')"); if ($sql) echo "Incidencia anotada"; else echo "Error al añadir el registro!"; } }*/

if ($aktion == "change") {
	$sql = mysqli_query($mysqli,  "SELECT * FROM docmanager ORDER BY titulo DESC" );
	
	echo '<span class="documenttitle">' . DOCUMENTOS_LISTA . '</span>';
	echo '<table id="myTable" class="sortable">';
	
	echo '<thead>';
	echo '<tr><th>' . NOMBRE_DOCUMENTO . '</th><th>' . DOCUMENTO_AUTOR . '</th><th>' . FECHA . '</th></tr></thead><tbody>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		echo "<td><a href='?seccion=docmanager_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
		echo "<td><a href='?seccion=docmanager_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
		echo "<td><a href='?seccion=docmanager_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}
if ($aktion == "change_id") {
	if ((empty ( $_POST ['id_change'] )) and (empty ( $_POST ['titulo_change'] )) and (empty ( $_POST ['autor_change'] )) and (empty ( $_POST ['fecha_change'] )) and (empty ( $_POST ['contenido_change'] ))) {
		$id = $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM docmanager WHERE id = $_GET[id] " );
		$data = mysqli_fetch_row( $sql );

		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>' . DOCUMENTOS_DOCUMENTO . ':&nbsp;&nbsp;<span class="documenttitle">' . $data [1] . '</span></caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . NOMBRE_DOCUMENTO . ': </th>';
		echo '<td><input class="inputlargo" name="titulo_change" value="' . $data [1] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTO_AUTOR . ': </th>';
		echo '<td>';
		echo '<select name="autor_change">';
		echo '<option>' . $data [2] . '</option>';
		$sql = "SELECT DISTINCT auditor
                                    FROM auditores
                                    UNION
                                    SELECT DISTINCT INSPECTOR
                                    FROM inspectores";
		$sql = mysqli_query($mysqli,  $sql );
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			// $row['auditor'] = htmlentities($row['auditor']);
			// $row['inspector'] = htmlentities($row['inspector']);
			if (! defined ( 'auditor' )) {
				define ( 'AUDITOR', 'auditor' );
			}
			if (! defined ( 'inspector' )) {
				define ( 'INSPECTOR ', 'inspector' );
			}
			echo '<option value="' . $row [AUDITOR] . '">' . $row [AUDITOR] . '</option>';
			echo '<option value="' . $row [INSPECTOR] . '">' . $row [INSPECTOR] . '</option>';
		}
		echo '</select>';
		echo '&nbsp&nbsp';
		echo NCS_SELECCIONE_PARA_CAMBIAR;
		echo '</td>';

		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FECHA . ': </th>';
		echo '<td><input class="inputfecha" name="fecha_change" value="' . $data [3] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . CONTENIDO . ':</th>';
		echo '<td><textarea class="textareagrande" name="contenido_change">' . $data [4] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><input type="submit" value="' . MODIFICAR . '">';

		echo '</td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$sql = mysqli_query($mysqli,  "UPDATE docmanager
                SET titulo='$_POST[titulo_change]',
                autor='$_POST[autor_change]',
                fecha='$_POST[fecha_change]',
                contenido='$_POST[contenido_change]'
                WHERE id=$_GET[id]" );
		if ($sql) {

			$id = ( int ) $_GET ['id'];
			$sql2 = mysqli_query($mysqli,  "SELECT * FROM docmanager WHERE id = $id " );
			$data = mysqli_fetch_row( $sql2 );
			echo DOCUMENTO;
			echo '&nbsp;<span class="documenttitle">' . $data [1] . '</span>&nbsp;';
			echo ACTUALIZADO;
			echo '!';

			// echo DOCUMENTO_ACTUALIZADO;
		}
	}
		echo "<div align='center'>";	
		echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a></div>';
}
?>