<?php
/**
* Mod NO CONFORMIDADES por área
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


  /* requires the class
       require "class.datepicker.php";

       // instantiate the object
       $db=new datepicker();

       // uncomment the next line to have the calendar show up in german
       $db->language = "spanish";

       $db->firstDayOfWeek = 1;

       // set the format in which the date to be returned
       $db->dateFormat = "Y-m-d";*/

	   $_POST['seleccione'] = (isset($_POST['seleccione'])) ? $_POST['seleccione'] : '';
	   $_POST['seleccione2'] = (isset($_POST['seleccione2'])) ? $_POST['seleccione2'] : '';
    @$from_date = $_POST['seleccione'];
    @$to_date = $_POST['seleccione2'];

    $result = mysqli_query($mysqli, "SELECT afectaa, COUNT( * ) AS cantidad
                           FROM hojasdemejora
                           WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                           GROUP BY afectaa");

if ($result) {

        $labels = array();
        $data   = array();

    while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["afectaa"];
            $data[]   = $row["cantidad"];
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

<script>
function enviar_formulario(){
   document.formulario1.submit();
}
</script>

    <!-- Don't forget to update these paths -->

    <script src="libraries/RGraph.common.core.js" ></script>
    <script src="libraries/RGraph.bar.js"></script>
    <script src="libraries/RGraph.common.dynamic.js"></script>
	<script src="libraries/RGraph.common.effects.js"></script>
    <script src="libraries/RGraph.common.context.js" ></script>
    <script src="libraries/RGraph.common.tooltips.js"></script>
    <script src="libraries/RGraph.common.annotate.js" ></script>
    <!--<script src="libraries/RGraph.line.js" ></script>-->

 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
<a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png" /><br /><strong>Coded by rgraph.net</strong></a>

			<!--<div id="help"
				onMouseOver="showdiv(event,'< ?php echo INDICADORES_HELP; ?>');"
				onMouseOut="hiddenDiv()" style='display: table;'>
				<img src="images/help.png" alt="" />
			</div>-->

				<div align="center">
				<p align="left">
				<a class="tooltip2" href="#"><strong>&Omega;</strong><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
				</div>


		<form action="?seccion=ncsporarea" method="POST">
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
					<div class="help-block"></div></div>

				</div>


		</form>


<br /><br />
<span class="yellow">Gráfico solo para consulta. Muchas NC´s en un solo área son un síntoma a investigar.</span>
<br /><br />



    <canvas id="cvs" width="1100" height="300">[No canvas support]</canvas>
    <script>
        bar = new RGraph.Bar('cvs', <?php print($data_string) ?>);
        bar.Set('chart.title', 'No conformidades por área');
        bar.Set('chart.title.yaxis', 'Nº de NC´s');
				bar.Set('chart.title.color', 'white');
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
				bar.Set('chart.backgroundImage', ['../images/Handy_Quality.png']);
        bar.Set('chart.colors', ['DarkSea#9fff30']);
				bar.Set('chart.text.color', 'white');
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

	<p class="pleft">

<?php
        //echo "Gráfica desde la fecha: '$date' en adelante";
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>

</body>
</html>
