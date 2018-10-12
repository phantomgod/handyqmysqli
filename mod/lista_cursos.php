<?php
/**
* Mod LISTAR los cursos de formación
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
<form action="?seccion=lista_cursos" method="POST">

<?php


$trabajador = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';


$sqlx = "SELECT * FROM cursos WHERE trabajador =  '$trabajador'";
$resultx = mysqli_query($mysqli, $sqlx);


            echo '<select name="seleccione">';
                echo '<option>'.SELECCIONAR_TRABAJADOR,'</option>';
                 $sql = "SELECT *
                        FROM  `members`
                        ORDER BY  `members`.`username` ASC ";
                 $sql = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($sql)) {
                echo '<option value="'.$row['username'].'">'.$row['actividad'].' - '.$row['username'].'</option>';

}
            echo '</select></td>';

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-info"><?php echo CONSULTAR; ?></button>
</form>


<?php



//Leemos y escribimos los registros de la página actual
     if(mysqli_num_rows($resultx)) {

/*------------------------------Esto es para el PCHART-----------------*/

       $sql = "SELECT *
              FROM  `members`
              WHERE `username` =  '$trabajador'
              ";
       $sql = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_assoc($sql)) {

      ?>
      <div style="height: 400px;">

          <img style="user-select: none; cursor: zoom-in;" src="<?php echo "$row[userpage]"; ?>">

      </div>
    <?php

/*------------------------------Esto es para el PCHART-----------------*/
  }


          echo '<br /><br /><br />';

				  //--------------------------contamos los registros

			$result = mysqli_query($mysqli, "SELECT COUNT(*) FROM cursos WHERE trabajador =  '$trabajador'");

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

			$result1 = mysqli_query($mysqli, "SELECT * FROM ( SELECT trabajador, SUM(horas) AS horas FROM cursos WHERE fecha BETWEEN NOW() - INTERVAL 730 DAY AND NOW() GROUP BY trabajador) g WHERE trabajador= '$trabajador'");

			if($row1 = mysqli_fetch_array($result1))
			{}
				if ($row1['horas'] >= 20) {


				echo '<div align="right">Nº de horas en los últimos 730 días: ';
				echo $row1['1'];
				echo '</div>';


					echo '<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo  CURSOS_DEL_TRABAJADOR;
					echo '<span class="documenttitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo $trabajador;
					echo '</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Horas de formación últimos 3 años: ' . $row1['1'] . ' ';
				} elseif ($row1['horas'] < 20) {
					echo '<span class="documenttitle">';
					echo $trabajador;
					echo ' no ha sumado horas de formación (' . $row1['horas'] . ' horas) en los últimos dos años</span>';
				}



				 $sql2 = mysqli_query($mysqli, "SELECT * FROM members
													WHERE `username` =  '$trabajador'
													AND active='Yes'
													ORDER BY username ASC");

				 $data = mysqli_fetch_row($sql2);
				echo '<div id="skeleton"><img src="'.$data[10].'" width="50"></a></div>';
				echo '<br /><br />';

		echo '<table id="myTable" class="sortable">';
		echo '<thead>';
        echo "<tr>";
        echo "<th>Id:</th>";
        echo "<th>" . TRABAJADOR . "</th>";
        echo "<th>" . CURSO . "</th>";
        echo "<th>" . LUGAR . "</th>";
        echo "<th>" . FECHA . "</th>";
        echo "<th>" . HORAS . "</th>";
        echo "<th>Validaci&oacute;n:</th>";
		echo "<th>" . COMENTARIOS . "</th>";
         echo '<th>﻿<a href="#" alt="'.EDITAR.'" title="'.EDITAR.'" /><i class="fa fa-edit" style="color: #400000;"></i></th>';
        echo "</tr>";
		echo "</thead>";

    while ($rowx = mysqli_fetch_array($resultx)) {
		 if (! defined('id')) define('id', 'id');
					echo "<tr>";
						echo "<td>$rowx[id]</td>";
						echo "<td>$rowx[trabajador]</td>";
						echo "<td>$rowx[curso]</td>";
						echo "<td>$rowx[lugar]</td>";
						echo "<td>$rowx[fecha]</td>";
						echo "<td>$rowx[horas]</td>";
						echo "<td>$rowx[validacion]</td>";
						echo "<td>$rowx[comentarios]</td>";
						echo '<td><a href="?seccion=cursos_admin&amp;aktion=change_id&amp;id='.$rowx[id].'" alt="'.EDITAR.' - '.$rowx['id'].'" title="'.EDITAR.' - '.$rowx['id'].'" /><i class="fa fa-pencil" style="color:#400000;"></i></a></td>';
					echo "</tr>";


		}

	}  if(mysqli_num_rows($resultx) == 0) {
			echo NOSEHAENCONTRADO;
		}

 				echo "</tbody>";
			echo "</table>";


      /*------------Esto es para el div de PCHART------------

      $trabajador = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';


      $sqlx = "SELECT * FROM cursos WHERE trabajador =  '$trabajador'";
      $resultx = mysqli_query($mysqli, $sqlx);

      $sql3 = mysqli_query($mysqli, "SELECT * FROM members
                       WHERE `username` =  '$trabajador'
                       AND active='Yes'");

      $sql3 = mysqli_query($mysqli, $sql3);

      $row3 = mysqli_fetch_assoc($sql3);

      /*------------Esto es para el div de PCHART------------*/




			$sql2 = mysqli_query($mysqli, "SELECT * FROM trabajadores WHERE `trabajador` =  '$trabajador'");
			$data2 = mysqli_fetch_row($sql2);



?>
<!-- ****************************** GRÁFICAS-TRABAJADOR*********************************** -->

		    	<div class="col-md-12">
					<div class="caption">
					<?php
											 /**
					* Change these to your own credentials */


					 //$from_date = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';
					//$to_date = (isset ($_POST ['seleccione2'])) ? $_POST ['seleccione2'] : '';

					 $result = mysqli_query($mysqli, "SELECT fecha,horas
                                  FROM cursos
                                  WHERE trabajador= 'ANTONIO GONZÁLEZ ROMERO'
                                  ORDER BY fecha"
                                );


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
                textColor: 'white',
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
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
