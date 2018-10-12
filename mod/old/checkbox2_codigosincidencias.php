<?php
/**
* Mod RECIBE Y BORRA los códigos de incidencias
* de las inspecciones al servicio
*(tabla codigosincidencias)
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
        $strSQL = "DELETE FROM codigosincidencias "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}    
echo PROVEEDORES_CODIGOINCIDENCIA_BORRADO; 
echo "<br>"; 
?> 
<a href="?seccion=checkbox3_codigosincidencias"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
