<?php
/**
 * Mod administrar auditorías
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

        <?php echo AUDITORIAS_ADMINISTRAR_AUDITORIAS; ?> /
            <a href="?seccion=aisgc_admin&amp;aktion=add"><?php echo AUDITORIAS_ANADIR_AUDITORIA; ?></a> ::
            <a href="?seccion=aisgc_admin&amp;aktion=change"><?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?></a>


<br />
<?php

/*
 * requires the class require "class.datepicker.php"; // instantiate the object $db = new datepicker (); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
 */

// Aktionen
$aktion = '';
if (isset ($_GET ['aktion'])) {
    $aktion = $_GET ['aktion'];
}

if ($aktion == "") {

    echo 'Admin Area';
}

if ($aktion == "add") {
    if ((empty ($_POST ['fecha']))
	and (empty ($_POST ['ai']))
	and (empty ($_POST ['auditor1']))
	and (empty ($_POST ['auditor2']))
	and (empty ($_POST ['auditor3']))
	and (empty ($_POST ['docum']))
	and (empty ($_POST ['trabajador1']))
	and (empty ($_POST ['trabajador2']))
	and (empty ($_POST ['trabajador3']))
	and (empty ($_POST ['servicio1']))
	and (empty ($_POST ['servicio2']))
	and (empty ($_POST ['vehiculos']))
	and (empty ($_POST ['obstrat']))
	and (empty ($_POST ['obscal']))
	and (empty ($_POST ['obsalmac']))
	and (empty ($_POST ['obscompras']))
	and (empty ($_POST ['obsformac']))
	and (empty ($_POST ['obsdocum']))
	and (empty ($_POST ['obslegio']))) {
        echo '<br /><br />';
        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<tbody>';
        echo '<tr>';
        echo '<th>';
        echo FECHA;
        echo '</th>';
        echo '<td>';
        echo '<input id="date" class="datepicker" name="fecha" />';

        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        ?>

        <?php echo AUDITORIAS_NUMERO_AUDITORIA; ?>
        <div align="left">
			<p class="pleft">
				<a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i>
					<span class="custom warning">
						<img src="images/Warning.png" alt="Help" title="Help" height="48" width="48" />
						<em><?php echo ATENCION; ?></em><?php echo AUDITORIAS_CODIGO_HELP; ?>
					</span>
				</a>
			</p>
        </div>

        <?php
        echo '</th>';
        echo '<td>';
        $sql = "SELECT * FROM aisgc ORDER BY id DESC LIMIT 1";
        $sql = mysqli_query($mysqli, $sql);

        if (!defined('ai')) define('AI', 'ai');


        while ($row = mysqli_fetch_assoc($sql)) {
            echo LAULTIMAAUDITORIA_FUE;
            echo '&nbsp;&nbsp;' . $row ['ai'] . ' - ' . $row ['fecha'] . '';
        }
        echo '&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<input class="inputchico" name="ai" value="">';

        ?>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <!--<input type="button" value="Mirar NC`s" onclick="Abrir_ventana('mod/ncslistadesplegable/index.php');">-->
        <a
        href="mod/ncslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        title="Consultar no conformidades"
		class="thickbox"
		title="Consultar no conformidades">
		<i class="fa fa-question" style="color:#5b862a;"></i></a>

        <a
        href="mod/aisgclistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        title="Consultar auditorias"
		class="thickbox"
		title="Consultar auditorias">
		<i class="fa fa-question" style="color:#FF5722;"></i></a>

        <a
        href="mod/informeauditorialistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
		class="thickbox"
		title="Consultar informes de auditoría">
		<i class="fa fa-question" style="color:#1A237E;"></i></a>

        <a
        href="mod/objetivoslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        class="thickbox"
		title="Consultar objetivos">
		<i class="fa fa-question" style="color:#752209;"></i></a>
        <?php

        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo AUDITORIAS_AUDITOR;
        echo '</th>';
        echo '<td>';

        $sql2 = "SELECT * FROM members
					WHERE actividad='auditor'
					AND active='Yes'
					ORDER BY username ASC";
        if (!defined('auditor1_add')) {
            define('AUDITOR1_ADD', 'auditor1_add');
        }
        if (! defined('username')) {
            define('USERNAME', 'username');
        }

        $resultado = mysqli_query($mysqli, $sql2);
        while ($auditor1 = mysqli_fetch_array($resultado)) {
            echo '<input id="IDauditor[]" name="auditor1_add[]" type="checkbox" value="' . $auditor1 [USERNAME] . '">&nbsp;&nbsp;' . $auditor1 [USERNAME] . '';
            echo '&nbsp;&nbsp;';
        }

        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo DOCUMENTOS;
        echo '</th>';
        echo '<td><textarea class="textareanormal" name="docum" value=""></textarea></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th style="width:100px">';
        echo TRABAJADOR;
        echo '</th>';
        echo '<td>';

       $sql2 = "SELECT * FROM members  ORDER BY username ASC";
        if (! defined('trabajador1_add')) {
            define('TRABAJADOR1_ADD', 'trabajador1_add');
        }

        $resultado = mysqli_query($mysqli, $sql2);
        while ($trabajador = mysqli_fetch_array($resultado)) {
            echo '<input id="IDtrabajador1[]" name="trabajador1_add[]" type="checkbox" value="' . $trabajador ['username'] . '">&nbsp;&nbsp;' . $trabajador ['username'] . '';
            echo '&nbsp;&nbsp;';
        }
        echo '<td>';
        echo '<tr>';
        echo '<th style="width:100px">';
        echo CLIENTE;
        echo '</th>';
        echo '<td>';
        echo '<select name="servicio1" class="span4 btn-success">';
        echo '<option>...</option>';
        $sql = "SELECT * FROM servicios WHERE activo=1 ORDER BY servicio ASC";
        $sql = mysqli_query($mysqli, $sql);
        if (! defined('servicio')) {
            define('SERVICIO', 'servicio');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '<option value="' . $row ['servicio'] . '">' . $row ['servicio'] . '</option>';
        }
        echo '</select>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th style="width:100px">';
        echo CLIENTE;
        echo '</th>';
        echo '<td>';
        echo '<select name="servicio2" class="span4 btn-success">';
        echo '<option>...</option>';
        $sql = "SELECT * FROM servicios WHERE activo=1";
        $sql = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_assoc($sql)) {
            // $row['servicio'] = htmlentities($row['servicio']);
            echo '<option value="' . $row ['servicio'] . '">' . $row ['servicio'] . '</option>';
        }
        echo '</select>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo VEHICULOS;
        echo '</th>';
        //echo '<td><input class="inputlargo" name="vehiculos" value=""></td>';
		echo '<td><input type="text" class="input-xxlarge" id="vehiculos" name="vehiculos" value=""></td>';
        echo '</tr>';
        ?>
        <tr>
            <th>

                <?php echo CUESTIONARIO_TRATAMIENTOS; ?>

                <!--<div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>< ?php echo CUESTIONARIO; ?></em>< ?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?></span></a></p>
                </div>-->

				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question" style="color:#ffeb3b;"></i>
					<span>
					<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?>
					</span>
				</div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><br/><?php echo INDICADOR_SERVICIO_HELP; ?></span></a></p>
                </div>


            </th>
                <td><textarea class="textareanormal" name="obstrat" cols=""    rows=""></textarea></td>
            </tr>
            <tr>
            <th>
                <?php echo CUESTIONARIO_CALIDAD; ?>

            <!--<div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>< ?php echo CUESTIONARIO; ?></em>< ?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?></span></a></p>
            </div>-->


			<!--<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
				<i class="fa fa-question" style="color:#ffeb3b;"></i>
				<span>
				<em>< ?php echo CUESTIONARIO; ?></em><br/>< ?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?>
				</span>
			</div>-->
			<div align="left">
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question" style="color:#ffeb3b;"></i>
					<span>
					<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?>
					</span>
				</div>
			</div>


            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_OFICINA_HELP; ?></span></a></p>
            </div>

            </th>
                <td><textarea class="textareanormal" name="obscal" cols="" rows=""></textarea></td>
        </tr>
        <tr>
        <th>

            <?php echo CUESTIONARIO_ALMACEN; ?>

            <!--<div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>< ?php echo CUESTIONARIO; ?></em>< ?php echo AUDITORIAS_CUESTIONARIOALMACEN; ?></span></a></p>
            </div>-->

			<div align="left">
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question" style="color:#ffeb3b;"></i>
					<span>
					<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOALMACEN; ?>
					</span>
				</div>
			</div>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_ALMACEN_HELP; ?></span></a></p>
            </div>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-warning" style="color:#ffeb3b;"></i><span class="custom warning"><img src="images/Warning.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo ATENCION; ?></em><br /><?php echo CUESTIONARIOALMACEN_ADVERTENCIA; ?></span></a></p>
            </div>


        </th>
            <td><textarea class="textareanormal" name="obsalmac" cols=""
                    rows=""></textarea></td>
        </tr>
        <tr>
            <th>

            <?php echo CUESTIONARIO_COMPRAS; ?>


            <!--<div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>< ?php echo CUESTIONARIO; ?></em>< ?php echo AUDITORIAS_CUESTIONARIOACOMPRAS; ?></span></a></p>
            </div>-->

			<div align="left">
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question" style="color:#ffeb3b;"></i>
					<span>
					<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOACOMPRAS; ?>
					</span>
				</div>
			</div>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_COMPRAS_HELP; ?></span></a></p>
            </div>



            </th>

            <td><textarea class="textareanormal" name="obscompras" cols=""
                    rows=""></textarea></td>
        </tr>
        <tr>
            <th>


                <?php echo CUESTIONARIO_FORMACION; ?>


                <!--<div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>< ?php echo CUESTIONARIO; ?></em>< ?php echo AUDITORIAS_CUESTIONARIOAFORMACION; ?></span></a></p>
                </div>-->

			<div align="left">
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question" style="color:#ffeb3b;"></i>
					<span>
					<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOAFORMACION; ?>
					</span>
				</div>
			</div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_FORMACION_HELP; ?></span></a></p>
                </div>


            </th>
            <td><textarea class="textareanormal" name="obsformac" cols=""
                    rows=""></textarea></td>
        </tr>
        <tr>
            <th>
                <?php echo CUESTIONARIO_DOCUMENTACION; ?>

                <!--<div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>< ?php echo CUESTIONARIO; ?></em>< ?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION; ?></span></a></p>
                </div>-->

			<div align="left">
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question" style="color:#ffeb3b;"></i>
					<span>
					<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION; ?>
					</span>
				</div>
			</div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_DOCUMENTACION_HELP; ?></span></a></p>
                </div>



            </th>
            <td><textarea class="textareanormal" name="obsdocum" cols=""
                    rows=""></textarea></td>
        </tr>
        <tr>
            <th>

                <?php  echo CUESTIONARIO_TALLER;?> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <!--<div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>< ?php echo CUESTIONARIO; ?></em>< ?php echo AUDITORIAS_CUESTIONARIOATALLER; ?></span></a></p>
                </div>-->

			<div align="left">
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<i class="fa fa-question" style="color:#ffeb3b;"></i>
					<span>
						<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOATALLER; ?>
					</span>
				</div>
			</div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_INFRAESTRUCTURA_HELP; ?></span></a></p>
                </div>

            </th>
                <td><textarea class="textareanormal" name="obslegio" cols="" rows=""></textarea></td>
        </tr>
        <?php
        echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {

        // $id_Post = $_POST['id'];
        if (isset ($_POST ['fecha'])) {
            $fecha_Post = $_POST ['fecha'];
        }
        if (isset ($_POST ['ai'])) {
            $ai_Post = $_POST ['ai'];
        }
        if (isset ($_POST ['auditor1'])) {
            $auditor1_Post = $_POST ['auditor1'];
        }

        $auditor1_Post = (isset ($_POST ['auditor1'])) ? $_POST ['auditor1'] : '';

        foreach ($_POST ['auditor1_add'] as $auditor1) {
            $auditor1_Post .= '' . $auditor1 . ', ';
        }
        if (isset ($_POST ['docum'])) {
            $docum_Post = $_POST ['docum'];
        }
        if (isset ($_POST ['trabajador'])) {
            $trabajador_Post = $_POST ['trabajador'];
        }

        $trabajador_Post = (isset ($_POST ['trabajador'])) ? $_POST ['trabajador'] : '';

        foreach ($_POST ['trabajador1_add'] as $trabajador) {
            $trabajador_Post .= '' . $trabajador . ', ';
        }

        if (isset ($_POST ['servicio1'])) {
            $servicio1_Post = $_POST ['servicio1'];
        }
        if (isset ($_POST ['servicio2'])) {
            $servicio2_Post = $_POST ['servicio2'];
        }
        if (isset ($_POST ['vehiculos'])) {
            $vehiculos_Post = $_POST ['vehiculos'];
        }
        if (isset ($_POST ['obstrat'])) {
            $obstrat_Post = $_POST ['obstrat'];
        }
        if (isset ($_POST ['obscal'])) {
            $obscal_Post = $_POST ['obscal'];
        }
        if (isset ($_POST ['obsalmac'])) {
            $obsalmac_Post = $_POST ['obsalmac'];
        }
        if (isset ($_POST ['obscompras'])) {
            $obscompras_Post = $_POST ['obscompras'];
        }
        if (isset ($_POST ['obsformac'])) {
            $obsformac_Post = $_POST ['obsformac'];
        }
        if (isset ($_POST ['obsdocum'])) {
            $obsdocum_Post = $_POST ['obsdocum'];
        }
        if (isset ($_POST ['obslegio'])) {
            $obslegio_Post = $_POST ['obslegio'];
        }

        $sql = mysqli_query($mysqli, "INSERT INTO aisgc (fecha, ai, auditor1, docum, trabajador1, servicio1, servicio2, vehiculos, obstrat, obscal, obsalmac, obscompras, obsformac, obsdocum, obslegio) VALUES ('" . $fecha_Post . "', '" . $ai_Post . "', '" . $auditor1_Post . "', '" . $docum_Post . "', '" . $trabajador_Post . "', '" . $servicio1_Post . "', '" . $servicio2_Post . "', '" . $vehiculos_Post . "', '" . $obstrat_Post . "', '" . $obscal_Post . "', '" . $obsalmac_Post . "', '" . $obscompras_Post . "', '" . $obsformac_Post . "', '" . $obsdocum_Post . "', '" . $obslegio_Post . "')");
        if ($sql) {
            echo "Auditoría añadida";
        } else {
            echo "Error al añadir el registro!";
        }
        // echo "Error message = ".mysql_error();
    }
}

