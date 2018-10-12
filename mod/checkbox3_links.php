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

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM enlaces ) m');

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


<form name="frmMain" action="?seccion=checkbox2_links" method="post"
	OnSubmit="return onDelete();">
	<?php
$strSQL = "SELECT * FROM enlaces";
$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

	<span class="yellow"><?php echo BORRAR_DOCUMENTO; ?></span>
	<table id="myTable" class="sortable">
		<thead>
			<tr>
				<th>ID</th>
				<th><?php echo NOMBRE_DOCUMENTO; ?></th>
				<!--<th>Url</th>-->
				<th><?php echo DOCUMENTOS_NUMEROREVISION; ?></th>
				<th><i class="fa fa-edit " style="color:#9fff30;" title="<?php echo EDITAR; ?>" /></i></th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
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
				<td><?php echo $row['id'];?></td>
				<td>
					<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<?php echo $row['3'] ?>						
						<span>
						<br />								
						<a href="?seccion=documentos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo DOCUMENTO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil " style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
						
						<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo DOCUMENTO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o " style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>								
					
						<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo DOCUMENTO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print " style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
						<?php echo $row ['0']; ?>
						
						<?php
						
							echo "<table class='print2'>
								<tr>"; 
								echo "<th style width=20%><font color='red'>" . ID . "</font></th>
										<th><font color='red'>" . FECHA. "</font></th>
										<th><font color='red'>" . TITULO . "</font></th>
										<th></th>
								</tr>
								<tr>
									<td style width=20%>$row[0]</td>
									<td>$row[2]</td>
									<td colspan=2>$row[3]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>Link</font></th>
									<th colspan=2><font color='red'>" . REVISIONUM . "</font></th>
								</tr>
								<tr>
									<td colspan=2><a href='$row[4]' target='_blank'>$row[4]</a></td>
									<td colspan=2>$row[5]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . DOCUMENTOS_SECCIONID . "</font></th>
									<th><font color='red'>" . DISTRIBUCION . "</font></th>
								</tr>
								<tr>
									<td colspan=2>$row[6]</td>
									<td colspan=2>$row[7]</td>
								</tr>
								
							</table>";  
						?>
						</span>
				</div>
				</td>
				<td><?php echo $row['comment'];?></td>

					
				<td width="10%"><a
					href="?seccion=documentos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>"
					title="<?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?>-<?php echo $row['titulo'];?>" />
					<i class="fa fa-pencil " style="color:#9fff30;"></i></a>

				</td>
				<td>					
					<input class="borrar" type="checkbox" name="chkDel[]" id="chkDel<?php echo $i;?>" value="<?php echo $row['id'];?>">
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