<?php 

/**
* Mod RECIBE Y BORRA los equipos de medida
* 
* PHP version 5
* 
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

require_once 'includes/mysql.php';  
 
if ($_POST['delete']) { // from button name="delete" 
    
        $checkbox = $_POST['checkbox']; //from name="checkbox[]" 
        $countCheck = count($_POST['checkbox']); 
         
    for ($i=0;$i<$countCheck;$i++) {     
            $del_id  = $checkbox[$i];             
            $sql = "DELETE from equiposdemedida where id = $del_id"; 
            $result = $mysqli->query($sql) or die(mysqli_error($mysqli));  
 
    } if ($result) {     
             echo EQUIPO_BORRADO; 
             echo "<br /><br /><a href=?seccion=borrar_equipos>";
             echo EQUIPOS_BORRAR_OTRO;
             echo "</a>";                 
    } else { 
            echo "Error:";
             echo DEBE_SELECCIONAR;
             echo "<button onclick='history.go(-1);'>";
             echo VOLVER;
             echo "</button>";
             echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
    } 
} 
?>