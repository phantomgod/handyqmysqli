<?php
/**
* Mod borrar códigos de incidencias
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

		
			echo PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS;?> / 
			<a href="?seccion=codigosincidencias_admin&amp;aktion=add"><?php echo PROVEEDORES_ANADIR_CODIGOINCIDENCIA; ?></a> :: 
			<a href="?seccion=codigosincidencias_admin&amp;aktion=change"><?php echo PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA; ?></a>

	<br />
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
    if ((empty($_POST['codname']))) {
        echo '<form action="" method="POST">';
        echo '<table class="print">';
         echo '<caption>';
                 echo PROVEEDORES_ANADIR_CODIGOINCIDENCIA;
         echo '</caption>';
          echo '<tbody>';
            echo '<tr>';
              echo '<th style width="15%">';

				/*<div id="help"
				onMouseOver="showdiv(event,'<?php echo CODIGOSINCIDENCIAS_LASTID_HELP; ?>');"
				onMouseOut="hiddenDiv()" style='display: table;'>

                 <?php echo CODIGO; ?>
                 &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>*/
				 
				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . CODIGO . '<span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>
				' . AYUDA . '</em>' . CODIGOSINCIDENCIAS_LASTID_HELP . '</span></a></p>
				</div>';
				 
				 
              echo '</th>';
                echo '<td>';
                  $sql = "SELECT codname FROM codigosincidencias ORDER BY id DESC LIMIT 1";
                  $sql = mysqli_query($mysqli, $sql);
                  define('COD', 'codname');
        while ($row = mysqli_fetch_assoc($sql)) {
               echo ''.$row[COD].'';
        }
                 echo '&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<input class="inputfecha" name="cod" value=""></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th style width="15%">';
                 echo NOMBRE_INCIDENCIA;
              echo '</th>';
               echo '<td>';
                 echo '<input class="inputlargo" name="codname" value=""></td>';
            echo '</tr>';
               echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
            echo '</tr>';
          echo '<tbody>';
        echo '</table>';
        echo '</form>';
    } else {

        if (isset($_POST['cod'])) {
            $cod_Post = $_POST['cod'];
        }
        if (isset($_POST['codname'])) {
            $codname_Post = $_POST['codname'];
        }
        $sql =    mysqli_query($mysqli, "INSERT INTO codigosincidencias (cod,codname) VALUES ('".$cod_Post."','".$codname_Post."')");
        if ($sql) echo PROVEEDORES_CODIGO_ANADIDO;
        else echo ERROR_ANADIR_REGISTRO;
    }
}

if ($aktion == "change") {
    $sql = mysqli_query($mysqli, "SELECT * FROM codigosincidencias ORDER BY id ASC");

        echo '&emsp;&emsp;<span class="yellow">' . PROVEEDORES_LISTA_CODIGOS . '</span>';
        echo '<table id="myTable" class="sortable">';
         echo '<thead>';
          echo '<tr>';
           echo '<th style width="15%">';
            echo PROVEEDORES_INCIDENCIA_CODIGO;
           echo '</th>';
           echo '<th style width="15%">';
            echo NOMBRE_INCIDENCIA;
          echo '</th>';
          echo '</tr>';
		  echo '</thead>';
          echo '<tbody>';
		  
    while ($row = mysqli_fetch_row($sql)) {
        echo "<tr>";
        echo "<td><a href='?seccion=codigosincidencias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
        echo "<td><a href='?seccion=codigosincidencias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
        echo "</tr>";
    }
         echo "</tbody>";
       echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['codname_change']))) {
        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM codigosincidencias WHERE id = $id");
        $data = mysqli_fetch_row($sql);

        echo '<form action="" method="POST">';
          echo '<table class="print">';
            echo '<caption>';
                 echo PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA;
            echo '</caption>';
            echo '<tbody>';
              echo '<tr>';
                echo '<th style width="20%">';
                  echo PROVEEDORES_CODIGO_INCIDENCIA;
                echo '</th>';
                 echo '<td><input class="inputlargo" name="cod_change" value="'.$data[1].'"></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th style width="20%">';
                  echo NOMBRE_INCIDENCIA;
               echo '</th>';
                 echo '<td><input class="inputlargo" name="codname_change" value="'.$data[2].'"></td>';
             echo '</tr>';
             echo '<tr>';
                 echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
             echo '</tr>';
           echo '</tbody>';
          echo '</table>';
        echo '</form>';
    } else {
        $sql = mysqli_query($mysqli, "UPDATE codigosincidencias SET cod='$_POST[cod_change]', codname='$_POST[codname_change]' WHERE id=$_GET[id]");
        if ($sql) echo PROVEEDORES_CODIGO_ACTUALIZADO;

        ?>
		<meta http-equiv="refresh"
			content="3; URL=?seccion=codigosincidencias_admin&amp;aktion=change">
		<?php
    }
}
?>
</body>
</html>
