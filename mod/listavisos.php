<?php 
/** 
* Mod LISTAR los avisos
*  
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 

$sql = "SELECT * FROM avisos ORDER BY fecha DESC"; 
$result = mysqli_query($mysqli, $sql);

echo '<span class="documenttitle">'.AVISOS_LISTAVISOS.'</span>';  
echo '<table id="myTable" class="sortable">'; 
       echo '<thead>'; 
        echo '<tr>'; 
           echo '<th style width=10%>ID:</th>';
		   echo '<th style width=10%>' . FECHA . '</th>'; 
           echo '<th style width=20%>' . AVISOS_COMUNICADOPOR . '</th>'; 
           echo '<th style width=70%>' . COMENTARIOS . '</th>';
		   echo '<th><a href="#" title="' . EDITAR . '"><i class="fa fa-edit" style="color:White;"></i></th>'; 
         echo "</tr>"; 
		 echo "</thead>";
		 echo "<tbody>";
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($result)) { 
    echo "<tr>";
	echo "<td style width=10%>$row[id]</td>";
    echo "<td style width=10%>$row[fecha]</td>"; 
    echo "<td style width=20%>$row[comunicado_por]</td>"; 
    echo "<td style width=70%>$row[comentarios]</td>";
	echo '<td>
			<a href="?seccion=avisos_admin&amp;aktion=change_id&amp;id='.$row['id'].'" title="'.EDITAR.' - '.$row['id'].'">
					<i class="fa fa-pencil" style="color:White;"></i>
			</a>
		  </td>'; 
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