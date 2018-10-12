<?php
session_start();
$session_id='1'; //$session id
include('../../includes/mysqli.php');

?>

<!DOCTYPE html">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript" src="../mod/ajaximage/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../mod/ajaximage/scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
        
            $('#photoimg').live('change', function()            { 
                       $("#preview").html('');
                $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
            $("#imageform").ajaxForm({
                        target: '#preview'
        }).submit();
        
            });
        }); 
</script>

<style type="text/css">

.preview
{
width:400px;
float: left;
border:solid 1px #dedede;
padding:10px;
}
#preview
{

color:#cc0000;
font-size:12px;
text-indent:25px;
}

.div1 {
    height: 50%;
    width: 100px;
    padding: 10px 10px;
    font-family: Verdana;
    color: rgb(255,255,255);
    font-size: 12px;
    font-weight: bold;
    position: absolute;
    top: -10px;
    left: 500px;
}
</style>


</head>
<body>
<br />

<div style="width:250px">

<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
<input type="file" class="btn btn-success" id="photoimg" name="photoimg">
</form>
<br />
Suba una imagen, en el caso de añadir un nuevo perfil, <br /> o actualizarlo.
<div id='preview'>
</div>
<br /><br />

<div class='div1'>
<br /><br />
<img src ="../mod/ajaximage/uploads/person_bordered_xxx.png" width="150px">
</div>


</div>
</body>
</html>