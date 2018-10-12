<?php 
/** 
* Mod LISTA de equipos de medida
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
//$_pagi_sql = "SELECT * FROM equiposdemedida ORDER BY equipo";

$sql = "SELECT * FROM equiposdemedida ORDER BY equipo";

$result = mysqli_query($mysqli, $sql);

//cantidad de resultados por página (opcional, por defecto 20) 
//$_pagi_cuantos = 10; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
//require "includes/paginator.inc.php"; 
 
//Incluimos la barra de navegación 
//echo "$_pagi_navegacion"; 
//echo "<p align=right>".$_pagi_info."</p>"; 
 
		echo '&emsp;&emsp;<span class="yellow">' . EQUIPOS_LISTA . '</span>';
        echo '<table id="myTable" class="sortable">'; 
        echo '<thead>';               
            echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>'.EQUIPOS_EQUIPO.'</th>'; 
                echo '<th>'.EQUIPOS_FRECUENCALIB.'</th>'; 
                echo '<th>'.EQUIPOS_UBICACION.'</th>';
				echo '<th>'.DESCRIPCION.'</th>';
                echo '<th><i class="fa fa-edit" style="color:#FFC107;"></i></th>';
                echo '<th><i class="fa fa-print" style="color:#FFC107;"></i></th>';
            echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
			
 
    //Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($result)) { 
            echo "<tr>"; 
                echo "<td>$row[id]</td>";
                echo "<td>$row[equipo]</td>"; 
                echo "<td>$row[frecuencalib]</td>"; 
                echo "<td>$row[ubicacion]</td>";
				echo "<td>$row[descripcion]</td>";
                echo "<td><a href='?seccion=equipos_admin&amp;aktion=change_id&amp;id=".$row['0']."' alt='editar: ".$row['1']."' title='editar: ".$row['1']."'><i class='fa fa-pencil' style='color:#FFC107;'></i></a></td>"; 
                echo "<td><a href='?seccion=equipos_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='editar: ".$row['1']."' title='imprimir: ".$row['1']."'><i class='fa fa-print' style='color:#FFC107;'></i></a></td>"; 
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