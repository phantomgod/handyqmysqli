<?php
//require('conexion.php');
require_once ("../../includes/mysqli.php");

//seleccionamos sólo el nombre de los clientes
        $sql = "SELECT CodigoObjetivo FROM objetivosdatosgenerales";
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);


?>
<select name="lista" onchange="pedirDatos()" >
<?php
while ($row = mysqli_fetch_array($sql)) {
    echo "<option value=\"".$row['CodigoObjetivo']."\">".$row['CodigoObjetivo']."</option> \n";
}
?>
</select>