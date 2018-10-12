<?php 
/** 
* Mod cursos por trabajador
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

<?php echo TRABAJADOR_HA_HECHO; ?> 
<br /><br /> 
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
    $sql = mysqli_query($mysqli, 
        "SELECT DISTINCT cursos.trabajador, members.actividad, members.memimg 
        FROM  `cursos` ,  `members`  
        WHERE members.username = cursos.trabajador"
    ); 
        echo '<table id="myTable" class="sortable">'; 
         echo "<caption>"; 
            //echo FORMACION_CURSOS_REALIZADOS_TRABAJADOR; 
         echo "</caption>";   
           echo '<thead>'; 
              echo '<tr><!--<th>Id</th>--><th>'.TRABAJADOR.'</th>';
			  echo '<th>'.ACTIVIDAD.'</th>';  
			  echo '<th>'.IMAGEN.'</th>';
			  echo '<th><a href="#" title="' . IMPRIMIR_CURSO . '"><i class="fa fa-retweet" style="color:#400000;"></i></th>'; 
			  echo '</tr></thead><tbody>';
			  
    while ($row = mysqli_fetch_row($sql)) { 
                echo "<tr>";   
                //echo "<td>".$row['0']."</td>"; 
                echo "<td>".$row['0']."</td>"; 
                echo "<td><a href='?seccion=cursos_por_trabajador&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; 
                echo "<td>"; 
                 
                ?> 
                <a href="mod/ajaximage/index.php" target="popup" onClick="window.open(this.href, this.target, 'width=500,height=520'); return false;"><img src="<?php echo $row['2'] ?>" border="0" width="100px" alt="Pinche para subir una foto"></a> 
                                 
                <?php 
				
                echo "</td>";
				echo "<td><a href='?seccion=cursos_por_trabajador&amp;aktion=print_id&amp;id=".$row['0']."' title='" . IMPRIMIR_CURSO . " de ".$row['0']."'><i class='fa fa-retweet' style='color:#400000;'></i></a></td>";
                echo "</tr>"; 
    } 
           echo '</tbody>'; 
        echo "</table>"; 
} 
if ($aktion == "print_id") { 

//--------------------------contamos los registros
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT COUNT(*) AS count from ( SELECT *  
									FROM `cursos`  
									WHERE `trabajador` LIKE '$_GET[id]' ) m");

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

if($result === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

//--------------------------fin contar registros
     
    $_pagi_sql = "SELECT *  
                    FROM `cursos`  
                    WHERE `trabajador` LIKE '$_GET[id]'";                      
    
     $sql = mysqli_query($mysqli, "SELECT * FROM members WHERE `username` LIKE '$_GET[id]'"); 
     $data = mysqli_fetch_row($sql);     
 
    //cantidad de resultados por página (opcional, por defecto 20) 
    $_pagi_cuantos = 20; 
    //Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
    include "includes/paginator.inc.php"; 
 
        echo '<img src="'.$data[10].'" style="width:100px; vertical-align:middle">&nbsp;&nbsp;&nbsp;&nbsp;'.FORMACION_CURSOS_REALIZADOS_TRABAJADOR.':<span class="documenttitle">&nbsp;&nbsp;'.$data[1].'</span>'; 
        
		echo "<div align='center'>";	
		echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward" style="color:Black;"></i></a></div>';
		
        echo '<table class="sortable">';      
        echo '<caption></caption>'; 
          
           echo '<tbody>'; 
            echo '<tr>'; 
            //echo '<th>Id:</th>'; 
            //echo '<th>'.TRABAJADOR_TRABAJADOR.':</th>'; 
            echo '<th>'.CURSO.':</th>'; 
            echo '<th>'.HORAS.':</th>'; 
            echo '<th>'.FECHA.':</th>'; 
            echo '</tr>'; 
             
            //Leemos y escribimos los registros de la página actual 
    while ($row = mysqli_fetch_array($_pagi_result)) { 
                echo "<tr>"; 
                //echo "<td>".$row[0]."</td>"; 
                //echo "<td>".$row[1]."</td>"; 
                echo "<td>".$row[2]."</td>"; 
                echo "<td>".$row[5]."</td>"; 
                echo "<td>".$row[4]."</td>"; 
                echo "</tr>"; 
             
                 
    } 
} 
//Incluimos la barra de navegación 
            echo "</tbody>"; 
        echo "</table>"; 
//echo "<br />$_pagi_navegacion</br>"; 

		echo "<div align='center'>";	
		echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward" style="color:Black;"></i></a></div>';
 
?>

<!-- ****************************** GRÁFICAS-TAB-PANEL*********************************** -->	  
	  

		    	<div class="col-md-12">
					<div class="caption">	
					<?php
											 /**
					* Change these to your own credentials */


					 //$from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';	
					//$to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';
					$_GET['id'] = (isset ( $_GET['id'] )) ? $_GET['id'] : '';
					 $result = mysqli_query($mysqli, "SELECT fecha,horas
														FROM cursos
														WHERE trabajador= '$_GET[id]'");


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

				<script src="jscripts/windowopen.js"></script>

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
		<!-- ****************************** FIN GRÁFICAS-TAB-PANEL*********************************** -->