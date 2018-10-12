<?php
/**
* Mod ADMINISTRAR seguimientos de objetivos
* (tareas)
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
<html>
<head>
</head>
<body>

            <?php echo OBJETIVOS_ANOTAR_TAREA; ?> / 

                <a href="?seccion=seguimientos_admin&amp;aktion=add"><?php echo OBJETIVOS_ANOTAR_TAREA; ?></a> ::
                <a href="?seccion=seguimientos_admin&amp;aktion=change"><?php echo OBJETIVOS_MODIFICAR_TAREA; ?></a>

    <br />
    <?php


            /* requires the class
            require "class.datepicker.php";

            // instantiate the object
            $db=new datepicker();

            // uncomment the next line to have the calendar show up in german
            $db->language = "spanish";

            $db->firstDayOfWeek = 1;

            // set the format in which the date to be returned
            $db->dateFormat = "Y-m-d";*/


// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "add") {
    if ((empty($_POST['codigoobjetivo']))
        AND (empty($_POST['accion']))
        AND (empty($_POST['responsable']))
        AND (empty($_POST['fechalimite']))
        AND (empty($_POST['fechaterminacion']))
        AND (empty($_POST['observaciones']))) {
        echo '<form action="" method="POST">';

        echo OBJETIVOS_THEAD;
        echo '<table class="print">';
        echo '<caption>';
            echo OBJETIVOS_ANOTAR_TAREA;
			  ?>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<!--<input type="button" value="Mirar NC`s" onclick="Abrir_ventana('mod/ncslistadesplegable/index.php');">-->
				<a
				href="mod/ncslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
				title="Consultar no conformidades" 
				class="thickbox" 
				title="Consultar no conformidades">
				<i class="fa fa-question" style="color:#9fff30;"></i></a>

				<a
				href="mod/aisgclistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
				title="Consultar auditorias" 
				class="thickbox" 
				title="Consultar auditorias">
				<i class="fa fa-question" style="color:#FF5722;"></i></a>

				<a
				href="mod/informeauditorialistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"      
				class="thickbox" 
				title="Consultar informes de auditoría">
				<i class="fa fa-question" style="color:#1A237E;"></i></a>

				<a
				href="mod/objetivoslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
				class="thickbox" 
				title="Consultar objetivos">
				<i class="fa fa-question" style="color:#752209;"></i></a>
				<?php
        echo '</caption>';
        echo '<tbody>';
            echo '<tr>';
                echo '<th>';
                    echo CODIGO;
                echo '</th>';
                    echo '<td>';
                    echo '<select name="codobj">';
                    echo ' <option>...</option>';

                     $sql = "SELECT * FROM objetivosdatosgenerales";
                     $sql = mysqli_query($mysqli, $sql);

            if (!defined('CodigoObjetivo')) {
                 define('CODIGOOBJETIVO', 'CodigoObjetivo');
            }
            if (!defined('NombreObjetivo')) {
                 define('NOMBREOBJETIVO', 'NombreObjetivo');
            }
        while ($row = mysqli_fetch_assoc($sql)) {
                     echo '<option value="'.$row[CODIGOOBJETIVO ].'">'.$row[CODIGOOBJETIVO ].'-'.$row[NOMBREOBJETIVO].'</option>';

        }
                    echo '</select>';
                    echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th width="150px">';
                        echo OBJETIVOS_ACCION;
                echo ':</th><td><textarea name="accion" cols="55" rows="9"></textarea></td>';


            echo ' </tr>';
            echo '<tr>';
                echo ' <th style="width:150px">';
                    echo RESPONSABLE;
                echo ': </th>';
                    echo '<td>';
					   
						   
					 $sql2 = "SELECT * FROM members
									WHERE actividad='auditor'
									AND active='Yes'
									ORDER BY username ASC";
						$resultado = mysqli_query($mysqli, $sql2);
						if (!defined('username')) {
									 define('USERNAME', 'username');
						}						   
						   
						   
						   
						   
						while ($auditor1=mysqli_fetch_array($resultado)) {
							echo '<input id="IDauditor[]" name="auditor1_add[]" type="checkbox" value="'.$auditor1[USERNAME].'">&nbsp;'.$auditor1[USERNAME].'&nbsp;&nbsp;&nbsp;';
						}

                    echo '<td>';
            echo '</tr>';
            echo '<tr>';
                echo ' <th>'. LIMITE . ':</th>';
                echo ':</th><td><input id="date1" class="datepicker" name="limite" value=" ' . SELECCIONAR_FECHA . '" /></td>';
                
          echo '</tr>';
            echo '<tr>';
                echo ' <th>';
                    echo TERMINACION;
                echo ':</th><td><input id="date2" class="datepicker" name="terminacion" value=" ' . SELECCIONAR_FECHA . '" /></td>';
            echo '</tr>';
            echo '<tr>';
                echo ' <th>';
                    echo OBSERVACIONES;
                echo ':</th><td><textarea name="observaciones" cols="55" rows="9"></textarea></td>';
            echo ' </tr>';
            echo ' <tr>';
                echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
            echo '</tr>';
         echo '</tbody>';
         echo '</table>';
         echo '</form>';
    } else {

        if (isset($_POST['observaciones'])) {
            $observaciones_Post = $_POST['observaciones'];
        }
        if (isset($_POST['terminacion'])) {
            $terminacion_Post = $_POST['terminacion'];
        }
        if (isset($_POST['limite'])) {
            $limite_Post = $_POST['limite'];
        }
        if (isset($_POST['auditor1'])) {
            $auditor1_Post = $_POST['auditor1'];
        }
        $auditor1_Post = (isset($_POST['auditor1'])) ? $_POST['auditor1'] : '';

        foreach ( $_POST['auditor1_add'] as $auditor1 ) {
               $auditor1_Post .= '' . $auditor1 . ', ';
        }
        if (isset($_POST['accion'])) {
            $accion_Post = $_POST['accion'];
        }
        if (isset($_POST['codobj'])) {
            $codobj_Post = $_POST['codobj'];
        }
        $sql = mysqli_query($mysqli, 
            "INSERT INTO objetivosseguimiento (codigoobjetivo,
             accion, responsable, fechalimite, fechaterminacion, observaciones)
             VALUES ('".$codobj_Post."', '".$accion_Post."',
             '".$auditor1_Post."', '".$limite_Post."',
             '".$terminacion_Post."', '".$observaciones_Post."')"
        );
        if ($sql) {
            echo "<span class='documenttitle'>";
            echo OBJETIVOS_FOLLOWUP_ADDED;
            echo "</span>";
        } else {
            echo ERROR_ANADIR_REGISTRO;
        }

        //echo "Error message = ".mysql_error();

    }
}


