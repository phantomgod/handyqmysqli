<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script>
$(document).ready(function() {
$("tr:nth-child(even)").addClass("even");
 });
</script>
<?php
$query_pag_data = "SELECT id,titulo,link,comment,clave1 from enlaces LIMIT $start, $per_page";
$result_pag_data = mysqli_query($mysqli, $query_pag_data) or die('MySql Error' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$tablehead="<tr><th>Título</th><th>Link</th><th>Comment</th><th>Distribuido</th><th>Delete</th></tr>";
while ($row = mysqli_fetch_array($result_pag_data)) 
{

$id=$row['id'];
$titulo=($row['titulo']);
$link=htmlentities($row['link']);
$comment=($row['comment']);
$clave1=htmlentities($row['clave1']); 


@$tabledata.="<tr id='$id' class='edit_tr'>

<td class='edit_td' >
<span id='one_$id' class='text'>$titulo</span>
<input type='text' value='$titulo' class='editbox' id='one_input_$id' />
</td>

<td class='edit_td' >
<span id='two_$id' class='text'>$link</span> 
<input type='text' value='$link' class='editbox2' id='two_input_$id'/>
</td>

<td class='edit_td' >
<span id='three_$id' class='text'>$comment</span> 
<input type='text' value='$comment' class='editbox' id='three_input_$id'/>
</td>

<td class='edit_td' >
<span id='four_$id' class='text'>$clave1</span> 
<input type='text' value='$clave1' class='editbox' id='four_input_$id'/>
</td>

<td><a href='#' class='delete' id='$id'> X </a></td>

</tr>";
}


$finaldata = "<table class='print' width='100%'>". $tablehead . $tabledata . "</table>"; // Content for Data


/* Total Count */
$query_pag_num = "SELECT COUNT(*) AS count FROM enlaces";
$result_pag_num = mysqli_query($mysqli, $query_pag_num);
$row = mysqli_fetch_array($result_pag_num);
$count = $row['count'];
$no_of_paginations = ceil($count / $per_page);

?>