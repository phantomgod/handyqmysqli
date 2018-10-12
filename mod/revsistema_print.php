    <script src="libraries/RGraph.common.core.js" ></script>
    <script src="libraries/RGraph.line.js" ></script>
	<script src="libraries/RGraph.bar.js" ></script>
    <script src="libraries/RGraph.common.dynamic.js"></script>
    <script src="libraries/RGraph.common.context.js" ></script>
    <script src="libraries/RGraph.common.tooltips.js"></script>
    <script src="libraries/RGraph.common.annotate.js" ></script>
<?php
/**
* Mod IMPRIMIR la revisión el sistema de calidad
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/



// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "print") {
    $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");

        echo REVSISTEMA_ADVERTICE;
        echo '<center><table class="print" style="width: 400px;">';
        echo ' <caption>';
            echo REVSISTEMA_LISTA_PRINTSCREEN;
        echo ' </caption>';
        echo "</tbody>";
            echo '<tr>';
                echo '<th>';
                    echo REVSISTEMA_NUM;
                echo '</th>';
                echo '<th>';
                    echo FECHA;
                echo '</th>';
            echo '</tr>';
    while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td><a href='?seccion=revsistema_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['0']."</a> <i class='fa fa-flash' style='color:#00cbf9;'></i></td>";
                echo "<td><a href='?seccion=revsistema_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
            echo "</tr>";
    }
        echo "</tbody>";
        echo "</table></center>";
}
if ($aktion == "print_id") {
    if ((empty($_POST['fecha']))
        AND (empty($_POST['fecha']))
        AND (empty($_POST['analisisobjetivos']))
        AND (empty($_POST['analisissatisfaccionclientes']))
        AND (empty($_POST['analisisreclamacionesclientes']))
        AND (empty($_POST['analisisnoconformidadesporarea']))
        AND (empty($_POST['analisiscierresncs']))
        AND (empty($_POST['analisisincidenciasinspecciones']))
        AND (empty($_POST['analisisformacion']))
        AND (empty($_POST['analisisincidenciasalmacen']))
        AND (empty($_POST['analisisincidenciasproveedor']))
        AND (empty($_POST['analisisrevsistema']))
        AND (empty($_POST['analisisnoconformidades']))
        AND (empty($_POST['analisispolitica']))
        AND (empty($_POST['analisiscambios']))
        AND (empty($_POST['obscompras']))
        AND (empty($_POST['recomendaciones']))
    ) {
        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);


                echo '<h1>';
                echo REVSISTEMA_PRINT_DETAILS;
                echo ":&nbsp; &nbsp;$data[1]</h1>
				<div align='left'><a href='?seccion=revsistema2&amp;aktion=change_id&amp;id=".$data[0]."'>";
				echo EDITAR; echo "</a></div>";
				echo '<br />';
                echo '<h1>1. ';
                echo OBJETIVOS;
                echo '</h1>';
                echo '</p>';

         /*---------------------------------Mostramos los objetivos al modo mangui -------------------------------*/

        @$date = $data[1];

        $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales
                            WHERE Fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                            AND  '$date' ORDER BY Id DESC");
            echo '<table class="sortable">';
            echo '<tbody>';
                echo '<tr>';
                     echo '<th>';
                        echo CODIGO;
                    echo '</th>';
                    echo '<th style="width:35%">';
                        echo OBJETIVOS_NOMBRE_OBJETIVO;
                    echo '</th>';
                  //echo '<th>Origen</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th>';
                    echo '<th>Indicador</th>';
                  //echo '<th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th>-->';
                    echo '<th>';
                        echo RESULTADO;
                    echo '</th>';
                    echo '<th width="50px">';
                        echo FECHA;
                    echo '</th>';

					echo '<th width="5%"><a href="#" title="'.OBJETIVOS_EDITAR_OBJETIVO.'">';
                    echo '<i class="fa fa-edit" style="color:#752209;"></i></a></th>';
                    echo '<th width="5%"><a href="#" title="' .OBJETIVOS_IMPRIMIR_OBJETIVO.'">
                          <i class="fa fa-print" style="color:#752209;"></i></a></th>';


                echo '</tr>';

        while ($row = mysqli_fetch_row($sql)) {
                 echo "<tr>";

				 echo "<td>";


					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row[1] ?></a>
								<span>
								<br />
								<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete_objetivos.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>


								<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>
								<br />

								<?php

									echo "<table class=print>
										<tbody>
										<tr>
										<th>".CODIGO."</th>
										<td width='30%'><font class='spanredchico'>$row[1]</font></td>
										<th>".OBJETIVOS_FUENTE."</th>
										<td width='40%'><font class='spanredchico'>$row[9]</font></td>
										</tr>
										<tr>
										<th>".OBJETIVOS_NOMBRE_OBJETIVO."</th>
										<td><font class='spanredchico'>$row[2]</font></td>
										<th>".OBJETIVOS_FRECUENCIA."</th>
										<td><font class='spanredchico'>$row[10]</font></td>
										</tr>
										<tr>
										<th>".ANO."</th>
										<td><font class='spanredchico'>$row[3]</font></td>
										<th>".OBJETIVOS_PLAZO."</th>
										<td><font class='spanredchico'>$row[11]</font></td>
										</tr>
										<tr>
										<th>".OBJETIVOS_ORIGEN."</th>
										<td><font class='spanredchico'>$row[4]</font></td>
										<th>".OBJETIVOS_EJECUTOR."</th>
										<td><font class='spanredchico'>$row[12]</font></td>
										</tr>
										<tr>
										<th>".OBJETIVOS_DETECCION."</th>
										<td><font class='spanredchico'>$row[5]</font></td>
										<th>".OBJETIVOS_PERSEGUIDOR."</th>
										<td><font class='spanredchico'>$row[13]</font></td>
										</tr>
										<tr>
										<th>".OBJETIVOS_CAUSAS."</th>
										<td><font class='spanredchico'>$row[6]</font></td>
										<th>V&ordm;B&ordm;:</th>
										<td><font class='spanredchico'>$row[14]</font></td>
										</tr>
										<tr>
										<th>".OBJETIVOS_RECURSOS."</th>
										<td><font class='spanredchico'>$row[7]</font></td>
										<th>".RESULTADO."</th>
										<td><font class='spanredchico'>" . strip_tags($row['15']) . "</font></td>
										</tr>
										<tr>
										<th>".INDICADOR."</th>
										<td><font class='spanredchico'>$row[8]</font></td>
										<th>".FECHA."</th>
										<td><font class='spanredchico'>$row[16]</font></td>
										</tr>
										</tbody>
										</table>";

								?>
								</span>
						</div>
					<?php


        echo "</td>";

                   echo "<td>".$row['2']."</td>";





                    echo "<td>" . $row['8'] . "</td>";
                    echo "<td>" . $row['15'] . "</td>";
                    echo "<td width='100px'>" . $row['16'] . "</td>";

					echo "<td>";
                    echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[0]' title='".OBJETIVOS_EDITAR_OBJETIVO." - $row[1]'>";
                    echo "<i class='fa fa-pencil' style='color:#752209;'></i></a>";
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[0]' title='".OBJETIVOS_IMPRIMIR_OBJETIVO." - $row[1]'>";
                    echo "<i class='fa fa-print' style='color:#752209;'></i></a>";
                    echo "</td>";

					echo "</tr>";
        }
            echo '<tbody>';
            echo '</table>';

            echo '<br />';
            echo "Objetivos del año: ".substr($date, 0, -6)."";

                  /*----------------------------FIN mostrar objetivos---------------------------------*/
                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de los objetivos:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[2];
                echo '</div>';

				echo '<br />';

            echo '<h1>2. ';
                echo REVSISTEMA_INDICADORES;
            echo '</h1>';
            echo '<h2>2.1. ';
                echo CLIENTES;
            echo '</h2>';
            echo '<h3>2.1.1. ';
                echo SATISFACCION;
            echo '</h3>';



               /**------------------------------------------------GRÁFICOS DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/
		?>

				<STYLE type="text/css">
				iframe[seamless]{
					background-color: transparent;
					border: 0px none transparent;
					padding: 0px;
					overflow: hidden;
				}
				</style>

				<iframe src="mod/valoracionglobalclientes_revsistema.php" height="900" style="width:110%"  seamless ></iframe>


        <?php

            echo "<br /><br />";


        /**-----------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/


                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de la satisfacción de clientes:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';

        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

                echo $data[3];
                echo '</div>';

            echo '<br /><br />';
            echo '<h3>2.1.2. ';
                echo QUEJASCLIENTE;
            echo '</h3>';

                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de las quejas de clientes:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[4];
                echo '</div>';


                echo '<br /><br />';
                echo '<h2>2.2 ';
                    echo INDICADORES_MEDICIONANALISISYMEJORA;
                echo '</h2>';

            echo '<h3>2.2.1. ';
                echo INDICADORES_NOCONFORMIDADESPORAREA;
            echo '</h3>';

			echo '<div align="center"><span class="yellow">' . NCS_GRAFICA . '</span></div>';


        /**------------------------------------------------ GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/

            @$date = $data[1];
            $result = mysqli_query($mysqli,
                "SELECT afectaa, COUNT( * ) AS cantidad
                FROM hojasdemejora
                WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 300 DAY)
                AND  '$date'
                GROUP BY afectaa"
            );
        if ($result) {

                $labels = array();
				$labels2 = array();
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                    $labels[] = $row["afectaa"];
					$labels2[] = $row["cantidad"];
                    $data[]   = $row["cantidad"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
				$labels2_string = "['" . join("', '", $labels2) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

<a href="http://www.rgraph.net/"><img
	src="http://www.rgraph.net/images/logo.png" alt="" /><br />
<strong>Coded by rgraph.net</strong></a>

<!-- Don't forget to update these paths -->

<canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas>
<script type="text/javascript">
            bar1 = new RGraph.Bar('cvs2', <?php print($data_string) ?>);
            bar1. Set('chart.title', 'No conformidades por área');
            bar1. Set('chart.colors', ['Tan','#9fff30','transparent']);
            bar1. Set('chart.title.yaxis', 'Nº de NC´s');
            bar1. Set('chart.title.color', 'white');
            bar1. Set('chart.annotatable', true);
            bar1. Set('chart.events.click', myFunc3);
            bar1. Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
            bar1. Set('chart.contextmenu', [
                                     ['Show palette', RGraph.Showpalette],
                                     ['Clear', function ()
                                               {
                                                RGraph.Clear(bar1.canvas);
                                                RGraph.ClearAnnotations(bar1.canvas);
                                                bar1.Draw();
                                               }
                                     ]
                                    ]);
            bar1. Set('chart.background.grid.autofit', true);
            bar1. Set('chart.gutter.left', 45);
            bar1. Set('chart.gutter.right', 5);
            bar1. Set('chart.gutter.bottom', 150);
            bar1. Set('chart.text.angle', 45);
            bar1. Set('chart.text.color', 'white');
            bar1. Set('chart.hmargin', 10);
            bar1. Set('chart.tickmarks', 'endcircle');
            bar1. Set('chart.tooltips', <?php print($labels2_string) ?>);
            bar1. Set('chart.labels', <?php print($labels_string) ?>);
            bar1.Draw();

            /**
            * This is the function that is called when the Pie chart is clicked on
            */
            function myFunc3 (e, shape)
            {
                // If you have multiple charts on your canvas the .__object__ is a reference to
                // the last one that you created
                var obj   = e.target.__object__;

                var dataset = shape['dataset'];
                var index   = shape['index_adjusted'];
                var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset];

                alert('Value: ' + value);
            }

        </script>

