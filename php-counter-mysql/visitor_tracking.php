<?php 
require_once('visitors_connections.php');//the file with connection code and functions 
//get the required data 

@$visitor_ip = GetHostByName($REMOTE_ADDR); 
$visitor_browser = getBrowserType(); 
$visitor_hour = date("h"); 
$visitor_minute = date("i"); 
$visitor_day = date("d"); 
$visitor_date  = date("Y-m-d");
$visitor_page  = @$_SERVER[HTTP_REFERER];
$visitor_month = date("m"); 
$visitor_year = date("Y"); 
@$visitor_refferer = GetHostByName($HTTP_REFERER); 
$visited_page = selfURL(); 

//write the required data to database 
((bool)mysqli_query( $visitors, "USE $database_visitors")); 
$sql = "INSERT INTO visitors_table (visitor_ip, visitor_browser, visitor_hour, 
 visitor_minute, visitor_date, visitor_day, visitor_month, visitor_year,  
 visitor_refferer, visitor_page) VALUES ('$visitor_ip', '$visitor_browser',  
 '$visitor_hour', '$visitor_minute', '$visitor_date', '$visitor_day', '$visitor_month',  
 '$visitor_year', '$visitor_refferer', '$visitor_page')"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or trigger_error(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)),E_USER_ERROR);