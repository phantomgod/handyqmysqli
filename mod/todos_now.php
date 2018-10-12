<?php
/**
* Mod todos los indicadores juntos
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

<h1>

    <?php

echo MIEMPRESA_HOY;
        echo "&nbsp;&nbsp;";
        echo date ( 'Y-m-d' );
        ?>
    ,&nbsp;&nbsp; un año atrás
</h1>
<p></p>
<p></p>
<h2>
    1.
    <?php echo OBJETIVOS; ?>
</h2>
<p></p>

<?php
    /* --------------------Mostramos los objetivos al modo mangui ------------------------------- */

    $sql1 = mysqli_query($mysqli,  "SELECT *
									FROM objetivosdatosgenerales
									WHERE Fecha
									BETWEEN DATE_SUB( NOW( ) , INTERVAL 540
									DAY )
									AND NOW( )" );
    echo '<table class="sortable" id="myTable">';
    echo '<thead>';
		echo '<tr>';
			echo '<th>' . ID .'</th>';
			echo '<th>' . CODIGO . '</th>';
			echo '<th>' . OBJETIVOS_NOMBRE_OBJETIVO . '</th>';
			echo '<th>' . INDICADOR . '</th>';
			echo '<th>' . RESULTADO . '</th>';
			echo '<th style="width:50px">' . FECHA . '</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
    while ( $row1 = mysqli_fetch_row( $sql1 ) ) {
        echo "<tr>";
		 echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=" . $row1 ['0'] . "' target='blank'>" . $row1 ['0'] . "</a></td>";
		 echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=" . $row1 ['0'] . "' target='blank'>" . $row1 ['1'] . "</a></td>";
			echo "<td>";
		?>
			<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row1['0'] ?>"><?php echo $row1['2'] ?></a>
				<span>
				<br />
				<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row1 ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row1 ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#752209;"></i></a>

				<a href="mod/javaformdelete_objetivos.php?var=<?php echo $row1 ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row1 ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#752209;"></i></a>

			<?php
			$sql2 = mysqli_query($mysqli,  "SELECT *
			FROM objetivosseguimiento
			WHERE codigoobjetivo = $row1[1]");
			$data = mysqli_fetch_row($sql2);

			echo '<br /><a href="?seccion=tareas_print&amp;aktion=print&id=' . $row1[1] . '" title="Imprimir tarea ' . $data[0] . '"><i class="fa fa-pencil fa-2x" style="position:absolute; left:135px; top:10px; color:Gold;"></i></a>';
			?>
				<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row1 ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row1 ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:180px; top:10px; color:#752209;"></i></a>
				<br />

				<?php

					echo "<table class=print>
						<tbody>
						<tr>
						<th>".CODIGO."</th>
						<td width='30%'><font class='spanredchico'>$row1[1]</font></td>
						<th>".OBJETIVOS_FUENTE."</th>
						<td width='40%'><font class='spanredchico'>$row1[9]</font></td>
						</tr>
						<tr>
						<th>".OBJETIVOS_NOMBRE_OBJETIVO."</th>
						<td><font class='spanredchico'>$row1[2]</font></td>
						<th>".OBJETIVOS_FRECUENCIA."</th>
						<td><font class='spanredchico'>$row1[10]</font></td>
						</tr>
						<tr>
						<th>".ANO."</th>
						<td><font class='spanredchico'>$row1[3]</font></td>
						<th>".OBJETIVOS_PLAZO."</th>
						<td><font class='spanredchico'>$row1[11]</font></td>
						</tr>
						<tr>
						<th>".OBJETIVOS_ORIGEN."</th>
						<td><font class='spanredchico'>$row1[4]</font></td>
						<th>".OBJETIVOS_EJECUTOR."</th>
						<td><font class='spanredchico'>$row1[12]</font></td>
						</tr>
						<tr>
						<th>".OBJETIVOS_DETECCION."</th>
						<td><font class='spanredchico'>$row1[5]</font></td>
						<th>".OBJETIVOS_PERSEGUIDOR."</th>
						<td><font class='spanredchico'>$row1[13]</font></td>
						</tr>
						<tr>
						<th>".OBJETIVOS_CAUSAS."</th>
						<td><font class='spanredchico'>$row1[6]</font></td>
						<th>V&ordm;B&ordm;:</th>
						<td><font class='spanredchico'>$row1[14]</font></td>
						</tr>
						<tr>
						<th>".OBJETIVOS_RECURSOS."</th>
						<td><font class='spanredchico'>$row1[7]</font></td>
						<th>".RESULTADO."</th>
						<td><font class='spanredchico'>" . strip_tags($row1['15']) . "</font></td>
						</tr>
						<tr>
						<th>".INDICADOR."</th>
						<td><font class='spanredchico'>$row1[8]</font></td>
						<th>".FECHA."</th>
						<td><font class='spanredchico'>$row1[16]</font></td>
						</tr>
						</tbody>
						</table>";

					?>
				</span>
			</div>
		<?php


        echo "</td>";
        echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=" . $row1 ['0'] . "' target='blank'>" . $row1 ['8'] . "</a></td>";
        echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=" . $row1 ['0'] . "' target='blank'>" . $row1 ['15'] . "</a></td>";
        echo "<td style=width:100px><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=" . $row1 ['0'] . "' target='blank'>" . $row1 ['16'] . "</a></td>";
        echo "</tr>";
    }
    echo '</tbody>';
    echo '</table>';

    echo '<br />';
    echo "Objetivos un año atrás";

    /* ----------------------------FIN mostrar objetivos--------------------------------- */
    echo '<p></p>';
    echo '<h2>2. ';
    echo AUDITORIAS;
    echo '</h2>';
    echo '<p></p>';

    // -------------------------------Mostramos las auditorías---------------------------------*/

    $sql = mysqli_query($mysqli,  "SELECT aisgc. * , informeauditoria . *
									FROM informeauditoria, aisgc
									WHERE informeauditoria.ai = aisgc.ai
									AND aisgc.fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 540
									DAY )
									AND NOW( )
									AND informeauditoria.Fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 540
									DAY )
									AND NOW( )
									GROUP BY informeauditoria.ai" );
    echo '<table id="myTable2" class="sortable">';
    echo '<thead>';
    echo ' <tr>';
    echo '<th>' . AUDITORIAS_AUDITORIA . '</th>';
	echo '<th>' . INFORME . '</th>';
	echo '<th>' . FECHA . '</th>';
	echo '<th>' . RESULTADO . '</th>';
    echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

    while ( $row = mysqli_fetch_row( $sql ) ) {
        echo "<tr>";
			echo "<td>";
			?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

					<span>
						<br />
						<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#ff4000;"></i></a>

						<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#ff4000;"></i></a>

						<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#ff4000;"></i></a>
						<?php echo $row ['0']; ?>

						<?php

							echo "<table class='print2'>
								<tr>";
								echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
										<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
										<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
										<th></th>
								</tr>
								<tr>
									<td style width=20%>$row[1]</td>
									<td>$row[2]</td>
									<td colspan=2>$row[3]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[13]</td>
									<td colspan=2>$row[14]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
									<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[15]</td>
									<td colspan=2>$row[16]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[17]</td>
									<td colspan=2>$row[18]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[19]</td>
								</tr>
							</table>";
						?>
						</span>
				</div>
			<?php
			echo "</td>";
			echo "<td>";

			?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['20'] ?>"><?php echo $row['22'] ?></a>

						<span>
						<br />

						<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['20']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['21']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

						<a href="mod/javaformdelete.php?var=<?php echo $row ['20']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['21']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>


						<a href="?seccion=auditorias_print&amp;aktion=print_id&id=<?php echo $row ['20']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AINFORMES_INFORME; echo "&nbsp;"; echo $row ['21']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
						<?php echo $row ['20']; ?>

						<?php

							echo "<table class='print2'>
								<tr>";
								echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
										<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
										<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
										<th></th>
								</tr>
								<tr>
									<td style width=20%>$row[23]</td>
									<td>$row[22]</td>
									<td colspan=2>$row[26]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . AINFORMES_AREA_AUDITADA . "</font></th>
									<th colspan=2><font color='red'>" . DOCUMENTACION . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[24]</td>
									<td colspan=2>$row[25]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . AINFORMES_OBJETO . "</font></th>
									<th><font color='red'>" . RESULTADO . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[27]</td>
									<td colspan=2>$row[28]</td>
								</tr>

							</table>";
						?>
						</span>
				</div>
			<?php
			echo "</td>";
        echo "<td>" . $row ['22'] . "</td>";
        echo "<td>" . $row ['27'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo '<br /><br />';
    echo "Auditorías e informes un año atrás";

    echo '<p></p>';
    echo '<p></p>';

    // -------------------------------------------------------FIN mostrar las auditorías----------------------------------------------------*/

    echo '<p></p>';

    ?>

<h2>
    3.
    <?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>
</h2>
<p></p>

<?php

    /* --------------------------------- HORAS DE FORMACIÓN POR TRABAJADOR-------------------------- */

    /**
     * Change these to your own credentials
     */

    $result = mysqli_query($mysqli,  "SELECT trabajador, SUM( horas ) AS horas
										FROM cursos
										WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 540
										DAY )
										AND NOW( )
										GROUP BY trabajador" );
    if ($result) {

        $labels = array ();
		$labels2 = array ();
        $data = array ();

        while ( $row = mysqli_fetch_assoc( $result ) ) {
            $labels [] = $row ["trabajador"];
			$labels2 [] = $row ["horas"];
            $data [] = $row ["horas"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join ( ", ", $data ) . "]";
        $labels_string = "['" . join ( "', '", $labels ) . "']";
		$labels2_string = "['" . join ( "', '", $labels2 ) . "']";

    } else {
        print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
    }
    ?>

<script src="jscripts/windowopen.js" type="text/javascript"></script>

<!-- Don't forget to update these paths -->

<script src="libraries/RGraph.common.core.js" type="text/javascript"></script>
<script src="libraries/RGraph.bar.js" type="text/javascript"></script>
<script src="libraries/RGraph.line.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.dynamic.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.context.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.tooltips.js" type="text/javascript"></script>
<script src="libraries/RGraph.common.annotate.js" type="text/javascript"></script>

<script type="text/javascript"
    src="https://apis.google.com/js/plusone.js"></script>

<canvas id="cvs1" width="1100px" height="350px">[No canvas
    support]</canvas>
<script type="text/javascript">
        bar1 = new RGraph.Bar('cvs1', <?php print($data_string) ?>);
        bar1.Set('chart.title', 'Total de horas de formación por trabajador');
        bar1.Set('chart.title.color', 'white');
        bar1.Set('chart.annotatable', true);
        bar1.Set('chart.colors', ['yellow']);
        bar1.Set('chart.events.click', myFunc3);
        bar1.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        bar1.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar1.canvas);
                                            RGraph.ClearAnnotations(bar1.canvas);
                                            bar1.Draw();
                                           }
                                 ]
                                ]);
        bar1.Set('chart.background.grid.autofit', true);
        bar1.Set('chart.gutter.left', 35);
        bar1.Set('chart.gutter.right', 5);
        bar1.Set('chart.gutter.bottom', 150);
        bar1.Set('chart.text.angle', 45);
        bar1.Set('chart.text.color', 'white');
        bar1.Set('chart.hmargin', 10);
        bar1.Set('chart.tickmarks', 'endcircle');
        bar1.Set('chart.tooltips', <?php print($labels2_string) ?>);
        bar1.Set('chart.labels', <?php print($labels_string) ?>);
        bar1.Draw();

        /**
        * This is the function that is called when the Pie chart is clicked on
        */
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

