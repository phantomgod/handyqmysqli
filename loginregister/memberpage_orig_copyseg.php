<?php require 'includes/config.php'; 
require '../lang/spanish.lang.php';
//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Página de cliente';

//include header template
require('layout/header.php'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Consulta de resultados de análisis</title>

    <meta name="description" content="Análisis de aguas de clientes de MIPROMA BIOCONTROL">
    <meta name="author" content="BIOCONTROL!">
<!-- Le styles -->
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/docs.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

</head>

<body>


<div class="container-fluid">

<!-------->
<div class="container">

        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Analíticas</a></li>
            <li><a href="#orange" data-toggle="tab">Comunicar</a></li>
            <li><a href="#yellow" data-toggle="tab">Documentos</a></li>
            <li><a href="#green" data-toggle="tab">Gráficas</a></li>
            <li><a href="#blue" data-toggle="tab">Ayudas</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
		
		<!--*********************************************************************** RED ***************************************** -->
            <div class="tab-pane active" id="red">
			<div class="row">
				<div class="col-md-3">
					<a href="http://vitalaqua.valoryempresa.org/" alt="Analíticas VitalAqua" title="Analíticas VitalAqua"><img src="images/logo.png" width="200px"></a>
				</div>
				<div class="col-md-6">
					
					<?php
							$sth = $db->prepare("SELECT * FROM members WHERE username='$_SESSION[username]'");
							$sth->execute();

							//print("Fetch the first column from the first row in the result set:\n");
							$result = $sth->fetchColumn();
							//print("page = $result\n");

						?>
					<p class="blue">Descarga de informes, documentos y gráficas de: <?php echo $_SESSION['username']?></p>
				</div>
				<div class="col-md-3">
					 
					<dl>
						<dt>
						Bienvenido <kbd><?php echo $_SESSION['username']; ?></kbd> &nbsp;<a class="btn btn-success" href='logout.php'>Logout</a>
						</dt>
					</dl>
						
				</div>
			</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="thumbnail">
								<p class="bg-info">
									Puede consultar los resultados de los análisis de sus granjas en los enlaces que aparecen abajo.
								</p>									
								</div>

								<div class="thumbnail">
									<!--<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">-->
									<div class="caption">
										<h3>
											Ensayos
										</h3>
										<p>
											<?php
										// We Will prepare SQL Query
											$STM = $db->prepare("SELECT * FROM `granjas` WHERE `granjaintegradora` = '$_SESSION[username]'");
										// For Executing prepared statement we will use below function
											$STM->execute();
										// we will fetch records like this and use foreach loop to show multiple Results
											$STMrecords = $STM->fetchAll();
											
										echo '<table class="sortable">'; 
										echo '<tbody>';
										echo '<tr>
												<th>' . ID .'</th><th>' . GRANJA .'</th><th>' . CLIENTE .'</th><th>' . ACTIVIDAD .'</th><th></th><th>' . VISITADORES .'</th><th>' . DOCUMENTOS .'</th>
											</tr>'; 
										
										foreach($STMrecords as $row)
										{
											
										 echo"<tr>";
										  
										  echo "<td>".$row['0']."</td>"; 
										  echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> <a href='../analiticas_por_granja.php?&amp;aktion=print_id&amp;id=".$row['1']."'>".$row['1']."</a></td>"; 
										  echo "<td><a href='#'>".$row['2']."</a></td>";
										  echo "<td><a href='#'><img src='../".$row['18']."' width='40px'></a></td>"; 
										  echo "<td><a href='../analiticas_por_granja.php?&amp;aktion=print_id&amp;id=".$row['1']."' class='btn btn-info btn-sm'><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Print</a></td>";
										  echo "<td>".$row['5'].", ".$row['6'].", ".$row['19'].", ".$row['20'].", ".$row['21'].", ".$row['22'].", ".$row['23'].", ".$row['24'].", ".$row['25'].", ".$row['26'].", ".$row['27']."</td>"; 
										/*echo"<td><span class='icon icon-user' aria-hidden='true'></span> ".$row[1]."</td>";
										echo "<td><a href='".$row[7]."'><span class='label label-warning'>".$row[7]."</span></a></td>";*/
										
/*******************************************PONEMOS LOS DOCUMENTOS************************************************************/				
										echo "<td>";
										// We Will prepare SQL Query
											$STM2 = $db->prepare("SELECT id, nombredocumento, url, cliente, granja FROM `documentos` 
																	WHERE `cliente`='$_SESSION[username]'
																	AND `granja`='$row[1]'");
																	
										// For Executing prepared statement we will use below function
											$STM2->execute();
										// we will fetch records like this and use foreach loop to show multiple Results
											$STM2records = $STM2->fetchAll();
											foreach($STM2records as $row2)
												{
												
												echo "<a href='".$row2[2]."' target='blank'><i class='fa fa-file-pdf-o fa-2x' title='".$row2[1]."'></i><br />";
												
												}			
										echo "</td>";
			
		/**************************************** FIN DE PONEMOS LOS DOCUMENTOS*****************************************/
										
										echo"</tr>";
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
					</div>
				</div>
            </div>
			
<!--*********************************************************************** FIN DE RED ***************************************** -->
			
<!--*********************************************************************** ORANGE ***************************************** -->
            <div class="tab-pane" id="orange">
               	<div class="col-md-5">
					<div class="thumbnail">
						<i class="glyphicon glyphicon-envelope"></i>
						<div class="caption">										
							<iframe width="380px" height="500px" src="contactform/form.php" frameborder="0" allowfullscreen></iframe>
										
						</div>
					</div>
				</div>
            </div>
<!--*********************************************************************** YELLOW ***************************************** -->
            <div class="tab-pane" id="yellow">
				<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
					<!-----xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
					</div>
					<div class="col-md-4">
						 
						<!--<dl>
							<dt>
							Bienvenido <kbd><?php echo $_SESSION['username']; ?></kbd> &nbsp;<a class="btn btn-success" href='logoutclientes.php'>Logout</a>
							</dt>
						</dl>-->
							
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="thumbnail">
					<span class="span4">
								Documentos de: <kbd><?php echo $_SESSION['username']; ?></kbd>
								&nbsp;&nbsp;&nbsp;
					</span>
					<span class="span3">
								<?php
									// We Will prepare SQL Query
										$STM2 = $db->prepare("select count(*) AS count from ( SELECT * FROM `documentos` 
													WHERE `cliente`='$_SESSION[username]') m");
									// For Executing prepared statement we will use below function
										$STM2->execute();
									// we will fetch records like this and use foreach loop to show multiple Results
										$STM2records = $STM2->fetchAll();
										foreach($STM2records as $row2)
									{								
									 echo"N&ordm; de registros: $row2[count]";
									}							 
								 ?>
					</span>
					<span class="span4">
								 Bienvenido <kbd><?php echo $_SESSION['username']; ?></kbd> &nbsp;<a class="btn btn-success" href='logoutclientes.php'>Logout</a>

								<!--<a href="<?php echo "" . $result . "" ?>" target="popup" onClick="window.open(this.href, this.target, 'width=660,height=515'); return false;" alt="Ver resultados" title="Ver resultados">
								<i class="glyphicon glyphicon-tint"></i></a>-->
					</span>
						
						<div class="caption">
							<!--xxxxxxxxxxxxxxxxxxxxxxxxx-->
						</div>
					</div>

					<div class="thumbnail">
						<!--<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">-->
						<div class="caption">
							<h3>
								Ensayos
							</h3>
							<p>
								<?php
							// We Will prepare SQL Query
								$STM = $db->prepare("SELECT * FROM `documentos` 
										WHERE `cliente`='$_SESSION[username]'");
							// For Executing prepared statement we will use below function
								$STM->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STMrecords = $STM->fetchAll();
								
							echo '<table class="table table-condensed table-striped">'; 
							echo "<thead>"; 
							echo '<tr>
									<th>ID</th><th>Documento</th><th>Cliente</th><th><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></th>
								</tr>'; 
							echo "</thead>";
							foreach($STMrecords as $row)
							{
								
							 echo"<tr>";
							  
							  echo "<td>".$row['0']."</td>"; 
							  echo "<td><span class='glyphicon glyphicon-attach' aria-hidden='true'></span> <a href='".$row['14']."'>".$row['1']."</a></td>"; 
							  echo "<td><a href='#'>".$row['2']."</a></td>";							 
							  echo "<td><a href='".$row['14']."' class='btn btn-info btn-sm'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Descargar</a></td>";
							echo"</tr>";
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
					
            </div>
<!--*********************************************************************** GREEN ***************************************** -->
             <div class="tab-pane" id="green">
               	<div class="col-md-12">
						<div class="caption">										
							<iframe width="1300" height="800" src="graficasporcliente.php?&amp;aktion=print" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
            </div>
<!--*********************************************************************** BLUE ***************************************** -->
            <div class="tab-pane" id="blue">
                <h1>Ayudas</h1>
                <p>Si en alguno de los listados, tanto de la pestaña de analíticas, como la de documentos o gráficas, necesita localizar un nombre rápidamente, le recomendamos que utilice la función de buscar del explorador de Interner de que disponga.</p>
				<p>Los exploradores más compatibles son Mozilla y Google Chrome, que recomendamos para poder visializar correctamente la aplicación.</p>
				<iframe width="650" height="550" src="../trash/buscar/buscar.html" frameborder="0" allowfullscreen></iframe>
				
            </div>
        </div>

</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>    
</div> <!-- container -->


    <script src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/sorttable.js"></script>

</body>
</html>