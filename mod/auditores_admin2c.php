<?php
/**
* Mod administrar auditores
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
 
	<?php echo AUDITORES_ADMINISTRAR_AUDITORES; ?>
	<a href="?seccion=auditores_admin2&amp;aktion=add"><?php echo AUDITORIAS_ANADIR_AUDITOR; ?></a>::
	<a href="?seccion=auditores_admin2c&amp;aktion=change"><?php echo AUDITORIAS_CAMBIAR_AUDITOR; ?></a>

	<br /><br />
<?php 
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}  
if ($aktion == "") { 
        echo 'Admin Area'; 
} 
 
/*if ($aktion == "add") { 
    if ((empty($_POST['auditor'])) AND (empty($_POST['activo']))) { 
        echo '<form action="" method="POST">'; 
          echo '<table class="print">'; 
            echo '<caption>'; 
                 echo AUDITORIAS_ANADIR_AUDITOR; 
            echo '</caption>'; 
            echo '<tbody>'; 
              echo '<tr>'; 
                echo '<th style width="25%">'; 
                   echo AUDITORIAS_AUDITOR; 
                echo '</th>'; 
                   echo '<td style width="75%"><input style="width:60%" name="auditor" value=""></td>'; 
              echo '</tr>';           
              /*
               ? >              
                    <tr> 
                         <td><input type="button" value="Subir imagen" onclick="Abrir_ventana('mod/ajaximage/index.php');"></td> 
                    </tr> 
             <? php */
             
              /*echo '<tr>'; 
                echo '<th>'; 
             /*?> 
                         <div id="help" onMouseOver="showdiv(event,'<?php echo IMAGEN_HELP ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'> 
               <?php 
                 
                        echo SELECCIONAR_IMAGEN; 
                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" />';                 
               echo '</th>'; 
                   echo '<td>';
            
              ?>

                                <form method='post' action='' onsubmit='alert(this.image.value)'>
                                <!--<a href='javascript:void(0);' onclick='$("#images").imageSelector("first");'>first</a>&nbsp;&nbsp;&nbsp;
                                <a href='javascript:void(0);' onclick='$("#images").imageSelector("prev")'>prev</a>&nbsp;&nbsp;&nbsp;-->


                                <?php
                                echo '<select name="imgsrc" id="images">'; 
                                                        $handle=opendir('mod/ajaximage/uploads/'); 
                                        while (false!==($file = readdir($handle))) {
                                            if ($file != "." && $file != "..") {
                                                       //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                                                        echo "<option value=\"mod/ajaximage/uploads/$file\">$file</option>\n";

                                            }
                                        }
                                                    closedir($handle); 
                                                    echo "</select>";
                                                    
                                ?>

                                <!--<a href='javascript:void(0);' onclick='$("#images").imageSelector("next")'>next</a>&nbsp;&nbsp;&nbsp;
                                <a href='javascript:void(0);' onclick='$("#images").imageSelector("last")'>last</a>-->
                                </form>
                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
                                <script type="text/javascript" src="./jscripts/image_selector.jquery.js" ></script>
                                <script type="text/javascript">
                                $("#images").imageSelector({
                                    //width of images
                                    width: 120,
                                    //height of images
                                    height: 156,
                                    //change image on click
                                    changeOnClick: true,
                                    //hide original input
                                    hideInput: false
                                });
                                </script>       
                       <?php
                   echo '</td>'; 
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
        echo '</form>'; 
    } else { 
    
    
        if (isset($_POST['id'])) {
            $id_Post = $_POST['id']; 
        }
        if (isset($_POST['auditor'])) {
            $auditor_Post = $_POST['auditor']; 
        }
        if (isset($_POST['imgsrc'])) {
            $imgsrc_Post = $_POST['imgsrc']; 
        }    
        if (isset($_POST['activo'])) {
            $activo_Post = $_POST['activo']; 
        }    

            $sql =    mysql_query("INSERT INTO auditores (id, auditor, imgsrc, activo) VALUES ('".$id_Post."', '".$auditor_Post."', '".$imgsrc_Post."', '".$activo_Post."')"); 
        if ($sql) {
            echo "<span class='documenttitle'>";
            echo AUDITOR_ANADIDO;
            echo "</span>"; 
        } else {        
            echo ERROR_ANADIR_REGISTRO; 
        }
    } 
} */
 
