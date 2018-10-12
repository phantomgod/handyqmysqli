<?php
/**
* Mod APROVE DOCUMENTS
* de proveedor
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
require_once '../includes/mysqli.php';

function Reject_extlink($idpendiente) {

	$query = "SELECT * FROM solicitudes WHERE id=$idpendiente;";
	$res = mysqli_query($mysqli,  $query );
	$row = mysqli_fetch_array( $res,  MYSQLI_ASSOC );
	extract ( $row );
	$sql = "UPDATE solicitudes SET status=2 WHERE id=$idpendiente;";
	$result = mysqli_query($mysqli,  $sql );
	if ($result) {
		$estado = "Enlace descartado con id=$id y nombre=$titulo"; // Todo ok.
	} else {
		$estado = "Enlace con id=$id y nombre=$titulo no descartado por error de db."; // No descartado por error de DB
	}
	return $estado;
}
function Accept_extlink($idpendiente) {

	// Traspasamos un link pendiente de alta a un link normal.
	// Luego marcamos como aceptado el propio linkpendiente.
	$query = "SELECT * FROM solicitudes WHERE id=$idpendiente;";
	$res = mysqli_query($mysqli,  $query );
	$row = mysqli_fetch_array( $res,  MYSQLI_ASSOC );
	extract ( $row );
	$sql = "SELECT * FROM enlaces WHERE idsolicitud=$idpendiente;";
	$result = mysqli_query($mysqli,  $sql );
	if (mysqli_num_rows( $result ) > 0) {
		return "Enlace duplicado.";
	}

	$sql = "INSERT INTO
           `enlaces`
         ( `idsolicitud`,
           `fecha` ,
           `titulo` ,
           `link` ,
           `comment`,
           `seccionid`,
           `clave1`)
            VALUES
            ( '$id',
              '" . date ( "Y-m-d H:i:s" ) . "' ,
              '" . $titulo . "' ,
              '" . $link . "' ,
              '" . $comment . "' ,
              '" . $seccionid . "',
              '" . $clave1 . "')";

	if (isset ( $sql ) && ! empty ( $sql )) {
		// echo "<!--".$sql."-->";
		$result = mysqli_query($mysqli,  $sql );
		if ($result) { // Inserción correcta.
			$sql = "UPDATE solicitudes SET status=1 WHERE id=$idpendiente;";
			$result = mysqli_query($mysqli,  $sql );
			if ($result) {
				$estado = "Enlace aceptado e insertado con id=$id y nombre=$titulo"; // Todo ok.
			} else {
				$estado = "Enlace insertado pero no aceptado por error de db con id=$id y nombre=$titulo"; // Insertado y no actualizado el estado.
			}
		} else {
			$estado = "Error insertando, el enlace sigue pendiente con id=$id y nombre=$titulo"; // No insertado en la DB.
		}
	}
	return $estado;
}
function writeAndSend($idpendiente) {
	global $mysqli;
	// Escribe información de salida y envia un email según los datos suministrados.
	// Obtenemos los datos de la id pasada en enlacespendientes y procedemos.
	$query = "SELECT * FROM solicitudes WHERE id=$idpendiente;";
	$res = mysqli_query($mysqli,  $query );
	$fields = mysqli_fetch_array( $res,  MYSQLI_ASSOC );
	extract ( $fields );
	if ($emailed == true) {
		return "Mensaje ya enviado con anterioridad para la id=$id y email=$emailcontacto;";
	}
	// Componemos el cuerpo del mensaje.
	switch ($status) {
		case 1 :
			$body = "
            <html>
            <head></head>
            <body>
                Estimad@ $nombrecontacto.<br><br>
                Me pongo en contacto con Usted, para informarle de que su documento <a href='$link'>$titulo</a> ha sido incluido en nuestro sistema documental.<br>
                Le agradecemos el interés mostrado en nuestro directorio<br>
                Sin otro particular reciba un cordial saludo.
              </body>
              </html>
              ";
			$asunto = "Solicitud web aceptada";
			break;
		case 2 :
			$body = "
            <html>
            <head></head>
            <body>
                Estimad@ $nombrecontacto.<br><br>
                Me pongo en contacto con Usted, para informarle de que su documento <a href='$link'>$titulo</a>no ha sido incluido en nuestro sistema documental.<br>
                Revise el documento de nuevo. <br>
                Sin otro particular reciba un cordial saludo.
              </body>
              </html>
              ";
			$asunto = "Solicitud web";
			break;
	}

	// Definir las cabeceras HTML
	$cabeceras = "MIME-Version: 1.0\r\n";
	$cabeceras .= "Content-type: text/html; charset=utf8\r\n";
	$cabeceras .= "From: Calidad Información <avazquez@miproma.es>\r\n";

	$mailresult = mail ( $emailcontacto, $asunto, $body, $cabeceras );

	// Imprimimos los resultados en la pantalla.
	if ($mailresult) {
		$s = marca_link ( $idpendiente );
		return $s . "<br>Mensaje enviado a la direccion $emailcontacto para la id $id y con body:<br>$body<br>";
	} else {
		return "Menaje no enviado por error de db para id=$id tampoco marcado como emailed.";
	}
}
function Marca_link($idpendiente) {
	global $mysqli;
	// Marca emailed a true en enlacespnedientes.
	// Devuelve un log de texto.
	$sql = "UPDATE solicitudes SET emailed=true WHERE id=$idpendiente;";
	$result = mysqli_query($mysqli,  $sql );
	if ($result) {
		return "Enlace con id=$idpendiente marcado como enviado";
	} else {
		return "No marcado el enlace con id=$id por error en db.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="aisgclistadesplegable/style.css" media="screen" />
<STYLE type="text/css">
body {
    background-color: transparent;
}
</style>
</head>
<body>
	<?php

	// Validamos si esta establecido el status de secciones a mostrar
	if (isset ( $_GET ["st"] )) {
		$queryStatus = $_GET ["st"];
	} else {
		$queryStatus = 0; // Status de solicitudes pendientes.
	}
	switch ($queryStatus) {
		case 0 :
			$color = "rgba(102, 204, 255, 0.35);";
			break;
		case 1 :
			$color = "rgba(38, 255, 0, 0.28)";
			break;
		case 2 :
			$color = "rgba(232, 5, 5, 0.31)";
			break;
	}

	?>
	<div id='mainDiv'>
		<div id='diseno1'>
			<a href="directoryhowto4.php?st=0">Solicitudes pendientes.</a>
			<br>
			<a href="directoryhowto4.php?st=1">Solicitudes Aceptadas.</a>
			<br>
			<a href="directoryhowto4.php?st=2">Solicitudes Denegadas.</a>
			<br>
			<a href="directoryhowto4.php?mail=0">Solicitudes pendientes de email de aviso.</a><br /><br />
			
			<?php

			// Validamos las acciones oportunas.
			if (isset ( $_GET ["action"] ) && isset ( $_GET ["id"] ) && ! empty ( $_GET ["id"] )) {
				if ($_GET ["action"] == "accept") {
					$estado = accept_extlink ( $_GET ["id"] );
				}
				if ($_GET ["action"] == "discard") {
					$estado = reject_extlink ( $_GET ["id"] );
				}
				echo "<table class='print' style='border:1px solid #000;'>
                    <tr>
                        <td class='titulonormal1'>
                            $estado
                        </td>
                    </tr>
                </table><br>";
			}
			
			if (! isset ( $_GET ["mail"] )) {
			// Solo ejecutar cuando no es listado de enlaces pendientes.
				$sql = "SELECT e.*,s.nombre snombre  FROM solicitudes e,secciones s 
				WHERE e.seccionid=s.id AND status=$queryStatus ORDER BY fecha DESC";
				global $mysqli;				
				$res = mysqli_query( $mysqli,  $sql );				
				while ( $row = mysqli_fetch_array( $res,  MYSQLI_ASSOC ) ) {
					extract ( $row );
					echo "<table class='print' style='background-color:$color'>\n";
					echo "<tr><td>\n";
					echo "<b>id</b>: $id / <b>Titulo</b>: $titulo<br />";
					echo "<b>URL</b>: <a href='$link' target='_blank' class='link2c2'>$link</a><br />";
					echo "<b>Contacto</b>: $nombrecontacto<br>";
					echo "<b>mail</b>: <a href='mailto:$emailcontacto' class=link2c2>$emailcontacto</a><br />";
					echo "<b>Descripcion: </b><span class='link2c2'>$comment</span><br />";
					echo "<b>Distribuído a</b>: $clave1<br />";
					echo "<b>Sección seleccionada</b>: <u>$snombre</u><br />";
					echo "</td></tr>\n";
					echo "<tr><td>\n";
					switch ($queryStatus) {
						case 0 :
							// Permitir links de aceptar y rechazar desde solicitudes pendientes
							echo "<hr>\n";
							echo "<a href='" . $_SERVER ['PHP_SELF'] . "?action=accept&id=$id' class='link2c2'>Aceptar</a>&nbsp;&nbsp;&nbsp;";
							echo "<a href='" . $_SERVER ['PHP_SELF'] . "?action=discard&id=$id' class='link2c2'>Denegar</a>&nbsp;&nbsp;&nbsp;";
							break;
					}
					echo "</td></tr>\n";
					echo "</table>\n";
					echo "<br>\n";
				}
			} else { // Listado con envio de correo pendiente.
				if ($_GET ["mail"] == 2) { // Marcamos emailed
					$estado = marca_link ( $_GET ["id"] );
				}
				if ($_GET ["mail"] == 1) { // Marcamos emailed
					$estado = writeAndSend ( $_GET ["id"] );
				}
				$estado = "";
				echo "<table class='print' style='border:1px solid #000;'>
                    <tr>
                        <td>
						$estado											
                        </td>
                    </tr>
                </table><br>";
				$sql = "SELECT e.*,s.nombre snombre FROM solicitudes e,secciones s
                 WHERE e.seccionid=s.id AND emailed=false AND status<>0 ORDER BY fecha DESC;";
				$res = mysqli_query($mysqli,  $sql );
				while ( $row = mysqli_fetch_array( $res,  MYSQLI_ASSOC ) ) {
					extract ( $row );
					// Texto en funcion del estado.
					switch ($status) {
						case 0 :
							$tstatus = "PENDIENTE";
							$cstatus = "#66CCFF";
							break;
						case 1 :
							$tstatus = "ACEPTADA";
							$cstatus = "#00CC00";
							break;
						case 2 :
							$tstatus = "DENEGADA";
							$cstatus = "#F36A6A";
							break;
					}

					echo "<table class='print' style='background-color:$color'>\n";
					echo "<tr><td style='color:$cstatus; font-size:20px;'>$tstatus</td></tr>";
					echo "<tr><td class='normal2bl'>\n";
					echo "<b>Titulo</b>: $titulo<br>";
					echo "<b>URL</b>: <a href='$link' target='_blank' class=link2c2>$link</a><br>";
					echo "<b>Persona de contacto</b>: $nombrecontacto<br>";
					echo "<b>email de contacto</b>: <a href='mailto:$emailcontacto' class=link2c2>$emailcontacto</a><br>";
					echo "<b>Descripcion</b>: $comment<br>";
					echo "<b>Sección</b>: $snombre<br>";
					echo "</td></tr>\n";
					echo "<tr><td>\n";
					echo "<hr>\n";
					echo "<a href='" . $_SERVER ['PHP_SELF'] . "?mail=1&id=$id' class='link2c2'>Enviar email.</a>&nbsp;&nbsp;&nbsp;";
					echo "<a href='" . $_SERVER ['PHP_SELF'] . "?mail=2&id=$id' class='link2c2'>Marcar como enviado.</a>&nbsp;&nbsp;&nbsp;";
					echo "</td></tr>\n";
					echo "</table>\n";
					echo "<br>\n";
				}
			}
			?>
		</div>
	</div>
</body>
</html>