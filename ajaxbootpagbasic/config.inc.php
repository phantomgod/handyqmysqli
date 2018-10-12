<?php

$db_username = 'biovazqu_avazque';
$db_password = 'mip@@@#5940';
$db_name = 'biovazqu_avazquez';
$db_host = 'localhost';
$item_per_page = 3;

$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
$connecDB->set_charset("utf8"); 
?>