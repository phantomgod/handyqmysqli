<?php
    /**
    * Change these to your own credentials*/

    require_once ("../includes/mysql.php");
    $db = new MySQL();

    $result = mysqli_query($mysqli, "SELECT trabajador, SUM( horas ) AS horas
            FROM cursos
            WHERE fecha >  '2008-12-31'
            GROUP BY trabajador");
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
<html>
<head>

<script src="jscripts/windowopen.js"></script>

    <!-- Don't forget to update these paths -->

    <script src="../libraries/RGraph.common.core.js" ></script>
    <script src="../libraries/RGraph.bar.js"></script>
    <script src="../libraries/RGraph.common.dynamic.js"></script>
    <script src="../libraries/RGraph.common.context.js" ></script>
    <script src="../libraries/RGraph.common.tooltips.js"></script>
    <script src="../libraries/RGraph.common.annotate.js" ></script>

 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
    <p class="pcenter">
    <canvas id="cvs" width="1000px" height="350px">[No canvas support]</canvas>
    <script>
        bar = new RGraph.Bar('cvs', <?php print($data_string) ?>);
        bar.Set('chart.title', 'Total de horas de formación por trabajador');
        bar.Set('chart.colors', ['PowderBlue','#9fff30','transparent']);
        bar.Set('chart.annotatable', true);
        bar.Set('chart.events.click', myFunc3);
        bar.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        bar.Set('chart.contextmenu', [
                                     ['Show palette', RGraph.Showpalette],
                                     ['Clear', function ()
                                               {
                                                RGraph.Clear(bar.canvas);
                                                RGraph.ClearAnnotations(bar.canvas);
                                                bar.Draw();
                                               }
                                     ]
                                    ]);
        bar.Set('chart.background.grid.autofit', true);
        bar.Set('chart.gutter.left', 35);
        bar.Set('chart.gutter.right', 5);
        bar.Set('chart.gutter.bottom', 150);
        bar.Set('chart.text.angle', 45);
        bar.Set('chart.hmargin', 10);
        bar.Set('chart.tickmarks', 'endcircle');
        bar.Set('chart.tooltips', <?php print($labels_string) ?>);
        bar.Set('chart.labels', <?php print($labels_string) ?>);
        bar.Draw();

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

    <!--<input type="button" value="Actualizar valores" onclick="Abrir_ventana('../mod/dbscript.php');">
    <a href="mod/dbscript.php" target="blank">actualizar</a>-->


</body>
</html>