<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Blueprint: Slide and Push Menus</title>
		<meta name="description" content="Blueprint: Slide and Push Menus" />
		<meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link type="text/css" rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

		<style>
		/* Estilo que muestra la capa flotante */
#flotante {

    border-bottom: 1px dotted #000000; color: #000000; outline: none;
            background: Gold;
            border: 1px solid Goldenrod;
            margin-left: -999em;
            color: #000;
            border-radius: 5px 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 5px 5px rgba(0, 0, 0, 0.1); -moz-box-shadow: 5px 5px rgba(0, 0, 0, 0.1);
            font-family: Calibri, Tahoma, Geneva, sans-serif;
            position: absolute; left: 1em; top: 2em;
            margin-left: 0;
			width: 150px;
            padding: 0.5em 0.8em 0.8em 2em;
            z-index: 2;
            display: none;
            behavior: url(pie/PIE.htc);
        }
		#print {
			top: 20%;
			left: 67%;
			position: absolute;
			width: 50px;
			z-index: 2;
		}
		.rotate-45-right:before {
    display: block;
    -o-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
		}

		.hidden {
		    visibility: hidden;
		}

		</style>

		<script src="js/modernizr.custom.js"></script>
	</head>
	<body class="cbp-spmenu-push">
	 <div id="flotante"
        style="z-index: 2; filter: alpha(opacity = 80); float: left; -moz-opacity: .80; opacity: .80">
    </div>
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3>Avisos</h3>
			<div onMouseOver="showdiv(event,'Poner aviso');" onMouseOut="hiddenDiv()" style='display:table;margin-top 3px;'>
			<a href="?seccion=poner_aviso"><i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>

			<div onMouseOver="showdiv(event,'Editar aviso');" onMouseOut="hiddenDiv()" style='display:table;margin-top 3px;'>
			<a href="?seccion=avisos_admin"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>

			<div onMouseOver="showdiv(event,'Borrar aviso');" onMouseOut="hiddenDiv()" style='display:table;margin-top 3px;'>
			<a href="?seccion=checkbox3"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>

			<div onMouseOver="showdiv(event,'Lista de avisos');" onMouseOut="hiddenDiv()" style='display:table;margin-top 3px;'>
			<a href="?seccion=listavisos"><i class="fa fa-list-ul fa-2x" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>
		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
			<h3>Documentos</h3>
			<table>
				<thead></thead>
				<tbody>
					<tr>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=documentos_admin&aktion=add">
								<i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=documentos_admin&aktion=change">
								<i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>

						</td>
					</tr>
					<tr>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_MAPA_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=directoryhowto1">
								<i class="fa fa-sitemap fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo LISTA_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=listadocumentos">
								<i class="fa fa-list-ul fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
					</tr>
					<tr>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ANOTAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=directoryhowto3">
								<i class="fa fa-check-square-o fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_APROBAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=directoryhowto_4">
								<i class="fa fa-plus fa-2x-square" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
						</td>
					</tr>
					<tr>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_SUBIR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=wpload">
								<i class="fa fa-cloud-upload fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=searchdocs">
								<i class="fa fa-search fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
					</tr>
					<tr>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=checkbox3_links">
								<i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo EDITAR_BORRAR_DOCUMENTO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=editdeletedocs">
								<i class="fa fa-flash fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
							</a>
						</div>
						</td>
						</td>
					</tr>
					<tr>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_MODIFICAR_CATEGORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=directoryhowto_5">
								<i class="fa fa-sitemap fa-2x" style="position:relative; left:10px; top:0px; color:#f57f17;"></i>
							</a>
						</div>
						</td>
						<td>
						<div onMouseOver="showdiv(event,'<?php echo MENU_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top:3px;'>
							<a href="?seccion=tabsframesdocumentos">
								<i class="fa fa-book fa-2x" style="position:relative; left:10px; top:0px; color:white;"></i>
							</a>
						</div>
						</td>
					</tr>
				</tbody>
			</table>
		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s3">
			<h3>BD docs</h3>

				<div onMouseOver="showdiv(event,'<?php echo ANADIR_BDDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_create">
						<i class="fa fa-plus fa-2x" style="position:relative; left:0px; top:0px; color:#1bec20;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo EDITAR_BDDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_admin&amp;aktion=change">
						<i class="fa fa-pencil fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=checkbox3_docmanager">
						<i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ANOTAR_DOCMANAGER; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_create">
						<i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_DOC_PRINTSCREEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=docmanager_print&amp;aktion=print">
						<i class="fa fa-print fa-2x" style="position:relative; left:10px; top:0px; color:#1bec20;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=tabsframesdocumentos">
						<i class="fa fa-book fa-2x" style="position:relative; left:10px; top:0px; color:white;"></i>
					</a>
				</div>


		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s4">
			<h3>Auditorías</h3>
							<table class="">
				<thead></thead>
				<tbody>
                    <tr>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_ANADIR_AUDITORIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_admin&amp;aktion=add" title="<?php echo AUDITORIAS_ANADIR_AUDITORIA; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#F44336;"></i></a>
							</span>
                        </td>
                        <td>

							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_admin&amp;aktion=change" title="<?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#F44336;"></i></a>
							</span>

                        </td>
					<tr>
					</tr>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_aisgc" title="<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>">
                                <i class="fa fa-trash fa-2x" style="color:#F44336;"></i></a>
							</span>
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=aisgc_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>">
                                <i class="fa fa-print fa-2x" style="color:#F44336;"></i></a>
							</span>
                        </td>
					<tr>
					</tr>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=searchaisgc" title="<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>">
                                <i class="fa fa-search fa-2x" style="color:#F44336;"></i></a>
							</span>
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listaisgc" title="<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#F44336;"></i></a>
							</span>
                        </td>
					<tr>
					</tr>
                        <td>

							<span onMouseOver="showdiv(event,'<?php echo AINFORMES_ANADIR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditorias_admin&amp;aktion=add" title="<?php echo AINFORMES_ANADIR; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
						<td>

							<span onMouseOver="showdiv(event,'<?php echo AINFORMES_EDITAR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditorias_admin&amp;aktion=change" title="<?php echo AINFORMES_EDITAR; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
					<tr>
					</tr>
                        <td>

							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_auditorias" title="<?php echo MENU_ALT_BORRAR_INFORMEAUDITORIAS; ?>">
                                <i class="fa fa-trash fa-2x" style="color:#ffeb3b;"></i></a>
							</span>

                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditorias_print&aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS; ?>">
                                <i class="fa fa-print fa-2x" style="color:#ffeb3b;"></i></a>
							</span>
                        </td>
					<tr>
					</tr>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=ai_nc" title="<?php echo NCS_IMPRIMIR_NCS; ?>">
                                <i class="fa fa-retweet fa-2x" style="color:#ffeb3b;"></i></a>
							</span>
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=buscauditorias" title="<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>">
                                <i class="fa fa-search fa-2x" style="color:#ffeb3b;"></i></a>
							</span>
                        </td>
					<tr>
					</tr>
                        <td colspan="2">
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AINFORMES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=listauditorias" title="<?php echo MENU_ALT_LISTA_AINFORMES; ?>">
                                <i class="fa fa-list-ul fa-2x" style="color:#ffeb3b;"></i></a>
							</span>
                        </td>
                    </tr>
				</tbody>
            </table>

		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s5">
			<h3>Inspecciones</h3>
	<table>
		<thead></thead>
		<tbody>
			<tr>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=inspecciones_admin&aktion=add"><i class="fa fa-plus fa-2x" style="position:relative; left:0px; top:0px; color:#ffbf00;"></i></a>
					</div>
				</td>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=inspecciones_admin&aktion=change"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#ffbf00;"></i></a>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=inspecciones_print&amp;aktion=print"><i class="fa fa-print fa-2x" style="position:relative; left:10px; top:0px; color:#ffbf00;"></i></a>
					</div>
				</td>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=checkbox3_inspecciones"><i class="fa fa-trash fa-2x" style="position:relative; left:10px; top:0px; color:#ffbf00;"></i></a>
					</div>
				</td>
				<td>
			</tr>
			<tr>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=buscainspecciones"><i class="fa fa-search fa-2x" style="position:relative; left:10px; top:0px; color:#ffbf00;"></i></a>
					</div>
				</td>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=listainspecciones"><i class="fa fa-list-ol fa-2x" style="position:relative; left:10px; top:0px; color:#ffbf00;"></i></a>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=inspecciones_por_servicio&amp;aktion=print"><i class="fa fa-retweet fa-2x" style="position:relative; left:10px; top:0px; color:#ffbf00;"></i></a>
					</div>
				</td>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo INSPECCIONES_ANADIR_CODIGOSINCIDENCIA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=codigosincidenciasinspecciones_admin&aktion=add"><i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:cornsilk;"></i></a>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div onMouseOver="showdiv(event,'<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=codigosincidenciasinspecciones_admin&aktion=change"><i class="fa fa-pencil fa-2x" style="position:relative; left:10px; top:0px; color:cornsilk;"></i></a>
					</div>
					<div onMouseOver="showdiv(event,'<?php echo BORRAR; echo "&nbsp;"; echo CODIGO_INCIDENCIA;?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=checkbox3_codigosincidenciasinspecciones"><i class="fa fa-trash fa-2x" style="position:relative; left:10px; top:0px; color:cornsilk;"></i></a>
					</div>
				</td>
			</tr>
		</tbody>
		</table>
		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s6">
			<h3>No conformidades</h3>
				<div onMouseOver="showdiv(event,'<?php echo NCS_ADMINISTRAR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=ncs_admin&aktion=add"><i class="fa fa-plus fa-2x" style="position:relative; left:0px; top:0px; color:#ff0000;"></i></a></div>

				<div onMouseOver="showdiv(event,'<?php echo NCS_ADMINISTRAR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=ncs_admin&aktion=change"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#ff0000;"></i></a></div>

				<div onMouseOver="showdiv(event,'<?php echo NCS_BORRAR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=checkbox3_ncs"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#ff0000;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo NCS_LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=listancs"><i class="fa fa-list-ul fa-2x" style="position:relative; left:10px; top:0px; color:#ff0000;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=ai_nc"><i class="fa fa-retweet fa-2x" style="position:relative; left:10px; top:0px; color:#ff0000;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=ncs_print&amp;aktion=print"><i class="fa fa-print fa-2x" style="position:relative; left:10px; top:0px; color:#ff0000;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo NCS_BUSCAR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=searchncs"><i class="fa fa-search fa-2x" style="position:relative; left:10px; top:0px; color:#ff0000;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo NCS_PORAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=ncsporarea"><i class="fa fa-signal" style="position:relative; left:10px; top:0px; color:#ff0000;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo MEDICIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>
		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s7">
			<h3>Objetivos</h3>

			<table>
			<thead></thead>
			<tbody>
				<tr>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo OBJETIVOS_ANADIR_OBJETIVO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=objetivos_admin&amp;aktion=add"><i class="fa fa-plus fa-2x" style="position:relative; left:0px; top:0px; color:#ffff00;"></i></a>
						</div>
					</td>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo OBJETIVOS_CAMBIAR_OBJETIVO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=objetivos_admin&amp;aktion=change"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#ffff00;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=checkbox3_objetivos"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#ffff00;"></i></a></div>
					</td>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=objetivos_print&amp;aktion=print"><i class="fa fa-print fa-2x" style="position:relative; left:10px; top:0px; color:#ffff00;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=searchobjetivos"><i class="fa fa-search fa-2x" style="position:relative; left:10px; top:0px; color:#ffff00;"></i></a></div>
					</td>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=seguimientos_admin&amp;aktion=add"><i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:#ff8000;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo EDITAR_TAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=seguimientos_admin&amp;aktion=change"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#ff8000;"></i></a></div>
					</td>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo OBJETIVOS_BORRAR_TAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=checkbox3_tareasobjetivos"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#ff8000;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=lista_objetivos_y_seguimientos"><i class="fa fa-list-ul fa-2x" style="position:relative; left:10px; top:0px; color:#ffff00;"></i></a></div>
					</td>
					<td>
					<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=lista_tareas"><i class="fa fa-retweet fa-2x" style="position:relative; left:10px; top:0px; color:#ffff00;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<div onMouseOver="showdiv(event,'<?php echo MENU_MEDICIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
						<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>
					</td>
				</tr>
			</tbody>
		</table>

		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s8">
			<h3>Indicadores</h3>

				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_NCSPORAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=ncsporarea"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:#f06292;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=desviacioncierresncs"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:Yellow;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=totalhorasformacionportrabajador"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:#8BC34A;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficacontrolavisos"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:Orange;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficaincidenciasinspecciones"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:Pink;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficaincidenciasalmacen"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:Grey;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficaincidenciasdeproveedor"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:#F44336;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_POSITIVOSLEGIONELLA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficacalidadlegionella"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:Turquoise;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo VALORACIONES_GLOBALES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=valoracionglobalclientes"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:Turquoise;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo INDICADORES_TODOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px; float:left;'><a href="?seccion=todos_select"><i class="fa fa-bar-chart" style="position:relative; left:10px; top:0px; color:Peru;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo MEDICIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>


		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s9">
			<h3>Revisión del sistema</h3>
				<div onMouseOver="showdiv(event,'<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=revsistema_select" title="<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>">
						<i class="fa  fa-plus fa-2x" style="color:#F44336; position:relative; left:10px; top:0px;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=revsistema2&aktion=change" title="<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>">
						<i class="fa  fa-pencil fa-2x" style="color:#F44336; position:relative; left:10px; top:0px;"></i>
					</a>
				</div>
				<div onMouseOver="showdiv(event,'<?php echo IMPRIMIR_REVISION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
					<a href="?seccion=revsistema_print&amp;aktion=print" title="<?php echo IMPRIMIR_REVISION; ?>">
						<i class="fa  fa-print fa-2x" style="color:#F44336; position:relative; left:10px; top:0px;"></i>
					</a>
				</div>

		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s10">
			<h3>Formación</h3>

				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=cursos_admin&aktion=add" title="<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>"><i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:#cd4803;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=cursos_admin&aktion=change" title="<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>"><i class="fa fa-pencil fa-2x" style="position:relative; left:10px; top:0px; color:#cd4803;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=checkbox3_cursos" title="<?php echo MENU_ALT_BORRAR_FORMACION; ?>"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#cd4803;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo FORMACION_LISTACURSOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=lista_cursos" title="<?php echo FORMACION_LISTACURSOS; ?>"><i class="fa fa-list-ul fa-2x" style="position:relative; left:10px; top:0px; color:#cd4803;"></i></a></div>
				<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=cursos_por_trabajador&amp;aktion=print"><i class="fa fa-retweet fa-2x" style="position:relative; left:10px; top:0px; color:#cd4803;" title="<?php echo MENU_ALT_JOIN_FORMACION; ?>"></i></a></div>

		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s11">
			<h3>Proveedores</h3>
				<table>
			<thead></thead>
			<tbody>
				<tr>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ADMINISTRAR_PROVEEDORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=proveedores_admin&aktion=add"><i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:#5b862a;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ADMINISTRAR_PROVEEDORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=proveedores_admin&aktion=change"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#5b862a;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=listaproveedores"><i class="fa fa-list-ul fa-2x" style="position:relative; left:10px; top:0px; color:#5b862a;"></i></a></div>
					</td>
				</tr>
				<tr>

					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_PROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=checkbox3_proveedores"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#5b862a;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ANOTAR_INCIDENCIA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=incidencias_proveedor_admin&aktion=add"><i class="fa fa-plus fa-2x" style="position:relative; left:10px; top:0px; color:#F44336;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_MODIFICAR_INCIDENCIA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=incidencias_proveedor_admin&aktion=change"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#F44336;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_INCIDENCIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=checkbox3_incidenciasproveedor"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#F44336;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_INCIDENCIAS_PORPROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=incidencias_por_proveedor&amp;aktion=print"><i class="fa fa-retweet fa-2x" style="position:relative; left:10px; top:0px; color:#F44336;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=codigosincidencias_admin"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#9c27b0;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=checkbox3_codigosincidencias"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#9c27b0;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ADMINISTRAR_AREASSENSIBLES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=areassensibles_admin"><i class="fa fa-edit fa-2x" style="position:relative; left:10px; top:0px; color:#0277BD;"></i></a></div>
					</td>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_AREASSENSIBLES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=checkbox3_areassensibles"><i class="fa fa-trash-o fa-2x" style="position:relative; left:10px; top:0px; color:#0277BD;"></i></a></div>
					</td>
				</tr>
				<tr>
					<td>
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_PROVEEDORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="?seccion=tabsframesproveedores"><i class="fa fa-truck" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>
					</td>
					<td colspan="2">
						<div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_PROVEEDORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
							<a href="Easy-CSV-Data-Insertion/index.php"><i class="fa fa-upload fa-2x" style="position:relative; left:10px; top:0px; color:white;"></i></a></div>
					</td>
				</tr>
			</tbody>
			</table>

		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s12">
			<h3>Encuestas</h3>

				 <table>
					<tr>
						<th>Calidad de servicio a comunidades</th>
						<td>
							<a href="http://encuestas.textblock.org/index.php?sid=19246">
								<i class="fa fa-check-square-o fa-2x" style="color:Red;"></i>
							</a>
						</td>
					</tr>
					<tr>
						<th>Calidad del servicio a granjas</th>
						 <td>
							<a href="http://encuestas.textblock.org/index.php?sid=75817">
								<i class="fa fa-check-square-o fa-2x" style="color:Red;"></i>
							</a>
						</td>
					</tr>
					<tr>
						<th>Servicio de legionella</th>
						 <td>
							<a href="http://encuestas.textblock.org/index.php?sid=54386">
								<i class="fa fa-check-square-o fa-2x" style="color:Red;"></i>
							</a>
						</td>
					</tr>

					</tr>
				</table>

		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s13">
			<h3>Imágenes</h3>

		</nav>
	<!-- *********************************************************** -->
	<!-- *********************************************************** -->
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s14">
			<h3>Equipos</h3>

				<table class="table2">
					<thead></thead>
					<tbody>
						<tr>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_ANADIR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=equipos_admin&aktion=add"><i class="fa fa-plus fa-2x" style="color:#ffc107;"></i></a>
								</div>
							</td>
							<td>

								<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_CAMBIAR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=equipos_admin&aktion=change"><i class="fa fa-edit fa-2x" style="color:#ffc107;"></i></a>
								</div>

							</td>
						</tr>
						<tr>
							<td>

								<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=listaequipos"><i class="fa fa-list-ul fa-2x" style="color:#ffc107;"></i></a>
								</div>

							</td>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_PRINT_DETAILS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=equipos_print&amp;aktion=print"><i class="fa fa-print fa-2x" style="color:#ffc107;"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_BORRAR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=checkbox3_equipos"><i class="fa fa-trash-o fa-2x" style="color:#ffc107;"></i></a>
								</div>
							</td>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=calibraciones_por_equipo&amp;aktion=print"><i class="fa fa-retweet fa-2x" style="color:LightCoral;"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo CALIBRACIONES_ANADIR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=calibraciones_admin&amp;aktion=add"><i class="fa fa-plus fa-2x" style="color:LightCoral;"></i></a>
								</div>
							</td>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo CALIBRACIONES_MODIFICAR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=calibraciones_admin&amp;aktion=change"><i class="fa fa-pencil fa-2x" style="color:LightCoral;"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=calibraciones_print&amp;aktion=print"><i class="fa fa-print fa-2x" style="color:LightCoral;"></i></a>
								</div>
							</td>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=checkbox3_calibraciones"><i class="fa fa-trash-o fa-2x" style="color:LightCoral;"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=buscacalibraciones"><i class="fa fa-trash-o fa-2x" style="color:LightCoral;"></i></a>
								</div>
							</td>
							<td>
								<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
									<a href="?seccion=listacalibraciones"><i class="fa fa-list-ul fa-2x" style="color:LightCoral;"></i></a>
								</div>
							</td>
						</tr>
					</tbody>
                </table>

		</nav>
	<!-- *********************************************************** -->
		<div class="container">

			<div id="avion">
				<section>
					<!-- Class "cbp-spmenu-open" gets applied to menu
							<button id="showLeft">Show/Hide Left Slide Menu</button>
					<a href="#" id="showLeft"><i class="fa fa-list-ul fa-2x fa-2x" style="color:white;"></i></a>&nbsp;-->
					<div onmouseover="showdiv(event,'Home');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="../index.php">
							<i class="fa fa-home fa-2x" style="color:#ffffff;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Avisos');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft">
							<i class="fa fa-list-ul fa-2x fa-2x" style="color:#5ac1e0;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Documentos');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft2">
							<i class="fa fa-book fa-2x fa-2x" style="color:#1bec20;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'BD docs.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft3">
							<i class="fa fa-book fa-2x fa-2x" style="color:#c926ff;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Auditorías.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft4">
							<i class="fa fa-deaf fa-2x" style="color:#ff4000;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Inspecciones.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft5">
							<i class="fa fa-eye fa-2x" style="color:#ffbf00;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'No conformidades.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft6">
							<i class="fa fa-warning fa-2x" style="color:#e53935;"></i>
						</a>
					</div>
					<style>
					.rotate-45-right:before {
					    display: block;
					    -o-transform: rotate(45deg);
					    -webkit-transform: rotate(45deg);
					    transform: rotate(45deg);
					}

					.hidden {
					    visibility: hidden;
					}
					</style>
					<div onmouseover="showdiv(event,'Objetivos.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft7">
							<!--<i class="fa fa-long-arrow-up fa-2x rotate-45" style="color:#ffff00;"></i>-->
							<i class="fa fa-long-arrow-up fa-2x rotate-45-right" style="color:#ffff00;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Indicadores.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft8">
							<i class="fa fa-line-chart fa-2x" style="color:#ff2626;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Revisión del sistema.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft9">
							<i class="fa fa-flash fa-2x" style="color:#00cbf9;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Formación.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft10">
							<i class="fa fa-graduation-cap fa-2x" style="color:#CD4803;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Proveedores.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft11">
							<i class="fa fa-truck fa-2x" style="color:#b35900;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Encuestas.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft12">
							<i class="fa fa-check-square-o fa-2x" style="color:#4cffff;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Imágenes.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft13">
							<i class="fa fa-file-image-o fa-2x" style="color:#aff702;"></i>
						</a>
					</div>
					<div onmouseover="showdiv(event,'Equipos.');" onmouseout="hiddenDiv()" style="display:table;margin-right:10px;float:left;">
						<a href="#" id="showLeft14">
							<i class="fa fa-arrows-v fa-2x" style="color:#ffc107;"></i>
						</a>
					</div>
				</section>
			</div>





		</div>
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuLeft2 = document.getElementById( 'cbp-spmenu-s2' ),
				menuLeft3 = document.getElementById( 'cbp-spmenu-s3' ),
				menuLeft4 = document.getElementById( 'cbp-spmenu-s4' ),
				menuLeft5 = document.getElementById( 'cbp-spmenu-s5' ),
				menuLeft6 = document.getElementById( 'cbp-spmenu-s6' ),
				menuLeft7 = document.getElementById( 'cbp-spmenu-s7' ),
				menuLeft8 = document.getElementById( 'cbp-spmenu-s8' ),
				menuLeft9 = document.getElementById( 'cbp-spmenu-s9' ),
				menuLeft10 = document.getElementById( 'cbp-spmenu-s10' ),
				menuLeft11 = document.getElementById( 'cbp-spmenu-s11' ),
				menuLeft12 = document.getElementById( 'cbp-spmenu-s12' ),
				menuLeft13 = document.getElementById( 'cbp-spmenu-s13' ),
				menuLeft14 = document.getElementById( 'cbp-spmenu-s14' ),
				showLeft = document.getElementById( 'showLeft' ),
				showLeft1 = document.getElementById( 'showLeft1' ),
				showLeft2 = document.getElementById( 'showLeft2' ),
				showLeft3 = document.getElementById( 'showLeft3' ),
				showLeft4 = document.getElementById( 'showLeft4' ),
				showLeft5 = document.getElementById( 'showLeft5' ),
				showLeft6 = document.getElementById( 'showLeft6' ),
				showLeft7 = document.getElementById( 'showLeft7' ),
				showLeft8 = document.getElementById( 'showLeft8' ),
				showLeft9 = document.getElementById( 'showLeft9' ),
				showLeft10 = document.getElementById( 'showLeft10' ),
				showLeft11 = document.getElementById( 'showLeft11' ),
				showLeft12 = document.getElementById( 'showLeft12' ),
				showLeft13 = document.getElementById( 'showLeft13' ),
				showLeft14 = document.getElementById( 'showLeft14' ),
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			showLeft2.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft2, 'cbp-spmenu-open' );
				disableOther( 'showLeft2' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft2' ) {
					classie.toggle( showLeft2, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft3.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft3, 'cbp-spmenu-open' );
				disableOther( 'showLeft3' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft3' ) {
					classie.toggle( showLeft3, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft4.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft4, 'cbp-spmenu-open' );
				disableOther( 'showLeft4' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft4' ) {
					classie.toggle( showLeft4, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft5.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft5, 'cbp-spmenu-open' );
				disableOther( 'showLeft5' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft5' ) {
					classie.toggle( showLeft5, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft6.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft6, 'cbp-spmenu-open' );
				disableOther( 'showLeft6' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft6' ) {
					classie.toggle( showLeft6, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft7.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft7, 'cbp-spmenu-open' );
				disableOther( 'showLeft7' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft7' ) {
					classie.toggle( showLeft7, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft8.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft8, 'cbp-spmenu-open' );
				disableOther( 'showLeft8' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft8' ) {
					classie.toggle( showLeft8, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft9.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft9, 'cbp-spmenu-open' );
				disableOther( 'showLeft9' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft9' ) {
					classie.toggle( showLeft9, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft10.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft10, 'cbp-spmenu-open' );
				disableOther( 'showLeft10' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft10' ) {
					classie.toggle( showLeft10, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft11.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft11, 'cbp-spmenu-open' );
				disableOther( 'showLeft11' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft11' ) {
					classie.toggle( showLeft11, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft12.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft12, 'cbp-spmenu-open' );
				disableOther( 'showLeft12' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft12' ) {
					classie.toggle( showLeft12, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft13.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft13, 'cbp-spmenu-open' );
				disableOther( 'showLeft13' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft13' ) {
					classie.toggle( showLeft13, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->
			<!-- ******************************************************************** -->
			showLeft14.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft14, 'cbp-spmenu-open' );
				disableOther( 'showLeft14' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft14' ) {
					classie.toggle( showLeft14, 'disabled' );
				}
			}
			<!-- ******************************************************************** -->

		</script>
		<script  src="../jscripts/indexcapaemergente.js"></script>
	</body>
</html>
