<?php 
/** 
* Mod borrar auditorías al sistema de calidad 
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
<script src="jscripts/even.js"></script> 
</head> 
<body> 
<table class="print" summary="Modificar auditorías"> 
<caption><?php echo AINFORMES_ADMINISTRAR; ?></caption> 
<tbody> 
<tr> 
<td> 
<a href="?seccion=auditorias_admin&amp;aktion=add"><?php echo AINFORMES_ANADIR; ?></a>:: 
<a href="?seccion=auditorias_admin&amp;aktion=change"><?php echo AINFORMES_CAMBIAR; ?></a> 
</td> 
</tr> 
</tbody> 
</table> 
<br> 
 
 
<?php 
            // requires the class 
            require "class.datepicker.php"; 
             
            // instantiate the object 
            $db=new datepicker(); 
             
            // uncomment the next line to have the calendar show up in german 
            //$db->language = "dutch"; 
             
            $db->firstDayOfWeek = 1; 
 
            // set the format in which the date to be returned 
            $db->dateFormat = "Y-m-d"; 
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "add") { 
    if ((empty($_POST['ai'])) AND (empty($_POST['Fecha'])) AND (empty($_POST['AreaAuditada'])) AND (empty($_POST['Documentacion'])) AND (empty($_POST['Auditor'])) AND (empty($_POST['ObjetoAuditoria']))    AND (empty($_POST['Resultado']))) { 
        echo '<form action="" method="POST">'; 
             echo '<table class="print" summary="Modificar auditorías">'; 
         echo '<caption>'; 
            echo AINFORMES_ANADIR; 
            echo '</caption>'; 
             echo '<tbody>'; 
        echo '<tr>'; 
          echo '<th style width="15%">'; 
            echo AINFORMES_NUMERO; 
          echo '</th>'; 
            echo '<td>'; 
             echo ' <select name="ai" value="">'; 
                 echo '<option>...</option>';
                   $sql = "SELECT * FROM aisgc ORDER BY fecha DESC"; 
                   $sql = mysqli_query($mysqli, $sql); 
                   mysqli_query($mysqli, "SET NAMES 'utf8'"); 
        if (!defined('fecha')) {
             define('FECHA', 'fecha');
        }  
        if (!defined('ai')) {
             define('AI', 'ai');
        }
        while ($row = mysqli_fetch_assoc($sql)) {                                  
            echo '<option value="'.$row[AI].'">'.$row[AI].' de fecha: '.$row[FECHA].'</option>'; 
        }  
            echo '</select>'; 
 
            ?> 
            &nbsp;&nbsp;&nbsp;&nbsp; 
            <input type="button" value="Mirar NC`s" onclick="Abrir_ventana('mod/ncslistadesplegable/index.php');"> 
            &nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="#" onClick="Abrir_ventana('mod/ncsporarea_revsistema.php')"><img src="images/blue_graph.gif"></a> 
             
            <?php     
            echo '</td>';      
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th>'; 
             echo FECHA; 
          echo '</th>';                         
          echo '<td><input type="text" id="date" class="inputfecha" name="Fecha" value="">'; 
            ?> 
              <input type="button" value="::" onclick="<?php echo $db->show('date') ?>"> 
            <?php 
          echo '</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th>'; 
                    echo AINFORMES_AREA_AUDITADA; 
          echo '</th>'; 
              echo '<td>';      
                $sql2="(SELECT afectaa FROM afectaa) 
                          UNION 
                           (SELECT nombrearea FROM areassensibles)"; 
                 
        if (!defined('nombrearea')) {
             define('NOMBREAREA', 'nombrearea');
        }
        if (!defined('afectaa')) {
             define('AFECTAA', 'afectaa');
        }
        if (!defined('AreaAuditada')) {
             define('AREAAUDITADA', 'AreaAuditada');
        }

                 $resultado=mysqli_query($mysqli, $sql2);                      
        while ($nombrearea=mysqli_fetch_array($resultado)) {                 
                 echo '<input id="IDnombrearea[]" name="AreaAuditada[]" type="checkbox" value="'.$nombrearea[AFECTAA].'">'.$nombrearea[AFECTAA].'';   
        }  
             echo '</td>';
        echo '</tr>'; 
        echo '<tr>'; 
           echo '<th>'; 
             echo DOCUMENTACION; 
           echo '</th>'; 
             echo '<td><input class="inputlargo" name="Documentacion" value=""></td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th>'; 
            echo AUDITORIAS_AUDITOR; 
          echo '</th>'; 
              echo '<td>';      
                $sql2="SELECT * FROM auditores WHERE activo=1";          
                $resultado=mysqli_query($mysqli, $sql2); 
       
        if (!defined('Auditor')) {
             define('AUDITOR', 'Auditor');
        }
        while ($auditor=mysqli_fetch_array($resultado)) {
            if (!defined('auditor')) { 
                 define('auditor', 'auditor'); 
            }         
                echo '<input id="IDAuditor[]" name="auditor[]" type="checkbox" value="'.$auditor[auditor].'">'.$auditor[auditor].'';   
        }
            echo '<td>'; 
 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th>'; 
            echo AINFORMES_OBJETO; 
          echo '</th>'; 
                    echo '<td><textarea class="textareasmall" name="ObjetoAuditoria" value=""></textarea></td>'; 
                echo '</tr>'; 
                echo '<tr>'; 
                    echo '<th>'; 
         echo RESULTADO; 
            echo '</th>'; 
              echo '<td><textarea class="textareanormal" name="Resultado" value=""></textarea></td>'; 
                echo '</tr>'; 
                    echo '<td colspan="2"><button type="submit" class="btn btn-info">'.ANADIR.'</button></td>'; 
                echo '</tr>'; 
             echo '</tbody>';  
             echo '</table>'; 
            echo '</form>'; 
    } else {    
    
        if (isset($_POST['ai'])) {
            $ai_Post = $_POST['ai']; 
        }
        if (isset($_POST['Fecha'])) {
            $Fecha_Post = $_POST['Fecha']; 
        }
        if (isset($_POST['AreaAuditada'])) {
            $AreaAuditada_Post = $_POST['AreaAuditada']; 
        }
        if (isset($_POST['afectaa'])) {
            $afectaa_Post = $_POST['afectaa']; 
        }
        
        foreach ( $_POST['AreaAuditada'] as $afectaa ) { 
                  @$afectaa_Post .= ''. $afectaa . ', '; 
        } 
     
        $Documentacion_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli, $_POST['Documentacion']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : "")); 
     
        //$Auditor_Post = mysql_real_escape_string($_POST['Auditor']); 
        $Auditor_Post = (isset($_POST['Auditor'])) ? $_POST['Auditor'] : ''; 
     
        foreach ( $_POST['auditor'] as $Auditor ) { 
                  $Auditor_Post .= '' . $Auditor . ', '; 
        } 
     
        $ObjetoAuditoria_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli, $_POST['ObjetoAuditoria']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : "")); 
        $Resultado_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli, $_POST['Resultado']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : "")); 
        $sql = mysqli_query($mysqli, "INSERT INTO informeauditoria (ai, Fecha, AreaAuditada, Documentacion, Auditor, ObjetoAuditoria, Resultado) VALUES ('".$ai_Post."', '".$Fecha_Post."', '".$afectaa_Post."', '".$Documentacion_Post."', '".$Auditor_Post."', '".$ObjetoAuditoria_Post."', '".$Resultado_Post."')"); 
       
        if ($sql) {
            echo "<span class='documenttitle'>";
            echo AUDITORIA_ANADIDA;
            echo "</span>"; 
        } else {        
            echo ERROR_ANADIR_REGISTRO; 
        }
    } 
} 
 
if ($aktion == "change") { 
        $sql = mysqli_query($mysqli, "SELECT * FROM informeauditoria ORDER BY id DESC"); 
        mysqli_query($mysqli, "SET NAMES 'utf8'"); 
 
    if (!defined('ai')) {  
         define('AI', 'ai'); 
    }       
        echo AINFORMES_ADVERTICE;  
        echo '<table class="sortable" summary="Modificar auditorías">'; 
        echo '<caption>'; 
            echo AINFORMES_CAMBIAR; 
        echo '</caption>'; 
        echo '<tbody>'; 
            echo '<tr>'; 
                //<!--<th>Id</th>-->'; 
                echo '<th>'; 
                    echo AINFORMES_INFORME; 
                echo '</th>'; 
                echo '<th>'; 
                    echo FECHA; 
                echo '</th>'; 
                echo '<th>'; 
                    echo AINFORMES_AREA_AUDITADA; 
                echo '</th>'; 
                //<!--<th>Documentaci&oacute;n</th>--> 
                echo '<th>'; 
                    echo AUDITORIAS_AUDITOR; 
                echo '</th>'; 
                //<!--<th>Objeto</th><th>Resultado</th>--> 
            echo '</tr>'; 
    while ($row = mysqli_fetch_row($sql)) { 
            echo '<tr>';     
                  //echo '<td>'.$row['0'].'</td>';          
                    echo '<td>';


                    ?>
                     <a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo "$row[0]" ?>'
                        alt=Image Tooltip rel=tooltip
                        content='<table class=print>
                        <tbody>
                        <tr>
                        <caption>
                          <?php echo AUDITORIAS_AUDITORIA; ?>                        
                          <span class=documenttitle>: <?php echo "$row[1]"; ?></span>
                        </caption>
                            <th><?php echo AUDITORIAS_AUDITORIA; ?></th> 
                            <th><?php echo FECHA; ?></th>
                            <th><?php echo AINFORMES_AREA_AUDITADA; ?></th>
                        </tr>
                        <tr>
                                 <td><?php echo "$row[1]" ?></td>
                                 <td><?php echo "$row[2]" ?></td>
                                 <td><?php echo "$row[3]" ?></td>
                        </tr>
                        <tr>
                            <th colspan=2><?php echo DOCUMENTACION; ?></th>
                            <th colspan=2><?php echo AUDITORIAS_AUDITOR; ?></th>
                        </tr>
                        <tr>
                                 <td colspan=2><?php echo "$row[4]" ?></td>
                                 <td colspan=2><?php echo "$row[5]" ?></td>
                        </tr>
                        <tr>
                            <th colspan=2><?php echo AINFORMES_OBJETO; ?></th>
                            <th><?php echo RESULTADO; ?></th>
                        </tr>
                        <tr>
                                 <td colspan=2><?php echo "$row[6]" ?></td>
                                 <td colspan=2><?php echo "$row[7]" ?></td>
                        </tr>"; 
                        </tbody>
                        </table>'><?php echo "$row[1]" ?></a> 

                    <?php						
         
                        /*echo "<a href=?seccion=auditorias_admin&amp;aktion=change_id&amp;id=$row[0] alt=Image Tooltip rel=tooltip content='<table class=print>";
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<caption>";
                        echo AUDITORIAS_AUDITORIA;
                        echo ": <span class=documenttitle>"; 
                        echo "$row[1]";
                        echo "</span></caption>";                        
                        echo "<th>"; 
                              echo AUDITORIAS_AUDITORIA; 
                        echo "</th>";
                        echo "<th>";
                              echo FECHA; 
                        echo "</th>";
                        echo "<th>"; 
                              echo AINFORMES_AREA_AUDITADA;
                        echo"</th>
                              </tr>"; 
                        echo "<tr>
                                  <td>$row[1]</td>
                                  <td>$row[2]</td>
                                  <td>$row[3]</td>
                              </tr>"; 
                        echo "<tr>";
                        echo "<th colspan=2>"; 
                              echo DOCUMENTACION; 
                        echo "</th>";
                        echo "<th colspan=2>"; 
                              echo AUDITORIAS_AUDITOR; 
                        echo "</th>"; 
                        echo "</tr>"; 
                        echo "<tr>
                                  <td colspan=2>$row[4]</td>
                                  <td colspan=2>$row[5]</td>
                              </tr>"; 
                        echo "<tr>"; 
                        echo "<th colspan=2>";
                              echo AINFORMES_OBJETO;
                        echo "</th>"; 
                        echo "<th>"; 
                              echo RESULTADO;
                        echo"</th>"; 
                         echo "</tr>"; 
                        echo "<tr>
                                   <td colspan=2>$row[6]</td>
                                   <td colspan=2>$row[7]</td>";
                         echo "</tr>"; 
                            echo "</tbody>";         
                            echo "</table>'>";
                            
                            echo "$row[1]</a>"; */
         
                    echo '</td>';         
                    echo '<td><a href=?seccion=auditorias_admin&amp;aktion=change_id&amp;id=$row[0]>'.$row[2].'</a></td>'; 
                    echo '<td><a href=?seccion=auditorias_admin&amp;aktion=change_id&amp;id=$row[0]>'.$row[3].'</a></td>'; 
                    //echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>"; 
                    echo '<td><a href=?seccion=auditorias_admin&amp;aktion=change_id&amp;id=$row[0]>'.$row[5].'</a></td>'; 
                    /*echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['6']."</a></td>"; 
                    echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";*/ 
             echo '</tr>'; 
    } 
        echo '</tbody>'; 
        echo '</table>'; 
} 
 
 
if ($aktion == "change_id") { 
    if ((empty($_POST['ai_change'])) AND (empty($_POST['Fecha_change'])) AND (empty($_POST['AreaAuditada_change'])) AND (empty($_POST['Documentacion_change'])) AND (empty($_POST['Auditor_change'])) AND (empty($_POST['ObjetoAuditoria_change'])) AND (empty($_POST['Resultado_change']))) { 
        $id = $_GET['id']; 
        mysqli_query($mysqli, "SET NAMES 'utf8'");     
            $sql = mysqli_query($mysqli, "SELECT * FROM informeauditoria WHERE id = $_GET[id] ");  
            $data = mysqli_fetch_row($sql); 
 
        echo '<form action="" method="POST">'; 
            echo '<table class="print" summary="Modificar auditorías">'; 
            echo '<caption>'; 
                echo AINFORMES_PRINT_DETAILS; 
            echo '</caption>'; 
            echo '<tbody>'; 
                echo '<tr>'; 
                    echo '<th>'; 
                        echo AINFORMES_INFORME; 
                    echo '</th>'; 
                        echo '<td>'; 
                        
                        
                         echo ' <select name="ai_change" value="'.$data[1].'">'; 
                 echo '<option>'.$data[1].'</option>';
                   $sql = "SELECT * FROM aisgc ORDER BY fecha DESC"; 
                   $sql = mysqli_query($mysqli, $sql); 
                   mysqli_query($mysqli, "SET NAMES 'utf8'"); 
        if (!defined('fecha')) {
             define('FECHA', 'fecha');
        }  
        if (!defined('ai')) {
             define('AI', 'ai');
        }
        while ($row = mysqli_fetch_assoc($sql)) {                                  
            echo '<option value="'.$row[AI].'">'.$row[AI].' de fecha: '.$row[FECHA].'</option>'; 
        }  
            echo '</select>'; 
                        
                        
                    //echo '<input class="inputlargo" name="ai_change" value="'.$data[1].'"></td>'; 
                         
                         
                echo '</tr>'; 
                echo '<tr>'; 
                    echo '<th>'; 
                        echo FECHA; 
                    echo '</th>'; 
                    //echo '<td><input class="inputlargo" name="Fecha_change" value="'.$data[2].'"></td>'; 
                        echo '<td>'; 
                             ?>              
                            <input type="text" id="date" class="inputfecha" name="Fecha_change" value="<?php echo $data[2];?>" /><input type="button" value="::" onclick="<?php echo $db->show('date') ?>"> 
                            <?php     
                        echo '</td>'; 
                echo '</tr>'; 
                echo '<tr>'; 
                    echo '<th>'; 
                        echo AINFORMES_AREA_AUDITADA; 
                    echo '</th>'; 
                        echo '<td><input class="inputlargo" name="AreaAuditada_change" value="'.$data[3].'"></td>'; 
                echo '</tr>'; 
                echo '<tr>'; 
                     echo '<th>'; 
                        echo DOCUMENTACION; 
                    echo '</th>'; 
                        echo '<td><input class="inputlargo" name="Documentacion_change" value="'.$data[4].'"></td>'; 
                echo '</tr>'; 
                echo '<tr>'; 
                    echo '<th>'; 
                        echo AUDITORIAS_AUDITOR; 
                    echo '</th>'; 
                        echo '<td><input class="inputlargo" name="Auditor_change" value="'.$data[5].'"></td>'; 
                echo '</tr>'; 
                echo '<tr>'; 
                    echo '<th>'; 
                        echo AINFORMES_OBJETO; 
                    echo '</th>'; 
                        echo '<td><textarea class="inputlargo" rows="5" name="ObjetoAuditoria_change">'.$data[6].'</textarea></td>'; 
                echo '</tr>'; 
                echo '<tr>'; 
                    echo '<th>'; 
                        echo RESULTADO; 
                    echo '</th>'; 
                        echo '<td><textarea class="textareanormal" rows="15" name="Resultado_change">'.$data[7].'</textarea></td>'; 
                echo '</tr>'; 
                    echo '<td colspan="2"><button type="submit" class="btn btn-warning">'.MODIFICAR.'</button></td>'; 
                echo '</tr>'; 
            echo '</tbody>';  
            echo '</table>'; 
        echo '</form>';  
            } else { 
                 $sql = mysqli_query($mysqli, "UPDATE informeauditoria SET ai='$_POST[ai_change]',Fecha='$_POST[Fecha_change]',AreaAuditada='$_POST[AreaAuditada_change]',Documentacion='$_POST[Documentacion_change]',Auditor='$_POST[Auditor_change]',ObjetoAuditoria='$_POST[ObjetoAuditoria_change]',Resultado='$_POST[Resultado_change]' WHERE id=$_GET[id]"); 
                   echo AUDITORIA_ACTUALIZADA;
                   
                        echo "<button onclick='history.go(-1);'>";
                            echo VOLVER;
                        echo "</button>";
                   
                   
            }
} 
?> 

</body> 
</html>