<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ToolTip</title>
<link href="../includes/style.css" rel="stylesheet" type="text/css" />
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
mysqli_query($mysqli, "SET NAMES 'utf8'");

$result = mysqli_query($mysqli, "SELECT * FROM aisgc");

while ($row = mysqli_fetch_array($result))
  {
echo "<br /><a href=# alt=Image Tooltip rel=tooltip content='    <table class=print><tr>
                                                        <th>Fecha:</th><th>Nº auditoría:</th><th colspan=2>auditor1:</th></tr>
                                                        <tr><td>$row[fecha]</td><td>$row[ai]</td><td colspan=2>$row[auditor]</td></tr>
                                                        <tr><th colspan=2>obstrat:</th><th colspan=2>obscal:</th></tr>
                                                        <tr><td colspan=2>$row[obstrat]</td><td colspan=2>$row[obscal]</td></tr>
                                                        <tr><th colspan=2>obsalmac:</th><th>obscompras:</th></tr>
                                                        <tr><td colspan=2>$row[obsalmac]</td><td colspan=2>$row[obscompras]</td></tr>
                                                        <tr><th colspan=2>obsformac:</th><th colspan=2>obsdocum:</th></tr>
                                                        <tr><td colspan=2>$row[obsformac]</td><td colspan=2>$row[obsdocum]</td></tr>
                                                        <tr><th colspan=2>obslegio:</th></tr>
                                                        <tr><td colspan=2>$row[obslegio]</td></tr></table>'>$row[ai]</a><br>";
  }

((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);
?>
</div>
</body>
</html>
