<?php

$db_name = "encuesta_lime1";    // The database we created earlier in phpMyAdmin. 
$db_server = "192.185.96.248";    // Change if you have this hosted. 
$db_user = "encuesta_lime1";    // Your USERNAME     
$db_pass = "oXaTRRQ28902";     // Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying. 


$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
 
// check connection
if ($mysqli->connect_error) {
  trigger_error('Database connection failed: '  . $mysqli->connect_error, E_USER_ERROR);
}


$mysqli->set_charset("utf8"); 

?>

