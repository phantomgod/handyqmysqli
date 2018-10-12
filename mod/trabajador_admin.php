<?php
/**
* Mod administrar trabajadores
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


<?php echo TRABAJADOR_ADMINISTRAR_TRABAJADORES; ?>

      <a href="?seccion=trabajador_admin&amp;aktion=add"><?php echo TRABAJADOR_ANADIR_TRABAJADOR; ?></a> :: 
      <a href="?seccion=trabajador_admin&amp;aktion=change"><?php echo TRABAJADOR_CAMBIAR_TRABAJADOR; ?></a> 

<br> 
<?php 
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "add") { 
    if ((empty($_POST['trabajador'])) AND (empty($_POST['activo']))) { 
        echo '<form action="" method="POST">'; 
            echo '<table class="print">'; 
            echo '<caption>'; 
                echo TRABAJADOR_ANADIR_TRABAJADOR; 
            echo '</caption>'; 
            echo '<tbody>'; 
                echo '<tr>';            
                    echo '<th style width="20%">'; 
                        echo TRABAJADOR_TRABAJADOR; 
                    echo '</th>'; 
                        echo '<td><input class="inputlargo" name="trabajador" value=""></td>'; 
                echo '</tr>'; 
                echo '<tr>';            
                    echo '<th style width="20%">'; 
                        echo TRABAJADOR_ACTIVIDAD; 
                    echo '</th>'; 
                        echo '<td><input class="inputlargo" name="actividad" value=""></td>'; 
                echo '</tr>'; 
             
                    ?>             
                    <tr> 
                        <td> <input type="button" value="Subir imagen" onclick="Abrir_ventana('mod/faces/selectfile.php');"></td> 
                    </tr> 
                    <?php 
                echo '<tr>'; 
                    echo '<th style width="20%">';
                    ?> 
                         <div id="help" onMouseOver="showdiv(event,'<?php echo IMAGEN_URLHELP ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'> 
                    
                       <?php echo IMAGEN_URL; ?>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <img src="images/help.png" alt="help"></div>
                    <?php                     
					echo '</th>'; 
                        echo '<td><input class="inputlargo" name="imgsrc" value=""></td>'; 
                echo '</tr>'; 
                echo '<tr>'; 
                    echo '<th>'; 
                        echo ESTADO; 
                    echo '</th>';       
                        echo '<td>'; 
                            echo '<select size="1" name="activo">'; 
                                echo '<option>...</option>'; 
                                echo '<option  value="1">'.ACTIVO.'</option>'; 
                                echo '<option  value="0">'.INACTIVO.'</option>'; 
                            echo '</select>'; 
                        echo '</td>'; 
                      //echo '<td><input name="activo" value=""></td>'; 
                echo '</tr>'; 
                        echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>'; 
                echo '</tr>'; 
            echo '</tbody>'; 
            echo '</table>'; 
         echo '</form>'; 
    } else { 
    
        if (isset($_POST['trabajador'])) {
            $trabajador_Post = $_POST['trabajador']; 
        }
        if (isset($_POST['actividad'])) {
            $actividad_Post = $_POST['actividad']; 
        }
        if (isset($_POST['imgsrc'])) {
            $imgsrc_Post = $_POST['imgsrc']; 
        }        
        if (isset($_POST['activo'])) {
            $activo_Post = $_POST['activo']; 
        }

    $sql =    mysqli_query($mysqli, "INSERT INTO trabajadores (trabajador,actividad,imgsrc,activo) VALUES ('".$trabajador_Post."','".$actividad_Post."','".$imgsrc_Post."','".$activo_Post."')"); 
    if ($sql) echo TRABAJADOR_ANADIDO; 
    else echo ERROR; 
  } 
} 
 
if ($aktion == "change") { 
  $sql = mysqli_query($mysqli, "SELECT * FROM trabajadores ORDER BY id ASC"); 
       
  echo '<table class="print">'; 
   echo '<caption>'; 
    echo TRABAJADOR_LISTA_TRABAJADORES; 
  echo '</caption>'; 
    echo '<thead>'; 
     echo TRABAJADOR_THEAD_EDIT;  
   echo '</thead>'; 
   echo '<tbody>';   
    echo '<tr>'; 
        //echo '<th>Id</th>'; 
        echo '<th>'; 
            echo TRABAJADOR_TRABAJADOR; 
        echo '</th>'; 
        echo '<th>'; 
            echo TRABAJADOR_ACTIVIDAD; 
        echo '</th>'; 
        echo '<th>'; 
            echo TRABAJADOR_IMG; 
        echo '</th>';      
        echo '<th>'; 
            echo ESTADO; 
        echo '</th>';     
   echo '<tr>'; 
  while ($row = mysqli_fetch_row($sql)) { 
    echo "<tr>";   
      //echo "<td>".$row['0']."</td>"; 
        echo "<td><a href='?seccion=trabajador_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
        echo "<td><a href='?seccion=trabajador_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
        echo "<td><a href='?seccion=auditores_admin&amp;aktion=change_id&amp;id=".$row['0']."'><img src='".$row['3']."' border='0'></a></td>"; 
        echo "<td><a href='?seccion=trabajador_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>"; 
    echo "</tr>"; 
  } 
     echo '</tbody>';  
  echo "</table>"; 
} 
if ($aktion == "change_id") { 
    if ((empty($_POST['trabajador_change'])) AND (empty($_POST['activo_change']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM trabajadores WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql); 
   
        echo '<form action="" method="POST">'; 
            echo '<table class="print">'; 
                echo '<caption>'; 
                    echo TRABAJADOR_CAMBIAR_TRABAJADOR; 
                echo '</caption>';       
                    echo '<tr>'; 
                        echo '<th>'; 
                            echo TRABAJADOR_TRABAJADOR; 
                        echo '</th>'; 
                            echo '<td><input class="inputlargo" name="trabajador_change" value="'.$data[1].'"></td>'; 
                    echo '</tr>'; 
                    echo '<tr>'; 
                        echo '<th>'; 
                            echo TRABAJADOR_ACTIVIDAD; 
                        echo '</th>'; 
                            echo '<td><input class="inputlargo" name="actividad_change" value="'.$data[2].'"></td>'; 
                    echo '</tr>'; 
                    echo '<tr>'; 
                        echo '<th>'; 
                            echo TRABAJADOR_IMG; 
                        echo '</th>'; 
                            echo '<td>';
                            
                            
                                /*echo '<select name="imgsrc_change">'; 
                                    echo '<option>'.$data[3].'</option>'; 
                                        $sql = "SELECT imgsrc FROM inspectores ORDER BY id DESC"; 
                                        $sql = mysql_query($sql); 
            if (!defined('imgsrc')) { 
            define('IMGSRC', 'imgsrc'); 
            } 
             while ($row = mysql_fetch_assoc($sql)) { 
                             echo '<option value="'.$row[IMGSRC].'">'.$row[IMGSRC].'</option>'; 
            }         
                      echo '</select>'; */
                      
                      
                    echo '<select name="imgsrc_change">'; 
                    echo '<option>'.$data[3].'</option>'; 
                    $handle=opendir('mod/faces/tmp/'); 
                    while (false!==($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                    //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                    echo "<option value=\"mod/faces/tmp/$file\">mod/faces/tmp/$file</option>\n";

                    }
                    }
                    closedir($handle); 
                    echo "</select>";


                      
                  echo '</td><td><img src='.$data[3].' border="0"></td>';
            
                    echo '</tr>'; 
                    echo '<tr>'; 
                        echo '<th>'; 
                            echo ESTADO; 
                        echo '</th>'; 
                           echo '<td><input name="activo_change" value="'.$data[4].'">&nbsp;&nbsp;1: '.ACTIVO.', 0: '.INACTIVO.'</td>';                            
                    echo '</tr>'; 
                           echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . ACTUALIZAR . '</button>'; 
                                echo "&nbsp;<button onclick='history.go(-1);'>";
                                     echo VOLVER;
                                echo "</button>";
                           echo '</td>'; 
                    echo '</tr>'; 
            echo '</table>'; 
         echo '</form>';  
    } else { 
          $sql = mysqli_query($mysqli, "UPDATE trabajadores SET trabajador='$_POST[trabajador_change]',imgsrc='$_POST[imgsrc_change]',activo='$_POST[activo_change]' WHERE id=$_GET[id]"); 
          if ($sql) echo TRABAJADOR_ACTUALIZADO; 
    } 
} 
?>