<?php
/**
* Mod ADMINISTRAR CALIBRACIONES
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

            <?php echo CALIBRACIONES_ADMINISTRAR; ?> /
                <a    href="?seccion=calibraciones_admin&amp;aktion=add"><?php echo CALIBRACIONES_ANADIR; ?></a> ::
                <a href="?seccion=calibraciones_admin&amp;aktion=change"><?php echo CALIBRACIONES_MODIFICAR; ?></a>
                <a href="mod/calibracioneslistadesplegable/index.php?keepThis=true&amp;TB_iframe=true&amp;height=500&amp;width=800" title="Consultar calibraciones" class="thickbox">
		<i class="fa fa-question fa-2x" style="color:#ffc107;"></i>
		</a>
            <br />
    <?php

/*
 * requires the class require "class.datepicker.php"; // instantiate the object $db = new datepicker (); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
 */

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
    $aktion = $_GET ['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "add") {
    if ((empty ( $_POST ['equipo_add'] ))
    and (empty ( $_POST ['accion_add'] ))
    and (empty ( $_POST ['procedimiento_add'] ))
    and (empty ( $_POST ['lugar_add'] ))
    and (empty ( $_POST ['fecha_add'] ))
    and (empty ( $_POST ['resultado_add'] ))
    and (empty ( $_POST ['desviacion_add'] ))
    and (empty ( $_POST ['estado_add'] ))
    and (empty ( $_POST ['proxima_add'] ))
    and (empty ( $_POST ['observaciones_add'] ))) {
        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>' . CALIBRACIONES_ANADIR . '</caption>';
        echo '<tbody>';
        echo '<tr>';
        //echo '<th>' . EQUIPOS_EQUIPO . '</th>';
        echo '<td>';

        echo '<select name="equipo_add">';
        echo '<option>' . EQUIPOS_EQUIPO . '</option>';

/*------------------------------------SELECT ANTIGUO-------------------------------------------------
        $sql = "SELECT f.id, f.fecha, f.equipo, f.proxima
                            FROM (
                               SELECT equipo, max(id) AS maxid
                               FROM calibraciones GROUP BY equipo
                            ) AS x INNER JOIN calibraciones AS f ON f.equipo = x.equipo AND f.id = x.maxid";


        $sql = mysqli_query($mysqli,  $sql );
        if (! defined ( 'equipo' )) {
            define ( 'EQUIPO', 'equipo' );
        }
		 if (! defined ( 'fecha' )) {
            define ( 'FECHA', 'fecha' );
        }
        if (! defined ( 'proxima' )) {
            define ( 'PROXIMA', 'proxima' );
        }

/*------------------------------------FIN SELECT ANTIGUO-------------------------------------------------*/
  $sql = "SELECT equipo FROM equiposdemedida";
  $sql = mysqli_query($mysqli,  $sql );

        while ( $row = mysqli_fetch_assoc( $sql ) ) {
            // $row['equipo'] = htmlentities($row['equipo']);
            echo '<option value="' . $row [equipo] . '">' . $row [equipo] . '</option>';
        }
        echo '</select>';
        echo '</td>';
		echo '<td rowspan="4"><textarea class="textareanormal" name="observaciones_add" value="">' . OBSERVACIONES . '</textarea>
				<br /><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input type="text" class="input-xlarge" name="accion_add" placeholder="' . ACCION . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input type="text" class="input-xlarge" name="procedimiento_add" placeholder="' . PROCEDIMIENTO . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input type="text" class="input-xlarge" name="lugar_add" placeholder="' . LUGAR . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input id="date1" class="datepicker" name="fecha_add" placeholder="' . FECHA . '" />';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input type="text" class="input-xlarge" name="resultado_add" placeholder="' . RESULTADO . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input type="text" class="input-xlarge" name="desviacion_add" placeholder="' . DESVIACION . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';

        echo '<select name="estado_add" value="">';
        echo '<option>' . ESTADO . '</option>';
        echo '<option>' . OPERATIVO . '</option>';
        echo '<option>' . BAJA . '</option>';
        echo ' <option>' . CALIBRACIONES_ENCALIBRACION . '</option>';
        echo ' <option>' . CALIBRACIONES_ENREPARACION . '</option>';
        echo '</select>';

        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input id="date2" class="datepicker" name="proxima_add" placeholder="' . PROXIMA . '"/>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {

        if (isset ( $_POST ['equipo_add'] )) {
            $equipo_Post = $_POST ['equipo_add'];
        }
        if (isset ( $_POST ['accion_add'] )) {
            $accion_Post = $_POST ['accion_add'];
        }
        if (isset ( $_POST ['procedimiento_add'] )) {
            $procedimiento_Post = $_POST ['procedimiento_add'];
        }
        if (isset ( $_POST ['lugar_add'] )) {
            $lugar_Post = $_POST ['lugar_add'];
        }
        if (isset ( $_POST ['fecha_add'] )) {
            $fecha_Post = $_POST ['fecha_add'];
        }
        if (isset ( $_POST ['resultado_add'] )) {
            $resultado_Post = $_POST ['resultado_add'];
        }
        if (isset ( $_POST ['desviacion_add'] )) {
            $desviacion_Post = $_POST ['desviacion_add'];
        }
        if (isset ( $_POST ['estado_add'] )) {
            $estado_Post = $_POST ['estado_add'];
        }
        if (isset ( $_POST ['proxima_add'] )) {
            $proxima_Post = $_POST ['proxima_add'];
        }
        if (isset ( $_POST ['observaciones_add'] )) {
            $observaciones_Post = $_POST ['observaciones_add'];
        }
        $sql = mysqli_query($mysqli,  "INSERT INTO calibraciones (equipo, accion, procedimiento,
                                         lugar, fecha, resultado, desviacion, estado,
                                         proxima, observaciones)
                                         VALUES ('" . $equipo_Post . "',
                                         '" . $accion_Post . "',
                                         '" . $procedimiento_Post . "',
                                         '" . $lugar_Post . "',
                                         '" . $fecha_Post . "',
                                         '" . $resultado_Post . "',
                                         '" . $desviacion_Post . "',
                                         '" . $estado_Post . "',
                                         '" . $proxima_Post . "',
                                         '" . $observaciones_Post . "')" );
        if ($sql)
            echo CALIBRACION_ANADIDA;
        else
            echo "Error al añadir el registro!";
    }
}

if ($aktion == "change") {
    $sql = mysqli_query($mysqli,  "SELECT * FROM calibraciones ORDER BY id DESC" );

	echo '&emsp;&emsp;<span class="yellow">' . CALIBRACIONES_MODIFICAR . '</span>';
    echo CALIBRACIONES_THEAD_ADVERTICE;
    echo '<table id="myTable" class = "sortable">';
    echo '<thead>';
		echo '<tr>
		  <th>ID</th>
		  <th>' . EQUIPOS_EQUIPO . '</th>
		  <th>' . RESULTADO . '</th>
		  <th>' . ULTIMA . '</th>
		  <th>' . PROXIMA . '</th>
		  <th>' . OBSERVACIONES . '</th></tr>';
	echo '</thead><tbody>';

    while ( $row = mysqli_fetch_row( $sql ) ) {
        echo "<tr>";
        echo "<td>" . $row ['0'] . "</td>";

        echo "<td>";
    		   ?>
    				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
    						<a href="index.php?seccion=calibraciones_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>

    						<span>
    						<br />
    						<a href="?seccion=calibraciones_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#ffffff;"></i></a>

    						<a href="mod/javaformdelete_calibraciones.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#ffffff;"></i></a>


    						<a href="?seccion=calibraciones_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo EQUIPOS_EQUIPO; echo "&nbsp;"; echo $row ['0']; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#ffffff;"></i></a>
    						<br />

    						<?php

    							 echo "<table class=print>
    								<tr>
    								<th>" . EQUIPOS_EQUIPO . "</th>
    								<th>" . ACCION . "</th>
    								</tr><tr>
    								<td>$row[1]</td>
    								<td>$row[2]</td>
    								</tr><tr>
    								<th>" . ULTIMA_CALIBRACION . "</th>
    								<th>" . PROXIMA_CALIBRACION . "</th>
    								</tr><tr>
    								<td>$row[5]</td>
    								<td>$row[9]</td>
    								</tr><tr>
    								<th>" . ESTADO . "</th>
    								<th>" . OBSERVACIONES . "</th>
    								</tr><tr>
    								<td>$row[7]</td>
    								<td>" . strip_tags($row['10'], '<table>,<tr>,<th>,<td>,<br>,<font>,<p>') . "</td>
    								</tr>
    								</table>";
    						?>
    						</span>
    				</div>
    			<?php

        echo "</td>";

        echo "<td><a href='?seccion=calibraciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['6'] . "</a></td>";
        echo "<td><a href='?seccion=calibraciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['5'] . "</a></td>";
        echo "<td><a href='?seccion=calibraciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['9'] . "</a></td>";
        echo "<td><a href='?seccion=calibraciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['10'] . "</a></td>";

        echo "</tr>";
    }
    echo '</tbody>';
    echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty ( $_POST ['equipo_change'] ))
	and (empty ( $_POST ['accion_change'] ))
	and (empty ( $_POST ['procedimiento_change'] ))
	and (empty ( $_POST ['lugar_change'] ))
	and (empty ( $_POST ['fecha_change'] ))
	and (empty ( $_POST ['resultado_change'] ))
	and (empty ( $_POST ['desviacion_change'] ))
	and (empty ( $_POST ['estado_change'] ))
	and (empty ( $_POST ['proxima_change'] ))
	and (empty ( $_POST ['observaciones_change'] ))) {
        $id = ( int ) $_GET ['id'];
        $sql = mysqli_query($mysqli,  "SELECT * FROM calibraciones WHERE id = $id " );
        $data = mysqli_fetch_row( $sql );

		echo '<br />';
        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<tbody>';
        echo '<tr>';
        echo '<th>' . EQUIPOS_EQUIPO . '';
		echo '<select class="input-large" id="equipo_change" name="equipo_change">';
        echo '<option>' . $data [1] . '</option>';
        $sql = "SELECT * FROM `calibraciones` GROUP BY `equipo`";
        $sql = mysqli_query($mysqli,  $sql );
        if (! defined ( 'equipo' )) {

            define ( 'EQUIPO', 'equipo' );
        }
        while ( $row = mysqli_fetch_assoc( $sql ) ) {
            echo '<option value="' . $row [EQUIPO] . '">' . $row [EQUIPO] . '</option>';
        }
        echo '</select></th>';
		echo '<th rowspan="4">' . RESULTADO . ' <textarea class="textareanormal" rows="5" name="resultado_change">' . $data [6] . '</textarea></th>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . ACCION . '';
        echo '<input type="text" class="input-xlarge" name="accion_change" value="' . $data [2] . '"></th>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . PROCEDIMIENTO . '';
        echo '<input type="text" class="input-xlarge" name="procedimiento_change" value="' . $data [3] . '"></th>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . LUGAR . '';
        echo '<input type="text" class="input-xlarge" name="lugar_change" value="' . $data [4] . '"></th>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . ACTUAL . '';
        echo '<input id="date3" class="datepicker" name="fecha_change" value="' . $data [5] . '">';
        echo '&nbsp;&nbsp;La anterior fue el ';
        $sql2 = mysqli_query($mysqli,  "SELECT *
                                    FROM calibraciones c
                                    WHERE c.proxima
                                    BETWEEN DATE_SUB(  '$data[5]', INTERVAL 365
                                    DAY )
                                    AND  '$data[5]'
                                    AND c.equipo =  '$data[1]'" );
        $data2 = mysqli_fetch_row( $sql2 );
		echo $data2 ['9'];
        echo '</th>';
		echo '<th>' . PROXIMA . '';
        echo '<input id="date4" class="datepicker" name="proxima_change" value="' . $data [9] . '"></th>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . DESVIACION . '';
        echo '<input type="text" class="input-mini" name="desviacion_change" value="' . $data [7] . '"></th>';
		echo '<th>' . ESTADO . '';
        echo '<select name="estado_change" value="">';
        echo '<option>' . $data [8] . '</option>';
        echo '<option>' . OPERATIVO . '</option>';
        echo '<option>' . BAJA . '</option>';
        echo ' <option>' . CALIBRACIONES_ENCALIBRACION . '</option>';
        echo ' <option>' . CALIBRACIONES_ENREPARACION . '</option>';
        echo '</select>';
        echo '</th>';
		echo '</tr>';
		echo '<tr>';
        echo '<th colspan="2">' . OBSERVACIONES . '';
        echo '<textarea class="textareanormal" rows="5" name="observaciones_change">' . $data [10] . '</textarea></th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        $id = ( int ) $_GET ['id'];
        $sql = mysqli_query($mysqli,  "UPDATE calibraciones SET equipo='$_POST[equipo_change]',
                            accion='$_POST[accion_change]',
                            procedimiento='$_POST[procedimiento_change]',
                            lugar='$_POST[lugar_change]',
                            fecha='$_POST[fecha_change]',
                            resultado='$_POST[resultado_change]',
                            desviacion='$_POST[desviacion_change]',
                            estado='$_POST[estado_change]',
                            proxima='$_POST[proxima_change]',
                            observaciones='$_POST[observaciones_change]'
                            WHERE id=$id" );
        if ($sql)
            echo CALIBRACION_ACTUALIZADA;
    }
}
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
