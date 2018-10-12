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
<script src="jscripts/sistemadepestanas.js" type="text/javascript"></script>
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
				<a href="#" onclick="tab('tab_01','panel_01');" title="<?php echo AUDITORIAS; ?>">
					<i class="fa fa-edit fa-2x" style="color:#FF5722;"></i> <?php echo AUDITORIAS; ?>
				</a>
			</li>
            <li id="tab_02">
				<a href="#" onclick="tab('tab_02','panel_02');" title="<?php echo MENU_AINFORMES; ?>">
					<i class="fa fa-edit fa-2x" style="color:#1A237E;"></i> <?php echo MENU_AINFORMES; ?>
				</a>
			</li>
            <li id="tab_03">
				<a href="#" onclick="tab('tab_03','panel_03');" title="<?php echo MENU_INSPECCIONES; ?>">
					<i class="fa fa-edit fa-2x" style="color:#ffc107;"></i> <?php echo MENU_INSPECCIONES; ?>
				</a>
			</li>
			<li id="tab_04">
				<a href="#" onclick="tab('tab_04','panel_04');" title="<?php echo MENU_NCS; ?>">
					<i class="fa fa-edit fa-2x" style="color:#9fff30;"></i><?php echo MENU_NCS; ?>
				</a>
			</li>
			<li id="tab_05">
				<a href="#" onclick="tab('tab_05','panel_05');" title="<?php echo MENU_OBJETIVOS; ?>">
					<i class="fa fa-edit fa-2x" style="color:#752209;"></i><?php echo MENU_OBJETIVOS; ?>
				</a>
			</li>
			<li id="tab_06">
				<a href="#" onclick="tab('tab_06','panel_06');" title="<?php echo INDICADORES_INDICADORES; ?>">
					<i class="fa fa-signal fa-2x" style="color:orange;"></i> <?php echo INDICADORES_INDICADORES; ?>
				</a>
			</li>
            
            
            
        </ul>

        <div id="paneles">
            <div id="panel_01">

                <table class="table">
                    <tr>
                        <td>
                            <!--<p class="ToolText"
                                onMouseOver="javascript:this.className='ToolTextHover'"
                                onMouseOut="javascript:this.className='ToolText'">
                                <a href="?seccion=aisgc_admin&amp;aktion=add" title="< ?php echo AUDITORIAS_ANADIR_AUDITORIA; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#FF5722;"></i>
                                <span>< ?php echo AUDITORIAS_ANADIR_AUDITORIA; ?></span></a>
                            </p>
							
							<p align="left">
								<a class="tooltip2" href="#">< ?php echo CODIGO; ?><span class="custom help"><img src="images/Help2.png" alt="< ?php echo AYUDA; ?>" title="< ?php echo AYUDA; ?>" height="48" width="48" /><em>
								< ?php echo AYUDA; ?></em>< ?php echo AUDITORIAS_ANADIR_AUDITORIA; ?></span></a>
							</p>-->
							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_ANADIR_AUDITORIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_admin&amp;aktion=add" title="<?php echo AUDITORIAS_ANADIR_AUDITORIA; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#FF5722;"></i></a>
							</span>							
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_admin&amp;aktion=change" title="<?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#FF5722;"></i></a>
							</span>

                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_aisgc" title="<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>">
                                <i class="fa fa-trash fa-2x" style="color:#FF5722;"></i></a>
							</span>
                        </td>
                        <td>    
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>">
                                <i class="fa fa-print fa-2x" style="color:#FF5722;"></i></a>
							</span>
                        </td>
                        <td>    
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscaisgc" title="<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>">
                                <i class="fa fa-search fa-2x" style="color:#FF5722;"></i></a>
							</span>
                        </td>
                        <td>    
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listaisgc" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#FF5722;"></i></a>
							</span>
                        </td>
                    </tr>
                </table>

            </div>
            <div id="panel_02">


                <table class="table">
                    <tr>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo AINFORMES_ANADIR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditorias_admin&amp;aktion=add" title="<?php echo AINFORMES_ANADIR; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#1A237E;"></i></a>
							</span>

                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo AINFORMES_EDITAR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditorias_admin&amp;aktion=change" title="<?php echo AINFORMES_EDITAR; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#1A237E;"></i></a>
							</span>
							
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_auditorias" title="<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>">
                                <i class="fa fa-trash fa-2x" style="color:#1A237E;"></i></a>
							</span>
							
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_auditorias" title="<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>">
                                <i class="fa fa-print fa-2x" style="color:#1A237E;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=paginatormysqliainc" title="<?php echo NCS_IMPRIMIR_NCS; ?>">
                                <i class="fa fa-retweet fa-2x" style="color:#1A237E;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscauditorias" title="<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>">
                                <i class="fa fa-search fa-2x" style="color:#1A237E;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listauditorias" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#1A237E;"></i></a>
							</span>

                        </td>
                    </tr>
                </table>


            </div>
            <div id="panel_03">

                <table class="table">
                    <tr>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_ANADIR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_admin&aktion=add" title="<?php echo INSPECCIONES_ANADIR_INSPECCION; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#ffc107;"></i></a>
							</span>

                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_EDITAR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_admin&aktion=change" title="<?php echo INSPECCIONES_EDITAR_INSPECCION; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#ffc107;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>">
                                <i class="fa fa-print fa-2x" style="color:#ffc107;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_inspecciones" title="<?php echo MENU_ALT_BORRAR_INSPECCION; ?>">
                                <i class="fa fa-trash-o fa-2x" style="color:#ffc107;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscainspecciones" title="<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>">
                                <i class="fa fa-search fa-2x" style="color:#ffc107;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo LISTA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listainspecciones" title="<?php echo LISTA; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#ffc107;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_por_servicio&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>">
                                <i class="fa fa-retweet fa-2x" style="color:#ffc107;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_ANADIR_CODIGOSINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidenciasinspecciones_admin&amp;aktion=add" title="<?php echo INSPECCIONES_ANADIR_CODIGOSINCIDENCIA; ?>">
                                <i class="fa fa-plus fa-2x" style="color:cornsilk;"></i></a>
							</span>
 
                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidenciasinspecciones_admin&amp;aktion=change" title="<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:cornsilk;"></i></a>
							</span>
 
                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_codigosincidenciasinspecciones" title="<?php echo BORRAR; echo"&nbsp;"; echo CODIGO_INCIDENCIA; ?>">
                                <i class="fa fa-trash fa-2x" style="color:cornsilk;"></i></a>
							</span>
 
                        </td>						
                    </tr>
                </table>

            </div>

            <div id="panel_04">
                <table class="table">
                    <tr>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_ANADIR_NC; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncs_admin&amp;aktion=add" title="<?php echo NCS_ANADIR_NC; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_EDITAR_NC; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncs_admin&amp;aktion=change" title="<?php echo NCS_EDITAR_NC; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_BORRAR_NC; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_ncs" title="<?php echo NCS_BORRAR_NC; ?>">
                                <i class="fa fa-trash-o fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_LISTA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listancs" title="<?php echo NCS_LISTA; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=paginatormysqliainc" title="<?php echo NCS_IMPRIMIR_NCS; ?>">
                                <i class="fa fa-retweet fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncs_print&amp;aktion=print" title="<?php echo NCS_IMPRIMIR; ?>">
                                <i class="fa fa-print fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_BUSCAR_NCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscancs" title="<?php echo NCS_BUSCAR_NCS; ?>">
                                <i class="fa fa-search fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_PORAREA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncsporarea" title="<?php echo NCS_PORAREA; ?>">
                                <i class="fa fa-signal fa-2x" style="color:#9fff30;"></i></a>
							</span>
 
                        </td>
                    </tr>
                </table>

            </div>
            
            
            <div id="panel_05">


                <table class="table">
                    <tr>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=objetivos_admin&amp;aktion=add" title="<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
						 <td>
						 
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=objetivos_admin&amp;aktion=change" title="<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
						<td>
						 
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_objetivos" title="<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>">
                                <i class="fa fa-trash fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=objetivos_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>">
                                <i class="fa fa-print fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_objetivos" title="<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>">
                                <i class="fa fa-v fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscaobjetivos" title="<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>">
                                <i class="fa fa-search fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=seguimientos_admin&aktion=add" title="<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>">
                                <i class="fa fa-plus fa-2x" style="color:Gold;"></i></a>
							</span>
 
                        </td>
						 <td>
						 
							<span onMouseOver="showdiv(event,'<?php echo OBJETIVOS_CAMBIAR_SEGUIMIENTO; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=seguimientos_admin&aktion=change" title="<?php echo OBJETIVOS_CAMBIAR_SEGUIMIENTO; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:Gold;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo OBJETIVOS_BORRAR_TAREA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_tareasobjetivos" title="<?php echo OBJETIVOS_BORRAR_TAREA; ?>">
                                <i class="fa fa-trash fa-2x" style="color:Gold;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=lista_objetivos_y_seguimientos" title="<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=lista_tareas" title="<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>">
                                <i class="fa fa-retweet fa-2x" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                    </tr>
                </table>

            </div>
            
            
            
            <div id="panel_06">

                <table class="table">
                    <tr>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_TODOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=todos_select" title="<?php echo INDICADORES_TODOS; ?>">
                                <i class="fa fa-signal fa-2x" style="color:yellow;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_NCSPORAREA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncsporarea" title="<?php echo INDICADORES_NCSPORAREA; ?>">
                                <i class="fa fa-signal fa-2x" style="color:#FF5722;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=desviacioncierresncs" title="<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>">
                                <i class="fa fa-signal fa-2x" style="color:pink;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=totalhorasformacionportrabajador" title="<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>">
                                <i class="fa fa-signal fa-2x" style="color:lime;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficacontrolavisos" title="<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>">
                                <i class="fa fa-signal fa-2x" style="color:orange;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficaincidenciasinspecciones" title="<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>">
                                <i class="fa fa-signal fa-2x" style="color:silver;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficaincidenciasalmacen" title="<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>">
                                <i class="fa fa-signal fa-2x" style="color:fuchsia;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficaincidenciasdeproveedor" title="<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>">
                                <i class="fa fa-signal fa-2x" style="color:DarkKhaki;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_VALORACIONGLOBALMANTENIMIENTOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=globalmantenimientos" title="<?php echo INDICADORES_VALORACIONGLOBALMANTENIMIENTOS; ?>">
                                <i class="fa fa-signal fa-2x" style="color:Turquoise;"></i></a>
							</span>
 
                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo VALORACIONES_GLOBALES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=valoracionglobalclientes2" title="<?php echo VALORACIONES_GLOBALES; ?>">
                                <i class="fa fa-signal fa-2x" style="color:Turquoise;"></i></a>
							</span>
 
                        </td>
                    </tr>
                </table>

            </div>

        </div>
        <script type="text/javascript">
        tab('tab_01','panel_01');
        tab('tab_02','panel_02');
        tab('tab_03','panel_03');
        tab('tab_04','panel_04');
        tab('tab_05','panel_05');
        tab('tab_06','panel_06');        
    </script>
    </div>
</body>
</html>