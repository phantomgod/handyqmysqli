<?php
/**
* Mod REVISAR el sistema de calidad
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
<script language="Javascript">
function abrir(pagina) {
	window.open(pagina,'window','params');
}
</script>
    <!-- Don't forget to update these paths -->

    <script src="libraries/RGraph.common.core.js" ></script>
    <script src="libraries/RGraph.line.js" ></script>
		<script src="libraries/RGraph.bar.js" ></script>
    <script src="libraries/RGraph.common.dynamic.js"></script>
    <script src="libraries/RGraph.common.context.js" ></script>
    <script src="libraries/RGraph.common.tooltips.js"></script>
    <script src="libraries/RGraph.common.annotate.js" ></script>

              <a href="?seccion=revsistema_select"><?php echo REVISAR_SISTEMA; ?></a> ::
              <a href="?seccion=revsistema2&amp;aktion=change"><?php echo MODIFICAR_REVISION; ?></a>

<br />

<?php

/* requires the class
        require "class.datepicker.php";

        // instantiate the object
        $db=new datepicker();

        // uncomment the next line to have the calendar show up in german
        $db->language = "spanish";

        $db->firstDayOfWeek = 1;

        // set the format in which the date to be returned
         $db->dateFormat = "Y-m-d"; */



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
        AND (empty($_POST['analisisobjetivos']))
        AND (empty($_POST['analisissatisfaccionclientes']))
        AND (empty($_POST['analisisreclamacionesclientes']))
        AND (empty($_POST['analisisnoconformidadesporarea']))
        AND (empty($_POST['analisiscierresncs']))
        AND (empty($_POST['analisisincidenciasinspecciones']))
        AND (empty($_POST['analisisformacion']))
        AND (empty($_POST['analisisincidenciasalmacen']))
        AND (empty($_POST['analisisincidenciasproveedor']))
        AND (empty($_POST['analisisauditorias']))
        AND (empty($_POST['analisisnoconformidades']))
        AND (empty($_POST['analisispolitica']))
        AND (empty($_POST['analiscambios']))
        AND (empty($_POST['recomendaciones']))
    ) {

		 echo '<span class="span6 btn btn-warning"><div class="yellow">'.REVSISTEMA_USTEDESTA.'<br /></div></span><br/><br/><br/>';
		 echo '<form action="" method="POST">';



		echo '<h1>1. ' . OBJETIVOS . ':</h1>';

        /*---------------------------------Mostramos los objetivos al modo mangui -------------------------------*/
		if (!isset($from_date)) $from_date = $_POST['seleccione'];
		if (!isset($to_date)) $to_date = $_POST['seleccione2'];

        $sql = mysqli_query($mysqli,
            "SELECT *
             FROM  `objetivosdatosgenerales`
             WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'"
        ) or die("Error: ".mysqli_error($mysqli));

            echo "<table class='sortable'>";
            echo "<tbody>";
                echo "<tr>";
                    echo '<th>'.CODIGO.'</th>';
                    echo '<th>'.OBJETIVOS_NOMBRE_OBJETIVO.'</th>';
                  //echo "<th>Origen</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th>";
                    echo "<th>Indicador</th>";
                  //echo "<th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th>";
                    echo '<th>'.RESULTADO.'</th>';
                    echo '<th>'.FECHA.'</th>';


                    echo '<th style width="5%"><a href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_EDITAR_OBJETIVO.'">';
                    echo '<i class="fa fa-pencil" style="color:#752209;"></i></a></th>';
                    echo '<th style width="5%"><a href="?seccion=objetivos_print&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
                          <i class="fa fa-print" style="color:#752209;"></i></a></th>';


                echo "</tr>";
        while ($row = mysqli_fetch_row($sql)) {
                echo "<tr>";
                echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['1']."</a></td>";
                   echo "<td>";
				?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

							<span>
								<br />
								<!--<div onMouseOver="showdiv(event,'< ?php echo objetivos_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
								<a href="?seccion=objetivos_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-plus" style="position:absolute; left:10px; top:10px; color:#9fff30;"></i></a><!--</div>-->

								<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>


								<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>

								<!--<a href="?seccion=buscancs"><i class="fa fa-search" style="position:absolute; left:250px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=ncsporarea"><i class="fa fa-signal" style="position:absolute; left:290px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:absolute; left:330px; top:10px; color:White;"></i></a>-->

								<?php

						echo "<table class=print>
                            <caption>Objetivo: <div class=documenttitle>" . $row['2'] . "</div></caption>
                            <tbody>
                                <tr>
                                    <th style=width:50px>
                                        " . CODIGO . "
                                    </th>
                                        <td>" . $row['1'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_NOMBRE_OBJETIVO . "
                                    </th>
                                        <td>" . $row['2'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . ANO . "
                                    </th>
                                        <td>" . $row['3'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_ORIGEN . "
                                    </th>
                                        <td>" . $row['4'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_DETECCION . "
                                    </th>
                                        <td>" . $row['5'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_CAUSAS . "
                                    </th>
                                        <td>" . $row['6'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_RECURSOS . "
                                    </th>
                                        <td>" . $row['7'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . INDICADOR . "
                                    </th>
                                        <td>" . $row['8'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                       " . OBJETIVOS_FUENTE . "
                                    </th>
                                        <td>" . $row['9'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                       " . OBJETIVOS_FRECUENCIA . "
                                    </th>
                                        <td>" . $row['10'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                       " . OBJETIVOS_PLAZO . "
                                    </th>
                                        <td>" . $row['11'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_EJECUTOR . "
                                    </th>
                                        <td>" . $row['12'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                         " . OBJETIVOS_PERSEGUIDOR . "
                                    </th>
                                        <td>" . $row['13'] . "</td>
                                </tr>
                                <tr>
                                    <th>VºBº: </th>
                                        <td>" . $row['14'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                         " . RESULTADO . "
                                    </th>
                                        <td>" . $row['15'] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                         " . FECHA . "
                                    </th>
                                        <td>" . $row['16'] . "</td>
                                </tr>
                            </tbody>
                    </table>";
								?>
							</span>
						</div>
					<?php

                echo "</td>";
                            echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['8']."</a></td>";
                            echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['15']."</a></td>";
                            echo "<td style=width:100px><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['16']."</a></td>";

                            echo "<td>";
                            echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[0]' title='" . OBJETIVOS_EDITAR_OBJETIVO . "  - " . $row['1'] . "'>";
                            echo "<i class='fa fa-pencil' style='color:#752209;'></i></a>";
                            echo "</td>";
                            echo "<td>";
                            echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[0]' title='" . OBJETIVOS_IMPRIMIR_OBJETIVO . "  - " . $row['1'] . "'>";
                            echo "<i class='fa fa-print' style='color:#752209;'></i></a>";
                            echo "</td>";

                            echo "</tr>";
        }
                            echo "</tbody>";
                            echo "</table>";

                             echo '<br />';
                             echo "Objetivos desde la fecha: '$from_date' a  '$to_date'";


                    //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount = mysqli_query($mysqli,
                                "SELECT COUNT( * ) AS count
                                 FROM  `objetivosdatosgenerales`
                                 WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row2 = mysqli_fetch_row($sqlcount)) {
                            echo "Se han encontrado $row2[0] objetivos;";
                            }
                    //Fin de contar registros


          /*----------------------------FIN mostrar objetivos---------------------------------*/

                        echo "<br />";
                         echo '<span class="yellow">Análisis del cumplimiento de objetivos:</span>';
                        echo "<br />"; ;

                    echo '<textarea class="textareanormal" name="analisisobjetivos" placeholder="Objetivo: 100%" value="">Objetivo: 100%</textarea>';
                    echo '<br />';


            echo '<h1>2. ';
                echo REVSISTEMA_INDICADORES;
            echo '</h1>';
            echo '<h2>2.1. ' . CLIENTES . '</h2>';
                echo '<h3>2.1.1. ' . SATISFACCION . '</h3>';

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

				<iframe src="mod/valoracionglobalclientes_revsistema.php" height="1000" style="width:110%"  seamless ></iframe>


        <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

            echo "<br /><br />";


        /**-----------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/


		echo "<br />";
				 echo '<span class="yellow">Análisis de la satisfacción del cliente:</span>';
				echo "<br />"; ;
				echo '<br />';
            echo '<textarea class="textareanormal" name="analisissatisfaccionclientes" placeholder="Valoraciones globales encuestas > 4. Impresiones fundadas de los trabajadores" value="">Valoraciones globales encuestas > 4. Impresiones fundadas de los trabajadores</textarea>';
        echo '<br />';
            echo '<h3>2.1.2. Quejas y reclamaciones</h3>';
				echo "<br />";
				 echo '<span class="yellow">Análisis de quejas y reclamaciones:</span>';
				echo "<br />"; ;
        echo '<br />';
            echo '<textarea class="textareanormal" name="analisisreclamacionesclientes" placeholder="Reclamaciones = 0" value="">Objetivo: Reclamaciones = 0</textarea>';
        echo '<br />';
            echo '<h2>2.2. Indicadores de MEDICIÓN, ANÁLISIS Y MEJORA</h2>';
                echo '<h3>2.2.1. Nº de no conformidades por área</h3>';

        /**------------------------------------------------ GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/

			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];
            $result4 = mysqli_query($mysqli,
                "SELECT afectaa, COUNT( * ) AS cantidad
                FROM hojasdemejora
                WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                GROUP BY afectaa"
            ) or die("Error: ".mysqli_error($mysqli));
        if ($result4) {

                $labels = array();
                $data   = array();

            while ($row4 = mysqli_fetch_assoc($result4)) {
                    $labels[] = $row4["afectaa"];
                    $data[]   = $row4["cantidad"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

        <a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png"><br /><strong>Coded by rgraph.net</strong></a>

        <!-- Don't forget to update these paths -->

        <canvas id="cvs1" width="1100" height="300">[No canvas support]</canvas>
        <script>
            bar1 = new RGraph.Bar('cvs1', <?php print($data_string) ?>);
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
            bar1. Set('chart.tooltips', <?php print($labels_string) ?>);
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

            <?php
            echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";



        echo "<br /><br />";

       //------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA-----------------------------


				echo "<br />";
				 echo '<span class="yellow">Análisis de las NCs por área:</span>';
				echo "<br />"; ;
                echo '<br />';
                    echo '<textarea class="textareanormal" name="analisisnoconformidadesporarea" placeholder="Objetivo : 0 NC´s" value="">Objetivo : 0 NC´s</textarea>';
                echo '<br />';
                    echo '<h3>2.2.2. Desviaciones en el plazo de cierre de las NC´s</h3>';

        /*------------------------------------------------ GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/

			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];

            $result5 = mysqli_query($mysqli,
                "SELECT numhoja, desviacion
                FROM hojasdemejora
                WHERE fecha BETWEEN '$from_date' AND  '$to_date'"
            ) or die("Error: ".mysqli_error($mysqli));
        if ($result5) {

                $labels = array();
                $data   = array();

            while ($row5 = mysqli_fetch_assoc($result5)) {
                    $labels[] = $row5["numhoja"];
                    $data[]   = $row5["desviacion"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

            <canvas id="cvs2" width="1100" height="250">[No canvas support]</canvas>
            <script>
                line2 = new RGraph.Line('cvs2', <?php print($data_string) ?>);
                line2.Set('chart.colors', ['red','#9fff30','transparent']);
                line2.Set('chart.title', 'Desviación plazos cierre ncs');
                line2.Set('chart.title.yaxis', 'Nº de días');
								line2. Set('chart.title.color', 'white');
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
								line2. Set('chart.text.color', 'white');
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
        <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

            echo"<br /><br />";


        /*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/


		echo "<br />";
		 echo '<span class="yellow">Análisis de las desviaciones de plazo:</span>';
		echo "<br />"; ;
        echo '<textarea class="textareanormal" name="analisiscierresncs" value="">Valor de control: 0.</textarea>';
        echo '<h3>2.2.3. Incidencias de inspección</h3>';

         $sql6 = mysqli_query($mysqli, "SELECT * FROM codigosincidenciasinspecciones ORDER BY id ASC") or die("Error: ".mysqli_error($mysqli));
        while ($row6 = mysqli_fetch_row($sql6)) {
                        echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                        echo "<th>"; echo GRAVEDAD; echo "</th><th>"; echo CODIGO; echo "</th><th>"; echo TIPO; echo"</th></tr>";
                        echo "<tr><td>"; echo "$row6[1]"; echo "</td><td>"; echo "$row6[2]"; echo "</td><td colspan=2>"; echo "$row6[3]"; echo "</td></tr>";
                        echo "</table>'>";
                        echo "$row6[2], </a>";
        }


        /*------------------------------------------------GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/



			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];

            $result7 = mysqli_query($mysqli,
                "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia
                 FROM inspecciones
                 WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                 GROUP BY codigo_incidencia"
            ) or die("Error: ".mysqli_error($mysqli));
        if ($result7) {
                $labels = array();
                $data   = array();

            while ($row7 = mysqli_fetch_assoc($result7)) {
                    $labels[] = $row7["codigo_incidencia"];
                    $data[]   = $row7["numincidencias"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

            <canvas id="cvs3" width="1100px" height="350px">[No canvas support]</canvas>
            <script>
                bar2 = new RGraph.Bar('cvs3', <?php print($data_string) ?>);
                bar2.Set('chart.colors', ['lavender','#9fff30','transparent']);
                bar2.Set('chart.title', 'Número de incidencias por código');
                bar2.Set('chart.title.yaxis', 'Nº de incidencias');
                bar2.Set('chart.title.xaxis', 'Código de la incidencia');
								bar2. Set('chart.title.color', 'white');
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
								bar2. Set('chart.text.color', 'white');
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

                <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";



             echo "<br /><br />";


        /*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

			echo "<br />";
			 echo '<span class="yellow">Análisis de las incidencias:</span>';
			echo "<br />"; ;
            echo '<textarea class="textareanormal" name="analisisincidenciasinspecciones" value="">1 incidencia leve por inspección.</textarea>';
            echo '<br />';
            echo '<h2>2.3. Indicadores de RECURSOS</h2>';
            echo '<h3>2.3.1. Formación anual</h3>';

        /*------------------------------------------------ GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/


         /** Change these to your own credentials*/

			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];


            $result8 = mysqli_query($mysqli,
                "SELECT trabajador, SUM( horas ) AS horas
                FROM cursos
                WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                GROUP BY trabajador"
            ) or die("Error: ".mysqli_error($mysqli));
        if ($result8) {

                $labels = array();
                $data   = array();

            while ($row8 = mysqli_fetch_assoc($result8)) {
                    $labels[] = $row8["trabajador"];
                    $data[]   = $row8["horas"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

            <canvas id="cvs4" width="1100px" height="350px">[No canvas support]</canvas>
            <script>
                bar3 = new RGraph.Bar('cvs4', <?php print($data_string) ?>);
                bar3.Set('chart.title', 'Total de horas de formación por trabajador');
								bar3. Set('chart.title.color', 'white');
                bar3.Set('chart.colors', ['PowderBlue','#9fff30','transparent']);
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
								bar3. Set('chart.text.color', 'white');
                bar3.Set('chart.hmargin', 10);
                bar3.Set('chart.tickmarks', 'endcircle');
                bar3.Set('chart.tooltips', <?php print($labels_string) ?>);
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

                <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

             echo "<br /><br />";

        /*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/


			echo "<br />";
			 echo '<span class="yellow">Análisis de la formación:</span>';
			echo "<br />"; ;
			echo '<textarea class="textareanormal" name="analisisformacion" placeholder="4 h / año / trabajador" value="">20 horas cada tres años</textarea>';
			echo '<br />';


		echo '<h3>2.3.2. Incidencias de almacén</h3>';

					//echo '<p style="text-indent: 2cm;">';


        /*------------------------------------------------GRÁFICO DE INCIDENCIAS DE ALMACÉN--------------------------------------------*/


              /**
            * Change these to your own credentials */

			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];

            $result9 = mysqli_query($mysqli,
                "SELECT COUNT( obsalmac ) AS incidencias, fecha
                 FROM aisgc
                 WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                 AND  obsalmac >  ''
                 GROUP BY fecha"
            ) or die("Error: ".mysqli_error($mysqli));
        if ($result9) {
                $labels = array();
                $data   = array();

            while ($row9 = mysqli_fetch_assoc($result9)) {
                    $labels[] = $row9["fecha"];
                    $data[]   = $row9["incidencias"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
              print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }

        ?>

            <canvas id="cvs5" width="1100px" height="300px">[No canvas support]</canvas>
             <script>
                line3 = new RGraph.Line('cvs5', <?php print($data_string) ?>);
                line3.Set('chart.title', 'Incidencias en inspecciones de almacén');
                line3.Set('chart.colors', ['red','#9fff30','transparent']);
                line3.Set('chart.title.yaxis', 'Nº incid');
                line3.Set('chart.title.xaxis', '');
								line3. Set('chart.title.color', 'white');
                line3.Set('chart.annotatable', true);
                line3.Set('chart.events.click', myFunc3);
                line3.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                line3.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(line3.canvas);
                                                    RGraph.ClearAnnotations(line3.canvas);
                                                    line3.Draw();
                                                   }
                                         ]
                                        ]);
                line3.Set('chart.background.grid.autofit', true);

                /*line3.Set('chart.background.barcolor1', '#f2f2f2');
                line3.Set('chart.background.barcolor2', '#f2f2f2');
                line3.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
                line3.Set('chart.background.grid.autofit.numhlines', 10);
                line3.Set('chart.colors', ['orange']);
                line3.Set('chart.shadow', true);
                line3.Set('chart.linewidth', 3);
                line3.Set('chart.curvy', 1);
                line3.Set('chart.curvy.factor', 0.25);
                line3.Set('chart.filled', false);
								line3. Set('chart.text.color', 'white');
                line3.Set('chart.gutter.left', 50);
                line3.Set('chart.gutter.right', 5);
                line3.Set('chart.gutter.bottom', 100);
                line3.Set('chart.text.angle', 45);
                line3.Set('chart.hmargin', 10);
                line3.Set('chart.tickmarks', 'endcircle');
                line3.Set('chart.tooltips', <?php print($labels_string) ?>);
                line3.Set('chart.labels', <?php print($labels_string) ?>);
                line3.Set('chart.tooltips.effect', 'contract');
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

           <br />
        <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

           echo "<br /><br />";

        //-----------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS DE ALMACÉN-------------------------------------

        /*-------------------------------------------------Mostramos las incidencias de almacén ---------------------------------------*/
			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];

        $result10 = mysqli_query($mysqli,
            "SELECT *
             FROM  `aisgc`
             WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'
             AND  obsalmac >  ''
             ORDER BY  `aisgc`.`id` ASC"
        ) or die("Error: ".mysqli_error($mysqli));
        if ($row10 = mysqli_fetch_array($result10)) {
                  echo "<table class = 'sortable'> ";
                  echo '<tr><th>AI</th><th>'.INDICADORES_INCIDENCIASDEALMACEN.'</th></tr>';
            do {
                 echo "<tr><td>";

                     ?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row10['0'] ?>"><?php echo $row10['2'] ?></a>

					<span>
						<br />
						<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row10 ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row10 ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

						<a href="mod/javaformdelete.php?var=<?php echo $row10 ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row10 ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

						<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row10 ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row10 ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
						<?php echo $row10 ['0']; ?>

						<?php

							echo "<table class='print2'>
								<tr>";
								echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
										<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
										<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
										<th></th>
								</tr>
								<tr>
									<td style width=20%>$row10[1]</td>
									<td>$row10[2]</td>
									<td colspan=2>$row10[3]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row10[13]</td>
									<td colspan=2>$row10[14]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
									<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row10[15]</td>
									<td colspan=2>$row10[16]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row10[17]</td>
									<td colspan=2>$row10[18]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row10[19]</td>
								</tr>
							</table>";
						?>
						</span>
				</div>
			<?php

                 echo "</td><td>".$row10["obsalmac"]."</td></tr> ";
            } while ($row10 = mysqli_fetch_array($result10));
                  echo "</table> ";

                    //contamos los registros encontrados desde esas fechas

                            echo '<br />';
                            echo "Incidencias desde la fecha: '$from_date' a  '$to_date'";

                            echo '&nbsp;&nbsp;';
                            $sqlcount2 = mysqli_query($mysqli,
                                "SELECT COUNT( * ) AS count
                                 FROM  `aisgc`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'
                                 AND  obsalmac >  '' "
                            );

                            while ($row11 = mysqli_fetch_row($sqlcount2)) {
                            echo "Se ha/n encontrado $row11[0] incidencia/s;";
                            }
                    //Fin de contar registros



        } else {
              echo NOSEHAENCONTRADO;// no rows found
        }



        /*----------------------------------------------FIN mostrar incidencias de almacén-----------------------------------------*/



			echo "<br />";
			 echo '<span class="yellow">Análisis delas incidencias de almacén:</span>';
			echo "<br />"; ;
            echo '<textarea class="textareanormal" name="analisisincidenciasalmacen" placeholder="< 3 incidencias leves/ auditoría" value="">< 3 incidencias leves/ auditoría</textarea>';
            echo '<br />';
            echo '<h2>2.4. Indicadores de PRODUCCIÓN</h2>';
                echo '<h3>2.4.1. Incidencias de proveedor</h3>';
            echo '<p style="text-indent: 0cm;">';

        /*------------------------------------------------------------- GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/


			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];
        $result12 = mysqli_query($mysqli,
            "SELECT  `fecha` ,  `codigoincidencia`
            FROM  `incidenciasdeproveedor`
            WHERE fecha BETWEEN '$from_date' AND  '$to_date'"
        ) or die("Error: ".mysqli_error($mysqli));
        if ($result12) {
            $labels = array();
            $data   = array();

            while ($row12 = mysqli_fetch_assoc($result12)) {
                $labels[] = $row12["fecha"];
                $data[]   = $row12["codigoincidencia"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
            ?>

            <canvas id="cvs6" width="1000px" height="300px">[No canvas support]</canvas>
            <script>
                line4 = new RGraph.Line('cvs6', <?php print($data_string) ?>);
                line4.Set('chart.title', 'Códigos de incidencias de proveedor');
                line4.Set('chart.title.yaxis', 'Código');
								line4. Set('chart.title.color', 'white');
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
								line4. Set('chart.text.color', 'white');
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
             <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";
             ?>
           <br /><br />


        <?php
        /*----------------------------------------------FIN DE AL GRÁFICA DE INCIDENCIAS DE PROVEEDOR-------------------------------------------*/

        /*---------------------------------------------- MOSTRAMOS LAS INCIDENCIAS DE PROVEEDOR-------------------------------------------*/

        echo '</p>';
        echo '<br />';

			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];
                $sql13 = mysqli_query($mysqli,
                    "SELECT p.id id1, p. * , i.id id2, i. *
                    FROM proveedores p
                    JOIN incidenciasdeproveedor i ON p.proveedor = i.proveedor
                    AND i.fecha BETWEEN '$from_date' AND  '$to_date'
                    ORDER BY i.fecha ASC"
                )  or die("Error: ".mysqli_error($mysqli));
                     echo '<table class="sortable">';
                     echo "<tbody>";
                         echo ' <tr>';
                             echo '<th>ID</th><th>'.INCIDENCIA.'</th><th>'.PROVEEDORES_PROVEEDOR.'</th><th>'.FECHA.'</th></tr>';
        while ($row13 = mysqli_fetch_row($sql13)) {
                        echo "<tr>";
                            echo "<td>".$row13['0']."</td>";
                            echo "<td>";

                                   ?>
									<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<?php echo $row13['13'];
										echo "<a href='?seccion=proveedores_admin&amp;aktion=change_id&amp;id=".$row13['0']."' alt='".$row13['2']."'>";
										?>
											<span>
												<?php

												echo "<table class=print2>";
												echo "<tbody>";

												echo "<tr>";
												echo "<th><font class='white'>" . ID . "</font></th><td>"; echo $row13['11']; echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<th><font class='white'>" . PROVEEDORES_PROVEEDOR . "</font></th><td>"; echo $row13['12']; echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<th><font class='white'>" . INCIDENCIA . "</font></th><td>"; echo $row13['13']; echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<th><font class='white'>" . CODIGO . "</font></th><td>"; echo $row13['14']; echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<th><font class='white'>" . NCS_AFECTAA . "</font></th><td>"; echo $row13['15']; echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<th><font class='white'>" . FECHA . "</font></th><td>"; echo $row13['16']; echo "</td>";
												echo "</tr>";
												echo "</tbody>";
												echo "</table>'>";

												?>
											</span>
									</div>
								<?php


							echo "</td>";
                                         echo "<td>".$row13['2']."</td>";
                                         echo "</td>";

                                         echo "<td>".$row13['16']."</td>";
                                     echo "</tr>";
        }
        if ($sql13) {

                     echo "</tbody>";
                     echo "</table><br />";
                     //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount14 = mysqli_query($mysqli,
                                "SELECT COUNT( * ) AS count
                                 FROM  `incidenciasdeproveedor`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row14 = mysqli_fetch_row($sqlcount14)) {
                            echo "Se ha/n encontrado $row14[0] incidencia/s;";
                            }
                    //Fin de contar registros
        } else {
                    echo NOSEHAENCONTRADO;// no rows found

        }

        /*---------------------------------------------- FIN MOSTRAR LAS INCIDENCIAS DE PROVEEDOR-------------------------------------------*/

                        echo "<br />";
                         echo '<span class="yellow">Análisis de las incidencias de proveedor:</span>';
                        echo "<br />"; ;
                        echo '<textarea class="textareanormal" name="analisisincidenciasproveedor" placeholder="2,5% producto" value="">2,5% producto</textarea>';
                        echo '<br />';


                echo '<h3>2.4.2. Llamadas telefónicas de los clientes (gráfica de control.</h3>';
                 echo '<br />Valor de control: 16% del total de llamadas.';

        /*---------------------------------------------- GRÁFICA DE CONTROL DE RECLAMACIONES TELEFÓNICAS DE LOS CLIENTES-------------------------------------------*/

			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];
                    $result1 = mysqli_query($mysqli,
                        "SELECT mes, percent
                         FROM controlavisos
                         WHERE mes BETWEEN '$from_date' AND  '$to_date'
                         ORDER BY id ASC"
                    ) or die("Error: ".mysqli_error($mysqli));
        if ($result1) {

                        $labels = array();
                        $data   = array();

            while ($row15 = mysqli_fetch_assoc($result1)) {
                        $labels[] = $row15["mes"];
                        $data[]   = $row15["percent"];
            }

                    // Now you can aggregate all the data into one string
                       $data_string = "[" . join(", ", $data) . "]";
                       $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                       print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }


        ?>
        <canvas id="cvs7" width="1000px" height="300px">[No canvas support]</canvas>
        <script>
        line3 = new RGraph.Line('cvs7', <?php print($data_string) ?>);
        line3.Set('chart.title', 'Porcentaje de avisos por mes');
        line3.Set('chart.title.yaxis', 'Nº de avisos');
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
        /*line3.Set('chart.background.barcolor1', '#f2f2f2');
        line3.Set('chart.background.barcolor2', '#f2f2f2');
        line3.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
        line3.Set('chart.background.grid.autofit.numhlines', 10);
        line3.Set('chart.colors', ['yellow']);
        line3.Set('chart.shadow', true);
        line3.Set('chart.linewidth', 3);
        line3.Set('chart.curvy', 1);
        line3.Set('chart.curvy.factor', 0.25);
        line3.Set('chart.filled', false);
        line3.Set('chart.gutter.left', 35);
        line3.Set('chart.gutter.right', 5);
        line3.Set('chart.gutter.bottom', 100);
        line3.Set('chart.text.angle', 45);
        line3.Set('chart.hmargin', 10);
        line3.Set('chart.tickmarks', 'endcircle');
        line3.Set('chart.tooltips', <?php print($labels_string) ?>);
        line3.Set('chart.labels', <?php print($labels_string) ?>);
        line3.Set('chart.tooltips.effect', 'contract');
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


        /*----------------------- FIN DE LA GRÁFICA DE CONTROL DE RECLAMACIONES TELEFÓNICAS DE LOS CLIENTES----------------------------*/

            echo '<h1>3. ';
                echo AUDITORIAS;
            echo '</h1>';

        /*---------------------------------------------- Mostramos las auditorías------------------------------------------------------*/

			if (!isset($from_date)) $from_date = $_POST['seleccione'];
			if (!isset($to_date)) $to_date = $_POST['seleccione2'];

                $sql15 = mysqli_query($mysqli,
                    "SELECT a.id id1, a. * , i.id id2, i. *
                     FROM aisgc a
                     JOIN informeauditoria i ON a.ai = i.ai
                     AND i.fecha BETWEEN '$from_date' AND  '$to_date'
                     ORDER BY i.fecha ASC "
                ) or die("Error: ".mysqli_error($mysqli));
                  echo '<table class="sortable">';
                    echo "<tbody>";
                  echo ' <tr>';
                  echo '<th>'.AUDITORIAS_AUDITORIA.'</th><th>'.INFORME.'</th><th>'.FECHA.'</th><th>'.RESULTADO.'</th></tr>';
        while ($row15 = mysqli_fetch_row($sql15)) {
                    echo "<tr>";
                    echo "<td>";

				   ?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							<?php echo $row13['13'];
							echo "<a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row15['0']."'>".$row15['3']."</a>";
							?>
								<span>
									<?php

									echo "<table class=print2><tr>";
										echo "<th><font class='white'>"; echo FECHA; echo "</font></th><th><font class='white'>"; echo AUDITORIAS_AUDITORIA; echo "</font></th><th><font class='white'>"; echo AUDITORIAS_AUDITOR; echo"</font></th><th></th></tr>";
										echo "<tr><td>"; echo "$row15[2]"; echo "</td><td>"; echo "$row15[3]"; echo "</td><td colspan=2>"; echo "$row15[4]"; echo "</td></tr>";
										echo "<tr><th colspan=2><font class='white'>"; echo DOCUMENTACION; echo "</font></th><th colspan=2><font class='white'>"; echo TRABAJADOR; echo "</font></th></tr>";
										echo "<tr><td colspan=2>"; echo "$row15[7]"; echo"</td><td colspan=2>"; echo "$row15[8]"; echo "</td></tr>";
										echo "<tr><th colspan=2><font class='white'>"; echo SERVICIO_SERVICIO; echo "</font></th><th><font class='white'>"; echo VEHICULOS; echo"</font></th></tr>";
										echo "<tr><td colspan=2>"; echo "$row15[11]"; echo "</td><td colspan=2>"; echo "$row15[13]"; echo"</td></tr>";
										echo "<tr><th colspan=2><font class='white'>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</font></th><th><font class='white'>"; echo CUESTIONARIO_CALIDAD; echo"</font></th></tr>";
										echo "<tr><td colspan=2>"; echo "$row15[14]"; echo "</td><td colspan=2>"; echo "$row15[15]"; echo"</td></tr>";
										echo "<tr><th colspan=2><font class='white'>"; echo CUESTIONARIO_ALMACEN; echo "</font></th><th><font class='white'>"; echo CUESTIONARIO_COMPRAS; echo"</font></th></tr>";
										echo "<tr><td colspan=2>"; echo "$row15[16]"; echo "</td><td colspan=2>"; echo "$row15[17]"; echo"</td></tr>";
										echo "<tr><th colspan=2><font class='white'>"; echo CUESTIONARIO_FORMACION; echo "</font></th><th><font class='white'>"; echo CUESTIONARIO_DOCUMENTACION; echo"</font></th></tr>";
										echo "<tr><td colspan=2>"; echo "$row15[18]"; echo "</td><td colspan=2>"; echo "$row15[19]"; echo"</td></tr>";
										echo "<tr><th colspan=2><font class='white'>"; echo CUESTIONARIO_LEGIONELLA; echo "</font></th></tr>";
										echo "<tr><td colspan=2>"; echo "$row15[20]"; echo "</td></tr>";
									 echo "</td></tr></table>'>";
									?>
								</span>
						</div>
					<?php

                    echo "</td>";
                    echo "<td><a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row15['21']."'>".$row15['24']."</a></td>";
                    echo "<td>".$row15['25']."</td>";
                    echo "<td>".$row15['30']."</td>";
                    echo "</tr>";
        }
                   echo "</tbody>";
                  echo "</table><br />";

                   echo "Auditorías e informes desde la fecha: '$from_date' a  '$to_date'";

                   //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount16 = mysqli_query($mysqli,
                                "SELECT COUNT( * ) AS count
                                 FROM  `informeauditoria`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row16 = mysqli_fetch_row($sqlcount16)) {
                            echo "Se ha/n encontrado $row16[0] informes/s;";
                            }
                    //Fin de contar registros

        //-------------------------------------------------------------FIN mostrar las auditorías-------------------------------------------------*/

				echo "<br />";
				 echo '<span class="yellow">Análisis de los resultados de auditorías:</span>';
				echo "<br />"; ;
                echo '<br />';
                echo '<textarea class="textareanormal" name="analisisauditorias" placeholder="Análisis de los resultados de las auditorías" value="">Análisis de los resultados de las auditorías</textarea>';
                echo '<br />';

                echo '<h1>4. ' . NOCONFORMIDADESYMEJORAS . '</h1>';

                /*?>
                <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>

                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/help.png" alt="help">
                </div>
                <?php*/

				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#"><strong><i class="fa fa-question-circle" style="color:#9fff30;"></i></strong><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>
				' . AYUDA . '</em>' . AUDITORIAS_JOIN_HELP . '</span></a></p>
				</div>';



        //----------------------------------------------------------Mostramos las no conformidades-------------------------------------------------*/

        $sql17 = mysqli_query($mysqli,
            "SELECT hojas. * , audit. *
             FROM hojasdemejora AS hojas
             JOIN informeauditoria AS audit ON hojas.ai = audit.ai
             WHERE hojas.fecha BETWEEN '$from_date' AND  '$to_date'
             GROUP BY hojas.id DESC
             ORDER BY  `audit`.`id` ASC "
        ) or die("Error: ".mysqli_error($mysqli));
        echo "<table class='sortable'>";
        echo "<tbody>";
            echo "<tr>";
                echo "<th>"; echo FECHA; echo "</th><th>"; echo INFORME; echo "</th><th>NC</th><th>"; echo DESCRIPCION; echo "</th></tr>";
        while ($row17 = mysqli_fetch_row($sql17)) {
            echo "<tr>";
                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row17['0']."' target='blank'>".$row17['5']."</a></td>";
                echo "<td>";

					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							 <a href="?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row17['17'] ?>" alt="<?php echo $row17['20'] ?>" target="_blank"><?php echo $row17['18'] ?></a>

								<span>
									<?php

									  echo "<table class=print2><tr>";
										echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>";
										echo "<tr><td>"; echo "$row17[18]"; echo "</td><td>"; echo "$row17[19]"; echo "</td><td colspan=2>"; echo "$row17[20]"; echo "</td></tr>";
										echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>";
										echo "<tr><td colspan=2>"; echo "$row17[21]"; echo"</td><td colspan=2>"; echo "$row17[22]"; echo "</td></tr>";
										echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>";
										echo "<tr><td colspan=2>"; echo strip_tags($row17['23']); echo "</td><td colspan=2>"; echo strip_tags($row17['24']); echo"</td></tr>";
										echo "</td></tr></table>'>";

									?>
								</span>
						</div>
					<?php

					echo "</td>";

					echo "<td>";

			?>
					<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $row17['0'] ?>"><?php echo $row17['2'] ?></a>

							<span>
							<br />
							<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row17 ['0']; ?>"><i class="fa fa-plus " style="position:absolute; left:10px; top:10px; color:#ff0000;"></i></a><!--</div>-->

							<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row17 ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row17 ['0']; ?>"><i class="fa fa-pencil " style="position:absolute; left:50px; top:10px; color:#ff0000;"></i></a>

							<a href="mod/javaformdelete.php?var=<?php echo $row17 ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row17 ['0']; ?>"><i class="fa fa-trash-o " style="position:absolute; left:90px; top:10px; color:#ff0000;"></i></a>


							<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row17 ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row17 ['0']; ?>"><i class="fa fa-print " style="position:absolute; left:210px; top:10px; color:#ff0000;"></i></a>

							<!--<a href="?seccion=buscancs"><i class="fa fa-search " style="position:absolute; left:250px; top:10px; color:#ff0000;"></i></a>

							<a href="?seccion=ncsporarea"><i class="fa fa-signal " style="position:absolute; left:290px; top:10px; color:#ff0000;"></i></a>

							<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart " style="position:absolute; left:330px; top:10px; color:White;"></i></a>-->

							<?php

								echo "<table class=print>
										<tbody>
										<tr>
										<th>" . NCS_NUMERO . " </th><td>$row17[2]</td>
										</tr>
										<tr>
											<th>" . DESCRIPCION . " </th>
												<td><font color='black'>" . strip_tags($row17['4'], '<font>, <b>') . "</font>
												</td>
										</tr>
										<tr>
											<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th>
												<td><font color='black'>$row17[1]</font></td>
										</tr>
										<tr>
											<th>" . DOCUMENTACION . "</th>
												<td><font color='black'>$row17[6]</font></td>
										</tr>
										<tr>
											<th>" . NCS_ABIERTOPOR . "</th>
												<td><font color='black'>$row17[7]</font></td>
										</tr>
										<tr>
											<th>" . NCS_AFECTAA . "</th>
												<td><font color='black'>$row17[8]</font></td>
										</tr>
										<tr>
											<th>" . NCS_CAUSAS . "</th>
												<td><font color='black'>" . strip_tags($row17['9'], '<font>, <b>') . "</font></td>
										</tr>
										<tr>
											<th>" . NCS_ACCIONES . "</th>
												<td><font color='black'>" . strip_tags($row17['10'], '<font>, <b>') . "</font></td>
										</tr>
										<tr>
											<th>" . NCS_EFICACIA . "</th>
												<td><font color='black'>" . strip_tags($row17['13'], '<font>, <b>') . "</font></td>
										</tr>
										<tr>
											<th>" . NCS_PLAZO . "</th>
												<td><font color='black'>$row17[11]</font></td>
										</tr>
										<tr>
											<th>" . NCS_CIERRE_PARCIAL . "</th>
												<td><font color='black'>" . strip_tags($row17['12'], '<font>, <b>') . "</font></td>
										</tr>
										<tr>
											<th>" . FECHA . "</th>
												<td><font color='black'>$row17[5]</font></td>
										</tr>
										<tr>
											<th>" . NCS_DESVIACION . "</th>
												<td><font color='black'>$row17[15]</font></td>
										</tr>
										<tr>
											<th>" . FECHACIERRE . "</th>
												<td><font color='black'>$row17[14]</font></td>
										</tr>
										</tbody>
										<tr></table>";
							?>
							</span>
					</div>
				<?php

						echo "</td>";


                    echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row17['0']."' target='blank'>".$row17['4']."</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table><br />";

            echo '<br />';
             echo "No conformidades desde la fecha: '$from_date' a  '$to_date'";

                     //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount18 = mysqli_query($mysqli,
                                "SELECT COUNT( * ) AS count
                                 FROM  `hojasdemejora`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row18 = mysqli_fetch_row($sqlcount18)) {
                            echo "Se ha/n encontrado $row[0] no conformidad/es. Si aparecen menos en el listado, es porque no corresponden a ninguna auditoría.";
                            }
                    //Fin de contar registros

             echo '<br /><br />';

        //------------------------------------------------------FIN mostrar las no conformidades----------------------------------------------------------*/

                        echo "<br />";
                         echo '<span class="yellow">Análisis de las NCs:</span>';
                        echo "<br />"; ;
                    echo '<br />';
                    echo '<textarea class="textareanormal" name="analisisnoconformidades" placeholder="Análisis de los resultados de las no conformidades" value="">Análisis de los resultados de las no conformidades</textarea>';
                   echo '<br />';

            echo '<h1>5. Política de calidad.</h1>';
                    echo '<br />';
                         echo '<span class="yellow">Análisis de la política:</span>';
                        echo "<br />"; ;
                    echo '<textarea class="textareanormal" name="analisispolitica" placeholder="Análisis de la política" value="">Análisis de la política</textarea>';
                    echo '<br />';

            echo '<h1>6.';
			?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'" style="display:inline;">
					<!--<i class="fa fa-question-circle fa-2x"></i>-->
					<a href="#"><?php echo CAMBIOS; ?></a>
						<span>
							<?php echo CAMBIOS_REVSISTEMA; ?>
						</span>
				</div>
			<?php echo ', partes interesadas y sus requisitos.</h1>';

                        echo "<br />";
                         echo '<span class="yellow">Análisis de los posibles cambios:</span>';
                        echo "<br />"; ;
                    echo '<textarea class="textareanormal" name="analisiscambios" placeholder="Análisis de los cambios que afecten al sistema de calidad" value="">Análisis de los cambios que afecten al sistema de calidad</textarea>';
                    echo '<br />';

            echo '<h1>7. Recomendaciones de mejora.</h1>';
                    echo '<br />';
                    echo '<br />';
                    echo '<textarea class="textareanormal" name="recomendaciones" placeholder="Recomendaciones" value="">Recomendaciones</textarea>';
                    echo '<br />';

            echo '<h1>8. Conclusiones.</h1>';
                    echo '<br />';
                    echo '<textarea class="textareanormal" name="conclusiones" placeholder="Conclusiones" value="">Conclusiones</textarea>';
                    echo '<br />';
                    echo '<button name="" type="submit" class="btn btn-info">' . ENVIAR . '</button>';
        echo '</form>';
    } else {
			$fecha_Post = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
			//$fecha_Post = $_POST['fecha'];
            $analisisobjetivos_Post = mysqli_real_escape_string($mysqli, $_POST['analisisobjetivos']);
            $analisissatisfaccionclientes_Post = mysqli_real_escape_string($mysqli, $_POST['analisissatisfaccionclientes']);
            $analisisreclamacionesclientes_Post = mysqli_real_escape_string($mysqli, $_POST['analisisreclamacionesclientes']);
            $analisisnoconformidadesporarea_Post = mysqli_real_escape_string($mysqli, $_POST['analisisnoconformidadesporarea']);
            $analisiscierresncs_Post = mysqli_real_escape_string($mysqli, $_POST['analisiscierresncs']);
            $analisisincidenciasinspecciones_Post = mysqli_real_escape_string($mysqli, $_POST['analisisincidenciasinspecciones']);
            $analisisformacion_Post = mysqli_real_escape_string($mysqli, $_POST['analisisformacion']);
            $analisisincidenciasalmacen_Post = mysqli_real_escape_string($mysqli, $_POST['analisisincidenciasalmacen']);
            $analisisincidenciasproveedor_Post = mysqli_real_escape_string($mysqli, $_POST['analisisincidenciasproveedor']);
            $analisisauditorias_Post = mysqli_real_escape_string($mysqli, $_POST['analisisauditorias']);
            $analisisnoconformidades_Post = mysqli_real_escape_string($mysqli, $_POST['analisisnoconformidades']);
            $analisispolitica_Post = mysqli_real_escape_string($mysqli, $_POST['analisispolitica']);
            $analisiscambios_Post = mysqli_real_escape_string($mysqli, $_POST['analisiscambios']);
            $recomendaciones_Post = mysqli_real_escape_string($mysqli, $_POST['recomendaciones']);
            $sql2 =    mysqli_query($mysqli, "INSERT INTO revsistema (fecha, analisisobjetivos, analisissatisfaccionclientes,analisisreclamacionesclientes,analisisnoconformidadesporarea,analisiscierresncs,analisisincidenciasinspecciones,analisisformacion,analisisincidenciasalmacen,analisisincidenciasproveedor,analisisauditorias,analisisnoconformidades,analisispolitica,analisiscambios,recomendaciones) VALUES ('".$fecha_Post."', '".$analisisobjetivos_Post."', '".$analisissatisfaccionclientes_Post."', '".$analisisreclamacionesclientes_Post."', '".$analisisnoconformidadesporarea_Post."', '".$analisiscierresncs_Post."', '".$analisisincidenciasinspecciones_Post."', '".$analisisformacion_Post."', '".$analisisincidenciasalmacen_Post."', '".$analisisincidenciasproveedor_Post."', '".$analisisauditorias_Post."', '".$analisisnoconformidades_Post."', '".$analisispolitica_Post."', '".$analisiscambios_Post."', '".$recomendaciones_Post."')");
        if ($sql2) {
                echo REVISION_ANADIDA;
        } else {
             echo "Error message = ".((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
        }
    }
}

 /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
 /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
 /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
 /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
 /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
  /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
   /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
    /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
	 /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
	  /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/
 /*__________________________________________________________________ ¡ACTION CHANGE!__________________________________________*/


if ($aktion == "change") {
    $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");

        echo '<table class="sortable">';
        echo '<tbody>';
            echo '<tr><td>Id</td><td>Fecha</td><!--<td>Comunicado por</td><td>Comentarios</td>--></tr>';
    while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td><a href='?seccion=revsistema2&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['0']."</a></td>";
                echo "<td><a href='?seccion=revsistema2&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
              /*echo "<td><a href='?seccion=revsistema&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";*/
            echo "</tr>";
    }
       echo '</tbody>';
       echo "</table>";
}

