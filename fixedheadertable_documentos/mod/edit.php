<?php  
require '../../lang/spanish.lang.php';
require_once '../../includes/mysqli.php';
//header('Content-Type: text/html;charset=UTF-8');
 if (isset($_POST["id"])) 
	{
    $id = $_POST["id"];  
	}
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE enlaces SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
 if(mysqli_query($mysqli, $sql))  
 {  
      echo 'Documento actualizado!';  
 }