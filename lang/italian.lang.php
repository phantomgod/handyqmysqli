<?php
/**
-----------------
Language: Italian

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
-----------------
*/

    !defined('PAGE_TITLE') && define('PAGE_TITLE', 'Handy-Q. Qualità online');
    !defined('HEADER_TITLE') && define('HEADER_TITLE', 'Sistemi di Qualità');
    !defined('SITE_NAME') && define('SITE_NAME', 'Empresa, S.A.');
    !defined('SLOGAN') && define('SLOGAN', 'Zero difetti');
    !defined('HEADING') && define('HEADING', 'Heading');

// Generale
    !defined('DOCUMENTOS') && define('DOCUMENTOS', 'Documenti');
    !defined('ADVERTICE') && define('ADVERTICE', 'Clicca per i dettagli');
    !defined('FECHA') && define('FECHA', 'Data');
    !defined('ANO') && define('ANO', 'Anno');
    !defined('HORA') && define('HORA', 'Time');
    !defined('RESULTADO') && define('RESULTADO', 'Risultato');
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'Documentazione');
    !defined('BACK') && define('BACK', 'Indietro');
    !defined('ESTADO') && define('ESTADO', 'Stato');
    !defined('ACTUALIZAR') && define('ACTUALIZAR', 'Aggiorna');
    !defined('ENVIAR') && define('ENVIAR', 'Invia');
    !defined('ANADIR') && define('ANADIR', 'Aggiungi');
    !defined('BORRAR') && define('BORRAR', 'Cancella');
    !defined('DELETE_ADVERTICE') && define('DELETE_ADVERTICE', 'Il pulsante Elimina nella parte inferiore della lista');
    !defined('IDIOMA') && define('IDIOMA', 'Seleziona la lingua');
    !defined('VISIBLE') && define('VISIBLE', 'visibile');
    !defined('CODIGO') && define('CODIGO', 'Codice');
    !defined('SELECCIONE_EL_CODIGO') && define('SELECCIONE_EL_CODIGO', 'Seleziona il codice. default 0-codice appare tranquillo. Se appare un altro codice, selezionare dall´elenco a discesa. Anche se la descrizione viene visualizzata, basta prendere il valore numerico al fine di automatizzare Incidente ispezione indicatore grafico ');
    !defined('ANO') && define('ANO', 'Anno');
    !defined('ABRIR') && define('ABRIR', 'Apri');
    !defined('BUSCAR') && define('BUSCAR', 'Cerca');
    !defined('RESPONSABLE') && define('RESPONSABLE', 'Manager');
    !defined('TERMINACION') && define('TERMINACION', 'terminazione');
    !defined('LIMITE') && define('LIMITE', 'limite');
    !defined('OBSERVACIONES') && define('OBSERVACIONES', "Commenti");
    !defined('BORRAR') && define('BORRAR', 'Cancella');
    !defined('CLIENTE') && define('CLIENTE', 'Cliente');
    !defined('INDICADOR') && define('INDICADOR', 'display');
    !defined('ACTIVO') && define('ACTIVO', 'Active');
    !defined('INACTIVO') && define('INACTIVO', 'Off');
    !defined('VOLVER') && define('VOLVER', 'Indietro');
    !defined('MODIFICAR') && define('MODIFICAR', 'Modifica');
    !defined('CIF') && define('CIF', 'CIF');
    !defined('DIRECCION') && define('DIRECCION', 'indirizzo');
    !defined('COMENTARIOS') && define('COMENTARIOS', "Commenti");
    !defined('ANO_MES_DIA') && define('ANO_MES_DIA', 'Anno-Mese-Giorno');
    !defined('LISTA') && define('LISTA', 'lista');
    !defined('PRESENTACION') && define('PRESENTACION', 'Handy-q è un software per la gestione di ufficio online di qualità');
    !defined('AYUDA') && define('AYUDA', 'Help');
    !defined('ULTIMO_COMUNICADO') && define('ULTIMO_COMUNICADO', 'affermazione');
    !defined('IMPRIMIR') && define('IMPRIMIR', 'Stampa Registrazione');
    !defined('IMPRIMIR_PAPEL') && define('IMPRIMIR_PAPEL', 'stampa su carta');
    !defined('ERROR_ANADIR_REGISTRO') && define('ERROR_ANADIR_REGISTRO', 'Impossibile aggiungere record');
    !defined('CONTENIDO') && define('CONTENIDO', 'Contenuti');
    !defined('VEHICULOS') && define('VEHICULOS', 'Veicoli');
    !defined('BACKUP') && define('BACKUP', 'Backup DB');
    !defined('ESCRITORIO') && define('ESCRITORIO', 'i messaggi di input ->');
    !defined('CUESTIONARIO_TALLER') && define('CUESTIONARIO_TALLER', 'Questionario bottega');
    !defined('PRODUCCION') && define('PRODUCCION', 'produzione');
    !defined('CALIDAD') && define('CALIDAD', 'qualità');
    !defined('ALMACEN') && define('ALMACEN', 'Store');
    !defined('COMPRAS') && define('COMPRAS', 'Shopping');
    !defined('FORMACION') && define('FORMACION', 'Training');
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'Documentazione');
    !defined('TALLER') && define('TALLER', 'bottega');
    !defined('PAGINAR') && define('PAGINAR', 'Impaginazione');
    !defined('DESCRIPCION') && define('DESCRIPCION', 'Descrizione');
    !defined('ACCION') && define('ACCION', 'azione');
    !defined('PROCEDIMIENTO') && define('PROCEDIMIENTO', 'Procedura');
    !defined('LUGAR') && define('LUGAR', 'Location');
    !defined('DESVIACION') && define('DESVIACION', 'deviazione');
    !defined('OPERATIVO') && define('OPERATIVO', 'operativo');
    !defined('BAJA') && define('BAJA', 'basso');
    !defined('EDITAR') && define('EDITAR', 'Modifica');
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'Cerca file');

