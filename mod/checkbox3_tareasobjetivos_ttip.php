<?php
/**
* Mod borrar tareas de los objetivos
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

<form name="frmMain" action="?seccion=checkbox2_tareasobjetivos"
	method="post" OnSubmit="return onDelete();">
	<?php

    $strSQLx = "SELECT objetivosdatosgenerales.Id id1, objetivosdatosgenerales.*  FROM objetivosdatosgenerales";
    $objQueryx = mysqli_query($mysqli, $strSQLx) or die ("Error Query [".$strSQLx."]");
    $objResultx = mysqli_fetch_array($objQueryx);
    $strSQL = "SELECT * FROM objetivosseguimiento";
    $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query [".$strSQL."]");


?>


	<?php echo DELETE_ADVERTICE; ?>
	<table class="sortable">
		<caption>
			<?php echo OBJETIVOS_BORRAR_TAREA; ?>
		</caption>
		<tbody>
			<tr>
				<th>ID</th>
				<th><?php echo CODIGO; ?></th>
				<th><?php echo ACCION; ?></th>
				<th><?php echo RESPONSABLE; ?></th>
				<th><?php echo LIMITE; ?></th>
				<th><?php echo TERMINACION; ?></th>
				<th><?php echo OBSERVACIONES; ?></th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>

			<?php
            $i = 0;
   while ($objResult = mysqli_fetch_array($objQuery)) {
            $i++;
           ?>
			<tr>
				<td><?php echo $objResult['0'];?></td>

				<td><a
					href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=<?php echo $objResultx[1]; ?>"
					alt='Image Tooltip' rel='tooltip' content='<table  class="print">
						<caption>
							Objetivo: <span class="documenttitle"><?php echo $objResultx[3]; ?></span>
						</caption>
						<tbody>
							<tr>
								<th><?php echo CODIGO; ?></th>
								<td><?php echo $objResultx[2]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_NOMBRE_OBJETIVO; ?></th>
								<td><?php echo $objResultx[3]; ?></td>
							</tr>
							<tr>
								<th><?php echo ANO; ?></th>
								<td><?php echo $objResultx[4]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_ORIGEN; ?></th>
								<td><?php echo $objResultx[5]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_DETECCION; ?></th>
								<td><?php echo $objResultx[6]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_CAUSAS; ?></th>
								<td><?php echo $objResultx[7]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_RECURSOS; ?></th>
								<td><?php echo $objResultx[8]; ?></td>
							</tr>
							<tr>
								<th><?php echo INDICADOR; ?></th>
								<td><?php echo $objResultx[9]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_FUENTE; ?></th>
								<td><?php echo $objResultx[10]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_FRECUENCIA; ?></th>
								<td><?php echo  $objResultx[11]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_PLAZO; ?></th>
								<td><?php echo $objResultx[12]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_EJECUTOR; ?></th>
								<td><?php echo $objResultx[13]; ?></td>
							</tr>
							<tr>
								<th><?php echo OBJETIVOS_PERSEGUIDOR; ?></th>
								<td><?php echo $objResultx[14]; ?></td>
							</tr>
							<tr>
								<th>VºBº:</th>
								<td><?php echo $objResultx[15]; ?></td>
							</tr>
							<tr>
								<th><?php echo RESULTADO; ?></th>
								<td><?php echo $objResultx[16]; ?></td>
							</tr>
							<tr>
								<th><?php echo FECHA; ?></th>
								<td><?php echo $objResultx[17]; ?></td>
							</tr>
						</tbody>
				</a></td>
			</tr>
		</tbody>
	</table>
	'>
	<?php echo $objResult['1']; ?>
	<a></a>
	<td></td>

	<!--<td>< ?php echo $objResult["codigoobjetivo"];?></td> -->


	<td><?php echo $objResult['2'];?></td>
	<td><?php echo $objResult['3'];?></td>
	<td><?php echo $objResult['4'];?></td>
	<td><?php echo $objResult['5'];?></td>
	<td><?php echo $objResult['6'];?></td>
	<td><input type="checkbox" name="chkDel[]"
		id="chkDel<?php echo $i;?>" value="<?php echo $objResult['0'];?>"></td>

	<tr></tr>
	<?php
}
?>
</tbody>
</table>
	<br />
	<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</form>
