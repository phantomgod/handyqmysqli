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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
 <link type="text/css" rel="stylesheet" href="../../includes/style.css" media="screen" />

<script>
$(document).ready(function() {
$("tr:nth-child(even)").addClass("even");
 });
</script>

<?php
$query_pag_data = "SELECT id,titulo,link,comment,clave1 from enlaces LIMIT $start, $per_page";
mysql_query ("SET NAMES 'utf8'");
$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());
$finaldata = "";
$tablehead="<tr><th>Título;</th><th>Link</th><th>Comment;</th><th>Distribuido;</th><th>Delete;</th></tr>";
while ($row = mysql_fetch_array($result_pag_data)) 
{

$id=$row['id'];
$titulo=htmlentities($row['titulo']);
$link=htmlentities($row['link']);
$comment=htmlentities($row['comment']);
$clave1=htmlentities($row['clave1']); 

$tabledata.="<tr id='$id' class='edit_tr'>

<td class='edit_td' >
<span id='one_$id' class='text'>$titulo</span>
<input type='text' value='$titulo' class='editbox' id='one_input_$id' />
</td>

<td class='edit_td' >
<span id='two_$id' class='text'>$link</span> 
<input type='text' value='$link' class='editbox2' id='two_input_$id'/>
</td>

<td class='edit_td' >
<span id='three_$id' class='text'>$comment !</span> 
<input type='text' value='$comment' class='editbox' id='three_input_$id'/>
</td>

<td class='edit_td' >
<span id='four_$id' class='text'>$clave1</span> 
<input type='text' value='$clave1' class='editbox' id='four_input_$id'/>
</td>

<td><a href='#' class='delete' id='$id'> X </a></td>

</tr>";
}
$finaldata = "<table class='print'>". $tablehead . $tabledata . "</table>"; // Content for Data


/* Total Count */
$query_pag_num = "SELECT COUNT(*) AS count FROM enlaces";
$result_pag_num = mysql_query($query_pag_num);
$row = mysql_fetch_array($result_pag_num);
$count = $row['count'];
$no_of_paginations = ceil($count / $per_page);




?>