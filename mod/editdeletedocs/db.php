<?php
$mysql_hostname = "127.0.0.1";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "handyq";
$prefix = "";
$bd = ($mysqli = mysqli_connect($mysql_hostname,  $mysql_user,  $mysql_password)) or die("Opps some thing went wrong");
((bool)mysqli_query( $bd, "USE $mysql_database")) or die("Opps some thing went wrong");


?>