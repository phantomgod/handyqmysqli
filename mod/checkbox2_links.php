<?php
/**
* Mod RECIBE Y BORRA los documentos (tabla enlaces)
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
<meta http-equiv="refresh" content="2; URL=?seccion=checkbox3_links">
<link type="text/css" rel="stylesheet" href="templates/style_checkbox2.css" media="screen" />

</head>
<body>
	<?php


		for($i=0;$i<count($_POST["chkDel"]);$i++)
		{
			if ($_POST["chkDel"][$i] != "")
			{
			$strSQL = "DELETE FROM enlaces ";
			$strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' ";
			$objQuery = mysqli_query($mysqli, $strSQL);
			}
		}

	echo '<div id="alert">';
    echo '<a class="alert" href="#alert">' . DOCUMENTO_BORRADO . '</a>&nbsp;';
    echo '</div>';
		echo "<br /><br />";	
	echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>';

?>

</body>

</html>
