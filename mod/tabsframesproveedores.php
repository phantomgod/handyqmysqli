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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			
			<li id="tab_01"><a href="#" onclick="tab('tab_01','panel_01');">
				<i class="fa fa-edit fa-2x" style="color:#9fff30;"></i>
				<?php echo MENU_PROVEEDORES; ?></a></li>
			<li id="tab_02"><a href="#" onclick="tab('tab_02','panel_02');">
				<i class="fa fa-edit fa-2x" style="color:OrangeRed;"></i>
				<?php echo PROVEEDORES_INCIDENCIAS; ?></a></li>
			<li id="tab_03"><a href="#" onclick="tab('tab_03','panel_03');">
				<i class="fa fa-edit fa-2x" style="color:Orchid;"></i>
				<?php echo PROVEEDORES_CODIGOSINCIDENCIAS; ?></a></li>
			<li id="tab_04"><a href="#" onclick="tab('tab_04','panel_04');">
				<i class="fa fa-edit fa-2x" style="color:DeepSkyBlue;"></i>
				<?php echo PROVEEDORES_AREASSENSIBLES; ?></a></li>			
		</ul>
		<div id="paneles">
			
			<div id="panel_01">

				<!--********************************************PROVEEDORES**********************************************************-->
				<table class="table">
					<tr>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANADIR_PROVEEDOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=proveedores_admin&aktion=add" title="<?php echo PROVEEDORES_ANADIR_PROVEEDOR; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#9fff30;"></i></a>
							</span>
						

						</td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_PROVEEDOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=proveedores_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_PROVEEDOR; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#9fff30;"></i></a>
							</span>
						

						</td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_PROVEEDOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_proveedores" title="<?php echo PROVEEDORES_BORRAR_PROVEEDOR; ?>">
                                <i class="fa fa-trash-o fa-2x" style="color:#9fff30;"></i></a>
							</span>

							
						</td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_LISTA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listaproveedores" title="<?php echo PROVEEDORES_LISTA; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#9fff30;"></i></a>
							</span>
						
						</td>
						
						
						
					</tr>
				</table>

				

				<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
					src="images/proveedores.png" width="200px" alt="<?php echo PROVEEDORES_PROVEEDORES; ?>" title="<?php echo PROVEEDORES_PROVEEDORES; ?>" />


				<!--**************************************************************************************************************************-->

			</div>
			<div id="panel_02">


				<!--****************************************INCIDENCIAS******************************************************-->
				<table class="table">
					<tr>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANOTAR_INCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=incidencias_proveedor_admin&aktion=add" title="<?php echo PROVEEDORES_ANOTAR_INCIDENCIA; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#FF5722;"></i></a>
						</span>
						

						</td>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_INCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=incidencias_proveedor_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_INCIDENCIA; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#FF5722;"></i></a>
						</span>
						

						</td>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_INCIDENCIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_incidenciasproveedor" title="<?php echo PROVEEDORES_BORRAR_INCIDENCIAS; ?>">
                                <i class="fa fa-trash-o fa-2x" style="color:#FF5722;"></i></a>
						</span>
						
						</td>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_INCIDENCIAS_PORPROVEEDOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=incidencias_por_proveedor&amp;aktion=print" title="<?php echo PROVEEDORES_INCIDENCIAS_PORPROVEEDOR; ?>">
                                <i class="fa fa-retweet fa-2x" style="color:#FF5722;"></i></a>
						</span>
						

						</td>
						
						
					</tr>
				</table>
				
				<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
					src="images/flash.png" width="150px" alt="<?php echo PROVEEDORES_INCIDENCIAS; ?>" title="<?php echo PROVEEDORES_INCIDENCIAS; ?>" />
				
				<!--**************************************************************************************************************************-->

			</div>
			<div id="panel_03">

				<!--*******************************************CODIGOSINCIDENCIAS*************************************************-->

				<table class="table">
					<tr>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANADIR_CODIGOINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidencias_admin&aktion=add" title="<?php echo PROVEEDORES_ANADIR_CODIGOINCIDENCIA; ?>">
                                <i class="fa fa-plus fa-2x" style="color:Orchid"></i></a>
						</span>
						

						</td>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidencias_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:Orchid"></i></a>
						</span>
						

						</td>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_codigosincidencias" title="<?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?>">
                                <i class="fa fa-trash-o fa-2x" style="color:Orchid"></i></a>
						</span>
						

						</td>
					</tr>
				</table>

				<!--**************************************************************************************************************************-->


				<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
					src="images/warning.png" alt="<?php echo PROVEEDORES_CODIGOSINCIDENCIAS; ?>" title="<?php echo PROVEEDORES_CODIGOSINCIDENCIAS; ?>" />

			</div>
			
		<!--**************************************************************************************************************************-->			
			<div id="panel_04">

				<table class="table">
					<tr>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANADIR_AREASENSIBLE; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidencias_admin&aktion=add" title="<?php echo PROVEEDORES_ANADIR_AREASENSIBLE; ?>">
                                <i class="fa fa-plus fa-2x" style="color:DeepSkyBlue"></i></a>
						</span>
						

						</td>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_AREASENSIBLE; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidencias_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_AREASENSIBLE; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:DeepSkyBlue;"></i></a>
						</span>
						

						</td>
						<td>
						
						<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_AREASSENSIBLES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_areassensibles" title="<?php echo PROVEEDORES_BORRAR_AREASSENSIBLES; ?>">
                                <i class="fa fa-trash-o fa-2x" style="color:DeepSkyBlue"></i></a>
						</span>

						</td>
					</tr>
				</table>
			</div>
			
		<!--**************************************************************************************************************************-->
			
			
	</div>
		<script type="text/javascript">
        tab('tab_01','panel_01');
        tab('tab_02','panel_02');
        tab('tab_03','panel_03');
        tab('tab_04','panel_04');
    </script>
	</div>
</body>
</html>