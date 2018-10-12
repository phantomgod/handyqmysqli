<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','localhost');
define('DBUSER','biovazqu_avazque');
define('DBPASS','mip@@@#5940');
define('DBNAME','biovazqu_avazquez');

//application address
define('DIR','http://biocontrol.textblock.org/loginregister/');
define('SITEEMAIL','javier@textblock.org');

try {

	//create PDO connection 
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
$user = new User($db); 
?>
<?php
ob_end_flush()
?>