<?php
/**include("db.php");*/
require_once '../../includes/mysqli.php';
$db = new MySQL();
if ($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);

$titulo=mysql_escape_String($_POST['titulo']);
$link=mysql_escape_String($_POST['link']);
$comment=mysql_escape_String($_POST['comment']);
$clave1=mysql_escape_String($_POST['clave1']);
$sql = "update enlaces set titulo='$titulo',link='$link',comment='$comment',clave1='$clave1' where id='$id'";
mysqli_query($mysqli, $sql);
mysqli_query($mysqli, "SET NAMES 'utf8'");

}
?>