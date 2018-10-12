<?php session_start(); 
if (!isset($_SESSION['lang'])) 
{ 
$_SESSION['lang'] = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
}  
if ($_POST['idioma'] == "en") { 
    unset($_SESSION['lang']); 
    $_SESSION['lang'] = "en";     
} 
elseif ($_POST['idioma'] == "es") { 
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
<?php 
include_once("../includes/mysql.php"); 
$db = new MySQL(); 
 
//Primero hacemos nuestro query 
 
$query="SELECT mes, percent FROM controlavisos order by id"; 
$result=mysqli_query($mysqli, "$query"); 
if (!$result) 
{ 
  echo ("No hay datos para graficas, esta vacia la DB"); 
  exit(); 
} 
 
echo NCS_GRAFICA; 
echo ('<form action="graficapastel.php" method="get">'); 
echo ('<input type=text name="title" size="40">'); 
echo ("<br>"); 
 
//Pero si hay datos los incluiremos en un array, esta bien!! 
 
while ($row = mysqli_fetch_array($result)) 
{ 
   
//Esto es para revisar si esta bien nuestro contenido 
   
  echo '<br>'; 
  echo '<input type=text size="10" name=slice[] value='.$row["percent"].'>'; 
 echo '<input type=text size="50" name=itemName[] value='.$row["mes"].'>'; 
 echo '<br>'; 
} 
echo ("<br>"); 
echo ('<input type=hidden name="action" value="drawChart">'); 
echo ('<input type=submit value="'.NCS_REALIZAR_GRAFICA.'">'); 
echo ("<form>"); 
 
?> 
