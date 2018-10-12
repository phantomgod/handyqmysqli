<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen" />
<?php
include('../includes/configPDO.php');
if (isset($_GET['q']))
	{
		// Define Variable
		$q = $_GET ['q'];
		// We Will prepare SQL Query
			$STM = $dbh->prepare("DELETE FROM proveedores  WHERE id=$q");
		// bind paramenters, Named paramenters alaways start with colon(:)
				$STM-> bindParam(':id', $q);

			
		// For Executing prepared statement we will use below function
			$STM->execute();
		 
		//echo '<meta http-equiv="refresh" content="3; URL=../?seccion=proveedores_admin&aktion=change">';	
		//header("location:../footer.php?Proveedoresstatsdeleted=77083368");
				echo "<div class='alert alert-error'>"; 
				echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				echo "<h4>Borrada</h4>"; 
				echo "El proveedor ha sido borrado del sistema."; 
				echo "</div>"; 
		//error_reporting(E_ALL ^ E_NOTICE);      			   
	}
