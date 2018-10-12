<?php
/**
* Mod RECIBE Y BORRA los documentos insertados
* en la BD directamente (tabla docmanager)
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

<html>
<head>
<title>Borrar documentos de calidad</title>
</head>
<body>
	<?php
	
	for($i = 0; $i < count ( $_POST ["chkDel"] ); $i ++) {
		if ($_POST ["chkDel"] [$i] != "") {
			$strSQL = "DELETE FROM admindocs ";
			$strSQL .= "WHERE linkid = '" . $_POST ["chkDel"] [$i] . "' ";
			$objQuery = mysqli_query($mysqli,  $strSQL );
		}
	}
	
	echo "Registro borrado.";
	
	?>
	<a href="../modulares/?mod=checkbox3_admindocs"><br> <br>Volver</a>
</body>
</html>
