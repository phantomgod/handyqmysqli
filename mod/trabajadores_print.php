<?php
/**
* Mod administrar INSPECTORES
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
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "print") { 
    $sql = mysqli_query($mysqli, "SELECT * FROM trabajadores ORDER BY trabajador DESC"); 
    
	
	
        echo ADVERTICE;
		echo '&emsp;&emsp;<span class="yellow">' . TRABAJADORES_LISTA . '</span>';
        echo '<table id="myTable" class="sortable">'; 
        echo "<thead>"; 
            echo '<tr><th>ID</th><th>';
             echo TRABAJADOR;
              echo '</th><th>';
             echo ACTIVIDAD;
             echo '</th><th>';
             echo IMAGEN;
             echo '</th><th>';
             echo ESTADO;
             echo '</th></tr>';
		echo "</thead>";
		echo "<tbody>";
    while ($row = mysqli_fetch_row($sql)) { 
          echo "<tr>";   
              echo "<td>".$row['0']."</td>"; 
              echo "<td><a href='?seccion=trabajadores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
              echo "<td><a href='?seccion=trabajadores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
              echo "<td><a href='?seccion=trabajadores_print&amp;aktion=print_id&amp;id=".$row['0']."'><img src='".$row['3']."' border='0' width='80px' height='113px' ></a></td>"; 
              echo "<td><a href='?seccion=trabajadores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['4']."</a></td>"; 
          echo "</tr>"; 
    } 
        echo "</tbody>";   
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['trabajador'])) AND (empty($_POST['activo'])) AND (empty($_POST['actividad'])) AND (empty($_POST['imgsrc']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM trabajadores WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql); 
     
        echo '<table class="print">'; 
        echo "<tbody>";       
            echo '<tr><th>ID</th>';
                echo "<td>".$data[0]."</td>"; 
            echo '</tr>';
            echo '<tr>';            
            echo '<th>'; 
                echo TRABAJADOR; 
            echo '</th>';
                echo "<td><span class='documenttitle'>".$data[1]."</span></td>"; 
            echo '</tr>'; 
            echo '<tr>';
            echo '<th>'; 
                echo ACTIVIDAD; 
            echo '</th>';            
                echo '<td>'.$data[2].'</td>'; 
            echo '</tr>';
            echo '<tr>';
            echo '<th>'; 
                echo IMAGEN; 
            echo '</th>';            
                echo '<td>'.$data[3].'</td>';
                echo '<td><img src='.$data[3].' border="0" style="width:100px"></td>';
            echo '</tr>';
            echo '<tr>';                
             echo '<th>'; 
                echo ESTADO; 
            echo '</th>';            
                echo '<td>'.$data[4].'</td>';             
            echo '</tr>';
        echo "</tbody>";       
        echo '</table>'; 
    
           echo '<p id="para1">'; 
             echo "<button class='btn btn-inverse' onclick='history.go(-1);'>";
                 echo VOLVER;
             echo "</button>";
             echo '&nbsp;&nbsp;&nbsp;<input class="btn btn-info" type=button onClick=parent.location="?seccion=trabajadores_admin2c&amp;aktion=change_id&amp;id='.$data[0].'" value="Editar">';        
           echo '</p>';
    } 
} 
?>