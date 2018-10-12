<?php
include('../includes/configPDO.php');
$q = $_GET['q'];
if (isset($_GET['q']))
	{
		// Define Variable
		$q = $_GET ['q'];
		// We Will prepare SQL Query
			$STM = $dbh->prepare("DELETE FROM enlaces  WHERE id=$q");
		// bind paramenters, Named paramenters alaways start with colon(:)
				$STM-> bindParam(':id', $q);

			
		// For Executing prepared statement we will use below function
			$STM->execute();
		 
		echo '<meta http-equiv="refresh" content="1; URL=../footer.php?Documentosstatsdeleted=77083368">';	
		//header("location:../footer.php?Documentosstatsdeleted=77083368");

		//error_reporting(E_ALL ^ E_NOTICE);      			   
	}