<br />
<br />
<br />

<?php
            echo "Gráfica del año: ".substr($date, 0, -6)."";

         ?>

<br />
<br />

<!------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA-------------------------------------->


<?php

			echo '<div align="center"><span class="yellow">' . NCS_LISTA . '</span></div>';

                echo '<br /><br />';
        //---------------------------------------------Mostramos las no conformidades---------------------------------------*/

        $sql = mysqli_query($mysqli,
            "SELECT hojas. * , audit. *
             FROM hojasdemejora AS hojas
             JOIN informeauditoria AS audit ON hojas.ai = audit.ai
             WHERE hojas.fecha BETWEEN DATE_SUB('$date', INTERVAL 300 DAY)
             AND  '$date'
             GROUP BY hojas.id DESC
             ORDER BY  `audit`.`id` ASC "
        );
        echo "<table class='sortable'>";
        echo "<tbody>";
            echo "<tr>";
                echo "<th>"; echo FECHA; echo "</th><th>"; echo INFORME; echo "</th><th>NC</th><th>"; echo DESCRIPCION; echo "</th></tr>";
        while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td>".$row['5']."</td>";
                echo "<td>";

					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>

								<span>
								<br />
								<?php echo $row ['17']; ?>

								<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>
								<a href="?seccion=auditorias_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>

								<?php

									echo "<table class='print'>
										<tr>";
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[19]</td>
											<td>$row[18]</td>
											<td colspan=2>$row[22]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_AREA_AUDITADA . "</font></th>
											<th colspan=2><font color='red'>" . DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[20]</td>
											<td colspan=2>$row[21]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_OBJETO . "</font></th>
											<th><font color='red'>" . RESULTADO . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[23]</td>
											<td colspan=2>$row[24]</td>
										</tr>

									</table>";
								?>
								</span>
						</div>
					<?php
                    echo "</td>";
					echo "<td>";

        			?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

								<span>
								<br />
								<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
								<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-plus" style="position:absolute; left:10px; top:10px; color:#9fff30;"></i></a><!--</div>-->

								<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>


								<?php

									echo "<table class=print>
											<tbody>
											<tr>
											<th>" . NCS_NUMERO . " </th><td>$row[2]</td>
											</tr>
											<tr>
												<th>" . DESCRIPCION . " </th><td> <font color='red'>" . strip_tags($row['4'] . '<font>, <b>') . "</font></td>
											</tr>
											<tr>
												<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th><td>$row[1]</td>
											</tr>
											<tr>
												<th>" . DOCUMENTACION . "</th><td>$row[6]</td>
											</tr>
											<tr>
												<th>" . NCS_ABIERTOPOR . "</th><td>$row[7]</td>
											</tr>
											<tr>
												<th>" . NCS_AFECTAA . "</th><td>$row[8]</td>
											</tr>
											<tr>
												<th>" . NCS_CAUSAS . "</th><td>" . strip_tags($row['9'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_ACCIONES . "</th><td>" . strip_tags($row['10'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_EFICACIA . "</th><td>" . strip_tags($row['13'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_PLAZO . "</th><td>$row[11]</td>
											</tr>
											<tr>
												<th>" . NCS_CIERRE_PARCIAL . "</th><td>" . strip_tags($row['12'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . FECHA . "</th><td>$row[5]</td>
											</tr>
											<tr>
												<th>" . NCS_DESVIACION . "</th><td>$row[15]</td>
											</tr>
											<tr>
												<th>" . NCS_FECHACIERRE . "</th><td>$row[14]</td>
											</tr>
											</tbody>
											<tr> </table>";
								?>
								</span>
						</div>
					<?php
        echo "</td>";

                    echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['4']."</a></td>";
         echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

            echo '<br />';
             echo "No conformidades del año: ".substr($date, 0, -6)."";
             echo '<br /><br /><br />';
        //------------------------------------------------------FIN mostrar las no conformidades----------------------------------------------------------*/


                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de las no conformidades:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';

        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

               echo $data[5];
                echo '</div>';

                echo '<br />';

            echo '<h3>2.2.2. ';
                echo INDICADORES_DESVIACIONCIERRESNCS;
            echo '</h3>';


        /*------------------------------------------------ GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/

             @$date = $data[1];
            $result = mysqli_query($mysqli,
                "SELECT numhoja, desviacion
                FROM hojasdemejora
                WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                AND  '$date'"
            );
        if ($result) {

                $labels = array();
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                    $labels[] = $row["numhoja"];
                    $data[]   = $row["desviacion"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

<canvas id="cvs3" width="1100" height="250">[No canvas support]</canvas>
<script type="text/javascript">
                line2 = new RGraph.Line('cvs3', <?php print($data_string) ?>);
                line2.Set('chart.colors', ['red','#9fff30','transparent']);
                line2.Set('chart.title', 'Desviación plazos cierre ncs');
                line2.Set('chart.title.yaxis', 'Nº de días');
                line2.Set('chart.title.color', 'white');
                line2.Set('chart.annotatable', true);
                line2.Set('chart.events.click', myFunc3);
                line2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                line2.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(line2.canvas);
                                                    RGraph.ClearAnnotations(line2.canvas);
                                                    line2.Draw();
                                                   }
                                         ]
                                        ]);
                line2.Set('chart.background.grid.autofit', true);

                //line2.Set('chart.background.barcolor1', '#f2f2f2');
                //line2.Set('chart.background.barcolor2', '#f2f2f2');
                //line2.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
                line2.Set('chart.background.grid.autofit.numhlines', 10);
                //line2.Set('chart.colors', ['red']);
                line2.Set('chart.shadow', true);
                line2.Set('chart.linewidth', 3);
                line2.Set('chart.curvy', 1);
                line2.Set('chart.curvy.factor', 0.25);
                line2.Set('chart.filled', false);
                line2.Set('chart.text.color', 'white');
                line2.Set('chart.gutter.left', 55);
                line2.Set('chart.gutter.right', 5);
                line2.Set('chart.gutter.bottom', 100);
                line2.Set('chart.text.angle', 45);
                line2.Set('chart.hmargin', 30);
                line2.Set('chart.tickmarks', 'endcircle');
                line2.Set('chart.tooltips', <?php print($labels_string) ?>);
                line2.Set('chart.labels', <?php print($labels_string) ?>);
                line2.Set('chart.tooltips.effect', 'contract');
                line2.Draw();

                   /**
                * This is the function that is called when the Pie chart is clicked on
                */
                function myFunc3 (e, shape)
                {
                    // If you have multiple charts on your canvas the .__object__ is a reference to
                    // the last one that you created
                    var obj   = e.target.__object__;

                    var dataset = shape['dataset'];
                    var index   = shape['index_adjusted'];
                    var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset];

                    alert('Value: ' + value);
                }



            </script>
