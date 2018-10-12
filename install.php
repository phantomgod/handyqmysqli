<?php session_start();
if (!isset($_SESSION['lang']))
{
$_SESSION['lang'] = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
}
if($_POST['idioma'] == "en"){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "en";
}
elseif($_POST['idioma'] == "es"){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "es";
}
elseif($_POST['idioma'] == "pt"){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "pt";
}
elseif($_POST['idioma'] == "dutch"){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "dutch";
}
elseif($_POST['idioma'] == "it"){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "it";
}
elseif($_POST['idioma'] == "cat"){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "cat";
}
elseif($_POST['idioma'] == "vasco"){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "vasco";
}
switch($_SESSION['lang']) {
    case "en":
        include('lang/english.lang.php');
        break;
    case "es":
        include('lang/spanish.lang.php');
        break;
    case "pt":
        include('lang/portugues.lang.php');
        break;
	case "dutch":
        include('lang/dutch.lang.php');
        break;
	case "it":
        include('lang/italian.lang.php');
        break;
	case "cat":
        include('lang/catalan.lang.php');
        break;
	case "vasco":
        include('lang/vasco.lang.php');
        break;
    default:
        include('lang/spanish.lang.php');
        break;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Handy-Q, una oficida de calidad online!</title>
	<link type="text/css" rel="stylesheet" href="includes/style.css" media="screen" />


<!--******************************Capa emergente************************************-->

<script type="text/javascript">
	/**
	* Funcion que muestra el div en la posicion del mouse
	*/
	function showdiv(event,text)
	{
		//determina un margen de pixels del div al raton
		margin=5;

		//La variable IE determina si estamos utilizando IE
		var IE = document.all?true:false;

		var tempX = 0;
		var tempY = 0;

		//document.body.clientHeight = devuelve la altura del body
		if(IE)
		{ //para IE
			IE6=navigator.userAgent.toLowerCase().indexOf('msie 6');
			IE7=navigator.userAgent.toLowerCase().indexOf('msie 7');
			//event.y|event.clientY = devuelve la posicion en relacion a la parte superior visible del navegador
			//event.screenY = devuelve la posicion del cursor en relaciona la parte superior de la pantalla
			//event.offsetY = devuelve la posicion del mouse en relacion a la posicion superior de la caja donde se ha pulsado

			if(IE6>0 || IE7>0)
			{
				tempX = event.x
				tempY = event.y
				if(window.pageYOffset){
					tempY=(tempY+window.pageYOffset);
					tempX=(tempX+window.pageXOffset);
				}else{
					tempY=(tempY+Math.max(document.body.scrollTop,document.documentElement.scrollTop));
					tempX=(tempX+Math.max(document.body.scrollLeft,document.documentElement.scrollLeft));
				}
			}else{
				//IE8
				tempX = event.x
				tempY = event.y
			}
		}else{ //para netscape
			//window.pageYOffset = devuelve el tamaÃ±o en pixels de la parte superior no visible (scroll) de la pagina
			document.captureEvents(Event.MOUSEMOVE);
			tempX = event.pageX;
			tempY = event.pageY;
		}

		if (tempX < 0){tempX = 0;}
		if (tempY < 0){tempY = 0;}

		// Modificamos el contenido de la capa
		document.getElementById('flotante').innerHTML=text;

		// Posicionamos la capa flotante
		document.getElementById('flotante').style.top = (tempY+margin)+"px";
		document.getElementById('flotante').style.left = (tempX+margin)+"px";
		document.getElementById('flotante').style.display='block';
		return;
	}

	/**
	* Funcion para esconder el div
	*/
	function hiddenDiv()
	{
		document.getElementById('flotante').style.display='none';
	}
</script>

<!--******************************Fin capa emergente************************************-->



</head>

<body>

<div id="lang">
				<form action="" id="lang" method="POST">
						<select name="idioma" onChange="javascript:this.form.submit()">
							<option value="..."></option>
							<option class="bg1" value="en">English</option>
							<option class="bg2" value="es">Spanish</option>
							<option class="bg2" value="pt">Portuguesse</option>
							<option class="bg2" value="dutch">Alem&aacute;n</option>
							<option class="bg2" value="it">Italiano</option>
							<option class="bg2" value="cat">Catalan</option>
							<option class="bg2" value="vasco">Vasco</option>
						</select>

					<!--<input type="submit" value="<?php echo CBUTTON;?>" />-->
			 </form>&nbsp;
			 </div>

<br /><br /><br /><br /><br />
<a href="http://handyq.textblock.org/" target="_blank"><img src="images/h52.png" border="0" alt="Una oficina de la calidad online" /></a>

<br /><br /><br /><br /><br />
<div><?php echo DATABASE_INSTALL_ADVICE; ?></div>

<?php
/*
 Name: install.php Date started: 13/10/12012
 Author: Javier de Juan, textblock.org
 Handy-Q, es un programa para ejecutar rutinas de la oficina de calidad ISO 9000
 Copyright (C) 2012  Javier de Juan, textblock.org
 Version: 1.00

*/
/*
**********************************************
***No modifique nada de aquÃ­ para abajo!***
**********************************************
*/
$action = $_GET['action'];
if (!$action) {
?>
<p class="pcenter">
<form action="?action=install" method="post">
<table width="700px">
<caption>Handy-Q. Instalar tablas.</caption>
<thead></thead>
<tr><th width="35%"><?php echo DATABASE_USERNAME; ?></th><td><input size="35" type='text' name='username'></td></tr>
<tr><th width="35%"><?php echo DATABASE_PASSWORD; ?></th><td><input size="35" type='password' name='password'></td></tr>
<tr><th width="35%"><div id="" onMouseOver="showdiv(event,'<?php echo DATABASE_HOST_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'></div><?php echo DATABASE_HOST; ?></th><td><input size="35" type='text' name='host' value='localhost'></td></tr>
<tr><th width="35%"><div id="" onMouseOver="showdiv(event,'<?php echo DATABASE_NAME_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'></div><?php echo DATABASE_NAME; ?></th><td><input size="35" type='text' name='database'></td></tr>
<tr><td colspan='2' align='left'><input type='submit' value='Install'></td></tr>
</table>
</form>
<?php
} elseif ($action == "install") {
$username = $_POST['username'];
$password = $_POST['password'];
$host = $_POST['host'];
$database = $_POST['database'];


$sql_table_afectaa = "
CREATE TABLE IF NOT EXISTS `afectaa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `afectaa` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `afectaa` (`afectaa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;
";
$sql_table_aisgc = "
CREATE TABLE IF NOT EXISTS `aisgc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `ai` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `auditor1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `auditor2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `auditor3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `docum` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `trabajador1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `trabajador2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `trabajador3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `servicio1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `servicio2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `vehiculos` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `obstrat` text COLLATE utf8_spanish_ci,
  `obscal` text COLLATE utf8_spanish_ci,
  `obsalmac` text COLLATE utf8_spanish_ci,
  `obscompras` text COLLATE utf8_spanish_ci,
  `obsformac` text COLLATE utf8_spanish_ci,
  `obsdocum` text COLLATE utf8_spanish_ci,
  `obslegio` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;
";
$sql_table_areassensibles = "
CREATE TABLE IF NOT EXISTS `areassensibles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrearea` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;
";
$sql_table_auditores = "
CREATE TABLE IF NOT EXISTS `auditores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auditor` mediumtext,
  `imgsrc` varchar(255) NOT NULL,
  `activo` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `auditor` (`auditor`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;
";
$sql_table_avisos = "
CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL DEFAULT '2012-09-13',
  `comunicado_por` text CHARACTER SET latin1,
  `comentarios` mediumtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;
";
$sql_table_calibraciones = "
CREATE TABLE IF NOT EXISTS `calibraciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `accion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `procedimiento` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `lugar` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `fecha` date DEFAULT NULL,
  `resultado` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `desviacion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;
";
$sql_table_codigosincidencias = "
CREATE TABLE IF NOT EXISTS `codigosincidencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;
";
$sql_table_codigosincidenciasinspecciones = "
CREATE TABLE IF NOT EXISTS `codigosincidenciasinspecciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gravedad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codincid` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombreincid` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;
";
$sql_table_controlavisos = "
CREATE TABLE IF NOT EXISTS `controlavisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `numcertif` int(11) DEFAULT NULL,
  `numreclam` int(11) DEFAULT NULL,
  `percent` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=21 ;
";
$sql_table_cursos = "
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trabajador` text COLLATE utf8_spanish_ci NOT NULL,
  `curso` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci,
  `fecha` date NOT NULL,
  `horas` int(11) NOT NULL,
  `validacion` text COLLATE utf8_spanish_ci,
  `comentarios` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `trabajador` (`trabajador`,`curso`,`lugar`),
  FULLTEXT KEY `comentarios` (`comentarios`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=164 ;
";
$sql_table_docmanager = "
CREATE TABLE IF NOT EXISTS `docmanager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(250) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `contenido` longtext CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `autor` (`autor`,`contenido`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;
";
$sql_table_enlaces = "
CREATE TABLE IF NOT EXISTS `enlaces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsolicitud` int(11) DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT '2012-09-13',
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `link` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `comment` text CHARACTER SET utf8,
  `seccionid` int(11) NOT NULL DEFAULT '0',
  `clave1` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=112 ;
";
$sql_table_equiposdemedida = "
CREATE TABLE IF NOT EXISTS `equiposdemedida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` text COLLATE utf8_spanish_ci,
  `modelo` text COLLATE utf8_spanish_ci,
  `fechalta` date DEFAULT NULL,
  `frecuencalib` text COLLATE utf8_spanish_ci,
  `criterioaceptacion` text COLLATE utf8_spanish_ci,
  `ubicacion` text COLLATE utf8_spanish_ci,
  `descripcion` longtext COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;
";
$sql_table_extintores = "
CREATE TABLE IF NOT EXISTS `extintores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `cliente` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ndeserie` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechafabricacion` date NOT NULL,
  `agente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ejecucion` text COLLATE utf8_spanish_ci NOT NULL,
  `proxima` date NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL,
  `numextintores` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fecha` (`fecha`),
  FULLTEXT KEY `cliente` (`cliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;
";
$sql_table_hojasdemejora = "
CREATE TABLE IF NOT EXISTS `hojasdemejora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ai` text CHARACTER SET latin1,
  `numhoja` text CHARACTER SET latin1,
  `codhoja` text CHARACTER SET latin1,
  `descripcion` mediumtext CHARACTER SET latin1,
  `fecha` date DEFAULT NULL,
  `docum` text CHARACTER SET latin1,
  `abiertopor` text CHARACTER SET latin1,
  `afectaa` text CHARACTER SET latin1,
  `causas` mediumtext CHARACTER SET latin1,
  `acciones` mediumtext CHARACTER SET latin1,
  `plazo` text CHARACTER SET latin1,
  `cierresparc` text CHARACTER SET latin1,
  `eficacia` mediumtext CHARACTER SET latin1,
  `cerradofecha` date DEFAULT NULL,
  `desviacion` smallint(6) DEFAULT NULL,
  `visible` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `numhoja` (`numhoja`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de hojas de mejora' AUTO_INCREMENT=81 ;
";
$sql_table_horasformacionportrabajador = "
CREATE TABLE IF NOT EXISTS `horasformacionportrabajador` (
  `trabajador` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `totalhoras` decimal(32,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
";

$sql_table_incidenciasdeproveedor = "
CREATE TABLE IF NOT EXISTS `incidenciasdeproveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` text COLLATE utf8_spanish_ci NOT NULL,
  `incidencia` text COLLATE utf8_spanish_ci NOT NULL,
  `codigoincidencia` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `afectaa` text COLLATE utf8_spanish_ci,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `proveedor` (`proveedor`,`incidencia`,`afectaa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=167 ;
";
$sql_table_incidenciasinspeccion = "
CREATE TABLE IF NOT EXISTS `incidenciasinspeccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codname` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;
";
$sql_table_informeauditoria = "
CREATE TABLE IF NOT EXISTS `informeauditoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ai` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `AreaAuditada` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Documentacion` text COLLATE utf8_spanish_ci,
  `Auditor` text COLLATE utf8_spanish_ci,
  `ObjetoAuditoria` text COLLATE utf8_spanish_ci,
  `Resultado` mediumtext COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`),
  KEY `NumdeAuditoria` (`ai`),
  FULLTEXT KEY `Auditor` (`Auditor`),
  FULLTEXT KEY `ai` (`ai`),
  FULLTEXT KEY `AreaAuditada` (`AreaAuditada`),
  FULLTEXT KEY `Resultado` (`Resultado`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=40 ;
";
$sql_table_inspecciones = "
CREATE TABLE IF NOT EXISTS `inspecciones` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `inspector` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `servicio` text COLLATE utf8_spanish_ci NOT NULL,
  `hora` time NOT NULL,
  `vigilante` text COLLATE utf8_spanish_ci NOT NULL,
  `incidencia` text COLLATE utf8_spanish_ci,
  `codigo_incidencia` int(11) NOT NULL,
  `servicio2` text COLLATE utf8_spanish_ci NOT NULL,
  `hora2` time NOT NULL,
  `vigilante2` text COLLATE utf8_spanish_ci NOT NULL,
  `incidencia2` text COLLATE utf8_spanish_ci,
  `codigo_incidencia2` int(11) NOT NULL,
  `servicio3` text COLLATE utf8_spanish_ci NOT NULL,
  `hora3` time NOT NULL,
  `vigilante3` text CHARACTER SET latin1 NOT NULL,
  `incidencia3` text CHARACTER SET latin1,
  `codigo_incidencia3` int(11) NOT NULL,
  `servicio4` text COLLATE utf8_spanish_ci NOT NULL,
  `hora4` time NOT NULL,
  `vigilante4` text COLLATE utf8_spanish_ci NOT NULL,
  `incidencia4` text COLLATE utf8_spanish_ci,
  `codigo_incidencia4` int(11) NOT NULL,
  `servicio5` text COLLATE utf8_spanish_ci NOT NULL,
  `hora5` time NOT NULL,
  `vigilante5` text COLLATE utf8_spanish_ci NOT NULL,
  `incidencia5` text COLLATE utf8_spanish_ci,
  `codigo_incidencia5` int(11) NOT NULL,
  `servicio6` text COLLATE utf8_spanish_ci NOT NULL,
  `hora6` time NOT NULL,
  `vigilante6` text COLLATE utf8_spanish_ci NOT NULL,
  `incidencia6` text COLLATE utf8_spanish_ci,
  `codigo_incidencia6` int(11) NOT NULL,
  `servicio7` text COLLATE utf8_spanish_ci NOT NULL,
  `hora7` time NOT NULL,
  `vigilante7` text COLLATE utf8_spanish_ci NOT NULL,
  `incidencia7` text COLLATE utf8_spanish_ci,
  `codigo_incidencia7` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  FULLTEXT KEY `incidencia2` (`incidencia2`),
  FULLTEXT KEY `incidencia3` (`incidencia3`),
  FULLTEXT KEY `incidencia4` (`incidencia4`),
  FULLTEXT KEY `incidencia5` (`incidencia5`),
  FULLTEXT KEY `incidencia6` (`incidencia6`),
  FULLTEXT KEY `incidencia7` (`incidencia7`),
  FULLTEXT KEY `incidencia` (`incidencia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=21 ;
";
$sql_table_inspectores = "
CREATE TABLE IF NOT EXISTS `inspectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspector` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `activo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `inspector` (`inspector`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;
";
$sql_table_links = "
CREATE TABLE IF NOT EXISTS `links` (
  `linkid` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` text COLLATE utf8_spanish_ci NOT NULL,
  `link` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`linkid`),
  FULLTEXT KEY `linkname` (`linkname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=48 ;
";
$sql_table_modifdoc = "
CREATE TABLE IF NOT EXISTS `modifdoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) DEFAULT NULL,
  `revision_num` int(1) DEFAULT NULL,
  `modificacion` varchar(1828) DEFAULT NULL,
  `capapart` varchar(6) DEFAULT NULL,
  `fechamodificacion` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;
";
$sql_table_ncsporarea = "
CREATE TABLE IF NOT EXISTS `ncsporarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` text COLLATE utf8_spanish_ci,
  `cantidad` bigint(21) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;
";

$sql_table_objetivosdatosgenerales = "
CREATE TABLE IF NOT EXISTS `objetivosdatosgenerales` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoObjetivo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NombreObjetivo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Ano` int(11) DEFAULT NULL,
  `Origen` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Deteccion` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Causas` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Recursos` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Indicador` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fuente` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FrecuenciaDeRevision` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Plazo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ResponsableDeEjecucion` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ResponsableDeSeguimiento` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VBDireccion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ResultadoFinal` mediumtext COLLATE utf8_spanish_ci,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `CodigoObjetivo` (`CodigoObjetivo`),
  FULLTEXT KEY `NombreObjetivo` (`NombreObjetivo`),
  FULLTEXT KEY `Causas` (`Causas`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;
";
$sql_table_objetivosseguimiento = "
CREATE TABLE IF NOT EXISTS `objetivosseguimiento` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoobjetivo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `accion` text COLLATE utf8_spanish_ci,
  `responsable` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechalimite` date DEFAULT NULL,
  `fechaterminacion` date DEFAULT NULL,
  `observaciones` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`Id`),
  KEY `CodigoObjetivo` (`codigoobjetivo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=51 ;
";
$sql_table_partedetrabajo = "
CREATE TABLE IF NOT EXISTS `partedetrabajo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `centrotrabajo` text COLLATE utf8_spanish_ci NOT NULL,
  `empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `h1` time DEFAULT NULL,
  `c1` text COLLATE utf8_spanish_ci,
  `h2` time DEFAULT NULL,
  `c2` text COLLATE utf8_spanish_ci,
  `h3` time DEFAULT NULL,
  `c3` text COLLATE utf8_spanish_ci,
  `h4` time DEFAULT NULL,
  `c4` text COLLATE utf8_spanish_ci,
  `h5` time DEFAULT NULL,
  `c5` text COLLATE utf8_spanish_ci,
  `h6` time DEFAULT NULL,
  `c6` text COLLATE utf8_spanish_ci,
  `h7` time DEFAULT NULL,
  `c7` text COLLATE utf8_spanish_ci,
  `h8` time DEFAULT NULL,
  `c8` text COLLATE utf8_spanish_ci,
  `h9` time DEFAULT NULL,
  `c9` text COLLATE utf8_spanish_ci,
  `h10` time DEFAULT NULL,
  `c10` text COLLATE utf8_spanish_ci,
  `h11` time DEFAULT NULL,
  `c11` text COLLATE utf8_spanish_ci,
  `h12` time DEFAULT NULL,
  `c12` text COLLATE utf8_spanish_ci,
  `h13` time DEFAULT NULL,
  `c13` text COLLATE utf8_spanish_ci,
  `h14` time DEFAULT NULL,
  `c14` text COLLATE utf8_spanish_ci,
  `h15` time DEFAULT NULL,
  `c15` text COLLATE utf8_spanish_ci,
  `h16` time DEFAULT NULL,
  `c16` text COLLATE utf8_spanish_ci,
  `h17` time DEFAULT NULL,
  `c17` text COLLATE utf8_spanish_ci,
  `h18` time DEFAULT NULL,
  `c18` text COLLATE utf8_spanish_ci,
  `h19` time DEFAULT NULL,
  `c19` text COLLATE utf8_spanish_ci,
  `h20` time DEFAULT NULL,
  `c20` text COLLATE utf8_spanish_ci,
  `h21` time DEFAULT NULL,
  `c21` text COLLATE utf8_spanish_ci,
  `h22` time DEFAULT NULL,
  `c22` text COLLATE utf8_spanish_ci,
  `h23` time DEFAULT NULL,
  `c23` text COLLATE utf8_spanish_ci,
  `h24` time DEFAULT NULL,
  `c24` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `centrotrabajo` (`centrotrabajo`,`empleado`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;
";
$sql_table_proveedores = "
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `cif` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` text COLLATE utf8_spanish_ci,
  `suministro` text COLLATE utf8_spanish_ci NOT NULL,
  `criteriosdeevaluacion` text COLLATE utf8_spanish_ci,
  `datos` text COLLATE utf8_spanish_ci,
  `activo` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `proveedor` (`proveedor`,`suministro`,`criteriosdeevaluacion`,`datos`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=26 ;
";
$sql_table_secciones = "
CREATE TABLE IF NOT EXISTS `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `padre` int(11) DEFAULT NULL,
  `lft` int(11) NOT NULL DEFAULT '0',
  `rgt` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=22 ;
";
$sql_table_servicios = "
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicio` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `urlquery` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `servicio` (`servicio`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=17 ;
";
$sql_table_solicitudes = "
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL DEFAULT '2012-09-13',
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `link` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `comment` text CHARACTER SET utf8,
  `seccionid` int(11) NOT NULL DEFAULT '0',
  `clave1` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `nombrecontacto` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `emailcontacto` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(4) NOT NULL DEFAULT '0',
  `emailed` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=113 ;
";
$sql_table_trabajadores = "
CREATE TABLE IF NOT EXISTS `trabajadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trabajador` text COLLATE utf8_spanish_ci NOT NULL,
  `imgsrc` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `trabajador` (`trabajador`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=22 ;
";
$sql_table_afectaa_data = "
INSERT INTO `afectaa` (`id`, `afectaa`) VALUES
(1, 'AACC'),
(2, 'Archivo'),
(3, 'Compras'),
(4, 'Control_de_datos'),
(5, 'Control_de_documentos'),
(6, 'Control_de_proveedor'),
(7, 'DocumentaciÃ³n_de_requisitos'),
(8, 'FormaciÃ³n'),
(9, 'InspecciÃ³n'),
(10, 'Mantenimiento'),
(11, 'MediciÃ³n'),
(12, 'MÃ©todos'),
(13, 'PlanificaciÃ³n'),
(14, 'PRL'),
(15, 'ProducciÃ³n'),
(16, 'Proveedor'),
(17, 'Recursos'),
(18, 'Registro'),
(19, 'Responsabilidades'),
(20, 'RevisiÃ³n_de_contratos'),
(21, 'SatisfacciÃ³n_del_cliente'),
(22, 'Seguimiento');
";
$sql_table_aisgc_data = "
INSERT INTO `aisgc` (`id`, `fecha`, `ai`, `auditor1`, `auditor2`, `auditor3`, `docum`, `trabajador1`, `trabajador2`, `trabajador3`, `servicio1`, `servicio2`, `vehiculos`, `obstrat`, `obscal`, `obsalmac`, `obscompras`, `obsformac`, `obsdocum`, `obslegio`) VALUES
(2, '2011-10-27', 'AI1101', 'Auditor-1', 'Auditor-3', '...', '<p>Manual, especificaciones, contratos</p>', 'Trabajador1', 'Trabajador10', 'Trabajador2', 'S2 CÃ�DIZ', 'S1 SEVILLA', '', '<p>El trabajador 10 no lleva el kit completo, y no lleva calzado de seguridad. En el servicio de C&aacute;diz, no han limpiado despu&eacute;s de terminar.</p>', '<p>No est&aacute;n actualizadas las fechas de los documentos de la BD</p>', '', '<p>No hay incidencias</p>', '<p>El trabajador 8 no ha actualizado su homologaci&oacute;n.</p>', '<p>No est&aacute;n actualizadas las fechas de los documentos de la BD</p>', '<p>N/A</p>'),
(3, '2011-12-08', 'AI1100', 'Auditor-3', 'Auditor-1', '...', '<p>NA</p>', 'Trabajador1', 'Trabajador3', '...', 'S1 CÃ�DIZ', 'S1 HUELVA', 'corsa', '<p>Bien</p>', '<p>Bien</p>', '<p>Bien</p>', '<p>Bien</p>', '', '<p>Mal</p>', '<p>na</p>'),
(4, '2011-12-22', 'AI1100', 'Auditor-3', 'Auditor-1', '...', '', 'Trabajador2', '...', 'Rober', 'S2 CÃ�DIZ', '...', 'corsa', '', '', '', '', '', '', ''),
(5, '2012-02-10', '', 'LUIS GONZALEZ ALONSO', '...', '...', '', 'Trabajador1', '...', '...', '...', '...', '', '', '', '', '', '', '', '<p>SE DETECTA FALTA DE CONTROL METROLOGICO EN EL TALLER DE RUEDAS. VARIOS MANOMETROS SIN ETIQUETA IDENTIFICACI&Oacute;N FECHA ULTIMA Y PROXIMA CALIBRACI&Oacute;N.</p>\r\n<p>&nbsp;</p>'),
(6, '2012-09-13', 'agzxtsZhiN', 'LUIS GONZALEZ ALONSO', 'Auditor-3', 'Auditor-3', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  ', 'Trabajador10', 'Trabajador17', 'Trabajador5', 'S1 SEVILLA', 'S2 HUELVA', 'ayFyCGTlQJaVHY', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  , de la calle Mirador, vecino de tu teda en el 21 y de Antonio  El Pillo , jugaba con tus primos y te recuerdo con la guitarra a cuesta. Pisha sigue ased que te espera una larga vida cantando esas maravillosas e increibles canciones. Me paso todo el deda oye9ndolas, sf3lo o en compaf1eda de mi esposa e hijas. Espero que cuando vengas a Don Benito te pueda ver y saludar.Un abrazo de un gaditano que vive ahora en Extremadura.', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  , de la calle Mirador, vecino de tu teda en el 21 y de Antonio  El Pillo , jugaba con tus primos y te recuerdo con la guitarra a cuesta. Pisha sigue ased que te espera una larga vida cantando esas maravillosas e increibles canciones. Me paso todo el deda oye9ndolas, sf3lo o en compaf1eda de mi esposa e hijas. Espero que cuando vengas a Don Benito te pueda ver y saludar.Un abrazo de un gaditano que vive ahora en Extremadura.', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  , de la calle Mirador, vecino de tu teda en el 21 y de Antonio  El Pillo , jugaba con tus primos y te recuerdo con la guitarra a cuesta. Pisha sigue ased que te espera una larga vida cantando esas maravillosas e increibles canciones. Me paso todo el deda oye9ndolas, sf3lo o en compaf1eda de mi esposa e hijas. Espero que cuando vengas a Don Benito te pueda ver y saludar.Un abrazo de un gaditano que vive ahora en Extremadura.', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  , de la calle Mirador, vecino de tu teda en el 21 y de Antonio  El Pillo , jugaba con tus primos y te recuerdo con la guitarra a cuesta. Pisha sigue ased que te espera una larga vida cantando esas maravillosas e increibles canciones. Me paso todo el deda oye9ndolas, sf3lo o en compaf1eda de mi esposa e hijas. Espero que cuando vengas a Don Benito te pueda ver y saludar.Un abrazo de un gaditano que vive ahora en Extremadura.', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  , de la calle Mirador, vecino de tu teda en el 21 y de Antonio  El Pillo , jugaba con tus primos y te recuerdo con la guitarra a cuesta. Pisha sigue ased que te espera una larga vida cantando esas maravillosas e increibles canciones. Me paso todo el deda oye9ndolas, sf3lo o en compaf1eda de mi esposa e hijas. Espero que cuando vengas a Don Benito te pueda ver y saludar.Un abrazo de un gaditano que vive ahora en Extremadura.', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  , de la calle Mirador, vecino de tu teda en el 21 y de Antonio  El Pillo , jugaba con tus primos y te recuerdo con la guitarra a cuesta. Pisha sigue ased que te espera una larga vida cantando esas maravillosas e increibles canciones. Me paso todo el deda oye9ndolas, sf3lo o en compaf1eda de mi esposa e hijas. Espero que cuando vengas a Don Benito te pueda ver y saludar.Un abrazo de un gaditano que vive ahora en Extremadura.', 'Selu, te conozco desde que eras pequef1o. Yo soy tambie9n de tu bairro   El Barrio de Santa Mareda  , de la calle Mirador, vecino de tu teda en el 21 y de Antonio  El Pillo , jugaba con tus primos y te recuerdo con la guitarra a cuesta. Pisha sigue ased que te espera una larga vida cantando esas maravillosas e increibles canciones. Me paso todo el deda oye9ndolas, sf3lo o en compaf1eda de mi esposa e hijas. Espero que cuando vengas a Don Benito te pueda ver y saludar.Un abrazo de un gaditano que vive ahora en Extremadura.'),
(7, '2012-09-04', 'AI1203', 'MIGUEL A. MOYA SEN', '', '', 'Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo', 'Trabajador17', '', '', 'S4 CÃ�DIZ', 'S4 CÃ�Â�DIZ', 'CHRBxQUEao', '<p>Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo y vamos a verte a todos los conciertos del norte.Siempre te llevamos la bandera ke te puso hace ya varios af1os en el teatro Arriaga y siempre te la colgamos donde puedas verla. No te imaginas lo importante ke eres en nuestras vidas.Sigue ased de sencillo y de humano. Ayer en bilbo vimos un concierto magnifico y volveremos a verte en Santander y seguro ke disfrutaremos igual ke en todos. no cambies Selu</p>', '<p>Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo y vamos a verte a todos los conciertos del norte.Siempre te llevamos la bandera ke te puso hace ya varios af1os en el teatro Arriaga y siempre te la colgamos donde puedas verla. No te imaginas lo importante ke eres en nuestras vidas.Sigue ased de sencillo y de humano. Ayer en bilbo vimos un concierto magnifico y volveremos a verte en Santander y seguro ke disfrutaremos igual ke en todos. no cambies Selu</p>', '<p>Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo y vamos a verte a todos los conciertos del norte.Siempre te llevamos la bandera ke te puso hace ya varios af1os en el teatro Arriaga y siempre te la colgamos donde puedas verla. No te imaginas lo importante ke eres en nuestras vidas.Sigue ased de sencillo y de humano. Ayer en bilbo vimos un concierto magnifico y volveremos a verte en Santander y seguro ke disfrutaremos igual ke en todos. no cambies Selu</p>', '<p>Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo y vamos a verte a todos los conciertos del norte.Siempre te llevamos la bandera ke te puso hace ya varios af1os en el teatro Arriaga y siempre te la colgamos donde puedas verla. No te imaginas lo importante ke eres en nuestras vidas.Sigue ased de sencillo y de humano. Ayer en bilbo vimos un concierto magnifico y volveremos a verte en Santander y seguro ke disfrutaremos igual ke en todos. no cambies Selu</p>', '<p>Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo y vamos a verte a todos los conciertos del norte.Siempre te llevamos la bandera ke te puso hace ya varios af1os en el teatro Arriaga y siempre te la colgamos donde puedas verla. No te imaginas lo importante ke eres en nuestras vidas.Sigue ased de sencillo y de humano. Ayer en bilbo vimos un concierto magnifico y volveremos a verte en Santander y seguro ke disfrutaremos igual ke en todos. no cambies Selu</p>', '<p>Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo y vamos a verte a todos los conciertos del norte.Siempre te llevamos la bandera ke te puso hace ya varios af1os en el teatro Arriaga y siempre te la colgamos donde puedas verla. No te imaginas lo importante ke eres en nuestras vidas.Sigue ased de sencillo y de humano. Ayer en bilbo vimos un concierto magnifico y volveremos a verte en Santander y seguro ke disfrutaremos igual ke en todos. no cambies Selu</p>', '<p>Gracias a ti y a tu mfasica me enamore del hbmore mas maravilloso del mundo. los dos somos fans tuyo y vamos a verte a todos los conciertos del norte.Siempre te llevamos la bandera ke te puso hace ya varios af1os en el teatro Arriaga y siempre te la colgamos donde puedas verla. No te imaginas lo importante ke eres en nuestras vidas.Sigue ased de sencillo y de humano. Ayer en bilbo vimos un concierto magnifico y volveremos a verte en Santander y seguro ke disfrutaremos igual ke en todos. no cambies Selu</p>'),
(8, '2012-10-02', 'AI1204', 'Array[MIGUEL A. MOYA SEN][LUIS GONZALEZ ALONSO][RAUL CALLEJO]', '', '', '<p>SDF</p>', '', '', '', 'S4 CÃ�DIZ', 'S2 MÃ�LAGA', 'SDF', '<p>SDF</p>', '<p>SDF</p>', '<p>DF</p>', '<p>DF</p>', '<p>DF</p>', '<p>DSF</p>', '<p>SDF</p>'),
(9, '2012-09-12', 'AI891', 'Array[Auditor-1][MIGUEL A. MOYA SEN][LUIS GONZALEZ ALONSO]', NULL, NULL, '<p>jh</p>', 'Array[Trabajador2][Trabajador11][Trabajador12][Trabajador19]', NULL, NULL, 'S3 SEVILLA', 'S4 MÃ�LAGA', 'tu', '<p>67</p>', '', '', '', '', '', '<p>567</p>'),
(10, '2012-10-03', 'AI8894', '', NULL, NULL, '<p>sdt</p>', '', NULL, NULL, 'S1 SEVILLA', 'S1 SEVILLA', '546', '<p>et</p>', '', '', '', '', '', '<p>adst</p>'),
(11, '2012-10-03', 'AI8894', '', NULL, NULL, '<p>sdt</p>', '', NULL, NULL, 'S1 SEVILLA', 'S1 SEVILLA', '546', '<p>et</p>', '', '', '', '', '', '<p>adst</p>'),
(12, '2012-10-03', 'AI88895', 'Array[][][Auditor-1][][MIGUEL A. MOYA SEN][][LUIS GONZALEZ ALONSO][]', NULL, NULL, '<p>sdtdrt</p>', 'Array[][][Trabajador2][][Trabajador3][][][][][][][][Trabajador12][][][][][][]', NULL, NULL, 'S2 SEVILLA', 'S3 SEVILLA', 'aert', '<p>edryte5t6</p>', '', '', '', '', '', '<p>e3t6qae</p>');
";
$sql_table_areassensibles_data = "
INSERT INTO `areassensibles` (`id`, `nombrearea`) VALUES
(1, 'Cliente'),
(2, 'Tratamientos'),
(3, 'Salud pÃºblica'),
(4, 'Imagen corporativa'),
(5, 'Costos'),
(6, 'FacturaciÃ³n'),
(7, 'Stock'),
(8, 'Otros-dos');
";
$sql_table_auditores_data = "
INSERT INTO `auditores` (`id`, `auditor`, `imgsrc`, `activo`) VALUES
(1, 'Auditor-3', 'mod/faces/tmp/auditor1.png', 1),
(2, 'Auditor-1', 'mod/faces/tmp/auditor2.png', 1),
(3, 'MIGUEL A. MOYA SEN', 'mod/faces/tmp/auditor3.png', 1),
(4, 'LUIS GONZALEZ ALONSO', 'mod/faces/tmp/auditor4.png', 1),
(5, 'RAUL CALLEJO', 'mod/faces/tmp/auditor5.png', 1);
";
$sql_table_avisos_data = "
INSERT INTO `avisos` (`id`, `fecha`, `comunicado_por`, `comentarios`) VALUES
(1, '2009-11-23', 'Juan Ramos', 'SegÃºn la observaciÃ³n nÂº 12 realizada durante la auditorÃ­a de certificaciÃ³n de AENOR, se considerÃ³ necesario... <br>Juan Ramos'),
(2, '2009-04-28', 'Juan Ramos', 'Se comunica que no deben estar mezclados los materiales, respetando las zonas de almacÃ©n destinados a cada empresa.\r\n\r\nRogamos sea ordenado el taller.\r\n\r\nJuan Ramos'),
(3, '2009-12-10', 'Juan Ramos', 'Durante el aÃ±o 2007 se han producido 4 incidencias catalogadas como graves:\r\n\r\nPolÃ­gono	02-mar-07	PI343\r\nPolÃ­gono	04-may-07	PI343\r\nPolÃ­gono	18-may-07	PI343\r\nPolÃ­gono	01-jun-07	PI343\r\n\r\nDebido a ello, el indicador llegÃ³ a tomar un valor de ... en el mes de Junio en cuanto a acumulaciÃ³n de incidencias y un valor de ...'),
(5, '2010-12-01', 'Juan Ramos', '<P>Con objeto de que tengÃ¡is acceso a la Ãºltima revisiÃ³n de la documentaciÃ³n'),
(20, '2012-01-20', 'Jjyan', '<p>Hola! Est&aacute;s en la p&aacute;gina principal de la aplicaci&oacute;n. Accede a la gesti&oacute;n desde los men&uacute;s lateral y superior. Por cierto, el menu superior aparece cuando pinchas el lateral...</p>'),
(16, '2011-09-12', 'admin', '<p>Bienvenido a la aplicaci&oacute;n HANDY-Q, una oficina de calidad online!</p>'),
(17, '2011-10-24', 'jj', '<p>vamos</p>');
";
$sql_table_calibraciones_data = "
INSERT INTO `calibraciones` (`id`, `equipo`, `accion`, `procedimiento`, `lugar`, `fecha`, `resultado`, `desviacion`, `estado`, `observaciones`) VALUES
(1, 'Equipo 2', 'Calibrar', 'Laboratorio', 'VORSEVI', '2011-12-08', 'Conforme', '0', '', ''),
(2, 'Equipo 2', 'Limpiar', 'nada', 'Acano', '2011-12-16', 'Conforme', '0', '', '');
";
$sql_table_codigosincidencias_data = "
INSERT INTO `codigosincidencias` (`id`, `codname`) VALUES
(1, '1 - Registro sanitario'),
(2, '2 - Calidad de producto'),
(3, '3 - Error de producto'),
(4, '4 - Plazo'),
(5, '5 - Precio'),
(6, '6 - Cantidad'),
(7, '7 - Transporte'),
(8, '8 - FacturaciÃ³n'),
(9, '9 - Otros');
";
$sql_table_codigosincidenciasinspecciones_data = "
INSERT INTO `codigosincidenciasinspecciones` (`id`, `gravedad`, `codincid`, `nombreincid`) VALUES
(1, 'leve', '0', 'Sin incidencias'),
(2, 'leve', '1', 'Falta de instrumental'),
(3, 'leve', '2', 'Falta de producto'),
(4, 'leve', '3', 'Tratamiento deficiente'),
(5, 'leve', '4', 'Falta de medidas de protecciÃ³n'),
(6, 'grave', '5', 'Falta de Ã³rdenes de trabajo'),
(7, 'grave', '6', 'Falta de certificados'),
(8, 'grave', '7', 'Falta de indumentaria, aseo y limpieza personal'),
(9, 'grave', '8', ' Falta de conservaciÃ³n y limpieza del vehÃ­culo');
";
$sql_table_controlavisos_data = "
INSERT INTO `controlavisos` (`id`, `mes`, `numcertif`, `numreclam`, `percent`) VALUES
(1, 'en10', 354, 17, 4.80),
(2, 'feb10', 346, 23, 6.65),
(3, 'mar10', 341, 29, 8.50),
(4, 'ab10', 375, 47, 12.53),
(5, 'may10', 425, 47, 11.06),
(6, 'jun10', 486, 76, 15.64),
(7, 'jul10', 524, 85, 16.22),
(8, 'ago10', 369, 49, 13.28),
(9, 'sep10', 382, 24, 6.28),
(10, 'oct10', 323, 21, 6.50),
(11, 'nov10', 316, 16, 5.06),
(12, 'dic10', 278, 8, 2.88),
(13, 'en11', 354, 10, 2.82),
(14, 'feb11', 346, 14, 4.05),
(15, 'mar11', 341, 21, 6.16),
(16, 'ab11', 375, 23, 6.13),
(17, 'may11', 425, 34, 8.00),
(18, 'jun11', 486, 56, 11.52),
(19, 'jul11', 524, 37, 7.06),
(20, 'ago11', 369, 6, 1.63);
";
$sql_table_cursos_data = "
INSERT INTO `cursos` (`id`, `trabajador`, `curso`, `lugar`, `fecha`, `horas`, `validacion`, `comentarios`) VALUES
(11, 'Trabajador1', 'Curso-1', 'IPRODE', '2004-10-14', 225, 'Diploma', NULL),
(24, 'Trabajador1', 'Curso-3', 'Mutua', '2003-08-01', 4, 'Diploma', NULL),
(25, 'Trabajador1', 'Curso-4', 'Escuela', '2005-11-14', 20, 'Diploma', 'Faltan certificados de asistencia'),
(26, 'Trabajador1', 'Curso-5', 'Aula formativa', '2005-11-29', 2, 'Comprobado Jefe de servicio', NULL),
(27, 'Trabajador1', 'Curso-6', 'Aula formativa', '2003-08-05', 2, 'Comprobado Jefe de servicio', NULL),
(28, 'Trabajador1', 'Curso-5', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(29, 'Trabajador1', 'Curso-7', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(30, 'Trabajador1', 'Curso-8', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(31, 'Trabajador1', 'Curso-4', 'Escuela', '2003-04-09', 0, 'Diploma', 'Falta certificado y horas'),
(32, 'Trabajador2', 'Curso-5', 'Aula formativa', '2005-11-29', 2, 'Comprobado Jefe de servicio', NULL),
(45, 'Trabajador3', 'Curso-9', 'Aula formativa', '2004-01-02', 2, 'Comprobado Jefe de servicio', NULL),
(53, 'Trabajador4', 'Curso-4', 'Escuela', '2004-02-23', 20, 'Diploma', NULL),
(56, 'Trabajador4', 'Curso-10', '?', '2004-07-30', 0, '?', NULL),
(57, 'Trabajador4', 'Curso-10', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(58, 'Trabajador4', 'Curso-3', 'Mutua', '2003-06-01', 0, '?', NULL),
(59, 'Trabajador4', 'Curso-9', 'Aula formativa', '2004-01-02', 2, 'Comprobado Jefe de servicio', NULL),
(61, 'Trabajador4', 'Curso-11', 'Aula formativa', '2003-06-18', 2, 'Comprobado Jefe de servicio', NULL),
(62, 'Trabajador4', 'Curso-6', 'Aula formativa', '2003-08-05', 2, 'Comprobado Jefe de servicio', NULL),
(63, 'Trabajador4', 'Curso-12', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(64, 'Trabajador4', 'Curso-13', 'Aula formativa', '2002-10-18', 2, 'Comprobado Jefe de servicio', NULL),
(65, 'Trabajador4', 'Curso-14', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(66, 'Trabajador4', 'Curso-15', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(67, 'Trabajador4', 'Curso-15', 'Aula formativa', '2003-08-12', 2, 'Comprobado Jefe de servicio', NULL),
(68, 'Trabajador4', 'Curso-5', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(69, 'Trabajador4', 'Curso-7', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(70, 'Trabajador4', 'Curso-8', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(72, 'Trabajador4', 'Curso-16', 'Aula formativa', '2003-04-02', 2, 'Comprobado Jefe de servicio', NULL),
(73, 'Trabajador4', 'Curso-4', 'Escuela', '2003-04-09', 20, 'Diploma', NULL),
(76, 'Trabajador1', 'Curso-4', 'Escuela', '2006-11-01', 20, 'Diploma', 'Certificado Escuela 09/07/2008'),
(78, 'Trabajador2', 'Curso-4', 'Escuela', '2006-11-01', 20, 'Diploma', 'Falta diploma Escuela'),
(83, 'Trabajador4', 'Curso-4', 'Escuela', '2006-11-01', 20, 'Diploma', 'certificado Escuela 09/07/2008'),
(102, 'Trabajador5', 'Curso-12', 'Aula formativa', '2007-08-10', 2, 'Comprobado Jefe de servicio', NULL),
(105, 'Trabajador6', 'Curso-12', 'Aula formativa', '2007-08-01', 2, 'Comprobado Jefe de servicio', NULL),
(111, 'Trabajador4', 'Curso-17', 'Aula formativa', '2006-06-16', 4, 'Certificado en NC0407', NULL),
(115, 'Trabajador1', 'Curso-17', 'Aula formativa', '2006-06-16', 4, 'Certificado en NC0407', NULL),
(116, 'Trabajador2', 'Curso-17', 'Aula formativa', '2006-06-16', 4, 'Certificado en NC0407', NULL),
(121, 'Trabajador11', 'Curso-17', 'Aula formativa', '2006-06-16', 4, 'Certificado en NC0407', NULL),
(122, 'Trabajador1', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(123, 'Trabajador2', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(124, 'Trabajador4', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(127, 'Trabajador9', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(128, 'Trabajador5', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(129, 'Trabajador7', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(131, 'Trabajador8', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(134, 'Trabajador10', 'Curso-17', 'Aula formativa', '2008-06-16', 40, '<p>Prueba de test</p>', ''),
(135, 'Trabajador6', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(136, 'Trabajador12', 'Curso-17', 'Aula formativa', '2008-06-16', 240, '<p>Prueba de test</p>', ''),
(146, 'Trabajador13', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', NULL),
(147, 'Trabajador2', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '10'),
(148, 'Trabajador12', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '10'),
(149, 'Trabajador8', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '9,3'),
(152, 'Trabajador7', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '9,5'),
(153, 'Trabajador5', 'Curso-18', 'Aula formativa', '2009-06-30', 180, '<p>Prueba de test</p>', '<p>9,7</p>'),
(154, 'Trabajador9', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '9,5'),
(156, 'Trabajador1', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '8,3'),
(157, 'Trabajador4', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '8'),
(158, 'Trabajador13', 'Curso-15', 'Aula formativa', '2009-01-20', 4, 'Comprobado Jefe de servicio', NULL),
(159, 'Trabajador10', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '9,5'),
(160, 'Trabajador6', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '10'),
(161, 'Trabajador14', 'Curso-17', 'Aula formativa', '2008-06-16', 4, 'Prueba de test', NULL),
(162, 'Trabajador14', 'Curso-18', 'Aula formativa', '2009-06-30', 4, 'Prueba de test', '9,5'),
(163, 'Trabajador19', 'Curso', 'Lugar', '2011-05-11', 30, 'ValidaciÃ³n', 'Comentarios');
";
$sql_table_docmanager_data = "
INSERT INTO `docmanager` (`id`, `titulo`, `autor`, `fecha`, `contenido`) VALUES
(2, 'Control de no conformidades', 'Auditor-1', '2011-09-01', 'xvicha:shaman king sami typoi multik nuarto v milion raz luchshe fayst i spairo vi dibili yrodi. esli ne smotrite naryto to zachem zaxodite smotret naryto aaaa'),
(3, 'PreparaciÃ³n auditorÃ­a 2011', 'Inspector-2', '2011-09-07', '<p>I just recently (and iniatilly, somewhat reluctantly) switched from the plastic/slinky to the semi-rigid all-metal unit. It was a little more challenging to install, but I now know that it is much less likely to pinch-off behind the dryer, and seeing&iuml;&raquo;&iquest; this video helps affirm the safest future choice when the vent needs replacement. Thank you!</p>');
";
$sql_table_enlaces_data = "
INSERT INTO `enlaces` (`id`, `idsolicitud`, `fecha`, `titulo`, `link`, `comment`, `seccionid`, `clave1`) VALUES
(2, 2, '2012-09-13', 'EspecificaciÃ³n del servicio', 'http://handyq.textblock.org/uploads/calidad/doc2.doc', 'R 0', 5, 'calidad'),
(3, 3, '2012-09-13', 'Incidencias', 'http://handyq.textblock.org/uploads/calidad/doc3.doc', 'R 1', 5, 'calidad'),
(4, 4, '2012-09-13', 'Formato de', 'http://handyq.textblock.org/uploads/calidad/doc4.doc', 'R 2', 3, 'calidad'),
(5, 5, '2012-09-13', 'PolÃ­tica de calidad', 'http://handyq.textblock.org/uploads/calidad/doc5.doc', 'R 3', 3, 'calidad'),
(6, 6, '2012-09-13', 'Indicadores de la calidad', 'http://handyq.textblock.org/uploads/calidad/doc6.doc', 'R 4', 6, 'calidad'),
(7, 7, '2012-09-13', 'AuditorÃ­a sistema', 'http://handyq.textblock.org/uploads/calidad/doc7.doc', 'R 0', 6, 'calidad'),
(8, 8, '2012-09-13', 'Cuestionario a clientes', 'http://handyq.textblock.org/uploads/calidad/doc8.doc', 'R 1', 6, 'calidad'),
(9, 9, '2012-09-13', 'Cuestionario a trabajadores', 'http://handyq.textblock.org/uploads/calidad/doc9.doc', 'R 2', 6, 'calidad'),
(10, 10, '2012-09-13', 'Ficha de indicador', 'http://handyq.textblock.org/uploads/calidad/doc10.doc', 'R 3', 6, 'calidad'),
(11, 11, '2012-09-13', 'Infraestructuras', 'http://handyq.textblock.org/uploads/calidad/doc11.doc', 'R 4', 4, 'calidad'),
(12, 12, '2012-09-13', 'Manual de la calidad', 'http://handyq.textblock.org/uploads/calidad/doc12.doc', 'R 5', 3, 'calidad'),
(13, 13, '2012-09-13', 'Norma bÃ¡sica de servicio', 'http://handyq.textblock.org/uploads/calidad/doc13.doc', 'R 6', 5, 'calidad'),
(14, 14, '2012-09-13', 'NS-1', 'http://handyq.textblock.org/uploads/calidad/doc14.doc', 'R 7', 5, 'calidad'),
(15, 15, '2012-09-13', 'NS-2', 'http://handyq.textblock.org/uploads/calidad/doc15.doc', 'R 8', 5, 'calidad'),
(16, 16, '2012-09-13', 'NS-3', 'http://handyq.textblock.org/uploads/calidad/doc16.doc', 'R 9', 5, 'calidad'),
(17, 17, '2012-09-13', 'NS-4', 'http://handyq.textblock.org/uploads/calidad/doc17.doc', 'R 0', 5, 'calidad'),
(18, 18, '2012-09-13', 'NS-5', 'http://handyq.textblock.org/uploads/calidad/doc18.doc', 'R 0', 5, 'calidad'),
(19, 19, '2012-09-13', 'NS-6', 'http://handyq.textblock.org/uploads/calidad/doc19.doc', 'R 0', 5, 'calidad'),
(20, 20, '2012-09-13', 'NS-7', 'http://handyq.textblock.org/uploads/calidad/doc20.doc', 'R 0', 5, 'calidad'),
(21, 21, '2012-09-13', 'NS-8', 'http://handyq.textblock.org/uploads/calidad/doc21.doc', 'R 2', 5, 'calidad'),
(22, 22, '2012-09-13', 'NS-9', 'http://handyq.textblock.org/uploads/calidad/doc22.doc', 'R 2', 5, 'calidad'),
(23, 23, '2012-09-13', 'NS-10', 'http://handyq.textblock.org/uploads/calidad/doc23.doc', 'R 2', 5, 'calidad'),
(24, 24, '2012-09-13', 'Procedimiento de ', 'http://handyq.textblock.org/uploads/calidad/doc24.doc', 'R 2', 4, 'calidad'),
(25, 25, '2012-09-13', 'Planes de calidad', 'http://handyq.textblock.org/uploads/calidad/doc25.doc', 'R 5', 6, 'calidad'),
(26, 26, '2012-09-13', 'PolÃ­tica ambiental', 'http://handyq.textblock.org/uploads/medioambiente/doc26.doc', 'R 6', 8, 'medioambiente'),
(27, 27, '2012-09-13', 'Aspectos Ambientales ', 'http://handyq.textblock.org/uploads/medioambiente/doc27.doc', 'R 0', 8, 'medioambiente'),
(28, 28, '2012-09-13', 'Requisitos Legales y otros ', 'http://handyq.textblock.org/uploads/medioambiente/doc28.doc', 'R 1', 8, 'medioambiente'),
(29, 29, '2012-09-13', 'Objetivos y Metas ', 'http://handyq.textblock.org/uploads/medioambiente/doc29.doc', 'R 2', 8, 'medioambiente'),
(30, 30, '2012-09-13', 'GestiÃ³n Ambiental ', 'http://handyq.textblock.org/uploads/medioambiente/doc30.doc', 'R 3', 10, 'medioambiente'),
(31, 31, '2012-09-13', 'Estructura y Responsabilidad ', 'http://handyq.textblock.org/uploads/medioambiente/doc31.doc', 'R 4', 8, 'medioambiente'),
(32, 32, '2012-09-13', 'Entrenamiento, Conocimiento y Competencia ', 'http://handyq.textblock.org/uploads/medioambiente/doc32.doc', 'R 5', 9, 'medioambiente'),
(33, 33, '2012-09-13', 'ComunicaciÃ³n', 'http://handyq.textblock.org/uploads/medioambiente/doc33.doc', 'R 6', 8, 'medioambiente'),
(34, 34, '2012-09-13', 'DocumentaciÃ³n del SGA ', 'http://handyq.textblock.org/uploads/medioambiente/doc34.doc', 'R 7', 8, 'medioambiente'),
(35, 35, '2012-09-13', 'Control de Documentos ', 'http://handyq.textblock.org/uploads/medioambiente/doc35.doc', 'R 3', 8, 'medioambiente'),
(36, 36, '2012-09-13', 'Control Operacional ', 'http://handyq.textblock.org/uploads/medioambiente/doc36.doc', 'R 3', 10, 'medioambiente'),
(37, 37, '2012-09-13', 'PreparaciÃ³n y Respuesta ante emergencias ', 'http://handyq.textblock.org/uploads/medioambiente/doc37.doc', 'R 3', 10, 'medioambiente'),
(38, 38, '2012-09-13', 'Monitoreo y MediciÃ³n ', 'http://handyq.textblock.org/uploads/medioambiente/doc38.doc', 'R 3', 11, 'medioambiente'),
(39, 39, '2012-09-13', 'No Conformidad y AcciÃ³n Preventiva y Correctiva ', 'http://handyq.textblock.org/uploads/medioambiente/doc39.doc', 'R 3', 11, 'medioambiente'),
(40, 40, '2012-09-13', 'Registros', 'http://handyq.textblock.org/uploads/medioambiente/doc40.doc', 'R 3', 11, 'medioambiente'),
(41, 41, '2012-09-13', 'Auditoria al SGA', 'http://handyq.textblock.org/uploads/medioambiente/doc41.doc', 'R 2', 11, 'medioambiente'),
(42, 42, '2012-09-13', 'RevisiÃ³n por la direcciÃ³n', 'http://handyq.textblock.org/uploads/medioambiente/doc42.doc', 'R 2', 11, 'medioambiente'),
(43, 43, '2012-09-13', 'PolÃ­tica de PrevenciÃ³n de Riesgos Laborales ', 'http://handyq.textblock.org/uploads/prl/doc42.doc', 'R 2', 12, 'prl'),
(44, 44, '2012-09-13', 'DeclaraciÃ³n de principios y compromisos ', 'http://handyq.textblock.org/uploads/prl/doc43.doc', 'R 2', 12, 'prl'),
(45, 45, '2012-09-13', 'OrganizaciÃ³n de la actividad preventiva Funciones y responsabilidades ', 'http://handyq.textblock.org/uploads/prl/doc44.doc', 'R 2', 12, 'prl'),
(46, 46, '2012-09-13', 'Reuniones periÃ³dicas de trabajo ', 'http://handyq.textblock.org/uploads/prl/doc45.doc', 'R 2', 12, 'prl'),
(47, 47, '2012-09-13', 'Objetivos ', 'http://handyq.textblock.org/uploads/prl/doc46.doc', 'R 1', 12, 'prl'),
(48, 48, '2012-09-13', 'EvaluaciÃ³n de Riesgos ', 'http://handyq.textblock.org/uploads/prl/doc47.doc', 'R 2', 12, 'prl'),
(49, 49, '2012-09-13', 'Control de Riesgos ', 'http://handyq.textblock.org/uploads/prl/doc48.doc', 'R 3', 12, 'prl'),
(50, 50, '2012-09-13', 'InvestigaciÃ³n y anÃ¡lisis de accidentes/ incidentes Control de la siniestralidad ', 'http://handyq.textblock.org/uploads/prl/doc49.doc', 'R 4', 12, 'prl'),
(51, 51, '2012-09-13', 'Inspecciones y revisiones de seguridad ', 'http://handyq.textblock.org/uploads/prl/doc50.doc', 'R 5', 12, 'prl'),
(52, 52, '2012-09-13', 'Observaciones del trabajo ', 'http://handyq.textblock.org/uploads/prl/doc51.doc', 'R 6', 12, 'prl'),
(53, 53, '2012-09-13', 'Vigilancia de la salud de los trabajadores ', 'http://handyq.textblock.org/uploads/prl/doc52.doc', 'R 7', 12, 'prl'),
(54, 54, '2012-09-13', 'Control especÃ­fico de riesgos higiÃ©nicos ', 'http://handyq.textblock.org/uploads/prl/doc53.doc', 'R 8', 12, 'prl'),
(55, 55, '2012-09-13', 'Control especÃ­fico de riesgos ergonÃ³micos y psicosociolÃ³gicos ', 'http://handyq.textblock.org/uploads/prl/doc54.doc', 'R 9', 12, 'prl'),
(56, 56, '2012-09-13', 'ComunicaciÃ³n de riesgos detectados y sugerencias de mejora ', 'http://handyq.textblock.org/uploads/prl/doc55.doc', 'R 10', 12, 'prl'),
(57, 57, '2012-09-13', 'Seguimiento y control de las medidas correctoras ', 'http://handyq.textblock.org/uploads/prl/doc56.doc', 'R 11', 12, 'prl'),
(58, 58, '2012-09-13', 'Actuaciones Preventivas EspecÃ­ficas ', 'http://handyq.textblock.org/uploads/prl/doc57.doc', 'R 12-13', 12, 'prl'),
(59, 59, '2012-09-13', 'Nuevos proyectos y modificaciones de instalaciones, procesos o equipos ', 'http://handyq.textblock.org/uploads/prl/doc58.doc', 'R 13', 12, 'prl'),
(60, 60, '2012-09-13', 'Adquisiciones de mÃ¡quinas, equipos y productos quÃ­micos ', 'http://handyq.textblock.org/uploads/prl/doc59.doc', 'R 14', 12, 'prl'),
(61, 61, '2012-09-13', 'SelecciÃ³n del personal ', 'http://handyq.textblock.org/uploads/prl/doc60.doc', 'R 15', 12, 'prl'),
(62, 62, '2012-09-14', 'Accesos de personal y vehÃ­culos forÃ¡neos ', 'http://docs.google.com/viewer?url=http%3A%2F%2Fhandyq.textblock.org%2Fuploads%2Fprl%2Fdoc61.doc', 'R 16', 12, 'prl'),
(63, 63, '2012-09-13', 'ContrataciÃ³n y subcontrataciÃ³n: trabajo, personas y equipos ', 'http://handyq.textblock.org/uploads/prl/doc62.doc', 'R 17', 12, 'prl'),
(64, 64, '2012-09-13', 'Mantenimiento preventivo ', 'http://handyq.textblock.org/uploads/prl/doc63.doc', 'R 1', 12, 'prl'),
(65, 65, '2012-09-13', 'Instrucciones de trabajo ', 'http://handyq.textblock.org/uploads/prl/doc64.doc', 'R 2', 12, 'prl'),
(66, 66, '2012-09-13', 'Permisos de trabajos especiales ', 'http://handyq.textblock.org/uploads/prl/doc65.doc', 'R 3', 12, 'prl'),
(67, 67, '2012-09-13', 'ConsignaciÃ³n de mÃ¡quinas e instalaciones circunstancialmente fuera de servicio ', 'http://handyq.textblock.org/uploads/prl/doc66.doc', 'R 4', 12, 'prl'),
(68, 68, '2012-09-13', 'Seguridad de productos, subproductos y residuos ', 'http://handyq.textblock.org/uploads/prl/doc67.doc', 'R 5', 12, 'prl'),
(69, 69, '2012-09-13', 'InformaciÃ³n y FormaciÃ³n de los Trabajadores ', 'http://handyq.textblock.org/uploads/prl/doc68.doc', 'R 6', 12, 'prl'),
(70, 70, '2012-09-13', 'InformaciÃ³n de los riesgos en los lugares de trabajo ', 'http://handyq.textblock.org/uploads/prl/doc69.doc', 'R 7', 12, 'prl'),
(71, 71, '2012-09-13', 'FormaciÃ³n inicial y continuada de los trabajadores ', 'http://handyq.textblock.org/uploads/prl/doc70.doc', 'R 8', 12, 'prl'),
(72, 72, '2012-09-13', 'Orden y limpieza de los lugares de trabajo ', 'http://handyq.textblock.org/uploads/prl/doc71.doc', 'R 9', 12, 'prl'),
(73, 73, '2012-09-13', 'SeÃ±alizaciÃ³n de Seguridad ', 'http://handyq.textblock.org/uploads/prl/doc72.doc', 'R 10', 12, 'prl'),
(74, 74, '2012-09-13', 'Equipos de protecciÃ³n personal y ropa de trabajo ', 'http://handyq.textblock.org/uploads/prl/doc73.doc', 'R 11', 12, 'prl'),
(75, 75, '2012-09-13', 'Plan de emergencia ', 'http://handyq.textblock.org/uploads/prl/doc74.doc', 'R 12', 12, 'prl'),
(76, 76, '2012-09-13', 'Primeros auxilios ', 'http://handyq.textblock.org/uploads/prl/doc75.doc', 'R 13', 12, 'prl'),
(77, 77, '2012-09-13', 'Otras normas de PrevenciÃ³n de Riesgos Laborales ', 'http://handyq.textblock.org/uploads/prl/doc76.doc', 'R 14', 12, 'prl'),
(78, 78, '2012-09-13', 'Control de la DocumentaciÃ³n y de los Registros del Sistema de PrevenciÃ³n ', 'http://handyq.textblock.org/uploads/prl/doc77.doc', 'R 15', 12, 'prl'),
(79, 79, '2012-09-13', 'AuditorÃ­as del Sistema de PrevenciÃ³n', 'http://handyq.textblock.org/uploads/prl/doc78.doc', 'R 16', 12, 'prl'),
(80, 80, '2012-09-13', '7_DR_IAE.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc78.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(81, 81, '2012-09-13', 'Acta_Manifestaciones ', 'http://handyq.textblock.org/uploads/administrativos/doc79.pdf', 'Caduca a los -- meses', 14, 'administrativos'),
(82, 82, '2012-09-06', 'AENOR.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc80.pdf', 'Caduca a los -- meses', 16, 'administrativos'),
(83, 83, '2012-09-13', 'IQNET.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc81.pdf', 'Caduca a los -- meses', 16, 'administrativos'),
(84, 84, '2012-09-13', 'Alta_IAE.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc82.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(86, 86, '2012-09-13', 'AUTORIZACION_xx', 'http://handyq.textblock.org/uploads/administrativos/doc84.pdf', 'Caduca a los -- meses', 16, 'administrativos'),
(87, 87, '2012-09-13', 'SEGURO RESP-1.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc85.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(88, 88, '2012-09-13', 'Declaraciones_trimestrales_IVA ', 'http://handyq.textblock.org/uploads/administrativos/doc86.pdf', 'Caduca a los -- meses', 15, 'administrativos'),
(89, 89, '2012-09-13', 'Deudas_SS.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc87.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(90, 90, '2012-09-13', 'Deudas_trib_Com_AutÃ³noma ', 'http://handyq.textblock.org/uploads/administrativos/doc88.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(91, 91, '2012-09-13', 'Deudas_trib_Estado.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc89.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(93, 93, '2012-09-13', 'DR_obligaciones_SS.pdf ', 'http://handyq.textblock.org/uploads/administrativos/doc91.pdf', 'Caduca a los -- meses', 14, 'administrativos'),
(94, 94, '2012-09-13', 'Escritura-a', 'http://handyq.textblock.org/uploads/administrativos/doc92.pdf', 'Caduca a los -- meses', 14, 'administrativos'),
(95, 95, '2012-09-13', 'Escritura-b', 'http://handyq.textblock.org/uploads/administrativos/doc93.pdf', 'Caduca a los -- meses', 14, 'administrativos'),
(96, 96, '2012-09-13', 'Impuesto actividades', 'http://handyq.textblock.org/uploads/administrativos/doc94.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(97, 97, '2012-09-13', 'Impuesto sociedades', 'http://handyq.textblock.org/uploads/administrativos/doc95.pdf', 'Caduca a los -- meses', 17, 'administrativos'),
(98, 98, '2012-09-13', 'NIF', 'http://handyq.textblock.org/uploads/administrativos/doc96.pdf', 'Caduca a los -- meses', 14, 'administrativos'),
(100, 99, '2012-09-13', 'Principales clientes-347-2007 ', 'http://handyq.textblock.org/uploads/administrativos/doc98.pdf', 'Caduca a los -- meses', 15, 'administrativos'),
(101, 100, '2012-09-13', 'Principales clientes-347-2008', 'http://handyq.textblock.org/uploads/administrativos/doc99.pdf', 'Caduca a los -- meses', 15, 'administrativos'),
(102, 101, '2012-09-13', 'Principales clientes-347-2009', 'http://handyq.textblock.org/uploads/administrativos/doc100.pdf', 'Caduca a los -- meses', 15, 'administrativos'),
(103, 102, '2012-09-13', 'ProhibiciÃ³n para contratar ante notario ', 'http://handyq.textblock.org/uploads/administrativos/doc101.pdf', 'Caduca a los -- meses', 14, 'administrativos'),
(104, 103, '2012-09-13', 'Registro_Licitadores-A', 'http://handyq.textblock.org/uploads/administrativos/doc102.pdf', 'Caduca a los -- meses', 16, 'administrativos'),
(105, 104, '2012-09-13', 'Registro_Licitadores-B', 'http://handyq.textblock.org/uploads/administrativos/doc103.pdf', 'Caduca a los -- meses', 16, 'administrativos'),
(110, 1, '2012-09-13', 'gawrt', 'http://www.textblock.org/Ã±lokefÃ±.png', 'ewf', 3, 'ERF'),
(111, 112, '2012-09-13', 'Prueba', 'http://www.prueba.com', 'Prueba', 3, 'prueba');
";
$sql_table_equiposdemedida_data = "
INSERT INTO `equiposdemedida` (`id`, `equipo`, `modelo`, `fechalta`, `frecuencalib`, `criterioaceptacion`, `ubicacion`, `descripcion`) VALUES
(1, 'Equipo 1', 'ManÃ³metro del Leroy', '2011-12-31', 'anual', '2 pascales', 'Taller', '<p>Es bonita</p>'),
(2, 'Equipo 2', 'ManÃ³metro del Leroy', '2011-12-24', 'anual', '2 pascales', 'Taller', '');
";
$sql_table_extintores_data = "
INSERT INTO `extintores` (`id`, `fecha`, `cliente`, `ndeserie`, `fechafabricacion`, `agente`, `ejecucion`, `proxima`, `estado`, `numextintores`) VALUES
(1, '2011-08-12', 'Cliente 1', '1245879', '2010-05-12', 'Polvo ABCDEF', 'Recarga', '2012-05-12', '', 0),
(2, '2011-08-12', 'Cliente 1', '1245879', '2010-05-12', 'Polvo ABCDEF', 'Recarga', '2012-05-12', '', 0);
";
$sql_table_hojasdemejora_data = "
INSERT INTO `hojasdemejora` (`id`, `ai`, `numhoja`, `codhoja`, `descripcion`, `fecha`, `docum`, `abiertopor`, `afectaa`, `causas`, `acciones`, `plazo`, `cierresparc`, `eficacia`, `cerradofecha`, `desviacion`, `visible`) VALUES
(1, 'AI0601', 'AP0601', 'AP06', 'El procedimiento actual no garantiza el mantenimiento..', '2006-03-23', NULL, 'Resp. cal.', 'MÃ©todos', 'La tarea no estaba bien repartida', 'DiseÃ±ar una nueva operativa. ', '2 meses', NULL, 'Taller ordenado en la prÃ³xima auditorÃ­a', '2028-04-06', 0, 1),
(2, 'AI0601', 'ME0601', 'ME06', 'Poner los comprobantes de los mantenimientos realizados como datos en â€¦', '2006-03-23', NULL, 'Resp. cal.', 'MÃ©todos', 'Mayor comodidad y eficacia de la operaciÃ³n', 'Se dejan los mantenimientos periÃ³dicos de cochesâ€¦', '30', NULL, 'Mayor comodidad en la realizacion de auditorias', '2028-04-06', 5, 1),
(3, 'AI0601', 'ME0602', 'ME06', 'Poner las auditorias y los planes como tablas en la base de datos â€¦', '2006-03-23', NULL, 'Resp. cal.', 'MÃ©todos', 'Mayor comodidad y eficacia de la operativa', 'La misma.', '30', NULL, 'Mayor comodidad en la realizacion de auditorias', '2028-04-06', 5, 1),
(4, NULL, 'ME0603', 'ME06', 'Cambiar la operativa de control de mantenimiento â€¦', '2006-03-23', NULL, 'Resp. cal.', 'MÃ©todos', 'Del control de mantenimiento se encargaba una persona que no estÃ¡ ya en la Empresa.', 'Se usarÃ¡ un Ãºnico cuestionario para el mantenimiento general. ', '30', NULL, 'Se elimina papel y se agiliza la realizaciÃ³n', '2012-09-13', 0, 1),
(5, NULL, 'ME0604', 'ME06', 'Facilitar la toma de datos de satisfacciÃ³n de clientes y trabajadores vÃ­a â€¦', '2006-05-04', NULL, 'Resp. cal.', 'MÃ©todos', 'Comodidad. Ahorro de papel. Facilidad en la toma de datos. Ahorro de tiempo', 'Crear cuestionario en htmlâ€¦', '12 meses', NULL, NULL, NULL, 0, 1),
(6, NULL, 'ME0605', 'ME06', 'Impartir los contenidos formativos en PRL y calidad en sesiones formativas â€¦', '2006-05-19', NULL, 'AdministraciÃ³n', 'MÃ©todos', 'Existe la  sospecha fundada de que no leen el papel', 'AdministraciÃ³n editarÃ¡ los listados â€¦', '3 meses para impartir la primera sesiÃ³n', NULL, 'Aumenta la satisfacc del cliente y disminuyen las incidencias por causa interna', NULL, 0, 1),
(7, NULL, 'ME0701', 'ME07', 'Hay muchos partes ilegibles por mala letraâ€¦', '2007-01-25', NULL, 'Resp. cal.', 'ProducciÃ³n', 'Falta de uniformidad en la interpretaciÃ³n de instrucciones sobre cÃ³mo anotar incidencias y los tipos de incidenciasâ€¦(posiblemente).', 'Hacer llegar a los vigilantes instrucciones claras â€¦', '6 meses', NULL, 'Aumento de entradas en la BD.', '2012-09-13', 0, 1),
(8, NULL, 'ME0801', 'ME08', 'Hay que revisar la categorizaciÃ³n de defectos en partes de inspecciÃ³n...\nHay que cambiar los cÃ³digos, ya que no es posible incluir o eliminar uno, sin que haya que modificar todosâ€¦', '2008-06-10', 'CÃ³digos de defectos PT-PI', 'Resp. cal.', 'DocumentaciÃ³n de requisitos', 'El documento lo hizo una sola persona y nunca se ha revisado conjuntamente con  el jefe de seguridad y el inspector de servicios.', 'Revisar el listado de incidencias â€¦', '3 meses', NULL, '--', NULL, 0, 1),
(9, 'AI0601', 'NC0601', 'NC06', 'Falta cumplimentar algunos planes de mantenimiento del aÃ±o 200â€¦', '2006-03-23', NULL, 'Resp. cal.', 'Mantenimiento', 'Ausencia del antiguo responsable de calidad', 'Se realizarÃ¡ una auditorÃ­a periÃ³dica a almacÃ©n y oficinaâ€¦', '30 dias', 'Admo3 hace la limpieza y revisa los planes de mantenimiento.', 'No se encuentra esta no conformidad en la proxima auditoria periodica', '2023-03-06', 0, 1),
(10, 'AI0601', 'NC0602', 'NC06', 'Los procedimientos usados para la auditorÃ­a usan una codificaciÃ³n obsoleta.', '2006-03-23', NULL, 'Resp. cal.', 'Control de documentaciÃ³n', 'La auditoria en transito a los nuevos cambios de la codificaciÃ³n de documentos', 'Poner en el informe de auditoria â€¦', 'Inmediato', 'Admo3', NULL, '2012-09-13', 0, 1),
(11, 'AI0601', 'NC0603', 'NC06', 'No hay una distinciÃ³n clara entre las zonas usadas por una empresa y otraâ€¦', '2006-03-23', 'Cuestionario de mantenimiento', 'Resp. cal.', 'Mantenimiento', 'Deficiencia en el uso y organizaciÃ³n de los  espacios de trabajo', 'Arreglar las deficiencias y comunicar a â€¦', '1 mes', 'Arreglo de deficiencias y comunicaciÃ³n a Sistemax  Admo3', 'No se encuentra esta no conformidad en la proxima auditoria periodica (Septiembre)', '2028-04-06', 0, 1),
(12, 'AI0602', 'NC0604', 'NC06', 'No se pone la fecha en â€¦', '2006-03-29', NULL, 'AdministraciÃ³n', 'Control de proveedor', 'Olvido del centro de formaciÃ³n.', 'Comunicar al centro de formaciÃ³n.', '1 mes', NULL, 'Comprobar en los prÃ³ximos envÃ­os', '2012-09-13', 0, 1),
(13, 'AI0602', 'NC0605', 'NC06', 'No se ha distribuido la especificaciÃ³n â€¦', '2006-03-29', NULL, 'AdministraciÃ³n', 'Control de documentaciÃ³n', 'Olvido del antiguo responsable', 'No se distribuirÃ¡. Se impartirÃ¡ en sesiones formativas', '4 meses', NULL, 'Aumento de calidad del servicio.', '2021-06-06', 0, 1),
(14, 'AI0603', 'NC0606', 'NC06', 'ZZ es subcontratista y no estÃ¡ incluido en el seguimiento del sistema de calidad tal y como se contempla â€¦', '2006-04-18', 'Cuestionario de auditorÃ­a. Iso9001, 4.1', 'Resp. cal.', 'Control de proveedor', 'OmisiÃ³n del anterior responsable', 'Tomar en consideraciÃ³n los cÃ³digos de incidencias ZZ para la estadÃ­stica de calidad del servicio...\n\nSe ha hecho un formato para las inspecciones en ZZ Y la Empresa por el inspector, por separado (antes se usaba un Ãºnico formato). Las hojas se entregan ya directamente a calidad, que anota las incidencias ZZ en la BD de proveedor.', '3 meses para las sesiones formativas. Indefinido para la actualizaciÃ³n de la BD', NULL, 'Aumento de calidad del servicio', '2021-06-06', 0, 1),
(15, 'AI0603', 'NC0607', 'NC06', 'No se ha comunicado a ZZ el resultado de la evaluaciÃ³n', '2006-04-18', 'RecomendaciÃ³n. ISO 9004 7.4.1', 'Resp. cal.', 'Control de proveedor', 'OmisiÃ³n del anterior responsable', 'Comunicar resultados de la evaluaciÃ³n.', '1 mes', NULL, 'Aumento calidad de servicio', '2010-05-06', 0, 1),
(16, 'AI0604', 'NC0608', 'NC06', 'No hay datos de los partes deâ€¦', '2006-05-26', NULL, 'Resp. cal.', 'Registro', 'El cliente estaba en situaciÃ³n de rescisiÃ³n del contrato', 'Desestimar este caso y comunicar al Jefe de servicio para que no vuelva a suceder', NULL, NULL, 'No vuelve a suceder. Comprobar en la prÃ³xima auditorÃ­a', '2026-05-06', 0, 1),
(17, 'AI0604', 'NC0609', 'NC06', 'Hay partes de incidencias sin pasar a la BDâ€¦', '2006-05-26', NULL, 'Resp. cal.', 'Registro', 'EstrÃ©s por reorganizaciÃ³n de las Ã¡reas de calidad y administraciÃ³nâ€¦', 'Actualizar todo 2006â€¦', '6 meses', NULL, 'Comprobar en la prÃ³xima auditorÃ­a', '2012-09-13', 0, 1),
(18, NULL, 'NC0610', 'NC06', 'No se presenta evidencia de la planificaciÃ³n de â€¦', '2006-10-09', '2006/1907/ER/01', 'QNOR', 'PlanificaciÃ³n', 'RediseÃ±o del sistema de calidad. Cambios en el personal responsable de la oficina de calidadâ€¦', 'Determinar con claridad los indicadores de procesosâ€¦', '1 mes', NULL, NULL, '2012-09-13', 0, 1),
(19, NULL, 'NC0611', 'NC06', 'El mÃ©todo utilizado para la obtenciÃ³n y uso de la informaciÃ³n â€¦', '2006-10-09', '2006/1907/ER/0', 'QNOR', 'MediciÃ³n', 'Falta de atenciÃ³n al requisito por parte del consultor.', 'Realizar la consulta telefÃ³nicaâ€¦', 'fecha de la proxima consulta', NULL, NULL, '2012-09-13', 0, 1),
(20, NULL, 'NC0612', 'NC06', 'Se carece de evidencia de la evaluaciÃ³n de las acciones de competencia, toma de conciencia y formaciÃ³nâ€¦', '2006-10-09', '2006/1907/ER/01', 'QNOR', 'FormaciÃ³n', 'Falta de atenciÃ³n al requisito por parte del consultor.', 'â€¦ auditarÃ¡n el conocimiento de especificaciones generales y de servicio.', '1 mes', NULL, NULL, '2012-09-13', 0, 1),
(21, NULL, 'NC0613', 'NC06', 'En algunos casos los mÃ©todos de seguimiento y mediciÃ³n no son apropiadosâ€¦', '2006-10-09', '2006/1907/ER/01', 'QNOR', 'MediciÃ³n', 'Falta de atenciÃ³n al requisito por parte del consultor.', 'Definir una periodicidad adecuada â€¦', '1 mes', NULL, NULL, '2012-09-13', 0, 1),
(22, NULL, 'NC0614', 'NC06', 'Se carece de evidencia de inspecciÃ³n de algunos de los servicios evaluadosâ€¦', '2006-10-09', '2006/1907/ER/01', 'QNOR', 'MediciÃ³n', 'En este caso puntual, era el propio inspector el que hizo el servicio de vigilancia...', 'Comunicar al inspector ...', '1 semana', NULL, 'No vuelve a suceder en prÃ³ximas auditorÃ­as.', '2012-09-13', 0, 1),
(23, NULL, 'NC0615', 'NC06', 'La opiniÃ³n de los trabajadores sobre vestuario y equipamientoâ€¦', '2006-12-16', NULL, 'Resp. cal.', 'SatisfacciÃ³n', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1),
(24, 'AI0608', 'NC0616', 'NC06', 'Existen copias obsoletas â€¦', '2006-12-22', NULL, 'Resp. cal.', 'Control de documentaciÃ³n', 'No se han actualizado los expedienes de los trabajadores â€¦', 'Quitar las polÃ­ticas de calidad obsoletasâ€¦', '3 meses', NULL, NULL, '2012-09-13', 0, 1),
(25, 'AI0608', 'NC0617', 'NC06', 'En los certificados de asistencia â€¦', '2006-12-22', NULL, 'Resp. cal.', 'Proveedor', 'OmisiÃ³n de la fecha completa (solo se hace referencia al dÃ­a)', 'Comunicar a AULAFORMATIVAâ€¦', '2 meses', NULL, NULL, NULL, 0, 1),
(26, 'AI0608', 'NC0618', 'NC06', 'Faltan certificados de asistencia a los cursos  de la academia AULAFORMATIVA, impartido a la trabajadora...', '2006-12-22', NULL, 'Resp. cal.', 'FormaciÃ³n', 'PÃ©rdida u omisiÃ³n por parte del proveedor', 'Solicitar certificados a AULAFORMATIVA...\nEn Marzo 2007 se han vuelto a solicitar estos diplomas.\n\nSe cierra la no conformidad al haberse dado de baja esta trabajadora.', '3 meses', NULL, NULL, '2012-09-13', 0, 1),
(27, 'AI0608', 'NC0619', 'NC06', 'La base de datos de cursos posee datos de..', '2006-12-22', NULL, 'Resp. cal.', 'Archivo', 'Defectos en las asignaciones de tareas. ', 'Actualizar la base de datos de cursos.\nAnotado el 15/03/2007: EstÃ¡ habiendo muchos cambios de personal en AdministraciÃ³n. Todas las bases de datos serÃ¡n gestionadas desde el Dep. de calidad.\nActualizados los vigilantes activos el 24/04/2007.', '2 meses', NULL, NULL, '2012-09-13', 0, 1),
(28, 'AI0609', 'NC0701', 'NC07', 'Los partes de inspeciÃ³n y de trabajo estÃ¡n desorganizadosâ€¦', '2007-02-05', NULL, 'Resp. cal.', 'Archivo', 'Defectos en las asignaciones de tareas.', 'Actualizar las bases de datos â€¦', '2 meses', NULL, NULL, '2012-09-13', 0, 1),
(29, 'AI0701', 'NC0702', 'NC07', 'No funciona la copia de seguridadâ€¦', '2007-02-23', 'cuestionario', 'Resp. cal.', 'Mantenimiento', NULL, 'Mejorar el almacenamiento de centralesâ€¦', NULL, NULL, NULL, '2012-09-13', 0, 1),
(30, 'AI0702', 'NC0703', 'NC07', 'Faltan en la BD: â€¦', '2007-04-23', 'Cuestionario', 'Resp. cal.', 'Registro', 'Fallo de comunicaciÃ³n entre Jefe de servicio y calidad.', 'Actualizar BDâ€¦', '15 dÃ­as', '26/04/2007: pendiente de eficacia.', 'No vuelve a salir en la prÃ³xima auditorÃ­a.', '2012-09-13', 0, 1),
(31, 'AI0702', 'NC0704', 'NC07', 'Se ha perdido la hoja comprobanteâ€¦\nRelacionado con la NC1206-ME0506.', '2007-04-23', NULL, 'Resp. cal.', 'Archivo', 'Se marchÃ³ la antigua responsable de AdministraciÃ³n, a quien se le diÃ³ la responsabilidad de archivarlo.', 'Emitir un certificado de asistencia â€¦', NULL, NULL, 'No vuelve a salir en la prÃ³xima auditorÃ­a: 04/2008', '2012-09-13', 0, 1),
(32, 'AI0704', 'NC0705', 'NC07', 'En la prÃ¡ctica, la aprobaciÃ³n de documentos la haceâ€¦', '2007-05-29', NULL, 'Resp. cal.', 'Control de documentaciÃ³n', 'El Gerente no tiene tiempo para esto.', 'Modificar el manual de calidad en los apartados a los que afecte.', '3 meses', NULL, '--', '2012-09-13', 0, 1),
(34, 'AI0706', 'NC0707', 'NC07', 'Los partes de trabajo no poseen un sistema claro de archivoâ€¦', '2007-07-05', NULL, 'Resp. cal.', 'Archivo', 'Los partes de trabajo no se archivan bien porque no hay un Ãºnico mÃ©todo establecido y ha habido muchos cambios de personal en el puesto de administraciÃ³n.\n\nLos defectos de anotaciÃ³n de fechas de incidencias en la BD puede ser debido a que, a veces, el programa access hace lo que quiere y cambia las fechas...', 'Repasar la tabla de incidencias â€¦', '6 meses', NULL, 'No hay estas incidencias en la prÃ³xima auditorÃ­a', '2012-09-13', 0, 1),
(35, 'AI0707', 'NC0708', 'NC07', '2 fluorescentes rotos. Extintores obstaculizados. Embalajes sin tirarâ€¦', '2007-07-18', 'Cuestionario', 'Resp. cal.', 'Mantenimiento', 'Falta de concienciaciÃ³n del personal', 'Calidad emitirÃ¡ un aviso â€¦', 'Hasta la prÃ³xima auditorÃ­a', NULL, 'No vuelve a salir en la prÃ³xima auditorÃ­a.', '2012-09-13', 0, 1),
(36, 'QNOR08', 'NC0709', 'NC07', '<p>No se han determinado las actividades de verificaci&oacute;n&hellip;</p>', '2007-10-24', '2006/1907/ER/01-Inf. 02', 'JosÃ© MartÃ­nez HervÃ¡s', 'MediciÃ³n', '<p>Para los servicios de duraci&oacute;n inferior a un mes se consider&oacute; suficiente...</p>', '<p>Se establece que para estos servicios,... De acuerdo a la comunicaci&oacute;n QNOR de 03/12/07 Ref. E-01464 se modifica la acci&oacute;n correctora: NC 01.- Se definen en el Manual de calidad 7.5.2 las inspecciones de todos los servicios (inclusive de menos de una semana). Se establece criterio de aleatoriedad en servicios de duraci&oacute;n inferior a una semana en el 100%. Modificar el formato de inspecci&oacute;n de acuerdo con el Inspector, de modo que queden reflejadas las caracter&iacute;sticas m&iacute;nimas que se inspeccionan en cada servicio.</p>', '30 dÃ­as', '', '<p>Si no sale en la pr&oacute;xima auditor&iacute;a QNOR</p>', '2012-01-10', 0, 1),
(37, 'QNOR08', 'NC0710', 'NC07', 'No se presenta evidencia de la revisiÃ³nâ€¦', '2007-10-24', '2006/1907/ER/01-Inf. 02', 'JosÃ© MartÃ­nez HervÃ¡s', 'ProducciÃ³n', 'Se prorrogÃ³ el contrato anterior sin comunicarâ€¦', 'Informar a la direcciÃ³n sobre la necesidad de registrar â€¦', '30 dÃ­as', 'Se manda carta de aceptaciÃ³n de acuerdos telefÃ³nicos sobre los cambios de horario, el 30/10/2007. Se comunica esta NC a la gerencia.', NULL, '2012-09-13', 0, 1),
(38, 'QNOR08', 'NC0711', 'NC07', 'No se registran las rondas...', '2007-10-24', '2006/1907/ER/01-Inf. 02', 'JosÃ© MartÃ­nez HervÃ¡s', 'MediciÃ³n', 'El inspector estuvo de vacaciones â€¦', 'Los servicios de inspecciÃ³n que no haga el inspector los harÃ¡ â€¦', '30 dÃ­as', NULL, 'Si no sale en la prÃ³xima auditorÃ­a QNOR', '2012-09-13', 0, 1),
(39, 'QNOR08', 'NC0712', 'NC07', 'El servicio de vigilancia fue realizado por personal sin la cualificaciÃ³n requerida.', '2007-10-24', '2006/1907/ER/01-Inf. 02', 'JosÃ© MartÃ­nez HervÃ¡s', 'ProducciÃ³n', 'La mÃ¡xima de atender por encima de todo al cliente  llevÃ³ a cubrir de este modo el servicio, â€¦', 'En los casos en los que esto pudiese ocurrir de nuevo,â€¦', '30 dÃ­as', NULL, 'Si no vuelve a salir en la prÃ³xima auditorÃ­a de QNOR', '2012-09-13', 0, 1),
(40, 'QNOR08', 'NC0713', 'NC07', 'El anÃ¡lisis de datos del informe de revisiÃ³n por la direcciÃ³nâ€¦', '2007-10-24', '2006/1907/ER/01-Inf. 02', 'JosÃ© MartÃ­nez HervÃ¡s', 'MediciÃ³n', 'Los resultados de las mediciones se comentaban siempre de viva voz â€¦', 'Corregir el informe de revisiÃ³n por la direcciÃ³nâ€¦', '30 dÃ­as', NULL, 'Si no sale en la prÃ³xima auditorÃ­a QNOR', '2012-09-13', 0, 1),
(41, 'AI0708', 'NC0714', 'NC07', 'Uno de los extintores estÃ¡ obstaculizado por cajas. Los fluorescentes siguen rotos desde la Ãºltima auditorÃ­a.', '2007-12-19', 'AI0708', 'Resp. cal.', 'Mantenimiento', 'Falta de tiempo', 'Comunicar esta NC y arreglar las incidencias', '1 mes', NULL, '--', '2012-09-13', 0, 1),
(42, '---', 'NC0801', 'NC08', 'Bartolo, dormido en â€¦', '2008-02-15', 'Hoja de inspecciÃ³n 15/02/2008', 'Fco de Paula', 'ProducciÃ³n', NULL, 'Citar en las oficinas de la Empresa, y entregar carta de sanciÃ³n.', '1 semana', NULL, 'Si no vuelve a suceder (hecer seguimiento en al menos u  mes)', '2012-09-13', 0, 1),
(43, 'AI0801', 'NC0802', 'NC08', 'NO ESTÃ�N ACTUALIZADOSâ€¦', '2008-03-10', 'AI0801', 'Resp. cal.', 'Registro', 'Calidad ha estado dos meses casi en exclusiva con realizaciÃ³n â€¦', 'actualizar los datos de formaciÃ³n y de vigilantes activos. Solicitar a AULAFORMATIVA los certificados que faltan â€¦', '4 meses', 'Actualizado el listado de Vigilantes activos:01/04/2008. \nSe prepara y distribuye el curso 2008 sobre servicio de vigilancia y situaciones de emergencia el 06/06/2008; se anota el curso en la BD a la espera de recibir las pruebas de test.', '--', '2012-09-13', 6, 1),
(44, 'AI0803', 'NC0803', 'NC08', 'FALTAN LOS REGISTROS DE INSPECCIÃ“N â€¦', '2008-04-30', 'AI0803', 'Resp. cal.', 'Registro', 'LA HOJA DE INSPECCIÃ“N LA TIENE EL INSPECTOR Y, A VECES,  SE LE OLVIDAâ€¦', 'MANTENER EL CONTROL DE INSPECCIONES ...UNA INSPECCIÃ“N SEMANAL MÃ�NIMO.', '15 dÃ­as', NULL, 'Comprobar antes de cerrar que el mÃ©todo es bueno', '2012-09-13', 0, 1),
(45, 'AI0804', 'NC0804', 'NC08', 'Faltan las normas de servicio â€¦', '2008-05-23', 'AI0804', 'Resp. cal.', 'DocumentaciÃ³n de requisitos', 'No se habÃ­an editado nunca', 'Solicitar al Jefe de servicio que edite las normas â€¦', '2 meses', 'Falta CINEQUINTO. Resto actualizado a 09/06/2008.', '--', '2012-09-13', 0, 1),
(46, 'AI0804', 'NC0805', 'NC08', 'Las normas de servicio no estÃ¡n editadas de acuerdo al formato establecido â€¦', '2008-05-23', 'AI0804', 'Resp. cal.', 'Control de documentaciÃ³n', 'No ha habido tiempo.', 'Insertar los textos de las normas en las plantillas ...', '2 meses', 'Falta CINEQUINTO. Resto actualizado a 09/06/2008', '--', '2012-09-13', 0, 1),
(47, 'AI0804', 'NC0806', 'NC08', 'Se estÃ¡n usando indistintamente dos tipos diferentes de codificaciÃ³nâ€¦', '2008-05-23', 'AI0804', 'Resp. cal.', 'Control de documentaciÃ³n', 'Se hizo una prueba de cambio de codificaciÃ³n y se quedÃ³ a medias.', 'Unificar todos los nÃºmeros de revisiÃ³n a la forma antigua,â€¦', '1 mes', NULL, '--', '2012-09-13', 0, 1),
(48, 'AI0804', 'NC0807', 'NC08', 'No se estÃ¡n registrando las fechas de copias de seguridad.', '2008-05-23', 'AI0804', 'Resp. cal.', 'MÃ©todos', 'Se perdiÃ³ la operativa de cumplimentar â€¦', 'Implantar de nuevo el mÃ©todo.', '1 mes', NULL, '--', '2012-09-13', 0, 1),
(49, 'AI0805', 'NC0808', 'NC08', 'El vehÃ­culo ... no tiene la ITVâ€¦', '2008-06-06', 'Cuestionario', 'Resp. cal.', 'Mantenimiento', 'Apilamiento de materiales por trasiego.\nNunca se llevÃ³ el control de ITV de los coches.', 'Colocar el extintor y quitar obstÃ¡culos. Advertir verbalmente al personal que no debeâ€¦', '15 dÃ­as', NULL, '--', '2012-09-13', 0, 1),
(50, 'AI0806', 'NC0809', 'NC08', 'Faltan anotaciones de inspecciÃ³n â€¦', '2008-06-30', 'Cuestionario', 'Resp. cal.', 'ProducciÃ³n', 'Olvido', 'El Jefe de Servicio y el Inspector deberÃ¡n anotar â€¦.', '1 mes', NULL, NULL, '2012-09-13', 0, 1),
(51, NULL, 'NC0810', 'NC08', 'No se estÃ¡n haciendo partes de trabajo â€¦', '2008-07-09', NULL, 'Resp. cal.', 'ProducciÃ³n', 'El servicio lo cubre el Inspector.', 'Se descarta la NC debido a que el cliente â€¦', '1 mes', '--', '--', '2012-09-13', 0, 1),
(52, 'AI0807', 'NC0811', 'NC08', 'No se ha distribuido ...actualizado el nÂº de revisiÃ³n.', '2008-07-16', 'Cuestionario', 'Enrique Pagador', 'Control de documentaciÃ³n', 'Intermitencia entre las tareas de calidad y la presentaciÃ³n de ofertas.', 'Actualizar todo y distribuir.', '1 mes', '--', '--', '2012-09-13', 0, 1),
(53, NULL, 'NC0812', 'NC08', 'Faltan las hojas de inspecciÃ³n del â€¦', '2008-10-17', 'Parte de inspecciÃ³n', 'Resp. cal.', 'Registro', 'Se han perdidoâ€¦', 'Dejar como estÃ¡. No se han reportado incidencias â€¦.', NULL, NULL, NULL, '2012-09-13', 0, 1),
(54, 'AI0901', 'NC0901', 'NC09', 'Hay dos planes â€¦', '2009-03-20', '--', 'Resp. cal.', 'Control de documentaciÃ³n', 'No se controla la hojaâ€¦', 'Poner una fecha de revisiÃ³n en la hojaâ€¦.', '7', NULL, 'Si solo existe un plan aprobado', '2012-09-13', 0, 1),
(55, 'AI0901', 'NC0902', 'NC09', 'No se han retirado las normas de servicio â€¦', '2009-03-20', 'Cuestionario', 'Resp. cal.', 'Control de documentaciÃ³n', 'Como no se usan mÃ¡s, no se han quitado.', 'Quitar del grupo de normas de la Fotocipoadora. Poner la observaciÃ³n de dada de baja en el listadoâ€¦', '10', NULL, '--', '2012-09-13', 0, 1),
(56, 'AI0901', 'NC0903', 'NC09', 'No se ha impreso copia del manual â€¦', '2009-03-20', 'Cuestionario', 'Resp. cal.', 'Control de documentaciÃ³n', 'Se distribuyÃ³ en CD pero se olvidÃ³ â€¦', 'Revisar el manual por si hay modificaciones que realizar, â€¦', '60 dÃ­as', '03/04/2008: se han revisado los nuevos requisitos ISO 9001/2008 y se ha considerado que no implican cambios en la documentaciÃ³n del sistema de calidad.', NULL, '2012-09-13', 0, 1),
(57, 'AI0901', 'NC0904', 'NC09', 'Falta incluir el formato de auditorÃ­a â€¦', '2009-03-20', 'Cuestionario', 'Resp. cal.', 'Control de documentaciÃ³n', 'Olvido, fallo en el diseÃ±o de campos del formulario lista de documentos.', 'Incluir el documento que falta, aprovechar un campo duplicado â€¦', '15', NULL, NULL, '2012-09-13', 0, 1),
(58, 'AI0902', 'NC0905', 'NC09', 'Falta actualizar los vigilantes activos â€¦', '2009-04-15', 'Cuestionario', 'Resp. cal.', 'MÃ©todos', 'Me los pasa xx, y no estÃ¡ nuncaâ€¦', 'Pasar la responsabilidad de la informaciÃ³n a AdministraciÃ³nâ€¦', '15', '--', NULL, '2012-09-13', 0, 1),
(59, 'AI0902', 'NC0906', 'NC09', 'Falta solicitar a AULAFORMATIVA â€¦', '2009-04-15', 'Cuestionario', 'Resp. cal.', 'FormaciÃ³n', 'Se olvidÃ³', 'No hace falta ninguna, siempre nos acordamos al hacer la auditorÃ­a.', '60', 'Mari Pili estÃ¡ liada con la contabilidad. Lo mandarÃ¡ a primeros de Julio.', '--', '2012-09-13', 0, 1),
(60, 'AI0903', 'NC0907', 'NC09', 'Falta determinar el nÃºmero de inspeccionesâ€¦', '2009-05-25', 'Cuestionario', 'Resp. cal.', 'DocumentaciÃ³n de requisitos', 'No se habÃ­a detectado esta deficiencia de especificaciÃ³n.\n\nNo se listÃ³ la NS porque se perdiÃ³ el archivoâ€¦', 'Modificar la especificaciÃ³n del servicio, â€¦', '15', NULL, '--', '2012-09-13', 0, 1),
(61, 'AI0904', 'NC0908', 'NC09', 'No se ha repartido la nueva especificaciÃ³n â€¦', '2009-06-15', 'Cuestionario', 'Resp. cal.', 'Control de documentaciÃ³n', 'Se olvidÃ³.', 'Retirar las antiguas y distribuir las nuevas.', '30', NULL, NULL, '2012-09-13', 0, 1),
(62, 'AI0904', 'NC0909', 'NC09', 'Algunos de los hipervÃ­nculos de documentaciÃ³n â€¦', '2009-06-15', '--', 'Resp. cal.', 'Control de documentaciÃ³n', 'Se ha modificado el sitio web.', 'Actualizar los sitios Web, y bajarse â€¦', '30', NULL, 'Auditar esto en AI0905', '2012-09-13', 0, 1),
(63, 'AI0904', 'NC0910', 'NC09', 'No se le dio de alta de nuevo en la BD de vigilantes activosâ€¦', '2009-06-15', 'Cuestionario', 'Resp. cal.', 'Control de datos', 'No se actualizÃ³ el listado hasta que no se tuvo que poner la nota del test deâ€¦', 'Actualizar al menos cada tres meses.', '7', NULL, NULL, '2012-09-13', 0, 1),
(64, 'AI0905', 'NC0911', 'NC09', 'No se ha repartido la Ãºltima revisiÃ³n â€¦', '2009-07-30', 'Cuestionario', 'Resp. cal.', 'Control de documentaciÃ³ln', 'Exceso de trabajo.', 'Pasar la Ãºltima revisiÃ³n a la web y mandar correo informativo.', '30', NULL, NULL, '2012-09-13', 0, 1),
(65, 'AI0905', 'NC0912', 'NC09', 'El vehÃ­culo no tiene botiquÃ­nâ€¦', '2009-07-30', 'Cuestionario', 'Resp. cal.', 'PRL', 'Se quitÃ³ para reponer, y no se restituyÃ³', 'Reponer', '15', NULL, '--', NULL, 0, 1),
(66, 'AI0905', 'NC0913', 'NC09', 'Al servidor le falta..., lo que provoca problemas de arranque .', '2009-07-30', 'Cuestionario', 'Resp. cal.', 'Mantenimiento', 'Desidia', 'Poner la pila', '60', NULL, NULL, NULL, 0, 1),
(67, 'QNOR09', 'NC0914', 'NC09', 'Se detectan algunas Normas â€¦', '2009-09-09', 'Control de documentos', 'JosÃ© MartÃ­nez HervÃ¡s', 'Control de documentaciÃ³n', 'El Jefe de Seguridad no comunicÃ³ con calidad â€¦', 'Comunicar al Jefe de servicio la necesidad de mantener controladasâ€¦', '30', NULL, 'Si no se repite en la prÃ³xima auditorÃ­a a documentaciÃ³n', '2012-09-13', 0, 1),
(68, 'QNOR09', 'NC0915', 'NC09', '<p>No se presenta evidencia&hellip;</p>', '2009-09-09', 'Manual', 'JosÃ© MartÃ­nez', 'RevisiÃ³n de contratos', '<p>Los horarios pactados con el cliente suelen ser siempre distintos a los que legalmente es necesario establecer en el contrato, por requisitos asociados con la Direcci&oacute;n General de Polic&iacute;a.</p>', '<p>Revisar todas las normas de servicio para incluir las modificaciones horarias acordadas con los clientes. Advertir al Jefe de Servicio y al Gerente la necesidad de comunicar dichos cambios cada vez que se produzcan, con objeto de que queden debidamente registrados. Enviar a QNOR las normas de servicio citadas, incluyendo las modificaciones horarias que realmente les aplican.</p>', '15', '', '<p>Si no se repite en la pr&oacute;xima auditor&iacute;a a contrataci&oacute;n</p>', '2012-09-13', 0, 1),
(69, 'QNOR09', 'NC0916', 'NC09', '<p>En relaci&oacute;n al seguimiento y medici&oacute;n del producto/servicio, y en contra de lo establecido en el Manual de Calidad&hellip;</p>', '2012-09-12', 'Manual', 'JosÃ© MartÃ­nez', 'Registro', '<p>El hecho de no haberlas encontrado durante la auditor&iacute;a...</p>', '<p>Comunicar a la Responsable de Administraci&oacute;n &hellip;</p>', '15', '', '<p>Comprobar mensualmente que no faltan los registros de inspecci&oacute;n m&iacute;nimos establecidos. Se da por eficaz si no se repite en seis meses.</p>', '2012-09-13', 0, 1),
(79, 'AI1001', 'NC1002', '10', 'Algunas fechas de revisiÃ³n â€¦', '2010-03-10', 'Cuestionario', 'JJuan', 'Calidad', 'Se cambia el documento y no se anota.', 'Revisar al menos tres veces al aÃ±o el estado de revisiÃ³nâ€¦', '7', 'Revisado el 12/03/2010<BR>Revisado el 20/07/2010<BR>Revisado el 30/11/2010', NULL, '2010-03-12', 0, 1),
(78, 'AI1001', 'NC1001', '10', 'No queda evidencia de haber comunicado â€¦', '2010-03-10', 'Cuestionario', 'JJuan', 'Calidad', 'Se dice verbalmente. Todos conocen la web.', 'Mandar aviso. Mandar cada vez que haya una modificaciÃ³nâ€¦ ', '7', NULL, 'Comprobar que se reciben los correos', '2010-03-11', 0, 0),
(80, 'AI1100', 'NC1101', '11', '<p>Ta roto</p>', '2012-10-11', 'docs', 'Trabajador12', 'ProducciÃ³n', '<p>Ha sido ese</p>', '<p>p&eacute;gale</p>', '', '<p>cierra</p>', '<p>eso</p>', '2012-10-11', 0, 1);
";
$sql_table_horasformacionportrabajador_data = "
INSERT INTO `horasformacionportrabajador` (`trabajador`, `totalhoras`) VALUES
('Trabajador1', 291),
('Trabajador10', 44),
('Trabajador11', 4),
('Trabajador12', 244),
('Trabajador13', 8),
('Trabajador14', 8),
('Trabajador19', 30),
('Trabajador2', 34),
('Trabajador3', 2),
('Trabajador4', 98),
('Trabajador5', 186),
('Trabajador6', 10),
('Trabajador7', 8),
('Trabajador8', 8),
('Trabajador9', 8);
";$sql_table_incidenciasdeproveedor_data = "
INSERT INTO `incidenciasdeproveedor` (`id`, `proveedor`, `incidencia`, `codigoincidencia`, `afectaa`, `fecha`) VALUES
(1, 'Proveedor-1', 'Incidencia de proveedor-1', 'codprov1', 'Ã�rea-1', '2011-05-22'),
(2, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0002', 'Ã�rea-2', '2008-02-02'),
(3, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0003', 'Ã�rea-3', '2008-02-03'),
(4, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0004', 'Ã�rea-4', '2008-02-04'),
(5, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0005', 'Ã�rea-5', '2008-02-05'),
(6, 'Proveedor-6', 'Incidencia de proveedor-6', 'IP0002', 'Ã�rea-1', '2008-02-06'),
(7, 'Proveedor-7', 'Incidencia de proveedor-7', 'IP0003', 'Ã�rea-2', '2008-02-07'),
(8, 'Proveedor-8', 'Incidencia de proveedor-8', 'IP0004', 'Ã�rea-3', '2008-02-08'),
(9, 'Proveedor-9', 'Incidencia de proveedor-9', 'IP0005', 'Ã�rea-4', '2008-02-09'),
(10, 'Proveedor-10', 'Incidencia de proveedor-10', 'IP0001', 'Ã�rea-5', '2008-02-10'),
(11, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0002', 'Ã�rea-1', '2008-05-06'),
(12, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0003', 'Ã�rea-2', '2008-05-07'),
(13, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0004', 'Ã�rea-3', '2008-05-08'),
(14, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0001', 'Ã�rea-4', '2008-05-09'),
(15, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0002', 'Ã�rea-5', '2008-05-10'),
(16, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0003', 'Ã�rea-3', '2008-05-11'),
(17, 'Proveedor-17', 'Incidencia de proveedor-17', 'IP0004', 'Ã�rea-4', '2009-06-05'),
(18, 'Proveedor-18', 'Incidencia de proveedor-18', 'IP0005', 'Ã�rea-5', '2009-06-06'),
(19, 'Proveedor-19', 'Incidencia de proveedor-19', 'IP0006', 'Ã�rea-1', '2009-06-07'),
(20, 'Proveedor-20', 'Incidencia de proveedor-20', 'IP0007', 'Ã�rea-1', '2009-06-08'),
(21, 'Proveedor-21', 'Incidencia de proveedor-21', 'IP0008', 'Ã�rea-2', '2009-06-09'),
(22, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0003', 'Ã�rea-3', '2009-06-10'),
(23, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0004', 'Ã�rea-4', '2009-06-11'),
(24, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0005', 'Ã�rea-5', '2006-08-09'),
(25, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0006', 'Ã�rea-6', '2006-08-10'),
(26, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0007', 'Ã�rea-7', '2006-08-11'),
(27, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0008', 'Ã�rea-8', '2006-08-12'),
(28, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0009', 'Ã�rea-3', '2006-08-13'),
(29, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0010', 'Ã�rea-4', '2006-08-14'),
(30, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0011', 'Ã�rea-5', '2006-08-15'),
(31, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0012', 'Ã�rea-1', '2006-08-16'),
(32, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0013', 'Ã�rea-2', '2006-08-17'),
(33, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0001', 'Ã�rea-3', '2006-08-18'),
(34, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0002', 'Ã�rea-4', '2006-08-19'),
(35, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0003', 'Ã�rea-2', '2009-01-01'),
(36, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0004', 'Ã�rea-3', '2009-01-02'),
(37, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0005', 'Ã�rea-4', '2009-01-03'),
(38, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0006', 'Ã�rea-5', '2009-01-04'),
(39, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0007', 'Ã�rea-1', '2009-01-05'),
(40, 'Proveedor-6', 'Incidencia de proveedor-6', 'IP0002', 'Ã�rea-1', '2009-01-06'),
(41, 'Proveedor-7', 'Incidencia de proveedor-7', 'IP0003', 'Ã�rea-2', '2009-01-07'),
(42, 'Proveedor-8', 'Incidencia de proveedor-8', 'IP0004', 'Ã�rea-3', '2009-01-08'),
(43, 'Proveedor-9', 'Incidencia de proveedor-9', 'IP0005', 'Ã�rea-4', '2009-01-09'),
(44, 'Proveedor-10', 'Incidencia de proveedor-10', 'IP0001', 'Ã�rea-5', '2009-01-10'),
(45, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0002', 'Ã�rea-1', '2009-01-11'),
(46, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0003', 'Ã�rea-2', '2009-01-12'),
(47, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0004', 'Ã�rea-3', '2009-06-06'),
(48, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0001', 'Ã�rea-4', '2009-06-07'),
(49, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0002', 'Ã�rea-5', '2009-06-08'),
(50, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0003', 'Ã�rea-3', '2009-06-09'),
(51, 'Proveedor-17', 'Incidencia de proveedor-17', 'IP0004', 'Ã�rea-4', '2009-06-10'),
(52, 'Proveedor-18', 'Incidencia de proveedor-18', 'IP0005', 'Ã�rea-5', '2009-06-11'),
(53, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0001', 'Ã�rea-1', '2009-06-12'),
(54, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0002', 'Ã�rea-2', '2009-06-13'),
(55, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0003', 'Ã�rea-3', '2009-06-14'),
(56, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0004', 'Ã�rea-4', '2009-06-15'),
(57, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0005', 'Ã�rea-5', '2009-06-16'),
(58, 'Proveedor-6', 'Incidencia de proveedor-6', 'IP0002', 'Ã�rea-1', '2009-06-17'),
(59, 'Proveedor-7', 'Incidencia de proveedor-7', 'IP0003', 'Ã�rea-2', '2009-06-18'),
(60, 'Proveedor-8', 'Incidencia de proveedor-8', 'IP0004', 'Ã�rea-3', '2009-06-19'),
(61, 'Proveedor-9', 'Incidencia de proveedor-9', 'IP0005', 'Ã�rea-4', '2009-06-20'),
(62, 'Proveedor-10', 'Incidencia de proveedor-10', 'IP0001', 'Ã�rea-5', '2009-06-21'),
(63, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0002', 'Ã�rea-1', '2009-06-22'),
(64, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0003', 'Ã�rea-2', '2009-06-23'),
(65, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0004', 'Ã�rea-3', '2009-06-24'),
(66, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0001', 'Ã�rea-4', '2010-02-15'),
(67, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0002', 'Ã�rea-5', '2010-02-16'),
(68, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0003', 'Ã�rea-3', '2010-02-17'),
(69, 'Proveedor-17', 'Incidencia de proveedor-17', 'IP0004', 'Ã�rea-4', '2010-02-18'),
(70, 'Proveedor-18', 'Incidencia de proveedor-18', 'IP0005', 'Ã�rea-5', '2010-02-19'),
(71, 'Proveedor-19', 'Incidencia de proveedor-19', 'IP0006', 'Ã�rea-1', '2010-02-20'),
(72, 'Proveedor-20', 'Incidencia de proveedor-20', 'IP0007', 'Ã�rea-1', '2010-02-21'),
(73, 'Proveedor-21', 'Incidencia de proveedor-21', 'IP0008', 'Ã�rea-2', '2010-02-22'),
(74, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0003', 'Ã�rea-3', '2010-02-23'),
(75, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0004', 'Ã�rea-4', '2010-02-24'),
(76, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0005', 'Ã�rea-5', '2010-02-25'),
(77, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0006', 'Ã�rea-6', '2010-03-08'),
(78, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0007', 'Ã�rea-7', '2010-03-09'),
(79, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0008', 'Ã�rea-8', '2010-03-10'),
(80, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0009', 'Ã�rea-3', '2010-03-11'),
(81, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0010', 'Ã�rea-4', '2010-03-12'),
(82, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0011', 'Ã�rea-5', '2010-03-13'),
(83, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0012', 'Ã�rea-1', '2010-03-14'),
(84, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0001', 'Ã�rea-1', '2010-03-15'),
(85, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0002', 'Ã�rea-2', '2010-03-16'),
(86, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0003', 'Ã�rea-3', '2010-03-17'),
(87, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0004', 'Ã�rea-4', '2010-03-18'),
(88, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0005', 'Ã�rea-5', '2010-03-19'),
(89, 'Proveedor-6', 'Incidencia de proveedor-6', 'IP0002', 'Ã�rea-1', '2010-03-20'),
(90, 'Proveedor-7', 'Incidencia de proveedor-7', 'IP0003', 'Ã�rea-2', '2010-03-21'),
(91, 'Proveedor-8', 'Incidencia de proveedor-8', 'IP0004', 'Ã�rea-3', '2010-03-22'),
(92, 'Proveedor-9', 'Incidencia de proveedor-9', 'IP0005', 'Ã�rea-4', '2010-04-07'),
(93, 'Proveedor-10', 'Incidencia de proveedor-10', 'IP0001', 'Ã�rea-5', '2010-04-08'),
(94, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0002', 'Ã�rea-1', '2010-04-09'),
(95, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0003', 'Ã�rea-2', '2010-04-10'),
(96, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0004', 'Ã�rea-3', '2010-04-11'),
(97, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0001', 'Ã�rea-4', '2010-04-12'),
(98, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0002', 'Ã�rea-5', '2010-04-13'),
(99, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0003', 'Ã�rea-3', '2010-04-14'),
(100, 'Proveedor-17', 'Incidencia de proveedor-17', 'IP0004', 'Ã�rea-4', '2010-04-15'),
(101, 'Proveedor-18', 'Incidencia de proveedor-18', 'IP0005', 'Ã�rea-5', '2010-04-16'),
(102, 'Proveedor-19', 'Incidencia de proveedor-19', 'IP0006', 'Ã�rea-1', '2010-04-17'),
(103, 'Proveedor-20', 'Incidencia de proveedor-20', 'IP0007', 'Ã�rea-1', '2010-04-18'),
(104, 'Proveedor-21', 'Incidencia de proveedor-21', 'IP0008', 'Ã�rea-2', '2010-04-19'),
(105, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0003', 'Ã�rea-3', '2010-04-20'),
(106, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0004', 'Ã�rea-4', '2010-07-03'),
(107, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0005', 'Ã�rea-5', '2010-07-04'),
(108, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0006', 'Ã�rea-6', '2010-07-05'),
(109, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0007', 'Ã�rea-7', '2010-07-06'),
(110, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0008', 'Ã�rea-8', '2010-07-07'),
(111, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0009', 'Ã�rea-3', '2010-07-08'),
(112, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0010', 'Ã�rea-4', '2010-07-09'),
(113, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0011', 'Ã�rea-5', '2010-07-10'),
(114, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0012', 'Ã�rea-1', '2010-07-11'),
(115, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0013', 'Ã�rea-2', '2010-07-12'),
(116, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0001', 'Ã�rea-3', '2010-07-13'),
(117, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0002', 'Ã�rea-4', '2010-07-14'),
(118, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0003', 'Ã�rea-2', '2010-07-15'),
(119, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0004', 'Ã�rea-3', '2010-07-16'),
(120, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0005', 'Ã�rea-4', '2010-07-17'),
(121, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0006', 'Ã�rea-5', '2010-07-18'),
(122, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0007', 'Ã�rea-1', '2010-07-19'),
(123, 'Proveedor-6', 'Incidencia de proveedor-6', 'IP0002', 'Ã�rea-1', '2000-03-03'),
(124, 'Proveedor-7', 'Incidencia de proveedor-7', 'IP0003', 'Ã�rea-2', '2000-03-04'),
(125, 'Proveedor-8', 'Incidencia de proveedor-8', 'IP0004', 'Ã�rea-3', '2000-03-05'),
(126, 'Proveedor-9', 'Incidencia de proveedor-9', 'IP0005', 'Ã�rea-4', '2000-03-06'),
(127, 'Proveedor-10', 'Incidencia de proveedor-10', 'IP0001', 'Ã�rea-5', '2000-03-07'),
(128, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0002', 'Ã�rea-1', '2000-03-08'),
(129, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0003', 'Ã�rea-2', '2000-03-09'),
(130, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0004', 'Ã�rea-3', '2000-03-10'),
(131, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0001', 'Ã�rea-4', '2000-03-11'),
(132, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0002', 'Ã�rea-5', '2000-03-12'),
(133, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0003', 'Ã�rea-3', '2000-03-13'),
(134, 'Proveedor-17', 'Incidencia de proveedor-17', 'IP0004', 'Ã�rea-4', '2000-03-14'),
(135, 'Proveedor-18', 'Incidencia de proveedor-18', 'IP0005', 'Ã�rea-5', '2000-03-15'),
(136, 'Proveedor-1', 'Incidencia de proveedor-1', 'IP0001', 'Ã�rea-1', '2000-03-16'),
(137, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0002', 'Ã�rea-2', '2000-03-17'),
(138, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0003', 'Ã�rea-3', '2011-05-24'),
(139, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0004', 'Ã�rea-4', '2011-05-25'),
(140, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0005', 'Ã�rea-5', '2011-05-26'),
(141, 'Proveedor-6', 'Incidencia de proveedor-6', 'IP0002', 'Ã�rea-1', '2011-05-27'),
(142, 'Proveedor-7', 'Incidencia de proveedor-7', 'IP0003', 'Ã�rea-2', '2011-05-28'),
(143, 'Proveedor-8', 'Incidencia de proveedor-8', 'IP0004', 'Ã�rea-3', '2011-05-29'),
(144, 'Proveedor-9', 'Incidencia de proveedor-9', 'IP0005', 'Ã�rea-4', '2011-06-08'),
(145, 'Proveedor-10', 'Incidencia de proveedor-10', 'IP0001', 'Ã�rea-5', '2011-06-09'),
(146, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0002', 'Ã�rea-1', '2011-06-10'),
(147, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0003', 'Ã�rea-2', '2011-06-11'),
(148, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0004', 'Ã�rea-3', '2011-06-12'),
(149, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0001', 'Ã�rea-4', '2011-06-13'),
(150, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0002', 'Ã�rea-5', '2011-06-14'),
(151, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0003', 'Ã�rea-3', '2011-07-01'),
(152, 'Proveedor-17', 'Incidencia de proveedor-17', 'IP0004', 'Ã�rea-4', '2011-07-02'),
(153, 'Proveedor-18', 'Incidencia de proveedor-18', 'IP0005', 'Ã�rea-5', '2011-07-03'),
(154, 'Proveedor-19', 'Incidencia de proveedor-19', 'IP0006', 'Ã�rea-1', '2011-07-04'),
(155, 'Proveedor-20', 'Incidencia de proveedor-20', 'IP0007', 'Ã�rea-1', '2011-07-05'),
(156, 'Proveedor-21', 'Incidencia de proveedor-21', 'IP0008', 'Ã�rea-2', '2011-07-06'),
(157, 'Proveedor-2', 'Incidencia de proveedor-2', 'IP0003', 'Ã�rea-3', '2011-07-07'),
(158, 'Proveedor-3', 'Incidencia de proveedor-3', 'IP0004', 'Ã�rea-4', '2011-07-08'),
(159, 'Proveedor-4', 'Incidencia de proveedor-4', 'IP0005', 'Ã�rea-5', '2011-07-09'),
(160, 'Proveedor-5', 'Incidencia de proveedor-5', 'IP0006', 'Ã�rea-6', '2011-07-10'),
(161, 'Proveedor-11', 'Incidencia de proveedor-11', 'IP0007', 'Ã�rea-7', '2011-07-11'),
(162, 'Proveedor-12', 'Incidencia de proveedor-12', 'IP0008', 'Ã�rea-8', '2011-07-12'),
(163, 'Proveedor-13', 'Incidencia de proveedor-13', 'IP0009', 'Ã�rea-3', '2011-07-13'),
(164, 'Proveedor-14', 'Incidencia de proveedor-14', 'IP0010', 'Ã�rea-4', '2011-07-14'),
(165, 'Proveedor-15', 'Incidencia de proveedor-15', 'IP0011', 'Ã�rea-5', '2011-07-15'),
(166, 'Proveedor-16', 'Incidencia de proveedor-16', 'IP0012', 'Ã�rea-1', '2011-07-16');
";
$sql_table_incidenciasinspeccion_data = "
INSERT INTO `incidenciasinspeccion` (`id`, `cod`, `codname`) VALUES
(1, '0', 'Sin incidencias'),
(2, '1', 'Falta de instrumental'),
(3, '2', 'Falta de producto'),
(4, '3', 'Tratamiento deficiente'),
(5, '4', 'Falta de medidas de protecciÃ³n'),
(6, '5', 'Falta de planning de trabajo'),
(7, '6', 'Falta de certificados de tratamientos'),
(8, '7', 'Falta de indumentaria, aseo y limpieza personal'),
(9, '8', 'Falta de conservaciÃ³n y limpieza del vehÃ­culo');
";
$sql_table_informeauditoria_data = "
INSERT INTO `informeauditoria` (`id`, `ai`, `Fecha`, `AreaAuditada`, `Documentacion`, `Auditor`, `ObjetoAuditoria`, `Resultado`) VALUES
(1, '--', '2007-10-24', 'SISTEMA', 'MANUAL', 'AENOR', 'MANTENIMIENTO AENOR', NULL),
(2, 'AI0601', '2006-03-23', 'AlmacÃ©n y oficina', 'Cuestionario', 'Administrac', 'Comprobar estado', 'Los mantenimientos estaban paralizados ...'),
(3, 'AI0602', '2006-03-29', 'FormaciÃ³n', 'Manual', 'Administrac', 'Comprobar la eficacia de los mÃ©todos usados', 'La formaciÃ³n mantiene sus estÃ¡ndares, pero se detecta que, ...'),
(4, 'AI0603', '2006-04-10', 'Compras', 'Manual', 'Calidad', 'Comprobar operativas', 'Los procedimientos de compras de material son conformes. Durante la auditorÃ­a se determinÃ³ que PAGS influÃ­a directamente en la calidad percibida correspondiente a ENTERPRISE, por ello se determinÃ³ incluirlo en el sistema de calidad, en cumplimiento del requisito ISO 9001 4.1. Se levantaron las NC0606 y 0706.'),
(5, 'AI0604', '2006-05-17', 'Servicio', 'Manual y especificaciÃ³n', 'Calidad', 'Comprobar buenas prÃ¡cticas', 'El servicio se presta de conformidad a los requisitos de contrato. Las desviaciones detectadas afectan mÃ¡s a ...'),
(6, 'AI0605', '2006-06-20', 'PrevenciÃ³n de riesgos', 'Manual PRL', 'Administrac', 'Comprobar cursos, documentaciÃ³n y medios de preven', NULL),
(7, 'AI0606', '2006-07-19', 'Oficina de calidad', 'Manual', 'Admin', 'Comprobar tareas', 'No se han encontrado no conformidades.'),
(8, 'AI0607', '2006-09-21', 'AlmacÃ©n y oficina', 'Cuestionario', 'Admin', 'Comprobar estado', 'O se compran los carteles ... Se amontona mucha ropa para arreglar.'),
(9, 'AI0608', '2006-12-22', 'FormaciÃ³n', 'Cuestionario', 'Calidad', 'Comprobar registros con datos de la BD.', 'Fallos de falta de datos sobre los cursos realizados en AXIS.  Fallos de organizaciÃ³n de tareas en administraciÃ³n (Partes PTPI y Expedientes de personal activo-inactivo).'),
(10, 'AI0609', '2007-02-05', NULL, 'EspecificaciÃ³n', 'Calidad', 'Comprobar equipos, documentos e incidencias', 'No se han encontrado no conformidades'),
(11, 'AI0701', '2007-02-23', 'AlmacÃ©n y oficina', 'Cuestionario', 'Calidad', 'Comprobar estado y datos bd', 'Faltan datos recopilados para la BD de mantenimiento sobre las acciones ...'),
(12, 'AI0702', '2007-04-23', 'FormaciÃ³n', 'Cuestionario', 'Calidad', 'Repasar expedientes y cursos', 'Hay fallos de comunicaciÃ³n entre ...'),
(13, 'AI0703', '2007-04-26', 'Compras', 'Cuestionario', 'Calidad', 'Comprobar tareas', 'No se han encontrado NC.'),
(14, 'AI0704', '2007-05-29', 'DocumentaciÃ³n', 'cuestionario', 'Calidad', 'comprobar manual', 'Una no conformidad. Resto conforme.'),
(15, 'AI0705', '2007-06-19', 'Vigilancia', 'Cuestionario', 'Calidad', 'Comprobar servicio e incidencias', 'El uso incorrecto de los cÃ³digos hace que ... valor del indicador de incidencias acumuladas en 11 meses es del 8.03%.'),
(16, 'AI0706', '2007-07-05', 'Calidad', 'Cuestionario', 'Jefe de servicio', 'Comprobar tareas', 'Este aÃ±o se ha atendido mucho a ... y se ha restado tiempo a la calidad ...'),
(17, 'AI0707', '2007-07-18', 'AlmacÃ©n y oficina', 'Cuestionario', 'Calidad', 'Comprobar estado', 'Siempre hay materiales en trÃ¡nsito, ...'),
(18, 'AI0708', '2007-12-19', 'AlmacÃ©n y oficina', 'Cuestionario', 'Calidad', 'Comprobar estado', 'Una no conformidad. Resto conforme.'),
(19, 'AI0801', '2008-03-10', 'FORMACIÃ“N', 'CUESTIONARIO', 'CALIDAD', NULL, 'SE HA ENCONTRADO UNA NO CONFORMIDAD Y DOS OBSERVACIONES:\r\nLAS DEFICIENCIAS ENCONTRADAS ...'),
(20, 'AI0802', '2008-04-08', 'Compras', 'Cuestionario', 'Calidad', 'Comprobar cuestionario', 'No se han levantado no conformidades, solo la observaciÃ³n ...'),
(21, 'AI0803', '2008-04-30', 'Servicio de vigilancia', 'Cuestionario', 'Calidad', 'Comprobar cuestionario', 'Se levanta una no conformidad. Los defectos encontrados son referentes al ...'),
(22, 'AI0804', '2008-05-23', 'Control de documentaciÃƒÂ³n', 'Manual de calidad', 'Calidad', 'Boy that relaly helps me the heck out.', 'Boy that relaly helps me the heck out.'),
(23, 'AI0805', '2008-06-06', 'AlmacÃ©n, vehÃ­culos y uniformidad', 'Cuestionarios', 'Calidad', '--', 'Se ha levantado una no conformidad. El almacÃ©n y las instal...'),
(24, 'AI0806', '2008-06-30', 'Zona 3', '', 'Calidad', '', ''),
(25, 'AI0807', '2008-07-16', 'Calidad', 'Cuestionario', 'Javier Agador', 'Comprobar cuestionario', 'Se han encontrado retrasos leves en el ...de ofertas.'),
(26, 'AI0901', '2009-03-20', 'DocumentaciÃ³n y compras', 'Cuestionarios de auditorÃ­as', 'Calidad (FJ)', 'Comprobar rutinas', 'No ha habido incidenci.. de documentaciÃ³n.'),
(27, 'AI0902', '2009-04-15', 'FormaciÃ³n', 'Cuestionario', 'Juan Ramos', 'Comprobar rutinas', 'ConvendrÃ­a ajustar la formaciÃ³n... la contrataciÃ³n pÃºblica.'),
(28, 'AI0903', '2009-05-25', 'Cliente III', 'Norma de servicio', 'Juan Ramos', '<p>Comprobar servicio Aljamar III</p>', '<p>El servicio ... es conforme.</p>'),
(29, 'AI0904', '2009-06-15', 'Vigilancia', 'EspecificaciÃƒÂ³n', 'Juan Ramos', 'what does that means you make it like etpoihia won a world cup that team is etpoihia foot ball federation seporting more than our national team { this news is just madness when i read it i am think in { birtukan mideksa ) she going out of prison', 'what does that means you make it like etpoihia won a world cup that team is etpoihia foot ball federation seporting more than our national team { this news is just madness when i read it i am think in { birtukan mideksa ) she going out of prison'),
(30, 'AI0905', '2009-07-30', 'Calidad e Infrarestructuras', 'Cuestionarios', 'Juan Ramos', 'Comprobar rutinas', 'Las NC no son relevantes (a efectos prÃ¡cticos).'),
(35, '', '2012-09-13', '', '', '...', '', ''),
(36, 'AI1100', '2012-09-13', 'PRUEBA', 'DOC', 'Auditor-3', '<p>OBJETO_FECHA</p>', '<p>rESULTADO_SELECTOR</p>'),
(37, 'AI1100', '2011-11-22', 'PRUEBA', 'DOC', 'Auditor-3', '<p>PPPPP</p>', '<p>DDDDD</p>'),
(38, 'AI1100', '2012-10-01', 'Array[Imagen corporativa][Costos]', 'Some documentation', 'RAUL CALLEJO', '<p>kjh</p>', '<p>jh</p>'),
(39, 'AI1100', '2012-10-11', 'Array[Tratamientos][Salud pÃºblica][Imagen corporat', 'Some documentation', 'MIGUEL A. MOYA SEN', '<p>ae</p>', '<p>awe</p>');
";
$sql_table_inspecciones_data = "
INSERT INTO `inspecciones` (`Id`, `inspector`, `fecha`, `servicio`, `hora`, `vigilante`, `incidencia`, `codigo_incidencia`, `servicio2`, `hora2`, `vigilante2`, `incidencia2`, `codigo_incidencia2`, `servicio3`, `hora3`, `vigilante3`, `incidencia3`, `codigo_incidencia3`, `servicio4`, `hora4`, `vigilante4`, `incidencia4`, `codigo_incidencia4`, `servicio5`, `hora5`, `vigilante5`, `incidencia5`, `codigo_incidencia5`, `servicio6`, `hora6`, `vigilante6`, `incidencia6`, `codigo_incidencia6`, `servicio7`, `hora7`, `vigilante7`, `incidencia7`, `codigo_incidencia7`) VALUES
(1, 'Inspector-1', '2010-01-09', 'S1 SEVILLA', '09:10:00', 'Trabajador2', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador3', 'Sin corbata', 304, 'S1 SEVILLA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S3 HUELVA', '18:00:00', 'Trabajador5', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(2, 'Inspector-2', '2010-01-11', 'S1 CÃ�DIZ', '10:15:00', 'Trabajador3', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador9', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(3, 'Inspector-1', '2010-01-13', 'S2 SEVILLA', '09:10:00', 'Trabajador5', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador12', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S1 HUELVA', '18:00:00', 'Trabajador7', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(4, 'Inspector-3', '2010-01-16', 'S1 CÃ�DIZ', '10:15:00', 'Trabajador8', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador15', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(5, 'Inspector-1', '2010-01-19', 'S3 SEVILLA', '09:10:00', 'Trabajador2', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador17', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S2 HUELVA', '18:00:00', 'Trabajador9', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(6, 'Inspector-1', '2010-02-01', 'S1 CÃ�DIZ', '10:15:00', 'Trabajador6', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador19', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(7, 'Inspector-2', '2010-02-09', 'S1 SEVILLA', '09:10:00', 'Trabajador2', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador3', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S2 HUELVA', '18:00:00', 'Trabajador17', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(8, 'Inspector-3', '2010-02-11', 'S1 CÃ�DIZ', '10:15:00', 'Trabajador4', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador20', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(9, 'Inspector-2', '2010-03-02', 'S1 SEVILLA', '09:10:00', 'Trabajador2', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador13', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S2 HUELVA', '18:00:00', 'Trabajador13', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(10, 'Inspector-2', '2010-03-11', 'S1 CÃ�DIZ', '10:15:00', 'Trabajador10', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador6', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(11, 'Inspector-1', '2010-03-09', 'S1 SEVILLA', '09:10:00', 'Trabajador12', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador2', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S2 HUELVA', '18:00:00', 'Trabajador4', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(12, 'Inspector-1', '2010-04-01', 'S4 CÃ�DIZ', '10:15:00', 'Trabajador1', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador1', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(13, 'Inspector-1', '2010-05-09', 'S1 SEVILLA', '09:10:00', 'Trabajador11', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador3', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S2 HUELVA', '18:00:00', 'Trabajador6', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(14, 'Inspector-3', '2010-05-11', 'S3 CÃ�DIZ', '10:15:00', 'Trabajador14', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador9', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '18:00:00', 'Trabajador7', 'En chanclas', 314, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(15, 'Inspector-2', '2010-03-09', 'S1 SEVILLA', '09:10:00', 'Trabajador16', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador3', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S2 HUELVA', '18:00:00', 'Trabajador1', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(16, 'Inspector-16', '2010-04-01', 'S2 HUELVA', '10:15:00', 'Trabajador19', 'Sin incidencias', 300, 'S4 CÃ�DIZ', '13:30:00', 'Trabajador10', 'Con botines', 303, 'S2 CÃ�DIZ', '16:50:00', 'Trabajador10', 'Sin incidencias', 300, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(17, 'Inspector-1', '2010-05-09', 'S3 HUELVA', '09:10:00', 'Trabajador20', 'Sin incidencias', 300, 'S3 SEVILLA', '10:15:00', 'Trabajador11', 'Sin corbata', 304, 'S1 HUELVA', '16:30:00', 'Trabajador5', 'Sin incidencias', 300, 'S2 HUELVA', '18:00:00', 'Trabajador17', 'Ausente', 303, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(19, 'Inspector-4', '2011-04-30', 'S4 MÃ�LAGA', '00:00:12', 'Trabajador4', '4444444444', 444, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0, '...', '00:00:00', '...', '', 0),
(20, 'Inspector-1', '2012-10-04', 'Array[S2 SEVILLA][S4 MÃ�LAGA][SERVICIO 15]', '13:00:00', 'Trabajador15', '<p>Todo bien.</p>', 0, '', '00:00:00', '', NULL, 0, '', '00:00:00', '', NULL, 0, '', '00:00:00', '', NULL, 0, '', '00:00:00', '', NULL, 0, '', '00:00:00', '', NULL, 0, '', '00:00:00', '', NULL, 0);
";
$sql_table_inspectores_data = "
INSERT INTO `inspectores` (`id`, `inspector`, `activo`) VALUES
(1, 'Inspector-1', 1),
(2, 'Inspector-2', 1),
(3, 'Inspector-3', 1),
(4, 'Inspector-4', 1);
";
$sql_table_links_data = "
INSERT INTO `links` (`linkid`, `linkname`, `link`) VALUES
(1, 'Norma de', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc1.doc'),
(2, 'EspecificaciÃ³n de', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc2.doc'),
(3, 'Incidencias', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc3.doc'),
(4, 'Formato de', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc4.doc'),
(5, 'PolÃ­tica de calidad', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc5.doc'),
(7, 'Indicadores de la calidad', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc6.doc'),
(8, 'AuditorÃ­a sistema', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc7.doc'),
(9, 'Cuestionario a clientes', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc8.doc'),
(10, 'Cuestionario a trabajadores', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc9.doc'),
(11, 'Ficha de indicador', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc10.doc'),
(12, 'Infraestructuras', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc11.doc'),
(13, 'Manual de la calidad', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc12.doc'),
(14, 'Norma bÃ¡sica de servicio', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc13.doc'),
(15, 'NS-1', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc14.doc'),
(16, 'NS-2', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc15.doc'),
(27, 'NS-3', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc16.doc'),
(18, 'NS-4', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc17.doc'),
(19, 'NS-5', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc18.doc'),
(20, 'NS-6', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc19.doc'),
(21, 'NS-7', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc20.doc'),
(22, 'NS-8', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc21.doc'),
(23, 'NS-9', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc22.doc'),
(24, 'NS-10', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc23.doc'),
(25, 'PROCEDIMIENTO DE ', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc24.doc'),
(26, 'AudtorÃ­a de', 'http://www.textblock.org/modulares/uploads/uploads/calidad/doc25.doc'),
(47, 'Pepe', 'http://www.dominio.com/modulares/uploads/uploads/calidad/nombrearchivo.extensiÃ³n');
";
$sql_table_modifdoc_data = "
INSERT INTO `modifdoc` (`id`, `titulo`, `revision_num`, `modificacion`, `capapart`, `fechamodificacion`) VALUES
(1, 'EspecificaciÃ³n del servicio', 5, 'Todast', 'Todos', '2002-06-13'),
(2, 'Incidencias', 6, 'Se incluye un diagrama de todos los documentos y registros clasificados por procesos', '4, 4.2', '2002-11-16'),
(3, 'Formato de', 6, 'Diagramas:Para aquellos registros cuyo tiempo de retenciÃ³n no sea superior a 3 aÃ±os se conservarÃ¡n durante ese tiempo', 'Todos', '2002-11-16'),
(4, 'PolÃ­tica de calidad', 1, 'DOCUMENTO ANULADO', 'Todos', '2008-09-08'),
(5, 'Indicadores de la calidad', 2, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(6, 'AuditorÃ­a sistema', NULL, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(7, 'Manual de la calidad', 4, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(8, 'Manual de la calidad', 0, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(9, 'Manual de la calidad', NULL, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(10, 'Manual de la calidad', 3, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(11, 'Procedimiento de ', NULL, 'El documento es nuevo', 'Todos', '2009-05-25'),
(12, 'Planes de calidad', 0, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(13, 'PolÃ­tica ambiental', NULL, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(14, 'Aspectos Ambientales ', 1, 'Se quitan cÃ³digos. Se revisa todo el documento', 'Todos', '2008-09-08'),
(15, 'Requisitos Legales y otros ', 0, 'El documento es nuevo', 'Todos', '2008-09-08'),
(16, 'Objetivos y Metas ', 3, 'Se quita la operativa: 2. SALIDA DE PRODUCTO. El control de la cantidad de producto que los tÃ©cnicos utilizan para los tratamientos se realiza cumplimentando el modelo â€œSalida de Productosâ€�. 4. PRODUCTO DEFECTUOSO. TendrÃ¡n esta consideraciÃ³n: a) aquellos productos que llegan del proveedor al almacÃ©n en mal estado o caducados. b) aquellos productos, que ya almacenados o utilizados, sufran alguna anomalÃ­a (derrame de otro producto, de agua, etc.) c) aquellos productos cuya fecha de caducidad cumpla sin ser utilizados totalmente. En estos casos el Jefe de almacÃ©n cumplimenta el modelo â€œProducto defectuosoâ€�, especificando entre otros datos: - la cantidad de producto afectado, puesto que no tiene por que coincidir con el total del cargamento. - el tipo de anomalÃ­a, para tener asÃ­ un control mÃ¡s exhaustivo de los proveedores. En el caso c), el apartado del PROVEEDOR quedarÃ¡ sin rellenar, ya que Ã©ste no estÃ¡ directamente relacionado con el daÃ±o o problema del producto. Cuando ocurra algÃºn problema con un producto fuera del almacÃ©n, los operarios deberÃ¡n ponerlo en conocimiento del Jefe de almacÃ©n a su vuelta a las oficinas y Ã©ste cumplimentarÃ¡ el modelo â€œproducto defectuosoâ€�. El modelo â€œProductos defectuososâ€� se conservarÃ¡ en la UR â€œProductos defectuososâ€�, en la oficina. Los encargados de rellenar este impreso son los propios operarios, especificando el producto, la cantidad y la fecha, que se acompaÃ±arÃ¡ de la firma correspondiente. La salida de los productos almacenados se efectuarÃ¡ de acuerdo a la fecha de entrada de cada producto, de forma que los productos almacenados en primer lugar son los primeros en ser utilizados. El modelo se conservarÃ¡ en la UR â€œSalidasâ€� en la oficina, pudiendo existir una copia en el almacÃ©n para uso exclusivo de los tÃ©cnicos.', '2', '2008-06-25'),
(17, 'GestiÃ³n Ambiental ', 0, 'Documento nuevo', '--', '2008-09-02'),
(18, 'Estructura y Responsabilidad ', 0, 'Se sustituyen los dos Ãºltimos puntos de la polÃ­tica.', '--', '2008-09-02'),
(19, 'Manual de la calidad', 7, 'se quita la operativa de control de documentaciÃ³n y se hace referencia al documento de procedimiento nuevo. (se quita del manual)', '4.2', '2008-09-24'),
(20, 'Manual de la calidad', 7, 'Se cambia la operativa de compras en lo siguiente: El Gerente o el Director tÃ©cnico cumplimentan el pedido en la BD de pedidos y lo imprimen, pasÃ¡ndoselo a AdministraciÃ³n. AdministraciÃ³n realizarÃ¡ el pedido por fax, mail o telÃ©fono, archivando la hoja de pedido hasta la recepciÃ³n.', '7.4.2', '2008-09-30'),
(21, 'Manual de la calidad', 7, 'Se elimina un diagrama obsoleto sobre el tratamiento de las no conformidades.', '8.3.2', '2008-09-25'),
(22, 'Manual de la calidad', 7, 'Se incluye: Todos los documentos del sistema de calidad deberÃ¡n ser revisados respecto a los requisitos de la norma de referencia ISO cada tres aÃ±os como mÃ¡ximo', '4.2', '2008-09-25'),
(23, 'Manual de la calidad', 7, 'Se incluye apartado 5.5.2 con el nombramiento del representante de la direcciÃ³n en temas de calidad.', '5.5.1', '2008-09-25'),
(24, 'indicadores', 4, 'Se cambian los valores objetivo por nuevos valores de control. Se cambia el indicador de avisos por el de inspecciones.', 'pÃ¡g.3', '2008-10-09'),
(25, 'ComunicaciÃ³n', 1, 'Se ajusta a la operativa actual en cuanto a control de documentos informÃ¡ticos', '4, 5', '2009-03-23'),
(26, 'DocumentaciÃ³n del SGA ', 1, 'Se pasa a la BD como formato de informe', '--', '2009-03-02'),
(27, 'Control de Documentos ', 2, 'Se cambia la distribuciÃ³n a directorio de internet', '7', '2009-07-10'),
(28, 'Control Operacional ', 8, 'ISO 9001/2008', 'Todos', '2008-07-15'),
(29, 'PolÃ­tica ambiental', 2, 'Se cambian logos', 'Toldas', '2009-07-10'),
(30, 'Aspectos Ambientales ', 5, 'Nuevos logos', 'Todos', '2009-07-15'),
(31, 'OrganizaciÃ³n de la actividad preventiva Funciones y responsabilidades ', 2, 'Se incluye control de calidad', 'Todos', '2009-06-04'),
(32, 'Reuniones periÃ³dicas de trabajo ', 5, 'Cambian logos. Se quita el mÃ©todo de satisfacciÃ³n de clientes', 'Todos', '2009-07-15'),
(33, 'Objetivos ', 0, 'El documento es nuevo', 'Todos', '2008-09-24'),
(34, 'EvaluaciÃ³n de Riesgos ', 1, 'Cambian logos', 'Todos', '2009-07-15'),
(35, 'Control de Riesgos ', 1, 'Cambian logos. Se revisa introduciendo compromisos de cumplimiento de requisitos del cliente.', '--', '2009-07-15'),
(36, 'InvestigaciÃ³n y anÃ¡lisis de accidentes/ incidentes Control de la siniestralidad ', 1, 'Cambian logos', 'Todos', '2009-07-15'),
(37, 'Inspecciones y revisiones de seguridad ', 1, 'Cambian estructura y logos', '--', '2009-07-15'),
(38, 'Observaciones del trabajo ', 3, 'Nuevos logos', 'Todos', '2009-07-15'),
(39, 'Vigilancia de la salud de los trabajadores ', 0, 'Documento externo', '--', NULL),
(40, 'Protocolos para legionella', 0, 'El documento es nuevo', 'Todos', '2008-11-11'),
(41, 'Protocolos para legionella', 1, 'Cambian logos', NULL, '2009-01-15'),
(42, 'GuÃ­as TÃ©cnicas prevenciÃ³n Legionella', 0, NULL, NULL, NULL),
(43, 'manual', 9, 'Se modifica el punto 7.5.1 en lo relativo a la eliminaciÃ³n del programa BIOCON', '7,5,1', '2010-03-10'),
(44, 'indicadores_x', 1, 'DOCUMENTO ANULADO', '--', '2011-08-19'),
(45, 'ComunicaciÃ³n de riesgos detectados y sugerencias de mejora ', 4, 'Cambian estructura y logos', '4', '2012-09-13'),
(46, 'Seguimiento y control de las medidas correctoras ', 4, 'Nuevos logos', '4', '2012-09-13'),
(47, 'Actuaciones Preventivas EspecÃ­ficas ', 4, 'Documento externo', '44', '2012-09-13'),
(48, 'Nuevos proyectos y modificaciones de instalaciones, procesos o equipos ', 4, 'El documento es nuevo', '44', '2012-09-13'),
(49, 'Adquisiciones de mÃ¡quinas, equipos y productos quÃ­micos ', 4, 'Nuevos logos', '4', '2001-01-01'),
(52, 'EspecificaciÃ³n del servicio', 0, '<p>DD</p>', '1', '2012-09-13'),
(53, 'EspecificaciÃ³n del servicio', 88, '<p>FXDG</p>', '6', '2012-09-13'),
(54, 'EspecificaciÃ³n del servicio', 3, '', '3', '2012-09-13');
";
$sql_table_ncsporarea_data = "
INSERT INTO `ncsporarea` (`id`, `area`, `cantidad`) VALUES
(1, 'AACC', 1),
(2, 'Arch', 4),
(3, 'Compr', 1),
(4, 'Cdatos', 1),
(5, 'Cdoc', 18),
(6, 'Cprov', 3),
(7, 'Docreq', 7),
(8, 'Forma', 5),
(9, 'Insp', 1),
(10, 'Mant', 7),
(11, 'Med', 7),
(12, 'MÃ©t', 9),
(13, 'Plan', 1),
(14, 'PRL', 1),
(15, 'Prod', 11),
(16, 'Prov', 1),
(17, 'Rec', 5),
(18, 'Reg', 7),
(19, 'Respon', 1),
(20, 'Revcont', 1),
(21, 'Satis', 1),
(22, 'Seguim', 3);
";
$sql_table_objetivosdatosgenerales_data = "
INSERT INTO `objetivosdatosgenerales` (`Id`, `CodigoObjetivo`, `NombreObjetivo`, `Ano`, `Origen`, `Deteccion`, `Causas`, `Recursos`, `Indicador`, `Fuente`, `FrecuenciaDeRevision`, `Plazo`, `ResponsableDeEjecucion`, `ResponsableDeSeguimiento`, `VBDireccion`, `ResultadoFinal`, `Fecha`) VALUES
(1, '108', 'Mejorar informaciÃ³n al cliente sobre el servicio de ...', 8, 'Se tiende a contratar a ...', 'MediciÃ³n indicador contrataciÃ³n privada', 'El cliente abarata costes', 'Los disponibles', 'ContrataciÃ³n privada', 'C:\\EMPRESA\\archives\\Webexcell', 'mensual', '6 meses', 'Calidad', 'Calidad', NULL, 'Sube al 25% la contrataciÃ³n privada', '2012-09-13'),
(2, '208', 'Bajar incidencias propias al 0,5%, con cero graves', 8, 'Imagen ante el cliente', 'MediciÃ³n del indicador', 'Falta concienciaciÃ³n', 'Los disponibles', 'Incidencias propias', 'BD calidad', 'Mensual', '3 meses', 'Calidad', 'Calidad', NULL, 'Resultado final de 0,48', '2012-09-13'),
(3, '308', 'Reducir a la mitad la desviaciÃ³n en dÃ­as sobre el plan de auditorÃ­as', 8, 'Rutinas de calidad', 'Durante la mediciÃ³n del indicador', 'Escasez de tiempo por dedicaciÃ³n a elaboraciÃ³n de ...', 'Los disponibles', 'DesviaciÃ³n de auditorÃ­as', 'EMPRESA../Webexcell', 'mensual', '1 mes', 'Calidad', 'Calidad', NULL, 'Desde AI0702 no ha habido retrasos', '2012-09-13'),
(4, '408', 'Realizar curso formaciÃ³n sobre ...', 8, 'Necesidad de formaciÃ³n continua', 'PlanificaciÃ³n de la calidad', 'Este curso se aplazÃ³ desde el aÃ±o anterior', 'Los disponibles', 'Total horas de formaciÃ³n', 'EMPRESA../Webexcell', 'Mensual', '6 meses', 'Calidad e Inspector', 'Calidad', NULL, 'CURSO REALIZADO', '2012-09-13'),
(5, '508', 'Bajar incidencias proveedor al menos del 25%', 0, 'Servicios compartidos', 'RevisiÃ³n del sistema-indicador', 'Mejorar imagen de EMPRESA', 'Los disponibles', 'Incidencias PROVEEDOR-EMPRESA en servicios compartidos', 'BD calidad', 'mensual', '12 meses', 'Inspector', 'Calidad', NULL, 'Se logra bajar al 25%', '2012-09-13'),
(6, '109', 'Bajar al 20% las incidencias de proveedor', 0, 'RevisiÃ³n direcciÃ³n 2008', 'MediciÃ³n del indicador', '<p>Las incidencias de PROVEEDOR inciden en la imagen de EMPRESA</p>', 'Los disponibles', 'Incidencias de PROVEEDOR sobre el servicio', 'BD calidad-incidencias de proveedor', 'mensual', '1 aÃ±o', 'Calidad', 'Calidad', '', '<p>No ha habido incidencias de proveedor hasta la fecha de ciere del objetivo</p>', '2012-09-13'),
(7, '209', 'Ampliar auditorÃ­as al menos a dos clientes', 9, 'RevisiÃ³n por la direcciÃ³n', 'RevisiÃ³n por la direcciÃ³n', 'Control calidad del servicio', 'Los disponibles', 'No hay indicador asociado', 'AuditorÃ­as internas BD calidad', 'anual', '1 aÃ±o', 'Calidad', 'CalidadÂº', NULL, 'Realizada auditorÃ­a a ALJAMAR. Ver informes de auditorÃ­a.', '2012-09-13'),
(8, '309', 'Subir a 6 la media de horas de formaciÃ³n por trabajador', 0, 'RevisioÃ³n 2008', 'Resultados de la revisiÃ³n', 'Se da poca formaciÃ³n especializada', 'Los disponibles', 'Total de horas por operario', 'BD calidad', 'Anual', '1 aÃ±o', 'Juan Ramos', 'Juan Ramos', NULL, NULL, '2012-09-13'),
(9, '409', 'Cambiar el programa de calidad a formato de formularios', 0, 'RevisiÃ³n por la direcciÃ³n 2007', 'Cambios en las prestaciones del paquete Office', 'DejarÃ¡ de funcionar la tecnologÃ­a en la que estaba hecho el programa de calidad', 'Los disponibles', 'progreso de la instalaciÃ³n', 'BD de calidad', 'mensual', '6 meses', 'Juan Ramos', 'Juan Ramos', NULL, 'El programa se ha modificado satisfactoriamente. Se ha validado y no presenta fallos de consideraciÃ³n', '2012-09-13'),
(10, '509', 'Cambiar y mejorar la pÃ¡gina web', 0, 'Fallos de extensiones Frontpage de Vianetworks', 'No funcionaban los formularios de contacto', 'El Hosting es antiguo y barato, y Vianetworks lo maltrata', 'Los disponibles', 'Ninguno', 'PÃ¡gina web', '--', '1 Semana', 'Juan Ramos', 'Juan Ramos', NULL, 'La pÃ¡gina Web funciona y no tiene fallos de cÃ³idigo de relevancia.', NULL),
(11, '110', 'FormaciÃ³n mayor o igual a 4 horas', 0, 'Rev. DirecciÃ³n 2010-enero', 'Se detecta en el mantenimiento de la bd de calidad', '<p>Requisitos legales y mejora del servicio</p>', 'Cursos AXA.SL y cursos internos', 'nÂº de horas', 'Eli', '--', '1 aÃ±o', 'Eli', 'Juan Ramos', '', '<p>A 30 de noviembre, todos han recibido la formaci&oacute;n</p>', '2010-08-22'),
(12, '210', 'Conocer el estado actual de la calidad de las ofertas', 0, 'No ganamos concursos', 'Concursos', '<p>No sabemos por que perdemos siempre los concursos</p>', 'Los disponibles', 'ValoraciÃ³n global de la informaciÃ³n', 'Respuestas de los Organismos de contrataciÃ³n', 'Para cada contrato', '1 aÃ±o', 'Calidad', 'Calidad', '', '<p>Del estudio de la informaci&oacute;n recibida hasta ..., sacamos en conclusi&oacute;n que se necesita m&aacute;s colaboraci&oacute;n departamental para su redacci&oacute;n, y aumentar la calidad t&eacute;cnica en ...</p>', '2010-12-31');
";
$sql_table_objetivosseguimiento_data = "
INSERT INTO `objetivosseguimiento` (`Id`, `codigoobjetivo`, `accion`, `responsable`, `fechalimite`, `fechaterminacion`, `observaciones`) VALUES
(1, '108', 'Elaborar carta y mail html', 'Calidad', '2008-02-29', '2008-02-29', NULL),
(2, '108', 'EnvÃ­o a clientes', 'Calidad', '2008-05-15', '2008-06-19', 'Se manda mail masivo'),
(3, '108', 'EnvÃ­o a clientes', 'Calidad', '2008-06-19', '2008-06-19', 'Se manda mail masivo'),
(4, '108', 'VerificaciÃ³n del indicador', 'Calidad', '0208-06-30', '2008-06-30', 'Medido: valor 25%'),
(5, '208', 'Preparar nota informativa', 'Calidad', '2007-12-21', '2007-12-10', NULL),
(6, '208', 'Distribuir', 'Inspector', '2008-01-15', '2007-12-10', NULL),
(7, '208', 'Archivo acuses de recibo', 'Calidad', '2008-03-31', '2007-12-10', NULL),
(8, '208', 'Seguimiento indicador', 'Calidad', '2008-12-31', NULL, 'Se cambia la forma de medir el indicador'),
(9, '308', 'Reducir actividades ajenas a calidad', 'Gerencia', '2007-12-21', '2007-12-21', NULL),
(10, '308', 'Verificar recducciÃ³n actividades ajenas a calidad', 'Calidad', '2007-12-21', '2007-12-21', NULL),
(11, '408', 'Preparar documentaciÃ³n del cursos', 'Calidad', '2008-05-31', '2008-05-31', 'Se entrega el procedimiento + casos de urgencia'),
(12, '408', 'Realizar curso', 'RRHH', '2008-06-30', '2008-06-30', 'Se reparten desde el 11/05/2008'),
(13, '408', 'Archivo resultados', 'Calidad', '2008-06-30', '2008-06-16', NULL),
(14, '508', 'Preparar informaciÃ³n para el proveedor', 'Calidad', '2008-03-31', '2008-03-31', 'Se ha modificado el cÃ¡lculo del indicador'),
(15, '508', 'Distribuir al proveedor', 'Inspector', '2008-07-08', '2008-06-30', ''),
(16, '508', 'Archivar acuses de recibo', 'Calidad', '2008-07-31', '2008-07-18', NULL),
(17, '209', 'Modificar plan de auditorÃ­as', 'Calidad', '2009-05-30', '2009-03-15', NULL),
(18, '209', 'Ampliada auditorÃ­a a ALJAMAR II', 'Calidad', '2009-05-30', '2009-05-25', NULL),
(19, '309', 'Preparar documentaciÃ³n', 'Calidad', '2009-04-30', '2009-04-30', NULL),
(20, '309', 'Distribuir', 'Calidad', '2009-05-30', '2009-05-30', NULL),
(21, '309', 'Recoger resultados y registrar', 'Calidad', '2009-06-30', '2009-06-30', NULL),
(22, '309', 'Emitir diplomas', 'Calidad', '2009-07-30', '2009-07-30', NULL),
(23, '409', 'Crear formularios', 'Juan Ramos', '2009-06-30', '2009-05-21', NULL),
(24, '409', 'Instalar mÃ³dulos y macros', 'Juan Ramos', '2009-06-30', '2009-05-21', 'Validados mÃ³dulos y macros'),
(25, '409', 'Crear botones de acciÃ³n', 'Juan Ramos', '2009-06-30', '2009-05-21', 'validados botones de acciÃ³n'),
(26, '409', 'DiseÃ±ar fondos de formulario', 'Juan Ramos', '2009-06-30', '2009-05-21', NULL),
(27, '409', 'Establecer panel de control', 'Juan Ramos', '2009-06-30', '2009-05-21', NULL),
(28, '109', 'Preparar informaciÃ³n para el proveedor', 'Calidad', '2008-03-31', '2008-03-31', NULL),
(29, '109', 'Distribuir al proveedor', 'Inspector', '2009-03-31', '2009-03-31', NULL),
(30, '109', 'Archivar acuses de recibo', 'Calidad', '2008-07-31', '2009-05-24', 'No ha habido incidencias de proveedor a esta fecha'),
(31, '509', 'Buscar temas', 'Juan Ramos', '2009-09-01', '2009-08-31', NULL),
(32, '509', 'Personalizar', 'Juan Ramos', '2009-09-01', '2009-08-31', NULL),
(33, '509', 'Instalar aplicaciones', 'Juan Ramos', '2009-09-01', '2009-08-31', NULL),
(34, '509', 'Subir al servidor y validar', 'Juan Ramos', '2009-09-01', '2009-08-31', NULL),
(35, '509', 'Promocionar', 'Juan Ramos', '2009-09-16', '2009-08-20', ''),
(36, '110', 'Solicitar catÃ¡logos', 'Eli', '2010-12-31', NULL, NULL),
(37, '110', 'Planificar asistencia', 'Eli', '2010-12-31', NULL, NULL),
(38, '110', 'Recopilar certificados', 'Eli', '2010-12-31', NULL, NULL),
(39, '210', 'Solicitar valoraciones', 'Juan Ramos', NULL, NULL, 'permanente'),
(40, '210', 'Volcar informaciÃ³n sobre la oferta tÃ©cnica', 'Juan Ramos', NULL, NULL, 'permanente'),
(41, '210', 'Archivar correspondencia', 'Juan Ramos', NULL, NULL, 'permanente'),
(42, '310', 'Crear estructura modular', 'Juan Ramos', '2010-12-31', NULL, NULL),
(43, '310', 'Crear mÃ³dulos', 'Juan Ramos', '2010-12-31', NULL, NULL),
(44, '310', 'Validad scripts', 'Juan Ramos', '2010-12-31', NULL, NULL),
(45, '310', 'Definir apariencia final', 'Juan Ramos', '2010-12-31', NULL, NULL);
";
$sql_table_partedetrabajo_data = "
INSERT INTO `partedetrabajo` (`id`, `fecha`, `centrotrabajo`, `empleado`, `h1`, `c1`, `h2`, `c2`, `h3`, `c3`, `h4`, `c4`, `h5`, `c5`, `h6`, `c6`, `h7`, `c7`, `h8`, `c8`, `h9`, `c9`, `h10`, `c10`, `h11`, `c11`, `h12`, `c12`, `h13`, `c13`, `h14`, `c14`, `h15`, `c15`, `h16`, `c16`, `h17`, `c17`, `h18`, `c18`, `h19`, `c19`, `h20`, `c20`, `h21`, `c21`, `h22`, `c22`, `h23`, `c23`, `h24`, `c24`) VALUES
(1, '2011-01-09', 'CentroComercial', 'felipe el hermoso', '07:00:00', 'sin novedad', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', ''),
(2, '2011-01-22', 'centro', 'empleado', '00:00:12', 'sin novedad', '00:00:13', 'sin novedad', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', ''),
(3, '2011-01-22', 'centro', 'empleado', '00:00:12', 'sin novedad', '00:00:13', 'sin novedad', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '', '00:00:00', '');
";
$sql_table_proveedores_data = "
INSERT INTO `proveedores` (`id`, `proveedor`, `estado`, `cif`, `direccion`, `suministro`, `criteriosdeevaluacion`, `datos`, `activo`) VALUES
(1, 'Proveedor-1', 'Aprobado', 'A-98653578', 'DirecciÃ³n de proveedor-1', 'Suministro de proveedor-1', 'Criterios de evaluaciÃ³n de proveedor-1', 'Datos de proveedor-1', 1),
(2, 'Proveedor-2', 'Aprobado', 'B-78524361', 'DirecciÃ³n de proveedor-2', 'Suministro de proveedor-2', 'Criterios de evaluaciÃ³n de proveedor-2', 'Datos de proveedor-2', 1),
(3, 'Proveedor-3', 'Aprobado', '', 'DirecciÃ³n de proveedor-3', 'Suministro de proveedor-3', 'Criterios de evaluaciÃ³n de proveedor-3', 'Datos de proveedor-3', 1),
(4, 'Proveedor-4', 'Aprobado', '', 'DirecciÃ³n de proveedor-4', 'Suministro de proveedor-4', 'Criterios de evaluaciÃ³n de proveedor-4', 'Datos de proveedor-4', 1),
(5, 'Proveedor-5', 'Aprobado', '', 'DirecciÃ³n de proveedor-5', 'Suministro de proveedor-5', 'Criterios de evaluaciÃ³n de proveedor-5', 'Datos de proveedor-5', 1),
(6, 'Proveedor-6', 'Aprobado', 'B-78524365', 'DirecciÃ³n de proveedor-6', 'Suministro de proveedor-6', 'Criterios de evaluaciÃ³n de proveedor-6', 'Datos de proveedor-6', 1),
(7, 'Proveedor-7', 'Aprobado', 'B-78524366', 'DirecciÃ³n de proveedor-7', 'Suministro de proveedor-7', 'Criterios de evaluaciÃ³n de proveedor-7', 'Datos de proveedor-7', 1),
(8, 'Proveedor-8', 'Aprobado', 'B-78524367', 'DirecciÃ³n de proveedor-8', 'Suministro de proveedor-8', 'Criterios de evaluaciÃ³n de proveedor-8', 'Datos de proveedor-8', 1),
(9, 'Proveedor-9', 'Aprobado', 'B-78524368', 'DirecciÃ³n de proveedor-9', 'Suministro de proveedor-9', 'Criterios de evaluaciÃ³n de proveedor-9', 'Datos de proveedor-9', 1),
(10, 'Proveedor-10', 'Aprobado', 'B-78524369', 'DirecciÃ³n de proveedor-10', 'Suministro de proveedor-10', 'Criterios de evaluaciÃ³n de proveedor-10', 'Datos de proveedor-10', 1),
(11, 'Proveedor-11', 'Aprobado', 'B-78524370', 'DirecciÃ³n de proveedor-11', 'Suministro de proveedor-11', 'Criterios de evaluaciÃ³n de proveedor-11', 'Datos de proveedor-11', 1),
(12, 'Proveedor-12', 'Aprobado', 'B-78524371', 'DirecciÃ³n de proveedor-12', 'Suministro de proveedor-12', 'Criterios de evaluaciÃ³n de proveedor-12', 'Datos de proveedor-12', 1),
(13, 'Proveedor-13', 'Aprobado', 'B-78524372', 'DirecciÃ³n de proveedor-13', 'Suministro de proveedor-13', 'Criterios de evaluaciÃ³n de proveedor-13', 'Datos de proveedor-13', 1),
(14, 'Proveedor-14', 'Aprobado', 'B-78524373', 'DirecciÃ³n de proveedor-14', 'Suministro de proveedor-14', 'Criterios de evaluaciÃ³n de proveedor-14', 'Datos de proveedor-14', 1),
(15, 'Proveedor-15', 'Aprobado', 'B-78524374', 'DirecciÃ³n de proveedor-15', 'Suministro de proveedor-15', 'Criterios de evaluaciÃ³n de proveedor-15', 'Datos de proveedor-15', 1),
(16, 'Proveedor-16', 'Aprobado', 'B-78524375', 'DirecciÃ³n de proveedor-16', 'Suministro de proveedor-16', 'Criterios de evaluaciÃ³n de proveedor-16', 'Datos de proveedor-16', 1),
(17, 'Proveedor-17', 'Aprobado', 'B-78524376', 'DirecciÃ³n de proveedor-17', 'Suministro de proveedor-17', 'Criterios de evaluaciÃ³n de proveedor-17', 'Datos de proveedor-17', 1),
(18, 'Proveedor-18', 'Aprobado', 'B-78524377', 'DirecciÃ³n de proveedor-18', 'Suministro de proveedor-18', 'Criterios de evaluaciÃ³n de proveedor-18', 'Datos de proveedor-18', 1),
(19, 'Proveedor-19', 'Aprobado', 'B-78524378', 'DirecciÃ³n de proveedor-19', 'Suministro de proveedor-19', 'Criterios de evaluaciÃ³n de proveedor-19', 'Datos de proveedor-19', 1),
(20, 'Proveedor-20', 'Aprobado', 'B-78524379', 'DirecciÃ³n de proveedor-20', 'Suministro de proveedor-20', 'Criterios de evaluaciÃ³n de proveedor-20', 'Datos de proveedor-20', 1),
(21, 'Proveedor-21', 'Aprobado', 'B-78524380', 'DirecciÃ³n de proveedor-21', 'Suministro de proveedor-21', 'Criterios de evaluaciÃ³n de proveedor-21', 'Datos de proveedor-21', 1),
(25, 'nuevo', 'Aprobado', 'a-41414141', 'direcciÃ³n', 'sum9nistro', 'criterios', 'datos', 1);
";
$sql_table_secciones_data = "
INSERT INTO `secciones` (`id`, `nombre`, `padre`, `lft`, `rgt`) VALUES
(1, 'Documentos', NULL, 1, 42),
(2, 'Calidad', 1, 2, 11),
(3, 'Q_Directivos', 2, 3, 4),
(4, 'Q_Recursos', 2, 5, 6),
(5, 'Q_Operativos', 2, 7, 8),
(6, 'Q_Medici&oacute;n', 2, 9, 10),
(7, 'Medioambiente', 1, 14, 23),
(8, 'M_Directivos', 7, 15, 16),
(9, 'M_Recursos', 7, 17, 18),
(10, 'M_Operativos', 7, 19, 20),
(11, 'M_Medici&oacute;n', 7, 21, 22),
(12, 'PRL', 1, 24, 25),
(13, 'Administrativos', 1, 26, 33),
(14, 'Personalidad & capacidad', 13, 27, 28),
(15, 'Solvencia econ&oacute;mica', 13, 29, 30),
(16, 'Solvencia T&eacute;cnica', 13, 31, 32),
(17, 'Legales', 1, 34, 39),
(18, 'Normas', 17, 35, 36),
(19, 'Otros', 17, 37, 38),
(20, 'Otros docs.', 1, 40, 41),
(21, 'DNV', 1, 12, 13);
";
$sql_table_servicios_data = "
INSERT INTO `servicios` (`id`, `servicio`, `activo`, `urlquery`) VALUES
(1, 'S1 SEVILLA', 1, '../modulares/consultas/inspecciones_serv_id1.php'),
(2, 'S2 SEVILLA', 1, ''),
(3, 'S3 SEVILLA', 1, '../modulares/consultas/inspecciones_serv_id3.php'),
(4, 'S1 HUELVA', 1, '../modulares/consultas/inspecciones_serv_id4.php'),
(5, 'S2 HUELVA', 1, '../modulares/consultas/inspecciones_serv_id5.php'),
(6, 'S3 HUELVA', 1, '../modulares/consultas/inspecciones_serv_id6.php'),
(7, 'S1 CÃ�DIZ', 1, '../modulares/consultas/inspecciones_serv_id7.php'),
(8, 'S2 CÃ�DIZ', 1, '../modulares/consultas/inspecciones_serv_id8.php'),
(9, 'S3 CÃ�DIZ', 0, '../modulares/consultas/inspecciones_serv_id9.php'),
(10, 'S4 CÃ�DIZ', 1, '../modulares/consultas/inspecciones_serv_id10.php'),
(11, 'S1 MÃ�LAGA', 0, '../modulares/consultas/inspecciones_serv_id11.php'),
(12, 'S2 MÃ�LAGA', 1, '../modulares/consultas/inspecciones_serv_id12.php'),
(13, 'S3 MÃ�LAGA', 0, '../modulares/consultas/inspecciones_serv_id13.php'),
(14, 'S4 MÃ�LAGA', 1, '../modulares/consultas/inspecciones_serv_id14.php'),
(15, 'SERVICIO 15', 1, ''),
(16, 'infografia dedicada', 1, '');
";
$sql_table_solicitudes_data = "
INSERT INTO `solicitudes` (`id`, `fecha`, `titulo`, `link`, `comment`, `seccionid`, `clave1`, `nombrecontacto`, `emailcontacto`, `status`, `emailed`) VALUES
(1, '2011-08-29', 'gawrt', 'http://www.textblock.org/Ã±lokefÃ±.png', 'ewf', 3, 'ERF', 'd', 'KSDJFH@JFL.com', 2, 1),
(112, '2011-11-22', 'Prueba', 'http://www.prueba.com', 'Prueba', 3, 'prueba', 'prueba', 'prueba@prueba.com', 2, 1);
";
$sql_table_trabajadores_data = "
INSERT INTO `trabajadores` (`id`, `trabajador`, `imgsrc`, `activo`) VALUES
(1, 'Trabajador1', 'mod/faces/tmp/1.jpg', 1),
(2, 'Trabajador2', 'mod/faces/tmp/2.jpg', 1),
(3, 'Trabajador3', 'mod/faces/tmp/3.jpg', 1),
(4, 'Trabajador4', 'mod/faces/tmp/4.jpg', 0),
(5, 'Trabajador5', 'mod/faces/tmp/5.jpg', 1),
(6, 'Trabajador6', 'mod/faces/tmp/6.jpg', 0),
(7, 'Trabajador7', 'mod/faces/tmp/7.jpg', 1),
(8, 'Trabajador8', 'mod/faces/tmp/8.jpg', 1),
(9, 'Trabajador9', 'mod/faces/tmp/9.jpg', 1),
(10, 'Trabajador10', 'mod/faces/tmp/10.jpg', 1),
(11, 'Trabajador11', 'mod/faces/tmp/11.jpg', 1),
(12, 'Trabajador12', 'mod/faces/tmp/12.jpg', 1),
(13, 'Trabajador13', 'mod/faces/tmp/13.jpg', 1),
(14, 'Trabajador14', 'mod/faces/tmp/14.jpg', 1),
(15, 'Trabajador15', 'mod/faces/tmp/15.jpg', 1),
(16, 'Trabajador16', 'mod/faces/tmp/16.jpg', 0),
(17, 'Trabajador17', 'mod/faces/tmp/17.jpg', 1),
(18, 'Trabajador18', 'mod/faces/tmp/auditor1.png', 1),
(19, 'Trabajador19', 'mod/faces/tmp/auditor2.png', 1),
(20, 'Trabajador20', 'mod/faces/tmp/auditor3.png', 0);
";


$link = mysql_connect($host, $username, $password);
if (!$link) {
   die('No puede conectar porque: ' . mysql_error());
}
echo 'Conectado satisfactoriamente!<br>';

$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
   die ('No se puede usar la BD $database : ' . mysql_error());
}
echo "Conectado a la BD.<br>";

echo "Intentando crear la tabla <b>afectaa</b>:<br>";
@mysql_query($sql_table_afectaa) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>aisgc</b>:<br>";
@mysql_query($sql_table_aisgc) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>areassensibles</b>:<br>";
@mysql_query($sql_table_areassensibles) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>auditores</b>:<br>";
@mysql_query($sql_table_auditores) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>avisos</b>:<br>";
@mysql_query($sql_table_avisos) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>calibraciones</b>:<br>";
@mysql_query($sql_table_calibraciones) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>codigosincidencias</b>:<br>";
@mysql_query($sql_table_codigosincidencias) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>codigosincidenciasinspecciones</b>:<br>";
@mysql_query($sql_table_codigosincidenciasinspecciones) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>controlavisos</b>:<br>";
@mysql_query($sql_table_controlavisos) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>cursos</b>:<br>";
@mysql_query($sql_table_cursos) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>docmanager</b>:<br>";
@mysql_query($sql_table_docmanager) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>enlaces</b>:<br>";
@mysql_query($sql_table_enlaces) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>equiposdemedida</b>:<br>";
@mysql_query($sql_table_equiposdemedida) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>extintores</b>:<br>";
@mysql_query($sql_table_extintores) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>hojasdemejora</b>:<br>";
@mysql_query($sql_table_hojasdemejora) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>horasformacionportrabajador</b>:<br>";
@mysql_query($sql_table_horasformacionportrabajador) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>incidenciasdeproveedor</b>:<br>";
@mysql_query($sql_table_incidenciasdeproveedor) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>incidenciasinspeccion</b>:<br>";
@mysql_query($sql_table_incidenciasinspeccion) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>informeauditoria</b>:<br>";
@mysql_query($sql_table_informeauditoria) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>inspecciones</b>:<br>";
@mysql_query($sql_table_inspecciones) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>inspectores</b>:<br>";
@mysql_query($sql_table_inspectores) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>links</b>:<br>";
@mysql_query($sql_table_links) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>modifdoc</b>:<br>";
@mysql_query($sql_table_modifdoc) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>ncsporarea</b>:<br>";
@mysql_query($sql_table_ncsporarea) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>objetivosdatosgenerales</b>:<br>";
@mysql_query($sql_table_objetivosdatosgenerales) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>objetivosseguimiento</b>:<br>";
@mysql_query($sql_table_objetivosseguimiento) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>partedetrabajo</b>:<br>";
@mysql_query($sql_table_partedetrabajo) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>proveedores</b>:<br>";
@mysql_query($sql_table_proveedores) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>secciones</b>:<br>";
@mysql_query($sql_table_secciones) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>servicios</b>:<br>";
@mysql_query($sql_table_servicios) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>solicitudes</b>:<br>";
@mysql_query($sql_table_solicitudes) or die("Error: " . mysql_error());
echo "Creada!<br>";
echo "Intentando crear la tabla <b>trabajadores</b>:<br>";
@mysql_query($sql_table_trabajadores) or die("Error: " . mysql_error());
echo "Creada!<br>";

echo "Intentando aÃ±adir datos para la tabla afectaa:<br>";
@mysql_query($sql_table_afectaa_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla aisgc:<br>";
@mysql_query($sql_table_aisgc_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla areassensibles:<br>";
@mysql_query($sql_table_areassensibles_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla auditores:<br>";
@mysql_query($sql_table_auditores_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla avisos:<br>";
@mysql_query($sql_table_avisos_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla calibraciones:<br>";
@mysql_query($sql_table_calibraciones_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla codigosincidencias:<br>";
@mysql_query($sql_table_codigosincidencias_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla codigosincidenciasinspecciones:<br>";
@mysql_query($sql_table_codigosincidenciasinspecciones_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla controlavisos:<br>";
@mysql_query($sql_table_controlavisos_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla cursos:<br>";
@mysql_query($sql_table_cursos_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla docmanager:<br>";
@mysql_query($sql_table_docmanager_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla enlaces:<br>";
@mysql_query($sql_table_enlaces_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla equiposdemedida:<br>";
@mysql_query($sql_table_equiposdemedida_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla extintores:<br>";
@mysql_query($sql_table_extintores_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla hojasdemejora:<br>";
@mysql_query($sql_table_hojasdemejora_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla horasformacionportrabajador:<br>";
@mysql_query($sql_table_horasformacionportrabajador_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla incidenciasdeproveedor:<br>";
@mysql_query($sql_table_incidenciasdeproveedor_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla incidenciasinspeccion:<br>";
@mysql_query($sql_table_incidenciasinspeccion_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla informeauditoria:<br>";
@mysql_query($sql_table_informeauditoria_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla inspecciones:<br>";
@mysql_query($sql_table_inspecciones_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla inspectores:<br>";
@mysql_query($sql_table_inspectores_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla links:<br>";
@mysql_query($sql_table_links_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla modifdoc:<br>";
@mysql_query($sql_table_modifdoc_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla ncsporarea:<br>";
@mysql_query($sql_table_ncsporarea_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla objetivosdatosgenerales:<br>";
@mysql_query($sql_table_objetivosdatosgenerales_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla objetivosseguimiento:<br>";
@mysql_query($sql_table_objetivosseguimiento_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla partedetrabajo:<br>";
@mysql_query($sql_table_partedetrabajo_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla proveedores:<br>";
@mysql_query($sql_table_proveedores_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla secciones:<br>";
@mysql_query($sql_table_secciones_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla servicios:<br>";
@mysql_query($sql_table_servicios_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla solicitudes:<br>";
@mysql_query($sql_table_solicitudes_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";
echo "Intentando aÃ±adir datos para la tabla trabajadores:<br>";
@mysql_query($sql_table_trabajadores_data) or die("Error: " . mysql_error());
echo "AÃ±adidos!<br>";


echo "Hemos terminado. Por favor, borre el install.php, y consulte el archivo readme.txt si fuera necesario.";
mysql_close($link);
}
?>
</body>
</html>