<!--<input type="button" value="Actualizar valores" onclick="Abrir_ventana('dbscript.php');">
    <!-- <a href="mod/dbscript.php" target="blank">actualizar</a>-->
<br /><br />
Formación un año atrás
<!----------------------------------------------------------- FIN HORAS DE FORMACIÓN POR TRABAJADOR------------------------>
<p></p>
<p></p>
<h2>
    4.
    <?php echo INDICADORES_INCIDENCIASDEALMACEN; ?>
</h2>
<p></p>

<?php

    /* --------------------------------------- GRÁFICA DE INCIDENCIAS DE ALMACÉN -------------------------------------------------- */

    /**
     * Change these to your own credentials
     */

    $result = mysqli_query($mysqli,  "SELECT COUNT( obsalmac ) AS incidencias, fecha, obsalmac
										 FROM aisgc
										 WHERE obsalmac IS NOT NULL
										 AND fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 840 DAY )
										 AND NOW( )
										 GROUP BY fecha" );
    if ($result) {
        $labels = array ();
        $data = array ();

        while ( $row = mysqli_fetch_assoc( $result ) ) {
            $labels [] = $row ["fecha"];
            $data [] = $row ["incidencias"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join ( ", ", $data ) . "]";
        $labels_string = "['" . join ( "', '", $labels ) . "']";
    } else {
        print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
    }

    ?>

<canvas id="cvs2" width="1100px" height="300px">[No canvas  support]</canvas>
<script type="text/javascript">
        line1 = new RGraph.Line('cvs2', <?php print($data_string) ?>);
        line1.Set('chart.title', 'Incidencias en inspecciones de almacén');
        line1.Set('chart.colors', ['blue']);
        line1.Set('chart.title.yaxis', 'Nº incid');
        line1.Set('chart.title.color', 'white');
        line1.Set('chart.title.xaxis', '');
        line1.Set('chart.annotatable', true);
        line1.Set('chart.events.click', myFunc3);
        line1.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        line1.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line1.canvas);
                                            RGraph.ClearAnnotations(line1.canvas);
                                            line1.Draw();
                                           }
                                 ]
                                ]);
        line1.Set('chart.background.grid.autofit', true);

        /*line1.Set('chart.background.barcolor1', '#f2f2f2');
        line1.Set('chart.background.barcolor2', '#f2f2f2');
        line1.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
        line1.Set('chart.background.grid.autofit.numhlines', 10);
        line1.Set('chart.shadow', true);
        line1.Set('chart.linewidth', 6);
        line1.Set('chart.curvy', 1);
        line1.Set('chart.curvy.factor', 0.25);
        line1.Set('chart.filled', false);
        line1.Set('chart.gutter.left', 50);
        line1.Set('chart.gutter.right', 5);
        line1.Set('chart.gutter.bottom', 100);
        line1.Set('chart.text.angle', 45);
        line1.Set('chart.text.color', 'white');
        line1.Set('chart.hmargin', 10);
        line1.Set('chart.tickmarks', 'endcircle');
        line1.Set('chart.tooltips', <?php print($labels_string) ?>);
        line1.Set('chart.labels', <?php print($labels_string) ?>);
        line1.Set('chart.tooltips.effect', 'contract');
           line1.Draw();

        /**
    * This is the function that is called when the Pie chart is clicked on
    */
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


