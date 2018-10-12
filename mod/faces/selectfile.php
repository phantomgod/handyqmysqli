<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<style type="text/css">
body {
font-family: Tahoma, Helvetica, Arial, sans-serif;
color: #8A8989;
margin: 0px;
padding: 20px 20px 20px 20px;
line-height: 1.6;
}

table {
	font: 0.8em Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	background: transparent;
	color: #000;
	width: 100%;
}
th {
	font-weight: 900;
	color: #2e6c9e;
	font-size: 1.05em;
	text-transform: none;
}
tr th, tr td {border-bottom:1px solid #ccc;}
table a,table a:link {
	text-decoration: none;
	color: #2E8CEF;
}

table a:visited {
	color: #a721b6;
}

table a:hover {
	color: #f00;
}

tbody tr th {
	vertical-align: top;
	padding-left: 0px;
	text-align: left;
	/*background: transparent url("../images/det1gmail.png") left top
		no-repeat;*/
}
</style>

</head>
<body>

Suba una imagen nueva para el trabajador si necesita actualizar.

<div id="fileupload">
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<button type="submit" class="btn btn-info"><?php echo ANADIR; ?></button>
</form>
</div>
</body>
</html>