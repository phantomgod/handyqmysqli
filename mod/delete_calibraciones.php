<?php
include('../includes/configPDO.php');
if (isset($_GET['q']))
	{
		// Define Variable
		$q = $_GET ['q'];
		// We Will prepare SQL Query
			$STM = $dbh->prepare("DELETE FROM calibraciones  WHERE id=$q");
		// bind paramenters, Named paramenters alaways start with colon(:)
				$STM-> bindParam(':id', $q);

			
		// For Executing prepared statement we will use below function
			$STM->execute();
		 
		//echo '<meta http-equiv="refresh" content="3; URL=AdminIndex.php">';	
		header("location:../footer.php?Calibracionesstatsdeleted=77083368");

		//error_reporting(E_ALL ^ E_NOTICE);      			   
	}

