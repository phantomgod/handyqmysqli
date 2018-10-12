<?php
@ob_start();
require 'includes/config.php';
require '../includes/mysqli.php';
    if(!isset($_SESSION))
    {
        session_start();
    }

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: loginclientes.php'); }

//define page title
$title = 'Sesión de trabajador de MIPROMA-BIOCONTROL';

//include header template
require('layout/header.php');
?>
<html>
<head>
    <meta charset="utf-8">
   <link rel="shortcut icon" href="../images/favicon.png">
    <script src="../assets/js/jquery.js"></script>
    <meta name="description" content="Documentos de trabajadores">
    <meta name="author" content="BIOCONTROL!">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/docs.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../assets/css/printstyle.css"  media="print" />
	<link type="text/css" rel="stylesheet" href="../assets/css/thickbox.css"  media="screen" />
	<link type="text/css" rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">

	    <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="../assets/ico/favicon.png">
<style>
#colorstrip{
    height: 0px;
    border-bottom:solid 1px grey;
	width:13px;
}
</style>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
</head>
<body>

			<div class="container">
				<div class="row">
				<div class="col-md-6">
					<a href="http://www.biocontrol.es" alt="Miproma Biocontrol" title="Miproma Biocontrol"><img src="images/logomiproma.png" width="400px"></a><br /><br />
				</div>
					<div class="col-md-6">

						<dl>
							<dt>
							Bienvenido

							<kbd><?php echo $_SESSION['username'];?></kbd>

							<?php
								$sth2 = $db->prepare("SELECT * FROM members
														WHERE username='$_SESSION[username]'");
								$sth2->execute();

							// we will fetch records like this and use foreach loop to show multiple Results
								$sth2records = $sth2->fetchAll();

								foreach($sth2records as $row2)
							{
								echo "<img src='../$row2[10]' width='40px'>";
							}

							?>

								&nbsp;<a class="btn btn-success" href='logout.php'>Logout</a>
							</dt>
						</dl>
					</div>
				</div>
			</div>

	<div class="container">

	<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
    <ul id="myTabs" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">DOCUMENTOS</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">COMUNICAR</a></li>
	  <li role="presentation"><a href="#graficas" role="tab" id="graficas-tab" data-toggle="tab" aria-controls="graficas">GRÁFICAS</a></li>
      <li role="presentation"><a href="#politica" role="tab" id="politica-tab" data-toggle="tab" aria-controls="politica">Política</a></li>
	  <!--<li role="presentation" class="dropdown">
        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Documentos<span class="caret"></span></a>
        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
          <li><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">analíticas</a></li>
          <li><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
        </ul>
      </li>-->
    </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

		<!-- ****************************** HOME-TAB-PANEL*********************************** -->
		<!-- ****************************** HOME-TAB-PANEL*********************************** -->
		<!-- ****************************** HOME-TAB-PANEL*********************************** -->

		    <div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Página del trabajador: <?php $_SESSION['username'] ?></h2>
					</div>
				</div>

				<div class="col-md-12">

						<div class="panel panel-success">
							<div class="panel-heading">
							Si tiene que hacer alguna consulta, por favor, utilice la pestaña de contacto.
							</div>
						</div>


					<div class="thumbnail">
						<!--<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">-->
						<div class="caption">
							<h3>
								Documentos. <small>Para ver el documento de valores, pinche el enlace.</small>
							</h3>
							<p>
								<?php
							// We Will prepare SQL Query
								$STM = $db->prepare("SELECT e.*, s.`nombre`
														FROM `enlaces` e, `secciones` s
														WHERE e.`seccionid`=s.`id`
														AND  e.`clave1`='produccion'
														ORDER BY s.`nombre` ASC");
							// For Executing prepared statement we will use below function
								$STM->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STMrecords = $STM->fetchAll();
								?>
								<script>
									$(document).ready(function(){
										$('#myTable').dataTable();
									});

								</script>


								<?php

							echo '<table id="myTable" class="sortable">';
							echo "<thead>";
							echo '<tr>
									<th>Fecha</th>
									<th>Título</th>
									<th>Link</th>
									<th>Comment</th>
									<th>Rev.</th>
									<th>Sección</th>


									<th><i class="fa fa-question" aria-hidden="true"></i></th>
									<th><i class="fa fa-print" aria-hidden="true"></i></th>';
									// We Will prepare SQL Query
										$STM2 = $db->prepare("select count(*) AS count FROM `enlaces`");
									// For Executing prepared statement we will use below function
										$STM2->execute();
									// we will fetch records like this and use foreach loop to show multiple Results
										$STM2records = $STM2->fetchAll();
										foreach($STM2records as $row2)
									{
									 echo"<th>Docs: $row2[count]</th>";
									}

								echo '</tr>';
							echo "</thead>";
							foreach($STMrecords as $row)
							{

							echo"<tr>";
							echo"<td>$row[2]</td>";
							echo"<td>$row[3]</td>";
							echo"<td><a href='$row[4]' target='_blank' title='Ver " . $row[3] . "'><i class='fa fa-eye' style='color:#0086b3;'></i></td>";
							echo"<td>$row[5]</td>";
							echo"<td>$row[7]</td>";
							echo"<td>$row[8]</td>";
							echo"<td>XX</td>";
							echo"<td>XX</td>";
							echo"<td>XX</td>";

							}
							echo "</tbody>";
							echo "</table>";

							?>
							</p>
							<p>
								<!--<a class="btn btn-primary" href="#">Acción</a> <a class="btn" href="#">Acción</a>-->
							</p>
						</div>
					</div>
				</div>
			</div>
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      </div>
<!-- ****************************** FIN HOME-TAB-PANEL*********************************** -->

<!-- ****************************** IFRAME-TAB-PANEL*********************************** -->

      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
        <iframe width="380" height="500" src="contactform/form.php" frameborder="0" allowfullscreen></iframe>
      </div>

	  <!-- ****************************** FIN IFRAME-TAB-PANEL*********************************** -->

		<!-- ****************************** GRÁFICAS-TAB-PANEL*********************************** -->

      <div role="tabpanel" class="tab-pane fade" id="graficas" aria-labelledby="gráficas-tab">
		    	<div class="col-md-12">
					<div class="caption">
					<?php
											 /**
					* Change these to your own credentials */


					 //$from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';
					//$to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

					 $result = mysqli_query($mysqli, "SELECT fecha,horas
														FROM cursos
														WHERE trabajador= '$_SESSION[username]'");


					if ($result) {

						$labels = array();
						$labels2 = array();
						$data   = array();

						while ($row = mysqli_fetch_assoc($result)) {
							$labels[] = $row["fecha"];
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

				<script src="../jscripts/windowopen.js"></script>

					<!-- Don't forget to update these paths -->

					<script src="../RGraph/libraries/RGraph.common.core.js" ></script>
					<script src="../RGraph/libraries/RGraph.bar.js"></script>
					<script src="../RGraph/libraries/RGraph.common.dynamic.js"></script>
					<script src="../RGraph/libraries/RGraph.common.context.js" ></script>
					<script src="../RGraph/libraries/RGraph.common.tooltips.js"></script>
					<script src="../RGraph/libraries/RGraph.common.annotate.js" ></script>

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
							<a class="tooltip2" href="#"><b>&Omega;</b><span class="custom help"><img src="../../images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo INDICADORES_HELP; ?></span></a></p>
						</div>
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

					</div>
				</div>
      </div>
		<!-- ****************************** FIN GRÁFICAS-TAB-PANEL*********************************** -->

<!-- ****************************** IFRAME-TAB-PANEL-POLITICA *********************************** -->
<!-- ****************************** IFRAME-TAB-PANEL-POLITICA *********************************** -->
      <div role="tabpanel" class="tab-pane fade" id="politica" aria-labelledby="politica-tab">

		<img src="../../images/logomiproma.png" width="200px">

		<p><strong><img src="images/logomiproma.png" alt="logo BIOCONTROL" width="200" height="33" /></strong></p>
		<p>&nbsp;</p>
		<p><strong>POL&Iacute;TICA DE CALIDAD</strong></p>
		<p><strong>&nbsp;</strong></p>
		<p><strong>- &nbsp;Mantener las poblaciones nocivas de nuestros clientes por debajo de los niveles de da&ntilde;o.</strong></p>
		<p><strong>- &nbsp;Informar al cliente sobre la naturaleza de nuestras actividades, para la correcta revisi&oacute;n de requisitos y con el fin de evitar expectativas infundadas.</strong></p>
		<p><strong>- &nbsp;Atender al cliente con rapidez, cortes&iacute;a y profesionalidad.</strong></p>
		<p><strong>- &nbsp;Cuidar las instalaciones del cliente como si fueran propias.</strong></p>
		<p><strong>- &nbsp;Proporcionar confianza en que se cumplir&aacute;n los requisitos de la calidad y se controlarán los riesgos relativos a los productos entregados y a los servicios prestados.</strong></p>
		<p><strong>- &nbsp;Cumplimiento de los requisitos ofertados a los clientes, consolidando la confianza en MIPROMA BIOCONTROL.</strong></p>
		<p><strong>&nbsp;</strong></p>
		<p><strong>La aplicaci&oacute;n de esta pol&iacute;tica no estar&aacute; nunca en conflicto con la ley o con las demandas de la sociedad general o local.</strong></p>
		<p><strong>&nbsp;</strong><strong>La gesti&oacute;n de esta pol&iacute;tica es posible gracias al fuerte compromiso de la direcci&oacute;n en la mejora permanente de los resultados de MIPROMA BIOCONTROL, S.L.</strong></p>
		<p><strong>&nbsp;</strong><strong>Asimismo es posible porque este compromiso se transmite a todos los componentes de la empresa y sus proveedores, solicitando su colaboraci&oacute;n.</strong></p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><strong>La direcci&oacute;n</strong></p>
		<p><strong>01/07/2017</strong></p>





		<!--<iframe width="100%" src="analiticasporpresupuesto_clientes.php" frameborder="0"  onload="resizeIframe(this)"></iframe>-->
      </div>

	<!-- ****************************** FIN IFRAME-TAB-PANEL-POLITICA *********************************** -->
	<!-- ****************************** FIN IFRAME-TAB-PANEL-POLITICA *********************************** -->

    <script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/sorttable.js"></script>

    <script src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/thickbox.js"></script>
	<script type="text/javascript" src="../assets/js/queriesttip.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
</body>
</html>
