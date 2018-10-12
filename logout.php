<?php
    session_start();
    $_SESSION['loggedIn'] = false;
	
echo '<meta http-equiv="refresh" content="3; URL=index.php">';
?>
<html>
<head>
<title>Login</title>
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
</head>
  <body>
  
  <header class="jumbotron subhead" id="overview">
  <div class="container">
    <h2>Página de Trabajador &nbsp;&nbsp;<img src="images/logomiproma.png" width="250px"></h2>
  </div>
</header>
  <div class="container">
    <h3>Ha salido del sistema. <br /><br />Redirigimos a la p&aacute;gina principal en 3 seg.</h3>
	</div>
  </body>
</html> 