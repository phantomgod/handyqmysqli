<?php 
/** 
* Mod IMPRIMIR objetivos 
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


//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM objetivosdatosgenerales ) m');

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



    $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales ORDER BY Id DESC"); 
 
 
		echo '&emsp;&emsp;<span class="yellow">' . OBJETIVOS_PRINTSCREEN . '</span>';
        echo '<table id="myTable" class="sortable">';       
        echo '<thead>'; 
            echo '<tr><th style=width:40px>Id</th>'; 
                echo '<th style="width:50px">'; 
                    echo CODIGO; 
                echo '</th>'; 
                echo '<th style="width:100px">'; 
                    echo OBJETIVOS_NOMBRE_OBJETIVO; 
                echo '</th>'; 
                /*echo '<th style="width:50px">'; 
                    echo ANO;*/
                echo '</th><!--<th>" . OBJETIVOS_ORIGEN . "</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th><th>Indicador</th><th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th><th>Resultado</th>-->'; 
                echo '<th style="width:50px">'; 
                    echo FECHA; 
                echo '</th>';

                    echo '<th style width="5%"><a href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[id]" alt="'.OBJETIVOS_EDITAR_OBJETIVO.'" title="'.OBJETIVOS_EDITAR_OBJETIVO.'">
							<i class="fa fa-edit" style="color:#752209;"></i></a></th>';
                    echo '<th style width="5%"><a href="?seccion=objetivos_print&amp;aktion=change_id&amp;id=$row[id]" alt="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'" 
                              title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
							<i class="fa fa-print" style="color:#752209;"></i></a></th>';
            
			echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
 
    while ($row = mysqli_fetch_row($sql)) { 
            echo "<tr>"; 
                    echo "<td style=width:40px>".$row['0']."</td>"; 
                    
                    ?>
				<td style="width: 40px">
										
					<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>								
								<span>
								<br />
								<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#752209;"></i></a>
								
								<a href="mod/javaformdelete_objetivos.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#752209;"></i></a>
								
							
								<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#752209;"></i></a>
								<br />
																
								<?php
								
									echo "<table class=print>
										<> 
										<tr> 
										<th>".CODIGO."</th> 
										<td width='30%'><font class='spanredchico'>$row[1]</font></td> 
										<th>".OBJETIVOS_FUENTE."</th> 
										<td width='40%'><font class='spanredchico'>$row[9]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_NOMBRE_OBJETIVO."</th> 
										<td><font class='spanredchico'>$row[2]</font></td> 
										<th>".OBJETIVOS_FRECUENCIA."</th> 
										<td><font class='spanredchico'>$row[10]</font></td> 
										</tr> 
										<tr> 
										<th>".ANO."</th> 
										<td><font class='spanredchico'>$row[3]</font></td> 
										<th>".OBJETIVOS_PLAZO."</th> 
										<td><font class='spanredchico'>$row[11]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_ORIGEN."</th> 
										<td><font class='spanredchico'>$row[4]</font></td> 
										<th>".OBJETIVOS_EJECUTOR."</th> 
										<td><font class='spanredchico'>$row[12]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_DETECCION."</th> 
										<td><font class='spanredchico'>$row[5]</font></td> 
										<th>".OBJETIVOS_PERSEGUIDOR."</th> 
										<td><font class='spanredchico'>$row[13]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_CAUSAS."</th> 
										<td><font class='spanredchico'>$row[6]</font></td> 
										<th>V&ordm;B&ordm;:</th> 
										<td><font class='spanredchico'>$row[14]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_RECURSOS."</th> 
										<td><font class='spanredchico'>$row[7]</font></td> 
										<th>".RESULTADO."</th> 
										<td><font class='spanredchico'>" . strip_tags($row['15']) . "</font></td> 
										</tr> 
										<tr> 
										<th>".INDICADOR."</th> 
										<td><font class='spanredchico'>$row[8]</font></td> 
										<th>".FECHA."</th> 
										<td><font class='spanredchico'>$row[16]</font></td> 
										</tr> 
										</> 
										</table>";
										
								?>
								</span>
						</div>
					
				</td>
					
					<?php
                    
                        /*echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2>";       
                            echo "<caption>Objetivo: <span class=documenttitle>"; echo "$row[2]"; echo "</span></caption>";                                                                       
                            echo "<tbody>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo CODIGO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[1]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_NOMBRE_OBJETIVO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[2]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo ANO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[3]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_ORIGEN; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[4]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_DETECCION; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[5]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_CAUSAS; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[6]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_RECURSOS; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[7]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo INDICADOR; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[8]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                       echo OBJETIVOS_FUENTE; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[9]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                       echo OBJETIVOS_FRECUENCIA; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[10]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                       echo OBJETIVOS_PLAZO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[11]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_EJECUTOR; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[12]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                         echo OBJETIVOS_PERSEGUIDOR; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[13]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th>VºBº: </th>"; 
                                        echo "<td>"; echo "$row[14]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                         echo RESULTADO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[15]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                         echo FECHA; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[16]"; echo "</td>"; 
                                echo "</tr>"; 
                            echo "</tbody>";         
                            echo "</table>'>"; echo "$row[1]"; echo "</a>";

                    //<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['1']."</a>
                    */
                    
                    echo "<td>" . $row['2'] . "</a></td>"; 
                    echo "<td width='100px'>" . $row['16'] . "</td>";
                    echo "<td>"; 
                    echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[0]' alt='".OBJETIVOS_EDITAR_OBJETIVO." - $row[1]' title='".OBJETIVOS_EDITAR_OBJETIVO." - $row[1]'>"; 
                    echo "<i class='fa fa-pencil' style='color:#752209;'></i></a>"; 
                    echo "</td>"; 
                    echo "<td>"; 
                    echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[0]' alt='".OBJETIVOS_IMPRIMIR_OBJETIVO." - $row[1]' title='".OBJETIVOS_IMPRIMIR_OBJETIVO." - $row[1]'>"; 
                    echo "<i class='fa fa-print' style='color:#752209;'></i></a>"; 
                    echo "</td>";                     
                    echo "</tr>"; 
    } 
        echo '</tbody>'; 
        echo "</table>"; 
} 
 