if ($aktion == "change") { 
    $sql = mysqli_query($mysqli, "SELECT * FROM auditores ORDER BY auditor DESC");         
    
        echo AUDITOR_ADVERTICE;    
        echo '<table class="sortable">'; 
        echo '<caption>'; 
               echo AUDITOR_LISTA; 
        echo '</caption>';
         echo '<tbody>';
           echo '<tr>';  
             echo '<th>Id</th>';
             echo '<th>'; 
                echo AUDITORIAS_AUDITOR; 
            echo '</th>'; 
            echo '<th>'; 
                echo AUDITOR_IMG; 
            echo '</th>';    
            echo '<th>'; 
                echo ESTADO; 
            echo '</th>';    
           echo '</tr>'; 
    while ($row = mysqli_fetch_row($sql)) { 
           echo "<tr>";
             echo "<td align=center>".$row['0']."</td>"; 
             echo "<td><a href='?seccion=auditores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
             echo "<td><a href='?seccion=auditores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'><img src='".$row['2']."' border='0' width='100px'></a></td>"; 
             echo "<td><a href='?seccion=auditores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
           echo "</tr>"; 
    } 
         echo "</tbody>"; 
        echo "</table>"; 
} 
if ($aktion == "change_id") { 
    if ((empty($_POST['auditor_change'])) AND (empty($_POST['imgsrc_change'])) AND (empty($_POST['activo_change']))) { 
        $id = (int)$_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM auditores WHERE id = $id "); 
        $data = mysqli_fetch_row($sql); 
   
        echo '<form action="" method="POST">'; 
        echo '<table class="print">'; 
           echo '<caption>'; 
                 echo AUDITORIAS_CAMBIAR_AUDITOR; 
           echo '</caption>'; 
           echo '<tbody>'; 
             echo '<tr>'; 
               echo '<th>'; 
                     echo AUDITORIAS_AUDITOR; 
               echo '</th>';  
                  //echo '<td><input class="inputlargo" name="auditor_change" value="'.$data[1].'"></td>'; 
				  echo '<td><input type="text" class="input-xxlarge" id="auditor_change" name="auditor_change" value="'.$data[1].'"></td>';
             echo '</tr>'; 
             echo '<tr>'; 
               echo '<th>';
                         ?> 


						<div align="left">
						<p class="pleft">
						<?php echo IMAGEN; ?>
						<a class="tooltip2" href="#"><strong> <i class="fa fa-question fa-2x" style="color:#00BCD4;"></i><span class="custom info"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo ATENCION; ?></em><?php echo IMAGEN_HELP; ?></span></a>		
						</p>
						</div>


						
						<?php
             
			echo '</th>';                
                  echo '<td>';                   

                    
                            ?>
                             <form method='post' action='' onsubmit='alert(this.image.value)'>
                                <!--<a href='javascript:void(0);' onclick='$("#images").imageSelector("first");'>first</a>&nbsp;&nbsp;&nbsp;
                                <a href='javascript:void(0);' onclick='$("#images").imageSelector("prev")'>prev</a>&nbsp;&nbsp;&nbsp;-->


                            <?php
                                echo '<select name="imgsrc_change" id="images">';
                                       echo '<option>'.$data[2].'</option>';                                
                                    $handle=opendir('mod/ajaximage/uploads/'); 
        while (false!==($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                echo "<option value=\"mod/ajaximage/uploads/$file\">$file</option>\n";

            }
        }
                                 closedir($handle); 
                                 echo "</select>";
                                                    
                            ?>

                                <!--<a href='javascript:void(0);' onclick='$("#images").imageSelector("next")'>next</a>&nbsp;&nbsp;&nbsp;
                               <a href='javascript:void(0);' onclick='$("#images").imageSelector("last")'>last</a>-->
                             </form>
                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
                                <script type="text/javascript" src="jscripts/image_selector.jquery.js" ></script>
                                <script type="text/javascript">
                                $("#images").imageSelector({
                                    //width of images
                                    width: 120,
                                    //height of images
                                    height: 156,
                                    //change image on click
                                    changeOnClick: true,
                                    //hide original input
                                    hideInput: false
                                });
                                </script> 

                               <!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'"><img src="images/help.png" align="left" /><span><?php echo DATABASE_HOST_HELP; ?></span></p>-->                        
                  
                    
                            <?php
                      
                  echo '</td><td><img src='.$data[2].' border="0">&nbsp;&nbsp;'.IMAGENACTUAL.'</td>';
               //echo '<td><input class="inputlargo" name="imgsrc_change" value="'.$data[2].'"></td><td><img src='.$data[2].' border="0"></td>';                
             echo '</tr>'; 
             echo '<tr>'; 
               echo '<th>'; 
                 echo ESTADO; 
               echo '</th>'; 
                   echo '<td>';  
                           
                                    echo '<select size="1" name="activo_change">'; 
                                       echo '<option>'.$data[3].'</option>'; 
                                       echo '<option  value="1">'.ACTIVAR.'</option>'; 
                                       echo '<option  value="0">'.DESACTIVAR.'</option>'; 
                                    echo '</select>';
                                    
                                    echo '&nbsp;1: &nbsp;'.ACTIVO.', &nbsp; 0: &nbsp; '.INACTIVO.'';

                   echo '</td>';           
             echo '</tr>'; 
                echo '<td colspan="2"><button type="submit" class="btn btn-warning">'.MODIFICAR.'</button></td>'; 
             echo '</tr>'; 
          echo '</tbody>'; 
         echo '</table>'; 
        echo '</form>';  
    } else { 
        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, 
                   "UPDATE auditores 
                   SET auditor='$_POST[auditor_change]', 
                   imgsrc='$_POST[imgsrc_change]', 
                   activo='$_POST[activo_change]' 
                   WHERE id = $id"
        ); 
        
        if ($sql) {
        
            $id = (int)$_GET['id'];
            $sql2 = mysqli_query($mysqli, "SELECT * FROM auditores WHERE id = $id ");
            $data = mysqli_fetch_row($sql2);
            echo AUDITORIAS_AUDITOR; echo '&nbsp;<span class="documenttitle">'.$data[1].'</span>&nbsp;'; echo ACTUALIZADO; echo '!';
                //echo AUDITORIA_ACTUALIZADA;
        }
        
        /*echo "<span class='documenttitle'>";
            echo AUDITORES_AUDITOR_ACTUALIZADO; 
        echo "<span>";*/
        
        ?>        
        <meta http-equiv="refresh" content="3; URL=?seccion=auditores_admin2c&amp;aktion=change">        
        <?php
    } 
} 
?>