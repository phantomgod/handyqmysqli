fa-trash fa 2x<?php
/**
* Mod editar y añadir auditorías al sistema de calidad
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

		<?php echo AINFORMES_ADMINISTRAR; ?> /
			<a	href="?seccion=auditorias_admin&amp;aktion=add"><?php echo AINFORMES_ANADIR; ?></a> ::
			<td><a href="?seccion=auditorias_admin&amp;aktion=change"><?php echo AINFORMES_CAMBIAR; ?></a>

<br />


<?php
/*
 * requires the class require "class.datepicker.php"; // instantiate the object $db=new datepicker(); // uncomment the next line to have the calendar show up in german //$db->language = "dutch"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
 */

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['ai'] ))
			and (empty ( $_POST ['Fecha'] ))
			and (empty ( $_POST ['AreaAuditada'] ))
			and (empty ( $_POST ['Documentacion'] ))
			and (empty ( $_POST ['Auditor'] ))
			and (empty ( $_POST ['ObjetoAuditoria'] ))
			and (empty ( $_POST ['Resultado'] ))) {

		echo '<br />';
		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<tbody>';
		echo '<tr>';
		echo '<th style width="15%">';
		echo AINFORMES_NUMERO;
		echo '</th>';
		echo '<td>';
		echo ' <select name="ai" class="span4 btn-success" value="">';
		echo '<option>ai...</option>';
		$sql = "SELECT * FROM aisgc ORDER BY fecha DESC";
		$sql = mysqli_query($mysqli,  $sql );
		mysqli_query($mysqli,  "SET NAMES 'utf8'" );
		if (! defined ( 'fecha' )) {
			define ( 'FECHA', 'fecha' );
		}
		if (! defined ( 'ai' )) {
			define ( 'AI', 'ai' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row [AI] . '">' . $row ['ai'] . ' - ' . $row ['fecha'] . ' - ' . $row ['nombreauditoria'] . '</option>';
		}
		echo '</select>';

		?>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="button" class="btn btn-info" value=""
			onclick="Abrir_ventana('mod/ncslistadesplegable/index.php');">Mirar NC´s</button>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="#" onClick="Abrir_ventana('mod/ncsporarea_revsistema.php')">
		<i class="fa fa-bar-chart fa-2x" style="color:#FF5722;"></i></a>

		<?php
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">'.ANADIR.'</button></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo FECHA;
		echo '</th>';
		echo '<td><input id="date" class="datepicker" name="Fecha" />';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_AREA_AUDITADA;
		echo '</th>';
		echo '<td>';
		$sql2 = "(SELECT afectaa FROM afectaa)
                          UNION
                           (SELECT nombrearea FROM areassensibles)";

		if (! defined ( 'nombrearea' )) {
			define ( 'NOMBREAREA', 'nombrearea' );
		}
		if (! defined ( 'afectaa' )) {
			define ( 'AFECTAA', 'afectaa' );
		}
		if (! defined ( 'AreaAuditada' )) {
			define ( 'AREAAUDITADA', 'AreaAuditada' );
		}

		$resultado = mysqli_query($mysqli,  $sql2 );
		while ( $nombrearea = mysqli_fetch_array( $resultado ) ) {
			echo '&nbsp;&nbsp;&nbsp;<input id="IDnombrearea[]" name="AreaAuditada[]" type="checkbox" value="' . $nombrearea ['afectaa'] . '">&nbsp;' . $nombrearea ['afectaa'] . '';
		}
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo DOCUMENTACION;
		echo '</th>';
		echo '<td><textarea class="textareasmall" name="Documentacion" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AUDITORIAS_AUDITOR;
		echo '</th>';
		echo '<td>';
		$sql3 = "SELECT * FROM members
					WHERE actividad='auditor'
					AND active='Yes'
					ORDER BY username ASC";

		$resultado = mysqli_query($mysqli,  $sql3 );
		while ( $nombreauditor = mysqli_fetch_array( $resultado ) ) {
			echo '&nbsp;&nbsp;&nbsp;<input id="IDnombreauditor[]" name="Auditor[]" type="checkbox" value="' . $nombreauditor ['username'] . '">&nbsp;' . $nombreauditor ['username'] . '';
		}
		echo '<td>';

		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		?>
				<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'" style="display:inline;">
					<!--<i class="fa fa-question-circle fa-2x"></i>-->
					<a href="#"><?php echo AINFORMES_OBJETO; ?></a>
						<span>
							<?php echo OBJETIVOS_AUDITORIA; ?>
						</span>
				</div>
			<?php

		echo '</th>';
		echo '<td><textarea class="textareasmall" name="ObjetoAuditoria" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo RESULTADO;
		echo '</th>';
		echo '<td><textarea class="textareanormal" name="Resultado" value=""></textarea></td>';
		echo '</tr>';
		echo '<td colspan="2"><button type="submit" class="btn btn-primary">'.ANADIR.'</button></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {

		if (isset ( $_POST ['ai'] )) {
			$ai_Post = $_POST ['ai'];
		}
		if (isset ( $_POST ['Fecha'] )) {
			$Fecha_Post = $_POST ['Fecha'];
		}
		if (isset ( $_POST ['AreaAuditada'] )) {
			$AreaAuditada_Post = $_POST ['AreaAuditada'];
		}

		foreach ( $_POST ['AreaAuditada'] as $afectaa ) {
		$afectaa_Post = (isset ( $_POST ['afectaa'] )) ? $_POST ['afectaa'] : '';
			$afectaa_Post .= '' . $afectaa . ', ';
		}

		$Documentacion_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['Documentacion'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));

		// @$Auditor_Post = mysql_real_escape_string($_POST['Auditor']);
		if (isset ( $_POST ['afectaa'] )) {
			@$afectaa_Post = $_POST ['afectaa'];
		}

		foreach ( $_POST ['Auditor'] as $auditor ) {

			$Auditor_Post = (isset ( $_POST ['auditor'] )) ? $_POST ['auditor'] : '';
			$Auditor_Post .= '' . $auditor . ', ';
		}

		$ObjetoAuditoria_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['ObjetoAuditoria'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$Resultado_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['Resultado'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$sql = mysqli_query($mysqli,  "INSERT INTO informeauditoria (ai, Fecha, AreaAuditada, Documentacion, Auditor, ObjetoAuditoria, Resultado) VALUES ('" . $ai_Post . "', '" . $Fecha_Post . "', '" . $afectaa_Post . "', '" . $Documentacion_Post . "', '" . $Auditor_Post . "', '" . $ObjetoAuditoria_Post . "', '" . $Resultado_Post . "')" );

		if ($sql) {
			echo "<span class='documenttitle'>";
			echo AINFORMES_INFORME;
			echo "&nbsp;";
			echo ANADIDA;
			echo "</span>";
		} else {
			echo ERROR_ANADIR_REGISTRO;
		}
	}
}

if ($aktion == "change") {
	$sql = mysqli_query($mysqli,  "SELECT i.*, a.nombreauditoria FROM informeauditoria i, aisgc a WHERE i.ai=a.ai ORDER BY i.id DESC" );
	mysqli_query($mysqli,  "SET NAMES 'utf8'" );

	if (! defined ( 'ai' )) {
		define ( 'AI', 'ai' );
	}
	echo '<span class="yellow">'. AINFORMES_CAMBIAR . '</span>';
	echo AINFORMES_ADVERTICE;
	echo '<table id="myTable" class="sortable">';
		echo '<thead>';
				echo '<tr>';
					echo '<th>Id</th>';
					echo '<th>';
					echo AINFORMES_INFORME;
					echo '</th>';
					echo '<th>';
					echo FECHA;
					echo '</th>';
					echo '<th>';
					echo AINFORMES_AREA_AUDITADA;
					echo '</th>';
					// <!--<th>Documentaci&oacute;n</th>-->
					echo '<th>';
					echo AUDITORIAS_AUDITOR;
					echo '</th>';
					echo '<th><a href="#" alt="' . AINFORMES_ADMINISTRAR . '" title="' . AINFORMES_ADMINISTRAR . '"><i class="fa fa-edit" style="color:#ffeb3b;"></i></th>';
					echo '<th><a href="#" alt="' . IMPRIMIR_AUDITORIAS . '" title="' . IMPRIMIR_AUDITORIAS . '"><i class="fa fa-print" style="color:#ffeb3b;"></i></th>';
				echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
				echo "<tr>";
					echo "<td>" . $row ['0'] . "</td>";

					echo "<td>";
						?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">

						<a href="?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row ['0']; ?>" alt="Editar - <?php echo $row ['3']; ?>" title="Editar informe de auditoría a - <?php echo $row ['3']; ?>"><?php echo $row['1']; ?></a></a>

							<span>

							<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#ffeb3b;"></i></a>

							<a href="mod/javaformdelete_informes.php?var=<?php echo $row ['1']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#ffeb3b;"></i></a>

							<a href="?seccion=auditorias_admin&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#ffeb3b;"></i></a>

							<div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;">Informe de la : <?php echo $row ['8']; ?></div>
							<br>

								<table>
								<tr>
									<th><?php echo AUDITORIAS_AUDITORIA; ?></th>
									<th><?php echo FECHA; ?></th>
									<th><?php echo AINFORMES_AREA_AUDITADA; ?></th>
									<th></th>
								</tr>
								<tr>
									<td><?php echo $row['1']; ?></td>
									<td><?php echo $row['2']; ?></td>
									<td colspan=2><?php echo $row['3']; ?></td>
								</tr>
								<tr>
									<th colspan=2><?php echo DOCUMENTACION; ?></th>
									<th colspan=2><?php echo AUDITORIAS_AUDITOR; ?></th>
								</tr>
								<tr>
									<td colspan=2><?php echo $row['4']; ?></td>
									<td colspan=2><?php echo $row['5']; ?></td>
								</tr>
								<tr>
									<th colspan=2><?php echo AINFORMES_OBJETO; ?></th>
									<th><?php echo RESULTADO; ?></th>
								</tr>
								<tr>
								<td colspan=2><?php echo $row['6']; ?></td>
								<td colspan=2><?php echo $row['7']; ?></td></tr>
								</td></tr></table>'>

							</span>
						</div>


						<?php
					echo "</td>";

					echo "<td>" . $row ['2'] . "</td>";
					echo "<td>" . $row ['3'] . "</td>";
					// echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
					echo "<td>" . $row ['5'] . "</td>";
					 echo '<td><a href="?seccion=auditorias_admin&amp;aktion=change_id&amp;id='.$row['0'].'" alt="Editar - ' . $row ['1'] . '" title="Editar - ' . $row ['1'] . '"><i class="fa fa-pencil" style="color:#ffeb3b;"></i></a></td>';
					 echo '<td><a href="?seccion=auditorias_print&amp;aktion=print_id&amp;id='.$row['0'].'" alt="Imprimir - ' . $row ['1'] . '" title="Imprimir - ' . $row ['1'] . '"><i class="fa fa-print" style="color:#ffeb3b;"></i></a></td>';
				echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}


if ($aktion == "change_id") {
	if ((empty ( $_POST ['ai_change'] )) and (empty ( $_POST ['Fecha_change'] )) and (empty ( $_POST ['AreaAuditada_change'] )) and (empty ( $_POST ['Documentacion_change'] )) and (empty ( $_POST ['Auditor_change'] )) and (empty ( $_POST ['ObjetoAuditoria_change'] )) and (empty ( $_POST ['Resultado_change'] ))) {

		$id = ( int ) $_GET ['id'];
		mysqli_query($mysqli,  "SET NAMES 'utf8'" );
		$sql = mysqli_query($mysqli,  "SELECT * FROM informeauditoria WHERE id=$id " );
		$data = mysqli_fetch_row( $sql );

		echo '<span class="yellow">'. AINFORMES_PRINT_DETAILS . '</span>';

		?>
		<a
		href="mod/ncslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
		title="Consultar no conformidades"
		class="thickbox"
		title="Consultar no conformidades">
		<i class="fa fa-question fa-2x" style="color:#5b862a;"></i></a>
		<?php

		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>';
		echo 'ID';
		echo '</th>';
		echo '<td>'.$data[0].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_INFORME;
		echo '</th>';
		echo '<td><input type="text" class="form-control input-large" id="ai_change" name="ai_change" value="'.$data[1].'"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo FECHA;
		echo '</th>';
		echo '<td>';
		?>
			<input id='date1' class='datepicker' name='Fecha_change'
				value="<?php echo $data[2]; ?>" />

		<?php
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_AREA_AUDITADA;
		echo '</th>';
		//echo '<td><input type="text" class="form-control input-large" id="AreaAuditada_change" name="AreaAuditada_change" value="'.$data[3].'"></td>';

		echo '<td>';

            echo '<select name="AreaAuditada_change" class="span4 btn-info">';
                echo '<option>'.$data[3].'</option>';
                 $sql = "(SELECT afectaa FROM afectaa)
                          UNION
                           (SELECT nombrearea FROM areassensibles)";
                 $sql = mysqli_query($mysqli, $sql);
        if (!defined('afectaa')) {
             define('AFECTAA', 'afectaa');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
             echo '<option value="'.$row['afectaa'].'">'.$row['afectaa'].'</option>';

        }
           echo '</select>';
             echo '&nbsp&nbsp';
            echo NCS_SELECCIONE_PARA_CAMBIAR;

          echo '</td>';


		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo DOCUMENTACION;
		echo '</th>';
		echo '<td><textarea class="inputlargo" name="Documentacion_change">' . $data [4] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AUDITORIAS_AUDITOR;
		echo '</th>';
		echo '<td><input type="text" class="form-control input-large" id="Auditor_change" name="Auditor_change" value="'.$data[5].'"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo AINFORMES_OBJETO;
		echo '</th>';
		echo '<td><textarea class="inputlargo" rows="5" name="ObjetoAuditoria_change">' . $data [6] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo RESULTADO;
		echo '</th>';
		echo '<td><textarea class="textareanormal" rows="15" name="Resultado_change">' . $data [7] . '</textarea></td>';
		echo '</tr>';
		echo '<td colspan="2"><button type="submit" class="btn btn-warning">'.MODIFICAR.'</button></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$id = ( int ) $_GET ['id'];
		$sql = mysqli_query($mysqli,  "UPDATE informeauditoria SET ai='$_POST[ai_change]',
                            Fecha='$_POST[Fecha_change]',
                            AreaAuditada='$_POST[AreaAuditada_change]',
                            Documentacion='$_POST[Documentacion_change]',
                            Auditor='$_POST[Auditor_change]',
                            ObjetoAuditoria='$_POST[ObjetoAuditoria_change]',
                            Resultado='$_POST[Resultado_change]'
                            WHERE id=$id" );
		$id = ( int ) $_GET ['id'];
		$sql2 = mysqli_query($mysqli,  "SELECT * FROM informeauditoria WHERE id = $id " );
		$data = mysqli_fetch_row( $sql2 );
		echo '<br />';
		echo AINFORMES_INFORME;
		echo '&nbsp;<span class="documenttitle">' . $data [1] . '</span>&nbsp;';
		echo ACTUALIZADO;
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
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
