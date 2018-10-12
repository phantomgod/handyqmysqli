<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="mod/aisgclistadesplegable/style.css" media="screen" />
</head>
<body>
<?php
    /**
    * Change these to your own credentials*/

    require_once ("includes/mysqli.php");

    $result = mysqli_query($mysqli, "SELECT fecha, global FROM globalclientes");
    if ($result) {

        $labels = array();
		$labels2 = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["fecha"];
			$labels2[] = $row["global"];
            $data[]   = $row["global"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
		$labels2_string = "['" . join("', '", $labels2) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }
?>

    <!-- Don't forget to update these paths -->

    <script src="libraries/RGraph.common.core.js" ></script>
    <script src="libraries/RGraph.line.js" ></script>
    <script src="libraries/RGraph.common.dynamic.js"></script>
    <script src="libraries/RGraph.common.context.js" ></script>
    <script src="libraries/RGraph.common.tooltips.js"></script>
    <script src="libraries/RGraph.common.annotate.js" ></script>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>


</head>
<body>

    <canvas id="cvs" width="1100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Valoración global clientes');
        chart.Set('chart.title.yaxis', 'Valor');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc3);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
                                            chart.Draw();
                                           }
                                 ]
                                ]);
        chart.Set('chart.background.grid.autofit', true);

        /*chart.Set('chart.background.barcolor1', '#f2f2f2');
        chart.Set('chart.background.barcolor2', '#f2f2f2');
        chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
    chart.Set('chart.background.grid.autofit.numhlines', 10);
        chart.Set('chart.colors', ['yellow']);
    chart.Set('chart.shadow', true);
        chart.Set('chart.linewidth', 3);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 35);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
    chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
           chart.Draw();

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
<a href="../phpMyEdit-5.7.1/globalclientes.php">Editar</a>

</body>
</html>