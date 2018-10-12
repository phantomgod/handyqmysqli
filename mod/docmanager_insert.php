<?php
/**
* Mod INSERTAR documentos  en la BD
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

/*
1. Crear conexión a la Base de Datos
2. Seleccionar la Base de Datos a utilizar $seleccionar_bd = mysql_select_db("copt"); if (!$seleccionar_bd) { die("Fallo la selecciÃ³n de la Base de Datos: " . mysql_error()); }
3. Tomar los campos provenientes del Formulario
*/

$titulo = $_POST ['titulo'];
$autor = $_POST ['autor'];
$fecha = $_POST ['fecha'];
$contenido = $_POST ['contenido'];
// 4. Insertar campos en la Base de Datos (No inserto el id_empleado ya que se genera automaticamente)
$insertar = mysqli_query($mysqli,  "INSERT INTO `docmanager` (`id` ,`titulo`,`autor`,`fecha` ,`contenido`) VALUES (NULL ,'$titulo','$autor','$fecha','$contenido');" );
if (! $insertar) {
	die ( "Fallo en la insercion de registro en la Base de Datos: " . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) );
} else {
	echo 'Documento insertado en la BD';
}
?>