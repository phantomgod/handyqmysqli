<html> 
<head> 
</head> 
<body> 
<?php

/**
* Mod IMPRIMIR no conformidades
* 
* PHP version 5
* 
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "print") { 
    $sql = mysqli_query($mysqli, "SELECT hojas. * , aisgc. *
						FROM hojasdemejora AS hojas
						JOIN aisgc AS aisgc ON hojas.ai = aisgc.ai
						GROUP BY hojas.id DESC
						ORDER BY  `aisgc`.`id` DESC"
	); 
       echo '&emsp;&emsp;<span class="yellow">' . NCS_IMPRIMIR . '</span>';
        echo '<table id="myTable" class="sortable">'; 
        echo "<thead>";   
            echo '<tr>'; 
               echo '<th>Id</th>
                     <th>'.AUDITORIAS_AUDITOR.'</th>
					 <th>'.AINFORMES_NUMERO.'</th>
                     <th>'.NCS_NUMERO.'</th>
                     <th>'.OBSERVACIONES.'</th>';
                     
              
			    echo '<th width="5%">';
				echo "<a href='#' title='"; 
				echo NCS_EDITAR_NC;
				echo "'>";
				echo "<i class='fa fa-edit' style='color:#9fff30;'></i></th>";

				echo '<th width="5%">';
				echo "<a href='#' title='"; 
				echo NCS_IMPRIMIR;
				echo "'>";
				echo "<i class='fa fa-print' style='color:#9fff30;'></i></th>";
			  
			  
			  
			  
			  //echo '<th><img src="images/deep#9fff30_edit.gif" alt="'.NCS_EDITAR_NC.'" title="'.NCS_EDITAR_NC.'" /></th>';
              //echo ' <th><img src="images/deep#9fff30_print.gif" alt="'.NCS_IMPRIMIR.'" title="'.NCS_IMPRIMIR.'" /></th>';
                     
            echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
    while ($row = mysqli_fetch_row($sql)) { 
        echo "<tr>";   
			echo "<td>".$row['0']."</td>";
			echo "<td>".$row['20']."</td>";
			echo "<td>";
                    
					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['17'] ?>"><?php echo $row['19'] ?></a>
								
								<span>
								<br />
								<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['17']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIA; echo "&nbsp;"; echo $row ['17']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
								
								<a href="mod/javaformdelete_aisgc.php?var=<?php echo $row ['17']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIA; echo "&nbsp;"; echo $row ['17']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>								
							
								<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['17']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIA; echo "&nbsp;"; echo $row ['17']; ?>"><i class="fa fa-print" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>										
								<?php
								
									echo "<table class=print>
										<tr>"; 
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[18]</td>
											<td>$row[19]</td>
											<td colspan=2>$row[20]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
											<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['30'], '<b><a><br><p>');

											echo "</td>
											<td colspan=2>";

											echo strip_tags($row['31'], '<b><a><br><p>');

											echo "</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
											<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['32'], '<b><a><br><p>');

											echo "</td>
											<td colspan=2>";

											echo strip_tags($row['33'], '<b><a><br><p>');

											echo "</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
											<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['34'], '<b><a><br><p>');

											echo "</td>
											<td colspan=2>";

											echo strip_tags($row['35'], '<b><a><br><p>');

											echo "</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['36'], '<b><a><br><p>');

											echo "</td>
										</tr>
									</table>";  
								?>
								</span>
						</div>
					<?php              
                    echo "</td>";         
			//echo "<td><a href='index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
			
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
						
							<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
							
						
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
			echo "<td>".$row['4']."</td>"; 
			echo "<td>"; 
				echo "<a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=$row[0]' title='".NCS_EDITAR_NC."-$row[0]''>";				
				echo "<i class='fa fa-edit' style='color:#9fff30;'></i></a>"; 
			
			echo "</td>"; 
			echo "<td>"; 
				echo "<a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=$row[0]'  title='".NCS_IMPRIMIR."-$row[0]'>"; 
				echo "<i class='fa fa-print' style='color:#9fff30;'></i></a>";
			echo "</td>";
            
		echo "</tr>"; 
        } 
        echo "</tbody>"; 
        echo "</table>"; 
} 
if ($aktion == "print_id") { 
   
    $id = $_GET['id']; 
    $sql = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = $_GET[id] "); 
    $data = mysqli_fetch_row($sql); 
   
          echo '<table class="print">'; 
          echo '<caption>'; 
            echo NCS_DETAILS; 
             echo ':<span class="documenttitle"> '.$data[2].'</span>';             
          echo '</caption>'; 
            echo ' <tbody>'; 
            echo "<thead>
			<button onclick='history.go(-1);' class='btn btn-warning'>" . VOLVER . "</button>
            &nbsp;&nbsp;&nbsp;<a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=".$data[0]."'>editar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='?seccion=ncs_print2'>Paginar</a></thead>"; 
            echo ' <tr>'; 
              echo '<th>Id:</th>'; 
              echo '<td>'.$data[0].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>AI:</th>'; 
              echo '<td>'.$data[1].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Hoja:</th>'; 
              echo '<td>'.$data[2].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Cod:</th>'; 
              echo '<td>'.$data[3].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Descripci&oacute;n:</th>'; 
              echo '<td>'.$data[4].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Fecha: </th>'; 
              echo '<td>'.$data[5].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Documentos: </th>'; 
              echo '<td>'.$data[6].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Abre: </th>'; 
              echo '<td>'.$data[7].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Afecta a: </th>'; 
              echo '<td>'.$data[8].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Causas: </th>'; 
              echo '<td>'.$data[9].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Acciones: </th>'; 
              echo '<td>'.$data[10].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Plazo: </th>'; 
              echo '<td>'.$data[11].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Cierres: </th>'; 
              echo '<td>'.$data[12].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Eficacia: </th>'; 
              echo '<td>'.$data[13].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Cerrado: </th>'; 
              echo '<td>'.$data[14].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Desviaci&oacute;n: </th>'; 
              echo '<td>'.$data[15].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
              echo '<th>Visible: </th>'; 
              echo '<td>'.$data[16].'</td>'; 
            echo '</tr>'; 
            echo '<tr>'; 
            echo "<td><a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=".$data[0]."'>editar</a></td>"; 
            echo '</tr>'; 
        echo ' </tbody>'; 
       echo '</table>';   
} 
?> 
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
</body> 
</html>