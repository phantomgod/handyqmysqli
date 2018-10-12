<?php
/**
* Mod LISTAR los proveedores
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

$sql = "SELECT * FROM proveedores ORDER BY proveedor";
$result = mysqli_query($mysqli, $sql);

       echo '<span class="yellow">';
          echo PROVEEDORES_LISTA;
      echo '</span>';




echo '<table id="myTable" class="sortable">';

       echo '<thead>';
		   echo '<tr>';
				echo '<th>'.PROVEEDORES_PROVEEDOR.':</th>';
				echo '<th>'.ESTADO.':</th>';
				/*echo '<th>'.PROVEEDORES_CIF.':</th>'; */
				echo '<th>'.FECHA.':</th>';
				echo '<th>'.PROVEEDORES_SUMINISTRO.':</th>';
				echo '<th>'.PROVEEDORES_CRITERIOS_EVALUACION.':</th>';
				echo '<th>'.PROVEEDORES_DATOS.':</th>';
				echo '<th>'.PROVEEDORES_ACTIVESTATUS.':</th>';
				echo '<th><a href="#" title="' . EDITAR . '"><i class="fa fa-edit" style="color:#5b862a;"></i></th> ';
			echo "</tr>";
		 echo '</thead>';
		 echo '<tbody>';

//Leemos y escribimos los registros de la página actual
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td style='width: 10%;'>$row[proveedor]</td>";
    echo "<td>$row[estado]</td>";
    /*echo "<td>$row[cif]</td>"; */
    echo "<td>$row[fecha]</td>";
    echo "<td style='width: 10%;'>$row[suministro]</td>";
    echo "<td>$row[criteriosdeevaluacion]</td>";
    echo "<td>$row[datos]</td>";
    echo "<td>$row[activo]</td>";
	 echo '<td><a href="?seccion=proveedores_admin&aktion=change_id&id='.$row['id'].'" target="_blank" title="'.EDITAR.' - '.$row['id'].'">
					<i class="fa fa-pencil" style="color:#5b862a;"></i>
				</a>
			</td>';
    echo "</tr>";
}
       echo '</tbody>';
     echo '</table>';
?>
