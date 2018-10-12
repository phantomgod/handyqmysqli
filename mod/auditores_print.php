<?php
/**
* Mod administrar auditores
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
    $sql = mysqli_query($mysqli, "SELECT * FROM auditores ORDER BY auditor DESC"); 
              echo AUDITOR_ADVERTICE;    
        echo '<table class="sortable">'; 
           echo '<caption>'; 
              echo AUDITORIAS_VER_AUDITOR; 
           echo '</caption>'; 
         echo '<tbody>';         
           echo '<tr>'; 
             echo '<th>Id</th>'; 
             echo '<th>'; 
               echo AUDITORIAS_AUDITOR; 
             echo '</th>'; 
             echo '<th>'; 
               echo IMAGEN; 
             echo '</th>'; 
             echo '<th>'; 
               echo ESTADO; 
             echo '</th>'; 
             
            ?>
                <th><a href="#" title="<?php echo AUDITORES_EDITAR_AUDITOR; ?>"><i class="fa fa-edit fa-2x" style="color:Fuchsia;"></i>
				</th>
                <th><a href="#" title="<?php echo IMPRIMIR_AUDITOR; ?>"><i class="fa fa-print fa-2x" style="color:Fuchsia;"></i>
				</th>
            <?php
             
          echo '</tr>'; 
    while ($row = mysqli_fetch_row($sql)) { 
          echo "<tr>";   
              echo "<td>".$row['0']."</td>"; 
              echo "<td><a href='?seccion=auditores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
              echo "<td><a href='?seccion=auditores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'><img src='".$row['2']."' border='0' width='80px' height='113px' ></a></td>"; 
              echo "<td><a href='?seccion=auditores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";

                ?>
                <td><a href="?seccion=auditores_admin2c&amp;aktion=change_id&amp;id=<?php echo $row['0'];?>" title="<?php echo AUDITORES_EDITAR_AUDITOR; ?> - <?php echo $row['1']; ?>"><i class="fa fa-edit fa-2x" style="color:Fuchsia;"></i></a></td>
                <td><a href="?seccion=auditores_print&amp;aktion=print_id&amp;id=<?php echo $row['0'];?>" title="<?php echo IMPRIMIR_AUDITOR; ?>  - <?php echo $row['1']; ?>"><i class="fa fa-print fa-2x" style="color:Fuchsia;"></i></a></td>
                <?php
              
          echo "</tr>"; 
    } 
    echo "</tbody>";  
    echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['auditor'])) AND (empty($_POST['activo']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM auditores WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql);

  
        echo '<table class="print">'; 
          echo '<caption>'; 
             echo AUDITORIAS_VER_AUDITOR;
             echo "<span class='documenttitle'>:&nbsp;".$data[1]."</span>"; 
          echo '</caption>'; 
          echo '<tbody>'; 
          echo '<tr>';
              echo '<th>ID</th>';
             echo "<td>".$data[0]."</td>"; 
          echo '</tr>';  
          echo '<tr>';
              echo '<th>'; 
                echo AUDITORIAS_AUDITOR; 
              echo '</th>';      
                  echo "<td>".$data[1]."</td>"; 
          echo '</tr>'; 
          echo '<tr>';
              echo '<th>'; 
                echo IMAGEN; 
              echo '</th>';          
             echo "<td><img src='".$data[2]."'></td>"; 
          echo '</tr>'; 
          echo '<tr>';
              echo '<th>'; 
                echo ACTIVO; 
              echo '</th>';          
             echo "<td>".$data[3]."</td>"; 
          echo '</tr>'; 
        echo '</tbody>';     
        echo '</table>'; 
        
           echo '<p id="para1">'; 
             echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>';
             echo '&nbsp;&nbsp;&nbsp;<input type=button onClick=parent.location="?seccion=auditores_admin2c&amp;aktion=change_id&amp;id='.$data[0].'" value="Editar">';        
           echo '</p>';
    } 
} 
?>