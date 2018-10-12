<?php 
//require('mysql_connect.php'); 
 
// Find out or base pure referer. 
$ref = $_SERVER['HTTP_REFERER']; 
 
// Split our URL into bits. 
$url = explode("/",$ref); 
 
// Take the 3rd part of the url (the main site) 
$surl = $url[2]; 
 
// Check to see if it contains the www. at the begining 
$found = ereg('\www.',$surl); 
 
if ($found) { 
 
    $url = $surl; 
 
} else { 
 
    $url = 'www.'.$surl; 
 
} 
 
$query = "SELECT website, hits FROM referers WHERE website = '$url'"; 
$result = mysqli_query($mysqli, $query); 
$num = mysqli_num_rows($result); 
     
if ($num == 1) { 
    $site = mysqli_fetch_array($result,  MYSQLI_ASSOC); 
     
    if ($site['website'] != 'www.') { 
     
        if ($site['website'] != 'www.tutorialcode.com') { 
     
            $hits = $site['hits'] + 1; 
            $website = $site['website']; 
             
            $query = "UPDATE referers SET hits = $hits WHERE website = '$website'"; 
            $result = mysqli_query($mysqli, $query); 
         
        } 
    } 
     
} else { 
 
    if (!empty($surl)) { 
        $query = "INSERT INTO referers (website, hits) VALUES ('$url', '1')"; 
        $result = mysqli_query($mysqli, $query); 
    } 
 
} 
 
$query = "SELECT * FROM referers ORDER BY hits DESC LIMIT 10"; // Change the limit to the top XX that you want to show. 
$result = mysqli_query($mysqli, $query); 
 
while ($row = mysqli_fetch_array($result,  MYSQLI_ASSOC)) { 
    echo '<a href="http://'.$row['website'].'">'.$row['website'].'</a> - <b>'.$row['hits'].'</b><br />'; 
} 
?>