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

<html>
<head>
<!--<meta http-equiv="refresh" content="3; URL=?seccion=checkbox3_aisgc">-->

<style type="text/css">
body {
    padding: 0;
}

/* Alert */

#alert {
    position: relative;
}
#alert:hover:after {
    background: hsla(0,0%,0%,.8);
    border-radius: 3px;
    color: #f6f6f6;
    content: 'Click to dismiss';
    font: bold 12px/30px sans-serif;
    height: 30px;
    left: 50%;
    margin-left: -60px;
    position: absolute;
    text-align: center;
    top: 50px;
    width: 120px;
}
#alert:hover:before {
    border-bottom: 10px solid hsla(0,0%,0%,.8);
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    content: '';
    height: 0;
    left: 50%;
    margin-left: -10px;
    position: absolute;
    top: 40px;
    width: 0;
}
#alert:target {
    display: none;
}
.alert {
background-color: #DAEDF3;
background-image: -webkit-linear-gradient(135deg, transparent, transparent 25%, hsla(0,0%,0%,.05) 25%, hsla(0,0%,0%,.05) 50%, transparent 50%, transparent 75%, hsla(0,0%,0%,.05) 75%, hsla(0,0%,0%,.05));
background-image: -moz-linear-gradient(135deg, transparent, transparent 25%, hsla(0,0%,0%,.1) 25%, hsla(0,0%,0%,.1) 50%, transparent 50%, transparent 75%, hsla(0,0%,0%,.1) 75%, hsla(0,0%,0%,.1));
background-image: -ms-linear-gradient(135deg, transparent, transparent 25%, hsla(0,0%,0%,.1) 25%, hsla(0,0%,0%,.1) 50%, transparent 50%, transparent 75%, hsla(0,0%,0%,.1) 75%, hsla(0,0%,0%,.1));
background-image: -o-linear-gradient(135deg, transparent, transparent 25%, hsla(0,0%,0%,.1) 25%, hsla(0,0%,0%,.1) 50%, transparent 50%, transparent 75%, hsla(0,0%,0%,.1) 75%, hsla(0,0%,0%,.1));
background-image: linear-gradient(135deg, transparent, transparent 25%, hsla(0,0%,0%,.1) 25%, hsla(0,0%,0%,.1) 50%, transparent 50%, transparent 75%, hsla(0,0%,0%,.1) 75%, hsla(0,0%,0%,.1));
background-size: 20px 20px;
box-shadow: 0 5px 0 hsla(0,0%,0%,.1);
color: #f6f6f6;
display: block;
font: bold 16px/40px sans-serif;
height: 30px;
position: absolute;
text-align: center;
text-decoration: none;
top: -45px;
left: 200px;
width: 50%;
-webkit-animation: alert 1s ease forwards;
-moz-animation: alert 1s ease forwards;
-ms-animation: alert 1s ease forwards;
-o-animation: alert 1s ease forwards;
animation: alert 1s ease forwards;
}

/* Animation */

@-webkit-keyframes alert {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { top: 0; }
}
@-moz-keyframes alert {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { top: 0; }
}
@-ms-keyframes alert {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { top: 0; }
}
@-o-keyframes alert {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { top: 0; }
}
@keyframes alert {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { top: 0; }
}
</style>

</head>
<body>

<form name="frmMain" action="?seccion=checkbox33_aisgc" method="post"
	OnSubmit="return onDelete();">
	<?php
        $strSQL = "SELECT * FROM aisgc";
        $objQuery = mysqli_query($mysqli, $strSQL) or die ("Error Query ['.$strSQL.']");
