<?php
/**
* Mod ADMINISTRAR partes de trabajo
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
<?php
    /* requires the class
    require "class.datepicker.php";

    // instantiate the object
    $db=new datepicker();

    // uncomment the next line to have the calendar show up in german
    //$db->language = "dutch";

    $db->firstDayOfWeek = 1;

    // set the format in which the date to be returned
    $db->dateFormat = "Y-m-d";*/
?>

<table class="print">
	<caption>
		<?php echo PARTES_ADMINISTRAR_PARTES; ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button onclick="history.go(-1);">
			<?php echo VOLVER; ?>
		</button>
	</caption>
	<tbody>
		<tr>
			<td width="20%"><a
				href="?seccion=partes_admin&amp;aktion=add"><?php echo PARTES_ANADIR_PARTE; ?></a></td>
			<td><a href="?seccion=partes_admin&amp;aktion=change"><?php echo PARTES_CAMBIAR_PARTE; ?></a></td>

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
    if ((empty($_POST['fecha']))
	AND (empty($_POST['centrotrabajo']))
	AND (empty($_POST['empleado']))
	AND (empty($_POST['h1']))
	AND (empty($_POST['c1']))
	AND (empty($_POST['h2']))
	AND (empty($_POST['c2']))
	AND (empty($_POST['h3']))
	AND (empty($_POST['c3']))
	AND (empty($_POST['h4']))
	AND (empty($_POST['c4']))
	AND (empty($_POST['h5']))
	AND (empty($_POST['c5']))
	AND (empty($_POST['h6']))
	AND (empty($_POST['c6']))
	AND (empty($_POST['h7']))
	AND (empty($_POST['c7']))
	AND (empty($_POST['h8']))
	AND (empty($_POST['c8']))
	AND (empty($_POST['h9']))
	AND (empty($_POST['c9']))
	AND (empty($_POST['h10']))
	AND (empty($_POST['c10']))
	AND (empty($_POST['h11']))
	AND (empty($_POST['c11']))
	AND (empty($_POST['h12']))
	AND (empty($_POST['c12']))
	AND (empty($_POST['h13']))
	AND (empty($_POST['c13']))
	AND (empty($_POST['h14']))
	AND (empty($_POST['c14']))
	AND (empty($_POST['h15']))
	AND (empty($_POST['c15']))
	AND (empty($_POST['h16']))
	AND (empty($_POST['c16']))
	AND (empty($_POST['h17']))
	AND (empty($_POST['c17']))
	AND (empty($_POST['h18']))
	AND (empty($_POST['c18']))
	AND (empty($_POST['h19']))
	AND (empty($_POST['c19']))
	AND (empty($_POST['h20']))
	AND (empty($_POST['c20']))
	AND (empty($_POST['h21']))
	AND (empty($_POST['c21']))
	AND (empty($_POST['h22']))
	AND (empty($_POST['c22']))
	AND (empty($_POST['h23']))
	AND (empty($_POST['c23']))
	AND (empty($_POST['h24']))
	AND (empty($_POST['c24']))) {
        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>';
            echo PARTES_ANADIR_PARTE;
        echo '</caption>';
        echo '<tbody>';
            echo '<tr>';
                echo '<th style="width:100px">';
                    echo FECHA;
                echo '</th>';
				    echo '<td><input id="date" class="datepicker" name="fecha" />';// Date-picker
                    echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th width="100px">';
                    echo CLIENTE;
                echo '</th>';
                    echo '<td>';
                        echo '<select name="centrotrabajo">';
                            echo '<option>...</option>';
                $sql = "SELECT * FROM servicios WHERE activo=1";
                $sql = mysqli_query($mysqli, $sql);
        if (!defined('servicio')) {
             define('SERVICIO', 'servicio');
        }
        while ($row = mysqli_fetch_assoc($sql)) {

                            echo '<option value="'.$row[SERVICIO].'">'.$row[SERVICIO].'</option>';
        }
                        echo '</select>';
                    echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:100px">';
                    echo TRABAJADOR;
                echo '</th>';
                    echo '<td>';

                echo '<select name="empleado"  value="">';
                    echo '<option>...</option>';
                     $sql = "SELECT * FROM members
							WHERE active='Yes'
							ORDER BY username ASC";
                     $sql = mysqli_query($mysqli, $sql);
        if (!defined('username')) {
             define('USERNAME', 'username');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '<option value="'.$row[USERNAME].'">'.$row[USERNAME].'</option>';
        }
                echo '</select>';

            echo '</tr>';
        echo '</tbody>';
        echo '</table>';

        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>';
           echo SERVICIO_INCIDENCIA;
           echo '</caption>';
        echo '<tbody>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h1" value="'.HORA.'"></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c1" value=""></textarea></td>';
            echo '</tr>';

            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h2" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c2" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h3" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c3" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h4" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c4" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h5" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c5" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h6" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c6" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h7" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c7" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h8" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c8" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h9" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c9" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h10" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c10" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h11" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c11" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h12" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c12" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h13" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c13" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h14" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c14" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h15" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c15" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h16" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c16" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h17" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c17" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h18" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c18" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h19" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c19" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h20" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c20" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
             echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h21" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c21" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h22" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c22" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h23" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c23" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style="width:50px">';
                    echo HORA;
                echo '</th>';
                    echo '<td style="width:100px"><input class="inputlargo" name="h24" value=""></td>';
                    echo '<td style="width:500px"><textarea class="textareanormal" name="c24" value=""></textarea></td>';
            echo '</tr>';
                    echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ENVIAR . '</button></td>';
            echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;';
                echo "<button onclick='history.go(-1);'>";
                 echo VOLVER;
                echo "</button>";
    } else {

        if (isset($_POST['fecha'])) {
            $fecha_Post = $_POST['fecha'];
        }
        if (isset($_POST['centrotrabajo'])) {
            $centrotrabajo_Post = $_POST['centrotrabajo'];
        }
        if (isset($_POST['centrotrabajo'])) {
            $centrotrabajo_Post = $_POST['centrotrabajo'];
        }
        if (isset($_POST['empleado'])) {
            $empleado_Post = $_POST['empleado'];
        }
        if (isset($_POST['h1'])) {
            $h1_Post = $_POST['h1'];
        }
        if (isset($_POST['c1'])) {
            $c1_Post = $_POST['c1'];
        }
        if (isset($_POST['h2'])) {
            $h2_Post = $_POST['h2'];
        }
        if (isset($_POST['c2'])) {
            $c2_Post = $_POST['c2'];
        }
        if (isset($_POST['h3'])) {
            $h3_Post = $_POST['h3'];
        }
        if (isset($_POST['c3'])) {
            $c3_Post = $_POST['c3'];
        }
        if (isset($_POST['h4'])) {
            $h4_Post = $_POST['h4'];
        }
        if (isset($_POST['c4'])) {
            $c4_Post = $_POST['c4'];
        }
        if (isset($_POST['h5'])) {
            $h5_Post = $_POST['h5'];
        }
        if (isset($_POST['c5'])) {
            $c5_Post = $_POST['c5'];
        }
        if (isset($_POST['h6'])) {
            $h6_Post = $_POST['h6'];
        }
        if (isset($_POST['c6'])) {
            $c6_Post = $_POST['c6'];
        }
        if (isset($_POST['h7'])) {
            $h7_Post = $_POST['h7'];
        }
        if (isset($_POST['c7'])) {
            $c7_Post = $_POST['c7'];
        }
        if (isset($_POST['h8'])) {
            $h8_Post = $_POST['h8'];
        }
        if (isset($_POST['c8'])) {
            $c8_Post = $_POST['c8'];
        }
        if (isset($_POST['h9'])) {
            $h9_Post = $_POST['h9'];
        }
        if (isset($_POST['c9'])) {
            $c9_Post = $_POST['c9'];
        }
        if (isset($_POST['h10'])) {
            $h10_Post = $_POST['h10'];
        }
        if (isset($_POST['c10'])) {
            $c10_Post = $_POST['c10'];
        }
        if (isset($_POST['h11'])) {
            $h11_Post = $_POST['h11'];
        }
        if (isset($_POST['c11'])) {
            $c11_Post = $_POST['c11'];
        }
        if (isset($_POST['h12'])) {
            $h12_Post = $_POST['h12'];
        }
        if (isset($_POST['c12'])) {
            $c12_Post = $_POST['c12'];
        }
        if (isset($_POST['h13'])) {
            $h13_Post = $_POST['h13'];
        }
        if (isset($_POST['c13'])) {
            $c13_Post = $_POST['c13'];
        }
        if (isset($_POST['h14'])) {
            $h14_Post = $_POST['h14'];
        }
        if (isset($_POST['c14'])) {
            $c14_Post = $_POST['c14'];
        }
        if (isset($_POST['h15'])) {
            $h15_Post = $_POST['h15'];
        }
        if (isset($_POST['c15'])) {
            $c15_Post = $_POST['c15'];
        }
        if (isset($_POST['h16'])) {
            $h16_Post = $_POST['h16'];
        }
        if (isset($_POST['c16'])) {
            $c16_Post = $_POST['c16'];
        }
        if (isset($_POST['h17'])) {
            $h17_Post = $_POST['h17'];
        }
        if (isset($_POST['c17'])) {
            $c17_Post = $_POST['c17'];
        }
        if (isset($_POST['h18'])) {
            $h18_Post = $_POST['h18'];
        }
        if (isset($_POST['c18'])) {
            $c18_Post = $_POST['c18'];
        }
        if (isset($_POST['h19'])) {
            $h19_Post = $_POST['h19'];
        }
        if (isset($_POST['c19'])) {
            $c19_Post = $_POST['c19'];
        }
        if (isset($_POST['h20'])) {
            $h20_Post = $_POST['h20'];
        }
        if (isset($_POST['c20'])) {
            $c20_Post = $_POST['c20'];
        }
        if (isset($_POST['h21'])) {
            $h21_Post = $_POST['h21'];
        }
        if (isset($_POST['c21'])) {
            $c21_Post = $_POST['c21'];
        }
        if (isset($_POST['h22'])) {
            $h22_Post = $_POST['h22'];
        }
        if (isset($_POST['c22'])) {
            $c22_Post = $_POST['c22'];
        }
        if (isset($_POST['h23'])) {
            $h23_Post = $_POST['h23'];
        }
        if (isset($_POST['c23'])) {
            $c23_Post = $_POST['c23'];
        }
        if (isset($_POST['h24'])) {
            $h24_Post = $_POST['h24'];
        }
        if (isset($_POST['c24'])) {
            $c24_Post = $_POST['c24'];
        }

        $sql = mysqli_query($mysqli, 
            "INSERT INTO partedetrabajo (fecha, centrotrabajo, empleado,
            h1, c1, h2, c2, h3, c3, h4, c4, h5, c5, h6, c6, h7, c7,
            h8, c8, h9, c9, h10, c10, h11, c11, h12, c12, h13, c13,
            h14, c14, h15, c15, h16, c16, h17, c17, h18, c18, h19, c19,
            h20, c20, h21, c21, h22, c22, h23, c23, h24, c24)
            VALUES ('{$_POST['fecha']}', '{$_POST['centrotrabajo']}', '{$_POST['empleado']}',
                    '{$_POST['h1']}', '{$_POST['c1']}', '{$_POST['h2']}', '{$_POST['c2']}',
                    '{$_POST['h3']}', '{$_POST['c3']}', '{$_POST['h4']}', '{$_POST['c4']}',
                    '{$_POST['h5']}', '{$_POST['c5']}', '{$_POST['h6']}', '{$_POST['c6']}',
                    '{$_POST['h7']}', '{$_POST['c7']}', '{$_POST['h8']}', '{$_POST['c8']}',
                    '{$_POST['h9']}', '{$_POST['c9']}', '{$_POST['h10']}', '{$_POST['c10']}',
                    '{$_POST['h11']}', '{$_POST['c11']}', '{$_POST['h12']}', '{$_POST['c12']}',
                    '{$_POST['h13']}', '{$_POST['c13']}', '{$_POST['h14']}', '{$_POST['c14']}',
                    '{$_POST['h15']}', '{$_POST['c15']}', '{$_POST['h16']}', '{$_POST['c16']}',
                    '{$_POST['h17']}', '{$_POST['c17']}', '{$_POST['h18']}', '{$_POST['c18']}',
                    '{$_POST['h19']}', '{$_POST['c19']}', '{$_POST['h20']}', '{$_POST['c20']}',
                    '{$_POST['h21']}', '{$_POST['c21']}', '{$_POST['h22']}', '{$_POST['c22']}',
                    '{$_POST['h23']}', '{$_POST['c23']}', '{$_POST['h24']}', '{$_POST['c24']}')"
        );

        if ($sql) {
            echo PARTE_ANADIDO;
        } else {
            echo "Error al añadir el registro!";
        }
    }
}