<!----------------------------------------------------------- FIN GRÁFICA DE INCIDENCIAS DE ALMACÉN------------------------>

<?php
    /* ----------------------------------------Mostramos las incidencias de almacén------------------------------------------ */

    $result = mysqli_query($mysqli,  "SELECT *
             FROM  `aisgc`
             WHERE  `fecha` BETWEEN DATE_SUB( NOW( ) , INTERVAL 540 DAY )
             AND NOW( )
             AND  obsalmac >  ''
             ORDER BY  `aisgc`.`id` ASC" );
    if ($row = mysqli_fetch_array( $result )) {

        echo "<table id='myTable3' class = 'sortable'>";
	    echo "<thead>";
			echo "<tr>";
				echo "<th>" . AUDITORIAS_AUDITORIA . "</th>";
				echo "<th>" . FECHA . "</th>";
				echo "<th>" . INCIDENCIAS . "</th>";
			echo "</tr> ";
	    echo "</thead>";
		echo "<tbody>";

        do {
            echo "<tr>";
            echo "<td>";

					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

								<span>
								<br />
								<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#e53935;"></i></a>

								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#e53935;"></i></a>

								<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#e53935;"></i></a>

								<?php

									echo "<table class=print>
										<tr>";
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[fecha]</td>
											<td>$row[ai]</td>
											<td colspan=2>$row[auditor1]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
											<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[obstrat]</td>
											<td colspan=2>$row[obscal]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
											<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[obsalmac]</td>
											<td colspan=2>$row[obscompras]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
											<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[obsformac]</td>
											<td colspan=2>$row[obsdocum]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[obslegio]</td>
										</tr>
									</table>";
								?>
								</span>
						</div>
					<?php
                    echo "</td>";

            echo "<td>" . $row ["fecha"] . "</td><td>" . $row ["obsalmac"] . "</td></tr> ";
        } while ( $row = mysqli_fetch_array( $result ) );
        echo "</tbody> ";
		echo "</table> ";
    } else {
        echo NOSEHAENCONTRADO;
    }

    echo '<p></p>';
    /* ----------------------------------------------------- FIN mostrar incidencias de almacén--------------------------------------- */

    ?>

<p></p>
<h2>
    5.
    <?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>
</h2>
<p></p>

<!-----------------------------------------------------------GRÁFICA DE INCIDENCIAS DE PROVEEDORES ------------------------>

<?php
    /**
     * Change these to your own credentials
     */

    $result = mysqli_query($mysqli,  "SELECT  *
                  FROM  `incidenciasdeproveedor`
                  WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 540 DAY )
                  AND NOW( )" );
    if ($result) {
        $labels = array ();
		$labels4 = array ();
        $data = array ();

        while ( $row = mysqli_fetch_assoc( $result ) ) {
            $labels [] = $row ["proveedor"];
			$labels4 [] = $row ["afectaa"];
            $data [] = $row ["codigoincidencia"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join ( ", ", $data ) . "]";
        $labels_string = "['" . join ( "', '", $labels ) . "']";
		$labels4_string = "['" . join ( "', '", $labels4 ) . "']";
    } else {
        print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
    }
    ?>


<canvas id="cvs3" width="1100px" height="300px">[No canvas
    support]</canvas>
<script type="text/javascript">
        line2 = new RGraph.Line('cvs3', <?php print($data_string) ?>);
        line2.Set('chart.title', 'Códigos de incidencias de proveedor');
        line2.Set('chart.title.yaxis', 'Código');
        line2.Set('chart.title.color', 'white');
        line2.Set('chart.annotatable', true);
        line2.Set('chart.events.click', myFunc3);
        line2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        line2.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line2.canvas);
                                            RGraph.ClearAnnotations(line2.canvas);
                                            line2.Draw();
                                           }
                                 ]
                                ]);
        line2.Set('chart.background.grid.autofit', true);
        line2.Set('chart.colors', ['#9fff30']);
        line2.Set('chart.background.grid.autofit.numhlines', 10);
        line2.Set('chart.shadow', true);
        line2.Set('chart.linewidth', 6);
        line2.Set('chart.curvy', 1);
        line2.Set('chart.curvy.factor', 0.25);
        line2.Set('chart.filled', false);
        line2.Set('chart.text.angle', 45);
        line2.Set('chart.text.color', 'white');
        line2.Set('chart.gutter.left', 35);
        line2.Set('chart.gutter.right', 5);
        line2.Set('chart.gutter.bottom', 100);
        line2.Set('chart.hmargin', 10);
        line2.Set('chart.tickmarks', 'endcircle');
        line2.Set('chart.tooltips', <?php print($labels4_string) ?>);
        line2.Set('chart.labels', <?php print($labels_string) ?>);
        line2.Set('chart.tooltips.effect', 'contract');
           line2.Draw();

           /**
        * This is the function that is called when the Pie chart is clicked on
        */
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
<br /><br />
Incidencias un año atrás

