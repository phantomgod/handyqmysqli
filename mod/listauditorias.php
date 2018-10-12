<?php
/**
* Mod lista informes de auditorías
* 
* PHP version 5
* 
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


$_pagi_sql = "SELECT * FROM informeauditoria ORDER BY id DESC"; 
 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 20; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
require "includes/paginator.inc.php"; 
 
//Incluimos la barra de navegación 
echo $_pagi_navegacion; 
echo "<p align=right>".$_pagi_info."</p>";
 
	echo '<span class="yellow">' . AINFORMES_LISTA_PRINTSCREEN . '</span>';
        echo '<table id="myTable" class="sortable">'; 
        echo '<thead>'; 
           echo '<tr>'; 
               echo '<th>' . ID . '</th>'; 
               echo '<th>' . AINFORMES_NUMERO . '</th>'; 
               echo '<th>' . FECHA . '</th>'; 
               echo '<th>' . AINFORMES_AREA_AUDITADA . '</th>'; 
               echo '<th>' . AUDITORIAS_AUDITOR . '</th>'; 
               echo '<th>' . RESULTADO . '</th>';
			   echo '<th><a href="#" alt="' . AINFORMES_EDITAR . '" title="' . AINFORMES_EDITAR . '">
						<i class="fa fa-edit" style="color:#ffeb3b;"></i></a>
					</th>';
			   echo '<th><a href="#" alt="' . AINFORMES_IMPRIMIR . '" title="' . AINFORMES_IMPRIMIR . '">
						<i class="fa fa-print" style="color:#ffeb3b;"></i></a>
					</th>';
           echo "</tr>";
		echo '</thead>'; 
		echo '<tbody>'; 
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($_pagi_result)) { 
            echo "<tr>"; 
                   echo "<td>$row[id]</td>";
                   echo "<td>$row[ai]</td>"; 
                   echo "<td>$row[Fecha]</td>"; 
                   echo "<td>$row[AreaAuditada]</td>"; 
                   echo "<td>$row[Auditor]</td>"; 
                   echo "<td>$row[Resultado]</td>"; 

        echo "<td width='5%'><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=$row[0]' 
								alt='" . AINFORMES_EDITAR . " - $row[1]' 
								title='" . AINFORMES_EDITAR . " - $row[1]'>
									<i class='fa fa-pencil' style='color:#ffeb3b;'></i>
							 </a>
			</td>
			<td width='5%'><a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=$row[0]' 
								alt='" . AINFORMES_IMPRIMIR . " - $row[1]' 
								title='" . AINFORMES_IMPRIMIR . " - $row[1]'>
									<i class='fa fa-print' style='color:#ffeb3b;'></i>
							 </a>
			</td>";

            echo "</tr>"; 
} 
       echo '</tbody>'; 
     echo '</table>';        
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>