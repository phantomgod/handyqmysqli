<?php
//include("db.php");

require_once '../../includes/mysql.php';
$db = new MySQL();

if ($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$sql = "delete from modifdoc where id='$id'";
mysql_query ("SET NAMES 'utf8'");
mysql_query($sql);

}
?>