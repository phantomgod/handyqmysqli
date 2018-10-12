<?php
//require('conexion.php');
require_once ("../../includes/mysqli.php");


//seleccionamos solo el nombre de los clientes
        $sql = "SELECT h.id, h.numhoja, a.ai, a.nombreauditoria
                  FROM hojasdemejora h, aisgc a
                  WHERE h.ai = a.ai
                  ORDER BY h.id DESC";
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);

?>
<select name="lista" onchange="pedirDatos()" >
<?php
while ($row = mysqli_fetch_array($sql)) {
    echo "<option value=\"".$row['numhoja']."\">".$row['numhoja']."-".$row['nombreauditoria']."</option> \n";
}
?>
</select>
