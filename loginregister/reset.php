<?php require('includes/config.php'); 

//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: memberpage.php'); } 

//if form has been submitted process it
if(isset($_POST['submit'])){

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($row['email'])){
			$error[] = 'Email provided is not on recognised.';
		}
			
	}

	//if no errors have been created carry on
	if(!isset($error)){

		//create the activasion code
		$token = md5(uniqid(rand(),true));

		try {

			$stmt = $db->prepare("UPDATE members SET resetToken = :token, resetComplete='No' WHERE email = :email");
			$stmt->execute(array(
				':email' => $row['email'],
				':token' => $token
			));

			//send email

			$to = $row['email'];
			$subject = "Solicitud de recuperación de password MIPROMA-BIOCONTROL";
			$body = "Alguien ha solicitado recuperar el password de esa cuenta. \n\nSi fue por error, olvide este correo, y no se cambiará nada.\n\nPara recuperar su password, visite la siguiente dirección:\n\n ".DIR."resetPassword.php?key=$token";
			$additionalheaders = "From: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "Reply-To: $".SITEEMAIL."";
			
			mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $body, $additionalheaders);
			//mail($to, $subject, $body, $additionalheaders);

			//redirect to index page
			header('Location: login.php?action=reset');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Reset Account';

//include header template
require('layout/header.php'); 
?>
<br />
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<a href="http://www.miproma.es" alt="Miproma Biocontrol" title="Miproma Biocontrol"><img src="images/logo.png" width="400px"></a>
		</div>
		<div class="col-lg-6">
			<h2><small>Recuperación de contraseña</small></h2>
		</div>
	</div>

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Restablecer la contraseña</h2>
				<p><a href='login.php'><i class="glyphicon glyphicon-arrow-left"></i> <b>Volver a la página de Login</b></a></p>
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
					}
				}
				?>

				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Ponga el email asociado a su cuenta" value="" tabindex="1">
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Enviar enlace de recuperación" class="btn btn-primary btn-block btn-lg" tabindex="2"></div>
				</div>
			</form>
		</div>
	</div>


</div>

<?php 
//include header template
require('layout/footer.php'); 
?>