?>


	<?php echo DELETE_ADVERTICE; ?>
	<table class="sortable">
		<caption>
			<?php echo AUDITORIAS_BORRAR_AUDITORIA; ?>
		</caption>
		<tbody>
			<tr>
				<th>ID</th>
				<th><?php echo AINFORMES_NUMERO; ?></th>
				<th><?php echo FECHA; ?></th>
				<th><img src="images/red_edit.gif"
					alt="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>"
					title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>" /></th>
				<th><img src="images/red_print.gif"
					alt="<?php echo IMPRIMIR_AUDITORIA; ?>"
					title="<?php echo IMPRIMIR_AUDITORIA; ?>" /></th>
				<th><input name="CheckAll" type="checkbox" id="CheckAll"
					value="Y" onClick="ClickCheckAll(this);"></th>
			</tr>

			<?php
          $i = 0;
    while ($objResult = mysqli_fetch_array($objQuery)) {
           $i++;
        ?>

			<tr>
				<td><?php echo $objResult['id'];?></td>
				<td><?php

         echo "<a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=$objResult[id]' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
                        echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                        echo "<tr><td>"; echo "$objResult[fecha]"; echo "</td><td>"; echo "$objResult[ai]"; echo "</td><td colspan=2>"; echo "$objResult[auditor1]"; echo "</td></tr>";
                        echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo TRABAJADOR_TRABAJADOR; echo "</th></tr>";
                        echo "<tr><td colspan=2>"; echo "$objResult[docum]"; echo"</td><td colspan=2>"; echo "$objResult[trabajador1]"; echo "</td></tr>";
                        echo "<tr><th colspan=2>"; echo SERVICIO_SERVICIO; echo "</th><th>"; echo VEHICULOS; echo"</th></tr>";
                        echo "<tr><td colspan=2>"; echo "$objResult[servicio1]"; echo "</td><td colspan=2>"; echo "$objResult[vehiculos]"; echo"</td></tr>";
                        echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th>"; echo CUESTIONARIO_CALIDAD; echo"</th></tr>";
                        echo "<tr><td colspan=2>"; echo "$objResult[obstrat]"; echo "</td><td colspan=2>"; echo "$objResult[obscal]"; echo"</td></tr>";
                        echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                        echo "<tr><td colspan=2>"; echo "$objResult[obsalmac]"; echo "</td><td colspan=2>"; echo "$objResult[obscompras]"; echo"</td></tr>";
                        echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo "</th><th>"; echo CUESTIONARIO_DOCUMENTACION; echo"</th></tr>";
                        echo "<tr><td colspan=2>"; echo "$objResult[obsformac]"; echo "</td><td colspan=2>"; echo "$objResult[obsdocum]"; echo"</td></tr>";
                        echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                        echo "<tr><td colspan=2>"; echo "$objResult[obslegio]"; echo "</td></tr>";

                        echo "</td></tr></table>'>";

                echo $objResult['ai'];
                echo "</a>";

        ?>

				</td>
				<td><?php echo $objResult['fecha'];?></td>
				<td><a
					href="?seccion=aisgc_admin&amp;aktion=change_id&amp;id=<?php echo $objResult['id'];?>"><img
						src="images/red_edit.gif"
						alt="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>-<?php echo $objResult['ai'];?>"
						title="<?php echo AUDITORIAS_EDITAR_AUDITORIA; ?>-<?php echo $objResult['ai'];?>" /></a></td>
				<td><a
					href="?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $objResult['id'];?>"><img
						src="images/red_print.gif"
						alt="<?php echo IMPRIMIR_AUDITORIA; ?>-<?php echo $objResult['ai'];?>"
						title="<?php echo IMPRIMIR_AUDITORIA; ?>-<?php echo $objResult['ai'];?>" /></a></td>

				<td><input type="checkbox" name="chkDel[]"
					id="chkDel<?php echo $i;?>" value="<?php echo $objResult['id'];?>"></td>
			</tr>
			<?php
    }
    ?>
		</tbody>
	</table>
	<input type="submit" name="btnDelete"
		value="<?php echo BORRAR; ?>"> <input type="hidden"
		name="hdnCount" value="<?php echo $i;?>">
</form>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php
	
	for($i = 0; $i < count ( $_POST ["chkDel"] ); $i ++) {
		if ($_POST ["chkDel"] [$i] != "") {
			$strSQL = "DELETE FROM aisgc ";
			$strSQL .= "WHERE id = '" . $_POST ["chkDel"] [$i] . "' ";
			$objQuery = mysqli_query($mysqli,  $strSQL );
		}
	}
	
	echo '<div id="alert">';
    echo '<a class="alert" href="#alert">' . AUDITORIAS_AUDITORIA_BORRADA . '</a>';
    echo '</div>';
	echo '<a href="?seccion=checkbox3_aisgc">' . VOLVER . '</a><br /><br /><br /><br /><br />';
	
	?>