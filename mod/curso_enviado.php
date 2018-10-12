<?php
# AÑADIMOS EL NUEVO REGISTRO
mysqli_query($mysqli, "INSERT INTO cursos (trabajador,curso,lugar,fecha,horas,validacion,comentarios) VALUES ('{$_POST['trabajador']}','{$_POST['curso']}','{$_POST['lugar']}','{$_POST['fecha']}','{$_POST['horas']}','{$_POST['validacion']}','{$_POST['comentarios']}')");
echo "<H4>Registro A&Ntilde;ADIDO</b></H4>";
echo "<a href=\"?seccion=poner_curso\"><b>Anotar otro curso</b></a>";
?>