<?php
# AÑADIMOS EL NUEVO REGISTRO


$_POST['fecha'] = (isset ($_POST['fecha'])) ? $_POST['fecha'] : '';	
$_POST['comunicado_por'] = (isset ($_POST['comunicado_por'])) ? $_POST['comunicado_por'] : '';	
$_POST['comentarios'] = (isset ($_POST['comentarios'])) ? $_POST['comentarios'] : '';	

$_POST['comentarios'] = $mysqli->real_escape_string($_POST['comentarios']);

mysqli_query($mysqli, "INSERT INTO avisos (fecha,comunicado_por,comentarios) VALUES ('{$_POST['fecha']}','{$_POST['comunicado_por']}','{$_POST['comentarios']}')");
echo "<h2>Aviso recibido</b></h2><br>Le esponderemos lo antes posible<br><br>";
echo "<a href=\"?seccion=poner_aviso\">Poner otro aviso</a><br/>";
echo "<a href=\"?seccion=listavisos\">Lista</a>";
?>