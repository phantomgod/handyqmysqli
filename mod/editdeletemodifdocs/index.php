<?php
include '../../lang/spanish.lang.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- This is a pagination script using Jquery, Ajax and PHP
     The enhancements done in this script pagination with first,last, previous, next buttons -->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Live Edit, Pagination and Delete Records with Jquery</title>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="EditDeletePage.js"></script>

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


#loading {
	width: 100%;
	position: absolute;
	top: 35px;
	left: 650px;
	margin-top: 0px;
}

#container .pagination ul li.inactive,#container .pagination ul li.inactive:hover
	{
	background-color: #ededed;
	color: #bababa;
	border: 1px solid #bababa;
	cursor: default;
}

#container .data ul li {
	list-style: none;
	font-family: verdana;
	margin: 5px 0 5px 0;
	color: #000;
	font-size: 13px;
}

#container .pagination {
	width: 800px;
	height: 25px;
}

#container .pagination ul li {
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	font-family: arial;
	font-size: 14px;
	color: #006699;
	font-weight: bold;
	background-color: #f2f2f2;
}

#container .pagination ul li:hover {
	color: #fff;
	background-color: #006699;
	cursor: pointer;
}

.go_button {
	background-color: #f2f2f2;
	border: 1px solid #006699;
	color: #cc0000;
	padding: 2px 6px 2px 6px;
	cursor: pointer;
	position: absolute;
	margin-top: -1px;
}

.total {
	float: right;
	font-family: arial;
	color: #999;
}

.editbox {
	display: none;
	padding: 2px 2px 2px 2px;
}

td,th {
	width: 20%;
	text-align: left;;
	padding: 5px;
}

.editbox {
	padding: 4px;
}

</style>

</head>


<body>

	<h1>
		<?php echo EDITAR_BORRAR_MODIFDOC; ?>
	</h1>
	<!--Tutorial Link <a href="http://www.9lessons.info/">Click Here</a> with database ajax connection.<br><br> -->

	<div id="loading"></div>
	<div id="container"></div>

</body>
</html>
