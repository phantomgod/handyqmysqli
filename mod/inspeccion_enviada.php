<?php 
# AÑADIMOS EL NUEVO REGISTRO 
mysqli_query($mysqli, "INSERT INTO inspecciones (inspector,fecha,servicio,hora,vigilante,incidencia,codigo_incidencia,servicio2,hora2,vigilante2,incidencia2,codigo_incidencia2,servicio3,hora3,vigilante3,incidencia3,codigo_incidencia3,servicio4,hora4,vigilante4,incidencia4,codigo_incidencia4,servicio5,hora5,vigilante5,incidencia5,codigo_incidencia5,servicio6,hora6,vigilante6,incidencia6,codigo_incidencia6,servicio7,hora7,vigilante7,incidencia7,codigo_incidencia7) VALUES ('{$_POST['inspector']}','{$_POST['fecha']}','{$_POST['servicio']}','{$_POST['hora']}','{$_POST['trabajador']}','{$_POST['incidencia']}','{$_POST['codigo']}','{$_POST['servicio2']}','{$_POST['hora2']}','{$_POST['trabajador2']}','{$_POST['incidencia2']}','{$_POST['codigo2']}','{$_POST['servicio3']}','{$_POST['hora3']}','{$_POST['trabajador3']}','{$_POST['incidencia3']}','{$_POST['codigo3']}','{$_POST['servicio4']}','{$_POST['hora4']}','{$_POST['trabajador4']}','{$_POST['incidencia4']}','{$_POST['codigo4']}','{$_POST['servicio5']}','{$_POST['hora5']}','{$_POST['trabajador5']}','{$_POST['incidencia5']}','{$_POST['codigo5']}','{$_POST['servicio6']}','{$_POST['hora6']}','{$_POST['trabajador6']}','{$_POST['incidencia6']}','{$_POST['codigo6']}','{$_POST['servicio7']}','{$_POST['hora7']}','{$_POST['trabajador7']}','{$_POST['incidencia7']}','{$_POST['codigo7']}')"); 
echo "<H3>Registro A&Ntilde;ADIDO</b></H3><br><a href=\"?seccion=poner_inspeccion\"><font color=ffffff><b>Poner otra inspecci&oacute;n</b></font></a>"; 
?> 
