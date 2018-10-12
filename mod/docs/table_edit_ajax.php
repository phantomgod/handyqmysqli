<?php
include("db.php");
if ($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$titulo=mysql_escape_String($_POST['titulo']);
$link=mysql_escape_String($_POST['link']);
$comment=mysql_escape_String($_POST['comment']);

$sql = "update enlaces set titulo='$titulo',link='$link',comment='$comment' where id='$id'";
mysql_query($sql);
}
?>