<br />
<br />
<br />
<?php
                echo "Gráfica del año: ".substr($date, 0, -6)."";
        ?>
<br />
<br />

<?php

        /*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/





                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de las desviaciones:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';

                $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

                echo $data[6];
                echo '</div>';

                echo '<br />';

            echo '<h3>2.2.3. ';
                echo INDICADORES_INCIDENCIASDEINSPECCION;
            echo '</h3>';


				/*?>
				<div id="help"
					onMouseOver="showdiv(event,'<?php echo RECUERDE_LOS_CODIGOS; ?>');"
					onMouseOut="hiddenDiv()" style='display: table;'>
					&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png" alt="" />
				</div>
				<?php*/

				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#"><b><i class="fa fa-question" style="color:#ffc107;"></i></b><span class="custom help"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . RECUERDE_LOS_CODIGOS . '</span></a></p>
				</div>';




        /*------------------------------------------------GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/
			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];
            $result = mysqli_query($mysqli,
                "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia
                 FROM inspecciones
                 WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                 AND  '$date'
                 GROUP BY codigo_incidencia"
            );
        if ($result) {
                $labels = array();
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                    $labels[] = $row["codigo_incidencia"];
                    $data[]   = $row["numincidencias"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

<canvas id="cvs4" width="1100px" height="350px">[No canvas support]</canvas>
<script type="text/javascript">
                bar2 = new RGraph.Bar('cvs4', <?php print($data_string) ?>);
                bar2.Set('chart.colors', ['lavender','#9fff30','transparent']);
                bar2.Set('chart.title', 'Número de incidencias por código');
                bar2.Set('chart.title.yaxis', 'Nº de incidencias');
                bar2.Set('chart.title.xaxis', 'Código de la incidencia');
                bar2.Set('chart.title.color', 'white');
                bar2.Set('chart.annotatable', true);
                bar2.Set('chart.events.click', myFunc3);
                bar2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                bar2.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(bar2.canvas);
                                                    RGraph.ClearAnnotations(bar2.canvas);
                                                    bar2.Draw();
                                                   }
                                         ]
                                        ]);
                bar2.Set('chart.background.grid.autofit', true);
                bar2.Set('chart.gutter.left', 100);
                bar2.Set('chart.gutter.right', 5);
                bar2.Set('chart.gutter.bottom', 100);
                bar2.Set('chart.text.angle', 45);
                bar2.Set('chart.text.color', 'white');
                bar2.Set('chart.hmargin', 10);
                bar2.Set('chart.tickmarks', 'endcircle');
                bar2.Set('chart.tooltips', <?php print($labels_string) ?>);
                bar2.Set('chart.labels', <?php print($labels_string) ?>);
                bar2.Draw();

                /**
                * This is the function that is called when the Pie chart is clicked on
                */
                function myFunc3 (e, shape)
                {
                    // If you have multiple charts on your canvas the .__object__ is a reference to
                    // the last one that you created
                    var obj   = e.target.__object__;

                    var dataset = shape['dataset'];
                    var index   = shape['index_adjusted'];
                    var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset];

                    alert('Value: ' + value);
                }

            </script>