// Menu


    !defined('MENU_DOCUMENTOS') && define('MENU_DOCUMENTOS', 'Documenti.');
    !defined('MENU_BDDOCS') && define('MENU_BDDOCS', 'docs BD.');
    !defined('MENU_MODIFDOCS') && define('MENU_MODIFDOCS', 'Modifica documenti..');
    !defined('MENU_AUDITORIAS') && define('MENU_AUDITORIAS', 'audit');
    !defined('MENU_AINFORMES') && define('MENU_AINFORMES', 'AI_informes');
    !defined('MENU_AUDITORES') && define('MENU_AUDITORES', 'conti');
    !defined('MENU_INSPECCIONES') && define('MENU_INSPECCIONES', 'ispezioni');
    !defined('MENU_INSPECTORES') && define('MENU_INSPECTORES', 'ispettore');
    !defined('MENU_OBJETIVOS') && define('MENU_OBJETIVOS', 'Millennium');
    !defined('MENU_PARTES') && define('MENU_PARTES', 'Fogli di lavoro');
    !defined('MENU_TRABAJADORES') && define('MENU_TRABAJADORES', 'Lavoro');
    !defined('MENU_SERVICIOS') && define('MENU_SERVICIOS', 'Servizi');
    !defined('MENU_PROVEEDORES') && define('MENU_PROVEEDORES', 'Fornitori');
    !defined('MENU_FORMACION') && define('MENU_FORMACION', 'Corsi');
    !defined('MENU_AVISOS') && define('MENU_AVISOS', 'Informazioni');
    !defined('MENU_ENCUESTAS') && define('MENU_ENCUESTAS', 'Sondaggi');
    !defined('MENU_NCS') && define('MENU_NCS', 'No conformidades');
    !defined('MENU_REVSISTEMA') && define('MENU_REVSISTEMA', 'Revisar sistema');
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS', 'Aggiungi un documento rapidamente (per che si conosce a memoria il codice della categoria a cui appartiene, o modifica un documento esistente per gli errori quando hanno segnato');
    !defined('MENU_ALT_MAPA_DOCUMENTOS') && define('MENU_ALT_MAPA_DOCUMENTOS', 'Mappa documento: consente di visualizzare le nostre categorie albero documentari di documenti');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS') && define('MENU_ALT_ANOTAR_DOCUMENTOS', 'annotazioni in un documento: modo corretto per annotare un documento di questo invia una richiesta all´amministratore per l´approvazione del documento da allora vengono visualizzati nell´elenco generale..');
    !defined('MENU_ALT_ANOTAR_DOCMANAGER') && define('MENU_ALT_ANOTAR_DOCMANAGER', 'Inserire un documento direttamente nel database, per i documenti utilizzati di frequente.');
    !defined('MENU_ALT_EDITAR_BDDOC') && define('MENU_ALT_EDITAR_BDDOC', 'Modifica i documenti vengono inseriti direttamente nel database.');
    !defined('MENU_ALT_APROBAR_DOCUMENTOS') && define('MENU_ALT_APROBAR_DOCUMENTOS', 'Dà un documento che è stato detto in precedenza.');
    !defined('MENU_ALT_SUBIR_DOCUMENTOS') && define('MENU_ALT_SUBIR_DOCUMENTOS', 'Carica i documenti di upload:');
    !defined('MENU_ALT_BUSCAR_DOCUMENTOS') && define('MENU_ALT_BUSCAR_DOCUMENTOS', 'Cercare un documento');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS') && define('MENU_ALT_BORRAR_DOCUMENTOS', 'Eliminare un documento');
    !defined('MENU_ALT_LISTA_DOCUMENTOS') && define('MENU_ALT_LISTA_DOCUMENTOS', 'Elenco generale dei documenti: elenco ordinato per id documento');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS') && define('MENU_ALT_MODIFICAR_CATEGORIAS', 'Gestisce categoria albero documentario:. aggiungere, modificare, cancellare');
    !defined('MENU_ALT_MODIFDOC') && define('MENU_ALT_MODIFDOC', 'Gestione modifiche ai documenti: modificare nota o le modifiche apportate ai documenti specifici');
    !defined('MENU_ALT_BORRAR_MODIFDOC') && define('MENU_ALT_BORRAR_MODIFDOC', 'Elimina le modifiche apportate ai documenti specifici');
    !defined('MENU_ALT_DOC_PRINTSCREEN') && define('MENU_ALT_DOC_PRINTSCREEN', 'inserisce visualizzare i documenti direttamente nel database, quelli di grande utilità.');
    !defined('MENU_ALT_ADMINISTRAR_AUDITORIAS') && define('MENU_ALT_ADMINISTRAR_AUDITORIAS', 'Gestione di controllo');
    !defined('MENU_ALT_ADMINISTRAR_AINFORMES') && define('MENU_ALT_ADMINISTRAR_AINFORMES', 'Gestione relazioni di audit»');
    !defined('MENU_ALT_IMPRIMIR_AUDITORIAS') && define('MENU_ALT_IMPRIMIR_AUDITORIAS', 'audit Stampa');
    !defined('MENU_ALT_IMPRIMIR_AINFORMES') && define('MENU_ALT_IMPRIMIR_AINFORMES', 'Stampa relazione di revisione');
    !defined('MENU_ALT_BORRAR_AUDITORIAS') && define('MENU_ALT_BORRAR_AUDITORIAS', 'audit Elimina');
    !defined('MENU_ALT_BORRAR_AINFORMES') && define('MENU_ALT_BORRAR_AINFORMES', 'Elimina relazione di revisione');
    !defined('MENU_ALT_BUSCAR_AUDITORIAS') && define('MENU_ALT_BUSCAR_AUDITORIAS', 'audit Search');
    !defined('MENU_ALT_BUSCAR_AINFORMES') && define('MENU_ALT_BUSCAR_AINFORMES', 'relazione di audit Ricerca');
    !defined('MENU_ALT_LISTA_AUDITORIAS') && define('MENU_ALT_LISTA_AUDITORIAS', 'Lista audit');
    !defined('MENU_ALT_LISTA_AINFORMES') && define('MENU_ALT_LISTA_AINFORMES', 'Elenco delle relazioni di audit');
    !defined('MENU_ALT_ADMINISTRAR_AUDITOR') && define('MENU_ALT_ADMINISTRAR_AUDITOR', 'Gestione sindaco');
    !defined('MENU_ALT_IMPRIMIR_AUDITOR') && define('MENU_ALT_IMPRIMIR_AUDITOR', 'revisore dei conti Stampa');
    !defined('MENU_ALT_BORRAR_AUDITOR') && define('MENU_ALT_BORRAR_AUDITOR', 'revisore Elimina');
    !defined('MENU_ALT_ADMINISTRAR_INSPECCION') && define('MENU_ALT_ADMINISTRAR_INSPECCION', 'Gestione ispezioni');
    !defined('MENU_ALT_IMPRIMIR_INSPECCION') && define('MENU_ALT_IMPRIMIR_INSPECCION', 'Stampa di controllo');
    !defined('MENU_ALT_BORRAR_INSPECCION') && define('MENU_ALT_BORRAR_INSPECCION', 'Clear ispettorato');
    !defined('MENU_ALT_BUSCAR_INSPECCION') && define('MENU_ALT_BUSCAR_INSPECCION', 'ispezione Ricerca');
    !defined('MENU_ALT_JOIN_INSPECCIONES') && define('MENU_ALT_JOIN_INSPECCIONES', 'Numero di ispezioni per servizio');
    !defined('MENU_ALT_ADMINISTRAR_INSPECTOR') && define('MENU_ALT_ADMINISTRAR_INSPECTOR', 'Gestione ispettori');
    !defined('MENU_ALT_IMPRIMIR_INSPECTOR') && define('MENU_ALT_IMPRIMIR_INSPECTOR', 'ispettori di stampa');
    !defined('MENU_ALT_BORRAR_INSPECTOR') && define('MENU_ALT_BORRAR_INSPECTOR', 'Cancella ispettori');
    !defined('MENU_ALT_ADMINISTRAR_OBJETIVOS') && define('MENU_ALT_ADMINISTRAR_OBJETIVOS', 'Gestione obiettivi: Aggiungere e modificare i');
    !defined('MENU_ALT_IMPRIMIR_OBJETIVOS') && define('MENU_ALT_IMPRIMIR_OBJETIVOS', 'Mostra i dettagli di destinazione');
    !defined('MENU_ALT_BORRAR_OBJETIVOS') && define('MENU_ALT_BORRAR_OBJETIVOS', 'obiettivi chiari»');
    !defined('MENU_ALT_BUSCAR_OBJETIVOS') && define('MENU_ALT_BUSCAR_OBJETIVOS', 'gli obiettivi della ricerca');
    !defined('MENU_ALT_LISTA_OBJETIVOS') && define('MENU_ALT_LISTA_OBJETIVOS', 'Wish List');
    !defined('MENU_ALT_ADDTASK_OBJETIVOS') && define('MENU_ALT_ADDTASK_OBJETIVOS', 'Aggiungi un compito a un bersaglio');
    !defined('MENU_ALT_JOIN_OBJETIVOS') && define('MENU_ALT_JOIN_OBJETIVOS', 'Mostra i compiti che corrispondono a ciascun obiettivo');
    !defined('MENU_ALT_ADMINISTRAR_PARTES') && define('MENU_ALT_ADMINISTRAR_PARTES', 'Gestione parti di lavoro: aggiungere e modificare i');
    !defined('MENU_ALT_IMPRIMIR_PARTES') && define('MENU_ALT_IMPRIMIR_PARTES', 'Mostra i dettagli del partito del');
    !defined('MENU_ALT_BORRAR_PARTES') && define('MENU_ALT_BORRAR_PARTES', 'parti Elimina');
    !defined('MENU_ALT_BUSCAR_PARTES') && define('MENU_ALT_BUSCAR_PARTES', 'Cerca Feste');
    !defined('MENU_ALT_ADMINISTRAR_EXTINTORES') && define('MENU_ALT_ADMINISTRAR_EXTINTORES', 'Gestione estintori: Aggiungere e modificare i');
    !defined('MENU_ALT_IMPRIMIR_EXTINTORES') && define('MENU_ALT_IMPRIMIR_EXTINTORES', 'Mostra dettagli estintore');
    !defined('MENU_ALT_BORRAR_EXTINTORES') && define('MENU_ALT_BORRAR_EXTINTORES', 'Cancella estintori');
    !defined('MENU_ALT_BUSCAR_EXTINTORES') && define('MENU_ALT_BUSCAR_EXTINTORES', 'Cerca estintore');
    !defined('MENU_ALT_LISTA_EXTINTORES') && define('MENU_ALT_LISTA_EXTINTORES', 'Elenca estintori');
    !defined('MENU_ALT_ADMINISTRAR_TRABAJADORES') && define('MENU_ALT_ADMINISTRAR_TRABAJADORES', 'Gestione lavoratori: Aggiungere e modificare i');
    !defined('MENU_ALT_BORRAR_TRABAJADORES') && define('MENU_ALT_BORRAR_TRABAJADORES', 'Cancella i dipendenti');
    !defined('MENU_ALT_ADMINISTRAR_SERVICIOS') && define('MENU_ALT_ADMINISTRAR_SERVICIOS', 'Gestione Servizi: Aggiungere e modificare i');
    !defined('MENU_ALT_BORRAR_SERVICIOS') && define('MENU_ALT_BORRAR_SERVICIOS', 'servizi Elimina');
    !defined('MENU_ALT_CONTROLAVISOS') && define('MENU_ALT_CONTROLAVISOS', 'Controlla per le segnalazioni di');
    !defined('MENU_ALT_GRAFICAVISOS') && define('MENU_ALT_GRAFICAVISOS', 'avvertimenti grafici per mesi');
    !defined('MENU_ALT_ADMINISTRAR_FORMACION') && define('MENU_ALT_ADMINISTRAR_FORMACION', 'Gestione Formazione: Aggiungere e modificare i');
    !defined('MENU_ALT_BORRAR_FORMACION') && define('MENU_ALT_BORRAR_FORMACION', 'Elimina la formazione di');
    !defined('MENU_ALT_LISTA_FORMACION') && define('MENU_ALT_LISTA_FORMACION', 'Lista Corso');
    !defined('MENU_ALT_JOIN_FORMACION') && define('MENU_ALT_JOIN_FORMACION', 'Corsi per lavoratore');
    !defined('MENU_ALT_ADMINISTRAR_EQUIPOS') && define('MENU_ALT_ADMINISTRAR_EQUIPOS', 'Gestione apparecchi di misurazione: Aggiungere e modificare i');
    !defined('MENU_ALT_IMPRIMIR_EQUIPOS') && define('MENU_ALT_IMPRIMIR_EQUIPOS', 'Consente di visualizzare i dettagli degli strumenti di misura');
    !defined('MENU_ALT_BORRAR_EQUIPOS') && define('MENU_ALT_BORRAR_EQUIPOS', 'squadra di azione Elimina');
    !defined('MENU_ALT_BUSCAR_EQUIPOS') && define('MENU_ALT_BUSCAR_EQUIPOS', 'squadra di ricerca come');
    !defined('MENU_ALT_LISTA_EQUIPOS') && define('MENU_ALT_LISTA_EQUIPOS', 'Elenco delle attrezzature di misura');
    !defined('MENU_ALT_ADMINISTRAR_CALIBRACIONES') && define('MENU_ALT_ADMINISTRAR_CALIBRACIONES', 'Gestione calibrazioni: Aggiungere e modificare i');
    !defined('MENU_ALT_IMPRIMIR_CALIBRACIONES') && define('MENU_ALT_IMPRIMIR_CALIBRACIONES', 'Visualizza i dettagli di calibrazione');
    !defined('MENU_ALT_BORRAR_CALIBRACIONES') && define('MENU_ALT_BORRAR_CALIBRACIONES', 'Cancella calibrazioni');
    !defined('MENU_ALT_BUSCAR_CALIBRACIONES') && define('MENU_ALT_BUSCAR_CALIBRACIONES', 'calibrazione Ricerca');
    !defined('MENU_ALT_LISTA_CALIBRACIONES') && define('MENU_ALT_LISTA_CALIBRACIONES', 'Lista calibrazioni');
    !defined('MENU_ALT_JOIN_CALIBRACIONES') && define('MENU_ALT_JOIN_CALIBRACIONES', 'Mostra le tarature per squadra');


// Surveys at SGC

    !defined('CUESTIONARIO_TRATAMIENTOS') && define('CUESTIONARIO_TRATAMIENTOS', 'Questionario servizio');
    !defined('CUESTIONARIO_CALIDAD') && define('CUESTIONARIO_CALIDAD', 'Questionario per dep qualità.');
    !defined('CUESTIONARIO_ALMACEN') && define('CUESTIONARIO_ALMACEN', 'Questionario al negozio');
    !defined('CUESTIONARIO_COMPRAS') && define('CUESTIONARIO_COMPRAS', 'Questionario al carrello');
    !defined('CUESTIONARIO_FORMACION') && define('CUESTIONARIO_FORMACION', 'Questionario formazione');
    !defined('CUESTIONARIO_DOCUMENTACION') && define('CUESTIONARIO_DOCUMENTACION', 'Questionario ´materiale');
    !defined('CUESTIONARIO_LEGIONELLA') && define('CUESTIONARIO_LEGIONELLA', 'Questionario di legionella');


// Indicatori
// Indicatori

    !defined('INDICADORES_INDICADORES') && define('INDICADORES_INDICADORES', "indicatori");
    !defined('INDICADORES_NCSPORAREA') && define('INDICADORES_NCSPORAREA', 'Numero di non conformità per area');
    !defined('INDICADORES_DESVIACIONCIERRESNCS') && define('INDICADORES_DESVIACIONCIERRESNCS', 'non conformità deviazioni di chiusura');
    !defined('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR') && define('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR', 'Numero totale di ore di formazione per dipendente');
    !defined('INDICADORES_GRAFICACONTROLAVISOS') && define('INDICADORES_GRAFICACONTROLAVISOS', 'Percentuale di annunci al mese');
    !defined('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES') && define('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES', 'Trouble in ispezioni di servizio');



// Avvisi

    !defined('AVISOS_AVISOS') && define('AVISOS_AVISOS', 'Informazioni');
    !defined('AVISOS_AVISO') && define('AVISOS_AVISO', 'Attenzione!');
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'Elenco delle notifiche');
    !defined('AVISOS_DETALLES') && define('AVISOS_DETALLES', 'Dettagli delle notifiche');
    !defined('AVISOS_COMUNICADOPOR') && define('AVISOS_COMUNICADOPOR', 'del rapporto');
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'Elenco di notifica del desktop');
    !defined('AVISOS_PONERAVISO') && define('AVISOS_PONERAVISO', 'Inserire un annuncio del desktop');
    !defined('AVISOS_THEAD_ADVERTICE') && define('AVISOS_THEAD_ADVERTICE', 'Clicca su un link per visualizzare i dettagli della comunicazione');
    !defined('AVISOS_AVISO_BORRADO') && define('AVISOS_AVISO_BORRADO', 'Warning cancellato!');
    !defined('AVISOS_ADMIN') && define('AVISOS_ADMIN', 'Gestione notifiche desktop');
    !defined('AVISOS_DELETE') && define('AVISOS_DELETE', 'messaggio chiaro');
    !defined('AVISOS_PONER_AVISO')&&  define('AVISOS_PONER_AVISO', 'Poner aviso');
 


