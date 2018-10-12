<?php session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
} 

if (!defined('lang')) { 
    define('LANG', 'lang');
}
if (isset($_SESSION['en'])) {
    if ($_POST['lang'] == "en") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "en";    
    }
}

if (isset($_SESSION['es'])) {
    if ($_POST['lang'] == "es") {
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "es";    
    }
}

if (isset($_SESSION['pt'])) {
    if ($_POST['lang'] == "pt") {
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "pt";    
    }
}
    
if (isset($_SESSION['dutch'])) {
    if ($_POST['lang'] == "dutch") {
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "dutch";    
    }
}

if (isset($_SESSION['it'])) {
    if ($_POST['lang'] == "it") {
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "it";    
    }
}


if (isset($_SESSION['cat'])) {
    if ($_POST['lang'] == "cat") {
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "cat";    
    }
}


if (isset($_SESSION['vasco'])) {
    if ($_POST['lang'] == "vasco") {
    unset($_SESSION['lang']);
    $_SESSION['lang'] = "vasco";    
    }
}

    switch($_SESSION['lang']) {
    case "en":
        include '../../lang/english.lang.php';
        break;
    case "es":
        include '../../lang/spanish.lang.php';
        break;
    case "pt":
        include '../../lang/portugues.lang.php';
        break;        
    case "dutch":
        include '../../lang/dutch.lang.php';
        break;
    case "it":
        include '../../lang/italian.lang.php';
        break;    
    case "cat":
        include '../../lang/catalan.lang.php';
        break;
    case "vasco":
        include '../../lang/vasco.lang.php';
        break;
    default:
        include '../../lang/spanish.lang.php';
        break;
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- This is a pagination script using Jquery, Ajax and PHP
     The enhancements done in this script pagination with first,last, previous, next buttons -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8">
        <title>Live Edit, Pagination and Delete Records with Jquery</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
         <script type="text/javascript" src="EditDeletePage.js"></script>
         <link type="text/css" rel="stylesheet" href="../../includes/style.css" media="screen" />

        
        <style type="text/css">
            body{
                width: 1000px;
                margin: 0 auto;
                padding: 0;
                font-family:Arial, Helvetica, sans-serif
            }
            <!--#loading{
                width: 100%;
                position: absolute;
                top: 35px;
                left: 650px;
                margin-top:0px;
            }
            #container .pagination ul li.inactive,
            #container .pagination ul li.inactive:hover{
                background-color:#ededed;
                color:#bababa;
                border:1px solid #bababa;
                cursor: default;
            }
            #container .data ul li{
                list-style: none;
                font-family: verdana;
                margin: 5px 0 5px 0;
                color: #000;
                font-size: 13px;
            }

            #container .pagination{
                width: 800px;
                height: 25px;
            }
            #container .pagination ul li{
                list-style: none;
                float: left;
                border: 1px solid #006699;
                padding: 2px 6px 2px 6px;
                margin: 0 3px 0 3px;
                font-family: arial;
                font-size: 14px;
                color: #006699;
                font-weight: bold;
                background-color: #f2f2f2;
            }
            #container .pagination ul li:hover{
                color: #fff;
                background-color: #006699;
                cursor: pointer;
            }
            .go_button
            {
            background-color:#f2f2f2;border:1px solid #006699;color:#cc0000;padding:2px 6px 2px 6px;cursor:pointer;position:absolute;margin-top:-1px;
            }
            .total
            {
            float:right;font-family:arial;color:#999;
            }
            .editbox
            {
            display:none;
            
            }
            td, th
            {
            width:20%;
            text-align:left;;
            padding:5px;
            }
            .editbox
            {
            padding:4px;
            
            }-->

            
            

        </style>

    </head>
    <body>
    



        
        
        
<body> 

<h1><?php echo EDITAR_BORRAR_DOCUMENTO; ?></h1> 
<!--Tutorial Link <a href="http://www.9lessons.info/">Click Here</a> with database ajax connection.<br><br> -->

<div id="loading"></div>
    
<div id="container"></div>

 
<div style="margin-top:30px"> 
<span style="color:#cc0000">Note</span>: Demo no database connectivity 
</div> 

        
    </body>
</html>
