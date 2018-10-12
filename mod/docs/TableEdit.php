<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#lastb_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
$("#lastb_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var lastb=$("#lastb_input_"+ID).val();
var dataString = 'id='+ ID +'&titulo='+first+'&link='+last+'&comment='+lastb;
$("#first_"+ID).html('<img src="load.gif" />'); // Loading image

if (first.length>0&& last.length>0&& lastb.length>0)
{

$.ajax({
type: "POST",
url: "table_edit_ajax.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
$("#lastb_"+ID).html(lastb);
}
});
}
else
{
alert('Enter something!!.');
}

});

// Edit input box click action
$(".editbox").mouseup(function()
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>

<style>
.editbox
{
display:none
}
td
{
padding:7px;
}
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.editbox
{
font-size:14px;
width:270px;
background-color:#ffffcc;

border:solid 1px #000;
padding:4px;
}
.edit_tr:hover
{
background:url(edit.png) right no-repeat #80C8E5;
cursor:pointer;
}


th
{
font-weight:bold;
text-align:left;
padding:4px;
}
.head
{
background-color:#333;
color:#FFFFFF

}
 .shade
{
box-shadow:0px 0px 18px #000000;
-moz-box-shadow:0px 0px 18px #000000;
-webkit-box-shadow:0px 0px 18px #000000;
border-radius: 8px;-moz-border-radius: 8px; -webkit-border-radius: 8px;
}

<!--/*Tabla print*/

/* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xx  CSS Table Gallery            xx
xx  Author: Mauricio Samy Silva  xx
xx  URL: http://www.maujor.com/  xx
xx  Country: Brazil              xx
xx  Date: 2005-09-28             xx
xx  xxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/-->
table.print{
    font: 0.8em Arial, Helvetica, sans-serif;
    border-collapse:collapse;
    background:transparent;
    color:#000;
    width: 80%;
    box-shadow:0px 0px 18px #000000;
    -moz-box-shadow:0px 0px 18px #000000;
    -webkit-box-shadow:0px 0px 18px #000000;
    border-radius: 8px;-moz-border-radius: 8px; -webkit-border-radius: 5px;
        }
#itsthetable > table {width:99%;}
#itsthetable {
    height:350px;
    overflow:auto;
    background:#c6dbff;
    padding-bottom:3px;
    }
caption {
    height:52px;
    font-size:3em;
    color:#000;
    text-align: left;
    background:#c6dbff url("../images/tablaico.png") right top  no-repeat;
    }
caption:hover{
    font-size:3em;
    color:#333333;
    text-align: left;
    background: #E1ECFF url("../images/tablaico2.png") right top no-repeat;
    }
th {font-weight:900; color:#2e6c9e; font-size:1.05em; text-transform: uppercase;}
tr th, tr td {border-bottom:1px solid #ccc;}
table a, table a:link {text-decoration:none; color:#666;}
table a:visited {color:#999;}
table a:hover {color:#f00; background:#fafafa; display:block;}
tbody tr th  {
    width:80px;
    vertical-align:top;
    padding-left: 10px;
    text-align: left;
    background:transparent url("../images/det1gmail.png") left top no-repeat;
    }
tbody tr td  {
    height:1.7em;
    vertical-align:top;
    text-align: left;
    padding-left:10px;
    background:transparent url("../images/det2gmail.png") left top no-repeat;
    }
thead { background:#fff;}
tr th + td + td + td + td {
    width:60px;
    padding-left:20px;
    font-size:0.9em;
    background:transparent url("http://www.maujor.com/temp/chris/det3gmail.gif") 0 0  no-repeat;
    }
tr.odd th + td + td + td + td {
    width:60px;
    padding-left:20px;
    font-size:0.9em;
    background:none;
    }
tfoot th, tfoot td {
    height:105px;
    font-weight:bold;
    height:2.0em;
    padding-left:10px;
    vertical-align: top;
    }
tfoot th{
    height:102px;
    background:#c6dbff url("footerth.gif") right top no-repeat;
    }
tfoot td {height:102px;
    background:#c6dbff url("footertd.gif") left top no-repeat;
    }


<!--/* fin de la tabla print*/-->

</style>



</head>


<table class="print">
<?php
include('db.php');
$sql=mysql_query("select * from enlaces");
while ($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$titulo=$row['titulo'];
$link=$row['link'];
$comment=$row['comment'];
?>
<tr id="<?php echo $id; ?>" class="edit_tr">

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $titulo; ?></span>
<input type="text" value="<?php echo $titulo; ?>" class="editbox" id="first_input_<?php echo $id; ?>">
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $link; ?></span>
<input type="text" value="<?php echo $link; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="lastb_<?php echo $id; ?>" class="text"><?php echo $comment; ?></span>

<!--<textarea type="text" value="<?php echo $comment; ?>" class="editbox" id="lastb_input_<?php echo $id; ?>"/></textarea>-->
<input type="text" value="<?php echo $comment; ?>" class="editbox" id="lastb_input_<?php echo $id; ?>"/>
</td>


</tr>
<?php
}
?>
</table>