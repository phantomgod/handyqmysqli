<?php
/**include("db.php");*/
require_once '../../includes/mysql.php';
$db = new MySQL();
if ($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);

$titulo=mysql_escape_String($_POST['titulo']);
$revision_num=mysql_escape_String($_POST['revision_num']);
$modificacion=mysql_escape_String($_POST['modificacion']);
$capapart=mysql_escape_String($_POST['capapart']);
$fechamodificacion=mysql_escape_String($_POST['fechamodificacion']);
$sql = "update modifdoc set titulo='$titulo', revision_num='$revision_num', modificacion='$modificacion', capapart='$capapart', fechamodificacion='$fechamodificacion' where id='$id'";
mysql_query($sql);
mysql_query ("SET NAMES 'utf8'");

}
?>