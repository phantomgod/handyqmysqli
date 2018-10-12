<?php  include('includes/configPDO.php');

$STM = $dbh->prepare("
   select column_name from information_schema.columns where table_name='members'
");

$STM->execute();
foreach( $STM as $row ) {
   echo "$row[0]<br /> ";
}

$query = $dbh->prepare('show tables');
$query->execute();

while($rows = $query->fetch(PDO::FETCH_ASSOC)){
     var_dump($rows);
	 echo "<br>";
}
?>