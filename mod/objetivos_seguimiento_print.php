<html>
<head>
<link rel="stylesheet" type="text/css" href="/modulares/style.css">
</head>
<body>
<body style="background-color:transparent ">
<p class="pcenter">

<?php

require_once("../includes/mysql.php");
$db = new MySQL();
?>
<p class="pcenter">
<table>
  <tr>
    <td>
      <a href="?aktion=print">Imprimir objetivo</a>

    </td>
  </tr>
</table>
<br>
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
  //$sql = mysql_query("SELECT * FROM objetivosdatosgenerales ORDER BY Id DESC");

  $sql = mysqli_query($mysqli, "SELECT g.*,s.* from objetivosdatosgenerales as g
                        INNER JOIN objetivosseguimiento as s on s.codigoobjetivo=g.CodigoObjetivo");

  echo '<table border="1" cellpadding="5">';
  echo '<tr><td>Id</td><td>C&oacutedigo</td><td>Nombre</td><td>Año</td><td>Origen</td><td>Detecci&oacuten</td><td>Causas</td><td>Recursos</td><td>Indicador</td><td>Fuente</td><td>Frecuencia</td><td>Plazo</td><td>Ejecuta</td><td>Persigue</td><td>VºBº</td><td>Resultado</td><td>Fecha</td></tr>';
  while ($row = mysqli_fetch_row($sql)) {
    echo "<tr>";
    echo "<td>".$row['0']."</td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['5']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['6']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['8']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['9']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['10']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['11']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['12']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['13']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['14']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['15']."</a></td>";
    echo "<td><a href='?aktion=print_id&amp;id=".$row['0']."'>".$row['16']."</a></td>";
    echo "</tr>";
  }
  echo "</table>";
}
if ($aktion == "print_id") {
    $id = $_GET['id'];
    $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales WHERE id = $_GET[id] ");
    $data = mysqli_fetch_row($sql);

      echo '<table border="0" cellpadding="0" cellspacing="2" width="100%">';
        echo '<tr>';
          echo '<td width="10%">Código: </td>';
          echo '<td>'.$data[1].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Nombre: </td>';
          echo '<td>'.$data[2].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Año: </td>';
          echo '<td>'.$data[3].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Origen: </td>';
            echo '<td>'.$data[4].'</td>';
            echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Detecci&oacuten: </td>';
          echo '<td>'.$data[5].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Causas: </td>';
            echo '<td>'.$data[6].'</td>';
            echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Recursos: </td>';
          echo '<td>'.$data[7].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Indicador: </td>';
          echo '<td>'.$data[8].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Fuente: </td>';
          echo '<td>'.$data[9].'</td>';
          echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Frecuencia: </td>';
          echo '<td>'.$data[10].'</td>';
          echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Plazo: </td>';
          echo '<td>'.$data[11].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Ejecuta: </td>';
          echo '<td>'.$data[12].'</td>';
          echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Persigue: </td>';
          echo '<td>'.$data[13].'</td>';
          echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">VºBº: </td>';
          echo '<td>'.$data[14].'</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Resultado: </td>';
          echo '<td>'.$data[15].'</td>';
          echo '</tr>';
        echo '<tr>';
          echo '<td width="10%">Fecha: </td>';
          echo '<td>'.$data[16].'</td>';
        echo '</tr>';
      echo '</table>';
  }

?>
SEGUIMIENTO
<?php

//$sql2 = mysql_query("SELECT * FROM objetivosseguimiento ORDER BY Id DESC");
$sql = mysqli_query($mysqli, "SELECT g.CodigoObjetivo,s.* from objetivosdatosgenerales as g
                        INNER JOIN objetivosseguimiento as s on s.codigoobjetivo=g.CodigoObjetivo");

  echo '<table border="1" cellpadding="5">';
  echo '<tr><td>Id</td><td>C&oacutedigo</td><td>Acción</td><td>Responsable</td><td>Límite</td><td>Terminaci&oacute;n</td><td>Observaciones</td></tr>';
  while ($row = mysqli_fetch_array($sql)) {
    echo "<tr>";
      echo "<td>".$row['Id']."</td>";
      echo "<td>".$row['codigoobjetivo']."</td>";
      echo "<td>".$row['accion']."</td>";
      echo "<td>".$row['responsable']."</td>";
      echo "<td>".$row['fechalimite']."</td>";
      echo "<td>".$row['fechaterminacion']."</td>";
      echo "<td>".$row['observaciones']."</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
</body>
</html>