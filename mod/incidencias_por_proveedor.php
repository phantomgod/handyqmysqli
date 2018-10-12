<?php

/**
* Mod GRAFICA de incidencias de proveedor
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
<?php echo PROVEEDORES_INCIDENCIAS_PORPROVEEDOR; ?>

<?php

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "print") {
	$sql = mysqli_query($mysqli,  "SELECT * FROM incidenciasdeproveedor" );
	echo '<span class="yellow">' . PROVEEDORES_THEAD_ADVERTICE . '</span>';
	echo '<table id="myTable" class="print">';
	echo '<thead>';
	echo '<tr><th>Id</th><th>' . PROVEEDORES_PROVEEDOR . '</th><th>' . FECHA . '</th>';
	echo '</tr></thead><tbody>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		echo "<td>" . $row ['0'] . "</td>";
	
		echo "<td>";
                    
			?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<?php echo $row['1'] ?>						
						<span>
						<br />												
						<a href="?seccion=incidencias_proveedor_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo INCIDENCIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#F44336;"></i></a>
						
						<a href="mod/javaformdelete_incidenciasproveedor.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo INCIDENCIA; echo "&nbsp;"; echo $row ['21']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#F44336;"></i></a>
																			
						<?php
						
							echo "<table class='print2'>
									<tbody>
										<tr>"; 
										echo "<th>" . ID . "</font></th><td>$row[0]</td>
										</tr>
										<tr>
												<th>" . PROVEEDORES_PROVEEDOR. "</font></th><td>$row[1]</td>
										</tr>
										<tr>
												<th>" . INCIDENCIA. "</font></th><td>$row[2]</td>
										</tr>
										<tr>
												<th>" . CODIGO. " " . INCIDENCIA. "</font></th><td>$row[3]</td>
										</tr>
										<tr>
												<th>" . NCS_AFECTAA. "</font></th><td>$row[4]</td>
										</tr>
										<tr>
												<th>" . FECHA. "</font></th><td>$row[5]</td>
										</tr>
									</tbody>
								</table>";  
						?>
						</span>
				</div>
			<?php              
			echo "</td>";
		
		echo "<td><a href='index.php?seccion=incidencias_por_proveedor&amp;aktion=print_id&amp;id=" . $row ['0'] . "'>" . $row ['5'] . "</a></td>";
		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}
if ($aktion == "print_id") {
	$_pagi_sql = "SELECT *
					FROM `incidenciasdeproveedor`
					WHERE `proveedor` LIKE '$_GET[id]'";

	// cantidad de resultados por página (opcional, por defecto 20)
	$_pagi_cuantos = 20;
	// Incluimos el script de paginación. éste ya ejecuta la consulta automáticamente
	include "includes/paginator.inc.php";

	echo PROVEEDORES_INCIDENCIAS_DELPROVEEDOR;
	echo '<table class="print">';
	echo '<caption>' . PROVEEDORES_INCIDENCIAS . '</caption>';
	echo '<tbody>';
	echo '<tr>';
	echo '<th>Id:</th>';
	echo '<th>' . PROVEEDORES_PROVEEDOR . ':</th>';
	echo '<th>' . PROVEEDORES_INCIDENCIA . ':</th>';
	echo '<th>' . CODIGO . ':</th>';
	echo '<th>' . NCS_AFECTAA . ':</th>';
	echo '<th>' . FECHA . ':</th>';
	echo '</tr>';
	echo "<a href='?seccion=incidencias_por_proveedor&amp;aktion=print'>";
	echo VOLVER;
	echo "</a>";

	// Leemos y escribimos los registros de la página actual
	while ( $row = mysqli_fetch_array( $_pagi_result ) ) {
		echo "<tr>";
		echo "<td>" . $row [0] . "</td>";
		echo "<td>" . $row [1] . "</td>";
		echo "<td>" . $row [2] . "</td>";
		echo "<td>" . $row [3] . "</td>";
		echo "<td>" . $row [4] . "</td>";
		echo "<td>" . $row [5] . "</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
}
// Incluimos la barra de navegación
//echo "<br>" . $_pagi_navegacion . "</br>";

?>
	<script>
	$(document).ready(function() {
		$('#myTable').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
	} );	
	</script>