<p></p>
<p></p>

<!----------------------------------------------------------- FIN GRÁFICA DE INCIDENCIAS DE PROVEEDORES ------------------------>

<?php
    /* --------------------------------------------Mostramos las incidencias de proveedor------------------------------------------ */

    $sql2 = mysqli_query($mysqli,  "SELECT *
             FROM incidenciasdeproveedor
             WHERE  `fecha` BETWEEN DATE_SUB( NOW( ) , INTERVAL 540 DAY )
             AND NOW( )
             ORDER BY fecha ASC " );

    echo '<table class="sortable">';
    echo "<tbody>";
    echo ' <tr>';
    echo '<th>' . PROVEEDORES_PROVEEDOR . '</th><th>' . INCIDENCIA . '</th><th>' . FECHA . '</th></tr>';
    while ( $row = mysqli_fetch_row( $sql2 ) ) {
        echo "<tr>";
        // echo "<th>".$row['0']."</th>";
        echo "<td>" . $row ['1'] . "</td>";
        echo "<td>" . $row ['2'] . "</td>";
        echo "<td>" . $row ['5'] . "</td>";
        echo "</tr>";
    }
    if ($sql2) {

        echo "</tbody>";
        echo "</table><br /><br />";

    } else {

		echo "</tbody>";
        echo "</table><br /><br />";
        echo NOSEHAENCONTRADO; // no rows found
	}

    /* ---------------------------------------------------- FIN mostrar las incidencias de proveedor-------------------------------------- */

    ?>

<p></p>
<h2>
    6.
    <?php echo INDICADORES_NCSPORAREA; ?>
</h2>
<p></p>

<!----------------------------------------------------------- GRÁFICA DE NO CONFORMIDADES POR ÁREA ------------------------>

<?php

    $result = mysqli_query($mysqli,  "SELECT afectaa, COUNT( * ) AS cantidad
										  FROM hojasdemejora
										  WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 370 DAY )
										  AND NOW( )
										  GROUP BY afectaa" );
    if ($result) {

        $labels = array ();
		$labels3 = array ();
        $data = array ();

        while ( $row = mysqli_fetch_assoc( $result ) ) {
            $labels [] = $row ["afectaa"];
			$labels3 [] = $row ["cantidad"];
            $data [] = $row ["cantidad"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join ( ", ", $data ) . "]";
        $labels_string = "['" . join ( "', '", $labels ) . "']";
		$labels3_string = "['" . join ( "', '", $labels3 ) . "']";
    } else {
        print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
    }
    ?>


<canvas id="cvs4" width="1100" height="300">[No canvas
    support]</canvas>
<script type="text/javascript">
        bar2 = new RGraph.Bar('cvs4', <?php print($data_string) ?>);
        bar2.Set('chart.title', 'No conformidades por área');
        bar2.Set('chart.title.color', 'white');
        bar2.Set('chart.title.yaxis', 'Nº de NC´s');
        bar2.Set('chart.annotatable', true);
        bar2.Set('chart.colors', ['purple']);
        bar2.Set('chart.events.click', myFunc3);
        bar2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        bar2.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar2.canvas);
                                            RGraph.ClearAnnotations(bar2.canvas);
                                            bar2.Draw();
                                           }
                                 ]
                                ]);
        bar2.Set('chart.background.grid.autofit', true);
        bar2.Set('chart.gutter.left', 45);
        bar2.Set('chart.gutter.right', 5);
        bar2.Set('chart.gutter.bottom', 150);
        bar2.Set('chart.text.angle', 45);
        bar2.Set('chart.text.color', 'white');
        bar2.Set('chart.hmargin', 10);
        bar2.Set('chart.tickmarks', 'endcircle');
        bar2.Set('chart.tooltips', <?php print($labels3_string) ?>);
        bar2.Set('chart.labels', <?php print($labels_string) ?>);
        bar2.Draw();

        /**
        * This is the function that is called when the Pie chart is clicked on
        */
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
	<br /><br />

