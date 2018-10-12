<?php  
require_once '../../includes/mysqli.php';

$id = (isset ($_POST ["id"])) ? $_POST ["id"] : '';	
 $sql = "DELETE FROM enlaces WHERE id = '".$id."'";  
 if(mysqli_query($mysqli, $sql))  
 {  
      echo 'Dato borrado!';  
 }