if ($aktion == "change") {
    $sql = mysqli_query($mysqli, "SELECT * FROM aisgc ORDER BY id DESC");
    echo AUDITORIAS_ADVERTICE;
	echo '&emsp;&emsp;<span class="yellow">' . AUDITORIAS_CAMBIAR_AUDITORIA . '</span>';
    echo '<table id="myTable" class="sortable">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>';
    echo TITULO;
    echo '</th>';
    echo '<th>';
    echo AUDITORIAS_NUMERO_AUDITORIA;
    echo '</th>';
    echo '<th>';
    echo FECHA;
    echo '</th>';

    echo '<th style width="10%"><a href="#" title="' . AUDITORIAS_EDITAR_AUDITORIA . '">';
	echo '<i class="fa fa-edit" style="color:#FF5722;"></i></th>';
    echo '</tr>';
	echo '</thead><tbody>';
    while ($row = mysqli_fetch_row($sql)) {
        echo "<tr>";
        echo "<td>".$row['0']."</td>";
        echo "<td style='width: 25%'>".$row['20']."</td>";


        echo "<td>";
       ?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

					<span>
						<br />
						<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

						<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

						<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>
						<?php echo $row ['0']; ?>

            <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;"><?php echo $row ['20']; ?></div>

						<?php

							echo "<table class='print2'>
								<tr>";
								echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
										<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
										<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
										<th><font color='red'>" . DOCUMENTOS . "</font></th>
								</tr>
								<tr>
									<td style width=20%>$row[1]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
                  <td>$row[6]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[13]</td>
									<td colspan=2>$row[14]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
									<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[15]</td>
									<td colspan=2>$row[16]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[17]</td>
									<td colspan=2>$row[18]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[19]</td>
								</tr>
							</table>";
						?>
						</span>
				</div>
			<?php

		echo "</td>";


        echo "<td><a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
        echo "<td><a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "' title='" . AUDITORIAS_EDITAR_AUDITORIA . "-" . $row ['2'] . "'>
		<i class='fa fa-pencil' style='color:#FF5722;'></i></a></td>";

        echo "</tr>";
    }
    echo '</tbody>';
    echo "</table>";
}

