<html>
<head>
<title>phMailer Test Script</title>
</head>
<body>

<?php
If($_POST['submit']==true) {
	
	extract($_POST, EXTR_SKIP);

		If(mail($email,"Testing PHP Mail","This is a test email. Mail seems to be working fine =). Enjoy this script.","From: \"PHP Mail Test\" <$email>")) {
			exit("Mail sent <b>ok</b>. Please check your email in a few minutes. If you received an email, then mail is setup correctly. If you got any errors or you did not receive any email, please contact your host as mail may not be available to you, or it is not working properly. <b> REMOVE THIS FILE AFTER USE </b>");
		} Else {
			exit("Sending mail <b>failed</b>. Please contact your host as php mail may not be available to you, or it is not working properly.");
		}

}
?>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
Your Email: <input type="text" name="email"> <input type="hidden" name="submit" value="true"> <input type="submit" value=" Test Email ">
</form>
</body>
</html>