if ($aktion == "change") {

    $sql = mysqli_query($mysqli, "SELECT s . * , g . *
                        FROM objetivosseguimiento AS s
                        INNER JOIN objetivosdatosgenerales AS g ON s.codigoobjetivo = g.CodigoObjetivo
                        ORDER BY g.CodigoObjetivo DESC");
            //echo OBJETIVOS_ADVERTICE;
            echo '<br />';
            echo '<table id="myTable" class="sortable">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th>ID</th>';
                    echo '<th>';
                        echo CODIGO;
                    echo '</th>';
                    echo '<th>';
                        echo ACCION;
                    echo '</th>';
                    echo '<th>';
                        echo RESPONSABLE;
                    echo '</th>';
                    echo '<th>'.LIMITE.'</th>';
                    echo '<th>'.TERMINACION.'</th>';
					echo '<th>'.OBSERVACIONES.'</th>';
                    echo '<th><a href="#" title="'.EDITAR_TAREA.'"><i class="fa fa-edit" style="color:Gold;"></i></th>';
                echo '</tr></thead><tbody>';
    while ($row = mysqli_fetch_row($sql)) {
            echo '<tr>';
				echo "<td>".$row['0']."</td>";
				echo "<td>";
				?>
			<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<a href="index.php?seccion=tareas_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>
				<span>
				<br />
				<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row ['7']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['8']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#752209;"></i></a>
				
				<a href="mod/javaformdelete_objetivos.php?var=<?php echo $row ['7']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['8']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#752209;"></i></a>
						
			<?php
				echo '<br /><a href="?seccion=tareas_print&amp;aktion=print&id=' . $row ['0'] . '" title="Imprimir tarea ' . $row ['0'] . '"><i class="fa fa-print fa-2x" style="position:absolute; left:135px; top:10px; color:Gold;"></i></a>';			
			?>
				<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row ['7']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['8']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:180px; top:10px; color:#752209;"></i></a>
				<br />
														
				<?php
				
					echo "<table class=print>
						<tbody> 
						<tr> 
						<th>".CODIGO."</th> 
						<td width='30%'><font class='spanredchico'>$row[8]</font></td> 
						<th>".OBJETIVOS_FUENTE."</th> 
						<td width='40%'><font class='spanredchico'>$row[16]</font></td> 
						</tr> 
						<tr> 
						<th>".OBJETIVOS_NOMBRE_OBJETIVO."</th> 
						<td><font class='spanredchico'>$row[9]</font></td> 
						<th>".OBJETIVOS_FRECUENCIA."</th> 
						<td><font class='spanredchico'>$row[17]</font></td> 
						</tr> 
						<tr> 
						<th>".ANO."</th> 
						<td><font class='spanredchico'>$row[10]</font></td> 
						<th>".OBJETIVOS_PLAZO."</th> 
						<td><font class='spanredchico'>$row[18]</font></td> 
						</tr> 
						<tr> 
						<th>".OBJETIVOS_ORIGEN."</th> 
						<td><font class='spanredchico'>$row[11]</font></td> 
						<th>".OBJETIVOS_EJECUTOR."</th> 
						<td><font class='spanredchico'>$row[19]</font></td> 
						</tr> 
						<tr> 
						<th>".OBJETIVOS_DETECCION."</th> 
						<td><font class='spanredchico'>$row[12]</font></td> 
						<th>".OBJETIVOS_PERSEGUIDOR."</th> 
						<td><font class='spanredchico'>$row[20]</font></td> 
						</tr> 
						<tr> 
						<th>".OBJETIVOS_CAUSAS."</th> 
						<td><font class='spanredchico'>$row[13]</font></td> 
						<th>V&ordm;B&ordm;:</th> 
						<td><font class='spanredchico'>$row[21]</font></td> 
						</tr> 
						<tr> 
						<th>".OBJETIVOS_RECURSOS."</th> 
						<td><font class='spanredchico'>$row[14]</font></td> 
						<th>".RESULTADO."</th> 
						<td><font class='spanredchico'>" . strip_tags($row['15']) . "</font></td> 
						</tr> 
						<tr> 
						<th>".INDICADOR."</th> 
						<td><font class='spanredchico'>$row[15]</font></td> 
						<th>".FECHA."</th> 
						<td><font class='spanredchico'>$row[23]</font></td> 
						</tr> 
						</tbody> 
						</table>";
								
					?>
				</span>
			</div>
		<?php

					echo "</td>";

					echo "<td>";
					
				?>
				
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<a href="index.php?seccion=tareas_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>
					<span>
					<font color="white">Objetivo:</font>&emsp;&emsp;&emsp;<?php echo $row[9]; ?><br />
					<font color="white">Observaciones:</font> <?php echo strip_tags($row[6]); ?>
					
					</span>
				</div>
				
				<?php
					/*echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2>";
								echo "<caption> <span class=documenttitle>Objetivo: $row[9]</span></caption>";
								echo "<tbody>";
									echo "<tr>";
										echo "<th style=width:200px>";
											echo TAREA;
											echo "&nbsp";
											echo ID;
											echo "-$row[0]: ";
										echo "</th>";
											echo "<td>"; echo "$row[6]"; echo "</td>";
									echo "</tr>";
								echo "</tbody>";
								echo "</table>'>"; 
								echo "$row[2]"; 
								echo "</a>";*/

					echo "</td>";						
					
					
					
					
				   // echo "<td>".$row['2']."</td>";
					echo "<td>".$row['3']."</td>";
					echo "<td>".$row['4']."</td>";
					echo "<td>".$row['5']."</td>";
					echo "<td>".$row['6']."</td>";
					echo "<td><a href='?seccion=seguimientos_admin&amp;aktion=change_id&amp;id=".$row['0']."' title='".EDITAR_TAREA."-".$row['0']."'>
								<i class='fa fa-pencil' style='color:Gold;'></i></a></td>";
                echo '</tr>';

    }
            echo '</tbody>';
            echo "</table>";
}


if ($aktion == "change_id") {
    if ((empty($_POST['codigoobjetivo_change']))
        AND (empty($_POST['accion_change']))
        AND (empty($_POST['responsable_change']))
        AND (empty($_POST['fechalimite_change']))
        AND (empty($_POST['fechaterminacion_change']))
        AND (empty($_POST['observaciones_change']))
    ) {
        $id = $_GET['id'];
        //$sql = mysql_query("SELECT * FROM objetivosseguimiento WHERE id = $_GET[id] ");

        $sql = mysqli_query($mysqli, "SELECT s . * , o.NombreObjetivo
                            FROM objetivosseguimiento s
                            INNER JOIN objetivosdatosgenerales o
                            WHERE o.CodigoObjetivo = s.codigoobjetivo
                            AND s.id = $id");

        $data = mysqli_fetch_row($sql);
		echo '<br /><br />';
				echo SEGUIMIENTOS_CHANGE_DETAILS;
                echo '&nbsp;&nbsp;&nbsp;<span class="documenttitle">'.$data[1].': &nbsp;'.$data[7].'</span>';
        echo '<form action="" method="POST">';
            echo '<table class="print">';

            echo '<tbody>';
                 echo '<tr>';
                    echo '<th>';
                        echo 'ID';
                    echo '</th>';
                        echo '<td>' . $data[0] . '';
                echo '</tr>';
				echo '<tr>';
                    echo '<th>';
                        echo CODIGO;
                    echo '</th>';
                        echo '<td><input type="text" class="form-control input-mini" id="codigoobjetivo_change" name="codigoobjetivo_change" value="'.$data[1].'"></td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>';
                        echo ACCION;
                    echo '</th>';
                        echo '<td><textarea class="textareanormal" rows="5" name="accion_change">'.$data[2].'</textarea></td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>';
                        echo RESPONSABLE;
                    echo '</th>';


                        echo '<td>';
                           echo '<select name="responsable_change">';
                                echo '<option>'.$data[3].'</option>';
                                 $sql = "SELECT * FROM members
											WHERE active='Yes'
											ORDER BY username ASC";
								$sql = mysqli_query($mysqli, $sql);
								if (!defined('username')) {
											 define('USERNAME', 'username');
								}
                        while ($row = mysqli_fetch_assoc($sql)) {
                            echo '<option value="'.$row[USERNAME].'">'.$row[USERNAME].'</option>';
                        }
                         echo '</select>';
                       echo '</td>';

                echo '</tr>';
                echo '<tr>';
                    echo '<th>';
                        echo LIMITE;
                    echo '</th>';
                        echo '<td><input id="date3" class="datepicker" name="fechalimite_change" value=" ' .$data[4] . '" /></td>';
                      
                echo '</tr>';
                echo '<tr>';
                    echo '<th>';
                        echo TERMINACION;
                    echo '</th>';
                        echo '<td><input id="date4" class="datepicker" name="fechaterminacion_change" value=" ' . $data[5] . '" /></td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>';
                        echo OBSERVACIONES;
                    echo '</th>';
                        echo '<td><textarea class="textareanormal" rows="5" name="observaciones_change">'.$data[6].'</textarea></td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
                echo '</tr>';
            echo '</tbody>';
            echo '</table>';
        echo '</form>';
    } else {
            $sql = mysqli_query($mysqli, "UPDATE objetivosseguimiento SET codigoobjetivo='$_POST[codigoobjetivo_change]',accion='$_POST[accion_change]',responsable='$_POST[responsable_change]',fechalimite='$_POST[fechalimite_change]',fechaterminacion='$_POST[fechaterminacion_change]',observaciones='$_POST[observaciones_change]' WHERE id=$_GET[id]");
        if ($sql) {
			echo "<br /><br /><br />";
            echo "<span class='documenttitle'>";
            echo SEGUIMIENTO_ACTUALIZADO;
            echo "</span><br />";
			echo '<div align="center"><a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward" style="color:Black;"></i></a></div>';
        } else {
            echo ERROR_ANADIR_REGISTRO;

        }
        //echo "Error message = ".mysql_error();
    }
}
?>
    <br />
    <br />
    <br />
</body>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
</html>