<?php
/**
* Mod ADMINISTRAR documentos
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
</head>
<body>
<span class="documenttitle"><?php echo DOCMANAGER_INSERT; ?></span>

	<br />
	<?php

	/*
	 * requires the class require "class.datepicker.php"; // instantiate the object $db = new datepicker (); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
	 */
	?>
	<div>
		<div>
			<div>
				<div>
					<form name="form1" method="post"
						action="?seccion=docmanager_insert">
						<div>
							<label for="titulo"><strong><?php echo NOMBRE_DOCUMENTO; ?>:</strong></label>&nbsp;&nbsp;
							<input class="inputlargo" type="text" name="titulo" id="titulo" />
						</div>
						<br />
						<div>
							<label for="autor"><strong><?php echo DOCUMENTO_AUTOR; ?>:</strong></label>&nbsp;&nbsp;
							<?php
							echo '<select name="autor">';
							echo '<option>...</option>';
							$sql = "SELECT DISTINCT auditor
                                                FROM auditores
                                                UNION
                                                SELECT DISTINCT INSPECTOR
                                                FROM inspectores";
							$sql = mysqli_query($mysqli,  $sql );
							if (! defined ( 'auditor' )) {
								define ( 'AUDITOR', 'auditor' );
							}

							while ( $row = mysqli_fetch_assoc( $sql ) ) {
								echo '<option value="' . $row [AUDITOR] . '">' . $row [AUDITOR] . '</option>';
								// echo '<option value="'.$row[inspector].'">'.$row[inspector].'</option>';
							}
							echo '</select>';
							?>

							<!--<input type="text" name="autor" id="autor" />-->

							<label for="fecha"><strong><?php echo FECHA; ?>:</strong></label>
							<!--<input type="text" id="date" name="fecha" /><input type="button"
								value="::" onclick="< ?php echo $db->show('date') ?>">-->
							<input id='date' class='datepicker' name='fecha' />


						</div>
						<br />
						<div>
							<label for="contenido"><strong><?php echo CONTENIDO; ?>:</strong></label>
						</div>
						<div>
							<textarea id="textatareanormal" name="contenido" rows="20"
								cols="100"></textarea>
						</div>
						<div style="margin: 5px 0;">&nbsp;</div>
						<div align="left" style="padding-right: 20px;">
						<button type="submit" name="btn" id="btn" class="btn btn-info">Guardar Cambios</button>
							<!--<button type="submit" class="btn btn-info">' . GUARDAR . '</button>-->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>