<?php
    echo "No conformidades un año atrás";
    echo '<p></p>';
    echo '<p></p>';
    // -------------------------------------------------Mostramos las no conformidades---------------------------------*/

    $sql = mysqli_query($mysqli,  "SELECT hojas. * , audit. *
									 FROM hojasdemejora AS hojas
									 JOIN informeauditoria AS audit ON hojas.ai = audit.ai
									 WHERE hojas.fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 400 DAY )
									 AND NOW( )
									 GROUP BY hojas.id DESC
									 ORDER BY  `audit`.`id` ASC" );

    echo "<table class='sortable' id='myTable4'>";
    echo "<thead>";
		echo "<tr>";
			echo "<th>" . FECHA . "</th>";
			echo "<th>" . NC . "</th>";
			echo "<th>" . INFORME . "</th>";
			echo "<th>" . DESCRIPCION . "</th>";
			echo "<th>" . FECHACIERRE . "</th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
    while ( $row = mysqli_fetch_row( $sql ) ) {
        echo "<tr>";
        echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "' target='blank'>" . $row ['5'] . "</a></td>";
        echo "<td>";

        			?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

								<span>
								<br />
								<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
								<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-plus fa-2x" style="position:absolute; left:10px; top:10px; color:#e53935;"></i></a><!--</div>-->

								<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#e53935;"></i></a>

								<a href="mod/javaformdelete.php" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#e53935;"></i></a>

								<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#e53935;"></i></a>


								<?php

									echo "<table class=print>
											<tbody>
											<tr>
											<th>" . NCS_NUMERO . " </th><td>$row[2]</td>
											</tr>
											<tr>
												<th>" . DESCRIPCION . " </th><td> <font color='red'>" . strip_tags($row['4'] . '<font>, <b>') . "</font></td>
											</tr>
											<tr>
												<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th><td>$row[1]</td>
											</tr>
											<tr>
												<th>" . DOCUMENTACION . "</th><td>$row[6]</td>
											</tr>
											<tr>
												<th>" . NCS_ABIERTOPOR . "</th><td>$row[7]</td>
											</tr>
											<tr>
												<th>" . NCS_AFECTAA . "</th><td>$row[8]</td>
											</tr>
											<tr>
												<th>" . NCS_CAUSAS . "</th><td>" . strip_tags($row['9'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_ACCIONES . "</th><td>" . strip_tags($row['10'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_EFICACIA . "</th><td>" . strip_tags($row['13'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_PLAZO . "</th><td>$row[11]</td>
											</tr>
											<tr>
												<th>" . NCS_CIERRE_PARCIAL . "</th><td>" . strip_tags($row['12'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . FECHA . "</th><td>$row[5]</td>
											</tr>
											<tr>
												<th>" . NCS_DESVIACION . "</th><td>$row[15]</td>
											</tr>
											<tr>
												<th>" . FECHACIERRE . "</th><td>$row[14]</td>
											</tr>
											</tbody>
											<tr> </table>";
								?>
								</span>
						</div>
					<?php
				echo "</td>";
        		echo "<td>";

					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['17'] ?>"><?php echo $row['1'] ?></a>

								<span>
								<br />
								<?php echo $row ['17']; ?>

								<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['17']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#e53935;"></i></a>

								<a href="mod/javaformdelete_informes.php?var=<?php echo $row ['17']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#e53935;"></i></a>


								<a href="?seccion=auditorias_print&amp;aktion=print_id&id=<?php echo $row ['17']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#e53935;"></i></a>

								<!--<a href="?seccion=buscancs"><i class="fa fa-search fa-2x" style="position:absolute; left:250px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=ncsporarea"><i class="fa fa-signal fa-2x" style="position:absolute; left:290px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart fa-2x" style="position:absolute; left:330px; top:10px; color:White;"></i></a>-->

								<?php

									echo "<table class=print>
										<tr>";
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[19]</td>
											<td>$row[18]</td>
											<td colspan=2>$row[22]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_AREA_AUDITADA . "</font></th>
											<th colspan=2><font color='red'>" . DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[20]</td>
											<td colspan=2>$row[21]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_OBJETO . "</font></th>
											<th><font color='red'>" . RESULTADO . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[23]</td>
											<td colspan=2>$row[24]</td>
										</tr>

									</table>";
								?>
								</span>
						</div>
					<?php
                    echo "</td>";

        echo "<td style='width: 650px;'><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "' target='blank'>" . strip_tags($row ['4']) . "</a></td>";
		echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=" . $row ['0'] . "' target='blank'>" . $row ['14'] . "</a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    echo '<br /><br />';
    echo "No conformidades un año atrás";
    echo '<p></p>';
    echo '<p></p>';
    // ------------------------------------------------------FIN mostrar las no conformidades----------------------------------------------------------*/

    ?>


<!----------------------------------------------------------- FIN NO CONFORMIDADES POR ÁREA ------------------------>


<p></p>
<h2>
    7.
    <?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>
</h2>
<p></p>


<!----------------------------------------------------------- DESVIACIONES DE FECHA DE CIERRE DE LAS AACC ----------------------------->


<?php

    $result = mysqli_query($mysqli,  "SELECT *
        FROM hojasdemejora
        WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 540 DAY )
        AND NOW( )" );

    if ($result) {

        $labels = array ();
		$labels5 = array ();
        $data = array ();

        while ( $row = mysqli_fetch_assoc( $result ) ) {
            $labels [] = $row ["numhoja"];
			$labels5 [] = $row ["desviacion"];
            $data [] = $row ["desviacion"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join ( ", ", $data ) . "]";
        $labels_string = "['" . join ( "', '", $labels ) . "']";
		$labels5_string = "['" . join ( "', '", $labels5 ) . "']";
    } else {
        print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
    }

    ?>


<canvas id="cvs5" width="1100" height="250">[No canvas
    support]</canvas>
<script type="text/javascript">
        line3 = new RGraph.Line('cvs5', <?php print($data_string) ?>);
        line3.Set('chart.title', 'Desviación plazos cierre ncs');
        line3.Set('chart.title.color', 'white');
        line3.Set('chart.title.yaxis', 'Nº de días');
        line3.Set('chart.annotatable', true);
        line3.Set('chart.events.click', myFunc3);
        line3.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        line3.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line3.canvas);
                                            RGraph.ClearAnnotations(line3.canvas);
                                            line3.Draw();
                                           }
                                 ]
                                ]);
        line3.Set('chart.background.grid.autofit', true);
        /*line3.Set('chart.background.barcolor1', '#f2f2f2');
        line3.Set('chart.background.barcolor2', '#f2f2f2');*/
        line3.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        line3.Set('chart.background.grid.autofit.numhlines', 10);
        line3.Set('chart.colors', ['red']);
        line3.Set('chart.shadow', true);
        line3.Set('chart.linewidth', 6);
        line3.Set('chart.curvy', 1);
        line3.Set('chart.curvy.factor', 0.25);
        line3.Set('chart.filled', false);
        line3.Set('chart.gutter.left', 35);
        line3.Set('chart.gutter.right', 5);
        line3.Set('chart.gutter.bottom', 100);
        line3.Set('chart.hmargin', 10);
        line3.Set('chart.text.angle', 45);
        line3.Set('chart.text.color', 'white');
        line3.Set('chart.tickmarks', 'endcircle');
        line3.Set('chart.tooltips', <?php print($labels5_string) ?>);
        line3.Set('chart.labels', <?php print($labels_string) ?>);
        line3.Set('chart.tooltips.effect', 'contract');
        line3.Draw();

           /**
        * This is the function that is called when the Pie chart is clicked on
        */
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
	<br /><br />

