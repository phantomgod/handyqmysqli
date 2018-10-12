<?php
include('../includes/configPDO.php');
if(isset($_POST["submit"])=="Borrar HNC")

{

// Define Variable



$id = $_POST [visitador];


// We Will prepare SQL Query

	$STM = $dbh->prepare("DELETE FROM visitadores  WHERE id=:visitador");

// bind paramenters, Named paramenters alaways start with colon(:)

		$STM-> bindParam(':visitador', $id);

	
// For Executing prepared statement we will use below function
    $STM->execute();
 
//echo '<meta http-equiv="refresh" content="3; URL=AdminIndex.php">';	
header("location:AdminIndex.php?FruitstatsHNCDeletit=77083368");

error_reporting(E_ALL ^ E_NOTICE);      			   
}
?> 