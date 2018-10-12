<?php

error_reporting(0);
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2); 
    
} 

if (!isset($_POST['idioma'])) {
    $_SESSION['lang'] = $_POST['idioma']; 
    
} 
if (isset($_SESSION['lang'])) {
    if ($_POST['idioma'] == "en") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "en";    
    } elseif ($_POST['idioma'] == "es") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "es";    
    } elseif ($_POST['idioma'] == "pt") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "pt";    
    } elseif ($_POST['idioma'] == "dutch") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "dutch";    
    } elseif ($_POST['idioma'] == "it") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "it";
    } elseif ($_POST['idioma'] == "polish") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "polish";    
    } elseif ($_POST['idioma'] == "cat") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "cat";    
    } elseif ($_POST['idioma'] == "vasco") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "vasco";    
    }
}
switch($_SESSION['lang']) {
case "en":
        include 'lang/english.lang.php';
    break;
case "es":
        include 'lang/spanish.lang.php';
    break;
case "pt":
        include 'lang/portugues.lang.php';
    break;        
case "dutch":
        include 'lang/dutch.lang.php';
    break;
case "it":
        include 'lang/italian.lang.php';
    break;  
case "polish":
        include 'lang/polish.lang.php';
    break;      
case "cat":
        include 'lang/catalan.lang.php';
    break;
case "vasco":
        include 'lang/vasco.lang.php';
    break;
default:
        include 'lang/spanish.lang.php';
    break;
    }
?>


<script type="text/javascript" src="accordion-menu/jquery.js"></script>
<script type="text/javascript" src="accordion-menu/accordion.js"></script>
<link type="text/css" rel="stylesheet" href="accordion-menu/style.css" />


<div style="float:left">

<!--This is the first division of left-->
  
  <div id="firstpane" class="menu_list">
  
  
  <!--Code for menu starts here-->
        
         <p class="menu_head">
            <a href="index.php" title="Home"><img src="images/menu_home_blanck.png"  alt="" /></a></p>
         <p class="menu_head">    
            <a href="?seccion=ayuda" title="<?php echo AYUDA; ?>"><img src="images/menu_ayuda_blanck.png" alt="" /></a></p>
         <p class="menu_head">
            <a href="?seccion=encuestas" title="<?php echo MENU_ENCUESTAS; ?>"><img src="images/menu_encuestas_blanck.png"  alt="" /></a></p>
         <p class="menu_head">
            <a href="#"><img src="images/revsistema.png"  width="30" height="23" alt="<?php echo MENU_REVSISTEMA; ?>" title="<?php echo MENU_REVSISTEMA; ?>" /></a>
        </p>
        <div class="menu_body">
            <a href="?seccion=revsistema_select"><div onMouseOver="showdiv(event,'<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=revsistema_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo IMPRIMIR_REVISION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>                      
        </div>
        
         <p class="menu_head">
         <a href="#" title="<?php echo INDICADORES_INDICADORES; ?>"><img src="images/blank_graph.gif" alt="<?php echo INDICADORES_INDICADORES; ?>" /><!--<?php echo INDICADORES_INDICADORES; ?>--></a>
         </p>
         <div class="menu_body">
            
            <a href="?seccion=todos_select"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_TODOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/black_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=ncsporarea"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_NCSPORAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=desviacioncierresncs"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/yellow_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=totalhorasformacionportrabajador"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/green_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=graficacontrolavisos"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/orange_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=graficaincidenciasinspecciones"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/pink_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=graficaincidenciasalmacen"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/grey_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>                        
            <a href="?seccion=graficaincidenciasdeproveedor"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>                        
            <a href="?seccion=valoracionglobalclientes"><div onMouseOver="showdiv(event,'<?php echo INDICADORES_VALORACIONGLOBALCLIENTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_graph.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>                        
            
            
       </div>        
        
               
        <p class="menu_head">
        <a href="#" title="<?php echo MENU_DOCUMENTOS; ?>"><img src="images/menu_docs_blanck.png" alt="<?php echo MENU_DOCUMENTOS; ?>" /><!--<?php echo MENU_DOCUMENTOS; ?>--></a>
        </p>
        <div class="menu_body">
            <a href="?seccion=documentos_admin&amp;aktion=change"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_edit.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>                                          
            <a href="?seccion=documentos_admin&amp;aktion=add"><div onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen+.gif" style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=directoryhowto1"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_MAPA_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/map.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listadocumentos"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=directoryhowto_3"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ANOTAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_add.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=directoryhowto_4"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_APROBAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_ok.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=wpload"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_SUBIR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_upload.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=buscaenlaces"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=editdeletedocs"><div onMouseOver="showdiv(event,'<?php echo EDITAR_BORRAR_DOCUMENTO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_rayo.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_links"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=directoryhowto_5"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_MODIFICAR_CATEGORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepgreen_categories.gif"  style="position:relative; left:25px; top:10px; bottom: 10px;" alt="" /></div></a>
                
        </div>
        
        <!--<p class="menu_head">
        <a href="?seccion=doc_man" title="<?php echo MENU_OTROS_DOCUMENTOS; ?>"><?php echo MENU_OTROS_DOCUMENTOS; ?><img src="images/menu_docs_blanck.png"  alt="" /></a></p>-->
        
        
        <p class="menu_head"><a href="#" title="<?php echo MENU_BDDOCS; ?>"><img src="images/menu_docs_blanck1.png" alt="<?php echo MENU_BDDOCS; ?>" /><!--<?php echo MENU_BDDOCS; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=docmanager_create"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ANOTAR_DOCMANAGER; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_add.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=docmanager_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_DOC_PRINTSCREEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=docmanager_admin&amp;aktion=change"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_EDITAR_BDDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_docmanager"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
                                        
        </div>
        <p class="menu_head"><a href="#" title="<?php echo MENU_MODIFDOCS; ?>"><img src="images/menu_docs_blanck.png" alt="<?php echo MENU_MODIFDOCS; ?>" /><!--<?php echo MENU_MODIFDOCS; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=modifdoc_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_MODIFDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_edit.gif"   style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=modifdoc_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MODIFDOC_PRINT; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_print.gif"   style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_modifdoc"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_MODIFDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listamodificaciones"><div onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_JOIN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>                                          
            <a href="?seccion=editdeletemodifdocs"><div onMouseOver="showdiv(event,'<?php echo EDITAR_BORRAR_MODIFDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_rayo.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_AUDITORIAS; ?>"><img src="images/menu_auditorias_blanck.png" alt="<?php echo MENU_AUDITORIAS; ?>" /><!--<?php echo MENU_AUDITORIAS; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=aisgc_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>      
            <a href="?seccion=aisgc_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_aisgc"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=buscaisgc"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listaisgc"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_AINFORMES; ?>"><img src="images/menu_informes_blanck.png" alt="<?php echo MENU_AINFORMES; ?>" /><!--<?php echo MENU_AINFORMES; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=auditorias_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_AINFORMES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/purple_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>      
            <a href="?seccion=auditorias_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/purple_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_auditorias"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/purple_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=ai_nc"><div onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/purple_join.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=buscauditorias"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_AINFORMES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/purple_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listauditorias"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_AUDITORIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/purple_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_AUDITORES; ?>"><img src="images/menu_auditor_blanck.png" alt="<?php echo MENU_AUDITORES; ?>" /><!--<?php echo MENU_AUDITORES; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=tabsframes"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_AUDITOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=auditores_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_auditores"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_INSPECCIONES; ?>"><img src="images/menu_inspecciones_blanck.png" alt="<?php echo MENU_INSPECCIONES; ?>" /><!--<?php echo MENU_INSPECCIONES; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=inspecciones_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/pink_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=inspecciones_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/pink_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_inspecciones"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/pink_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=buscainspecciones"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_INSPECCION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/pink_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listainspecciones"><div onMouseOver="showdiv(event,'<?php echo LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/pink_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=inspecciones_por_servicio&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_INSPECCIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/pink_join.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=codigosincidenciasinspecciones_admin"><div onMouseOver="showdiv(event,'<?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/black_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_INSPECTORES; ?>"><img src="images/menu_inspectores_blanck.png" alt="<?php echo MENU_INSPECTORES; ?>" /><!--<?php echo MENU_INSPECTORES; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=tabsframes"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_INSPECTOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/orange_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=inspectores_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INSPECTOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/orange_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_inspectores"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INSPECTOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/orange_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>        
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_NCS; ?>"><img src="images/menu_ncs_blanck.png" alt="<?php echo MENU_NCS; ?>" /><!----></a></p>
        <div class="menu_body">
            <a href="?seccion=ncs_admin"><div onMouseOver="showdiv(event,'<?php echo NCS_ADMINISTRAR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepred_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listancs"><div onMouseOver="showdiv(event,'<?php echo NCS_LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepred_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=ncs_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepred_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=ai_nc"><div onMouseOver="showdiv(event,'<?php echo NCS_IMPRIMIR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepred_join.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=buscancs"><div onMouseOver="showdiv(event,'<?php echo NCS_BUSCAR_NCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepred_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_ncs"><div onMouseOver="showdiv(event,'<?php echo NCS_BORRAR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepred_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=ncs_porarea"><div onMouseOver="showdiv(event,'<?php echo NCS_PORAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepred_graph.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo EQUIPOS_EQUIPOS; ?>"><img src="images/menu_metrologia_blanck.png" alt="<?php echo EQUIPOS_EQUIPOS; ?>" /><!--<?php echo EQUIPOS_EQUIPOS; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=equipos_admin"><div onMouseOver="showdiv(event,'<?php echo EQUIPOS_ADMINISTRAR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listaequipos"><div onMouseOver="showdiv(event,'<?php echo EQUIPOS_LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=equipos_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo EQUIPOS_PRINT_DETAILS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>                                           
            <a href="?seccion=checkbox3_equipos"><div onMouseOver="showdiv(event,'<?php echo EQUIPOS_BORRAR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=calibraciones_por_equipo&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/coffe_join.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=calibraciones_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/rosalon_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=calibraciones_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/rosalon_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_calibraciones"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/rosalon_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>            
            <a href="?seccion=buscacalibraciones"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/rosalon_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>        
            <a href="?seccion=listacalibraciones"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/rosalon_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_OBJETIVOS; ?>"><img src="images/menu_objetivos_blanck.png" alt="<?php echo MENU_OBJETIVOS; ?>" /><!--<?php echo MENU_OBJETIVOS; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=objetivos_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=objetivos_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_objetivos"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=buscaobjetivos"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=seguimientos_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepyellow+.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_tareasobjetivos"><div onMouseOver="showdiv(event,'<?php echo OBJETIVOS_BORRAR_TAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deepyellow_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=lista_objetivos_y_seguimientos"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=seguimientos_por_objetivo&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_join.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_PARTES; ?>"><img src="images/menu_hojasdetrabajo_blanck.png" alt="<?php echo MENU_PARTES; ?>" /><!--<?php echo MENU_PARTES; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=partes_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/black_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=partes_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/black_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_partes"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/black_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=buscapartes"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/black_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>        
            
       </div>
       <!--<p class="menu_head"><img src="images/menu_extintores_blanck.png" alt="<?php echo EXTINTORES_EXTINTORES; ?>" /><!--<?php echo EXTINTORES_EXTINTORES; ?></p>
        <div class="menu_body">
            <a href="?seccion=extintores_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_EXTINTORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=extintores_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_EXTINTORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_extintores"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_EXTINTORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>            
            <a href="?seccion=buscaextintores"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_EXTINTORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_search.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>        
            <a href="?seccion=listaextintores"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_EXTINTORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
       </div>-->
       <p class="menu_head"><a href="#" title="<?php echo MENU_TRABAJADORES; ?>"><img src="images/menu_trabajador_blanck.png" alt="<?php echo MENU_TRABAJADORES; ?>" /><!--<?php echo MENU_TRABAJADORES; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=tabsframes"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_TRABAJADORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/toffe_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_trabajadores"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_TRABAJADORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/toffe_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=trabajadores_print&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_TRABAJADOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/toffe_print.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_SERVICIOS; ?>"><img src="images/menu_trabajadores_servicios_blanck.png" alt="<?php echo MENU_SERVICIOS; ?>" /><!--<?php echo MENU_SERVICIOS; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=servicios_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_SERVICIOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/sky_edit.gif"  alt="Editar & a&ntilde;adir servicios" style="position:relative; left:25px; top:10px;" /></div></a>
            <a href="?seccion=checkbox3_servicios"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_SERVICIOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/sky_delete.gif"  alt="Borrar servicios" style="position:relative; left:25px; top:10px;" /></div></a>
            <a href="?seccion=controlavisos"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_CONTROLAVISOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/sky_edit.gif"  alt="Seguimiento de avisos de servicio" style="position:relative; left:25px; top:10px;" /></div></a>
            <a href="?seccion=grafica_avisos"><div onMouseOver="showdiv(event,'<?php echo SERVICIO_AVISOS_GRAFICA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/sky_graph.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_PROVEEDORES; ?>"><img src="images/menu_proveedores_blanck.png" alt="<?php echo MENU_PROVEEDORES; ?>" /><!--<?php echo MENU_PROVEEDORES; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=proveedores_admin"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ADMINISTRAR_PROVEEDORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/green_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listaproveedores"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/green_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_proveedores"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_PROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/green_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>  
            <a href="?seccion=incidencias_proveedor_admin"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_INCIDENCIAS_DELPROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_incidenciasproveedor"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_INCIDENCIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/red_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=codigosincidencias_admin"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/rosalon_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>  
            <a href="?seccion=checkbox3_codigosincidencias"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/rosalon_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=areassensibles_admin"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_ADMINISTRAR_AREASSENSIBLES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>  
            <a href="?seccion=checkbox3_areassensibles"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_BORRAR_AREASSENSIBLES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/deeppurple_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=incidencias_por_proveedor&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo PROVEEDORES_INCIDENCIAS_PORPROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/orange_join.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head"><a href="#" title="<?php echo MENU_FORMACION; ?>"><img src="images/menu_cursos_blanck.png" alt="<?php echo MENU_FORMACION; ?>" /><!--<?php echo MENU_FORMACION; ?>--></a></p>
        <div class="menu_body">
            <a href="?seccion=cursos_admin"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3_cursos"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=lista_cursos"><div onMouseOver="showdiv(event,'<?php echo FORMACION_LISTACURSOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=cursos_por_trabajador&amp;aktion=print"><div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blue_join.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <!--<p class="menu_head"><a href="#" title="<?php echo MENU_AVISOS; ?>"><?php echo MENU_AVISOS; ?></a></p>
        <div class="menu_body">
            <a href="?seccion=poner_aviso"><div onMouseOver="showdiv(event,'<?php echo AVISOS_PONER_AVISO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/grey_add.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=listavisos"><div onMouseOver="showdiv(event,'<?php echo AVISOS_LISTAVISOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/grey_list.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=avisos_admin"><div onMouseOver="showdiv(event,'<?php echo AVISOS_ADMIN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/grey_edit.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            <a href="?seccion=checkbox3"><div onMouseOver="showdiv(event,'<?php echo AVISOS_DELETE; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/grey_delete.gif"  style="position:relative; left:25px; top:10px;" alt="" /></div></a>
            
       </div>
       <p class="menu_head">Varios</p>
        <div class="menu_body">
            <a href="phpMyEdit-5.7.1/phpMyEditSetup.php">Setup</a>
            <a href="?seccion=aisg_c">AISGC</a>
            <a href="?seccion=controlavisos">Control-avisos</a>
            <a href="?seccion=objetivos_seguimiento_quick">Seg. Objetivos</a>
            <a href="phpMyEdit-5.7.1/hojasdemejora.php">NCS</a>
            <a href="phpMyEdit-5.7.1/cursos.php">Cursos</a>
            <a href="?seccion=ext_plorer">Extplorer</a>            
       </div>-->
       
  </div>
  
  <!--Code for menu ends here-->
  <br /><br />

</div>