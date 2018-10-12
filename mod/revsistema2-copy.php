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

              <a href="?seccion=revsistema_select"><?php echo REVISAR_SISTEMA; ?></a> ::
              <a href="?seccion=revsistema2&amp;aktion=change"><?php echo MODIFICAR_REVISION; ?></a>

<br /><br />

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
        echo '<span class="analisis_revsistema">'.REVSISTEMA_USTEDESTA.'</span>';
		echo '<br /><br />';
        echo '<form action="" method="POST">';
            echo '<strong>'.FECHA.':</strong>';

				echo '&nbsp;';
                echo '<input type="text" id="date" class="datepicker" name="fecha" value="'.$to_date.'">';
				echo '<br /><br />';

		echo '<h1>1. ' . OBJETIVOS . ':</h1>';

        /*---------------------------------Mostramos los objetivos al modo mangui -------------------------------*/
            @$from_date = $_POST['seleccione'];
            @$to_date = $_POST['seleccione2'];
        $sql = mysqli_query($mysqli, 
            "SELECT *
             FROM  `objetivosdatosgenerales`
             WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'"
        );
        //$result = mysql_fetch_row($sql);

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
                    echo '<i class="fa fa-pencil fa-2x" style="color:#752209;"></i></a></th>';
                    echo '<th style width="5%"><a href="?seccion=objetivos_print&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
                          <i class="fa fa-print fa-2x" style="color:#752209;"></i></a></th>';


                echo "</tr>";
        while ($row = mysqli_fetch_row($sql)) {
                echo "<tr>";
                echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['1']."</a></td>";
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

                            echo "</td>";
                            echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['8']."</a></td>";
                            echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['15']."</a></td>";
                            echo "<td style=width:100px><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['16']."</a></td>";

                            echo "<td>";
                            echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[0]' title='" . OBJETIVOS_EDITAR_OBJETIVO . "  - " . $row['1'] . "'>";
                            echo "<i class='fa fa-pencil fa-2x' style='color:#752209;'></i></a>";
                            echo "</td>";
                            echo "<td>";
                            echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[0]' title='" . OBJETIVOS_IMPRIMIR_OBJETIVO . "  - " . $row['1'] . "'>";
                            echo "<i class='fa fa-print fa-2x' style='color:#752209;'></i></a>";
                            echo "</td>";

                            echo "</tr>";
        }
                            echo "</tbody>";
                            echo "</table>";

                             echo '<br /><br />';
                             echo "Objetivos desde la fecha: '$from_date' a  '$to_date'";


                    //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount = mysqli_query($mysqli, 
                                "SELECT COUNT( * ) AS count
                                 FROM  `objetivosdatosgenerales`
                                 WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row = mysqli_fetch_row($sqlcount)) {
                            echo "Se han encontrado $row[0] objetivos;";
                            }
                    //Fin de contar registros


          /*----------------------------FIN mostrar objetivos---------------------------------*/


                    echo '<br /><br />';
                    echo '<p style="text-indent: 1cm;">';
                    echo '<span class="analisis_revsistema">Análisis del cumplimiento de objetivos:</span>';
                    echo '</p>';
                        echo "<br /><br />";
                         echo COMENTARIOS;
                        echo "<br />"; ;

                    echo '<textarea class="textareanormal" name="analisisobjetivos" placeholder="Objetivo: 100%" value="">Objetivo: 100%</textarea>';
                    echo '<br />';


            echo '<h1>2. ';
                echo REVSISTEMA_INDICADORES;
            echo '</h1>';
            echo '<h2>2.1. ' . CLIENTES . '</h2>';
                echo '<h3>2.1.1. ' . SATISFACCION . '</h3>';

        /**------------------------------------------------GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/

        /**
        * Change these to your own credentials*/

         @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];

        $result = mysqli_query($mysqli, "SELECT * FROM globalclientes
                         WHERE fecha BETWEEN '$from_date' AND  '$to_date'"
        );
        if ($result) {

            $labels = array();
            $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $labels[] = $row["mes"];
                $data[]   = $row["global"];
            }

            // Now you can aggregate all the data into one string
            $data_string = "[" . join(", ", $data) . "]";
            $labels_string = "['" . join("', '", $labels) . "']";
        } else {
            print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

        <!-- Don't forget to update these paths -->

        <script src="libraries/RGraph.common.core.js" ></script>
        <script src="libraries/RGraph.line.js" ></script>
        <script src="libraries/RGraph.bar.js"></script>
        <script src="libraries/RGraph.common.dynamic.js"></script>
        <script src="libraries/RGraph.common.context.js" ></script>
        <script src="libraries/RGraph.common.tooltips.js"></script>
        <script src="libraries/RGraph.common.annotate.js" ></script>

        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>


        <canvas id="cvs1" width="1100" height="300">[No canvas support]</canvas>
        <script>
            line1 = new RGraph.Line('cvs1', <?php print($data_string) ?>);
            line1.Set('chart.title', 'Valoración global clientes');
            line1.Set('chart.title.yaxis', 'Valor');
            line1.Set('chart.annotatable', true);
            line1.Set('chart.events.click', myFunc3);
            line1.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
            line1.Set('chart.contextmenu', [
                                     ['Show palette', RGraph.Showpalette],
                                     ['Clear', function ()
                                               {
                                                RGraph.Clear(line1.canvas);
                                                RGraph.ClearAnnotations(line1.canvas);
                                                line1.Draw();
                                               }
                                     ]
                                    ]);
            line1.Set('chart.background.grid.autofit', true);

            /*line1.Set('chart.background.barcolor1', '#f2f2f2');
            line1.Set('chart.background.barcolor2', '#f2f2f2');
            line1.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
            line1.Set('chart.background.grid.autofit.numhlines', 10);
            line1.Set('chart.colors', ['yellow']);
            line1.Set('chart.shadow', true);
            line1.Set('chart.linewidth', 3);
            line1.Set('chart.curvy', 1);
            line1.Set('chart.curvy.factor', 0.25);
            line1.Set('chart.filled', false);
            line1.Set('chart.gutter.left', 35);
            line1.Set('chart.gutter.right', 5);
            line1.Set('chart.gutter.top', 50);
            line1.Set('chart.gutter.bottom', 100);
            line1.Set('chart.text.angle', 45);
            line1.Set('chart.hmargin', 10);
            line1.Set('chart.tickmarks', 'endcircle');
            line1.Set('chart.tooltips', <?php print($labels_string) ?>);
            line1.Set('chart.labels', <?php print($labels_string) ?>);
            line1.Set('chart.tooltips.effect', 'contract');
            line1.Draw();

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

            echo "<br /><br /><br /><br /><br />";


        /**------------------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/


        echo '<p style="text-indent: 1cm;">';
            echo '<span class="analisis_revsistema">Análisis de la satisfacción del cliente:</span>';
        echo '</p>';
        echo '<br />';
            echo '<textarea class="textareanormal" name="analisissatisfaccionclientes" placeholder="Valoraciones globales encuestas > 4. Impresiones fundadas de los trabajadores" value="">Valoraciones globales encuestas > 4. Impresiones fundadas de los trabajadores</textarea>';
        echo '<br />';
            echo '<h3>2.1.2. Quejas y reclamaciones</h3>';
        echo '<p style="text-indent: 1cm;">';
            echo '<span class="analisis_revsistema">Análisis de las quejas y reclamaciones:</span>';
        echo '</p>';
        echo '<br />';
            echo '<textarea class="textareanormal" name="analisisreclamacionesclientes" placeholder="Reclamaciones = 0" value="">Objetivo: Reclamaciones = 0</textarea>';
        echo '<br />';
            echo '<h2>2.2. Indicadores de MEDICIÓN, ANÁLISIS Y MEJORA</h2>';
                echo '<h3>2.2.1. Nº de no conformidades por área</h3>';

        /**------------------------------------------------ GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/

            @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];
            $result = mysqli_query($mysqli, 
                "SELECT afectaa, COUNT( * ) AS cantidad
                FROM hojasdemejora
                WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                GROUP BY afectaa"
            );
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

        <canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas>
        <script>
            bar1 = new RGraph.Bar('cvs2', <?php print($data_string) ?>);
            bar1. Set('chart.title', 'No conformidades por área');
            bar1. Set('chart.colors', ['Tan','#9fff30','transparent']);
            bar1. Set('chart.title.yaxis', 'Nº de NC´s');
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

             <br /><br /><br />

            <?php
            echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";



        echo "<br /><br /><br /><br /><br />";

       //------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA-----------------------------


            echo '<p style="text-indent: 1cm;">';
                echo '<span class="analisis_revsistema">Análisis de las no conformidades por área:</span>';
            echo '</p>';
                echo '<br />';
                    echo '<textarea class="textareanormal" name="analisisnoconformidadesporarea" placeholder="Objetivo : 0 NC´s" value="">Objetivo : 0 NC´s</textarea>';
                echo '<br />';
                    echo '<h3>2.2.2. Desviaciones en el plazo de cierre de las NC´s</h3>';

        /*------------------------------------------------ GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/

         @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];

            $result = mysqli_query($mysqli, 
                "SELECT numhoja, desviacion
                FROM hojasdemejora
                WHERE fecha BETWEEN '$from_date' AND  '$to_date'"
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
            <script>
                line2 = new RGraph.Line('cvs3', <?php print($data_string) ?>);
                line2.Set('chart.colors', ['red','#9fff30','transparent']);
                line2.Set('chart.title', 'Desviación plazos cierre ncs');
                line2.Set('chart.title.yaxis', 'Nº de días');
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
                 <br /><br /><br />
        <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

            echo"<br /><br /><br /><br /><br />";


        /*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/


        echo '<p style="text-indent: 1cm;">';
        echo '<span class="analisis_revsistema">Análisis de las desviaciones de plazo:</span>';
        echo '</p>';
        echo '<br />';
        echo '<textarea class="textareanormal" name="analisiscierresncs" value="">Valor de control: 0.</textarea>';
        echo '<h3>2.2.3. Incidencias de inspección</h3>';

         $sql = mysqli_query($mysqli, "SELECT * FROM codigosincidenciasinspecciones ORDER BY id ASC");
        while ($row = mysqli_fetch_row($sql)) {
                        echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                        echo "<th>"; echo GRAVEDAD; echo "</th><th>"; echo CODIGO; echo "</th><th>"; echo TIPO; echo"</th></tr>";
                        echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>";
                        echo "</table>'>";
                        echo "$row[2], </a>";
        }


        /*------------------------------------------------GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/



         @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];

            $result = mysqli_query($mysqli, 
                "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia
                 FROM inspecciones
                 WHERE fecha BETWEEN '$from_date' AND  '$to_date'
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
            <script>
                bar2 = new RGraph.Bar('cvs4', <?php print($data_string) ?>);
                bar2.Set('chart.colors', ['lavender','#9fff30','transparent']);
                bar2.Set('chart.title', 'Número de incidencias por código');
                bar2.Set('chart.title.yaxis', 'Nº de incidencias');
                bar2.Set('chart.title.xaxis', 'Código de la incidencia');
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

            <br /><br /><br />

                <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";



             echo "<br /><br /><br /><br /><br />";


        /*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

        echo '<p style="text-indent: 1cm;">';
            echo '<span class="analisis_revsistema">Análisis de las incidencias de inspección:</span>';
        echo '</p>';
            echo '<br />';
            echo '<textarea class="textareanormal" name="analisisincidenciasinspecciones" value="">1 incidencia leve por inspección.</textarea>';
            echo '<br />';
            echo '<h2>2.3. Indicadores de RECURSOS</h2>';
            echo '<h3>2.3.1. Formación anual</h3>';

        /*------------------------------------------------ GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/


         /** Change these to your own credentials*/

         @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];


            $result = mysqli_query($mysqli, 
                "SELECT trabajador, SUM( horas ) AS horas
                FROM cursos
                WHERE fecha BETWEEN '$from_date' AND  '$to_date'
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

            <canvas id="cvs5" width="1100px" height="350px">[No canvas support]</canvas>
            <script>
                bar3 = new RGraph.Bar('cvs5', <?php print($data_string) ?>);
                bar3.Set('chart.title', 'Total de horas de formación por trabajador');
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

            <br /><br /><br />

                <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

             echo "<br /><br /><br /><br /><br />";

        /*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/


                                    echo '<p style="text-indent: 1cm;">';
                                    echo '<span class="analisis_revsistema">Análisis de la formación anual:</span>';
                                    echo '</p>';
                                    echo '<textarea class="textareanormal" name="analisisformacion" placeholder="4 h / año / trabajador" value="">20 horas cada tres años</textarea>';
                                    echo '<br />';


                        echo '<h3>2.3.2. Incidencias de almacén</h3>';

                                //echo '<p style="text-indent: 2cm;">';


        /*------------------------------------------------GRÁFICO DE INCIDENCIAS DE ALMACÉN--------------------------------------------*/


              /**
            * Change these to your own credentials */

        @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];

            $result = mysqli_query($mysqli, 
                "SELECT COUNT( obsalmac ) AS incidencias, fecha
                 FROM aisgc
                 WHERE fecha BETWEEN '$from_date' AND  '$to_date'
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
             <script>
                bar4 = new RGraph.Bar('cvs6', <?php print($data_string) ?>);
                bar4.Set('chart.title', 'Incidencias en inspecciones de almacén');
                bar4.Set('chart.colors', ['red','#9fff30','transparent']);
                bar4.Set('chart.title.yaxis', 'Nº incid');
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

           <br /><br /><br />
        <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

           echo "<br /><br /><br /><br /><br />";

        //-----------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS DE ALMACÉN-------------------------------------

        /*-------------------------------------------------Mostramos las incidencias de almacén -------------------------------------------------------*/

        @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];
        $result = mysqli_query($mysqli, 
            "SELECT *
             FROM  `aisgc`
             WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'
             AND  obsalmac >  ''
             ORDER BY  `aisgc`.`id` ASC"
        );
        if ($row = mysqli_fetch_array($result)) {
                  echo "<table class = 'sortable'> ";
                  echo '<tr><th>AI</th><th>'.INDICADORES_INCIDENCIASDEALMACEN.'</th></tr>';
            do {
                 echo "<tr><td>";

                    echo "<a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[fecha]"; echo "</td><td>"; echo "$row[ai]"; echo "</td><td colspan=2>"; echo "$row[auditor1]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo TRABAJADOR_TRABAJADOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[docum]"; echo"</td><td colspan=2>"; echo "$row[trabajador1]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo SERVICIO_SERVICIO; echo "</th><th>"; echo VEHICULOS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[servicio1]"; echo "</td><td colspan=2>"; echo "$row[vehiculos]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th>"; echo CUESTIONARIO_CALIDAD; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obstrat]"; echo "</td><td colspan=2>"; echo "$row[obscal]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obsalmac]"; echo "</td><td colspan=2>"; echo "$row[obscompras]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo "</th><th>"; echo CUESTIONARIO_DOCUMENTACION; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obsformac]"; echo "</td><td colspan=2>"; echo "$row[obsdocum]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obslegio]"; echo "</td></tr>";

                    echo "</td></tr></table>'>";

                    echo "$row[ai]</a>";


                    //".$row["ai"]."


                 echo "</td><td>".$row["obsalmac"]."</td></tr> ";
            } while ($row = mysqli_fetch_array($result));
                  echo "</table> ";

                    //contamos los registros encontrados desde esas fechas

                            echo '<br /><br />';
                            echo "Incidencias desde la fecha: '$from_date' a  '$to_date'";

                            echo '&nbsp;&nbsp;';
                            $sqlcount = mysqli_query($mysqli, 
                                "SELECT COUNT( * ) AS count
                                 FROM  `aisgc`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'
                                 AND  obsalmac >  '' "
                            );

                            while ($row = mysqli_fetch_row($sqlcount)) {
                            echo "Se ha/n encontrado $row[0] incidencia/s;";
                            }
                    //Fin de contar registros



        } else {
              echo NOSEHAENCONTRADO;// no rows found
        }



        /*----------------------------------------------FIN mostrar incidencias de almacén----------------------------------------------------------*/


            echo '<br />';
        echo '<p style="text-indent: 1cm;">';
            echo '<span class="analisis_revsistema">Análisis de las incidencias de almacén:</span>';
        echo '</p>';
            echo '<br />';
            echo '<textarea class="textareanormal" name="analisisincidenciasalmacen" placeholder="< 3 incidencias leves/ auditoría" value="">< 3 incidencias leves/ auditoría</textarea>';
            echo '<br /><br /><br />';
            echo '<h2>2.4. Indicadores de PRODUCCIÓN</h2>';
                echo '<h3>2.4.1. Incidencias de proveedor</h3>';
            echo '<p style="text-indent: 0cm;">';

        /*------------------------------------------------------------- GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/


        @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];
        $result = mysqli_query($mysqli, 
            "SELECT  `fecha` ,  `codigoincidencia`
            FROM  `incidenciasdeproveedor`
            WHERE fecha BETWEEN '$from_date' AND  '$to_date'"
        );
        if ($result) {
            $labels = array();
            $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $labels[] = $row["fecha"];
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
            <script>
                line4 = new RGraph.Line('cvs7', <?php print($data_string) ?>);
                line4.Set('chart.title', 'Códigos de incidencias de proveedor');
                line4.Set('chart.title.yaxis', 'Código');
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
           <br /><br /><br />
             <?php
                echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";
             ?>
           <br /><br /><br /><br /><br />


        <?php
        /*----------------------------------------------FIN DE AL GRÁFICA DE INCIDENCIAS DE PROVEEDOR-------------------------------------------*/

        /*---------------------------------------------- MOSTRAMOS LAS INCIDENCIAS DE PROVEEDOR-------------------------------------------*/

        echo '</p>';
        echo '<br />';

                @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];
                $sql = mysqli_query($mysqli, 
                    "SELECT p.id id1, p. * , i.id id2, i. *
                    FROM proveedores p
                    JOIN incidenciasdeproveedor i ON p.proveedor = i.proveedor
                    AND i.fecha BETWEEN '$from_date' AND  '$to_date'
                    ORDER BY fecha ASC "
                );
                     echo '<table class="sortable">';
                     echo "<tbody>";
                         echo ' <tr>';
                             echo '<th>ID</th><th>'.INCIDENCIA.'</th><th>'.PROVEEDORES_PROVEEDOR.'</th><th>'.FECHA.'</th></tr>';
        while ($row = mysqli_fetch_row($sql)) {
                        echo "<tr>";
                                echo "<td>".$row['0']."</td>";
                                echo "<td>";
                                    echo "<a href='?seccion=proveedores_admin&amp;aktion=change_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                                    echo "<th>ID</th><th>"; echo PROVEEDORES_PROVEEDOR; echo "</th></tr>";
                                    echo "<tr><td>"; echo "$row[11]"; echo "</td><td colspan=2>"; echo "$row[12]"; echo "</td></tr>";
                                    echo "<tr><th>"; echo INCIDENCIA; echo"</th><th colspan=2>"; echo CODIGO; echo "</th></tr>";
                                    echo "<tr><td>"; echo "$row[13]"; echo"</td><td>"; echo "$row[14]"; echo "</td></tr>";
                                    echo "<tr><th>"; echo NCS_AFECTAA; echo "</th><th>"; echo FECHA; echo "</th></tr>";
                                    echo "<tr><td>"; echo "$row[15]"; echo "</td><td>"; echo "$row[16]"; echo "</td></tr>";
                                    echo "</td></tr></table>'>";

                                    echo "$row[13]</a>";

                                         echo "<td>".$row['2']."</td>";
                                         echo "</td>";

                                         echo "<td>".$row['16']."</td>";
                                     echo "</tr>";
        }
        if ($sql) {

                     echo "</tbody>";
                     echo "</table><br /><br /><br />";
                     echo NOSEHAENCONTRADO;// no rows found
        } else {
                    //echo NOSEHAENCONTRADO;


                    //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount = mysqli_query($mysqli, 
                                "SELECT COUNT( * ) AS count
                                 FROM  `incidenciasdeproveedor`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row = mysqli_fetch_row($sqlcount)) {
                            echo "Se ha/n encontrado $row[0] incidencia/s;";
                            }
                    //Fin de contar registros

        }

        /*---------------------------------------------- FIN MOSTRAR LAS INCIDENCIAS DE PROVEEDOR-------------------------------------------*/

                        echo '<br /><br /><br /><br />';

                        echo '<p style="text-indent: 1cm;">';
                        echo '<span class="analisis_revsistema">Análisis de las incidencias de proveedor y de los avisos telefónicos:</span>';
                        echo '</p>';
                        echo '<br />';
                        echo '<textarea class="textareanormal" name="analisisincidenciasproveedor" placeholder="2,5% producto" value="">2,5% producto</textarea>';
                        echo '<br /><br /><br />';


                echo '<h3>2.4.2. Llamadas telefónicas de los clientes (gráfica de control.</h3>';
                 echo '<br /><br /><br />Valor de control: 16% del total de llamadas.';

        /*---------------------------------------------- GRÁFICA DE CONTROL DE RECLAMACIONES TELEFÓNICAS DE LOS CLIENTES-------------------------------------------*/

         @$from_date = $_POST['seleccione'];
         @$to_date = $_POST['seleccione2'];
                    $result = mysqli_query($mysqli, 
                        "SELECT mes, percent
                         FROM controlavisos
                         WHERE mes BETWEEN '$from_date' AND  '$to_date'
                         ORDER BY id ASC"
                    );
        if ($result) {

                        $labels = array();
                        $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                        $labels[] = $row["mes"];
                        $data[]   = $row["percent"];
            }

                    // Now you can aggregate all the data into one string
                       $data_string = "[" . join(", ", $data) . "]";
                       $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                       print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }


        ?>
        <canvas id="cvs" width="1000px" height="300px">[No canvas support]</canvas>
        <script>
        line3 = new RGraph.Line('cvs', <?php print($data_string) ?>);
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


        /*---------------------------------------------- FIN DE LA GRÁFICA DE CONTROL DE RECLAMACIONES TELEFÓNICAS DE LOS CLIENTES-------------------------------------------*/

            echo '<h1>3. ';
                echo AUDITORIAS;
            echo '</h1>';

        /*---------------------------------------------- Mostramos las auditorías------------------------------------------------------*/

        @$from_date = $_POST['seleccione'];
        @$to_date = $_POST['seleccione2'];

                $sql = mysqli_query($mysqli, 
                    "SELECT a.id id1, a. * , i.id id2, i. *
                     FROM aisgc a
                     JOIN informeauditoria i ON a.ai = i.ai
                     AND i.fecha BETWEEN '$from_date' AND  '$to_date'
                     ORDER BY i.fecha ASC "
                );
                  echo '<table class="sortable">';
                    echo "<tbody>";
                  echo ' <tr>';
                  echo '<th>'.AUDITORIAS_AUDITORIA.'</th><th>'.INFORME.'</th><th>'.FECHA.'</th><th>'.RESULTADO.'</th></tr>';
        while ($row = mysqli_fetch_row($sql)) {
                    echo "<tr>";
                    echo "<td>";

                    echo "<a href='?seccion=aisgc_print&amp;aktion=change_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[2]"; echo "</td><td>"; echo "$row[3]"; echo "</td><td colspan=2>"; echo "$row[4]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo TRABAJADOR_TRABAJADOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[7]"; echo"</td><td colspan=2>"; echo "$row[8]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo SERVICIO_SERVICIO; echo "</th><th>"; echo VEHICULOS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[11]"; echo "</td><td colspan=2>"; echo "$row[13]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th>"; echo CUESTIONARIO_CALIDAD; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[14]"; echo "</td><td colspan=2>"; echo "$row[15]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[16]"; echo "</td><td colspan=2>"; echo "$row[17]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo "</th><th>"; echo CUESTIONARIO_DOCUMENTACION; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[18]"; echo "</td><td colspan=2>"; echo "$row[19]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[20]"; echo "</td></tr>";

                    echo "</td></tr></table>'>";

            echo "$row[3]</a>";


                    //<a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['3']."</a>


                    echo "</td>";
                    echo "<td><a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['21']."'>".$row['23']."</a></td>";
                    echo "<td>".$row['24']."</td>";
                    echo "<td>".$row['29']."</td>";
                    echo "</tr>";
        }
                   echo "</tbody>";
                  echo "</table><br /><br /><br />";

                   echo "Auditorías e informes desde la fecha: '$from_date' a  '$to_date'";

                   //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount = mysqli_query($mysqli, 
                                "SELECT COUNT( * ) AS count
                                 FROM  `informeauditoria`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row = mysqli_fetch_row($sqlcount)) {
                            echo "Se ha/n encontrado $row[0] informes/s;";
                            }
                    //Fin de contar registros

        //-------------------------------------------------------------FIN mostrar las auditorías-------------------------------------------------*/

                echo '<br /><br /><br />';
                echo '<p style="text-indent: 1cm;">';
                echo '<span class="analisis_revsistema">Análisis de los resultados de auditorías:</span>';
                echo '</p>';
                echo '<br />';
                echo '<textarea class="textareanormal" name="analisisauditorias" placeholder="Análisis de los resultados de las auditorías" value="">Análisis de los resultados de las auditorías</textarea>';
                echo '<br /><br /><br />';

                echo '<h1>4. ' . NOCONFORMIDADESYMEJORAS . '</h1>';

                /*?>
                <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>

                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/help.png" alt="help">
                </div>
                <?php*/

				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#"><strong><i class="fa fa-question-circle fa-2x" style="color:#9fff30;"></i></strong><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>
				' . AYUDA . '</em>' . AUDITORIAS_JOIN_HELP . '</span></a></p>
				</div>';



        //----------------------------------------------------------Mostramos las no conformidades-------------------------------------------------*/

        $sql = mysqli_query($mysqli, 
            "SELECT hojas. * , audit. *
             FROM hojasdemejora AS hojas
             JOIN informeauditoria AS audit ON hojas.ai = audit.ai
             WHERE hojas.fecha BETWEEN '$from_date' AND  '$to_date'
             GROUP BY hojas.id DESC
             ORDER BY  `audit`.`id` ASC "
        );
        echo "<table class='sortable'>";
        echo "<tbody>";
            echo "<tr>";
                echo "<th>"; echo FECHA; echo "</th><th>"; echo INFORME; echo "</th><th>NC</th><th>"; echo DESCRIPCION; echo "</th></tr>";
        while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['5']."</a></td>";
                echo "<td>";

                echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['17']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[18]"; echo "</td><td>"; echo "$row[19]"; echo "</td><td colspan=2>"; echo "$row[20]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[21]"; echo"</td><td colspan=2>"; echo "$row[22]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo "$row[24]"; echo"</td></tr>";
                    echo "</td></tr></table>'>";

                        echo "$row[18]</a>";


                //<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['17']."' target='blank'>".$row['18']."</a>



                    echo "</td>";

                   echo '<td>';


            echo '<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id='.$row[10].'" alt="Image Tooltip" rel="tooltip" content="<table class=print><tr>';
            echo '<th>'; echo NCS_NUMERO; echo '</th><th>'; echo FECHA; echo '</th></tr>';
            echo '<tr><td>'; echo $row[2]; echo '</td><td>'; echo $row[5]; echo '</td></tr>';
            echo '<tr><th>'; echo AUDITORIAS_NUMERO_AUDITORIA; echo'</th><th>'; echo DOCUMENTACION; echo '</th></tr>';
            echo '<tr><td>'; echo $row[1]; echo '</td><td>'; echo $row[6]; echo'</td></tr>';
            echo '<tr><th>'; echo NCS_ABIERTOPOR; echo '</th><th>'; echo NCS_AFECTAA; echo '</th></tr>';
            echo '<tr><td>'; echo $row[7]; echo '</td><td>'; echo $row[8]; echo '</td></tr>';
            echo '<tr><th>'; echo NCS_CAUSAS; echo'</th><th>'; echo NCS_ACCIONES; echo'</th></tr>';
            echo '<tr><td>'; echo $row[9]; echo'</td><td>'; echo $row[10]; echo '</td></tr>';
            echo '<tr><th>'; echo NCS_PLAZO;echo '</th><th>'; echo NCS_CIERRE_PARCIAL; echo'</th></tr>';
            echo '<tr><td>'; echo $row[11]; echo '</td><td>'; echo $row[12]; echo '</td></tr>';
            echo '<tr><th>'; echo NCS_EFICACIA;echo '</th><th>'; echo NCS_FECHACIERRE; echo'</th></tr>';
            echo '<tr><td>'; echo $row[13]; echo '</td><td>'; echo $row[14]; echo '</td></tr>';
            echo '<tr><th>'; echo NCS_DESVIACION; echo '</th></tr>';
            echo '<tr><td>'; echo $row[15]; echo '</td></tr>';
            echo '</table>">';

            echo $row[2];
            echo '</a>';

            //<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id='.$row['10'].'">'; echo "$row[numhoja]"; echo '</a>




               echo '</td>';


                   //echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a></td>";




                    echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['4']."</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table><br /><br />";

            echo '<br /><br /><br />';
             echo "No conformidades desde la fecha: '$from_date' a  '$to_date'";

                     //contamos los registros encontrados desde esas fechas

                            echo '&nbsp;&nbsp;';
                            $sqlcount = mysqli_query($mysqli, 
                                "SELECT COUNT( * ) AS count
                                 FROM  `hojasdemejora`
                                 WHERE  `fecha` BETWEEN '$from_date' AND  '$to_date'"
                            );

                            while ($row = mysqli_fetch_row($sqlcount)) {
                            echo "Se ha/n encontrado $row[0] no conformidad/es. Si aparecen menos en el listado, es porque no corresponden a ninguna auditoría.";
                            }
                    //Fin de contar registros

             echo '<br /><br /><br /><br /><br />';

        //------------------------------------------------------FIN mostrar las no conformidades----------------------------------------------------------*/

                    echo '<p style="text-indent: 1cm;">';
                    echo '<span class="analisis_revsistema">Análisis de las no conformidades y mejoras:</span>';
                    echo '</p>';
                    echo '<br />';
                    echo '<textarea class="textareanormal" name="analisisnoconformidades" placeholder="Análisis de los resultados de las no conformidades" value="">Análisis de los resultados de las no conformidades</textarea>';
                   echo '<br /><br /><br />';

            echo '<h1>5. Política de calidad.</h1>';
                    echo '<br />';
                    echo '<br />';
                    echo '<p style="text-indent: 1cm;">';
                    echo '<span class="analisis_revsistema">Análisis de la política de calidad:</span>';
                    echo '</p>';
                    echo '<textarea class="textareanormal" name="analisispolitica" placeholder="Análisis de la política" value="">Análisis de la política</textarea>';
                    echo '<br /><br /><br />';

            echo '<h1>6. Cambios.</h1>';
                    echo '<br />';
                    echo '<br />';
                    echo '<p style="text-indent: 1cm;">';
                    echo '<span class="analisis_revsistema">Análisis de los posibles cambios:</span>';
                    echo '</p>';
                    echo '<textarea class="textareanormal" name="analisiscambios" placeholder="Análisis de los cambios que afecten al sistema de calidad" value="">Análisis de los cambios que afecten al sistema de calidad</textarea>';
                    echo '<br /><br /><br />';

            echo '<h1>7. Recomendaciones de mejora.</h1>';
                    echo '<br />';
                    echo '<br />';
                    echo '<textarea class="textareanormal" name="recomendaciones" placeholder="Recomendaciones" value="">Recomendaciones</textarea>';
                    echo '<br /><br /><br />';

            echo '<h1>8. Conclusiones.</h1>';
                    echo '<br />';
                    echo '<textarea class="textareanormal" name="conclusiones" placeholder="Conclusiones" value="">Conclusiones</textarea>';
                    echo '<br />';
                    echo '<button type="submit" class="btn btn-info">' . ENVIAR . '</button>';
                     echo '</form>';
    } else {
            $fecha_Post = $_POST['fecha'];
            $analisisobjetivos_Post = $_POST['analisisobjetivos'];
            $analisissatisfaccionclientes_Post = $_POST['analisissatisfaccionclientes'];
            $analisisreclamacionesclientes_Post = $_POST['analisisreclamacionesclientes'];
            $analisisnoconformidadesporarea_Post = $_POST['analisisnoconformidadesporarea'];
            $analisiscierresncs_Post = $_POST['analisiscierresncs'];
            $analisisincidenciasinspecciones_Post = $_POST['analisisincidenciasinspecciones'];
            $analisisformacion_Post = $_POST['analisisformacion'];
            $analisisincidenciasalmacen_Post = $_POST['analisisincidenciasalmacen'];
            $analisisincidenciasproveedor_Post = $_POST['analisisincidenciasproveedor'];
            $analisisauditorias_Post = $_POST['analisisauditorias'];
            $analisisnoconformidades_Post = $_POST['analisisnoconformidades'];
            $analisispolitica_Post = $_POST['analisispolitica'];
            $analisiscambios_Post = $_POST['analisiscambios'];
            $recomendaciones_Post = $_POST['recomendaciones'];
            $sql =    mysqli_query($mysqli, "INSERT INTO revsistema (fecha, analisisobjetivos, analisissatisfaccionclientes,analisisreclamacionesclientes,analisisnoconformidadesporarea,analisiscierresncs,analisisincidenciasinspecciones,analisisformacion,analisisincidenciasalmacen,analisisincidenciasproveedor,analisisauditorias,analisisnoconformidades,analisispolitica,analisiscambios,recomendaciones) VALUES ('".$fecha_Post."', '".$analisisobjetivos_Post."', '".$analisissatisfaccionclientes_Post."', '".$analisisreclamacionesclientes_Post."', '".$analisisnoconformidadesporarea_Post."', '".$analisiscierresncs_Post."', '".$analisisincidenciasinspecciones_Post."', '".$analisisformacion_Post."', '".$analisisincidenciasalmacen_Post."', '".$analisisincidenciasproveedor_Post."', '".$analisisauditorias_Post."', '".$analisisnoconformidades_Post."', '".$analisispolitica_Post."', '".$analisiscambios_Post."', '".$recomendaciones_Post."')");
        if ($sql) {
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
        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $id ");
        $data = mysqli_fetch_row($sql);


        echo '<form action="" method="POST">';
          echo FECHA;

		  echo '<input type="text" id="date" class="datepicker" name="fecha" value="' . $data[1] . '" />';


          echo '<br /><br /><br /><br />';

          echo '<h1>1. '.OBJETIVOS_OBJETIVOS.'.</h1>';

        /*--------------------------Mostramos los objetivos al modo mangui ------------------------------------------*/


         @$date = $data[1];
          //$sql2 = mysql_query("SELECT * FROM objetivosdatosgenerales WHERE fecha > '$date' ORDER BY Id DESC");

          $sql2 = mysqli_query($mysqli, "SELECT *
                        FROM objetivosdatosgenerales o
                        WHERE o.Fecha
                        BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
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
                    echo '<i class="fa fa-pencil fa-2x" style="color:#752209;"></i></a></th>';
                    echo '<th style width="5%"><a href="?seccion=objetivos_print&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
                              <i class="fa fa-print fa-2x" style="color:#752209;"></i></a></th>';


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
                            echo "<i class='fa fa-pencil fa-2x' style='color:#752209;'></i></a>";
                        echo "</td>";
                        echo "<td>";
                            echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[0]' title='".OBJETIVOS_IMPRIMIR_OBJETIVO." - ".$row['1']."'>";
                            echo "<i class='fa fa-print fa-2x' style='color:#752209;'></i></a>";
                        echo "</td>";


                   echo "</tr>";
        }
            echo '</tbody>';
            echo "</table>";

        echo "<br /><br />";
            echo "Objetivos hasta: $data[1]";
        echo "<br /><br />";

        /*------------------------------------------------------FIN mostrar objetivos-----------------------------------------------------*/

        echo "<br /><br />";
            echo COMENTARIOS;
        echo "<br />";
                echo '<textarea class="textareanormal" name="analisisobjetivos">'.$data[2].'</textarea>';
            echo "<br /><br />";
                echo '<h1>2. '.SATISFACCION.'</h1>';


        /*------------------------------------------------GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/

        /**
            * Change these to your own credentials*/


        $result = mysqli_query($mysqli, "SELECT *
                        FROM globalclientes g
                        WHERE g.fecha
                        BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                        AND  '$date'");


        //$result = mysql_query("SELECT * FROM globalclientes WHERE fecha > '$date'");


        if ($result) {

                $labels = array();
                $data   = array();

            while ($row = mysqli_fetch_assoc($result)) {
                    $labels[] = $row["mes"];
                    $data[]   = $row["global"];
            }

                // Now you can aggregate all the data into one string
                $data_string = "[" . join(", ", $data) . "]";
                $labels_string = "['" . join("', '", $labels) . "']";
        } else {
                print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
        ?>

            <!-- Don't forget to update these paths -->
             <script src="libraries/RGraph.common.core.js" ></script>
            <script src="libraries/RGraph.line.js" ></script>
            <script src="libraries/RGraph.bar.js"></script>
            <script src="libraries/RGraph.common.dynamic.js"></script>
            <script src="libraries/RGraph.common.context.js" ></script>
            <script src="libraries/RGraph.common.tooltips.js"></script>
            <script src="libraries/RGraph.common.annotate.js" ></script>

        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

            <canvas id="cvs1" width="1100" height="300">[No canvas support]</canvas>
            <script>
                line1 = new RGraph.Line('cvs1', <?php print($data_string) ?>);
                line1.Set('chart.title', 'Valoración global clientes');
                line1.Set('chart.title.yaxis', 'Valor');
                line1.Set('chart.annotatable', true);
                line1.Set('chart.events.click', myFunc3);
                line1.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
                line1.Set('chart.contextmenu', [
                                         ['Show palette', RGraph.Showpalette],
                                         ['Clear', function ()
                                                   {
                                                    RGraph.Clear(line1.canvas);
                                                    RGraph.ClearAnnotations(line1.canvas);
                                                    line1.Draw();
                                                   }
                                         ]
                                        ]);
                line1.Set('chart.background.grid.autofit', true);

              /*line1.Set('chart.background.barcolor1', '#f2f2f2');
                line1.Set('chart.background.barcolor2', '#f2f2f2');
                line1.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
                line1.Set('chart.background.grid.autofit.numhlines', 10);
                line1.Set('chart.colors', ['yellow']);
                line1.Set('chart.shadow', true);
                line1.Set('chart.linewidth', 3);
                line1.Set('chart.curvy', 1);
                line1.Set('chart.curvy.factor', 0.25);
                line1.Set('chart.filled', false);
                line1.Set('chart.gutter.left', 35);
                line1.Set('chart.gutter.right', 5);
                line1.Set('chart.gutter.top', 50);
                line1.Set('chart.gutter.bottom', 100);
                line1.Set('chart.text.angle', 45);
                line1.Set('chart.hmargin', 10);
                line1.Set('chart.tickmarks', 'endcircle');
                line1.Set('chart.tooltips', <?php print($labels_string) ?>);
                line1.Set('chart.labels', <?php print($labels_string) ?>);
                line1.Set('chart.tooltips.effect', 'contract');
                line1.Draw();

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
                echo "<br /><br />";

                echo "Satisfaccioón hasta: $date";

                                echo "<br /><br />";
                                 echo COMENTARIOS;
                                echo "<br />";
        ?>

        <?php

        /*------------------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/


        $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
        $data = mysqli_fetch_row($sql);

                  echo '<textarea class="textareanormal" name="analisissatisfaccionclientes">'.$data[3].'</textarea>';
                echo '<br /><br />';
                  echo '<h1>3. '.RECLAMACIONES.'.</h1>:';

                                echo "<br /><br />";
                                 echo COMENTARIOS;
                                echo "<br />";
                  echo '<textarea class="textareanormal" name="analisisreclamacionesclientes">'.$data[4].'</textarea>';


                 echo '<br /><br />';
                
                  echo '<h1>4. '.INSPECCIONES.'.</h1>';

                  echo "<br /><br />";
                        $sql = mysqli_query($mysqli, "SELECT * FROM codigosincidenciasinspecciones ORDER BY id ASC");
        while ($row = mysqli_fetch_row($sql)) {
                        echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                        echo "<th>"; echo GRAVEDAD; echo "</th><th>"; echo CODIGO; echo "</th><th>"; echo TIPO; echo"</th></tr>";
                        echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>";
                        echo "</table>'>";
                        echo "$row[2], </a>";

        }
                        echo "<br /><br />";


        /*------------------------------------------------GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/


        $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
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
            <script>
                bar2 = new RGraph.Bar('cvs4', <?php print($data_string) ?>);
                bar2.Set('chart.colors', ['lavender','#9fff30','transparent']);
                bar2.Set('chart.title', 'Número de incidencias por código');
                bar2.Set('chart.title.yaxis', 'Nº de incidencias');
                bar2.Set('chart.title.xaxis', 'Código de la incidencia');
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



                <?php

        $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
        $data = mysqli_fetch_row($sql);

             @$date = $data[1];

                echo "Gráfico hasta: $data[1]";

            ?>



        <?php
        /*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisisincidenciasinspecciones">'.$data[7].'</textarea>';
                   echo '<br /><br />';
                  echo '<h1>5. '.FORMACION.'.</h1>:';


        /*------------------------------------------------GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/


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

            <canvas id="cvs5" width="1100px" height="350px">[No canvas support]</canvas>
            <script>
                bar3 = new RGraph.Bar('cvs5', <?php print($data_string) ?>);
                bar3.Set('chart.title', 'Total de horas de formación por trabajador');
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

        $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
        $data = mysqli_fetch_row($sql);

             @$date = $data[1];

                echo "<br />Gráfico hasta: $data[1]";


        /*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisisformacion">'.$data[8].'</textarea>';
                    echo '<br /><br />';
                  echo '<h1>6. '.ALMACEN.'.</h1>:';

        /*------------------------------------------------------------Mostramos las incidencias de almacén--------------------------------------------------*/

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

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisisincidenciasalmacen">'.$data[9].'</textarea>';
                    echo '<br /><br />';
                  echo '<h1>7. Proveedores.</h1>';

        /**----------------------------------GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/

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

            <canvas id="cvs6" width="1000px" height="300px">[No canvas support]</canvas>
            <script>
                line3 = new RGraph.Line('cvs6', <?php print($data_string) ?>);
                line3.Set('chart.title', 'Códigos de incidencias de proveedor');
                line3.Set('chart.title.yaxis', 'Código');
				line3.Set('chart.title.xaxis', 'Proveedor');
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

         $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
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

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";
                            echo '<textarea class="textareanormal" name="analisisincidenciasproveedor">'.$data[10].'</textarea>';
                            echo '<br /><br />';

                  echo '<h1>8. ' . AUDITORIAS . '</h1>:';


        //-------------------------------------------------------Mostramos las auditorías---------------------------------------------------------------*/


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



                            echo "<a href='index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                            echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                            echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>";
                            echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th colspan=2>"; echo CUESTIONARIO_CALIDAD; echo "</th></tr>";
                            echo "<tr><td colspan=2>"; echo "$row[13]"; echo"</td><td colspan=2>"; echo "$row[14]"; echo "</td></tr>";
                            echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo " (Si es conforme, no anotar nada)</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                            echo "<tr><td colspan=2>"; echo "$row[15]"; echo "</td><td colspan=2>"; echo "$row[16]"; echo"</td></tr>";
                            echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo"</th><th colspan=2>"; echo CUESTIONARIO_DOCUMENTACION;echo "</th></tr>";
                            echo "<tr><td colspan=2>"; echo "$row[17]"; echo "</td><td colspan=2>"; echo "$row[18]"; echo "</td></tr>";
                            echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                            echo "<tr><td colspan=2>"; echo "$row[19]"; echo "</td></tr></table>'>";

                            echo "$row[2]</a>";

                            echo "</td>";
                                    //echo "<td><a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a></td>";

                                    echo "<td>";

                            echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['20']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                            echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>";
                            echo "<tr><td>"; echo "$row[22]"; echo "</td><td>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo "$row[24]"; echo "</td></tr>";
                            echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>";
                            echo "<tr><td colspan=2>"; echo "$row[25]"; echo"</td><td colspan=2>"; echo "$row[26]"; echo "</td></tr>";
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
                    <i class="fa fa-question-circle fa-2x" style="color:#9fff30;"></i>
                    </div>

                         <br />

                   <?php
        //------------------------------------------------Mostramos las no conformidades--------------------------------------------------------------*/


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
									  <th><i class="fa fa-edit fa-2x" style="color:#9fff30;"></i></th>
									  <th><i class="fa fa-print fa-2x" style="color:#9fff30;"></i></th>
									  </tr>';

        while ($row = mysqli_fetch_row($sql)) {
                            echo "<tr>";


                                echo "<td>";
                                    echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['17']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>";
                                    echo "<tr><td>"; echo "$row[18]"; echo "</td><td>"; echo "$row[19]"; echo "</td><td colspan=2>"; echo "$row[20]"; echo "</td></tr>";
                                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>";
                                    echo "<tr><td colspan=2>"; echo "$row[21]"; echo"</td><td colspan=2>"; echo "$row[22]"; echo "</td></tr>";
                                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>";
                                    echo "<tr><td colspan=2>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo "$row[24]"; echo"</td></tr>";
                                    echo "</td></tr></table>'>";
                                    echo "$row[18]</a>";

                                //<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['17']."' target='blank'>".$row['18']."</a>
                                echo "</td>";

                                echo '<td>';
                                    echo '<a href="index.php?seccion=ncs_admin&amp;aktion=change_id&amp;id='.$row[0].'" alt="Image Tooltip" rel="tooltip" content="<table class=print><tr>';
                                    echo '<th>'; echo NCS_NUMERO; echo '</th><th>'; echo FECHA; echo '</th></tr>';
                                    echo '<tr><td>'; echo $row[2]; echo '</td><td>'; echo $row[5]; echo '</td></tr>';
                                    echo '<tr><th>'; echo AUDITORIAS_NUMERO_AUDITORIA; echo '</th><th>'; echo DOCUMENTACION; echo '</th></tr>';
                                    echo '<tr><td>'; echo $row[1]; echo '</td><td>'; echo $row[6]; echo'</td></tr>';
                                    echo '<tr><th>'; echo NCS_ABIERTOPOR; echo '</th><th>'; echo NCS_AFECTAA; echo '</th></tr>';
                                    echo '<tr><td>'; echo $row[7]; echo '</td><td>'; echo $row[8]; echo '</td></tr>';
                                    echo '<tr><th>'; echo NCS_CAUSAS; echo '</th><th>'; echo NCS_ACCIONES; echo'</th></tr>';
                                    echo '<tr><td>'; echo $row[9]; echo '</td><td>'; echo $row[10]; echo '</td></tr>';
                                    echo '<tr><th>'; echo NCS_PLAZO; echo '</th><th>'; echo NCS_CIERRE_PARCIAL; echo '</th></tr>';
                                    echo '<tr><td>'; echo $row[11]; echo '</td><td>'; echo $row[12]; echo '</td></tr>';
                                    echo '<tr><th>'; echo NCS_EFICACIA; echo '</th><th>'; echo NCS_FECHACIERRE; echo '</th></tr>';
                                    echo '<tr><td>'; echo $row[13]; echo '</td><td>'; echo $row[14]; echo '</td></tr>';
                                    echo '<tr><th>'; echo NCS_DESVIACION; echo '</th><th>'; echo NC; echo '</th></tr>';
                                   echo '<tr><td>'; echo $row[15]; echo '</td><td>'; echo '<span class=spanred>'; echo $row[4]; echo '</span></td></tr>';
                                    echo '</table>">';
                                    echo $row[2];
                                    echo '</a>';

                                echo '</td>';
                                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['4']."</a></td>";
								echo "<td><a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=".$row['0']."' onclick='abrir(this.href);return false' title='" . NCS_EDITAR_NC . "  - " . $row['2'] . "'>
										  <i class='fa fa-pencil fa-2x' style='color:#9fff30;'></i></a></td>";
								echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' title='" . NCS_IMPRIMIR . "  - " . $row['2'] . "' target='blank'>
								          <i class='fa fa-print fa-2x' style='color:#9fff30;'></i></a></td>";
                            echo "</tr>";
        }
                        echo "</tbody>";
                        echo "</table>";

        //------------------------------------------------------FIN mostrar las no conformidades---------------------------------------------*/


            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";

                              echo '<textarea class="textareanormal" name="analisisnoconformidades">'.$data[12].'</textarea>';
                            echo '<br />';
                            echo '<br />';
							
  echo 'NC´s:';



         /*------------------------------------------------GRÁFICA DE NO CONFORMIDADES POR ÁREA--------------------------------------*/


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


            <canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas>
            <script>
                bar1 = new RGraph.Bar('cvs2', <?php print($data_string) ?>);
                bar1.Set('chart.title', 'No conformidades por área');
                bar1.Set('chart.colors', ['Tan','#9fff30','transparent']);
                bar1.Set('chart.title.yaxis', 'Nº de NC´s');
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
            <?php

        $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
        $data = mysqli_fetch_row($sql);

                echo "Gráfico hasta: $data[1]";

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";
            ?>

            <?php

        /*------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/

        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $id ");
        $data = mysqli_fetch_row($sql);



                  echo '<textarea class="textareanormal" name="analisisnoconformidadesporarea">'.$data[5].'</textarea>';
                  echo '<br /><br />';
                  echo '<h2>9.1. '.INDICADORES_DESVIACIONCIERRESNCS.'.</h2>:';

        /*------------------------------------------------GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/



        $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
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

            <canvas id="cvs3" width="1100" height="250">[No canvas support]</canvas>
            <script>
                line2 = new RGraph.Line('cvs3', <?php print($data_string) ?>);
                line2.Set('chart.colors', ['red','#9fff30','transparent']);
                line2.Set('chart.title', 'Desviación plazos cierre ncs');
                line2.Set('chart.title.yaxis', 'Nº de días');
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

        $id = (int)$_GET['id'];
         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
        $data = mysqli_fetch_row($sql);

                echo "Gráfico hasta: $data[1]";

            ?>


        <?php

        /*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/


        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";

                  echo '<textarea class="textareanormal" name="analisiscierresncs">'.$data[6].'</textarea>';
                   echo '<br /><br />';

                    echo '<h1>10. Política de calidad.</h1>:';

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";
                              echo '<textarea class="textareanormal" name="analisispolitica">'.$data[13].'</textarea>';

                            echo '<br />';
                            echo '<br />';

                   echo '<h1>11. Cambios.</h1>:';

            echo "<br /><br />";
             echo COMENTARIOS;
                echo "<br />";
                              echo '<textarea class="textareanormal" name="analisiscambios">'.$data[14].'</textarea>';
                           echo ' <br />';
                            echo ' <br />';

                    echo '<h1>12. Recomendaciones.</h1>:';
            echo "<br /><br />";
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

        ?>