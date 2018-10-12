<?php 
$_pagi_sql = "SELECT * FROM extintores ORDER BY fecha"; 
 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 10; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
include("includes/paginator.inc.php"); 
 
//Incluimos la barra de navegación 
 
 
echo '<table class="print">'; 
      echo '<caption>'; 
          echo EXTINTORES_LISTA; 
      echo '</caption>'; 
       echo '<tbody>'; 
       echo '<tr>'; 
            echo "<td colspan=7>".$_pagi_navegacion."</td>"; 
       echo "</tr>";        
       echo '<tr>'; 
            echo '<th style width="10%">'.FECHA.':</th>'; 
            echo '<th style width="40%">'.EXTINTORES_CLIENTE.':</th>'; 
            echo '<th style width="20%">'.EXTINTORES_NDESERIE.':</th>'; 
            echo '<th style width="20%">'.EXTINTORES_AGENTE_EXTINTOR.':</th>'; 
            echo '<th style width="10%">'.EXTINTORES_NUMEXTINTORES.':</th>'; 
        echo "</tr>"; 
 
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($_pagi_result)) { 
    echo "<tr>"; 
    echo "<td style width=10%>$row[fecha]</td>"; 
    echo "<td style width=40%>$row[cliente]</td>"; 
    echo "<td style width=20%>$row[ndeserie]</td>"; 
    echo "<td style width=20%>$row[agente]</td>"; 
    echo "<td style width=10%>$row[numextintores]</td>"; 
    echo "</tr>"; 
} 
       echo '</tbody>'; 
     echo '</table>';        
?>