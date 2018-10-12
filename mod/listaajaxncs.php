<?php 
//require('conexion.php'); 
 
require_once ("../includes/mysql.php"); 
$db = new MySQL(); 
 
//seleccionamos solo el nombre de los clientes 
$sql=mysqli_query($mysqli, "SELECT numhoja FROM hojasdemejora"); 
echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
 
?> 
<select name="lista" onchange="pedirDatos()" > 
<?php 
while ($row = mysqli_fetch_array($sql)) { 
    echo "<option value=\"".$row['numhoja']."\">".$row['numhoja']."</option> \n"; 
} 
?> 
</select> 