if ($aktion == "print_id") { 

    $id = (int)$_GET['id']; 
    $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales WHERE id = $id "); 
    $data = mysqli_fetch_row($sql); 
     echo '<table class="print">';       
       echo '<caption>Objetivo: <span class="documenttitle">'.$data[2].'</span></caption>'; 
       echo '<thead>'.OBJETIVOS_DETAILS.': '.$data[1].''; 
        echo '&nbsp;&nbsp;&nbsp;&nbsp;'; 
        echo "<a href='?seccion=objetivos_print&amp;aktion=print'>Volver</a>&nbsp;&nbsp;&nbsp;<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=".$data[0]."'>editar</a>"; 
        
       echo '</thead>';        
        echo '<tbody>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
        echo CODIGO; 
        echo '</th>'; 
          echo '<td>'.$data[1].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
          echo OBJETIVOS_NOMBRE_OBJETIVO; 
          echo '</th>'; 
          echo '<td>'.$data[2].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
          echo ANO; 
          echo '</th>'; 
          echo '<td>'.$data[3].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
           echo '<th style="width:50px">'; 
          echo OBJETIVOS_ORIGEN; 
          echo '</th>'; 
            echo '<td>'.$data[4].'</td>'; 
            echo '</tr>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
          echo OBJETIVOS_DETECCION; 
          echo '</th>'; 
          echo '<td>'.$data[5].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
          echo OBJETIVOS_CAUSAS; 
          echo '</th>'; 
            echo '<td>'.$data[6].'</td>'; 
            echo '</tr>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
          echo OBJETIVOS_RECURSOS; 
          echo '</th>'; 
          echo '<td>'.$data[7].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
          echo INDICADOR; 
          echo '</th>'; 
          echo '<td>'.$data[8].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
          echo '<th style="width:50px">'; 
          echo OBJETIVOS_FUENTE; 
          echo '</th>'; 
          echo '<td>'.$data[9].'</td>'; 
          echo '</tr>'; 
        echo '<tr>'; 
           echo '<th style="width:50px">'; 
          echo OBJETIVOS_FRECUENCIA; 
          echo '</th>'; 
          echo '<td>'.$data[10].'</td>'; 
          echo '</tr>'; 
        echo '<tr>'; 
           echo '<th style="width:50px">'; 
          echo OBJETIVOS_PLAZO; 
          echo '</th>'; 
          echo '<td>'.$data[11].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
           echo '<th style="width:50px">'; 
          echo OBJETIVOS_EJECUTOR; 
          echo '</th>'; 
          echo '<td>'.$data[12].'</td>'; 
          echo '</tr>'; 
        echo '<tr>'; 
         echo '<th style="width:50px">'; 
          echo OBJETIVOS_PERSEGUIDOR; 
          echo '</th>'; 
          echo '<td>'.$data[13].'</td>'; 
          echo '</tr>'; 
        echo '<tr>'; 
          echo '<th>VºBº: </th>'; 
          echo '<td>'.$data[14].'</td>'; 
        echo '</tr>'; 
        echo '<tr>'; 
           echo '<th style="width:50px">'; 
          echo RESULTADO; 
          echo '</th>'; 
          echo '<td>'.$data[15].'</td>'; 
          echo '</tr>'; 
        echo '<tr>'; 
           echo '<th style="width:50px">'; 
          echo FECHA; 
          echo '</th>'; 
          echo '<td>'.$data[16].'</td>'; 
        echo '</tr>'; 
       echo '</tbody>';         
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
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />