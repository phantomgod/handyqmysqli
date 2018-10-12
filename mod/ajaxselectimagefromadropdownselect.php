<title>AJAX Example</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="JavaScript">
var submit_ok = false;
var timeout = 10;
var xmlHttp;

if (!XMLHttpRequest) {
        window.XMLHttpRequest = function() {
                return new ActiveXObject('Microsoft.XMLHTTP');
        }
}

function getImage(image_id) {
        if (image_id.length==0) {
                document.getElementById("Image").innerHTML="";
                return;
        }
        xmlHttp=GetXmlHttpObject();
        if (xmlHttp==null) {
                alert ("Your browser does not support AJAX!");
                return;
        }
        var url="./getImage.php";
        url=url+"?id="+image_id;
        xmlHttp.onreadystatechange=stateChanged;
        xmlHttp.open("GET",url,true);
        xmlHttp.send(null);
}

function stateChanged() {
        if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
                document.getElementById("Image").innerHTML=xmlHttp.responseText;
        }
}
function GetXmlHttpObject() {
        var xmlHttp=null;
        try {
                // Firefox, Opera 8.0+, Safari
                xmlHttp=new XMLHttpRequest();
        } catch (e) {
                // Internet Explorer
                try {
                        xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
        }
        return xmlHttp;
}
</script>
</head>
<body>

Put the dropdown select menu here.
<?php

include '../lang/spanish.lang.php';
require_once '../includes/mysql.php';
$db = new MySQL();
echo '<select name="codigo_incidencia_add" id="Image">'; 
                            echo '<option>...</option>';         
                            $sql = "SELECT * FROM trabajadores"; 
                            $sql = mysql_query($sql);
                 
                       if (!defined('trabajador')) { 
                            define('TRABAJADOR', 'trabajador');
                            }
                       if (!defined('imgsrc')) { 
                            define('IMGSRC', 'imgsrc');
                            }    
                           
        while ($row = mysql_fetch_assoc($sql)) { 

                      echo '<option value="'.$row[TRABAJADOR].'">'.$row[IMGSRC].'</option>'; 
        }         
                            echo '</select>'; 
?>
<span class="message" id="Image"></span>
</body>
</html>