<?php
/**
* Mod ADMINISTRAR servicios
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM servicios ) s');

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº servicios activos: ';
	echo $row['0'];
	echo '</div>';
}

if($result === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº servicios activos: ';
	echo $row['0'];
	echo '</div>';
}

//--------------------------fin contar registros


	echo SERVICIO_ADMINISTRAR_SERVICIOS; 
	
	
	
	
	?>
	
	</caption> / 
	<a href="?seccion=servicios_admin&amp;aktion=add"><?php echo SERVICIO_ANADIR_SERVICIO; ?></a> :: 
	<a href="?seccion=servicios_admin&amp;aktion=change"><?php echo SERVICIO_MODIFICAR_SERVICIO; ?></a>

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
    if ((empty($_POST['servicio']))
        AND (empty($_POST['activo']))
    ) {
        echo '<div class="text-center">' . SERVICIO_ANADIR_SERVICIO . '</div>';
		echo '<br /><br /><br />';
		echo '<form action="" method="POST">';
            echo '<table class="print">';
           echo '<tbody>';
            echo '<tr>';
			echo '<th>' . TIPO . '</th>';
			
			
			
			echo '<td>';
                echo '<select name="tiposervicio">';
                    echo '<option>Clase... (seleccionar)</option>';
                     $sql = "SELECT * FROM servicios WHERE activo=1 GROUP BY tiposervicio";
                     $sql = mysqli_query($mysqli, $sql);
        if (!defined('tiposervicio')) {
            define('TIPOSERVICIO', 'tiposervicio');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
                     echo '<option value="'.$row[TIPOSERVICIO].'">'.$row[TIPOSERVICIO].'</option>';
        }
               echo '</select>';
               echo '</td>';
			
			
			echo '</tr>';
			echo '<tr>';
              echo '<th width="10%">';
				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . SERVICIO_SERVICIO . '<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . SERVICIOS_HELP . '</span></a></p>
				</div>';
               echo '</th>';
              echo '<td colspan=2>';
				echo '<input type="text" class="form-control input-xxlarge" id="servicio" name="servicio" value="">';
               $sql2 = "SELECT * FROM servicios
                       WHERE activo = 1
                       ORDER BY id DESC LIMIT 1";
             $sql2 = mysqli_query($mysqli, $sql2);
        if (!defined('servicio')) {
                     define('SERVICIO', 'servicio');
        }
        while ($row = mysqli_fetch_assoc($sql2)) {
                 echo ' &nbsp;El último fue: ' . $row[SERVICIO] . '';
        }
			  
              echo '</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>' . ESTADO . '</th>';
			  
			  echo '<td>';  
				echo '<select name="activo">';
                echo '<option selected>1</option>';
                echo '<option>1</option>';
                echo '<option>0</option>';
                echo '</select>    ';
				echo ' &nbsp;1: '.ACTIVO.', 0: '.INACTIVO.'</td>';

			
            echo '</tr>';
              echo '<td align=left><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
            echo '</tr>';
           echo '</tbody>';
          echo '</table>';
        echo '</form>';
    } else {
        $servicio_Post = $_POST['servicio'];
        $activo_Post = $_POST['activo'];
		 $tiposervicio_Post = $_POST['tiposervicio'];
        //$urlquery_Post = $_POST['urlquery'];
        $sql =    mysqli_query($mysqli, "INSERT INTO servicios (servicio, activo, tiposervicio) VALUES ('".$servicio_Post."', '".$activo_Post."', '".$tiposervicio_Post."')");
        if ($sql) {
             echo SERVICIO_ANADIDO;
        } else {
            echo SERVICIO_ERROR_ANADIR;
        }
    }
}

if ($aktion == "change") {
      $sql = mysqli_query($mysqli, "SELECT * FROM servicios WHERE activo=1 ORDER BY id ASC");

      echo SERVICIO_MODIFY_THEAD;
      echo '<table class="sortable">';
           echo '<caption>'.SERVICIO_LISTA_SERVICIOS.'';
           echo '</caption>';
           echo '<tbody>';
              echo '<tr><th>Id</th><th>'.SERVICIO_SERVICIO.'</th><th>'.TIPO.'</th><th>'.ESTADO.'</th></tr>';
        while ($row = mysqli_fetch_row($sql)) {
                echo "<tr>";
                echo "<td>".$row['0']."</td>";
                echo "<td><a href='?seccion=servicios_admin&amp;aktion=change_id&id=".$row['0']."'>".$row['1']."</a></td>";
                echo "<td><a href='?seccion=servicios_admin&amp;aktion=change_id&id=".$row['0']."'>".$row['3']."</a></td>";
                echo "<td><a href='?seccion=servicios_admin&amp;aktion=change_id&id=".$row['0']."'>".$row['2']."</a></td>";
                echo "</tr>";
        }
          echo '</tbody>';
      echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['id_change']))
        AND (empty($_POST['servicio_change']))
        AND (empty($_POST['activo_change']))
        AND (empty($_POST['urlquery_change']))
    ) {
        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM servicios WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

        echo '<form action="" method="POST">';
          echo '<table class="print">';
          echo '<caption>';
              echo SERVICIO_MODIFICAR_SERVICIO;
          echo '</caption>';
		  echo '<tbody>';
            echo '<tr>';
              echo '<th style width="10%">'.SERVICIO_SERVICIO.': </th>';
			  echo '<td><input type="text" class="form-control input-xlarge" id="servicio_change" name="servicio_change" value="'.$data[1].'"></td>';
            echo '</tr>';
			echo '<tr>';
              echo '<th style width="10%">'.TIPO.': </th>';
			  
			  //echo '<td><input type="text" class="form-control input-xlarge" id="tiposervicio_change" name="tiposervicio_change" value="'.$data[3].'"></td>';
            
			  echo '<td>';
                echo '<select name="tiposervicio_change">';
                    echo '<option>'.$data[3].'</option>';
                     $sql = "SELECT * FROM servicios GROUP BY tiposervicio";
                     $sql = mysqli_query($mysqli, $sql);
        if (!defined('tiposervicio')) {
            define('TIPOSERVICIO', 'tiposervicio');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
                     echo '<option value="'.$row[TIPOSERVICIO].'">'.$row[TIPOSERVICIO].'</option>';
        }
               echo '</select>';
               echo '</td>';
			
			
			
			echo '</tr>';
            echo '<tr>';
              echo '<th style width="10%">'.ESTADO.': </th>';
          
			
				echo '<td>';  
				echo '<select class="btn btn-success dropdown-toggle" name="activo_change" value="'.$data[2].'">';
                echo '<option>1</option>';
                echo '<option>0</option>';
                echo '</select>    ';
				echo ' &nbsp;1: '.ACTIVO.', 0: '.INACTIVO.'</td>';
			
			
			echo '</tr>';
			echo '<tr>';
              echo '<td><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
            echo '</tr>';
			echo '</tbody>';
          echo '</table>';
        echo '</form>';
    } else {
        $sql = mysqli_query($mysqli, 
            "UPDATE servicios
            SET servicio='$_POST[servicio_change]',
            activo='$_POST[activo_change]',
            tiposervicio='$_POST[tiposervicio_change]'
			
            WHERE id=$_GET[id]"
        );
        if ($sql) {
            echo SERVICIO_ACTUALIZADO;
        }
    }
}
    ?>