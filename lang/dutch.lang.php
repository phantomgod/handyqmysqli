<?php
/**
----------------- -----------------
Language: Dutch Language: Dutch

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


----------------- -----------------
*/


    !defined('PAGE_TITLE') && define('PAGE_TITLE', 'HANDY_QUALITY');
    !defined('HEADER_TITLE') && define('HEADER_TITLE', 'Quality Systems');
    !defined('SITE_NAME') && define('SITE_NAME', 'Company, Inc');
    !defined('SLOGAN') && define('SLOGAN', 'zero defects');
    !defined('HEADING') && define('HEADING', 'Heading');

// Algemeen-Algemeen

    !defined('DOCUMENTOS') && define('DOCUMENTOS', 'Documenten');
    !defined('ADVERTICE') && define('ADVERTICE', 'Klik voor details');
    !defined('FECHA') && define('FECHA', 'Datum');
    !defined('ANO') && define('ANO', 'Jaar');
    !defined('HORA') && define('HORA', 'Time');
    !defined('RESULTADO') && define('RESULTADO', 'Resultaat');
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'Documentatie');
    !defined('BACK') && define('BACK', 'Terug');
    !defined('ESTADO') && define('ESTADO', 'State');
    !defined('ACTUALIZAR') && define('ACTUALIZAR', 'Update');
    !defined('ENVIAR') && define('ENVIAR', 'Submit');
    !defined('ANADIR') && define('ANADIR', 'Add');
    !defined('BORRAR') && define('BORRAR', 'Verwijderen');
    !defined('DELETE_ADVERTICE') && define('DELETE_ADVERTICE', 'De delete-knop aan de onderkant van de lijst');
    !defined('IDIOMA') && define('IDIOMA', 'Select Language');
    !defined('VISIBLE') && define('VISIBLE', 'Zichtbaar');
    !defined('CODIGO') && define('CODIGO', 'Code');
    !defined('SELECCIONE_EL_CODIGO') && define('SELECCIONE_EL_CODIGO', 'Selecteer de code. default 0-code saai verschijnt. weergegeven Als een andere code, selecteert u in de vervolgkeuzelijst. Hoewel de beschrijving verschijnt, alleen de numerieke waarde te nemen om te automatiseren Incident indicator grafische inspectie');
    !defined('ANO') && define('ANO', 'Jaar');
    !defined('ABRIR') && define('ABRIR', 'Openen');
    !defined('BUSCAR') && define('BUSCAR', 'Zoeken');
    !defined('RESPONSABLE') && define('RESPONSABLE', 'manager');
    !defined('TERMINACION') && define('TERMINACION', 'Termination');
    !defined('LIMITE') && define('LIMITE', 'limiet');
    !defined('OBSERVACIONES') && define('OBSERVACIONES', 'Opmerkingen');
    !defined('BORRAR') && define('BORRAR', 'Verwijderen');
    !defined('CLIENTE') && define('CLIENTE', 'Klant');
    !defined('INDICADOR') && define('INDICADOR', 'display');
    !defined('ACTIVO') && define('ACTIVO', 'Actief');
    !defined('INACTIVO') && define('INACTIVO', 'Off');
    !defined('VOLVER') && define('VOLVER', 'Terug');
    !defined('MODIFICAR') && define('MODIFICAR', 'Bewerken');
    !defined('CIF') && define('CIF', 'CIF');
    !defined('DIRECCION') && define('DIRECCION', 'Adres');
    !defined('COMENTARIOS') && define('COMENTARIOS', 'Opmerkingen');
    !defined('ANO_MES_DIA') && define('ANO_MES_DIA', 'Jaar-Maand-Dag');
    !defined('LISTA') && define('LISTA', 'list');
    !defined('PRESENTACION') && define('PRESENTACION', 'Handy-q is een software voor het beheer van kwaliteit office online');
    !defined('AYUDA') && define('AYUDA', 'Help');
    !defined('ULTIMO_COMUNICADO') && define('ULTIMO_COMUNICADO', 'laatste verklaring');
    !defined('IMPRIMIR') && define('IMPRIMIR', 'Print Registratie');
    !defined('IMPRIMIR_PAPEL') && define('IMPRIMIR_PAPEL', 'print op papier');
    !defined('ERROR_ANADIR_REGISTRO') && define('ERROR_ANADIR_REGISTRO', 'mislukt record toe te voegen');
    !defined('CONTENIDO') && define('CONTENIDO', 'Inhoud');
    !defined('VEHICULOS') && define('VEHICULOS', 'voertuigen');
    !defined('BACKUP') && define('BACKUP', 'Backup DB');
    !defined('ESCRITORIO') && define('ESCRITORIO', 'Input Messages ->');
    !defined('CUESTIONARIO_TALLER') && define('CUESTIONARIO_TALLER', 'workshop Questionnaire');
    !defined('PRODUCCION') && define('PRODUCCION', 'productie');
    !defined('CALIDAD') && define('CALIDAD', 'Quality');
    !defined('ALMACEN') && define('ALMACEN', 'Store');
    !defined('COMPRAS') && define('COMPRAS', 'Shopping');
    !defined('FORMACION') && define('FORMACION', 'Training');
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'Documentatie');
    !defined('TALLER') && define('TALLER', 'workshop');
    !defined('PAGINAR') && define('PAGINAR', 'Pagineren');
    !defined('DESCRIPCION') && define('DESCRIPCION', 'Beschrijving');
    !defined('ACCION') && define('ACCION', 'Actie');
    !defined('PROCEDIMIENTO') && define('PROCEDIMIENTO', 'Procedure');
    !defined('LUGAR') && define('LUGAR', 'Locatie');
    !defined('DESVIACION') && define('DESVIACION', 'afwijking');
    !defined('OPERATIVO') && define('OPERATIVO', 'Operating');
    !defined('BAJA') && define('BAJA', 'Low');
    !defined('EDITAR') && define('EDITAR', 'Bewerken');
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'Door bestanden bladeren');