// Documenti

    !defined('DOCUMENTOS_MAPA') && define('DOCUMENTOS_MAPA', 'Mappa documento');
    !defined('DOCUMENTOS_DOCUMENTO') && define('DOCUMENTOS_DOCUMENTO', 'documento');
    !defined('APROBAR_DOCUMENTOS') && define('APROBAR_DOCUMENTOS', 'approvare i documenti');
    !defined('BORRAR_DOCUMENTO') && define('BORRAR_DOCUMENTO', 'Documento Elimina');
    !defined('SUBIR_DOCUMENTOS') && define('SUBIR_DOCUMENTOS', 'Documenti Carica');
    !defined('BUSCAR_DOCUMENTOS') && define('BUSCAR_DOCUMENTOS', 'Trova Documenti');
    !defined('DOCUMENTO_BORRADO') && define('DOCUMENTO_BORRADO', 'Libro cancellato!');
    !defined('NOMBRE_DOCUMENTO') && define('NOMBRE_DOCUMENTO', 'titolo');
    !defined('DOCUMENTO_AUTOR') && define('DOCUMENTO_AUTOR', 'Autore');
    !defined('DOCUMENTOS_ANADIR_DOCUMENTO') && define('DOCUMENTOS_ANADIR_DOCUMENTO', 'Aggiungi documento');
    !defined('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS') && define('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS', 'Gestione Documenti');
    !defined('DOCUMENTOS_CAMBIAR_DOCUMENTO') && define('DOCUMENTOS_CAMBIAR_DOCUMENTO', 'Modifica documento');
    !defined('DOCUMENTOS_IDSOLICITUD') && define('DOCUMENTOS_IDSOLICITUD', 'richiesta id');
    !defined('DOCUMENTOS_SECCIONID') && define('DOCUMENTOS_SECCIONID', 'sezione id');
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Clicca su un link per visualizzare i dettagli');
    !defined('DOCUMENTOS_THEAD_ADVERTICE_JOIN') && define('DOCUMENTOS_THEAD_ADVERTICE_JOIN', 'Clicca su un documento per mostrare i cambiamenti');
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'riveduto');
    !defined('DOCUMENTOS_PRINT_DETAILS') && define('DOCUMENTOS_PRINT_DETAILS', 'Dettagli documento');
    !defined('DOCUMENTOS_MODIFDOC_ADMIN') && define('DOCUMENTOS_MODIFDOC_ADMIN', 'Le modifiche ai documenti');
    !defined('DOCUMENTOS_ANOTAR_MODIFICACION') && define('DOCUMENTOS_ANOTAR_MODIFICACION', 'record modificato');
    !defined('DOCUMENTOS_EDITAR_MODIFICACION') && define('DOCUMENTOS_EDITAR_MODIFICACION', 'Modifica emendamento');
    !defined('DOCUMENTOS_NUMEROREVISION') && define('DOCUMENTOS_NUMEROREVISION', 'Revisione no');
    !defined('DOCUMENTOS_MODIFICACION') && define('DOCUMENTOS_MODIFICACION', 'Change');
    !defined('DOCUMENTOS_MODIFICACIONES') && define('DOCUMENTOS_MODIFICACIONES', 'Le modifiche apportate al documento:');
    !defined('DOCUMENTOS_CAPAPART') && define('DOCUMENTOS_CAPAPART', 'Book-sezione');
    !defined('DOCUMENTOS_LISTA') && define('DOCUMENTOS_LISTA', 'Lista dei documenti');
    !defined('DOCUMENTOS_FECHAMODIFICACION') && define('DOCUMENTOS_FECHAMODIFICACION', 'Data ultima modifica');
    !defined('DOCUMENTOS_MODIFICACIONES_DETALLES') && define('DOCUMENTOS_MODIFICACIONES_DETALLES', 'Dettagli del cambiamento»');
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Clicca su un documento per mostrare i cambiamenti');
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'riveduto');
    !defined('DOCUMENTOS_JOIN') && define('DOCUMENTOS_JOIN', 'Le modifiche per il documento');
    !defined('DOCUMENTOS_LISTA_MODIFICACIONES') && define('DOCUMENTOS_LISTA_MODIFICACIONES', 'Elenco delle patch');
    !defined('DOCUMENTOS_BORRAR_MODIFICACION') && define('DOCUMENTOS_BORRAR_MODIFICACION', 'Cancella emendamento');
    !defined('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR') && define('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR', 'Vuoi cancellare questo cambiamento?');
    !defined('DOCUMENTOS_QUIERE_BORRAR') && define('DOCUMENTOS_QUIERE_BORRAR', 'di voler cancellare questo documento?');
    !defined('DOCUMENTOS_MODIFDOC_DELETED') && define('DOCUMENTOS_MODIFDOC_DELETED', 'Modifica cancellata!');
    !defined('MODIFICACION_ANOTADA') && define('MODIFICACION_ANOTADA', 'Modifica annotata');
    !defined('DOCUMENTOS_ULTIMAS_MODIFICACIONES') && define('DOCUMENTOS_ULTIMAS_MODIFICACIONES', 'Ultima modifica');
    !defined('DOCUMENTOS_ULTIMA_REVISION') && define('DOCUMENTOS_ULTIMA_REVISION', 'Fare clic sul pulsante per controllare il documento annotato ultima revisione.');



// Documenti BD: DocManager

    !defined('DOCMANAGER_PRINT') && define('DOCMANAGER_PRINT', 'Visualizza documenti BD');
    !defined('DOCMANAGER_INSERT') && define('DOCMANAGER_INSERT', 'Inserire il documento al database');



// Conti

    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'Sindaco');
    !defined('AUDITORES_EDITAR_AUDITOR') && define('AUDITORES_EDITAR_AUDITOR', 'revisore Modifica');
    !defined('AUDITORES_AUDITOR_ACTUALIZADO') && define('AUDITORES_AUDITOR_ACTUALIZADO', 'revisore aggiornato!');
    !defined('AUDITORES_ADMINISTRAR_AUDITORES') && define('AUDITORES_ADMINISTRAR_AUDITORES', 'Gestione conti');
    !defined('AUDITORES_DETALLES') && define('AUDITORES_DETALLES', 'revisore dettagli');
    !defined('AUDITORES_QUIERE_BORRAR') && define('AUDITORES_QUIERE_BORRAR', 'revisore Elimina');
    !defined('AUDITORES_AUDITOR_BORRADO') && define('AUDITORES_AUDITOR_BORRADO', 'revisore cancellato!');
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Aggiungi revisore dei conti');
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'revisore Change');
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', 'Elenco dei revisori dei conti');
    !defined('AUDITOR_ADVERTICE') && define('AUDITOR_ADVERTICE', 'Clicca su un link per visualizzare i dettagli del revisore del');
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Elenco dei revisori dei conti');
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'revisore Elimina');
    !defined('AUDITORIAS_CUESTIONARIOALSERVICIO') && define('AUDITORIAS_CUESTIONARIOALSERVICIO', '* Arrivo scostamenti mensili a cura del cliente <br /> * Vedi per la mancanza di documentazione <br /> * Controllare la scorta minima veicolo <br /> * Verificare la pulizia e la manutenzione dei veicoli <br /> * Controlla gli ordini di lavoro complete <br /> * Verifica lavoro');
    !defined('AUDITORIAS_CUESTIONARIOACALIDAD') && define('AUDITORIAS_CUESTIONARIOACALIDAD', '* Verificare di aver aggiornato le regole (se applicabile) <br/> * Verificare che i documenti giusti sono distribuiti sistema e approvati. <br /> * Vedi archovo documento <br/> * Verificare l´elenco dei documenti validi viene aggiornato <br/> * Verificare la presenza di ritardi di operazioni pianificate (audit, gli obiettivi, la formazione, gli indicatori, le ispezioni) <br/> * Verificare che i dati vengono aggiornati nel database < br /> Verificare che un ingresso di fornitori di incidenza del BD. <br/> * Verificare di aver chiuso il NC-AACCPP se del caso, così come miglioramenti <br/> * Controllare che hanno reclami dei clienti partecipato <br/> Controlla indicatori di monitoraggio');
    !defined('AUDITORIAS_CUESTIONARIOALMACEN') && define('AUDITORIAS_CUESTIONARIOALMACEN', '* Vedi la sporcizia e il disordine su scaffali e le attrezzature di lavoro. <br/> * Controllare la sporcizia sul pavimento, o altri materiali di scarto. <br/> * Controllare la data di revisione, segnalazione e superstrada negli estintori. <br/> * Controllare che gli accessi sono chiari di parti, materiali, scatole o altri ostacoli che impediscono il passaggio di persone o di mezzi di trasporto <br/> * Controllare lo stato e l´adeguatezza contenitori. <br/> * Controllare lo stato della sicurezza in generale, le strutture elettriche e sistemi di illuminazione. <br/> * Verificare che gli estintori sono pulite, le schede di revisione corrente e si trova nelle aree in cui per loro. <br/> * Verificare che i prodotti sono esenti da corrosione. <br/> * Controllare stack up. <br/> * Verificare che i materiali non identificati. <br/> * Verifica assenza di depositi di cassonetti nelle aree di stoccaggio <br/> * fuoriuscite Controlla ');
    !defined('AUDITORIAS_CUESTIONARIOACOMPRAS') && define('AUDITORIAS_CUESTIONARIOACOMPRAS', '* Vedi per le certificazioni mancanti o approvazioni di fornitori e prodotti. <br/> * Verificare che tutti i problemi hanno ottenuto annotati con i fornitori. <br/> * Verificare se il personale conosce il modo giusto per la ricezione dei materiali. <br/> * Controllare che ogni fornitore ha valutato ed il risultato è stato segnato. <br/> * Controllare che le fatture o buoni d´ordine sono stati depositati in modo corretto e firmato da la persona che recepciona <br/> * Controllare l´approvazione di fatture con bolle di consegna');
    !defined('AUDITORIAS_CUESTIONARIOAFORMACION') && define('AUDITORIAS_CUESTIONARIOAFORMACION', '* Controllare lo stato record di aggiornamento di formazione nel database. <br/> * Controllare le carte. <br/> * Controllare convalida. <br/> * Controllare i corsi di insegnamento.');
    !defined('AUDITORIAS_CUESTIONARIOADOCUMENTACION') && define('AUDITORIAS_CUESTIONARIOADOCUMENTACION', '* Controllare gli stati recensione <br/> * Controllare lo stato di memorizzazione e file <br/> * Controllo della dichiarazione appropriata distribuzione...');
    !defined('AUDITORIAS_CUESTIONARIOATALLER') && define('AUDITORIAS_CUESTIONARIOATALLER', '-. misuratori controllato <br/> - Pulizie <br/> - Sicurezza e Prevenzione <br/> - Documentazione <br/> - Separazione delle aree - Identificazione del prodotto <br/> - <br/> operazioni di controllo ');



