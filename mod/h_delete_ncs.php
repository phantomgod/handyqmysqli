<?php
include("includes/mysql.php");
$db = new MySQL();

error_reporting(4);


$sql="SELECT * FROM hojasdemejora";
$result=mysqli_query($mysqli, $sql);
$count=mysqli_num_rows($result);
?>
<table>
<tr>
<td><form name="form1" method="post" action="">
<table>
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="17" bgcolor="#FFFFFF"><strong>Borrado múltiple</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Nº auditoría</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Nº hoja</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Cód. hoja</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Descripción</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Fecha</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Documentación</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Abre</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Afecta a</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Causas</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Acciones</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Plazo</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Cierres parciales</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Eficacia</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Cerrado fecha</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Desviación</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Visible</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result,  MYSQLI_ASSOC)){
?>
<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $rows['id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['ai']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['numhoja']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['codhoja']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['descripcion']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['fecha']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['docum']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['abiertopor']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['afectaa']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['causas']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['acciones']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['plazo']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['cierresparc']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['eficacia']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['cerradofecha']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['desviacion']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['visible']; ?></td>
</tr>
<?php
}
?>
<tr>
<td colspan="17" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>
<?php
// Check if delete button active, start this
if($_POST['delete']){
//print_r($_POST);
//exit;
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM hojasdemejora WHERE id='$del_id'";
$result = mysqli_query($mysqli, $sql);
}
// if successful redirect to h_delete_ncs.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?mod=h_delete_ncs\">";
}
}
((is_null($___mysqli_res = mysqli_close($mysqli))) ? false : $___mysqli_res);
?>
</table>
</form>
</td>
</tr>
</table>