// Menu-Menu

    !defined('MENU_DOCUMENTOS') && define('MENU_DOCUMENTOS', 'Documenten.');
    !defined('MENU_BDDOCS') && define('MENU_BDDOCS', 'BD docs.');
    !defined('MENU_MODIFDOCS') && define('MENU_MODIFDOCS', 'Wijzig docs..');
    !defined('MENU_AUDITORIAS') && define('MENU_AUDITORIAS', 'Audits');
    !defined('MENU_AINFORMES') && define('MENU_AINFORMES', 'AI_informes');
    !defined('MENU_AUDITORES') && define('MENU_AUDITORES', 'Bedrijfsrevisoren');
    !defined('MENU_INSPECCIONES') && define('MENU_INSPECCIONES', 'Inspecties');
    !defined('MENU_INSPECTORES') && define('MENU_INSPECTORES', 'inspecteur');
    !defined('MENU_OBJETIVOS') && define('MENU_OBJETIVOS', 'Millennium');
    !defined('MENU_PARTES') && define('MENU_PARTES', 'Worksheets');
    !defined('MENU_TRABAJADORES') && define('MENU_TRABAJADORES', 'Worker');
    !defined('MENU_SERVICIOS') && define('MENU_SERVICIOS', 'Diensten');
    !defined('MENU_PROVEEDORES') && define('MENU_PROVEEDORES', 'leveranciers');
    !defined('MENU_FORMACION') && define('MENU_FORMACION', 'Cursussen');
    !defined('MENU_AVISOS') && define('MENU_AVISOS', 'Berichten');
    !defined('MENU_ENCUESTAS') && define('MENU_ENCUESTAS', 'Polls');

    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS', 'Voeg snel een document (voor dat je weet uit het hoofd van de code voor de categorie waartoe het behoort, of wijzigt een bestaand document voor fouten als ze scoorden');
    !defined('MENU_ALT_MAPA_DOCUMENTOS') && define('MENU_ALT_MAPA_DOCUMENTOS', 'Document Map: Toont onze boom documentaire categorieën van documenten');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS') && define('MENU_ALT_ANOTAR_DOCUMENTOS', 'commenteren een document: de juiste manier om een document te annoteren Dit stuurt een verzoek naar de beheerder voor de goedkeuring van het document Sindsdien verschijnen in de algemene lijst..');
    !defined('MENU_ALT_ANOTAR_DOCMANAGER') && define('MENU_ALT_ANOTAR_DOCMANAGER', 'Plaats een document rechtstreeks in de database, voor veel gebruikte documenten.');
    !defined('MENU_ALT_EDITAR_BDDOC') && define('MENU_ALT_EDITAR_BDDOC', 'Bewerk documenten worden direct in de database.');
    !defined('MENU_ALT_APROBAR_DOCUMENTOS') && define('MENU_ALT_APROBAR_DOCUMENTOS', 'Geeft een document dat al eerder is opgemerkt.');
    !defined('MENU_ALT_SUBIR_DOCUMENTOS') && define('MENU_ALT_SUBIR_DOCUMENTOS', 'Upload documenten: upload');
    !defined('MENU_ALT_BUSCAR_DOCUMENTOS') && define('MENU_ALT_BUSCAR_DOCUMENTOS', 'Zoek een document');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS') && define('MENU_ALT_BORRAR_DOCUMENTOS', 'Verwijderen van een document');
    !defined('MENU_ALT_LISTA_DOCUMENTOS') && define('MENU_ALT_LISTA_DOCUMENTOS', 'Algemene Lijst van documenten: de lijst gesorteerd op document-ID');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS') && define('MENU_ALT_MODIFICAR_CATEGORIAS', 'Beheert documentaire categorie boom:. toevoegen, wijzigen of verwijderen, ');
    !defined('MENU_ALT_MODIFDOC') && define('MENU_ALT_MODIFDOC', 'Manage document wijzigingen: aanpassen noot of aanpassingen die aan specifieke documenten');
    !defined('MENU_ALT_BORRAR_MODIFDOC') && define('MENU_ALT_BORRAR_MODIFDOC', 'Verwijder wijzigingen in specifieke documenten');
    !defined('MENU_ALT_DOC_PRINTSCREEN') && define('MENU_ALT_DOC_PRINTSCREEN', 'Weergave inserts documenten rechtstreeks in de database, die van weinig nut.');

    !defined('MENU_ALT_ADMINISTRAR_AUDITORIAS') && define('MENU_ALT_ADMINISTRAR_AUDITORIAS', 'Manage auditing');
    !defined('MENU_ALT_ADMINISTRAR_AINFORMES') && define('MENU_ALT_ADMINISTRAR_AINFORMES', 'Beheer auditverslagen');
    !defined('MENU_ALT_IMPRIMIR_AUDITORIAS') && define('MENU_ALT_IMPRIMIR_AUDITORIAS', 'Print audits');
    !defined('MENU_ALT_IMPRIMIR_AINFORMES') && define('MENU_ALT_IMPRIMIR_AINFORMES', 'Print auditverslag');
    !defined('MENU_ALT_BORRAR_AUDITORIAS') && define('MENU_ALT_BORRAR_AUDITORIAS', 'Verwijder audits');
    !defined('MENU_ALT_BORRAR_AINFORMES') && define('MENU_ALT_BORRAR_AINFORMES', 'Delete auditverslag');
    !defined('MENU_ALT_BUSCAR_AUDITORIAS') && define('MENU_ALT_BUSCAR_AUDITORIAS', 'Zoek audits');
    !defined('MENU_ALT_BUSCAR_AINFORMES') && define('MENU_ALT_BUSCAR_AINFORMES', 'Zoek auditverslag');
    !defined('MENU_ALT_LISTA_AUDITORIAS') && define('MENU_ALT_LISTA_AUDITORIAS', 'audits List');
    !defined('MENU_ALT_LISTA_AINFORMES') && define('MENU_ALT_LISTA_AINFORMES', 'Lijst van de auditverslagen');

    !defined('MENU_ALT_ADMINISTRAR_AUDITOR') && define('MENU_ALT_ADMINISTRAR_AUDITOR', 'Manage auditor');
    !defined('MENU_ALT_IMPRIMIR_AUDITOR') && define('MENU_ALT_IMPRIMIR_AUDITOR', 'Print auditor');
    !defined('MENU_ALT_BORRAR_AUDITOR') && define('MENU_ALT_BORRAR_AUDITOR', 'Verwijder auditor');

    !defined('MENU_ALT_ADMINISTRAR_INSPECCION') && define('MENU_ALT_ADMINISTRAR_INSPECCION', 'Manage controles');
    !defined('MENU_ALT_IMPRIMIR_INSPECCION') && define('MENU_ALT_IMPRIMIR_INSPECCION', 'Print inspectie');
    !defined('MENU_ALT_BORRAR_INSPECCION') && define('MENU_ALT_BORRAR_INSPECCION', 'Clear inspectie');
    !defined('MENU_ALT_BUSCAR_INSPECCION') && define('MENU_ALT_BUSCAR_INSPECCION', 'Zoek inspectie');
    !defined('MENU_ALT_JOIN_INSPECCIONES') && define('MENU_ALT_JOIN_INSPECCIONES', 'Aantal inspecties per dienst');

    !defined('MENU_ALT_ADMINISTRAR_INSPECTOR') && define('MENU_ALT_ADMINISTRAR_INSPECTOR', 'Manage inspecteurs');
    !defined('MENU_ALT_IMPRIMIR_INSPECTOR') && define('MENU_ALT_IMPRIMIR_INSPECTOR', 'Print inspecteurs');
    !defined('MENU_ALT_BORRAR_INSPECTOR') && define('MENU_ALT_BORRAR_INSPECTOR', 'Verwijder inspecteurs');

    !defined('MENU_ALT_ADMINISTRAR_OBJETIVOS') && define('MENU_ALT_ADMINISTRAR_OBJETIVOS', 'Beheer doelstellingen: Voeg & bewerken');
    !defined('MENU_ALT_IMPRIMIR_OBJETIVOS') && define('MENU_ALT_IMPRIMIR_OBJETIVOS', 'Toont doel gegevens');
    !defined('MENU_ALT_BORRAR_OBJETIVOS') && define('MENU_ALT_BORRAR_OBJETIVOS', 'Duidelijke doelstellingen');
    !defined('MENU_ALT_BUSCAR_OBJETIVOS') && define('MENU_ALT_BUSCAR_OBJETIVOS', 'Zoek targets');
    !defined('MENU_ALT_LISTA_OBJETIVOS') && define('MENU_ALT_LISTA_OBJETIVOS', 'Wish List');
    !defined('MENU_ALT_ADDTASK_OBJETIVOS') && define('MENU_ALT_ADDTASK_OBJETIVOS', 'een taak Voeg toe aan een doel');
    !defined('MENU_ALT_JOIN_OBJETIVOS') && define('MENU_ALT_JOIN_OBJETIVOS', 'Weergave taken die overeenkomen met elke doelstelling');

    !defined('MENU_ALT_ADMINISTRAR_PARTES') && define('MENU_ALT_ADMINISTRAR_PARTES', 'Beheer werkende delen: Voeg & bewerken');
    !defined('MENU_ALT_IMPRIMIR_PARTES') && define('MENU_ALT_IMPRIMIR_PARTES', 'Geeft de details van de partij');
    !defined('MENU_ALT_BORRAR_PARTES') && define('MENU_ALT_BORRAR_PARTES', 'Verwijder partijen');
    !defined('MENU_ALT_BUSCAR_PARTES') && define('MENU_ALT_BUSCAR_PARTES', 'Zoek partijen');

    !defined('MENU_ALT_ADMINISTRAR_EXTINTORES') && define('MENU_ALT_ADMINISTRAR_EXTINTORES', 'Beheer brandblussers: Voeg & bewerken');
    !defined('MENU_ALT_IMPRIMIR_EXTINTORES') && define('MENU_ALT_IMPRIMIR_EXTINTORES', 'Toont details brandblusser');
    !defined('MENU_ALT_BORRAR_EXTINTORES') && define('MENU_ALT_BORRAR_EXTINTORES', 'Verwijder brandblussers');
    !defined('MENU_ALT_BUSCAR_EXTINTORES') && define('MENU_ALT_BUSCAR_EXTINTORES', 'Zoek brandblusser');
    !defined('MENU_ALT_LISTA_EXTINTORES') && define('MENU_ALT_LISTA_EXTINTORES', 'Lijst brandblussers');

    !defined('MENU_ALT_ADMINISTRAR_TRABAJADORES') && define('MENU_ALT_ADMINISTRAR_TRABAJADORES', 'Beheer medewerkers: Voeg & bewerken');
    !defined('MENU_ALT_BORRAR_TRABAJADORES') && define('MENU_ALT_BORRAR_TRABAJADORES', 'Verwijder werknemers');

    !defined('MENU_ALT_ADMINISTRAR_SERVICIOS') && define('MENU_ALT_ADMINISTRAR_SERVICIOS', 'Beheer Diensten: Voeg & bewerken');
    !defined('MENU_ALT_BORRAR_SERVICIOS') && define('MENU_ALT_BORRAR_SERVICIOS', 'Verwijder diensten');
    !defined('MENU_ALT_CONTROLAVISOS') && define('MENU_ALT_CONTROLAVISOS', 'Controleer op gebeurtenisberichten');
    !defined('MENU_ALT_GRAFICAVISOS') && define('MENU_ALT_GRAFICAVISOS', 'Grafische waarschuwingen voor maanden');


    !defined('MENU_ALT_ADMINISTRAR_FORMACION') && define('MENU_ALT_ADMINISTRAR_FORMACION', 'Beheer Training: Voeg & bewerken');
    !defined('MENU_ALT_BORRAR_FORMACION') && define('MENU_ALT_BORRAR_FORMACION', 'Verwijder vorming');
    !defined('MENU_ALT_LISTA_FORMACION') && define('MENU_ALT_LISTA_FORMACION', 'Course List');
    !defined('MENU_ALT_JOIN_FORMACION') && define('MENU_ALT_JOIN_FORMACION', 'Cursussen per werknemer');

    !defined('MENU_ALT_ADMINISTRAR_EQUIPOS') && define('MENU_ALT_ADMINISTRAR_EQUIPOS', 'Beheer meetapparatuur: Voeg & bewerken');
    !defined('MENU_ALT_IMPRIMIR_EQUIPOS') && define('MENU_ALT_IMPRIMIR_EQUIPOS', 'Toont de details van de meetapparatuur');
    !defined('MENU_ALT_BORRAR_EQUIPOS') && define('MENU_ALT_BORRAR_EQUIPOS', 'Verwijder actieteam');
    !defined('MENU_ALT_BUSCAR_EQUIPOS') && define('MENU_ALT_BUSCAR_EQUIPOS', 'Zoek het team als');
    !defined('MENU_ALT_LISTA_EQUIPOS') && define('MENU_ALT_LISTA_EQUIPOS', 'Lijst van de meetapparatuur');

    !defined('MENU_ALT_ADMINISTRAR_CALIBRACIONES') && define('MENU_ALT_ADMINISTRAR_CALIBRACIONES', 'Beheer kalibraties: Voeg & bewerken');
    !defined('MENU_ALT_IMPRIMIR_CALIBRACIONES') && define('MENU_ALT_IMPRIMIR_CALIBRACIONES', 'Toont kalibratie gegevens');
    !defined('MENU_ALT_BORRAR_CALIBRACIONES') && define('MENU_ALT_BORRAR_CALIBRACIONES', 'Verwijder kalibraties');
    !defined('MENU_ALT_BUSCAR_CALIBRACIONES') && define('MENU_ALT_BUSCAR_CALIBRACIONES', 'Zoek ijking');
    !defined('MENU_ALT_LISTA_CALIBRACIONES') && define('MENU_ALT_LISTA_CALIBRACIONES', 'kalibraties List');
    !defined('MENU_ALT_JOIN_CALIBRACIONES') && define('MENU_ALT_JOIN_CALIBRACIONES', 'Laat de kalibraties per team');


// Onderzoeken bij SGC-Onderzoeken bij SGC

    !defined('CUESTIONARIO_TRATAMIENTOS') && define('CUESTIONARIO_TRATAMIENTOS', 'service Questionnaire');
    !defined('CUESTIONARIO_CALIDAD') && define('CUESTIONARIO_CALIDAD', 'Vragenlijst voor dep kwaliteit.');
    !defined('CUESTIONARIO_ALMACEN') && define('CUESTIONARIO_ALMACEN', 'Vragenlijst voor het opslaan');
    !defined('CUESTIONARIO_COMPRAS') && define('CUESTIONARIO_COMPRAS', 'Vragenlijst In winkelwagen');
    !defined('CUESTIONARIO_FORMACION') && define('CUESTIONARIO_FORMACION', 'training Questionnaire');
    !defined('CUESTIONARIO_DOCUMENTACION') && define('CUESTIONARIO_DOCUMENTACION', 'materiële Vragenlijst');
    !defined('CUESTIONARIO_LEGIONELLA') && define('CUESTIONARIO_LEGIONELLA', 'Vragenlijst voor legionella');


// Indicatoren-Indicatoren

    !defined('INDICADORES_INDICADORES') && define('INDICADORES_INDICADORES', 'indicatoren');
    !defined('INDICADORES_NCSPORAREA') && define('INDICADORES_NCSPORAREA', 'Aantal afwijkingen per gebied');
    !defined('INDICADORES_DESVIACIONCIERRESNCS') && define('INDICADORES_DESVIACIONCIERRESNCS', 'Afwijkingen sluiten afwijkingen');
    !defined('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR') && define('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR', 'Totaal aantal uren opleiding per medewerker');
    !defined('INDICADORES_GRAFICACONTROLAVISOS') && define('INDICADORES_GRAFICACONTROLAVISOS', 'Percentage advertenties per maand');
    !defined('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES') && define('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES', 'Trouble in dienst inspecties');


// Mededelingen-Mededelingen

    !defined('AVISOS_AVISOS') && define('AVISOS_AVISOS', 'Berichten');
    !defined('AVISOS_AVISO') && define('AVISOS_AVISO', 'Waarschuwing');
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'kennisgeving lijst');
    !defined('AVISOS_DETALLES') && define('AVISOS_DETALLES', 'Details ´kennis');
    !defined('AVISOS_COMUNICADOPOR') && define('AVISOS_COMUNICADOPOR', 'Overgeleverd door');
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'desktop kennisgeving lijst');
    !defined('AVISOS_PONERAVISO') && define('AVISOS_PONERAVISO', 'Plaats een advertentie desktop');
    !defined('AVISOS_THEAD_ADVERTICE') && define('AVISOS_THEAD_ADVERTICE', 'Klik op een link om de details van het bericht te zien');
    !defined('AVISOS_AVISO_BORRADO') && define('AVISOS_AVISO_BORRADO', 'Waarschuwing verwijderd!');
    !defined('AVISOS_ADMIN') && define('AVISOS_ADMIN', 'Beheer bureaubladmeldingen');
    !defined('AVISOS_DELETE') && define('AVISOS_DELETE', 'Clear bericht');



