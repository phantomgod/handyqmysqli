<?php
/**
* Mod borrar auditorías al sistema de calidad
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
?>

<form name="frmMain" action="?seccion=checkbox2_aisgc" method="post" OnSubmit="return onDelete();">
	<?php
        $strSQL = "SELECT * FROM aisgc";
        $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

		<div class="answer">
				<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>

	<?php echo DELETE_ADVERTICE; ?>
	
	<span class="yellow"><?php echo AUDITORIAS_BORRAR_AUDITORIA; ?></span>

	<table id="myTable" class="sortable">
		<thead>
			<tr>
				<th>ID</th>
				<th><?php echo AINFORMES_NUMERO; ?></th>
				<th><?php echo FECHA; ?></th>
				<th width="10%">
					<a href="#" alt="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>" title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>" />
					<i class="fa fa-pencil" style="color:#c62828;"></i>
				</th>
				<th width="10%">
					<a href="#" alt="<?php echo IMPRIMIR_AUDITORIA; ?>" title="<?php echo IMPRIMIR_AUDITORIA; ?>" />
					<i class="fa fa-print" style="color:#c62828;"></i>
				</th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>
		</thead>
		<tbody>

			<?php
          $i = 0;
    while ($row = mysqli_fetch_array($objQuery)) {
           $i++;
        ?>

			<tr>
				<td><?php echo $row['id'];?></td>
				<td>
					<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
						<a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>
						
						<span>
						<br />								
						<a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#c62828;"></i></a>
						
						<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#c62828;"></i></a>								
					
						<a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#c62828;"></i></a>
						<?php echo $row ['0']; ?>
						
						<?php
						
							echo "<table class='print2'>
								<tr>"; 
								echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
										<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
										<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
										<th></th>
								</tr>
								<tr>
									<td style width=20%>$row[1]</td>
									<td>$row[2]</td>
									<td colspan=2>$row[3]</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
								</tr>
								<tr>
									<td colspan=2>" . preg_replace('^<span>^', '<div>', $row[13]) . "</td>
									<td colspan=2>" . preg_replace('^<span>^', '<div>', $row[14]) . "</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
									<th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>" . preg_replace('^<span>^', '<div>', $row[15]) . "</td>
									<td colspan=2>" . preg_replace('^<span>^', '<div>', $row[16]) . "</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
									<th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
								</tr>
								<tr>
									<td colspan=2>" . preg_replace('^<span>^', '<div>', $row[17]) . "</td>
									<td colspan=2>" . preg_replace('^<span>^', '<div>', $row[18]) . "</td>
								</tr>
								<tr>
									<th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
								</tr>
								<tr>
									<td colspan=2>" . preg_replace('^<span>^', '<div>', $row[19]) . "</td>
								</tr>
							</table>";  
						?>
						</span>
				</div>
				</td>
				<td><?php echo $row['fecha'];?></td>
				<td width="10%"><a
					href="?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $row['id'];?>"
					alt="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>-<?php echo $row['ai'];?>" 
					title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>-<?php echo $row['ai'];?>" />
					<i class="fa fa-pencil" style="color:#c62828;"></i></a></td>
				<td width="10%"><a
					href="?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['id'];?>" 
					alt="<?php echo IMPRIMIR_AUDITORIA; ?>-<?php echo $row['ai'];?>"
					title="<?php echo IMPRIMIR_AUDITORIA; ?>-<?php echo $row['ai'];?>" />
					<i class="fa fa-print" style="color:#c62828;"></i></a></td>

				<td><input class="borrar" type="checkbox" name="chkDel[]"
					id="chkDel<?php echo $i;?>" value="<?php echo $row['id'];?>"></td>
			</tr>
			<?php
    }
    ?>
		</tbody>
	</table>
	<br />

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