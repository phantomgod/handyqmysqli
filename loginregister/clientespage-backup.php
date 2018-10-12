<?php require 'includes/config.php'; 
	  require '../lang/spanish.lang.php'; 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: loginclientes.php'); } 

//define page title
$title = 'Analíticas por Técnico';

//include header template
require('layout/header.php'); 
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Consulta de resultados de análisis</title>

    <meta name="description" content="Análisis de aguas de clientes de MIPROMA VITALAQUA">
    <meta name="author" content="VITALAQUA!">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/docs.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../assets/css/printstyle.css"  media="print" />
	<link type="text/css" rel="stylesheet" href="../assets/css/thickbox.css"  media="screen" />
	<link type="text/css" rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
	
	    <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="../assets/ico/favicon.png">

</head>
<body>

			<div class="container">
				<div class="row">
				<div class="col-md-6">
					<a href="http://www.miproma.es" alt="Miproma Vitalaqua" title="Miproma Vitalaqua"><img src="../images/logo.png" width="400px"></a>
				</div>
					<div class="col-md-6">
						<?php
								$sth = $db->prepare("SELECT * FROM granjas WHERE granjavisitador1='$_SESSION[username]'");
								$sth->execute();

								//print("Fetch the first column from the first row in the result set:\n");
								$result = $sth->fetchColumn();
								//print("page = $result\n");

							?>					 
						<dl>
							<dt>
							Bienvenido 
							
							<kbd><?php echo $_SESSION['username'];?>
							
							<?php
								$sth1 = $db->prepare("SELECT DISTINCT g.granjaimg, g.granjaintegradora, m.username
														FROM granjas g
														JOIN members m
														ON g.granjavisitador1 = m.username
														AND g.granjavisitador1='$_SESSION[username]'");
								
								$sth1->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$sth1records = $sth1->fetchAll();

								foreach($sth1records as $row1)
							{
								echo "<img src='../$row1[0]' width='40px'>";
							}
							
							?>							
							
							</kbd> &nbsp;de <?php echo $row1[1];?>
							
								&nbsp;<a class="btn btn-success" href='logoutclientes.php'>Logout</a>
							</dt>
						</dl>
					</div>
				</div>
			</div>
	
	<div class="container-fluid">
						
	<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
    <ul id="myTabs" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Analíticas</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Comunicar</a></li>
	  <li role="presentation"><a href="#documentos" role="tab" id="documentos-tab" data-toggle="tab" aria-controls="documentos">Documentos</a></li>
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
		
		    <div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2>Analíticas por técnico de campo: <kbd><?php echo $_SESSION['username'];?></kbd></h2>
					</div>
				</div>				
			<div class="row">
				<div class="col-md-12">
						<div class="panel panel-success">
							<div class="panel-heading">
							Puede consultar los resultados de los análisis en los enlaces que aparecen abajo.
							<br />
							Pinche sobre un valor para imprimir la analítica.
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
								$STM4 = $db->prepare("SELECT a.id, a.username, a.visitador, a.oph, a.nacl, a.otds, a.oec, a.tempotros, a.odureza, a.observaciones, a.fechainicioensayo FROM `analiticas` a WHERE a.`visitador`= '$_SESSION[username]'
										ORDER BY `a`.`id` ASC");
							// For Executing prepared statement we will use below function
								$STM4->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STM4records = $STM4->fetchAll();
								
							echo '<table class="sortable">'; 
							echo "<thead>"; 
							echo '<tr>
									<th>Analíticas por granja</th>
									<th>pH</th>
									<th>NaCl</th>
									<th>TDS(ppm)</th>
									<th>EC (µS)</th>
									<th>T&ordf;(&deg;C)</th>
									<th>Dureza(&ordf;f)</th>
									<th><i class="fa fa-info-circle" aria-hidden="true" style="color:black;"></i></th>';
									
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
									 echo"<th>Docs <br />N&ordm; de registros: $row2[count]</th>";
									}							 
						
								echo '</tr>'; 
							echo "</thead>";
							foreach($STM4records as $row4)
							{
							
							 echo"<tr>";
							 echo "<td> ".$row4['0']." <a href='../analiticas_por_granja.php?&amp;aktion=print_id&amp;id=".$row4['1']."' title='Ver todas las analíticas de ".$row4['1']."'><span class='glyphicon glyphicon-list' aria-hidden='true'></span>&nbsp;";


							if ($row4['oph'] < 6.5 or $row4['nacl'] > 100 or $row4['otds'] > 3000 or $row4['oec'] > 2000 or $row4['tempotros'] > 21 or $row4['odureza'] > 60) {
							
							echo '<font style="color:red; font-weight:bold; font-size:11px;">' . $row4['1'] . '</a>';
							
							} else {
							echo '<font style="color:blue; font-weight:bold; font-size:11px;">' . $row4['1'] . '</a>';
							}



							echo "</td>"; 
							 
						/***************************************************************************/
							 echo "<td>";
							 
							 
									if ($row4['oph'] < 6.5) {						

										
										?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row4['oph']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;">< ?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php			
										} else {
											
											?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row4['oph']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;">< ?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php
										}
																	
																 
							 
								echo "</td>";
						
						/************************************************************************/	


						/***************************************************************************/
							 echo "<td>";
							 

										if ($row4['nacl'] > 100) {						

										
										?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row4['nacl']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;">< ?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php			
										} else {
										?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row4['nacl']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;">< ?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php
										}
																							 
							 
								echo "</td>";
						
						/************************************************************************/							  
							  
						/***************************************************************************/
							 echo "<td>";
							 

										if ($row4['otds'] > 3000) {						

										
										?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row4['otds']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;">< ?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php			
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row4['0'] . '">' . $row4['otds'] . '</a> -</span> ';
											
											?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row4['otds']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;">< ?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php
										}
																							 
							 
								echo "</td>";
						
						/************************************************************************/
						/***************************************************************************/
							 echo "<td>";
							 

										if ($row4['oec'] > 2000) {						

										
										?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row4['oec']?></a></font>
										
										<!--<span>< ?php echo strip_tags($row4['observaciones'])?>
										</span>
										</p>-->
													
																		
										<?php			
										} else {
											
											?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row4['oec']?></a></font>
										
										<!--<span>< ?php echo strip_tags($row4['observaciones'])?>
										</span>
										</p>-->
													
																		
										<?php
										}
																							 
							 
								echo "</td>";
						
						/************************************************************************/
							  
						/***************************************************************************/
							 echo "<td>";						 

										if ($row4['tempotros'] > 21) {	
										
										?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row4['tempotros']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->											
																		
										<?php			
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row4['0'] . '">' . $row4['tempotros'] . '</a> -</span> ';
											
											?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row4['tempotros']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php
										}																 
							 
								echo "</td>";
						/************************************************************************/
							  
						/***************************************************************************/
							 echo "<td>";						 

										if ($row4['odureza'] > 60) {	
										
										?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:red; font-weight:bold; font-size:11px;"> <?php echo $row4['odureza']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->												
																		
										<?php			
										} else {
											//echo '<span class=spanblue><a href="../analiticas_print2.php?&aktion=print_id&id=' . $row4['0'] . '">' . $row4['odureza'] . '</a> -</span> ';
											
											?>
										<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">-->
										<a href="../analiticas_print2.php?&aktion=print_id&id=<?php echo $row4['0']?>"><font style="color:blue; font-weight:bold; font-size:11px;"> <?php echo $row4['odureza']?></a></font>
										
										<!--<span><font style="color:#f44336; font-weight:bold; font-size:14px;"><?php echo $row4['10']; ?></font> < ?php echo "<br />"; echo strip_tags($row4['observaciones']);  ?>
										</span>
										</p>-->
													
																		
										<?php
										}																 
							 
								echo "</td>";
						/************************************************************************/
						
								echo "<td>";
								
								
								// We Will prepare SQL Query
									$STM3 = $db->prepare("SELECT a.*, m.memimg, g.id, g.granjaimg
															FROM analiticas a
															LEFT JOIN members m ON a.visitador=m.username
															INNER JOIN granjas g ON a.username=g.granjanombre
															WHERE a.`username`= '$row4[username]'
															");
								// For Executing prepared statement we will use below function
									$STM3->execute();
								// we will fetch records like this and use foreach loop to show multiple Results
									$STM3records = $STM3->fetchAll();
									foreach($STM3records as $row3)
										{
										}
								
								
								?>
								<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">								
								<i class='fa fa-info-circle' aria-hidden='true' style='color:grey;'></i>
								<span>					
								<?php echo  "<font face='verdana' color='green'>"; echo ID; echo ":"; echo "&nbsp;<font face='verdana' color='midnightblue'>"; echo $row3['0']; echo "</font><br />";
								echo CLIENTE; echo ":"; echo "&nbsp;<font face='verdana' color='midnightblue'>";  echo $row3['username']; echo "</font><br />";
								echo FECHA; echo ":"; echo "&nbsp;<font face='verdana' color='midnightblue'>"; echo $row3['fechainicioensayo']; echo "</font><br />";
								echo ELEMENTO_INSPECCIONADO; echo ":"; echo "&nbsp;<font face='verdana' color='midnightblue'>"; echo $row3['origenmuestra']; echo"</font>"; ?>
								
								<br />
							
			<!-- **********************************************    POZO   ***************************************************** -->
					<?php echo  "<font face='verdana' color='red'>" . POZO . "</font>"; ?><br />	
						
				<?php if (($row3['pbiocida'] == 0) && ($row3['predox'] == 0) && ($row3['pph'] == 0.00) && ($row3['tempozo'] == 0.00) && ($row3['ptds'] == 0) && ($row3['pec'] == 0) && ($row3['pdureza'] == 0)) {
				echo '<font color="black">' . NO_SE_HAN_TOMADO_MUESTRAS_POZO . '</font>';
				
				} else { ?>
								<?php echo  "" . BIOCIDA . "&emsp;Redox&emsp;&emsp;pH&emsp;&emsp;Tª&emsp;&emsp;TDS&emsp; &emsp;EC&emsp; &emsp;NaCl&emsp; &emsp;Dureza"; ?><br />
								<?php echo" &emsp;"; echo  $row3['pbiocida']; echo" &emsp;&emsp;&emsp;"; echo $row3['predox']; echo" &emsp;&emsp;"; 		
										
										
										if ($row3['pph'] < 6.5) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['pph'] . '</font>&emsp;&emsp;';						
										} else {
											echo '<font color="blue">' . $row3['pph'] . '</font>&emsp;';
										}
							
										
										if ($row3['tempozo'] > 21) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['tempozo'] . '</font>&emsp;&emsp;';						
										} else {
											echo '<font color="blue">' . $row3['tempozo'] . '</font>&emsp;&emsp;';
										}
																		
								
										if ($row3['ptds'] > 2000) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['ptds'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['ptds'] . '</font>';
										}
										echo "&emsp;";
										if ($row3['pec'] > 3500) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['pec'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['pec'] . '</font>';
										}
										if ($row3['nacl'] > 100) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['nacl'] . '</font>';						
										} else {
											echo '&emsp;&emsp;<font color="blue">' . $row3['nacl'] . '</font>';
										}
										if ($row3['odureza'] > 60) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['odureza'] . '</font>';						
										} else {
											echo '&emsp;&emsp;<font color="blue">' . $row3['odureza'] . '</font>';
										}
										
						}
								?><br />
			<!-- **********************************************    ALMACENAMIENTO  ********************************************	-->	
			<?php echo  "<font face='verdana' color='red'>" . ALMACEN . "</font>"; ?><br />	
					<?php if (($row3['lbiocida'] == 0) && ($row3['lredox'] == 0) && ($row3['lph'] == 0.00) && ($row3['tempalmacenam'] == 0.00) && ($row3['ltds'] == 0) && ($row3['lec'] == 0) && ($row3['ldureza'] == 0)) {
					echo '<font color="black">' . NO_SE_HAN_TOMADO_MUESTRAS_ALMACEN . '</font>';
					
					} else { ?>	
								<?php echo  "" . BIOCIDA . "&emsp;Redox&emsp;&emsp;pH&emsp;&emsp;Tª&emsp;&emsp;TDS&emsp; &emsp;EC&emsp; &emsp;NaCl&emsp; &emsp;Dureza"; ?><br />
								<?php echo" &emsp;"; echo  $row3['lbiocida']; echo" &emsp;&emsp;&emsp;"; echo $row3['lredox']; echo" &emsp;&emsp;"; 		
								
										if ($row3['lph'] < 6.5) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['lph'] . '</font>&emsp;&emsp;';						
										} else {
											echo '<font color="blue">' . $row3['lph'] . '</font>&emsp;';
										}
								
										if ($row3['tempalmacenam'] > 21) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['tempalmacenam'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['tempalmacenam'] . '</font>';
										}
										if ($row3['ltds'] > 2000) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['ltds'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['ltds'] . '</font>';
										}
										echo "&emsp;";
										if ($row3['lec'] > 3500) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['lec'] . '</font>';						
										} else {
											echo '&emsp;&emsp;<font color="blue">' . $row3['lec'] . '</font>';
										}
										if ($row3['nacl'] > 100) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['nacl'] . '</font>';						
										} else {
											echo '&emsp;&emsp;&emsp;<font color="blue">' . $row3['nacl'] . '</font>';
										}
										if ($row3['odureza'] > 60) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['odureza'] . '</font>';						
										} else {
											echo '&emsp;&emsp;<font color="blue">' . $row3['odureza'] . '</font>';
										}
							}
								?><br />
		<!-- **********************************************    BEBEDERO  ********************************************	-->	
		<?php echo  "<font face='verdana' color='red'>" . BEBEDERO . "</font>"; ?><br />	

			<?php if (($row3['bbiocida'] == 0) && ($row3['bredox'] == 0) && ($row3['bph'] == 0.00) && ($row3['tempbebedero'] == 0.00) && ($row3['btds'] == 0) && ($row3['bec'] == 0) && ($row3['bdureza'] == 0)) {
				echo '<font color="black">' . NO_SE_HAN_TOMADO_MUESTRAS_BEBEDERO . '</font>';
				
				} else { ?>		
								<?php echo  "" . BIOCIDA . "&emsp;Redox&emsp;&emsp;pH&emsp;&emsp;Tª&emsp;&emsp;TDS&emsp; &emsp;EC&emsp; &emsp;NaCl&emsp; &emsp;Dureza"; ?><br />
								<?php echo" &emsp;"; echo  $row3['bbiocida']; echo" &emsp;&emsp;&emsp;"; echo $row3['bredox']; echo" &emsp;&emsp;"; 		
								
										if ($row3['bph'] < 6.5) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['bph'] . '</font>&emsp;&emsp;';						
										} else {
											echo '<font color="blue">' . $row3['bph'] . '</font>&emsp;';
										}
								
										if ($row3['tempbebedero'] > 21) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['tempbebedero'] . '</font>&emsp;&emsp;';						
										} else {
											echo '<font color="blue">' . $row3['tempbebedero'] . '</font>&emsp;&emsp;';
										}
								
										if ($row3['btds'] > 2000) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['btds'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['btds'] . '</font>';
										}
										echo "&emsp;";
										if ($row3['bec'] > 3500) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['bec'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['bec'] . '</font>';
										}
										if ($row3['nacl'] > 100) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['nacl'] . '</font>';						
										} else {
											echo '&emsp;&emsp;&emsp;<font color="blue">' . $row3['nacl'] . '</font>';
										}
										if ($row3['odureza'] > 60) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['odureza'] . '</font>';						
										} else {
											echo '&emsp;&emsp;<font color="blue">' . $row3['odureza'] . '</font>';
										}
						}
								?><br />
			
		<?php echo  "<font face='verdana' color='red'>" . 	LABORATORIO . "</font>"; ?><br />	
								<?php echo  "" . BIOCIDA . "&emsp;Redox&emsp;&emsp;pH&emsp;&emsp;Tª&emsp;&emsp;TDS&emsp; &emsp;EC&emsp; &emsp;NaCl&emsp; &emsp;Dureza"; ?><br />
								<?php echo" &emsp;"; echo  $row3['obiocida']; echo" &emsp;&emsp;&emsp;"; echo $row3['oredox']; echo" &emsp;&emsp;"; 		
										
										if ($row3['oph'] < 6.5) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['oph'] . '</font>&emsp;&emsp;';						
										} else {
											echo '<font color="blue">' . $row3['oph'] . '</font>&emsp;';
										}
								
										
										if ($row3['tempotros'] > 21) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['tempotros'] . '</font>&emsp;&emsp;';						
										} else {
											echo '<font color="blue">' . $row3['tempotros'] . '</font>&emsp;&emsp;';
										}
								
										if ($row3['otds'] > 2000) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['otds'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['otds'] . '</font>';
										}
										echo "&emsp;";
										if ($row3['oec'] > 3500) {						
										echo '<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['oec'] . '</font>';						
										} else {
											echo '<font color="blue">' . $row3['oec'] . '</font>';
										}
										if ($row3['nacl'] > 100) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['nacl'] . '</font>';						
										} else {
											echo '&emsp;&emsp;&emsp;<font color="blue">' . $row3['nacl'] . '</font>';
										}
										if ($row3['odureza'] > 60) {						
										echo '&emsp;&emsp;<i class="fa fa-exclamation-circle" style="color:red;"></i> <font color="red">' . $row3['odureza'] . '</font>';						
										} else {
											echo '&emsp;&emsp;<font color="blue">' . $row3['odureza'] . '</font>';
										}
								?><br />
							</span>
						<?php
						/***************************  DOCUMENTOS  ************************************/	  
								echo "</td><td>";

							// We Will prepare SQL Query
								$STM = $db->prepare("SELECT * FROM `documentos` 
										WHERE `granja`='$row4[username]'
										");
							// For Executing prepared statement we will use below function
								$STM->execute();
							// we will fetch records like this and use foreach loop to show multiple Results
								$STMrecords = $STM->fetchAll();
								
							foreach($STMrecords as $row)
							{

							  echo "<span class='glyphicon glyphicon-attach' aria-hidden='true'></span> <a href='".$row['14']."'>".$row['1']."</a><br />";  	
							}


								 
								echo "</td>";	
							  
							/*************************** FIN DOCUMENTOS  ************************************/							  
							  
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
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<!-- ****************************** FIN HOME-TAB-PANEL*********************************** -->			
	</div>
  
	  
<!-- ****************************** IFRAME-TAB-PANEL*********************************** -->
	  
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
        <iframe width="380" height="500" src="contactform/form.php" frameborder="0" allowfullscreen></iframe>
      </div>
	  
	  <!-- ****************************** FIN IFRAME-TAB-PANEL*********************************** -->
	  
      <div role="tabpanel" class="tab-pane fade" id="documentos" aria-labelledby="documentos-tab">
        
		<!-- ****************************** DOCUMENTOS-TAB-PANEL*********************************** -->
		
		    <div class="container-fluid">
				<div class="row">

				
				<div class="col-md-12">
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


						<!--<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">-->
						<div class="caption">

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
									<th>ID</th><th>Documento</th><th><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></th>
								</tr>'; 
							echo "</thead>";
							foreach($STMrecords as $row)
							{
								
							 echo"<tr>";
							  
							  echo "<td>".$row['0']."</td>"; 
							  echo "<td><span class='glyphicon glyphicon-attach' aria-hidden='true'></span> <a href='".$row['14']."'>".$row['1']."</a></td>"; 							 
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

		<!-- ****************************** FIN DROPDOWN-1-TAB-PANEL*********************************** -->
		
		
      </div>

</div>
</div>
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/sorttable.js"></script>	
    <script src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/thickbox.js"></script>
	<script type="text/javascript" src="../assets/js/queriesttip.js"></script>
</body>
</html>