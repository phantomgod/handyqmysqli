<?php
@ob_start();
	require '../lang/spanish.lang.php';
	include('../configPDO.php'); 

?>
<!DOCTYPE html>
<html lang="es">
 <head>
<head>
    <meta charset="utf-8">
    <title>Consulta de resultados de análisis</title>
	
    <script src="../assets/js/jquery.js"></script>
    <meta name="description" content="Análisis de aguas de clientes de VITALAQUA">
    <meta name="author" content="VITALAQUA!">
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
</head>
<style>
#colorstrip{
    height: 0px;
    border-bottom:solid 1px grey;
	width:13px;
}
</style>
</head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

					<div class="container">
						<table>
							<tbody>
								<tr>
									<td>
										<form class="form-horizontal" role="search" method="post" action="analiticasporpresupuesto_clientes.php">
											<div class="control-group">
												Buscar por Presupuesto
												<select name="search" id="search">
													<option value="">Estado del presupuesto...</option>
														<option value="entregado">Entregado</option>
														<option value="aceptado">Aceptado</option>
														<option value="rechazado">Rechazado</option>
														<option value="conforme">Conforme</option>
														<option value="presupuesto">Todos</option>
												</select>
												<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Buscar">
											</div>								
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>


	
	
	<?php 
	/*load database connection
		$host = "localhost";
		$user = "vitalaqu_laura";
		$password = "laura@@@#5940";
		$database_name = "vitalaqu_laura";
		$pdo = new PDO("mysql:host=$host;dbname=$database_name;charset=utf8", $user, $password, array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		));*/
		require 'includes/config.php'; 
	// Search from MySQL database table
	//@$search=$_POST['search'];
  

