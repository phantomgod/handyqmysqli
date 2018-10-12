<?php   
/** 
* Mod RECIBE Y BORRA LAS AUDITORIAS AL SISTEMA (aisgc) 
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
require_once 'includes/mysql.php'; 
          
if ($_POST['delete']) { // from button name="delete" 
        $checkbox = $_POST['checkbox']; //from name="checkbox[]" 
        $countCheck = count($_POST['checkbox']);
        
    for ($i=0;$i<$countCheck;$i++) {    
            $del_id  = $checkbox[$i];            
            $sql = "DELETE from aisgc where id = $del_id";
            $result = $mysqli->query($sql) or die(mysqli_error($mysqli)); 
    }    
    if ($result) {    
             echo AUDITORIAS_AUDITORIA_BORRADA;
             echo "<br /><br /><a href=?seccion=borrar_aisgc>";
             echo GENERAL_BORRAR_OTRO;
             echo "</a>"; 
    } else {
             echo "Error:";
             echo GENERAL_DEBE_SELECCIONAR;
             echo "<button onclick='history.go(-1);'>";
             echo GENERAL_VOLVER;
             echo "</button>";
             echo mysql_error(); 
    }
}
?>