<?php
//*require('conexion.php');
require_once "../../includes/mysqli.php";
require "../../lang/spanish.lang.php";


//capturar el nº de la NC
$nom=$_POST['numhoja'];

//seleccionamos los datos del cliente por su nombre
        $sql = "SELECT * FROM hojasdemejora WHERE numhoja='".$nom."'";
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);


//mostrando el resultado

echo "<table class='print'>";
echo "<caption>Detalles de la NC</caption>";
echo "<thead></thead>";
echo "<tbody>";
echo "<tr>";
//echo "<td>Id:</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nº auditoría</td><td>".$row['ai']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nº NC</td><td><a href='index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['numhoja']."</a></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Descripción</td><td>".$row['descripcion']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Fecha</td><td>".$row['fecha']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Causas</td><td>".$row['causas']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Acciones</td><td>".$row['acciones']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Fecha de cierre</td><td>".$row['cerradofecha']."</td>";
echo "</tr>";
echo "<tr>";
//echo "<td>Visible:</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
?>