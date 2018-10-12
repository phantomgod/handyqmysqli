<?php
/**
* Mod RECIBE Y BORRA las auditorías al sistema de calidad (tabla aisgc)
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
<meta http-equiv="refresh" content="2; URL=?seccion=checkbox3_aisgc">
<link type="text/css" rel="stylesheet" href="templates/style_checkbox2.css" media="screen" />

</head>
<body>
	<?php
	
	for($i = 0; $i < count ( $_POST ["chkDel"] ); $i ++) {
		if ($_POST ["chkDel"] [$i] != "") {
			$strSQL = "DELETE FROM aisgc ";
			$strSQL .= "WHERE id = '" . $_POST ["chkDel"] [$i] . "' ";
			$objQuery = mysqli_query($mysqli,  $strSQL );
		}
	}
	
	echo '<div id="alert">';
    echo '<a class="alert" href="#alert">' . AUDITORIAS_AUDITORIA_BORRADA . '</a>&nbsp;';
    echo '</div>';
	
	?>
<a href="?seccion=checkbox3_aisgc"><?php echo VOLVER; ?></a><br /><br /><br /><br /><br /><br />
</body>
</html>
