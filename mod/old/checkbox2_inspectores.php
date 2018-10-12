<?php
/**
* Mod RECIBE Y BORRA los inspectores
*(tabla inspectores)
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
<title>Borrar inspector</title> 
</head>    
<body>    
<?php 

for ($i=0;$i<count($_POST["chkDel"]);$i++) {    
    if ($_POST["chkDel"][$i] != "") {    
        $strSQL = "DELETE FROM inspectores "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo INSPECTORES_INSPECTOR_BORRADO; 
 
?> 
<a href="?seccion=checkbox3_inspectores"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
