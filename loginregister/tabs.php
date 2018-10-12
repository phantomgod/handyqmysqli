<?php require 'includes/config.php'; 

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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
</head>

<body>

<div class="container-fluid">

<!-------->
<div class="container">
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Analíticas</a></li>
            <li><a href="#orange" data-toggle="tab">Comunicar</a></li>
            <li><a href="#yellow" data-toggle="tab">Documentos</a></li>
            <li><a href="#green" data-toggle="tab">Green</a></li>
            <li><a href="#blue" data-toggle="tab">Blue</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
		
		<!--*********************************************************************** RED ***************************************** -->
            <div class="tab-pane active" id="red">
			<div class="row">
				<div class="col-md-4">
					<a href="http://analiticas.valoryempresa.com/" alt="Analíticas VitalAqua" title="Analíticas VitalAqua"><img src="images/logo.png" width="400px"></a>
				</div>
				<div class="col-md-4">
					
					<?php
							$sth = $db->prepare("SELECT userpage FROM members WHERE username='$_SESSION[username]'");
							$sth->execute();

							//print("Fetch the first column from the first row in the result set:\n");
							$result = $sth->fetchColumn();
							//print("page = $result\n");

						?>
					<h2><small>Consulta de resultados de análisis del cliente: <?php $_SESSION['username']?></small></h2>	
				</div>
				<div class="col-md-4">
					 
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
											Puede consultar los resultados de los análisis de sus granjas en los enlaces que aparecen abajo. Si tiene que hacer algina consulta, por favor, utilice el formulario de su izquierda. ¡Gracias!
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
											
										echo '<table class="table table-condensed table-striped">'; 
										echo "<thead>"; 
										echo '<tr>
												<th>ID</th><th>Granja</th><th>Cliente</th><th>Actividad</th><th>Visitadores</th>
											</tr>'; 
										echo "</thead>";
										foreach($STMrecords as $row)
										{
											
										 echo"<tr>";
										  
										  echo "<td>".$row['0']."</td>"; 
										  echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> <a href='../analiticas_por_granja.php?&amp;aktion=print_id&amp;id=".$row['1']."'>".$row['1']."</a></td>"; 
										  echo "<td><a href='#'>".$row['2']."</a></td>";
										  echo "<td><a href='#'>".$row['4']."</a></td>"; 
										  echo "<td><a href='../analiticas_por_granja.php?&amp;aktion=print_id&amp;id=".$row['1']."' class='btn btn-info btn-sm'><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Print</a></td>";
										  echo "<td>".$row['5'].", ".$row['6'].", ".$row['19'].", ".$row['20'].", ".$row['21'].", ".$row['22'].", ".$row['23'].", ".$row['24'].", ".$row['25'].", ".$row['26'].", ".$row['27']."</td>"; 
										/*echo"<td><span class='icon icon-user' aria-hidden='true'></span> ".$row[1]."</td>";
										echo "<td><a href='".$row[7]."'><span class='label label-warning'>".$row[7]."</span></a></td>";*/
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
			
<!--*********************************************************************** ORANGE ***************************************** -->
            <div class="tab-pane" id="orange">
               	<div class="col-md-5">
					<div class="thumbnail">
						<i class="glyphicon glyphicon-envelope"></i>
						<div class="caption">										
							<iframe width="380" height="500" src="contactform/form.php" frameborder="0" allowfullscreen></iframe>
										
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
													WHERE `visitador1`='$_SESSION[username]'
													OR `visitador2`='$_SESSION[username]'
													OR `visitador3`='$_SESSION[username]'
													OR `visitador4`='$_SESSION[username]'
													OR `visitador5`='$_SESSION[username]'
													OR `visitador6`='$_SESSION[username]'
													OR `visitador7`='$_SESSION[username]'
													OR `visitador8`='$_SESSION[username]'
													OR `visitador9`='$_SESSION[username]'
													OR `visitador10`='$_SESSION[username]'
													OR `visitador11`='$_SESSION[username]' ) m");
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
										WHERE `visitador1`='$_SESSION[username]'
										OR `visitador2`='$_SESSION[username]'
										OR `visitador3`='$_SESSION[username]'
										OR `visitador4`='$_SESSION[username]'
										OR `visitador5`='$_SESSION[username]'
										OR `visitador6`='$_SESSION[username]'
										OR `visitador7`='$_SESSION[username]'
										OR `visitador8`='$_SESSION[username]'
										OR `visitador9`='$_SESSION[username]'
										OR `visitador10`='$_SESSION[username]'
										OR `visitador11`='$_SESSION[username]'");
							// For Executing prepared statement we will use below function
								$STM->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STMrecords = $STM->fetchAll();
								
							echo '<table class="table table-condensed table-striped">'; 
							echo "<thead>"; 
							echo '<tr>
									<th>ID</th><th>Documento</th><th>Cliente</th><th>Visitadores</th>
								</tr>'; 
							echo "</thead>";
							foreach($STMrecords as $row)
							{
								
							 echo"<tr>";
							  
							  echo "<td>".$row['0']."</td>"; 
							  echo "<td><span class='glyphicon glyphicon-attach' aria-hidden='true'></span> <a href='".$row['14']."'>".$row['1']."</a></td>"; 
							  echo "<td><a href='#'>".$row['2']."</a></td>";							 
							  echo "<td>".$row['3'].", ".$row['4'].", ".$row['5'].", ".$row['6'].", ".$row['7'].", ".$row['8'].", ".$row['9'].", ".$row['10'].", ".$row['11'].", ".$row['12'].", ".$row['13']."</td>";
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
                <h1>Green</h1>
                <p>green green green green green</p>
            </div>
<!--*********************************************************************** BLUE ***************************************** -->
            <div class="tab-pane" id="blue">
                <h1>Blue</h1>
                <p>blue blue blue blue blue</p>
            </div>
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

</body>
</html>