// Documenten-Documenten

    !defined('DOCUMENTOS_MAPA') && define('DOCUMENTOS_MAPA', 'Document Map');
    !defined('DOCUMENTOS_DOCUMENTO') && define('DOCUMENTOS_DOCUMENTO', 'Document');
    !defined('APROBAR_DOCUMENTOS') && define('APROBAR_DOCUMENTOS', 'goedkeuren Documenten');
    !defined('BORRAR_DOCUMENTO') && define('BORRAR_DOCUMENTO', 'Delete Document');
    !defined('SUBIR_DOCUMENTOS') && define('SUBIR_DOCUMENTOS', 'Upload Documents');
    !defined('BUSCAR_DOCUMENTOS') && define('BUSCAR_DOCUMENTOS', 'Zoek Documents');
    !defined('DOCUMENTO_BORRADO') && define('DOCUMENTO_BORRADO', 'Paper verwijderd!');
    !defined('NOMBRE_DOCUMENTO') && define('NOMBRE_DOCUMENTO', 'Titel');
    !defined('DOCUMENTO_AUTOR') && define('DOCUMENTO_AUTOR', 'Auteur');
    !defined('DOCUMENTOS_ANADIR_DOCUMENTO') && define('DOCUMENTOS_ANADIR_DOCUMENTO', 'Voeg document');
    !defined('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS') && define('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS', 'Documenten beheren');
    !defined('DOCUMENTOS_CAMBIAR_DOCUMENTO') && define('DOCUMENTOS_CAMBIAR_DOCUMENTO', 'Document bewerken');
    !defined('DOCUMENTOS_IDSOLICITUD') && define('DOCUMENTOS_IDSOLICITUD', 'id verzoek');
    !defined('DOCUMENTOS_SECCIONID') && define('DOCUMENTOS_SECCIONID', 'id sectie');
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Klik op een link om de details te bekijken');
    !defined('DOCUMENTOS_THEAD_ADVERTICE_JOIN') && define('DOCUMENTOS_THEAD_ADVERTICE_JOIN', 'Klik op een document om te laten zien veranderingen');
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'Herziene');
    !defined('DOCUMENTOS_PRINT_DETAILS') && define('DOCUMENTOS_PRINT_DETAILS', 'Document Details');
    !defined('DOCUMENTOS_MODIFDOC_ADMIN') && define('DOCUMENTOS_MODIFDOC_ADMIN', 'Wijzigingen in documenten');
    !defined('DOCUMENTOS_ANOTAR_MODIFICACION') && define('DOCUMENTOS_ANOTAR_MODIFICACION', 'Record gewijzigd');
    !defined('DOCUMENTOS_EDITAR_MODIFICACION') && define('DOCUMENTOS_EDITAR_MODIFICACION', 'Bewerken wijziging');
    !defined('DOCUMENTOS_NUMEROREVISION') && define('DOCUMENTOS_NUMEROREVISION', 'Versie-Nr');
    !defined('DOCUMENTOS_MODIFICACION') && define('DOCUMENTOS_MODIFICACION', 'Change');
    !defined('DOCUMENTOS_MODIFICACIONES') && define('DOCUMENTOS_MODIFICACIONES', 'Wijzigingen in het document:');
    !defined('DOCUMENTOS_CAPAPART') && define('DOCUMENTOS_CAPAPART', 'Book-sectie');
    !defined('DOCUMENTOS_LISTA') && define('DOCUMENTOS_LISTA', 'Lijst van de documenten');
    !defined('DOCUMENTOS_FECHAMODIFICACION') && define('DOCUMENTOS_FECHAMODIFICACION', 'Gewijzigd op');
    !defined('DOCUMENTOS_MODIFICACIONES_DETALLES') && define('DOCUMENTOS_MODIFICACIONES_DETALLES', 'Details van de verandering');
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Klik op een document om te laten zien veranderingen');
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'Herziene');
    !defined('DOCUMENTOS_JOIN') && define('DOCUMENTOS_JOIN', 'Veranderingen voor document');
    !defined('DOCUMENTOS_LISTA_MODIFICACIONES') && define('DOCUMENTOS_LISTA_MODIFICACIONES', 'Patch List');
    !defined('DOCUMENTOS_BORRAR_MODIFICACION') && define('DOCUMENTOS_BORRAR_MODIFICACION', 'Verwijder wijziging');
    !defined('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR') && define('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR', 'Je wilt deze verandering duidelijk?');
    !defined('DOCUMENTOS_QUIERE_BORRAR') && define('DOCUMENTOS_QUIERE_BORRAR', 'dit document wilt verwijderen?');
    !defined('DOCUMENTOS_MODIFDOC_DELETED') && define('DOCUMENTOS_MODIFDOC_DELETED', 'Wijziging verwijderd!');
    !defined('MODIFICACION_ANOTADA') && define('MODIFICACION_ANOTADA', 'Changing geannoteerde');
    !defined('DOCUMENTOS_ULTIMAS_MODIFICACIONES') && define('DOCUMENTOS_ULTIMAS_MODIFICACIONES', 'Laatst gewijzigd');
    !defined('DOCUMENTOS_ULTIMA_REVISION') && define('DOCUMENTOS_ULTIMA_REVISION', 'Klik op de knop om te controleren op de laatste revisie geannoteerde document.');


// Documenten BD: Documentmanager-Documenten BD: Documentmanager

    !defined('DOCMANAGER_PRINT') && define('DOCMANAGER_PRINT', 'View Documents BD');
    !defined('DOCMANAGER_INSERT') && define('DOCMANAGER_INSERT', 'document invoegen in de database');


// Rekenkamer-Rekenkamer

    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'accountant');
    !defined('AUDITORES_EDITAR_AUDITOR') && define('AUDITORES_EDITAR_AUDITOR', 'Bewerken auditor');
    !defined('AUDITORES_AUDITOR_ACTUALIZADO') && define('AUDITORES_AUDITOR_ACTUALIZADO', 'bijgewerkt accountant!');
    !defined('AUDITORES_ADMINISTRAR_AUDITORES') && define('AUDITORES_ADMINISTRAR_AUDITORES', 'Manage Rekenkamer');
    !defined('AUDITORES_DETALLES') && define('AUDITORES_DETALLES', 'gegevens auditor');
    !defined('AUDITORES_QUIERE_BORRAR') && define('AUDITORES_QUIERE_BORRAR', 'Verwijder auditor');
    !defined('AUDITORES_AUDITOR_BORRADO') && define('AUDITORES_AUDITOR_BORRADO', 'verwijderd accountant!');
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Voeg auditor');
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'Change auditor');
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', 'Lijst van auditors');
    !defined('AUDITOR_ADVERTICE') && define('AUDITOR_ADVERTICE', 'Klik op een link om de details van de accountant te zien');
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Lijst van auditors');
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'Verwijder auditor');
    !defined('AUDITORIAS_CUESTIONARIOALSERVICIO') && define('AUDITORIAS_CUESTIONARIOALSERVICIO', '* Controleer maandelijks afwijkingen in customer care <br /> * Controleer op ontbrekende documentatie werk <br /> * Controleer het voertuig minimumvoorraad <br /> * Inchecken netheid en onderhoud van voertuigen <br /> * Inchecken volledige werkorders <br /> * Inchecken werk');
    !defined('AUDITORIAS_CUESTIONARIOACALIDAD') && define('AUDITORIAS_CUESTIONARIOACALIDAD', '* Controleer of u de regels (indien van toepassing) bijgewerkt <br/> * Controleer dat de juiste documenten worden gedistribueerd systeem en goedgekeurd. <BR /> * Controleer hoe het document archovo <br/> * Controleer de lijst van geldige documenten wordt bijgewerkt <br/> * Inchecken voor vertragingen in geplande taken (audits, doelstellingen, opleiding, indicatoren, inspecties) <br/> * Controleer dat de gegevens worden bijgewerkt in de database < br /> Controleer of een vermelding gevallen van aanbieders in de BD. * <br/> Controleer of u de NC-AACCPP eventueel gesloten, alsmede verbeteringen <br/> * Controleer of hebben klachten van klanten bijgewoond <br/> Controleer indicatoren voor het toezicht');
    !defined('AUDITORIAS_CUESTIONARIOALMACEN') && define('AUDITORIAS_CUESTIONARIOALMACEN', '* Controleer vuil en rommel op de planken en gereedschap. <br /> * het vuil Controleer op de vloer, of andere afvalstoffen. <br/> * de herzieningsdatum controleren, signalering en clearway in brandblussers. <br/> * Controleer of de toegangen vrij zijn van onderdelen, materialen, dozen of andere obstakels die de doorgang van personen of vervoermiddelen te voorkomen <br/> * Controleer de status en de toereikendheid containers. <br/> de beveiligingsstatus * Check-in elektrische, algemene voorzieningen en verlichtingssystemen. <br/> * Controleer of brandblussers zijn schoon, de huidige herziening kaarten en gelegen in geplaatst gebieden voor hen. <br/> * Controleer dat de producten vrij zijn van corrosie. <br/> * Controleer stapelt zich op. <br/> * Controleer of er geen onbekende materialen. * <br/> controleren afwezigheid van afvalcontainers deposito´s in opslagruimten <br/> * Controleer morsen ');
    !defined('AUDITORIAS_CUESTIONARIOACOMPRAS') && define('AUDITORIAS_CUESTIONARIOACOMPRAS', '* Controleer op ontbrekende certificaten of goedkeuringen van leveranciers en producten.<br /> * Controleer of alle problemen zijn geannoteerd gekregen met de leveranciers. <br/> * Controleer of personeel weet de juiste manier voor het ontvangen van de materialen. <br/> * Controleer of elke provider heeft beoordeeld en het resultaat is behaald. <br/> * Controleer of de facturen of bestelbonnen juist zijn ingediend en ondertekend door de persoon die recepciona <br/> * Controleer de goedkeuring van facturen met leveringsbonnen');
    !defined('AUDITORIAS_CUESTIONARIOAFORMACION') && define('AUDITORIAS_CUESTIONARIOAFORMACION', '* Inchecken status update training records in de database. <br/> * Inchecken kaarten. <br/> * Inchecken revalidatie. <br/> * de cursussen controleren.');
    !defined('AUDITORIAS_CUESTIONARIOADOCUMENTACION') && define('AUDITORIAS_CUESTIONARIOADOCUMENTACION', '* Controleer de beoordeling stelt <br/> * Controleer de status en de opslag van bestanden <br/> * Het controleren van de juiste verdeling verklaring...');
    !defined('AUDITORIAS_CUESTIONARIOATALLER') && define('AUDITORIAS_CUESTIONARIOATALLER', '-. aangevinkt meters <br/> - Housekeeping <br/> - Veiligheid en preventie <br/> - Documentatie <br/> - Scheiding van gebieden - Product Identification <br/> - <br/> controleacties');


