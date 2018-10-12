<?php
/**
* Mod borrar no conformidades
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

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM hojasdemejora ) m');

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

<form name="frmMain" action="?seccion=checkbox2_ncs" method="post"
	OnSubmit="return onDelete();">
	<?php

	$strSQL = "SELECT * FROM hojasdemejora ORDER BY numhoja DESC";
	$objQuery = mysqli_query($mysqli,  $strSQL ) or die ( "Error Query ['.$strSQL.']" );
	?>

	<span class="yellow"><?php echo NCS_BORRAR_NC; ?></span> &emsp;&emsp;&emsp;
	
	
	<!--************************ CONSULTAS ************************-->
	
	 <a
        href="mod/ncslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        title="Consultar no conformidades" 
		class="thickbox" 
		title="Consultar no conformidades">
		<i class="fa fa-question" style="color:#FF0000;"></i></a>

        <a
        href="mod/aisgclistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        title="Consultar auditorias" 
		class="thickbox" 
		title="Consultar auditorias">
		<i class="fa fa-question" style="color:#F44336;"></i></a>

        <a
        href="mod/informeauditorialistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"      
		class="thickbox" 
		title="Consultar informes de auditoría">
		<i class="fa fa-question" style="color:#FFEB3B;"></i></a>

        <a
        href="mod/objetivoslistadesplegable/index.php?keepThis=true&TB_iframe=true&height=500&width=800"
        class="thickbox" 
		title="Consultar objetivos">
		<i class="fa fa-question" style="color:#752209;"></i></a>
	
	<!--************************ FIN CONSULTAS ************************-->	
	<table id="myTable" class="sortable">
		<thead>
			<tr>
				<th>ID</th>
				<th><?php echo AUDITORIAS_AUDITORIA; ?></th>
				<th><?php echo NCS_NUMERO; ?></th>
				<th><?php echo CODIGO; ?></th>
				<th><?php echo NCS_DESCRIPCION; ?></th>
				<th width="100px"><?php echo FECHA; ?></th>
				<th>
					<a href="#" alt="<?php echo NCS_BORRAR_NC; ?>" title="<?php echo NCS_BORRAR_NC; ?>" />
					<i class="fa fa-trash" style="color:#ff0000;"></i>
				</th>
				<th>
					<a href="#" alt="<?php echo NCS_EDITAR; ?>" title="<?php echo NCS_EDITAR; ?>" />
					<i class="fa fa-edit" style="color:#ff0000;"></i>
				</th>
				<th>
					<a href="#" alt="<?php echo NCS_IMPRIMIR; ?>" title="<?php echo NCS_IMPRIMIR; ?>" />
					<i class="fa fa-print" style="color:#ff0000;"></i>
				</th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);">
				</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$i = 0;
		while ( $objResult = mysqli_fetch_array( $objQuery ) ) {
				$i ++;
				?>
			<tr>
				<td><?php echo $objResult['id']; ?></td>
				<td><?php echo $objResult['ai']; ?></td>


				<td>
						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
								<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $objResult['0'] ?>"><?php echo $objResult['2'] ?></a>
								
								<span>
								<br />
								<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
								<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $objResult ['0']; ?>"><i class="fa fa-plus" style="position:absolute; left:10px; top:10px; color:#ff0000;"></i></a><!--</div>-->
								
								<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $objResult ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $objResult ['0']; ?>"><i class="fa fa-pencil" style="position:absolute; left:50px; top:10px; color:#ff0000;"></i></a>
								
								<a href="mod/javaformdelete.php?var=<?php echo $objResult ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $objResult ['0']; ?>"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:10px; color:#ff0000;"></i></a>
								
							
								<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $objResult ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $objResult ['0']; ?>"><i class="fa fa-print" style="position:absolute; left:210px; top:10px; color:#ff0000;"></i></a>
								
								<!--<a href="?seccion=buscancs"><i class="fa fa-search" style="position:absolute; left:250px; top:10px; color:#ff0000;"></i></a>
								
								<a href="?seccion=ncsporarea"><i class="fa fa-signal" style="position:absolute; left:290px; top:10px; color:#ff0000;"></i></a>
								
								<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:absolute; left:330px; top:10px; color:White;"></i></a>-->
								
								<?php
								
									echo "<table class=print>
											<tbody>
											<tr>
											<th>" . NCS_NUMERO . " </th><td>$objResult[2]</td>
											</tr>
											<tr> 
												<th>" . DESCRIPCION . " </th><td> <font color='yellow'>" . strip_tags($objResult['4'], '<font>, <b>') . "</font></td>
											</tr>
											<tr> 
												<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th><td>$objResult[1]</td>
											</tr>
											<tr> 
												<th>" . DOCUMENTACION . "</th><td>$objResult[6]</td>
											</tr>
											<tr> 
												<th>" . NCS_ABIERTOPOR . "</th><td>$objResult[7]</td>
											</tr>
											<tr> 
												<th>" . NCS_AFECTAA . "</th><td>$objResult[8]</td>
											</tr>
											<tr> 
												<th>" . NCS_CAUSAS . "</th><td>" . strip_tags($objResult['9'], '<font>, <b>') . "</td>
											</tr>
											<tr> 
												<th>" . NCS_ACCIONES . "</th><td>" . strip_tags($objResult['10'], '<font>, <b>') . "</td>
											</tr>
											<tr> 
												<th>" . NCS_EFICACIA . "</th><td>" . strip_tags($objResult['13'], '<font>, <b>') . "</td>
											</tr>
											<tr> 
												<th>" . NCS_PLAZO . "</th><td>$objResult[11]</td>
											</tr>
											<tr> 
												<th>" . NCS_CIERRE_PARCIAL . "</th><td>" . strip_tags($objResult['12'], '<font>, <b>') . "</td>
											</tr>
											<tr> 
												<th>" . FECHA . "</th><td>$objResult[5]</td>
											</tr>
											<tr> 
												<th>" . NCS_DESVIACION . "</th><td>$objResult[15]</td>
											</tr>
											<tr> 
												<th>" . NCS_FECHACIERRE . "</th><td>$objResult[14]</td>	
											</tr>
											</tbody>
											<tr> </table>";
								?>
								</span>
						</div>

				</td>


		<td><?php echo $objResult['codhoja'];?></td>
		<td><?php echo $objResult['descripcion'];?></td>
		<td><?php echo $objResult['fecha'];?></td>
		<td><a href="mod/javaformdelete.php?var=<?php echo $objResult ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $objResult ['0']; ?>"><i class="fa fa-trash-o" style="color:#ff0000;"></i></a></td>
		<td><a
			href="?seccion=ncs_admin&amp;aktion=change_id&amp;id=<?php echo $objResult['id'];?>" 
				alt="<?php echo NCS_EDITAR; ?> - <?php echo $objResult[0]; ?>"
				title="<?php echo NCS_EDITAR; ?> - <?php echo $objResult[0]; ?>" />
				<i class="fa fa-pencil" style="color:#ff0000;"></i>
			</a>
		</td>
		<td><a
			href="?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $objResult['id'];?>" 
				alt="<?php echo NCS_IMPRIMIR; ?> - <?php echo $objResult[0]; ?>"
				title="<?php echo NCS_IMPRIMIR; ?> - <?php echo $objResult[0]; ?>" />
				<i class="fa fa-print" style="color:#ff0000;"></i>
			</a>
		</td>

		<td><input class="borrar" type="checkbox" name="chkDel[]"
			id="chkDel<?php echo $i;?>" value="<?php echo $objResult['id'];?>"></td>
			
			

	<?php
		}
	?>

		<div class="answer">
			<button type="submit" name="btnDelete" class="btn btn-danger">Borrar</button>
		</div>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</tbody>
</table>

	<br />
	<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
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