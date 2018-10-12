<?php
/**
* Mod LISTA de auditorías al sistema
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


$sql = "SELECT * FROM aisgc ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql);

        echo '<table id ="myTable" class="sortable">';
        echo '<caption>';
            echo AUDITORIAS_LISTA_PRINTSCREEN;
        echo '</caption>';
        echo '<thead>';
            echo '<tr>';
                echo '<th>ID:</th>';
                echo '<th>'.AUDITORIAS_NUMERO_AUDITORIA.':</th>';
                echo '<th>'.FECHA.':</th>';
                echo '<th>'.TITULO.':</th>';
                echo '<th>'.AUDITORIAS_AUDITOR.':</th>';
                ?>
                    <th><a href="#" title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>" /><i class="fa fa-edit" style="color:#bf360c;"></i></a></th>
                    <th><a href="#" title="<?php echo IMPRIMIR_AUDITORIA; ?>" /><i class="fa fa-print" style="color:#bf360c;"></i></a></th>
                <?php
            echo "</tr>";
			echo "</thead><tbody>";
//Leemos y escribimos los registros de la página actual
while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>$row[id]</td>";
        echo "<td>";
					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

								<span>
								<br />
								<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>

                <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;"><?php echo $row ['20']; ?></div>


								<?php

									echo "<table class=print>
										<tr>";
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th><font color='red'>" . DOCUMENTOS . "</font></th>
										</tr>
										<tr>
											<td style width=20%>$row[fecha]</td>
											<td>$row[ai]</td>
											<td>$row[auditor1]</td>
                      <td>$row[docum]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
											<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['obstrat'], '<b><a><br><p>');

											echo "</td>
											<td colspan=2>";

											echo strip_tags($row['obscal'], '<b><a><br><p>');

											echo "</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
											<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['obsalmac'], '<b><a><br><p>');

											echo "</td>
											<td colspan=2>";

											echo strip_tags($row['obscompras'], '<b><a><br><p>');

											echo "</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
											<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['obsformac'], '<b><a><br><p>');

											echo "</td>
											<td colspan=2>";

											echo strip_tags($row['obsdocum'], '<b><a><br><p>');

											echo "</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
										</tr>
										<tr>
											<td colspan=2>";

											echo strip_tags($row['obslegio'], '<b><a><br><p>');

											echo "</td>
										</tr>
									</table>";
								?>
								</span>
						</div>
					<?php
                    echo "</td>";
                    echo "<td>$row[fecha]</td>";
                    echo "<td>$row[nombreauditoria]</td>";
                    echo "<td>$row[auditor1]</td>";
                 ?>
                <td>
					<a href="?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $row['0'];?>" title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>-<?php echo $row['2'];?>">
						<i class="fa fa-pencil" style="color:#bf360c;"></i>
					</a>
				</td>
                <td>
					<a href="?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'];?>" title="<?php echo IMPRIMIR_AUDITORIA; ?>-<?php echo $row['2'];?>">
						<i class="fa fa-print" style="color:#bf360c;"></i>
					</a>
				</td>
                <?php
            echo "</tr>";
}
       echo '</tbody>';
       echo '</table>';
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
