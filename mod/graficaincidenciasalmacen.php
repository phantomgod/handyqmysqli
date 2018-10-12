<?php
/**
* Mod INCIDENCIAS de ALMACÉN
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

	 $from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';
	 $to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

$result = mysqli_query($mysqli,  "SELECT COUNT( obsalmac ) AS incidencias, fecha
         FROM aisgc
         WHERE fecha BETWEEN '$from_date' AND  '$to_date'
         AND  obsalmac >  ''
         GROUP BY fecha
         ORDER BY fecha ASC" );

if ($result) {
	$labels = array ();
	$data = array ();

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels [] = $row ["fecha"];
		$data [] = $row ["incidencias"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
}

?>

<!-- Don't forget to update these paths -->

<script src="libraries/RGraph.common.core.js" type="text/javascript"></script>
<script src="libraries/RGraph.bar.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.dynamic.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.context.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.tooltips.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.annotate.js" type="text/javascript"></script>

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>


	<table class="print">
		<tr>
			<td>
				<form action="?seccion=graficaincidenciasalmacen" method="POST">
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
						</div>&emsp;&emsp;&emsp;
					&nbsp;&nbsp;<button type="submit" class="btn btn-info" style="margin-bottom:9px;" value="<?php echo CALCULAR; ?>">Calcular</button>
					<div class="help-block"></div>
					</div>
				</div>
				</form>
			</td>

		</tr>
	</table>

	<!--<div id="help"
		onMouseOver="showdiv(event,'<?php echo INDICADORES_HELP; ?>');"
		onMouseOut="hiddenDiv()" style='display: table;'>
		<img src="images/help.png" alt="" />
	</div>-->

	<div align="center">
		<p align="left">
		<a class="tooltip2" href="#"><i class="fa fa-commenting-o fa-2x" ></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
    </div>

	<br />
	<br /> No más de tres incidencias leves cada vez que se audite.
	<br />
	<br />

	<!--************************************************************ GRÁFICO POR CÓDIGOS********************* -->
	<canvas id="cvs" width="1100px" height="450px">[No canvas support]</canvas>
	<script type="text/javascript">
        bar = new RGraph.Bar('cvs', <?php print($data_string) ?>);
        bar.Set('chart.title', 'Incidencias en inspecciones de almacén');
        bar.Set('chart.colors', ['red','#9fff30','transparent']);
        bar.Set('chart.title.yaxis', 'Nº de incidencias');
        bar.Set('chart.title.xaxis', 'Fecha de la inspección');
				bar.Set('chart.title.color', 'white');
        bar.Set('chart.annotatable', true);
        bar.Set('chart.events.click', myFunc3);
        bar.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        bar.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function (){
                                            RGraph.Clear(bar.canvas);
                                            RGraph.ClearAnnotations(bar.canvas);
                                            bar.Draw();
                                           }
                                 ]
                                ]);
        bar.Set('chart.background.grid.autofit', true);
        bar.Set('chart.background.grid.autofit.numhlines', 10);
        bar.Set('chart.colors', ['gainsboro']);
        bar.Set('chart.shadow', true);
        bar.Set('chart.gutter.left', 50);
        bar.Set('chart.gutter.right', 5);
        bar.Set('chart.gutter.bottom', 100);
        bar.Set('chart.text.angle', 45);
				bar.Set('chart.text.color', 'white');
        bar.Set('chart.hmargin', 10);
        bar.Set('chart.tickmarks', 'endcircle');
        bar.Set('chart.tooltips', <?php print($labels_string) ?>);
        bar.Set('chart.labels', <?php print($labels_string) ?>);
        bar.Set('chart.tooltips.effect', 'contract');
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
;
    </script>

	<?php
// echo "Gráfica desde la fecha: '$date' en adelante";
echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";
?>
