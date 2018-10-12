<?php
/**
* Mod RECIBE Y BORRA las modificaciones a los documentos
*(tabla modifdoc)
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
        $strSQL = "DELETE FROM modifdoc "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo DOCUMENTOS_MODIFDOC_DELETED; 
echo "<br>"; 
?> 
<a href="?seccion=checkbox3_modifdoc"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
