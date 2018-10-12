<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO 8859-1">
<link rel="stylesheet" type="text/css" href="modulares/style.css">
<title>Listado de documentos de calidad</title>
</head>
<body>
<p class="pcenter">
<?php

$sql = "SELECT MAX(m.revision_num), m.revision_num, e.titulo, e.link FROM enlaces AS e
LEFT JOIN modifdoc AS m ON e.titulo=m.titulo GROUP BY e.titulo ASC";

 $result = mysqli_query($mysqli, $sql); 

//cantidad de resultados por página (opcional, por defecto 20)
//$_pagi_cuantos = 20;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
//include("includes/paginator.inc.php");

//Incluimos la barra de navegación
//echo "$_pagi_navegacion;"

echo "Imprimir la lista completa&nbsp;&nbsp;&nbsp;&nbsp;<a href='pdfs/listdocpdf.php'><img src='images/pdf.png' border='0'></a>";

//echo "<p align=right>".$_pagi_info."</p>";
//echo "<a href='pdfs/listdocpdf.php'><img src='images/pdf.png' border='0'></a>";

    echo '<table class="print">';
    echo '<tr>';
    echo '<td>Id:</td>';
    echo '<td>Nombre:</td>';
    echo '<td>Url:</td>';
    echo '<td>Comment:</td>';
    echo '</tr>';

//Leemos y escribimos los registros de la página actual
while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td align=left>'.$row['id'].'</td>';
    echo '<td align=left>'.$row['titulo'].'</td>';
    echo '<td align=center><a href=http://docs.google.com/viewer?url='.$row['link'].'>Descargar</a></td>';
    echo '<td align=left>'.$row['revision_num'].'</td>';
    echo '</tr>';

}
    echo '</table>';
//Incluimos la barra de navegación
echo "<p>$_pagi_navegacion</p>";
?>

</body>
</html>