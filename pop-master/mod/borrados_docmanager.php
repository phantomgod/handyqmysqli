<?php

/**
* Mod RECIBE Y BORRA los documentos insertados directamente en la bd como texto
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
            $sql = "DELETE from docmanager where id = $del_id"; 
            $result = $mysqli->query($sql) or die(mysqli_error($mysqli)); 
    }
    if ($result) {    
             
             echo BORRADO_DOCMANAGER;
             echo "<button onclick='history.go(-1);'>";
             echo GENERAL_VOLVER;
             echo "</button>";
             echo "<br /><a href=?seccion=borrar_docmanager>Borrar otro documento</a>"; 
                
    } else { 
             echo "Error:";
             echo mysql_error(); 
    } 
} 
?>