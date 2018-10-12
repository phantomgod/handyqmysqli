<?php require 'includes/config.php'; 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Página de cliente';

//include header template
require('layout/header.php'); 
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Consulta de resultados de análisis</title>

    <meta name="description" content="Análisis de aguas de clientes de MIPROMA BIOCONTROL">
    <meta name="author" content="BIOCONTROL!">
    <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
<hr>

    <div class="container-fluid">
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
				<div class="col-md-4">
					<div class="thumbnail">
						<i class="glyphicon glyphicon-envelope"></i>
						<div class="caption">

							
							 <iframe width="380" height="500" src="contactform/form.php" frameborder="0" allowfullscreen></iframe>
							
						</div>
					</div>
				</div>
				<div class="col-md-8">
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

  </body>
</html>