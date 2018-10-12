<?php
/**
* Mod RECIBE Y BORRA las no conformidades
*(tabla hojasdemejora)
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
        $strSQL = "DELETE FROM hojasdemejora "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo NCS_NC_BORRADA; 
echo "<br>"; 
?> 
<a href="?seccion=checkbox3_ncs"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