<br />
<br />

<?php
                echo "Gráfica del año: ".substr($date, 0, -6)."";

             ?>

<br />
<br />


<?php
        /*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/


                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de las incidencias de inspección:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1cm;">';

        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

                echo $data[7];
                echo '</div>';
			echo '<br /><br />';

            echo '<h2>2.3. ';
                echo INDICADORES_DERECURSOS;

            echo '<h3>2.3.1. ';
                 echo INDICADORES_FORMACIONANUAL;
            echo '</h3>';




        /*------------------------------------------------ GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/


         /**
            * Change these to your own credentials*/


            @$date = $data[1];
            $result = mysqli_query($mysqli,
                "SELECT trabajador, SUM( horas ) AS horas
                FROM cursos
                WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                AND  '$date'
                GROUP BY trabajador"
            );
        if ($result) {

                $labels = array();
				$labels4 = array();
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                    $labels[] = $row["trabajador"];
					$labels4[] = $row["horas"];
                    $data[]   = $row["horas"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
				$labels4_string = "['" . join("', '", $labels4) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

<canvas id="cvs5" width="1100px" height="350px">[No canvas support]</canvas>
<script type="text/javascript">
                bar3 = new RGraph.Bar('cvs5', <?php print($data_string) ?>);
                bar3.Set('chart.title', 'Total de horas de formación por trabajador');
                bar3.Set('chart.colors', ['PowderBlue','#9fff30','transparent']);
                bar3.Set('chart.title.color', 'white');
                bar3.Set('chart.annotatable', true);
                bar3.Set('chart.events.click', myFunc3);
                bar3.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                bar3.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(bar3.canvas);
                                                    RGraph.ClearAnnotations(bar3.canvas);
                                                    bar3.Draw();
                                                   }
                                         ]
                                        ]);
                bar3.Set('chart.background.grid.autofit', true);
                bar3.Set('chart.gutter.left', 35);
                bar3.Set('chart.gutter.right', 5);
                bar3.Set('chart.gutter.bottom', 150);
                bar3.Set('chart.text.angle', 45);
                bar3.Set('chart.text.color', 'white');
                bar3.Set('chart.hmargin', 10);
                bar3.Set('chart.tickmarks', 'endcircle');
                bar3.Set('chart.tooltips', <?php print($labels4_string) ?>);
                bar3.Set('chart.labels', <?php print($labels_string) ?>);
                bar3.Draw();

                /**
                * This is the function that is called when the Pie chart is clicked on
                */
                function myFunc3 (e, shape)
                {
                    // If you have multiple charts on your canvas the .__object__ is a reference to
                    // the last one that you created
                    var obj   = e.target.__object__;

                    var dataset = shape['dataset'];
                    var index   = shape['index_adjusted'];
                    var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset];

                    alert('Value: ' + value);
                }

            </script>

