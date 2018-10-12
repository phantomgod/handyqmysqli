<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 

<?php
$query_pag_data = "SELECT id, titulo, revision_num, modificacion, capapart, fechamodificacion from modifdoc LIMIT $start, $per_page";
$result_pag_data = mysqli_query($mysqli,$query_pag_data) or die('MySql Error' . mysql_error());
$tablehead="<tr><th>Title</th><th>Rev. nº</th><th>Modif</th><th>Capít</th><th>Date</th></tr>";
while ($row = mysqli_fetch_array($result_pag_data)) 
{

$id=$row['id'];
$titulo=($row['titulo']);
$revision_num=htmlentities($row['revision_num']);
$modificacion=htmlentities($row['modificacion']);
$capapart=htmlentities($row['capapart']); 
$fechamodificacion=($row['fechamodificacion']); 


@$tabledata.="<tr id='$id' class='edit_tr'>

<td class='edit_td' >
<span id='one_$id' class='text'>$titulo</span>
<input type='text' value='$titulo' class='editbox' id='one_input_$id' />
</td>

<td class='edit_td'>
<span id='two_$id' class='text'>$revision_num</span> 
<input type='text' value='$revision_num' class='editbox' id='two_input_$id'/>
</td>

<td class='edit_td' >
<span id='three_$id' class='text'>$modificacion</span> 
<input type='text' value='$modificacion' class='editbox' id='three_input_$id'/>
</td>

<td class='edit_td' >
<span id='four_$id' class='text'>$capapart</span> 
<input type='text' value='$capapart' class='editbox' id='four_input_$id'/>
</td>

<td class='edit_td' >
<span id='five_$id' class='text'>$fechamodificacion</span> 
<input type='text' value='$fechamodificacion' class='editbox' id='five_input_$id'/>
</td>

<td><a href='#' class='delete' id='$id'> X </a></td>

</tr>";
}

$finaldata = "<table class='print'>". $tablehead . $tabledata . "</table>"; // Content for Data


/* Total Count */
$query_pag_num = "SELECT COUNT(*) AS count FROM modifdoc";
$result_pag_num = mysqli_query($mysqli,$query_pag_num);
$row = mysqli_fetch_array($result_pag_num);
$count = $row['count'];
$no_of_paginations = ceil($count / $per_page);

?>