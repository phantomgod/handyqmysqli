<?php
/**
* Mod ADMINISTRAR PROVEEDORES
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

	<?php echo PROVEEDORES_ADMINISTRAR_PROVEEDORES; ?> /
		<a href="?seccion=proveedores_admin&amp;aktion=add"><?php echo PROVEEDORES_ANADIR_PROVEEDOR; ?></a> ::
		<a href="?seccion=proveedores_admin&amp;aktion=change"><?php echo PROVEEDORES_MODIFICAR_PROVEEDOR; ?></a>

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
    if ((empty($_POST['proveedor']))
	AND (empty($_POST['estado']))
	AND (empty($_POST['cif']))
	AND (empty($_POST['direccion']))
	AND (empty($_POST['suministro']))
	AND (empty($_POST['criteriosdeevaluacion']))
	AND (empty($_POST['datos']))
	AND (empty($_POST['activo']))) {
        echo '<form action="" method="POST">';
            echo '<table class="print">';
                echo '<caption>'.PROVEEDORES_ANADIR_PROVEEDOR.'</caption>';
                    echo '<tbody>';
                        echo '<tr>';
                            echo '<th width="15%">'.PROVEEDORES_PROVEEDOR.':</th>';
								echo '<td><input type="text" class="input-xxlarge" id="proveedor" name="proveedor" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th>'.ESTADO.':</th>';
                                echo '<td>';
                                    echo '<select name="estado">';
                                      echo '<option>...</option>';
                                      echo '<option>'.PROVEEDORES_PROVEEDOR_APROBADO.'</option>';
                                      echo '<option>'.PROVEEDORES_PROVEEDOR_ENPRUEBAS.'</option>';
                                    echo '</select>    ';
                                echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th>'.CIF.':</th>';
								echo '<td><input type="text" class="input-xxlarge" id="cif" name="cif" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th>'.FECHA.':</th>';
								echo '<td><input type="text" class="input-medium" id="fecha" name="fecha" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                              echo '<th>'.PROVEEDORES_SUMINISTRO.':</th>';
                                  echo '<td><textarea rows="5" cols="70" name="suministro" value=""></textarea></td>';
                        echo '</tr>';
                        echo '<tr>';
                              echo '<th>'.PROVEEDORES_CRITERIOS_EVALUACION.':</th>';
                                  echo '<td> <textarea rows="5" cols="70" name="criteriosdeevaluacion" value=""></textarea></td>';
                        echo '</tr>';
                        echo '<tr>';
                              echo '<th>'.PROVEEDORES_DATOS.':</th>';
                                  echo '<td> <textarea rows="5" cols="70" name="datos" value=""></textarea></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th>'.ESTADO.':</th>';
                                echo '<td> ';
                                    echo '<select name="activo">';
                                      echo '<option>...</option>';
                                      echo '<option>1</option>';
                                      echo '<option>0</option>';
                                    echo '</select>    ';
                                echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                                echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
                        echo '</tr>';
                    echo '</tbody>';
            echo '</table>';
        echo '</form>';
    } else {


        if (isset($_POST['proveedor'])) {
            $proveedor_Post = $_POST['proveedor'];
        }
        if (isset($_POST['estado'])) {
            $estado_Post = $_POST['estado'];
        }
        if (isset($_POST['cif'])) {
            $cif_Post = $_POST['cif'];
        }
        if (isset($_POST['fecha'])) {
            $fecha_Post = $_POST['fecha'];
        }
        if (isset($_POST['suministro'])) {
            $suministro_Post = $_POST['suministro'];
        }
        if (isset($_POST['criteriosdeevaluacion'])) {
            $criteriosdeevaluacion_Post = $_POST['criteriosdeevaluacion'];
        }
        if (isset($_POST['datos'])) {
            $datos_Post = $_POST['datos'];
        }
        if (isset($_POST['activo'])) {
            $activo_Post = $_POST['activo'];
        }

        $sql = mysqli_query($mysqli, "INSERT INTO proveedores (proveedor,estado,cif,fecha,suministro,criteriosdeevaluacion,datos,activo) VALUES ('" . $proveedor_Post . "','" . $estado_Post . "','" . $cif_Post . "','" . $fecha_Post . "','" . $suministro_Post . "','" . $criteriosdeevaluacion_Post . "','" . $datos_Post . "','" . $activo_Post . "')" );

		if ($sql) echo "Proveedor añadido";
        else echo "Error al añadir el registro!";
        //echo mysql_error ( $db ) . "n" ;
    }
}


if ($aktion == "change") {
    $sql = mysqli_query($mysqli, "SELECT * FROM proveedores WHERE activo = 1 ORDER BY proveedor ASC");

		echo PROVEEDORES_THEAD_ADVERTICE;
		echo '&emsp;&emsp;<span class="yellow">' . PROVEEDORES_LISTA . '</span>';
        echo '<table id="myTable" class="sortable">';
                echo "<thead>";
                    echo '<tr><th>Id</th><th>'.PROVEEDORES_PROVEEDOR.'</th><th>'.ESTADO.'</th><th>'.FECHA.'</th><th>Activo</th></tr>';
				echo "</thead>";
				echo "<tbody>";
    while ($row = mysqli_fetch_row($sql)) {
                         echo "<tr>";
                         echo "<td>".$row['0']."</td>";
                         echo "<td><a href='?seccion=proveedores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
                         echo "<td><a href='?seccion=proveedores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
						 echo "<td><a href='?seccion=proveedores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
                         echo "<td><a href='?seccion=proveedores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['8']."</a></td>";
                         /*echo "<td><a href='?seccion=proveedores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['9']."</a></td>";*/
                         echo "</tr>";
    }
                  echo "</tbody>";
        echo "</table>";
}

