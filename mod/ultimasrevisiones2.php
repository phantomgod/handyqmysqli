<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen" />

</head>
<body>


<?php 
include '../lang/spanish.lang.php';
echo DOCUMENTOS_ULTIMAS_MODIFICACIONES;?>


<?php
require_once("../includes/mysqli.php");

$_pagi_sql = "SELECT md.*\n"
    . "FROM modifdoc md\n"
    . "INNER JOIN\n"
    . " (SELECT titulo, MAX(fechamodificacion) AS MaxFechaModificacion\n"
    . " FROM modifdoc\n"
    . " GROUP BY titulo) groupedmd \n"
    . "ON md.titulo = groupedmd.titulo \n"
    . "AND md.fechamodificacion = groupedmd.MaxFechaModificacion";

//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 20;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
include("../includes/paginator.inc.php");

//Incluimos la barra de navegación
echo "$_pagi_navegacion";


    echo '<table class="table table-bordered">';
    echo '<tbody>';
    echo '<tr>';
    echo '<th style width=30%">' . NOMBRE . '</td>';
    echo '<th>' . ULTIMA_REVISION . '</th>';
	echo '<th style width=20%">' . FECHA . '</th>';
	echo '<th>' . MODIFICACION . '</th>';
    echo '</tr>';

//Leemos y escribimos los registros de la página actual
while ($row = mysqli_fetch_array($_pagi_result)) {

  				
    echo '<tr>';
    echo '<td style width="30%">' . $row["titulo"] . '</td>';
    echo '<td >'.$row["revision_num"].'</td>';
	echo '<td >'.$row["fechamodificacion"].'</td>';
	echo '<td >'.$row["modificacion"].'</td>';
    echo '</tr>';

}
    echo '</tbody>';
    echo '</table>';
//Incluimos la barra de navegación
echo "<p>$_pagi_navegacion</p>";
?>

</body>
</html>