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
<style type="text/css">
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


</style>
</head>
<body>

	<div id="panel">
		<ul id="tabs">
			<li id="tab_01"><a href="#" onclick="tab('tab_01','panel_01');" title="<?php echo GENERAL_AUDITORIAS; ?>"><i class="fa fa-pencil fa-2x" style="color:red;"
			></i><?php echo GENERAL_AUDITORIAS; ?></a></li>
			<li id="tab_02"><a href="#" onclick="tab('tab_02','panel_02');" title="<?php echo MENU_AINFORMES; ?>"><i class="fa fa-pencil fa-2x" style="color:dodgerblue;"
			></i><?php echo MENU_AINFORMES; ?></a></li>
			<li id="tab_03"><a href="#" onclick="tab('tab_03','panel_03');" title="<?php echo MENU_INSPECCIONES; ?>"><i class="fa fa-pencil fa-2x" style="color:black;"
			></i><?php echo MENU_INSPECCIONES; ?></a></li>
			<li id="tab_04"><a href="#" onclick="tab('tab_04','panel_04');" title="<?php echo MENU_NCS; ?>"><i class="fa fa-pencil fa-2x" style="color:green;"
			></i><?php echo MENU_NCS; ?></a></li>
			<li id="tab_05"><a href="#" onclick="tab('tab_05','panel_05');" title="<?php echo MENU_OBJETIVOS; ?>"><i class="fa fa-pencil fa-2x" style="color:saddlebrown;"
			></i><?php echo MENU_OBJETIVOS; ?></a></li>
			<li id="tab_06"><a href="#" onclick="tab('tab_06','panel_06');" title="<?php echo INDICADORES_INDICADORES; ?>"><i class="fa fa-signal fa-2x" style="color:orange;"
			></i> <?php echo INDICADORES_INDICADORES; ?></a></li>

		</ul>

		<div id="paneles">
			<div id="panel_01">

				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=aisgc_admin" title="<?php echo MENU_ALT_ADMINISTRAR_AUDITORIAS; ?>"><button><i class="fa fa-pencil fa-2x" style="color:red;"
								></i></button><span><?php echo MENU_ALT_ADMINISTRAR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=checkbox3_aisgc" title="<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>"><button><i class="fa fa-trash-o fa-2x" style="color:red;"
								></i></button><span><?php echo MENU_ALT_BORRAR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=aisgc_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>"><button><i class="fa fa-print fa-2x" style="color:red;"
								></i></button><span><?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=buscaisgc" title="<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>"><button><i class="fa fa-search fa-2x" style="color:red;"
								></i></button><span><?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=listaisgc" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>"><button><i class="fa fa-list-ul fa-2x" style="color:red;"
								></i></button><span><?php echo MENU_ALT_LISTA_AUDITORIAS; ?></span></a></p></td>
					</tr>
				</table>

			</div>
			<div id="panel_02">


				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=auditorias_admin" title="<?php echo MENU_ALT_ADMINISTRAR_AINFORMES; ?>"><button><i class="fa fa-edit fa-2x" style="color:dodgerblue;"
						        ></i></button><span><?php echo MENU_ALT_ADMINISTRAR_AINFORMES; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=checkbox3_auditorias" title="<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>"><button><i class="fa fa-trash-o fa-2x" style="color:dodgerblue;"
						></i></button><span><?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=auditorias_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>"><button><i class="fa fa-print fa-2x" style="color:dodgerblue;"
						></i></button><span><?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=ai_nc" title="<?php echo NCS_IMPRIMIR_NCS; ?>"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:dodgerblue;"
						></i></button><span><?php echo NCS_IMPRIMIR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=buscauditorias" title="<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>"><button><i class="fa fa-search fa-2x" style="color:dodgerblue;"
						></i></button><span><?php echo MENU_ALT_BUSCAR_AINFORMES; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=listauditorias" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>"><button><i class="fa fa-list-ul fa-2x" style="color:dodgerblue;"
						></i></button><span><?php echo MENU_ALT_LISTA_AUDITORIAS; ?></span></a></p></td>
					</tr>
				</table>


			</div>
			<div id="panel_03">

				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=inspecciones_admin" title="<?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?>"><button><i class="fa fa-pencil fa-2x" style="color:black;"
						></i></button><span><?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=inspecciones_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>"><button><i class="fa fa-print fa-2x" style="color:black;"
						></i></button><span><?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=checkbox3_inspecciones" title="<?php echo MENU_ALT_BORRAR_INSPECCION; ?>"><button><i class="fa fa-trash-o fa-2x" style="color:black;"
						></i></button><span><?php echo MENU_ALT_BORRAR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=buscainspecciones" title="<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>"><button><i class="fa fa-search fa-2x" style="color:black;"
						></i></button><span><?php echo MENU_ALT_BUSCAR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=listainspecciones" title="<?php echo GENERAL_LISTA; ?>"><button><i class="fa fa-list-ul fa-2x" style="color:black;"
						></i></button><span><?php echo GENERAL_LISTA; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=inspecciones_por_servicio&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:black;"
						></i></button><span><?php echo MENU_ALT_JOIN_INSPECCIONES; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=codigosincidenciasinspecciones_admin" title="<?php echo GENERAL_CODIGO; ?>"><button><i class="fa fa-edit fa-2x" style="color:grey;"
						></i></button><span><?php echo GENERAL_CODIGO; ?></span></a></p></td>
					</tr>
				</table>

			</div>

			<div id="panel_04">


				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=ncs_admin" title="<?php echo NCS_ADMINISTRAR_NCS; ?>"><button><i class="fa fa-pencil fa-2x" style="color:green;"
						 ></i></button><span><?php echo NCS_ADMINISTRAR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=checkbox3_ncs" title="<?php echo NCS_BORRAR_NC; ?>"><button><i class="fa fa-trash-o fa-2x" style="color:green;"
						 ></i></button><span><?php echo NCS_BORRAR_NC; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=listancs" title="<?php echo NCS_LISTA; ?>"><button><i class="fa fa-list-ul fa-2x" style="color:green;"
						 ></i></button><span><?php echo NCS_LISTA; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=ai_nc" title="<?php echo NCS_IMPRIMIR_NCS; ?>"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:green;"
						 ></i></button><span><?php echo NCS_IMPRIMIR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=ncs_print&amp;aktion=print" title="<?php echo NCS_IMPRIMIR; ?>"><button><i class="fa fa-print fa-2x" style="color:green;"
						 ></i></button><span><?php echo NCS_IMPRIMIR; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=buscancs" title="<?php echo NCS_BUSCAR_NCS; ?>"><button><i class="fa fa-search fa-2x" style="color:green;"
						 ></i></button><span><?php echo NCS_BUSCAR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=ncsporarea" title="<?php echo NCS_PORAREA; ?>"><button><i class="fa fa-signal fa-2x" style="color:green;"
						 ></i></button><span><?php echo NCS_PORAREA; ?></span></a></p></td>
					</tr>
				</table>

			</div>
			
			
			<div id="panel_05">
				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=objetivos_admin" title="<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>"><button><i class="fa fa-pencil fa-2x" style="color:saddlebrown;"
						 ></i></button><span><?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=objetivos_print&aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>"><button><i class="fa fa-print fa-2x" style="color:saddlebrown;"
						 ></i></button><span><?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=checkbox3_objetivos" title="<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>"><button><i class="fa fa-trash-o fa-2x" style="color:saddlebrown;"
						 ></i></button><span><?php echo MENU_ALT_BORRAR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=ai_nc" title="<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>"><button><i class="fa fa-search fa-2x" style="color:saddlebrown;"
						 ></i></button><span><?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=seguimientos_admin" title="<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>"><button><i class="fa fa-edit fa-2x" style="color:#D85A00;"
						 ></i></button><span><?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=checkbox3_tareasobjetivos" title="<?php echo OBJETIVOS_BORRAR_TAREA; ?>"><button><i class="fa fa-trash-o fa-2x" style="color:#D85A00;"
						 ></i></button><span><?php echo OBJETIVOS_BORRAR_TAREA; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=lista_objetivos_y_seguimientos" title="<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>"><button><i class="fa fa-list-ul fa-2x" style="color:saddlebrown;"
						 ></i></button><span><?php echo MENU_ALT_LISTA_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
								<a href="?seccion=seguimientos_por_objetivo&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:saddlebrown;"
						 ></i></button><span><?php echo MENU_ALT_JOIN_OBJETIVOS; ?></span></a></p></td>
					</tr>
				</table>
			</div>
			
			
			
			<div id="panel_06">

				<table class="table">
					<tr>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=todos_select" ><button><i class="fa  fa-signal fa-2x" style="color:yellow;"
					alt="<?php echo INDICADORES_TODOS; ?>" title="<?php echo INDICADORES_TODOS; ?>" /></i></button><span><?php echo INDICADORES_TODOS; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=ncsporarea" ><button><i class="fa  fa-signal fa-2x" style="color:red;"
					alt="<?php echo INDICADORES_NCSPORAREA; ?>" title="<?php echo INDICADORES_NCSPORAREA; ?>" /></i></button><span><?php echo INDICADORES_NCSPORAREA; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=desviacioncierresncs" ><button><i class="fa  fa-signal fa-2x" style="color:pink;"
					alt="<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>" title="<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>" /></i></button><span><?php echo INDICADORES_DESVIACIONCIERRESNCS; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=totalhorasformacionportrabajador" ><button><i class="fa  fa-signal fa-2x" style="color:lime;"
					alt="<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>" title="<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>" /></i></button><span><?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=graficacontrolavisos" ><button><i class="fa  fa-signal fa-2x" style="color:orange;"
					alt="<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>" title="<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>" /></i></button><span><?php echo INDICADORES_GRAFICACONTROLAVISOS; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=graficaincidenciasinspecciones" ><button><i class="fa  fa-signal fa-2x" style="color:silver;"
					alt="<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>" title="<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>" /></i></button><span><?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=graficaincidenciasalmacen" ><button><i class="fa  fa-signal fa-2x" style="color:fuchsia;"
					alt="<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>" title="<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>" /></i></button><span><?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=graficaincidenciasdeproveedor" ><button><i class="fa  fa-signal fa-2x" style="color:DarkKhaki;"
					alt="<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>" title="<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>" /></i></button><span><?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="this.className='ToolTextHover'"
								onMouseOut="this.className='ToolText'">
					<a href="?seccion=valoracionglobalclientes" ><button><i class="fa  fa-signal fa-2x" style="color:Turquoise;"
					alt="<?php echo INDICADORES_VALORACIONGLOBALCLIENTES; ?>" title="<?php echo INDICADORES_VALORACIONGLOBALCLIENTES; ?>" /></i></button><span><?php echo INDICADORES_VALORACIONGLOBALCLIENTES; ?></span></a></p>
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