<br />
<br />

			<?php
                echo "Gráfica del año: ".substr($date, 0, -6)."";

             ?>

<br />
<br />



			<?php


        /*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/





               echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de la formación:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';

        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

                echo $data[8];
                echo '</div>';

                echo '<br />';

            echo '<h3>2.3.2. ';
                echo INDICADORES_INCIDENCIASDEALMACEN;
            echo '</h3>';


        /*------------------------------------------------GRÁFICO DE INCIDENCIAS DE ALMACÉN--------------------------------------------*/


              /**
            * Change these to your own credentials */
			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];
            $result = mysqli_query($mysqli,
                "SELECT COUNT( obsalmac ) AS incidencias, fecha
                 FROM aisgc
                 WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                 AND  '$date'
                 AND  obsalmac >  ''
                 GROUP BY fecha"
            );
        if ($result) {
                $labels = array();
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                    $labels[] = $row["fecha"];
                    $data[]   = $row["incidencias"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
              print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }

        ?>

<canvas id="cvs6" width="1100px" height="300px">[No canvas support]</canvas>
<script type="text/javascript">
                bar4 = new RGraph.Bar('cvs6', <?php print($data_string) ?>);
                bar4.Set('chart.title', 'Incidencias en inspecciones de almacén');
                bar4.Set('chart.colors', ['red','#9fff30','transparent']);
                bar4.Set('chart.title.yaxis', 'Nº incid');
                bar4.Set('chart.title.color', 'white');
                bar4.Set('chart.title.xaxis', '');
                bar4.Set('chart.annotatable', true);
                bar4.Set('chart.events.click', myFunc3);
                bar4.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                bar4.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(bar4.canvas);
                                                    RGraph.ClearAnnotations(bar4.canvas);
                                                    bar4.Draw();
                                                   }
                                         ]
                                        ]);
                bar4.Set('chart.background.grid.autofit', true);

                /*bar4.Set('chart.background.barcolor1', '#f2f2f2');
                bar4.Set('chart.background.barcolor2', '#f2f2f2');
                bar4.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
                bar4.Set('chart.background.grid.autofit.numhlines', 10);
                bar4.Set('chart.colors', ['orange']);
                bar4.Set('chart.shadow', true);
                bar4.Set('chart.linewidth', 3);
                bar4.Set('chart.curvy', 1);
                bar4.Set('chart.curvy.factor', 0.25);
                bar4.Set('chart.filled', false);
                bar4.Set('chart.text.color', 'white');
                bar4.Set('chart.gutter.left', 50);
                bar4.Set('chart.gutter.right', 5);
                bar4.Set('chart.gutter.bottom', 100);
                bar4.Set('chart.text.angle', 45);
                bar4.Set('chart.hmargin', 10);
                bar4.Set('chart.tickmarks', 'endcircle');
                bar4.Set('chart.tooltips', <?php print($labels_string) ?>);
                bar4.Set('chart.labels', <?php print($labels_string) ?>);
                bar4.Set('chart.tooltips.effect', 'contract');
                   bar4.Draw();

                /**
            * This is the function that is called when the Pie chart is clicked on
            */
            function myFunc3 (e, shape)
            {
                // If you have multiple charts on your canvas the .__object__ is a reference to
                // the last one that you created
                var obj   = e.target.__object__;

                var dataset = shape['dataset'];
                var index   = shape['index_adjusted'];
                var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset];

                alert('Value: ' + value);
            }


            </script>

<br />
<br />

<?php
                echo "Gráfica del año: ".substr($date, 0, -6)."";
        ?>
<br />
<br />


<!------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS DE ALMACÉN-------------------------------------->

