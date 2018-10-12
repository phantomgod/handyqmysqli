<!DOCTYPE html>
<html>
<head>

<style>
*{
    margin:0;
    padding:0;
}
#content {
    height: 10%;
    width: 41%;
    background-color: #FFEB3B;
    padding: 0px;
    margin: 0px;
    position: absolute;
    border-radius: 0px 20px 0px 20px;
}
#hoverbar {
    height: 100%;
    width: 100%;
    background-color: #CDDC39;
    position: absolute;
    bottom: 0;
    margin: 0;
    padding: 0;
    visibility: hidden;
    border-radius: 0px 20px 0px 20px;
}
#content:hover > #hoverbar{
    visibility:visible;
}
#content2 {
    height: 10%;
    width: 25%;
    background-color: #607D8B;
    padding: 0px;
    margin: 0px;
    position: absolute;
	top: 100px;
    border-radius: 0px 20px 0px 20px;
}
#hoverbar2 {
    height: 100%;
    width: 100%;
    background-color: #795548;
    position: absolute;
    bottom: 0;
    margin: 0;
    padding: 0;
    visibility: hidden;
    border-radius: 0px 20px 0px 20px;
}
#content2:hover > #hoverbar2{
    visibility:visible;
}
#content3 {
    height: 10%;
    width: 41%;
    background-color: #FFEB3B;
    padding: 0px;
    margin: 0px;
    position: absolute;
	top: 160px;
    border-radius: 0px 20px 0px 20px;
}
#hoverbar3 {
    height: 100%;
    width: 100%;
    background-color: #CDDC39;
    position: absolute;
    bottom: 0;
    margin: 0;
    padding: 0;
    visibility: hidden;
    border-radius: 0px 20px 0px 20px;
}
#content3:hover > #hoverbar3{
    visibility:visible;
}

.span {
	position: relative;
	padding-left:1em;
    top: 10px;
}
</style>
</head>
<body>

	<div id="content"> <span class="span"><span class="spanbrown"> &emsp;&emsp;&emsp;&emsp;<?php echo MENU_DOCUMENTOS; ?></span></span>
		<div id="hoverbar">			
			<span class="span">
				<a href="?seccion=documentos_admin&amp;aktion=add" title="<?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?>">
				<i class="fa fa-plus" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=documentos_admin&amp;aktion=change" title="<?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?>">
				<i class="fa fa-pencil" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=directoryhowto1" title="<?php echo MENU_ALT_MAPA_DOCUMENTOS; ?>">
				<i class="fa fa-sitemap" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=listadocumentos" title="<?php echo MENU_ALT_LISTA_DOCUMENTOS; ?>">
				<i class="fa fa-list-ul" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=directoryhowto3" title="<?php echo MENU_ALT_ANOTAR_DOCUMENTOS; ?>">
				<i class="fa fa-plus-square" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=directoryhowto_4" title="<?php echo MENU_ALT_APROBAR_DOCUMENTOS; ?>">
				<i class="fa fa-check-square" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=wpload"title="<?php echo MENU_ALT_SUBIR_DOCUMENTOS; ?>">
				<i class="fa fa-upload" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=searchdocs" title="<?php echo MENU_ALT_BUSCAR_DOCUMENTOS; ?>">
				<i class="fa fa-search" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=checkbox3_links" title="<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>">
				<i class="fa fa-trash-o" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=editdeletedocs" title="<?php echo EDITAR_BORRAR_DOCUMENTO; ?>">
				<i class="fa fa-flash" style="color:#5b862a;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=directoryhowto_5"title="<?php echo MENU_ALT_MODIFICAR_CATEGORIAS; ?>">
				<i class="fa fa-sitemap" style="color:#48D125;"></i></a>
			</span>		
		</div>
	</div>
	
	<!--****************************************************************************-->
	
	<div id="content2"> <span class="span"><span class="spanredchico">&emsp;&emsp;<?php echo MODIFICACIONES; ?></span></span>
		<div id="hoverbar2">			
			<span class="span">
			<a href="?seccion=modifdoc_admin&amp;aktion=add" title="<?php echo DOCUMENTOS_ANOTAR_MODIFICACION; ?>">
			<i class="fa fa-plus" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=modifdoc_admin&amp;aktion=change" title="<?php echo DOCUMENTOS_EDITAR_MODIFICACION; ?>">
				<i class="fa fa-pencil" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=modifdoc_print&amp;aktion=print" title="<?php echo MENU_ALT_MODIFDOCPRINT; ?>">
				<i class="fa fa-print" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=checkbox3_modifdoc" title="<?php echo MENU_ALT_BORRAR_MODIFDOC; ?>">
				<i class="fa fa-trash-o" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=listamodificaciones" title="<?php echo DOCUMENTOS_JOIN; ?>">
				<i class="fa fa-retweet" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=editdeletemodifdocs"title="<?php echo MENU_ALT_MODIFDOC; ?>" >
				<i class="fa fa-flash" style="color:#FFC107;"></i></a>
			</span>		
		</div>
	</div>
	
	
	<!--****************************************************************************-->
	
	<div id="content3"> <span class="span"><span class="spanredchico">&emsp;&emsp;<?php echo MODIFICACIONES; ?></span></span>
		<div id="hoverbar3">			
			<span class="span">
			<a href="?seccion=modifdoc_admin&amp;aktion=add" title="<?php echo DOCUMENTOS_ANOTAR_MODIFICACION; ?>">
			<i class="fa fa-plus" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=modifdoc_admin&amp;aktion=change" title="<?php echo DOCUMENTOS_EDITAR_MODIFICACION; ?>">
				<i class="fa fa-pencil" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=modifdoc_print&amp;aktion=print" title="<?php echo MENU_ALT_MODIFDOCPRINT; ?>">
				<i class="fa fa-print" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=checkbox3_modifdoc" title="<?php echo MENU_ALT_BORRAR_MODIFDOC; ?>">
				<i class="fa fa-trash-o" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=listamodificaciones" title="<?php echo DOCUMENTOS_JOIN; ?>">
				<i class="fa fa-retweet" style="color:#FFC107;"></i></a>
			</span>
			<span class="span">
				<a href="?seccion=editdeletemodifdocs"title="<?php echo MENU_ALT_MODIFDOC; ?>" >
				<i class="fa fa-flash" style="color:#FFC107;"></i></a>
			</span>		
		</div>
	</div>
	
	
	

</body>
</html>
