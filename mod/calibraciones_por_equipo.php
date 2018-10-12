<?php

/**
* Mod CALIBRACIONES por equipo
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "print") {
	// $sql = mysql_query("SELECT * FROM enlaces ORDER BY titulo");

	$sql = mysqli_query($mysqli,  "SELECT *
																	FROM calibraciones
																	ORDER BY  `fecha` DESC" );

	echo '&emsp;&emsp;<span class="yellow">' . EQUIPOS_LISTA . '</span>';
	echo '&emsp;&emsp;<span class="yellow">' . EQUIPOS_THEAD_ADVERTICE . '</span>';
	echo '<table id="myTable" class="print">';
	echo '<thead>';
	echo '<tr><th>' . EQUIPOS_EQUIPO . '</th><th>' . ACCION . '</th><th>' . FECHA . '</th><th>' . PROXIMA . '</th>';
	echo '</thead>';
	echo '<tbody>';

	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		echo "<td><a href='?seccion=calibraciones_por_equipo&aktion=print_id&id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
		echo "<td><a href='?seccion=calibraciones_por_equipo&aktion=print_id&id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
		echo "<td><a href='?seccion=calibraciones_por_equipo&aktion=print_id&id=" . $row ['0'] . "'>" . $row ['5'] . "</a></td>";
		echo "<td><a href='?seccion=calibraciones_por_equipo&aktion=print_id&id=" . $row ['0'] . "'>" . $row ['9'] . "</a></td>";
		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}

if ($aktion == "print_id") {

	$sql = mysqli_query($mysqli,  "SELECT  equiposdemedida.id id1, equiposdemedida.equipo, calibraciones.*
																	FROM equiposdemedida,  calibraciones
																	WHERE equiposdemedida.equipo=calibraciones.equipo
																	AND calibraciones.id LIKE '$_GET[id]'" );

	//$data = mysqli_fetch_row( $sql );

	// cantidad de resultados por página (opcional, por defecto 20)
	//$_pagi_cuantos = 10;
	// Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
	//include "includes/paginator.inc.php";
	echo '<table class="print">';
	echo '<caption>xxxxxxxxxxxx</caption>';
	echo '<thead>' . EQUIPOS_LISTA . '</thead>';
	echo '<tbody>';
	echo '<tr>';
	 echo '<th>Id:</th>';
	echo '<th>' . EQUIPOS_EQUIPO . ':</th>';
	echo '<th>' . RESULTADO . ':</th>';
	echo '<th>' . FECHA . ':</th>';
	echo '<th>Frecuencia:</th>';
	echo '<th>' . EQUIPOS_UBICACION . ':</th>';
	echo '<th>'.OBSERVACIONES.':</th>';
	echo '</tr>';
	echo "<a href='?seccion=calibraciones_por_equipo&amp;aktion=print'>";
	echo VOLVER;
	echo "</a>";

	// Leemos y escribimos los registros de la página actual
	while ( $row = mysqli_fetch_array( $sql ) ) {
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>" . $row [1] . "</td>";
		echo "<td>" . $row [8] . "</td>";
		echo "<td>" . $row [3] . "</td>";
		echo "<td>" . $row [4] . "</td>";
		echo "<td>" . $row [6] . "</td>";
		echo "<td>" . $row [12] . "</td>";
		echo "</tr>";
	}
		echo "</table>";
// Incluimos la barra de navegación
//echo "<br>" . $_pagi_navegacion . "</br>";
}
echo("Error description: " . mysqli_error($mysqli));
