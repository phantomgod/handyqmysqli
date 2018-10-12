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
  $sql = mysqli_query($mysqli, "SELECT * FROM extintores ORDER BY fecha DESC"); 
       
  echo '<table class="print">'; 
       echo "<caption>".EXTINTORES_LISTA."</caption>"; 
  echo '<thead>'; 
    echo EXTINTORES_THEAD_ADVERTICE;  
   echo '</thead>'; 
       echo '<tbody>';         
          echo '<tr>'; 
          echo '<th>'.FECHA.'</th>'; 
          echo '<th>'.EXTINTORES_CLIENTE.'</th>'; 
          echo '<th>'.EXTINTORES_NDESERIE.'</th>'; 
          echo '</tr>'; 
          while ($row = mysqli_fetch_row($sql)) { 
            echo "<tr>";   
            echo "<td><a href='?seccion=extintores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
            echo "<td><a href='?seccion=extintores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
            echo "<td><a href='?seccion=extintores_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a></td>"; 
            echo "</tr>"; 
          } 
   echo "</tbody>";  
  echo "</table>"; 
} 
if ($aktion == "print_id") { 
  if ((empty($_POST['auditor'])) AND (empty($_POST['activo']))) { 
    $id = $_GET['id']; 
    $sql = mysqli_query($mysqli, "SELECT * FROM extintores WHERE id = $_GET[id] "); 
    $data = mysqli_fetch_row($sql); 
   
     
    echo '<a href="?seccion=extintores_print&amp;aktion=print"><<<<&nbsp; Volver al listado de extintores</a> <br /><br />'; 
    echo '<table class="print">'; 
      echo '<caption>'.EXTINTORES_DETALLES.'</caption>'; 
      echo '<thead>'; 
        echo EXTINTORES_EXTINTOR; 
        echo ":&nbsp;<b />".$data[3]."</b>"; 
      echo '</thead>'; 
       echo '<tbody>';         
        echo '<tr>'; 
         echo '<th>'.FECHA.'</th>'; 
         echo "<td>".$data[1]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
         echo '<th>'.EXTINTORES_CLIENTE.'</th>'; 
         echo "<td>".$data[2]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
         echo '<th>'.EXTINTORES_NDESERIE.'</th>'; 
         echo "<td>".$data[3]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
         echo '<th>'.EXTINTORES_FECHA_FABRICACION.'</th>'; 
         echo "<td>".$data[4]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
         echo '<th>'.EXTINTORES_AGENTE_EXTINTOR.'</th>'; 
         echo "<td>".$data[5]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.EXTINTORES_EJECUCION.'</th>'; 
         echo "<td>".$data[6]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
         echo '<th>'.EXTINTORES_PROXIMA_EJECUCION.'</th>'; 
         echo "<td>".$data[7]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
         echo '<th>'.ESTADO.'</th>'; 
         echo "<td>".$data[8]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
         echo '<th>'.EXTINTORES_NUMEXTINTORES.'</th>'; 
         echo "<td>".$data[9]."</td>"; 
        echo '</tr>'; 
     echo '</tbody>';     
    echo '</table>'; 
  } 
} 
?>