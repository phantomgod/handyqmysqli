<?php
/**
* Mod administrar INSPECTORES
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

<table class="print"> 
   <caption><?php echo INSPECTORES_ADMINISTRAR_INSPECTORES; ?></caption> 
       <tbody> 
         <tr> 
          <td> 
            <a href="index.php?seccion=inspectores_admin&amp;aktion=add"><?php echo INSPECTORES_ANADIR_INSPECTOR; ?></a> :: 
            <a href="index.php?seccion=inspectores_admin&amp;aktion=change"><?php echo INSPECTORES_CAMBIAR_INSPECTOR; ?></a> 
          </td> 
         </tr> 
      </tbody> 
</table> 
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
    if ((empty($_POST['inspector'])) AND (empty($_POST['activo']))) { 
        echo '<form action="" method="POST">'; 
             echo '<table class="print">'; 
             echo '<tbody>';
             echo '<caption>';
             echo INSPECTORES_ANADIR_INSPECTOR;
             echo '</caption>';             
                 echo '<tr>'; 
                    echo '<th>'; 
                            echo INSPECCIONES_INSPECTOR; 
                    echo '</th>'; 
                        echo '<td><input class="inputnormal" name="inspector" value=""></td>';                    
                 echo '</tr>';
                      ?>              
                       <tr> 
                              <td><input type="button" value="Subir imagen" onclick="Abrir_ventana('mod/ajaximage/index.php');"></td> 
                       </tr> 
                     <?php           
                 echo '<tr>'; 
                    echo '<th>'; 
                     ?> 
                         <div id="help" onMouseOver="showdiv(event,'<?php echo IMAGEN_URLHELP ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
               
                            <?php echo IMAGEN; ?>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>             
                     <?php                       
					echo '</th>'; 
                        echo '<td>';
                        
                        
                        echo '<select name="imgsrc">'; 
                        $handle=opendir('mod/ajaximage/uploads/'); 
        while (false!==($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                       //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                        echo "<option value=\"mod/ajaximage/uploads/$file\">$file</option>\n";

            }
        }
                    closedir($handle); 
                    echo "</select>";
                        
                        
                        
                        //<input style="width:60%" name="imgsrc" value=""></td>';
                        
                        
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
                 echo '</tr>'; 
                        echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>'; 
                 echo '</tr>'; 
             echo '</tbody>'; 
             echo '</table>'; 
        echo '</form>'; ; 
    } else {    
    
        if (isset($_POST['id'])) {
            $id_Post = $_POST['id']; 
        }
        if (isset($_POST['inspector'])) {
            $inspector_Post = $_POST['inspector']; 
        }
        if (isset($_POST['imgsrc'])) {
            $imgsrc_Post = $_POST['imgsrc']; 
        }    
        if (isset($_POST['activo'])) {
            $activo_Post = $_POST['activo']; 
        }    
        $sql =    mysqli_query($mysqli, "INSERT INTO inspectores (inspector, imgsrc, activo) VALUES ('".$inspector_Post."', '".$imgsrc_Post."', '".$activo_Post."')"); 
        if ($sql) {
             echo "<span class='documenttitle'>";
              echo INSPECTORES_INSPECTOR_ANADIDO;
             echo "</span>"; 
        } else {        
            echo ERROR_ANADIR_REGISTRO; 
        }
    } 
} 
 
if ($aktion == "change") { 
    $sql = mysqli_query($mysqli, "SELECT * FROM inspectores ORDER BY inspector DESC"); 
       
        echo ADVERTICE;    
        echo '<table class="sortable">'; 
        echo '<caption>'; 
               echo INSPECTORES_LISTA; 
        echo '</caption>';
         echo '<tbody>';
           echo '<tr>';             
             echo '<th>'; 
                echo INSPECCIONES_INSPECTOR; 
            echo '</th>'; 
            echo '<th>'; 
                echo IMAGEN; 
            echo '</th>';    
            echo '<th>'; 
                echo ESTADO; 
            echo '</th>';    
           echo '</tr>'; 
    while ($row = mysqli_fetch_row($sql)) { 
           echo "<tr>";   
             //echo "<td>".$row['0']."</td>"; 
                echo "<td><a href='?seccion=inspectores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
                echo "<td><a href='?seccion=inspectores_admin&amp;aktion=change_id&amp;id=".$row['0']."'><img src='".$row['2']."' /></a></td>";
                echo "<td><a href='?seccion=inspectores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
           echo "</tr>"; 
    } 
          echo "</tbody>";   
        echo "</table>"; 
} 
if ($aktion == "change_id") { 
    if ((empty($_POST['inspector_change'])) AND (empty($_POST['imgsrc_change'])) AND (empty($_POST['activo_change']))) { 
        $id = (int)$_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM inspectores WHERE id = $id "); 
        $data = mysqli_fetch_row($sql); 
   
        echo '<form action="" method="POST">'; 
             echo '<table class="print">';
                echo '<caption>'; 
                            echo INSPECTORES_CAMBIAR_INSPECTOR; 
                echo '</caption>';              
                 echo "<tbody>";        
                     echo '<tr>'; 
                         echo '<th>'; 
                            echo INSPECCIONES_INSPECTOR; 
                        echo '</th>';   
                            echo '<td><input class="inputnormal" name="inspector_change" value="'.$data[1].'"></td>'; 
                     echo '</tr>'; 
                     echo '<tr>'; 
                         echo '<th>'; 
                            echo IMAGEN; 
                         echo '</th>';  
                              echo '<td>'; 
                             
                            /* echo '<select name="imgsrc_change">'; 
                            echo '<option>'.$data[2].'</option>'; 
                             $sql = "SELECT imgsrc FROM inspectores ORDER BY id DESC"; 
                             $sql = mysql_query($sql); 
        if (!defined('imgsrc')) { 
            define('IMGSRC', 'imgsrc'); 
        } 
        while ($row = mysql_fetch_assoc($sql)) { 
                             echo '<option value="'.$row[IMGSRC].'">'.$row[IMGSRC].'</option>'; 
        }         
                      echo '</select>'; */ 
                             
                             //<input class="inputlargo" name="imgsrc_change" value="'.$data[2].'">
                             
                             
                    echo '<select name="imgsrc_change">'; 
                    echo '<option>'.$data[2].'</option>'; 
                    $handle=opendir('mod/faces/tmp/'); 
                    while (false!==($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                    //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                    echo "<option value=\"mod/faces/tmp/$file\">mod/faces/tmp/$file</option>\n";

                    }
                    }
                    closedir($handle); 
                    echo "</select>";
                             
                             
                              echo '</td>';                             
                              echo '<td><img src='.$data[2].' /></td>'; 
                     echo '</tr>'; 
                     echo '<tr>'; 
                         echo '<th>'; 
                            echo ESTADO; 
                         echo '</th>'; 
                             echo '<td><input class="" name="activo_change" value="'.$data[3].'">'; 
                             echo '&nbsp;&nbsp;&nbsp;1: '.ACTIVO.', 0: '.INACTIVO.'</td>';  
                     echo '</tr>'; 
                             echo '<td colspan="2"><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>'; 
                     echo '</tr>'; 
                 echo '</tbody>'; 
             echo '</table>'; 
        echo '</form>';  
    } else { 
        $sql = mysqli_query($mysqli, "UPDATE inspectores SET inspector='$_POST[inspector_change]', imgsrc='$_POST[imgsrc_change]', activo='$_POST[activo_change]' WHERE id=$_GET[id]"); 
        if ($sql) {
            echo "<span class='documenttitle'>";
            echo INSPECTOR_ACTUALIZADO; 
        echo "<span>";
        ?>
        
        <meta http-equiv="refresh" content="3; URL=?seccion=inspectores_admin&amp;aktion=change">
        
        <?php
        }
        ?>
     <?php
    } 
    ?>
    <?php
    } 


?>