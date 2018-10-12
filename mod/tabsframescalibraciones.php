<?php
/**
* Mod administrar auditores
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
<!DOCTYPE html>
<html>
<head>
<script src="../jscripts/sistemadepestanas.js" type="text/javascript"></script>
<!--<style type="text/css">
table.table {
    border: 0px;
    position: absolute;
    left: 5%;
    top: 10px;
    float: left;
    width: 20%;
    height: 2%;
    display: inline-block;
}

tbody tr td {
    height: 1em;
    vertical-align: top;
    text-align: left;
    padding-left: 10px;
}
</style>-->
</head>
<body>

    <div id="panel">
        <ul id="tabs">
            <li id="tab_01">
			<a href="#" onclick="tab('tab_01','panel_01');" title="<?php echo EQUIPOS_EQUIPOS; ?>">
				<i class="fa fa-pencil" style="color:#5b862a;"></i><?php echo EQUIPOS_EQUIPOS; ?></a>
			</li>
			<li id="tab_02">
				<a href="#" onclick="tab('tab_02','panel_02');" title="<?php echo CALIBRACIONES; ?>">
				<i class="fa fa-pencil" style="color:#FFC107;"></i><?php echo CALIBRACIONES; ?></a>
			</li>
        </ul>
        <div id="paneles">
            <div id="panel_01">

                <table class="table">
                    <tr>
                    <td>
					<a href="?seccion=equipos_admin&amp;aktion=add" title="<?php echo EQUIPOS_ANADIR; ?>">
                        <i class="fa fa-plus" style="color:#EAB135;"></i></a>
					</td>
					<td>
						<a href="?seccion=equipos_admin&amp;aktion=change" title="<?php echo EQUIPOS_EDITAR; ?>">
							<i class="fa fa-pencil" style="color:#EAB135;"></i></a>
					</td>
					<td>
						<a href="?seccion=listaequipos" title="<?php echo EQUIPOS_LISTA; ?>">
							<i class="fa fa-list-ul" style="color:#EAB135;"></i></a>
					</td>
					<td>
						<a href="?seccion=equipos_print&amp;aktion=print" title="<?php echo EQUIPOS_PRINT_DETAILS; ?>">
							<i class="fa fa-print" style="color:#EAB135;"></i></a>
					</td>
					<td>
						<a href="?seccion=checkbox3_equipos" title="<?php echo EQUIPOS_BORRAR; ?>">
							<i class="fa fa-trash-o" style="color:#EAB135;"></i></a>
					</td>
					<td>
						<a href="?seccion=calibraciones_por_equipo&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_CALIBRACIONES; ?>">
							<i class="fa fa-retweet" style="color:#EAB135; "></i></a>
					</td>
					<td>
						<a href="?seccion=calibraciones_admin" title="<?php echo CALIBRACIONES_ANADIR; ?>">
							<i class="fa fa-plus" style="color:LightCoral;"></i></a>
					</td>
					<td>
						<a href="?seccion=calibraciones_admin" title="<?php echo CALIBRACIONES_MODIFICAR; ?>">
							<i class="fa fa-pencil" style="color:LightCoral;"></i></a>
					</td>
					<td>
						<a href="?seccion=calibraciones_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_CALIBRACIONES; ?>">
							<i class="fa fa-print" style="color:LightCoral;"></i></a>
					</td>
					<td>
						<a href="?seccion=checkbox3_calibraciones" title="<?php echo MENU_ALT_BORRAR_CALIBRACIONES; ?>">
							<i class="fa fa-trash-o" style="color:LightCoral;"></i></a>
					</td>
					<td>
						<a href="?seccion=buscacalibraciones" title="<?php echo MENU_ALT_BUSCAR_CALIBRACIONES; ?>">
							<i class="fa fa-search" style="color:LightCoral;"></i></a>
					</td>
					<td>
						<a href="?seccion=listacalibraciones" title="<?php echo MENU_ALT_LISTA_CALIBRACIONES; ?>">
							<i class="fa fa-list-ul" style="color:LightCoral;"></i></a>
					</td>
                    </tr>
                </table>


            </div>
            <div id="panel_02">


                <span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=calibraciones_admin&amp;aktion=add"><i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:LightCoral;"></i></a>
				</span>
				<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=calibraciones_admin&amp;aktion=change"><i class="fa fa-edit" style="position:absolute; left:30px; top:0px; color:LightCoral;"></i></a>
				</span>	
				<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=calibraciones_print&amp;aktion=print"><i class="fa fa-print" style="position:absolute; left:60px; top:0px; color:LightCoral;"></i></a>
				</span>
				<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=checkbox3_calibraciones"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:0px; color:LightCoral;"></i></a>
				</span>
				<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=buscacalibraciones"><i class="fa fa-search" style="position:absolute; left:120px; top:0px; color:LightCoral;"></i></a>
				</span>
				<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=listacalibraciones"><i class="fa fa-list-ul" style="position:absolute; left:150px; top:0px; color:LightCoral;"></i></a>
				</span>
				<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=calibraciones_por_equipo&amp;aktion=print"><i class="fa fa-retweet" style="position:absolute; left:180px; top:0px; color:LightCoral;"></i></a>
				</span>

            </div>
          
        </div>
        <script type="text/javascript">
        tab('tab_01','panel_01');
        tab('tab_02','panel_02');
    </script>
    </div>
</body>
</html>