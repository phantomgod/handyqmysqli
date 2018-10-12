<?php
/** 
* Mod LISTA DE INSPECCIONES
* de proveedor
* 
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 

//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM inspecciones ) i');

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº inspecciones: ';
	echo $row['0'];
	echo '</div>';
}

if($result === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº inspecciones: ';
	echo $row['0'];
	echo '</div>';
}

//--------------------------fin contar registros
?> 

<?php 
	$sql = "SELECT 	inspecciones.Id, inspecciones.inspector, inspecciones.fecha, inspecciones.servicio, inspecciones.hora, inspecciones.vigilante, inspecciones.incidencia, inspecciones.codigo_incidencia, servicios.tiposervicio
					FROM inspecciones
					LEFT JOIN servicios
					ON inspecciones.servicio=servicios.servicio
					ORDER BY inspecciones.Id DESC"; 
	$result = mysqli_query($mysqli, $sql);
	

 echo '&emsp;&emsp;<span class="yellow">' . INSPECCIONES_LISTA . '</span>';
 
 echo '<table id="myTable" class="sortable">'; 
  
       echo '<thead>'; 
        echo '<tr>'; 
        echo '<th>' . ID . '</th>';
		echo '<th>' . INSPECCIONES_INSPECTOR . '</th>'; 
        echo '<th>' . FECHA . '</th>';  
        echo '<th>' . SERVICIO_SERVICIO . '</th>'; 
		echo '<th>' . TIPO . '</th>';
        echo '<th>' . SERVICIO_TRABAJADOR . '</th>'; 
        echo '<th>' . INCIDENCIA . '</th>'; 
        echo '<th>' . CODIGO . '</th>'; 
        echo '</tr>'; 
         echo '</thead>'; 
         echo '<tbody>'; 
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($result)) { 
    echo "<tr>"; 
    echo "<td>$row[Id]</td>";
	echo "<td>$row[inspector]</td>"; 
    echo "<td>$row[fecha]</td>"; 
    echo "<td>$row[servicio]</td>"; 
	echo "<td>$row[tiposervicio]</td>";
     echo "<td>$row[vigilante]</td>"; 
    echo "<td>$row[incidencia]</td>"; 
    echo "<td>$row[codigo_incidencia]</td>"; 
    echo '</tr>'; 
     
} 
    echo '</tbody>'; 
    echo '</table>'; 
?>