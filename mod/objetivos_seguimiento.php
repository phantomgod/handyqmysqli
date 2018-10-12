<html>
<head>
<title>Listado de documentos administrativos</title>
</head>
<body style="background-color:transparent ">
<p class="pcenter">
<?php
require_once("../includes/mysql.php");
$db = new MySQL();
$_pagi_sql = "SELECT s.*,g.CodigoObjetivo,g.Id FROM objetivosseguimiento as s
                INNER JOIN objetivosdatosgenerales as g ON s.codigoobjetivo=g.CodigoObjetivo";

//SELECT g.*,s.* from objetivosdatosgenerales as g
                        //INNER JOIN objetivosseguimiento as s on s.codigoobjetivo=g.CodigoObjetivo
//$sql = mysql_query("SELECT * FROM objetivosdatosgenerales ORDER BY Id DESC");

//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 10;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
include("../includes/paginator.inc.php");

    echo "<table width='70%' border = '1'>";
    echo "<tr>";
    echo "<td align=center><b><font color=#4698ca>Id:</font></b></td>";
    echo "<td align=center><b><font color=#4698ca>Cód:</font></b></td>";
    echo "<td align=center><b><font color=#4698ca>Acci&oacute;n:</font></b></td>";
    echo "<td align=center><b><font color=#4698ca>Responsable:</font></b></td>";
    echo "<td align=center><b><font color=#4698ca>Límite:</font></b></td>";
    echo "<td align=center><b><font color=#4698ca>Terminaci&oacute;n:</font></b></td>";
    echo "<td align=center><b><font color=#4698ca>Observaciones:</font></b></td>";
    echo "</tr>";

//Leemos y escribimos los registros de la página actual

while ($row = mysqli_fetch_array($_pagi_result)) {
    echo "<tr>";
    echo "<td>$row[Id]</td>";
    echo "<td><a href=objetivos_print.php?aktion=print_id&amp;id=".$row['Id'].">$row[codigoobjetivo]</a></td>";
    echo "<td>$row[accion]</td>";
    echo "<td>$row[responsable]</td>";
    echo "<td>$row[fechalimite]</td>";
    echo "<td>$row[fechaterminacion]</td>";
    echo "<td>$row[observaciones]</td>";
    echo "</tr>";
}

//Incluimos la barra de navegación
echo"<p>".$_pagi_navegacion."</p>";
?>
</body>
</html>