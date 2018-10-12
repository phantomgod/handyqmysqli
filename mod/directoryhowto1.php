<?php
/**
* Mod DOCUMENTS TREE
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
<link type="text/css" rel="stylesheet" href="templates/thickbox.css"  media="screen" />
<script type="text/javascript" src="jscripts/windowopen.js"></script>
<script type="text/javascript" src="jscripts/thickbox.js"></script>
</head>
<body>

		<div align="center">
		<?php echo DOCUMENTOS_MAPA;?>
		</div>
	<?php
	

function Display_tree($root,$linkStyle)
{
        //Muestra las categorias de la tabla seccioneslinks  (construida con estructuras de árbol.)
        //Obtener los valores izq y der de la raiz - parametro.

		
		global $mysqli;
	 
		$result= mysqli_query($mysqli, "SELECT lft,rgt FROM secciones WHERE id=$root");
        $row=mysqli_fetch_array($result);
        //Empezar con una pila derecha vacia.
        $right=array();
        //Obtener todos los descendentes del nodo raiz.
        $result=mysqli_query($mysqli, "SELECT * FROM secciones WHERE lft BETWEEN ".$row["lft"]." AND ".$row["rgt"]." ORDER BY lft ASC");
        //Mostrar cada fila
    while ($row=mysqli_fetch_array($result)) {
        //Solo chequear la pila si hay alguno.
        extract($row);
        if (count($right)>0) {
            //chequear si debemos eliminar algun nodo de la pila.
            while ($right[count($right)-1]<$row["rgt"]) {
                array_pop($right);
            }
        }
        //Mostrar el titulo del nodo indentado.
        echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', count($right))."<a href='".$_SERVER['PHP_SELF']."?seccion=directoryhowto1&id=$id' class='$linkStyle'>$nombre</a><br>\n";
        //Añadir este nodo a la pila
        $right[]=$row["rgt"];
    }
}

  ?>

	<div id='leftChildLayer'>
		<?php display_tree(1, "linkStyle");?>
	</div>

	<div id='rightChildLayer'>
		<?php

if (isset($_GET["id"])) {

        $id=$_GET["id"];
        $query="SELECT * FROM secciones WHERE id=$id;";
        $res=mysqli_query($mysqli, $query);
        $row=mysqli_fetch_array($res,  MYSQLI_ASSOC);
        extract($row);
        $qDetail="SELECT e.*,s.nombre FROM enlaces e,secciones s
        WHERE s.id=e.seccionid AND s.lft BETWEEN $lft AND $rgt
        ORDER BY e.fecha DESC;";
        $resDetail=mysqli_query($mysqli, $qDetail);
    /*if (mysql_num_rows($resDetail)==0) {
          echo "<span class='textStyle'><br><br>No hay enlaces.</span>";
          //exit();
    }
        echo "<p name='top'>\n";*/

        echo DOCUMENTOS_ENCONTRADOS;
        echo "<span class='documenttitle'>$row[nombre]</span><br /><br />";
        echo "<table class = 'sortable'><caption>";
        if (mysqli_num_rows($resDetail)==0) {
          echo "<span class='documenttitle'>&nbsp;&nbsp;&nbsp;No hay enlaces en esta categoría.</span>";
          //exit();
        }
        echo "</caption><tbody>";

		echo "<th>" . DATOS . "</th>"; 
		echo '<th>'; 
		echo '<i class="fa fa-eye fa-2x"></i>'; 
		echo '</th>';
		echo '<th><i class="fa fa-edit fa-2x"></i></th>'; 
		echo '<th><i class="fa fa-download fa-2x"></i></th>'; 
		echo '<th><i class="fa fa-cloud-upload fa-2x"></i></th>';
		echo '</tr>'; 		
    while ($row = mysqli_fetch_array($resDetail,  MYSQLI_ASSOC)) {
         extract($row, EXTR_OVERWRITE);
         echo "<tr><td>";
            echo "Revisi&oacute;n: $comment\n";
          echo "<br />";
            echo "$fecha\n";
		 echo "<br />";
            echo "$clave1\n";
         echo "</td><td>";
          echo "<a href='$link?keepThis=true&TB_iframe=true&height=500&width=800' alt='".VISTAPREVIA."' title='".VISTAPREVIA."' class='thickbox'>$titulo</a>&nbsp;&nbsp;";
         echo "</td><td>";
          echo '<a href="?seccion=documentos_admin&amp;aktion=change_id&amp;id='.$row['id'].'" title="'.EDITAR.' - '.$row['titulo'].'">
          <i class="fa fa-pencil fa-2x" style="color:#9fff30;"></i></a>';
         echo "</td><td>";
          echo '&nbsp;<a href="' . $link . '" title="' . DESCARGAR . ' - '.$row['titulo'].'">
		  <i class="fa fa-download fa-2x" style="color:#9fff30;"></i></a>';
		 echo "</td><td>";
?>

		<a href="uploads/index.php" target="popup" onClick="window.open(this.href, this.target, 'width=660,height=515'); return false;" alt="Subir documento" title="Subir documento">
		<i class="fa fa-cloud-upload fa-2x" style="color:#9fff30;"></i></a>
<?php
         echo "</td>";
          //echo "<br>\n";

         //echo "<p class='textStyle'>$comment</p>\n";
         // echo "</p>\n";


    }    
	
	echo "</tr>";
         echo "</table>";
         /*if (mysql_num_rows($resDetail)==0) {
          echo "<span class='textStyle'><br><br>No hay enlaces en esta categoría.</span>";
          //exit();
        } */

          echo "<hr>\n";


} else {//No está establecido id en $_GET
        echo "<span class='textStyle'><br><br>Click para ver enlaces.</span><br><br>";
        echo "<a href='?seccion=listadocumentos' target='_parent'><span class='linkStyle'>Ir a la lista completa.</span></a>";

}

?>
	</div>
</body>
</html>