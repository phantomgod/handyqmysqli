<?php
/**
 * Mod INCIDENCIAS de PROVEEDOR - GRÁFICA
 *  para la revisión del sistema
 *
 * PHP version 5
 *
 * @category Mod
 * @package  Handy-q
 * @author   JJuan <javier@textblock.org>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.textblock.org
 */
    /* Change these to your own credentials*/

    require_once ("../includes/mysql.php");
    $db = new MySQL();

    $result = mysqli_query($mysqli, "SELECT  `fecha` ,  `codigoincidencia`
                            FROM  `incidenciasdeproveedor`
                            WHERE fecha >  '2010-12-31'");
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

    <!-- Don't forget to update these paths -->

    <script src="../libraries/RGraph.common.core.js" ></script>
    <script src="../libraries/RGraph.line.js" ></script>
    <script src="../libraries/RGraph.common.dynamic.js"></script>
    <script src="../libraries/RGraph.common.context.js" ></script>
    <script src="../libraries/RGraph.common.tooltips.js"></script>
    <script src="../libraries/RGraph.common.annotate.js" ></script>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
    <p class="pcenter">
    <canvas id="cvs" width="1000px" height="300px">[No canvas support]</canvas>
    <script>
        line = new RGraph.Line('cvs', <?php print($data_string) ?>);
        line.Set('chart.title', 'Códigos de incidencias de proveedor');
        line.Set('chart.title.yaxis', 'Código');
        line.Set('chart.annotatable', true);
        line.Set('chart.events.click', myFunc3);
        line.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        line.Set('chart.contextmenu', [
                                     ['Show palette', RGraph.Showpalette],
                                     ['Clear', function ()
                                               {
                                                RGraph.Clear(line.canvas);
                                                RGraph.ClearAnnotations(line.canvas);
                                                line.Draw();
                                               }
                                     ]
                                    ]);
        line.Set('chart.background.grid.autofit', true);
        line.Set('chart.colors', ['red','#9fff30','transparent']);
        //line.Set('chart.background.barcolor1', '#f2f2f2');
        //line.Set('chart.background.barcolor2', '#f2f2f2');
       // line.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
    line.Set('chart.background.grid.autofit.numhlines', 10);
        line.Set('chart.colors', ['red']);
    line.Set('chart.shadow', true);
        line.Set('chart.linewidth', 3);
        line.Set('chart.curvy', 1);
        line.Set('chart.curvy.factor', 0.25);
        line.Set('chart.filled', false);
        line.Set('chart.text.angle', 45);
        line.Set('chart.gutter.left', 35);
        line.Set('chart.gutter.right', 5);
        line.Set('chart.gutter.bottom', 100);
        line.Set('chart.hmargin', 10);
        line.Set('chart.tickmarks', 'endcircle');
        line.Set('chart.tooltips', <?php print($labels_string) ?>);
        line.Set('chart.labels', <?php print($labels_string) ?>);
        line.Set('chart.tooltips.effect', 'contract');
           line.Draw();

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