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
</head>    
<body>    
<?php 
for ($i=0;$i<count($_POST["chkDel"]);$i++) {    
    if ($_POST["chkDel"][$i] != "") {    
        $strSQL = "DELETE FROM areassensibles "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo PROVEEDORES_AREA_SENSIBLE_BORRADA; 
echo "<br>"; 
?> 
<a href="?seccion=checkbox3_areassensibles"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
