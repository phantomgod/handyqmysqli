<?php

/**
* Mod INCIDENCIAS de PROVEEDOR
*
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

/*
 * --------------------------------------SELECTOR------------------------ // requires the class require "class.datepicker.php"; // instantiate the object $db = new datepicker (); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d"; /* --------------------------------------FIN SELECTOR------------------------
 */

/**
 * ************************************************************ GRÁFICO POR CÓDIGOS********************
 */

/**
 * Change these to your own credentials
 */


	 $from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';
	 $to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

$result = mysqli_query($mysqli,  "SELECT COUNT( proveedor ) AS numincidencias, proveedor
								   FROM incidenciasdeproveedor
								   WHERE incidencia >  ''
								   AND fecha BETWEEN '$from_date' AND  '$to_date'
								   GROUP BY proveedor" );

if ($result) {
	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels [] = $row ["proveedor"];
		$labels2 [] = $row ["numincidencias"];
		$data [] = $row ["numincidencias"];

	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
}
?>

<head>

<!-- Don't forget to update these paths -->

<script src="libraries/RGraph.common.core.js" type="text/javascript"></script>
<script src="libraries/RGraph.bar.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.dynamic.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.context.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.tooltips.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.annotate.js" type="text/javascript"></script>

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
			<form action="?seccion=graficaincidenciasdeproveedor" method="POST">
				<div class="control-group">
					<div class="controls">
						<div id="datetimepicker" class="input-append date">
						  <input type="text" class="form-control" name="seleccione" placeholder="<?php echo DESDE; ?>">
						  <span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
						  </span>
						</div>&emsp;&emsp;&emsp;
						<div id="datetimepicker2" class="input-append date">
						  <input type="text" class="form-control" name="seleccione2" placeholder="<?php echo HASTA; ?>">
						  <span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
						  </span>
						</div>&emsp;&emsp;&emsp;<button type="submit" class="btn btn-info" style="margin-bottom:9px;" value="<?php echo CALCULAR; ?>">Calcular</button>
					<div class="help-block"></div>
					</div>
				</div>
			</form>

	<div align="center">
		<p align="left">
		<a class="tooltip2" href="#"><b>&Omega;</b><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
    </div>

	<br />
	<br /> A los proveedores se les acepta hasta un 2,5% de incidencias en calidad, sobre lo suministrado.
	<br /> En este gráfico se cuaentan las incidencias de todo tipo. Hay que filtrar las que son de calidad.
	<br />
	<br />
	<br />

	<canvas id="cvs1" width="1000px" height="300px">[No canvas support]</canvas>
	<script type="text/javascript">
        bar1 = new RGraph.Bar('cvs1', <?php print($data_string) ?>);
        bar1.Set('chart.title', 'Número de incidencias por proveedor');
        bar1.Set('chart.title.yaxis', 'Código');
				bar1.Set('chart.title.color', 'white');
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
        bar1.Set('chart.colors', ['red']);
        bar1.Set('chart.background.grid.autofit.numhlines', 10);
        bar1.Set('chart.shadow', true);
        bar1.Set('chart.text.angle', 45);
				bar1.Set('chart.text.color', 'white');
        bar1.Set('chart.gutter.left', 100);
        bar1.Set('chart.gutter.right', 5);
        bar1.Set('chart.gutter.bottom', 100);
        bar1.Set('chart.hmargin', 10);
        bar1.Set('chart.tickmarks', 'endcircle');
        bar1.Set('chart.tooltips', <?php print($labels2_string) ?>);
        bar1.Set('chart.labels', <?php print($labels_string) ?>);
        bar1.Set('chart.tooltips.effect', 'contract');
		bar1.Set('chart.background.hbars', [
                                          [0,2,'rgba(255,104,56,0.5)'],
                                          [2,null,'rgba(60, 238, 33, 0.5)'],
                                          [null,5,'rgba(255,0,0,0.2)']
                                         ]);
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
	// echo "Gráfica desde la fecha: '$date' en adelante";
	echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

	?>

	<!--******************************* FIN DEL GRÁFICO POR CÓDIGOS ********************* -->
	<br />
	<br />
	<br />

	<!--**************** GRÁFICO NÚMERO DE INCIDENCIAS POR PROVEEDOR ********************* -->
	<?php
	/**
	 * Change these to your own credentials
	 */

	/*
	 * @$date = $_POST['seleccione']; $result = mysql_query("SELECT COUNT( proveedor ) AS numincidencias, proveedor FROM incidenciasdeproveedor WHERE incidencia > '' AND fecha > '$date' GROUP BY proveedor" );
	 */

	 $from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';
	 $to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

	$result = mysqli_query($mysqli,  "SELECT COUNT( proveedor ) AS numincidencias, proveedor
                       FROM incidenciasdeproveedor
                       WHERE incidencia >  ''
                       AND fecha BETWEEN '$from_date' AND  '$to_date'
                       GROUP BY proveedor" );

	if ($result) {
		$labels = array ();
		$data = array ();

		while ( $row = mysqli_fetch_assoc( $result ) ) {
			$labels [] = $row ["proveedor"];
			$data [] = $row ["numincidencias"];
		}

		// Now you can aggregate all the data into one string
		$data_string = "[" . join ( ", ", $data ) . "]";
		$labels_string = "['" . join ( "', '", $labels ) . "']";
	} else {
		print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
	}
	?>

	<canvas id="cvs2" width="1000px" height="300px">[No canvas support]</canvas>
	<script type="text/javascript">
        bar2 = new RGraph.Bar('cvs2', <?php print($data_string) ?>);
        bar2.Set('chart.title', 'Número de incidencias por proveedor');
        bar2.Set('chart.title.yaxis', 'Número de incidencias');
				bar2.Set('chart.title.color', 'white');
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
        bar2.Set('chart.colors', ['red']);
        bar2.Set('chart.background.grid.autofit.numhlines', 10);
        bar2.Set('chart.shadow', true);
        bar2.Set('chart.text.angle', 45);
				bar2.Set('chart.text.color', 'white');
        bar2.Set('chart.gutter.left', 35);
        bar2.Set('chart.gutter.right', 5);
        bar2.Set('chart.gutter.bottom', 100);
        bar2.Set('chart.hmargin', 10);
        bar2.Set('chart.tickmarks', 'endcircle');
        bar2.Set('chart.tooltips', <?php print($labels_string) ?>);
        bar2.Set('chart.labels', <?php print($labels_string) ?>);
        bar2.Set('chart.tooltips.effect', 'contract');
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

	<!--***************************************** FIN GRÁFICO NÚMERO DE INCIDENCIAS POR PROVEEDOR********************* -->

	<?php
	// echo "Gráfica desde la fecha: '$date' en adelante";
	echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

	?>

</body>
<html></html>
