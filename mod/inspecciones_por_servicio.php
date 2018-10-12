<?php 

/** 
* Mod MOSTRAR las inspecciones realizadas 
* a cada servicio
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
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "print") { 
    $sql = mysqli_query($mysqli, "SELECT * FROM servicios WHERE activo=1 ORDER BY id"); 
	
	echo '&emsp;&emsp;<span class="yellow">' . SERVICIO_SERVICIOS_ACTIVOS . '</span>';
       echo '<table id="myTable" class="sortable">'; 
          echo "<thead>"; 
          echo '<tr><th>Id</th><th>'.SERVICIO_SERVICIO.'</th><th>'.ESTADO.'</th>';
		  echo "</tr>";
		  echo "</thead>"; 
          echo "<tbody>";
		  /*Esta línea de abajo va junto al echo de arriba. Es el encabezado de la tabla, que no quiero que se muestre 
          <td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td>++<td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td></tr>';*/ 
		  
		  
    while ($row = mysqli_fetch_row($sql)) { 
            echo "<tr>";   
            echo "<td>".$row['0']."</td>"; 
            echo "<td><a href='?seccion=inspecciones_por_servicio&amp;aktion=print_id&amp;id=".$row['1']."'>".$row['1']."</a></td>"; 
            echo "<td><a href='inspecciones_por_servicio.php?aktion=print_id&amp;id=".$row['1']."'>".$row['2']."</a></td>"; 
            echo "</tr>"; 
    } 
          echo "</tbody>"; 
      echo "</table>"; 
} 
if ($aktion == "print_id") { 
 
     
    $sql = "SELECT *  
                  FROM `inspecciones`  
                  WHERE `servicio` LIKE '$_GET[id]' 
                  "; 
	$result = mysqli_query($mysqli, $sql);


			echo '&emsp;&emsp;<span class="yellow">' . DETALLES . '</span>&emsp;&emsp;';
	        echo "<a href='?seccion=inspecciones_por_servicio&amp;aktion=print'>"; 
            echo VOLVER; 
            echo "</a>"; 
	
    echo '<table id="myTable" class="sortable">'; 
    echo '<thead>'; 
        echo '<tr>'; 
            echo '<th><b>Id:</b></th>'; 
            echo '<th><b>Inspector</b></th>'; 
            echo '<th><b>' . FECHA . '</b></th>'; 
            echo '<th><b>' . SERVICIO_SERVICIO . '</b></th>'; 
            echo '<th><b>' . HORA . '</b></th>'; 
            echo '<th><b>'.TRABAJADOR.'</b></th>'; 
            echo '<th><b>'.INCIDENCIA.'</b></th>'; 
            echo '<th><b>'.CODIGO.'</b></th>'; 
            
        echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
    //Leemos y escribimos los registros de la página actual 
    while ($row = mysqli_fetch_array($result)) { 
            echo "<tr>"; 
                echo "<td>".$row[0]."</td>"; 
                echo "<td>".$row[1]."</td>"; 
                echo "<td>".$row[2]."</td>"; 
                echo "<td>".$row[3]."</td>"; 
                echo "<td>".$row[4]."</td>"; 
                echo "<td>".$row[5]."</td>"; 
                echo "<td>".$row[6]."</td>"; 
                echo "<td>".$row[7]."</td>"; 
            echo "</tr>"; 
    } 
        echo "</tbody>"; 
        echo "</table>"; 
} 

?>