<!DOCTYPE html>
<html>
<head>
<title>Consulta de datos</title>
<link type="text/css" rel="stylesheet" title="default" href="../../templates/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../../templates/printstyle.css" media="print" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
<p>Puede consultar los detalles de las no conformidades, mientras hace su informe de auditoría.</p>
<form name="formulario" method="POST" action="datoscliente.php">
<?php
    include('lista.php');
?>
</form>
<div id="resultado" style="border:1px solid #ccc; color:#000999;width:1000px;">
</div>
</body>
</html>