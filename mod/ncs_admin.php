<?php
/**
* Mod administrar no conformidades
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
    $db->dateFormat = "Y-m-d"; */
?>


<?php echo NCS_ADMINISTRAR_NCS; ?>

		<a href="?seccion=ncs_admin&amp;aktion=add"><?php echo NCS_ANADIR_NC; ?></a> -/-
		<a href="?seccion=ncs_admin&amp;aktion=change"><?php echo NCS_MODIFICAR_NC; ?></a> -/-
<button class="btn btn-success"><a
		href="ajaxbootpagbasic/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
		title="Paginar no conformidades"
	 class="thickbox"
	 title="Consultar no conformidades">
	 <?php echo PAGINAR; ?></a>
 </button> -/-
        <a href="mod/aisgclistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        title="Consultar auditorias"
		class="thickbox"
		title="Consultar auditorias">
		<i class="fa fa-question" style="color:#FF5722;"></i>
		</a>
		<a
        href="mod/ncslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        title="Consultar no conformidades"
		class="thickbox"
		title="Consultar no conformidades">
		<i class="fa fa-question" style="color:#9fff30;"></i>
		</a>

<br>
<?php
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "add") {
    if ((empty($_POST['ai_add']))
        AND (empty($_POST['numhoja_add']))
        AND (empty($_POST['codhoja_add']))
        AND (empty($_POST['descripcion_add']))
        AND (empty($_POST['fecha_add']))
        AND (empty($_POST['docum_add']))
        AND (empty($_POST['abiertopor_add']))
        AND (empty($_POST['afectaa_add']))
        AND (empty($_POST['causas_add']))
        AND (empty($_POST['acciones_add']))
        AND (empty($_POST['plazo_add']))
        AND (empty($_POST['cierresparc_add']))
        AND (empty($_POST['eficacia_add']))
        AND (empty($_POST['cerradofecha_add']))
        AND (empty($_POST['desviacion_add']))
        AND (empty($_POST['visible_add']))) {

		echo '<br /><br />';
        echo '<form action="" method="POST">';
          echo '<table class="print">';
           echo '<caption><span class="documenttitle">'.NCS_ABRIR_NC.' - '.MEJORA.' - '.OBSERVACION.'</span></caption>';
            echo '<tbody>';
             echo '<tr>';
              echo '<th>';

			   /* ?>
                  <div id="help" onMouseOver="showdiv(event,'<?php echo NCS_AI_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                  <?php echo AUDITORIAS_NUMERO_AUDITORIA; ?>
                   &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>

              <?php*/

			  echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . AUDITORIAS_NUMERO_AUDITORIA . '<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . NCS_AI_HELP . '</span></a></p>
				</div>';

			  echo'</th>';
                echo '<td>';
                echo '<select name="ai_add" class="span4 btn-warning">';
                    echo '<option>Ninguna auditoría o... (seleccionar)</option>';
                     $sql1 = "SELECT ai, fecha, nombreauditoria FROM aisgc ORDER BY id DESC";
                     $sql1 = mysqli_query($mysqli, $sql1);

        while ($row1 = mysqli_fetch_assoc($sql1)) {
                     echo '<option value="'.$row1['ai'].'">'.$row1['ai'].' - '.$row1['fecha'].' -';
										 echo substr($row1['nombreauditoria'], 10);
										 echo '</option>';
        }
         echo '</select>';
            	echo '</td>';
           echo '</tr>';
           echo '<tr>';
            echo '<th>';

                 /*?>
                 <div id="help" onMouseOver="showdiv(event,'<?php echo NCS_LASTID_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                 <?php echo NCS_NUMERO; ?>
                   &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>
                 <?php*/

				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . NCS_NUMERO . '<span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . NCS_LASTID_HELP . '</span></a></p>
				</div>';
			   echo '</th>';
               echo '<td>';
					//echo '<input type="text" class="form-control input-medium" id="numhoja_add" name="numhoja_add" value="Nº hoja...">';
				?>
					<input type="text" class="form-control input-medium" id="numhoja_add" name="numhoja_add" placeholder="Nº hoja..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº hoja...'" />

				<?php
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				 $sql2 = "SELECT id, numhoja,fecha FROM hojasdemejora ORDER BY id DESC LIMIT 1";
				 $sql2 = mysqli_query($mysqli, $sql2);
        if (!defined('numhoja')) {
                     define('NUMHOJA', 'numhoja');
        }
        while ($row2 = mysqli_fetch_assoc($sql2)) {
                 echo 'Última: '.$row2['numhoja'].' de fecha: '.$row2['fecha'].'';
        }


             echo '</td></tr>';
             echo '<tr>';
               echo '<th>';

                  /*?>
                  <div id="help" onMouseOver="showdiv(event,'<?php echo NCS_CODIGO_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                  <?php echo NCS_CODIGO_NC; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>
                  <?php*/


				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . NCS_CODIGO_NC . '<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . NCS_CODIGO_HELP . '</span></a></p>
				</div>';


				echo '</th>';
				 echo '<td>';

				 //<input type="text" class="form-control input-medium" id="codhoja_add" name="codhoja_add" value="Cod.">
				 ?>
					<input type="text" class="form-control input-medium" id="codhoja_add" name="codhoja_add" placeholder="Cod." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cod.'" />

				<?php

				 echo '</td>';
             echo '</tr>';
             echo '<tr>';
               echo '<th>'.NCS_DESCRIPCION.': </th>';
                 echo '<td><textarea class="textareanormal" name="descripcion_add" value=""></textarea></td>';
              echo '</tr>';
              echo '<tr>';
                 echo '<th>'.NCS_FECHA_APERTURA.': </th>';
                echo '<td>';
				echo '<input id="date" class="datepicker" name="fecha_add" />';// Date picker**************************************
                echo '</td>';
             echo '</tr>';
             echo '<tr>';
               echo '<th>'.DOCUMENTOS.':</th>';
				// echo '<td><input type="text" class="form-control input-medium" id="docum_add" name="docum_add" value="Docs..."></td>';

				echo '<td>';

				 ?>
					<input type="text" class="form-control input-medium" id="docum_add" name="docum_add" placeholder="Docs..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Docs...'" />

				<?php

				echo '</td>';
		 echo '</tr>';
		 echo '<tr>';
		   echo '<th>'.NCS_ABIERTOPOR.':</th>';
			 echo '<td>';
			  echo '<select name="abiertopor_add" class="span4 btn-info">';
				echo '<option>...</option>';
						$sql3 = "SELECT * FROM members
									WHERE active='Yes'
									ORDER BY username ASC";
						$sql3 = mysqli_query($mysqli, $sql3);
						if (!defined('username')) {
									 define('USERNAME', 'username');
						}
						while ($row3 = mysqli_fetch_assoc($sql3)) {
								echo '<option value="'.$row3['username'].'">'.$row3['username'].'</option>';
						}
                echo '</select>';
                echo '</td>';
             echo '</tr>';
              echo '<tr>';
               echo '<th>'.NCS_AFECTAA.':</th>';
                echo '<td>';

                 echo '<select name="afectaa_add" class="span4 btn-danger">';
                   echo '<option>...</option>';
                   $sql4 = "SELECT afectaa FROM afectaa";
                   $sql4 = mysqli_query($mysqli, $sql4);
        if (!defined('afectaa')) {
                     define('AFECTAA', 'afectaa');
        }
        while ($row4 = mysqli_fetch_assoc($sql4)) {
                 echo '<option value="'.$row4['afectaa'].'">'.$row4['afectaa'].'</option>';
        }
         echo '</select>';

               echo '</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_CAUSAS.': </th>';
                echo '<td><textarea class="textareanormal" name="causas_add" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_ACCIONES.': </th>';
               echo '<td><textarea class="textareanormal" name="acciones_add" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_PLAZO.':</th>';


			   //echo '<td><input type="text" class="form-control input-medium" id="plazo_add" name="plazo_add" value="0"></td>';
			   	echo '<td>';

				 ?>
					<input type="text" class="form-control input-medium" id="plazo_add" name="plazo_add" placeholder="Nº días" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº días'" />

				<?php

				echo '</td>';

            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_CIERRE_PARCIAL.':</th>';
               echo '<td><textarea class="textareanormal" name="cierresparc_add" value=""></textarea></td>';
            echo '</tr>';
           echo '<tr>';
              echo '<th>'.NCS_EFICACIA.':</th>';
                echo '<td><textarea class="textareanormal" name="eficacia_add" value=""></textarea></td>';
           echo '</tr>';
           echo '<tr>';
              echo '<th>'.NCS_FECHACIERRE.':</th>';
                echo '<td>';

				echo '<input id="date2" class="datepicker" name="cerradofecha_add" />';// Date picker**************************************
              echo '</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_DESVIACION.':</th>';
				 echo '<td><input type="text" class="form-control input-medium" id="desviacion_add" name="desviacion_add" value="0"></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>Visible:</th>';
                 echo '<td>';
                  echo '<select size="1" name="visible_add" value="">';
                   echo '<option selected>1</option>';
                   echo '<option>0</option>';
                 echo '</td>';
             echo '</tr>';
                 echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ABRIR . '</button></td>';




        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        if (isset($_POST['ai_add'])) {
            @$ai_Post = $_POST['ai_add'];
        }
        if (isset($_POST['numhoja_add'])) {
            @$numhoja_Post = $_POST['numhoja_add'];
        }
        if (isset($_POST['codhoja_add'])) {
            @$codhoja_Post = $_POST['codhoja_add'];
        }
        if (isset($_POST['descripcion_add'])) {
           //@$descripcion_Post = $_POST['descripcion_add'];
		   $descripcion_Post = mysqli_real_escape_string($mysqli,$_POST['descripcion_add']);
        }
        if (isset($_POST['fecha_add'])) {
            @$fecha_Post = $_POST['fecha_add'];
        }
        if (isset($_POST['docum_add'])) {
           //@$docum_Post = $_POST['docum_add'];
		   $docum_Post = mysqli_real_escape_string($mysqli,$_POST['docum_add']);

        }

		$abiertopor_Post = (isset ($_POST ['abiertopor_add'])) ? $_POST ['abiertopor_add'] : '';


        if (isset($_POST['afectaa_add'])) {
            @$afectaa_Post = $_POST['afectaa_add'];
        }
        if (isset($_POST['causas_add'])) {
            //@$causas_Post = $_POST['causas_add'];
			 $causas_Post = mysqli_real_escape_string($mysqli,$_POST['causas_add']);
        }
        if (isset($_POST['acciones_add'])) {
            //@$acciones_Post = $_POST['acciones_add'];
			$acciones_Post = mysqli_real_escape_string($mysqli,$_POST['acciones_add']);
        }
        if (isset($_POST['plazo_add'])) {
            @$plazo_Post = $_POST['plazo_add'];
        }
        if (isset($_POST['cierresparc_add'])) {
            //@$cierresparc_Post = $_POST['cierresparc_add'];
			$cierresparc_Post = mysqli_real_escape_string($mysqli,$_POST['cierresparc_add']);
        }
        if (isset($_POST['eficacia_add'])) {
            //@$eficacia_Post = $_POST['eficacia_add'];
			$eficacia_Post = mysqli_real_escape_string($mysqli,$_POST['eficacia_add']);
        }
        if (isset($_POST['cerradofecha_add'])) {
            @$cerradofecha_Post = $_POST['cerradofecha_add'];
        }
        if (isset($_POST['desviacion_add'])) {
            @$desviacion_Post = $_POST['desviacion_add'];
        }
        if (isset($_POST['visible_add'])) {
            @$visible_Post = $_POST['visible_add'];
        }

        $sql =  mysqli_query($mysqli,
                 "INSERT INTO hojasdemejora
                  (ai, numhoja, codhoja,
                  descripcion, fecha,
                  docum, abiertopor,
                  afectaa, causas,
                  acciones, plazo,
                  cierresparc, eficacia,
                  cerradofecha, desviacion,
                  visible)
                  VALUES ('".$ai_Post."', '".$numhoja_Post."',
                  '".$codhoja_Post."', '".$descripcion_Post."',
                  '".$fecha_Post."', '".$docum_Post."',
                  '".$abiertopor_Post."', '".$afectaa_Post."',
                  '".$causas_Post."', '".$acciones_Post."',
                  '".$plazo_Post."', '".$cierresparc_Post."',
                  '".$eficacia_Post."', '".$cerradofecha_Post."',
                  '".$desviacion_Post."', '".$visible_Post."')");
        if ($sql) {

		if (isset($_GET['id'])) {
            @$id = $_GET['id'];
        }


            $sql5 = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = ( SELECT MAX(id) FROM hojasdemejora)");
            $data5 = mysqli_fetch_row($sql5);
            echo '<br /><br /><br />';
			echo NC;
            echo '&nbsp;<span class="documenttitle">' . $data5 ['2'] . '</span>&nbsp;';
            echo ANADIDA;
            echo '!';

        } else {
 echo "Error message = ".((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
            echo ERROR_ANADIR_REGISTRO;
        }
    }
}

if ($aktion == "change") {
    $sql6 = mysqli_query($mysqli, "SELECT * FROM hojasdemejora ORDER BY id DESC");
        echo '<div align="center">';
		echo '' . NCS_LISTA . '</div>';

	   echo '<table id="myTable" class="sortable">';
        echo '<thead>';

			echo '<tr><th>Id</th><th style width="10%">' . NCS_NUMERO . '</th>
			<th style width="70%">'.NCS_DESCRIPCION.'</th>
			<th style width="10%">'.NCS_FECHA_APERTURA.'</th>
			<th>' . NCS_ABIERTOPOR . '</th>

			<th>' . CERRADOFECHA . '</th>
			<th><a href="#" alt="' . NCS_MODIFICAR_NC . '" title="' . NCS_MODIFICAR_NC . '" /><i class="fa fa-edit" style="color:#9fff30"></i></a></th>
			<th><a href="#" alt="' . NCS_IMPRIMIR . '" title="' . NCS_IMPRIMIR . '" /><i class="fa fa-print" style="color:#9fff30"></i></a></th>
			</tr>';
		 echo '</thead>';
		 echo '<tbody>';

    while ($row6 = mysqli_fetch_row($sql6)) {
        echo "<tr>";
        echo "<td style width='5%'>".$row6['0']."</td>";
        echo "<td>";

        			?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $row6['0'] ?>"><?php echo $row6['2'] ?></a>

								<span>
								<br />
								<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
								<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row6['0']; ?>"><i class="fa fa-plus fa-2x" style="position:absolute; left:10px; top:10px; color:#9fff30;"></i></a><!--</div>-->

								<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row6['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row6['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

								<a href="mod/javaformdelete.php" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row6['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

								<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row6['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>


								<?php

									echo "<table class=print>
											<tbody>
											<tr>
											<th>" . NCS_NUMERO . " </th><td>$row6[2]</td>
											</tr>
											<tr>
												<th>" . DESCRIPCION . " </th><td> <font color='red'>" . strip_tags($row6['4'] . '<font>, <b>') . "</font></td>
											</tr>
											<tr>
												<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th><td>$row6[1]</td>
											</tr>
											<tr>
												<th>" . DOCUMENTACION . "</th><td>$row6[6]</td>
											</tr>
											<tr>
												<th>" . NCS_ABIERTOPOR . "</th><td>$row6[7]</td>
											</tr>
											<tr>
												<th>" . NCS_AFECTAA . "</th><td>$row6[8]</td>
											</tr>
											<tr>
												<th>" . NCS_CAUSAS . "</th><td>" . strip_tags($row6['9'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_ACCIONES . "</th><td>" . strip_tags($row6['10'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_EFICACIA . "</th><td>" . strip_tags($row6['13'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . NCS_PLAZO . "</th><td>$row6[11]</td>
											</tr>
											<tr>
												<th>" . NCS_CIERRE_PARCIAL . "</th><td>" . strip_tags($row6['12'], '<font>, <b>') . "</td>
											</tr>
											<tr>
												<th>" . FECHA . "</th><td>$row6[5]</td>
											</tr>
											<tr>
												<th>" . NCS_DESVIACION . "</th><td>$row6[15]</td>
											</tr>
											<tr>
												<th>" . NCS_FECHACIERRE . "</th><td>$row6[14]</td>
											</tr>
											</tbody>
											<tr> </table>";
								?>
								</span>
						</div>
					<?php
				echo "</td>";

        echo "<td>".$row6['4']."</td>";
        echo "<td>".$row6['5']."</td>";
        echo "<td>".$row6['7']."</td>";
        echo "<td>".$row6['14']."</td>";
		echo "<td>
					<a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=".$row6['0']."' alt='".NCS_EDITAR_NC."-$row6[0]' title='".NCS_EDITAR_NC."-$row6[0]' />
						<i class='fa fa-pencil' style='color:#9fff30'></i>
					</a>
			  </td>";
		echo "<td>
					<a href='?seccion=ncs_print&amp;aktion=change_id&amp;id=".$row6['0']."' alt='".NCS_IMPRIMIR."-$row6[0]' title='".NCS_IMPRIMIR."-$row6[0]' />
						<i class='fa fa-print' style='color:#9fff30'></i>
					</a>
			   </td>";
        echo "</tr>";
    }
        echo '</tbody>';
        echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['ai_change']))
        AND (empty($_POST['numhoja_change']))
        AND (empty($_POST['codhoja_change']))
        AND (empty($_POST['descripcion_change']))
        AND (empty($_POST['fecha_change']))
        AND (empty($_POST['docum_change']))
        AND (empty($_POST['abiertopor_change']))
        AND (empty($_POST['afectaa_change']))
        AND (empty($_POST['causas_change']))
        AND (empty($_POST['acciones_change']))
        AND (empty($_POST['plazo_change']))
        AND (empty($_POST['cierresparc_change']))
        AND (empty($_POST['eficacia_change']))
        AND (empty($_POST['cerradofecha_change']))
        AND (empty($_POST['desviacion_change']))
        AND (empty($_POST['visible_change']))) {
        $id = (int)$_GET['id'];
        $sql7 = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = $id");
        $data7 = mysqli_fetch_row($sql7);

        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>'.NCS_EDITAR_NC.'</caption>';
        echo '<tbody>';
        echo '<tr>';
          echo '<th>Id: </th>';
          echo '<td><input class="inputfecha" name="id_change" value="'.$data7[0].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.AUDITORIAS_NUMERO_AUDITORIA.': </th>';
              echo '<td>';
               echo '<select name="ai_change" class="span4 btn-warning">';
                    echo '<option>'.$data7[1].'</option>';
                     $sql8 = "SELECT ai FROM aisgc ORDER BY id DESC";
                     $sql8 = mysqli_query($mysqli, $sql8);
        if (!defined('ai')) {
             define('AI', 'ai');
        }
        while ($row8 = mysqli_fetch_assoc($sql8)) {
            echo '<option value="'.$row8['ai'].'">'.$row8['ai'].'</option>';
        }
                echo '</select>';
              echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_NUMERO.': </th>';
          echo '<td><input class="inputfecha" name="numhoja_change" value="'.$data7[2].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.CODIGO.': </th>';
          echo '<td><input class="inputfecha" name="codhoja_change" value="'.$data7[3].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_DESCRIPCION.': </th>';
          echo '<td><textarea class="textareanormal" name="descripcion_change">'.$data7[4].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_FECHA_APERTURA.': </th>';
           echo '<td>';

		   echo '<input id="date" class="datepicker" name="fecha_change" value="' . $data7[5] . '" />';
           echo '</td>';

        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_REFERENCIA_DOCUMENTAL.': </th>';
          echo '<td><input class="inputnormal" name="docum_change" value="'.$data7[6].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_ABIERTOPOR.': </th>';
           echo '<td>';

           echo '<select name="abiertopor_change" class="span4 btn-danger">';
                echo '<option>'.$data7[7].'</option>';
                 $sql9 = "SELECT * FROM members
							WHERE actividad='auditor'
							AND active='Yes'
							ORDER BY username ASC";
                 $sql9 = mysqli_query($mysqli, $sql9);
				if (!defined('username')) {
							 define('USERNAME', 'username');
				}
        while ($row9 = mysqli_fetch_assoc($sql9)) {
            echo '<option value="'.$row9[username].'">'.$row9[username].'</option>';
        }
         echo '</select>';

          echo '</td>';

        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_AFECTAA.': </th>';
          echo '<td>';

            echo '<select name="afectaa_change" class="span4 btn-info">';
                echo '<option>'.$data7[8].'</option>';
                 $sql10 = "SELECT afectaa FROM afectaa";
                 $sql10 = mysqli_query($mysqli, $sql10);
        if (!defined('afectaa')) {
             define('AFECTAA', 'afectaa');
        }
        while ($row10 = mysqli_fetch_assoc($sql10)) {
             echo '<option value="'.$row10[afectaa].'">'.$row10[afectaa].'</option>';

        }
           echo '</select>';
             echo '&nbsp&nbsp';
            echo NCS_SELECCIONE_PARA_CAMBIAR;

          echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_CAUSAS.': </th>';
          echo '<td><textarea class="textareanormal" name="causas_change">'.$data7[9].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_ACCIONES.': </th>';
          echo '<td><textarea class="textareanormal" name="acciones_change">'.$data7[10].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_PLAZO.': </th>';
          echo '<td><input class="inputfecha" name="plazo_change" value="'.$data7[11].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_CIERRE_PARCIAL.': </th>';
          echo '<td><textarea class="textareanormal" name="cierresparc_change">'.$data7[12].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_EFICACIA.': </th>';
          echo '<td><textarea class="textareanormal" name="eficacia_change">'.$data7[13].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_FECHACIERRE.': </th>';
          echo '<td>';

		  echo '<input id="date2" class="datepicker" name="cerradofecha_change" value="' . $data7[14] . '" />';

          echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_DESVIACION.': <t/h>';
          echo '<td><input class="inputfecha" name="desviacion_change" value="'.$data7[15].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>Visible: </th>';
          echo '<td><input class="inputid" name="visible_change" value="'.$data7[16].'"></td>';
        echo '</tr>';
          echo '<td colspan="2"><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        $sql11 = mysqli_query($mysqli, "UPDATE hojasdemejora SET ai='$_POST[ai_change]',
                            numhoja='$_POST[numhoja_change]',
                            codhoja='$_POST[codhoja_change]',
                            descripcion='$_POST[descripcion_change]',
                            fecha='$_POST[fecha_change]',
                            docum='$_POST[docum_change]',
                            abiertopor='$_POST[abiertopor_change]',
                            afectaa='$_POST[afectaa_change]',
                            causas='$_POST[causas_change]',
                            acciones='$_POST[acciones_change]',
                            plazo='$_POST[plazo_change]',
                            cierresparc='$_POST[cierresparc_change]',
                            eficacia='$_POST[eficacia_change]',
                            cerradofecha='$_POST[cerradofecha_change]',
                            desviacion='$_POST[desviacion_change]',
                            visible='$_POST[visible_change]'
                            WHERE id=$_GET[id]");
        if ($sql11) {

        $id = (int)$_GET['id'];
        $sql11 = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = $id");
        $data11 = mysqli_fetch_row($sql11);
            echo 'Nc <span class="documenttitle">'.$data11[2].'</span>&nbsp;'; echo ACTUALIZADA; echo '!';
        }
    }
}

?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
