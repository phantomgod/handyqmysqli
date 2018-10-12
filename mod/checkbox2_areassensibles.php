<?php
/**
* Mod RECIBE Y BORRA las las definiciones
* de áreas sensibles del sistema de calidad
*(tabla areassensibles)
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
<meta http-equiv="refresh" content="3; URL=?seccion=checkbox3_areassensibles">
<link type="text/css" rel="stylesheet" href="templates/style_checkbox2.css" media="screen" />
</head>
<body>
	<?php

	for($i=0;$i<count($_POST["chkDel"]);$i++)
		{
			if ($_POST["chkDel"][$i] != "")
			{
			$strSQL = "DELETE FROM areassensibles";
			$strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' ";
			$objQuery = mysqli_query($mysqli, $strSQL);
			}
		}
	
	
	echo '<div id="alert">';
    echo '<a class="alert" href="#alert">' . PROVEEDORES_AREA_SENSIBLE_BORRADA . '</a>&nbsp;';
    echo '</div>';

	echo "<br /><br />";
	
	echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>';	
	
	?>
	

</body>
</html>