// Audit Report

    !defined('AINFORMES_JOIN') && define('AINFORMES_JOIN', 'Audit e non conformità');
    !defined('AINFORMES_BUSCAR') && define('AINFORMES_BUSCAR', 'relazione di revisione ricerca');
    !defined('AINFORMES_HOJA') && define('AINFORMES_HOJA', 'foglia');
    !defined('AINFORMES_EDITAR') && define('AINFORMES_EDITAR', 'Modifica relazione di revisione');
    !defined('AINFORMES_ADMINISTRAR') && define('AINFORMES_ADMINISTRAR', 'Gestione relazioni di audit');
    !defined('AINFORMES_NUMERO') && define('AINFORMES_NUMERO', 'AI n');
    !defined('AINFORMES_ANADIR') && define('AINFORMES_ANADIR', 'Aggiungi rapporto di audit');
    !defined('AINFORMES_CAMBIAR') && define('AINFORMES_CAMBIAR', 'Cambia relazione di revisione');
    !defined('AINFORMES_INFORME') && define('AINFORMES_INFORME', 'Rapporto di audit');
    !defined('AINFORMES_AREA_AUDITADA') && define('AINFORMES_AREA_AUDITADA', 'zona certificata');
    !defined('AINFORMES_OBJETO') && define('AINFORMES_OBJETO', 'oggetto');
    !defined('AINFORMES_ADVERTICE') && define('AINFORMES_ADVERTICE', 'Clicca su un link per visualizzare i dettagli');
    !defined('AINFORMES_LISTA_PRINTSCREEN') && define('AINFORMES_LISTA_PRINTSCREEN', 'Elenco delle relazioni di audit');
    !defined('AINFORMES_PRINT_DETAILS') && define('AINFORMES_PRINT_DETAILS', 'dettagli relazione di revisione');
    !defined('AINFORMES_PRINT_ADVERTICE') && define('AINFORMES_PRINT_ADVERTICE', 'dettagli');
    !defined('AINFORMES_BACK_TO_PRINTLIST') && define('AINFORMES_BACK_TO_PRINTLIST', 'Indietro alla lista');
    !defined('AINFORMES_AI') && define('AINFORMES_AI', 'audit interno');
    !defined('AINFORMES_BORRAR') && define('AINFORMES_BORRAR', 'Elimina relazione di revisione');
    !defined('AINFORMES_QUIERE_BORRAR') && define('AINFORMES_QUIERE_BORRAR', 'relazione di revisione Delete?');
    !defined('AINFORMES_INFORME_BORRADO') && define('AINFORMES_INFORME_BORRADO', 'Segnala cancellato!');
    !defined('AINFORMES_INFORME_ENVIAD0') && define('AINFORMES_INFORME_ENVIAD0', 'rapporto inviato');
    !defined('AINFORMES_PONER_OTRO') && define('AINFORMES_PONER_OTRO', 'Aggiungi un altro rapporto');
    !defined('AINFORMES_ACTUALIZADO') && define('AINFORMES_ACTUALIZADO', 'data Report');



// Audit

    !defined('AUDITORIAS_JOIN') && define('AUDITORIAS_JOIN', 'Audit e non conformità');
    !defined('AUDITORIAS_BUSCAR') && define('AUDITORIAS_BUSCAR', 'audit Search');
    !defined('AUDITORIAS_HOJA') && define('AUDITORIAS_HOJA', 'foglia');
    !defined('AUDITORIAS_EDITAR_AUDITORIA') && define('AUDITORIAS_EDITAR_AUDITORIA', 'auditing Modifica');
    !defined('AUDITORIAS_ADMINISTRAR_AUDITORIAS') && define('AUDITORIAS_ADMINISTRAR_AUDITORIAS', 'Gestione di controllo');
    !defined('AUDITORIAS_NUMERO_AUDITORIA') && define('AUDITORIAS_NUMERO_AUDITORIA', 'AI n');
    !defined('AUDITORIAS_ANADIR_AUDITORIA') && define('AUDITORIAS_ANADIR_AUDITORIA', 'Aggiungi audit');
    !defined('AUDITORIAS_CAMBIAR_AUDITORIA') && define('AUDITORIAS_CAMBIAR_AUDITORIA', 'auditing Change');
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Aggiungi revisore dei conti');
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'revisore Change');
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', 'Elenco dei revisori dei conti');
    !defined('AUDITORIAS_AUDITORIA') && define('AUDITORIAS_AUDITORIA', 'controllo');
    !defined('AUDITORIAS_AREA_AUDITADA') && define('AUDITORIAS_AREA_AUDITADA', 'zona certificata');
    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'Sindaco');
    !defined('AUDITORIAS_OBJETO') && define('AUDITORIAS_OBJETO', 'oggetto');
    !defined('AUDITORIAS_ADVERTICE') && define('AUDITORIAS_ADVERTICE', 'Clicca su un link per visualizzare i dettagli');
    !defined('AUDITORIAS_LISTA_PRINTSCREEN') && define('AUDITORIAS_LISTA_PRINTSCREEN', 'Lista audit');
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Elenco dei revisori dei conti');
    !defined('AUDITORIAS_PRINT_DETAILS') && define('AUDITORIAS_PRINT_DETAILS', 'Dettagli di controllo»');
    !defined('AUDITORIAS_PRINT_ADVERTICE') && define('AUDITORIAS_PRINT_ADVERTICE', 'dettagli');
    !defined('AUDITORIAS_BACK_TO_PRINTLIST') && define('AUDITORIAS_BACK_TO_PRINTLIST', 'Indietro alla lista');
    !defined('AUDITORIAS_AI') && define('AUDITORIAS_AI', 'audit interno');
    !defined('AUDITORIAS_BORRAR_AUDITORIA') && define('AUDITORIAS_BORRAR_AUDITORIA', 'Cancella audit');
    !defined('AUDITORIAS_QUIERE_BORRAR') && define('AUDITORIAS_QUIERE_BORRAR', 'Cancella controllo?');
    !defined('AUDITORIAS_AUDITORIA_BORRADA') && define('AUDITORIAS_AUDITORIA_BORRADA', 'Audit cancellato!');
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'revisore Elimina');
    !defined('AUDITORIAS_AUDITORIA_ENVIADA') && define('AUDITORIAS_AUDITORIA_ENVIADA', 'audit ha inviato');
    !defined('AUDITORIAS_PONER_OTRA') && define('AUDITORIAS_PONER_OTRA', 'Aggiungi un nuovo controllo');
    !defined('AUDITORIA_ACTUALIZADA') && define('AUDITORIA_ACTUALIZADA', 'Audit aggiornato!');
    !defined('AUDITORIA_SERVICIO') && define('AUDITORIA_SERVICIO', 'Servizio di audit');
    !defined('AUDITORIA_CALIDAD') && define('AUDITORIA_CALIDAD', 'Il controllo della qualità dep.');
    !defined('AUDITORIA_ALMACEN') && define('AUDITORIA_ALMACEN', 'Audit Almacen');
    !defined('AUDITORIA_COMPRAS') && define('AUDITORIA_COMPRAS', 'shopping Audit');
    !defined('AUDITORIA_FORMACION') && define('AUDITORIA_FORMACION', 'formazione Audit');
    !defined('AUDITORIA_DOCUMENTACION') && define('AUDITORIA_DOCUMENTACION', 'Documentazione di verifica');
    !defined('AUDITORIA_TALLER') && define('AUDITORIA_TALLER', 'Laboratorio di verifica');
    !defined('AUDITORIAS_CODIGO_HELP') && define('AUDITORIAS_CODIGO_HELP', 'Ricordati di codifica audit di immediata Mettere accanto al campo di immissione..');


// NC 's

    !defined('NCS_ADVERTICE') && define('NCS_ADVERTICE', 'Clicca su un link per modificare la non conformità');
    !defined('NCS_DETAILS') && define('NCS_DETAILS', 'Dettagli NC»');
    !defined('NCS_JOIN_ADVERTICE') && define('NCS_JOIN_ADVERTICE', 'Clicca su una NC o di revisione contabile per i dettagli');
    !defined('NCS_AUDITS_JOIN_LIST') && define('NCS_AUDITS_JOIN_LIST', 'audit NC´S´sy, elenco combinato Clicca per i dettagli.');
    !defined('NCS_ABRIR_NC') && define('NCS_ABRIR_NC´S', 'Apri una non conformità');
    !defined('NCS_ANADIR_NC') && define('NCS_ANADIR_NC´S', 'Aggiungi CN');
    !defined('NCS_MODIFICAR_NC') && define('NCS_MODIFICAR_NC´S', 'Modifica NC´S');
    !defined('NCS_EDITAR_NC') && define('NCS_EDITAR_NC´S', 'Modifica NC');
    !defined('NCS_ADMINISTRAR_NCS') && define('NCS_ADMINISTRAR_NCS', 'Gestione NC di');
    !defined('NCS_IMPRIMIR_NCS') && define('NCS_IMPRIMIR_NCS', 'Audit e NC di');
    !defined('NCS_IMPRIMIR') && define('NCS_IMPRIMIR', 'NC su Stampa schermo');
    !defined('NCS_BUSCAR_NCS') && define('NCS_BUSCAR_NCS', 'Cerca di NC');
    !defined('NCS_BORRAR_NC') && define('NCS_BORRAR_NC', 'Delete NC');
    !defined('NCS_QUIERE_BORRAR') && define('NCS_QUIERE_BORRAR', 'Delete NC´S');
    !defined('NCS_NC_BORRADA') && define('NCS_NC_BORRADA', 'NC borrarda!');
    !defined('NCS_NUMERO') && define('NCS_NUMERO', 'Pagina n');
    !defined('NCS_FECHA_APERTURA') && define('NCS_FECHA_APERTURA', 'Open Data');
    !defined('NCS_CODIGO_NC') && define('NCS_CODIGO_NC´S', 'Codice');
    !defined('NCS_REFERENCIA_DOCUMENTAL') && define('NCS_REFERENCIA_DOCUMENTAL', 'Rif. doc');
    !defined('NCS_DESCRIPCION') && define('NCS_DESCRIPCION', 'Descrizione');
    !defined('NCS_REF_DOC') && define('NCS_REF_DOC', 'Documenti di base.');
    !defined('NCS_ABIERTOPOR') && define('NCS_ABIERTOPOR', 'Fine');
    !defined('NCS_AFECTAA') && define('NCS_AFECTAA', 'area interessata');
    !defined('NCS_CAUSAS') && define('NCS_CAUSAS', 'cause');
    !defined('NCS_ACCIONES') && define('NCS_ACCIONES', 'Azioni');
    !defined('NCS_PLAZO') && define('NCS_PLAZO', 'Time');
    !defined('NCS_CIERRE_PARCIAL') && define('NCS_CIERRE_PARCIAL', 'la chiusura parziale');
    !defined('NCS_EFICACIA') && define('NCS_EFICACIA', 'efficienza');
    !defined('NCS_FECHACIERRE') && define('NCS_FECHACIERRE', 'Data di chiusura');
    !defined('NCS_DESVIACION') && define('NCS_DESVIACION', 'deviazione');
    !defined('NCS_VISIBLE') && define('NCS_VISIBLE', 'visibile');
    !defined('NCS_LISTA') && define('NCS_LISTA', 'Lista della NC');
    !defined('NCS_GRAFICA') && define('NCS_GRAFICA', 'Grafico NC per area');
    !defined('NCS_REALIZAR_GRAFICA') && define('NCS_REALIZAR_GRAFICA', 'Make Grafico');
    !defined('NCS_PORAREA') && define('NCS_PORAREA', 'NC per area');
    !defined('NCS_SELECCIONE_PARA_CAMBIAR') && define('NCS_SELECCIONE_PARA_CAMBIAR', 'Seleziona per il cambiamento');
    !defined('NCS_LASTID_HELP') && define('NCS_LASTID_HELP', 'Inserire il codice che appare immediatamente al di sopra del lato di inserimento del campo.');
    !defined('NCS_CODIGO_HELP') && define('NCS_CODIGO_HELP', 'Questo campo non è obbligatorio a meno che non si vuole riempire Potete prenotare da aggiungere un codice speciale per riferimento futuro, ad esempio, è possibile inserire un codice data di numero o una parola chiave...');
    !defined('NCS_AI_HELP') && define('NCS_AI_HELP', 'Se la non conformità non si traduca in un controllo, lasciare il campo vuoto.');


