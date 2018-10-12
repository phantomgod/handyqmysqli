<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf8"> 
<link rel="stylesheet" type="text/css" href="/modulares/style.css">  
<title>Buscando ...</title> 
  
</head> 
<body style="background-color:transparent "> 
<?php  
// Incluimos el archivo que habremos  
// descomprimido y subido a la misma  
// carpeta que el buscador  
include 'buscador.inc.docsadmin.php';  
// Creamos el formulario con la caja  
// de búsqueda y un botón, el form  
// debe ser con metodo GET y la caja  
// debe ser con name q  
?> 

<form method="GET"><input type="text" name="q" value="

<?php
if (isset($_GET['q'])) { 
echo urldecode($_GET['q']);
}
?>">

<input type="submit" value="<?php echo BUSCAR; ?>"><br> 

<?php  
// Miramos si se ha enviado el formulario  
if (isset($_GET['q'])) {  
// Conectamos a MySQL  
//$db=mysql_connect('localhost','root','root'); 
// Seleccionamos la base de datos 
//mysql_select_db('copt',$db); 
 
include("../includes/mysql.php"); 
$db = new MySQL(); 
 
 
// Este array contiene los campos de la 
// tabla que queremos comparar con la  
// palabra clave  
$aCampos = array ('linkname','link'); 
// Realizamos la búsqueda indicando la  
// tabla la base de datos donde  
// buscaremos  
buscar('admindocs',$aCampos,10); 
// Mostramos los resultados usando los  
// campos titulo, texto e id de la  
// tabla papers y enlazando con la  
// direccion:  
// http://miweb.com/articulo.php?num=ID  
// donde ID es el campo id de la tabla  
mostrar('linkname','linkid','link','http://docs.google.com/viewer?url=',10); 
// Paginamos los resultados  
paginar(10);  
}  
?> 
</form> 
</body> 
</html>