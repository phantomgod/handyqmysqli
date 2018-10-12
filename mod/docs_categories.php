<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO 8859-1">
<link rel="stylesheet" type="text/css" href="/modulares/style.css">
<title>Listado de docs por categor&iacute;a</title>
</head>
<body style="background-color:525252 ">

<?php
require_once("../includes/mysql.php");
$db = new MySQL();

$_pagi_sql = "SELECT categories.categoryID, categories.name, docs.docID, docs.docname, docs.description FROM docs_categories as categories
                INNER JOIN docs as docs ON categories.categoryID=docs.categoryID ORDER BY name";

//SELECT g.*,s.* from objetivosdatosgenerales as g
                        //INNER JOIN objetivosseguimiento as s on s.codigoobjetivo=g.CodigoObjetivo
//$sql = mysql_query("SELECT * FROM objetivosdatosgenerales ORDER BY Id DESC");

//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 10;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
include("../includes/paginator.inc.php");

    echo "<table width='80%' border = '1'>";
    echo "<tr>";
    echo "<td align=center><b><font color=#4698ca>Cat.ID</font></b></td>";
      echo "<td align=center><b><font color=#4698ca>Categoría:</font></b></td>";
      echo "<td align=center><b><font color=#4698ca>doc.ID</font></b></td>";
      echo "<td align=center><b><font color=#4698ca>Url del documento:</font></b></td>";
    echo "</tr>";

//Leemos y escribimos los registros de la página actual

while ($row = mysqli_fetch_array($_pagi_result)) {

    echo "<tr>";
    echo "<td align=center>$row[categoryID]</td>";
    echo "<td>$row[name]</td>";
    echo "<td align=center>$row[docID]</td>";
    echo "<td><a href=".$row['description'].">$row[docname]</a></td>";
    echo "</tr>";
}

//Incluimos la barra de navegación
echo"<p>".$_pagi_navegacion."</p>";
?>
</body>
</html>