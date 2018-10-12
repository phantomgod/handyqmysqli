<?php
//require('conexion.php');

require_once "../../includes/mysql.php";
$db = new MySQL();

//seleccionamos solo el nombre de los clientes
$sql=mysql_query("SELECT fecha FROM hojasdemejora");
echo mysql_error();

?>
<select name="lista" onchange="pedirDatos()" >
<?php
while ($row = mysql_fetch_array($sql)) {
    echo "<option value=\"".$row['fecha']."\">".$row['fecha']."</option> \n";
}
?>
</select>