<?php
/**
* Mod IMPRIMIR auditorías
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
    $sql = mysql_query("SELECT * FROM aisgc ORDER BY id DESC");
                   echo AUDITORIAS_ADVERTICE;
          echo '<table class="sortable">';
          echo '<caption>';
                   echo AUDITORIAS_LISTA_PRINTSCREEN;
          echo '</caption>';        
          echo '<tbody>';     
            echo '<tr>';
              echo '<th>ID</th>';             
              echo '<th>';
                   echo AUDITORIAS_AI;
              echo '</th>';    
              echo '<th>';
                   echo GENERAL_FECHA;
            echo '</th>'; 
            ?>
                <th><img src="images/red_edit.gif" alt="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>" title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>" /></th>
                <th><img src="images/red_print.gif" alt="<?php echo IMPRIMIR_AUDITORIA; ?>" title="<?php echo IMPRIMIR_AUDITORIA; ?>" /></th>
            <?php

        

            
           echo '</tr>';
    while ($row = mysql_fetch_row($sql)) {
   
                echo "<tr>"; 
                echo "<td>".$row['0']."</td>";
                echo "<td>"; 
                    
                     echo "<a href='index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>"; 
                    echo "<th>"; echo GENERAL_FECHA; echo "</th><th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>"; 
                    echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th colspan=2>"; echo CUESTIONARIO_CALIDAD; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[13]"; echo"</td><td colspan=2>"; echo "$row[14]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[15]"; echo "</td><td colspan=2>"; echo "$row[16]"; echo"</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo"</th><th colspan=2>"; echo CUESTIONARIO_DOCUMENTACION;echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[17]"; echo "</td><td colspan=2>"; echo "$row[18]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[19]"; echo "</td></tr></table>'>"; 
                    echo "$row[2]</a>";     

                    
                    echo "</td>";        
                
                echo "<td>".$row['1']."</td>"; 

                ?>
                <td><a href="?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $row['0'];?>"><img src="images/red_edit.gif" alt="<?php echo AUDITORIAS_EDITAR_AUDITORIA; echo "&nbsp;"; echo $row['2']; ?>" title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; echo "&nbsp;"; echo $row['2']; ?>" /></a></td>
                <td><a href="?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'];?>"><img src="images/red_print.gif" alt="<?php echo IMPRIMIR_AUDITORIA; ?>" title="<?php echo IMPRIMIR_AUDITORIA; ?>" /></a></td>
                <?php
                
           echo "</tr>";   
    }
    
       echo "</tbody>";  
        echo "</table>";
}
if ($aktion == "print_id") {
    if ((empty($_POST['fecha'])) AND (empty($_POST['ai'])) AND (empty($_POST['auditor1'])) AND (empty($_POST['auditor2'])) AND (empty($_POST['auditor3'])) AND (empty($_POST['docum'])) AND (empty($_POST['trabajador1'])) AND (empty($_POST['trabajador2'])) AND (empty($_POST['trabajador3'])) AND (empty($_POST['servicio1'])) AND (empty($_POST['servicio2'])) AND (empty($_POST['vehiculos'])) AND (empty($_POST['obstrat'])) AND (empty($_POST['obscal'])) AND (empty($_POST['obsalmac'])) AND (empty($_POST['obscompras'])) AND (empty($_POST['obsformac'])) AND (empty($_POST['obsdocum'])) AND (empty($_POST['obslegio']))) {
        $id = (int)$_GET['id'];
        $sql = mysql_query("SELECT * FROM aisgc WHERE id = $id ");
        $data = mysql_fetch_row($sql);
        
        ?>
  
        <table class="print">
        <caption>
            <?php echo AUDITORIAS_PRINT_DETAILS; ?>
            :&nbsp; &nbsp;<span class="documenttitle"><?php echo $data[2] ?></span>&nbsp;&nbsp;&nbsp;
            <a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $data[0] ?>'><img src='images/red_edit.gif' alt='<?php echo AUDITORIAS_EDITAR_AUDITORIA -$data[2] ?>' title='".AUDITORIAS_EDITAR_AUDITORIA."-".$data[2]."'></a>&nbsp;&nbsp;    
        </caption>
            <thead>
            
                <?php echo AUDITORIAS_PRINT_ADVERTICE; ?>
            </thead>
        <tbody>    
            <tr>
                <th>
                    <?php echo GENERAL_FECHA; ?>
                </th>
                    <td><?php echo $data[1] ?></td>
            </tr>
            <tr>
                <th>
                   <?php echo AUDITORIAS_AI; ?>
                </th>
                    <td><?php echo $data[2] ?></td>
            </tr>
            <tr>
                <th>
                   <?php echo AUDITORIAS_AUDITOR; ?>
                </th>
                    <td><?php echo $data[3] ?></td>
            </tr>        
            <tr>
                <th>
                    <?php echo GENERAL_DOCUMENTOS; ?>
                </th>
                    <td><?php echo $data[6] ?></td>
            </tr>
            <tr>
                <th>
                   <?php echo TRABAJADOR_TRABAJADOR; ?>
                </th>
                    <td><?php echo $data[7] ?></td>
            </tr>       
            <tr>
                <th>
                  <?php echo SERVICIO_SERVICIO; ?>
                </th>
                    <td><?php echo $data[10] ?></td>
            </tr>
            <tr>
                <th>
                   <?php echo SERVICIO_SERVICIO; ?>
                </th>
                    <td><?php echo $data[11] ?></td>
            </tr>
            <tr>
                <th>
                   <?php echo GENERAL_VEHICULOS; ?>
                </th>
                    <td><?php echo $data[12] ?></td>
            </tr> 
        
                 <tr>         
                     <th>
                      <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>                   
                      <?php echo CUESTIONARIO_TRATAMIENTOS; ?>
                       &nbsp;&nbsp;&nbsp;&nbsp;         
                       <img src="images/help.png" alt="help">
                      </div>
                    </th>                   
                      <td><?php echo $data[13] ?></td>
                 </tr>        
                 <tr>
                    <th>

                       <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                       <?php echo CUESTIONARIO_CALIDAD; ?>
                       &nbsp;&nbsp;&nbsp;&nbsp;          
                       <img src="images/help.png" alt="help">
                       </div>
                    </th>
                    <td><?php echo $data[14] ?></td>
            </tr>        
            <tr>          
                <th>
                    <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALMACEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                    <?php echo CUESTIONARIO_ALMACEN; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;          
                    <img src="images/help.png" alt="help"></div>
                </th>                    
                    <td><?php echo $data[15] ?></td>
            </tr>        
            <tr>
                <th>
       
                    <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACOMPRAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                    <?php echo CUESTIONARIO_COMPRAS; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;          
                    <img src="images/help.png" alt="help"></div>
                </th>                    
                    <td><?php echo $data[16] ?></td>
            </tr>        
            <tr>        
                <th>
        
                    <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOAFORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                    <?php echo CUESTIONARIO_FORMACION; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;          
                    <img src="images/help.png" alt="help"></div>
                </th>                    
                    <td><?php echo $data[17] ?></td>
            </tr>        
            <tr>        
                <th>
       
                    <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                    <?php echo CUESTIONARIO_DOCUMENTACION; ?>
                    &nbsp;          
                    <img src="images/help.png" alt="help">
                    </div>
                </th>                    
                    <td><?php echo $data[18] ?></td>
            </tr>
            <tr>          
                <th>        
                    <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOATALLER; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                    <?php echo CUESTIONARIO_TALLER; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;          
                    <img src="images/help.png" alt="help">
                    </div>
                </th>                    
                    <td><?php echo $data[19] ?></td>
            </tr>                
         </tbody>    
       </table> 
     
        <p id="para1"> 
         <button onclick='history.go(-1);'>
           <?php echo GENERAL_VOLVER; ?>
         </button>

         <input type=button onClick="parent.location=?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $data[0] ?>" value="Editar">
         
        </p>
    <?php }
}
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />