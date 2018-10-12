<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: index.php'); } 

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: memberpage.php');
		exit;
	
	} else {
		$error[] = 'Nombre de usuario o password equivocados, o no ha activado su cuenta aún.';
	}

}//end if submit

//define page title
$title = 'Login usuarios analíticas MIPROMA';

//include header template
require('layout/header.php'); 
?>
<link rel="shortcut icon" href="../images/favicon.png">
<br />
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<a href="http://www.miproma.es" alt="Miproma Biocontrol" title="Miproma Biocontrol"><img src="../images/logomiproma.png" width="400px"></a>
		</div>
		<div class="col-lg-6">
			<h2><small>Login / Registro para la consulta de resultados de análisis de clientes</small></h2>
		</div>
	</div>
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Por favor, loguéese</h2>
				<p><a href='./'><i class="glyphicon glyphicon-arrow-left"></i> <b>Ir a la página de registro</b></a></p>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Su cuenta está ahora activa y puede loguearse.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>Por favor, mire el correo que contiene el enlace de recuperación.</h2>";
							break;
						case 'resetAccount':
							echo "<h2 class='bg-success'>Su password se ha cambiado, ahora puede loguearse.</h2>";
							break;
					}

				}

				
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='reset.php'>Olvidó su password?</a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>



</div>


<?php 
//include header template
require('layout/footer.php'); 
?>