if ($aktion == "change_id") {
    if ((empty($_POST['id_change'])) AND (empty($_POST['proveedor_change'])) AND (empty($_POST['estado_change'])) AND (empty($_POST['fecha_change'])) AND (empty($_POST['cif_change'])) AND (empty($_POST['suministro_change'])) AND (empty($_POST['criteriosdeevaluacion_change'])) AND (empty($_POST['datos_change'])) AND (empty($_POST['activo_change']))) {
        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM proveedores WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

        echo '<form action="" method="POST">';
             echo '<table class="print">';
                 echo '<caption>'.PROVEEDORES_MODIFICAR_PROVEEDOR.'</caption>';
                     echo '<tr>';
                         echo '<th>Id:</th>';
								echo ''.$data[0].'';
                     echo '</tr>';
                     echo '<tr>';
                         echo '<th>'.PROVEEDORES_PROVEEDOR.':</th>';
							 echo '<td><input type="text" class="input-xxlarge" id="proveedor_change" name="proveedor_change" value="'.$data[1].'"></td>';
                     echo '</tr>';
                     echo '<tr>';
                         echo '<th>'.ESTADO.':</th>';
							 echo '<td><input type="text" class="input-large" id="estado_change" name="estado_change" value="'.$data[2].'"></td>';
                     echo '</tr>';
                     echo '<tr>';
                         echo '<th>'.FECHA.':</th>';
							 echo '<td>';

							 		?>
										<input id='date1' class='datepicker' id="fecha_change" name='fecha_change'
											value="<?php echo $data[4]; ?>" />

									<?php

							 echo '</td>';
                     echo '</tr>';
					                      echo '<tr>';
                         echo '<th>'.CIF.':</th>';

						 echo '<td><input type="text" class="input-large" id="cif_change" name="cif_change" value="'.$data[3].'"></td>';


                     echo '</tr>';
                     echo '<tr>';
                         echo '<th>'.PROVEEDORES_SUMINISTRO.':</th>';
                             echo '<td><textarea style="width:70%" rows="5" name="suministro_change">'.$data[5].'</textarea></td>';
                     echo '</tr>';
                     echo '<tr>';
                         echo '<th>'.PROVEEDORES_CRITERIOS_EVALUACION.':</th>';
                             echo '<td><textarea style="width:70%" rows="5" name="criteriosdeevaluacion_change">'.$data[6].'</textarea></td>';
                     echo '</tr>';
                     echo '<tr>';
                         echo '<th>'.PROVEEDORES_DATOS.':</th>';
                             echo '<td> <textarea style="width:70%" rows="5" name="datos_change">'.$data[7].'</textarea></td>';
                     echo '</tr>';
                     echo '<tr>';
                         echo '<th>'.ESTADO.':</th>';
							 echo '<td><input type="text" class="input-mini" id="activo_change" name="activo_change" value="'.$data[8].'"></td>';
                     echo '</tr>';
                     echo '<tr>';
                             echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
                     echo '</tr>';
            echo '</table>';
         echo '</form>';
    } else {
                  $sql = mysqli_query($mysqli, "UPDATE proveedores SET proveedor='$_POST[proveedor_change]',estado='$_POST[estado_change]',fecha='$_POST[fecha_change]',cif='$_POST[cif_change]',suministro='$_POST[suministro_change]',criteriosdeevaluacion='$_POST[criteriosdeevaluacion_change]',datos='$_POST[datos_change]',activo='$_POST[activo_change]' WHERE id=$_GET[id]");
                  if ($sql)
				  {
						echo PROVEEDORES_PROVEEDOR_ACTUALIZADO;
						 echo '<td><a href="?seccion=listaproveedores" target="_blank" title="'.VOLVER.'">
					<i class="fa fa-backward" aria-hidden="true" style="color:#5b862a;"></i>
				</a>
			</td>';
						//echo("Error description: " . mysqli_error($mysqli));
				  }
    }
}
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} );
</script>