if ($aktion == "change_id") {
    if ((empty($_POST['fecha']))
        AND (empty($_POST['analisisobjetivos']))
        AND (empty($_POST['analisissatisfaccionclientes']))
        AND (empty($_POST['analisisreclamacionesclientes']))
        AND (empty($_POST['analisisnoconformidadesporarea']))
        AND (empty($_POST['analisiscierresncs']))
        AND (empty($_POST['analisisincidenciasinspecciones']))
        AND (empty($_POST['analisisformacion']))
        AND (empty($_POST['analisisincidenciasalmacen']))
        AND (empty($_POST['analisisincidenciasproveedor']))
        AND (empty($_POST['analisisauditorias']))
        AND (empty($_POST['analisisnoconformidades']))
        AND (empty($_POST['analisispolitica']))
        AND (empty($_POST['analisiscambios']))
        AND (empty($_POST['recomendaciones']))
    ) {
			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];


        echo '<form action="" method="POST">';
          echo FECHA;

		  echo '<input type="text" id="date" class="datepicker" name="fecha" value="' . $data[1] . '" />';


          echo '<br />';

          echo '<h1>1. '.OBJETIVOS.'.</h1>';

        /*--------------------------Mostramos los objetivos al modo mangui ------------------------------------------*/


         @$date = $data[1];
          //$sql2 = mysql_query("SELECT * FROM objetivosdatosgenerales WHERE fecha > '$date' ORDER BY Id DESC");

          $sql2 = mysqli_query($mysqli, "SELECT *
                        FROM objetivosdatosgenerales o
                        WHERE o.Fecha
                        BETWEEN DATE_SUB('$date', INTERVAL 540 DAY)
                        AND  '$date'");

            echo '<table class="sortable">';
            echo '<tbody>';
                echo '<tr>';
                    echo '<th>'.CODIGO.'</th>';
                    echo '<th style="width:35%">';
                        echo OBJETIVOS_NOMBRE_OBJETIVO;
                    echo '</th>';
                  //echo '<th>Origen</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th>';
                    echo '<th>'.INDICADOR.'</th>';
                  //echo '<th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th>';
                    echo '<th>';
                        echo RESULTADO;
                    echo '</th>';
                    echo '<th style="width:50px">';
                        echo FECHA;
                    echo '</th>';

                    echo '<th style width="5%"><a href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_EDITAR_OBJETIVO.'">';
                    echo '<i class="fa fa-pencil" style="color:#752209;"></i></a></th>';
                    echo '<th style width="5%"><a href="?seccion=objetivos_print&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
                              <i class="fa fa-print" style="color:#752209;"></i></a></th>';


                echo '</tr>';

        while ($row = mysqli_fetch_row($sql2)) {
                    echo "<tr>";

                    echo "<td>".$row['1']."</td>";
                        echo "<td>";

                        echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2>";
                            echo "<caption>Objetivo: <span class=documenttitle>"; echo "$row[2]"; echo "</span></caption>";
                            echo "<tbody>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo CODIGO;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[1]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo OBJETIVOS_NOMBRE_OBJETIVO;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[2]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo ANO;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[3]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo OBJETIVOS_ORIGEN;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[4]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo OBJETIVOS_DETECCION;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[5]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo OBJETIVOS_CAUSAS;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[6]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo OBJETIVOS_RECURSOS;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[7]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo INDICADOR;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[8]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                       echo OBJETIVOS_FUENTE;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[9]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                       echo OBJETIVOS_FRECUENCIA;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[10]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                       echo OBJETIVOS_PLAZO;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[11]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                        echo OBJETIVOS_EJECUTOR;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[12]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                         echo OBJETIVOS_PERSEGUIDOR;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[13]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th>VºBº: </th>";
                                        echo "<td>"; echo "$row[14]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                         echo RESULTADO;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[15]"; echo "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th style=width:50px>";
                                         echo FECHA;
                                    echo "</th>";
                                        echo "<td>"; echo "$row[16]"; echo "</td>";
                                echo "</tr>";
                            echo "</tbody>";
                            echo "</table>'>"; echo "$row[2]"; echo "</a>";

                        //<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a>

                        echo "</td>";
                        echo "<td>".$row['8']."</td>";
                        echo "<td>".$row['15']."</td>";
                        echo "<td width='90px'>".$row['16']."</td>";

                        echo "<td>";
                            echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[0]' title='".OBJETIVOS_EDITAR_OBJETIVO." - ".$row['1']."'>";
                            echo "<i class='fa fa-pencil' style='color:#752209;'></i></a>";
                        echo "</td>";
                        echo "<td>";
                            echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[0]' title='".OBJETIVOS_IMPRIMIR_OBJETIVO." - ".$row['1']."'>";
                            echo "<i class='fa fa-print' style='color:#752209;'></i></a>";
                        echo "</td>";


                   echo "</tr>";
        }
            echo '</tbody>';
            echo "</table>";

        echo "<br />";
            echo "Objetivos hasta: $data[1]";
        echo "<br />";

        /*------------------------------------------------------FIN mostrar objetivos-----------------------------------------------------*/

        echo "<br />";
            echo COMENTARIOS;
        echo "<br />";
                echo '<textarea class="textareanormal" name="analisisobjetivos">'.$data[2].'</textarea>';
            echo "<br />";
                echo '<h1>2. '.SATISFACCION.'</h1>';


        /*------------------------------------------------GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/
        /**------------------------------------------------GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/
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

				<iframe src="mod/valoracionglobalclientes_revsistema.php" height="1000" style="width:110%"  seamless ></iframe>


        <?php

            echo "<br />";

                echo "Satisfaccioón hasta: $date";

                                echo "<br />";
                                 echo COMENTARIOS;
                                echo "<br />";
        ?>

        <?php

        /*------------------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/


			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
            @$date = $data[1];

                  echo '<textarea class="textareanormal" name="analisissatisfaccionclientes">'.$data[3].'</textarea>';
                echo '<br />';
                  echo '<h1>3. '.RECLAMACIONES.'.</h1>:';

                                echo "<br />";
                                 echo COMENTARIOS;
                                echo "<br />";
                  echo '<textarea class="textareanormal" name="analisisreclamacionesclientes">'.$data[4].'</textarea>';


                 echo '<br />';

                  echo '<h1>4. '.INSPECCIONES.'.</h1>';

                  echo "<br />";
                        $sql = mysqli_query($mysqli, "SELECT * FROM codigosincidenciasinspecciones WHERE id = $_GET[id]  ORDER BY id ASC");
        while ($row = mysqli_fetch_row($sql)) {
                        echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                        echo "<th>"; echo GRAVEDAD; echo "</th><th>"; echo CODIGO; echo "</th><th>"; echo TIPO; echo"</th></tr>";
                        echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>";
                        echo "</table>'>";
                        echo "$row[2], </a>";

        }
                        echo "<br />";


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

            <canvas id="cvs8" width="1100px" height="350px">[No canvas support]</canvas>
            <script>
                bar2 = new RGraph.Bar('cvs8', <?php print($data_string) ?>);
                bar2.Set('chart.colors', ['lavender','#9fff30','transparent']);
                bar2.Set('chart.title', 'Número de incidencias por código');
                bar2.Set('chart.title.yaxis', 'Nº de incidencias');
                bar2.Set('chart.title.xaxis', 'Código de la incidencia');
								bar2. Set('chart.title.color', 'white');
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
								bar2. Set('chart.text.color', 'white');
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

                <?php

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                echo "Gráfico hasta: $data[1]";

            ?>



        <?php
        /*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisisincidenciasinspecciones">'.$data[7].'</textarea>';
                   echo '<br />';
                  echo '<h1>5. '.FORMACION.'.</h1>:';


        /*------------------------------------------------GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/


         /**
            * Change these to your own credentials*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
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
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $labels[] = $row["trabajador"];
                $data[]   = $row["horas"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

            <canvas id="cvs9" width="1100px" height="350px">[No canvas support]</canvas>
            <script>
                bar3 = new RGraph.Bar('cvs9', <?php print($data_string) ?>);
                bar3.Set('chart.title', 'Total de horas de formación por trabajador');
								bar3. Set('chart.title.color', 'white');
                bar3.Set('chart.colors', ['PowderBlue','#9fff30','transparent']);
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
								bar3. Set('chart.text.color', 'white');
                bar3.Set('chart.hmargin', 10);
                bar3.Set('chart.tickmarks', 'endcircle');
                bar3.Set('chart.tooltips', <?php print($labels_string) ?>);
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


                <?php

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                echo "<br />Gráfico hasta: $data[1]";


        /*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/

            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisisformacion">'.$data[8].'</textarea>';
                    echo '<br />';
                  echo '<h1>6. '.ALMACEN.'.</h1>:';

        /*------------------------------------------------------------Mostramos las incidencias de almacén--------------------------------------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                    $result = mysqli_query($mysqli,
                        "SELECT ai, obsalmac
                         FROM  `aisgc`
                         WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                         AND  '$date'
                         AND  obsalmac >  ''
                         ORDER BY  `aisgc`.`id` ASC"
                    );


        if ($row = mysqli_fetch_array($result)) {
                 echo "<table class = 'sortable'> ";
                 echo '<tr><th>AI</th><th>'.INDICADORES_INCIDENCIASDEALMACEN.'</th></tr>';
            do {
                 echo "<tr><td>".$row["ai"]."</td><td>".$row["obsalmac"]."</td></tr> ";
            } while ($row = mysqli_fetch_array($result));
                       echo "</table> ";
        } else {
                    echo NOSEHAENCONTRADO;
        }

        /*---------------------------------------------------FIN mostrar incidencias de almacén-------------------------------------------------------*/


        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisisincidenciasalmacen">'.$data[9].'</textarea>';
                    echo '<br />';
                  echo '<h1>7. Proveedores.</h1>';

        /**----------------------------------GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                $result = mysqli_query($mysqli,
                    "SELECT  `proveedor` ,  `codigoincidencia`
                    FROM  `incidenciasdeproveedor`
                    WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
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

            <canvas id="cvs10" width="1000px" height="300px">[No canvas support]</canvas>
            <script>
                line3 = new RGraph.Line('cvs10', <?php print($data_string) ?>);
                line3.Set('chart.title', 'Códigos de incidencias de proveedor');
                line3.Set('chart.title.yaxis', 'Código');
								line3.Set('chart.title.xaxis', 'Proveedor');
								line3. Set('chart.title.color', 'white');
                line3.Set('chart.annotatable', true);
                line3.Set('chart.events.click', myFunc3);
                line3.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                line3.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(line3.canvas);
                                                    RGraph.ClearAnnotations(line3.canvas);
                                                    line3.Draw();
                                                   }
                                         ]
                                        ]);
                line3.Set('chart.background.grid.autofit', true);
                line3.Set('chart.colors', ['red','#9fff30','transparent']);
              //line3.Set('chart.background.barcolor1', '#f2f2f2');
              //line3.Set('chart.background.barcolor2', '#f2f2f2');
              //line3.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
                line3.Set('chart.background.grid.autofit.numhlines', 10);
                line3.Set('chart.colors', ['red']);
                line3.Set('chart.shadow', true);
                line3.Set('chart.linewidth', 3);
                line3.Set('chart.curvy', 1);
                line3.Set('chart.curvy.factor', 0.25);
                line3.Set('chart.filled', false);
                line3.Set('chart.text.angle', 45);
								line3. Set('chart.text.color', 'white');
                line3.Set('chart.gutter.left', 55);
                line3.Set('chart.gutter.right', 5);
                line3.Set('chart.gutter.bottom', 100);
                line3.Set('chart.hmargin', 10);
                line3.Set('chart.tickmarks', 'endcircle');
                line3.Set('chart.tooltips', <?php print($labels_string) ?>);
                line3.Set('chart.labels', <?php print($labels_string) ?>);
                line3.Set('chart.tooltips.effect', 'contract');
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

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                echo "<br />";
                    echo "Gráfico hasta: $data[1]";

/**---------------------------------------------------FIN DE AL GRÁFICA DE INCIDENCIAS DE PROVEEDOR---------------------------------------------------*/

                 echo '<br />';

/**--------------------------------------------------Mostramos las incidencias de proveedor----------------------------------------------*/

            $sql = mysqli_query($mysqli,
                        "SELECT *
                         FROM incidenciasdeproveedor
                         WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                         AND  '$date'
                         ORDER BY fecha ASC "
            );
                      echo '<table class="sortable">';
                        echo "<tbody>";
                      echo ' <tr>';
                      echo '<th>Proveedor</th><th>Incidencia</th><th>Fecha</th></tr>';
        while ($row = mysqli_fetch_row($sql)) {
                        echo "<tr>";
                        //echo "<td>".$row['0']."</td>";
                        echo "<td>".$row['1']."</td>";
                        echo "<td>".$row['2']."</td>";
                        echo "<td>".$row['5']."</td>";
                        echo "</tr>";
        }

            if($sql) {

                        echo "</tbody>";
                       echo "</table>";

            } else {
              echo NOSEHAENCONTRADO;// no rows found
            }

        /*--------------------------------------------------FIN mostrar las incidencias de proveedor-----------------------------------------------*/

            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";
                            echo '<textarea class="textareanormal" name="analisisincidenciasproveedor">'.$data[10].'</textarea>';
                            echo '<br />';

	                  echo '<h1>8. ' . AUDITORIAS . ':</h1>';


        //-------------------------------------------------------Mostramos las auditorías---------------------------------------------------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

            $sql = mysqli_query($mysqli,
                "SELECT aisgc. * , informeauditoria.id id1, informeauditoria . *
                 FROM informeauditoria, aisgc
                 WHERE informeauditoria.ai = aisgc.ai
                 AND aisgc.fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                 AND  '$date'
                GROUP BY informeauditoria.ai"
            );

                    echo '<table class="sortable">';
                    echo "<tbody>";
                        echo ' <tr>';
                            echo '<th>Auditoría</th><th>Informe</th><th>Fecha del informe</th><th>Resultado</th></tr>';
        while ($row = mysqli_fetch_row($sql)) {
                        echo "<tr>";

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
                                    //echo "<td><a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a></td>";

                                    echo "<td>";

                            echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['20']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                            echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>";
                            echo "<tr><td>"; echo strip_tags($row1['22']); echo "</td><td>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo strip_tags($row1['24']); echo "</td></tr>";
                            echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>";
                            echo "<tr><td colspan=2>"; echo strip_tags($row1['25']); echo"</td><td colspan=2>"; echo "$row[26]"; echo "</td></tr>";
                            echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>";
                            echo "<tr><td colspan=2>"; echo "$row[27]"; echo "</td><td colspan=2>"; echo "$row[28]"; echo"</td></tr>";
                            echo "</td></tr></table>'>";

                                echo "$row[22]</a>";

                            echo "</td>";
                            echo "<td>".$row['23']."</td>";
                            echo "<td>".$row['28']."</td>";
                        echo "</tr>";
        }
                    echo "</tbody>";
                    echo "</table>";

       //-------------------------------------------------------------FIN mostrar las auditorías-----------------------------------------------------*/

                        echo ' <br />';
                        echo ' <br />';
                        echo '<textarea class="textareanormal" name="analisisauditorias">'.$data[11].'</textarea>';
                        echo ' <br />';
                        echo ' <br />';

                  echo '<h1>9. No conformidades.</h1>';
                    ?>
                    <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-question-circle" style="color:#9fff30;"></i>
                    </div>

                         <br />

                   <?php
        //------------------------------------------------Mostramos las no conformidades--------------------------------------*/
			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                 $sql = mysqli_query($mysqli,
                    "SELECT hojas. * , audit. *
                     FROM hojasdemejora AS hojas
                     JOIN informeauditoria AS audit ON hojas.ai = audit.ai
                     WHERE hojas.fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                     AND  '$date'
                     GROUP BY hojas.id DESC
                     ORDER BY  `audit`.`id` ASC"
                );
                        echo '<table class="sortable">';
                        echo ' <tbody>';
                            echo ' <tr>';
                                echo '<th>'.AUDITORIAS_AUDITORIA.'</th><th>'.NCS.'</th><th>'.DESCRIPCION.'</th>
									  <th><i class="fa fa-edit" style="color:#9fff30;"></i></th>
									  <th><i class="fa fa-print" style="color:#9fff30;"></i></th>
									  </tr>';

        while ($row = mysqli_fetch_row($sql)) {
                            echo "<tr>";


														echo "<td>";


															?>
															<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
																<a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row ['0']; ?> alt='<?php echo $row ['3']; ?>><?php echo $row['1']; ?></a>

																<span>

																<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['17']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#ffeb3b;"></i></a>

																<a href="mod/javaformdelete_informes.php?var=<?php echo $row ['1']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#ffeb3b;"></i></a>

																<a href="?seccion=auditorias_admin&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#ffeb3b;"></i></a>

																	<table>
																	<tr>
																		<th><?php echo AUDITORIAS_AUDITORIA; ?></th>
																		<th><?php echo FECHA; ?></th>
																		<th><?php echo AINFORMES_AREA_AUDITADA; ?></th>
																		<th></th>
																	</tr>
																	<tr>
																		<td><?php echo $row['18']; ?></td>
																		<td><?php echo $row['19']; ?></td>
																		<td colspan=2><?php echo $row['20']; ?></td>
																	</tr>
																	<tr>
																		<th colspan=2><?php echo DOCUMENTACION; ?></th>
																		<th colspan=2><?php echo AUDITORIAS_AUDITOR; ?></th>
																	</tr>
																	<tr>
																		<td colspan=2><?php echo $row['21']; ?></td>
																		<td colspan=2><?php echo $row['22']; ?></td>
																	</tr>
																	<tr>
																		<th colspan=2><?php echo AINFORMES_OBJETO; ?></th>
																		<th><?php echo RESULTADO; ?></th>
																	</tr>
																	<tr>
																	<td colspan=2><?php echo $row['23']; ?></td>
																	<td colspan=2><?php echo $row['24']; ?></td></tr>
																	</td></tr></table>'>

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
																		<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-plus " style="position:absolute; left:10px; top:10px; color:#ff0000;"></i></a><!--</div>-->

																		<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil " style="position:absolute; left:50px; top:10px; color:#ff0000;"></i></a>

																		<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o " style="position:absolute; left:90px; top:10px; color:#ff0000;"></i></a>


																		<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print " style="position:absolute; left:210px; top:10px; color:#ff0000;"></i></a>

																		<!--<a href="?seccion=buscancs"><i class="fa fa-search " style="position:absolute; left:250px; top:10px; color:#ff0000;"></i></a>

																		<a href="?seccion=ncsporarea"><i class="fa fa-signal " style="position:absolute; left:290px; top:10px; color:#ff0000;"></i></a>

																		<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart " style="position:absolute; left:330px; top:10px; color:White;"></i></a>-->

																		<?php

																			echo "<table class=print>
																					<tbody>
																					<tr>
																					<th>" . NCS_NUMERO . " </th><td>$row[2]</td>
																					</tr>
																					<tr>
																						<th>" . DESCRIPCION . " </th>
																							<td><font color='black'>" . strip_tags($row['4'], '<font>, <b>') . "</font>
																							</td>
																					</tr>
																					<tr>
																						<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th>
																							<td><font color='black'>$row[1]</font></td>
																					</tr>
																					<tr>
																						<th>" . DOCUMENTACION . "</th>
																							<td><font color='black'>$row[6]</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_ABIERTOPOR . "</th>
																							<td><font color='black'>$row[7]</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_AFECTAA . "</th>
																							<td><font color='black'>$row[8]</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_CAUSAS . "</th>
																							<td><font color='black'>" . strip_tags($row['9'], '<font>, <b>') . "</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_ACCIONES . "</th>
																							<td><font color='black'>" . strip_tags($row['10'], '<font>, <b>') . "</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_EFICACIA . "</th>
																							<td><font color='black'>" . strip_tags($row['13'], '<font>, <b>') . "</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_PLAZO . "</th>
																							<td><font color='black'>$row[11]</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_CIERRE_PARCIAL . "</th>
																							<td><font color='black'>" . strip_tags($row['12'], '<font>, <b>') . "</font></td>
																					</tr>
																					<tr>
																						<th>" . FECHA . "</th>
																							<td><font color='black'>$row[5]</font></td>
																					</tr>
																					<tr>
																						<th>" . NCS_DESVIACION . "</th>
																							<td><font color='black'>$row[15]</font></td>
																					</tr>
																					<tr>
																						<th>" . FECHACIERRE . "</th>
																							<td><font color='black'>$row[14]</font></td>
																					</tr>
																					</tbody>
																					<tr></table>";
																		?>
																		</span>
																</div>
															<?php

																	echo "</td>";
                                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>" . strip_tags($row['4']) . "</a></td>";
								echo "<td><a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=".$row['0']."' onclick='abrir(this.href);return false' title='" . NCS_EDITAR_NC . "  - " . $row['2'] . "'>
										  <i class='fa fa-pencil' style='color:#9fff30;'></i></a></td>";
								echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' title='" . NCS_IMPRIMIR . "  - " . $row['2'] . "' target='blank'>
								          <i class='fa fa-print' style='color:#9fff30;'></i></a></td>";
                            echo "</tr>";
        }
                        echo "</tbody>";
                        echo "</table>";

        //------------------------------------------------------FIN mostrar las no conformidades---------------------------------------------*/


            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";

                              echo '<textarea class="textareanormal" name="analisisnoconformidades">'.$data[12].'</textarea>';
                            echo '<br />';
                            echo '<br />';

  echo 'NC´s:';



         /*------------------------------------------------GRÁFICA DE NO CONFORMIDADES POR ÁREA--------------------------------------*/

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

            $result = mysqli_query($mysqli,
                "SELECT afectaa, COUNT( * ) AS cantidad
                FROM hojasdemejora
                WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                AND  '$date'
                GROUP BY afectaa"
            );

            /*$result = mysql_query(
                "SELECT afectaa, COUNT( * ) AS cantidad
                FROM hojasdemejora
                WHERE fecha >  '$date'
                GROUP BY afectaa"
            ); */


       if ($result) {

                $labels = array();
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                    $labels[] = $row["afectaa"];
                    $data[]   = $row["cantidad"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

        <a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png"><br /><strong>Coded by rgraph.net</strong></a>

            <!-- Don't forget to update these paths -->


            <canvas id="cvs11" width="1100" height="300">[No canvas support]</canvas>
            <script>
                bar1 = new RGraph.Bar('cvs11', <?php print($data_string) ?>);
                bar1.Set('chart.title', 'No conformidades por área');
                bar1.Set('chart.colors', ['Tan','#9fff30','transparent']);
                bar1.Set('chart.title.yaxis', 'Nº de NC´s');
								bar1. Set('chart.title.color', 'white');
                bar1.Set('chart.annotatable', true);
                bar1.Set('chart.events.click', myFunc3);
                bar1.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                bar1.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(bar1.canvas);
                                                    RGraph.ClearAnnotations(bar1.canvas);
                                                    bar1.Draw();
                                                   }
                                         ]
                                        ]);
                bar1.Set('chart.background.grid.autofit', true);
                bar1.Set('chart.gutter.left', 45);
                bar1.Set('chart.gutter.right', 5);
                bar1.Set('chart.gutter.bottom', 150);
                bar1.Set('chart.text.angle', 45);
								bar1. Set('chart.text.color', 'white');
                bar1.Set('chart.hmargin', 10);
                bar1.Set('chart.tickmarks', 'endcircle');
                bar1.Set('chart.tooltips', <?php print($labels_string) ?>);
                bar1.Set('chart.labels', <?php print($labels_string) ?>);
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
            <?php

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                echo "Gráfico hasta: $data[1]";

            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";
            ?>

            <?php

        /*------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/

        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $id ");
        $data = mysqli_fetch_row($sql);



                  echo '<textarea class="textareanormal" name="analisisnoconformidadesporarea">'.$data[5].'</textarea>';
                  echo '<br />';
                  echo '<h2>9.1. '.INDICADORES_DESVIACIONCIERRESNCS.'.</h2>:';

        /*------------------------------------------------GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/



			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
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

            <canvas id="cvs12" width="1100" height="250">[No canvas support]</canvas>
            <script>
                line2 = new RGraph.Line('cvs12', <?php print($data_string) ?>);
                line2.Set('chart.colors', ['red','#9fff30','transparent']);
                line2.Set('chart.title', 'Desviación plazos cierre ncs');
                line2.Set('chart.title.yaxis', 'Nº de días');
								line2. Set('chart.title.color', 'white');
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
								line2. Set('chart.text.color', 'white');
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


            <?php

			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);
			@$date = $data[1];

                echo "Gráfico hasta: $data[1]";

            ?>


        <?php

        /*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/


			$id = $_GET['id'];
			$sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
			$data = mysqli_fetch_row($sql);


            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisiscierresncs">'.$data[6].'</textarea>';
                   echo '<br />';

                    echo '<h1>10. Política de calidad.</h1>:';

            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";
                              echo '<textarea class="textareanormal" name="analisispolitica">'.$data[13].'</textarea>';

                            echo '<br />';
                            echo '<br />';

                   echo '<h1>11. Cambios.</h1>:';

            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";
                              echo '<textarea class="textareanormal" name="analisiscambios">'.$data[14].'</textarea>';
                           echo ' <br />';
                            echo ' <br />';

                    echo '<h1>12. Recomendaciones.</h1>:';
            echo "<br />";
             echo COMENTARIOS;
                echo "<br />";
                              echo '<textarea class="textareanormal" name="recomendaciones">'.$data[15].'</textarea>';
                            echo ' <br />';

                              echo '<button type="submit" class="btn btn-primary">' . MODIFICAR . '</button>';

                echo '</form>';
    } else {
                    $sql = mysqli_query($mysqli,
                        "UPDATE revsistema SET fecha='$_POST[fecha]',
                        analisisobjetivos='$_POST[analisisobjetivos]',
                        analisissatisfaccionclientes='$_POST[analisissatisfaccionclientes]',
                        analisisreclamacionesclientes='$_POST[analisisreclamacionesclientes]',
                        analisisnoconformidadesporarea='$_POST[analisisnoconformidadesporarea]',
                        analisiscierresncs='$_POST[analisiscierresncs]',
                        analisisincidenciasinspecciones='$_POST[analisisincidenciasinspecciones]',
                        analisisformacion='$_POST[analisisformacion]',
                        analisisincidenciasalmacen='$_POST[analisisincidenciasalmacen]',
                        analisisincidenciasproveedor='$_POST[analisisincidenciasproveedor]',
                        analisisauditorias='$_POST[analisisauditorias]',
                        analisisnoconformidades='$_POST[analisisnoconformidades]',
                        analisispolitica='$_POST[analisispolitica]',
                        analisiscambios='$_POST[analisiscambios]',
                        recomendaciones='$_POST[recomendaciones]'
                        WHERE id=$_GET[id]"
                    );

        if ($sql) {
                echo 'Revisión del sistema modificada!';
                echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
        }
    }
}
mysqli_close($mysqli);