// Obiettivi

    !defined('OBJETIVOS_JOIN') && define('OBJETIVOS_JOIN', 'Wish List e seguire');
    !defined('OBJETIVOS_JOIN_THEAD') && define('OBJETIVOS_JOIN_THEAD', 'Clicca su un oggetto per mostrare');
    !defined('OBJETIVOS_BORRAR_OBJETIVO') && define('OBJETIVOS_BORRAR_OBJETIVO', 'Elimina oggetto');
    !defined('OBJETIVOS_QUIERE_BORRAR') && define('OBJETIVOS_QUIERE_BORRAR', 'Elimina oggetto');
    !defined('OBJETIVOS_OBJETIVO_BORRADO') && define('OBJETIVOS_OBJETIVO_BORRADO', 'Obiettivo cancellato!');
    !defined('OBJETIVOS_NOMBRE_OBJETIVO') && define('OBJETIVOS_NOMBRE_OBJETIVO', 'titolo');
    !defined('OBJETIVOS_ACCION') && define('OBJETIVOS_ACCION', 'azione');
    !defined('OBJETIVOS_TAREA') && define('OBJETIVOS_TAREA', 'Attività');
    !defined('OBJETIVOS_ORIGEN') && define('OBJETIVOS_ORIGEN', 'origine');
    !defined('OBJETIVOS_DETECCION') && define('OBJETIVOS_DETECCION', 'rivelazione');
    !defined('OBJETIVOS_CAUSAS') && define('OBJETIVOS_CAUSAS', 'cause');
    !defined('OBJETIVOS_RECURSOS') && define('OBJETIVOS_RECURSOS', 'Risorse');
    !defined('OBJETIVOS_FUENTE') && define('OBJETIVOS_FUENTE', 'sorgente');
    !defined('OBJETIVOS_FRECUENCIA') && define('OBJETIVOS_FRECUENCIA', 'frequenza');
    !defined('OBJETIVOS_PLAZO') && define('OBJETIVOS_PLAZO', 'Time');
    !defined('OBJETIVOS_EJECUTOR') && define('OBJETIVOS_EJECUTOR', 'Esecutore');
    !defined('OBJETIVOS_PERSEGUIDOR') && define('OBJETIVOS_PERSEGUIDOR', 'Tracker');
    !defined('OBJETIVOS_ANOTAR_TAREA') && define('OBJETIVOS_ANOTAR_TAREA', 'compito Record');
    !defined('OBJETIVOS_ANADIR_TAREA') && define('OBJETIVOS_ANADIR_TAREA', 'Aggiungi operazione');
    !defined('OBJETIVOS_TAREA_ANADIDA') && define('OBJETIVOS_TAREA_ANADIDA', 'Task aggiunto');
    !defined('OBJETIVOS_TAREA_MODIFICADA') && define('OBJETIVOS_TAREA_MODIFICADA', 'Task modificato');
    !defined('OBJETIVOS_MODIFICAR_TAREA') && define('OBJETIVOS_MODIFICAR_TAREA', 'Modifica attività');
    !defined('OBJETIVOS_FECHALIMITE_TAREA') && define('OBJETIVOS_FECHALIMITE_TAREA', 'data');
    !defined('OBJETIVOS_FECHATERMINACION_TAREA') && define('OBJETIVOS_FECHATERMINACION_TAREA', 'data di completamento');
    !defined('OBJETIVOS_LISTA_TAREAS') && define('OBJETIVOS_LISTA_TAREAS', 'Lista');
    !defined('OBJETIVOS_THEAD') && define('OBJETIVOS_THEAD', 'Inserisci un compito per un inseguimento di destinazione');
    !defined('OBJETIVOS_LISTA') && define('OBJETIVOS_LISTA', 'Wish List');
    !defined('OBJETIVOS_FOLLOWUP') && define('OBJETIVOS_FOLLOWUP', 'inseguimento di destinazione');
    !defined('OBJETIVOS_FOLLOWUP_ADDED') && define('OBJETIVOS_FOLLOWUP_ADDED', 'sommati');
    !defined('OBJETIVOS_EDITAR_OBJETIVO') && define('OBJETIVOS_EDITAR_OBJETIVO', 'ordinare Modifica');
    !defined('OBJETIVOS_ADMINISTRAR_OBJETIVOS') && define('OBJETIVOS_ADMINISTRAR_OBJETIVOS', 'Gestione obiettivi');
    !defined('OBJETIVOS_ANADIR_OBJETIVO') && define('OBJETIVOS_ANADIR_OBJETIVO', 'Aggiungi target');
    !defined('OBJETIVOS_CAMBIAR_OBJETIVO') && define('OBJETIVOS_CAMBIAR_OBJETIVO', 'Cambio di destinazione');
    !defined('OBJETIVOS_PRINTSCREEN') && define('OBJETIVOS_PRINTSCREEN', 'Vedi la meta');
    !defined('OBJETIVOS_DETAILS') && define('OBJETIVOS_DETAILS', 'dettagli oggettivi');
    !defined('OBJETIVO_ACTUALIZADO') && define('OBJETIVO_ACTUALIZADO', 'Obiettivo aggiornato!');
    !defined('OBJETIVOS_CODIGO_HELP') && define('OBJETIVOS_CODIGO_HELP', 'Inserire il codice immediatamente sopra l´obiettivo che appare accanto al campo di input.');



// Indicatori

    !defined('INDICADORES_GRAFICAS') && define('INDICADORES_GRAFICAS', 'indicatori grafici');


// Formazione

    !defined('FORMACION_ADMINISTRAR_FORMACION') && define('FORMACION_ADMINISTRAR_FORMACION', 'Gestione formazione');
    !defined('FORMACION_ANADIR_CURSO') && define('FORMACION_ANADIR_CURSO', 'Aggiungi Corso');
    !defined('FORMACION_CAPTION_ADD') && define('FORMACION_CAPTION_ADD', 'Aggiungi un corso di formazione');
    !defined('FORMACION_CAPTION_MODIFY') && define('FORMACION_CAPTION_MODIFY', 'Modifica un corso di formazione');
    !defined('FORMACION_THEAD_MODIFY_ADVERTICE') && define('FORMACION_THEAD_MODIFY_ADVERTICE', 'Fare clic su un collegamento per modificare il corso');
    !defined('FORMACION_MODIFICAR_CURSO') && define('FORMACION_MODIFICAR_CURSO', 'Cambia corso');
    !defined('FORMACION_BORRAR_CURSO') && define('FORMACION_BORRAR_CURSO', 'naturalmente Elimina');
    !defined('CURSO_QUIERE_BORRAR') && define('CURSO_QUIERE_BORRAR', 'Cancella corso?');
    !defined('FORMACION_CURSO_BORRADO') && define('FORMACION_CURSO_BORRADO', 'Corso cancellato!');
    !defined('FORMACION_CURSO') && define('FORMACION_CURSO', 'Corso');
    !defined('FORMACION_LISTACURSOS') && define('FORMACION_LISTACURSOS', 'Lista Corso');
    !defined('FORMACION_LUGAR') && define('FORMACION_LUGAR', 'Location');
    !defined('FORMACION_HORAS') && define('FORMACION_HORAS', 'Ore');
    !defined('FORMACION_VALIDACION') && define('FORMACION_VALIDACION', 'convalida');
    !defined('FORMACION_CURSOS_REALIZADOS') && define('FORMACION_CURSOS_REALIZADOS', 'I corsi tenuti');
    !defined('FORMACION_CURSOS_REALIZADOS_TRABAJADOR') && define('FORMACION_CURSOS_REALIZADOS_TRABAJADOR', 'I corsi tenuti dai lavoratori del');


// Servizio

    !defined('SERVICIO_TRABAJADOR') && define('SERVICIO_TRABAJADOR', 'Lavoro');
    !defined('SERVICIO_SERVICIO') && define('SERVICIO_SERVICIO', 'Servizi');
    !defined('SERVICIO_ACTIVESTATUS') && define('SERVICIO_ACTIVESTATUS', 'Active');
    !defined('SERVICIO_SERVICIOS_ACTIVOS') && define('SERVICIO_SERVICIOS_ACTIVOS', 'Servizi di Asset');
    !defined('SERVICIO_SERVICIOS_ADVERTICE') && define('SERVICIO_SERVICIOS_ADVERTICE', 'Clicca su un servizio per visualizzare il numero di ispezioni effettuate');
    !defined('SERVICIO_MODIFY_THEAD') && define('SERVICIO_MODIFY_THEAD', 'Clicca su un servizio per visualizzare i dettagli');
    !defined('SERVICIO_INCIDENCIA') && define('SERVICIO_INCIDENCIA', 'numero');
    !defined('SERVICIO_BORRAR_SERVICIO') && define('SERVICIO_BORRAR_SERVICIO', 'Elimina servizio');
    !defined('SERVICIO_QUIERE_BORRAR') && define('SERVICIO_QUIERE_BORRAR', 'Elimina servizio / s');
    !defined('SERVICIO_SERVICIO_BORRADO') && define('SERVICIO_SERVICIO_BORRADO', 'Servizio cancellato!');
    !defined('SERVICIO_ANADIR_SERVICIO') && define('SERVICIO_ANADIR_SERVICIO', 'Aggiungi servizio');
    !defined('SERVICIO_ANADIDO') && define('SERVICIO_ANADIDO', 'Servizio Aggiunto!');
    !defined('SERVICIO_ACTUALIZADO') && define('SERVICIO_ACTUALIZADO', 'Servizio aggiornamento!');
    !defined('SERVICIO_ERROR_ANADIR') && define('SERVICIO_ERROR_ANADIR', 'servizio ntildir errore a &');
    !defined('SERVICIO_MODIFICAR_SERVICIO') && define('SERVICIO_MODIFICAR_SERVICIO', 'Modifica Service');
    !defined('SERVICIO_ADMINISTRAR_SERVICIOS') && define('SERVICIO_ADMINISTRAR_SERVICIOS', 'Gestione Servizi');
    !defined('SERVICIO_LISTA_SERVICIOS') && define('SERVICIO_LISTA_SERVICIOS', 'Lista Servizi');
    !defined('SERVICIO_AVISOS_GRAFICA') && define('SERVICIO_AVISOS_GRAFICA', 'messaggio di evento Graphic');


