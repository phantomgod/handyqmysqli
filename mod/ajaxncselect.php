<html>
<head>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","phpajaxgetnc.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>


<?php
require_once("../includes/mysql.php");
$db = new MySQL();

echo '<form>';
 echo '<select name="users" onchange="showUser(this.value)>';
                echo '<option>...</option>';
                 $sql = "SELECT * FROM hojasdemejora";
                 $sql = mysqli_query($mysqli, $sql);
                 while($row = mysqli_fetch_assoc($sql)) {
                 $row['id'] = htmlentities($row['id']);
                echo '<option value="'.$row[id].'">'.$row[numhoja].'</option>';
                 }        
         echo '</select>';
echo '</form>';
     
?>

<br />
<div id="txtHint"><b>Los datos de la NC se mostrarán aquí</b></div>

</body>
</html>