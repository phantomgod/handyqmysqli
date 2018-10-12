<?php
ob_start();
session_start();
session_name("lang");
//header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}

switch ($lang) {
  case 'es':
  $lang_file = 'spanish.lang.php';
  break;

  case 'de':
  $lang_file = 'dutch.lang.php';
  break;

  case 'en':
  $lang_file = 'english.lang.php';
  break;

  default:
  $lang_file = 'spanish.lang.php';

}

include_once 'lang/'.$lang_file;
ob_flush();
session_destroy();
?>