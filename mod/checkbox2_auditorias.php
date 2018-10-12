<?php
/**
* Mod RECIBE Y BORRA LOS INFORMES de auditoría
*(tabla informeauditoria)
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
<meta http-equiv="refresh" content="3; URL=?seccion=checkbox3_auditorias">
<link type="text/css" rel="stylesheet" href="templates/style_checkbox2.css" media="screen" />
</head>
<body>
	<?php
	for($i = 0; $i < count ( $_POST ["chkDel"] ); $i ++) {
		if ($_POST ["chkDel"] [$i] != "") {
			$strSQL = "DELETE FROM informeauditoria ";
			$strSQL .= "WHERE id = '" . $_POST ["chkDel"] [$i] . "' ";
			$objQuery = mysqli_query($mysqli,  $strSQL );
		}
	}
	
	echo '<div id="alert">';
    echo '<a class="alert" href="#alert">' . AUDITORIAS_AUDITORIA_BORRADA . '</a>&nbsp;';
    echo '</div>';

		echo "<br /><br />";
	
	echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>';
	
	?>

</body>
</html>
