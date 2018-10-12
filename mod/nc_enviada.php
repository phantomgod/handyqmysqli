<?php 
# AÑADIMOS EL NUEVO REGISTRO 
mysqli_query($mysqli, "INSERT INTO hojasdemejora (ai,numhoja,codhoja,descripcion,fecha,docum,abiertopor,afectaa,causas,acciones,plazo,cierresparc,eficacia,cerradofecha,desviacion,visible) VALUES ('{$_POST['ainum']}','{$_POST['hojanum']}','{$_POST['codhoja']}','{$_POST['descripcion']}','{$_POST['fecha']}','{$_POST['documentos']}','{$_POST['abiertopor']}','{$_POST['afectaa']}','{$_POST['causas']}','{$_POST['acciones']}','{$_POST['plazo']}','{$_POST['parcierres']}','{$_POST['eficacia']}','{$_POST['fechacierre']}','{$_POST['desviacion']}','{$_POST['visible']}')"); 
echo "<h2>Registro A&Ntilde;ADIDO</b></h2>"; 
echo "<a href=\"?seccion=poner_nc\"><font color=000000><b>Poner otra hoja</b></font></a>"; 
?> 