// Lavoratori

    !defined('TRABAJADOR_TRABAJADOR') && define('TRABAJADOR_TRABAJADOR', 'Lavoro');
    !defined('TRABAJADOR_ANADIR_TRABAJADOR') && define('TRABAJADOR_ANADIR_TRABAJADOR', 'Aggiungi lavoratore');
    !defined('TRABAJADOR_BORRAR_TRABAJADOR') && define('TRABAJADOR_BORRAR_TRABAJADOR', 'lavoratore Elimina');
    !defined('TRABAJADOR_QUIERE_BORRAR') && define('TRABAJADOR_QUIERE_BORRAR', 'lavoratore Elimina / s');
    !defined('TRABAJADOR_TRABAJADOR_BORRADO') && define('TRABAJADOR_TRABAJADOR_BORRADO', 'lavoratore cancellato!');
    !defined('TRABAJADOR_EDITAR_TRABAJADOR') && define('TRABAJADOR_EDITAR_TRABAJADOR', 'dipendente Modifica');
    !defined('TRABAJADOR_ADMINISTRAR_TRABAJADORES') && define('TRABAJADOR_ADMINISTRAR_TRABAJADORES', 'Gestione dipendenti');
    !defined('TRABAJADOR_CAMBIAR_TRABAJADOR') && define('TRABAJADOR_CAMBIAR_TRABAJADOR', 'dipendente Modifica');
    !defined('TRABAJADOR_ACTUALIZADO') && define('TRABAJADOR_ACTUALIZADO', 'lavoratore aggiornato!');
    !defined('TRABAJADOR_LISTA_TRABAJADORES') && define('TRABAJADOR_LISTA_TRABAJADORES', 'Elenco dei lavoratori attivi');
    !defined('TRABAJADOR_THEAD_ADVERTICE') && define('TRABAJADOR_THEAD_ADVERTICE', 'Clicca su un lavoratore per indicare il numero dei corsi seguiti');


// Gruppi di lavoro

    !defined('PARTES_HOJAS') && define('PARTES_HOJAS', 'Fogli di lavoro');
    !defined('PARTES_THEAD_ADVERTICE') && define('PARTES_THEAD_ADVERTICE', 'Clicca su una parte per visualizzare i dettagli');
    !defined('PARTE_DEL_TRABAJADOR') && define('PARTE_DEL_TRABAJADOR', 'Party Workers');
    !defined('PARTE_DETALLES') && define('PARTE_DETALLES', 'parte i dettagli');
    !defined('PARTES_ANADIR_PARTE') && define('PARTES_ANADIR_PARTE', 'Aggiungi lavoro part-');
    !defined('PARTES_EDITAR_PARTE') && define('PARTES_EDITAR_PARTE', 'Modifica parte di lavoro');
    !defined('PARTES_ADMINISTRAR_PARTES') && define('PARTES_ADMINISTRAR_PARTES', 'Gestione di lavoro parti');
    !defined('PARTES_PRINT') && define('PARTES_PRINT', 'parte del lavoro di stampa');
    !defined('PARTES_CAMBIAR_PARTE') && define('PARTES_CAMBIAR_PARTE', 'parte Modifica');
    !defined('PARTES_BORRAR') && define('PARTES_BORRAR', 'parte Elimina / s');
    !defined('PARTES_QUIERE_BORRAR') && define('PARTES_QUIERE_BORRAR', 'parte Elimina / s?');
    !defined('PARTES_BUSCAR') && define('PARTES_BUSCAR', 'Ricerca per la parte / s');
    !defined('PARTES_PARTE_BORRADO') && define('PARTES_PARTE_BORRADO', 'gruppo di lavoro cancellato!');



// Provider

    !defined('PROVEEDORES_PROVEEDOR') && define('PROVEEDORES_PROVEEDOR', 'fornitore');
    !defined('PROVEEDORES_SUMINISTRO') && define('PROVEEDORES_SUMINISTRO', 'alimentazione');
    !defined('PROVEEDORES_ACTIVESTATUS') && define('PROVEEDORES_ACTIVESTATUS', 'Active');
    !defined('PROVEEDORES_BORRAR_PROVEEDOR') && define('PROVEEDORES_BORRAR_PROVEEDOR', 'fornitore Cancella');
    !defined('PROVEEDORES_QUIERE_BORRAR') && define('PROVEEDORES_QUIERE_BORRAR', 'fornitore Cancella / s?');
    !defined('PROVEEDORES_PROVEEDOR_BORRADO') && define('PROVEEDORES_PROVEEDOR_BORRADO', 'fornitore cancellato!');
    !defined('PROVEEDORES_ANADIR_PROVEEDOR') && define('PROVEEDORES_ANADIR_PROVEEDOR', 'Aggiungi Provider');
    !defined('PROVEEDORES_MODIFICAR_PROVEEDOR') && define('PROVEEDORES_MODIFICAR_PROVEEDOR', 'fornitore Modifica');
    !defined('PROVEEDORES_ADMINISTRAR_PROVEEDORES') && define('PROVEEDORES_ADMINISTRAR_PROVEEDORES', 'Gestione fornitori');
    !defined('PROVEEDORES_PROVEEDOR_APROBADO') && define('PROVEEDORES_PROVEEDOR_APROBADO', 'Approvato');
    !defined('PROVEEDORES_PROVEEDOR_ENPRUEBAS') && define('PROVEEDORES_PROVEEDOR_ENPRUEBAS', 'In fase di test');
    !defined('PROVEEDORES_CRITERIOS_EVALUACION') && define('PROVEEDORES_CRITERIOS_EVALUACION', "Criteri di valutazione");
    !defined('PROVEEDORES_PROVEEDOR_ACTUALIZADO') && define('PROVEEDORES_PROVEEDOR_ACTUALIZADO', 'fornitore di aggiornamento!');
    !defined('PROVEEDORES_DATOS') && define('PROVEEDORES_DATOS', 'dati');
    !defined('PROVEEDORES_CIF') && define('PROVEEDORES_CIF', 'CIF');
    !defined('PROVEEDORES_LISTA') && define('PROVEEDORES_LISTA', 'Vendor List');
    !defined('PROVEEDORES_THEAD_ADVERTICE') && define('PROVEEDORES_THEAD_ADVERTICE', 'Clicca su un fornitore per i dettagli');
    !defined('PROVEEDORES_INCIDENCIA') && define('PROVEEDORES_INCIDENCIA', 'numero');
    !defined('PROVEEDORES_INCIDENCIAS') && define('PROVEEDORES_INCIDENCIAS', 'Trouble');
    !defined('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR', 'fornitore Trouble');
    !defined('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR', 'Trouble di fornitore');
    !defined('PROVEEDORES_ANOTAR_INCIDENCIA') && define('PROVEEDORES_ANOTAR_INCIDENCIA', 'emissione di biglietti');
    !defined('PROVEEDORES_MODIFICAR_INCIDENCIA') && define('PROVEEDORES_MODIFICAR_INCIDENCIA', 'Numero Modifica');
    !defined('PROVEEDORES_BORRAR_INCIDENCIAS') && define('PROVEEDORES_BORRAR_INCIDENCIAS', 'Cancella gli incidenti');
    !defined('INCIDENCIAS_QUIERE_BORRAR') && define('INCIDENCIAS_QUIERE_BORRAR', 'Cancella incidenza / s');
    !defined('PROVEEDORES_INCIDENCIA_BORRADA') && define('PROVEEDORES_INCIDENCIA_BORRADA', 'incidenza cancellato!');
    !defined('PROVEEDORES_DETALLES') && define('PROVEEDORES_DETALLES', 'Dettagli del fornitore');
    !defined('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN') && define('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN', 'Gestione fornitori di incidenti');
    !defined('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Gestione codici incidenti');
    !defined('PROVEEDORES_BORRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_BORRAR_CODIGOSINCIDENCIAS', 'Cancella incidenti codici');
    !defined('CODIGOSINCIDENCIAS_QUIERE_BORRAR') && define('CODIGOSINCIDENCIAS_QUIERE_BORRAR', 'incidenti Elimina codici');
    !defined('PROVEEDORES_BORRAR_CODIGOINCIDENCIA') && define('PROVEEDORES_BORRAR_CODIGOINCIDENCIA', 'Cancella incidenti codici');
    !defined('PROVEEDORES_ANADIR_CODIGOINCIDENCIA') && define('PROVEEDORES_ANADIR_CODIGOINCIDENCIA', 'Aggiungi codice evento');
    !defined('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA') && define('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA', 'codice evento Change');
    !defined('PROVEEDORES_CODIGO_ANADIDO') && define('PROVEEDORES_CODIGO_ANADIDO', 'Codice Aggiunto!');
    !defined('PROVEEDORES_LISTA_CODIGOS') && define('PROVEEDORES_LISTA_CODIGOS', 'elenco di codici');
    !defined('PROVEEDORES_CODIGOS_ADVERTICE') && define('PROVEEDORES_CODIGOS_ADVERTICE', 'Clicca su un codice per modificare');
    !defined('PROVEEDORES_CODIGO_INCIDENCIA') && define('PROVEEDORES_CODIGO_INCIDENCIA', 'Codice incidenza');
    !defined('PROVEEDORES_CODIGO_ACTUALIZADO') && define('PROVEEDORES_CODIGO_ACTUALIZADO', 'aggiornamento Codice');
    !defined('PROVEEDORES_CODIGOINCIDENCIA_BORRADO') && define('PROVEEDORES_CODIGOINCIDENCIA_BORRADO', 'Codice di incidenza cancellato!');
    !defined('PROVEEDORES_INCIDENCIA_CODIGO') && define('PROVEEDORES_INCIDENCIA_CODIGO', 'Codice');
    !defined('PROVEEDORES_JOIN') && define('PROVEEDORES_JOIN', 'Elenco dei fornitori e incidenti');
    !defined('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES') && define('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES', 'Gestione aree sensibili');
    !defined('PROVEEDORES_ANADIR_AREASENSIBLE') && define('PROVEEDORES_ANADIR_AREASENSIBLE', 'Aggiungi area sensibile');
    !defined('AREASENSIBLE_QUIERE_BORRAR') && define('AREASENSIBLE_QUIERE_BORRAR', 'Elimina zona sensibile');
    !defined('PROVEEDORES_BORRAR_AREASSENSIBLES') && define('PROVEEDORES_BORRAR_AREASSENSIBLES', 'Cancella area sensibile');
    !defined('PROVEEDORES_AREA_SENSIBLE_BORRADA') && define('PROVEEDORES_AREA_SENSIBLE_BORRADA', 'zona sensibile cancellato!');
    !defined('PROVEEDORES_MODIFICAR_AREASENSIBLE') && define('PROVEEDORES_MODIFICAR_AREASENSIBLE', 'Modifica area sensibile');
    !defined('PROVEEDORES_AREASENSIBLE_ANADIDA') && define('PROVEEDORES_AREASENSIBLE_ANADIDA', 'zona sensibile aggiunto!');
    !defined('PROVEEDORES_LISTA_AREASSENSIBLES') && define('PROVEEDORES_LISTA_AREASSENSIBLES', 'Elenco aree sensibili');
    !defined('PROVEEDORES_AREASSENSIBLES_ADVERTICE') && define('PROVEEDORES_AREASSENSIBLES_ADVERTICE', 'Fare clic su una zona sensibile per modificare');
    !defined('PROVEEDORES_AREASENSIBLE') && define('PROVEEDORES_AREASENSIBLE', 'area sensibile');
    !defined('PROVEEDORES_AREASENSIBLE_ACTUALIZADA') && define('PROVEEDORES_AREASENSIBLE_ACTUALIZADA', 'zona sensibile aggiornato!');



