<?php
/**
* Mod RECIBE Y BORRA los auditores
*(tabla auditores)
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
        $strSQL = "DELETE FROM auditores "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo AUDITORES_AUDITOR_BORRADO; 
?> 
<a href="?seccion=checkbox3_auditores"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
