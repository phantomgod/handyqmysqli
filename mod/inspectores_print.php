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
<html> 
<head>

</head> 
<body> 
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
    $sql = mysqli_query($mysqli, "SELECT * FROM inspectores ORDER BY inspector DESC"); 
    
         echo ADVERTICE;        
        echo '<table class="sortable">'; 
        echo ' <caption>'; 
            echo INSPECTORES_LISTA;         
        echo ' </caption>';
        echo "<tbody>"; 
            echo '<tr><th>Id</th><th>';
             echo INSPECCIONES_INSPECTOR;
             echo '</th><th>';
             echo IMAGEN;
             echo '</th><th>';
             echo ESTADO;
             echo '</th></tr>'; 
    while ($row = mysqli_fetch_row($sql)) { 
          echo "<tr>";   
              echo "<td>".$row['0']."</td>"; 
              echo "<td><a href='?seccion=inspectores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
              echo "<td><a href='?seccion=inspectores_print&amp;aktion=print_id&amp;id=".$row['0']."'><img src='".$row['2']."' border='0' width='80px' height='113px' ></a></td>"; 
              echo "<td><a href='?seccion=inspectores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
          echo "</tr>"; 
    } 
        echo "</tbody>";   
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['inspector'])) AND (empty($_POST['activo']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM inspectores WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql); 
     
        echo '<table class="print">'; 
        echo "<tbody>";       
               echo '<tr>';             
             echo '<th>ID</th>';
                echo "<td>".$data[0]."</td>"; 
            echo '</tr><tr>';             
             echo '<th>'; 
                echo INSPECCIONES_INSPECTOR; 
            echo '</th>';
                echo "<td><span class='documenttitle'>".$data[1]."</span></td>"; 
            echo '</tr><tr>';
            echo '<th>'; 
                echo IMAGEN; 
            echo '</th>';            
                echo '<td>'.$data[2].'</td>'; 
            echo '</tr>';
            echo '<tr>';
            echo '<th>'; 
                echo ESTADO; 
            echo '</th>';            
                echo '<td>'.$data[3].'</td>';
                echo '<td><img src='.$data[2].' border="0"></td>';                 
            echo '</tr>';
        echo "</tbody>";       
        echo '</table>'; 
    
           echo '<p id="para1">'; 
             echo "<button onclick='history.go(-1);'>";
                 echo VOLVER;
             echo "</button>";
             echo '&nbsp;&nbsp;&nbsp;<input type=button onClick=parent.location="?seccion=inspectores_admin2c&amp;aktion=change_id&amp;id='.$data[0].'" value="Editar">';        
           echo '</p>';
    } 
} 
?>
</body> 
</html>