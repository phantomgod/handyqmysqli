<?php
/**
* Mod administrar no conformidades
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
?>


<table class='print'>
<caption><?php echo PROVEEDORES_ADMINISTRAR_AREASSENSIBLES;?></caption>
 <tbody>
   <tr>
    <td width="20%"><a href="?seccion=areassensibles_admin&amp;aktion=add"><?php echo PROVEEDORES_ANADIR_AREASENSIBLE; ?></a></td>
    <td><a href="?seccion=areassensibles_admin&amp;aktion=change"><?php echo PROVEEDORES_MODIFICAR_AREASENSIBLE; ?></a></td>
  </tr>
 </tbody>
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

if ($aktion == "add") {
    if ((empty($_POST['nombrearea']))) {
        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>';
              echo PROVEEDORES_ANADIR_AREASENSIBLE;
        echo '</caption>';
         echo '<tbody>';
          echo '<tr>';
            echo '<th style="width:15%">';
               echo PROVEEDORES_AREASENSIBLE;
            echo '</th>';
              echo '<td><input name="nombrearea" value=""></td>';
          echo '</tr>';
              echo '<td colspan="2"><input type="submit" value="'.GENERAL_ANADIR.'"></td>';
          echo '</tr>';
         echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        $id_Post = $_POST['id'];
        $nombrearea_Post = $_POST['nombrearea'];
        $sql =    mysql_query("INSERT INTO areassensibles (nombrearea) VALUES ('".$nombrearea_Post."')");

        if ($sql) {
            echo PROVEEDORES_AREASENSIBLE_ANADIDA;
        } else {
            echo GENERAL_ERROR_ANADIR_REGISTRO;
        }
    }
}

if ($aktion == "change") {
    $sql = mysql_query("SELECT * FROM areassensibles ORDER BY nombrearea ASC");

    echo PROVEEDORES_AREASSENSIBLES_ADVERTICE;
    echo '<table class="sortable">';
      echo '<caption>';
             echo PROVEEDORES_LISTA_AREASSENSIBLES;
      echo '</caption>';
      echo '<tbody>';
         echo '<tr>';
          echo '<th>ID</th>';
          echo '<th>';
             echo PROVEEDORES_AREASENSIBLE;
          echo '</th>';
         echo '</tr>';
    while ($row = mysql_fetch_row($sql)) {
         echo "<tr>";
           echo "<td><a href='?seccion=areassensibles_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['0']."</a></td>";
           echo "<td><a href='?seccion=areassensibles_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
         echo "</tr>";
    }
     echo "</tbody>";
    echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['nombrearea_change']))) {
        $id = (int)$_GET['id'];
        $sql = mysql_query("SELECT * FROM areassensibles WHERE id=$id ");
        $data = mysql_fetch_row($sql);
        echo '<form action="" method="POST">';
        echo '<table class="print">';
          echo '<caption>';
            echo PROVEEDORES_MODIFICAR_AREASENSIBLE;
        echo '</caption>';
         echo '<tbody>';
          echo '<tr>';
           echo '<th>';
              echo PROVEEDORES_AREASENSIBLE;
            echo '</th>';
            echo '<td><input class="inputs" name="nombrearea_change" value="'.$data[1].'"></td>';
          echo '</tr>';
          echo '<tr>';
             echo '<td colspan="2"><input type="submit" value="'.GENERAL_MODIFICAR.'"></td>';
          echo '</tr>';
         echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
               $id = (int)$_GET['id'];
           $sql = mysql_query("UPDATE areassensibles SET nombrearea='$_POST[nombrearea_change]' WHERE id=$id");
        if ($sql) {
            echo PROVEEDORES_AREASENSIBLE_ACTUALIZADA;
        }
    }
}
?>