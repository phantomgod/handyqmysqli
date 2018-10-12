<?php
/**
* Mod ADMINISTRAR seguimientos de objetivos
* (tareas)
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/?>
<html> 
<head> 
</head> 
<body> 
<table> 
 <caption><?php echo OBJETIVOS_ANOTAR_TAREA; ?></caption> 
 <thead><?php echo OBJETIVOS_THEAD;?></thead> 
  <tbody>  
    <tr> 
    <td> 
      <a href="?seccion=tareasobjetivos_admin&amp;aktion=add"><?php echo OBJETIVOS_ANADIR_TAREA; ?></a> :: 
      <a href="?seccion=tareasobjetivos_admin&amp;aktion=change"><?php echo OBJETIVOS_MODIFICAR_TAREA; ?></a> 
    </td> 
  </tr> 
 </tbody> 
</table> 
<br> 

<?php 
 
            /* requires the class 
            require "class.datepicker.php"; 
             
            // instantiate the object 
            $db=new datepicker(); 
             
            // uncomment the next line to have the calendar show up in german 
            $db->language = "spanish"; 
             
            $db->firstDayOfWeek = 1; 
 
            // set the format in which the date to be returned 
            $db->dateFormat = "Y-m-d"; */
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
 
if ($aktion == "add") { 
  if ((empty($_POST['codigoobjetivo'])) 
           AND (empty($_POST['accion'])) 
           AND (empty($_POST['responsable'])) 
		   AND (empty($_POST['fechalimite'])) 
		   AND (empty($_POST['fechaterminacion'])) 
		   AND (empty($_POST['observaciones']))) { 
    echo '<form action="" method="POST">'; 
       echo '<table class="print">';     
       echo '<caption></caption>';        
       echo '<thead>'; 
       echo OBJETIVOS_ANADIR_TAREA; 
       echo '</thead>';       
       echo '<tbody>'; 
        echo '<tr>'; 
          echo '<th>'; 
          echo CODIGO; 
          echo ':</th>'; 
           
          echo '<td>'; 
          echo ' <select name="codigoobjetivo">'; 
          echo '<option>...</option>'; 
          
                     $sql = "SELECT * FROM objetivosdatosgenerales"; 
                     $sql = mysqli_query($mysqli, $sql); 
                     if (!defined('CodigoObjetivo')) { 
                            define('CodigoObjetivo', 'CodigoObjetivo'); 
                        } 
                    if (!defined('NombreObjetivo')) { 
                            define('NombreObjetivo', 'NombreObjetivo'); 
                        } 
                     while ($row = mysqli_fetch_assoc($sql)) {                      
                     echo '<option value="'.$row[CodigoObjetivo].'">'.$row[CodigoObjetivo].'-'.$row[NombreObjetivo].'</option>'; 
                     } 
             
         echo '</select>';        
       echo ' </td>'; 
        
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th>'; 
          echo OBJETIVOS_ACCION; 
          echo ':</th>'; 
          echo '<td><input type="text" name="accion" value="" class="inputlargo"></td>'; 
        echo '</tr>'; 
         
        echo '<tr>'; 
          echo '<th>'; 
          echo RESPONSABLE; 
          echo ': </th>';           
          //echo '<td><input type="text" name="responsable" value="" class="inputlargo"></td>';           
          echo '<td>'; 
          echo ' <select name="responsable">'; 
          echo '<option>...</option>'; 
          
                     $sql = "SELECT * FROM members
								WHERE active='Yes'
								ORDER BY username ASC";
								$sql = mysqli_query($mysqli, $sql);
								if (!defined('username')) {
											 define('USERNAME', 'username');
								}
                     while ($row = mysqli_fetch_assoc($sql)) {                      
                     echo '<option value="'.$row[USERNAME].'">'.$row[USERNAME].'</option>'; 
                     }             
         echo '</select>';        
       echo ' </td>';           
        echo '</tr>'; 
         
         
         echo '<tr>'; 
          echo '<th>'; 
          echo LIMITE; 
          echo '</td>'; 
          echo '<td>';
         // echo '<td><input type="text" id="date2" name="fechalimite" value="" class="inputfecha">'; 
		 //<input type="button" value="::" onclick="<?php echo $db->show('date2')? >">
		 
        ?>         
				<input id='date1' class='datepicker' name='fechalimite' value='<?php echo SELECCIONAR_FECHA; ?>' />		 
        <?php 
          echo '</td>'; 
           
          echo '</tr>'; 
          echo '<tr>'; 
          echo '<th>'; 
          echo TERMINACION; 
          echo ':</th>'; 
		  echo '<td>'; 
           
         //echo '<td><input type="text" id="date" name="fechaterminacion" value="" class="inputfecha">'; 
		 //<input type="button" value="::" onclick="<?php echo $db->show('date') ? >"> 
         ?>         
          
		         <input id='date2' class='datepicker' name='fechaterminacion' value='<?php echo SELECCIONAR_FECHA; ?>' />	
                  
         <?php 
          echo '</td>';           
          echo '</tr>'; 
           
          echo '<tr>'; 
          echo '<th>'; 
          echo OBSERVACIONES; 
          echo ':</th>'; 
          echo '<td><textarea name="observaciones" cols="55" rows="9"></textarea></td>'; 
        echo '</tr>'; 
           
           
          echo '<tr>'; 
          echo '<td></td>'; 
          echo '<td align=left><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>'; 
        echo '</tr>'; 
      echo '</table>'; 
    echo '</form>'; 
  } else { 
    $codigoobjetivo_Post = $_POST['codigoobjetivo']; 
    $accion_Post = $_POST['accion']; 
    $responsable_Post = $_POST['responsable']; 
    $fechalimite_Post = $_POST['fechalimite'];     
    $fechaterminacion_Post = $_POST['fechaterminacion']; 
    $observaciones_Post = $_POST['observaciones']; 
    $sql =    mysqli_query($mysqli, "INSERT INTO objetivosseguimiento (codigoobjetivo, accion, responsable, fechalimite, fechaterminacion, observaciones) VALUES ('".$codigoobjetivo_Post."', '".$accion_Post."', '".$responsable_Post."', '".$fechalimite_Post."', '".$fechaterminacion_Post."', '".$observaciones_Post."')"); 
    if ($sql) echo OBJETIVOS_TAREA_ANADIDA; 
    else echo "Error al a�adir el registro!"; 
  } 
} 
 