<?php

        /*--------------------------------------------------Mostramos las incidencias de almacén------------------------------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];
			$result = mysqli_query($mysqli,
            "SELECT *
             FROM  `aisgc`
             WHERE  `fecha` BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
             AND  '$date'
             AND  obsalmac >  ''
             ORDER BY  `aisgc`.`id` ASC"
        );
        if ($row = mysqli_fetch_array($result)) {
                echo "<table class = 'print'> ";
                    echo "<tr><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo INCIDENCIAS; echo "</th></tr> ";
            do {
                    echo "<tr>";
                   echo "<td>";
			?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

						<span>
						<br />
						<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

						<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

						<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>

						<?php

							echo "<table class=print>
								<tr>";
								echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
										<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
										<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
										<th></th>
								</tr>
								<tr>
									<td style width=20%>$row[fecha]</td>
									<td>$row[ai]</td>
									<td colspan=2>$row[auditor1]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[obstrat]</td>
									<td colspan=2>$row[obscal]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
									<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[obsalmac]</td>
									<td colspan=2>$row[obscompras]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[obsformac]</td>
									<td colspan=2>$row[obsdocum]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[obslegio]</td>
								</tr>
							</table>";
						?>
						</span>
				</div>
			<?php
			echo "</td>";

                    echo "<td>".$row["fecha"]."</td><td>".$row["obsalmac"]."</td></tr> ";
            } while ($row = mysqli_fetch_array($result));
                echo "</table> ";
        } else {
             echo NOSEHAENCONTRADO;

        }

        echo '<br />';
   /*-----------------------------------------------------  FIN mostrar incidencias de almacén---------------------------------------*/

                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de las incidencias de almacén:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';

        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

                echo $data[9];
                echo '</div>';

			echo '<br /><br />';
            echo '<h2>2.4. ';
            echo INDICADORES_DEPRODUCCION;
            echo '</h2>';
            echo '<h3>2.4.1. ';
            echo INDICADORES_INCIDENCIASDEPROVEEDOR;
            echo '</h3>';


        /*------------------------------------------------------------- GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/
			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];

        $result = mysqli_query($mysqli,
            "SELECT  `proveedor`, `fecha` ,  `codigoincidencia`
            FROM  `incidenciasdeproveedor`
            WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 547 DAY)
            AND  '$date'"
        );
        if ($result) {
            $labels = array();
            $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $labels[] = $row["proveedor"];
                $data[]   = $row["codigoincidencia"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
            ?>

<canvas id="cvs7" width="1000px" height="300px">[No canvas support]</canvas>
<script type="text/javascript">
                line4 = new RGraph.Line('cvs7', <?php print($data_string) ?>);
                line4.Set('chart.title', 'Códigos de incidencias de proveedor');
                line4.Set('chart.title.yaxis', 'Código');
                line4.Set('chart.title.color', 'white');
                line4.Set('chart.annotatable', true);
                line4.Set('chart.events.click', myFunc3);
                line4.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                line4.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(line4.canvas);
                                                    RGraph.ClearAnnotations(line4.canvas);
                                                    line4.Draw();
                                                   }
                                         ]
                                        ]);
                line4.Set('chart.background.grid.autofit', true);
                line4.Set('chart.colors', ['red','#9fff30','transparent']);
              //line4.Set('chart.background.barcolor1', '#f2f2f2');
              //line4.Set('chart.background.barcolor2', '#f2f2f2');
              //line4.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
                line4.Set('chart.background.grid.autofit.numhlines', 10);
                line4.Set('chart.colors', ['red']);
                line4.Set('chart.shadow', true);
                line4.Set('chart.linewidth', 3);
                line4.Set('chart.curvy', 1);
                line4.Set('chart.curvy.factor', 0.25);
                line4.Set('chart.filled', false);
                line4.Set('chart.text.angle', 45);
                line4.Set('chart.text.color', 'white');
                line4.Set('chart.gutter.left', 35);
                line4.Set('chart.gutter.right', 5);
                line4.Set('chart.gutter.bottom', 100);
                line4.Set('chart.hmargin', 10);
                line4.Set('chart.tickmarks', 'endcircle');
                line4.Set('chart.tooltips', <?php print($labels_string) ?>);
                line4.Set('chart.labels', <?php print($labels_string) ?>);
                line4.Set('chart.tooltips.effect', 'contract');
                line4.Draw();

                   /**
                * This is the function that is called when the Pie chart is clicked on
                */
                function myFunc3 (e, shape)
                {
                    // If you have multiple charts on your canvas the .__object__ is a reference to
                    // the last one that you created
                    var obj   = e.target.__object__;

                    var dataset = shape['dataset'];
                    var index   = shape['index_adjusted'];
                    var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset];

                    alert('Value: ' + value);
                }
            </script>
