<?php
class MySQL{
private $conexion;
private $total_consultas;
public function MySQL(){
if(!isset($this->conexion)){
$username="biovazqu_avazque";$password="mip@@@#5940";$database="biovazqu_avazque"; $server="localhost";
$this->conexion = (mysql_connect($server,$username,$password)) or die(mysql_error());
mysql_select_db($database,$this->conexion) or die(mysql_error());
mysql_query ("SET NAMES 'iso 8859-1'");
}
}
public function consulta($consulta){
$this->total_consultas++;
$resultado = mysql_query($consulta,$this->conexion);
if(!$resultado){
echo 'MySQL Error: ' . mysql_error();
exit;
}
return $resultado;
}
public function fetch_array($consulta){
return mysql_fetch_array($consulta);
}
public function num_rows($consulta){
return mysql_num_rows($consulta);
}
public function getTotalConsultas(){
return $this->total_consultas;
}
}
$db_name = "biovazqu_avazque";    // The database we created earlier in phpMyAdmin.
$db_server = "localhost";    // Change if you have this hosted.
$db_user = "biovazqu_avazque";    // Your USERNAME    
$db_pass = "mip@@@#5940";     // Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying.


$mysqli = new MySQLi($db_server, $db_user, $db_pass, $db_name) 
            or die(mysqli_error());
$mysqli->set_charset("iso 8859-1");

// Para editdeletedocs, de manera que pueda llamar a este archivo y no al suyo        
$mysql_hostname = "localhost";
$mysql_user = "biovazqu_avazque";
$mysql_password = "mip@@@#5940";
$mysql_database = "biovazqu_avazquez";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
mysql_query ("SET NAMES 'iso 8859-1'");

?>