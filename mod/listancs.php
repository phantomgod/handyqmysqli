<?php
/**
* Mod LISTAR las NCS
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
	$sql = "SELECT h.*, c.id id1, c.ai ai1, c.auditor1, c.obstrat, c.obscal, c.obsalmac, c.obscompras, c.obsformac, c.obsdocum, c.obslegio, c.nombreauditoria
				FROM hojasdemejora h
				LEFT JOIN aisgc c ON h.ai = c.ai
                GROUP BY h.id
				ORDER BY h.id DESC";
	$result = mysqli_query($mysqli, $sql);


 /*echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=ajaxbootpagbasic" class="btn btn-success">';
 echo PAGINAR;
 echo '</a>';*/
 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
  echo '&nbsp;&nbsp;&nbsp;';
 echo NCS_ADVERTICE_LISTANCS;
     echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=listancs_selectarea" class="btn btn-info">' . FILTRAR_PORAREAFECTADA . '</a>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=listancs_selectarea_ai_fecha" class="btn btn-warning">' . FILTRAR_POROR . '</a>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=listancs_selectarea_and_ai" class="btn btn-danger">' . FILTRAR_PORAND . '</a>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		?>
		 <button class="btn btn-success"><a
		 href="ajaxbootpagbasic/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
		 title="Paginar no conformidades"
		class="thickbox"
		title="Consultar no conformidades">
		<?php echo PAGINAR; ?></a></button>

		 <?php

	echo '<div class="yellow">';
        echo NCS_LISTA;
        echo '&emsp;&emsp;&emsp;<a href="pdfs/ncspdf.php"><img src="images/pdf.png" /></a>';
		echo '</div>';

echo '<br /><br /><table id="myTable" class="sortable">';

			echo '<thead>';
			echo '<tr>';
			echo '<th>' . ID . '</th>';
			echo '<th style width="3%">' .AUDITORIAS_NUMERO_AUDITORIA . '</th>';
			echo '<th>' .AUDITORIAS_AUDITOR . '</th>';
			echo '<th style width="10%">';
			echo NCS_NUMERO;
			echo '</th>';
			echo '<th>';
			echo DESCRIPCION;
			echo '</th>';
			echo '<th>';
			echo FECHA;
			echo '</th>';
			echo '<th>';
			echo NCS_ACCIONES;
			echo '</th>';
			echo '<th style width=10%>';
			echo FECHACIERRE;
			echo '</th>';
?>

	<th><a href="#" title="<?php echo NCS_EDITAR_NC; ?>" /><i class="fa fa-edit " style="color:#ff0000;"></i></a></th>
    <th><a href="#" title="<?php echo NCS_IMPRIMIR; ?>" /><i class="fa fa-print " style="color:#ff0000;"></i></a></th>
<?php
//echo '<th><b>Visible:</b></th>';
	echo '</tr>';
	echo '</thead><tbody>';
//Leemos y escribimos los registros de la página actual

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td style width=5%>"; echo "$row[id]"; echo "</td>";

    echo "<td>";
			?>
			<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['17'] ?>"><?php echo $row['ai'] ?></a>
					<span>
					<?php echo "<table class=print>
								<tr>";
							echo "<th>"; echo FECHA; echo "</th>
									<th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo "</th>
									<th>"; echo AUDITORIAS_AUDITOR; echo"</th>
									<th></th>
								</tr>";
							echo "<tr>
									<td><font color='black'>"; echo "$row[fecha]"; echo "</font></td>
									<td><font color='black'>"; echo "$row[ai]"; echo "</font></td>
									<td colspan=2><font color='black'>"; echo "$row[auditor1]"; echo "</font></td>
								</tr>";
							echo "<tr>
									<th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th>
									<th colspan=2>"; echo CUESTIONARIO_CALIDAD; echo "</th>
								</tr>";
							echo "<tr>
									<td colspan=2><font color='black'>"; echo "$row[obstrat]"; echo"</font></td>
									<td colspan=2><font color='black'>"; echo "$row[obscal]"; echo "</font></td>
								</tr>";
							echo "<tr>
									<th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th>
									<th>"; echo CUESTIONARIO_COMPRAS; echo"</th>
								</tr>";
							echo "<tr>
									<td colspan=2><font color='black'>"; echo "$row[obsalmac]"; echo "</font></td>
									<td colspan=2><font color='black'>"; echo "$row[obscompras]"; echo"</font></td>
								</tr>";
							echo "<tr>
									<th colspan=2>"; echo CUESTIONARIO_FORMACION; echo"</th>
									<th colspan=2>"; echo CUESTIONARIO_DOCUMENTACION;echo "</th>
								</tr>";
							echo "<tr>
									<td colspan=2><font color='black'>"; echo "$row[obsformac]"; echo "</font></td>
									<td colspan=2><font color='black'>"; echo "$row[obsdocum]"; echo "</font></td>
								</tr>";
							echo "<tr>
									<th colspan=3><div align='center'>"; echo CUESTIONARIO_EQUIPOS; echo "</div>
									</th>
								</tr>";
							echo "<tr><td colspan=3><font color='black'>"; echo "$row[obslegio]"; echo "</font></td>
								</tr>
							</table>";
					?>
					</span>
				</div>
				<?php


						echo "</td>";
						echo "<td>$row[auditor1]</td>";

						echo "<td>";
            			?>
    						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
    								<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

    								<span>
    								<br />
    								<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
    								<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-plus fa-2x" style="position:absolute; left:10px; top:10px; color:#9fff30;"></i></a><!--</div>-->

    								<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

    								<a href="mod/javaformdelete.php" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

    								<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>

                    <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;">NC la auditoría  <?php echo $row ['1']; ?>  a: <?php echo $row ['27']; ?></div>
                    <br>

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
    												<th>" . NCS_FECHACIERRE . "</th><td>$row[14]</td>
    											</tr>
    											</tbody>
    											<tr> </table>";
    								?>
    								</span>
    						</div>
    					<?php
    				echo "</td>";

							echo "<td>$row[descripcion]</td>";
							echo "<td>$row[fecha]</td>";
							echo "<td>$row[acciones]</td>";
							echo "<td style width=12%>$row[cerradofecha]</td>";

							echo "<td>";
								echo "<a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=$row[id]' title='".NCS_EDITAR_NC." - $row[numhoja]'>";
								echo "<i class='fa fa-pencil ' style='color:#ff0000;'></i></a>";
								echo "</td>";
								echo "<td>";
								echo "<a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=$row[id]' title='".NCS_IMPRIMIR." - $row[numhoja]'>";
								echo "<i class='fa fa-print ' style='color:#ff0000;'></i></a>";
								echo "</td>";

							echo "</tr>";

						}
						echo "</tbody>";
						echo "</table>";

						?>
						<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
