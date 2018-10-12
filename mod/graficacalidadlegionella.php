<?php
/**
* Mod GRAFICA de control de positivos
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
$result = mysqli_query($mysqli,  "SELECT * FROM controllegionella" );
if ($result) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels [] = $row ["mes"];
		$labels2 [] = $row ["percent"];
		$data [] = $row ["percent"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
}
?>
<html>
<head>

<!-- Don't forget to update these paths -->

<script src="libraries/RGraph.common.core.js" type="text/javascript"></script>
<script src="libraries/RGraph.line.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.dynamic.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.context.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.tooltips.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.annotate.js" type="text/javascript"></script>

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>

	<a href="http://www.rgraph.net/"><img
		src="http://www.rgraph.net/images/logo.png" alt=""><br /> <strong>Coded
			by rgraph.net</strong></a>

	<br />
	<br /> Más de un 10% debe ser investigado.
	<br />
	<br />

	<canvas id="cvs" width="1100" height="300">[No canvas support]</canvas>
	<script type="text/javascript">
        line = new RGraph.Line('cvs', <?php print($data_string) ?>);
        line.Set('chart.title', 'Porcentaje de positivos por mes');
        line.Set('chart.title.yaxis', 'Nº de positivos');
				line.Set('chart.title.color', 'white');
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

        line.Set('chart.background.grid.autofit.numhlines', 10);
        //line.Set('chart.colors', ['orange']);
        line.Set('chart.shadow', true);
        line.Set('chart.linewidth', 3);
        line.Set('chart.curvy', 1);
        line.Set('chart.curvy.factor', 0.25);
        line.Set('chart.filled', false);
        line.Set('chart.gutter.left', 35);
        line.Set('chart.gutter.right', 5);
        line.Set('chart.gutter.bottom', 100);
        line.Set('chart.text.angle', 45);
				line.Set('chart.text.color', 'white');
        line.Set('chart.hmargin', 10);
        line.Set('chart.tickmarks', 'endcircle');
        line.Set('chart.tooltips', <?php print($labels2_string) ?>);
        line.Set('chart.labels', <?php print($labels_string) ?>);
        line.Set('chart.tooltips.effect', 'contract');
		line.Set('chart.background.hbars', [
                                          [0,5,'rgba(60,238,33,0.5)'],
                                          [5,null,'rgba(255,0,0,0.5)'],
                                          [null,10,'rgba(255,0,0,0.5)']
                                         ]);
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
<!--**********************************************************     POR NÚMERO DE positivos     ************************************-->

<?php
$result2 = mysqli_query($mysqli,  "SELECT * FROM controllegionella" );
if ($result2) {

	$labels2 = array ();
	$labels3 = array ();
	$data2 = array ();

	while ( $row2 = mysqli_fetch_assoc( $result2 ) ) {
		$labels2 [] = $row2 ["mes"];
		$labels3 [] = $row2 ["positivos"];
		$data2 [] = $row2 ["positivos"];
	}

	// Now you can aggregate all the data into one string
	$data2_string = "[" . join ( ", ", $data2 ) . "]";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	$labels3_string = "['" . join ( "', '", $labels3 ) . "']";
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
}
?>

	<canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas>
	<script type="text/javascript">
        line2 = new RGraph.Line('cvs2', <?php print($data2_string) ?>);
        line2.Set('chart.title', 'Número de positivos totales');
        line2.Set('chart.title.color', 'white');
        line2.Set('chart.annotatable', true);
        line2.Set('chart.events.click', myFunc3);
        line2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});


        line2.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line.canvas);
                                            RGraph.ClearAnnotations(line.canvas);
                                            line.Draw();
                                           }
                                 ]
                                ]);
        line2.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        line2.Set('chart.background.grid.autofit.numhlines', 10);
        line2.Set('chart.colors', ['blue']);
        line2.Set('chart.shadow', true);
        line2.Set('chart.linewidth', 3);
        line2.Set('chart.curvy', 1);
        line2.Set('chart.curvy.factor', 0.25);
        line2.Set('chart.filled', false);
        line2.Set('chart.gutter.left', 35);
        line2.Set('chart.gutter.right', 5);
        line2.Set('chart.gutter.bottom', 100);
        line2.Set('chart.text.angle', 45);
				line2.Set('chart.text.color', 'white');
        line2.Set('chart.hmargin', 10);
        line2.Set('chart.tickmarks', 'endcircle');
        line2.Set('chart.tooltips', <?php print($labels3_string) ?>);
        line2.Set('chart.labels', <?php print($labels2_string) ?>);
        line2.Set('chart.tooltips.effect', 'contract');
		line2.Set('chart.background.hbars', [
                                          [0,5,'rgba(0,255,0,0.2)'],
                                          [5,null,'rgba(255,255,0,0.2)'],
                                          [null,10,'rgba(255,0,0,0.2)']
                                         ]);
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



<!--***************************************     FIN DE POR NÚMERO DE positivos     ************************************-->
	<!--<div style="height: 400px;">

			<img style="user-select: none; cursor: zoom-in;" src="../pChart2.1.4/examples/barchartPHPCHART3.php">

	</div>-->

</body>
</html>
