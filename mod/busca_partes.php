<?php
/**
* Mod BUSCAR partes de trabajo
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
<link type="text/css" rel="stylesheet" href="../templates/framestyle.css" media="screen" />
<link type="text/css" rel="stylesheet" href=".../templates/printstyle.css" media="print" />
<link rel="stylesheet" href="../templates/font-awesome-4.2.0/css/font-awesome.min.css">
</head>
<body>
<?php
// Incluimos el archivo que habremos
// descomprimido y subido a la misma
// carpeta que el buscador
include 'buscador.inc.partes.php';
// Creamos el formulario con la caja
// de búsqueda y un botón, el form
// debe ser con metodo GET y la caja
// debe ser con name q
?>

<form method="GET"><input type="text" name="q" value="

<?php
if (isset($_GET['q'])) {
echo urldecode($_GET['q']);
}
?>">

<!--<input type="submit" value="<?php echo BUSCAR; ?>"><br>-->
<button type="submit"><i class="fa fa-search fa-2x" style="color:Purple;"></i></button>
</form>

<?php
// Miramos si se ha enviado el formulario
if (isset($_GET['q'])) {
// Conectamos a MySQL
//$db=mysql_connect('localhost','root','root');
// Seleccionamos la base de datos
//mysql_select_db('copt',$db);

include("../includes/mysql.php");
$db = new MySQL();


// Este array contiene los campos de la
// tabla que queremos comparar con la
// palabra clave
$aCampos = array ('id','fecha','centrotrabajo','empleado','c1','c2','c3','c4','c5','c6','c7','c8','c9','c10','c11','c12','c13','c14','c15','c16','c17','c18','c19','c20','c21','c22','c23','c24');
// Realizamos la búsqueda indicando la
// tabla la base de datos donde
// buscaremos
buscar('partedetrabajo', $aCampos, 10);
// Mostramos los resultados usando los
// campos titulo, texto e id de la
// tabla papers y enlazando con la
// direccion:
// http://miweb.com/articulo.php?num=ID
// donde ID es el campo id de la tabla
mostrar('fecha', 'centrotrabajo', 'id', '../?seccion=partes_print&amp;aktion=print_id&amp;id=', 10);
// Paginamos los resultados
paginar(10);
}
?>
</body>
</html>
