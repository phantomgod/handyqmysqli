<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="accordion-menu/jquery.js"></script>
<script type="text/javascript" src="accordion-menu/accordion.js"></script>
<link type="text/css" rel="stylesheet" href="accordion-menu/style.css" />
</head>
<body>

	<div>

		<!--This is the first division of left-->

		<div id="firstpane" class="menu_list">
			<!--Code for menu starts here-->

			<p class="menu_head">
				<a href="index.php" title="Home"><i class="fa fa-home fa-2x"></i></a>
			</p>
			<p class="menu_head">
				<a href="?seccion=ayuda" title="<?php echo AYUDA; ?>"><i class="fa fa-question fa-2x" style="color:White;"></i></a>
			</p>
			<p class="menu_head">
				<a href="?seccion=encuestas" title="<?php echo MENU_ENCUESTAS; ?>"><i class="fa fa-check-square-o fa-2x" style="color:White;"></i></a>
			</p>
			<!-- DIRECTIVOS -->
			<!-- DIRECTIVOS -->
			<!-- DIRECTIVOS -->
			<!-- DIRECTIVOS -->
			<!-- DIRECTIVOS -->


			<p class="menu_head">
				<a href="#"	title="<?php echo MENU_REVSISTEMA; ?>"><i class="fa fa-flash fa-2x" style="color:White;"></i></i></a>
			</p>
			<div class="menu_body">
				<div style='display: table;'>
					<a href="?seccion=revsistema_select" title="<?php echo EJECUTAR_REVISION; ?>"><i class="fa fa-plus fa-2x" style="color:#F44336; position: relative; left: 25px; top: 10px;" ></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=revsistema2&aktion=change" title="<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>"><i class="fa fa-pencil fa-2x" style="color:#F44336; position: relative; left: 25px; top: 10px;" ></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=revsistema_print&amp;aktion=print" title="<?php echo IMPRIMIR_REVISION; ?>"><i class="fa fa-print fa-2x" style="color:#F44336; position: relative; left: 25px; top: 10px;" ></i></i></a>
				</div>
			</div>
			
			<p class="menu_head">
				<a href="?seccion=tabsframesdocumentos" title="<?php echo MENU_DOCUMENTOS; ?>"><i class="fa fa-book fa-2x" style="color:White;"></i></a>
			</p>

			<!-- RECURSOS -->
			<!-- RECURSOS -->
			<!-- RECURSOS -->
			<!-- RECURSOS -->
			<!-- RECURSOS -->

			<p class="menu_head">
				<a href="#" title="<?php echo MENU_FORMACION; ?>"><i class="fa fa-graduation-cap fa-2x" style="color:White;"></i></a>
			</p>
			<div class="menu_body">
				<div style='display: table;'>
					<a href="?seccion=cursos_admin" title="<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>">
					<i class="fa fa-pencil fa-2x" style="color:#FB8DAF; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=checkbox3_cursos" title="<?php echo MENU_ALT_BORRAR_FORMACION; ?>">
					<i class="fa fa-trash-o fa-2x" style="color:#FB8DAF; position: relative; left: 25px; top: 10px;"></i></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=lista_cursos" title="<?php echo FORMACION_LISTACURSOS; ?>">
					<i class="fa fa-list-ul fa-2x" style="color:#FB8DAF; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=cursos_por_trabajador&amp;aktion=print" title="<?php echo MENU_ALT_JOIN_FORMACION; ?>">
					<i class="fa fa-retweet fa-2x" style="color:#FB8DAF; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
			</div>

			<p class="menu_head">
				<a href="?seccion=tabsframes"
					title="<?php echo PERSONAL_MENU_PRINCIPAL; ?>"><i class="fa fa-user fa-2x" style="color:White;"></i></a>
			</p>
			
			<p class="menu_head">
				<a href="?seccion=calendarframe" title="<?php echo MENU_MANTENIMIENTO; ?>">
                    <i class="fa fa-calendar fa-2x" style="color:White;"></i></a>
			</p>


			<!-- OPERACIONES -->
			<!-- OPERACIONES -->
			<!-- OPERACIONES -->
			<!-- OPERACIONES -->
			<!-- OPERACIONES -->

			<p class="menu_head">
				<a href="#" title="<?php echo MENU_SERVICIOS; ?>"><i class="fa fa-wrench fa-2x" style="color:White;"></i></a>
			</p>
			<div class="menu_body">
				<div style='display: table;'>
					<a href="?seccion=servicios_admin" title="<?php echo MENU_ALT_ADMINISTRAR_SERVICIOS; ?>"><i class="fa fa-pencil fa-2x" style="color:DODGERBLUE; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=checkbox3_servicios" title="<?php echo MENU_ALT_BORRAR_SERVICIOS; ?>"><i class="fa fa-trash-o fa-2x" style="color:DODGERBLUE; position: relative; left: 25px; top: 10px;"></i></a>
				</div>

			</div>			
			<p class="menu_head">
				<a href="?seccion=tabsframesproveedores" title="<?php echo MENU_PROVEEDORES; ?>"><i class="fa fa-truck fa-2x" style="color:White;"></i></a>
			</p>			
			
			<p class="menu_head">
				<a href="?seccion=tabsframescalibraciones" title="<?php echo EQUIPOS_EQUIPOS; ?>"><i class="fa fa-arrows-v fa-2x" style="color:White;"></i></a>
			</p>
			<!--<div class="menu_body">
				<div style='display: table;'>
					<a href="?seccion=equipos_admin&amp;aktion=add" title="< ?php echo EQUIPOS_ANADIR; ?>">
                        <i class="fa fa-plus fa-2x" style="color:#EAB135; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=equipos_admin&amp;aktion=change" title="< ?php echo EQUIPOS_EDITAR; ?>">
                        <i class="fa fa-pencil fa-2x" style="color:#EAB135; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=listaequipos" title="< ?php echo EQUIPOS_LISTA; ?>">
                        <i class="fa fa-list-ul fa-2x" style="color:#EAB135; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=equipos_print&amp;aktion=print" title="< ?php echo EQUIPOS_PRINT_DETAILS; ?>">
                        <i class="fa fa-print fa-2x" style="color:#EAB135; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=checkbox3_equipos" title="< ?php echo EQUIPOS_BORRAR; ?>">
                        <i class="fa fa-trash-o fa-2x" style="color:#EAB135; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=calibraciones_por_equipo&amp;aktion=print" title="< ?php echo MENU_ALT_JOIN_CALIBRACIONES; ?>">
                        <i class="fa fa-retweet fa-2x" style="color:#EAB135;  position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=calibraciones_admin" title="< ?php echo CALIBRACIONES_ANADIR; ?>">
                        <i class="fa fa-plus fa-2x" style="color:LightCoral; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=calibraciones_admin" title="< ?php echo CALIBRACIONES_MODIFICAR; ?>">
                        <i class="fa fa-pencil fa-2x" style="color:LightCoral; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=calibraciones_print&amp;aktion=print" title="< ?php echo MENU_ALT_IMPRIMIR_CALIBRACIONES; ?>">
                        <i class="fa fa-print fa-2x" style="color:LightCoral; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=checkbox3_calibraciones" title="< ?php echo MENU_ALT_BORRAR_CALIBRACIONES; ?>">
                        <i class="fa fa-trash-o fa-2x" style="color:LightCoral; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=buscacalibraciones" title="< ?php echo MENU_ALT_BUSCAR_CALIBRACIONES; ?>">
                        <i class="fa fa-search fa-2x" style="color:LightCoral; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=listacalibraciones" title="< ?php echo MENU_ALT_LISTA_CALIBRACIONES; ?>">
                        <i class="fa fa-list-ul fa-2x" style="color:LightCoral; position: relative; left: 25px; top: 10px;"></i></a>
				</div>
			</div>-->

			<!-- MEDICIONES -->
			<!-- MEDICIONES -->
			<!-- MEDICIONES -->
			<!-- MEDICIONES -->
			<!-- MEDICIONES -->


			<p class="menu_head">
				<a href="?seccion=tabsframesmediciones"	title="<?php echo MEDICIONES; ?>">
					<i class="fa fa-line-chart fa-2x" style="color:White;"></i></a>
			</p>


			
			<p class="menu_head">
				<a href="#" title="<?php echo MENU_AVISOS; ?>"><i class="fa fa-bell-o fa-2x" aria-hidden="true" style="color:White;"></i></span></a>
			</p>
			<div class="menu_body">
				<div style='display: table;'>
					<a href="?seccion=poner_aviso" alt="<?php echo AVISOS_PONER_AVISO; ?>" title="<?php echo AVISOS_PONER_AVISO; ?>">
					<i class="fa fa-plus fa-2x" style="color:White; position: relative; left: 25px; top: 10px;"  /></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=listavisos" alt="<?php echo AVISOS_LISTAVISOS; ?>" title="<?php echo AVISOS_LISTAVISOS; ?>">
					<i class="fa fa-list-ol fa-2x" style="color:White; position: relative; left: 25px; top: 10px;"  /></i></a>
				</div>
				<div  style='display: table;'>
					<a href="?seccion=avisos_admin" alt="<?php echo AVISOS_ADMIN; ?>" title="<?php echo AVISOS_ADMIN; ?>">
					<i class="fa fa-pencil fa-2x" style="color:White; position: relative; left: 25px; top: 10px;"  /></i></a>
				</div>
				<div style='display: table;'>
					<a href="?seccion=checkbox3" alt="<?php echo AVISOS_DELETE; ?>" title="<?php echo AVISOS_DELETE; ?>">
					<i class="fa fa-trash fa-2x" style="color:White; position: relative; left: 25px; top: 10px;"  /></i></a>
				</div>
			</div>
		</div>

		<!--Code for menu ends here-->
		<br /> <br />
	</div>
</body>
</html>