// Om onderzoek te-Om onderzoek te

    !defined('AINFORMES_JOIN') && define('AINFORMES_JOIN', 'Audits & Afwijkingen');
    !defined('AINFORMES_BUSCAR') && define('AINFORMES_BUSCAR', 'Zoek auditverslag');
    !defined('AINFORMES_HOJA') && define('AINFORMES_HOJA', 'leaf');
    !defined('AINFORMES_EDITAR') && define('AINFORMES_EDITAR', 'Bewerken auditverslag');
    !defined('AINFORMES_ADMINISTRAR') && define('AINFORMES_ADMINISTRAR', 'Beheer auditverslagen');
    !defined('AINFORMES_NUMERO') && define('AINFORMES_NUMERO', 'AI Nee');
    !defined('AINFORMES_ANADIR') && define('AINFORMES_ANADIR', 'Voeg auditverslag');
    !defined('AINFORMES_CAMBIAR') && define('AINFORMES_CAMBIAR', 'Change auditverslag');
    !defined('AINFORMES_INFORME') && define('AINFORMES_INFORME', 'Audit Report');
    !defined('AINFORMES_AREA_AUDITADA') && define('AINFORMES_AREA_AUDITADA', 'gecontroleerde zone');
    !defined('AINFORMES_OBJETO') && define('AINFORMES_OBJETO', 'object');
    !defined('AINFORMES_ADVERTICE') && define('AINFORMES_ADVERTICE', 'Klik op een link om de details te bekijken');
    !defined('AINFORMES_LISTA_PRINTSCREEN') && define('AINFORMES_LISTA_PRINTSCREEN', 'Lijst van de auditverslagen');
    !defined('AINFORMES_PRINT_DETAILS') && define('AINFORMES_PRINT_DETAILS', 'auditverslag gegevens');
    !defined('AINFORMES_PRINT_ADVERTICE') && define('AINFORMES_PRINT_ADVERTICE', 'gegevens');
    !defined('AINFORMES_BACK_TO_PRINTLIST') && define('AINFORMES_BACK_TO_PRINTLIST', 'Terug naar de lijst');
    !defined('AINFORMES_AI') && define('AINFORMES_AI', 'interne audit');
    !defined('AINFORMES_BORRAR') && define('AINFORMES_BORRAR', 'Delete auditverslag');
    !defined('AINFORMES_QUIERE_BORRAR') && define('AINFORMES_QUIERE_BORRAR', 'Verwijder auditverslag?');
    !defined('AINFORMES_INFORME_BORRADO') && define('AINFORMES_INFORME_BORRADO', 'Meld verwijderd!');
    !defined('AINFORMES_INFORME_ENVIAD0') && define('AINFORMES_INFORME_ENVIAD0', 'Rapport verzonden');
    !defined('AINFORMES_PONER_OTRO') && define('AINFORMES_PONER_OTRO', 'Voeg een ander rapport');
    !defined('AINFORMES_ACTUALIZADO') && define('AINFORMES_ACTUALIZADO', 'Report date');

// Audits-Audits

    !defined('AUDITORIAS_JOIN') && define('AUDITORIAS_JOIN', 'Audits & Afwijkingen');
    !defined('AUDITORIAS_BUSCAR') && define('AUDITORIAS_BUSCAR', 'Zoek audits');
    !defined('AUDITORIAS_HOJA') && define('AUDITORIAS_HOJA', 'leaf');
    !defined('AUDITORIAS_EDITAR_AUDITORIA') && define('AUDITORIAS_EDITAR_AUDITORIA', 'Bewerken auditing');
    !defined('AUDITORIAS_ADMINISTRAR_AUDITORIAS') && define('AUDITORIAS_ADMINISTRAR_AUDITORIAS', 'Manage auditing');
    !defined('AUDITORIAS_NUMERO_AUDITORIA') && define('AUDITORIAS_NUMERO_AUDITORIA', 'AI Nee');
    !defined('AUDITORIAS_ANADIR_AUDITORIA') && define('AUDITORIAS_ANADIR_AUDITORIA', 'Voeg audit');
    !defined('AUDITORIAS_CAMBIAR_AUDITORIA') && define('AUDITORIAS_CAMBIAR_AUDITORIA', 'Change auditing');
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Voeg auditor');
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'Change auditor');
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', 'Lijst van auditors');
    !defined('AUDITORIAS_AUDITORIA') && define('AUDITORIAS_AUDITORIA', 'Audit');
    !defined('AUDITORIAS_AREA_AUDITADA') && define('AUDITORIAS_AREA_AUDITADA', 'gecontroleerde zone');
    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'accountant');
    !defined('AUDITORIAS_OBJETO') && define('AUDITORIAS_OBJETO', 'object');
    !defined('AUDITORIAS_ADVERTICE') && define('AUDITORIAS_ADVERTICE', 'Klik op een link om de details te bekijken');
    !defined('AUDITORIAS_LISTA_PRINTSCREEN') && define('AUDITORIAS_LISTA_PRINTSCREEN', 'audits List');
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Lijst van auditors');
    !defined('AUDITORIAS_PRINT_DETAILS') && define('AUDITORIAS_PRINT_DETAILS', 'audit Details');
    !defined('AUDITORIAS_PRINT_ADVERTICE') && define('AUDITORIAS_PRINT_ADVERTICE', 'gegevens');
    !defined('AUDITORIAS_BACK_TO_PRINTLIST') && define('AUDITORIAS_BACK_TO_PRINTLIST', 'Terug naar de lijst');
    !defined('AUDITORIAS_AI') && define('AUDITORIAS_AI', 'interne audit');
    !defined('AUDITORIAS_BORRAR_AUDITORIA') && define('AUDITORIAS_BORRAR_AUDITORIA', 'Verwijder audit');
    !defined('AUDITORIAS_QUIERE_BORRAR') && define('AUDITORIAS_QUIERE_BORRAR', 'Verwijder audit?');
    !defined('AUDITORIAS_AUDITORIA_BORRADA') && define('AUDITORIAS_AUDITORIA_BORRADA', 'verwijderd Audit!');
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'Verwijder auditor');
    !defined('AUDITORIAS_AUDITORIA_ENVIADA') && define('AUDITORIAS_AUDITORIA_ENVIADA', 'Audit verzonden');
    !defined('AUDITORIAS_PONER_OTRA') && define('AUDITORIAS_PONER_OTRA', 'Voeg een audit');
    !defined('AUDITORIA_ACTUALIZADA') && define('AUDITORIA_ACTUALIZADA', 'Audit op de hoogte!');
    !defined('AUDITORIA_SERVICIO') && define('AUDITORIA_SERVICIO', 'Audit service');
    !defined('AUDITORIA_CALIDAD') && define('AUDITORIA_CALIDAD', 'Audit van de dep rang.');
    !defined('AUDITORIA_ALMACEN') && define('AUDITORIA_ALMACEN', 'Audit Almac &racute; n');
    !defined('AUDITORIA_COMPRAS') && define('AUDITORIA_COMPRAS', 'Audit shopping');
    !defined('AUDITORIA_FORMACION') && define('AUDITORIA_FORMACION', 'Audit training');
    !defined('AUDITORIA_DOCUMENTACION') && define('AUDITORIA_DOCUMENTACION', 'Audit Documentatie');
    !defined('AUDITORIA_TALLER') && define('AUDITORIA_TALLER', 'Audit Workshop');
    !defined('AUDITORIAS_CODIGO_HELP') && define('AUDITORIAS_CODIGO_HELP', 'Remember codering audits dan onmiddellijke Zet naast het invoerveld..');


// NC ', 's-NC ', 's', '', '', '', '', '

    !defined('NCS_ADVERTICE') && define('NCS_ADVERTICE', 'Klik op een link om de non-conformiteit bewerken');
    !defined('NCS_DETAILS') && define('NCS_DETAILS', 'NC Details');
    !defined('NCS_JOIN_ADVERTICE') && define('NCS_JOIN_ADVERTICE', 'Klik op een NC-of audit voor details');
    !defined('NCS_AUDITS_JOIN_LIST') && define('NCS_AUDITS_JOIN_LIST', 'NC´sy audits, gecombineerd lijst Klik voor meer informatie.');
    !defined('NCS_ABRIR_NC') && define('NCS_ABRIR_NC', 'Open een afwijking');
    !defined('NCS_ANADIR_NC') && define('NCS_ANADIR_NC', 'Add GN');
    !defined('NCS_MODIFICAR_NC') && define('NCS_MODIFICAR_NC', 'Wijzigen NC');
    !defined('NCS_EDITAR_NC') && define('NCS_EDITAR_NC', 'Wijzig NC´s');
    !defined('NCS_ADMINISTRAR_NCS') && define('NCS_ADMINISTRAR_NCS', 'Beheer NC´s');
    !defined('NCS_IMPRIMIR_NCS') && define('NCS_IMPRIMIR_NCS', 'Audits & NC´s');
    !defined('NCS_IMPRIMIR') && define('NCS_IMPRIMIR', 'NC´s Print screen');
    !defined('NCS_BUSCAR_NCS') && define('NCS_BUSCAR_NCS', 'Zoek NC´s');
    !defined('NCS_BORRAR_NC') && define('NCS_BORRAR_NC', 'Verwijder NC´s');
    !defined('NCS_QUIERE_BORRAR') && define('NCS_QUIERE_BORRAR', 'Verwijder NC´/s ');
    !defined('NCS_NC_BORRADA') && define('NCS_NC_BORRADA', 'NC borrarda!');
    !defined('NCS_NUMERO') && define('NCS_NUMERO', 'Pagina No');
    !defined('NCS_FECHA_APERTURA') && define('NCS_FECHA_APERTURA', 'Open Datum');
    !defined('NCS_CODIGO_NC') && define('NCS_CODIGO_NC', 'Code');
    !defined('NCS_REFERENCIA_DOCUMENTAL') && define('NCS_REFERENCIA_DOCUMENTAL', 'Ref doc');
    !defined('NCS_DESCRIPCION') && define('NCS_DESCRIPCION', 'Beschrijving');
    !defined('NCS_REF_DOC') && define('NCS_REF_DOC', 'Documenten basislijn.');
    !defined('NCS_ABIERTOPOR') && define('NCS_ABIERTOPOR', 'Late');
    !defined('NCS_AFECTAA') && define('NCS_AFECTAA', 'getroffen gebied');
    !defined('NCS_CAUSAS') && define('NCS_CAUSAS', 'oorzaken');
    !defined('NCS_ACCIONES') && define('NCS_ACCIONES', 'Acties');
    !defined('NCS_PLAZO') && define('NCS_PLAZO', 'Time');
    !defined('NCS_CIERRE_PARCIAL') && define('NCS_CIERRE_PARCIAL', 'gedeeltelijke sluiting');
    !defined('NCS_EFICACIA') && define('NCS_EFICACIA', 'efficiëntie');
    !defined('NCS_FECHACIERRE') && define('NCS_FECHACIERRE', 'Sluitingsdatum');
    !defined('NCS_DESVIACION') && define('NCS_DESVIACION', 'afwijking');
    !defined('NCS_VISIBLE') && define('NCS_VISIBLE', 'Zichtbaar');
    !defined('NCS_LISTA') && define('NCS_LISTA', 'NC´s List');
    !defined('NCS_GRAFICA') && define('NCS_GRAFICA', 'Grafische NC´s per gebied');
    !defined('NCS_REALIZAR_GRAFICA') && define('NCS_REALIZAR_GRAFICA', 'Maak Grafiek');
    !defined('NCS_PORAREA') && define('NCS_PORAREA', 'NC´s per gebied');
    !defined('NCS_SELECCIONE_PARA_CAMBIAR') && define('NCS_SELECCIONE_PARA_CAMBIAR', 'Selecteer voor verandering');
    !defined('NCS_LASTID_HELP') && define('NCS_LASTID_HELP', 'Zet de code die verschijnt onmiddellijk boven het inbrengen kant van het veld.');
    !defined('NCS_CODIGO_HELP') && define('NCS_CODIGO_HELP', 'Dit veld is niet verplicht, tenzij je wilt om het te vullen U kunt een speciale code voor toekomstige referentie toe te voegen bijvoorbeeld, kunt u een datum code van of trefwoord te zetten...');
    !defined('NCS_AI_HELP') && define('NCS_AI_HELP', 'Als de afwijking niet leidt tot een audit, laat het veld leeg.');


