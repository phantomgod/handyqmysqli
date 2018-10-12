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
switch($_SESSION['lang']) {
    case "en":
        include('../lang/english.lang.php');
        break;
    case "es":
        include('../lang/spanish.lang.php');
        break;
    default:
        include('../lang/english.lang.php');
        break;
}
?>
<html>
<head>

<style type="text/css">
	<!--
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			color: #FFFFFF;
			background-color: #0b173b;
		}
a:link {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	font-size: 12px;
}

a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #d5fcff;
}

a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #e1e2e8;
}

a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990099;
}

#cab11 {
 top:20px;
 left:48%;
 position: absolute;
 width:20px;

}

#cab12 {
 top:20px;
 left:52%;
 position: absolute;
 width:20px;

}

#cab13 {
 top:20px;
 left:56%;
 position: absolute;
 width:20px;

}

#cab14 {
 top:20px;
 left:60%;
 position: absolute;
 width:20px;

}


#cab15 {
 top:20px;
 left:64%;
 position: absolute;
 width:20px;

}


#cab16 {
 top:20px;
 left:68%;
 position: absolute;
 width:20px;

}


#cab17 {
 top:20px;
 left:72%;
 position: absolute;
 width:20px;

}


#cab18 {
 top:20px;
 left:76%;
 position: absolute;
 width:20px;

}


#cab19 {
 top:20px;
 left:80%;
 position: absolute;
 width:20px;

}


#cab20 {
 top:20px;
 left:84%;
 position: absolute;
 width:20px;

}
			
-->
</style>

</head>
<body>
<? 
// Incluimos el archivo que habremos 
// descomprimido y subido a la misma 
// carpeta que el buscador 
include 'buscador.inc.inspecciones.php'; 
// Creamos el formulario con la caja 
// de búsqueda y un botón, el form 
// debe ser con metodo GET y la caja 
// debe ser con name q 
?> 
<form method="GET"><input type="text" name="q" value="<?=urldecode($_GET['q'])?>"> <input type="submit" value="Buscar!"><?php include('../acciones/acciones_inspecciones_frame.php'); ?><br> 
<? 
// Miramos si se ha enviado el formulario 
if(isset($_GET['q'])){ 
// Conectamos a MySQL 
//$db=mysql_connect('localhost','root','root');
// Seleccionamos la base de datos
//mysql_select_db('copt',$db);

include("../includes/mysql.php");
$db = new MySQL();


// Este array contiene los campos de la
// tabla que queremos comparar con la 
// palabra clave 
$aCampos = array ('inspector','fecha','servicio','vigilante','incidencia','servicio2','vigilante2','incidencia2','servicio3','vigilante3','incidencia3','servicio4','vigilante4','incidencia4','servicio5','vigilante5','incidencia5','servicio6','vigilante6','incidencia6','servicio7','vigilante7','incidencia7');
// Realizamos la búsqueda indicando la 
// tabla la base de datos donde 
// buscaremos 
buscar('inspecciones',$aCampos,10);
// Mostramos los resultados usando los 
// campos titulo, texto e id de la 
// tabla papers y enlazando con la 
// direccion: 
// http://miweb.com/articulo.php?num=ID 
// donde ID es el campo id de la tabla 
mostrar('fecha','servicio','Id','../index2.php?seccion=inspecciones_print&aktion=print_id&id=',10);
// Paginamos los resultados 
paginar(10); 
} 
?>
</body>
</html> 
