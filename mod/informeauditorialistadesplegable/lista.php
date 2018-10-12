<?php
//require('conexion.php');
require_once ("../../includes/mysqli.php");

//seleccionamos solo el nombre de los clientes
        $sql = "SELECT ai FROM informeauditoria";
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);




?>
<select name="lista" onchange="pedirDatos()" >
<?php
while ($row = mysqli_fetch_array($sql)) {
    echo "<option value=\"".$row['ai']."\">".$row['ai']."</option> \n";
}
?>
</select>