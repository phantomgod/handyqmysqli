<?php
require_once '../includes/mysqli.php';
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

     $result = mysqli_query($mysqli, "SELECT trabajador, SUM( horas ) AS horas
                            FROM cursos
                            WHERE fecha BETWEEN '$from_date' AND  '$to_date'
                            GROUP BY trabajador");


    if ($result) {

        $labels = array();
		$labels2 = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["trabajador"];
			$labels2 [] = $row ["horas"];
            $data[]   = $row["horas"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
		$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }
?>
<html>
<head>
<meta charset="UTF-8">
<script src="../jscripts/windowopen.js"></script>

    <!-- Don't forget to update these paths -->

    <script src="../RGraph4.67/libraries/RGraph.common.core.js" ></script>
    <script src="../RGraph4.67/libraries/RGraph.bar.js"></script>
    <script src="../RGraph4.67/libraries/RGraph.common.dynamic.js"></script>
    <script src="../RGraph4.67/libraries/RGraph.common.context.js" ></script>
    <script src="../RGraph4.67/libraries/RGraph.common.tooltips.js"></script>
    <script src="../RGraph4.67/libraries/RGraph.common.annotate.js" ></script>


 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<style>
    .RGraph_tooltip {
        z-index: 999 !important;
    }
</style>
</head>
<body>

<!--<div id="help" onMouseOver="showdiv(event,'< ?php echo INDICADORES_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<img src="images/help.png" />
</div>-->

		<div align="center">
			<p align="left">
			<a class="tooltip2" href="#"><b>&Omega;</b><span class="custom help"><img src="../images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
		</div>


		<table class="print">
			<tr>
				<td>
				<form action="?seccion=totalhorasformacionportrabajador" method="POST">
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

<br /><br />
Al menos 4 horas anuales de formación interna.
<br /><br />

      <canvas id="cvs" width="1100px" height="650px">[No canvas support]</canvas>
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
							textColor: 'blue',
              textAccessible: false,
							annotatable: true,
							annotateLinewidth: 2,
							strokestyle: 'rgba(0,0,0,0)',
							contextmenu: [['Clear', function () {RGraph.Clear(bar.canvas); RGraph.ClearAnnotations(bar.canvas); bar.Draw();}]],
							textSize: 14,
							noxaxis: true,
							Showpalette: true,
              labels: <?php print($labels_string) ?>,
							tooltips: <?php print($labels2_string) ?>
            }


        }).draw()

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
</html>
