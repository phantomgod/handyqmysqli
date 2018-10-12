<?php
session_start();
session_name("admin5");
//put sha1() encrypted password here - example is 'hello'
$password = '44eda8f5295d8db11f5c5b479c5b4a078ddca817';


if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        die ('Incorrect password');
    }
}

if (!$_SESSION['loggedIn']):

require 'lang/spanish.lang.php';
?>

<html><head>
<meta charset="utf-8"/>
<title>Login Miproma-Biocontrol</title>
    <!-- Le styles -->
	<link type="text/css" rel="stylesheet" href="templates/style.css" media="screen" />
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="jscripts/indexcapaemergente.js"></script>


</head>
  <body>


 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
		<div class="nav-collapse collapse" style="align:text-right">
            <ul class="nav">
              <!-- HeadSectionDl BEGIN -->
				<li class="active">
					<div onMouseOver="showdiv(event,'<?php echo TRADUCIR; ?>');"
						onMouseOut="hiddenDiv()" style='display: table;  padding: 10px 10px 10px 0px;'>
							<a href="index.php?lang=en"><img src="images/en.png" /></a>
					</div>
				</li>
				<li class="active">
					<div onMouseOver="showdiv(event,'<?php echo TRADUCIR; ?>');"
						onMouseOut="hiddenDiv()" style='display: table;  padding: 10px 10px 10px 0px;'>
							<a href="index.php?lang=es"><img src="images/es.png" /></a>
					</div>
				</li>
            </ul>
          </div>
          <a class="brand" href="./" target="_blank">handy</a>
		  <a class="brand" href="./" target="_blank">index</a>

          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">

              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  			<div id="flotante"
				style="z-index: 1032; filter: alpha(opacity = 80); float: left; -moz-opacity: .80; opacity: .80">
			</div>


		<div class="container" style="margin-top:150px;">

		<div class="text-left"> <h3>necesita loguearse</h3>Bienvenido</div>
          <section id="Options">
          <!--<div class="page-header">
            <h1>Analíticas</h1>
          </div>-->
        <div class="span3" style="margin: 9px 0 5px;">
          	<a  href="loginregister/index.php"  class="btn btn-yellow"><i class="fa fa-user" style="color:Yellow;"></i> &nbsp;<font color="#000"><?php echo OPERARIOS; ?></font></a>
		</div>
		 <div class="span3" style="margin: 9px 0 5px;">
          	<a  href="loginregister/indexclientes.php"  class="btn btn-yellow"><i class="fa fa-user" style="color:purple;"></i> &nbsp;<font color="#000"><?php echo CERTIFICADORA; ?></font></a>
		</div>
		<div class="span4" style="margin: -50px 0 5px;">

			    <h3>Administración</h3>
		<form method="post">
		  Password: <input type="password" name="password"> <br />
		  <input type="submit" name="submit" value="Login">
		</form>
        </div>
		</div>
		<br />
		  <div class="container">
			<div class="col-lg-6">
			<a href="http://biocontrol.textblock.org/" alt="Biocontrol" title="Biocontrol"><img src="images/logomiproma.png" width="200px"></a>
		</div>


		</section>



		</div>


	<!-------------------********************************************-->


  </body>
</html>

<?php
exit();
endif;
