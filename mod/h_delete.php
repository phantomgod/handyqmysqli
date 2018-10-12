<?php
include("includes/mysql.php");
$db = new MySQL();

error_reporting(4);


$sql="SELECT * FROM avisos";
$result=mysqli_query($mysqli, $sql);
$count=mysqli_num_rows($result);
?>
<table>
<tr>
<td><form name="form1" method="post" action="">
<table>
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4" bgcolor="#FFFFFF"><strong>Delete multiple rows in mysql</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Fecha</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Comunica</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Comentarios</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result,  MYSQLI_ASSOC)){
?>
<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" Id="checkbox[]" value="<? echo $rows['Id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['fecha']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['comunicado_por']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['comentarios']; ?></td>
</tr>
<?php
}
?>
<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" Id="delete" value="Delete"></td>
</tr>
<?php
// Check if delete button active, start this
if($_POST['delete']){
//print_r($_POST);
//exit;
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM avisos WHERE Id='$del_id'";
$result = mysqli_query($mysqli, $sql);
}
// if successful redirect to h_delete.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?mod=h_delete\">";
}
}
((is_null($___mysqli_res = mysqli_close($mysqli))) ? false : $___mysqli_res);
?>
</table>
</form>
</td>
</tr>
</table>
