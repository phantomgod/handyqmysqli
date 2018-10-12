<?php

/** 
* Mod IMPRIMIR modificaciones a documentos
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
    $sql = mysqli_query($mysqli, "SELECT * FROM modifdoc ORDER BY titulo ASC"); 
       
        echo '<table class="sortable">'; 
        echo "<caption>".MODIFDOC_PRINT."</caption>";
        echo "<tbody>"; 
        echo '<tr><th>Id</th><th>'; 
        echo NOMBRE_DOCUMENTO; 
        echo '</th>'; 
        echo '<th>'; 
        echo DOCUMENTOS_NUMEROREVISION; 
        echo '</th></tr>'; 
    while ($row = mysqli_fetch_row($sql)) { 
        echo "<tr>";   
        echo "<td>".$row['0']."</td>"; 
        echo "<td>";
        
        echo "<a href=?seccion=modifdoc_print&amp;aktion=print_id&amp;id=".$row['0']." alt=Image Tooltip rel=tooltip content='<table class=print><tr>"; 
        echo "<th>"; echo NOMBRE_DOCUMENTO; echo "</th><th>"; echo DOCUMENTOS_NUMEROREVISION; echo "</th><th>"; echo DOCUMENTOS_MODIFICACION; echo"</th><th></th></tr>"; 
        echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>"; 
        echo "<tr><th colspan=2>"; echo DOCUMENTOS_CAPAPART; echo "</th><th colspan=2>"; echo DOCUMENTOS_FECHAMODIFICACION; echo "</th></tr>"; 
        echo "<tr><td colspan=2>"; echo "$row[4]"; echo"</td><td colspan=2>"; echo "$row[5]"; echo "</td></tr>"; 
        echo "</table>'>"; 
                            //}                                                     
        echo "$row[1]"; 
        echo "</a>";  
         
        //<a href='?seccion=modifdoc_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a>         
         
        echo "</td>"; 
        echo "<td><a href='?seccion=modifdoc_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
        echo "</tr>"; 
    } 
        echo "</tbody>";   
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['titulo'])) AND (empty($_POST['revision_num']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM modifdoc WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql); 
 
        echo '<table class="sortable">'; 
        echo '<caption>Corresponde a la rev. nº &nbsp;'; 
            echo "<span class='documenttitle'>".$data[2]."</span>"; 
            echo '&nbsp;del documento: &nbsp;'; 
            echo "<span class='documenttitle'>".$data[1]."</span>"; 
        echo "<tbody>";       
         echo '<tr>'; 
         echo '<th>'.NOMBRE_DOCUMENTO.':</th>'; 
            echo "<td>".$data[1]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_NUMEROREVISION.':</th>'; 
            echo "<td>".$data[2]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_MODIFICACION.':</th>'; 
            echo "<td>".$data[3]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_CAPAPART.':</th>'; 
            echo "<td>".$data[4]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_FECHAMODIFICACION.':</th>'; 
            echo "<td>".$data[5]."</td>"; 
        echo '</tr>'; 
        echo "</tbody>";       
        echo '</table>'; 
        echo '<br>';         
                        echo "<button onclick='history.go(-1);'>";
                            echo VOLVER;
                        echo "</button>";
    } 
} 
?>