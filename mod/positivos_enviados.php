<?php
# AÑADIMOS EL NUEVO REGISTRO


$_POST['nserviciosen'] = (isset ($_POST['nserviciosen'])) ? $_POST['nserviciosen'] : '';
$_POST['nserviciosfeb'] = (isset ($_POST['nserviciosfeb'])) ? $_POST['nserviciosfeb'] : '';
$_POST['nserviciosmar'] = (isset ($_POST['nserviciosmar'])) ? $_POST['nserviciosmar'] : '';
$_POST['nserviciosabr'] = (isset ($_POST['nserviciosabr'])) ? $_POST['nserviciosabr'] : '';
$_POST['nserviciosmay'] = (isset ($_POST['nserviciosmay'])) ? $_POST['nserviciosmay'] : '';
$_POST['nserviciosjun'] = (isset ($_POST['nserviciosjun'])) ? $_POST['nserviciosjun'] : '';
$_POST['nserviciosjul'] = (isset ($_POST['nserviciosjul'])) ? $_POST['nserviciosjul'] : '';
$_POST['nserviciosago'] = (isset ($_POST['nserviciosago'])) ? $_POST['nserviciosago'] : '';
$_POST['nserviciossep'] = (isset ($_POST['nserviciossep'])) ? $_POST['nserviciossep'] : '';
$_POST['nserviciosoct'] = (isset ($_POST['nserviciosoct'])) ? $_POST['nserviciosoct'] : '';
$_POST['nserviciosnov'] = (isset ($_POST['nserviciosnov'])) ? $_POST['nserviciosnov'] : '';
$_POST['nserviciosdic'] = (isset ($_POST['nserviciosdic'])) ? $_POST['nserviciosdic'] : '';
$_POST['positivosen'] = (isset ($_POST['positivosen'])) ? $_POST['positivosen'] : '';
$_POST['positivosfeb'] = (isset ($_POST['positivosfeb'])) ? $_POST['positivosfeb'] : '';
$_POST['positivosmar'] = (isset ($_POST['positivosmar'])) ? $_POST['positivosmar'] : '';
$_POST['positivosabr'] = (isset ($_POST['positivosabr'])) ? $_POST['positivosabr'] : '';
$_POST['positivosmay'] = (isset ($_POST['positivosmay'])) ? $_POST['positivosmay'] : '';
$_POST['positivosjun'] = (isset ($_POST['positivosjun'])) ? $_POST['positivosjun'] : '';
$_POST['positivosjul'] = (isset ($_POST['positivosjul'])) ? $_POST['positivosjul'] : '';
$_POST['positivosago'] = (isset ($_POST['positivosago'])) ? $_POST['positivosago'] : '';
$_POST['positivossep'] = (isset ($_POST['positivossep'])) ? $_POST['positivossep'] : '';
$_POST['positivosoct'] = (isset ($_POST['positivosoct'])) ? $_POST['positivosoct'] : '';
$_POST['positivosnov'] = (isset ($_POST['positivosnov'])) ? $_POST['positivosnov'] : '';
$_POST['positivosdic'] = (isset ($_POST['positivosdic'])) ? $_POST['positivosdic'] : '';
$_POST['porcentajeen'] = (isset ($_POST['porcentajeen'])) ? $_POST['porcentajeen'] : '';
$_POST['porcentajefeb'] = (isset ($_POST['porcentajefeb'])) ? $_POST['porcentajefeb'] : '';
$_POST['porcentajemar'] = (isset ($_POST['porcentajemar'])) ? $_POST['porcentajemar'] : '';
$_POST['porcentajeabr'] = (isset ($_POST['porcentajeabr'])) ? $_POST['porcentajeabr'] : '';
$_POST['porcentajemay'] = (isset ($_POST['porcentajemay'])) ? $_POST['porcentajemay'] : '';
$_POST['porcentajejun'] = (isset ($_POST['porcentajejun'])) ? $_POST['porcentajejun'] : '';
$_POST['porcentajejul'] = (isset ($_POST['porcentajejul'])) ? $_POST['porcentajejul'] : '';
$_POST['porcentajeago'] = (isset ($_POST['porcentajeago'])) ? $_POST['porcentajeago'] : '';
$_POST['porcentajesep'] = (isset ($_POST['porcentajesep'])) ? $_POST['porcentajesep'] : '';
$_POST['porcentajeoct'] = (isset ($_POST['porcentajeoct'])) ? $_POST['porcentajeoct'] : '';
$_POST['porcentajenov'] = (isset ($_POST['porcentajenov'])) ? $_POST['porcentajenov'] : '';
$_POST['porcentajedic'] = (isset ($_POST['porcentajedic'])) ? $_POST['porcentajedic'] : '';


mysqli_query($mysqli, "INSERT INTO calidadlegionella (nserviciosen,nserviciosfeb,nserviciosmar,nserviciosabr,nserviciosmay,nserviciosjun,nserviciosjul,nserviciosago,nserviciossep,nserviciosoct,nserviciosnov,nserviciosdic,positivosen,positivosfeb,positivosmar,positivosabr,positivosmay,positivosjun,positivosjul,positivosago,positivossep,positivosoct,positivosnov,positivosdic,porcentajeen,porcentajefeb,porcentajemar,porcentajeabr,porcentajemay,porcentajejun,porcentajejul,porcentajeago,porcentajesep,porcentajeoct,porcentajenov,porcentajedic) VALUES ('{$_POST['nserviciosen']}','{$_POST['nserviciosfeb']}','{$_POST['nserviciosmar']}','{$_POST['nserviciosabr']}','{$_POST['nserviciosmay']}','{$_POST['nserviciosjun']}','{$_POST['nserviciosjul']}','{$_POST['nserviciosago']}','{$_POST['nserviciossep']}','{$_POST['nserviciosoct']}','{$_POST['nserviciosnov']}','{$_POST['nserviciosdic']}','{$_POST['positivosen']}','{$_POST['positivosfeb']}','{$_POST['positivosmar']}','{$_POST['positivosabr']}','{$_POST['positivosmay']}','{$_POST['positivosjun']}','{$_POST['positivosjul']}','{$_POST['positivosago']}','{$_POST['positivossep']}','{$_POST['positivosoct']}','{$_POST['positivosnov']}','{$_POST['positivosdic']}','{$_POST['porcentajeen']}','{$_POST['porcentajefeb']}','{$_POST['porcentajemar']}','{$_POST['porcentajeabr']}','{$_POST['porcentajemay']}','{$_POST['porcentajejun']}','{$_POST['porcentajejul']}','{$_POST['porcentajeago']}','{$_POST['porcentajesep']}','{$_POST['porcentajeoct']}','{$_POST['porcentajenov']}','{$_POST['porcentajedic']}')");
echo "<h2>Positivos insertados</b></h2><br>";
echo "<a href=\"?seccion=insertarpositivoslegionella\">Poner otro positivo</a><br/>";
echo "<a href=\"?seccion=graficapositivoslegionella\">Gráfica</a>";

 echo("Error description: " . mysqli_error($mysqli));
