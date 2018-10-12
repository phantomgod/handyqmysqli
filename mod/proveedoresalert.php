<?php
// connect to database
$dbconnect = new mysqli ( 'localhost', 'biovazqu_avazque', 'mip@@@#5940', 'biovazqu_avazquez' );
$result = $dbconnect->query ( "SELECT GROUP_CONCAT(mailproveedor) FROM `mailproveedorescopia`" );
// if there are any records matching this query we send an email listing each one using 'part_no' as the identifier in this case
if ($result->num_rows >= 1) {

	//$email = 'javier@textblock.org,dejuan0@textblock.org';

	$recipients = array(
		  "javier@textblock.org",
		  "dejuan0@gmail.com",
			"avazquez@miproma.es",
		  // more emails
		);
		$email = implode(',', $recipients); // your email address

	$subject = 'Evaluación de la calidad de los suministros';
	$message = 'Estimado Proveedor:

Con motivo de dar el mejor servicio a nuestros clientes, nos dirigimos a Ud. para comunicarle que por exigencias de nuestro control interno, estamos evaluando la calidad de los productos suministrados por su empresa, para la continua mejora de la calidad de sus suministros y nuestros servicios.

Atentamente.

Miproma Biocontrol S.L.
686.827.718
954680641


CLÁUSULA DE CONFIDENCIALIDAD:
Este mensaje contiene información reservada y confidencial destinada exclusivamente al
destinatario. Si usted no es el destinatario, no está autorizado a copiar, reproducir o distribuir este mensaje ni su contenido. Si ha recibido este mensaje por error, le rogamos que nos lo notifique inmediatamente.';

	$headers = 'From: javier@textblock.org'."\r\n"
	.'Content-Type: text/plain; charset=UTF-8'."\r\n";
	 $headers = "MIME-Version: 1.0\r\n";


	while ( $row = $result->fetch_assoc () ) {

	//$message .= "{$row['mailproveedor']},";

	}

	if (mail ( $email, $subject, $message, $headers )) {
		echo "Se ha mandado un mail a los proveedores con el aviso de ser evaluados.";
	} else {
		echo "mail unsuccessful";
		echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
	}
}

if ($result->num_rows == 0) {

		echo "<h3>No hay resultados</h3>";

}
?>
