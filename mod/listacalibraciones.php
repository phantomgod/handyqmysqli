<?php
/**
* Mod LISTA de calibraciones
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


$sql = "SELECT *
FROM equiposdemedida
JOIN calibraciones
ON equiposdemedida.equipo = calibraciones.equipo
ORDER BY calibraciones.id ASC";

$result = mysqli_query($mysqli, $sql);

//cantidad de resultados por página (opcional, por defecto 20)
//$_pagi_cuantos = 20;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
//require "includes/paginator.inc.php";
//echo "<p align=right>".$_pagi_info."</p>";

//Incluimos la barra de navegación
//echo "$_pagi_navegacion";


   ?>
   <div class="buttons">
    <a href="?seccion=listacalibraciones_select">
    <i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp; Selección por equipo
    </a>
    </div>

   <?php

echo '<br /><br />';

echo '&emsp;&emsp;<span class="yellow">' . CALIBRACIONES_LISTA . '</span>';
echo '<table id="myTable" class="sortable">';
       echo '<thead>';
		   echo '<tr>';
				echo '<th style="text-center; width:5%">Calibrac ID</th>';
				echo '<th>' . EQUIPOS_EQUIPO . '</th>';
				echo '<th>' . ULTIMA_CALIBRACION . '</th>';
				echo '<th>' . PROXIMA_CALIBRACION . '</th>';
				echo '<th>' . ESTADO . '</th>';
				echo '<th><a href="#" alt="' . CALIBRACIONES_EDITAR . '" title="' . CALIBRACIONES_EDITAR . '"><i class="fa fa-edit" style="color:LightCoral;"></i></th>';
		   echo "</tr>";
		 echo '</thead>';
		 echo '<tbody>';
//Leemos y escribimos los registros de la página actual
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
        echo "<td>$row[8]</td>";

    echo "<td>";
		   ?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=calibraciones_print&amp;aktion=print_id&amp;id=<?php echo $row['8'] ?>"><?php echo $row['9'] ?></a>

						<span>
						<br />
						<a href="?seccion=calibraciones_admin&aktion=change_id&id=<?php echo $row ['8']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['9']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#ffffff;"></i></a>

						<a href="mod/javaformdelete_calibraciones.php?var=<?php echo $row ['8']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['9']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#ffffff;"></i></a>


						<a href="?seccion=calibraciones_print&amp;aktion=print_id&id=<?php echo $row ['8']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['9']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#ffffff;"></i></a>

						<?php

							 echo "<table class=print>
								<tr>
								<th>" . EQUIPOS_EQUIPO . "</th>
								<th>" . ACCION . "</th>
								</tr><tr>
								<td>$row[9]</td>
								<td>$row[10]</td>
								</tr><tr>
								<th>" . ULTIMA_CALIBRACION . "</th>
								<th>" . PROXIMA_CALIBRACION . "</th>
								</tr><tr>
								<td>$row[13]</td>
								<td>$row[17]</td>
								</tr><tr>
								<th>" . ESTADO . "</th>
								<th>" . OBSERVACIONES . "</th>
								</tr><tr>
								<td>$row[16]</td>
								<td>" . strip_tags($row['18'], '<table>,<tr>,<th>,<td>,<br>,<font>,<p>') . "</td>
								</tr>
								</table>";
						?>
						</span>
				</div>
			<?php

    echo "</td>";
    echo "<td>$row[fecha]</td>";
    echo "<td>$row[proxima]</td>";
    echo "<td>$row[estado]</td>";
    echo "<td><a href='?seccion=calibraciones_admin&amp;aktion=change_id&amp;id=".$row['8']."'  title='" . CALIBRACIONES_EDITAR . " - " . $row[13] . "'>
				<i class='fa fa-pencil' style='color:LightCoral;'></i></a></td>";
    echo "</tr>";
}
       echo '</tbody>';
     echo '</table>';
?>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<script>
	$(document).ready(function() {
		$('#myTable').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
	} );
	</script>