if ($aktion == "change") { 
  $sql = mysqli_query($mysqli, "SELECT * FROM objetivosseguimiento ORDER BY codigoobjetivo DESC"); 
       
   echo '<table class="print">';       
       echo '<caption>'; 
       echo OBJETIVOS_MODIFICAR_TAREA; 
       include('acciones/acciones_objetivos.php'); 
       echo '</caption>';       
       echo '<tbody>'; 
          echo '<tr><th>'.CODIGO.'</th><th>'.ACCION.'</th></tr>'; 
          while ($row = mysqli_fetch_row($sql)) { 
            echo "<tr>";   
            echo "<td><a href='?seccion=tareasobjetivos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
            echo "<td><a href='?seccion=tareasobjetivos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
            echo "</tr>"; 
          } 
       echo '</tbody>';           
  echo "</table>"; 
} 
if ($aktion == "change_id") { 
  if ((empty($_POST['codigoobjetivo'])) AND (empty($_POST['accion'])) AND (empty($_POST['responsable'])) AND (empty($_POST['fechalimite'])) AND (empty($_POST['fechaterminacion'])) AND (empty($_POST['observaciones']))) { 
    $id = $_GET['id']; 
    $sql = mysqli_query($mysqli, "SELECT * FROM objetivosseguimiento WHERE id = $_GET[id] "); 
    $data = mysqli_fetch_row($sql); 
   
    echo '<form action="" method="POST">'; 
       echo '<table class="print">';       
       echo '<caption>'.OBJETIVOS_MODIFICAR_TAREA.'</caption>';       
       echo '<tbody>'; 
        
        echo '<tr>'; 
          echo '<th>'.CODIGO.': </th>';           
          echo '<td>'; 
           echo '<select name="codigoobjetivo">'; 
            echo '<option>'.$data[1].'</option>';         
                 $sql = "SELECT * FROM objetivosdatosgenerales"; 
                 $sql = mysqli_query($mysqli, $sql); 
                 if (!defined('CodigoObjetivo')) { 
                    define('CodigoObjetivo', 'CodigoObjetivo'); 
                        } 
                 if (!defined('NombreObjetivo')) { 
                    define('NombreObjetivo', 'NombreObjetivo'); 
                        } 
                 while ($row = mysqli_fetch_assoc($sql)) {                 
            echo '<option value="'.$row[CodigoObjetivo].'">'.$row[CodigoObjetivo].'-'.$row[NombreObjetivo].'</option>'; 
                 }         
           echo '</select>';        
           echo '</td>';            
        echo '</tr>'; 
         
         
        echo '<tr>'; 
          echo '<th>'.OBJETIVOS_ACCION.':</th>'; 
          echo '<td><input class="inputlargo" name="accion" value="'.$data[2].'"></td>'; 
        echo '</tr>'; 
         
        echo '<tr>'; 
          echo '<th>'.RESPONSABLE.':</th>'; 
           
           
          //echo '<td><input class="inputlargo" name="responsable" value="'.$data[3].'"></td>'; 
        echo '<td>'; 
           echo '<select name="responsable">'; 
            echo '<option>'.$data[3].'</option>';         
                 $sql = "SELECT * FROM members
							WHERE active='Yes'
							ORDER BY username ASC";
				$sql = mysqli_query($mysqli, $sql);
				if (!defined('username')) {
							 define('USERNAME', 'username');
				}
                 while ($row = mysqli_fetch_assoc($sql)) { 
            echo '<option value="'.$row[USERNAME].'">'.$row[USERNAME].'</option>'; 
                 }         
           echo '</select>';        
           echo '</td>'; 
         
         
         
        echo '</tr>'; 
         
         
        echo '<tr>'; 
          echo '<th>'.OBJETIVOS_FECHALIMITE_TAREA.': </th>'; 
          echo '<td><input class="inputfecha" id="date2" name="fechalimite" value="'.$data[4].'">'; 
           
          ?> 
         <input type="button" value="::" onclick="<?=$db->show('date2')?>">              
         <?php 
           
          echo '</td>';        
       echo '</tr>'; 
        
       echo '<tr>'; 
          echo '<th>'.OBJETIVOS_FECHATERMINACION_TAREA.': </th>'; 
          echo '<td><input class="inputfecha" id="date" name="fechaterminacion" value="'.$data[5].'">'; 
           
          ?> 
         <input type="button" value="::" onclick="<?php echo $db->show('date') ?>">              
         <?php 
           
          echo '</td>';        
       echo '</tr>'; 
        
        echo '<tr>'; 
          echo '<th>'.OBSERVACIONES.': </th>'; 
          echo '<td><textarea name="observaciones" cols="55" rows="9" value="'.$data[6].'"></textarea></td>'; 
         echo '</tr>'; 
          echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>'; 
        echo '</tr>'; 
       echo '</tbody>'; 
      echo '</table>'; 
    echo '</form>';  
  } else { 
    $sql = mysqli_query($mysqli, "UPDATE objetivosseguimiento SET codigoobjetivo='$_POST[codigoobjetivo]',accion='$_POST[accion]',responsable='$_POST[responsable]',fechalimite='$_POST[fechalimite]',fechaterminacion='$_POST[fechaterminacion]',observaciones='$_POST[observaciones]' WHERE id=$_GET[id]"); 
    if ($sql) echo OBJETIVOS_TAREA_MODIFICADA; 
  } 
} 
?>