if (empty($_POST['search'])) { $search="presupuesto";} else { $search=$_POST['search'];}


	
	$query = $dbh->prepare("SELECT id,fechainicioensayo,username,integradora,observaciones FROM analiticas WHERE observaciones LIKE '%$search%' AND integradora='$_SESSION[username]' ORDER BY fechainicioensayo DESC");
	$query->bindValue(1, "%$search%", PDO::PARAM_STR);
	$query->execute();
	// Display search result
			echo "<div class='container-fluid'";
			 if (!$query->rowCount() == 0) { ?>
					
			<!-- ****************************** HOME-TAB-PANEL*********************************** -->
		
		    <div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					<?php
						include("../configPDO.php");
							// We Will prepare SQL Query
								$STM0 = $dbh->prepare("SELECT username, integradora,observaciones FROM analiticas
								WHERE observaciones LIKE '%$search%' AND integradora='$_SESSION[username]'");
							// bind paramenters, Named paramenters alaways start with colon(:)
								$STM0->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STM0records = $STM0->fetchAll();
						foreach($STM0records as $row0)
							{							   
							}
							
				if ($row0['3'] = $search) {	
					?>
					
						<h2>Analíticas por palabra clave: <kbd><?php echo $search; echo '&nbsp'; echo $_SESSION['username'];
						
				} else {?>
						<h2>Analíticas por palabra clave: <kbd><?php echo $search;
				}
				?></kbd><small> Se muestran todos los estados de presupuestos. Para ver solo los entregados, aceptados o rechazados, debe usar el selector que aparece arriba. Se muestran los valores de <font size="4" color="red">laboratorio</font>. Para ver el resto, imprima el informe pinchando sobre cualquiera de ellos.</small></h2>
					</div>
				</div>
				
				<div class="col-md-12">
		<!--******************************* CONTAMOS LOS REGISTROS ***********************************************-->
				<?php
					//require_once 'includes/configPDO.php';

					// We Will prepare SQL Query
									$STM3 = $dbh->prepare("SELECT COUNT(*) AS count FROM analiticas
															WHERE `observaciones` LIKE '%$search%' AND integradora='$_SESSION[username]'");
								// For Executing prepared statement we will use below function
									$STM3->execute();
								// we will fetch records like this and use foreach loop to show multiple Results
									$STM3records = $STM3->fetchAll();
								foreach($STM3records as $row3)
									{
										
									}
					?>
		<!--******************************* FIN DE CONTAMOS LOS REGISTROS ***********************************************-->
				<div class="thumbnail">
						<!--<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">-->
						<div class="caption">
							<h3>
								Ensayos <small>Número de registros: <b><?php echo $row3['0']; ?></b></small>
							</h3>
							<p>
								<?php
							// We Will prepare SQL Query
								$STM = $dbh->prepare("SELECT * FROM `analiticas` 
										WHERE `observaciones` LIKE '%$search%'
										AND integradora='$_SESSION[username]'");
							// For Executing prepared statement we will use below function
								$STM->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STMrecords = $STM->fetchAll();
								
							echo '<table class="sortable">'; 
							echo "<thead>"; 
							echo '<tr>
									<th>Analíticas</th>
									<th>pH</th>
									<th>NaCl</th>
									<th>TDS(ppm)</th>
									<th>EC µS</th>
									<th>T&ordf;(&deg;C)</th>
									<th>Dureza(&ordf;f)</th>';
									// We Will prepare SQL Query
										$STM2 = $dbh->prepare("select count(*) AS count from ( SELECT * FROM `documentos` 
													WHERE `granja` LIKE '%$row0[0]%' ) m");
									// For Executing prepared statement we will use below function
										$STM2->execute();
									// we will fetch records like this and use foreach loop to show multiple Results
										$STM2records = $STM2->fetchAll();
										foreach($STM2records as $row2)
									{								
									 echo"<th>Docs <br />N&ordm; de registros: $row2[count]</th>";
									}							 
						
								echo '</tr>'; 
							echo "</thead>";
							foreach($STMrecords as $row)
							{
							
							 echo"<tr>";
							 echo "<td>Analítica id: ".$row['0']." granja: <a href='../analiticas_por_granja.php?&amp;aktion=print_id&amp;id=".$row['1']."' title='Ver todas las analíticas de ".$row['1']."'><span class='glyphicon glyphicon-list' aria-hidden='true'></span> ".$row['1']."</a></td>"; 
							 
						/***************************************************************************/
							 echo "<td>";
							 
										if ($row['oph'] < 6.5) {
										
										?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row['oph']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
										} elseif ($row['oph'] == NULL) {
										
										echo '-/-<br/>';
										
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row['0'] . '">' . $row['oph'] . '</a> -</span> ';
											
											?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row['oph']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
										}
																	
															 
							 
								echo "</td>";
						
						/************************************************************************/	


						/***************************************************************************/
							 echo "<td>";
							 

										if ($row['nacl'] > 100) {						

										
										?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row['nacl']?></a></font>
										
										<span><?php echo $row['id']; ?><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
											
										} elseif ($row['nacl'] == NULL) {
										
										echo '-/-<br/>';
										
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row['0'] . '">' . $row['nacl'] . '</a> -</span> ';
											
											?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row['nacl']?></a></font>
										
										<span><?php echo $row['id']; ?> <font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
										}
																							 
							 
								echo "</td>";
						
						/************************************************************************/							  
							  
						/***************************************************************************/
							 echo "<td>";
							 

										if ($row['otds'] > 3000) {						

										
										?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row['otds']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
										
										} elseif ($row['otds'] == NULL) {
										
										echo '-/-<br/>';
										
										
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row['0'] . '">' . $row['otds'] . '</a> -</span> ';
											
											?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row['otds']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
										}
																							 
							 
								echo "</td>";
						
						/************************************************************************/
						/***************************************************************************/
							 echo "<td>";
							 

										if ($row['oec'] > 2000) {						

										
										?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row['oec']?></a></font>
										
										<span><?php echo strip_tags($row['observaciones'])?>
										</span>
										</p>
													
																		
										<?php
											} elseif ($row['oec'] == NULL) {
										
										echo '-/-<br/>';
										
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row['0'] . '">' . $row['oec'] . '</a> -</span> ';
											
											?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row['oec']?></a></font>
										
										<span><?php echo strip_tags($row['observaciones'])?>
										</span>
										</p>
													
																		
										<?php
										}
																							 
							 
								echo "</td>";
						
						/************************************************************************/
							  
						/***************************************************************************/
							 echo "<td>";						 

										if ($row['tempotros'] > 21) {	
										
										?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row['tempotros']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>

										<?php

										} elseif ($row['tempotros'] == NULL) {
										
										echo '-/-<br/>';
										
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row['0'] . '">' . $row['tempotros'] . '</a> -</span> ';
											
											?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row['tempotros']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
										}																 
							 
								echo "</td>";
						/************************************************************************/
							  
						/***************************************************************************/
							 echo "<td>";						 

										if ($row['odureza'] > 60) {	
										
										?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row['odureza']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>													
																		
										<?php
										} elseif ($row['odureza'] == NULL) {
										
										echo '-/-<br/>';										
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row['0'] . '">' . $row['odureza'] . '</a> -</span> ';
											
											?>
										<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row['odureza']?></a></font>
										
										<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row['11']; ?></font> <?php echo "<br />"; echo strip_tags($row['observaciones']);  ?>
										</span>
										</p>
													
																		
										<?php
										}																 
							 
								echo "</td>";
						/************************************************************************/
						
						
						
						/***************************  DOCUMENTOS  ************************************/	  
								echo "<td>";

							// We Will prepare SQL Query
								$STM = $dbh->prepare("SELECT * FROM `documentos` 
										WHERE `granja`='$row[username]'
										");
							// For Executing prepared statement we will use below function
								$STM->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STMrecords = $STM->fetchAll();
								
							foreach($STMrecords as $row)
							{
								?>
								
								<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'" style="display: inline-block;">
					
								<a href="<?php echo $row['14'] ?>" title="Imprimir:<?php echo $row['1'] ?>" target="_blank"><i class="fa fa-file-pdf-o" style="color:green;"></i></a>
								
								<span>
									<div class="text-center">
										Doc. Id: <?php echo $row['0'] ?> de la granja: <?php echo $row['15'] ?>
									</div>
									<div class="text-center">
										<iframe width="420" height="315" src="./<?php echo $row['14'] ?>" frameborder="0" allowfullscreen></iframe>
									</div>
								</span>
								</div> 
								
								<?php
								
							  //echo "<span class='glyphicon glyphicon-attach' aria-hidden='true'></span> <a href='".$row['14']."'>".$row['1']."</a><br />";  	
							}

							echo "</td>";	
							  
							/*************************** FIN DOCUMENTOS  ************************************/							  
							  
							echo"</tr>";
							}
							echo "</tbody>";   
							echo "</table>"; 	
							} else {
							echo 'div class="container-fluid">';
								echo '<div class="row">';
									echo '<div class="col-md-12">';
									
									echo '<h3>Analíticas por palabra clave: <kbd>';
									echo $search;
									echo '</kbd></h3>';
									echo '<h2>No se han encontrado presupuestos con ese criterio de búsqueda.</h2>';
									echo '<div>';
								echo '<div>';
							echo '<div>';
									
							}							
							
							?>
							</p>
							<p>
								<!--<a class="btn btn-primary" href="#">Acción</a> <a class="btn" href="#">Acción</a>-->
							</p>
						</div>
					</div>
				</div>
			</div>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<!-- ****************************** FIN HOME-TAB-PANEL*********************************** -->


</div>
</body>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/thickbox.js"></script>
	<script src="../assets/js/queriesttip.js"></script>
<script src="../assets/js/sorttable.js"></script>
<script>sorttable.sort_alpha = function(a,b) { return a[0].localeCompare(b[0]); }</script>
</html>

<?php  $dbh = null; ?>