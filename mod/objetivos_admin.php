<?php
/**
* Mod ADMINISTRAR objetivos
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


    /* requires the class
    require "class.datepicker.php";

    // instantiate the object
    $db=new datepicker();

    // uncomment the next line to have the calendar show up in german
    $db->language = "spanish";
    $db->firstDayOfWeek = 1;

    // set the format in which the date to be returned
    $db->dateFormat = "Y-m-d";*/
?>

	<?php echo OBJETIVOS_ADMINISTRAR_OBJETIVOS;?> / 

	<a href="?seccion=objetivos_admin&amp;aktion=add"><?php echo OBJETIVOS_ANADIR_OBJETIVO; ?></a> :: 
	<a href="?seccion=objetivos_admin&amp;aktion=change"><?php echo OBJETIVOS_CAMBIAR_OBJETIVO; ?></a>

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

if ($aktion == "add") {
    if ((empty($_POST['CodigoObjetivo_add']))
	AND (empty($_POST['NombreObjetivo']))
	AND (empty($_POST['Ano']))
	AND (empty($_POST['Origen']))
	AND (empty($_POST['Deteccion']))
	AND (empty($_POST['Causas']))
	AND (empty($_POST['Recursos']))
	AND (empty($_POST['Indicador']))
	AND (empty($_POST['Fuente']))
	AND (empty($_POST['FrecuenciaDeRevision']))
	AND (empty($_POST['Plazo']))
	AND (empty($_POST['ResponsableDeEjecucion']))
	AND (empty($_POST['ResponsableDeSeguimiento']))
	AND (empty($_POST['VBDireccion']))
	AND (empty($_POST['ResultadoFinal']))
	AND (empty($_POST['Fecha']))) {
        
		
		echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<tbody>';
            echo '<tr>';
                echo '<th>';
				
				
                  /*?>
                  <div id="help" onMouseOver="showdiv(event,'<?php echo OBJETIVOS_CODIGO_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                  <?php echo CODIGO; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="images/help.png" /></div>
                  <?php*/


				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . CODIGO . '<span class="custom info"><img src="images/Info.png" alt="' . INFORMACION . '" title="' . INFORMACION . '" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . OBJETIVOS_CODIGO_HELP . '</span></a></p>
				</div>';
				   

			   echo '</th>';
                    echo '<td>';

             $sql = "SELECT id, CodigoObjetivo FROM objetivosdatosgenerales ORDER BY id DESC LIMIT 1";
             $sql = mysqli_query($mysqli, $sql);
        if (!defined('ID')) define('ID', 'id');
        if (!defined('CODIGOOBJETIVO')) {
             define('CODIGOOBJETIVO', 'CodigoObjetivo');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
                 echo ''.$row[CODIGOOBJETIVO].'';
        }
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '<input type="text" class="form-control input-mini" id="CodigoObjetivo" name="CodigoObjetivo" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_NOMBRE_OBJETIVO;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xxlarge" id="NombreObjetivo" name="NombreObjetivo" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo ANO;
                    echo '</th>';
						echo '<td><input type="text" class="form-control input-mini" id="Ano" name="Ano" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_ORIGEN;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-large" id="Origen" name="Origen" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_DETECCION;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-large" id="Deteccion" name="Deteccion" value="">';
                     ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <!--<input type="button" value="Mirar NC`s" onclick="Abrir_ventana('mod/ncslistadesplegable/index.php');">-->
                    <a href="mod/ncslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800" alt="Consultar no conformidades" title="Consultar no conformidades" class="thickbox"><i class="fa fa-question" style="color:#9fff30;"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="mod/aisgclistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800" alt="Consultar auditorias" title="Consultar auditorias" class="thickbox"><i class="fa fa-question" style="color:#FF5722;"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="mod/objetivoslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800" alt="Consultar objetivos" title="Consultar objetivos" class="thickbox"><i class="fa fa-question" style="color:#752209;"></i></a>
                    <?php

            echo '</td></tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_CAUSAS;
                echo '</th>';
                    echo '<td><textarea class="textareanormal" rows="10" name="Causas" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_RECURSOS;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xlarge" id="Recursos" name="Recursos" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo INDICADOR;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xlarge" id="Indicador" name="Indicador" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_FUENTE;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xlarge" id="Fuente" name="Fuente" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_FRECUENCIA;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-large" id="FrecuenciaDeRevision" name="FrecuenciaDeRevision" value=""></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_PLAZO;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-mini" id="Plazo" name="Plazo" value=""></td>';
            echo '</tr>';


           /*echo '<tr>';
            echo '<th>';
            echo OBJETIVOS_EJECUTOR;
            echo '</th>';
            echo '<td><input class="inputlargo" name="ResponsableDeEjecucion" value=""></td>';
            echo '</tr>';*/

            echo '<tr>';
                echo '<th>'.OBJETIVOS_EJECUTOR.': </th>';
                    echo '<td>';
                        echo '<select name="ResponsableDeEjecucion" class="span4 btn-danger">';
                            echo '<option>Ejecutado por...</option>';
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


          /*echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_PERSEGUIDOR;
                echo '</th>';
                    echo '<td><input class="inputlargo" name="ResponsableDeSeguimiento" value=""></td>';
            echo '</tr>';*/

            echo '<tr>';
                echo '<th>'.OBJETIVOS_PERSEGUIDOR.': </th>';
                     echo '<td>';
                         echo '<select name="ResponsableDeSeguimiento" class="span4 btn-warning">';
                             echo '<option>Perseguido por...</option>';
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
                echo '<th>'.APROBADO.': </th>';
                    echo '<td>';
                        echo '<select name="VBDireccion" class="span4 btn-success">';
                            echo '<option>Aprobado por...</option>';
								$sql = "SELECT * FROM members
									WHERE actividad='auditor'
									AND active='Yes'
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
                    echo RESULTADO;
                echo '</th>';
                    echo '<td><textarea class="textareanormal" rows="10" name="ResultadoFinal" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo FECHA;
                echo '</th>';
				    echo '<td><input id="date" class="datepicker" name="Fecha" />';// Date-picker
                    echo '</td>';

            echo '</tr>';
                echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
            echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {

        if (isset($_POST['CodigoObjetivo'])) {
            $CodigoObjetivo_Post = $_POST['CodigoObjetivo'];
        }
        if (isset($_POST['NombreObjetivo'])) {
            $NombreObjetivo_Post = $_POST['NombreObjetivo'];
        }
        if (isset($_POST['Ano'])) {
            $Ano_Post = $_POST['Ano'];
        }
        if (isset($_POST['Origen'])) {
            $Origen_Post = $_POST['Origen'];
        }
        if (isset($_POST['Deteccion'])) {
            $Deteccion_Post = $_POST['Deteccion'];
        }
        if (isset($_POST['Causas'])) {
            $Causas_Post = $_POST['Causas'];
        }
        if (isset($_POST['Recursos'])) {
            $Recursos_Post = $_POST['Recursos'];
        }
        if (isset($_POST['Indicador'])) {
            $Indicador_Post = $_POST['Indicador'];
        }
        if (isset($_POST['Fuente'])) {
            $Fuente_Post = $_POST['Fuente'];
        }
        if (isset($_POST['FrecuenciaDeRevision'])) {
            $FrecuenciaDeRevision_Post = $_POST['FrecuenciaDeRevision'];
        }
        if (isset($_POST['Plazo'])) {
            $Plazo_Post = $_POST['Plazo'];
        }
        if (isset($_POST['ResponsableDeEjecucion'])) {
            $ResponsableDeEjecucion_Post = $_POST['ResponsableDeEjecucion'];
        }
        if (isset($_POST['ResponsableDeSeguimiento'])) {
            $ResponsableDeSeguimiento_Post = $_POST['ResponsableDeSeguimiento'];
        }
        if (isset($_POST['VBDireccion'])) {
            $VBDireccion_Post = $_POST['VBDireccion'];
        }
        if (isset($_POST['ResultadoFinal'])) {
            $ResultadoFinal_Post = $_POST['ResultadoFinal'];
        }
        if (isset($_POST['Fecha'])) {
            $Fecha_Post = $_POST['Fecha'];
        }

        $sql =  mysqli_query($mysqli, 
        "INSERT INTO objetivosdatosgenerales (CodigoObjetivo, NombreObjetivo,
         Ano, Origen, Deteccion,
         Causas, Recursos, Indicador, Fuente,
         FrecuenciaDeRevision, Plazo, ResponsableDeEjecucion,
         ResponsableDeSeguimiento, VBDireccion,
         ResultadoFinal, Fecha) VALUES ('".$CodigoObjetivo_Post."', '".$NombreObjetivo_Post."',
         '".$Ano_Post."', '".$Origen_Post."', '".$Deteccion_Post."', '".$Causas_Post."',
         '".$Recursos_Post."', '".$Indicador_Post."', '".$Fuente_Post."',
         '".$FrecuenciaDeRevision_Post."', '".$Plazo_Post."',
         '".$ResponsableDeEjecucion_Post."', '".$ResponsableDeSeguimiento_Post."',
         '".$VBDireccion_Post."', '".$ResultadoFinal_Post."', '".$Fecha_Post."')");
        if ($sql) {
            echo "Objetivo añadido";
        } else {
              echo "Error al añadir el registro!";
        }
    }
}

if ($aktion == "change") {


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

        echo '<table id="myTable" class="sortable">';
        echo '<thead>';
            echo '<tr><th>Id</th>';
                echo '<th>';
                    echo CODIGO;
                echo '</th>';
                echo '<th>';
                    echo OBJETIVOS_NOMBRE_OBJETIVO;
                echo '</th><!--<th>Año</th><th>Origen</th>
                <th>Detecci&oacuten</th><th>Causas</th>
                <th>Recursos</th><th>Indicador</th>
                <th>Fuente</th><th>Frecuencia</th>
                <th>Plazo</th><th>Ejecuta</th>
                <th>Persigue</th><th>VºBº</th>
                <th>Resultado</td>-->';
                echo '<th>';
                    echo FECHA;
                echo '</th>';
				
				echo '<th style width="5%"><a href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[id]" alt="'.OBJETIVOS_EDITAR_OBJETIVO.'" title="'.OBJETIVOS_EDITAR_OBJETIVO.'"><i class="fa fa-edit" style="color:#752209;"></i></a></th>';
               echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
    while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td>".$row['0']."</td>";
                echo "<td>";

                	?>
			<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
					<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>
				<span>
				<br />
				<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#752209;"></i></a>
				
				<a href="mod/javaformdelete_objetivos.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#752209;"></i></a>
						
			<?php
			$sql2 = mysqli_query($mysqli,  "SELECT *
			FROM objetivosseguimiento
			WHERE codigoobjetivo = $row[1]");
			$data = mysqli_fetch_row($sql2);
				 
			echo '<br /><a href="?seccion=tareas_print&amp;aktion=print&id=' . $row[1] . '" title="Imprimir tarea ' . $data[0] . '"><i class="fa fa-pencil fa-2x" style="position:absolute; left:135px; top:10px; color:Gold;"></i></a>';			
			?>
				<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:180px; top:10px; color:#752209;"></i></a>
				<br />
														
				<?php
				
					echo "<table class=print>
						<tbody> 
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
						</tbody> 
						</table>";
								
					?>
				</span>
			</div>
		<?php
			
                echo "</td>";
                echo "<td>" . $row['2'] . "</td>";
                echo "<td>" . $row['16'] . "</td>";
				echo "<td>"; 
                echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[0]' alt='".OBJETIVOS_EDITAR_OBJETIVO." - $row[1]' title='".OBJETIVOS_EDITAR_OBJETIVO." - $row[1]'><i class='fa fa-pencil' style='color:#752209;'></i></a>"; 
                echo "</td>"; 
            echo "</tr>";
    }
        echo "</tbody>";
        echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['CodigoObjetivo_change'])) AND (empty($_POST['NombreObjetivo_change'])) AND (empty($_POST['Ano_change'])) AND (empty($_POST['Origen_change'])) AND (empty($_POST['Deteccion_change'])) AND (empty($_POST['Causas_change'])) AND (empty($_POST['Recursos_change'])) AND (empty($_POST['Indicador_change'])) AND (empty($_POST['Fuente_change'])) AND (empty($_POST['FrecuenciaDeRevision_change'])) AND (empty($_POST['Plazo_change'])) AND (empty($_POST['ResponsableDeEjecucion_change'])) AND (empty($_POST['ResponsableDeSeguimiento_change'])) AND (empty($_POST['VBDireccion_change'])) AND (empty($_POST['ResultadoFinal_change'])) AND (empty($_POST['Fecha_change']))) {
        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<tbody>';
            echo '<tr>';
                echo '<th>';
                    echo CODIGO;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-mini" id="CodigoObjetivo_change" name="CodigoObjetivo_change" value="'.$data[1].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_NOMBRE_OBJETIVO;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xxlarge" id="NombreObjetivo_change" name="NombreObjetivo_change" value="'.$data[2].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo ANO;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-mini" id="Ano_change" name="Ano_change" value="'.$data[3].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_ORIGEN;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-large" id="Origen_change" name="Origen_change" value="'.$data[4].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_DETECCION;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-large" id="Deteccion_change" name="Deteccion_change" value="'.$data[5].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_CAUSAS;
                echo '</th>';
                    echo '<td><textarea class="textareanormal" rows="10" name="Causas_change">'.$data[6].'</textarea></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_RECURSOS;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xlarge" id="Recursos_change" name="Recursos_change" value="'.$data[7].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo INDICADOR;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xlarge" id="Indicador_change" name="Indicador_change" value="'.$data[8].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th>';
                    echo OBJETIVOS_FUENTE;
                echo '</th>';
					echo '<td><input type="text" class="form-control input-xlarge" id="Fuente_change" name="Fuente_change" value="'.$data[9].'"></td>';
            echo '</tr>';
        echo '<tr>';
          echo '<th>';
          echo OBJETIVOS_FRECUENCIA;
          echo '</th>';
		  echo '<td><input type="text" class="form-control input-mini" id="FrecuenciaDeRevision_change" name="FrecuenciaDeRevision_change" value="'.$data[10].'"></td>';
          echo '</tr>';
        echo '<tr>';
          echo '<th>';
          echo OBJETIVOS_PLAZO;
          echo '</th>';
		  echo '<td><input type="text" class="form-control input-xlarge" id="Plazo_change" name="Plazo_change" value="'.$data[11].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
          echo OBJETIVOS_EJECUTOR;
          echo '</th>';


           echo '<td>';
           echo '<select name="ResponsableDeEjecucion_change" class="span4 btn-danger">';
                echo '<option>'.$data[12].'</option>';
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


          //echo '<td><input class="inputlargo" name="ResponsableDeEjecucion_change" value="'.$data[12].'"></td>';
          echo '</tr>';
        echo '<tr>';
         echo '<th>';
          echo OBJETIVOS_PERSEGUIDOR;
          echo '</th>';

          echo '<td>';
           echo '<select name="ResponsableDeSeguimiento_change" class="span4 btn-warning">';
                echo '<option>'.$data[13].'</option>';
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


          //echo '<td><input class="inputlargo" name="ResponsableDeSeguimiento_change" value="'.$data[13].'"></td>';
          echo '</tr>';
        echo '<tr>';
          echo '<th>VºBº:</th>';

          echo '<td>';
           echo '<select name="VBDireccion_change" class="span4 btn-success">';
                echo '<option>'.$data[14].'</option>';
                 $sql = "SELECT * FROM members
							WHERE actividad='auditor'
							AND active='Yes'
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
          echo RESULTADO;
          echo '</th>';
          echo '<td><textarea class="textareanormal" rows="10" name="ResultadoFinal_change">'.$data[15].'</textarea></td>';
          echo '</tr>';
        echo '<tr>';
          echo '<th>';
          echo FECHA;
          echo '</th>';
          echo '<td>';

          echo "<input id='date1' class='datepicker' name='Fecha_change' value='" . $data[16] . "'/>";
		  
		  //<input class="inputfecha" name="Fecha_change" value="'.$data[16].'">';
          //<input type="text" id="date" class="inputfecha" name="Fecha_change" value="<?php echo $data[16]; ? >" /><input type="button" value="::" onclick="<?php echo $db->show('date') ? >">


          echo '</td>';
        echo '</tr>';
          echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
        echo '</tr>';
        echo '</table>';
        echo '</form>';
    } else {
            $sql = mysqli_query($mysqli, "UPDATE objetivosdatosgenerales SET CodigoObjetivo='$_POST[CodigoObjetivo_change]',NombreObjetivo='$_POST[NombreObjetivo_change]',Ano='$_POST[Ano_change]',Origen='$_POST[Origen_change]',Deteccion='$_POST[Deteccion_change]',Causas='$_POST[Causas_change]',Recursos='$_POST[Recursos_change]',Indicador='$_POST[Indicador_change]',Fuente='$_POST[Fuente_change]',FrecuenciaDeRevision='$_POST[FrecuenciaDeRevision_change]',Plazo='$_POST[Plazo_change]',ResponsableDeEjecucion='$_POST[ResponsableDeEjecucion_change]',ResponsableDeSeguimiento='$_POST[ResponsableDeSeguimiento_change]',VBDireccion='$_POST[VBDireccion_change]',ResultadoFinal='$_POST[ResultadoFinal_change]',Fecha='$_POST[Fecha_change]' WHERE id=$_GET[id]");
        if ($sql) {
            echo OBJETIVO_ACTUALIZADO;
        }
    }
}

?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>