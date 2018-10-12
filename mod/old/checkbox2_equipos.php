<?php
/**
* Mod RECIBE Y BORRA los equipos de calibración
*(tabla equiposdemedida)
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
        $strSQL = "DELETE FROM equiposdemedida "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo EQUIPO_BORRADO; 
   
?> 
<a href="?seccion=checkbox3_equipos"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
