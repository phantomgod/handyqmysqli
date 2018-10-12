<?php
/**
* Mod GRÁFICA de las desviaciones de plazo
* en el cierre de las NCs
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



/*if (isset($_POST['seleccione'])) {
     $date = $_POST['seleccione'];
}


@$date = $_POST['seleccione'];

  $result = mysql_query(
        "SELECT *
        FROM hojasdemejora
        WHERE fecha >  '$date'"
    ); */


	 $from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';
	 $to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

$result = mysqli_query($mysqli,  "SELECT * FROM hojasdemejora
            WHERE fecha BETWEEN '$from_date' AND  '$to_date'" );

if ($result) {

	$labels = array ();
	$data = array ();

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels [] = $row ["numhoja"];
		$data [] = $row ["desviacion"];
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
<script src="libraries/RGraph.line.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.dynamic.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.context.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.tooltips.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.annotate.js" type="text/javascript"></script>

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>

<head></head>
<body>

	<a href="http://www.rgraph.net/"><img
		src="http://www.rgraph.net/images/logo.png" alt="" /><br /> <strong>Coded
			by rgraph.net</strong></a>
	<br />
	<br />
	<br />
	<table>
		<tr>
			<td>
				<form action="?seccion=desviacioncierresncs" method="POST">
					<div class="control-group">
					<div class="controls">
						<div id="datetimepicker" class="input-append date">
						  <input type="text" class="form-control" name="seleccione" placeholder="<?php echo FECHA; ?>">
						  <span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
						  </span>
						</div>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div id="datetimepicker2" class="input-append date">
						  <input type="text" class="form-control" name="seleccione2" placeholder="<?php echo FECHA; ?>">
						  <span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
						  </span>
						</div>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;<button type="submit" class="btn btn-info" style="margin-bottom:9px;" value="<?php echo CALCULAR; ?>">Calcular</button>
					<div class="help-block"></div>
					</div>

					</div>
				</form>
			</td>
		</tr>
	</table>

	<!--<div id="help"
		onMouseOver="showdiv(event,'< ?php echo INDICADORES_HELP; ?>');"
		onMouseOut="hiddenDiv()" style='display: table;'>
		<img src="images/help.png" alt="" />
	</div>-->


	<div align="center">
    <p align="left">
    <a class="tooltip2" href="#"><?php echo AYUDA; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
    </div>

	<br />
	<br /> Objetivo: 0
	<br />
	<br />



	<canvas id="cvs" width="1100" height="250">[No canvas support]</canvas>
	<script type="text/javascript">
        line = new RGraph.Line('cvs', <?php print($data_string) ?>);
        line.Set('chart.title', 'Desviación plazos cierre ncs');
        line.Set('chart.title.yaxis', 'Nº de días');
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
        line.Set('chart.background.grid.autofit', true);
        line.Set('chart.background.grid.autofit.numhlines', 10);
        line.Set('chart.colors', ['yellow']);
				line.Set('chart.text.color', 'white');
        line.Set('chart.shadow', true);
        line.Set('chart.linewidth', 3);
        line.Set('chart.curvy', 1);
        line.Set('chart.curvy.factor', 0.25);
        line.Set('chart.filled', false);
        line.Set('chart.gutter.left', 35);
        line.Set('chart.gutter.right', 5);
        line.Set('chart.gutter.bottom', 100);
        line.Set('chart.hmargin', 10);
        line.Set('chart.text.angle', 45);
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

	<?php
	echo "<p class='pleft'>";
	echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";
	echo "</p>";
	?>

</body>
<html></html>
