<?php
/**
* Mod GRAFICA de control de avisos
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

require_once '../includes/mysql.php';
$db = new MySQL();

    $result = mysql_query("SELECT mes, percent FROM controlavisos ORDER BY id ASC");
if ($result) {

        $labels = array();
        $data   = array();

    while ($row = mysql_fetch_assoc($result)) {
            $labels[] = $row["mes"];
            $data[]   = $row["percent"];
    }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
} else {
        print('MySQL query failed with error: ' . mysql_error());
}
?>
<html>
<head>

    <!-- Don't forget to update these paths -->

    <script src="../libraries/RGraph.common.core.js" ></script>
    <script src="../libraries/RGraph.line.js" ></script>
    <script src="../libraries/RGraph.common.dynamic.js"></script>
    <script src="../libraries/RGraph.common.context.js" ></script>
    <script src="../libraries/RGraph.common.tooltips.js"></script>
    <script src="../libraries/RGraph.common.annotate.js" ></script>
        <!--[if lt IE 9]><script src="../excanvas/excanvas.js"></script><![endif]-->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>


</head>
<body>
<a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png"><br /><strong>Coded by rgraph.net</strong></a>
<br /><br />

    <canvas id="cvs1" width="900" height="300">[No canvas support]</canvas>



    <script>
        chart = new RGraph.Line('cvs1', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Porcentaje de avisos por mes');
        chart.Set('chart.title.yaxis', 'Nº de avisos');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc3);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                ['Show palette', RGraph.Showpalette],
                                ['Clear', function () {RGraph.Clear(Line.canvas); Line.Draw();}]
                               ]);
        chart.Set('chart.background.grid.autofit', true);

        chart.Set('chart.background.barcolor1', '#f2f2f2');
        chart.Set('chart.background.barcolor2', '#f2f2f2');
        chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        chart.Set('chart.background.grid.autofit.numhlines', 10);
        chart.Set('chart.colors', ['yellow']);
        chart.Set('chart.shadow', true);
        chart.Set('chart.linewidth', 3);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 35);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.bottom', 100);
        chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels_string) ?>);
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


<?php
  $result = mysql_query(
        "SELECT COUNT( codigo_incidencia ) AS count1, codigo_incidencia
         FROM inspecciones
         GROUP BY codigo_incidencia"
    );
    if ($result) {
        $labels = array();
        $data   = array();

        while ($row = mysql_fetch_assoc($result)) {
            $labels[] = $row["codigo_incidencia"];
            $data[]   = $row["count1"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . mysql_error());
    }
?>
<html>
<head>

    <!-- Don't forget to update these paths -->

    <script src="../../libraries/RGraph.common.core.js" ></script>
    <script src="../../libraries/RGraph.line.js" ></script>
    <script src="../../libraries/RGraph.common.dynamic.js"></script>
    <script src="../../libraries/RGraph.common.context.js" ></script>
    <script src="../../libraries/RGraph.common.tooltips.js"></script>
    <script src="../../libraries/RGraph.common.annotate.js" ></script>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>

    <canvas id="cvs2" width="700" height="250">[No canvas support]</canvas>
     <script>
        chart = new RGraph.Line('cvs2', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Incidencias en inspecciones de servicio');
        chart.Set('chart.title.yaxis', 'Nº de incidencias');
        chart.Set('chart.title.xaxis', 'Código de la incidencia');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc3);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                ['Show palette', RGraph.Showpalette],
                                ['Clear', function () {RGraph.Clear(line.canvas); line.Draw();}]
                               ]);
        chart.Set('chart.background.grid.autofit', true);

        chart.Set('chart.background.barcolor1', '#f2f2f2');
        chart.Set('chart.background.barcolor2', '#f2f2f2');
        chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        chart.Set('chart.background.grid.autofit.numhlines', 10);
        chart.Set('chart.colors', ['orange']);
        chart.Set('chart.shadow', true);
        chart.Set('chart.linewidth', 3);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 35);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.bottom', 50);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels_string) ?>);
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

</body>
</html>