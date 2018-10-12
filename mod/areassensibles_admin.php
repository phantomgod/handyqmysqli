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

	echo PROVEEDORES_ADMINISTRAR_AREASSENSIBLES;?> / 
	<a href="?seccion=areassensibles_admin&amp;aktion=add"><?php echo PROVEEDORES_ANADIR_AREASENSIBLE; ?></a> :: 
	<a href="?seccion=areassensibles_admin&amp;aktion=change"><?php echo PROVEEDORES_MODIFICAR_AREASENSIBLE; ?></a>

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
		  echo '<tr>';
              echo '<td colspan="2"><button type="submit" class="btn btn-info">'.ANADIR.'</button></td>';
          echo '</tr>';
         echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        $id_Post = $_POST['id'];
        $nombrearea_Post = $_POST['nombrearea'];
        $sql =    mysqli_query($mysqli, "INSERT INTO areassensibles (nombrearea) VALUES ('".$nombrearea_Post."')");

        if ($sql) {
            echo PROVEEDORES_AREASENSIBLE_ANADIDA;
        } else {
            echo ERROR_ANADIR_REGISTRO;
        }
    }
}

if ($aktion == "change") {
    $sql = mysqli_query($mysqli, "SELECT * FROM areassensibles ORDER BY nombrearea ASC");

    echo '&emsp;&emsp;<span class="yellow">' . PROVEEDORES_LISTA_AREASSENSIBLES . '</span>';
    echo '<table id="myTable" class="sortable">';
      echo '<thead>';
         echo '<tr>';
          echo '<th>ID</th>';
          echo '<th>';
             echo PROVEEDORES_AREASENSIBLE;
          echo '</th>';
        
		 echo '</tr>';
	   echo '</thead>';
	  echo '<tbody>';
    while ($row = mysqli_fetch_row($sql)) {
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
        $sql = mysqli_query($mysqli, "SELECT * FROM areassensibles WHERE id=$id ");
        $data = mysqli_fetch_row($sql);
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
             echo '<td colspan="2"><button type="submit" class="btn btn-warning">'.MODIFICAR.'</button></td>';
          echo '</tr>';
         echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
               $id = (int)$_GET['id'];
           $sql = mysqli_query($mysqli, "UPDATE areassensibles SET nombrearea='$_POST[nombrearea_change]' WHERE id=$id");
        if ($sql) {
            echo PROVEEDORES_AREASENSIBLE_ACTUALIZADA;
        }
    }
}
?>