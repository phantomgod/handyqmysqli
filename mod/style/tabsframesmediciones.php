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
			<li id="tab_01"><a href="#" onclick="tab('tab_01','panel_01');"><i class="fa fa-pencil fa-2x" style="color:#FF5722;" 
			alt="<?php echo AUDITORIAS; ?>" title="<?php echo AUDITORIAS; ?>"></i><?php echo AUDITORIAS; ?></a></li>
			<li id="tab_02"><a href="#" onclick="tab('tab_02','panel_02');"><i class="fa fa-pencil fa-2x" style="color:#1A237E;" 
			alt="<?php echo MENU_AINFORMES; ?>" title="<?php echo MENU_AINFORMES; ?>"></i><?php echo MENU_AINFORMES; ?></a></li>
			<li id="tab_03"><a href="#" onclick="tab('tab_03','panel_03');"><i class="fa fa-pencil fa-2x" style="color:black;" 
			alt="<?php echo MENU_INSPECCIONES; ?>" title="<?php echo MENU_INSPECCIONES; ?>"></i><?php echo MENU_INSPECCIONES; ?></a></li>
			<li id="tab_04"><a href="#" onclick="tab('tab_04','panel_04');"><i class="fa fa-pencil fa-2x" style="color:#9fff30;" 
			alt="<?php echo MENU_NCS; ?>" title="<?php echo MENU_NCS; ?>"></i><?php echo MENU_NCS; ?></a></li>
			<li id="tab_05"><a href="#" onclick="tab('tab_05','panel_05');"><i class="fa fa-pencil fa-2x" style="color:#752209;" 
			alt="<?php echo MENU_OBJETIVOS; ?>" title="<?php echo MENU_OBJETIVOS; ?>"></i><?php echo MENU_OBJETIVOS; ?></a></li>
			<li id="tab_06"><a href="#" onclick="tab('tab_06','panel_06');"><i class="fa fa-signal fa-2x" style="color:orange;" 
			alt="<?php echo INDICADORES_INDICADORES; ?>" title="<?php echo INDICADORES_INDICADORES; ?>"></i> <?php echo INDICADORES_INDICADORES; ?></a></li>
			
			
			
		</ul>

		<div id="paneles">
			<div id="panel_01">

				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=aisgc_admin"><button><i class="fa fa-pencil fa-2x" style="color:#FF5722;" 
								alt="<?php echo MENU_ALT_ADMINISTRAR_AUDITORIAS; ?>" title="<?php echo MENU_ALT_ADMINISTRAR_AUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_ADMINISTRAR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=checkbox3_aisgc"><button><i class="fa fa-trash-o fa-2x" style="color:#FF5722;"
								alt="<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>" title="<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_BORRAR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=aisgc_print&amp;aktion=print"><button><i class="fa fa-print fa-2x" style="color:#FF5722;"
								alt="<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>" title="<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=buscaisgc"><button><i class="fa fa-search fa-2x" style="color:#FF5722;"
								alt="<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>" title="<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?></span></a></p></td>
						<td>	
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=listaisgc"><button><i class="fa fa-list-ul fa-2x" style="color:#FF5722;"
								alt="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_LISTA_AUDITORIAS; ?></span></a></p></td>
					</tr>
				</table>

			</div>
			<div id="panel_02">


				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=auditorias_admin"><button><i class="fa fa-edit fa-2x" style="color:#1A237E;"
						alt="<?php echo MENU_ALT_ADMINISTRAR_AINFORMES; ?>" title="<?php echo MENU_ALT_ADMINISTRAR_AINFORMES; ?>"></i></button><span><?php echo MENU_ALT_ADMINISTRAR_AINFORMES; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=checkbox3_auditorias"><button><i class="fa fa-trash-o fa-2x" style="color:#1A237E;"
						alt="<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>" title="<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=auditorias_print&amp;aktion=print"><button><i class="fa fa-print fa-2x" style="color:#1A237E;"
						alt="<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>" title="<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=ai_nc"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:#1A237E;"
						alt="<?php echo NCS_IMPRIMIR_NCS; ?>" title="<?php echo NCS_IMPRIMIR_NCS; ?>"></i></button><span><?php echo NCS_IMPRIMIR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=buscauditorias"><button><i class="fa fa-search fa-2x" style="color:#1A237E;"
						alt="<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>" title="<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>"></i></button><span><?php echo MENU_ALT_BUSCAR_AINFORMES; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=listauditorias"><button><i class="fa fa-list-ul fa-2x" style="color:#1A237E;"
						alt="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>"></i></button><span><?php echo MENU_ALT_LISTA_AUDITORIAS; ?></span></a></p></td>
					</tr>
				</table>


			</div>
			<div id="panel_03">

				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=inspecciones_admin"><button><i class="fa fa-pencil fa-2x" style="color:black;"
						alt="<?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?>" title="<?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?>"></i></button><span><?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=inspecciones_print&amp;aktion=print"><button><i class="fa fa-print fa-2x" style="color:black;"
						alt="<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>" title="<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>"></i></button><span><?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=checkbox3_inspecciones"><button><i class="fa fa-trash-o fa-2x" style="color:black;"
						alt="<?php echo MENU_ALT_BORRAR_INSPECCION; ?>" title="<?php echo MENU_ALT_BORRAR_INSPECCION; ?>"></i></button><span><?php echo MENU_ALT_BORRAR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=buscainspecciones"><button><i class="fa fa-search fa-2x" style="color:black;"
						alt="<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>" title="<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>"></i></button><span><?php echo MENU_ALT_BUSCAR_INSPECCION; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=listainspecciones"><button><i class="fa fa-list-ul fa-2x" style="color:black;"
						alt="<?php echo LISTA; ?>" title="<?php echo LISTA; ?>"></i></button><span><?php echo LISTA; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=inspecciones_por_servicio&amp;aktion=print"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:black;"
						alt="<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>" title="<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>"></i></button><span><?php echo MENU_ALT_JOIN_INSPECCIONES; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=codigosincidenciasinspecciones_admin"><button><i class="fa fa-edit fa-2x" style="color:grey;"
						alt="<?php echo CODIGO; ?>" title="<?php echo CODIGO; ?>"></i></button><span><?php echo CODIGO; ?></span></a></p></td>
					</tr>
				</table>

			</div>

			<div id="panel_04">


				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=ncs_admin"><button><i class="fa fa-pencil fa-2x" style="color:#9fff30;"
						alt="<?php echo NCS_ADMINISTRAR_NCS; ?>" title="<?php echo NCS_ADMINISTRAR_NCS; ?>"></i></button><span><?php echo NCS_ADMINISTRAR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=checkbox3_ncs"><button><i class="fa fa-trash-o fa-2x" style="color:#9fff30;"
						alt="<?php echo NCS_BORRAR_NC; ?>" title="<?php echo NCS_BORRAR_NC; ?>"></i></button><span><?php echo NCS_BORRAR_NC; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=listancs"><button><i class="fa fa-list-ul fa-2x" style="color:#9fff30;"
						alt="<?php echo NCS_LISTA; ?>" title="<?php echo NCS_LISTA; ?>"></i></button><span><?php echo NCS_LISTA; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=ai_nc"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:#9fff30;"
						alt="<?php echo NCS_IMPRIMIR_NCS; ?>" title="<?php echo NCS_IMPRIMIR_NCS; ?>"></i></button><span><?php echo NCS_IMPRIMIR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=ncs_print&amp;aktion=print"><button><i class="fa fa-print fa-2x" style="color:#9fff30;"
						alt="<?php echo NCS_IMPRIMIR; ?>" title="<?php echo NCS_IMPRIMIR; ?>"></i></button><span><?php echo NCS_IMPRIMIR; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=buscancs"><button><i class="fa fa-search fa-2x" style="color:#9fff30;"
						alt="<?php echo NCS_BUSCAR_NCS; ?>" title="<?php echo NCS_BUSCAR_NCS; ?>"></i></button><span><?php echo NCS_BUSCAR_NCS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=ncsporarea"><button><i class="fa fa-signal fa-2x" style="color:#9fff30;"
						alt="<?php echo NCS_PORAREA; ?>" title="<?php echo NCS_PORAREA; ?>"></i></button><span><?php echo NCS_PORAREA; ?></span></a></p></td>
					</tr>
				</table>

			</div>
			
			
			<div id="panel_05">


				<table class="table">
					<tr>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=objetivos_admin"><button><i class="fa fa-pencil fa-2x" style="color:#752209;"
						alt="<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>" title="<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>"></i></button><span><?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=objetivos_print&aktion=print"><button><i class="fa fa-print fa-2x" style="color:#752209;"
						alt="<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>" title="<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>"></i></button><span><?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=checkbox3_objetivos"><button><i class="fa fa-trash-o fa-2x" style="color:#752209;"
						alt="<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>" title="<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>"></i></button><span><?php echo MENU_ALT_BORRAR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=ai_nc"><button><i class="fa fa-search fa-2x" style="color:#752209;"
						alt="<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>" title="<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>"></i></button><span><?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=seguimientos_admin"><button><i class="fa fa-edit fa-2x" style="color:#D85A00;"
						alt="<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>" title="<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>"></i></button><span><?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=checkbox3_tareasobjetivos"><button><i class="fa fa-trash-o fa-2x" style="color:#D85A00;"
						alt="<?php echo OBJETIVOS_BORRAR_TAREA; ?>" title="<?php echo OBJETIVOS_BORRAR_TAREA; ?>"></i></button><span><?php echo OBJETIVOS_BORRAR_TAREA; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=lista_objetivos_y_seguimientos"><button><i class="fa fa-list-ul fa-2x" style="color:#752209;"
						alt="<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>" title="<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>"></i></button><span><?php echo MENU_ALT_LISTA_OBJETIVOS; ?></span></a></p></td>
						<td>
								<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
								<a href="?seccion=seguimientos_por_objetivo&amp;aktion=print"><button><i class="fa fa-refresh fa-spin fa-2x" style="color:#752209;"
						alt="<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>" title="<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>"></i></button><span><?php echo MENU_ALT_JOIN_OBJETIVOS; ?></span></a></p></td>
					</tr>
				</table>

			</div>
			
			
			
			<div id="panel_06">

				<table class="table">
					<tr>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=todos_select"><button><i class="fa  fa-signal fa-2x" style="color:yellow;" 
					alt="<?php echo INDICADORES_TODOS; ?>" title="<?php echo INDICADORES_TODOS; ?>" /></i></button><span><?php echo INDICADORES_TODOS; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=ncsporarea"><button><i class="fa  fa-signal fa-2x" style="color:#FF5722;" 
					alt="<?php echo INDICADORES_NCSPORAREA; ?>" title="<?php echo INDICADORES_NCSPORAREA; ?>" /></i></button><span><?php echo INDICADORES_NCSPORAREA; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=desviacioncierresncs"><button><i class="fa  fa-signal fa-2x" style="color:pink;" 
					alt="<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>" title="<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>" /></i></button><span><?php echo INDICADORES_DESVIACIONCIERRESNCS; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=totalhorasformacionportrabajador"><button><i class="fa  fa-signal fa-2x" style="color:lime;" 
					alt="<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>" title="<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>" /></i></button><span><?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=graficacontrolavisos"><button><i class="fa  fa-signal fa-2x" style="color:orange;" 
					alt="<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>" title="<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>" /></i></button><span><?php echo INDICADORES_GRAFICACONTROLAVISOS; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=graficaincidenciasinspecciones"><button><i class="fa  fa-signal fa-2x" style="color:silver;" 
					alt="<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>" title="<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>" /></i></button><span><?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=graficaincidenciasalmacen"><button><i class="fa  fa-signal fa-2x" style="color:fuchsia;" 
					alt="<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>" title="<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>" /></i></button><span><?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=graficaincidenciasdeproveedor"><button><i class="fa  fa-signal fa-2x" style="color:DarkKhaki;" 
					alt="<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>" title="<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>" /></i></button><span><?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?></span></a></p>
				</td>
				<td>
					<p class="ToolText"
								onMouseOver="javascript:this.className='ToolTextHover'"
								onMouseOut="javascript:this.className='ToolText'">
					<a href="?seccion=valoracionglobalclientes"><button><i class="fa  fa-signal fa-2x" style="color:Turquoise;" 
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