<?php

/**
* Mod GRAFICA de incidencias de inspección
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

/* --------------------------------------SELECTOR------------------------ */
/* requires the class
require "class.datepicker.php";

// instantiate the object
$db = new datepicker ();

// uncomment the next line to have the calendar show up in german
$db->language = "spanish";

$db->firstDayOfWeek = 1;

// set the format in which the date to be returned
$db->dateFormat = "Y-m-d";
/* --------------------------------------FIN SELECTOR------------------------ */

/**
 * Change these to your own credentials
 */

    /*if (isset($_POST['seleccione'])) {
     $date = $_POST['seleccione'];
    }


    @$date = $_POST['seleccione'];

    $result = mysql_query(
        "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia
             FROM inspecciones
             WHERE fecha > '$date'
             GROUP BY codigo_incidencia"
    ); */

	 $from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';
	 $to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

$result = mysqli_query($mysqli,  "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia
             FROM inspecciones
             WHERE fecha BETWEEN '$from_date' AND  '$to_date'
             GROUP BY codigo_incidencia" );

if ($result) {
	$labels = array ();
	$data = array ();

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels [] = $row ["codigo_incidencia"];
		$data [] = $row ["numincidencias"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
} else {

	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
}

?>
<html>
<head>

<!-- Don't forget to update these paths -->

<script src="libraries/RGraph.common.core.js"></script>
<script src="libraries/RGraph.bar.js"></script>
<script src="libraries/RGraph.common.dynamic.js"></script>
<script src="libraries/RGraph.common.context.js"></script>
<script src="libraries/RGraph.common.tooltips.js"></script>
<script src="libraries/RGraph.common.annotate.js"></script>

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>




			<form action="?seccion=graficaincidenciasinspecciones" method="POST">
				<div class="control-group">
					<div class="controls">
						<div id="datetimepicker" class="input-append date">
						  <input type="text" class="form-control" name="seleccione" placeholder="<?php echo DESDE; ?>">
						  <span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
						  </span>
						</div>>&emsp;&emsp;&emsp;
						<div id="datetimepicker2" class="input-append date">
						  <input type="text" class="form-control" name="seleccione2" placeholder="<?php echo HASTA; ?>">
						  <span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
						  </span>
						</div>>&emsp;&emsp;&emsp;<button type="submit" class="btn btn-info" style="margin-bottom:9px;" value="<?php echo CALCULAR; ?>">Calcular</button>
					<div class="help-block"></div>
					</div>
				</div>
			</form>

			<!--<div id="help"
			onMouseOver="showdiv(event,'< ?php echo INDICADORES_HELP; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>
			<img src="images/help.png" />
		</div>-->

		<div align="center">
			<p align="left">
			<a class="tooltip2" href="#"><b><i class="fa fa-commenting-o fa-2x" ></i></b><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
		</div>
        <br />

        <br />
        <?php

								$sql = mysqli_query($mysqli,  "SELECT * FROM codigosincidenciasinspecciones ORDER BY id ASC" );
								while ( $row = mysqli_fetch_row( $sql ) ) {
									echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
									echo "<th>";
									echo GRAVEDAD;
									echo "</th><th>";
									echo CODIGO;
									echo "</th><th>";
									echo TIPO;
									echo "</th></tr>";
									echo "<tr><td>";
									echo "$row[1]";
									echo "</td><td>";
									echo "$row[2]";
									echo "</td><td colspan=2>";
									echo "$row[3]";
									echo "</td></tr>";
									echo "</tr></table>'>";
									echo "$row[2]</a>, &nbsp;&nbsp;";
								}

								?>
        <br />


	<br /> No más de una incidencia leve por inspección es aceptable.
	<br />
	<br />


	<canvas id="cvs" width="1100" height="450">[No canvas support]</canvas>
	<script>
        bar = new RGraph.Bar('cvs', <?php print($data_string) ?>);
        bar.Set('chart.title', 'Tipos de incidencia en inspecciones de servicio');
        bar.Set('chart.colors', ['pink']);
        bar.Set('chart.annotatable', true);
        bar.Set('chart.title.yaxis', 'Nº incid');
				bar.Set('chart.title.color', 'white');
        bar.Set('chart.title.xaxis', 'Tipo de incidencia');
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
        bar.Set('chart.text.angle', -45);
				bar.Set('chart.text.color', 'white');
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

	<p class="pleft">
<?php
// echo "Gráfica desde la fecha: '$date' en adelante";
echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>



</body>
</html>
