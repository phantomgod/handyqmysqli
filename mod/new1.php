<?php

require_once ("../includes/mysql.php");
$db = new MySQL();

$sql = "select * from trabajadores "; //esta es una tabla q contiene un listado de titulos principales
$res=mysqli_query($mysqli, $sql) or die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // $conn es la instancia a la conexion previa a la BD para mas informacion AQUI
$i=0;
while($row = mysqli_fetch_assoc($res)){
$title[$i]=$row["trabajador"];?>
<label><?php echo $title[$i];?></label> <br  />
<?php $sqlx = "select * from trabajadores";
$resx=mysqli_query($mysqli, $sqlx) or die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$j=0;
while($rowx = mysqli_fetch_assoc($resx)){
$item[$j]=$rowx["trabajador"];
?>
<input type=”checkbox” name=”item[]” value=”<?php echo $item[$j];?>” />
<!-- asignamos el codigo de item-->
<?php echo $item[$j];?><br  />
<!-- imprimimos el nombre del item-->
<?php $j++;
}
((mysqli_free_result($resx) || (is_object($resx) && (get_class($resx) == "mysqli_result"))) ? true : false);  ?>
<!-- // se libera la consulta-->
<?php $i++;
}
((mysqli_free_result($res) || (is_object($res) && (get_class($res) == "mysqli_result"))) ? true : false); ?>

