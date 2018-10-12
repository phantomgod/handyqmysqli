<?php 
/** 
* Mod IMPRIMIR avisos 
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

    $sql = mysqli_query($mysqli, "SELECT * FROM objetivosseguimiento"); 
       
        echo '<table id="myTable" class="print">';
		echo '<thead>';
			echo '<tr>'; 
				echo '<th>'.CODIGO.'</th>'; 
				echo '<th>'.ACCION.'</th>';					  
				echo '<th>'.RESPONSABLE.'</th>'; 
				echo '<th>'.LIMITE.'</th>'; 
				echo '<th>'.TERMINACION.'</th>';
				echo '<th>'.OBSERVACIONES.'</th>';
			echo '</tr>'; 
		echo '</thead>';
		 echo '<tbody>'; 	
    while ($row = mysqli_fetch_row($sql)) { 
                echo "<tr>";   
                echo "<td>".$row['1']."</td>"; 
                echo "<td><a href='?seccion=tareas_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
                echo "<td><a href='?seccion=tareas_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
                echo "<td><a href='?seccion=tareas_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
				echo "<td><a href='?seccion=tareas_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['5']."</a></td>";
				echo "<td><a href='?seccion=tareas_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['6']."</a></td>";
				
                echo "</tr>"; 
    } 
          echo "</tbody>";  
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['	codigoobjetivo'])) AND (empty($_POST['accion'])) AND (empty($_POST['responsable'])) AND (empty($_POST['fechalimite'])) AND (empty($_POST['fechaterminacion'])) AND (empty($_POST['observaciones']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM objetivosseguimiento WHERE Id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql); 
		
		echo "<span class='yellow'>" . TAREA . ":&nbsp;" . $data['1'] . ""; 
        echo '</span><br />'; 
        echo '<table class="print">'; 
          echo '<thead>'; 
          echo '</thead>'; 
          echo '<tbody>'; 
           echo '<tr>';
			echo '<th>'.ACCION.'</th>';			   
				echo "<td>".$data[2]."</td>"; 
           echo '</tr>';
			echo '<tr>';
			echo '<th>'.RESPONSABLE.'</th>';
				echo "<td>".$data[3]."</td>"; 
           echo '</tr>';
		   echo '<tr>'; 
			echo '<th>'.LIMITE.'</th>';
				echo "<td>".$data[4]."</td>"; 
           echo '</tr>';
		   echo '<tr>';
			echo '<th>'.TERMINACION.'</th>';
				echo "<td>".$data[5]."</td>"; 
           echo '</tr>';
		   echo '<tr>';
			echo '<th>'.OBSERVACIONES.'</th>';
				echo "<td>".$data[6]."</td>"; 
           echo '</tr>'; 
         echo '</tbody>';     
        echo '</table>'; 
        
        echo '<p id="para1">'; 
         echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>';         
        echo '</p>'; 
    } 

} 
 
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>