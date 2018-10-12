<?php
/**
* Mod borrar inspecciones de servicio
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

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM objetivosseguimiento ) m');

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

<form name="frmMain" action="?seccion=checkbox2_tareasobjetivos" method="post" OnSubmit="return onDelete();">
	<?php

    $strSQL = "SELECT datos. * , seguimiento. *
					FROM objetivosdatosgenerales AS datos
					JOIN objetivosseguimiento AS seguimiento ON datos.CodigoObjetivo = seguimiento.codigoobjetivo";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>

	<table id="myTable" class="sortable">
		<caption>
			<?php echo OBJETIVOS_BORRAR_TAREA; ?>
		</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th><?php echo CODIGO; ?></th>
				<th><?php echo ACCION; ?></th>
				<th><?php echo RESPONSABLE; ?></th>
				<th style="width:10%;"><?php echo LIMITE; ?></th>
				<th><?php echo TERMINACION; ?></th>
				<th><?php echo OBSERVACIONES; ?></th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>
		</thead>
		<tbody>

			<?php
        $i = 0;
while ($row1 = mysqli_fetch_array($objQuery)) {
        $i++;
        ?>

			<tr>
				<td><?php echo $row1['Id'];?></td>
		<?php
			echo "<td>";
			
			
					?>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
							<a href="index.php?seccion=objetivos_print&amp;aktion=print_id&amp;id=<?php echo $row1['0'] ?>"><?php echo $row1['1'] ?></a>								
								<span>
								<br />
								<a href="?seccion=objetivos_admin&aktion=change_id&id=<?php echo $row1 ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row1 ['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>
								
								<a href="mod/javaformdelete_objetivos.php?var=<?php echo $row1 ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row1 ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>
								
							
								<a href="?seccion=objetivos_print&amp;aktion=print_id&id=<?php echo $row1 ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo OBJETIVO; echo "&nbsp;"; echo $row1 ['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:210px; top:10px; color:#9fff30;"></i></a>
								<br />
																
								<?php
								
									echo "<table class=print>
										<tbody> 
										<tr> 
										<th>".CODIGO."</th> 
										<td width='30%'><font class='spanredchico'>$row1[1]</font></td> 
										<th>".OBJETIVOS_FUENTE."</th> 
										<td width='40%'><font class='spanredchico'>$row1[9]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_NOMBRE_OBJETIVO."</th> 
										<td><font class='spanredchico'>$row1[2]</font></td> 
										<th>".OBJETIVOS_FRECUENCIA."</th> 
										<td><font class='spanredchico'>$row1[10]</font></td> 
										</tr> 
										<tr> 
										<th>".ANO."</th> 
										<td><font class='spanredchico'>$row1[3]</font></td> 
										<th>".OBJETIVOS_PLAZO."</th> 
										<td><font class='spanredchico'>$row1[11]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_ORIGEN."</th> 
										<td><font class='spanredchico'>$row1[4]</font></td> 
										<th>".OBJETIVOS_EJECUTOR."</th> 
										<td><font class='spanredchico'>$row1[12]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_DETECCION."</th> 
										<td><font class='spanredchico'>$row1[5]</font></td> 
										<th>".OBJETIVOS_PERSEGUIDOR."</th> 
										<td><font class='spanredchico'>$row1[13]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_CAUSAS."</th> 
										<td><font class='spanredchico'>$row1[6]</font></td> 
										<th>V&ordm;B&ordm;:</th> 
										<td><font class='spanredchico'>$row1[14]</font></td> 
										</tr> 
										<tr> 
										<th>".OBJETIVOS_RECURSOS."</th> 
										<td><font class='spanredchico'>$row1[7]</font></td> 
										<th>".RESULTADO."</th> 
										<td><font class='spanredchico'>" . strip_tags($row1['15']) . "</font></td> 
										</tr> 
										<tr> 
										<th>".INDICADOR."</th> 
										<td><font class='spanredchico'>$row1[8]</font></td> 
										<th>".FECHA."</th> 
										<td><font class='spanredchico'>$row1[16]</font></td> 
										</tr> 
										</tbody> 
										</table>";
										
								?>
								</span>
						</div>
					</td>


	<!--< ?php echo $row1['codigoobjetivo'];?>-->


			<td><?php echo $row1['accion'];?></td>
			<td><?php echo $row1['responsable'];?></td>
			<td style="width:10%;"><?php echo $row1['fechalimite'];?></td>
			<td><?php echo $row1['fechaterminacion'];?></td>
			<td><?php echo mysqli_real_escape_string($mysqli, $row1['observaciones']);?></td>
			<td>
			<input class="borrar" type="checkbox" name="chkDel[]" Id="chkDel<?php echo $i;?>" value="<?php echo $row1['Id'];?>">
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