<?php
    echo "Gráfica un año atrás";
    echo '<p></p>';
    echo '<p></p>';

    ?>


<!----------------------------------------------------------- FIN DESVIACIONES DE FECHA DE CIERRE DE LAS AACC ------------------------->


<p></p>
<h2>
    8.
    <?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>
</h2>
<p></p>


<!----------------------------------------------------------- INCIDENCIAS EN LAS INSPECCIONES DE SERVICIO ------------------------->


<?php

    $result = mysqli_query($mysqli,  "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia
             FROM inspecciones
             WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL 540 DAY )
             AND NOW( )
             GROUP BY codigo_incidencia" );
    if ($result) {
        $labels = array ();
        $data = array ();

        while ( $row = mysqli_fetch_assoc( $result ) ) {
            $labels [] = $row ["codigo_incidencia"];
            $data [] = $row ["numincidencias"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join ( ", ", $data ) . "]";
        $labels_string = "['" . join ( "', '", $labels ) . "']";
    } else {

        print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
    }

    ?>

<canvas id="cvs6" width="1100" height="250">[No canvas
    support]</canvas>
<script type="text/javascript">
        line4 = new RGraph.Line('cvs6', <?php print($data_string) ?>);
        line4.Set('chart.title', 'Incidencias en inspecciones de servicio');
        line4.Set('chart.title.yaxis', 'Nº de incidencias');
        line4.Set('chart.title.xaxis', 'Código de la incidencia');
        line4.Set('chart.title.color', 'white');
        line4.Set('chart.annotatable', true);
        line4.Set('chart.events.click', myFunc3);
        line4.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        line4.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line4.canvas);
                                            RGraph.ClearAnnotations(line4.canvas);
                                            line4.Draw();
                                           }
                                 ]
                                ]);
        line4.Set('chart.background.grid.autofit', true);

        /*line4.Set('chart.background.barcolor1', '#f2f2f2');
        line4.Set('chart.background.barcolor2', '#f2f2f2'); */
        line4.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        line4.Set('chart.background.grid.autofit.numhlines', 10);
        line4.Set('chart.colors', ['purple']);
        line4.Set('chart.shadow', true);
        line4.Set('chart.linewidth', 6);
        line4.Set('chart.curvy', 1);
        line4.Set('chart.curvy.factor', 0.25);
        line4.Set('chart.filled', false);
        line4.Set('chart.gutter.left', 35);
        line4.Set('chart.gutter.right', 5);
        line4.Set('chart.gutter.bottom', 50);
        line4.Set('chart.text.color', 'white');
        line4.Set('chart.hmargin', 10);
        line4.Set('chart.tickmarks', 'endcircle');
        line4.Set('chart.tooltips', <?php print($labels_string) ?>);
        line4.Set('chart.labels', <?php print($labels_string) ?>);
        line4.Set('chart.tooltips.effect', 'contract');
        line4.Draw();

        /**
    * This is the function that is called when the Pie chart is clicked on
    */
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


<br /><br />
Gráfica un año atrás

<!----------------------------------------------------------- FIN INCIDENCIAS EN LAS INSPECCIONES DE SERVICIO ------------------------->
<p></p>
<p></p>
<h2>
    9.
    <?php echo INDICADORES_VALORACIONGLOBALCLIENTES; ?>
</h2>
<p></p>

       <!---------------GRÁFICOS DE VALORACIÓN GLOBAL DE CLIENTES-------------------------->


				<STYLE type="text/css">
				iframe[seamless]{
					background-color: transparent;
					border: 0px none transparent;
					padding: 0px;
					overflow: hidden;
				}
				</style>

				<iframe src="mod/valoracionglobalclientes_revsistema.php" height="1000" style="width:110%"  seamless ></iframe>
		<!--------------- FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES-------------------------->


	<script>
	$(document).ready(function() {
		$('#myTable').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
		$('#myTable2').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
		$('#myTable3').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
		$('#myTable4').DataTable( {
			"order": [[ 0, "desc" ]]
		} );
	} );
	</script>
