<?php
/**
* Mod borrar objetivos
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

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM objetivosdatosgenerales ) m');

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

<form name="frmMain" action="?seccion=checkbox2_objetivos" method="post"
	OnSubmit="return onDelete();">
	<?php
$strSQL = "SELECT * FROM objetivosdatosgenerales";
$objQuery = mysqli_query($mysqli,  $strSQL ) or die ( "Error Query ['.$strSQL.']" );
?>

	<span class="yellow"><?php echo OBJETIVOS_BORRAR_OBJETIVO; ?></span>

	<table id="myTable" class="sortable">
		<thead>
			<tr>
				<th>ID</th>
				<th><?php echo CODIGO; ?></th>
				<th style="width: 500px"><?php echo OBJETIVOS_NOMBRE_OBJETIVO; ?></th>
				<th width="10%">
					<a href="#" alt="<?php echo OBJETIVOS_EDITAR_OBJETIVO; ?>" title="<?php echo OBJETIVOS_EDITAR_OBJETIVO; ?>" />
					<i class="fa fa-edit" style="color:#752209;"></i>
				</th>
				<th width="10%">
					<a href="#" alt="<?php echo IMPRIMIR_OBJETIVO; ?>" title="<?php echo IMPRIMIR_OBJETIVO; ?>" />
					<i class="fa fa-print" style="color:#752209;"></i>
				</th>

				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>
			</thead>
			<>
			<?php
			$i = 0;
			while ( $row = mysqli_fetch_array( $objQuery ) ) {
				$i ++;
				?>
			<tr>
				<td><?php echo $row['Id'];?></td>
				<td><?php echo $row['CodigoObjetivo'];?></td>
				<td style="width: 500px">
										
					<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>								
								<span>
								<br />
								<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#752209;"></i></a>
								
								<a href="mod/javaformdelete_objetivos.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#752209;"></i></a>
								
							
								<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#752209;"></i></a>
								<br />
																
								<?php
								
									echo "<table class=print>
										<> 
										<tr> 
										<th>".CODIGO."</th> 
										<td width='30%'><font class='spanredchico'>$row[1]</font></td> 
										<th>".OBJETIVOS_FUENTE."</th> 
										<td width='40%'><font class='spanredchico'>$row[9]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_NOMBRE_OBJETIVO."</th> 
										<td><font class='spanredchico'>$row[2]</font></td> 
										<th>".OBJETIVOS_FRECUENCIA."</th> 
										<td><font class='spanredchico'>$row[10]</font></td> 
										</tr> 
										<tr> 
										<th>".ANO."</th> 
										<td><font class='spanredchico'>$row[3]</font></td> 
										<th>".OBJETIVOS_PLAZO."</th> 
										<td><font class='spanredchico'>$row[11]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_ORIGEN."</th> 
										<td><font class='spanredchico'>$row[4]</font></td> 
										<th>".OBJETIVOS_EJECUTOR."</th> 
										<td><font class='spanredchico'>$row[12]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_DETECCION."</th> 
										<td><font class='spanredchico'>$row[5]</font></td> 
										<th>".OBJETIVOS_PERSEGUIDOR."</th> 
										<td><font class='spanredchico'>$row[13]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_CAUSAS."</th> 
										<td><font class='spanredchico'>$row[6]</font></td> 
										<th>V&ordm;B&ordm;:</th> 
										<td><font class='spanredchico'>$row[14]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_RECURSOS."</th> 
										<td><font class='spanredchico'>$row[7]</font></td> 
										<th>".RESULTADO."</th> 
										<td><font class='spanredchico'>" . strip_tags($row['15']) . "</font></td> 
										</tr> 
										<tr> 
										<th>".INDICADOR."</th> 
										<td><font class='spanredchico'>$row[8]</font></td> 
										<th>".FECHA."</th> 
										<td><font class='spanredchico'>$row[16]</font></td> 
										</tr> 
										</> 
										</table>";
										
								?>
								</span>
						</div>
					
				</td>
				<td><a
						href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=<?php echo $row['id'];?>" 
						alt="<?php echo OBJETIVOS_EDITAR_OBJETIVO; ?> - <?php echo $row[0]; ?>"
						title="<?php echo OBJETIVOS_EDITAR_OBJETIVO; ?> - <?php echo $row[0]; ?>" />
						<i class="fa fa-pencil" style="color:#752209;"></i>
					</a>
				</td>
				<td><a
						href="?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row['id'];?>" 
						alt="<?php echo IMPRIMIR_OBJETIVO; ?> - <?php echo $row[0]; ?>"
						title="<?php echo IMPRIMIR_OBJETIVO; ?> - <?php echo $row[0]; ?>" />
						<i class="fa fa-print" style="color:#752209;"></i>
					</a>
				</td>

				<td align="center">
					<input class="borrar" type="checkbox" name="chkDel[]"
					id="chkDel<?php echo $i;?>" value="<?php echo $row['Id'];?>"></td>
			</tr>
			<?php
								}
								?>
		</>
	</table>

		<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>
			<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
	</div>
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

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />