<?php
/**
* Mod borrar extintores
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
<form name="frmMain" action="?seccion=checkbox2_extintores"
	method="post" OnSubmit="return onDelete();">
	<?php

        $strSQL = "SELECT * FROM extintores";
        $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
        ?>

	<?php echo DELETE_ADVERTICE; ?>
	<table class="sortable">
		<caption>
			<?php echo EXTINTORES_BORRAR_EXTINTOR; ?>
		</caption>
		<tr>
			<th>ID</th>
			<th><?php echo FECHA; ?></th>
			<th><?php echo EXTINTORES_CLIENTE; ?></th>
			<th><?php echo EXTINTORES_NDESERIE; ?></th>
			<th><input name="CheckAll" type="checkbox" id="CheckAll"
				value="Y" onClick="ClickCheckAll(this);"></th>
		</tr>

		<?php
        $i = 0;
        while ($objResult = mysqli_fetch_array($objQuery))
        {
        $i++;
        ?>
		<tbody>
			<tr>
				<td><?php echo $objResult['id'];?></td>
				<td><?php echo $objResult['fecha'];?></td>
				<td><?php echo $objResult['cliente'];?></td>
				<td><?php echo $objResult['ndeserie'];?></td>
				<!--<td><?php echo $objResult['fechafabricacion'];?></td>
        <td><?php echo $objResult['agente'];?></td>
        <td><?php echo $objResult['ejecucion'];?></td>
        <td><?php echo $objResult['proxima'];?></td>
        <td><?php echo $objResult['estado'];?></td>
        <td><?php echo $objResult['numextintores'];?></td>-->
				<td><input type="checkbox" name="chkDel[]"
					id="chkDel<?php echo $i;?>" value="<?php echo $objResult['id'];?>"></td>
			</tr>
			<?php
        }
        ?>
		</tbody>
	</table>
	<br />
	<button type="submit" name="btnDelete" class="btn btn-danger"><?php echo BORRAR; ?></button>
	<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</form>