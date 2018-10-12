<?php
/**
* Mod buscar documentos
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

// Incluimos el archivo que habremos
// descomprimido y subido a la misma
// carpeta que el buscador
require 'buscador.inc.enlaces.php';
// Creamos el formulario con la caja
// de búsqueda y un botón, el form
// debe ser con metodo GET y la caja
// debe ser con name q
?>

<form method="GET"><input type="text" class="form-control" name="q" value="

<?php
if (isset($_GET['q'])) {
    echo urldecode($_GET['q']);
}
?>">

<!--<input type="submit" value="< ?php echo BUSCAR; ?>">-->

<button type="submit" class="btn btn-info"><?php echo BUSCAR_DOCUMENTOS; ?></button>&nbsp;&nbsp;<i class="fa fa-search fa-2x" style="color:#9fff30;"></i></button>
</form>

<?php
// Miramos si se ha enviado el formulario
if (isset($_GET['q'])) {
    // Conectamos a MySQL

    require "../includes/mysqli.php";

    // Este array contiene los campos de la
    // tabla que queremos comparar con la
    // palabra clave
    $aCampos = array ('titulo', 'link', 'comment');
    // Realizamos la búsqueda indicando la
    // tabla la base de datos donde
    // buscaremos
    buscar('enlaces', $aCampos, 10);
    // Mostramos los resultados usando los
    // campos titulo, texto e id de la
    // tabla papers y enlazando con la
    // direccion:
    // http://miweb.com/articulo.php?num=ID
    // donde ID es el campo id de la tabla
    mostrar('titulo', 'comment', 'link', '', 10);
    // Paginamos los resultados
    paginar(10);
}
?>

</body>
</html>