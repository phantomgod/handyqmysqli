<?php
/**
* Mod GRÁFICA de horas de formación
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

require '../../lang/spanish.lang.php';
require_once '../../includes/mysqli.php';
header('Content-Type: text/html;charset=UTF-8');


/*--------------------------------------SELECTOR------------------------
  // requires the class
       require "class.datepicker.php";

       // instantiate the object
       $db=new datepicker();

       // uncomment the next line to have the calendar show up in german
       $db->language = "spanish";

       $db->firstDayOfWeek = 1;

       // set the format in which the date to be returned
       $db->dateFormat = "Y-m-d";
/*--------------------------------------FIN SELECTOR------------------------*/


    /**
    * Change these to your own credentials */


	 $from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';	
	 $to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

      // Make the query
    $result = $mysqli->query("SELECT trabajador, SUM( horas ) AS horas
                            FROM cursos
                            WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                            GROUP BY trabajador");

    if ($result) {
        
        $labels = array();
		$labels2 = array();
        $data   = array();
    
        $result->data_seek(0);
        while ($row = $result->fetch_assoc()) {
            $labels[] = $row["trabajador"];
			$labels2 [] = $row ["horas"];
            $data[]   = $row["horas"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
		$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
    } else {
        print('MySQL query failed with error: ' . $mysqli->error);
    }
?>



<html>
<head>

<link type="text/css" rel="stylesheet" href="../../templates/style.css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="../../templates/bootstrap-datetimepicker.min.css">

<script src="../../jscripts/windowopen.js"></script>

    <!-- Don't forget to update these paths -->

    <script src="../libraries/RGraph.common.core.js" ></script>
    <script src="../libraries/RGraph.bar.js"></script>
    <script src="../libraries/RGraph.common.dynamic.js"></script>
    <script src="../libraries/RGraph.common.context.js" ></script>
    <script src="../libraries/RGraph.common.tooltips.js"></script>
    <script src="../libraries/RGraph.common.annotate.js" ></script>

<style>
    .RGraph_tooltip {
        z-index: 999 !important;
    }

	body {
	background:transparent;

}

</style>
</head>
<body>
		
		<div align="center">
			<p align="left">
			<a class="tooltip2" href="#"><b>&Omega;</b><span class="custom help"><img src="../../images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
		</div>

		<table class="print">
			<tr>
				<td>
				<form action="?seccion=totalhorasformacionportrabajador" method="POST">
					<div class="control-group">	
						<div class="controls">
							<div id="datetimepicker" class="input-append date">
							  <input type="text" class="form-control" name="seleccione" placeholder="<?php echo DESDE; ?>" style="height:30px;">
							  <span class="add-on">
								<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
							  </span>
							</div>
							<div id="datetimepicker2" class="input-append date">
							  <input type="text" class="form-control" name="seleccione2" placeholder="<?php echo HASTA; ?>" style="height:30px;">
							  <span class="add-on">
								<i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
							  </span>
							</div>
						&nbsp;&nbsp;<button type="submit" class="btn btn-info" style="margin-bottom:9px;" value="<?php echo CALCULAR; ?>">Calcular</button>	
						<div class="help-block"></div>
						</div>					
					</div>
				</form>
				</td>

			</tr>
		</table>

<br /><br />
Al menos 4 horas anuales de formación interna.
<br /><br />

    <!--<canvas id="cvs" width="1100px" height="450px">[No canvas support]</canvas>
    <script>
        bar = new RGraph.Bar('cvs', < ?php print($data_string) ?>);
        bar.Set('chart.title', 'Total de horas de formación por trabajador');
        bar.Set('chart.colors', ['chartreuse']);
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
        bar.Set('chart.gutter.left', 35);
        bar.Set('chart.gutter.right', 5);
        bar.Set('chart.gutter.bottom', 150);
        bar.Set('chart.text.angle', 45);
        bar.Set('chart.hmargin', 10);
        bar.Set('chart.tickmarks', 'endcircle');
        bar.Set('chart.tooltips', < ?php print($labels2_string) ?>);
        bar.Set('chart.labels', < ?php print($labels_string) ?>);
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

    </script>-->

	  <canvas id="cvs" width="900px" height="350px">[No canvas support]</canvas>
		<script>
			chart = new RGraph.Bar({
				id: 'cvs',
				data: <?php print($data_string) ?>,
				options: {
					eventsClick: myFunc3,
					hmargin: 0,
					tickmarks: 'endcircle',
						gutterLeft: 100,
						gutterTop: 5,
						gutterBottom: 150,
						gutterRight: 5,
						textAngle: 45,
						textAccessible: false,
						annotatable: true,
						Showpalette: true,
					labels: <?php print($labels_string) ?>,
					tooltips: <?php print($labels2_string) ?>
				}
				
			
			}).draw()
			
			chart.set({
				contextmenu: [
							['Show palette', RGraph.showpalette],
							['Clear', function () {RGraph.clear(chart.canvas); chart.draw();}]
						]
					});
				RGraph.clearAnnotations(chart.canvas); // Clear the annotation data
				RGraph.clear(chart.canvas);             // Clear the chart
				RGraph.redrawCanvas(chart.canvas);          // Redraw it
			
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
	
	
	
    <input type="button" class="btn btn-success" value="Actualizar valores" onclick="Abrir_ventana('mod/dbscript.php');">
    <!--<a href="mod/dbscript.php" target="blank">actualizar</a>-->

    <?php
        //echo "Gráfica desde la fecha: '$date' en adelante";
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";
?>


</body>

<script type="text/javascript" src="../../jscripts/jquery.js"></script>
<script type="text/javascript" src="../../jscripts/bootstrap.js"></script>
<script type="text/javascript" src="../../jscripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../../jscripts/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript">
					  $('#datetimepicker').datetimepicker({
						format: 'yyyy-MM-dd hh:mm:ss',
						language: 'es'
					  });
		</script>
					
		<script type="text/javascript">
					  $('#datetimepicker2').datetimepicker({
						format: 'yyyy-MM-dd hh:mm:ss',
						language: 'es'
					  });
		</script>

</html>