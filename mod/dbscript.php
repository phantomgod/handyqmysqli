<?php 
$sqlFileToExecute = 'sqlscript.sql'; 
$hostname = 'localhost'; 
$db_user = 'biovazqu_avazque'; 
$db_password = 'mip@@@#5940'; 
$link = ($mysqli = mysqli_connect($hostname,  $db_user,  $db_password)); 
if (!$link) { 
  die ("MySQL Connection error"); 
} 
 
$database_name = 'biovazqu_avazquez'; 
((bool)mysqli_query( $link, "USE $database_name")) or die ("Wrong MySQL Database"); 
 
// read the sql file 
$f = fopen($sqlFileToExecute,"r+"); 
$sqlFile = fread($f, filesize($sqlFileToExecute)); 
$sqlArray = explode(';',$sqlFile); 
foreach ($sqlArray as $stmt) { 
  if (strlen($stmt)>3 && substr(ltrim($stmt),0,2)!='/*') { 
    $result = mysqli_query($mysqli, $stmt); 
    if (!$result) { 
      $sqlErrorCode = ((is_object($mysqli)) ? mysqli_errno($mysqli) : (($___mysqli_res = mysqli_connect_errno()) ? $___mysqli_res : false)); 
      $sqlErrorText = ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
      $sqlStmt = $stmt; 
      break; 
    } 
  } 
} 
$sqlErrorCode = "";
if ($sqlErrorCode == 0) { 
  echo "Script is executed succesfully!"; 
} else { 
  echo "An error occured during installation!<br/>"; 
  echo "Error code: $sqlErrorCode<br/>"; 
  echo "Error text: $sqlErrorText<br/>"; 
  echo "Statement:<br/> $sqlStmt<br/>"; 
} 
 
?>