<?php
// connect to database
$dbconnect = new mysqli ( 'localhost', 'biovazqu_avazque', 'mip@@@#5940', 'biovazqu_avazquez' );
$result = $dbconnect->query ( "SELECT nombre FROM carnets WHERE TO_DAYS(proxima)<To_DAYS(NOW());" );
// if there are any records matching this query we send an email listing each one using 'part_no' as the identifier in this case
if ($result->num_rows >= 1) {
	$email = 'javier@textblock.org, dejuan0@textblock.org';
	$subject = "Carnets fuera de plazo";
	$message = 'Estos trabajadores deben renovar sus carnets:\n\n';
	while ( $row = $result->fetch_assoc () ) {
		$message .= "{$row['nombre']}\n";
	}
	if (mail ( $email, $subject, $message )) {
		echo "Se ha mandado un mail a avazquez@miproma.es y a javier@textblock.org, con los nombres de los que tienen que renovar los carnets";
	} else {
		echo "mail unsuccessful";
		echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
	}
}

if ($result->num_rows == 0) {
	
		echo "<h3>No hay trabajadores fuera de plazo</h3>";
	
}
?>