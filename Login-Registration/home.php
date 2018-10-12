<?php
    session_start();
    include_once 'include/class.user.php';

    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
	?>
<!DOCTYPE HTML>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        <title>Home</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    </head>

    <body>
        <div id="container" class="container">
            <div id="header">
                <a href="home.php?q=logout">LOGOUT</a>
            </div>
            <div id="main-body">
    			<br/><br/><br/><br/>
    			<h1>
                  Hello <?php $user->get_fullname($uid); ?>
<br />
				  
				  <?php

				   $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT userpage FROM users WHERE uid='$uid'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
			//echo "k1";
			if (! defined('userpage')) {
            define('USERPAGE', 'userpage');
			}
						
						while ($row = mysqli_fetch_assoc($sql)) {
							echo '<a href="' . $row [USERPAGE] . '">Pinche aqu&iacute; para ver sus resultados</a>';
						}
				  ?>
				  
    			</h1>	
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>