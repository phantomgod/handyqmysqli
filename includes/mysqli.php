<?php

$db_name = "biovazqu_avazquez";    // The database we created earlier in phpMyAdmin. 
$db_server = "localhost";    // Change if you have this hosted. 
$db_user = "biovazqu_avazque";    // Your USERNAME     
$db_pass = "mip@@@#5940";     // Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying. 


$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
 
// check connection
if ($mysqli->connect_error) {
  trigger_error('Database connection failed: '  . $mysqli->connect_error, E_USER_ERROR);
}


$mysqli->set_charset("utf8"); 

$db_username = 'biovazqu_avazque';
$db_password = 'mip@@@#5940';
$db_name = 'biovazqu_avazquez';
$db_host = 'localhost';
$item_per_page = 1;

$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
$connecDB->set_charset("utf8"); 


?>

