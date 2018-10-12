<?php
/**
* Mod REORGANIZAR EL ÁRBOL DOCUMENTAL
* de proveedor
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
/**
 * Mod APROVE DOCUMENTS
 * de proveedor
 *
 * PHP version 5
 *
 * @category Mod
 * @package Handy-q
 * @author JJuan <javier@textblock.org>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link http://www.textblock.org
 *
 */
?>
<?php


function Get_Select_tree($root, $name, $compare = 0) {

		global $mysqli;
		
	// Muestra las categorias de la tabla seccioneslinks (construida con estructuras de árbol.)
	// Obtener los valores izq y der de la raiz - parametro.
	if ($root == 0) {
		@$result = mysqli_query($mysqli, "SELECT lft,rgt FROM secciones WHERE padre is null" );
	} else {
		$result = mysqli_query($mysqli, "SELECT lft,rgt FROM secciones WHERE id=$root" );
	}
	@$row = mysqli_fetch_array( $result );

	// Empezar con una pila derecha vacia.
	$right = array ();

	// Obtener todos los descendentes del nodo raiz.
	$result = mysqli_query($mysqli,  "SELECT * FROM secciones WHERE lft BETWEEN " . $row ["lft"] . " AND " . $row ["rgt"] . " ORDER BY lft ASC" );

	// Mostrar cada fila
	echo "<select name='$name'>\n";
	
	while ( $row = mysqli_fetch_array( $result ) ) {

		// Solo chequear la pila si hay alguno.
		if (count ( $right ) > 0) {

			// chequear si debemos eliminar algun nodo de la pila.
			while ( $right [count ( $right ) - 1] < $row ["rgt"] ) {
				array_pop ( $right );
			}
		}

		// Mostrar el titulo del nodo indentado. y seleccionado si coincide con compare
		if ($compare != 0 && $row ["id"] == $compare) {
			echo "<option value='" . $row ["id"] . "' selected>" . str_repeat ( '&nbsp;&nbsp;&nbsp;&nbsp;', count ( $right ) ) . $row ["nombre"] . "</option>\n";
		} else {
			echo "<option value='" . $row ["id"] . "'>" . str_repeat ( '&nbsp;&nbsp;&nbsp;&nbsp;', count ( $right ) ) . $row ["nombre"] . "</option>\n";
		}

		// Añadir este nodo a la pila
		$right [] = $row ["rgt"];
	}
	echo "</select>\n";
}
function Display_tree($root, $linkStyle) {

		global $mysqli;
	// Muestra las categorias de la tabla seccioneslinks (construida con estructuras de árbol.)
	// Obtener los valores izq y der de la raiz - parametro.
	$result = mysqli_query($mysqli,  "SELECT lft,rgt FROM secciones WHERE id=$root" );
	$row = mysqli_fetch_array( $result );

	// Empezar con una pila derecha vacia.
	$right = array ();

	// Obtener todos los descendentes del nodo raiz.
	@$result = mysqli_query($mysqli,  "SELECT * FROM secciones WHERE lft BETWEEN " . $row ["lft"] . " AND " . $row ["rgt"] . " ORDER BY lft ASC" );

	// Mostrar cada fila
	while ( @$row = mysqli_fetch_array( $result ) ) {

		// Solo chequear la pila si hay alguno.
		extract ( $row );

		if (count ( $right ) > 0) {
			// chequear si debemos eliminar algun nodo de la pila.
			while ( $right [count ( $right ) - 1] < $row ["rgt"] ) {
				array_pop ( $right );
			}
		}

		// Mostrar el titulo del nodo indentado.
		echo str_repeat ( '&nbsp;&nbsp;&nbsp;&nbsp;', count ( $right ) ) . "<a href='#' class='$linkStyle'>$nombre</a><br />\n";

		// Añadir este nodo a la pila
		$right [] = $row ["rgt"];
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="mod/aisgclistadesplegable/style.css" media="screen" />
<STYLE type="text/css">
body {
    background-color: transparent;
}
</style>
</head>
<body background="transparent">

	<?php

/*
 * require('../dbauth_test.php'); $dblink = mysql_connect($hostname,$username,$password) or die("Could not connect: " . mysql_error()); mysql_select_db($databasename, $dblink) or die ( mysql_error());
 */

?>
	<div id='contenedor'>
		<div id='leftChildLayer'>


			<!-- Formulario para añadir seccion -->

			<form action="directoryhowto6.php?accion=add" method="POST"
				style="border: 1px solid #E8E8E8; background-color: #F3C3F4; width: 300px; padding: 5px;">
				<span class="black">Secciones actuales.<br /></span>

				<?php
					get_select_tree ( 0, "tseccion" );
				?>
				<span class="black">Añadir sección después de selección.</span>
				<input name='tsectname' type='text' id='tsectname' size='30'
					maxlength='30'><br /> <br /> <input type='submit'
					value='Añadir despues de.'>
			</form>

			<!-- Formulario para añadir hijo a seccion -->

			<form action="directoryhowto6.php?accion=add2" method="POST"
				style="border: 1px solid #E8E8E8; background-color: #94E4F2; width: 300px; padding: 5px;">
				<span class='black'>Secciones actuales.</span>
				<?php
																get_select_tree ( 0, "tseccion" );
																?>
				<span class="black">Añadir sección como hijo de selección.</span>
				<input name='tsectname' type='text' id='tsectname' size='30'
					maxlength='30'><input type='submit'
					value='Añadir hijo'>
			</form>


			<!-- Formulario para camniar nombre de seccion -->

			<form action="directoryhowto6.php?accion=edit" method="POST"
				style="border: 1px solid #E8E8E8; background-color: #FBC500; width: 300px; padding: 5px;">
				<span class="black">Secciones actuales.</span><br />
				<?php
					get_select_tree ( 0, "tseccion" );
				?>
				<span class="black">Cambiar nombre de sección.</span>
				<input name='tsectname' type='text' id='tsectname' size='30'
					maxlength='30'><br /> <br /> <input type='submit'
					value='Cambiar nombre'>
			</form>

			<!-- Formulario para cambiar padre de seccion -->
			<form action="directoryhowto6.php?accion=editpadre" method="POST"
				style="border: 1px solid #E8E8E8; background-color: #D2D3D8; width: 300px; padding: 5px;">
				<span class="black">Cambio de Padre de sección.<br />
				Secciones seleccionada.</span><br />

				<?php
					get_select_tree ( 0, "tseccion" );
				?>
				<span class="black">Nuevo Padre.</span></span>
				<?php
					get_select_tree ( 0, "tseccion2" );
				?>
				<input type='submit' value='Cambiar padre'>
			</form>

			<!-- Formulario para reorganizar el árbol -->

			<form action="directoryhowto6.php?accion=reorganize" method="POST"
				style="border: 1px solid #E8E8E8; background-color: #DCFE00; width: 300px; padding: 5px;">
				<span class='black'>Reorganizar el árbol
					alfabéticamente.<br />
				</span> <input type='submit' value='Reorganizar árbol.'>
			</form>

			<!-- Formulario para elimiinar un nodo de seccion -->

			<form action="directoryhowto6.php?accion=delete" method="POST"
				style="border: 1px solid #E8E8E8; background-color: #F2FA00; width: 300px; padding: 5px;">
				<span class='black'>El proceso elimina un nodo, a excepcion
					de la Raiz.<br /> Si el nodo tiene hijos, estos pasan a apuntar
					al padre del nodo eliminado.<br />
				</span> 
				<span class='black'>Secciones actuales.<br /></span>
				<?php
					get_select_tree ( 0, "tseccion" );
				?>
				<input type='submit' value='Eliminar seccion'>
			</form>
			<br /><br /><br /><br />
		</div>
		<div id='rightChildLayer'>
			Arbol actual de secciones.
			<?php
				echo "<p>\n";
				display_tree ( 1, "linkStyle" );
				echo "</p>\n";
			?>
		</div>
	</div>
</body>
</html>