// Ispezioni

    !defined('INSPECCIONES_PRINTSCREEN') && define('INSPECCIONES_PRINTSCREEN', 'Dettagli di controllo');
    !defined('INSPECCIONES_BUSCAR') && define('INSPECCIONES_BUSCAR', 'ispezione Ricerca');
    !defined('INSPECCIONES_LISTA') && define('INSPECCIONES_LISTA', 'Elenco dei controlli');
    !defined('INSPECCIONES_BORRAR_INSPECCION') && define('INSPECCIONES_BORRAR_INSPECCION', 'Clear ispettorato');
    !defined('INSPECCIONES_QUIERE_BORRAR') && define('INSPECCIONES_QUIERE_BORRAR', 'ispezione Delete?');
    !defined('INSPECCIONES_INSPECCION_BORRADA') && define('INSPECCIONES_INSPECCION_BORRADA', 'Ispezione cancellato!');
    !defined('INSPECCIONES_ANADIR_INSPECCION') && define('INSPECCIONES_ANADIR_INSPECCION', 'Aggiungi ispezione');
    !defined('INSPECCIONES_CAMBIAR_INSPECCION') && define('INSPECCIONES_CAMBIAR_INSPECCION', 'Modifica Watch');
    !defined('INSPECCIONES_EDITAR_INSPECCION') && define('INSPECCIONES_EDITAR_INSPECCION', 'Modifica di controllo');
    !defined('INSPECCIONES_ADMINISTRAR_INSPECCIONES') && define('INSPECCIONES_ADMINISTRAR_INSPECCIONES', 'Gestione ispezioni»');
    !defined('INSPECCIONES_THEAD_ADVERTICE') && define('INSPECCIONES_THEAD_ADVERTICE', 'Clicca su una data per i dettagli');



// Ispettori

    !defined('INSPECCIONES_INSPECTOR') && define('INSPECCIONES_INSPECTOR', 'ispettore');
    !defined('INSPECTORES_LISTA') && define('INSPECTORES_LISTA', 'Elenco degli ispettori');
    !defined('BORRAR_INSPECTOR') && define('BORRAR_INSPECTOR', 'Cancella ispettore');
    !defined('INSPECTORES_EDITAR_INSPECTOR') && define('INSPECTORES_EDITAR_INSPECTOR', 'Modifica ispettore');
    !defined('INSPECTORES_ADMINISTRAR_INSPECTORES') && define('INSPECTORES_ADMINISTRAR_INSPECTORES', 'Gestione ispettori');
    !defined('INSPECTORES_ANADIR_INSPECTOR') && define('INSPECTORES_ANADIR_INSPECTOR', 'Aggiungi ispettore');
    !defined('INSPECTORES_CAMBIAR_INSPECTOR') && define('INSPECTORES_CAMBIAR_INSPECTOR', 'Cambia ispettore');
    !defined('INSPECTORES_QUIERE_BORRAR') && define('INSPECTORES_QUIERE_BORRAR', 'ispettore Delete?');
    !defined('INSPECTORES_INSPECTOR_BORRADO') && define('INSPECTORES_INSPECTOR_BORRADO', 'ispettore cancellato!');


// Estintori

    !defined('EXTINTORES_EXTINTOR') && define('EXTINTORES_EXTINTOR', 'estintore');
    !defined('EXTINTORES_EXTINTORES') && define('EXTINTORES_EXTINTORES', 'estintori');
    !defined('EXTINTORES_CLIENTE') && define('EXTINTORES_CLIENTE', 'Cliente');
    !defined('EXTINTORES_EJECUCION') && define('EXTINTORES_EJECUCION', 'Correre');
    !defined('EXTINTORES_LISTA') && define('EXTINTORES_LISTA', 'Elenca estintori');
    !defined('EXTINTORES_DETALLES') && define('EXTINTORES_DETALLES', 'dettagli estintore');
    !defined('EXTINTORES_NUMEXTINTORES') && define('EXTINTORES_NUMEXTINTORES', 'Numero di estintori');
    !defined('EXTINTORES_PROXIMA_EJECUCION') && define('EXTINTORES_PROXIMA_EJECUCION', 'Esecuzione Avanti');
    !defined('EXTINTORES_FECHA_FABRICACION') && define('EXTINTORES_FECHA_FABRICACION', 'Data di produzione');
    !defined('EXTINTORES_AGENTE_EXTINTOR') && define('EXTINTORES_AGENTE_EXTINTOR', 'estinzione');
    !defined('EXTINTORES_NDESERIE') && define('EXTINTORES_NDESERIE', 'Numero di serie');
    !defined('EXTINTORES_BORRAR_EXTINTOR') && define('EXTINTORES_BORRAR_EXTINTOR', 'Cancella estintore');
    !defined('EXTINTOR_QUIERE_BORRAR') && define('EXTINTOR_QUIERE_BORRAR', 'Cancella estintore / s');
    !defined('EXTINTORES_EXTINTOR_BORRADO') && define('EXTINTORES_EXTINTOR_BORRADO', 'scarico eliminato');
    !defined('EXTINTORES_BUSCAR_EXTINTOR') && define('EXTINTORES_BUSCAR_EXTINTOR', 'Cerca estintore');
    !defined('EXTINTORES_ANADIR_EXTINTOR') && define('EXTINTORES_ANADIR_EXTINTOR', 'Aggiungi estintore');
    !defined('EXTINTORES_EXTINTOR_ANADIDO') && define('EXTINTORES_EXTINTOR_ANADIDO', 'estintore ha aggiunto');
    !defined('EXTINTORES_MODIFICAR_EXTINTOR') && define('EXTINTORES_MODIFICAR_EXTINTOR', 'Modifica estintore');
    !defined('EXTINTORES_EDITAR_EXTINTOR') && define('EXTINTORES_EDITAR_EXTINTOR', 'Modifica estintore');
    !defined('EXTINTORES_ADMINISTRAR_EXTINTORES') && define('EXTINTORES_ADMINISTRAR_EXTINTORES', 'Gestione estintori');
    !defined('EXTINTORES_THEAD_ADVERTICE') && define('EXTINTORES_THEAD_ADVERTICE', 'Clicca su un estintore per modificare');
    !defined('EXTINTORES_EXTINTOR_ACTUALIZADO') && define('EXTINTORES_EXTINTOR_ACTUALIZADO', 'scarico aggiornato!');



// Strumenti di misura

    !defined('EQUIPOS_EQUIPO') && define('EQUIPOS_EQUIPO', 'Team');
    !defined('EQUIPOS_EQUIPOS') && define('EQUIPOS_EQUIPOS', 'Metrologia');
    !defined('EQUIPOS_LISTA') && define('EQUIPOS_LISTA', 'Elenco delle attrezzature di misura');
    !defined('EQUIPOS_MODELO') && define('EQUIPOS_MODELO', 'modello');
    !defined('EQUIPOS_FRECUENCALIB') && define('EQUIPOS_FRECUENCALIB', 'La frequenza di calibrazione:');
    !defined('EQUIPOS_CRITERIO') && define('EQUIPOS_CRITERIO', 'criterio:');
    !defined('EQUIPOS_UBICACION') && define('EQUIPOS_UBICACION', 'Location:');
    !defined('EQUIPOS_ANADIR') && define('EQUIPOS_ANADIR', 'Aggiungi misura squadra');
    !defined('EQUIPOS_BORRAR') && define('EQUIPOS_BORRAR', 'squadra di azione Elimina');
    !defined('EQUIPOS_QUIERE_BORRAR') && define('EQUIPOS_QUIERE_BORRAR', 'Delete squadra?');
    !defined('EQUIPO_BORRADO') && define('EQUIPO_BORRADO', 'Team cancellato!');
    !defined('EQUIPOS_CAMBIAR') && define('EQUIPOS_CAMBIAR', 'Cambia squadra');
    !defined('EQUIPOS_EDITAR') && define('EQUIPOS_EDITAR', 'Team Modifica');
    !defined('EQUIPOS_ADMINISTRAR') && define('EQUIPOS_ADMINISTRAR', 'Gestione dei computer');
    !defined('EQUIPOS_THEAD_ADVERTICE') && define('EQUIPOS_THEAD_ADVERTICE', 'Clicca su una squadra per i dettagli');
    !defined('EQUIPOS_PRINT_DETAILS') && define('EQUIPOS_PRINT_DETAILS', 'dettagli computer');
    !defined('EQUIPOS_CALIBRACION') && define('EQUIPOS_CALIBRACION', 'Calibrazione');


// Calibrazioni

    !defined('CALIBRACIONES_CALIBRACION') && define('CALIBRACIONES_CALIBRACION', 'Calibrazione');
    !defined('CALIBRACIONES_CALIBRACIONES') && define('CALIBRACIONES_CALIBRACIONES', 'Calibrazione');
    !defined('CALIBRACIONES_ENCALIBRACION') && define('CALIBRACIONES_ENCALIBRACION', 'In calibrazione');
    !defined('CALIBRACIONES_ENREPARACION') && define('CALIBRACIONES_ENREPARACION', 'In Repair');
    !defined('CALIBRACIONES_LISTA') && define('CALIBRACIONES_LISTA', 'Lista calibrazioni');
    !defined('CALIBRACIONES_DETALLES') && define('CALIBRACIONES_DETALLES', 'Dettagli di calibrazione');
    !defined('CALIBRACIONES_BORRAR') && define('CALIBRACIONES_BORRAR', 'Taratura Elimina');
    !defined('CALIBRACION_QUIERE_BORRAR') && define('CALIBRACION_QUIERE_BORRAR', 'Cancella calibrazione/s');
    !defined('CALIBRACION_BORRADA') && define('CALIBRACION_BORRADA', 'Taratura eliminato');
    !defined('BUSCAR_CALIBRACION') && define('BUSCAR_CALIBRACION', 'Taratura ricerca');
    !defined('CALIBRACIONES_ANADIR') && define('CALIBRACIONES_ANADIR', 'Aggiungi Calibration');
    !defined('CALIBRACION_ANADIDA') && define('CALIBRACION_ANADIDA', 'Taratura aggiunto');
    !defined('CALIBRACIONES_MODIFICAR') && define('CALIBRACIONES_MODIFICAR', 'Taratura Modifica');
    !defined('CALIBRACIONES_EDITAR') && define('CALIBRACIONES_EDITAR', 'Modifica calibrazione');
    !defined('CALIBRACIONES_ADMINISTRAR') && define('CALIBRACIONES_ADMINISTRAR', 'Gestione calibrazioni');
    !defined('CALIBRACIONES_THEAD_ADVERTICE') && define('CALIBRACIONES_THEAD_ADVERTICE', 'Clicca su una calibrazione per modificare');
    !defined('CALIBRACION_ACTUALIZADA') && define('CALIBRACION_ACTUALIZADA', 'Data di calibrazione');
    



