<?php
/**
--------------------------------
Secciones: defines the modules working

* Parses and verifies the doc comments for files.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   HANDY-Q
 * @author    Javier de Juan <javier@textblock.org>
 * @copyright 2013 Javier de Juan Morón. Sevilla. España
 * @license   No license
 * @version   CVS:
 * @link      http://www.textblock.org
-------------------------------
*/
/** switch ($_GET["seccion"]){ aqui puede variar segun queramos que nos
aparezca nuestra url
en este caso quedaria index.php?seccion=loquesea
by Fko; ~*/
error_reporting(0);

switch ($_GET["seccion"]){
//...........................................................PORTADA
//Modulo x defecto
default:
case 'index';
        $incluir = 'mod/todos_now.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Mi empresa, hoy';
    break;


     //...........................................................calendarframe
    //Modulo calendarframe
case 'calendarframe';
        $incluir = 'mod/calendarframe.php';
        $acciones = 'acciones/acciones_calendario.php';
        $seccionweb = 'Calendario de mantenimientos de mÁquinas';
    break;



     //...........................................................newindex
    //Modulo newindex
case 'newindex';
        $incluir = 'mod/newindex.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'newindex';
    break;


     //...........................................................portada2
    //Modulo portada2
case 'portada2';
        $incluir = 'mod/portada2.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Portada';
    break;


    //...........................................................REVSISTEMA
    //Modulo revsistema
case 'revsistema';
        $incluir = 'mod/revsistema.php';
        $acciones = 'acciones/acciones_revsistema.php';
        $seccionweb = 'Revisión del sistema';
    break;


    //...........................................................REVSISTEMA
    //Modulo revsistema
case 'revsistema2';
        $incluir = 'mod/revsistema2.php';
        $acciones = 'acciones/acciones_revsistema.php';
        $seccionweb = 'Revisión del sistema';
    break;


    //...........................................................REVSISTEMA_SELECT
    //Modulo revsistema
case 'revsistema_select';
        $incluir = 'mod/revsistema_select.php';
        $acciones = 'acciones/acciones_revsistema.php';
        $seccionweb = 'Seleccionar Revisión del Sistema';
    break;

    //...........................................................REVSISTEMA PRINT
    //Modulo revsistema
case 'revsistema_print';
        $incluir = 'mod/revsistema_print.php';
        $acciones = 'acciones/acciones_revsistema.php';
        $seccionweb = 'Revisión del sistema';
    break;


    //...........................................................REVSISTEMA
    //Modulo revsistema
case 'todos_now';
        $incluir = 'mod/todos_now.php';
        $acciones = 'acciones/acciones_revsistema.php';
        $seccionweb = 'Mi empresa hoy';
    break;

    //...........................................................BACKUP
    //Modulo backup
case 'backup';
        $incluir = 'mod/backup.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Backup';
    break;

    //...........................................................PIXLRL
    //Modulo PIXLRL
case 'pixlr';
        $incluir = 'mod/pixlr.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Editor de imÁgenes';
    break;



    //...........................................................BUSQUEDA BRUTA
    //Modulo backup
case 'buscador';
        $incluir = 'mod/buscador.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Búsqueda bruta';
    break;

    //...........................................................EXTPLORER
    //Modulo ext_plorer
case 'ext_plorer';
        $incluir = 'mod/ext_plorer.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Explorador de archivos';
    break;


    //Modulo backup
case 'back_up';
        $incluir = 'mod/back_up.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Backup';
    break;

    //...........................................................AYUDA
    //Modulo ayuda
case 'ayuda';
        $incluir = 'mod/ayuda.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Ayuda';
    break;


    //...........................................................DOC_MAN
    //Modulo ayuda
case 'doc_man';
        $incluir = 'mod/doc_man.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Gestión documental';
    break;

    //...........................................................ENCUESTAS
    //Modulo ...
case 'encuestas';
        $incluir = 'mod/encuestas.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Encuestas de satisfacci&oacute;n de clientes';
    break;



    //...........................................................MENUDOCUMENTOS
    //Modulo menudocumentos
case 'menudocumentos';
        $incluir = 'mod/menudocumentos.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Admin';
    break;


    //...........................................................AVISOS
    //Modulo ...
case 'listavisos';
        $incluir = 'mod/listavisos.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Lista de avisos';
    break;

    //Modulo ...
case 'poner_aviso';
        $incluir = 'mod/poner_aviso.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Poner un aviso';
    break;

    //Modulo ...
case 'aviso_enviado';
        $incluir = 'mod/aviso_enviado.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'xxxxxx';
    break;

    //Modulo ...
case 'veravisos_pdf';
        $incluir = 'mod/veravisos_pdf.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'xxxxxx';
    break;


    //Modulo ...
case 'avisos_admin';
        $incluir = 'mod/avisos_admin.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Administrar avisos';
    break;

    //Modulo ...
case 'busqueda_avisos';
        $incluir = 'mod/busqueda_avisos.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Buscar un aviso';
    break;


    //Modulo ...
case 'checkbox2';
        $incluir = 'mod/checkbox2.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Aviso borrado';
    break;

    //Modulo ...
case 'checkbox3';
        $incluir = 'mod/checkbox3.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Borrar un aviso';
    break;


    //Modulo ...
case 'imp_aviso';
        $incluir = 'mod/imp_aviso.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Imprimir un aviso en pantalla';
    break;

    //Modulo ...
case 'avisos_print';
        $incluir = 'mod/avisos_print.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Imprimir un aviso en pantalla';
    break;






    //...........................................................CONTACTOS Y OTROS
    //Modulo ...
case 'yca';
        $incluir = 'mod/yca.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Usted no puede acceder directamente';
    break;

    //Modulo ...
case 'contact';
        $incluir = 'mod/contact.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Formulario de contacto';
    break;

    //Modulo ...
case 'formulariodecontacto';
        $incluir = 'mod/formulariodecontacto.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Formulario de contacto';
    break;

    //Modulo ...
case 'captcha';
        $incluir = 'mod/captcha.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Captcha';
    break;

    //Modulo ...
case 'mailform';
        $incluir = 'mod/mailform.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Formulario de contacto';
    break;

    //Modulo ...
case 'Kontact';
        $incluir = 'mod/Kontact.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Formulario de contacto';
    break;








    //...........................................................DOCUMENTOS
    //Modulo ...
case 'listadocumentos';
        $incluir = 'mod/listadocumentos.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Lista de documentos';
    break;

    //Modulo ...
case 'listadocumentosporfamilias';
        $incluir = 'mod/listadocumentosporfamilias.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Lista de documentos';
    break;


    //Modulo ...LISTA DE MODIFICACIONES
case 'listamodificaciones';
        $incluir = 'mod/listamodificaciones.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Lista de modificaciones de documentos';
    break;

    //Modulo ...frame de la lista de documentos
case 'lista_documentos';
        $incluir = 'mod/lista_documentos.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Lista de documentos';
    break;

    //Modulo ...
case 'wpload';
        $incluir = 'mod/wpload.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Upload de documentos';
    break;

    //Modulo ...
case 'upload';
        $incluir = 'mod/upload.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Upload de documentos';
    break;
        $acciones = 'acciones/acciones_documentos.php';
    //Modulo ...
case 'docurl';
        $incluir = 'mod/docurl.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Poner Url del documento';
    break;

    //Modulo ...
case 'checkbox2_links';
        $incluir = 'mod/checkbox2_links.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Documento borrado';
    break;

    //Modulo ...
case 'checkbox3_links';
        $incluir = 'mod/checkbox3_links.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Borrar documento';
    break;

//Modulo ...edit delete docs....frame
case 'editdeletedocs';
        $incluir = 'mod/editdeletedocs.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Editar y borrar documentos';
    break;

    //Modulo ...Borrar documentos
case 'borrar_documentos';
        $incluir = 'mod/borrar_documentos.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Borrar documentos';
    break;

    //Modulo ...Borrar documentos
case 'borrados_documentos';
        $incluir = 'mod/borrados_documentos.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Borrar documentos';
    break;

    //Modulo ...
case 'link_enviado';
        $incluir = 'mod/link_enviado.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Documento enviado';
    break;

    //Modulo ...
case 'busca_enlaces';
        $incluir = 'mod/busca_enlaces.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Buscar documento';
    break;

    //Modulo ...
case 'buscaenlaces';
        $incluir = 'mod/buscaenlaces.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Buscar documento';
    break;


    //Modulo ...
case 'buscador.inc';
        $incluir = 'mod/buscador.inc.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Documentos encontrados';
    break;


    //Modulo buscador.inc.enlaces
case 'buscador.inc.enlaces';
        $incluir = 'mod/buscador.inc.enlaces.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Documentos encontrados';
    break;


    //Modulo ...
case 'directoryhowto1';
        $incluir = 'mod/directoryhowto1.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Directorio de documentos';
    break;

    //Modulo ...
case 'directoryhowto_1';
        $incluir = 'mod/directoryhowto_1.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Directorio de documentos';
    break;

    //Modulo ...
case 'directoryhowto3';
        $incluir = 'mod/directoryhowto3.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Anotar URL del documento';
    break;
    //Modulo ...
case 'directoryhowto33';
        $incluir = 'mod/directoryhowto33.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Anotar URL del documento';
    break;

    //Modulo ...
case 'directoryhowto_3';
        $incluir = 'mod/directoryhowto_3.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Anotar URL del documento';
    break;

    //Modulo ...
case 'directoryhowto4';
        $incluir = 'mod/directoryhowto4.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Aprobar uploads de documentos';
    break;

    //Modulo ...
case 'directoryhowto_4';
        $incluir = 'mod/directoryhowto_4.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Aprobar uploads de documentos';
    break;

    //Modulo modificar categorías de documentos
case 'directoryhowto5';
        $incluir = 'mod/directoryhowto5.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Modificar categorías de documentos';
    break;
	
    //Modulo modificar categorías de documentos
case 'directoryhowto55';
        $incluir = 'mod/directoryhowto55.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Modificar categorías de documentos';
    break;

    //Modulo ...Frame de modificar categorías de documentos
case 'directoryhowto_5';
        $incluir = 'mod/directoryhowto_5.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Modificar categorías de documentos';
    break;

    //Modulo ...
case 'directoryhowto6';
        $incluir = 'mod/directoryhowto6.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Modificar categorías de documentos';
    break;


    //Modulo ...
case 'documentos_admin';
        $incluir = 'mod/documentos_admin.php';
        $acciones = 'acciones/acciones_documentos.php';
        $seccionweb = 'Editar documentos';
    break;


    //Modulo ...
case 'modifdoc_admin';
        $incluir = 'mod/modifdoc_admin.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Control de modificaciones de documentos';
    break;


    //Modulo ...
case 'modifdoc_print';
        $incluir = 'mod/modifdoc_print.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Imprimir modificaciones de documentos';
    break;


    //Modulo ...
case 'modificaciones_por_documento';
        $incluir = 'mod/modificaciones_por_documento.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Modificaciones a documentos';
    break;



    //Modulo ...
case 'checkbox2_modifdoc';
        $incluir = 'mod/checkbox2_modifdoc.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Modificaci&oacute;n borrada';
    break;

    //Modulo ...Borrar modificación de documento
case 'checkbox3_modifdoc';
        $incluir = 'mod/checkbox3_modifdoc.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Borrar modificaci&oacute;n';
    break;

    //Modulo ...Borrar modificación de documento
case 'borrar_modifdoc';
        $incluir = 'mod/borrar_modifdoc.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Borrar modificaci&oacute;n';
    break;


    //Modulo ...Borrar modificación de documento
case 'borrada_modifdoc';
        $incluir = 'mod/borrada_modifdoc.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Borrar modificaci&oacute;n';
    break;


     //Modulo ...EDIT IN PLACE DELETE IN PLACE
case 'editdeletemodifdocs';
        $incluir = 'mod/editdeletemodifdocs.php';
        $acciones = 'acciones/acciones_modifdocs.php';
        $seccionweb = 'Edición y borrado de modificaciones';
    break;



    //Modulo ...Insertar un documento en la base de datsos
case 'docmanager_insert';
        $incluir = 'mod/docmanager_insert.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Insertar un documento en la base de datos';
    break;


    //Modulo ...
case 'docmanager_create';
        $incluir = 'mod/docmanager_create.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Insertar un documento en la base de datos';
    break;


    //Modulo ...Imprimir documento de la BD en pantalla
case 'docmanager_print';
        $incluir = 'mod/docmanager_print.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Mostrar un documento de la base de datos';
    break;

    //Modulo ...
case 'checkbox2_docmanager';
        $incluir = 'mod/checkbox2_docmanager.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Documento borrado';
    break;

    //Modulo ...Borrar modificación de documento
case 'checkbox3_docmanager';
        $incluir = 'mod/checkbox3_docmanager.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Borrar documento';
    break;

//Modulo ...
case 'borrar_docmanager';
        $incluir = 'mod/borrar_docmanager.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Documento borrado';
    break;

    //Modulo ...Borrar modificación de documento
case 'borrados_docmanager';
        $incluir = 'mod/borrados_docmanager.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Borrar documento';
    break;


    //Modulo ...Editar documento de la BD
case 'docmanager_admin';
        $incluir = 'mod/docmanager_admin.php';
        $acciones = 'acciones/acciones_bddocs.php';
        $seccionweb = 'Editar documentos de la BD';
    break;


    //...........................................................NCÂ´S
    //Modulo ...
case 'poner_nc';
        $incluir = 'mod/poner_nc.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Abrir una no conformidad';
    break;

    //Modulo ...
case 'nc_enviada';
        $incluir = 'mod/nc_enviada.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'No conformidad enviada';
    break;

    //Modulo ...
case 'listancs';
        $incluir = 'mod/listancs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Lista de no conformidades';
    break;

    //Modulo ...
case 'listancs_selectarea';
        $incluir = 'mod/listancs_selectarea.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Lista de no conformidades, seleccionando el Área afectada';
    break;

    //Modulo ...
case 'listancs_selectarea_ai_fecha';
        $incluir = 'mod/listancs_selectarea_ai_fecha.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Lista de no conformidades, seleccionando el Área afectada';
    break;

        //Modulo ...
case 'listancs_selectarea_and_ai';
        $incluir = 'mod/listancs_selectarea_and_ai.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Lista de no conformidades, seleccionando el Área afectada';
    break;

    //Modulo imprimir nc
case 'ncs_print';
        $incluir = 'mod/ncs_print.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Imprimir no conformidad';
    break;


    //Modulo imprimir nc
case 'ncs_print2';
        $incluir = 'mod/ncs_print2.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Imprimir no conformidad';
    break;



    //Modulo ...
case 'busca_ncs';
        $incluir = 'mod/busca_ncs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Buscar no conformidad';
    break;

    //Modulo ...
case 'buscancs';
        $incluir = 'mod/buscancs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Buscar no conformidad';
    break;


    //Modulo ...
case 'checkbox2_ncs';
        $incluir = 'mod/checkbox2_ncs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'No conformidad borrada';
    break;

    //Modulo ...
case 'checkbox3_ncs';
        $incluir = 'mod/checkbox3_ncs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Borrar una no conformidad';
    break;

    //Modulo ...
case 'busqueda_ncs';
        $incluir = 'mod/busqueda_ncs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Buscar una no conformidad';
    break;

    //Modulo ...
case 'ncs_admin';
        $incluir = 'mod/ncs_admin.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Editar / abrir una no conformidad';
    break;

    //Modulo no conformidades por auditoría
case 'ai_nc';
        $incluir = 'mod/ai_nc.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'NC&acute;s por auditor&iacute;a';
    break;


    //Modulo grÁfica de NCÂ´s por Área
case 'ncs_porarea';
        $incluir = 'mod/ncs_porarea.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'NC&acute;s por %Aacute;rea';
    break;


    //Modulo grÁfica pastel
case 'graficapastel';
        $incluir = 'mod/graficapastel.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = ' Gr&aacute;fica de NC&acute;s por %Aacute;rea';
    break;

    //Modulo Áreas afectadas por no conformidades
case 'afecta_a';
        $incluir = 'mod/afecta_a.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = '&Aacute;reas afectadas por una NC';
    break;

    //Modulo borrar_ncs
case 'borrar_ncs';
        $incluir = 'mod/borrar_ncs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Borrar NCÂ´s';
    break;

    //Modulo borrar_ncs2
case 'borradas_ncs';
        $incluir = 'mod/borradas_ncs.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'Borrar NCÂ´s';
    break;





    //...........................................................INSPECCIONES
    //Modulo ...
case 'poner_inspeccion';
        $incluir = 'mod/poner_inspeccion.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Anotar inspecci&oacute;n';
    break;

    //Modulo ...
case 'inspeccion_enviada';
        $incluir = 'mod/inspeccion_enviada.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Inspecci&oacute;n anotada';
    break;

    //Modulo ...
case 'listainspecciones';
        $incluir = 'mod/listainspecciones.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Lista de inspecciones';
    break;


    //Modulo ...
case 'inspecciones_print';
        $incluir = 'mod/inspecciones_print.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Imprimir una inspecci&oacute;n en pantalla';
    break;


    //Modulo ...
case 'busca_inspecciones';
        $incluir = 'mod/busca_inspecciones.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Buscar una inspecci&oacute;n';
    break;

    //Modulo ...
case 'buscainspecciones';
        $incluir = 'mod/buscainspecciones.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Buscar inspecci&oacute;n';
    break;


    //Modulo ...
case 'checkbox2_inspecciones';
        $incluir = 'mod/checkbox2_inspecciones.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Inspecci&oacute;n borrada';
    break;

    //Modulo ...
case 'checkbox3_inspecciones';
        $incluir = 'mod/checkbox3_inspecciones.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Borrar una inspecci&oacute;n';
    break;

     //Modulo ...BORRAR inspecciones
case 'borrar_inspecciones';
        $incluir = 'mod/borrar_inspecciones.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Borrar una inspecci&oacute;n';
    break;

     //Modulo ...RECIBIR y BORRAR inspecciones
case 'borradas_inspecciones';
        $incluir = 'mod/borradas_inspecciones.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Borrar una inspecci&oacute;n';
    break;

    //Modulo ...
case 'inspecciones_admin';
        $incluir = 'mod/inspecciones_admin.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Editar / anotar una inspecci&oacute;n';
    break;



    //Modulo ...
case 'inspecciones_por_servicio';
        $incluir = 'mod/inspecciones_por_servicio.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Número de inspecciones por servicio';
    break;

    //Modulo ...
case 'codigosincidenciasinspecciones_admin';
        $incluir = 'mod/codigosincidenciasinspecciones_admin.php';
        $acciones = 'acciones/acciones_inspecciones.php';
        $seccionweb = 'Administrar los códigos de incidencias en
        inspecciones de servicio';
    break;





    //...........................................................INSPECTORES
    //Modulo ...
case 'inspectores_print';
        $incluir = 'mod/inspectores_print.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Imprimir inspector en pantalla';
    break;

    //Modulo ...
case 'checkbox2_inspectores';
        $incluir = 'mod/checkbox2_inspectores.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Inspector borrado';
    break;

    //Modulo ...
case 'checkbox3_inspectores';
        $incluir = 'mod/checkbox3_inspectores.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Borrar inspector';
    break;

    //Modulo ...BORRAR inspectores
case 'borrar_inspectores';
        $incluir = 'mod/borrar_inspectores.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Borrar inspector';
    break;

    //Modulo ...BORRADOS inspectores
case 'borrados_inspectores';
        $incluir = 'mod/borrados_inspectores.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Borrar inspector';
    break;


    //Modulo ...
case 'inspectores_admin';
        $incluir = 'mod/inspectores_admin.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Editar / anotar inspector';
    break;

    //Modulo ... SOLO AÑADIR lnspector (dejo activo el change
    //aunque no lo llamo. Para cambiar uso el 2c
case 'inspectores_admin2';
        $incluir = 'mod/inspectores_admin2.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Editar / anotar inspector';
    break;

    //Modulo ...
case 'inspectores_admin2c';
        $incluir = 'mod/inspectores_admin2c.php';
        $acciones = 'acciones/acciones_inspectores.php';
        $seccionweb = 'Editar / anotar inspector';
    break;




    //...........................................................INDICADORES
    //Modulo ...
case 'ncsporarea';
        $incluir = 'mod/ncsporarea.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Número de no conformidades por Área';
    break;

    //Modulo ...
case 'desviacioncierresncs';
        $incluir = 'mod/desviacioncierresncs.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Desviaciones en el cierre de las no conformidades';
    break;

    //Modulo ...
case 'totalhorasformacionportrabajador';
        $incluir = 'mod/totalhorasformacionportrabajador.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Total de horas de formación por trabajador';
    break;

    //Modulo ...
case 'graficacontrolavisos';
        $incluir = 'mod/graficacontrolavisos.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Total de horas de formación por trabajador';
    break;

    //Modulo ...
case 'graficaincidenciasinspecciones';
        $incluir = 'mod/graficaincidenciasinspecciones.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Total de horas de formación por trabajador';
    break;


    //Modulo ...
case 'valoracionglobalclientes';
        $incluir = 'mod/valoracionglobalclientes.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Valoración global clientes';
    break;
	
    //Modulo ...
case 'valoracionglobalclientes2';
        $incluir = 'mod/valoracionglobalclientes2.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Valoración global clientes';
    break;
	
    //Modulo ...
case 'valoracionglobalclientes_revsistema';
        $incluir = 'mod/valoracionglobalclientes_revsistema.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Valoración global clientes';
    break;

    //Modulo ...
case 'graficaincidenciasalmacen';
        $incluir = 'mod/graficaincidenciasalmacen.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Valoración global clientes';
    break;

    //Modulo ...
case 'graficaincidenciasdeproveedor';
        $incluir = 'mod/graficaincidenciasdeproveedor.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Valoración global clientes';
    break;

    //Modulo ...
case 'todos';
        $incluir = 'mod/todos.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Todos los indicadores';
    break;

    //Modulo ...
case 'todos2';
        $incluir = 'mod/todos2.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Todos los indicadores';
    break;


    //Modulo ...
case 'todos_select';
        $incluir = 'mod/todos_select.php';
        $acciones = 'acciones/acciones_indicadores.php';
        $seccionweb = 'Seleccionar todos los indicadores';
    break;




    //...........................................................OBJETIVOS
    //Modulo ...
case 'poner_objetivo';
        $incluir = 'mod/poner_objetivo.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Abrir un objetivo';
    break;

    //Modulo ...
case 'objetivo_enviado';
        $incluir = 'mod/objetivo_enviado.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Objetivo anotado';
    break;

    //Modulo ...
case 'listaobjetivos';
        $incluir = 'mod/listaobjetivos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Lista de objetivos';
    break;

    //Modulo ...
case 'checkbox2_objetivos';
        $incluir = 'mod/checkbox2_objetivos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Objetivo borrado';
    break;

    //Modulo ...
case 'checkbox3_objetivos';
        $incluir = 'mod/checkbox3_objetivos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Borrar un objetivo';
    break;

    //Modulo ...
case 'objetivos_print';
        $incluir = 'mod/objetivos_print.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Imprimir un objetivo en pantalla';
    break;



    //Modulo ...
case 'objetivos_admin';
        $incluir = 'mod/objetivos_admin.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Editar / anotar un objetivo';
    break;

    //Modulo ...
case 'busca_objetivos';
        $incluir = 'mod/busca_objetivos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Buscar objetivo';
    break;

    //Modulo ...
case 'buscaobjetivos';
        $incluir = 'mod/buscaobjetivos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Buscar objetivo';
    break;

    //Modulo ...
case 'lista_objetivos_y_seguimientos';
        $incluir = 'mod/lista_objetivos_y_seguimientos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Lista de objetivos y seguimientos';
    break;


    //Modulo ...
case 'seguimientos_por_objetivo';
        $incluir = 'mod/seguimientos_por_objetivo.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Seguimientos por objetivo';
    break;


    //Modulo ...
case 'borrar_seguimiento';
        $incluir = 'mod/borrar_seguimiento.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Borrar una tarea de seguimiento de un objetivo';
    break;

    //Modulo ...
case 'seguimiento_enviado';
        $incluir = 'mod/seguimiento_enviado.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = ' Tarea de seguimiento anotada';
    break;


    //Modulo ...
case 'objetivos_seguimiento_quick';
        $incluir = 'mod/objetivos_seguimiento_quick.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = ' Administrar seguimientos de objetivos';
    break;


    //Modulo ...Añadir tareas a un objetivo
case 'tareasobjetivos_admin';
        $incluir = 'mod/tareasobjetivos_admin.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = ' Administrar seguimientos de objetivos';
    break;


    //Modulo ...Borrar tareas a un objetivo
case 'checkbox2_tareasobjetivos';
        $incluir = 'mod/checkbox2_tareasobjetivos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Borrar tareas de objetivos';
    break;




    //Modulo ...Añadir tareas a un objetivo
case 'checkbox3_tareasobjetivos';
        $incluir = 'mod/checkbox3_tareasobjetivos.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = 'Borrar tareas de objetivos';
    break;



    //Modulo ...Administrar seguimientos
case 'seguimientos_admin';
        $incluir = 'mod/seguimientos_admin.php';
        $acciones = 'acciones/acciones_objetivos.php';
        $seccionweb = ' Administrar seguimientos de objetivos';
    break;



    //...........................................................AUDITORÍAS
    //Modulo ...
case 'poner_auditoria';
        $incluir = 'mod/poner_auditoria.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Abrir informe de auditor&iacute;a';
    break;

    //Modulo ...
case 'auditoria_enviada';
        $incluir = 'mod/auditoria_enviada.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Informe de auditor&iacute;a anotado';
    break;

    //Modulo ...
case 'listauditorias';
        $incluir = 'mod/listauditorias.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Lista de informes auditor&iacute;as';
    break;


    //Modulo imprimir auditoria
case 'auditorias_print';
        $incluir = 'mod/auditorias_print.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Imprimir informes de auditor&iacute;a';
    break;


    //Modulo ...
case 'busca_auditorias';
        $incluir = 'mod/busca_auditorias.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Buscar un informe de auditor&iacute;a';
    break;

    //Modulo ...
case 'buscauditorias';
        $incluir = 'mod/buscauditorias.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Buscar un informe de auditor&iacute;a';
    break;


    //Modulo ...
case 'checkbox2_auditorias';
        $incluir = 'mod/checkbox2_auditorias.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = ' Informe de auditor&iacute;a borrado';
    break;

    //Modulo ...
case 'checkbox3_auditorias';
        $incluir = 'mod/checkbox3_auditorias.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Borrar informes de auditor&iacute;a';
    break;

        //Modulo ...
case 'borrar_informeauditoria';
        $incluir = 'mod/borrar_informeauditoria.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Borrar informes de auditor&iacute;a';
    break;

    //Modulo ...
case 'borrados_informesauditoria';
        $incluir = 'mod/borrados_informesauditoria.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = ' Informe de auditor&iacute;a borrado';
    break;


    //Modulo ...
case 'auditorias_admin';
        $incluir = 'mod/auditorias_admin.php';
        $acciones = 'acciones/acciones_ainformes.php';
        $seccionweb = 'Administrar informes de auditor&iacute;a';
    break;


    //Modulo ...auditoría al SGC
case 'aisgc_admin';
        $incluir = 'mod/aisgc_admin.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Editar / anotar una auditor&iacute;a al SGC';
    break;



    //Modulo ...
case 'listaisgc';
        $incluir = 'mod/listaisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Lista de auditor&iacute;as';
    break;


    //Modulo imprimir auditoria
case 'aisgc_print';
        $incluir = 'mod/aisgc_print.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Imprimir auditor&iacute;a';
    break;


    //Modulo ...
case 'busca_aisgc';
        $incluir = 'mod/busca_aisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Buscar una auditor&iacute;a';
    break;

    //Modulo ...
case 'buscaisgc';
        $incluir = 'mod/buscaisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Buscar una auditor&iacute;a';
    break;


    //Modulo ...
case 'checkbox2_aisgc';
        $incluir = 'mod/checkbox2_aisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = ' Auditor&iacute;a borrada';
    break;

    //Modulo ...
case 'checkbox3_aisgc';
        $incluir = 'mod/checkbox3_aisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Borrar auditor&iacute;a';
    break;
    
        //Modulo ...
case 'checkbox33_aisgc';
        $incluir = 'mod/checkbox33_aisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Borrar auditor&iacute;a';
    break;


    //Modulo borrar_aisgc
case 'borrar_aisgc';
        $incluir = 'mod/borrar_aisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Borrar auditorías';
    break;

    //Modulo borradas_aisgc
case 'borradas_aisgc';
        $incluir = 'mod/borradas_aisgc.php';
        $acciones = 'acciones/acciones_aisgc.php';
        $seccionweb = 'Borrar auditorías';
    break;

    //...........................................................AUDITORES

    //Modulo TABS FRAMES
case 'tabsframes';
        $incluir = 'mod/tabsframes.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Administrar auditores';
    break;

    //Modulo TABS FRAMESMEDICIONES
case 'tabsframesmediciones';
        $incluir = 'mod/tabsframesmediciones.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Audministrar mediciones';
    break;

    //Modulo TABS FRAMESDOCUMENTOS
case 'tabsframesdocumentos';
        $incluir = 'mod/tabsframesdocumentos.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Audministrar documentos';
    break;
        
    //Modulo TABSFRAMESPROVEEDORES
case 'tabsframesproveedores';
        $incluir = 'mod/tabsframesproveedores.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Audministrar proveedores';
    break;


    //Modulo borrar auditor
case 'checkbox3_auditores';
        $incluir = 'mod/checkbox3_auditores.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Borrar auditor';
    break;

    //Modulo ...
case 'checkbox2_auditores';
        $incluir = 'mod/checkbox2_auditores.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Auditor borrado';
    break;

  //Modulo ...Borrar auditores
case 'borrar_auditores';
        $incluir = 'mod/borrar_auditores.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Borrar auditor';
    break;

    //Modulo ...Borrar auditores
case 'borrados_auditores';
        $incluir = 'mod/borrados_auditores.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Borrar auditor';
    break;


    //Modulo editar auditor
case 'auditores_admin';
        $incluir = 'mod/auditores_admin.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Editar auditor';
    break;

    //Modulo editar auditor-2
case 'auditores_admin2';
        $incluir = 'mod/auditores_admin2.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Editar auditor';
    break;

    //Modulo editar auditor-2
case 'auditores_admin2c';
        $incluir = 'mod/auditores_admin2c.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Editar auditor';
    break;

    //Modulo ...
case 'auditores_print';
        $incluir = 'mod/auditores_print.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Imprimir auditor en pantalla';
    break;

    //Modulo ...
case 'auditoresprint';
        $incluir = 'mod/auditoresprint.php';
        $acciones = 'acciones/acciones_auditores.php';
        $seccionweb = 'Imprimir auditor en pantalla';
    break;



    //...........................................................TRABAJADORES
    //Modulo ...
case 'checkbox2_trabajadores';
        $incluir = 'mod/checkbox2_trabajadores.php';
        $acciones = 'acciones/acciones_trabajadores.php';
        $seccionweb = 'Trabajador borrado';
    break;

    //Modulo ...
case 'checkbox3_trabajadores';
        $incluir = 'mod/checkbox3_trabajadores.php';
        $acciones = 'acciones/acciones_trabajadores.php';
        $seccionweb = 'Borrar trabajador';
    break;

    //Modulo ...
case 'trabajador_admin';
        $incluir = 'mod/trabajador_admin.php';
        $acciones = 'acciones/acciones_trabajadores.php';
        $seccionweb = 'Editar / anotar trabajador';
    break;

    //Modulo ...
case 'trabajadores_print';
        $incluir = 'mod/trabajadores_print.php';
        $acciones = 'acciones/acciones_trabajadores.php';
        $seccionweb = 'Imprimir trabajador';
    break;

    //Modulo ... SOLO AÑADIR trabajador (dejo activo el change
    //aunque no lo llamo. Para cambiar uso el 2c
case 'trabajadores_admin2';
        $incluir = 'mod/trabajadores_admin2.php';
        $acciones = 'acciones/acciones_trabajadores.php';
        $seccionweb = 'Editar / anotar trabajador';
    break;

    //Modulo ...SOLO CAMBIAR trabajador
case 'trabajadores_admin2c';
        $incluir = 'mod/trabajadores_admin2c.php';
        $acciones = 'acciones/acciones_trabajadores.php';
        $seccionweb = 'Editar / anotar trabajador';
    break;




    //Modulo ...
case 'poner_partetrabajo';
        $incluir = 'mod/poner_partetrabajo.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Abrir un extintor';
    break;

    //Modulo ...
case 'parte_enviado';
        $incluir = 'mod/parte_enviado.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Parte enviado';
    break;

    //Modulo ...
case 'partes_print';
        $incluir = 'mod/partes_print.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Imprimir un parte en pantalla';
    break;


    //Modulo ...
case 'poner_partetrabajo';
        $incluir = 'mod/poner_partetrabajo.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Abrir un extintor';
    break;

    //Modulo ...
case 'partes_admin';
        $incluir = 'mod/partes_admin.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Editar / anotar un parte de trabajo';
    break;

    //Modulo ...
case 'busca_partes';
        $incluir = 'mod/busca_partes.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Buscar un parte de trabajo';
    break;

    //Modulo ...
case 'buscapartes';
        $incluir = 'mod/buscapartes.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Buscar un parte de trabajo';
    break;

    //Modulo ...
case 'checkbox2_partes';
        $incluir = 'mod/checkbox2_partes.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Parte borrado';
    break;

    //Modulo ...
case 'checkbox3_partes';
        $incluir = 'mod/checkbox3_partes.php';
        $acciones = 'acciones/acciones_partes.php';
        $seccionweb = 'Borrar parte de trabajo';
    break;

    //Modulo ...
case 'carnetsalert';
        $incluir = 'mod/carnetsalert.php';
        $acciones = 'acciones/acciones_trabajadores.php';
        $seccionweb = 'Comprobar carnets';
    break;

	
	
    //...........................................................EXTINTORES


    //Modulo imprimir extintores en pantalla
case 'extintores_print';
        $incluir = 'mod/extintores_print.php';

        $seccionweb = 'Imprimir un extintor en pantalla';
    break;


    //Modulo ...
case 'extintores_admin';
        $incluir = 'mod/extintores_admin.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Editar / anotar un extintor';
    break;

    //Modulo ...
case 'busca_extintores';
        $incluir = 'mod/busca_extintores.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Buscar un extintor';
    break;

    //Modulo ...
case 'buscaextintores';
        $incluir = 'mod/buscaextintores.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Buscar un extintor';
    break;

    //Modulo ...
case 'checkbox2_extintores';
        $incluir = 'mod/checkbox2_extintores.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Parte borrado';
    break;

    //Modulo ...
case 'checkbox3_extintores';
        $incluir = 'mod/checkbox3_extintores.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Borrar extintor';
    break;

    //Modulo ...
case 'listaextintores';
        $incluir = 'mod/listaextintores.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Lista de extintores';
    break;



    //...........................................................SERVICIOS
    //Modulo ...
case 'servicios_admin';
        $incluir = 'mod/servicios_admin.php';
        $acciones = 'acciones/acciones_servicios.php';
        $seccionweb = 'Editar / anotar un servicio';
    break;


    //Modulo ...
case 'listaservicios';
        $incluir = 'mod/listaservicios.php';
        $acciones = 'acciones/acciones_servicios.php';
        $seccionweb = 'Lista completa de servicios';
    break;

    //Modulo ...
case 'checkbox2_servicios';
        $incluir = 'mod/checkbox2_servicios.php';
        $acciones = 'acciones/acciones_servicios.php';
        $seccionweb = 'Servicio borrado';
    break;

    //Modulo ...
case 'checkbox3_servicios';
        $incluir = 'mod/checkbox3_servicios.php';
        $acciones = 'acciones/acciones_servicios.php';
        $seccionweb = 'Borrar un servicio';
    break;




    //...........................................................FORMACIÓN
    //Modulo ...
case 'poner_curso';
        $incluir = 'mod/poner_curso.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Anotar un curso de formaci&oacute;n';
    break;

    //Modulo ...
case 'cursos_admin';
        $incluir = 'mod/cursos_admin.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Editar / anotar un curso de formaci&oacute;n';
    break;


    //Modulo ...
case 'curso_enviado';
        $incluir = 'mod/curso_enviado.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Curso de formaci&oacute;n anotado';
    break;

    //Modulo ...
case 'lista_cursos';
        $incluir = 'mod/lista_cursos.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Lista completa de cursos por trabajador';
    break;

    //Modulo ...
case 'listacursos';
        $incluir = 'mod/listacursos.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Lista completa de cursos por trabajador';
    break;

    //Modulo ...
case 'cursos_por_trabajador';
        $incluir = 'mod/cursos_por_trabajador.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Cursos por trabajador';
    break;


    //Modulo ...
case 'checkbox2_cursos';
        $incluir = 'mod/checkbox2_cursos.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Curso borrado';
    break;

    //Modulo ...
case 'checkbox3_cursos';
        $incluir = 'mod/checkbox3_cursos.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Borrar curso de formaci&oacute;n';
    break;

    //Modulo ...BORRAR cursos
case 'borrar_cursos';
        $incluir = 'mod/borrar_cursos.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Borrar curso de formación';
    break;

    //Modulo ...RECIBIR Y BORRAR cursos
case 'borrados_cursos';
        $incluir = 'mod/borrados_cursos.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Borrar curso de formaci&oacute;n';
    break;


    //Modulo ...
case 'totalhorasformacionportrabajador';
        $incluir = 'mod/totalhorasformacionportrabajador.php';
        $acciones = 'acciones/acciones_formacion.php';
        $seccionweb = 'Horas de formaci&oacute;n por trabajador acumuladas';
    break;




    //...........................................................PROVEEDORES
    //Modulo ...
case 'poner_proveedor';
        $incluir = 'mod/poner_proveedor.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Alta de proveedor';
    break;

    //Modulo ...
case 'proveedor_enviado';
        $incluir = 'mod/proveedor_enviado.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Proveedor anotado';
    break;

    //Modulo lista de proveedores
case 'listaproveedores';
        $incluir = 'mod/listaproveedores.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Lista de proveedores';
    break;


    //Modulo ...
case 'incidencias_proveedor_admin';
        $incluir = 'mod/incidencias_proveedor_admin.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Anotar una incidencia de proveedor';
    break;

    //Modulo ...
case 'incidencias_por_proveedor';
        $incluir = 'mod/incidencias_por_proveedor.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Ver incidencias por proveedor';
    break;


    //Modulo ...
case 'proveedores_admin';
        $incluir = 'mod/proveedores_admin.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Editar / anotar proveedor';
    break;


    //Modulo ...
case 'checkbox2_proveedores';
        $incluir = 'mod/checkbox2_proveedores.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Proveedor borrado';
    break;

    //Modulo ...
case 'checkbox3_proveedores';
        $incluir = 'mod/checkbox3_proveedores.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar un proveedor';
    break;


    //Modulo ...
case 'checkbox2_incidenciasproveedor';
        $incluir = 'mod/checkbox2_incidenciasproveedor.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Incidencia de proveedor borrada';
    break;

    //Modulo ...
case 'checkbox3_incidenciasproveedor';
        $incluir = 'mod/checkbox3_incidenciasproveedor.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar incidencias de proveedor';
    break;

    //Modulo ...BORRAR incidencias de proveedor
case 'borrar_incidenciasdeproveedor';
        $incluir = 'mod/borrar_incidenciasdeproveedor.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar incidencias de proveedor';
    break;

    //Modulo ...RECIBIR y BORRAR incidencias de proveedor
case 'borradas_incidenciasdeproveedor';
        $incluir = 'mod/borradas_incidenciasdeproveedor.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar incidencias de proveedor';
    break;



    //Modulo ...actualizar cÓdigos de incidencia de proveedor

case 'codigosincidencias_admin';
        $incluir = 'mod/codigosincidencias_admin.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Modificar c&oacute;digos de incidencia de proveedor';
    break;

    //Modulo ...actualizar Áreas sensibles a fallos del proveedor

case 'areassensibles_admin';
        $incluir = 'mod/areassensibles_admin.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Modificar Áreas sensibles';
    break;


    //Modulo ...
case 'checkbox2_areassensibles';
        $incluir = 'mod/checkbox2_areassensibles.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = '&Aacute;rea sensible borrada';
    break;

    //Modulo ...
case 'checkbox3_areassensibles';
        $incluir = 'mod/checkbox3_areassensibles.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar &aacute;rea sensible';
    break;

            //Modulo ...BORRAR areassensibles
case 'borrar_areassensibles';
        $incluir = 'mod/borrar_areassensibles.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar &aacute;rea sensible';
    break;


    //Modulo ...RECIBIR Y BORRAR areassensibles
case 'borradas_areassensibles';
        $incluir = 'mod/borradas_areassensibles.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar &aacute;rea sensible';
    break;


    //Modulo ...
case 'checkbox2_codigosincidencias';
        $incluir = 'mod/checkbox2_codigosincidencias.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'C&oacute; de incidencia borrado';
    break;

    //Modulo ...
case 'checkbox3_codigosincidencias';
        $incluir = 'mod/checkbox3_codigosincidencias.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar código de incidencia';
    break;

    //Modulo ...BORRAR códigos de incidencias
case 'borrar_codigosincidencias';
        $incluir = 'mod/borrar_codigosincidencias.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar código de incidencia';
    break;


    //Modulo ...BORRADOS códigos de incidencias
case 'borrados_codigosincidencias';
        $incluir = 'mod/borrados_codigosincidencias.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Borrar código de incidencia';
    break;


    //Modulo ...
case 'controlavisos';
        $incluir = 'mod/controlavisos.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Seguimiento y control de avisos';
    break;


    //Modulo ...gráfica para avisos de servicio
case 'grafica_avisos';
        $incluir = 'mod/grafica_avisos.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'gráfica de avisos (reprocesos)';
    break;
        
    //Modulo ...seleccionar incidencias por proveedor
case 'incidenciasporproveedor_select';
        $incluir = 'mod/incidenciasporproveedor_select.php';
        $acciones = 'acciones/acciones_proveedores.php';
        $seccionweb = 'Incidencias por proveedor';
    break;        
        
        



    //...........................................................EQUIPOS DE MEDIDA

    //Modulo ...
case 'listaequipos';
        $incluir = 'mod/listaequipos.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Lista de equipos de medida';
    break;


    //Modulo ...
case 'equipos_print';
        $incluir = 'mod/equipos_print.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Imprimir equipo de medida';
    break;


    //Modulo ...
case 'busca_equipos';
        $incluir = 'mod/busca_equipos.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Buscar un equipo de medida';
    break;

    //Modulo ...
case 'buscaequipos';
        $incluir = 'mod/buscaequipos.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Buscar un equipo de medida';
    break;


    //Modulo ...
case 'checkbox2_equipos';
        $incluir = 'mod/checkbox2_equipos.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Equipo borrado';
    break;

    //Modulo ...
case 'checkbox3_equipos';
        $incluir = 'mod/checkbox3_equipos.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Borrar equipos de medida';
    break;

    //Modulo ...BORRAR equipos de medida
case 'borrar_equipos';
        $incluir = 'mod/borrar_equipos.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Borrar equipos de medida';
    break;

    //Modulo ...RECIBE y BORRA equipos de medida
case 'borrados_equipos';
        $incluir = 'mod/borrados_equipos.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Borrar equipos de medida';
    break;

    //Modulo ...
case 'equipos_admin';
        $incluir = 'mod/equipos_admin.php';
        $acciones = 'acciones/acciones_equipos.php';
        $seccionweb = 'Administrar equipos de medida';
    break;



    //...........................................................CALIBRACIONES


    //Modulo imprimir calibraciones en pantalla
case 'calibraciones_print';
        $incluir = 'mod/calibraciones_print.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Detalles de la calibraci&oacute;n';
    break;


    //Modulo ...
case 'calibraciones_admin';
        $incluir = 'mod/calibraciones_admin.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Editar / anotar una calibraci&oacute;n';
    break;

    //Modulo ...
case 'busca_calibraciones';
        $incluir = 'mod/busca_calibraciones.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Buscar una calibraci&oacute;n';
    break;

    //Modulo ...
case 'buscacalibraciones';
        $incluir = 'mod/buscacalibraciones.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Buscar una calibraci&oacute;n';
    break;

    //Modulo ...
case 'checkbox2_calibraciones';
        $incluir = 'mod/checkbox2_calibraciones.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Calibraci&oacute;n borrada';
    break;

    //Modulo ...
case 'checkbox3_calibraciones';
        $incluir = 'mod/checkbox3_calibraciones.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Borrar calibraciones';
    break;


    //Modulo ...BORRAR calibraciones
case 'borrar_calibraciones';
        $incluir = 'mod/borrar_calibraciones.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Borrar calibraciones';
    break;


    //Modulo ...RECIBIR Y BORRAR calibraciones
case 'borradas_calibraciones';
        $incluir = 'mod/borradas_calibraciones.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Borrar calibraciones';
    break;



    //Modulo ...
case 'listacalibraciones';
        $incluir = 'mod/listacalibraciones.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Lista de calibraciones';
    break;

    //Modulo ...
case 'listacalibraciones_select';
        $incluir = 'mod/listacalibraciones_select.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Lista de calibraciones por equipo';
    break;


    //Modulo ...
case 'calibraciones_por_equipo';
        $incluir = 'mod/calibraciones_por_equipo.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Calibraciones por equipo de medida';
    break;


    //Modulo ...
case 'calibraciones_print';
        $incluir = 'mod/calibraciones_print.php';
        $acciones = 'acciones/acciones_calibraciones.php';
        $seccionweb = 'Detalles de la calibración';
    break;


    //Modulo ...pdfs
case 'revsistema_pdf_select';
        $incluir = 'mod/revsistema_pdf_select.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Imprimir pdf';
    break;

    
        //Modulo ...pdfs
case 'revsistemapdf';
        $incluir = 'mod/revsistemapdf.php';
        $acciones = 'acciones/acciones_empty.php';
        $seccionweb = 'Imprimir pdf';
    break;


        //Modulo ...paginatormysqliainc
case 'paginatormysqliainc';
        $incluir = 'mod/paginatormysqliainc.php';
        $acciones = 'acciones/acciones_ncs.php';
        $seccionweb = 'ai & ncs';
    break;
}
   
    
?>