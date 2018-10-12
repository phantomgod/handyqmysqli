<?php
/**
* Mod borrar informes de auditorias
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
		<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
		</div>
<form name="frmMain" action="?seccion=checkbox2_auditorias"
	method="post" OnSubmit="return onDelete();">
<?php
		$strSQL = "SELECT * FROM informeauditoria ORDER BY id DESC";
		$objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");

?>

	<span class="yellow"><?php echo AINFORMES_BORRAR; ?></span>
	<table id="myTable" class="sortable">
		<thead>
			<tr>
				<th>ID</th>
				<th><?php echo INFORME; ?></th>
				<th><?php echo FECHA; ?></th>
				<th><?php echo AINFORMES_AREA_AUDITADA; ?></th>
				<!--<th>Documentación</th>-->
				<th><?php echo AUDITORIAS_AUDITOR; ?></th>
				<th><a href="#" 
						alt="<?php echo AINFORMES_EDITAR; ?>"
						title="<?php echo AINFORMES_EDITAR; ?>" />
					<i class="fa fa-edit" style="color:#ffeb3b;"></i>
					</a>
				</th>
				<th><a href="#" 
						alt="<?php echo AINFORMES_IMPRIMIR; ?>"
						title="<?php echo AINFORMES_IMPRIMIR; ?>" />
				<i class="fa fa-print" style="color:#ffeb3b;"></i>
					</a>
				</th>
				<!--<th>Objeto</th>
    <th>Resultado</th>-->
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
				
				<?php				
				echo "<td>";
                    
					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>
								
								<span>
								<br />
								<?php echo $row ['1']; ?>
								
								<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
								
								<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>
								
							
								<a href="?seccion=auditorias_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
								
								<!--<a href="?seccion=buscancs"><i class="fa fa-search" style="position:absolute; left:250px; top:10px; color:#9fff30;"></i></a>
								
								<a href="?seccion=ncsporarea"><i class="fa fa-signal" style="position:absolute; left:290px; top:10px; color:#9fff30;"></i></a>
								
								<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:absolute; left:330px; top:10px; color:White;"></i></a>-->
								
								<?php
								
									echo "<table class=print>
										<tr>"; 
										echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
												<th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
												<th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
												<th></th>
										</tr>
										<tr>
											<td style width=20%>$row[2]</td>
											<td>$row[1]</td>
											<td colspan=2>$row[5]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_AREA_AUDITADA . "</font></th>
											<th colspan=2><font color='red'>" . DOCUMENTACION . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[3]</td>
											<td colspan=2>$row[4]</td>
										</tr>
										<tr>
											<th colspan=2><font color='red'>" . AINFORMES_OBJETO . "</font></th>
											<th><font color='red'>" . RESULTADO . "</font></th>
										</tr>
										<tr>
											<td colspan=2>$row[6]</td>
											<td colspan=2>$row[7]</td>
										</tr>
										
									</table>";  
								?>
								</span>
						</div>
					<?php              
                    echo "</td>";
				?>
				
				<td><?php echo $row['Fecha'];?></td>
				<td><?php echo $row['AreaAuditada'];?></td>
				<!--<td>< ?php echo $row['Documentacion'];?></td>-->
				<td><?php echo $row['Auditor'];?></td>
				<td><a
					href="?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row['id'];?>"
						alt="<?php echo AINFORMES_EDITAR; ?>"
						title="<?php echo AINFORMES_EDITAR; ?>" />
					<i class="fa fa-pencil" style="color:#ffeb3b;"></i>
					</a>
				</td>
				<td><a
					href="?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['id'];?>"
						alt="<?php echo AINFORMES_IMPRIMIR; ?>"
						title="<?php echo AINFORMES_IMPRIMIR; ?>" />
					<i class="fa fa-print" style="color:#ffeb3b;"></i>
					</a>
				</td>
				<!--<td><td>< ?php echo $row['ObjetoAuditoria'];?></td>
    <?php echo strip_tags($row['Resultado']);?></td>-->
				<td><input class="borrar" type="checkbox" name="chkDel[]" id="chkDel<?php echo $i;?>" value="<?php echo $row['id'];?>"></td>
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