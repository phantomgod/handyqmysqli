<?php
/**
* Mod IMPRIMIR inspecciones
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
     $sql = mysqli_query($mysqli, "SELECT * 
									FROM inspecciones i
									LEFT JOIN members m ON i.inspector = m.username
									AND m.active='Yes'
									ORDER BY i.fecha DESC"); 
       
      echo '<span class="yellow">' . INSPECCIONES_LISTA . '</span>';
	  echo '<table id="myTable" class="sortable">'; 
        echo '<thead>';         
			echo '<tr><th>Id</th><th>';
			echo INSPECCIONES_INSPECTOR;
			echo '</th><th>';
			echo FECHA;
			echo '</th>'; 
		  /*Esta línea de abajo va junto al echo de arriba. Es el encabezado de la tabla, que no quiero que se muestre 
		  <td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td>++<td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td>';*/ 
			echo '<th>'.IMAGEN.'</th>';
			  echo '<th width="5%"><a href="#" alt="' . INSPECCIONES_EDITAR_INSPECCION . '" title="' . INSPECCIONES_EDITAR_INSPECCION . '">
						<i class="fa fa-edit" style="color:#673ab7;"></i>
					</th>';
			echo '<th width="5%"><a href="#" alt="' . IMPRIMIR_INSPECCION . '" title="' . IMPRIMIR_INSPECCION . '">
						<i class="fa fa-print" style="color:#673ab7;"></i></th>';
		  
		  echo '</tr>';
	  echo '</thead>';
	  echo '<tbody>';
    while ($row = mysqli_fetch_row($sql)) { 
        echo "<tr>";   
            echo "<td>";            
            
            echo "<a href='?seccion=inspecciones_print&amp;aktion=print_id&amp;id=".$row[0]."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
            echo "<th>"; echo ID; echo "</th><th>"; echo FECHA; echo"</th></tr>";
            echo "<tr><td>"; echo "$row[0]"; echo "</td><td>"; echo "$row[2]"; echo "</td></tr>";
            echo "<tr><th>"; echo INSPECCIONES_INSPECTOR; echo "</th><th>"; echo SERVICIO_SERVICIO; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[3]"; echo"</td></tr>";
            echo "<tr><th>"; echo TRABAJADOR; echo "</th><th>"; echo HORA; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[5]"; echo "</td><td>"; echo "$row[4]"; echo "</td></tr>";
            echo "<tr><th>"; echo INCIDENCIA; echo"</th><th>"; echo CODIGO_INCIDENCIA; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[6]"; echo"</td><td>"; echo "$row[7]"; echo"</td></tr>";        
            echo "</table>'>";                                                
            echo "$row[0]</a>";            
            
            //<a href='?seccion=inspecciones_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['0']."</a>            
            
            echo "</td>"; 
            echo "<td>";
            
            echo "<a href='?seccion=inspecciones_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
            echo "<th>"; echo ID; echo "</th><th>"; echo FECHA; echo"</th></tr>";
            echo "<tr><td>"; echo "$row[0]"; echo "</td><td>"; echo "$row[2]"; echo "</td></tr>";
            echo "<tr><th>"; echo INSPECCIONES_INSPECTOR; echo "</th><th>"; echo SERVICIO_SERVICIO; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[3]"; echo"</td></tr>";
            echo "<tr><th>"; echo TRABAJADOR; echo "</th><th>"; echo HORA; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[5]"; echo "</td><td>"; echo "$row[4]"; echo "</td></tr>";
            echo "<tr><th>"; echo INCIDENCIA; echo"</th><th>"; echo CODIGO_INCIDENCIA; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[6]"; echo"</td><td>"; echo "$row[7]"; echo"</td></tr>";        
            echo "</table>'>";                                                
            echo "$row[1]</a>"; 
            
            
            echo "</td>";
            
            echo "<td><a href='?seccion=inspecciones_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
            echo "<td><a href='?seccion=trabajadores_admin2c&amp;aktion=change_id&amp;id=".$row['8']."'><img src='".$row['11']."' width='50px'></a></td>"; 
            
             echo "<td width='5%'>";
             echo "<a href='?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=$row[0]' alt='" . INSPECCIONES_EDITAR_INSPECCION . " - $row[0]' title='" . INSPECCIONES_EDITAR_INSPECCION . " - $row[0]'>";
             echo "<i class='fa fa-pencil' style='color:#673ab7;'></i></a>";
             echo "</td>";
             echo "<td width='5%'>";
             echo "<a href='?seccion=inspecciones_print&amp;aktion=print_id&amp;id=$row[0]' alt='" . IMPRIMIR_INSPECCION . " - $row[0]' title='" . IMPRIMIR_INSPECCION . " - $row[0]'>";
             echo "<i class='fa fa-print' style='color:#673ab7;'></i></a>";
             echo "</td>"; 
               
            echo "</tr>"; 
        } 
      echo "</tbody>";   
      echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty($_POST['Id'])) AND (empty($_POST['inspector'])) AND (empty($_POST['fecha'])) AND (empty($_POST['servicio'])) AND (empty($_POST['hora'])) AND (empty($_POST['vigilante'])) AND (empty($_POST['incidencia'])) AND (empty($_POST['codigo_incidencia'])) AND (empty($_POST['servicio2'])) AND (empty($_POST['hora2'])) AND (empty($_POST['vigilante2'])) AND (empty($_POST['incidencia2'])) AND (empty($_POST['codigo_incidencia2'])) AND (empty($_POST['servicio3'])) AND (empty($_POST['hora3'])) AND (empty($_POST['vigilante3'])) AND (empty($_POST['incidencia3'])) AND (empty($_POST['codigo_incidencia3'])) AND (empty($_POST['servicio4'])) AND (empty($_POST['hora4'])) AND (empty($_POST['vigilante4'])) AND (empty($_POST['incidencia4'])) AND (empty($_POST['codigo_incidencia4'])) AND (empty($_POST['servicio5'])) AND (empty($_POST['hora5'])) AND (empty($_POST['vigilante5'])) AND (empty($_POST['incidencia5'])) AND (empty($_POST['codigo_incidencia5'])) AND (empty($_POST['servicio6'])) AND (empty($_POST['hora6'])) AND (empty($_POST['vigilante6'])) AND (empty($_POST['incidencia6'])) AND (empty($_POST['codigo_incidencia6'])) AND (empty($_POST['servicio7'])) AND (empty($_POST['hora7'])) AND (empty($_POST['vigilante7'])) AND (empty($_POST['incidencia7'])) AND (empty($_POST['codigo_incidencia7']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, 
               "SELECT * 
                FROM inspecciones i
                LEFT JOIN trabajadores t ON i.inspector = t.trabajador
                WHERE i.Id = $_GET[id]
                ORDER BY i.fecha DESC  "
        );
        
        $data = mysqli_fetch_row($sql); 
   
        echo '<table class="print"">'; 
        echo '<caption>'; 
                     echo INSPECCIONES_PRINTSCREEN; 
         echo '</caption>';      
         echo '<tbody>'; 
             echo '<tr>'; 
                 echo '<td>Inspección realizada en: &nbsp;<span class="darkorange">'.$data[3].'</span>,&nbsp;&nbsp;de fecha:<span class="darkorange"> '.$data[2].'</span></td>'; 
             echo '</tr>'; 
             echo '<tr>';        
                 echo '<td><span class="darkorange">'.$data[1].'</span></th>'; 
             echo '</tr>';             
         echo '</tbody>'; 
         echo '</table>';            
          echo '<br>';            
        echo '<table class="print">'; 
        echo '<tbody>'; 
             echo '<tr>'; 
                 echo '<th>'; echo SERVICIO_SERVICIO; echo '</th><td>'.$data[3].'</td>';
                 echo '<th>'; echo HORA; echo '</th><td>'.$data[4].'</td>';
                 echo '</tr><tr>';                 
                 echo '<th>'; echo TRABAJADOR; echo '</th><td><img src="'.$data[41].'"></td>';
                // echo '<th>'; echo IMAGEN; echo '</th><td><img src="'.$data[41].'"></td>';
                  echo '</tr><tr>';                 
                 echo '<th>'; echo INCIDENCIA; echo '</th><td>'.$data[6].'</td>';
                 echo '<th>'; echo CODIGO; echo '</th><td>'.$data[7].'</td>';
                 

         
              /*echo '<tr>';           
                  echo '<td>'.$data[8].'</td>'; 
                  echo '<td>'.$data[9].'</td>';         
                  echo '<td>'.$data[10].'</td>';           
                  echo '<td>'.$data[11].'</td>';           
                  echo '<td>'.$data[12].'</td>'; 
             echo '</tr>'; 
     
              echo '<tr>'; 
                  echo '<td>'.$data[13].'</td>';           
                  echo '<td>'.$data[14].'</td>';          
                  echo '<td>'.$data[15].'</td>'; 
                  echo '<td>'.$data[16].'</td>';           
                  echo '<td>'.$data[17].'</td>'; 
             echo '</tr>'; 
              
             echo '<tr>'; 
                  echo '<td>'.$data[18].'</td>';           
                  echo '<td>'.$data[19].'</td>';           
                  echo '<td>'.$data[20].'</td>';           
                  echo '<td>'.$data[21].'</td>';        
                  echo '<td>'.$data[22].'</td>'; 
                 echo '</tr>'; 
                  
              echo '<tr>'; 
                  echo '<td>'.$data[23].'</td>';           
                  echo '<td>'.$data[24].'</td>';           
                  echo '<td>'.$data[25].'</td>';           
                  echo '<td>'.$data[26].'</td>';           
                  echo '<td>'.$data[27].'</td>'; 
             echo '</tr>'; 
              
             echo '<tr>'; 
                  echo '<td>'.$data[28].'</td>';           
                  echo '<td>'.$data[29].'</td>';           
                  echo '<td>'.$data[30].'</td>';           
                  echo '<td>'.$data[31].'</td>';           
                  echo '<td>'.$data[32].'</td>'; 
            echo '</tr>'; 
     
              echo '<tr>'; 
                  echo '<td>'.$data[33].'</td>';           
                  echo '<td>'.$data[34].'</td>';           
                  echo '<td>'.$data[35].'</td>';           
                  echo '<td>'.$data[36].'</td>';           
                  echo '<td>'.$data[37].'</td>';           
            echo '</tr>';*/

            echo '</tr>'; 
            
                echo '<td></td>';
                //echo '<td></td>';
                echo '<td colspan="2">
				<br />*Comprobar desviaciones en la atención mensual de clientes<br />*Comprobar que no falta documentación de trabajo<br />*Comprobar stock mínimo en el vehículo<br />*Comprobar limpieza y mantenimiento de vehículos<br />*Comprobar órdenes de trabajo completas<br />*Comprobar trabajo realizado<br /></td>';
                echo '<td>LEGIONELLA:<br />*Estado Y Conservación de las instalaciones<br />*Medidas “in situ”<br />*¿Incidencias comunicadas al Dep. de mantenimiento?<br />*¿Se han entregado los últimos análisis realizados?<br />*¿Libro de registros al día?</td>';
                echo '<td></td>';                
            echo '</tr>'; 
            
        echo '</tbody>';         
        echo '</table>'; 
        
           echo '<p id="para1">'; 
             echo "<button type='submit' class='btn btn-warning' onclick='history.go(-1);'>";
                 echo VOLVER;
             echo "</button>";
             echo '&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-primary" onClick=parent.location="index.php?seccion=inspecciones_admin&amp;aktion=change_id&amp;id='.$data[0].'" value="Editar">'; 


             ?>
             &nbsp;&nbsp;&nbsp;<input type="button" class='btn btn-info' value="Ver codigos" onclick="Abrir_ventana('mod/codigosincidencias.html');">         
           <?php
           
           echo '</p>';
        
    } 
} 
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />