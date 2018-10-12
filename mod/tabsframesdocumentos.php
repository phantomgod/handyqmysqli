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
			<a href="#" onclick="tab('tab_01','panel_01');" title="<?php echo DOCUMENTOS; ?>">
				<i class="fa fa-pencil fa-2x" style="color:#9fff30;"></i><?php echo DOCUMENTOS; ?></a>
			</li>
			<li id="tab_02">
				<a href="#" onclick="tab('tab_02','panel_02');" title="<?php echo MODIFICACIONES; ?>">
				<i class="fa fa-pencil fa-2x" style="color:#FFC107;"></i><?php echo MODIFICACIONES; ?></a>
			</li>
            <li id="tab_03">
				<a href="#" onclick="tab('tab_03','panel_03');" title="<?php echo MENU_BDDOCS; ?>">
				<i class="fa fa-pencil fa-2x" style="color:#00bcd4;"></i><?php echo MENU_BDDOCS; ?></a>
			</li>

        </ul>
        <div id="paneles">
            <div id="panel_01">

                <table class="table">
                    <tr>
                        <td>
							<a href="?seccion=documentos_admin&amp;aktion=add" title="<?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?>">
							<i class="fa fa-plus fa-2x" style="color:#9fff30;"></i></a>
                        </td>
						<td>
							<a href="?seccion=documentos_admin&amp;aktion=change" title="<?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?>">
							<i class="fa fa-pencil fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=directoryhowto1" title="<?php echo MENU_ALT_MAPA_DOCUMENTOS; ?>">
							<i class="fa fa-sitemap fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=listadocumentos" title="<?php echo MENU_ALT_LISTA_DOCUMENTOS; ?>">
							<i class="fa fa-list-ul fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=directoryhowto3" title="<?php echo MENU_ALT_ANOTAR_DOCUMENTOS; ?>">
							<i class="fa fa-plus-square fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=directoryhowto_4" title="<?php echo MENU_ALT_APROBAR_DOCUMENTOS; ?>">
							<i class="fa fa-check-square fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=wpload"title="<?php echo MENU_ALT_SUBIR_DOCUMENTOS; ?>">
							<i class="fa fa-upload fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=buscaenlaces" title="<?php echo MENU_ALT_BUSCAR_DOCUMENTOS; ?>">
							<i class="fa fa-search fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=checkbox3_links" title="<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>">
							<i class="fa fa-trash-o fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=editdeletedocs" title="<?php echo EDITAR_BORRAR_DOCUMENTO; ?>">
							<i class="fa fa-flash fa-2x" style="color:#9fff30;"></i></a>
                        </td>
                        <td>
							<a href="?seccion=directoryhowto_5"title="<?php echo MENU_ALT_MODIFICAR_CATEGORIAS; ?>">
							<i class="fa fa-sitemap fa-2x" style="color:#48D125;"></i></a>
                        </td>
                    </tr>
                </table>


            </div>
            <div id="panel_02">


                <table class="table">
                    <tr>
                        <td>
							<a href="?seccion=modifdoc_admin&amp;aktion=add" title="<?php echo DOCUMENTOS_ANOTAR_MODIFICACION; ?>">
							<i class="fa fa-plus fa-2x" style="color:#FFC107;"></i></a>
						</td>
						<td>
							<a href="?seccion=modifdoc_admin&amp;aktion=change" title="<?php echo DOCUMENTOS_EDITAR_MODIFICACION; ?>">
							<i class="fa fa-pencil fa-2x" style="color:#FFC107;"></i></a>
						</td>
                        <td>
							<a href="?seccion=modifdoc_print&amp;aktion=print" title="<?php echo MENU_ALT_MODIFDOCPRINT; ?>">
							<i class="fa fa-print fa-2x" style="color:#FFC107;"></i></a>
						</td>
                        <td>
							<a href="?seccion=checkbox3_modifdoc" title="<?php echo MENU_ALT_BORRAR_MODIFDOC; ?>">
							<i class="fa fa-trash-o fa-2x" style="color:#FFC107;"></i></a>
						</td>
                        <td>
							<a href="?seccion=listamodificaciones" title="<?php echo DOCUMENTOS_JOIN; ?>">
							<i class="fa fa-retweet fa-2x" style="color:#FFC107;"></i></a>
						</td>
                        <td>
							<a href="?seccion=editdeletemodifdocs"title="<?php echo MENU_ALT_MODIFDOC; ?>" >
							<i class="fa fa-flash fa-2x" style="color:#FFC107;"></i></a>
						</td>
                    </tr>
                </table>

            </div>
            <div id="panel_03">

                <table class="table">
                    <tr>
                        <td>
						<a href="?seccion=docmanager_create" title="<?php echo ANADIR_BDDOC; ?>">
						<i class="fa fa-plus fa-2x" style="color:#00bcd4;"></i></a></td>
                        <td>
						<td>
						<a href="?seccion=docmanager_admin&amp;aktion=change" title="<?php echo EDITAR_BDDOC; ?>">
						<i class="fa fa-pencil fa-2x" style="color:#00bcd4;"></i></a></td>
                        <td>
						<a href="?seccion=checkbox3_docmanager" title="<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>">
						<i class="fa fa-trash-o fa-2x" style="color:#00bcd4;"></i></a></td>
                        <td>
						<a href="?seccion=docmanager_create" title="<?php echo MENU_ALT_ANOTAR_DOCMANAGER; ?>">
						<i class="fa fa-plus-square fa-2x" style="color:#00bcd4;"></i></a></td>
                        <td>
						<a href="?seccion=docmanager_print&amp;aktion=print" title="<?php echo MENU_ALT_DOC_PRINTSCREEN; ?>">
						<i class="fa fa-print fa-2x" style="color:#00bcd4;"></i></a>
                            </p></td>
                    </tr>
                </table>

            </div>


        </div>
        <script type="text/javascript">
        tab('tab_01','panel_01');
        tab('tab_02','panel_02');
        tab('tab_03','panel_03');
    </script>
    </div>
</body>
</html>