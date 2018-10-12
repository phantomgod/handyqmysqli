<?php
/**
* Mod IMPRIMIR auditorías
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
    $sql = mysqli_query($mysqli, "SELECT * FROM aisgc ORDER BY id DESC");
		echo '<span class="yellow">' . AUDITORIAS_ADVERTICE . '</span>';
          echo '<table id="myTable" class="sortable">';
          echo '<caption>';
                   echo AUDITORIAS_LISTA_PRINTSCREEN;
          echo '</caption>';
          echo '<thead>';
            echo '<tr>';
              echo '<th>ID</th>';
              echo '<th>';
                   echo AUDITORIAS_AI;
              echo '</th>';
              echo '<th>';
                   echo FECHA;
            echo '</th>';
            ?>
                <th><a href="#" title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>"><i class='fa fa-edit' style='color:#FF5722;'></i></th>
                <th><a href="#" title="<?php echo IMPRIMIR_AUDITORIA; ?>"><i class='fa fa-print' style='color:#FF5722;'></i></th>
            <?php

           echo '</tr>';
		   echo '</thead><tbody>';
    while ($row = mysqli_fetch_row($sql)) {

                echo "<tr>";
                echo "<td>".$row['0']."</td>";
                echo "<td>";


               ?>
        				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
        						<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

        					<span>
        						<br />
        						<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

        						<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

        						<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>
        						<?php echo $row ['0']; ?>

                    <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;"><?php echo $row ['20']; ?></div>

        						<?php

        							echo "<table class='print2'>
        								<tr>";
        								echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
        										<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
        										<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
        										<th><font color='red'>" . DOCUMENTOS . "</font></th>
        								</tr>
        								<tr>
        									<td style width=20%>$row[1]</td>
        									<td>$row[2]</td>
        									<td>$row[3]</td>
                          <td>$row[6]</td>
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

                echo "<td>".$row['1']."</td>";

                ?>
                <td width="5%">
					<a href="?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $row['0'];?>" title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; echo "&nbsp;"; echo $row['2']; ?>">
						<i class='fa fa-pencil' style='color:#FF5722;'></i>
					</a>
				</td>
                <td width="5%">
				<a href="?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'];?>" title="<?php echo IMPRIMIR_AUDITORIA; echo "&nbsp;"; echo $row['2']; ?>">
				<i class='fa fa-print' style='color:#FF5722;'></i></a></td>
                <?php

           echo "</tr>";
    }

       echo "</tbody>";
        echo "</table>";
}
if ($aktion == "print_id") {
    if ((empty($_POST['fecha'])) AND (empty($_POST['ai'])) AND (empty($_POST['auditor1'])) AND (empty($_POST['auditor2'])) AND (empty($_POST['auditor3'])) AND (empty($_POST['docum'])) AND (empty($_POST['trabajador1'])) AND (empty($_POST['trabajador2'])) AND (empty($_POST['trabajador3'])) AND (empty($_POST['servicio1'])) AND (empty($_POST['servicio2'])) AND (empty($_POST['vehiculos'])) AND (empty($_POST['obstrat'])) AND (empty($_POST['obscal'])) AND (empty($_POST['obsalmac'])) AND (empty($_POST['obscompras'])) AND (empty($_POST['obsformac'])) AND (empty($_POST['obsdocum'])) AND (empty($_POST['obslegio']))) {
        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM aisgc WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

        ?>

        <table class="print">
        <caption>

			<a href="javascript:history.go(-1)" title="<?php echo VOLVER; ?>"><i class="fa fa-step-backward" style="color:Black;"></i></a>&nbsp;&nbsp;&nbsp;


            :&nbsp; &nbsp;<span class="documenttitle"><?php echo $data[2] ?></span>&nbsp;&nbsp;&nbsp;
            <a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $data[0] ?>' title='<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>-<?php  echo $data[2]; ?>'><i class="fa fa-edit" style="color:#FF5722;"></i></a>
        </caption>
            <thead>

                <?php echo AUDITORIAS_PRINT_ADVERTICE; ?>
            </thead>
        <tbody>
            <tr>
                <th width="15%">
                    <?php echo FECHA; ?>
                </th>
                    <td><?php echo $data[1] ?></td>
            </tr>
            <tr>
                <th width="15%">
                   <?php echo AUDITORIAS_AI; ?>
                </th>
                    <td><?php echo $data[2] ?></td>
            </tr>
            <tr>
                <th width="15%">
                   <?php echo AUDITORIAS_AUDITOR; ?>
                </th>
                    <td><?php echo $data[3] ?></td>
            </tr>
            <tr>
                <th width="15%">
                    <?php echo DOCUMENTOS; ?>
                </th>
                    <td><?php echo $data[6] ?></td>
            </tr>
            <tr>
                <th width="15%">
                   <?php echo TRABAJADOR; ?>
                </th>
                    <td><?php echo $data[7] ?></td>
            </tr>
            <tr>
                <th width="15%">
                  <?php echo SERVICIO_SERVICIO; ?>
                </th>
                    <td><?php echo $data[10] ?></td>
            </tr>
            <tr>
                <th width="15%">
                   <?php echo SERVICIO_SERVICIO; ?>
                </th>
                    <td><?php echo $data[11] ?></td>
            </tr>
            <tr>
                <th width="15%">
                   <?php echo VEHICULOS; ?>
                </th>
                    <td><?php echo $data[12] ?></td>
            </tr>

                 <tr>
                     <th width="15%">

                        <div align="center">
                        <p align="left">
                        <a class="tooltip2" href="#"><?php echo CUESTIONARIO_TRATAMIENTOS; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?></span></a></p>
                        </div>

                    </th>
                      <td><?php echo $data[13] ?></td>
                 </tr>
                 <tr>
                    <th width="15%">

                        <div align="center">
                        <p align="left">
                        <a class="tooltip2" href="#"> <?php echo CUESTIONARIO_CALIDAD; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?></span></a></p>
                        </div>


                    </th>
                    <td><?php echo $data[14] ?></td>
            </tr>
            <tr>
                <th width="15%">

                    <div align="center">
                    <p align="left">
                    <a class="tooltip2" href="#"><?php echo CUESTIONARIO_ALMACEN; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><?php echo AUDITORIAS_CUESTIONARIOALMACEN; ?></span></a></p>
                    </div>



                </th>
                    <td><?php echo $data[15] ?></td>
            </tr>
            <tr>
                <th width="15%">

                    <div align="center">
                    <p align="left">
                    <a class="tooltip2" href="#"><?php echo CUESTIONARIO_COMPRAS; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><?php echo AUDITORIAS_CUESTIONARIOACOMPRAS; ?></span></a></p>
                    </div>


                </th>
                    <td><?php echo $data[16] ?></td>
            </tr>
            <tr>
                <th width="15%">

                    <div align="center">
                    <p align="left">
                    <a class="tooltip2" href="#"><?php echo CUESTIONARIO_FORMACION; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><?php echo AUDITORIAS_CUESTIONARIOAFORMACION; ?></span></a></p>
                    </div>



                </th>
                    <td><?php echo $data[17] ?></td>
            </tr>
            <tr>
                <th width="15%">

                    <div align="center">
                    <p align="left">
                    <a class="tooltip2" href="#"><?php echo CUESTIONARIO_DOCUMENTACION; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION; ?></span></a></p>
                    </div>



                </th>
                    <td><?php echo $data[18] ?></td>
            </tr>
            <tr>
                <th width="15%">

                    <div align="center">
                    <p align="left">
                    <a class="tooltip2" href="#"><?php echo CUESTIONARIO_TALLER; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo CUESTIONARIO; ?></em><?php echo AUDITORIAS_CUESTIONARIOATALLER; ?></span></a></p>
                    </div>



                </th>
                    <td><?php echo $data[19] ?></td>
            </tr>
          </tbody>
        </table>

<center>


			<a href="javascript:history.go(-1)" title="<?php echo VOLVER; ?>">
				<i class="fa fa-step-backward" style="color:Black;"></i>
			</a>

			<a href="?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $data[0] ?>" title="<?php echo EDITAR; ?> - <?php echo $data[2] ?>">
				<i class="fa fa-edit" style="color:#FF5722;"></i>
			</a>


    <?php
    }
}
