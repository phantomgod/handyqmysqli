<?php 
/** 
* Mod IMPRIMIR auditorías al sistema de calidad 
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
    $sql = mysql_query("SELECT * FROM informeauditoria ORDER BY id DESC");   
              echo AINFORMES_ADVERTICE; 
        echo '<table class="sortable">'; 
         echo ' <caption>'; 
                 echo AINFORMES_LISTA_PRINTSCREEN; 
         echo ' </caption>'; 
          echo "<tbody>"; 
            echo '<tr>'; 
             echo '<th>Id</th>'; 
             echo '<th>'; 
                 echo AINFORMES_INFORME; 
             echo '</th>'; 
             echo '<th>'; 
                 echo GENERAL_FECHA; 
             echo '</th>'; 
             echo '<th>'; 
                 echo AINFORMES_AREA_AUDITADA; 
             echo '</th>';
             
            echo "<th><img src=images/purple_edit.gif alt=".AINFORMES_EDITAR." title=".AINFORMES_EDITAR." /></th>";
            echo "<th><img src=images/purple_print.gif alt=".AINFORMES_IMPRIMIR." title=".AINFORMES_IMPRIMIR." /></th>";

             
             
            echo '</tr>'; 
        while ($row = mysql_fetch_row($sql)) { 
             echo "<tr>";     
                echo "<td>".$row['0']."</td>";  
                echo "<td>";  
                    echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>"; 
                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo GENERAL_FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>"; 
                    echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo GENERAL_DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[4]"; echo"</td><td colspan=2>"; echo "$row[5]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo GENERAL_RESULTADO; echo"</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[6]"; echo "</td><td colspan=2>"; echo "$row[7]"; echo"</td></tr>"; 
                    echo "</td></table>'>"; 
                                                             
                    echo "$row[1]</a>"; 
         

                echo "</td>";  
                echo "<td>".$row['2']."</td>"; 
                echo "<td>".$row['3']."</td>"; 
        
        ?>
        <td><a href="?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row['0'];?>"><img src="images/purple_edit.gif" alt="<?php echo AINFORMES_EDITAR; ?>" title="<?php echo AINFORMES_EDITAR; ?>" /></a></td>
        <td><a href="?seccion=auditorias_print&amp;aktion=change_id&amp;id=<?php echo $row['0'];?>"><img src="images/purple_print.gif" alt="<?php echo AINFORMES_IMPRIMIR; ?>" title="<?php echo AINFORMES_IMPRIMIR; ?>" /></a></td>
        <?php

        
             echo "</tr>"; 
        } 
        echo "</tbody>";   
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['ai'])) AND (empty($_POST['Fecha'])) AND (empty($_POST['AreaAuditada'])) AND (empty($_POST['Documentacion'])) AND (empty($_POST['Auditor'])) AND (empty($_POST['ObjetoAuditoria'])) AND (empty($_POST['Resultado']))) { 
        $id = $_GET['id']; 
        $sql = mysql_query("SELECT * FROM informeauditoria WHERE id = $_GET[id] "); 
        $data = mysql_fetch_row($sql); 
   
        echo '<table class="print">'; 
          echo ' <caption>'; 
            echo AINFORMES_PRINT_DETAILS; 
          echo ' </caption>'; 
           echo "<thead><a href='?seccion=auditorias_print&amp;aktion=print'>Volver</a>&nbsp;&nbsp;&nbsp;<a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$data[0]."'>editar</a></thead>"; 
         echo '<tbody>'; 
          echo '<tr>'; 
            echo '<th>'; 
                echo AINFORMES_INFORME; 
            echo '</th>'; 
               echo '<td>'.$data[1].'</td>'; 
          echo '</tr>'; 
          echo '<tr>'; 
            echo '<th>'; 
                echo GENERAL_FECHA; 
            echo '</th>'; 
                echo '<td>'.$data[2].'</td>'; 
          echo '</tr>'; 
          echo '<tr>'; 
            echo '<th>'; 
                 echo AINFORMES_AREA_AUDITADA; 
            echo '</th>'; 
                 echo '<td>'.$data[3].'</td>'; 
          echo '</tr>'; 
          echo '<tr>'; 
            echo '<th>'; 
              echo GENERAL_DOCUMENTACION; 
            echo '</th>'; 
                 echo '<td>'.$data[4].'</td>'; 
         echo '</tr>'; 
         echo '<tr>'; 
            echo '<th>'; 
              echo AUDITORIAS_AUDITOR; 
            echo '</th>'; 
              echo '<td>'.$data[5].'</td>'; 
         echo '</tr>'; 
         echo '<tr>'; 
           echo '<th>'; 
             echo AINFORMES_OBJETO; 
           echo '</th>'; 
              echo '<td>'.$data[6].'</td>'; 
         echo '</tr>'; 
         echo '<tr>'; 
            echo '<th>'; 
              echo GENERAL_RESULTADO; 
            echo '</th>'; 
               echo '<td>'.$data[7].'</td>'; 
         echo '</tr>'; 
         echo ' </tbody>';     
         echo '</table>'; 

         echo '<p id="para1">'; 
           echo "<button onclick='history.go(-1);'>";
           echo GENERAL_VOLVER;
         echo "</button>";         
        echo '</p>';          
    } 
} 
?>