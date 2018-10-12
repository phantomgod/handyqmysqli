<?php
ob_start();
session_start();
//database credentials
define('DBHOST','localhost');
define('DBUSER','biovazqu_avazque');
define('DBPASS','mip@@@#5940');
define('DBNAME','biovazqu_avazquez');

//application address
define('DIR','http://domain.com/');
define('SITEEMAIL','javier@textblock.org');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('../classes/user.php');
$user = new User($db);

 ?>
 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <title>Consulta de resultados de análisis</title>

    <meta name="description" content="Análisis de aguas de clientes de MIPROMA BIOCONTROL">
    <meta name="author" content="BIOCONTROL!">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
<div class="container">
<div class="row">
  <form role="form" action="mail.php" method="post" >
    <div class="col-lg-6">
      <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Enviar una consulta a BIOCONTROL</strong></div>
      <div class="form-group">

	  			<?php
					$sth = $db->prepare("SELECT userpage FROM members WHERE username='$_SESSION[username]'");
					$sth->execute();

					/*print("Fetch the first column from the first row in the result set:\n");
					$result = $sth->fetchColumn();
					print("page = $result\n");*/

				?>

        <label for="name">Nombre</label>
        <div class="input-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $_SESSION['username']; ?>" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
	  	  			<?php
					$sth = $db->prepare("SELECT email FROM members WHERE username='$_SESSION[username]'");
					$sth->execute();

					/*print("Fetch the first column from the first row in the result set:\n");*/
					$result2 = $sth->fetchColumn();
					//print("page = $result2\n");

				?>
        <label for="email">Mail</label>
        <div class="input-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $result2; ?>" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="message">Mensaje</label>
        <div class="input-group"
>
          <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
<!--      <div class="form-group">
        <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputReal" id="InputReal" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>-->
      <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-info pull-right">
    </div>
  </form>

</div>

</div>
</body>
</html>
