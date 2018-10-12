<?php
/**
* Mod borrar documentos
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM avisos ) m');

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

if($result === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

//--------------------------fin contar registros


?>
<html>
<head>
</head>
<body>
<form name="frmMain" action="?seccion=checkbox2" method="post"  OnSubmit="return onDelete();">
	<?php

	$strSQL = "SELECT * FROM avisos";
	$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table id="myTable" class="sortable">
	<thead>
		<tr>
			<th width="30"> <div align="center">ID  </div></th>
			<th width="75"> <div align="center">Fecha  </div></th>
			<th width="65"> <div align="center">Comunica:  </div></th>
			<th width="500"> <div align="center">Comentarios  </div></th>
			<td width="10%"><a
						href="?seccion=documentos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>"
						title="<?php echo EDITAR_AVISO; ?>-<?php echo $row['0'];?>" />
						<i class="fa fa-pencil" style="color:#ffffff;"></i></a>

					</td>
			<th width="30">
				<div align="center">
					<input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);">
				</div>
			</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$i = 0;
	while ($row = mysqli_fetch_array($objQuery))
	{
	$i++;
	?>
	<tr>
		<td><div  align="center"><?php echo $row["id"];?></div></td>
		<td><?php echo $row["fecha"];?></td>
		<td><?php echo $row["comunicado_por"];?></td>
		<td>		
			<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
				<?php echo strip_tags(substr($row["comentarios"], 0, 100));?>						
					<span>						
						<?php 
						
						$cadena =$row['comentarios'];
							$patrones[0] = '<span>';
							$sustituciones[0] = '<div>';
							echo strip_tags(preg_replace($patrones, $sustituciones,  $row['comentarios']), '<p><font><div><style><strong><li><h1><h2><h3><table><tr><td>');
						?>						
					</span>
			</div>
		</td>
		<td width="10%"><a
					href="?seccion=avisos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>"
					title="<?php echo EDITAR_AVISO; ?>-<?php echo $row['0'];?>" />
					<i class="fa fa-pencil" style="color:#ffffff;"></i></a>

		</td>
		<td>
			<div align="center">
				<input class="borrar" type="checkbox" name="chkDel[]"  id="chkDel<?php echo $i;?>"  value="<?php echo $row["id"];?>">
			</div>		
		</td>
		</tr>
	<?php
	}
	?>
	</tbody>
	</table>
	<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>
	<?php
	mysqli_close($mysqli);
	?>
		<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>
		<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</form>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script>
$(".answer").hide();
$(".borrar").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show();
    } else {
        $(".answer").hide();
    }
});
</script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
</body>
</html>