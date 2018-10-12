<?php
//include("db.php");

require_once '../../includes/mysql.php';
$db = new MySQL();

if ($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$sql = "delete from enlaces where id='$id'";
mysqli_query($mysqli, "SET NAMES 'utf8'");
mysqli_query($mysqli, $sql);

}
?>