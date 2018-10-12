<?php
/**
* Mod gráficas TDS Laboratorio
* 
* PHP version 5
* 
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
?>
<?php 
	include('../../configPDO.php'); 
	require '../../lang/spanish.lang.php';
    require_once ("../../includes/mysqli.php");
	
	

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Administración de analíticas de clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../assets/css/docs.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../../assets/css/thickbox.css"  media="screen" />
	<link type="text/css" rel="stylesheet" href="../../font-awesome-4.4.0/css/font-awesome.min.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="../../assets/ico/favicon.png">
   
	<script src="../../libraries/RGraph.common.core.js" type="text/javascript"></script>
	<script src="../../libraries/RGraph.line.js" type="text/javascript"></script>
	<script src="../../libraries/RGraph.common.dynamic.js" type="text/javascript"></script>
	<script src="../../libraries/RGraph.common.context.js" type="text/javascript"></script>
	<script src="../../libraries/RGraph.common.tooltips.js" type="text/javascript"></script>
	<script src="../../libraries/RGraph.common.annotate.js" type="text/javascript"></script>

<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>

  </head>

  <body>

<?php 
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "print") { 
   ?>
   
    <div class="container">
   <section id="c1">

        <div class="page-header">
            <h1>Gráficas de TDS de laboratorios</h1>
        </div>
		<table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
				  <th>Cliente</th>
                  <th>Resultado del último ensayo</th>
				   <th>Fecha del ensayo</th>
				   <th class="col-lg-1"><i class="icon icon-print"></i></th>
                </tr>
              </thead>
              <tbody>


            
            <?php
			//error_reporting(E_ALL ^ E_NOTICE);
				

			// We Will prepare SQL Query
				$STM = $dbh->prepare("SELECT  * FROM analiticas GROUP BY username");
			// For Executing prepared statement we will use below function
				$STM->execute();
			// we will fetch records like this and use foreach loop to show multiple Results
				$STMrecords = $STM->fetchAll();
				foreach($STMrecords as $row)
					{
			
			 echo"<tr>";
			 
			//echo"<td><img src='../../assets/img/$row[0].png'>".$row[1]."</td>";
					echo"<td>".$row[0]."</td>";
			
					echo '<td><a href="analiticas_print.php?&amp;aktion=print_id&amp;id=' . $row['id'] . '" alt="Image Tooltip" rel="tooltip" content="<table class=print2>
								<tbody>
								<tr>
								<th style=width:20%>Id</th>
								<th style=width:20%>Cliente</th>
								<th style=width:30%>Fecha/hora</th>
								<th style=width:35% colspan=3>Elem. inspeccionado</th>
								</tr>
								<tr>
								<td>' . $row['id'] . '</td>
								<td>' . $row['username'] . '</td>
								<td>' . $row['fechainicioensayo'] . '</td>
								<td colspan=3>' . $row['origenmuestra'] . '</td>
								</tr>
								<tr style=background-color:rgba(192,192,192,0.3);>
								<th style=color:MidnightBlue; colspan=6><div class=text-center>POZO</div></th>
								</tr>
								<tr>
								<th>Biocida</th>
								<th>Redox</th>
								<th>pH</th>
								<th>Tª</th>
								<th>TDS</th>
								<th>Otros</th>
								</tr>
								<tr>
								<td>' . $row['pbiocida'] . '</td>
								<td>' . $row['predox'] . '</td>
								<td>' . $row['pph'] . '</td>
								<td>' . $row['tempozo'] . '</td>
								<td>' . $row['ptds'] . '</td>
								<td>' . $row['potros'] . '</td>
								</tr>
								<tr style=background-color:rgba(192,192,192,0.3);>
								<th style=color:MidnightBlue; colspan=6><div class=text-center>ALMACENAMIENTO</div></th>
								</tr>
								<tr>
								<th>Biocida</th>
								<th>Redox</th>
								<th>pH</th>
								<th>Tª</th>
								<th>TDS</th>
								<th>Otros</th>
								</tr>
								<tr>
								<td>' . $row['lbiocida'] . '</td>
								<td>' . $row['lredox'] . '</td>
								<td>' . $row['lph'] . '</td>
								<td>' . $row['tempalmacenam'] . '</td>
								<td>' . $row['ltds'] . '</td>
								<td>' . $row['lotros'] . '</td>
								</tr>
								<tr style=background-color:rgba(192,192,192,0.3);>
								<th style=color:MidnightBlue; colspan=6><div class=text-center>BEBEDERO</div></th>
								</tr>
								<tr>
								<th>Biocida</th>
								<th>Redox</th>
								<th>pH</th>
								<th>Tª</th>
								<th>TDS</th>
								<th>Otros</th>
								</tr>
								<tr>
								<td>' . $row['bbiocida'] . '</td>
								<td>' . $row['bredox'] . '</td>
								<td>' . $row['bph'] . '</td>
								<td>' . $row['tempbebedero'] . '</td>
								<td>' . $row['btds'] . '</td>
								<td>' . $row['botros'] . '</td>
								</tr>
								<tr style=background-color:rgba(192,192,192,0.3);>
								<th style=color:MidnightBlue; colspan=6><div class=text-center>OTROS</div></th>
								</tr>
								<tr>
								<th>Biocida</th>
								<th>Redox</th>
								<th>pH</th>
								<th>Tª</th>
								<th>TDS</th>
								<th>Otros</th>
								</tr>
								<tr>
								<td>' . $row['obiocida'] . '</td>
								<td>' . $row['oredox'] . '</td>
								<td>' . $row['oph'] . '</td>
								<td>' . $row['tempotros'] . '</td>
								<td>' . $row['otds'] . '</td>
								<td>' . $row['ootros'] . '</td>
								</tr>
								</tbody>
								</table>" />
							  
							  <span class="icon icon-user" aria-hidden="true"></span> ' . $row['1'] . '
							  </a></td>';
			
			
			
			
			if($row[17]>=270)	
			{echo "<td><span class='label label-info'>".$row[2].": <span class='label label-important'> ".$row[17]."</span></td>"; } 
			else if($row[17]>=270 && $row[18]>=270) 
			{ echo "<td><span class='label label-warning'>".$row[2].": ".$row[17]."</span></td>"; }
			else 
			{ echo "<td><span class='label label-success'>".$row[2].": ".$row[17]."</span></td>"; }
			echo"<td>".$row[11]."</td>";
			
			 echo "<td><a href='graficasporgranja.php?&amp;aktion=print_id&amp;id=".$row['1']."'><span class='icon icon-signal' aria-hidden='true'></span></a></td>";
			echo"</tr>";
			}
			?>

              </tbody>
        </table>
    </section>
	<?php
} 
if ($aktion == "print_id") { 
   @$id = $_GET['id']; 
$result = mysqli_query($mysqli,  "SELECT username, fechainicioensayo, otds
									FROM  `analiticas` 
									WHERE username LIKE '$_GET[id]'
									AND fechainicioensayo BETWEEN DATE_SUB( NOW( ) , INTERVAL 540 DAY )
									AND NOW( )" );


if ($result) {

		?>
		  <div class="alert alert-info alert-fixed-top">
				 <a href="javascript:history.go(-1)" title="<?php echo GENERAL_VOLVER ?>"><i class="fa fa-step-backward fa-2x" style="color:Grey;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>Gráfica de TDS (ppm) del <span class='text-success'>Laboratorio</span> de la granja: <span class='text-success'>&nbsp;<?php echo $id ?>&nbsp;</span></small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../assets/img/logo.png" width="250px">
		  </div>
		<?php

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels [] = $row ["fechainicioensayo"];
		$labels2 [] = $row ["otds"];
		$data [] = $row ["otds"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 
?>
<br /><br />
</div>
 <div class="container">

    <canvas id="cvs" width="1100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs', <?php print($data_string) ?>);
        chart.Set('chart.title', 'TDS (ppm) laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
                                            chart.Draw();
                                           }
                                 ]
                                ]);
        chart.Set('chart.background.grid.autofit', true);

        /*chart.Set('chart.background.barcolor1', '#f2f2f2');
        chart.Set('chart.background.barcolor2', '#f2f2f2');
        chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
		chart.Set('chart.background.grid.autofit.numhlines', 10);
        chart.Set('chart.colors', ['yellow']);
		chart.Set('chart.shadow', true);
        chart.Set('chart.linewidth', 3);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,2000,'rgba(0, 255, 0, 0.4)'],
									[2000,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	} 
	?>
	
	</div>
	 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap-transition.js"></script>
    <script src="../../assets/js/bootstrap-alert.js"></script>
    <script src="../../assets/js/bootstrap-modal.js"></script>
    <script src="../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../assets/js/bootstrap-tab.js"></script>
    <script src="../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../assets/js/bootstrap-popover.js"></script>
    <script src="../../assets/js/bootstrap-button.js"></script>
    <script src="../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../assets/js/bootstrap-typeahead.js"></script>
    <script src="../../assets/js/bootstrap-affix.js"></script>

    <script src="../../assets/js/holder/holder.js"></script>
    <script src="../../assets/js/google-code-prettify/prettify.js"></script>

    <script src="../../assets/js/application.js"></script>

	<script src="../../assets/js/jqBootstrapValidation.js"></script>     
    <script>
		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script>

	<script type="text/javascript" src="../../assets/js/thickbox.js"></script>
	<script type="text/javascript" src="../../assets/js/queriesttip.js"></script>
</body> 
</html>