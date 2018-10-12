<?php
/**
* Mod LISTAR los objetivos con sus seguimientos
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

$sql = "SELECT s.Id id1, s.codigoobjetivo, s.accion, s.responsable, s.fechalimite, s.fechaterminacion, s.observaciones, g.*
				FROM objetivosseguimiento as s
                INNER JOIN objetivosdatosgenerales as g
                ON s.codigoobjetivo=g.CodigoObjetivo
                ORDER BY g.Id DESC";
$result = mysqli_query($mysqli, $sql);

              echo OBJETIVOS_JOIN;
                  echo '<div align="center">';
                echo '<p align="left">';
                echo '<a class="tooltip2" href="#"><b><i class="fa fa-comment-o" style="color:#b3e5fc;"></i></b><span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
                ' . AYUDA . '</em>' . OBJETIVOS_TAREAS_HELP . '</span></a></p>
                </div>';


     echo '<table id="myTable" class="sortable">';
       /*?>     echo '<caption>';

           <div id="help" onMouseOver="showdiv(event,'<?php echo OBJETIVOS_TAREAS_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
              echo '&nbsp;&nbsp;&nbsp;&nbsp;';
              echo '<img src="images/help.png" alt="help"></div>';

      echo '</caption>';
       <?php*/
        echo '<thead>';
        echo '<tr>';
        echo '<th style width="10%">Id-objetivo:</th>';
        echo '<th>Id-seguimiento:</th>';
        echo '<th>';
        echo TITULO;
        echo '</th>';
        echo '<th>';
        echo OBJETIVOS_ACCION;
        echo '</th>';
        echo '<th>';
        echo LIMITE;
        echo '</th>';
        echo '<th>';
        echo TERMINACION;
        echo '</th>';
        echo '<th style width=30%>';
        echo OBSERVACIONES;
        echo '</th>';

        echo '<th style width="5%"><a href="#" title="'.OBJETIVOS_MODIFICAR_TAREA.'">';
            echo '<i class="fa fa-edit" style="color:#fbed31;"></i></a></th>';
        echo '<th style width="5%"><a href="#" title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
              <i class="fa fa-print" style="color:#fbed31;"></i></a></th>';

        echo '</tr>';
		echo '</thead></tbody>';

//Leemos y escribimos los registros de la página actual

while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>$row[Id] / $row[8]</td>";
            echo "<td>$row[id1] / $row[1]</td>";
            echo "<td>";
?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row['7'] ?>"><?php echo $row['9'] ?></a>

							<span>
								<br />
								<!--<div onMouseOver="showdiv(event,'< ?php echo objetivos_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
								<a href="?seccion=objetivos_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-plus" style="position:absolute; left:10px; top:10px; color:#fbed31;"></i></a><!--</div>-->

								<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row ['7']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['7']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#fbed31;"></i></a>

								<a href="mod/javaformdelete.php?var=<?php echo $row ['7']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['7']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#fbed31;"></i></a>


								<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row ['7']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['7']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#fbed31;"></i></a>

								<!--<a href="?seccion=buscancs"><i class="fa fa-search" style="position:absolute; left:250px; top:10px; color:#fbed31;"></i></a>

								<a href="?seccion=ncsporarea"><i class="fa fa-signal" style="position:absolute; left:290px; top:10px; color:#fbed31;"></i></a>

								<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:absolute; left:330px; top:10px; color:White;"></i></a>-->

								<?php

									echo "<table class=print>
                            <caption>Objetivo: <div class=documenttitle>" . $row[9] . "</div></caption>
                            <tbody>
                                <tr>
                                    <th style=width:50px>
                                        " . CODIGO . "
                                    </th>
                                        <td>" . $row[8] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_NOMBRE_OBJETIVO . "
                                    </th>
                                        <td>" . $row[9] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . ANO . "
                                    </th>
                                        <td>" . $row[10] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_ORIGEN . "
                                    </th>
                                        <td>" . $row[11] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_DETECCION . "
                                    </th>
                                        <td>" . $row[12] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_CAUSAS . "
                                    </th>
                                        <td>" . $row[13] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_RECURSOS . "
                                    </th>
                                        <td>" . $row[14] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . INDICADOR . "
                                    </th>
                                        <td>" . $row[15] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                       " . OBJETIVOS_FUENTE . "
                                    </th>
                                        <td>" . $row[16] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                       " . OBJETIVOS_FRECUENCIA . "
                                    </th>
                                        <td>" . $row[17] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                       " . OBJETIVOS_PLAZO . "
                                    </th>
                                        <td>" . $row[18] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                        " . OBJETIVOS_EJECUTOR . "
                                    </th>
                                        <td>" . $row[19] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                         " . OBJETIVOS_PERSEGUIDOR . "
                                    </th>
                                        <td>" . $row[20] . "</td>
                                </tr>
                                <tr>
                                    <th>VºBº: </th>
                                        <td>" . $row[21] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                         " . RESULTADO . "
                                    </th>
                                        <td>" . $row[22] . "</td>
                                </tr>
                                <tr>
                                    <th style=width:50px>
                                         " . FECHA . "
                                    </th>
                                        <td>" . $row[23] . "</td>
                                </tr>
                            </tbody>
                    </table>";
								?>
							</span>
						</div>
					<?php

                echo "</td>";
            /*echo "<td style width=10%><a href=index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['Id'].">$row[codigoobjetivo]</a></td>";*/


            echo "<td style width=25%>$row[accion]</td>";
            echo "<td>$row[fechalimite]</td>";
            echo "<td>$row[fechaterminacion]</td>";
            echo "<td style width=25%>$row[observaciones]</td>";
            echo "<td>";
                echo "<a href='?seccion=seguimientos_admin&amp;aktion=change_id&amp;id=$row[id1]' title='" . OBJETIVOS_MODIFICAR_TAREA . " - $row[0]'>";
                echo "<i class='fa fa-pencil' style='color:#fbed31;'></i></a>";
            echo "</td>";
            echo "<td>";
                echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[7]' title='" . OBJETIVOS_IMPRIMIR_OBJETIVO . " - $row[1]'>";
                echo "<i class='fa fa-print' style='color:#fbed31;'></i></a>";
            echo "</td>";
        echo "</tr>";
}
    echo '</tbody>';
echo '</table>';

?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 4, "desc" ]]
    } );
} );
</script>
