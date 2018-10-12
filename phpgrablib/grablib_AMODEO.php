<?php

$db = ($mysqli = mysqli_connect("localhost",  "biovazqu_avazque",  "mip@@@#5940"));
((bool)mysqli_query($db, "USE biovazqu_avazquez"));
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  include("../phpgrablib/phpgraphlib.php");
  $graph=new PHPGraphLib(550,350);
// Perform queries
 $dataArray=array();

 //get data from database
 $sql = mysqli_query("SELECT horas, COUNT(*) AS 'count'  FROM `cursos` GROUP BY horas'");
 $result = mysqli_query($db, $sql) or die('Query failed: ' . mysqli_error());
 if ($result) {
   while ($row = mysql_fetch_assoc($result)) {
       $horas=$row["horas"];
        $count=$row["count"];
       //add to data areray
       $dataArray[$horas]=$count;
   }
 }

 //configure graph
 $graph->addData($dataArray);
 $graph->setTitle("Horas de AMODEO");
 $graph->setGradient("lime", "green");
 $graph->setBarOutlineColor("black");
 $graph->createGraph();

 echo "$row[horas]";
mysqli_close($db);

 echo "<html>
 <h3>This is where I want to display my graph</h3>
 <img src='../phpgrablib/grablib_AMODEO.php' />
 </html>";
 ?>
