<?php
include("../includes/mysqli.php"); //include config file

//sanitize post value
if(isset($_POST["page"])){
	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
	$page_number = 1;
}

//get current starting point of records
$position = (($page_number-1) * $item_per_page);

//Limit our results within a specified range.
$results = mysqli_query($connecDB, "SELECT * FROM hojasdemejora ORDER BY id DESC LIMIT $position, $item_per_page");

//output results from database
echo '<ul class="page_result">';
while($row = mysqli_fetch_array($results))
{
	//echo '<li id="item_'.$row["id"].'">'.$row["id"].'. <span class="page_name">'.$row["ai"].'</span><span class="page_message">'.$row["descripcion"].'</span></li>';

	        echo '<table>';
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
                    echo "<th>Descripcion:</th><td><span class='page_message'>$row[descripcion]</span></td>";
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
                    echo "</tbody>";
                    echo "</table>";
}
echo '</ul>';
?>
<style>
    body {

    background: #171819;
    font-size: 16px;
    font-weight: 500;
    color: #ffffff;
    margin: 0px;
    padding: 20px 0px 0px 0px;
    line-height: 1.6;
}
</style>
</style>
