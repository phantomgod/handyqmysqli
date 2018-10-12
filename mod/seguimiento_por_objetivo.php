<?php 
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
 echo 'Admin Area'; 
} 
 
if ($aktion == "print") { 
 $sql = mysqli_query($mysqli, "SELECT * FROM servicios WHERE activo=1 ORDER BY id"); 
  echo 'Pinche sobre un servicio para mostrar el n&uacute;mero de inspecciones realizadas.';     
  echo '<table border="1" cellpadding="5" width="50%">'; 
  echo '<tr><td><font class="fontd">Id</font></td><td><font class="fontd">Servicio</font></td><td><font class="fontd">Estado</font></td>'; 
  /*Esta línea de abajo va junto al echo de arriba. Es el encabezado de la tabla, que no quiero que se muestre 
  <td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td>++<td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td><td>Servicio</td><td>Hora</td><td>Vigilante</td><td>Incidencia</td><td>Código</td></tr>';*/ 
  while ($row = mysqli_fetch_row($sql)) { 
    echo "<tr>";   
    echo "<td>".$row['0']."</td>"; 
    echo "<td><a href='?seccion=inspecciones_por_servicio&amp;aktion=print_id&amp;id=".$row['1']."'>".$row['1']."</a></td>"; 
    echo "<td><a href='inspecciones_por_servicio.php?aktion=print_id&amp;id=".$row['1']."'>".$row['2']."</a></td>"; 
    echo "</tr>"; 
  } 
  echo "</table>"; 
} 
if ($aktion == "print_id") { 
 
     
    $_pagi_sql = "SELECT *  
FROM `inspecciones`  
WHERE `servicio` LIKE '$_GET[id]' 
OR `servicio2` LIKE '$_GET[id]' 
OR `servicio3` LIKE '$_GET[id]' 
OR `servicio4` LIKE '$_GET[id]' 
OR `servicio5` LIKE '$_GET[id]' 
OR `servicio6` LIKE '$_GET[id]' 
OR `servicio7` LIKE '$_GET[id]'"; 
 
 
 
//WHERE       
//AND $id = $_GET[id] 
//ORDER BY insp.fecha ASC 
 
//AND serv.id =$_GET[id] 
//$id = $_GET["id"]; 
 
 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 40; 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
include("includes/paginator.inc.php"); 
echo "<table width='50%' border = '1'>"; 
echo "<tr>"; 
echo "<td align=center><font class=fontd><b>Id:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Inspector:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Fecha:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Servicio:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Servicio2:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Servicio3:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Servicio4:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Servicio5:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Servicio6:</b></font></td>"; 
echo "<td align=center><font class=fontd><b>Servicio7:</b></font></td>"; 
echo "</tr>"; 
 
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($_pagi_result)) { 
    echo "<tr>"; 
       echo "<td>".$row[0]."</td>"; 
    echo "<td>".$row[1]."</td>"; 
    echo "<td>".$row[2]."</td>"; 
    echo "<td>".$row[3]."</td>"; 
    echo "<td>".$row[8]."</td>"; 
    echo "<td>".$row[13]."</td>"; 
    echo "<td>".$row[18]."</td>"; 
    echo "<td>".$row[23]."</td>"; 
    echo "<td>".$row[28]."</td>"; 
    echo "<td>".$row[33]."</td>"; 
    echo "</tr>"; 
    echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
} 
} 
//Incluimos la barra de navegación 
echo"<p>".$_pagi_navegacion."</p>"; 
?> 
</body> 
</html>