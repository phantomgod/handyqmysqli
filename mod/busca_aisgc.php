<?php 
/** 
* Mod BUSCAR auditorías al sistema de calidad 
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
<link type="text/css" rel="stylesheet" href="aisgclistadesplegable/style.css" media="screen" />
<link rel="stylesheet" href="../templates/font-awesome-4.2.0/css/font-awesome.min.css">
</head> 
<body> 
<?php  
// Incluimos el archivo que habremos  
// descomprimido y subido a la misma  
// carpeta que el buscador  
require 'buscador.inc.aisgc.php';  
// Creamos el formulario con la caja  
// de búsqueda y un botón, el form  
// debe ser con metodo GET y la caja  
// debe ser con name q  
?> 
 
<form method="GET"><input type="text" name="q" value="

<?php
if (isset($_GET['q'])) { 
echo ($_GET['q']);
}
?>">

<!--<input type="submit" value="< ?php echo BUSCAR; ?>"><br>-->
<button type="submit" class="btn btn-warning">Buscar</button>
</form>

<?php 
// Miramos si se ha enviado el formulario  
if (isset($_GET['q'])) {  
    // Conectamos a MySQL  
 
    include "../includes/mysqli.php"; 

 
    // Este array contiene los campos de la 
    // tabla que queremos comparar con la  
    // palabra clave  
    $aCampos = array ('fecha', 'ai', 'vehiculos', 'obscal', 'obsalmac', 'obscompras', 'obsformac', 'obsdocum', 'obslegio'); 
    // Realizamos la búsqueda indicando la  
    // tabla la base de datos donde  
    // buscaremos  
    buscar('aisgc', $aCampos, 10); 
    // Mostramos los resultados usando los  
    // campos titulo, texto e id de la  
    // tabla papers y enlazando con la  
    // direccion:  
    // http://miweb.com/articulo.php?num=ID  
    // donde ID es el campo id de la tabla  
    mostrar('ai', 'obstrat', 'id', '../?seccion=aisgc_print&amp;aktion=print_id&amp;id=', 10); 
    // Paginamos los resultados  
    paginar(10);  
}  
?> 
</body> 
</html>