<?php

/**
* Mod RECIBE Y BORRA las modificaciones a documentos
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
            
if ($_POST['delete']) {// from button name="delete" 
    
        $checkbox = $_POST['checkbox']; //from name="checkbox[]" 
        $countCheck = count($_POST['checkbox']);
        
    for ($i=0;$i<$countCheck;$i++) {
            $del_id  = $checkbox[$i]; 
            $sql = "DELETE from modifdoc where id = $del_id"; 
            $result = $mysqli->query($sql) or die(mysqli_error($mysqli)); 
    }
    if ($result) { 
    
             echo DOCUMENTOS_MODIFDOC_DELETED;
             echo "<button onclick='history.go(-1);'>";
             echo VOLVER;
             echo "</button>";
             //echo "Documento borrado! <br /><a href=?seccion=borrar_docmanager>Borrar otro documento</a>"; 
                
    } else { 
             echo "Error:";             
             echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
    } 
} 
?>