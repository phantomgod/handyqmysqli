<?php
$q=$_GET["q"];

require_once("../includes/mysql.php");
$db = new MySQL();
$sql="SELECT * FROM hojasdemejora WHERE id = '".$q."'";
$result = mysqli_query($mysqli, $sql);
while($row = mysqli_fetch_array($result)){

echo '<table class="print">';
echo "<tbody>";
echo "<tr>";
echo "<th>Id:</th><td>$row[id]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>AI:</th><td>$row[ai]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Hoja nº:</th><td>$row[numhoja]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Descripcion:</th><td>$row[descripcion]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Fecha:</th><td>$row[fecha]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Documentaci&oacute;n:</th><td>$row[docum]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Abri&oacute;:</th><td>$row[abiertopor]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>&Aacute;rea afectada:</th><td>$row[afectaa]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Causas:</th><td>$row[causas]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Acciones:</th><td>$row[acciones]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Plazo:</th><td>$row[plazo]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Cierres parciales:</th><td>$row[cierresparc]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Eficacia:</th><td>$row[eficacia]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Cierre:</th><td>$row[cerradofecha]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Desviaci&oacute;n:</th><td>$row[desviacion]</td>";
echo "</tr>";
echo "<tr>";
//echo "<th>Visible:</th>";
echo "</tr>";

}
echo "</tbody>";
echo "</table>";
?>