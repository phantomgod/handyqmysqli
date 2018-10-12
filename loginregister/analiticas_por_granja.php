<?php 

/** 
* Mod COMBINAR analíticas por cada granja 
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

<meta charset="utf-8"/>

    <!-- Le styles -->
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/docs.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="../assets/css/bootstrap-datetimepicker.min.css">

    <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>


<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../templates/printstyle.css" media="print" />

 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
	
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="./index.php">Home</a>
              </li>  
            </ul>			
          </div>  
		  <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="./logout.php">Logout</a>
              </li>  
            </ul>
          </div>
          <div class="nav-collapse collapse" style="align:text-right">
            <ul class="nav">
              <!-- HeadSectionDl BEGIN 
				<li class="active">
					<div onMouseOver="showdiv(event,'< ?php echo LOGUEARSE_TRADUCIR; ?>');"
						onMouseOut="hiddenDiv()" style='display: table;  padding: 10px 10px 10px 0px;'>
							<a href="index.php?lang=en"><img src="../images/en.png" /></a>
							</a>
					</div>
				</li>
				<!--<li class="active">
					<div onMouseOver="showdiv(event,'< ?php echo LOGUEARSE_TRADUCIR; ?>');"
						onMouseOut="hiddenDiv()" style='display: table;  padding: 10px 10px 10px 0px;'>
							<a href="index.php?lang=de"><img src="../images/de.png" /></a>
							</a>
					</div>
				</li>
				<li class="active">
					<div onMouseOver="showdiv(event,'< ?php echo LOGUEARSE_TRADUCIR; ?>');"
						onMouseOut="hiddenDiv()" style='display: table;  padding: 10px 10px 10px 0px;'>
							<a href="index.php?lang=es"><img src="../images/es.png" /></a>
							</a>
					</div>
				</li>
				<li class="active">
					    <div id="print">
							<div onMouseOver="showdiv(event,'< ?php echo IMPRIMIR_PAPEL; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="javascript:imprimir()"><i class="fa fa-print fa-2x" style="color: rgba(255, 255, 255, 0.68);" title="Imprimir"></i>
								</a>
							</div>
						</div>
				</li>-->
            </ul>			
          </div>	
        </div>
      </div>
    </div>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="container-fluid">
				<?php
					require '../lang/spanish.lang.php';
					require_once '../includes/mysqli.php';
					require_once '../includes/configPDO.php';
					//header('Content-Type: text/html;charset=UTF8');

					 /** Aktionen **/
						$aktion = ''; 
					if (isset($_GET['aktion'])) {
							$aktion = $_GET['aktion'];
					} 
						 
					if ($aktion == "") { 
						 echo 'Admin Area'; 
					} 
						 
					if ($aktion == "print") { 
						 $sql = mysqli_query($mysqli, "SELECT * FROM granjas ORDER BY Id ASC");   
						
						   echo '<br />';     
						echo '<table class="sortable">'; 
							echo '<caption>'; 
							echo LISTA_GRANJAS; 
							echo '</caption>'; 
								echo '<tbody>';     
									echo '<tr>'; 
									echo '<th>Id</th>'; 
									echo '<th>'; 
									echo GRANJA; 
									echo '</th>'; 
									echo '<th>'; 
									echo CLIENTE; 
									echo '</th>';
									echo '<th>'; 
									echo EDITAR; 
									echo '</th>';				
									echo '<th style width="5%"><a href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[id]" title="'.EDITAR_GRANJA.'">';
									echo '<i class="fa fa-edit" style="color:Saddlebrown;"></i></a></th>';

									
						while ($row = mysqli_fetch_row($sql)) { 
										echo "<tr>";   
										echo "<td>".$row['0']."</td>";                                         
										echo "<td>".$row['1']."</td>";
										echo "<td>".$row['2']."</td>";
										echo "<td>"; 
										echo "<a href='granjas_admin.php?&aktion=change_id&amp;id=" . $row['0'] . "' alt='".EDITAR_GRANJA." - $row[1]' title='".EDITAR_GRANJA." - $row[1]'>"; 
										echo "<i class='fa fa-pencil' style='color:Saddlebrown;'></i></a>"; 
										echo "</td>"; 
										echo "<td>"; 
										echo "<a href='analiticas_por_granja.php?&aktion=print_id&amp;id=".$row['1']."' alt='".VER_ANALITICAS." ".DE." - $row[1]' title='Ver analíticas de - $row[1]'>"; 
										echo "<i class='fa fa-retweet' style='color:Gold;'></i></a>"; 
										echo "</td>";                    
										echo "</tr>"; 
						} 
								  echo '</tbody>';       
						  echo "</table>"; 
					} 
					if ($aktion == "print_id") { 
						 
							 
							$_pagi_sql = "SELECT *  
									FROM `analiticas`  
									WHERE `username` LIKE '$_GET[id]' ORDER BY `id` DESC"; 
						 
						$sql = mysqli_query($mysqli, "SELECT * FROM analiticas WHERE `username` LIKE '$_GET[id]'"); 
						$data = mysqli_fetch_row($sql); 
						 
						//cantidad de resultados por página (opcional, por defecto 20) 
						$_pagi_cuantos = 40; 
						//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
						include "../includes/paginator.inc.php"; 
						 
						 
						if (mysqli_num_rows($sql) > 0) { 
						
						
								echo '<div class="container">';
									echo '<div class="span4">';
										echo '<div class="row">';
											echo '<div class="col-col md-4">';
												echo '<h3>' . ASIGNADO_A_LA_GRANJA . ': ' . $data[1] . '</h3> ' . PINCHE_PARA_IMPRIMIR . '';
											echo '</div>';
										echo '</div>';
									echo '</div>';
									echo '<div class="span4">';
										echo '<div class="row">';
											echo '<div class="col-col md-4">';
												echo '<img alt="' . DOCUMENTOS . '" width="120px" height="133px" src="../images/documento.png" style="display: block;">';
											echo '</div>';
										echo '</div>';
									echo '</div>';
									echo '<div class="span4">';
										echo '<div class="row">';
											echo '<div class="col-col md-4">';
												echo '<a class="brand" href="http://www.miproma.es/" target="_blank"><img src="../assets/img/logo.png" width="200px" align="right"></a>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
								
								
								echo '<div class="container">';
										echo '<div class="row">';
												   echo '<table class="sortable">'; 
															   
													   echo '<tbody>'; 
														echo '<tr>';          
															echo "<th>" . ANALITICA . " Id:</th>"; 
															echo "<th>" . GRANJA . "</th>";
															echo "<th>" . FECHA_ENSAYO . "</th>";
															echo "<th><i class='fa fa-print' style='color:Darkgoldenrod;' title='" . IMPRIMIR . "'></i></th>";
														echo "</tr>"; 
						 
									//Leemos y escribimos los registros de la página actual 
										while ($row = mysqli_fetch_array($_pagi_result)) { 
											echo "<tr>"; 
											echo "<td><a href='analiticas_print2.php?&amp;aktion=print_id&amp;id=".$row['0']."' alt='" . IMPRIMIR_LA_ANALITICA . ": ".$row['0']."' title='" . IMPRIMIR_LA_ANALITICA . ": ".$row['0']."'>".$row['0']."</a></td>"; 
											echo "<td>".$row[1]."</td>";  
											echo "<td>".$row[11]."</td>";
											echo "<td><a href='analiticas_print2.php?&amp;aktion=print_id&amp;id=".$row['0']."' alt='" . IMPRIMIR_LA_ANALITICA . ": ".$row['0']."' title='" . IMPRIMIR_LA_ANALITICA . ": ".$row['0']."'><i class='fa fa-print' style='color:Darkgoldenrod;'></i></td>";
											echo "</tr>"; 
											echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
									 
										} 
										echo "</tbody>"; 
										echo "</table>"; 
							
							//Incluimos la barra de navegación 
						echo"<p>".$_pagi_navegacion."</p>"; 							
										echo '</div>';
									echo '</div>';
							
						} else {
						echo "No hay analíticas";
						}
						

								 
					} 

					?>
			</div>
		</div>
	</div>
</div>