if ($aktion == "change_id") {
    if ((empty ($_POST ['fecha_change'])) and (empty ($_POST ['ai_change'])) and (empty ($_POST ['auditor1_change'])) and (empty ($_POST ['auditor2_change'])) and (empty ($_POST ['auditor3_change'])) and (empty ($_POST ['docum_change'])) and (empty ($_POST ['trabajador1_change'])) and (empty ($_POST ['trabajador2_change'])) and (empty ($_POST ['trabajador3_change'])) and (empty ($_POST ['servicio1_change'])) and (empty ($_POST ['servicio2_change'])) and (empty ($_POST ['vehiculos_change'])) and (empty ($_POST ['obstrat_change'])) and (empty ($_POST ['obscal_change'])) and (empty ($_POST ['obsalmac_change'])) and (empty ($_POST ['obscompras_change'])) and (empty ($_POST ['obsformac_change'])) and (empty ($_POST ['obsdocum_change'])) and (empty ($_POST ['obslegio_change']))) {

        $id = (int) $_GET ['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM aisgc WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>';
        echo AUDITORIAS_PRINT_DETAILS;
        echo '</caption>';
        echo '<tbody>';
        echo '<tr>';
        echo '<th>';
        echo FECHA;
        echo '</th>';
        echo '<td>';
        ?>

        <input id='date1' class='datepicker' name='fecha_change'
            value="<?php echo $data['1']; ?>" />

        <?php
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo AUDITORIAS_AUDITORIA;
        echo '</th>';
		echo '<td><input type="text" class="form-control input-mini" id="ai_change" name="ai_change" value="'.$data[2].'"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo AUDITORIAS_AUDITOR;
        echo '</th>';

        echo '<td>';
		$id = (int) $_GET ['id'];
        $sql2 = "SELECT auditor1 FROM `aisgc` WHERE id = $id";
        $result2 = mysqli_query($mysqli, $sql2);

        //while ($row = mysqli_fetch_assoc($sql2)) {
            //echo '<option value="' . $row [USERNAME] . '">' . $row [USERNAME] . '</option>';
        //}
		 while ($row2 = mysqli_fetch_array($result2)) {

			$str2=($row2['auditor1']);
			$data1=(explode(",",$str2));

			$check=array($str2);
			if (in_array($check['0'], $data1))
			{
			$checked ="checked";
			}
			else
			{
			$checked ="";
			}

            echo '<input id="IDauditor1[]" name="auditor1_change[]" type="checkbox" value="'.$data1['0'].'" checked=' . $checked . '> ';
			echo '&nbsp;&nbsp;' . $data1['0'] . '';


		/********************************/
		if (isset($data1['1'])) {
			echo '<input id="IDauditor1[]" name="auditor1_change[]" type="checkbox" value="'.$data1['1'].'" checked=' . $checked . '> ';
			echo '&nbsp;&nbsp;' . $data1['1'] . '';
			} else {}
		/********************************/

            echo '&nbsp;&nbsp;';
        }



        //echo '</select>';
        echo '</td>';

        // echo '<td><input class="inputlargo" name="auditor1_change" value="'.$data[3].'"></td>';

        echo '</tr>';

        echo '<tr>';
        echo '<th>';
        echo DOCUMENTACION;
        echo '</th>';
        echo '<td><textarea class="textareanormal" rows="5" name="docum_change">' . $data ['6'] . '</textarea></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo TRABAJADOR;
        echo '</th>';

		echo '<td>';
		$id = (int) $_GET ['id'];
        $sql3 = "SELECT trabajador1 FROM `aisgc` WHERE id = $id";
        $result3 = mysqli_query($mysqli, $sql3);

		 while ($row3 = mysqli_fetch_array($result3)) {

			$str3=($row3['trabajador1']);
			$data1=(explode(",",$str3));

			$check=array($str3);

			if (in_array($check['0'], $data1)) {
				$checked0 ="checked";
			}
			else
			{
			$checked0 ="";
			}


			if (isset($data1['0'])) {
					echo '<input id="IDtrabajador1[]" name="trabajador1_change[]" type="checkbox" value="'.$data1['0'].'" checked=' . $checked0 . '>';
					echo '' . $data1['0'] . '';
			} else {}


			if (isset($data1['1'])) {
					echo '<input id="IDtrabajador1[]" name="trabajador1_change[]" type="checkbox" value="'.$data1['1'].'" checked=' . $checked0 . '>';
					echo '' . $data1['1'] . '';
			} else {}


			if (isset($data1['2'])) {
					echo '<input id="IDtrabajador1[]" name="trabajador1_change[]" type="checkbox" value="'.$data1['2'].'" checked=' . $checked0 . '>';
			echo '' . $data1['2'] . '';
			} else {}

           echo '&nbsp;&nbsp;';
        }

		$checked = array($str3);
		for($i=0; $i < count($checked); $i++){
			echo "Selected " . $checked[$i] . "<br/>";
		}

        echo '</td>';

		//echo '<td><input type="text" class="form-control input-xxlarge" id="trabajador1_change" name="trabajador1_change" value="'.$data[7].'"></td>';



        echo '</tr>';

        echo '<tr>';
        echo '<th>';
        echo SERVICIO_SERVICIO;
        echo '</th>';
		//echo '<td><input type="text" class="form-control input-xlarge" id="servicio1_change" name="servicio1_change" value="'.$data[10].'"></td>';


		echo '<td>';
        echo '<select name="servicio1_change" class="span4 btn-success">';
        echo '<option selected>' . $data['10'] . '</option>';
        $sql = "SELECT * FROM servicios WHERE activo=1 ORDER BY servicio ASC";
        $sql = mysqli_query($mysqli, $sql);
        if (! defined('servicio')) {
            define('SERVICIO', 'servicio');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '<option value="' . $row [SERVICIO] . '">' . $row [SERVICIO] . '</option>';
        }
        echo '</select>';
        echo '</td>';




        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo SERVICIO_SERVICIO;
        echo '</th>';
		//echo '<td><input type="text" class="form-control input-xlarge" id="servicio2_change" name="servicio2_change" value="' . $data[11] . '"></td>';


		echo '<td>';
        echo '<select name="servicio2_change" class="span4 btn-success">';
        echo '<option selected>' . $data['11'] . '</option>';
        $sql = "SELECT * FROM servicios WHERE activo=1 ORDER BY servicio ASC";
        $sql = mysqli_query($mysqli, $sql);
        if (! defined('servicio')) {
            define('SERVICIO', 'servicio');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '<option value="' . $row [SERVICIO] . '">' . $row [SERVICIO] . '</option>';
        }
        echo '</select>';
        echo '</td>';



        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo VEHICULOS;
        echo '</th>';
		echo '<td><input type="text" class="form-control input-xlarge" id="vehiculos_change" name="vehiculos_change" value="' . $data['12'] . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo CUESTIONARIO_TRATAMIENTOS;
        ?>
                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#">
                  <i class="fa fa-question" style="color:#ffeb3b;"></i>
                    <span class="custom help">
                      <img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" />
                        <em><?php echo CUESTIONARIO; ?>
                        </em>
                        <br /><?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?>
                    </span>
                  </a>
                </p>
                </div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#">
                  <i class="fa fa-exclamation" style="color:#ffeb3b;"></i>
                    <span class="custom info">
                      <img src="images/Info.png" alt="Help" title="Help" height="48" width="48" />
                        <em><?php echo INDICADOR; ?>
                        </em>
                        <?php echo INDICADOR_SERVICIO_HELP; ?>
                      </span>
                    </a>
                  </p>
                </div>

        <?php
        echo '</th>';
        echo '<td><textarea class="textareanormal" rows="5" name="obstrat_change">' . $data ['13'] . '</textarea></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo CUESTIONARIO_CALIDAD;
        ?>
            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?></span></a></p>
            </div>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_OFICINA_HELP; ?></span></a></p>
            </div>

        <?php
        echo '</th>';
        echo '<td><textarea class="textareanormal" rows="5" name="obscal_change">' . $data ['14'] . '</textarea></td>';
        echo '</tr>';

        ?>
        <tr>
        <th><?php echo CUESTIONARIO_ALMACEN; ?>
            <div align="left">

            <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOALMACEN; ?></span></a>
            </div>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_ALMACEN_HELP; ?></span></a></p>
            </div>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-warning" style="color:#ffeb3b;"></i><span class="custom warning"><img src="images/Warning.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo ATENCION; ?></em><br /><?php echo CUESTIONARIOALMACEN_ADVERTENCIA; ?></span></a></p>
            </div>
        </th>
        <td><textarea class="textareanormal" rows="5"
            name="obsalmac_change" cols="">
            <?php echo $data[15]?>
        </textarea></td>
            <th></th>
        </tr>
        <tr>
        <th><?php echo CUESTIONARIO_COMPRAS;?>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOACOMPRAS; ?></span></a></p>
            </div>

            <div align="left">
            <p class="pleft">
            <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_COMPRAS_HELP; ?></span></a></p>
            </div>

        </th>
        <td><textarea class="textareanormal" rows="5"
            name="obscompras_change" cols="">
            <?php echo $data[16]?>
        </textarea></td>
        </tr>
        <tr>
        <th><?php echo CUESTIONARIO_FORMACION; ?>
                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOAFORMACION; ?></span></a></p>
                </div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_FORMACION_HELP; ?></span></a></p>
                </div>

        </th>
            <td><textarea class="textareanormal" rows="5"
                    name="obsformac_change" cols="">
                    <?php echo $data[17]?>
                </textarea></td>
        </tr>
        <tr>
            <th><?php echo CUESTIONARIO_DOCUMENTACION; ?>
                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION; ?></span></a></p>
                </div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo INDICADOR; ?></em><?php echo INDICADOR_DOCUMENTACION_HELP; ?></span></a></p>
                </div>

        </th>
        <td><textarea class="textareanormal" rows="5"
            name="obsdocum_change" cols="">
            <?php echo $data[18]?>
        </textarea></td>
        </tr>
        <tr>
        <th><?php  echo CUESTIONARIO_TALLER; ?>
                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-question" style="color:#ffeb3b;"></i>
				<span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" />
				<em><?php echo CUESTIONARIO; ?></em><br /><?php echo AUDITORIAS_CUESTIONARIOATALLER; ?></span></a></p>
                </div>

                <div align="left">
                <p class="pleft">
                <a class="tooltip2" href="#"><i class="fa fa-exclamation" style="color:#ffeb3b;"></i><span class="custom info">
				<img src="images/Info.png" alt="Help" title="Help" height="48" width="48" />
				<em><?php echo INDICADOR; ?></em><?php echo INDICADOR_INFRAESTRUCTURA_HELP; ?></span></a></p>
                </div>

        </th>
            <td><textarea class="textareanormal" rows="5"
                    name="obslegio_change" cols="">
                    <?php echo $data[19]?>
                </textarea></td>
        </tr>
        <?php
        echo '<td colspan="2">
				<div align="left"><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></div>';
        echo '<div align="center"><a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward" style="color:black;"></i></a></div>';
        echo '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';


    } else {


//----------------------------------------------------------------------

		$id = (int) $_GET ['id'];
        $sql3 = "SELECT trabajador1 FROM `aisgc` WHERE id = $id";
        $result3 = mysqli_query($mysqli, $sql3);

		 while ($row3 = mysqli_fetch_array($result3)) {

			$str3=($row3['trabajador1']); }



		$checked = array($str3);
		for($i=0; $i < count($checked); $i++){
			//echo "Selected " . $checked[$i] . "<br/>";
			$trabajador1 = (isset ( $trabajador1 )) ? $trabajador1 : '';
			$trabajador1 .= $checked[$i];
		}

//-------------------------------------------------------------------
		$id = (int) $_GET ['id'];
        $sql3 = "SELECT auditor1 FROM `aisgc` WHERE id = $id";
        $result3 = mysqli_query($mysqli, $sql3);

		 while ($row3 = mysqli_fetch_array($result3)) {

			$str3=($row3['auditor1']); }



		$checked = array($str3);
		for($i=0; $i < count($checked); $i++){
			//echo "Selected " . $checked[$i] . "<br/>";
			$auditor1 = (isset ( $auditor1 )) ? $auditor1 : '';
			$auditor1 .= $checked[$i];
		}
//-------------------------------------------------------------------
        $id = (int) $_GET ['id'];
        $sql = mysqli_query($mysqli,
            "UPDATE aisgc SET fecha='$_POST[fecha_change]',
                ai='$_POST[ai_change]',
				auditor1='$auditor1',
                docum='$_POST[docum_change]',
				trabajador1='$trabajador1',
                servicio1='$_POST[servicio1_change]',
                servicio2='$_POST[servicio2_change]',
                vehiculos='$_POST[vehiculos_change]',
                obstrat='$_POST[obstrat_change]',
                obscal='$_POST[obscal_change]',
                obsalmac='$_POST[obsalmac_change]',
                obscompras='$_POST[obscompras_change]',
                obsformac='$_POST[obsformac_change]',
                obsdocum='$_POST[obsdocum_change]',
                obslegio='$_POST[obslegio_change]'
                WHERE id=$id"
        );

        if ($sql) {

            $id = (int) $_GET ['id'];
            $sql3 = mysqli_query($mysqli, "SELECT * FROM aisgc WHERE id = $id ");
            $data3 = mysqli_fetch_row($sql3);
            echo '<br /><br /><br />';
			echo AUDITORIAS_AUDITORIA;
            echo '&nbsp;<span class="documenttitle">' . $data3 ['2'] . '</span>&nbsp;';
            echo ACTUALIZADA;
            echo '!';
            // echo AUDITORIA_ACTUALIZADA;
        }
        // echo "Error message = ".mysql_error();
    }
}
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

			<script>
			$(document).ready(function() {
				$('#myTable').DataTable( {
					"order": [[ 0, "desc" ]],
					"deferRender": true
				} );
			} );
			</script>
