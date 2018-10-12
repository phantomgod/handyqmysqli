<?php
/**
* Mod RECIBE Y BORRA los cursos de formación
*(tabla cursos)
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
<title>Borrar inspecciones</title> 
</head>    
<body>    
<?php  
for ($i=0;$i<count($_POST["chkDel"]);$i++) {    
    if ($_POST["chkDel"][$i] != "") {    
        $strSQL = "DELETE FROM cursos "; 
        $strSQL .="WHERE id = '".$_POST["chkDel"][$i]."' "; 
        $objQuery = mysql_query($strSQL);    
    }    
}       
echo FORMACION_CURSO_BORRADO;    
?> 
<a href="?seccion=checkbox3_cursos"><br><br><?php echo VOLVER; ?></a> 
</body>    
</html> 