<br />
<br />
<br />
<?php

                echo "Gráfica del año: ".substr($date, 0, -6)."";

        /*----------------------------------FIN DE AL GRÁFICA DE INCIDENCIAS DE PROVEEDOR-----------------------------*/

                 echo '<p>';
                 echo '<h3>2.4.2. Llamadas telefónicas de los clientes (gráfica de control.</h3>';
                 echo '</p>';
                 echo '<p>';
                 echo 'Valor de control: 13% del total de lamadas.';
                 echo '</p>';

        /*------------------------- GRÁFICA DE CONTROL DE RECLAMACIONES TELEFÓNICAS DE LOS CLIENTES----------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];

                $result = mysqli_query($mysqli,
                    "SELECT mes, percent
                     FROM controlavisos
                     WHERE mes BETWEEN DATE_SUB('$date', INTERVAL 730 DAY)
                     AND  '$date'
                     ORDER BY id ASC"
                );
                    if ($result) {

                            $labels = array();
							$labels3 = array();
                            $data   = array();

                        while ($row = mysqli_fetch_assoc($result)) {
                                $labels[] = $row["mes"];
								$labels3[] = $row["percent"];
                                $data[]   = $row["percent"];
                        }

                            // Now you can aggregate all the data into one string
                            $data_string = "[" . join(", ", $data) . "]";
                            $labels_string = "['" . join("', '", $labels) . "']";
							$labels3_string = "['" . join("', '", $labels3) . "']";
                    } else {
                            print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
                    }


 ?>
<canvas id="cvs" width="1000px" height="300px">[No canvas support]</canvas>
<script type="text/javascript">
        line3 = new RGraph.Line('cvs', <?php print($data_string) ?>);
        line3.Set('chart.title', 'Porcentaje de avisos por mes');
        line3.Set('chart.title.yaxis', 'Porcentaje');
        line3.Set('chart.title.color', 'white');
        line3.Set('chart.annotatable', true);
        line3.Set('chart.events.click', myFunc3);
        line3.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        line3.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
                                            chart.Draw();
                                           }
                                 ]
                                ]);

        line3.Set('chart.background.grid.autofit', true);
        line3.Set('chart.background.grid.autofit.numhlines', 10);
        line3.Set('chart.colors', ['yellow']);
        line3.Set('chart.shadow', true);
        line3.Set('chart.linewidth', 3);
        line3.Set('chart.curvy', 1);
        line3.Set('chart.curvy.factor', 0.25);
        line3.Set('chart.filled', false);
        line3.Set('chart.text.color', 'white');
        line3.Set('chart.gutter.left', 35);
        line3.Set('chart.gutter.right', 5);
        line3.Set('chart.gutter.bottom', 100);
        line3.Set('chart.text.angle', 45);
        line3.Set('chart.hmargin', 10);
        line3.Set('chart.tickmarks', 'endcircle');
        line3.Set('chart.tooltips', <?php print($labels3_string) ?>);
        line3.Set('chart.labels', <?php print($labels_string) ?>);
        line3.Set('chart.tooltips.effect', 'contract');
		line3.Set('chart.background.hbars', [
                                          [0,10,'rgba(0,255,0,0.2)'],
                                          [10,null,'rgba(255,255,0,0.2)'],
                                          [13,null,'rgba(255,0,0,0.2)']
                                         ]);
        line3.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc3 (e, shape)
        {
            // If you have multiple charts on your canvas the .__object__ is a reference to
            // the last one that you created
            var obj   = e.target.__object__;

            var dataset = shape['dataset'];
            var index   = shape['index_adjusted'];
            var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset];

            alert('Value: ' + value);
        }

    </script>


<?php


        /*--------------------- FIN DE LA GRÁFICA DE CONTROL DE RECLAMACIONES TELEFÓNICAS DE LOS CLIENTES--------------------------*/




    echo '<br />';

         /*-------------------------------------------Mostramos las incidencias de proveedor----------------------------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];


        $sql2 = mysqli_query($mysqli,
            "SELECT *
             FROM incidenciasdeproveedor
             WHERE  `fecha` BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
             AND  '$date'
             ORDER BY fecha ASC "
        );


        echo '<table class="print">';
          echo "<tbody>";
              echo ' <tr>';
                  echo '<th>Proveedor</th><th>Incidencia</th><th>Fecha</th></tr>';
          while ($row = mysqli_fetch_row($sql2)) {
              echo "<tr>";
                //echo "<td>".$row['0']."</td>";
                  echo "<td>".$row['1']."</td>";
                  echo "<td>".$row['2']."</td>";
                  echo "<td>".$row['5']."</td>";
              echo "</tr>";
              echo "</tbody>";
            echo "</table>";

          }
          if ($sql2) {



          } else {


			echo NOSEHAENCONTRADO;// no rows found
		}


        /*-------------------------------------------- FIN mostrar las incidencias de proveedor-------------------------------*/

                //echo '<br /><br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de las incidencias de proveedor y de los avisos telefónicos:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[10];
                echo '</div>';

            echo '<p>';
            echo '<h1>3. ';
                echo AUDITORIAS;
            echo '</h1>';
            echo '</p>';

        //-----------------------------------------------Mostramos las auditorías---------------------------------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];

        $sql = mysqli_query($mysqli,
            "SELECT aisgc. * , informeauditoria . *
            FROM informeauditoria, aisgc
            WHERE informeauditoria.ai = aisgc.ai
            AND aisgc.fecha BETWEEN DATE_SUB('$date', INTERVAL 300 DAY)
            AND  '$date'
            AND informeauditoria.Fecha BETWEEN DATE_SUB('$date', INTERVAL 300 DAY)
            AND  '$date'
            GROUP BY informeauditoria.ai"
        );
            echo '<table class="print">';
            echo "<tbody>";
                echo ' <tr>';
                     echo '<th>'; echo AUDITORIAS_AUDITORIA; echo '</th><th>';echo INFORME; echo '</th><th>'; echo FECHA; echo '</th><th>'; echo RESULTADO; echo '</th></tr>';
        while ($row = mysqli_fetch_row($sql)) {
                echo "<tr>";
                   echo "<td>";

					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

								<span>
								<br />
								<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>

								<?php

									echo "<table class='print2'>
										<tr>";
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[1]</td>
											<td>$row[2]</td>
											<td colspan=2>$row[3]</td>
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
											<td colspan=2>$row[19]</td>
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
                   echo "<td>";

					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['22'] ?></a>

								<span>
								<br />

								<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>


								<a href="?seccion=auditorias_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
								<?php echo $row ['20']; ?>

								<?php

									echo "<table class='print2'>
										<tr>";
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[23]</td>
											<td>$row[22]</td>
											<td colspan=2>$row[26]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_AREA_AUDITADA . "</font></th>
											<th colspan=2><font color='red'>" . DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[24]</td>
											<td colspan=2>$row[25]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_OBJETO . "</font></th>
											<th><font color='red'>" . RESULTADO . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[27]</td>
											<td colspan=2>$row[28]</td>
										</tr>

									</table>";
								?>
								</span>
						</div>
					<?php
					echo "</td>";
                    echo "<td>".$row['23']."</td>";
                    echo "<td>".$row['28']."</td>";
                    echo "</tr>";
        }
            echo "</tbody>";
            echo "</table>";
             echo '<br /><br />';

             echo "Auditorías e informes del año: ".substr($date, 0, -6)."";

                echo '<br /><br />';

        //-------------------------------------------------------FIN mostrar las auditorías----------------------------------------------------*/

                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de los resultados de las auditorías:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[11];
                echo '</div>';


                echo '<h1>4. ';
                  echo NOCONFORMIDADESYMEJORAS;
                echo '</h1>';


				echo '<a class="tooltip2" href="#">
						<b><i class="fa fa-question" style="color:#1A237E;"></i></b>
					    <span class="custom help"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" />
						<em>' . INFORMACION . '</em>' . AUDITORIAS_JOIN_HELP . '</span>
					  </a>';


                /*?>
				<div id="help"
					onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');"
					onMouseOut="hiddenDiv()" style='display: table;'>
					&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png" alt="" />
				</div>
				<p></p>
				<?php*/



         //-------------------------------------------------------Mostramos las no conformidades------------------------------------------------*/
			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];


        $sql = mysqli_query($mysqli,
            "SELECT hojas. * , audit. *
             FROM hojasdemejora AS hojas
             JOIN informeauditoria AS audit ON hojas.ai = audit.ai
             WHERE hojas.fecha BETWEEN DATE_SUB('$date', INTERVAL 300 DAY)
             AND  '$date'
             GROUP BY hojas.id DESC
             ORDER BY  `audit`.`id` ASC"
        );
        echo "<table class='sortable'>";
        echo "<tbody>";
            echo "<tr>";
                echo "<th width='100px'>"; echo FECHA; echo "</th><th>"; echo INFORME; echo "</th><th>NC</th><th>"; echo DESCRIPCION; echo "</th></tr>";
        while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['5']."</a></td>";

                echo "<td>";

					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>

								<span>
								<br />
								<?php echo $row ['17']; ?>

								<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>


								<a href="?seccion=auditorias_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>

                <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;">Informe de la : <?php echo $row ['20']; ?></div>
  							<br>

								<?php

									echo "<table class='print'>
										<tr>";
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[19]</td>
											<td>$row[18]</td>
											<td colspan=2>$row[22]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_AREA_AUDITADA . "</font></th>
											<th colspan=2><font color='red'>" . DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[20]</td>
											<td colspan=2>$row[21]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_OBJETO . "</font></th>
											<th><font color='red'>" . RESULTADO . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[23]</td>
											<td colspan=2>$row[24]</td>
										</tr>

									</table>";
								?>
								</span>
						</div>
					<?php
                    echo "</td>";

                echo "<td>";

        			?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

								<span>
								<br />
								<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
								<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-plus" style="position:absolute; left:10px; top:10px; color:#9fff30;"></i></a><!--</div>-->

								<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>


								<?php

									echo "<table class=print>
											<tbody>
											<tr>
											<th>" . NCS_NUMERO . " </th><td>$row[2]</td>
											</tr>
											<tr>
												<th>" . DESCRIPCION . " </th><td> <font color='red'>" . strip_tags($row['4'] . '<font>, <b>') . "</font></td>
											</tr>
											<tr>
												<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th><td>$row[1]</td>
											</tr>
											<tr>
												<th>" . DOCUMENTACION . "</th><td>$row[6]</td>
											</tr>
											<tr>
												<th>" . NCS_ABIERTOPOR . "</th><td>$row[7]</td>
											</tr>
											<tr>
												<th>" . NCS_AFECTAA . "</th><td>$row[8]</td>
											</tr>
											<tr>
												<th>" . NCS_CAUSAS . "</th><td>" . strip_tags($row['9'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_ACCIONES . "</th><td>" . strip_tags($row['10'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_EFICACIA . "</th><td>" . strip_tags($row['13'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_PLAZO . "</th><td>$row[11]</td>
											</tr>
											<tr>
												<th>" . NCS_CIERRE_PARCIAL . "</th><td>" . strip_tags($row['12'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . FECHA . "</th><td>$row[5]</td>
											</tr>
											<tr>
												<th>" . NCS_DESVIACION . "</th><td>$row[15]</td>
											</tr>
											<tr>
												<th>" . NCS_FECHACIERRE . "</th><td>$row[14]</td>
											</tr>
											</tbody>
											<tr> </table>";
								?>
								</span>
						</div>
					<?php
        echo "</td>";;

                    echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['4']."</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

            echo '<br /><br />';
             echo "No conformidades del año: ".substr($date, 0, -6)."";
             echo '<br />';

        //-----------------------------------------FIN mostrar las no conformidades--------------------------------------*/
			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);

                echo '<br /><br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de las no conformidades y mejoras:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[12];
                echo '</div>';
                echo '<p>';
                echo '<h1>5. ';
                echo POLITICADECALIDAD;
                echo '</h1>';
                echo '</p>';

                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis de la política de calidad:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[13];
                echo '</div>';

                echo '<p>';

                echo '<h1>6. Análisis de riesgos y  ';
                echo CAMBIOS;
                echo '</h1>';
                echo '</p>';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Análisis:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[14];
                echo '</div>';

                echo '<p>';

                echo '<h1>7. ';
                echo RECOMENDACIONESYCONCLUSIONES;
                echo '</h1>';
                echo '</p>';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="resaltartexto4">Recomendaciones y conclusiones:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[15];
                echo '</div>';

                echo '<p></p>';

    }
}
?>
