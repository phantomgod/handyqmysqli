<?php include 'lang/spanish.lang.php'; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no,location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=350, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>

</head>
<body>

<a href="JavaScript:Abrir_ventana('mod/politica.html')"><strong>Pol&iacute;tica
					de privacidad</strong></a>
	<table class="print">
		<caption>
			<?php echo FORMULARIO_DE_CONTACTO; ?>
		</caption>
		<tbody>
			<tr>
				<td><a href="?seccion=formulariodecontacto&aktion=add"><?php echo ENVIAR; ?></a>
					<!--<a href="?seccion=modifdoc_admin&aktion=change"><?php echo DOCUMENTOS_EDITAR_MODIFICACION; ?></a>-->
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<?php

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] ))
	$aktion = $_GET ['aktion'];

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['nombre'] )) and (empty ( $_POST ['mail'] )) and (empty ( $_POST ['telefono'] )) and (empty ( $_POST ['asunto'] )) and (empty ( $_POST ['mensaje'] ))) {
		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<thead></thead>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . NOMBRE_CLIENTE . ':</th>';
		echo '<td><input class="inputlargo" name="nombre" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . MAIL_CLIENTE . ':</th>';
		echo '<td><input name="mail" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . TELEFONO_CLIENTE . ': </th>';
		echo '<td><input name="telefono" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . SOLICITUD_ASUNTO . '</th>';
		echo '<td><input name="asunto" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . SOLICITUD_MENSAJE . ':</th>';
		echo '<td><textarea class="textareanormal" name="mensaje" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td></td>';
		echo '<td align=left><button type="submit" class="btn btn-info">' . ENVIAR . '</button></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$nombre_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['nombre'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$mail_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['mail'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$telefono_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['telefono'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$asunto_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['asunto'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$mensaje_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli,  $_POST ['mensaje'] ) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$sql = mysqli_query($mysqli,  "INSERT INTO contactos (nombre, mail, telefono, asunto, mensaje) VALUES ('" . $nombre_Post . "', '" . $mail_Post . "', '" . $telefono_Post . "', '" . $asunto_Post . "', '" . $mensaje_Post . "')" );
		if ($sql)
			echo SOLICITUD_ANADIDA;
		else
			echo "Error al enviar los datos!";
	}
}

/*
 * if($aktion == "change"){ $sql = mysql_query("SELECT * FROM modifdoc ORDER BY titulo ASC"); echo '<table class="print">'; echo '<caption>'.DOCUMENTOS_LISTA.'</caption>'; echo '<tbody>'; echo '<tr><th>'.NOMBRE_DOCUMENTO.'</th><th>'.DOCUMENTOS_NUMEROREVISION.'</th><th>'.DOCUMENTOS_FECHAMODIFICACION.'</th></tr>'; while($row = mysql_fetch_row($sql)) { echo "<tr>"; echo "<td><a href='?seccion=modifdoc_admin&aktion=change_id&id=".$row['0']."'>".$row['1']."</a></td>"; echo "<td><a href='?seccion=modifdoc_admin&aktion=change_id&id=".$row['0']."'>".$row['2']."</a></td>"; echo "<td><a href='?seccion=modifdoc_admin&aktion=change_id&id=".$row['0']."'>".$row['5']."</a></td>"; echo "</tr>"; } echo '</tbody>'; echo "</table>"; } if($aktion == "change_id"){ if((empty($_POST['id_change'])) AND (empty($_POST['titulo_change'])) AND (empty($_POST['revision_num_change'])) AND (empty($_POST['modificacion_change'])) AND (empty($_POST['capapart_change'])) AND (empty($_POST['fechamodificacion_change']))){ $id = $_GET['id']; $sql = mysql_query("SELECT * FROM modifdoc WHERE id = $_GET[id] "); $data = mysql_fetch_row($sql); echo '<form action="" method="POST">'; echo '<table class="print">'; echo '<caption>'.DOCUMENTOS_MODIFICACIONES_DETALLES.'</caption>'; echo '<tbody>'; echo '<tr>'; echo '<th>'.NOMBRE_DOCUMENTO.': </th>'; echo '<td>'; echo '<select name="titulo_change">'; echo '<option>'.$data[1].'</option>'; $sql = "SELECT titulo FROM enlaces"; $sql = mysql_query($sql); while($row = mysql_fetch_assoc($sql)) { $row['titulo'] = htmlentities($row['titulo']); echo '<option value="'.$row[titulo].'">'.$row[titulo].'</option>'; } echo '</select></td>'; echo '</tr>'; echo '<tr>'; echo '<th>'.DOCUMENTOS_NUMEROREVISION.':</th>'; echo '<td><input class="inputlargo" name="revision_num_change" value="'.$data[2].'"></td>'; echo '</tr>'; echo '<tr>'; echo '<th>'.DOCUMENTOS_MODIFICACION.': </th>'; echo '<td><textarea class="textareanormal" name="modificacion_change">'.$data[3].'</textarea></td>'; //<input class="inputfecha" name="modificacion_change" value="'.$data[3].'"></td>'; echo '</tr>'; echo '<tr>'; echo '<th>'.DOCUMENTOS_CAPAPART.': </th>'; echo '<td><input class="inputfecha" name="capapart_change" value="'.$data[4].'"></td>'; echo '</tr>'; echo '<tr>'; echo '<th>'.DOCUMENTOS_FECHAMODIFICACION.': </th>'; echo '<td><input class="inputfecha" name="fechamodificacion_change" value="'.$data[5].'"></td>'; echo '</tr>'; echo '<td><input type="submit" value="'.MODIFICAR.'"></td>'; echo '</tr>'; echo '</tbody>'; echo '</table>'; echo '</form>'; }else{ $sql = mysql_query("UPDATE modifdoc SET titulo='$_POST[titulo_change]',revision_num='$_POST[revision_num_change]',modificacion='$_POST[modificacion_change]',capapart='$_POST[capapart_change]',fechamodificacion='$_POST[fechamodificacion_change]' WHERE id=$_GET[id]"); if($sql) echo DOCUMENTO_ACTUALIZADO; } }
 */

?>

	<?php

error_reporting ( 0 );

$sendTo = "javier@textblock.org,enprado@hotmail.com";
$subject = "Solicitud de información sobre Handy-Q";
$nombre = $_POST ["nombre"];
$mail = $_POST ["mail"];
$telefono = $_POST ["telefono"];
$asunto = $_POST ["asunto"];
$mensaje = $_POST ["mensaje"];
$headers .= "";
$message = "\nNombre: " . $nombre . "\nmail: " . $mail . "\ntelefono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
mail ( $sendTo, $subject, $message, $headers );
?>
</body>
</html>