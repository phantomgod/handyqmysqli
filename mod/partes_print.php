<?php 
/** 
* Mod ADMINISTRAR partes de trabajo 
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
    $sql = mysqli_query($mysqli, "SELECT * FROM partedetrabajo ORDER BY fecha DESC"); 
 
        echo PARTES_THEAD_ADVERTICE; 
        echo '<table class="sortable">'; 
        echo '<caption>'; 
            echo PARTES_PRINT; 
        echo '</caption>';    
        echo '<tbody>';        
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>'.FECHA.'</th>';
            echo '<th>'.CENTRO.'</th>';
            echo '<th>'.EMPLEADO.'</th>';
        /*<th>Hora</td>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>
            <th>Hora</th>
            <th>Incidencia</th>*/
            echo '</tr>'; 
    while ($row = mysqli_fetch_row($sql)) { 
            echo "<tr>"; 
                echo "<td>".$row['0']."</td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
                /*echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['4']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['5']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['6']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['7']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['8']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['9']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['10']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['11']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['12']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['13']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['14']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['15']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['16']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['17']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['18']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['19']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['20']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['21']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['22']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['23']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['24']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['25']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['26']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['27']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['28']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['29']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['30']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['31']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['32']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['33']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['34']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['35']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['36']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['37']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['38']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['39']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['40']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['41']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['42']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['43']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['44']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['45']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['46']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['47']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['48']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['49']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['50']."</a></td>"; 
                echo "<td><a href='?seccion=partes_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['51']."</a></td>";*/ 
            echo "</tr>"; 
    }   
        echo "</tbody>";   
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM partedetrabajo WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql); 
        
            echo PARTE_DEL_TRABAJADOR; 
            echo ':&nbsp;&nbsp;&nbsp;'; 
            echo '<span class="documenttitle">'; 
                echo ''.$data[3].','; 
            echo '</span>'; 
            echo '&nbsp;&nbsp;';  
            echo 'de'; 
            echo '&nbsp;'; 
            echo FECHA; 
            echo '&nbsp;'; 
            echo ': '.$data[1].''; 
            echo '<br/>';
            
            
        echo '<table class="print">'; 
        echo '<caption>'; 
            echo PARTE_DETALLES;
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';            
            echo '<button onclick="history.go(-1);">';
                echo VOLVER;
            echo '</button>';
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<input type=button onClick=location.href="?seccion=partes_admin&amp;aktion=change_id&amp;id='.$data[0].'" value="Editar">';
        echo '</caption>'; 
        echo '<tbody>'; 
            echo '<tr>'; 
              echo '<th style="width:100px">Fecha:</th>'; 
                      echo '<td>'.$data[1].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                
                echo CENTRO;
                
                echo '</th>'; 
                  echo '<td>'.$data[2].'</td>'; 
              echo '</tr>';             
              echo '<tr>'; 
                echo '<th style="width:100px">';
                
                echo EMPLEADO;
                
                echo '</th>'; 
                  echo '<td>'.$data[3].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                
                echo HORA;
                
                echo '</th>'; 
              echo '<td width="25%">'.$data[4].'</td>';          
                  echo '<td>'.$data[5].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                
                echo HORA;
                
                echo '</th>'; 
                  echo '<td>'.$data[6].'</td>'; 
                  echo '<td>'.$data[7].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                
                echo HORA;
                
                echo '</th>'; 
                  echo '<td>'.$data[8].'</td>'; 
                  echo '<td>'.$data[9].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[10].'</td>'; 
                  echo '<td>'.$data[11].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[12].'</td>'; 
                  echo '<td>'.$data[13].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[14].'</td>'; 
                  echo '<td>'.$data[15].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[16].'</td>'; 
                  echo '<td>'.$data[17].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[18].'</td>'; 
                  echo '<td>'.$data[19].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[20].'</td>'; 
                  echo '<td>'.$data[21].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[22].'</td>'; 
                  echo '<td>'.$data[23].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[24].'</td>'; 
                  echo '<td>'.$data[25].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[26].'</td>'; 
                  echo '<td>'.$data[27].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[28].'</td>'; 
                  echo '<td>'.$data[29].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[30].'</td>'; 
                  echo '<td>'.$data[31].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[32].'</td>'; 
                  echo '<td>'.$data[33].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[34].'</td>'; 
                  echo '<td>'.$data[35].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[36].'</td>'; 
                  echo '<td>'.$data[37].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[38].'</td>'; 
                  echo '<td>'.$data[39].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[40].'</td>'; 
                  echo '<td>'.$data[41].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[42].'</td>'; 
                  echo '<td>'.$data[43].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[44].'</td>'; 
                  echo '<td>'.$data[45].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[46].'</td>'; 
                  echo '<td>'.$data[47].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[48].'</td>'; 
                  echo '<td>'.$data[49].'</td>'; 
              echo '</tr>'; 
              echo '<tr>'; 
                echo '<th style="width:100px">'; 
                echo HORA;
                echo '</th>'; 
                  echo '<td>'.$data[50].'</td>'; 
                  echo '<td>'.$data[51].'</td>'; 
              echo '</tr>'; 
             echo '</tbody>';   
            echo '</table>';  
} 
 
?>