// Doelstellingen-Doelstellingen

    !defined('OBJETIVOS_JOIN') && define('OBJETIVOS_JOIN', 'Wish List & volg');
    !defined('OBJETIVOS_JOIN_THEAD') && define('OBJETIVOS_JOIN_THEAD', 'Klik op een object om te laten zien');
    !defined('OBJETIVOS_BORRAR_OBJETIVO') && define('OBJETIVOS_BORRAR_OBJETIVO', 'Verwijder object');
    !defined('OBJETIVOS_QUIERE_BORRAR') && define('OBJETIVOS_QUIERE_BORRAR', 'Verwijder object');
    !defined('OBJETIVOS_OBJETIVO_BORRADO') && define('OBJETIVOS_OBJETIVO_BORRADO', 'verwijderd Doelstelling!');
    !defined('OBJETIVOS_NOMBRE_OBJETIVO') && define('OBJETIVOS_NOMBRE_OBJETIVO', 'Titel');
    !defined('OBJETIVOS_ACCION') && define('OBJETIVOS_ACCION', 'Actie');
    !defined('OBJETIVOS_TAREA') && define('OBJETIVOS_TAREA', 'Taak');
    !defined('OBJETIVOS_ORIGEN') && define('OBJETIVOS_ORIGEN', 'Oorsprong');
    !defined('OBJETIVOS_DETECCION') && define('OBJETIVOS_DETECCION', 'Opsporing');
    !defined('OBJETIVOS_CAUSAS') && define('OBJETIVOS_CAUSAS', 'oorzaken');
    !defined('OBJETIVOS_RECURSOS') && define('OBJETIVOS_RECURSOS', 'Resources');
    !defined('OBJETIVOS_FUENTE') && define('OBJETIVOS_FUENTE', 'Source');
    !defined('OBJETIVOS_FRECUENCIA') && define('OBJETIVOS_FRECUENCIA', 'Frequentie');
    !defined('OBJETIVOS_PLAZO') && define('OBJETIVOS_PLAZO', 'Time');
    !defined('OBJETIVOS_EJECUTOR') && define('OBJETIVOS_EJECUTOR', 'uitvoerder');
    !defined('OBJETIVOS_PERSEGUIDOR') && define('OBJETIVOS_PERSEGUIDOR', 'Tracker');
    !defined('OBJETIVOS_ANOTAR_TAREA') && define('OBJETIVOS_ANOTAR_TAREA', 'Record taak');
    !defined('OBJETIVOS_ANADIR_TAREA') && define('OBJETIVOS_ANADIR_TAREA', 'Taak toevoegen');
    !defined('OBJETIVOS_TAREA_ANADIDA') && define('OBJETIVOS_TAREA_ANADIDA', 'Taak toegevoegd');
    !defined('OBJETIVOS_TAREA_MODIFICADA') && define('OBJETIVOS_TAREA_MODIFICADA', 'Taak gewijzigd');
    !defined('OBJETIVOS_MODIFICAR_TAREA') && define('OBJETIVOS_MODIFICAR_TAREA', 'Taak bewerken');
    !defined('OBJETIVOS_FECHALIMITE_TAREA') && define('OBJETIVOS_FECHALIMITE_TAREA', 'date');
    !defined('OBJETIVOS_FECHATERMINACION_TAREA') && define('OBJETIVOS_FECHATERMINACION_TAREA', 'einddatum');
    !defined('OBJETIVOS_LISTA_TAREAS') && define('OBJETIVOS_LISTA_TAREAS', 'Lijst');
    !defined('OBJETIVOS_THEAD') && define('OBJETIVOS_THEAD', 'Voer een taak voor een volgen van het doel');
    !defined('OBJETIVOS_LISTA') && define('OBJETIVOS_LISTA', 'Wish List');
    !defined('OBJETIVOS_FOLLOWUP') && define('OBJETIVOS_FOLLOWUP', 'volgen van het doel');
    !defined('OBJETIVOS_FOLLOWUP_ADDED') && define('OBJETIVOS_FOLLOWUP_ADDED', 'opgeteld');
    !defined('OBJETIVOS_EDITAR_OBJETIVO') && define('OBJETIVOS_EDITAR_OBJETIVO', 'Bewerken order');
    !defined('OBJETIVOS_ADMINISTRAR_OBJETIVOS') && define('OBJETIVOS_ADMINISTRAR_OBJETIVOS', 'Manage doelstellingen');
    !defined('OBJETIVOS_ANADIR_OBJETIVO') && define('OBJETIVOS_ANADIR_OBJETIVO', 'Voeg target');
    !defined('OBJETIVOS_CAMBIAR_OBJETIVO') && define('OBJETIVOS_CAMBIAR_OBJETIVO', 'Change target');
    !defined('OBJETIVOS_PRINTSCREEN') && define('OBJETIVOS_PRINTSCREEN', 'Zie het doel');
    !defined('OBJETIVOS_DETAILS') && define('OBJETIVOS_DETAILS', 'objectieve gegevens');
    !defined('OBJETIVO_ACTUALIZADO') && define('OBJETIVO_ACTUALIZADO', 'bijgewerkt Doelstelling!');
    !defined('OBJETIVOS_CODIGO_HELP') && define('OBJETIVOS_CODIGO_HELP', 'Zet de code direct boven de doelstelling die wordt weergegeven naast het invoerveld.');


// Indicatoren-Indicatoren

    !defined('INDICADORES_GRAFICAS') && define('INDICADORES_GRAFICAS', 'Grafische indicatoren');


// Training-Training

    !defined('FORMACION_ADMINISTRAR_FORMACION') && define('FORMACION_ADMINISTRAR_FORMACION', 'Manage training');
    !defined('FORMACION_ANADIR_CURSO') && define('FORMACION_ANADIR_CURSO', 'Voeg Course');
    !defined('FORMACION_CAPTION_ADD') && define('FORMACION_CAPTION_ADD', 'Voeg een training');
    !defined('FORMACION_CAPTION_MODIFY') && define('FORMACION_CAPTION_MODIFY', 'Wijzig een training');
    !defined('FORMACION_THEAD_MODIFY_ADVERTICE') && define('FORMACION_THEAD_MODIFY_ADVERTICE', 'Klik op een link om de cursus te bewerken');
    !defined('FORMACION_MODIFICAR_CURSO') && define('FORMACION_MODIFICAR_CURSO', 'Change natuurlijk');
    !defined('FORMACION_BORRAR_CURSO') && define('FORMACION_BORRAR_CURSO', 'Verwijder natuurlijk');
    !defined('CURSO_QUIERE_BORRAR') && define('CURSO_QUIERE_BORRAR', 'Verwijder natuurlijk?');
    !defined('FORMACION_CURSO_BORRADO') && define('FORMACION_CURSO_BORRADO', 'verwijderd Cursus!');
    !defined('FORMACION_CURSO') && define('FORMACION_CURSO', 'Cursus');
    !defined('FORMACION_LISTACURSOS') && define('FORMACION_LISTACURSOS', 'Course List');
    !defined('FORMACION_LUGAR') && define('FORMACION_LUGAR', 'Locatie');
    !defined('FORMACION_HORAS') && define('FORMACION_HORAS', 'Hours');
    !defined('FORMACION_VALIDACION') && define('FORMACION_VALIDACION', 'validatie');
    !defined('FORMACION_CURSOS_REALIZADOS') && define('FORMACION_CURSOS_REALIZADOS', 'hield Courses');
    !defined('FORMACION_CURSOS_REALIZADOS_TRABAJADOR') && define('FORMACION_CURSOS_REALIZADOS_TRABAJADOR', 'Cursussen in het bezit van de werknemer');

// Service-Service

    !defined('SERVICIO_TRABAJADOR') && define('SERVICIO_TRABAJADOR', 'Worker');
    !defined('SERVICIO_SERVICIO') && define('SERVICIO_SERVICIO', 'Service');
    !defined('SERVICIO_ACTIVESTATUS') && define('SERVICIO_ACTIVESTATUS', 'Actief');
    !defined('SERVICIO_SERVICIOS_ACTIVOS') && define('SERVICIO_SERVICIOS_ACTIVOS', 'Asset Services');
    !defined('SERVICIO_SERVICIOS_ADVERTICE') && define('SERVICIO_SERVICIOS_ADVERTICE', 'Klik op een service om het aantal uitgevoerde controles weer te geven');
    !defined('SERVICIO_MODIFY_THEAD') && define('SERVICIO_MODIFY_THEAD', 'Klik op een service om details weer te geven');
    !defined('SERVICIO_INCIDENCIA') && define('SERVICIO_INCIDENCIA', 'Issue');
    !defined('SERVICIO_BORRAR_SERVICIO') && define('SERVICIO_BORRAR_SERVICIO', 'Delete service');
    !defined('SERVICIO_QUIERE_BORRAR') && define('SERVICIO_QUIERE_BORRAR', 'Verwijder Service / s');
    !defined('SERVICIO_SERVICIO_BORRADO') && define('SERVICIO_SERVICIO_BORRADO', 'Service verwijderd!');
    !defined('SERVICIO_ANADIR_SERVICIO') && define('SERVICIO_ANADIR_SERVICIO', 'Service toevoegen');
    !defined('SERVICIO_ANADIDO') && define('SERVICIO_ANADIDO', 'Service toegevoegd!');
    !defined('SERVICIO_ACTUALIZADO') && define('SERVICIO_ACTUALIZADO', 'Service op de hoogte!');
    !defined('SERVICIO_ERROR_ANADIR') && define('SERVICIO_ERROR_ANADIR', 'Fout ntildir dienst aan en');
    !defined('SERVICIO_MODIFICAR_SERVICIO') && define('SERVICIO_MODIFICAR_SERVICIO', 'Bewerken Service');
    !defined('SERVICIO_ADMINISTRAR_SERVICIOS') && define('SERVICIO_ADMINISTRAR_SERVICIOS', 'Manage Services');
    !defined('SERVICIO_LISTA_SERVICIOS') && define('SERVICIO_LISTA_SERVICIOS', 'Service List');
    !defined('SERVICIO_AVISOS_GRAFICA') && define('SERVICIO_AVISOS_GRAFICA', 'Graphic event bericht');