if ($aktion == "change") {
        $sql = mysqli_query($mysqli, "SELECT * FROM partedetrabajo ORDER BY fecha DESC");


           echo PARTES_THEAD_ADVERTICE;
        echo '<table class="print">';
        echo '<caption>';
           echo PARTES_CAMBIAR_PARTE;
        echo '</caption>';
        echo '<tbody>';
            echo '<tr>';
            echo '<tr>';
                echo '<th style="width:100px">Id</th>';
                echo '<th style="width:100px">';
                    echo FECHA;
                echo '</th>';
                echo '<th style="width:200px">';
                    echo CLIENTE;
                echo '</th><!--<th style="width:100px">Empleado</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th><th style="width:100px">Hora</th><th style="width:100px">Incidencia</th>--></tr>';
    while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td>".$row['0']."</td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
              /*echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['5']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['6']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['8']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['9']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['10']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['11']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['12']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['13']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['14']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['15']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['16']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['17']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['18']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['19']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['20']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['21']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['22']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['23']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['24']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['25']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['26']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['27']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['28']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['29']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['30']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['31']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['32']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['33']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['34']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['35']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['36']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['37']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['38']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['39']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['40']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['41']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['42']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['43']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['44']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['45']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['46']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['47']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['48']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['49']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['50']."</a></td>";
                echo "<td><a href='?seccion=partes_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['51']."</a></td>";*/
            echo "</tr>";
    }
        echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['fecha_change'])) AND (empty($_POST['centrotrabajo_change']))
        AND (empty($_POST['empleado_change'])) AND (empty($_POST['h1_change']))
        AND (empty($_POST['c1_change'])) AND (empty($_POST['h2_change']))
        AND (empty($_POST['c2_change'])) AND (empty($_POST['h3_change']))
        AND (empty($_POST['c3_change'])) AND (empty($_POST['h4_change']))
        AND (empty($_POST['c4_change'])) AND (empty($_POST['h5_change']))
        AND (empty($_POST['c5_change'])) AND (empty($_POST['h6_change']))
        AND (empty($_POST['c6_change'])) AND (empty($_POST['h7_change']))
        AND (empty($_POST['c7_change'])) AND (empty($_POST['h8_change']))
        AND (empty($_POST['c8_change'])) AND (empty($_POST['h9_change']))
        AND (empty($_POST['c9_change'])) AND (empty($_POST['h10_change']))
        AND (empty($_POST['c10_change'])) AND (empty($_POST['h11_change']))
        AND (empty($_POST['c11_change'])) AND (empty($_POST['h12_change']))
        AND (empty($_POST['c12_change'])) AND (empty($_POST['h13_change']))
        AND (empty($_POST['c13_change'])) AND (empty($_POST['h14_change']))
        AND (empty($_POST['c14_change'])) AND (empty($_POST['h15_change']))
        AND (empty($_POST['c15_change'])) AND (empty($_POST['h16_change']))
        AND (empty($_POST['c16_change'])) AND (empty($_POST['h17_change']))
        AND (empty($_POST['c17_change'])) AND (empty($_POST['h18_change']))
        AND (empty($_POST['c18_change'])) AND (empty($_POST['h19_change']))
        AND (empty($_POST['c19_change'])) AND (empty($_POST['h20_change']))
        AND (empty($_POST['c20_change'])) AND (empty($_POST['h21_change']))
        AND (empty($_POST['c21_change'])) AND (empty($_POST['h22_change']))
        AND (empty($_POST['c22_change'])) AND (empty($_POST['h23_change']))
        AND (empty($_POST['c23_change'])) AND (empty($_POST['h24_change']))
        AND (empty($_POST['c24_change']))
    ) {
        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM partedetrabajo WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>'.PARTES_CAMBIAR_PARTE.'</caption>';
        echo '<tbody>';
            echo '<tr>';
                echo '<th style="width:100px">'.FECHA.': </th>';
                  echo '<td colspan="2"><input id="date1" class="datepicker" name="fecha_change" 	value="'.$data[1].'" /></td>';// Date picker
				  //<input id='date1' class='datepicker' name='fecha_change' 	value="<?php echo $data[1]; ? >" />
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.SERVICIO_SERVICIO.': </th>';
                  echo '<td colspan="2"><input class="inputlargo" name="centrotrabajo_change" value="'.$data[2].'"></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.TRABAJADOR.': </th>';
                  echo '<td colspan="2"><input class="inputlargo" name="empleado_change" value="'.$data[3].'"></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h1_change" value="'.$data[4].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c1_change">'.$data[5].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h2_change" value="'.$data[6].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c2_change">'.$data[7].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h3_change" value="'.$data[8].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c3_change">'.$data[9].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h4_change" value="'.$data[10].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c4_change">'.$data[11].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h5_change" value="'.$data[12].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c5_change">'.$data[13].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h6_change" value="'.$data[14].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c6_change">'.$data[15].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h7_change" value="'.$data[16].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c7_change">'.$data[17].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h8_change" value="'.$data[18].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c8_change">'.$data[19].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h9_change" value="'.$data[20].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c9_change">'.$data[21].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h10_change" value="'.$data[22].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c10_change">'.$data[23].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h11_change" value="'.$data[24].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c11_change">'.$data[25].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h12_change" value="'.$data[26].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c12_change">'.$data[27].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h13_change" value="'.$data[28].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c13_change">'.$data[29].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h14_change" value="'.$data[30].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c14_change">'.$data[31].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h15_change" value="'.$data[32].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c15_change">'.$data[33].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h16_change" value="'.$data[34].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c16_change">'.$data[35].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h17_change" value="'.$data[36].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c17_change">'.$data[37].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h18_change" value="'.$data[38].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c18_change">'.$data[39].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h19_change" value="'.$data[40].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c19_change">'.$data[41].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h20_change" value="'.$data[42].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c20_change">'.$data[43].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h21_change" value="'.$data[44].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c21_change">'.$data[45].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h22_change" value="'.$data[46].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c22_change">'.$data[47].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h23_change" value="'.$data[48].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c23_change">'.$data[49].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th style="width:100px">'.HORA.': </th>';
                  echo '<td style="width:100px"><input class="inputlargo" name="h24_change" value="'.$data[50].'"></td>';
                  echo '<td style="width:500px"><textarea class="textareanormal" name="c24_change">'.$data[51].'</textarea></td>';
          echo '</tr>';
          echo '<tr>';
                  echo '<td colspan="2"><button type="submit" class="btn btn-primary">' . ACTUALIZAR . '</button></td>';
          echo '</tr>';
        echo '</table>';
        echo '</form>';
    } else {
        $sql = mysqli_query($mysqli, "UPDATE partedetrabajo SET fecha='$_POST[fecha_change]', centrotrabajo='$_POST[centrotrabajo_change]', empleado='$_POST[empleado_change]', h1='$_POST[h1_change]', c1='$_POST[c1_change]', h2='$_POST[h2_change]', c2='$_POST[c2_change]', h3='$_POST[h3_change]', c3='$_POST[c3_change]', h4='$_POST[h4_change]', c4='$_POST[c4_change]', h5='$_POST[h5_change]', c5='$_POST[c5_change]', h6='$_POST[h6_change]', c6='$_POST[c6_change]', h7='$_POST[h7_change]', c7='$_POST[c7_change]', h8='$_POST[h8_change]', c8='$_POST[c8_change]', h9='$_POST[h9_change]', c9='$_POST[c9_change]', h10='$_POST[h10_change]', c10='$_POST[c10_change]', h11='$_POST[h11_change]', c11='$_POST[c11_change]', h12='$_POST[h12_change]', c12='$_POST[c12_change]', h13='$_POST[h13_change]', c13='$_POST[c13_change]', h14='$_POST[h14_change]', c14='$_POST[c14_change]', h15='$_POST[h15_change]', c15='$_POST[c15_change]', h16='$_POST[h16_change]', c16='$_POST[c16_change]', h17='$_POST[h17_change]', c17='$_POST[c17_change]', h18='$_POST[h18_change]', c18='$_POST[c18_change]', h19='$_POST[h19_change]', c19='$_POST[c19_change]', h20='$_POST[h20_change]', c20='$_POST[c20_change]', h21='$_POST[h21_change]', c21='$_POST[c21_change]', h22='$_POST[h22_change]', c22='$_POST[c22_change]', h23='$_POST[h23_change]', c23='$_POST[c23_change]', h24='$_POST[h24_change]', c24='$_POST[c24_change]' WHERE id=$_GET[id]");
        if ($sql) {
            echo PARTE_ACTUALIZADO;
        }
    }
}
//mysql_close($db);
?>