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

require_once '../includes/mysqli.php';
include '../lang/spanish.lang.php';
/*
 * requires the class require "../class.datepicker.php"; // instantiate the object $db=new datepicker(); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
 */

@$date = $_POST ['seleccione'];
$result = mysqli_query($mysqli,  "SELECT afectaa, COUNT( * ) AS cantidad
                           FROM hojasdemejora
                           WHERE fecha >  '$date'
                           GROUP BY afectaa" );
if ($result) {

	$labels = array ();
	$data = array ();

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels [] = $row ["afectaa"];
		$data [] = $row ["cantidad"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<link type="text/css" rel="stylesheet"
	href="../templates/printstyle.css" media="print" />

<script type="text/javascript" src="../jscripts/styleswitcher.js"></script>
<script type="text/javascript" src="../jscripts/indexcapaemergente.js"></script>
<script type="text/javascript" src="../jscripts/print.js"></script>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="../jscripts/sorttable.js"></script>
<script type="text/javascript" src="../jscripts/checkbox3.js"></script>
<script type="text/javascript" src="../jscripts/queriesttip.js"></script>
<script type="text/javascript" src="../jscripts/windowopen.js"></script>
<!--<script type="text/javascript" src="../jscripts/even.js"></script>-->
<script src="../jscripts/windowopenajaxupload.js" type="text/javascript"></script>
<!-- Datepicker chrishulbert-datepicker-8a22db6 [http://splinter.com.au/blog/?p=278](http://splinter.com.au/blog/?p=278) -->
<link rel="stylesheet" type="text/css" href="../templates/datepicker.css" />
<script type="text/javascript" src="../jscripts/datepicker.js"></script>

<script type="text/javascript">
function enviar_formulario(){
   document.formulario1.submit();
}
</script>

<!-- Don't forget to update these paths -->

<script src="../libraries/RGraph.common.core.js" type="text/javascript"></script>
<script src="../libraries/RGraph.bar.js" type="text/javascript"></script>
<script src="../libraries/RGraph.common.dynamic.js"
	type="text/javascript"></script>
<script src="../libraries/RGraph.common.context.js"
	type="text/javascript"></script>
<script src="../libraries/RGraph.common.tooltips.js"
	type="text/javascript"></script>
<script src="../libraries/RGraph.common.annotate.js"
	type="text/javascript"></script>
<!--<script src="../libraries/RGraph.line.js" ></script>-->

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>
	
<style type="text/css">
body {
font-family: Tahoma, Helvetica, Arial, sans-serif;
color: #8A8989;
margin: 0px;
padding: 20px 20px 20px 20px;
line-height: 1.6;
}

table {
	font: 0.8em Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	background: transparent;
	color: #000;
	width: 100%;
}
th {
	font-weight: 900;
	color: #2e6c9e;
	font-size: 1.05em;
	text-transform: none;
}
tr th, tr td {border-bottom:1px solid #ccc;}
table a,table a:link {
	text-decoration: none;
	color: #2E8CEF;
}

table a:visited {
	color: #a721b6;
}

table a:hover {
	color: #f00;
}

tbody tr th {
	vertical-align: top;
	padding-left: 0px;
	text-align: left;
	/*background: transparent url("../images/det1gmail.png") left top
		no-repeat;*/
}

/* TOOLTIP2 <a class="tooltip2" href="#">Critical<span class="custom critical"><img src="Critical.png" alt="Error" height="48" width="48" /> */

.tooltip2 {
			border-bottom: 1px dotted #000000; color: #000000; outline: none;
			cursor: help; text-decoration: none;
			position: relative;
		}
		.tooltip2 span {
			margin-left: -999em;
			position: absolute;
			color: #000;
		}
		.tooltip2:hover span {
			border-radius: 5px 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; 
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 5px 5px rgba(0, 0, 0, 0.1); -moz-box-shadow: 5px 5px rgba(0, 0, 0, 0.1);
			font-family: Calibri, Tahoma, Geneva, sans-serif;
			position: absolute; left: 1em; top: 2em; z-index: 99;
			margin-left: 0; width: 250px;
			behavior: url(pie/PIE.htc);
		}
		.tooltip2:hover img {
			border: 0; margin: -10px 0 0 -55px;
			float: left; position: absolute;
		}
		.tooltip2:hover em {
			font-family: Candara, Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: bold;
			display: block; padding: 0.2em 0 0.6em 0;
		}
		.classic { padding: 0.8em 1em; }
		.custom { padding: 0.5em 0.8em 0.8em 2em; }
		* html a:hover { background: transparent; }
		.classic {background: #FFFFAA; border: 1px solid #FFAD33; }
		.critical { background: #FFCCAA; border: 1px solid #FF3334;	}
		.help { background: #9FDAEE; border: 1px solid #2BB0D7;	}
		.info { background: #9FDAEE; border: 1px solid #2BB0D7;	}
		.warning { background: #FFFFAA; border: 1px solid #FFAD33; }
		
/* FINB TOOLTIP2 <a class="tooltip2" href="#">Critical<span class="custom critical"><img src="Critical.png" alt="Error" height="48" width="48" /> */
</style>

</head>
<body>
	<div id="flotante"
		style="z-index: 4; filter: alpha(opacity =   80); float: left; -moz-opacity: .80; opacity: .80">
	</div>
<a href="http://www.rgraph.net/"><img
	src="http://www.rgraph.net/images/logo.png" alt="" /><br /> <strong>Coded by rgraph.net</strong></a>

			<!--<div id="help"
				onMouseOver="showdiv(event,'<?php echo INDICADORES_HELP; ?>');"
				onMouseOut="hiddenDiv()" style='display: table;'>
				<img src="../images/help.png" alt="" />
			</div>-->
			
				<div align="center">
				<p align="left">
				<a class="tooltip2" href="#"><?php echo CODIGO; ?><span class="custom help"><img src="../images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo CODIGOSINCIDENCIAS_LASTID_HELP; ?></span></a></p>
				</div>
			
			
	<table>
		<tr>
			<td>
				<form action="?seccion=ncsporarea_revsistema" method="POST">
					<!-- <input input type="text" id="date" class="inputnormal"
						name="seleccione" value="< ?php echo SELECCIONAR_FECHA; ?>">
					<input type="button" value="::"
						onclick="< ?php echo $db->show('date') ?>">-->

				<input id='date' class='datepicker' name='seleccione' value='<?php echo SELECCIONAR_FECHA; ?>' />
				<button type="submit" class="btn btn-info"><?php echo CALCULAR; ?></button>

				</form>
			</td>
		</tr>
	</table>


	<br />
	<br /> Gráfico solo para consulta. Muchas NC´s en un solo área son un
	síntoma a investigar.
	<br />
	<br />



	<canvas id="cvs" width="1100" height="300">[No canvas support]</canvas>
	<script type="text/javascript">
        bar = new RGraph.Bar('cvs', <?php print($data_string) ?>);
        bar.Set('chart.title', 'No conformidades por área');
        bar.Set('chart.title.yaxis', 'Nº de NC´s');
        bar.Set('chart.annotatable', true);
        bar.Set('chart.events.click', myFunc3);
        bar.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        bar.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar.canvas);
                                            RGraph.ClearAnnotations(bar.canvas)
                                            bar.Draw();
                                           }
                                 ]
                                ]);
        bar.Set('chart.background.grid.autofit', true);
        bar.Set('chart.colors', ['DarkSea#9fff30']);
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

	<?php
	echo "Gráfica desde la fecha: '$date' en adelante";

	?>

</body>
</html>