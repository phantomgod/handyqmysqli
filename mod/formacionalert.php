<?php
// connect to database
$dbconnect = new mysqli ( 'localhost', 'biovazqu_avazque', 'mip@@@#5940', 'biovazqu_avazquez' );
$result = $dbconnect->query ( "SELECT * FROM (
									SELECT trabajador, SUM(horas) AS horas
									FROM cursos WHERE fecha BETWEEN NOW() - INTERVAL 1000 DAY AND NOW()
									GROUP BY trabajador
									) c
							WHERE c.horas <= '20';" );
// if there are any records matching this query we send an email listing each one using 'part_no' as the identifier in this case
if ($result->num_rows >= 1) {

	//$email = 'javier@textblock.org,dejuan0@textblock.org';

	$recipients = array(
		  "javier@textblock.org",
		  "dejuan0@gmail.com",
		  // more emails
		);
		$email = implode(',', $recipients); // your email address

	$subject = 'Posible falta de formación';
	$message = 'Estos trabajadores deben reanudar su formación:';

	$headers = 'From: javier@textblock.org'."\r\n"
	.'Content-Type: text/plain; charset=UTF-8'."\r\n";
	 $headers = "MIME-Version: 1.0\r\n";


	while ( $row = $result->fetch_assoc () ) {

	$message .= "{$row['trabajador']},";

	}

	if (mail ( $email, $subject, $message, $headers )) {
		echo "Se ha mandado un mail a avazquez@miproma.es y a javier@textblock.org, con los nombres de los que tienen que actualizar la formaci&oacute;n (si procede), ya que tienen menos de 20 horas en los &uacute;ltimos tres a&ntilde;os, seg&uacute;n los datos registrados en la plataforma de Oficina de calidad.";
	} else {
		echo "mail unsuccessful";
		echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
	}
}

if ($result->num_rows == 0) {

		echo "<h3>No hay trabajadores sin formación en los últimos 3 años</h3>";

}
?>
