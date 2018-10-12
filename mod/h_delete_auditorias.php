<?php
include("includes/mysql.php");
$db = new MySQL();

error_reporting(4);


$sql="SELECT * FROM informeauditoria";
$result=mysqli_query($mysqli, $sql);
$count=mysqli_num_rows($result);
?>
<table class="print">
	<tr>
		<td><form name="form1" method="post" action="">
				<table>
					<tr>
						<td bgcolor="#FFFFFF">&nbsp;</td>
						<td colspan="8" bgcolor="#FFFFFF"><strong>Borrado
								múltiple</strong></td>
					</tr>
					<tr>
						<td align="center" bgcolor="#FFFFFF">#</td>
						<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
						<td align="center" bgcolor="#FFFFFF"><strong>Auditoría</strong></td>
						<td align="center" bgcolor="#FFFFFF"><strong>Fecha</strong></td>
						<td align="center" bgcolor="#FFFFFF"><strong>Área
								auditada</strong></td>
						<td align="center" bgcolor="#FFFFFF"><strong>Documentación</strong></td>
						<td align="center" bgcolor="#FFFFFF"><strong>Auditor</strong></td>
						<td align="center" bgcolor="#FFFFFF"><strong>Objeto</strong></td>
						<td align="center" bgcolor="#FFFFFF"><strong>Resultado</strong></td>
					</tr>
					<?php
while($rows=mysqli_fetch_array($result,  MYSQLI_ASSOC)){
?>
					<tr>
						<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]"
							type="checkbox" id="checkbox[]" value="<? echo $rows['id']; ?>"></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['ai']; ?></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['Fecha']; ?></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['AreaAuditada']; ?></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['Documentacion']; ?></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['Audiotor']; ?></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['ObjetoAuditoria']; ?></td>
						<td bgcolor="#FFFFFF"><?php echo $rows['Resultado']; ?></td>
					</tr>
					<?php
}
?>
					<tr>
						<td colspan="9" align="center" bgcolor="#FFFFFF"><input
							name="delete" type="submit" id="delete" value="Delete"></td>
					</tr>
					<?php
// Check if delete button active, start this
if($_POST['delete']){
//print_r($_POST);
//exit;
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM informeauditoria WHERE id='$del_id'";
$result = mysqli_query($mysqli, $sql);
}
// if successful redirect to h_delete_inspecciones.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?mod=h_delete_auditorias\">";
}
}
((is_null($___mysqli_res = mysqli_close($mysqli))) ? false : $___mysqli_res);
?>
				</table>
			</form></td>
	</tr>
</table>
