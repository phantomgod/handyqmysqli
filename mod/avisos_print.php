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
    $sql = mysqli_query($mysqli, "SELECT * FROM avisos ORDER BY fecha DESC"); 
        echo '<span class="yellow">'.AVISOS_LISTAVISOS.'<br />'.AVISOS_THEAD_ADVERTICE.'</span>'; 
        echo '<table id="myTable" class="print">';        
			echo '<thead>';
				echo '<tr>'; 
					echo '<th>'.FECHA.'</th>'; 
					echo '<th>'.AVISOS_COMUNICADOPOR.'</th>'; 
					echo '<th>'.COMENTARIOS.'</th>';
				echo '</tr>';
			 echo '</thead>';
             echo '<tbody>';
    while ($row = mysqli_fetch_row($sql)) { 
                echo "<tr>";   
                echo "<td>".$row['1']."</td>"; 
                echo "<td><a href='?seccion=avisos_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
                echo "<td><a href='?seccion=avisos_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
                echo "</tr>"; 
    } 
          echo "</tbody>";  
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['fecha'])) AND (empty($_POST['comunicado_por'])) AND (empty($_POST['comentarios']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM avisos WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql);
		
		echo '<span class="yellow">'.AVISOS_DETALLES.'</span>';        
		echo '<table class="print">';         
          echo '<thead>'; 
              echo ":&nbsp;".$data['1'].""; 
          echo '</thead>'; 
          echo '<tbody>'; 
           echo '<tr>';           
            echo "<td>".$data['2']."</td>"; 
           echo '</tr>'; 
           echo '<tr>'; 
            echo "<td>".$data['3']."</td>"; 
           echo '</tr>'; 
         echo '</tbody>';     
        echo '</table>'; 
        
        echo '<p id="para1">'; 
         echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>';         
        echo '</p>'; 
    } 

} 
 
?>