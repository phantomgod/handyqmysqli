<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>ToolTip</title> 
<link href="../../handyq/includes/style.css" rel="stylesheet" type="text/css" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script> 
<script> 
$(document).ready(function() { 
 
$('[rel=tooltip]').bind('mouseover', function() { 
       
         
     
 if ($(this).hasClass('ajax')) { 
    var ajax = $(this).attr('ajax');     
             
  $.get(ajax, 
  function(theMessage) { 
$('<div class="tooltip">'  + theMessage + '</div>').appendTo('body').fadeIn('fast');}); 
 
  
 } else { 
             
        var theMessage = $(this).attr('content'); 
        $('<div class="tooltip">' + theMessage + '</div>').appendTo('body').fadeIn('fast'); 
        } 
         
        $(this).bind('mousemove', function(e) { 
            $('div.tooltip').css({ 
                'top': e.pageY - ($('div.tooltip').height() / 2) - 5, 
                'left': e.pageX + 15 
            }); 
        }); 
    }).bind('mouseout', function() { 
        $('div.tooltip').fadeOut('fast', function() { 
            $(this).remove(); 
        }); 
    }); 
                           }); 
 
</script> 
 
 
</head> 
 
<body> 
<div id="wrapper"> 
<?php 
$con = ($mysqli = mysqli_connect("localhost", "root", "")); 
if (!$con) 
  { 
  die('Could not connect: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
  } 
 
((bool)mysqli_query( $con, "USE donkey")); 
 
$result = mysqli_query($mysqli, "SELECT * FROM aisgc"); 
 
while ($row = mysqli_fetch_array($result)) 
  { 
echo '<a href=# alt=Image Tooltip rel=tooltip content="<!--<div id=con><img src='.$row['images'].' class=tooltip-image/></div>--> 
                                                       <table><caption></caption><thead></thead> 
                                                       <tr> 
                                                       <th>Fecha:</th><td>'.$row['fecha'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>Nº auditoría:</th><td>'.$row['ai'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>auditor1:</th><td>'.$row['auditor1'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>obstrat:</th><td>'.$row['obstrat'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>obscal:</th><td>'.$row['obscal'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>obsalmac:</th><td>'.$row['obsalmac'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>obscompras:</th><td>'.$row['obscompras'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>obsformac:</th><td>'.$row['obsformac'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>obsdocum:</th><td>'.$row['obsdocum'].'</td> 
                                                       </tr> 
                                                       <tr> 
                                                       <th>obslegio:</th><td>'.$row['obslegio'].'</td>">'.$row['ai'].'</a>'.'<br> 
                                                       </tr></tbody></table>'; 
  } 
 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
?>  
</div> 
</body> 
</html> 