// Añadidos

    !defined('APROBADO') && define('APROBADO', 'Approvato');
    !defined('DATABASE_USERNAME') && define('DATABASE_USERNAME', 'Nome del database');
    !defined('DATABASE_PASSWORD') && define('DATABASE_PASSWORD', 'Password utente per il database:');
    !defined('DATABASE_HOST') && define('DATABASE_HOST', 'Nome server:');
    !defined('DATABASE_HOST_HELP') && define('DATABASE_HOST_HELP', '* di solito è localhost * Lascia come appare di default.');
    !defined('DATABASE_NAME') && define('DATABASE_NAME', 'Nome del database');
    !defined('DATABASE_NAME_HELP') && define('DATABASE_NAME_HELP', 'Il nome del database che verrà creato tabelle di questa installazione:');
    !defined('DATABASE_INSTALL_ADVICE') && define('DATABASE_INSTALL_ADVICE', 'Compilare il modulo per creare le tabelle nel database. Nota: Ricordarsi di mettere la stessa connessione nel file .. / includes / mysql.php caso. insltalación cancellare questo termine, ');
    !defined('NOMBRE_INCIDENCIA') && define('NOMBRE_INCIDENCIA', 'questione del nome');
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'Cerca file');
    !defined('IMAGEN_URL') && define('IMAGEN_URL', 'Link a immagine');
    !defined('IMAGEN') && define('IMAGEN', 'Immagine');
    !defined('IMAGEN_URLHELP') && define('IMAGEN_URLHELP', 'Si dovrebbe mettere il link per l´immagine');
    !defined('INCIDENCIA') && define('INCIDENCIA', 'numero');
    !defined('RECUERDE_LOS_CODIGOS') && define('RECUERDE_LOS_CODIGOS', '0 Nessun incidente <br /> <br strumentale 1 No 2 Mancanza di prodotto /> <br /> <br /> mediocre 3 Trattamento 4 Mancanza di misure Protezione <br /> 5 Mancanza di pianificazione del lavoro <br /> 6 mancanza di trattamenti <br /> certificati 7 Mancanza di abbigliamento, articoli da toeletta e igiene personale <br /> 8 La mancanza di manutenzione e pulizia del veicolo ');
    !defined('ACTIVIDAD') && define('ACTIVIDAD', 'attività');
    !defined('OBJETIVOS') && define('OBJETIVOS', 'obiettivi di qualità.');
    !defined('CLIENTES') && define('CLIENTES', 'Clienti.');
    !defined('SATISFACCION') && define('SATISFACCION', 'soddisfazione del cliente.');
    !defined('QUEJASCLIENTE') && define('QUEJASCLIENTE', 'i reclami.');
    !defined('INDICADORES_MEDICIONANALISISYMEJORA') && define('INDICADORES_MEDICIONANALISISYMEJORA', 'Indicatori di MAM.');
    !defined('AUDITORIAS') && define('AUDITORIAS', 'Audit.');
    !defined('NOCONFORMIDADESYMEJORAS') && define('NOCONFORMIDADESYMEJORAS', 'Non ci sono omologazioni e miglioramenti.');
    !defined('POLITICADECALIDAD') && define('POLITICADECALIDAD', 'Politica della Qualità ');
    !defined('CAMBIOS') && define('CAMBIOS', 'Le modifiche che possono influenzare il sistema.');
    !defined('RECOMENDACIONESYCONCLUSIONES') && define('RECOMENDACIONESYCONCLUSIONES', 'raccomandazioni e conclusioni.');
    !defined('CODIGO_INCIDENCIA') && define('CODIGO_INCIDENCIA', 'Codice di incidente:');
    !defined('INSPECCIONES_CODIGOSINCIDENCIAS_HELP') && define('INSPECCIONES_CODIGOSINCIDENCIAS_HELP', 'Inserire sempre un codice numerico In caso contrario, il grafico di episodi di ispezioni non saranno disegnate..');
    !defined('SELECCIONAR_Y_BORRAR') && define('SELECCIONAR_Y_BORRAR', 'Selezionare ed eliminare');
    !defined('DISTRIBUIDO') && define('DISTRIBUIDO', 'distribuito');
    !defined('BORRAR_SELECCIONADOS') && define('BORRAR_SELECCIONADOS', 'Cancella selezionati');
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF', 'Devi effettuare il login per gestire i documenti.');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS_OFF') && define('MENU_ALT_ANOTAR_DOCUMENTOS_OFF', 'Devi effettuare il login per scrivere un articolo.');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS_OFF') && define('MENU_ALT_BORRAR_DOCUMENTOS_OFF', 'Devi fare il log in per eliminare un documento.');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS_OFF') && define('MENU_ALT_MODIFICAR_CATEGORIAS_OFF', 'Devi fare il log in per modificare le categorie.');
    !defined('MENU_OTROS_DOCUMENTOS') && define('MENU_OTROS_DOCUMENTOS', 'Un altro controllo dei documenti.');
    !defined('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION') && define('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION', 'Gestione incidenti di controllo');
    !defined('MENU_IMPRIMIR_REVSISTEMA') && define('MENU_IMPRIMIR_REVSISTEMA', 'Print System Review');
    !defined('REVSISTEMA_PRINT_DETAILS') && define('REVSISTEMA_PRINT_DETAILS', 'Revisione della data');
    !defined('REVSISTEMA_INDICADORES') && define('REVSISTEMA_INDICADORES', 'indicatori di qualità');
    !defined('REVSISTEMA_LISTA_PRINTSCREEN') && define('REVSISTEMA_LISTA_PRINTSCREEN', 'Elenco delle patch');
    !defined('REVSISTEMA_NUM') && define('REVSISTEMA_NUM', 'Revisione num');
    !defined('REVSISTEMA_ADVERTICE') && define('REVSISTEMA_ADVERTICE', 'Clicca su una revisione per stampare');
    !defined('INDICADORES_NOCONFORMIDADESPORAREA') && define('INDICADORES_NOCONFORMIDADESPORAREA', 'non-conformità per area');
    !defined('INDICADORES_INCIDENCIASDEINSPECCION') && define('INDICADORES_INCIDENCIASDEINSPECCION', 'Trouble in ispezioni di servizio');
    !defined('INDICADORES_DERECURSOS') && define('INDICADORES_DERECURSOS', 'Indicatori REC');
    !defined('INDICADORES_FORMACIONANUAL') && define('INDICADORES_FORMACIONANUAL', 'ore di formazione annue');
    !defined('INDICADORES_INCIDENCIASDEALMACEN') && define('INDICADORES_INCIDENCIASDEALMACEN', 'Trouble in Store');
    !defined('INDICADORES_DEPRODUCCION') && define('INDICADORES_DEPRODUCCION', 'Indicatori OP (in funzione)');
    !defined('INDICADORES_INCIDENCIASDEPROVEEDOR') && define('INDICADORES_INCIDENCIASDEPROVEEDOR', 'fornitore Trouble');
    !defined('EDITAR_BORRAR_DOCUMENTO') && define('EDITAR_BORRAR_DOCUMENTO', 'Modifica e cancellare i documenti');
    !defined('DOCUMENTOS_MODIFICADOS') && define('DOCUMENTOS_MODIFICADOS', 'i documenti modificati');
    !defined('EDITAR_BORRAR_MODIFDOC') && define('EDITAR_BORRAR_MODIFDOC', 'Modificare ed eliminare le modifiche al volo');
    !defined('DOCUMENTOS_IDSOLICITUD_HELP') && define('DOCUMENTOS_IDSOLICITUD_HELP', 'Mettere in id immediatamente superiore a quello visualizzato accanto al campo di immissione');
    !defined('DOCUMENTOS_LINK_HELP') && define('DOCUMENTOS_LINK_HELP', 'Metti l´indirizzo della cartella che hai caricato il documento, ad esempio:. / Uploads / qualità / documento.pdf');
    !defined('DOCUMENTOS_CLAVE1_HELP') && define('DOCUMENTOS_CLAVE1_HELP', 'Metti che ha distribuito il documento.');
    !defined('AUDITOR_IMG') && define('AUDITOR_IMG', 'revisore img');
    !defined('AUDITORIAS_JOIN_HELP') && define('AUDITORIAS_JOIN_HELP', 'Se ci sono campi vuoti nella colonna di audit, non conformità non è per nunguna audit o rapporto di audit interno non ha (ad esempio, gli audit esterni )');
    !defined('OBJETIVOS_CAMBIAR_SEGUIMIENTO') && define('OBJETIVOS_CAMBIAR_SEGUIMIENTO', 'Modifica un compito');
    !defined('OBJETIVOS_ADVERTICE') && define('OBJETIVOS_ADVERTICE', 'Clicca su un compito per modificare');
    !defined('SEGUIMIENTOS_CHANGE_DETAILS ') && define('SEGUIMIENTOS_CHANGE_DETAILS', 'Attività per l´obiettivo:');
    !defined('TRABAJADOR_IMG') && define('TRABAJADOR_IMG', 'Worker img');
    !defined('TRABAJADOR_THEAD_EDIT') && define('TRABAJADOR_THEAD_EDIT', 'Clicca su un lavoratore per modificare');
    !defined('TRABAJADOR_HA_HECHO') && define('TRABAJADOR_HA_HECHO', 'lavoratori addestrati');
    !defined('TRABAJADOR_ACTIVIDAD') && define('TRABAJADOR_ACTIVIDAD', 'attività');
    !defined('CODIGOSINCIDENCIAS_LASTID_HELP') && define('CODIGOSINCIDENCIAS_LASTID_HELP', 'Imposta il numero successivo più alto codice che appare accanto al campo di input, da codici di regole. Il codice che vedete è l´ultimo ad essere inserito.');
    !defined('PROVEEDORES_NOMBRE_INCIDENCIA') && define('PROVEEDORES_NOMBRE_INCIDENCIA', 'questione del nome');
    !defined('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA') && define('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA', 'Aggiungi codice evento');
    !defined('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA') && define('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA', 'codice evento Change');
    !defined('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Gestione codici incidenti');
    !defined('INSPECCIONES_CODIGOS_ADVERTICE') && define('INSPECCIONES_CODIGOS_ADVERTICE', 'Clicca su un codice da modificare');
    !defined('INSPECCIONES_LISTA_CODIGOS') && define('INSPECCIONES_LISTA_CODIGOS', 'elenco di codici incidente');
    !defined('INSPECTORES_INSPECTOR_ANADIDO') && define('INSPECTORES_INSPECTOR_ANADIDO', 'ispettore ha aggiunto!');


    
    
    
?>

