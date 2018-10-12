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
</head>    
<body>    
<?php   
for ($i=0;$i<count($_POST["chkDel"]);$i++) {    
    if ($_POST["chkDel"][$i] != "") {    
        $strSQL = "DELETE FROM informeauditoria "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo AUDITORIAS_AUDITORIA_BORRADA; 
   
?> 
<a href="?seccion=checkbox3_auditorias"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
