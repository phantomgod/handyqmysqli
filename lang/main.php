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
        include('lang/english.lang.php');
        break;
    case "es":
        include('lang/spanish.lang.php');
        break;
    default:
        include('lang/english.lang.php');
        break;
}
?>