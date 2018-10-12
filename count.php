<?php
require_once 'includes/mysql.php';
$db = new MySQL();

$result = mysql_query('select count(*) AS count from ( SELECT `enlaces`.`id` id1 , `enlaces`.`link` , modifdoc. * FROM enlaces, modifdoc WHERE enlaces.titulo = modifdoc.titulo ORDER BY `enlaces`.`titulo` , `modifdoc`.`revision_num` ASC ) m');

while($row = mysql_fetch_array($result))
{
    echo $row['0'];
}

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))
{
    echo $row['0'];
}