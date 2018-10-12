<html>
	<head>
		<style>
			body {font-family: "Lato", sans-serif;}

			ul.tab {
				list-style-type: none;
				margin: 0px;
				padding: 0;
				overflow: hidden;
				*border: 1px solid #ccc;
				*background-color: #f5f2cf;
			}

			/* Float the list items side by side */
			ul.tab li {float: left;
			    padding-left: 5px;
			}

			/* Style the links inside the list items */
			ul.tab li a {
				display: inline-block;
				color: black;
				text-align: center;
				padding: 7px 5px;
				text-decoration: none;
				transition: 0.3s;
				font-size: 17px;
			}

			/* Change background color of links on hover */
			ul.tab li a:hover {
				background-color: rgba(0,163,217,0.42);
			}

			/* Create an active/current tablink class */
			ul.tab li a:focus, .active {
				background-color: rgba(138, 140, 14, 0.16);
			}

			/* Style the tab content */
			.tabcontent {
				display: none;
				*padding: 6px 12px;
				-webkit-animation: fadeEffect 1s;
				animation: fadeEffect 1s;
			}

			@-webkit-keyframes fadeEffect {
				from {opacity: 0;}
				to {opacity: 1;}
			}

			@keyframes fadeEffect {
				from {opacity: 0;}
				to {opacity: 1;}
			}
			</style>
			
			<style type="text/css">
				table.table2 {
					border: 0px;
					position: relative;
					top: 30px;
					left: 0%;
					float: left;
					width: 30%;
					height: 2%;
					display: inline-block;
				}

				tbody tr td {
					height: 1em;
					vertical-align: top;
					text-align: left;
					padding-left: 10px;
				}
				
				.fa-rotate-45 {
					-webkit-transform: rotate(45deg);
					-moz-transform: rotate(45deg);
					-ms-transform: rotate(45deg);
					-o-transform: rotate(45deg);
					transform: rotate(45deg);
				}
				
				.mediciones {
					background-color: #80DEEA;
					width: 193px;
					position: absolute;
					left: 130px;
				}
				.home {
					background-color: #ffffff;
					width: 34px;
					position: absolute;
					left: 0px;
					}
				.documentos {
					background-color: #80ff00;
					width: 72px;
					position: absolute;
					left: 40px;
					}
				.trabajador {
					background-color: #FDD835;
					width: 194px;
					position: absolute;
					left: 340px;
					}
				.revsistema {
					background-color: #EF9A9A;
					width: 29px;
					position: absolute;
					left: 425px;
				}
				.proveedores {
					background-color: rgba(168, 168, 183, 0.39);
					width: 40px;
					position: absolute;
					left: 390px;
				}
				.calibraciones {
					background-color: rgba(168, 0, 183, 0.39);
					width: 30px;
					position: absolute;
					left: 430px;
				}
				.avisos {
					background-color: rgba(0,255,0,0.39);
					width: 38px;
					position: absolute;
					left: 550px;
				}
				.encuestas {
					background-color: #03A9F4;
					width: 38px;
					position: absolute;
					left: 600px;
				}
				
				.table2>tbody>tr>td, .table2>tbody>tr>th, .table2>tfoot>tr>td, .table2>tfoot>tr>th, .table2>thead>tr>td, .table2>thead>tr>th {
					padding: 8px;
					line-height: 1.42857143;
					vertical-align: top;
					border-top: 0px solid #ffffff !important;
				}
				.span {
					position: absolute !important;
					top: 40px;
					left: 525px;
				}
					
			</style>
			
	
	</head>
	<body>
			
			<ul class="tab">
			
	<!--************************************** UL - HOME ***************************-->
			<div class="home">
				<li>
					<a href="index.php" title="<?php echo HOME; ?>">
						<i class="fa fa-home" style="color:#000000;"></i>
					</a>
				</li>
			</div>
	<!--************************************** FIN UL - HOME ***************************-->
			
	<!--************************************** UL - MENU DOCUMENTOS ***************************-->
			<div class="documentos">
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')" title="<?php echo MENU_DOCUMENTOS; ?>">
						<i class="fa fa-book" style="color:#5b862a;"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'docmanager')" title="<?php echo BDDOC; ?>">
						<i class="fa fa-book" style="color:#311b92;"></i>
					</a>
				</li>
			</div>
	<!--************************************** UL - MENU MEDICIONES ***************************-->
			<div class="mediciones">
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'auditorias')" title="<?php echo AUDITORIAS; ?>">
						<i class="fa fa-deaf" style="color:#F44336;"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'inspecciones')" title="<?php echo MENU_INSPECCIONES; ?>">
						<i class="fa fa-eye" style="color:#673ab7;"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'ncs')" title="<?php echo MENU_NCS; ?>">
						<i class="fa fa-warning" style="color:#ff0000;"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'objetivos')" title="<?php echo MENU_OBJETIVOS; ?>">
						<i class="fa fa-long-arrow-up fa-rotate-45" style="color:#752209;"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'indicadores')" title="<?php echo INDICADORES_INDICADORES; ?>">
						<i class="fa fa-line-chart" style="color:#558B2F;"></i>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'revsistema')" title="<?php echo MENU_REVSISTEMA; ?>">
						<i class="fa fa-flash" style="color:#ff0000;"></i>
					</a>
				</li>
			</div>
	<!--******************************** UL - FIN DE MENU MEDICIONES ***************************-->

	<!--************************************** UL - MENU TRABAJADORES ***************************-->
			<div class="trabajador">

				<!--<li>
					<a href="?seccion=trabajadores_admin2c&aktion=change"><i class="fa fa-users" style="color:#263238;"></i></a>
					</a>
				</li>-->
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'trabajadores')" title="<?php echo TRABAJADORES; ?>">
						<i class="fa fa-user-secret" style="color:#846007;"></i>
					</a>
				</li>
				<li>
					
						<a href="?seccion=selectfolder" title="<?php echo UPLOADIMAGE; ?>"><i class="fa fa-upload" style="color:#9e9e9e;"></i></a>
				</li>
				<li>
						 <a href="?seccion=viewimages" title="<?php echo VERIMAGENES; ?>"><i class="fa fa-file-image-o" style="color:#616161;"></i></a>
				</li>

	
	<!--******************************** UL - FIN DE MENU TRABAJADORES ***************************-->
	
	<!--************************************** UL - MENU CURSOS ***************************-->
			
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'cursos')" title="<?php echo MENU_FORMACION; ?>">
						<i class="fa fa-graduation-cap" style="color:#000000;"></i>
					</a>
				</li>

	
	<!--************************************** UL - FIN DE MENU CURSOS ***************************-->
	
	<!--************************************** UL - MENU PROVEEDORES ***************************-->

				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'proveedores')" title="<?php echo MENU_PROVEEDORES; ?>">
						<i class="fa fa-truck" style="color:#2196F3;"></i>
					</a>
				</li>

	
	<!--************************************** UL - FIN DE MENU PROVEEDORES ***************************-->
	
		<!--************************************** UL - MENU CALIBRACIONES ***************************-->

				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'calibraciones')" title="<?php echo CALIBRACIONES; ?>">
						<i class="fa fa-arrows-v" style="color:#8d6e63;"></i>
					</a>
				</li>
		</div>
	
	<!--*************************** UL - FIN DE MENU CALIBRACIONES ***************************-->
	
	
	<!--************************************** UL - MENU AVISOS ***************************-->
			<div class="avisos">
				<li>
					<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'avisos')" title="<?php echo AVISOS_AVISOS; ?>">
						<i class="fa fa-bell-o" style="color:#ffeb3b;"></i>
					</a>
				</li>
			</div>
	
	<!--************************************** UL - FIN DE MENU AVISOS ***************************-->
	
	<!--************************************** UL - MENU ENCUESTAS ***************************-->
			<div class="encuestas">
				<li>
					<a href="?seccion=encuestas" title="<?php echo MENU_ENCUESTAS; ?>">
						<i class="fa fa-check-square-o" style="color:#ffffff;"></i>
					</a>
				</li>
			</div>
	
	<!--************************************** UL - FIN DE MENU ENCUESTAS ***************************-->
			</ul>
			
		<!--************************************** LI - MENU DOCUMENTOS ***************************-->

			<div id="London" class="tabcontent">
				  <table class="table2">
						<tr>
							<td>
								<a href="?seccion=documentos_admin&amp;aktion=add" title="<?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?>">
								<i class="fa fa-plus" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=documentos_admin&amp;aktion=change" title="<?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?>">
								<i class="fa fa-pencil" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=directoryhowto1" title="<?php echo MENU_ALT_MAPA_DOCUMENTOS; ?>">
								<i class="fa fa-sitemap" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=listadocumentos" title="<?php echo LISTA_DOCUMENTOS; ?>">
								<i class="fa fa-list-ul" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=directoryhowto3" title="<?php echo MENU_ALT_ANOTAR_DOCUMENTOS; ?>">
								<i class="fa fa-plus-square" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=directoryhowto_4" title="<?php echo MENU_ALT_APROBAR_DOCUMENTOS; ?>">
								<i class="fa fa-check-square" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=wpload"title="<?php echo MENU_ALT_SUBIR_DOCUMENTOS; ?>">
								<i class="fa fa-upload" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=buscaenlaces" title="<?php echo MENU_ALT_BUSCAR_DOCUMENTOS; ?>">
								<i class="fa fa-search" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=checkbox3_links" title="<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>">
								<i class="fa fa-trash-o" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=editdeletedocs" title="<?php echo EDITAR_BORRAR_DOCUMENTO; ?>">
								<i class="fa fa-flash" style="color:#5b862a;"></i></a>
							</td>
							<td>
								<a href="?seccion=directoryhowto_5"title="<?php echo MENU_ALT_MODIFICAR_CATEGORIAS; ?>">
								<i class="fa fa-sitemap" style="color:#48D125;"></i></a>
							</td>
							<td>
								<a href="?seccion=modifdoc_admin&amp;aktion=add" title="<?php echo DOCUMENTOS_ANOTAR_MODIFICACION; ?>">
								<i class="fa fa-plus" style="color:#FFC107;"></i></a>
							</td>
							<td>
								<a href="?seccion=modifdoc_admin&amp;aktion=change" title="<?php echo DOCUMENTOS_EDITAR_MODIFICACION; ?>">
								<i class="fa fa-pencil" style="color:#FFC107;"></i></a>
							</td>
							<td>
								<a href="?seccion=modifdoc_print&amp;aktion=print" title="<?php echo MENU_ALT_MODIFDOCPRINT; ?>">
								<i class="fa fa-print" style="color:#FFC107;"></i></a>
							</td>
							<td>
								<a href="?seccion=checkbox3_modifdoc" title="<?php echo MENU_ALT_BORRAR_MODIFDOC; ?>">
								<i class="fa fa-trash-o" style="color:#FFC107;"></i></a>
							</td>
							<td>
								<a href="?seccion=listamodificaciones" title="<?php echo DOCUMENTOS_JOIN; ?>">
								<i class="fa fa-retweet" style="color:#FFC107;"></i></a>
							</td>
							<td>
								<a href="?seccion=editdeletemodifdocs"title="<?php echo MENU_ALT_MODIFDOC; ?>" >
								<i class="fa fa-flash" style="color:#FFC107;"></i></a>
							</td>
						</tr>
					</table>
			<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span> 
			</div>
			
			<div id="docmanager" class="tabcontent">				
				<div onMouseOver="showdiv(event,'<?php echo ANADIR_BDDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_create">
						<i class="fa fa-plus" style="position:absolute; left:0px; top:40px; color:#311b92;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo EDITAR_BDDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_admin&amp;aktion=change">
						<i class="fa fa-pencil" style="position:absolute; left:30px; top:40px; color:#311b92;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=checkbox3_docmanager">
						<i class="fa fa-trash-o" style="position:absolute; left:60px; top:40px; color:#311b92;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ANOTAR_DOCMANAGER; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_create">
						<i class="fa fa-plus-square-o" style="position:absolute; left:90px; top:40px; color:#311b92;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_DOC_PRINTSCREEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_print&amp;aktion=print">
						<i class="fa fa-print" style="position:absolute; left:120px; top:40px; color:#311b92;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=tabsframesdocumentos">
						<i class="fa fa-book" style="position:absolute; left:160px; top:40px; color:white;"></i>
					</a>
				</div>
			<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span> 
			</div>
	<!--***************************** FIN DE LI - MENU DOCUMENTOS ***************************-->

	<!--***************************** LI - MENU MEDICIONES **********************************-->
	
			<div id="auditorias" class="tabcontent">
				<table class="table2">
                    <tr>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_ANADIR_AUDITORIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_admin&amp;aktion=add" title="<?php echo AUDITORIAS_ANADIR_AUDITORIA; ?>">
                                <i class="fa fa-plus" style="color:#F44336;"></i></a>
							</span>							
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_admin&amp;aktion=change" title="<?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?>">
                                <i class="fa fa-pencil" style="color:#F44336;"></i></a>
							</span>

                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_aisgc" title="<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>">
                                <i class="fa fa-trash" style="color:#F44336;"></i></a>
							</span>
                        </td>
                        <td>    
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>">
                                <i class="fa fa-print" style="color:#F44336;"></i></a>
							</span>
                        </td>
                        <td>    
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=searchaisgc" title="<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>">
                                <i class="fa fa-search" style="color:#F44336;"></i></a>
							</span>
                        </td>
                        <td>    
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listaisgc" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>">
                                <i class="fa fa-list-ul" style="color:#F44336;"></i></a>
							</span>
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo AINFORMES_ANADIR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditorias_admin&amp;aktion=add" title="<?php echo AINFORMES_ANADIR; ?>">
                                <i class="fa fa-plus" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo AINFORMES_EDITAR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditorias_admin&amp;aktion=change" title="<?php echo AINFORMES_EDITAR; ?>">
                                <i class="fa fa-pencil" style="color:#ffeb3b;"></i></a>
							</span>
							
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_auditorias" title="<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>">
                                <i class="fa fa-trash" style="color:#ffeb3b;"></i></a>
							</span>
							
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_auditorias" title="<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>">
                                <i class="fa fa-print" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=paginatormysqliainc" title="<?php echo NCS_IMPRIMIR_NCS; ?>">
                                <i class="fa fa-retweet" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscauditorias" title="<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>">
                                <i class="fa fa-search" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listauditorias" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>">
                                <i class="fa fa-list-ul" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
                    </tr>
                </table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
		<!---------------------------------------- LI - FIN DE AUDITORÍAS ----------------------->
		<!---------------------------------------- LI - INSPECCIONES ----------------------->

			<div id="inspecciones" class="tabcontent">
				 <table class="table2">
                    <tr>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_ANADIR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_admin&aktion=add" title="<?php echo INSPECCIONES_ANADIR_INSPECCION; ?>">
                                <i class="fa fa-plus" style="color:#673ab7;"></i></a>
							</span>

                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_EDITAR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_admin&aktion=change" title="<?php echo INSPECCIONES_EDITAR_INSPECCION; ?>">
                                <i class="fa fa-pencil" style="color:#673ab7;"></i></a>
							</span>

                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>">
                                <i class="fa fa-print" style="color:#673ab7;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_inspecciones" title="<?php echo MENU_ALT_BORRAR_INSPECCION; ?>">
                                <i class="fa fa-trash-o" style="color:#673ab7;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscainspecciones" title="<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>">
                                <i class="fa fa-search" style="color:#673ab7;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo LISTA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listainspecciones" title="<?php echo LISTA; ?>">
                                <i class="fa fa-list-ul" style="color:#673ab7;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspecciones_por_servicio&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>">
                                <i class="fa fa-retweet" style="color:#673ab7;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_ANADIR_CODIGOSINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidenciasinspecciones_admin&amp;aktion=add" title="<?php echo INSPECCIONES_ANADIR_CODIGOSINCIDENCIA; ?>">
                                <i class="fa fa-plus" style="color:cornsilk;"></i></a>
							</span>
 
                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=codigosincidenciasinspecciones_admin&amp;aktion=change" title="<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>">
                                <i class="fa fa-pencil" style="color:cornsilk;"></i></a>
							</span>
 
                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_codigosincidenciasinspecciones" title="<?php echo BORRAR; echo"&nbsp;"; echo CODIGO_INCIDENCIA; ?>">
                                <i class="fa fa-trash" style="color:cornsilk;"></i></a>
							</span>
 
                        </td>						
                    </tr>
                </table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
			
		<!---------------------------------------- LI - FIN DE INSPECCIONES ----------------------->
		<!---------------------------------------- LI - NCS ----------------------->
			
			<div id="ncs" class="tabcontent">
				<table class="table2">
                    <tr>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_ANADIR_NC; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncs_admin&amp;aktion=add" title="<?php echo NCS_ANADIR_NC; ?>">
                                <i class="fa fa-plus" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
						<td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_EDITAR_NC; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncs_admin&amp;aktion=change" title="<?php echo NCS_EDITAR_NC; ?>">
                                <i class="fa fa-pencil" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_BORRAR_NC; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_ncs" title="<?php echo NCS_BORRAR_NC; ?>">
                                <i class="fa fa-trash-o" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_LISTA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listancs" title="<?php echo NCS_LISTA; ?>">
                                <i class="fa fa-list-ul" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=paginatormysqliainc" title="<?php echo NCS_IMPRIMIR_NCS; ?>">
                                <i class="fa fa-retweet" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncs_print&amp;aktion=print" title="<?php echo NCS_IMPRIMIR; ?>">
                                <i class="fa fa-print" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_BUSCAR_NCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=searchncs" title="<?php echo NCS_BUSCAR_NCS; ?>">
                                <i class="fa fa-search" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo NCS_PORAREA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncsporarea" title="<?php echo NCS_PORAREA; ?>">
                                <i class="fa fa-signal" style="color:#ff0000;"></i></a>
							</span>
 
                        </td>
                    </tr>
                </table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
			
		<!--****************************** LI- FIN DE NCS ********************************-->
		
		<!--****************************** LI-OBJETIVOS ********************************-->	
			<div id="objetivos" class="tabcontent">
				<table class="table2">
                    <tr>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=objetivos_admin&amp;aktion=add" title="<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>">
                                <i class="fa fa-plus" style="color:#752209;"></i></a>
							</span>
 
                        </td>
						 <td>
						 
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=objetivos_admin&amp;aktion=change" title="<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>">
                                <i class="fa fa-pencil" style="color:#752209;"></i></a>
							</span>
 
                        </td>
						<td>
						 
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_objetivos" title="<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>">
                                <i class="fa fa-trash" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=objetivos_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>">
                                <i class="fa fa-print" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_objetivos" title="<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>">
                                <i class="fa fa-v" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=searchobjetivos" title="<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>">
                                <i class="fa fa-search" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=seguimientos_admin&aktion=add" title="<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>">
                                <i class="fa fa-plus" style="color:Gold;"></i></a>
							</span>
 
                        </td>
						 <td>
						 
							<span onMouseOver="showdiv(event,'<?php echo OBJETIVOS_CAMBIAR_SEGUIMIENTO; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=seguimientos_admin&aktion=change" title="<?php echo OBJETIVOS_CAMBIAR_SEGUIMIENTO; ?>">
                                <i class="fa fa-pencil" style="color:Gold;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo OBJETIVOS_BORRAR_TAREA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_tareasobjetivos" title="<?php echo OBJETIVOS_BORRAR_TAREA; ?>">
                                <i class="fa fa-trash" style="color:Gold;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=lista_objetivos_y_seguimientos" title="<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>">
                                <i class="fa fa-list-ul" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                        <td>
						
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=lista_tareas" title="<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>">
                                <i class="fa fa-retweet" style="color:#752209;"></i></a>
							</span>
 
                        </td>
                    </tr>
                </table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
			
			
		<!--****************************** LI- FIN DE OBJETIVOS ********************************-->
		
		<!--****************************** LI-INDICADORES ********************************-->	
			
			
			<div id="indicadores" class="tabcontent">
				<table class="table2">
                    <tr>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_TODOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=todos_select" title="<?php echo INDICADORES_TODOS; ?>">
                                <i class="fa fa-signal" style="color:yellow;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_NCSPORAREA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ncsporarea" title="<?php echo INDICADORES_NCSPORAREA; ?>">
                                <i class="fa fa-signal" style="color:#F44336;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=desviacioncierresncs" title="<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>">
                                <i class="fa fa-signal" style="color:pink;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=totalhorasformacionportrabajador" title="<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>">
                                <i class="fa fa-signal" style="color:lime;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficacontrolavisos" title="<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>">
                                <i class="fa fa-signal" style="color:orange;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficaincidenciasinspecciones" title="<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>">
                                <i class="fa fa-signal" style="color:silver;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficaincidenciasalmacen" title="<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>">
                                <i class="fa fa-signal" style="color:fuchsia;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=graficaincidenciasdeproveedor" title="<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>">
                                <i class="fa fa-signal" style="color:DarkKhaki;"></i></a>
							</span> 
                        </td>
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo INDICADORES_VALORACIONGLOBALMANTENIMIENTOS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=globalmantenimientos" title="<?php echo INDICADORES_VALORACIONGLOBALMANTENIMIENTOS; ?>">
                                <i class="fa fa-signal" style="color:Turquoise;"></i></a>
							</span> 
                        </td>
						<td>						
							<span onMouseOver="showdiv(event,'<?php echo VALORACIONES_GLOBALES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=valoracionglobalclientes2" title="<?php echo VALORACIONES_GLOBALES; ?>">
                                <i class="fa fa-signal" style="color:Turquoise;"></i></a>
							</span>
 
                        </td>
                    </tr>
                </table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
			
			
	<!--**************************************  LI - FIN MENU MEDICIONES ***************************-->
	
	<!--**************************************  LI - MENU AUDITORES ***************************
	
			<div id="auditores" class="tabcontent">
			 
			  <table class="table2">
                    <tr>
                        <td>
							<span onMouseOver="showdiv(event,'< ?php echo AUDITORIAS_ANADIR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditores_admin2&amp;aktion=add" title="<?php echo AUDITORIAS_ANADIR_AUDITOR; ?>">
                                <i class="fa fa-plus" style="color:#9e9e9e;"></i></a>
							</span>							
                        </td>                        
                        <td>
							<span onMouseOver="showdiv(event,'< ?php echo AUDITORIAS_CAMBIAR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditores_admin2c&amp;aktion=change" title="<?php echo AUDITORIAS_CAMBIAR_AUDITOR; ?>">
                                <i class="fa fa-pencil" style="color:#9e9e9e;"></i></a>
							</span>		
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'< ?php echo MENU_ALT_IMPRIMIR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditores_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_AUDITOR; ?>">
                                <i class="fa fa-print" style="color:#9e9e9e;"></i></a>
							</span>
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'< ?php echo MENU_ALT_BORRAR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_auditores" title="< ?php echo MENU_ALT_BORRAR_AUDITOR; ?>">
                                <i class="fa fa-trash" style="color:#9e9e9e;"></i></a>
							</span>
                        </td>                        
                        
                    </tr>
                </table>
			 <span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>

		<!--******************************  LI - FIN MENU AUDITORES ***************************-->
	
		<!--********************************  LI - MENU TRABAJADORES ***************************-->
			
			<div id="trabajadores" class="tabcontent">		 
			   <table class="table2">
                    <tr>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo TRABAJADOR_ANADIR_TRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=trabajadores_admin2&amp;aktion=add" title="<?php echo TRABAJADOR_ANADIR_TRABAJADOR; ?>">
								<i class="fa fa-plus" style="color:#846007;"></i></a>
							</span>
                        </td>                        
                        <td>						
							<span onMouseOver="showdiv(event,'<?php echo TRABAJADOR_CAMBIAR_TRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=trabajadores_admin2c&amp;aktion=change" title="<?php echo TRABAJADOR_CAMBIAR_TRABAJADOR; ?>">
								<i class="fa fa-pencil" style="color:#846007;"></i></a>
							</span>
                        </td>                        
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo TRABAJADOR_BORRAR_TRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_trabajadores" title="<?php echo TRABAJADOR_BORRAR_TRABAJADOR; ?>">
								<i class="fa fa-trash-o" style="color:#846007;"></i></a>
							</span>
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo IMPRIMIR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=trabajadores_print&amp;aktion=print" title="<?php echo IMPRIMIR; ?>">
								<i class="fa fa-print" style="color:#846007;"></i></a>
							</span>
                        </td>
                    </tr>
                </table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>

		<!--*****************************  LI - FIN MENU TRABAJADORES ***************************-->
	
		<!--**************************************  LI - MENU INSPECTORES ***************************
			<div id="inspectores" class="tabcontent">
			 
			 <table class="table2">
                    <tr>
                        <td>
							<span onMouseOver="showdiv(event,'< ?php echo INSPECTORES_ANADIR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspectores_admin2&amp;aktion=add" title="< ?php echo INSPECTORES_ANADIR_INSPECTOR; ?>">
								<i class="fa fa-plus" style="color:#752209;"></i></a>
							</span>
                        </td>                        
                        <td>						
							<span onMouseOver="showdiv(event,'< ?php echo INSPECTORES_CAMBIAR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspectores_admin2c&amp;aktion=change" title="< ?php echo INSPECTORES_CAMBIAR_INSPECTOR; ?>">
								<i class="fa fa-pencil" style="color:#752209;"></i></a>
							</span>
                        </td>                        
                        <td>
							<span onMouseOver="showdiv(event,'< ?php echo MENU_ALT_BORRAR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_inspectores" title="< ?php echo MENU_ALT_BORRAR_INSPECTOR; ?>">
								<i class="fa fa-trash-o" style="color:#752209;"></i></a>
							</span>
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'< ?php echo MENU_ALT_IMPRIMIR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspectores_print&amp;aktion=print" title="< ?php echo MENU_ALT_IMPRIMIR_INSPECTOR; ?>">
								<i class="fa fa-print" style="color:#752209;"></i></a>
							</span>
                        </td>
                    </tr>
                </table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
		
		<!--*****************************  LI - FIN MENU INSPECTORES ***************************-->
			
			<div id="imagenes" class="tabcontent">			 
			   <a href="mod/ajaximage/selectfolder.php"><i class="fa fa-file-image-o" style="color:Orange;"></i></a>
			</div>
			
			<div id="upload" class="tabcontent">
			  <a href="mod/ajaximage/index.php"><i class="fa fa-upload" style="color:Orange;"></i></a>			 
			</div>

	<!--****************************  LI - FIN MENU TRABAJADORES ***************************-->
	<!--**************************************  LI - MENU CURSOS ***************************-->
				
				<div id="cursos" class="tabcontent">
					<div style='display: inline;'>
						<a href="?seccion=cursos_admin" title="<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>">
						<i class="fa fa-pencil" style="color:#400000; position: relative; left: 25px; top: 40px;"></i></a>
					</div>
					<div style='display: inline;'>
						<a href="?seccion=checkbox3_cursos" title="<?php echo MENU_ALT_BORRAR_FORMACION; ?>">
						<i class="fa fa-trash-o" style="color:#400000; position: relative; left: 25px; top: 40px;"></i></i></a>
					</div>
					<div style='display: inline;'>
						<a href="?seccion=lista_cursos" title="<?php echo FORMACION_LISTACURSOS; ?>">
						<i class="fa fa-list-ul" style="color:#400000; position: relative; left: 25px; top: 40px;"></i></a>
					</div>
					<div style='display: inline;'>
						<a href="?seccion=cursos_por_trabajador&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_FORMACION; ?>">
						<i class="fa fa-retweet" style="color:#400000; position: relative; left: 25px; top: 40px;"></i></a>
					</div>
					
					<div style='display: inline;'>
						<a href="?seccion=formacionalert" title="Comprobar formación">
						<i class="fa fa-bell" style="color:#ffeb3b; position: relative; left: 25px; top: 40px;"></i></a>
					</div>
					
					<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
				</div>
				
				
	<!--**************************************  LI - FIN MENU CURSOS ***************************-->	
	
	<!--**************************************  LI - MENU PROVEEDORES ***************************-->
				
				<div id="proveedores" class="tabcontent">
					<table class="table2">
						<tr>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANADIR_PROVEEDOR; ?>');"
									onMouseOut="hiddenDiv()" style='display: table;'>
									<a href="?seccion=proveedores_admin&aktion=add" title="<?php echo PROVEEDORES_ANADIR_PROVEEDOR; ?>">
									<i class="fa fa-plus" style="color:#5b862a;"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_PROVEEDOR; ?>');"
									onMouseOut="hiddenDiv()" style='display: table;'>
									<a href="?seccion=proveedores_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_PROVEEDOR; ?>">
									<i class="fa fa-pencil" style="color:#5b862a;"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_PROVEEDOR; ?>');"
									onMouseOut="hiddenDiv()" style='display: table;'>
									<a href="?seccion=checkbox3_proveedores" title="<?php echo PROVEEDORES_BORRAR_PROVEEDOR; ?>">
									<i class="fa fa-trash-o" style="color:#5b862a;"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_LISTA; ?>');"
									onMouseOut="hiddenDiv()" style='display: table;'>
									<a href="?seccion=listaproveedores" title="<?php echo PROVEEDORES_LISTA; ?>">
									<i class="fa fa-list-ul" style="color:#5b862a;"></i></a>
								</span>
							</td>

							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANOTAR_INCIDENCIA; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=incidencias_proveedor_admin&aktion=add" title="<?php echo PROVEEDORES_ANOTAR_INCIDENCIA; ?>">
										<i class="fa fa-plus" style="color:#F44336;"></i></a>
								</span>
							</td>
							<td>						
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_INCIDENCIA; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=incidencias_proveedor_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_INCIDENCIA; ?>">
										<i class="fa fa-pencil" style="color:#F44336;"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_INCIDENCIAS; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=checkbox3_incidenciasproveedor" title="<?php echo PROVEEDORES_BORRAR_INCIDENCIAS; ?>">
										<i class="fa fa-trash-o" style="color:#F44336;"></i></a>
								</span>
							</td>
							<td>						
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_INCIDENCIAS_PORPROVEEDOR; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=incidencias_por_proveedor&amp;aktion=print" title="<?php echo PROVEEDORES_INCIDENCIAS_PORPROVEEDOR; ?>">
										<i class="fa fa-retweet" style="color:#F44336;"></i></a>
								</span>
							</td>

							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANADIR_CODIGOINCIDENCIA; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=codigosincidencias_admin&aktion=add" title="<?php echo PROVEEDORES_ANADIR_CODIGOINCIDENCIA; ?>">
										<i class="fa fa-plus" style="color:#9c27b0"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=codigosincidencias_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA; ?>">
										<i class="fa fa-pencil" style="color:#9c27b0"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=checkbox3_codigosincidencias" title="<?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?>">
										<i class="fa fa-trash-o" style="color:#9c27b0"></i></a>
								</span>
							</td>

							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANADIR_AREASENSIBLE; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=codigosincidencias_admin&aktion=add" title="<?php echo PROVEEDORES_ANADIR_AREASENSIBLE; ?>">
										<i class="fa fa-plus" style="color:#0277BD"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_AREASENSIBLE; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=codigosincidencias_admin&aktion=change" title="<?php echo PROVEEDORES_MODIFICAR_AREASENSIBLE; ?>">
										<i class="fa fa-pencil" style="color:#0277BD;"></i></a>
								</span>
							</td>
							<td>
								<span onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_AREASSENSIBLES; ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<a href="?seccion=checkbox3_areassensibles" title="<?php echo PROVEEDORES_BORRAR_AREASSENSIBLES; ?>">
										<i class="fa fa-trash-o" style="color:#0277BD"></i></a>
								</span>
							</td>
						</tr>
					</table>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>					
				</div>
				
				
	<!--**************************************  LI - FIN MENU PROVEEDORES ***************************-->	
	
	
	<!--**************************************  LI - MENU CALIBRACIONES ***************************-->
				
				<div id="calibraciones" class="tabcontent">

					<table class="table2">
						<tr>
							<td>
							<a href="?seccion=equipos_admin&amp;aktion=add" title="<?php echo EQUIPOS_ANADIR; ?>">
								<i class="fa fa-plus" style="color:#ffc107;"></i></a>
							</td>
							<td>
								<a href="?seccion=equipos_admin&amp;aktion=change" title="<?php echo EQUIPOS_EDITAR; ?>">
									<i class="fa fa-pencil" style="color:#ffc107;"></i></a>
							</td>
							<td>
								<a href="?seccion=listaequipos" title="<?php echo EQUIPOS_LISTA; ?>">
									<i class="fa fa-list-ul" style="color:#ffc107;"></i></a>
							</td>
							<td>
								<a href="?seccion=equipos_print&amp;aktion=print" title="<?php echo EQUIPOS_PRINT_DETAILS; ?>">
									<i class="fa fa-print" style="color:#ffc107;"></i></a>
							</td>
							<td>
								<a href="?seccion=checkbox3_equipos" title="<?php echo EQUIPOS_BORRAR; ?>">
									<i class="fa fa-trash-o" style="color:#ffc107;"></i></a>
							</td>
							<td>
								<a href="?seccion=calibraciones_por_equipo&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_CALIBRACIONES; ?>">
									<i class="fa fa-retweet" style="color:#ffc107; "></i></a>
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
				
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
					
				</div>				
				
	<!--**************************************  LI - FIN MENU CALIBRACIONES ***************************-->
	
	<!--**************************************  LI - MENU REVSISTEMA ***************************-->
	
			<div id="revsistema" class="tabcontent">				
				<div style='display: inline-block;'>
					<a href="?seccion=revsistema_select" title="<?php echo EJECUTAR_REVISION; ?>"><i class="fa fa-plus" style="color:#F44336; position: relative; left: 25px; top: 40px;" ></i></a>
				</div>
				<div style='display: inline-block;'>
					<a href="?seccion=revsistema2&aktion=change" title="<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>"><i class="fa fa-pencil" style="color:#F44336; position: relative; left: 25px; top: 40px;" ></i></a>
				</div>
				<div style='display: inline-block;'>
					<a href="?seccion=revsistema_print&amp;aktion=print" title="<?php echo IMPRIMIR_REVISION; ?>"><i class="fa fa-print" style="color:#F44336; position: relative; left: 25px; top: 40px;" ></i></i></a>
				</div>
				<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
	
	
	<!--**************************************  LI - FIN MENU REVSISTEMA ***************************-->
	
	<!--**************************************  LI - MENU AVISOS ***************************-->
				
				<div id="avisos" class="tabcontent">				
					
						<a href="?seccion=poner_aviso" alt="<?php echo AVISOS_PONER_AVISO; ?>" title="<?php echo AVISOS_PONER_AVISO; ?>">
						<i class="fa fa-plus" style="color:black; position: relative; left: 25px; top: 40px;"  /></i></a>
					
						<a href="?seccion=listavisos" alt="<?php echo AVISOS_LISTAVISOS; ?>" title="<?php echo AVISOS_LISTAVISOS; ?>">
						<i class="fa fa-list-ol" style="color:black; position: relative; left: 25px; top: 40px;"  /></i></a>
					
						<a href="?seccion=avisos_admin" alt="<?php echo AVISOS_ADMIN; ?>" title="<?php echo AVISOS_ADMIN; ?>">
						<i class="fa fa-pencil" style="color:black; position: relative; left: 25px; top: 40px;"  /></i></a>
					
						<a href="?seccion=checkbox3" alt="<?php echo AVISOS_DELETE; ?>" title="<?php echo AVISOS_DELETE; ?>">
						<i class="fa fa-trash" style="color:black; position: relative; left: 25px; top: 40px;"  /></i></a>
						<span class="span" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
						
						
				</div>
	
	</body>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</html>