<?php 
//require('conexion.php'); 
//capturar el nº de la NC 
$nom=$_POST['numhoja']; 
//seleccionamos los datos del cliente por su nombre 
$sql=mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE numhoja='".$nom."'"); 
$row = mysqli_fetch_array($sql); 
echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
 
//mostrando el resultado 
 
/*echo     "<p><strong>Auditoría</strong></p><p>".$row['ai']."</p>"; 
echo     "<p><strong>Hoja Nº</strong></p><p>".$row['numhoja']."</p>"; 
echo     "<p><strong>Descripción</strong></p><p>".$row['descripcion']."</p>";*/ 
 
 
 
echo "<table class='print'>"; 
echo "<caption>Detalles de la NC</caption>"; 
echo "<thead></thead>"; 
echo "<tbody>"; 
echo "<tr>"; 
//echo "<td>Id:</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<td>Nº auditoría</td><td>".$row['ai']."</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<td>Nº NC</td><td><a href='index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['numhoja']."</a></td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<td>Descripción</td><td>".$row['descripcion']."</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<td>Fecha</td><td>".$row['fecha']."</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<td>Causas</td><td>".$row['causas']."</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<td>Acciones</td><td>".$row['acciones']."</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<td>Fecha de cierre</td><td>".$row['cerradofecha']."</td>"; 
echo "</tr>"; 
echo "<tr>"; 
//echo "<td>Visible:</td>"; 
echo "</tr>"; 
echo "</tbody>"; 
echo "</table>"; 
?>