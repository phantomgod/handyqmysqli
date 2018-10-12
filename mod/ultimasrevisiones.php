<html>
<head>
<link type="text/css" rel="stylesheet" href="includes/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="includes/printstyle.css" media="print" />
</head>
<body>

<table class="print">
<caption><?php echo DOCUMENTOS_LISTA; ?></caption>
<tbody>
</tbody>
</table>

<p class="pcenter">
<?php
//require_once("includes/mysql.php");
//$db = new MySQL();
$_pagi_sql = "SELECT titulo, (
SELECT MAX( revision_num )
) AS revision
FROM modifdoc
GROUP BY titulo";

//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 20;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
include("includes/paginator.inc.php");

//Incluimos la barra de navegación
echo "$_pagi_navegacion";


    echo '<table class="print">';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>Nombre:</td>';
    echo '<td>Última revisión:</td>';
    echo '</tr>';

//Leemos y escribimos los registros de la pÃ¡gina actual
while ($row = mysqli_fetch_array($_pagi_result)) {
    echo '<tr>';
    echo '<td align=left>'.$row[titulo].'</td>';
    echo '<td align=left>'.$row[revision].'</td>';
    echo '</tr>';

}
    echo '</tbody>';
    echo '</table>';
//Incluimos la barra de navegación
echo "<p>$_pagi_navegacion</p>";
?>

</body>
</html>