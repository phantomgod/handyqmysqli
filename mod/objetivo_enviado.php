<?php 
# AÑADIMOS EL NUEVO REGISTRO 
mysqli_query($mysqli, "INSERT INTO objetivosdatosgenerales (CodigoObjetivo,NombreObjetivo,Ano,Origen,Deteccion,Causas,Recursos,Indicador,Fuente,FrecuenciaDeRevision,Plazo,ResponsableDeEjecucion,ResponsableDeSeguimiento,VBDireccion,ResultadoFinal,Fecha) VALUES ('{$_POST['codobj']}','{$_POST['nombreobj']}','{$_POST['ano']}','{$_POST['origen']}','{$_POST['deteccion']}','{$_POST['causas']}','{$_POST['recursos']}','{$_POST['indicador']}','{$_POST['fuente']}','{$_POST['frecuenciaderevision']}','{$_POST['plazo']}','{$_POST['responsableejecucion']}','{$_POST['responsableseguimiento']}','{$_POST['vistobueno']}','{$_POST['resultadofinal']}','{$_POST['fecha']}')"); 
echo "<h2>Registro A&ntilde;ADIDO</b></h2>"; 
echo "<a href=\"?seccion=poner_objetivo\"><font color=000000><b>Poner otro objetivo</b></font></a>"; 
?> 
