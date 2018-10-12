<?php
/**
* Mod GRÁFICA de las desviaciones de plazo
* en el cierre de las NCs
* solo para las revisiones del sistema de calidad ??
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

    require_once "../includes/mysql.php";
    $db = new MySQL();

    $result = mysqli_query($mysqli, 
        "SELECT numhoja, desviacion
        FROM hojasdemejora
        WHERE fecha >  '2008-01-01'"
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
<html>
<head>

<!-- Don't forget to update these paths -->

<script src="../libraries/RGraph.common.core.js" type="text/javascript"></script>
<script src="../libraries/RGraph.line.js" type="text/javascript"></script>
<script src="../libraries/RGraph.common.dynamic.js"
	type="text/javascript"></script>
<script src="../libraries/RGraph.common.context.js"
	type="text/javascript"></script>
<script src="../libraries/RGraph.common.tooltips.js"
	type="text/javascript"></script>
<script src="../libraries/RGraph.common.annotate.js"
	type="text/javascript"></script>

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
	<p class="pcenter">
		<canvas id="cvs" width="1000px" height="300px">[No canvas support]</canvas>
		<script type="text/javascript">
        chart = new RGraph.Line('cvs', <?php print($data_string) ?>);
        chart.Set('chart.colors', ['red','#9fff30','transparent']);
        chart.Set('chart.title', 'DesviaciÃ³n plazos cierre ncs');
        chart.Set('chart.title.yaxis', 'NÂº de dÃ­as');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc3);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                ['Show palette', RGraph.Showpalette],
                                ['Clear', function () {RGraph.Clear(line.canvas); line.Draw();}]
                               ]);
        chart.Set('chart.background.grid.autofit', true);

        //chart.Set('chart.background.barcolor1', '#f2f2f2');
        //chart.Set('chart.background.barcolor2', '#f2f2f2');
        //chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        chart.Set('chart.background.grid.autofit.numhlines', 10);
        //chart.Set('chart.colors', ['red']);
        chart.Set('chart.shadow', true);
        chart.Set('chart.linewidth', 3);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 55);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.bottom', 100);
        chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 30);
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
	</p>

</body>
</html>