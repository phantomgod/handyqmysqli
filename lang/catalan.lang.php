<?php
/**
--------------------------------
Idioma: Catalán

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

    !defined('PAGE_TITLE') && define('PAGE_TITLE', 'MIPROMA-BIOCONTROl');
    !defined('HEADER_TITLE') && define('HEADER_TITLE', 'Sistemes de qualitat');
    !defined('SITENAME') && define('SITENAME', 'Empresa, S.A.');
    !defined('SLOGAN') && define('SLOGAN', 'Zero defectes');
    !defined('HEADING') && define('HEADING', 'Heading');

// General// General
    !defined('DOCUMENTOS') && define('DOCUMENTOS', 'Documents');
    !defined('ADVERTICE') && define('ADVERTICE', 'Cliqueu per veure detalls');
    !defined('FECHA') && define('FECHA', 'Data');
    !defined('ANO') && define('ANO', 'Any');
    !defined('HORA') && define('HORA', 'Hora');
    !defined('RESULTADO') && define('RESULTADO', 'Resultat');
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'Documentació');
    !defined('BACK') && define('BACK', 'Enrere');
    !defined('ESTADO') && define('ESTADO', 'Estat');
    !defined('ACTUALIZAR') && define('ACTUALIZAR', 'Actualitzar');
    !defined('ENVIAR') && define('ENVIAR', 'Enviar');
    !defined('ANADIR') && define('ANADIR', 'Afegir');
    !defined('BORRAR') && define('BORRAR', 'Esborrar');
    !defined('DELETE_ADVERTICE') && define('DELETE_ADVERTICE', 'El botó d´esborrat està al final de la llista');
    !defined('IDIOMA') && define('IDIOMA', 'Selecciona idioma');
    !defined('VISIBLE') && define('VISIBLE', 'Visible?');
    !defined('CODIGO') && define('CODIGO', 'Codi');
    !defined('SELECCIONE_EL_CODIGO') && define('SELECCIONE_EL_CODIGO', 'Selecciona el codi. Per defecte apareix el codi 0-sense incidències-. Si aparegués un altre codi, en seleccionar de la llista desplegable. Encara aparegui la descripció, només pren el valor numèric, a fi d´automatitzar les gràfiques de l´indicador d´incidències d´inspecció.');
    !defined('ANO') && define('ANO', 'Any');
    !defined('ABRIR') && define('ABRIR', 'Obrir');
    !defined('BUSCAR') && define('BUSCAR', 'Cercar!');
    !defined('RESPONSABLE') && define('RESPONSABLE', 'Cap');
    !defined('TERMINACION') && define('TERMINACION', 'Terminació');
    !defined('LIMITE') && define('LIMITE', 'Límit');
    !defined('OBSERVACIONES') && define('OBSERVACIONES', 'Observacions');
    !defined('BORRAR') && define('BORRAR', 'Esborrar');
    !defined('CLIENTE') && define('CLIENTE', 'Client');
    !defined('INDICADOR') && define('INDICADOR', 'Indicador');
    !defined('ACTIVO') && define('ACTIVO', 'Actiu');
    !defined('INACTIVO') && define('INACTIVO', 'Inactiu');
    !defined('VOLVER') && define('VOLVER', 'Volver');
    !defined('MODIFICAR') && define('MODIFICAR', 'Modificar');
    !defined('CIF') && define('CIF', 'CIF');
    !defined('DIRECCION') && define('DIRECCION', 'Adreça');
    !defined('COMENTARIOS') && define('COMENTARIOS', 'Comentaris');
    !defined('ANO_MES_DIA') && define('ANO_MES_DIA', 'Any-Mes-Dia');
    !defined('LISTA') && define('LISTA', 'Llista');
    !defined('PRESENTACION') && define('PRESENTACION', 'Handy-q és un programari per a la gestió de l´oficina de qualitat en línia');
    !defined('AYUDA') && define('AYUDA', 'Ajuda');
    !defined('ULTIMO_COMUNICADO') && define('ULTIMO_COMUNICADO', 'últim comunicat');
    !defined('IMPRIMIR') && define('IMPRIMIR', 'Imprimir el registre');
    !defined('IMPRIMIR_PAPEL') && define('IMPRIMIR_PAPEL', 'Imprimir en paper');
    !defined('ERROR_ANADIR_REGISTRO') && define('ERROR_ANADIR_REGISTRO', 'Error en afegir el registre');
    !defined('CONTENIDO') && define('CONTENIDO', 'Contingut');
    !defined('VEHICULOS') && define('VEHICULOS', 'Vehicles');
    !defined('BACKUP') && define('BACKUP', 'Còpia de seguretat de la Bd');
    !defined('ESCRITORIO') && define('ESCRITORIO', 'Missatges d´entrada ->');
    !defined('CUESTIONARIO_TALLER') && define('CUESTIONARIO_TALLER', 'Examen taller');
    !defined('PRODUCCION') && define('PRODUCCION', 'Producció');
    !defined('CALIDAD') && define('CALIDAD', 'Qualitat');
    !defined('ALMACEN') && define('ALMACEN', 'magatzem');
    !defined('COMPRAS') && define('COMPRAS', 'Compres');
    !defined('FORMACION') && define('FORMACION', 'Formació');
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'Documentació');
    !defined('TALLER') && define('TALLER', 'Taller');
    !defined('PAGINAR') && define('PAGINAR', 'paginar');
    !defined('DESCRIPCION') && define('DESCRIPCION', 'Descripció');
    !defined('ACCION') && define('ACCION', 'Acció');
    !defined('PROCEDIMIENTO') && define('PROCEDIMIENTO', 'Procediment');
    !defined('LUGAR') && define('LUGAR', 'Lloc');
    !defined('DESVIACION') && define('DESVIACION', 'Desviació');
    !defined('OPERATIVO') && define('OPERATIVO', 'Operatiu');
    !defined('BAJA') && define('BAJA', 'De baixa');
    !defined('EDITAR') && define('EDITAR', 'Edita');
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'Explorar arxius');

// Menu// Menu

    !defined('MENU_DOCUMENTOS') && define('MENU_DOCUMENTOS', 'Documents.');
    !defined('MENU_BDDOCS') && define('MENU_BDDOCS', 'BD docs.');
    !defined('MENU_MODIFDOCS') && define('MENU_MODIFDOCS', 'Modif. docs.');
    !defined('MENU_AUDITORIAS') && define('MENU_AUDITORIAS', 'Auditories');
    !defined('MENU_AINFORMES') && define('MENU_AINFORMES', 'AI_informes');
    !defined('MENU_AUDITORES') && define('MENU_AUDITORES', 'Auditors');
    !defined('MENU_INSPECCIONES') && define('MENU_INSPECCIONES', 'Inspeccions');
    !defined('MENU_INSPECTORES') && define('MENU_INSPECTORES', 'Inspectors');
    !defined('MENU_OBJETIVOS') && define('MENU_OBJETIVOS', 'Objectius');
    !defined('MENU_PARTES') && define('MENU_PARTES', 'Fulls de treball');
    !defined('MENU_TRABAJADORES') && define('MENU_TRABAJADORES', 'Treballador');
    !defined('MENU_SERVICIOS') && define('MENU_SERVICIOS', 'Serveis');
    !defined('MENU_PROVEEDORES') && define('MENU_PROVEEDORES', 'Proveïdors');
    !defined('MENU_FORMACION') && define('MENU_FORMACION', 'Cursos');
    !defined('MENU_AVISOS') && define('MENU_AVISOS', 'Avisos');
    !defined('MENU_ENCUESTAS') && define('MENU_ENCUESTAS', 'Enquestes');
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS', 'Afegeix un document de forma ràpida (per això cal saber de memòria el codi de la categoria a la qual pertany, o modifica un document existent, per errors quan es va anotar');
    !defined('MENU_ALT_MAPA_DOCUMENTOS') && define('MENU_ALT_MAPA_DOCUMENTOS', 'Mapa de documents: Mostra nostre arbre documental de categories de documents');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS') && define('MENU_ALT_ANOTAR_DOCUMENTOS', 'Anotar un document: forma correcta d´anotar un document. Això envia una sol • licitud a l´administrador perquè de l´aprovat al document. Des d´aquest moment, apareixerà en el llistat general');
    !defined('MENU_ALT_ANOTAR_DOCMANAGER') && define('MENU_ALT_ANOTAR_DOCMANAGER', 'Inserir un document directament a la base de dades, per a documents d´ús freqüent.');
    !defined('MENU_ALT_EDITAR_BDDOC') && define('MENU_ALT_EDITAR_BDDOC', 'Edita documents que s´han inserit directament a la BD.');
    !defined('MENU_ALT_APROBAR_DOCUMENTOS') && define('MENU_ALT_APROBAR_DOCUMENTOS', 'Aprova un document que ha estat anotat anteriorment.');
    !defined('MENU_ALT_SUBIR_DOCUMENTOS') && define('MENU_ALT_SUBIR_DOCUMENTOS', 'Pujar documents: upload');
    !defined('MENU_ALT_BUSCAR_DOCUMENTOS') && define('MENU_ALT_BUSCAR_DOCUMENTOS', 'Cerca un document');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS') && define('MENU_ALT_BORRAR_DOCUMENTOS', 'Esborrar un document');
    !defined('MENU_ALT_LISTA_DOCUMENTOS') && define('MENU_ALT_LISTA_DOCUMENTOS', 'Llista general de documents: llista ordenada per id de document');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS') && define('MENU_ALT_MODIFICAR_CATEGORIAS', 'Maneja les categories de l´arbre documental: afegeix, modifica, esborra.');
    !defined('MENU_ALT_MODIFDOC') && define('MENU_ALT_MODIFDOC', 'Administrar modificacions de documents: anotar o modificar modificacions realitzades a documents concrets');
    !defined('MENU_ALT_BORRAR_MODIFDOC') && define('MENU_ALT_BORRAR_MODIFDOC', 'Esborrar modificacions realitzades a documents concrets');
    !defined('MENU_ALT_DOC_PRINTSCREEN') && define('MENU_ALT_DOC_PRINTSCREEN', 'Mostra els documents inserits directament a la BD, els de molt ús.');

    !defined('MENU_ALT_ADMINISTRAR_AUDITORIAS') && define('MENU_ALT_ADMINISTRAR_AUDITORIAS', 'Administrar auditories');
    !defined('MENU_ALT_ADMINISTRAR_AINFORMES') && define('MENU_ALT_ADMINISTRAR_AINFORMES', 'Administrar informes d´auditoria');
    !defined('MENU_ALT_IMPRIMIR_AUDITORIAS') && define('MENU_ALT_IMPRIMIR_AUDITORIAS', 'Imprimir auditories');
    !defined('MENU_ALT_IMPRIMIR_AINFORMES') && define('MENU_ALT_IMPRIMIR_AINFORMES', 'Imprimir informe d´auditoria');
    !defined('MENU_ALT_BORRAR_AUDITORIAS') && define('MENU_ALT_BORRAR_AUDITORIAS', 'Esborrar auditories');
    !defined('MENU_ALT_BORRAR_AINFORMES') && define('MENU_ALT_BORRAR_AINFORMES', 'Esborrar informe auditories');
    !defined('MENU_ALT_BUSCAR_AUDITORIAS') && define('MENU_ALT_BUSCAR_AUDITORIAS', 'Cerca auditories');
    !defined('MENU_ALT_BUSCAR_AINFORMES') && define('MENU_ALT_BUSCAR_AINFORMES', 'Cerca informe d´auditoria');
    !defined('MENU_ALT_LISTA_AUDITORIAS') && define('MENU_ALT_LISTA_AUDITORIAS', 'Llista d´auditories');
    !defined('MENU_ALT_LISTA_AINFORMES') && define('MENU_ALT_LISTA_AINFORMES', 'Llista d´informes d´auditoria');

    !defined('MENU_ALT_ADMINISTRAR_AUDITOR') && define('MENU_ALT_ADMINISTRAR_AUDITOR', 'Administrar auditor');
    !defined('MENU_ALT_IMPRIMIR_AUDITOR') && define('MENU_ALT_IMPRIMIR_AUDITOR', 'Imprimir auditor');
    !defined('MENU_ALT_BORRAR_AUDITOR') && define('MENU_ALT_BORRAR_AUDITOR', 'Esborrar auditor');

    !defined('MENU_ALT_ADMINISTRAR_INSPECCION') && define('MENU_ALT_ADMINISTRAR_INSPECCION', 'Administrar inspeccions');
    !defined('MENU_ALT_IMPRIMIR_INSPECCION') && define('MENU_ALT_IMPRIMIR_INSPECCION', 'Imprimir inspecció');
    !defined('MENU_ALT_BORRAR_INSPECCION') && define('MENU_ALT_BORRAR_INSPECCION', 'Esborrar inspecció');
    !defined('MENU_ALT_BUSCAR_INSPECCION') && define('MENU_ALT_BUSCAR_INSPECCION', 'Cerca inspecció');
    !defined('MENU_ALT_JOIN_INSPECCIONES') && define('MENU_ALT_JOIN_INSPECCIONES', 'Nombre d´inspeccions per servei');

    !defined('MENU_ALT_ADMINISTRAR_INSPECTOR') && define('MENU_ALT_ADMINISTRAR_INSPECTOR', 'Administrar inspectors');
    !defined('MENU_ALT_IMPRIMIR_INSPECTOR') && define('MENU_ALT_IMPRIMIR_INSPECTOR', 'Imprimir inspectors');
    !defined('MENU_ALT_BORRAR_INSPECTOR') && define('MENU_ALT_BORRAR_INSPECTOR', 'Esborrar inspectors');

    !defined('MENU_ALT_ADMINISTRAR_OBJETIVOS') && define('MENU_ALT_ADMINISTRAR_OBJETIVOS', 'Administrar objectius: Afegir & modificar');
    !defined('MENU_ALT_IMPRIMIR_OBJETIVOS') && define('MENU_ALT_IMPRIMIR_OBJETIVOS', 'Mostra en pantalla els detalls de l´objectiu');
    !defined('MENU_ALT_BORRAR_OBJETIVOS') && define('MENU_ALT_BORRAR_OBJETIVOS', 'Esborrar objectius');
    !defined('MENU_ALT_BUSCAR_OBJETIVOS') && define('MENU_ALT_BUSCAR_OBJETIVOS', 'Cerca objectius');
    !defined('MENU_ALT_LISTA_OBJETIVOS') && define('MENU_ALT_LISTA_OBJETIVOS', 'Llista d´objectius');
    !defined('MENU_ALT_ADDTASK_OBJETIVOS') && define('MENU_ALT_ADDTASK_OBJETIVOS', 'Afegeix una tasca a un objectiu');
    !defined('MENU_ALT_JOIN_OBJETIVOS') && define('MENU_ALT_JOIN_OBJETIVOS', 'Mostra les tasques que corresponen a cada objectiu');

    !defined('MENU_ALT_ADMINISTRAR_PARTES') && define('MENU_ALT_ADMINISTRAR_PARTES', 'Administrar parts de treball: Afegir & modificar');
    !defined('MENU_ALT_IMPRIMIR_PARTES') && define('MENU_ALT_IMPRIMIR_PARTES', 'Mostra en pantalla els detalls del part');
    !defined('MENU_ALT_BORRAR_PARTES') && define('MENU_ALT_BORRAR_PARTES', 'Esborrar parts');
    !defined('MENU_ALT_BUSCAR_PARTES') && define('MENU_ALT_BUSCAR_PARTES', 'Cerca parts');

    !defined('MENU_ALT_ADMINISTRAR_EXTINTORES') && define('MENU_ALT_ADMINISTRAR_EXTINTORES', 'Administrar extintors: Afegir & modificar');
    !defined('MENU_ALT_IMPRIMIR_EXTINTORES') && define('MENU_ALT_IMPRIMIR_EXTINTORES', 'Mostra en pantalla els detalls de l´extintor');
    !defined('MENU_ALT_BORRAR_EXTINTORES') && define('MENU_ALT_BORRAR_EXTINTORES', 'Esborrar extintors');
    !defined('MENU_ALT_BUSCAR_EXTINTORES') && define('MENU_ALT_BUSCAR_EXTINTORES', 'Cerca extintor');
    !defined('MENU_ALT_LISTA_EXTINTORES') && define('MENU_ALT_LISTA_EXTINTORES', 'Llista d´extintors');

    !defined('MENU_ALT_ADMINISTRAR_TRABAJADORES') && define('MENU_ALT_ADMINISTRAR_TRABAJADORES', 'Administrar treballadors: Afegir & modificar');
    !defined('MENU_ALT_BORRAR_TRABAJADORES') && define('MENU_ALT_BORRAR_TRABAJADORES', 'Esborrar treballadors');

    !defined('MENU_ALT_ADMINISTRAR_SERVICIOS') && define('MENU_ALT_ADMINISTRAR_SERVICIOS', 'Administrar serveis: Afegir & modificar');
    !defined('MENU_ALT_BORRAR_SERVICIOS') && define('MENU_ALT_BORRAR_SERVICIOS', 'Esborrar serveis');
    !defined('MENU_ALT_CONTROLAVISOS') && define('MENU_ALT_CONTROLAVISOS', 'Controlar els avisos de servei');
    !defined('MENU_ALT_GRAFICAVISOS') && define('MENU_ALT_GRAFICAVISOS', 'Gràfica d´avisos per mesos');


    !defined('MENU_ALT_ADMINISTRAR_FORMACION') && define('MENU_ALT_ADMINISTRAR_FORMACION', 'Administrar formació: Afegir & modificar');
    !defined('MENU_ALT_BORRAR_FORMACION') && define('MENU_ALT_BORRAR_FORMACION', 'Esborrar formació');
    !defined('MENU_ALT_LISTA_FORMACION') && define('MENU_ALT_LISTA_FORMACION', 'Llista de cursos');
    !defined('MENU_ALT_JOIN_FORMACION') && define('MENU_ALT_JOIN_FORMACION', 'Cursos per treballador');

    !defined('MENU_ALT_ADMINISTRAR_EQUIPOS') && define('MENU_ALT_ADMINISTRAR_EQUIPOS', 'Administrar equips de mesura: Afegir & modificar');
    !defined('MENU_ALT_IMPRIMIR_EQUIPOS') && define('MENU_ALT_IMPRIMIR_EQUIPOS', 'Mostra en pantalla els detalls de l´equip de mesura');
    !defined('MENU_ALT_BORRAR_EQUIPOS') && define('MENU_ALT_BORRAR_EQUIPOS', 'Esborrar equip de mesura');
    !defined('MENU_ALT_BUSCAR_EQUIPOS') && define('MENU_ALT_BUSCAR_EQUIPOS', 'Cerca equip de mesura');
    !defined('MENU_ALT_LISTA_EQUIPOS') && define('MENU_ALT_LISTA_EQUIPOS', 'Llista d´equips de mesura');

    !defined('MENU_ALT_ADMINISTRAR_CALIBRACIONES') && define('MENU_ALT_ADMINISTRAR_CALIBRACIONES', 'Administrar calibratges: Afegir & modificar');
    !defined('MENU_ALT_IMPRIMIR_CALIBRACIONES') && define('MENU_ALT_IMPRIMIR_CALIBRACIONES', 'Mostra en pantalla els detalls del calibratge');
    !defined('MENU_ALT_BORRAR_CALIBRACIONES') && define('MENU_ALT_BORRAR_CALIBRACIONES', 'Esborrar calibratges');
    !defined('MENU_ALT_BUSCAR_CALIBRACIONES') && define('MENU_ALT_BUSCAR_CALIBRACIONES', 'Cerca calibratge');
    !defined('MENU_ALT_LISTA_CALIBRACIONES') && define('MENU_ALT_LISTA_CALIBRACIONES', 'Llista de calibratges');
    !defined('MENU_ALT_JOIN_CALIBRACIONES') && define('MENU_ALT_JOIN_CALIBRACIONES', 'Mostra les calibracions per equip');

// Qüestionaris al SGC// Qüestionaris al SGC

    !defined('CUESTIONARIO_TRATAMIENTOS') && define('CUESTIONARIO_TRATAMIENTOS', 'Examen al servei ');
    !defined('CUESTIONARIO_CALIDAD') && define('CUESTIONARIO_CALIDAD', 'Examen al dep. de qualitat ');
    !defined('CUESTIONARIO_ALMACEN') && define('CUESTIONARIO_ALMACEN', 'Qüestionari a magatzem');
    !defined('CUESTIONARIO_COMPRAS') && define('CUESTIONARIO_COMPRAS', 'Qüestionari a compres');
    !defined('CUESTIONARIO_FORMACION') && define('CUESTIONARIO_FORMACION', 'Qüestionari a formació');
    !defined('CUESTIONARIO_DOCUMENTACION') && define('CUESTIONARIO_DOCUMENTACION', 'Qüestionari a documentació');
    !defined('CUESTIONARIO_LEGIONELLA') && define('CUESTIONARIO_LEGIONELLA', 'Examen de legionel');


// Indicadors// Indicadors

    !defined('INDICADORES_INDICADORES') && define('INDICADORES_INDICADORES', 'Indicadors');
    !defined('INDICADORES_NCSPORAREA') && define('INDICADORES_NCSPORAREA', 'Nombre de no conformitats per àrea');
    !defined('INDICADORES_DESVIACIONCIERRESNCS') && define('INDICADORES_DESVIACIONCIERRESNCS', 'Desviacions de tancament de les no conformitats');
    !defined('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR') && define('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR', 'Total d´hores de formació per treballador');
    !defined('INDICADORES_GRAFICACONTROLAVISOS') && define('INDICADORES_GRAFICACONTROLAVISOS', 'Percentatge d´avisos per mes');
    !defined('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES') && define('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES', 'Incidències en les inspeccions de servei');


// Avisos// Avisos

    !defined('AVISOS_AVISOS') && define('AVISOS_AVISOS', 'Avisos');
    !defined('AVISOS_AVISO') && define('AVISOS_AVISO', 'Avís!');
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'Llista d´avisos');
    !defined('AVISOS_DETALLES') && define('AVISOS_DETALLES', 'Detalls d´avís');
    !defined('AVISOS_COMUNICADOPOR') && define('AVISOS_COMUNICADOPOR', 'Comunicat per');
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'Llista d´avisos d´escriptori');
    !defined('AVISOS_PONERAVISO') && define('AVISOS_PONERAVISO', 'Posar un avís d´escriptori');
    !defined('AVISOS_THEAD_ADVERTICE') && define('AVISOS_THEAD_ADVERTICE', 'Cliqueu sobre un enllaç per veure detalls de l´avís');
    !defined('AVISOS_AVISO_BORRADO') && define('AVISOS_AVISO_BORRADO', 'Avís esborrat!');
    !defined('AVISOS_ADMIN') && define('AVISOS_ADMIN', 'Administrar avisos d´escriptori');
    !defined('AVISOS_DELETE') && define('AVISOS_DELETE', 'Esborrar avisos');



// Documents// Documents

    !defined('DOCUMENTOS_MAPA') && define('DOCUMENTOS_MAPA', 'Mapa de documents');
    !defined('DOCUMENTOS_DOCUMENTO') && define('DOCUMENTOS_DOCUMENTO', 'Document');
    !defined('APROBAR_DOCUMENTOS') && define('APROBAR_DOCUMENTOS', 'Aprovar documents');
    !defined('BORRAR_DOCUMENTO') && define('BORRAR_DOCUMENTO', 'Esborrar document');
    !defined('SUBIR_DOCUMENTOS') && define('SUBIR_DOCUMENTOS', 'Pujar documents');
    !defined('BUSCAR_DOCUMENTOS') && define('BUSCAR_DOCUMENTOS', 'Cercar documents');
    !defined('DOCUMENTO_BORRADO') && define('DOCUMENTO_BORRADO', 'Document esborrat!');
    !defined('NOMBRE_DOCUMENTO') && define('NOMBRE_DOCUMENTO', 'Títol');
    !defined('DOCUMENTO_AUTOR') && define('DOCUMENTO_AUTOR', 'Autor');
    !defined('DOCUMENTOS_ANADIR_DOCUMENTO') && define('DOCUMENTOS_ANADIR_DOCUMENTO', 'Afegir document');
    !defined('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS') && define('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS', 'Administrar documents');
    !defined('DOCUMENTOS_CAMBIAR_DOCUMENTO') && define('DOCUMENTOS_CAMBIAR_DOCUMENTO', 'Modificar document');
    !defined('DOCUMENTOS_IDSOLICITUD') && define('DOCUMENTOS_IDSOLICITUD', 'id sol • licitud');
    !defined('DOCUMENTOS_SECCIONID') && define('DOCUMENTOS_SECCIONID', 'id secció');
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Cliqueu sobre un enllaç per veure detalls');
    !defined('DOCUMENTOS_THEAD_ADVERTICE_JOIN') && define('DOCUMENTOS_THEAD_ADVERTICE_JOIN', 'Cliqueu sobre un document per veure modificacions');
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'Document actualitzat!');
    !defined('DOCUMENTOS_PRINT_DETAILS') && define('DOCUMENTOS_PRINT_DETAILS', 'Detalls del document');
    !defined('DOCUMENTOS_MODIFDOC_ADMIN') && define('DOCUMENTOS_MODIFDOC_ADMIN', 'Modificacions a documents');
    !defined('DOCUMENTOS_ANOTAR_MODIFICACION') && define('DOCUMENTOS_ANOTAR_MODIFICACION', 'Anotar modificació');
    !defined('DOCUMENTOS_EDITAR_MODIFICACION') && define('DOCUMENTOS_EDITAR_MODIFICACION', 'Edita modificació');
    !defined('DOCUMENTOS_NUMEROREVISION') && define('DOCUMENTOS_NUMEROREVISION', 'Revisió n º');
    !defined('DOCUMENTOS_MODIFICACION') && define('DOCUMENTOS_MODIFICACION', 'Modificació');
    !defined('DOCUMENTOS_MODIFICACIONES') && define('DOCUMENTOS_MODIFICACIONES', 'Modificacions al document:');
    !defined('DOCUMENTOS_CAPAPART') && define('DOCUMENTOS_CAPAPART', 'Capítol-apartat');
    !defined('DOCUMENTOS_LISTA') && define('DOCUMENTOS_LISTA', 'Llista de documents');
    !defined('DOCUMENTOS_FECHAMODIFICACION') && define('DOCUMENTOS_FECHAMODIFICACION', 'Data de modificació');
    !defined('DOCUMENTOS_MODIFICACIONES_DETALLES') && define('DOCUMENTOS_MODIFICACIONES_DETALLES', 'Detalls de la modificació');
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Cliqueu sobre un document per veure modificacions');
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'Document actualitzat!');
    !defined('DOCUMENTOS_JOIN') && define('DOCUMENTOS_JOIN', 'Modificacions per document');
    !defined('DOCUMENTOS_LISTA_MODIFICACIONES') && define('DOCUMENTOS_LISTA_MODIFICACIONES', 'Llista de modificacions');
    !defined('DOCUMENTOS_BORRAR_MODIFICACION') && define('DOCUMENTOS_BORRAR_MODIFICACION', 'Esborrar modificació');
    !defined('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR') && define('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR', 'Vol esborrar aquesta modificació?');
    !defined('DOCUMENTOS_QUIERE_BORRAR') && define('DOCUMENTOS_QUIERE_BORRAR', 'Vol esborrar aquest document?');
    !defined('DOCUMENTOS_MODIFDOC_DELETED') && define('DOCUMENTOS_MODIFDOC_DELETED', 'Modificació esborrada!');
    !defined('MODIFICACION_ANOTADA') && define('MODIFICACION_ANOTADA', 'Modificació anotada!');
    !defined('DOCUMENTOS_ULTIMAS_MODIFICACIONES') && define('DOCUMENTOS_ULTIMAS_MODIFICACIONES', 'Últimes modificacions');
    !defined('DOCUMENTOS_ULTIMA_REVISION') && define('DOCUMENTOS_ULTIMA_REVISION', 'Cliqueu sobre el botó per consultar l´última revisió anotada per document.');


// Documents de la BD: docmanager// Documents de la BD: docmanager

    !defined('DOCMANAGER_PRINT') && define('DOCMANAGER_PRINT', 'Veure documents de la Bd');
    !defined('DOCMANAGER_INSERT') && define('DOCMANAGER_INSERT', 'Insereix document a la Bd');


// Auditors// Auditors

    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'Auditor');
    !defined('AUDITORES_EDITAR_AUDITOR') && define('AUDITORES_EDITAR_AUDITOR', 'Edita auditor');
    !defined('AUDITORES_AUDITOR_ACTUALIZADO') && define('AUDITORES_AUDITOR_ACTUALIZADO', 'auditor actualitzat!');
    !defined('AUDITORES_ADMINISTRAR_AUDITORES') && define('AUDITORES_ADMINISTRAR_AUDITORES', 'Administrar Auditors');
    !defined('AUDITORES_DETALLES') && define('AUDITORES_DETALLES', 'Detalls de l´auditor');
    !defined('AUDITORES_QUIERE_BORRAR') && define('AUDITORES_QUIERE_BORRAR', 'Esborrar auditor?');
    !defined('AUDITORES_AUDITOR_BORRADO') && define('AUDITORES_AUDITOR_BORRADO', 'auditor esborrat!');
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Afegir auditor');
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'Canviar auditor');
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', 'Llista d´auditors');
    !defined('AUDITOR_ADVERTICE') && define('AUDITOR_ADVERTICE', 'Cliqueu sobre un enllaç per veure detalls de l´auditor');
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Llista d´auditors');
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'Esborrar auditor');
    !defined('AUDITORIAS_CUESTIONARIOALSERVICIO') && define('AUDITORIAS_CUESTIONARIOALSERVICIO', '* Comprovar desviacions en l´atenció mensual de clients <br /> * Comprovar que no falta documentació de treball <br /> * Comprovar estoc mínim al vehicle <br /> * Comprovar neteja i manteniment de vehicles <br /> * Comprovar ordres de treball completes <br /> * Comprovar treball realitzat ');
    !defined('AUDITORIAS_CUESTIONARIOACALIDAD') && define('AUDITORIAS_CUESTIONARIOACALIDAD', '* Revisar que s´ha actualitzat la normativa (si escau) <br/> * Comprovar que els documents apropiats del sistema es troben distribuïts i aprovats. <br /> * Comprovar archovo de documents <br/> * Comprovar que el llistat de documents en vigor està actualitzat <br/> * Comprovar si hi ha endarreriments en les tasques planificades (auditories, objectius, formació, indicadors, inspeccions) <br/> * Comprovar que s´actualitzen les dades a la BD < br /> Comprovar que s´han anotat les incidències dels proveïdors, en la BD. <br/> * Comprovar que s´han tancat les NC-AACCPP en què sigui procedent, així com les millores <br/> * Comprovar que s´han atès les reclamacions de clients <br/> Comprovar el seguiment dels indicadors ');
    !defined('AUDITORIAS_CUESTIONARIOALMACEN') && define('AUDITORIAS_CUESTIONARIOALMACEN', '* Comprovar la brutícia i el desordre en prestatgeries i útils de treball. <br/> * Comprovar la brutícia a terra, restes de materials o altres. <br/> * Comprovar la data de revisió, senyalització i zona lliure d´obstacles en extintors. <br/> * Comprovar que els accessos es troben clars de peces, materials, caixes o altres obstacles que impedeixin el trànsit de persones o mitjans de transport <br/> * Comprovar l´estat i adequació dels contenidors. <br/> * Comprovar l´estat de seguretat en els aparells elèctrics, instal • lacions en general i sistemes d´il • luminació. <br/> * Comprovar que els extintors estan nets, targetes de revisió en vigor i situats en les àrees senyalitzades per a aquests. <br/> * Comprovar que els productes estan lliures de corrosió. <br/> * Comprovar que no hi hagi apilaments vençuts. <br/> * Comprovar que no hi ha materials sense identificar. <br/> * Comprovar la inexistència de dipòsits contenidors d´escombraries en zones de magatzem <br/> * Comprovar vessaments. ');
    !defined('AUDITORIAS_CUESTIONARIOACOMPRAS') && define('AUDITORIAS_CUESTIONARIOACOMPRAS', '* Comprovar que no falten els certificats o homologacions dels proveïdors i els productes. <br/> * Comprovar que s´han anotat totes les incidències hagudes amb els proveïdors. <br/> * Comprovar si el personal coneix la manera correcta de rebre els materials. <br/> * Comprovar que s´ha valorat a cada proveïdor i que s´ha anotat el resultat. <br/> * Comprovar que els albarans o fulls de comanda estan arxivats correctament i estan signats per la persona que els recepciona. <br/> * Comprovar el vistiplau de les factures amb els albarans. ');
    !defined('AUDITORIAS_CUESTIONARIOAFORMACION') && define('AUDITORIAS_CUESTIONARIOAFORMACION', '* Comprovar estat d´actualització dels registres de formació en la BD. <br/> * Comprovar carnets. <br/> * Comprovar les revalidacions. <br/> * Comprovar els cursos impartits.');
    !defined('AUDITORIAS_CUESTIONARIOADOCUMENTACION') && define('AUDITORIAS_CUESTIONARIOADOCUMENTACION', '* Comprovar estats de revisió. <br/> * Comprovar estat d´emmagatzematge i arxiu. <br/> * Comprovar si s´ha comunicat la distribució pertinent.');
    !defined('AUDITORIAS_CUESTIONARIOATALLER') && define('AUDITORIAS_CUESTIONARIOATALLER', '- Manòmetres comprovats. <br/> - Ordre i neteja <br/> - Seguretat i Prevenció <br/> - Documentació <br/> - Separació de zones - Identificacions de productes <br/> - Control d´operacions <br/> ');



// Informes d´auditories// Informes d´auditories

    !defined('AINFORMES_JOIN') && define('AINFORMES_JOIN', 'Auditories & No conformitats');
    !defined('AINFORMES_BUSCAR') && define('AINFORMES_BUSCAR', 'Cerca informe d´auditoria');
    !defined('AINFORMES_HOJA') && define('AINFORMES_HOJA', 'Full');
    !defined('AINFORMES_EDITAR') && define('AINFORMES_EDITAR', 'Edita informe d´auditoria');
    !defined('AINFORMES_ADMINISTRAR') && define('AINFORMES_ADMINISTRAR', 'Administrar informes d´auditoria');
    !defined('AINFORMES_NUMERO') && define('AINFORMES_NUMERO', 'AI n º');
    !defined('AINFORMES_ANADIR') && define('AINFORMES_ANADIR', 'Afegir informe auditoria');
    !defined('AINFORMES_CAMBIAR') && define('AINFORMES_CAMBIAR', 'Canviar informe auditoria');
    !defined('AINFORMES_INFORME') && define('AINFORMES_INFORME', 'Informe d´auditoria');
    !defined('AINFORMES_AREA_AUDITADA') && define('AINFORMES_AREA_AUDITADA', 'àrea auditada');
    !defined('AINFORMES_OBJETO') && define('AINFORMES_OBJETO', 'Objecte');
    !defined('AINFORMES_ADVERTICE') && define('AINFORMES_ADVERTICE', 'Cliqueu sobre un enllaç per veure detalls');
    !defined('AINFORMES_LISTA_PRINTSCREEN') && define('AINFORMES_LISTA_PRINTSCREEN', 'Llista d´informes d´auditoria');
    !defined('AINFORMES_PRINT_DETAILS') && define('AINFORMES_PRINT_DETAILS', 'Detalls de l´informe d´auditoria');
    !defined('AINFORMES_PRINT_ADVERTICE') && define('AINFORMES_PRINT_ADVERTICE', 'Detalls');
    !defined('AINFORMES_BACK_TO_PRINTLIST') && define('AINFORMES_BACK_TO_PRINTLIST', 'Tornar a la llista');
    !defined('AINFORMES_AI') && define('AINFORMES_AI', 'Auditoria interna');
    !defined('AINFORMES_BORRAR') && define('AINFORMES_BORRAR', 'Esborrar informe auditoria');
    !defined('AINFORMES_QUIERE_BORRAR') && define('AINFORMES_QUIERE_BORRAR', 'Esborrar informe auditoria?');
    !defined('AINFORMES_INFORME_BORRADO') && define('AINFORMES_INFORME_BORRADO', 'Informe esborrat!');
    !defined('AINFORMES_INFORME_ENVIAD0') && define('AINFORMES_INFORME_ENVIAD0', 'Informe enviat');
    !defined('AINFORMES_PONER_OTRO') && define('AINFORMES_PONER_OTRO', 'Afegir un altre informe');
    !defined('AINFORMES_ACTUALIZADO') && define('AINFORMES_ACTUALIZADO', 'Informe actualitzat!');


// Auditories// Auditories

    !defined('AUDITORIAS_JOIN') && define('AUDITORIAS_JOIN', 'Auditories & No conformitats');
    !defined('AUDITORIAS_BUSCAR') && define('AUDITORIAS_BUSCAR', 'Cerca auditories');
    !defined('AUDITORIAS_HOJA') && define('AUDITORIAS_HOJA', 'Full');
    !defined('AUDITORIAS_EDITAR_AUDITORIA') && define('AUDITORIAS_EDITAR_AUDITORIA', 'Edita auditoria');
    !defined('AUDITORIAS_ADMINISTRAR_AUDITORIAS') && define('AUDITORIAS_ADMINISTRAR_AUDITORIAS', 'Administrar auditories');
    !defined('AUDITORIAS_NUMERO_AUDITORIA') && define('AUDITORIAS_NUMERO_AUDITORIA', 'AI n º');
    !defined('AUDITORIAS_ANADIR_AUDITORIA') && define('AUDITORIAS_ANADIR_AUDITORIA', 'Afegir auditoria');
    !defined('AUDITORIAS_CAMBIAR_AUDITORIA') && define('AUDITORIAS_CAMBIAR_AUDITORIA', 'Canviar auditoria');
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Afegir auditor');
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'Canviar auditor');
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', 'Llista d´auditors');
    !defined('AUDITORIAS_AUDITORIA') && define('AUDITORIAS_AUDITORIA', 'Auditoria');
    !defined('AUDITORIAS_AREA_AUDITADA') && define('AUDITORIAS_AREA_AUDITADA', 'àrea auditada');
    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'Auditor');
    !defined('AUDITORIAS_OBJETO') && define('AUDITORIAS_OBJETO', 'Objecte');
    !defined('AUDITORIAS_ADVERTICE') && define('AUDITORIAS_ADVERTICE', 'Cliqueu sobre un enllaç per veure detalls');
    !defined('AUDITORIAS_LISTA_PRINTSCREEN') && define('AUDITORIAS_LISTA_PRINTSCREEN', 'Llista d´auditories');
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Llista d´auditors');
    !defined('AUDITORIAS_PRINT_DETAILS') && define('AUDITORIAS_PRINT_DETAILS', 'Detalls de l´auditoria');
    !defined('AUDITORIAS_PRINT_ADVERTICE') && define('AUDITORIAS_PRINT_ADVERTICE', 'Detalls');
    !defined('AUDITORIAS_BACK_TO_PRINTLIST') && define('AUDITORIAS_BACK_TO_PRINTLIST', 'Tornar a la llista');
    !defined('AUDITORIAS_AI') && define('AUDITORIAS_AI', 'Auditoria interna');
    !defined('AUDITORIAS_BORRAR_AUDITORIA') && define('AUDITORIAS_BORRAR_AUDITORIA', 'Esborrar auditoria');
    !defined('AUDITORIAS_QUIERE_BORRAR') && define('AUDITORIAS_QUIERE_BORRAR', 'Esborrar auditoria?');
    !defined('AUDITORIAS_AUDITORIA_BORRADA') && define('AUDITORIAS_AUDITORIA_BORRADA', 'Auditoria esborrada!');
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'Esborrar auditor');
    !defined('AUDITORIAS_AUDITORIA_ENVIADA') && define('AUDITORIAS_AUDITORIA_ENVIADA', 'Auditoria enviada');
    !defined('AUDITORIAS_PONER_OTRA') && define('AUDITORIAS_PONER_OTRA', 'Afegeix una altra auditoria');
    !defined('AUDITORIA_ACTUALIZADA') && define('AUDITORIA_ACTUALIZADA', 'Auditoria actualitzada!');
    !defined('AUDITORIA_SERVICIO') && define('AUDITORIA_SERVICIO', 'Auditoria al servei');
    !defined('AUDITORIA_CALIDAD') && define('AUDITORIA_CALIDAD', 'Auditoria al dep. qualitat');
    !defined('AUDITORIA_ALMACEN') && define('AUDITORIA_ALMACEN', 'Auditoria a magatzem &racute; n');
    !defined('AUDITORIA_COMPRAS') && define('AUDITORIA_COMPRAS', 'Auditoria a compres');
    !defined('AUDITORIA_FORMACION') && define('AUDITORIA_FORMACION', 'Auditoria a formació');
    !defined('AUDITORIA_DOCUMENTACION') && define('AUDITORIA_DOCUMENTACION', 'Auditoria a documentació');
    !defined('AUDITORIA_TALLER') && define('AUDITORIA_TALLER', 'Auditoria a Taller');
    !defined('AUDITORIAS_CODIGO_HELP') && define('AUDITORIAS_CODIGO_HELP', 'Recordi la codificació d´auditories. Posi la immediata superior a la que apareix al costat del camp d´inserció.');


// NC `s// NC `s

    !defined('NCS_ADVERTICE') && define('NCS_ADVERTICE', 'Cliqueu sobre un enllaç per editar la no conformitat');
    !defined('NCS_DETAILS') && define('NCS_DETAILS', 'Detalls de la NC');
    !defined('NCS_JOIN_ADVERTICE') && define('NCS_JOIN_ADVERTICE', 'Cliqueu sobre una NC o una auditoria per veure detalls');
    !defined('NCS_AUDITS_JOIN_LIST') && define('NCS_AUDITS_JOIN_LIST', 'NC´s y auditories, llista combinada. Cliqueu per veure detalls');
    !defined('NCS_ABRIR_NC') && define('NCS_ABRIR_NC', 'Obrir una no conformitat');
    !defined('NCS_ANADIR_NC') && define('NCS_ANADIR_NC', 'Afegir NC');
    !defined('NCS_MODIFICAR_NC') && define('NCS_MODIFICAR_NC', 'Modificar NC');
    !defined('NCS_EDITAR_NC') && define('NCS_EDITAR_NC', 'Edita NC s');
    !defined('NCS_ADMINISTRAR_NCS') && define('NCS_ADMINISTRAR_NCS', 'Administrar NC s');
    !defined('NCS_IMPRIMIR_NCS') && define('NCS_IMPRIMIR_NCS', 'Auditories & NC s');
    !defined('NCS_IMPRIMIR') && define('NCS_IMPRIMIR', 'Imprimeix NC s en pantalla');
    !defined('NCS_BUSCAR_NCS') && define('NCS_BUSCAR_NCS', 'Cerca NC s');
    !defined('NCS_BORRAR_NC') && define('NCS_BORRAR_NC', 'Esborrar NC s');
    !defined('NCS_QUIERE_BORRAR') && define('NCS_QUIERE_BORRAR', 'Esborrar NC´s? ');
    !defined('NCS_NC_BORRADA') && define('NCS_NC_BORRADA', 'NC borrarda!');
    !defined('NCS_NUMERO') && define('NCS_NUMERO', 'Full número');
    !defined('NCS_FECHA_APERTURA') && define('NCS_FECHA_APERTURA', 'Obert Data');
    !defined('NCS_CODIGO_NC') && define('NCS_CODIGO_NC', 'Codi');
    !defined('NCS_REFERENCIA_DOCUMENTAL') && define('NCS_REFERENCIA_DOCUMENTAL', 'Ref doc');
    !defined('NCS_DESCRIPCION') && define('NCS_DESCRIPCION', 'Descripció');
    !defined('NCS_REF_DOC') && define('NCS_REF_DOC', 'Documents. de referència');
    !defined('NCS_ABIERTOPOR') && define('NCS_ABIERTOPOR', 'Obert per');
    !defined('NCS_AFECTAA') && define('NCS_AFECTAA', 'àrea afectada');
    !defined('NCS_CAUSAS') && define('NCS_CAUSAS', 'Causes');
    !defined('NCS_ACCIONES') && define('NCS_ACCIONES', 'Accions');
    !defined('NCS_PLAZO') && define('NCS_PLAZO', 'Termini');
    !defined('NCS_CIERRE_PARCIAL') && define('NCS_CIERRE_PARCIAL', 'Tancament parcial');
    !defined('NCS_EFICACIA') && define('NCS_EFICACIA', 'Eficàcia');
    !defined('NCS_FECHACIERRE') && define('NCS_FECHACIERRE', 'Data de tancament');
    !defined('NCS_DESVIACION') && define('NCS_DESVIACION', 'Desviació');
    !defined('NCS_VISIBLE') && define('NCS_VISIBLE', 'Visible');
    !defined('NCS_LISTA') && define('NCS_LISTA', 'Llista de NC s');
    !defined('NCS_GRAFICA') && define('NCS_GRAFICA', 'Gràfica de NC s per àrea');
    !defined('NCS_REALIZAR_GRAFICA') && define('NCS_REALIZAR_GRAFICA', 'Fer Gràfica');
    !defined('NCS_PORAREA') && define('NCS_PORAREA', 'NC s per àrea');
    !defined('NCS_SELECCIONE_PARA_CAMBIAR') && define('NCS_SELECCIONE_PARA_CAMBIAR', 'Selecciona per canviar');
    !defined('NCS_LASTID_HELP') && define('NCS_LASTID_HELP', 'Poseu el codi immediat superior al que apareix al costat del camp d´inserció.');
    !defined('NCS_CODIGO_HELP') && define('NCS_CODIGO_HELP', 'Aquest camp no és necessari emplenar si no vol. Ho pot reservar per afegir un codi extraordinari per a futures consultes. Per exemple, pot posar un codi de data, de xifra o de paraula clau.');
    !defined('NCS_AI_HELP') && define('NCS_AI_HELP', 'Si la no conformitat no s´ha derivat d´una auditoria, deixi el camp buit.');


// Objectius// Objectius

    !defined('OBJETIVOS_JOIN') && define('OBJETIVOS_JOIN', 'Llista d´objectius & seguiments');
    !defined('OBJETIVOS_JOIN_THEAD') && define('OBJETIVOS_JOIN_THEAD', 'Cliqueu sobre un objectiu per mostrar el seguiment');
    !defined('OBJETIVOS_BORRAR_OBJETIVO') && define('OBJETIVOS_BORRAR_OBJETIVO', 'Esborrar objectiu');
    !defined('OBJETIVOS_QUIERE_BORRAR') && define('OBJETIVOS_QUIERE_BORRAR', 'Esborrar objectiu?');
    !defined('OBJETIVOS_OBJETIVO_BORRADO') && define('OBJETIVOS_OBJETIVO_BORRADO', 'Objectiu esborrat!');
    !defined('OBJETIVOS_NOMBRE_OBJETIVO') && define('OBJETIVOS_NOMBRE_OBJETIVO', 'Títol');
    !defined('OBJETIVOS_ACCION') && define('OBJETIVOS_ACCION', 'Acció');
    !defined('OBJETIVOS_TAREA') && define('OBJETIVOS_TAREA', 'Tasca');
    !defined('OBJETIVOS_ORIGEN') && define('OBJETIVOS_ORIGEN', 'Origen');
    !defined('OBJETIVOS_DETECCION') && define('OBJETIVOS_DETECCION', 'Detecció');
    !defined('OBJETIVOS_CAUSAS') && define('OBJETIVOS_CAUSAS', 'Causes');
    !defined('OBJETIVOS_RECURSOS') && define('OBJETIVOS_RECURSOS', 'Recursos');
    !defined('OBJETIVOS_FUENTE') && define('OBJETIVOS_FUENTE', 'Font');
    !defined('OBJETIVOS_FRECUENCIA') && define('OBJETIVOS_FRECUENCIA', 'Freqüència');
    !defined('OBJETIVOS_PLAZO') && define('OBJETIVOS_PLAZO', 'Termini');
    !defined('OBJETIVOS_EJECUTOR') && define('OBJETIVOS_EJECUTOR', 'Executor');
    !defined('OBJETIVOS_PERSEGUIDOR') && define('OBJETIVOS_PERSEGUIDOR', 'perseguidor');
    !defined('OBJETIVOS_ANOTAR_TAREA') && define('OBJETIVOS_ANOTAR_TAREA', 'Anotar tasca');
    !defined('OBJETIVOS_ANADIR_TAREA') && define('OBJETIVOS_ANADIR_TAREA', 'Afegir tasca');
    !defined('OBJETIVOS_TAREA_ANADIDA') && define('OBJETIVOS_TAREA_ANADIDA', 'Tasca afegida');
    !defined('OBJETIVOS_TAREA_MODIFICADA') && define('OBJETIVOS_TAREA_MODIFICADA', 'Tasca modificada');
    !defined('OBJETIVOS_MODIFICAR_TAREA') && define('OBJETIVOS_MODIFICAR_TAREA', 'Modificar tasca');
    !defined('OBJETIVOS_FECHALIMITE_TAREA') && define('OBJETIVOS_FECHALIMITE_TAREA', 'Data límit');
    !defined('OBJETIVOS_FECHATERMINACION_TAREA') && define('OBJETIVOS_FECHATERMINACION_TAREA', 'Data terminació');
    !defined('OBJETIVOS_LISTA_TAREAS') && define('OBJETIVOS_LISTA_TAREAS', 'Llista de tasques');
    !defined('OBJETIVOS_THEAD') && define('OBJETIVOS_THEAD', 'Fer una tasca de seguiment per a un objectiu');
    !defined('OBJETIVOS_LISTA') && define('OBJETIVOS_LISTA', 'Llista d´objectius');
    !defined('OBJETIVOS_FOLLOWUP') && define('OBJETIVOS_FOLLOWUP', 'Seguiment de l´objectiu');
    !defined('OBJETIVOS_FOLLOWUP_ADDED') && define('OBJETIVOS_FOLLOWUP_ADDED', 'Seguiment afegit');
    !defined('OBJETIVOS_EDITAR_OBJETIVO') && define('OBJETIVOS_EDITAR_OBJETIVO', 'Edita objectiu');
    !defined('OBJETIVOS_ADMINISTRAR_OBJETIVOS') && define('OBJETIVOS_ADMINISTRAR_OBJETIVOS', 'Administrar objectius');
    !defined('OBJETIVOS_ANADIR_OBJETIVO') && define('OBJETIVOS_ANADIR_OBJETIVO', 'Afegir objectiu');
    !defined('OBJETIVOS_CAMBIAR_OBJETIVO') && define('OBJETIVOS_CAMBIAR_OBJETIVO', 'Canviar objectiu');
    !defined('OBJETIVOS_PRINTSCREEN') && define('OBJETIVOS_PRINTSCREEN', 'Veure detalls de l´objectiu');
    !defined('OBJETIVOS_DETAILS') && define('OBJETIVOS_DETAILS', 'Detalls de l´objectiu');
    !defined('OBJETIVO_ACTUALIZADO') && define('OBJETIVO_ACTUALIZADO', 'Objectiu actualitzat!');
    !defined('OBJETIVOS_CODIGO_HELP') && define('OBJETIVOS_CODIGO_HELP', 'Poseu el codi d´objectiu immediat superior al que apareix al costat del camp d´inserció.');



// Indicadors// Indicadors

    !defined('INDICADORES_GRAFICAS') && define('INDICADORES_GRAFICAS', 'Gràfiques d´indicadors');


// Formació// Formació

    !defined('FORMACION_ADMINISTRAR_FORMACION') && define('FORMACION_ADMINISTRAR_FORMACION', 'Administrar formació');
    !defined('FORMACION_ANADIR_CURSO') && define('FORMACION_ANADIR_CURSO', 'Afegir curs');
    !defined('FORMACION_CAPTION_ADD') && define('FORMACION_CAPTION_ADD', 'Afegir un curs de formació');
    !defined('FORMACION_CAPTION_MODIFY') && define('FORMACION_CAPTION_MODIFY', 'Modificar un curs de formació');
    !defined('FORMACION_THEAD_MODIFY_ADVERTICE') && define('FORMACION_THEAD_MODIFY_ADVERTICE', 'Cliqueu sobre un enllaç per editar el curs');
    !defined('FORMACION_MODIFICAR_CURSO') && define('FORMACION_MODIFICAR_CURSO', 'Modificar curs');
    !defined('FORMACION_BORRAR_CURSO') && define('FORMACION_BORRAR_CURSO', 'Esborrar curs');
    !defined('CURSO_QUIERE_BORRAR') && define('CURSO_QUIERE_BORRAR', 'Esborrar curs?');
    !defined('FORMACION_CURSO_BORRADO') && define('FORMACION_CURSO_BORRADO', 'Curs esborrat!');
    !defined('FORMACION_CURSO') && define('FORMACION_CURSO', 'Curs');
    !defined('FORMACION_LISTACURSOS') && define('FORMACION_LISTACURSOS', 'Llista de cursos');
    !defined('FORMACION_LUGAR') && define('FORMACION_LUGAR', 'Lloc');
    !defined('FORMACION_HORAS') && define('FORMACION_HORAS', 'Hores');
    !defined('FORMACION_VALIDACION') && define('FORMACION_VALIDACION', 'Validació');
    !defined('FORMACION_CURSOS_REALIZADOS') && define('FORMACION_CURSOS_REALIZADOS', 'Cursos realitzats');
    !defined('FORMACION_CURSOS_REALIZADOS_TRABAJADOR') && define('FORMACION_CURSOS_REALIZADOS_TRABAJADOR', 'Cursos realitzats pel treballador');

// Servei// Servei

    !defined('SERVICIO_TRABAJADOR') && define('SERVICIO_TRABAJADOR', 'Treballador');
    !defined('SERVICIO_SERVICIO') && define('SERVICIO_SERVICIO', 'Servei');
    !defined('SERVICIO_ACTIVESTATUS') && define('SERVICIO_ACTIVESTATUS', 'Actiu');
    !defined('SERVICIO_SERVICIOS_ACTIVOS') && define('SERVICIO_SERVICIOS_ACTIVOS', 'Serveis actius');
    !defined('SERVICIO_SERVICIOS_ADVERTICE') && define('SERVICIO_SERVICIOS_ADVERTICE', 'Cliqueu sobre un servei per mostrar el nombre d´inspeccions realitzades');
    !defined('SERVICIO_MODIFY_THEAD') && define('SERVICIO_MODIFY_THEAD', 'Cliqueu sobre un servei per mostrar detalls');
    !defined('SERVICIO_INCIDENCIA') && define('SERVICIO_INCIDENCIA', 'Incidència');
    !defined('SERVICIO_BORRAR_SERVICIO') && define('SERVICIO_BORRAR_SERVICIO', 'Esborrar servei');
    !defined('SERVICIO_QUIERE_BORRAR') && define('SERVICIO_QUIERE_BORRAR', 'Esborrar servei/s?');
    !defined('SERVICIO_SERVICIO_BORRADO') && define('SERVICIO_SERVICIO_BORRADO', 'Servei esborrat!');
    !defined('SERVICIO_ANADIR_SERVICIO') && define('SERVICIO_ANADIR_SERVICIO', 'Afegir servei');
    !defined('SERVICIO_ANADIDO') && define('SERVICIO_ANADIDO', 'Servei Afegit!');
    !defined('SERVICIO_ACTUALIZADO') && define('SERVICIO_ACTUALIZADO', 'Servei actualitzat!');
    !defined('SERVICIO_ERROR_ANADIR') && define('SERVICIO_ERROR_ANADIR', 'Error en a & ntildir el servei');
    !defined('SERVICIO_MODIFICAR_SERVICIO') && define('SERVICIO_MODIFICAR_SERVICIO', 'Modificar servei');
    !defined('SERVICIO_ADMINISTRAR_SERVICIOS') && define('SERVICIO_ADMINISTRAR_SERVICIOS', 'Administrar serveis');
    !defined('SERVICIO_LISTA_SERVICIOS') && define('SERVICIO_LISTA_SERVICIOS', 'Llista de serveis');
    !defined('SERVICIO_AVISOS_GRAFICA') && define('SERVICIO_AVISOS_GRAFICA', 'Gràfica d´avisos de servei');

// Treballadors// Treballadors

    !defined('TRABAJADOR_TRABAJADOR') && define('TRABAJADOR_TRABAJADOR', 'Treballador');
    !defined('TRABAJADOR_ANADIR_TRABAJADOR') && define('TRABAJADOR_ANADIR_TRABAJADOR', 'Afegir treballador');
    !defined('TRABAJADOR_BORRAR_TRABAJADOR') && define('TRABAJADOR_BORRAR_TRABAJADOR', 'Esborrar treballador');
    !defined('TRABAJADOR_QUIERE_BORRAR') && define('TRABAJADOR_QUIERE_BORRAR', 'Esborrar treballador/s?');
    !defined('TRABAJADOR_TRABAJADOR_BORRADO') && define('TRABAJADOR_TRABAJADOR_BORRADO', 'Treballador esborrat!');
    !defined('TRABAJADOR_EDITAR_TRABAJADOR') && define('TRABAJADOR_EDITAR_TRABAJADOR', 'Edita treballador');
    !defined('TRABAJADOR_ADMINISTRAR_TRABAJADORES') && define('TRABAJADOR_ADMINISTRAR_TRABAJADORES', 'Administrar treballadors');
    !defined('TRABAJADOR_CAMBIAR_TRABAJADOR') && define('TRABAJADOR_CAMBIAR_TRABAJADOR', 'Modificar treballador');
    !defined('TRABAJADOR_ACTUALIZADO') && define('TRABAJADOR_ACTUALIZADO', 'Treballador actualitzat!');
    !defined('TRABAJADOR_LISTA_TRABAJADORES') && define('TRABAJADOR_LISTA_TRABAJADORES', 'Llista de treballadors actius');
    !defined('TRABAJADOR_THEAD_ADVERTICE') && define('TRABAJADOR_THEAD_ADVERTICE', 'Cliqueu sobre un treballador per mostrar el nombre de cursos realitzats');

//Parts de treball//Parts de treball

    !defined('PARTES_HOJAS') && define('PARTES_HOJAS', 'Fulls de treball');
    !defined('PARTES_THEAD_ADVERTICE') && define('PARTES_THEAD_ADVERTICE', 'Cliqueu sobre un part per mostrar detalls');
    !defined('PARTE_DEL_TRABAJADOR') && define('PARTE_DEL_TRABAJADOR', 'part del treballador');
    !defined('PARTE_DETALLES') && define('PARTE_DETALLES', 'Detalls del comunicat');
    !defined('PARTES_ANADIR_PARTE') && define('PARTES_ANADIR_PARTE', 'Afegir part de treball');
    !defined('PARTES_EDITAR_PARTE') && define('PARTES_EDITAR_PARTE', 'Edita part de treball');
    !defined('PARTES_ADMINISTRAR_PARTES') && define('PARTES_ADMINISTRAR_PARTES', 'Administrar parts de treball');
    !defined('PARTES_PRINT') && define('PARTES_PRINT', 'Imprimir part de treball');
    !defined('PARTES_CAMBIAR_PARTE') && define('PARTES_CAMBIAR_PARTE', 'Modificar part');
    !defined('PARTES_BORRAR') && define('PARTES_BORRAR', 'Esborrar part/s');
    !defined('PARTES_QUIERE_BORRAR') && define('PARTES_QUIERE_BORRAR', 'Esborrar part/s?');
    !defined('PARTES_BUSCAR') && define('PARTES_BUSCAR', 'Cerca part/s');
    !defined('PARTES_PARTE_BORRADO') && define('PARTES_PARTE_BORRADO', 'Parte de treball esborrat!');


//Proveïdors//Proveïdors

    !defined('PROVEEDORES_PROVEEDOR') && define('PROVEEDORES_PROVEEDOR', 'Proveïdor');
    !defined('PROVEEDORES_SUMINISTRO') && define('PROVEEDORES_SUMINISTRO', 'Subministrament');
    !defined('PROVEEDORES_ACTIVESTATUS') && define('PROVEEDORES_ACTIVESTATUS', 'Actiu');
    !defined('PROVEEDORES_BORRAR_PROVEEDOR') && define('PROVEEDORES_BORRAR_PROVEEDOR', 'Esborrar proveïdor');
    !defined('PROVEEDORES_QUIERE_BORRAR') && define('PROVEEDORES_QUIERE_BORRAR', 'Esborrar proveïdor/s?');
    !defined('PROVEEDORES_PROVEEDOR_BORRADO') && define('PROVEEDORES_PROVEEDOR_BORRADO', 'Proveïdor esborrat!');
    !defined('PROVEEDORES_ANADIR_PROVEEDOR') && define('PROVEEDORES_ANADIR_PROVEEDOR', 'Afegir proveïdor');
    !defined('PROVEEDORES_MODIFICAR_PROVEEDOR') && define('PROVEEDORES_MODIFICAR_PROVEEDOR', 'Modificar proveïdor');
    !defined('PROVEEDORES_ADMINISTRAR_PROVEEDORES') && define('PROVEEDORES_ADMINISTRAR_PROVEEDORES', 'Administrar proveïdors');
    !defined('PROVEEDORES_PROVEEDOR_APROBADO') && define('PROVEEDORES_PROVEEDOR_APROBADO', 'Aprovat');
    !defined('PROVEEDORES_PROVEEDOR_ENPRUEBAS') && define('PROVEEDORES_PROVEEDOR_ENPRUEBAS', 'En proves');
    !defined('PROVEEDORES_CRITERIOS_EVALUACION') && define('PROVEEDORES_CRITERIOS_EVALUACION', 'Criteris d´avaluació');
    !defined('PROVEEDORES_PROVEEDOR_ACTUALIZADO') && define('PROVEEDORES_PROVEEDOR_ACTUALIZADO', 'Proveïdor actualitzat!');
    !defined('PROVEEDORES_DATOS') && define('PROVEEDORES_DATOS', 'Dades');
    !defined('PROVEEDORES_CIF') && define('PROVEEDORES_CIF', 'CIF');
    !defined('PROVEEDORES_LISTA') && define('PROVEEDORES_LISTA', 'Llista de proveïdors');
    !defined('PROVEEDORES_THEAD_ADVERTICE') && define('PROVEEDORES_THEAD_ADVERTICE', 'Cliqueu sobre un proveïdor per veure detalls');

    !defined('PROVEEDORES_INCIDENCIA') && define('PROVEEDORES_INCIDENCIA', 'Incidència');
    !defined('PROVEEDORES_INCIDENCIAS') && define('PROVEEDORES_INCIDENCIAS', 'incidències');
    !defined('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR', 'Incidències de proveïdor');
    !defined('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR', 'Incidències per proveïdor');
    !defined('PROVEEDORES_ANOTAR_INCIDENCIA') && define('PROVEEDORES_ANOTAR_INCIDENCIA', 'Anotar incidència');
    !defined('PROVEEDORES_MODIFICAR_INCIDENCIA') && define('PROVEEDORES_MODIFICAR_INCIDENCIA', 'Modificar incidència');
    !defined('PROVEEDORES_BORRAR_INCIDENCIAS') && define('PROVEEDORES_BORRAR_INCIDENCIAS', 'Esborrar incidències');
    !defined('INCIDENCIAS_QUIERE_BORRAR') && define('INCIDENCIAS_QUIERE_BORRAR', 'Esborrar incidència/s?');
    !defined('PROVEEDORES_INCIDENCIA_BORRADA') && define('PROVEEDORES_INCIDENCIA_BORRADA', 'Incidència esborrada!');
    !defined('PROVEEDORES_DETALLES') && define('PROVEEDORES_DETALLES', 'Detalls del proveïdor');

    !defined('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN') && define('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN', 'Administrar incidències de proveïdors');
    !defined('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Administrar codis d´incidències');
    !defined('PROVEEDORES_BORRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_BORRAR_CODIGOSINCIDENCIAS', 'Esborrar codis d´incidències');
    !defined('CODIGOSINCIDENCIAS_QUIERE_BORRAR') && define('CODIGOSINCIDENCIAS_QUIERE_BORRAR', 'Esborrar codis d´incidències?');

    !defined('PROVEEDORES_BORRAR_CODIGOINCIDENCIA') && define('PROVEEDORES_BORRAR_CODIGOINCIDENCIA', 'Esborrar codis d´incidències');
    !defined('PROVEEDORES_ANADIR_CODIGOINCIDENCIA') && define('PROVEEDORES_ANADIR_CODIGOINCIDENCIA', 'Afegir codi d´incidència');
    !defined('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA') && define('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA', 'Modificar codi d´incidència');
    !defined('PROVEEDORES_CODIGO_ANADIDO') && define('PROVEEDORES_CODIGO_ANADIDO', 'Codi Afegit!');
    !defined('PROVEEDORES_LISTA_CODIGOS') && define('PROVEEDORES_LISTA_CODIGOS', 'Llista de codis');
    !defined('PROVEEDORES_CODIGOS_ADVERTICE') && define('PROVEEDORES_CODIGOS_ADVERTICE', 'Cliqueu sobre un codi per modificar');
    !defined('PROVEEDORES_CODIGO_INCIDENCIA') && define('PROVEEDORES_CODIGO_INCIDENCIA', 'Codi d´incidència');
    !defined('PROVEEDORES_CODIGO_ACTUALIZADO') && define('PROVEEDORES_CODIGO_ACTUALIZADO', 'Codi actualitzat!');
    !defined('PROVEEDORES_CODIGOINCIDENCIA_BORRADO') && define('PROVEEDORES_CODIGOINCIDENCIA_BORRADO', 'Codi d´incidència esborrat!');
    !defined('PROVEEDORES_INCIDENCIA_CODIGO') && define('PROVEEDORES_INCIDENCIA_CODIGO', 'Codi');
    !defined('PROVEEDORES_JOIN') && define('PROVEEDORES_JOIN', 'Llista de proveïdors i incidències');

    !defined('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES') && define('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES', 'Administrar àrees sensibles');
    !defined('PROVEEDORES_ANADIR_AREASENSIBLE') && define('PROVEEDORES_ANADIR_AREASENSIBLE', 'Afegir àrea sensible');
    !defined('AREASENSIBLE_QUIERE_BORRAR') && define('AREASENSIBLE_QUIERE_BORRAR', 'Esborrar àrea sensible?');
    !defined('PROVEEDORES_BORRAR_AREASSENSIBLES') && define('PROVEEDORES_BORRAR_AREASSENSIBLES', 'Esborrar àrea sensible');
    !defined('PROVEEDORES_AREA_SENSIBLE_BORRADA') && define('PROVEEDORES_AREA_SENSIBLE_BORRADA', 'àrea sensible esborrada!');
    !defined('PROVEEDORES_MODIFICAR_AREASENSIBLE') && define('PROVEEDORES_MODIFICAR_AREASENSIBLE', 'Modificar àrea sensible');
    !defined('PROVEEDORES_AREASENSIBLE_ANADIDA') && define('PROVEEDORES_AREASENSIBLE_ANADIDA', 'àrea sensible afegida!');
    !defined('PROVEEDORES_LISTA_AREASSENSIBLES') && define('PROVEEDORES_LISTA_AREASSENSIBLES', 'Llista d´àrees sensibles');
    !defined('PROVEEDORES_AREASSENSIBLES_ADVERTICE') && define('PROVEEDORES_AREASSENSIBLES_ADVERTICE', 'Cliqueu sobre una àrea sensible per editar');
    !defined('PROVEEDORES_AREASENSIBLE') && define('PROVEEDORES_AREASENSIBLE', 'àrea sensible');
    !defined('PROVEEDORES_AREASENSIBLE_ACTUALIZADA') && define('PROVEEDORES_AREASENSIBLE_ACTUALIZADA', 'àrea sensible actualitzada!');


//Inspeccions//Inspeccions
    !defined('INSPECCIONES_PRINTSCREEN') && define('INSPECCIONES_PRINTSCREEN', 'Detalls de la inspecció');
    !defined('INSPECCIONES_BUSCAR') && define('INSPECCIONES_BUSCAR', 'Cerca inspecció');
    !defined('INSPECCIONES_LISTA') && define('INSPECCIONES_LISTA', 'Llista d´inspeccions');
    !defined('INSPECCIONES_BORRAR_INSPECCION') && define('INSPECCIONES_BORRAR_INSPECCION', 'Esborrar inspecció');
    !defined('INSPECCIONES_QUIERE_BORRAR') && define('INSPECCIONES_QUIERE_BORRAR', 'Esborrar inspecció?');
    !defined('INSPECCIONES_INSPECCION_BORRADA') && define('INSPECCIONES_INSPECCION_BORRADA', 'Inspecció esborrada!');
    !defined('INSPECCIONES_ANADIR_INSPECCION') && define('INSPECCIONES_ANADIR_INSPECCION', 'Afegir inspecció');
    !defined('INSPECCIONES_CAMBIAR_INSPECCION') && define('INSPECCIONES_CAMBIAR_INSPECCION', 'Modificar inspecció');
    !defined('INSPECCIONES_EDITAR_INSPECCION') && define('INSPECCIONES_EDITAR_INSPECCION', 'Edita inspecció');
    !defined('INSPECCIONES_ADMINISTRAR_INSPECCIONES') && define('INSPECCIONES_ADMINISTRAR_INSPECCIONES', 'Administrar inspeccions');
    !defined('INSPECCIONES_THEAD_ADVERTICE') && define('INSPECCIONES_THEAD_ADVERTICE', 'Cliqueu una data per veure detalls');


//Inspectors//Inspectors
    !defined('INSPECCIONES_INSPECTOR') && define('INSPECCIONES_INSPECTOR', 'Inspector');
    !defined('INSPECTORES_LISTA') && define('INSPECTORES_LISTA', 'Llista d´inspectors');
    !defined('BORRAR_INSPECTOR') && define('BORRAR_INSPECTOR', 'Esborrar inspector');
    !defined('INSPECTORES_EDITAR_INSPECTOR') && define('INSPECTORES_EDITAR_INSPECTOR', 'Edita inspector');
    !defined('INSPECTORES_ADMINISTRAR_INSPECTORES') && define('INSPECTORES_ADMINISTRAR_INSPECTORES', 'Administrar inspectors');
    !defined('INSPECTORES_ANADIR_INSPECTOR') && define('INSPECTORES_ANADIR_INSPECTOR', 'Afegir inspector');
    !defined('INSPECTORES_CAMBIAR_INSPECTOR') && define('INSPECTORES_CAMBIAR_INSPECTOR', 'Canviar inspector');
    !defined('INSPECTORES_QUIERE_BORRAR') && define('INSPECTORES_QUIERE_BORRAR', 'Esborrar inspector?');
    !defined('INSPECTORES_INSPECTOR_BORRADO') && define('INSPECTORES_INSPECTOR_BORRADO', 'inspector esborrat!');

//Extintors//Extintors

    !defined('EXTINTORES_EXTINTOR') && define('EXTINTORES_EXTINTOR', 'Extintor');
    !defined('EXTINTORES_EXTINTORES') && define('EXTINTORES_EXTINTORES', 'Extintors');
    !defined('EXTINTORES_CLIENTE') && define('EXTINTORES_CLIENTE', 'Client');
    !defined('EXTINTORES_EJECUCION') && define('EXTINTORES_EJECUCION', 'Execució');
    !defined('EXTINTORES_LISTA') && define('EXTINTORES_LISTA', 'Llista d´extintors');
    !defined('EXTINTORES_DETALLES') && define('EXTINTORES_DETALLES', 'Detalls de l´extintor');
    !defined('EXTINTORES_NUMEXTINTORES') && define('EXTINTORES_NUMEXTINTORES', 'Nombre de extintors');
    !defined('EXTINTORES_PROXIMA_EJECUCION') && define('EXTINTORES_PROXIMA_EJECUCION', 'Pròxima execució');
    !defined('EXTINTORES_FECHA_FABRICACION') && define('EXTINTORES_FECHA_FABRICACION', 'Data de fabricació');
    !defined('EXTINTORES_AGENTE_EXTINTOR') && define('EXTINTORES_AGENTE_EXTINTOR', 'Agent extintor');
    !defined('EXTINTORES_NDESERIE') && define('EXTINTORES_NDESERIE', 'Nombre de sèrie');
    !defined('EXTINTORES_BORRAR_EXTINTOR') && define('EXTINTORES_BORRAR_EXTINTOR', 'Esborrar Extintor');
    !defined('EXTINTOR_QUIERE_BORRAR') && define('EXTINTOR_QUIERE_BORRAR', 'Esborrar extintor/s?');
    !defined('EXTINTORES_EXTINTOR_BORRADO') && define('EXTINTORES_EXTINTOR_BORRADO', 'Extintor esborrat');
    !defined('EXTINTORES_BUSCAR_EXTINTOR') && define('EXTINTORES_BUSCAR_EXTINTOR', 'Cerca Extintor');
    !defined('EXTINTORES_ANADIR_EXTINTOR') && define('EXTINTORES_ANADIR_EXTINTOR', 'Afegir Extintor');
    !defined('EXTINTORES_EXTINTOR_ANADIDO') && define('EXTINTORES_EXTINTOR_ANADIDO', 'Extintor afegit');
    !defined('EXTINTORES_MODIFICAR_EXTINTOR') && define('EXTINTORES_MODIFICAR_EXTINTOR', 'Modificar Extintor');
    !defined('EXTINTORES_EDITAR_EXTINTOR') && define('EXTINTORES_EDITAR_EXTINTOR', 'Edita Extintor');
    !defined('EXTINTORES_ADMINISTRAR_EXTINTORES') && define('EXTINTORES_ADMINISTRAR_EXTINTORES', 'Administrar Extintors');
    !defined('EXTINTORES_THEAD_ADVERTICE') && define('EXTINTORES_THEAD_ADVERTICE', 'Cliqueu sobre un extintor per editar');
    !defined('EXTINTORES_EXTINTOR_ACTUALIZADO') && define('EXTINTORES_EXTINTOR_ACTUALIZADO', 'Extintor actualitzat!');


//Equips de mesura//Equips de mesura

    !defined('EQUIPOS_EQUIPO') && define('EQUIPOS_EQUIPO', 'Equip:');
    !defined('EQUIPOS_EQUIPOS') && define('EQUIPOS_EQUIPOS', 'Metrologia');
    !defined('EQUIPOS_LISTA') && define('EQUIPOS_LISTA', 'Llista d´equips de mesura');
    !defined('EQUIPOS_MODELO') && define('EQUIPOS_MODELO', 'Model:');
    !defined('EQUIPOS_FRECUENCALIB') && define('EQUIPOS_FRECUENCALIB', 'Freqüència de calibratge:');
    !defined('EQUIPOS_CRITERIO') && define('EQUIPOS_CRITERIO', 'Criteri d´acceptació:');
    !defined('EQUIPOS_UBICACION') && define('EQUIPOS_UBICACION', 'Ubicació:');
    !defined('EQUIPOS_ANADIR') && define('EQUIPOS_ANADIR', 'Afegir equip de mesura');
    !defined('EQUIPOS_BORRAR') && define('EQUIPOS_BORRAR', 'Esborrar equip de mesura');
    !defined('EQUIPOS_QUIERE_BORRAR') && define('EQUIPOS_QUIERE_BORRAR', 'Esborrar equip?');
    !defined('EQUIPO_BORRADO') && define('EQUIPO_BORRADO', 'Equip esborrat!');
    !defined('EQUIPOS_CAMBIAR') && define('EQUIPOS_CAMBIAR', 'Modificar equip');
    !defined('EQUIPOS_EDITAR') && define('EQUIPOS_EDITAR', 'Edita equip');
    !defined('EQUIPOS_ADMINISTRAR') && define('EQUIPOS_ADMINISTRAR', 'Administrar equips');
    !defined('EQUIPOS_THEAD_ADVERTICE') && define('EQUIPOS_THEAD_ADVERTICE', 'Cliqueu sobre una equip per veure detalls');
    !defined('EQUIPOS_PRINT_DETAILS') && define('EQUIPOS_PRINT_DETAILS', 'Detalls de l´equip');
    !defined('EQUIPOS_CALIBRACION') && define('EQUIPOS_CALIBRACION', 'Calibratge');


//Calibracions//Calibracions

    !defined('CALIBRACIONES_CALIBRACION') && define('CALIBRACIONES_CALIBRACION', 'Calibratge');
    !defined('CALIBRACIONES_CALIBRACIONES') && define('CALIBRACIONES_CALIBRACIONES', 'Calibracions');
    !defined('CALIBRACIONES_ENCALIBRACION') && define('CALIBRACIONES_ENCALIBRACION', 'En calibratge');
    !defined('CALIBRACIONES_ENREPARACION') && define('CALIBRACIONES_ENREPARACION', 'En reparació');
    !defined('CALIBRACIONES_LISTA') && define('CALIBRACIONES_LISTA', 'Llista de calibratges');
    !defined('CALIBRACIONES_DETALLES') && define('CALIBRACIONES_DETALLES', 'Detalls del calibratge');
    !defined('CALIBRACIONES_BORRAR') && define('CALIBRACIONES_BORRAR', 'Esborrar Calibratge');
    !defined('CALIBRACION_QUIERE_BORRAR') && define('CALIBRACION_QUIERE_BORRAR', 'Esborrar Calibratge/s?');
    !defined('CALIBRACION_BORRADA') && define('CALIBRACION_BORRADA', 'Calibratge esborrada');
    !defined('BUSCAR_CALIBRACION') && define('BUSCAR_CALIBRACION', 'Cerca Calibratge');
    !defined('CALIBRACIONES_ANADIR') && define('CALIBRACIONES_ANADIR', 'Afegir Calibratge');
    !defined('CALIBRACION_ANADIDA') && define('CALIBRACION_ANADIDA', 'Calibratge afegida');
    !defined('CALIBRACIONES_MODIFICAR') && define('CALIBRACIONES_MODIFICAR', 'Modificar Calibratge');
    !defined('CALIBRACIONES_EDITAR') && define('CALIBRACIONES_EDITAR', 'Edita Calibratge');
    !defined('CALIBRACIONES_ADMINISTRAR') && define('CALIBRACIONES_ADMINISTRAR', 'Administrar Calibracions');
    !defined('CALIBRACIONES_THEAD_ADVERTICE') && define('CALIBRACIONES_THEAD_ADVERTICE', 'Cliqueu sobre una Calibratge per editar');
    !defined('CALIBRACION_ACTUALIZADA') && define('CALIBRACION_ACTUALIZADA', 'Calibratge actualitzada!');
    
    
    // Afegits

    !defined('APROBADO') && define('APROBADO', 'Aprovat');
    !defined('DATABASE_USERNAME') && define('DATABASE_USERNAME', 'Nom de base de dades');
    !defined('DATABASE_PASSWORD') && define('DATABASE_PASSWORD', 'contrasenya d´usuari de la base de dades');
    !defined('DATABASE_HOST') && define('DATABASE_HOST', 'Nom del servidor:');
    !defined('DATABASE_HOST_HELP') && define('DATABASE_HOST_HELP', 'Generalment és localhost. Deixi-ho com apareix per defecte.');
    !defined('DATABASE_NAME') && define('DATABASE_NAME', 'Nom de base de dades');
    !defined('DATABASE_NAME_HELP') && define('DATABASE_NAME_HELP', 'El nom de la base de dades on seran creades les taules, en aquest instal · lador:');
    !defined('DATABASE_INSTALL_ADVICE') && define('DATABASE_INSTALL_ADVICE', 'Empleni el formulari per crear les taules de la base de dades. Nota: Recordeu posar les mateixes dades de connexió a l´arxiu .. / includes / mysql.php. Haurà esborrar aquest arxiu de insltalación quan acabi. ');
    !defined('NOMBRE_INCIDENCIA') && define('NOMBRE_INCIDENCIA', 'Nom de la incidència');
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'Search File');
    !defined('IMAGEN_URL') && define('IMAGEN_URL', 'Enllaç de la imatge');
    !defined('IMAGEN') && define('IMAGEN', 'imatge');
    !defined('IMAGEN_URLHELP') && define('IMAGEN_URLHELP', 'No pots posar el link a la imatge');
    !defined('INCIDENCIA') && define('INCIDENCIA', 'nombre');
    !defined('RECUERDE_LOS_CODIGOS') && define('RECUERDE_LOS_CODIGOS', '0 Sense incidències <br /> 1 Falta d´instrumental <br /> 2 Manca de producte <br /> 3 Tractament deficient <br /> 4 Manca de mesures de protecció <br /> 5 Falta de planificació de treball <br /> 6 Manca de certificats de tractaments <br /> 7 Manca d´indumentària, neteja personal <br /> 8 Manca de conservació i neteja del vehicle ');
    !defined('ACTIVIDAD') && define('ACTIVIDAD', 'activitat');
    !defined('OBJETIVOS') && define('OBJETIVOS', 'objectius de qualitat.');
    !defined('CLIENTES') && define('CLIENTES', 'Client.');
    !defined('SATISFACCION') && define('SATISFACCION', 'satisfacció del client.');
    !defined('QUEJASCLIENTE') && define('QUEJASCLIENTE', 'Queixes i reclamacions.');
    !defined('INDICADORES_MEDICIONANALISISYMEJORA') && define('INDICADORES_MEDICIONANALISISYMEJORA', 'Indicadors de MAM.');
    !defined('AUDITORIAS') && define('AUDITORIAS', 'Auditoria.');
    !defined('NOCONFORMIDADESYMEJORAS') && define('NOCONFORMIDADESYMEJORAS', 'No hi ha aprovacions i millores.');
    !defined('POLITICADECALIDAD') && define('POLITICADECALIDAD', 'Política de Qualitat');
    !defined('CAMBIOS') && define('CAMBIOS', 'Canvis que poden afectar el sistema.');
    !defined('RECOMENDACIONESYCONCLUSIONES') && define('RECOMENDACIONESYCONCLUSIONES', 'Recomanacions i conclusions.');
    !defined('CODIGO_INCIDENCIA') && define('CODIGO_INCIDENCIA', 'Codi de l´incident:');
    !defined('INSPECCIONES_CODIGOSINCIDENCIAS_HELP') && define('INSPECCIONES_CODIGOSINCIDENCIAS_HELP', 'Poseu sempre un codi numèric. Si no és així, el gràfic d´incidències d´inspeccions no es dibuixarà.');
    !defined('SELECCIONAR_Y_BORRAR') && define('SELECCIONAR_Y_BORRAR', 'Seleccionar i esborrar');
    !defined('DISTRIBUIDO') && define('DISTRIBUIDO', 'Distribuït');
    !defined('BORRAR_SELECCIONADOS') && define('BORRAR_SELECCIONADOS', 'Elimina seleccionats');
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF', 'Has de iniciar sessió per poder gestionar els seus documents.');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS_OFF') && define('MENU_ALT_ANOTAR_DOCUMENTOS_OFF', 'Has de iniciar sessió per escriure un article.');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS_OFF') && define('MENU_ALT_BORRAR_DOCUMENTOS_OFF', 'No pots registrar-se per poder eliminar un document.');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS_OFF') && define('MENU_ALT_MODIFICAR_CATEGORIAS_OFF', 'No pots registrar-se per poder editar categories.');
    !defined('MENU_OTROS_DOCUMENTOS') && define('MENU_OTROS_DOCUMENTOS', 'Un altre control de documents.');
    !defined('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION') && define('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION', 'Control de Gestió de Incidents');
    !defined('MENU_IMPRIMIR_REVSISTEMA') && define('MENU_IMPRIMIR_REVSISTEMA', 'Imprimeix la Revisió del sistema');
    !defined('REVSISTEMA_PRINT_DETAILS') && define('REVSISTEMA_PRINT_DETAILS', 'data de revisió');
    !defined('REVSISTEMA_INDICADORES') && define('REVSISTEMA_INDICADORES', 'indicadors de qualitat');
    !defined('REVSISTEMA_LISTA_PRINTSCREEN') && define('REVSISTEMA_LISTA_PRINTSCREEN', 'Llista de patches');
    !defined('REVSISTEMA_NUM') && define('REVSISTEMA_NUM', 'Revisió núm');
    !defined('REVSISTEMA_ADVERTICE') && define('REVSISTEMA_ADVERTICE', 'Feu clic en un examen per imprimir');
    !defined('INDICADORES_NOCONFORMIDADESPORAREA') && define('INDICADORES_NOCONFORMIDADESPORAREA', 'l´incompliment per àrea');
    !defined('INDICADORES_INCIDENCIASDEINSPECCION') && define('INDICADORES_INCIDENCIASDEINSPECCION', 'problemes del servei d´inspecció');
    !defined('INDICADORES_DERECURSOS') && define('INDICADORES_DERECURSOS', 'indicadors REC');
    !defined('INDICADORES_FORMACIONANUAL') && define('INDICADORES_FORMACIONANUAL', 'hores de formació per any');
    !defined('INDICADORES_INCIDENCIASDEALMACEN') && define('INDICADORES_INCIDENCIASDEALMACEN', 'Problemes a la botiga');
    !defined('INDICADORES_DEPRODUCCION') && define('INDICADORES_DEPRODUCCION', 'Indicadors OP (en funcionament)');
    !defined('INDICADORES_INCIDENCIASDEPROVEEDOR') && define('INDICADORES_INCIDENCIASDEPROVEEDOR', 'Trouble proveïdor');
    !defined('EDITAR_BORRAR_DOCUMENTO') && define('EDITAR_BORRAR_DOCUMENTO', 'Edita i eliminar els arxius');
    !defined('DOCUMENTOS_MODIFICADOS') && define('DOCUMENTOS_MODIFICADOS', 'els documents modificats');
    !defined('EDITAR_BORRAR_MODIFDOC') && define('EDITAR_BORRAR_MODIFDOC', 'Edita i eliminar canvis sobre la marxa');
    !defined('DOCUMENTOS_IDSOLICITUD_HELP') && define('DOCUMENTOS_IDSOLICITUD_HELP', 'Posa en aneu immediatament anterior apareix al costat del camp d´entrada');
    !defined('DOCUMENTOS_LINK_HELP') && define('DOCUMENTOS_LINK_HELP', 'Poseu la direcció de la carpeta que ha carregat el document, per exemple:. / Uploads / qualitat / Document.pdf');
    !defined('DOCUMENTOS_CLAVE1_HELP') && define('DOCUMENTOS_CLAVE1_HELP', 'Poseu a qui va distribuir el document.');
    !defined('AUDITOR_IMG') && define('AUDITOR_IMG', 'auditor img');
    !defined('AUDITORIAS_JOIN_HELP') && define('AUDITORIAS_JOIN_HELP', 'Si apareixen camps buits a la columna d´auditories, és que la no conformitat no correspon a nunguna auditoria, o l´auditoria no porta informe intern (per exemple, les auditories externes ) ');
    !defined('OBJETIVOS_CAMBIAR_SEGUIMIENTO') && define('OBJETIVOS_CAMBIAR_SEGUIMIENTO', 'Edita tasca');
    !defined('OBJETIVOS_ADVERTICE') && define('OBJETIVOS_ADVERTICE', 'Feu clic a una tasca per canviar');
    !defined('SEGUIMIENTOS_CHANGE_DETAILS') && define('SEGUIMIENTOS_CHANGE_DETAILS', 'Activitats per a la meta:');
    !defined('TRABAJADOR_IMG') && define('TRABAJADOR_IMG', 'treballador img');
    !defined('TRABAJADOR_THEAD_EDIT') && define('TRABAJADOR_THEAD_EDIT', 'Feu clic a un treballador a canviar');
    !defined('TRABAJADOR_HA_HECHO') && define('TRABAJADOR_HA_HECHO', 'Treballadors que han rebut formació');
    !defined('TRABAJADOR_ACTIVIDAD') && define('TRABAJADOR_ACTIVIDAD', 'Activitat');
    !defined('CODIGOSINCIDENCIAS_LASTID_HELP') && define('CODIGOSINCIDENCIAS_LASTID_HELP', 'Poseu el número de codi immediatament superior al que apareix al costat del camp d´inserció, segons la seva regla de codis. El codi que veu és l´últim que es va inserir.');
    !defined('PROVEEDORES_NOMBRE_INCIDENCIA') && define('PROVEEDORES_NOMBRE_INCIDENCIA', 'qüestió del nom');
    !defined('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA') && define('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA', 'Afegir codi d´incidència');
    !defined('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA') && define('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA', 'Modificar codi d´incidència');
    !defined('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Administrar codis d´incidències');
    !defined('INSPECCIONES_CODIGOS_ADVERTICE') && define('INSPECCIONES_CODIGOS_ADVERTICE', 'Feu clic en un codi per canviar');
    !defined('INSPECCIONES_LISTA_CODIGOS') && define('INSPECCIONES_LISTA_CODIGOS', 'Llista de codis d´incidència');
    !defined('INSPECTORES_INSPECTOR_ANADIDO') && define('INSPECTORES_INSPECTOR_ANADIDO', 'Va afegir un inspector');

?>

