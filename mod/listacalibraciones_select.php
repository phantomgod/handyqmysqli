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

     $equipo ="";
if (isset($_POST['seleccione'])) {     
     $equipo = $_POST['seleccione'];
} 


 
$_pagi_sql = "SELECT * FROM calibraciones WHERE equipo =  '$equipo'"; 
 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 10; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
require "includes/paginator.inc.php"; 
echo "<p align=right>".$_pagi_info."</p>"; 
 
//Incluimos la barra de navegación 
echo "$_pagi_navegacion"; 


echo '<form action="?seccion=listacalibraciones_select" method="POST">';

            echo '<select name="seleccione">'; 
                echo '<option>'.SELECCIONAR_EQUIPO.'</option>';         
                 $sql1 = "SELECT equipo, modelo FROM  `equiposdemedida` ORDER BY equiposdemedida.equipo ASC "; 
                 $sql1 = mysqli_query($mysqli, $sql1); 
                 
        while ($row1 = mysqli_fetch_assoc($sql1)) {         
                echo '<option value="'.$row1['equipo'].'">'.$row1['equipo'].' - '.$row1['modelo'].'</option>';

}
            echo '</select></td>';
 
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<button type="submit" class="btn btn-info">' . CONSULTAR . '</button>'; 
echo '</form>'; 

echo '<br />';

echo '&emsp;&emsp;<span class="yellow">' . CALIBRACIONES_LISTA . '</span>';
echo '<table id="myTable" class="sortable">'; 
       echo '<thead>';           
		   echo '<tr>'; 
				echo '<th>ID</th>';
				echo '<th>'.EQUIPOS_EQUIPO.'</th>'; 
				echo '<th>'.ACCION.'</th>'; 
				echo '<th>'.FECHA.'</th>'; 
				echo '<th>'.ESTADO.'</th>'; 
				echo '<th><i class="fa fa-pencil " style="color:LightCoral;"></i></th>';
		   echo "</tr>";
	   echo '</thead>';  
	   echo '<tbody>';  
 
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($_pagi_result)) { 
    echo "<tr>"; 
        echo "<td>$row[id]</td>";
    echo "<td>";
		   ?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=calibraciones_print&amp;aktion=print_id&amp;id=<?php echo $row['8'] ?>"><?php echo $row['9'] ?></a>
						
						<span>
						<br />
						<a href="?seccion=calibraciones_admin&aktion=change_id&id=<?php echo $row ['8']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil " style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
						
						<a href="mod/javaformdelete_calibraciones.php?var=<?php echo $row ['8']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o " style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>
						
					
						<a href="?seccion=calibraciones_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print " style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
						
						<?php
						
							 echo "<table class=print>
								<tr>
								<th>" . EQUIPOS_EQUIPO . "</th>
								<th>" . ACCION . "</th>
								</tr><tr>
								<td><font class='spanred'>$row[1]</font></td>
								<td><font class='spanred'>$row[2]</font></td>
								</tr><tr>                    
								<th>" . ULTIMA_CALIBRACION . "</th>
								<th>" . PROXIMA_CALIBRACION . "</th>
								</tr><tr>
								<td><font class='spanred'>$row[5]</font></td>
								<td><font class='spanred'>$row[9]</font></td>
								</tr><tr>
								<th>" . ESTADO . "</th>
								<th>" . OBSERVACIONES . "</th>
								</tr><tr>
								<td><font class='spanred'>$row[8]</font></td>
								<td><font class='spanred'>" . strip_tags($row['10'], '<table>,<tr>,<th>,<td>,<br>,<font>,<p>') . "</font></td>
								</tr>                   
								</table>";
						?>
						</span>
				</div>
			<?php
  
    echo "</td>"; 
    echo "<td>$row[accion]</td>"; 
    echo "<td>$row[fecha]</td>"; 
    echo "<td>$row[estado]</td>";
    echo "<td><a href='?seccion=calibraciones_admin&amp;aktion=change_id&amp;id=".$row['8']."' title='" . CALIBRACIONES_EDITAR . " - " . $row[0] . "'>
			<i class='fa fa-pencil ' style='color:LightCoral;'></i></a></td>";      
    echo "</tr>"; 
} 
       echo '</tbody>'; 
     echo '</table>';        
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />