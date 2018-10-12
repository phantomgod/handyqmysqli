<?php
//*require('conexion.php');
require_once "../../includes/mysql.php";
$db = new MySQL();
//capturar el nº de la NC
@$nom=$_POST['fecha'];
//seleccionamos los datos del cliente por su nombre
 $result = mysql_query("SELECT afectaa, COUNT( * ) AS cantidad
                           FROM hojasdemejora
                           WHERE fecha >  '$nom'
                           GROUP BY afectaa");
if ($result) {

        $labels = array();
        $data   = array();

    while ($row = mysql_fetch_assoc($result)) {
            $labels[] = $row["afectaa"];
            $data[]   = $row["cantidad"];
    }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
} else {
        print('MySQL query failed with error: ' . mysql_error());
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Don't forget to update these paths -->
    <script src="../libraries/RGraph.common.core.js" ></script>
    <script src="../libraries/RGraph.bar.js"></script>
    <script src="../libraries/RGraph.common.dynamic.js"></script>
    <script src="../libraries/RGraph.common.context.js" ></script>
    <script src="../libraries/RGraph.common.tooltips.js"></script>
    <script src="../libraries/RGraph.common.annotate.js" ></script>
    <!--<script src="../../libraries/RGraph.line.js" ></script>-->

 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
<a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png" /><br /><strong>Coded by rgraph.net</strong></a>
<br /><br />
Gráfico solo para consulta. Muchas NC´s en un solo área son un síntoma a investigar.
<br /><br />



    <canvas id="cvs" width="1100" height="300">[No canvas support]</canvas>
    <script>
        bar = new RGraph.Bar('cvs', <?php print($data_string) ?>);
        bar.Set('chart.title', 'No conformidades por área');
        bar.Set('chart.title.yaxis', 'Nº de NC´s');
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
        bar.Set('chart.colors', ['DarkSea#9fff30']);
        bar.Set('chart.gutter.left', 45);
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

<?php
        echo "Gráfica desde la fecha: '$nom' en adelante";
?>
</body>
</html>