// Werknemers-Werknemers

    !defined('TRABAJADOR_TRABAJADOR') && define('TRABAJADOR_TRABAJADOR', 'Worker');
    !defined('TRABAJADOR_ANADIR_TRABAJADOR') && define('TRABAJADOR_ANADIR_TRABAJADOR', 'Voeg werknemer');
    !defined('TRABAJADOR_BORRAR_TRABAJADOR') && define('TRABAJADOR_BORRAR_TRABAJADOR', 'Verwijder werknemer');
    !defined('TRABAJADOR_QUIERE_BORRAR') && define('TRABAJADOR_QUIERE_BORRAR', 'Verwijder werknemer / s');
    !defined('TRABAJADOR_TRABAJADOR_BORRADO') && define('TRABAJADOR_TRABAJADOR_BORRADO', 'verwijderd Worker!');
    !defined('TRABAJADOR_EDITAR_TRABAJADOR') && define('TRABAJADOR_EDITAR_TRABAJADOR', 'Bewerken werknemer');
    !defined('TRABAJADOR_ADMINISTRAR_TRABAJADORES') && define('TRABAJADOR_ADMINISTRAR_TRABAJADORES', 'Beheer medewerkers');
    !defined('TRABAJADOR_CAMBIAR_TRABAJADOR') && define('TRABAJADOR_CAMBIAR_TRABAJADOR', 'Bewerken werknemer');
    !defined('TRABAJADOR_ACTUALIZADO') && define('TRABAJADOR_ACTUALIZADO', 'bijgewerkt Worker!');
    !defined('TRABAJADOR_LISTA_TRABAJADORES') && define('TRABAJADOR_LISTA_TRABAJADORES', 'Lijst van werkzame werknemers');
    !defined('TRABAJADOR_THEAD_ADVERTICE') && define('TRABAJADOR_THEAD_ADVERTICE', 'Klik op een werknemer om het aantal cursussen die laten zien');

// Werkgroepen-Werkgroepen

    !defined('PARTES_HOJAS') && define('PARTES_HOJAS', 'Worksheets');
    !defined('PARTES_THEAD_ADVERTICE') && define('PARTES_THEAD_ADVERTICE', 'Klik op een onderdeel om de details zien');
    !defined('PARTE_DEL_TRABAJADOR') && define('PARTE_DEL_TRABAJADOR', 'Arbeiders Partij');
    !defined('PARTE_DETALLES') && define('PARTE_DETALLES', 'gegevens deel');
    !defined('PARTES_ANADIR_PARTE') && define('PARTES_ANADIR_PARTE', 'Voeg een deel werk');
    !defined('PARTES_EDITAR_PARTE') && define('PARTES_EDITAR_PARTE', 'Bewerken werkzaam deel');
    !defined('PARTES_ADMINISTRAR_PARTES') && define('PARTES_ADMINISTRAR_PARTES', 'Beheer werkende delen');
    !defined('PARTES_PRINT') && define('PARTES_PRINT', 'Print onderdeel van het werken');
    !defined('PARTES_CAMBIAR_PARTE') && define('PARTES_CAMBIAR_PARTE', 'Wijzigen deel');
    !defined('PARTES_BORRAR') && define('PARTES_BORRAR', 'Verwijder onderdeel / s');
    !defined('PARTES_QUIERE_BORRAR') && define('PARTES_QUIERE_BORRAR', 'Verwijder onderdeel / s');
    !defined('PARTES_BUSCAR') && define('PARTES_BUSCAR', 'Zoek naar deel / s');
    !defined('PARTES_PARTE_BORRADO') && define('PARTES_PARTE_BORRADO', 'werkgroep verwijderd!');


// Provider-Provider

    !defined('PROVEEDORES_PROVEEDOR') && define('PROVEEDORES_PROVEEDOR', 'Leverancier');
    !defined('PROVEEDORES_SUMINISTRO') && define('PROVEEDORES_SUMINISTRO', 'Supply');
    !defined('PROVEEDORES_ACTIVESTATUS') && define('PROVEEDORES_ACTIVESTATUS', 'Actief');
    !defined('PROVEEDORES_BORRAR_PROVEEDOR') && define('PROVEEDORES_BORRAR_PROVEEDOR', 'Verwijder provider');
    !defined('PROVEEDORES_QUIERE_BORRAR') && define('PROVEEDORES_QUIERE_BORRAR', 'Verwijder provider / s');
    !defined('PROVEEDORES_PROVEEDOR_BORRADO') && define('PROVEEDORES_PROVEEDOR_BORRADO', 'Leverancier verwijderd!');
    !defined('PROVEEDORES_ANADIR_PROVEEDOR') && define('PROVEEDORES_ANADIR_PROVEEDOR', 'Voeg Provider');
    !defined('PROVEEDORES_MODIFICAR_PROVEEDOR') && define('PROVEEDORES_MODIFICAR_PROVEEDOR', 'Wijzigen provider');
    !defined('PROVEEDORES_ADMINISTRAR_PROVEEDORES') && define('PROVEEDORES_ADMINISTRAR_PROVEEDORES', 'Manage leveranciers');
    !defined('PROVEEDORES_PROVEEDOR_APROBADO') && define('PROVEEDORES_PROVEEDOR_APROBADO', 'Goedgekeurd');
    !defined('PROVEEDORES_PROVEEDOR_ENPRUEBAS') && define('PROVEEDORES_PROVEEDOR_ENPRUEBAS', 'Bij het testen');
    !defined('PROVEEDORES_CRITERIOS_EVALUACION') && define('PROVEEDORES_CRITERIOS_EVALUACION', 'Evaluation Criteria');
    !defined('PROVEEDORES_PROVEEDOR_ACTUALIZADO') && define('PROVEEDORES_PROVEEDOR_ACTUALIZADO', 'bijgewerkt Provider!');
    !defined('PROVEEDORES_DATOS') && define('PROVEEDORES_DATOS', 'Data');
    !defined('PROVEEDORES_CIF') && define('PROVEEDORES_CIF', 'CIF');
    !defined('PROVEEDORES_LISTA') && define('PROVEEDORES_LISTA', 'Vendor List');
    !defined('PROVEEDORES_THEAD_ADVERTICE') && define('PROVEEDORES_THEAD_ADVERTICE', 'Klik op een leverancier voor meer informatie');

    !defined('PROVEEDORES_INCIDENCIA') && define('PROVEEDORES_INCIDENCIA', 'Issue');
    !defined('PROVEEDORES_INCIDENCIAS') && define('PROVEEDORES_INCIDENCIAS', 'Trouble');
    !defined('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR', 'Trouble provider');
    !defined('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR', 'Trouble door leverancier');
    !defined('PROVEEDORES_ANOTAR_INCIDENCIA') && define('PROVEEDORES_ANOTAR_INCIDENCIA', 'Nota Issue');
    !defined('PROVEEDORES_MODIFICAR_INCIDENCIA') && define('PROVEEDORES_MODIFICAR_INCIDENCIA', 'Bewerken Issue');
    !defined('PROVEEDORES_BORRAR_INCIDENCIAS') && define('PROVEEDORES_BORRAR_INCIDENCIAS', 'Verwijder incidenten');
    !defined('INCIDENCIAS_QUIERE_BORRAR') && define('INCIDENCIAS_QUIERE_BORRAR', 'Verwijder incidentie / s');
    !defined('PROVEEDORES_INCIDENCIA_BORRADA') && define('PROVEEDORES_INCIDENCIA_BORRADA', 'Incidence verwijderd!');
    !defined('PROVEEDORES_DETALLES') && define('PROVEEDORES_DETALLES', 'Product Detail');

    !defined('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN') && define('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN', 'Beheer incidenten providers');
    !defined('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Beheer incidenten codes');
    !defined('PROVEEDORES_BORRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_BORRAR_CODIGOSINCIDENCIAS', 'Verwijder codes incidenten');
    !defined('CODIGOSINCIDENCIAS_QUIERE_BORRAR') && define('CODIGOSINCIDENCIAS_QUIERE_BORRAR', 'Verwijder incidenten codes');

    !defined('PROVEEDORES_BORRAR_CODIGOINCIDENCIA') && define('PROVEEDORES_BORRAR_CODIGOINCIDENCIA', 'Verwijder codes incidenten');
    !defined('PROVEEDORES_ANADIR_CODIGOINCIDENCIA') && define('PROVEEDORES_ANADIR_CODIGOINCIDENCIA', 'Voeg event-code');
    !defined('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA') && define('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA', 'Change event code');
    !defined('PROVEEDORES_CODIGO_ANADIDO') && define('PROVEEDORES_CODIGO_ANADIDO', 'Code toegevoegd!');
    !defined('PROVEEDORES_LISTA_CODIGOS') && define('PROVEEDORES_LISTA_CODIGOS', 'codelijst');
    !defined('PROVEEDORES_CODIGOS_ADVERTICE') && define('PROVEEDORES_CODIGOS_ADVERTICE', 'Klik op een code te veranderen');
    !defined('PROVEEDORES_CODIGO_INCIDENCIA') && define('PROVEEDORES_CODIGO_INCIDENCIA', 'incidentie Code');
    !defined('PROVEEDORES_CODIGO_ACTUALIZADO') && define('PROVEEDORES_CODIGO_ACTUALIZADO', 'geactualiseerde Code');
    !defined('PROVEEDORES_CODIGOINCIDENCIA_BORRADO') && define('PROVEEDORES_CODIGOINCIDENCIA_BORRADO', 'Code of verwijderd incidentie!');
    !defined('PROVEEDORES_INCIDENCIA_CODIGO') && define('PROVEEDORES_INCIDENCIA_CODIGO', 'Code');
    !defined('PROVEEDORES_JOIN') && define('PROVEEDORES_JOIN', 'Lijst van de leveranciers en incidenten');

    !defined('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES') && define('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES', 'Beheer gevoelige gebieden');
    !defined('PROVEEDORES_ANADIR_AREASENSIBLE') && define('PROVEEDORES_ANADIR_AREASENSIBLE', 'Voeg gevoelig gebied');
    !defined('AREASENSIBLE_QUIERE_BORRAR') && define('AREASENSIBLE_QUIERE_BORRAR', 'Verwijder gevoelig gebied');
    !defined('PROVEEDORES_BORRAR_AREASSENSIBLES') && define('PROVEEDORES_BORRAR_AREASSENSIBLES', 'Verwijder gevoelig gebied');
    !defined('PROVEEDORES_AREA_SENSIBLE_BORRADA') && define('PROVEEDORES_AREA_SENSIBLE_BORRADA', 'gevoelig gebied verwijderd!');
    !defined('PROVEEDORES_MODIFICAR_AREASENSIBLE') && define('PROVEEDORES_MODIFICAR_AREASENSIBLE', 'Wijzig gevoelig gebied');
    !defined('PROVEEDORES_AREASENSIBLE_ANADIDA') && define('PROVEEDORES_AREASENSIBLE_ANADIDA', 'gevoelig gebied toegevoegd!');
    !defined('PROVEEDORES_LISTA_AREASSENSIBLES') && define('PROVEEDORES_LISTA_AREASSENSIBLES', 'gevoelige gebieden lijst');
    !defined('PROVEEDORES_AREASSENSIBLES_ADVERTICE') && define('PROVEEDORES_AREASSENSIBLES_ADVERTICE', 'Klik op een gevoelig gebied om te bewerken');
    !defined('PROVEEDORES_AREASENSIBLE') && define('PROVEEDORES_AREASENSIBLE', 'kwetsbaar gebied');
    !defined('PROVEEDORES_AREASENSIBLE_ACTUALIZADA') && define('PROVEEDORES_AREASENSIBLE_ACTUALIZADA', 'gevoelig gebied op de hoogte!');


