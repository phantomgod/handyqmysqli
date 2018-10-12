<?php

$db_name = "biovazqu_avazquez";    // The database we created earlier in phpMyAdmin. 
$db_server = "localhost";    // Change if you have this hosted. 
$db_user = "biovazqu_avazque";    // Your USERNAME     
$db_pass = "mip@@@#5940";     // Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying. 
1

$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
 
// check connection
if ($mysqli->connect_error) {
  trigger_error('Database connection failed: '  . $mysqli->connect_error, E_USER_ERROR);
}


$mysqli->set_charset("utf8");

