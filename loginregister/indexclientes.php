<?php require 'includes/config.php'; 

//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: clientespage.php'); } 

//if form has been submitted process it
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'El usuario es muy corto!.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'El usuario existe!.';
		}
			
	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'El Password es muy corto.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'La confirmación del password es muy corta!.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'El Password es erróneo.';
	}
	
	if(strlen($_POST['direccion']) === 0){
		$error[] = 'Ponga una dirección.';
	}
	if(strlen($_POST['actividad']) === 0){
		$error[] = 'Ponga una actividad.';
	}


	/*email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Ponga un email válido';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'El email ya existe.';
		}			
	}*/


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active,direccion,actividad) VALUES (:username, :password, :email, :active, :direccion, :actividad)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion,
				':direccion' => $_POST['direccion'],
				':actividad' => $_POST['actividad']
			));
			$id = $db->lastInsertId('memberID');

			//send email
			$to = $_POST['email'];
			$subject = "Confirmacion de registro";
			$body = "Gracias por registrarse en BIOCONTROL.\n\n Para activar su cuenta, haga click en el siguiente enlace:\n\n ".DIR."activate.php?x=$id&y=$activasion\n\n MIPROMA-BIOCONTROL \n\n";
			$additionalheaders = "From: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "Reply-To: ".SITEEMAIL."";
			mail($to, $subject, $body, $additionalheaders);
			
			
			//redirect to index page
			header('Location: indexclientes.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Regstro usuario MIPROMA-BIOCONTROL';

//include header template
require'layout/header.php'; 
?>

<br />
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<a href="http://biocontrol.textblock.org/" alt="Biocontrol" title="Biocontrol"><img src="../images/logomiproma.png" width="400px"></a>
		</div>
		<div class="col-lg-6">
			<h2><small>Login / Registro MIPROMA-BIOCONTROL</small></h2>
		</div>
	</div>
	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Por favor, regístrese</h2>
				<p class="text-primary"><b>Ya es un cliente?</b> <i class="glyphicon glyphicon-arrow-right"></i> <a href='loginclientes.php'><i class="glyphicon glyphicon-chevron-left"></i><strong>Login</strong><i class="glyphicon glyphicon-chevron-right"></i></a></p>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){
					echo "<h2 class='bg-success'>Registro correcto. Por favor, abra su correo para activar su cuenta.</h2>";
				}
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Póngase su nombre de usuario" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Ponga su mail" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="2">
				</div>
				<div class="form-group">
					<input type="text" name="direccion" id="direccion" class="form-control input-lg" placeholder="Ponga su dirección" value="<?php if(isset($error)){ echo $_POST['direccion']; } ?>" tabindex="3">
				</div>
				<div class="form-group">
					<input type="text" name="actividad" id="actividad" class="form-control input-lg" placeholder="Ponga su actividad" value="<?php if(isset($error)){ echo $_POST['actividad']; } ?>" tabindex="4">
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirme el Password" tabindex="6">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<p class="text-right"><i class="glyphicon glyphicon-arrow-right"></i></p>
					</div>	
				<div class="col-xs-6 col-sm-6 col-md-6">
						<input type="submit" name="submit" value="Confirmar el Regístro" class="btn btn-primary btn-block btn-lg" tabindex="7">
				</div>
				</div>
			</form>
		</div>
	</div>

</div>

<?php 
//include header template
require('layout/footer.php'); 
?>