// Inspecties-Inspecties
    !defined('INSPECCIONES_PRINTSCREEN') && define('INSPECCIONES_PRINTSCREEN', 'inspectie Details');
    !defined('INSPECCIONES_BUSCAR') && define('INSPECCIONES_BUSCAR', 'Zoek inspectie');
    !defined('INSPECCIONES_LISTA') && define('INSPECCIONES_LISTA', 'Lijst van de inspecties');
    !defined('INSPECCIONES_BORRAR_INSPECCION') && define('INSPECCIONES_BORRAR_INSPECCION', 'Clear inspectie');
    !defined('INSPECCIONES_QUIERE_BORRAR') && define('INSPECCIONES_QUIERE_BORRAR', 'Verwijder inspectie?');
    !defined('INSPECCIONES_INSPECCION_BORRADA') && define('INSPECCIONES_INSPECCION_BORRADA', 'verwijderd Inspection!');
    !defined('INSPECCIONES_ANADIR_INSPECCION') && define('INSPECCIONES_ANADIR_INSPECCION', 'Voeg inspectie');
    !defined('INSPECCIONES_CAMBIAR_INSPECCION') && define('INSPECCIONES_CAMBIAR_INSPECCION', 'Bewerken Watch');
    !defined('INSPECCIONES_EDITAR_INSPECCION') && define('INSPECCIONES_EDITAR_INSPECCION', 'Bewerken inspectie');
    !defined('INSPECCIONES_ADMINISTRAR_INSPECCIONES') && define('INSPECCIONES_ADMINISTRAR_INSPECCIONES', 'Manage controles');
    !defined('INSPECCIONES_THEAD_ADVERTICE') && define('INSPECCIONES_THEAD_ADVERTICE', 'Klik op een datum voor meer informatie');


// Inspecteurs-Inspecteurs
    !defined('INSPECCIONES_INSPECTOR') && define('INSPECCIONES_INSPECTOR', 'inspecteur');
    !defined('INSPECTORES_LISTA') && define('INSPECTORES_LISTA', 'Lijst van de inspecteurs');
    !defined('BORRAR_INSPECTOR') && define('BORRAR_INSPECTOR', 'Verwijder inspecteur');
    !defined('INSPECTORES_EDITAR_INSPECTOR') && define('INSPECTORES_EDITAR_INSPECTOR', 'Bewerken inspecteur');
    !defined('INSPECTORES_ADMINISTRAR_INSPECTORES') && define('INSPECTORES_ADMINISTRAR_INSPECTORES', 'Manage inspecteurs');
    !defined('INSPECTORES_ANADIR_INSPECTOR') && define('INSPECTORES_ANADIR_INSPECTOR', 'Voeg inspecteur');
    !defined('INSPECTORES_CAMBIAR_INSPECTOR') && define('INSPECTORES_CAMBIAR_INSPECTOR', 'Change inspecteur');
    !defined('INSPECTORES_QUIERE_BORRAR') && define('INSPECTORES_QUIERE_BORRAR', 'Verwijder inspecteur?');
    !defined('INSPECTORES_INSPECTOR_BORRADO') && define('INSPECTORES_INSPECTOR_BORRADO', 'verwijderd inspecteur!');

// Brandblusapparaten-Brandblusapparaten

    !defined('EXTINTORES_EXTINTOR') && define('EXTINTORES_EXTINTOR', 'extinguisher');
    !defined('EXTINTORES_EXTINTORES') && define('EXTINTORES_EXTINTORES', 'brandblussers');
    !defined('EXTINTORES_CLIENTE') && define('EXTINTORES_CLIENTE', 'Klant');
    !defined('EXTINTORES_EJECUCION') && define('EXTINTORES_EJECUCION', 'Running');
    !defined('EXTINTORES_LISTA') && define('EXTINTORES_LISTA', 'Lijst brandblussers');
    !defined('EXTINTORES_DETALLES') && define('EXTINTORES_DETALLES', 'gegevens brandblusser');
    !defined('EXTINTORES_NUMEXTINTORES') && define('EXTINTORES_NUMEXTINTORES', 'Aantal blussers');
    !defined('EXTINTORES_PROXIMA_EJECUCION') && define('EXTINTORES_PROXIMA_EJECUCION', 'Next Execution');
    !defined('EXTINTORES_FECHA_FABRICACION') && define('EXTINTORES_FECHA_FABRICACION', 'Datum van fabricage');
    !defined('EXTINTORES_AGENTE_EXTINTOR') && define('EXTINTORES_AGENTE_EXTINTOR', 'blusmiddelen');
    !defined('EXTINTORES_NDESERIE') && define('EXTINTORES_NDESERIE', 'Serial Number');
    !defined('EXTINTORES_BORRAR_EXTINTOR') && define('EXTINTORES_BORRAR_EXTINTOR', 'Verwijder Extinguisher');
    !defined('EXTINTOR_QUIERE_BORRAR') && define('EXTINTOR_QUIERE_BORRAR', 'Verwijder blusser / s');
    !defined('EXTINTORES_EXTINTOR_BORRADO') && define('EXTINTORES_EXTINTOR_BORRADO', 'Uitlaat verwijderd');
    !defined('EXTINTORES_BUSCAR_EXTINTOR') && define('EXTINTORES_BUSCAR_EXTINTOR', 'Zoek Extinguisher');
    !defined('EXTINTORES_ANADIR_EXTINTOR') && define('EXTINTORES_ANADIR_EXTINTOR', 'Voeg Extinguisher');
    !defined('EXTINTORES_EXTINTOR_ANADIDO') && define('EXTINTORES_EXTINTOR_ANADIDO', 'Extinguisher toegevoegd');
    !defined('EXTINTORES_MODIFICAR_EXTINTOR') && define('EXTINTORES_MODIFICAR_EXTINTOR', 'Wijzigen Extinguisher');
    !defined('EXTINTORES_EDITAR_EXTINTOR') && define('EXTINTORES_EDITAR_EXTINTOR', 'Bewerken Extinguisher');
    !defined('EXTINTORES_ADMINISTRAR_EXTINTORES') && define('EXTINTORES_ADMINISTRAR_EXTINTORES', 'Manage brandblussers');
    !defined('EXTINTORES_THEAD_ADVERTICE') && define('EXTINTORES_THEAD_ADVERTICE', 'Klik op een brandblusser te bewerken');
    !defined('EXTINTORES_EXTINTOR_ACTUALIZADO') && define('EXTINTORES_EXTINTOR_ACTUALIZADO', 'Uitlaat vernieuwd!');


// Meetapparatuur-Meetapparatuur

    !defined('EQUIPOS_EQUIPO') && define('EQUIPOS_EQUIPO', 'Team');
    !defined('EQUIPOS_EQUIPOS') && define('EQUIPOS_EQUIPOS', 'Metrology');
    !defined('EQUIPOS_LISTA') && define('EQUIPOS_LISTA', 'Lijst van de meetapparatuur');
    !defined('EQUIPOS_MODELO') && define('EQUIPOS_MODELO', 'Model');
    !defined('EQUIPOS_FRECUENCALIB') && define('EQUIPOS_FRECUENCALIB', 'Kalibratie van apparatuur voor:');
    !defined('EQUIPOS_CRITERIO') && define('EQUIPOS_CRITERIO', 'criterium:');
    !defined('EQUIPOS_UBICACION') && define('EQUIPOS_UBICACION', 'Locatie:');
    !defined('EQUIPOS_ANADIR') && define('EQUIPOS_ANADIR', 'Voeg team mate');
    !defined('EQUIPOS_BORRAR') && define('EQUIPOS_BORRAR', 'Verwijder actieteam');
    !defined('EQUIPOS_QUIERE_BORRAR') && define('EQUIPOS_QUIERE_BORRAR', 'Verwijder team?');
    !defined('EQUIPO_BORRADO') && define('EQUIPO_BORRADO', 'verwijderd Team!');
    !defined('EQUIPOS_CAMBIAR') && define('EQUIPOS_CAMBIAR', 'Change Team');
    !defined('EQUIPOS_EDITAR') && define('EQUIPOS_EDITAR', 'Bewerken Team');
    !defined('EQUIPOS_ADMINISTRAR') && define('EQUIPOS_ADMINISTRAR', 'Manage Computer');
    !defined('EQUIPOS_THEAD_ADVERTICE') && define('EQUIPOS_THEAD_ADVERTICE', 'Klik op een team voor meer informatie');
    !defined('EQUIPOS_PRINT_DETAILS') && define('EQUIPOS_PRINT_DETAILS', 'Computer gegevens');
    !defined('EQUIPOS_CALIBRACION') && define('EQUIPOS_CALIBRACION', 'Calibration');


