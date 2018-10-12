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
?>


<?php

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
        echo '<table class="print">';
        echo ' <caption>';
            echo REVSISTEMA_LISTA_PRINTSCREEN;
        echo ' </caption>';
        echo "</tbody>";
            echo '<tr>';
                echo '<th>';
                    echo FECHA;
                echo '</th>';
                echo '<th>';
                    echo REVSISTEMA_NUM;
                echo '</th>';
            echo '</tr>';
    while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td><a href='?seccion=revsistema_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['0']."</a></td>";
                echo "<td><a href='?seccion=revsistema_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
            echo "</tr>";
    }
        echo "</tbody>";
        echo "</table>";
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
        AND (empty($_POST['analisisREVSISTEMA']))
        AND (empty($_POST['analisisnoconformidades']))
        AND (empty($_POST['analisispolitica']))
        AND (empty($_POST['analisiscambios']))
        AND (empty($_POST['obscompras']))
        AND (empty($_POST['recomendaciones']))
    ) {
        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

          echo '<table class="print">';
               echo '<tbody>';
                echo '<tr>';
                echo '<td><h1>';
                echo REVSISTEMA_PRINT_DETAILS;
                echo ":&nbsp; &nbsp;$data[1]</h1></td><td><a href='?seccion=revsistema2&amp;aktion=change_id&amp;id=".$data[0]."'>";
                echo EDITAR;
                echo "</a></td>";
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';

                echo '<h1>1. ';
                echo OBJETIVOS;
                echo '</h1>';

         /*---------------------------------Mostramos los objetivos al modo mangui -------------------------------*/

        @$date = $data[1];
        $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales
                            WHERE Fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                            AND  '$date' ORDER BY Id DESC");
            echo '<table class="sortable">';
            echo '<tbody>';
                echo '<tr>';
                    echo '<th style="width:35%">';
                        echo OBJETIVOS_NOMBRE_OBJETIVO;
                    echo '</th>';
                  //echo '<th>Origen</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th>';
                    echo '<th>Indicador</th>';
                  //echo '<th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th>-->';
                    echo '<th>';
                        echo RESULTADO;
                    echo '</th>';
                    echo '<th style="width:50px">';
                        echo FECHA;
                    echo '</th>';
                echo '</tr>';

        while ($row = mysqli_fetch_row($sql)) {
                 echo "<tr>";
                    echo "<td>";


                    /*<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a>*/

                    echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print>";
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
                    echo "</tr>";
        }
            echo '<tbody>';
            echo '</table>';

            echo '<br /><br />';
            echo "Objetivos desde la fecha: '$date' en adelante";

                  /*----------------------------FIN mostrar objetivos---------------------------------*/
            echo '<br /><br />';
                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de los objetivos:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[2];
                echo '</div>';

                echo '<br />';
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


        /**------------------------------------------------GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/

        /**
        * Change these to your own credentials*/

        @$date = $data[1];

        $result = mysqli_query($mysqli, "SELECT * FROM globalclientes
                               WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                               AND  '$date'");
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
                echo "Gráfica desde la fecha: '$date' en adelante";
        ?>
             <br /><br /><br /><br /><br />
        <?php

        /**------------------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/


                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de la satisfacción de clientes:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';

        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

                echo $data[3];
                echo '</div>';

                echo '<br />';

            echo '<h3>2.1.2. ';
                echo QUEJASCLIENTE;
            echo '</h3>';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de las quejas de clientes:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[4];
                echo '</div>';

                echo '<br />';
                echo '<br />';

            echo '<h2>2.2. ';
                echo INDICADORES_MEDICIONANALISISYMEJORA;
            echo '</h2>';
            echo '<h3>2.2.1. ';
                echo INDICADORES_NOCONFORMIDADESPORAREA;
            echo '</h3>';
                echo '<p id="para1">';
                echo NCS_GRAFICA;
                            echo '</p>';

        /**------------------------------------------------ GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/

            @$date = $data[1];
            $result = mysqli_query($mysqli, 
                "SELECT afectaa, COUNT( * ) AS cantidad
                FROM hojasdemejora
                WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                AND  '$date'
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

        <a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png" /><br /><strong>Coded by rgraph.net</strong></a>

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
            echo "Gráfica desde la fecha: '$date' en adelante";

         ?>

         <br /><br />

        <!------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA-------------------------------------->


            <?php
                echo '<p id="para1">';
                echo NCS_LISTA;
                echo '</p>';
                echo '<br /><br /><br />';
        //----------------------------------------------------------Mostramos las no conformidades-------------------------------------------------*/

        $sql = mysqli_query($mysqli, 
            "SELECT hojas. * , audit. *
             FROM hojasdemejora AS hojas
             JOIN informeauditoria AS audit ON hojas.ai = audit.ai
             WHERE hojas.fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
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
                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['5']."</a></td>";
                echo "<td>";

                    echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['17']."' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[18]"; echo "</td><td>"; echo "$row[19]"; echo "</td><td colspan=2>"; echo "$row[20]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[21]"; echo"</td><td colspan=2>"; echo "$row[22]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo "$row[24]"; echo"</td></tr>";
                    echo "</td></tr></table>'>";
                    echo "$row[18]</a>";

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

                echo '</td>';

                    echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['4']."</a></td>";
         echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

            echo '<br /><br /><br />';
             echo "No conformidades desde la fecha: '$date' en adelante";
             echo '<br /><br /><br /><br /><br />';
        //------------------------------------------------------FIN mostrar las no conformidades----------------------------------------------------------*/


                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de las no conformidades:</span>';
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
                echo "Gráfica desde la fecha: '$date' en adelante";
        ?>
             <br /><br /><br /><br /><br />
        <?php

        /*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/





                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de las desviaciones:</span>';
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
                <div id="help" onMouseOver="showdiv(event,'<?php echo RECUERDE_LOS_CODIGOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>

                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/help.png" />
                </div>
                <?php*/
				
				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#"><b>&Omega;</b><span class="custom help"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . RECUERDE_LOS_CODIGOS . '</span></a></p>
				</div>';



        /*------------------------------------------------GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/



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

            <br /><br /><br />

                <?php
                echo "Gráfica desde la fecha: '$date' en adelante";

             ?>

             <br /><br /><br /><br /><br />



        <?php
        /*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/


                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de las incidencias de inspección:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1cm;">';

        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

                echo $data[7];
                echo '</div>';

                echo '<br />';
                echo '<br />';

            echo '<h2>2.3. ';
                echo INDICADORES_DERECURSOS;
            echo '</h2>';

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
                echo "Gráfica desde la fecha: '$date' en adelante";

             ?>

             <br /><br /><br /><br /><br />


        <?php


        /*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/





               echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de la formación:</span>';
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
                echo "Gráfica desde la fecha: '$date' en adelante";
        ?>
           <br /><br /><br /><br /><br />

        <!------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS DE ALMACÉN-------------------------------------->

        <?php

        /*--------------------------------------------------Mostramos las incidencias de almacén------------------------------------------*/


        $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
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


                    echo "<a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo TRABAJADOR_TRABAJADOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[6]"; echo"</td><td colspan=2>"; echo "$row[7]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo SERVICIO_SERVICIO; echo "</th><th>"; echo VEHICULOS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[10]"; echo "</td><td colspan=2>"; echo "$row[12]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th>"; echo CUESTIONARIO_CALIDAD; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[13]"; echo "</td><td colspan=2>"; echo "$row[14]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[15]"; echo "</td><td colspan=2>"; echo "$row[16]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo "</th><th>"; echo CUESTIONARIO_DOCUMENTACION; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[17]"; echo "</td><td colspan=2>"; echo "$row[18]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[19]"; echo "</td></tr>";

                    echo "</td></tr></table>'>";

                    echo "$row[2]</a>";



                    //echo "$row[ai]";

                    echo "</td>";

                    echo "<td>".$row["fecha"]."</td><td>".$row["obsalmac"]."</td></tr> ";
            } while ($row = mysqli_fetch_array($result));
                echo "</table> ";
        } else {
             echo NOSEHAENCONTRADO;

        }

        echo '<br /><br />';
   /*-----------------------------------------------------  FIN mostrar incidencias de almacén---------------------------------------*/

                echo '<br /><br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de las incidencias de almacén:</span>';
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


        @$date = $data[1];
        $result = mysqli_query($mysqli, 
            "SELECT  `fecha` ,  `codigoincidencia`
            FROM  `incidenciasdeproveedor`
            WHERE fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
            AND  '$date'"
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

                echo "Gráfica desde la fecha: '$date' en adelante";

        /*----------------------------------------------FIN DE AL GRÁFICA DE INCIDENCIAS DE PROVEEDOR-------------------------------------------*/


                 echo '<h3>2.4.2. Llamadas telefónicas de los clientes (gráfica de control.</h3>';
                 echo '<br /><br /><br />Valor de control: 16% del total de lamadas.';

        /*---------------------------------------------- GRÁFICA DE CONTROL DE RECLAMACIONES TELEFÓNICAS DE LOS CLIENTES-------------------------------------------*/

                $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
                $data = mysqli_fetch_row($sql);
                @$date = $data[1];

                $result = mysqli_query($mysqli, 
                    "SELECT mes, percent
                     FROM controlavisos
                     WHERE mes BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
                     AND  '$date'
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




                echo '<br /><br />';

         /*--------------------------------------------Mostramos las incidencias de proveedor------------------------------------------*/

         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
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
        }
        if ($sql2) {

                 echo "</tbody>";
                 echo "</table>";
                  echo NOSEHAENCONTRADO;// no rows found
        }


        /*---------------------------------------------------- FIN mostrar las incidencias de proveedor--------------------------------------*/

                echo '<br /><br /><br /><br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de las incidencias de proveedor y de los avisos telefónicos:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[10];
                echo '</div>';

                echo '<br />';
                echo '<br />';

            echo '<h1>3. ';
                echo AUDITORIAS;
            echo '</h1>';
            echo '<br />';

        //-----------------------------------------------------Mostramos las auditorías-------------------------------------------------------*/

         $sql = mysqli_query($mysqli, "SELECT * FROM revsistema ORDER BY id DESC");
         $data = mysqli_fetch_row($sql);
         @$date = $data[1];

        $sql = mysqli_query($mysqli, 
            "SELECT aisgc. * , informeauditoria.id id1, informeauditoria . *
            FROM informeauditoria, aisgc
            WHERE informeauditoria.ai = aisgc.ai
            AND aisgc.fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
            AND  '$date'
            AND informeauditoria.Fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
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

                     echo "<a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th colspan=2>"; echo CUESTIONARIO_CALIDAD; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[13]"; echo"</td><td colspan=2>"; echo "$row[14]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[15]"; echo "</td><td colspan=2>"; echo "$row[16]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo"</th><th colspan=2>"; echo CUESTIONARIO_DOCUMENTACION;echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[17]"; echo "</td><td colspan=2>"; echo "$row[18]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[19]"; echo "</td></tr></table>'>";

            echo "$row[2]</a>";

                    //<a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a>



                    echo "</td>";
                    echo "<td>";


                    echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['20']."' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[22]"; echo "</td><td>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo "$row[24]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[25]"; echo"</td><td colspan=2>"; echo "$row[26]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[27]"; echo "</td><td colspan=2>"; echo "$row[28]"; echo"</td></tr>";
                    echo "</td></tr></table>'>";

                        echo "$row[22]</a>";

                    //<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['20']."' target='blank'>".$row['22']."</a>

                    echo "</td>";
                    echo "<td>".$row['23']."</td>";
                    echo "<td>".$row['28']."</td>";
                    echo "</tr>";
        }
            echo "</tbody>";
            echo "</table>";
             echo '<br /><br /><br />';

             echo "Auditorías e informes desde la fecha: '$date' en adelante";

                echo '<br /><br /><br /><br />';

        //-------------------------------------------------------FIN mostrar las auditorías----------------------------------------------------*/

                echo '<br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de los resultados de las auditorías:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[11];
                echo '</div>';

                echo '<br />';
                echo '<br />';

                echo '<h1>4. ';
            echo NOCONFORMIDADESYMEJORAS;
            echo '</h1>';
            /*?>
            <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>

            &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="images/help.png" />
            </div>
            <br />
            <?php*/
			
				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#"><b>&Omega;</b><span class="custom help"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . AUDITORIAS_JOIN_HELP . '</span></a></p>
				</div>';
			
			
         //-------------------------------------------------------Mostramos las no conformidades------------------------------------------------*/

        $sql = mysqli_query($mysqli, 
            "SELECT hojas. * , audit. *
             FROM hojasdemejora AS hojas
             JOIN informeauditoria AS audit ON hojas.ai = audit.ai
             WHERE hojas.fecha BETWEEN DATE_SUB('$date', INTERVAL 365 DAY)
             AND  '$date'
             GROUP BY hojas.id DESC
             ORDER BY  `audit`.`id` ASC"
        );
        echo "<table class='sortable'>";
        echo "<tbody>";
            echo "<tr>";
                echo "<th>"; echo FECHA; echo "</th><th>"; echo INFORME; echo "</th><th>NC</th><th>"; echo DESCRIPCION; echo "</th></tr>";
        while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['5']."</a></td>";

                echo "<td>";
                    echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['17']."' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
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
                    echo '<tr><th>'; echo NCS_PLAZO; echo '</th><th>'; echo NCS_CIERRE_PARCIAL; echo'</th></tr>';
                    echo '<tr><td>'; echo $row[11]; echo '</td><td>'; echo $row[12]; echo '</td></tr>';
                    echo '<tr><th>'; echo NCS_EFICACIA; echo '</th><th>'; echo NCS_FECHACIERRE; echo'</th></tr>';
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
        echo "</table>";

            echo '<br /><br /><br />';
             echo "No conformidades desde la fecha: '$date' en adelante";
             echo '<br /><br />';

        //---------------------------------------------------FIN mostrar las no conformidades--------------------------------------------------------*/

                echo '<br /><br /><br /><br />';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de las no conformidades y mejoras:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[12];
                echo '</div>';
                echo '<br />';
                echo '<br />';

                echo '<h1>5. ';
                echo POLITICADECALIDAD;
                echo '</h3>';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de la política de calidad:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[13];
                echo '</div>';

                echo '<br />';
                echo '<br />';

                echo '<h1>6. ';
                echo CAMBIOS;
                echo '</h3>';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Análisis de los cambios:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[14];
                echo '</div>';

                echo '<br />';
                echo '<br />';

                echo '<h1>7. ';
                echo RECOMENDACIONESYCONCLUSIONES;
                echo '</h3>';
                echo '<div style="text-indent: 1cm;">';
                echo '<span class="documenttitle">Recomendaciones y conclusiones:</span>';
                echo '</div>';
                echo '<div style="text-indent: 1.5cm;">';
                echo $data[15];
                echo '</div>';

                echo '<br />';
                echo '<br />';

    }
}
?>