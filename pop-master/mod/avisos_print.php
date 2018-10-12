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
    $sql = mysql_query("SELECT * FROM avisos ORDER BY fecha DESC"); 
       
        echo '<table class="print">'; 
         echo '<caption>'.AVISOS_LISTAVISOS.'</caption>'; 
          echo '<thead>'.AVISOS_THEAD_ADVERTICE.'</thead>'; 
           echo '<tbody>';         
            echo '<tr>'; 
             echo '<th>'.GENERAL_FECHA.'</th>'; 
             echo '<th>'.AVISOS_COMUNICADOPOR.'</th>'; 
             //echo '<th>'.GENERAL_COMENTARIOS.'</th>'; 
            echo '</tr>'; 
    while ($row = mysql_fetch_row($sql)) { 
                echo "<tr>";   
                //echo "<td>".$row['0']."</td>"; 
                echo "<td><a href='?seccion=avisos_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
                echo "<td><a href='?seccion=avisos_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
                //echo "<td><a href='?seccion=avisos_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
                echo "</tr>"; 
    } 
          echo "</tbody>";  
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['fecha'])) AND (empty($_POST['comunicado_por'])) AND (empty($_POST['comentarios']))) { 
        $id = $_GET['id']; 
        $sql = mysql_query("SELECT * FROM avisos WHERE id = $_GET[id] "); 
        $data = mysql_fetch_row($sql); 
   
        echo '<table class="print">'; 
         echo '<caption>'.AVISOS_DETALLES.'</caption>'; 
          echo '<thead>'; 
              echo AVISOS_DETALLES; 
              echo ":&nbsp;".$data[2].""; 
          echo '</thead>'; 
          echo '<tbody>'; 
           echo '<tr>';           
            echo "<td>".$data[2]."</td>"; 
           echo '</tr>'; 
           echo '<tr>'; 
            echo "<td>".$data[3]."</td>"; 
           echo '</tr>'; 
         echo '</tbody>';     
        echo '</table>'; 
        
        echo '<p id="para1">'; 
         echo "<button onclick='history.go(-1);'>";
           echo GENERAL_VOLVER;
         echo "</button>";         
        echo '</p>'; 
    } 

} 
 
?>