// Kalibraties-Kalibraties

    !defined('CALIBRACIONES_CALIBRACION') && define('CALIBRACIONES_CALIBRACION', 'Calibration');
    !defined('CALIBRACIONES_CALIBRACIONES') && define('CALIBRACIONES_CALIBRACIONES', 'Calibration');
    !defined('CALIBRACIONES_ENCALIBRACION') && define('CALIBRACIONES_ENCALIBRACION', 'In ijking');
    !defined('CALIBRACIONES_ENREPARACION') && define('CALIBRACIONES_ENREPARACION', 'In Repair');
    !defined('CALIBRACIONES_LISTA') && define('CALIBRACIONES_LISTA', 'kalibraties List');
    !defined('CALIBRACIONES_DETALLES') && define('CALIBRACIONES_DETALLES', 'kalibratie Details');
    !defined('CALIBRACIONES_BORRAR') && define('CALIBRACIONES_BORRAR', 'Delete Calibration');
    !defined('CALIBRACION_QUIERE_BORRAR') && define('CALIBRACION_QUIERE_BORRAR', 'Verwijder kalibratie / is');
    !defined('CALIBRACION_BORRADA') && define('CALIBRACION_BORRADA', 'Calibration verwijderd');
    !defined('BUSCAR_CALIBRACION') && define('BUSCAR_CALIBRACION', 'Zoek Calibration');
    !defined('CALIBRACIONES_ANADIR') && define('CALIBRACIONES_ANADIR', 'Voeg Calibration');
    !defined('CALIBRACION_ANADIDA') && define('CALIBRACION_ANADIDA', 'Calibration toegevoegd');
    !defined('CALIBRACIONES_MODIFICAR') && define('CALIBRACIONES_MODIFICAR', 'Wijzigen Calibration');
    !defined('CALIBRACIONES_EDITAR') && define('CALIBRACIONES_EDITAR', 'Bewerken Calibration');
    !defined('CALIBRACIONES_ADMINISTRAR') && define('CALIBRACIONES_ADMINISTRAR', 'Manage Kalibraties');
    !defined('CALIBRACIONES_THEAD_ADVERTICE') && define('CALIBRACIONES_THEAD_ADVERTICE', 'Klik op een kalibratie om te bewerken');
    !defined('CALIBRACION_ACTUALIZADA') && define('CALIBRACION_ACTUALIZADA', 'Calibration date');
    
    
    /** Added----------------------------------------------------------------------------------*/
    
    !defined('APROBADO') && define('APROBADO', 'Approved');
    !defined('DATABASE_USERNAME') && define('DATABASE_USERNAME', 'Name der Datenbank');
    !defined('DATABASE_PASSWORD') && define('DATABASE_PASSWORD', 'Benutzer-Passwort der Datenbank');
    !defined('DATABASE_HOST') && define('DATABASE_HOST', 'Server Name:');
    !defined('DATABASE_HOST_HELP') && define('DATABASE_HOST_HELP', 'ist in der Regel localhost erlauben als Standard..');
    !defined('DATABASE_NAME') && define('DATABASE_NAME', 'Name der Datenbank');
    !defined('DATABASE_NAME_HELP') && define('DATABASE_NAME_HELP', 'Der Name der Datenbank, die Tabellen in diesem Installer erstellt werden:');
    !defined('DATABASE_INSTALL_ADVICE') && define('DATABASE_INSTALL_ADVICE', 'Füllen Sie das Formular aus, um die Tabellen in der Datenbank zu erstellen. Hinweis: Denken Sie daran, die gleiche Verbindung in der Datei gesetzt .. / includes / mysql.php sollte. insltalación delete this wenn Sie fertig sind. ');
    !defined('NOMBRE_INCIDENCIA') && define('NOMBRE_INCIDENCIA', 'Name Issue');
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'File Search');
    !defined('IMAGEN_URL') && define('IMAGEN_URL', 'Link Bild');
    !defined('IMAGEN') && define('IMAGEN', 'Bild');
    !defined('IMAGEN_URLHELP') && define('IMAGEN_URLHELP', 'Sie sollte den Link zu dem Bild setzen');
    !defined('INCIDENCIA') && define('INCIDENCIA', 'Zahl');
    !defined('RECUERDE_LOS_CODIGOS') && define('RECUERDE_LOS_CODIGOS', '0 Keine Zwischenfälle <br /> <br instrumental 1 Nr. 2 Fehlendes Produkt /> <br /> <br /> Armen 3 Behandlung 4 Lack von Maßnahmen Schutz <br /> 5 Mangelnde Planung Arbeit <br /> 6 Fehlende Behandlungen <br /> Zertifikate 7 Mangelnde Kleidung, Toilettenartikel und persönliche Hygiene <br /> 8 Mangelnde Wartung und Reinigung des Fahrzeugs');
    !defined('ACTIVIDAD') && define('ACTIVIDAD', 'Aktivität');
    !defined('OBJETIVOS') && define('OBJETIVOS', 'Qualitätsziele.');
    !defined('CLIENTES') && define('CLIENTES', 'Client.');
    !defined('SATISFACCION') && define('SATISFACCION', 'Kundenzufriedenheit.');
    !defined('QUEJASCLIENTE') && define('QUEJASCLIENTE', 'Beschwerden.');
    !defined('INDICADORES_MEDICIONANALISISYMEJORA') && define('INDICADORES_MEDICIONANALISISYMEJORA', 'Indikatoren für MAM.');
    !defined('AUDITORIAS') && define('AUDITORIAS', 'Prüfung.');
    !defined('NOCONFORMIDADESYMEJORAS') && define('NOCONFORMIDADESYMEJORAS', 'Keine Zulassungen und Verbesserungen.');
    !defined('POLITICADECALIDAD') && define('POLITICADECALIDAD', 'Quality Policy');
    !defined('CAMBIOS') && define('CAMBIOS', 'Änderungen, die das System beeinträchtigen können.');
    !defined('RECOMENDACIONESYCONCLUSIONES') && define('RECOMENDACIONESYCONCLUSIONES', 'Empfehlungen und Schlussfolgerungen.');
    !defined('CODIGO_INCIDENCIA') && define('CODIGO_INCIDENCIA', 'Code des Ereignisses:');
    !defined('INSPECCIONES_CODIGOSINCIDENCIAS_HELP') && define('INSPECCIONES_CODIGOSINCIDENCIAS_HELP', 'Setzen Sie immer einen numerischen Code Andernfalls wird die Grafik von Vorfällen der Inspektionen nicht gezogen werden..');
    !defined('SELECCIONAR_Y_BORRAR') && define('SELECCIONAR_Y_BORRAR', 'Wählen und löschen');
    !defined('DISTRIBUIDO') && define('DISTRIBUIDO', 'verteilt');
    !defined('BORRAR_SELECCIONADOS') && define('BORRAR_SELECCIONADOS', 'Ausgewählte löschen');
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF', 'Du musst dich anmelden, um Ihre Dokumente zu verwalten.');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS_OFF') && define('MENU_ALT_ANOTAR_DOCUMENTOS_OFF', 'Sie müssen sich einloggen um einen Artikel zu schreiben.');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS_OFF') && define('MENU_ALT_BORRAR_DOCUMENTOS_OFF', 'Sie müssen sich anmelden, um ein Dokument zu löschen.');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS_OFF') && define('MENU_ALT_MODIFICAR_CATEGORIAS_OFF', 'Sie müssen sich anmelden um Kategorien bearbeiten.');
    !defined('MENU_OTROS_DOCUMENTOS') && define('MENU_OTROS_DOCUMENTOS', 'Ein weiteres Dokument Kontrolle.');
    !defined('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION') && define('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION', 'Incident Management Control');
    !defined('MENU_IMPRIMIR_REVSISTEMA') && define('MENU_IMPRIMIR_REVSISTEMA', 'Print System Review');
    !defined('REVSISTEMA_PRINT_DETAILS') && define('REVSISTEMA_PRINT_DETAILS', 'revision date');
    !defined('REVSISTEMA_INDICADORES') && define('REVSISTEMA_INDICADORES', 'Qualitätsindikatoren');
    !defined('REVSISTEMA_LISTA_PRINTSCREEN') && define('REVSISTEMA_LISTA_PRINTSCREEN', 'Patch-Liste');
    !defined('REVSISTEMA_NUM') && define('REVSISTEMA_NUM', 'Revision No');
    !defined('REVSISTEMA_ADVERTICE') && define('REVSISTEMA_ADVERTICE', 'klicken, um eine Testseite drucken');
    !defined('INDICADORES_NOCONFORMIDADESPORAREA') && define('INDICADORES_NOCONFORMIDADESPORAREA', 'das Scheitern Bereich');
    !defined('INDICADORES_INCIDENCIASDEINSPECCION') && define('INDICADORES_INCIDENCIASDEINSPECCION', 'Probleme bei der Inspektion Service');
    !defined('INDICADORES_DERECURSOS') && define('INDICADORES_DERECURSOS', 'REC-Anzeigen');
    !defined('INDICADORES_FORMACIONANUAL') && define('INDICADORES_FORMACIONANUAL', 'Trainingsstunden pro Jahr');
    !defined('INDICADORES_INCIDENCIASDEALMACEN') && define('INDICADORES_INCIDENCIASDEALMACEN', 'Trouble in Store');
    !defined('INDICADORES_DEPRODUCCION') && define('INDICADORES_DEPRODUCCION', 'Anzeigen OP (Betrieb)');
    !defined('INDICADORES_INCIDENCIASDEPROVEEDOR') && define('INDICADORES_INCIDENCIASDEPROVEEDOR', 'Trouble-Provider');
    !defined('EDITAR_BORRAR_DOCUMENTO') && define('EDITAR_BORRAR_DOCUMENTO', 'Bearbeiten und Löschen von Dateien');
    !defined('DOCUMENTOS_MODIFICADOS') && define('DOCUMENTOS_MODIFICADOS', 'geänderte Dokumente');
    !defined('EDITAR_BORRAR_MODIFDOC') && define('EDITAR_BORRAR_MODIFDOC', 'Bearbeiten und Löschen von Änderungen on the fly');
    !defined('DOCUMENTOS_IDSOLICITUD_HELP') && define('DOCUMENTOS_IDSOLICITUD_HELP', 'Put vorhergehenden id erscheint neben dem Eingabefeld');    
    !defined('DOCUMENTOS_LINK_HELP') && define('DOCUMENTOS_LINK_HELP', 'Setzen Sie die Adresse des Ordners Sie die Vorlage eingelegt, zum Beispiel:. /Uploads/Qualität/Document.pdf');
    !defined('DOCUMENTOS_CLAVE1_HELP') && define('DOCUMENTOS_CLAVE1_HELP', 'Setzen Sie sich verteilt das Dokument');
    !defined('AUDITOR_IMG') && define('AUDITOR_IMG', 'Abschlussprüfer img');
    !defined('AUDITORIAS_JOIN_HELP') && define('AUDITORIAS_JOIN_HELP', 'Wenn es leere Felder in der Spalte Prüfungen sind, ist die Nichteinhaltung nicht nunguna Audits oder internen Prüfungsbericht ist nicht (zB externe Audits)');
    !defined('OBJETIVOS_CAMBIAR_SEGUIMIENTO') && define('OBJETIVOS_CAMBIAR_SEGUIMIENTO', 'Task bearbeiten');
    !defined('OBJETIVOS_ADVERTICE') && define('OBJETIVOS_ADVERTICE', 'an einer Aufgabe zu ändern klicken Sie');
    !defined('SEGUIMIENTOS_CHANGE_DETAILS') && define('SEGUIMIENTOS_CHANGE_DETAILS', 'Aktivitäten für das Ziel:');
    !defined('TRABAJADOR_IMG') && define('TRABAJADOR_IMG', 'Arbeiter img');
    !defined('TRABAJADOR_THEAD_EDIT') && define('TRABAJADOR_THEAD_EDIT', 'bei einem Arbeitnehmer zu ändern Klicken Sie');
    !defined('TRABAJADOR_HA_HECHO') && define('TRABAJADOR_HA_HECHO', 'Arbeiter geschult');
    !defined('TRABAJADOR_ACTIVIDAD') && define('TRABAJADOR_ACTIVIDAD', 'Aktivität');
    !defined('CODIGOSINCIDENCIAS_LASTID_HELP') && define('CODIGOSINCIDENCIAS_LASTID_HELP', 'Setzen Sie die nächst höhere Code-Nummer, die neben dem Eingabefeld angezeigt wird, durch die Regel-Codes. Der Code du siehst, ist der letzte, der eingefügt werden soll.');
    !defined('PROVEEDORES_NOMBRE_INCIDENCIA') && define('PROVEEDORES_NOMBRE_INCIDENCIA', 'name Thema');
    !defined('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA') && define('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA', 'Add Event-Code');
    !defined('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA') && define('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA', 'Change-Ereignis-Code');
    !defined('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'verwalten Zwischenfälle Codes');
    !defined('INSPECCIONES_CODIGOS_ADVERTICE') && define('INSPECCIONES_CODIGOS_ADVERTICE', 'auf einem Code zu ändern Klicken Sie');
    !defined('INSPECCIONES_LISTA_CODIGOS') && define('INSPECCIONES_LISTA_CODIGOS', 'Inzidenz Code Liste');
    !defined('INSPECTORES_INSPECTOR_ANADIDO') && define('INSPECTORES_INSPECTOR_ANADIDO', 'Added ein Inspektor');


?>

    