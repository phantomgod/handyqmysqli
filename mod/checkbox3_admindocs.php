<html>
<head>
</head>
<body>

	<form name="frmMain" action="?mod=checkbox2_admindocs" method="post"
		OnSubmit="return onDelete();">
		<?php
require_once("includes/mysql.php");
$db = new MySQL();

//$objConnect = mysql_connect("localhost","root","root") or  die(mysql_error());
//$objDB = mysql_select_db("copt");

$strSQL = "SELECT * FROM admindocs";
$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>
		<table class="sortable">
			<tr>
				<th width="30">
					<div align="center">
						<font color="#4698ca">ID </font>
					</div>
				</th>
				<th width="120">
					<div align="center">
						<font color="#4698ca">Nombre </font>
					</div>
				</th>
				<th width="300">
					<div align="center">
						<font color="#4698ca">Url </font>
					</div>
				</th>
				<th width="30">
					<div align="center">
						<input name="CheckAll" type="checkbox" id="CheckAll" value="Y"
							onClick="ClickCheckAll(this);">
					</div>
				</th>
			</tr>
			<?php
$i = 0;
while ($objResult = mysqli_fetch_array($objQuery))
{
$i++;
?>
			<tr>
				<td><div align="center">
						<?php echo $objResult['linkid'];?>
					</div></td>
				<td><?php echo $objResult['linkname'];?></td>
				<td><?php echo $objResult['link'];?></td>
				<td align="center"><input type="checkbox" name="chkDel[]"
					id="chkDel<?php echo $i;?>"
					value="<?php echo $objResult['linkid'];?>"></td>
			</tr>
			<?php
}
?>
		</table>
		<?php
//mysql_close($objConnect);
?>
	<br />
	<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
	</form>
</body>
</html>
