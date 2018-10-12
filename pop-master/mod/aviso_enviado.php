<?php
# AÑADIMOS EL NUEVO REGISTRO
mysql_query("INSERT INTO avisos (fecha,comunicado_por,comentarios) VALUES ('{$_POST['fecha']}','{$_POST['comunicado']}','{$_POST['comments']}')");
echo "<h2>Aviso recibido</b></h2><br>Le esponderemos lo antes posible<br><br>";
echo "<a href=\"?seccion=poner_aviso\">Poner otro aviso</a><br/>";
echo "<a href=\"?seccion=listavisos\">Lista</a>";
?>