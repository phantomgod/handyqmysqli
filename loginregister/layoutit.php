<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Consulta de resultados de análisis</title>

    <meta name="description" content="Análisis de aguas de clientes de MIPROMA BIOCONTROL">
    <meta name="author" content="BIOCONTROL!">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
<hr>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<a href="http://www.miproma.es" alt="Miproma Biocontrol" title="Miproma Biocontrol"><img src="images/logo.png" width="400px"></a>
		</div>
		<div class="col-md-4">
			<h2><small>Consulta de resultados de análisis de clientes</small></h2>
			<?php
					$sth = $db->prepare("SELECT userpage FROM members WHERE username='$_SESSION[username]'");
					$sth->execute();

					print("Fetch the first column from the first row in the result set:\n");
					$result = $sth->fetchColumn();
					print("page = $result\n");

				?>
		</div>
		<div class="col-md-4">
			 
			<dl>
				<dt>
				Bienvenido <kbd><?php echo $_SESSION['username']; ?></kbd> &nbsp;<a class="btn btn-success" href='logout.php'>Logout</a>
				</dt>
			</dl>
				
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg">
						<div class="caption">
							<h3>
								Thumbnail label
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Second" src="images/analisisdeagua.jpg">
						<div class="caption">
							<p class="bg-info">
								Resultados de las analíticas de: <kbd><?php echo $_SESSION['username']; ?></kbd>
								&nbsp;&nbsp;&nbsp;
								<a href="<?php echo "" . $result . "" ?>" target="popup" onClick="window.open(this.href, this.target, 'width=660,height=515'); return false;" alt="Ver resultados" title="Ver resultados">
								<i class="glyphicon glyphicon-tint"></i></a>
							</p>
							<p>
							<a class="btn btn-primary" href="<?php echo "" . $result . "" ?>" target="popup" onClick="window.open(this.href, this.target, 'width=660,height=515'); return false;" alt="Ver resultados" title="Ver resultados">Ver resultados</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">
						<div class="caption">
							<h3>
								Thumbnail label
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>