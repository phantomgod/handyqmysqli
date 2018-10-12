<?php
/**
------------------
Language: English

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
 
------------------
*/

if (!defined('ADMINISTRAR_REVISIONES_SISTEMA')) {define('ADMINISTRAR_REVISIONES_SISTEMA', 'Manage system reviews');}
if (!defined('AINFORMES_ACTUALIZADO')) {define('AINFORMES_ACTUALIZADO', 'Report updated!');} 
if (!defined('AINFORMES_ADMINISTRAR')) {define('AINFORMES_ADMINISTRAR', 'Manage audit reports');} 
if (!defined('AINFORMES_ADVERTICE')) {define('AINFORMES_ADVERTICE', 'Click on a link for details');} 
if (!defined('AINFORMES_AI')) {define('AINFORMES_AI', 'Internal audit');} 
if (!defined('AINFORMES_ANADIR')) {define('AINFORMES_ANADIR', 'Add audit report');} 
if (!defined('AINFORMES_AREA_AUDITADA')) {define('AINFORMES_AREA_AUDITADA', 'audited area');} 
if (!defined('AINFORMES_BACK_TO_PRINTLIST')) {define('AINFORMES_BACK_TO_PRINTLIST', 'Back to the list');} 
if (!defined('AINFORMES_BORRAR')) {define('AINFORMES_BORRAR', 'Delete audit report');} 
if (!defined('AINFORMES_BUSCAR')) {define('AINFORMES_BUSCAR', 'Search audit report');} 
if (!defined('AINFORMES_CAMBIAR')) {define('AINFORMES_CAMBIAR', 'Change audit report');} 
if (!defined('AINFORMES_EDITAR')) {define('AINFORMES_EDITAR', 'Edit report');}
if (!defined('AINFORMES_EDITAR')) {define('AINFORMES_EDITAR', 'Edit audit report');} 
if (!defined('AINFORMES_HOJA')) {define('AINFORMES_HOJA', 'Sheet');} 
if (!defined('AINFORMES_IMPRIMIR')) {define('AINFORMES_IMPRIMIR', 'Print report');}
if (!defined('AINFORMES_INFORME')) {define('AINFORMES_INFORME', 'Audit report');} 
if (!defined('AINFORMES_INFORME_BORRADO')) {define('AINFORMES_INFORME_BORRADO', 'Delete report!');} 
if (!defined('AINFORMES_INFORME_ENVIAD0')) {define('AINFORMES_INFORME_ENVIAD0', 'Submitted report');} 
if (!defined('AINFORMES_JOIN')) {define('AINFORMES_JOIN', 'Audits & non-conformities');}
if (!defined('AINFORMES_LISTA_PRINTSCREEN')) {define('AINFORMES_LISTA_PRINTSCREEN', 'List of audit reports');} 
if (!defined('AINFORMES_NUMERO')) {define('AINFORMES_NUMERO', 'AI No.');} 
if (!defined('AINFORMES_OBJETO')) {define('AINFORMES_OBJETO', 'Object');} 
if (!defined('AINFORMES_PONER_OTRO')) {define('AINFORMES_PONER_OTRO', 'Add another report');} 
if (!defined('AINFORMES_PRINT_ADVERTICE')) {define('AINFORMES_PRINT_ADVERTICE', 'Details');} 
if (!defined('AINFORMES_PRINT_DETAILS')) {define('AINFORMES_PRINT_DETAILS', 'Details of the audit report');} 
if (!defined('AINFORMES_QUIERE_BORRAR')) {define('AINFORMES_QUIERE_BORRAR', 'Do you want to delete the report?');} 
if (!defined('APROBAR_DOCUMENTOS')) {define('APROBAR_DOCUMENTOS', 'Approve documents');} 
if (!defined('AREASENSIBLE_QUIERE_BORRAR')) {define('AREASENSIBLE_QUIERE_BORRAR', 'Delete sensitive area?');} 
if (!defined('AUDITOR_ADVERTICE')) {define('AUDITOR_ADVERTICE', 'Click on a link to see details of the auditor');} 
if (!defined('AUDITOR_ANADIDO')) {define('AUDITOR_ANADIDO', 'Auditor added!');} 
if (!defined('AUDITOR_IMG')) {define('AUDITOR_IMG', 'Auditor-img');} 
if (!defined('AUDITOR_LISTA')) {define('AUDITOR_LISTA', 'List of Auditors');} 
if (!defined('AUDITORES')) {define('AUDITORES', 'Auditors');} 
if (!defined('AUDITORES_ADMINISTRAR_AUDITORES')) {define('AUDITORES_ADMINISTRAR_AUDITORES', 'Manage auditors');} 
if (!defined('AUDITORES_AUDITOR_ACTUALIZADO')) {define('AUDITORES_AUDITOR_ACTUALIZADO', 'Auditor up-to-date!');} 
if (!defined('AUDITORES_AUDITOR_BORRADO')) {define('AUDITORES_AUDITOR_BORRADO', 'Auditor deleted!');} 
if (!defined('AUDITORES_BORRAR')) {define('AUDITORES_BORRAR', 'Delete Auditors');} 
if (!defined('AUDITORES_DETALLES')) {define('AUDITORES_DETALLES', 'Details of the auditor');} 
if (!defined('AUDITORES_EDITAR_AUDITOR')) {define('AUDITORES_EDITAR_AUDITOR', 'Edit audit');} 
if (!defined('AUDITORES_QUIERE_BORRAR')) {define('AUDITORES_QUIERE_BORRAR', 'Delete auditor?');} 
if (!defined('AUDITORIA_ACTUALIZADA')) {define('AUDITORIA_ACTUALIZADA', 'Updated audit!');} 
if (!defined('AUDITORIA_ALMACEN')) {define('AUDITORIA_ALMACEN', 'Warehouse audit & racute; n');} 
if (!defined('AUDITORIA_ANADIDA')) {define('AUDITORIA_ANADIDA', 'Added audit!');}
if (!defined('AUDITORIA_CALIDAD')) {define('AUDITORIA_CALIDAD', 'Audit to the dep. quality');} 
if (!defined('AUDITORIA_COMPRAS')) {define('AUDITORIA_COMPRAS', 'Procurement audit');} 
if (!defined('AUDITORIA_DOCUMENTACION')) {define('AUDITORIA_DOCUMENTACION', 'Documentation audit');} 
if (!defined('AUDITORIA_FORMACION')) {define('AUDITORIA_FORMACION', 'Audit training');} 
if (!defined('AUDITORIA_SERVICIO')) {define('AUDITORIA_SERVICIO', 'Audit service');} 
if (!defined('AUDITORIA_TALLER')) {define('AUDITORIA_TALLER', 'Audit workshop');} 
if (!defined('AUDITORIAS_ADMINISTRAR_AUDITORIAS')) {define('AUDITORIAS_ADMINISTRAR_AUDITORIAS', 'Manage audit');} 
if (!defined('AUDITORIAS_ADVERTICE')) {define('AUDITORIAS_ADVERTICE', 'Click on a link for details');} 
if (!defined('AUDITORIAS_AI')) {define('AUDITORIAS_AI', 'Internal audit');} 
if (!defined('AUDITORIAS_ANADIR_AUDITOR')) {define('AUDITORIAS_ANADIR_AUDITOR', 'Add auditor');} 
if (!defined('AUDITORIAS_ANADIR_AUDITORIA')) {define('AUDITORIAS_ANADIR_AUDITORIA', 'Add audit');} 
if (!defined('AUDITORIAS_AUDITOR')) {define('AUDITORIAS_AUDITOR', 'Auditor');}
if (!defined('AUDITORIAS_AUDITORIA')) {define('AUDITORIAS_AUDITORIA', 'Audit');} 
if (!defined('AUDITORIAS_AUDITORIA_BORRADA')) {define('AUDITORIAS_AUDITORIA_BORRADA', 'Audit deleted!');} 
if (!defined('AUDITORIAS_AUDITORIA_ENVIADA')) {define('AUDITORIAS_AUDITORIA_ENVIADA', 'Sent audit');}
if (!defined('AUDITORIAS_BACK_TO_PRINTLIST')) {define('AUDITORIAS_BACK_TO_PRINTLIST', 'Back to the list');} 
if (!defined('AUDITORIAS_BORRAR_AUDITOR')) {define('AUDITORIAS_BORRAR_AUDITOR', 'Delete auditor');} 
if (!defined('AUDITORIAS_BORRAR_AUDITORIA')) {define('AUDITORIAS_BORRAR_AUDITORIA', 'Delete audit');} 
if (!defined('AUDITORIAS_BUSCAR')) {define('AUDITORIAS_BUSCAR', 'Search audits');} 
if (!defined('AUDITORIAS_CAMBIAR_AUDITOR')) {define('AUDITORIAS_CAMBIAR_AUDITOR', 'Auditor change');} 
if (!defined('AUDITORIAS_CAMBIAR_AUDITORIA')) {define('AUDITORIAS_CAMBIAR_AUDITORIA', 'Change audit');} 
if (!defined('AUDITORIAS_CODIGO_HELP')) {define('AUDITORIAS_CODIGO_HELP', 'Remember coding audits.Put the immediate superior which appears next to the field of inclusion. If you AI1201, you should put AI1202, i.e. the 02 audit of 2012!');} 
if (!defined('AUDITORIAS_CUESTIONARIOACALIDAD')) {define('AUDITORIAS_CUESTIONARIOACALIDAD', '* Check that it has been updated with the rules (if applicable) < br / > * verify proper system documents are distributed and approved. < BR / > * check document archive < br / > * check that the list of documents in force is updated < br / > * check if there are delays in scheduled tasks (audits, inspections, objectives, training, indicators) < br / > * check that the data in the database are updated < br / > check that they have scored incidences of providers, in the BD. < br / > * check that the NC-AACCPP where appropriate, as well as the improvements have closed < br / > * check that claims of customers were seen < br / > check the monitoring indicators');} 
if (!defined('AUDITORIAS_CUESTIONARIOACOMPRAS')) {define('AUDITORIAS_CUESTIONARIOACOMPRAS', '* Verify that certifications or approvals of suppliers and products. There are no < br / > * check that you have scored all the incidents taking place with the suppliers. < br / > * check if staff know the proper way to receive the materials. < br / > * check that has been assessed to each provider and that has annotated the result. < br / > * check packing slips or order sheets are properly archived and are signed by the person who the island. < br / > * check the approval of invoices with the delivery notes.');} 
if (!defined('AUDITORIAS_CUESTIONARIOADOCUMENTACION')) {define('AUDITORIAS_CUESTIONARIOADOCUMENTACION', '* Check States of revision. < br / > * check status of storage and file. < br / > * check if it has informed the relevant distribution.');} 
if (!defined('AUDITORIAS_CUESTIONARIOAFORMACION')) {define('AUDITORIAS_CUESTIONARIOAFORMACION', '* Check status of update of the records of training in BD. < br / > * check cards. < br / > * check the revalidation. < br / > * check the courses.');} 
if (!defined('AUDITORIAS_CUESTIONARIOALMACEN')) {define('AUDITORIAS_CUESTIONARIOALMACEN', '* Check dirt and disorder in shelves and useful work. < br / > * check the dirt on soil, debris, or other. < br / > * check the date of revision, signage and zone free from obstacles extinguishers. < br / > * verify the accesses are clear of parts, materials, boxes or other obstacles preventing the transit of people and means of transport < br / > * check the condition and adequacy of the containers.< br / > * check of safety in electrical appliances and installations in general systems of lighting. < br / > * check that fire extinguishers are clean, cards of revision effective and situated in the areas marked for the same. < br / > * check that products are free of corrosion. < br / > * nesting any expired. < br / > * check that there is no material without identifying. < br / > * check the absence of deposits dumpsters in areas of warehouse < br / > * check spills.');} 
if (!defined('AUDITORIAS_CUESTIONARIOALSERVICIO')) {define('AUDITORIAS_CUESTIONARIOALSERVICIO', '* Verify deviations in the monthly customer service < br / > * check that does not lack documentation of work < br / > * check minimum stock on the vehicle < br / > * check and cleaning of vehicles < br / > * check completed work orders < br / > * check work < br / > < br / > LEGIONELLA: < br / > * State and preservation of facilities < br / > * measures "in situ" < br / > * do incidents reported to Dep.from maintenance? < br / > * recent analyses have been delivered? < br / > * book of records a day?');} 
if (!defined('AUDITORIAS_CUESTIONARIOATALLER')) {define('AUDITORIAS_CUESTIONARIOATALLER', '-Pressure gauges and thermometers checked < br / >-order and cleanliness of the workshop < br / >-order and cleanliness of the vehicles < br / >-safety and prevention < br / >-documentation < br / >-separation of zones < br / >-IDs products < br / >-operation Control < br / >');} 
if (!defined('AUDITORIAS_EDITAR_AUDITORIA')) {define('AUDITORIAS_EDITAR_AUDITORIA', 'Edit audit');}
if (!defined('AUDITORIAS_HOJA')) {define('AUDITORIAS_HOJA', 'Sheet');} 
if (!defined('AUDITORIAS_JOIN')) {define('AUDITORIAS_JOIN', 'Audits & non-conformities');} 
if (!defined('AUDITORIAS_JOIN_HELP')) {define('AUDITORIAS_JOIN_HELP', 'If you see empty fields in the column of audits, is that non-compliance does not correspond to any audit or audit does not report internal (for example, external audits)');}
if (!defined('AUDITORIAS_LISTA_PRINTSCREEN')) {define('AUDITORIAS_LISTA_PRINTSCREEN', 'List of audits');} 
if (!defined('AUDITORIAS_NUMERO_AUDITORIA')) {define('AUDITORIAS_NUMERO_AUDITORIA', 'AI No.');} 
if (!defined('AUDITORIAS_OBJETO')) {define('AUDITORIAS_OBJETO', 'Object');} 
if (!defined('AUDITORIAS_PONER_OTRA')) {define('AUDITORIAS_PONER_OTRA', 'Add another audit');} 
if (!defined('AUDITORIAS_PRINT_ADVERTICE')) {define('AUDITORIAS_PRINT_ADVERTICE', 'Details');} 
if (!defined('AUDITORIAS_PRINT_DETAILS')) {define('AUDITORIAS_PRINT_DETAILS', 'The audit details');} 
if (!defined('AUDITORIAS_QUIERE_BORRAR')) {define('AUDITORIAS_QUIERE_BORRAR', 'Delete audit?');} 
if (!defined('AUDITORIAS_VER_AUDITOR')) {define('AUDITORIAS_VER_AUDITOR', 'Print auditor');} 
if (!defined('AVISO_ANADIDO')) {define('AVISO_ANADIDO', 'Added warning!');} 
if (!defined('AVISOS_ADMIN')) {define('AVISOS_ADMIN', 'Manage desktop alerts');} 
if (!defined('AVISOS_AVISO')) {define('AVISOS_AVISO', 'Warning!');} 
if (!defined('AVISOS_AVISO_BORRADO')) {define('AVISOS_AVISO_BORRADO', 'Deletion notice!');} 
if (!defined('AVISOS_AVISOS')) {define('AVISOS_AVISOS', 'Notices');} 
if (!defined('AVISOS_COMUNICADOPOR')) {define('AVISOS_COMUNICADOPOR', 'Communicated by');} 
if (!defined('AVISOS_DELETE')) {define('AVISOS_DELETE', 'Delete notices');} 
if (!defined('AVISOS_DETALLES')) {define('AVISOS_DETALLES', 'Notice details');} 
if (!defined('AVISOS_LISTAVISOS')) {define('AVISOS_LISTAVISOS', 'List of desktop alerts');} 
if (!defined('AVISOS_PONER_AVISO')) {define('AVISOS_PONER_AVISO', 'Place a notice');}
if (!defined('AVISOS_PONERAVISO')) {define('AVISOS_PONERAVISO', 'Put a desktop alert');} 
if (!defined('AVISOS_THEAD_ADVERTICE')) {define('AVISOS_THEAD_ADVERTICE', 'Click on a link to see details of the notice');} 
if (!defined('BORRADO_DOCMANAGER')) {define('BORRADO_DOCMANAGER', 'Delete document!');}  
if (!defined('BORRAR_AREASSENSIBLES')) {define('BORRAR_AREASSENSIBLES', 'Delete sensitive area?');} 
if (!defined('BORRAR_CALIBRACION')) {define('BORRAR_CALIBRACION', 'Delete calibration');} 
if (!defined('BORRAR_DOCMANAGER')) {define('BORRAR_DOCMANAGER', 'Delete document');} 
if (!defined('BORRAR_DOCUMENTO')) {define('BORRAR_DOCUMENTO', 'Delete document');} 
if (!defined('BORRAR_INSPECTOR')) {define('BORRAR_INSPECTOR', 'Delete inspector');} 
if (!defined('BORRAR_OTRA_INCIDENCIA')) {define('BORRAR_OTRA_INCIDENCIA', 'Delete another incidence');} 
if (!defined('BORRAR_OTRO_CURSO')) {define('BORRAR_OTRO_CURSO', 'Delete another course');} 
if (!defined('BORRAR_SEGUIMIENTO')) {define('BORRAR_SEGUIMIENTO', 'Delete target tracking task');}  
if (!defined('BUSCAR_CALIBRACION')) {define('BUSCAR_CALIBRACION', 'Search for calibration');} 
if (!defined('BUSCAR_DOCUMENTOS')) {define('BUSCAR_DOCUMENTOS', 'Search for documents');} 
if (!defined('CALIBRACION_ACTUALIZADA')) {define('CALIBRACION_ACTUALIZADA', 'Updated calibration!');} 
if (!defined('CALIBRACION_ANADIDA')) {define('CALIBRACION_ANADIDA', 'Added calibration');} 
if (!defined('CALIBRACION_QUIERE_BORRAR')) {define('CALIBRACION_QUIERE_BORRAR', 'Delete calibration/es?');} 
if (!defined('CALIBRACIONES_ADMINISTRAR')) {define('CALIBRACIONES_ADMINISTRAR', 'Administer calibrations');} 
if (!defined('CALIBRACIONES_ANADIR')) {define('CALIBRACIONES_ANADIR', 'Add calibration');} 
if (!defined('CALIBRACIONES_BORRAR')) {define('CALIBRACIONES_BORRAR', 'Delete calibration');} 
if (!defined('CALIBRACIONES_CALIBRACION')) {define('CALIBRACIONES_CALIBRACION', 'Calibration');} 
if (!defined('CALIBRACIONES_CALIBRACIONES')) {define('CALIBRACIONES_CALIBRACIONES', 'Calibrations');} 
if (!defined('CALIBRACIONES_DETALLES')) {define('CALIBRACIONES_DETALLES', 'Details of the calibration');} 
if (!defined('CALIBRACIONES_EDITAR')) {define('CALIBRACIONES_EDITAR', 'Edit calibration');} 
if (!defined('CALIBRACIONES_ENCALIBRACION')) {define('CALIBRACIONES_ENCALIBRACION', 'In calibration');} 
if (!defined('CALIBRACIONES_ENREPARACION')) {define('CALIBRACIONES_ENREPARACION', 'In repair');} 
if (!defined('CALIBRACIONES_LISTA')) {define('CALIBRACIONES_LISTA', 'List of calibrations');} 
if (!defined('CALIBRACIONES_MODIFICAR')) {define('CALIBRACIONES_MODIFICAR', 'Edit calibration');} 
if (!defined('CALIBRACIONES_THEAD_ADVERTICE')) {define('CALIBRACIONES_THEAD_ADVERTICE', 'Click on a calibration to edit');} 
if (!defined('CODIGOSINCIDENCIAS_LASTID_HELP')) {define('CODIGOSINCIDENCIAS_LASTID_HELP', 'Put the code number immediately superior to that appears next to the field of inclusion, according to its rule of codes. The code that is the last that was inserted.');}
if (!defined('CODIGOSINCIDENCIAS_QUIERE_BORRAR')) {define('CODIGOSINCIDENCIAS_QUIERE_BORRAR', 'Delete codes of incidents?');} 
if (!defined('CUESTIONARIO_ALMACEN')) {define('CUESTIONARIO_ALMACEN', 'Warehouse');} 
if (!defined('CUESTIONARIO_CALIDAD')) {define('CUESTIONARIO_CALIDAD', 'Office');} 
if (!defined('CUESTIONARIO_COMPRAS')) {define('CUESTIONARIO_COMPRAS', 'Shopping');} 
if (!defined('CUESTIONARIO_DOCUMENTACION')) {define('CUESTIONARIO_DOCUMENTACION', 'Docs');} 
if (!defined('CUESTIONARIO_FORMACION')) {define('CUESTIONARIO_FORMACION', 'Training');} 
if (!defined('CUESTIONARIO_LEGIONELLA')) {define('CUESTIONARIO_LEGIONELLA', 'Legionella');} 
if (!defined('CUESTIONARIO_TALLER')) {define('CUESTIONARIO_TALLER', 'Workshop & equipment');} 
if (!defined('CUESTIONARIO_TRATAMIENTOS')) {define('CUESTIONARIO_TRATAMIENTOS', 'Service');} 
if (!defined('CUESTIONARIOALMACEN_ADVERTENCIA')) {define('CUESTIONARIOALMACEN_ADVERTENCIA', 'If there are no incidents, do not write down anything in the field of inclusion');}
if (!defined('CURSO_ACTUALIZADO')) {define('CURSO_ACTUALIZADO', 'Updated course!');}
if (!defined('CURSO_ANADIDO')) {define('CURSO_ANADIDO', 'Added course!');}
if (!defined('CURSO_QUIERE_BORRAR')) {define('CURSO_QUIERE_BORRAR', 'Delete course?');} 
if (!defined('CURSOS_DEL_TRABAJADOR')) {define('CURSOS_DEL_TRABAJADOR', 'Courses of the worker:');}
if (!defined('DATABASE_HOST')) {define('DATABASE_HOST', 'Name of the server:');} 
if (!defined('DATABASE_HOST_HELP')) {define('DATABASE_HOST_HELP', 'Usually * localhost *. Leave it, since it appears by default');} 
if (!defined('DATABASE_INSTALL_ADVICE')) {define('DATABASE_INSTALL_ADVICE', 'Fill the form to create the database tables. Note: Remember to put the same data connection file.../includes/mysql.php. You must delete this insltalacion file when you are finished.');} 
if (!defined('DATABASE_NAME')) {define('DATABASE_NAME', 'Name of the database:');} 
if (!defined('DATABASE_NAME_HELP')) {define('DATABASE_NAME_HELP', 'The name of the database that will be created the tables, in this installer:');} 
if (!defined('DATABASE_PASSWORD')) {define('DATABASE_PASSWORD', 'Password of the database user:');} 
if (!defined('DATABASE_USERNAME')) {define('DATABASE_USERNAME', 'The database user name:');} 
if (!defined('DOCMANAGER_INSERT')) {define('DOCMANAGER_INSERT', 'Insert document to the data base');}
if (!defined('DOCMANAGER_PRINT')) {define('DOCMANAGER_PRINT', 'See documents of the BD');} 
if (!defined('DOCUMENTO_ACTUALIZADO')) {define('DOCUMENTO_ACTUALIZADO', 'Document updated!');} 
if (!defined('DOCUMENTO_ANADIDO')) {define('DOCUMENTO_ANADIDO', 'Added document!');}
if (!defined('DOCUMENTO_AUTOR')) {define('DOCUMENTO_AUTOR', 'Author');} 
if (!defined('DOCUMENTO_BORRADO')) {define('DOCUMENTO_BORRADO', 'Delete document!');} 
if (!defined('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS')) {define('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS', 'Manage documents');} 
if (!defined('DOCUMENTOS_ANADIR_DOCUMENTO')) {define('DOCUMENTOS_ANADIR_DOCUMENTO', 'Add document');}
if (!defined('DOCUMENTOS_ANOTAR_MODIFICACION')) {define('DOCUMENTOS_ANOTAR_MODIFICACION', 'Record modification');} 
if (!defined('DOCUMENTOS_BORRAR_MODIFICACION')) {define('DOCUMENTOS_BORRAR_MODIFICACION', 'Delete modification');} 
if (!defined('DOCUMENTOS_CAMBIAR_DOCUMENTO')) {define('DOCUMENTOS_CAMBIAR_DOCUMENTO', 'Modify document');} 
if (!defined('DOCUMENTOS_CAPAPART')) {define('DOCUMENTOS_CAPAPART', 'CAPITULO-Apartado');} 
if (!defined('DOCUMENTOS_CLAVE1_HELP')) {define('DOCUMENTOS_CLAVE1_HELP', 'Put who distributed the document.');} 
if (!defined('DOCUMENTOS_DOCUMENTO')) {define('DOCUMENTOS_DOCUMENTO', 'Document');} 
if (!defined('DOCUMENTOS_EDITAR_MODIFICACION')) {define('DOCUMENTOS_EDITAR_MODIFICACION', 'Edit modification');} 
if (!defined('DOCUMENTOS_FECHAMODIFICACION')) {define('DOCUMENTOS_FECHAMODIFICACION', 'Modification date');} 
if (!defined('DOCUMENTOS_IDSOLICITUD')) {define('DOCUMENTOS_IDSOLICITUD', 'ID request');} 
if (!defined('DOCUMENTOS_IDSOLICITUD_HELP')) {define('DOCUMENTOS_IDSOLICITUD_HELP', 'Put in id immediate superior which appears next to the inclusion');}  
if (!defined('DOCUMENTOS_JOIN')) {define('DOCUMENTOS_JOIN', 'Document modifications');} 
if (!defined('DOCUMENTOS_LINK_HELP')) {define('DOCUMENTOS_LINK_HELP', 'Put the address of the folder to which the document uploaded. For example: /uploads/calidad/documento.pdf');}  
if (!defined('DOCUMENTOS_LISTA')) {define('DOCUMENTOS_LISTA', 'List of documents');} 
if (!defined('DOCUMENTOS_LISTA_MODIFICACIONES')) {define('DOCUMENTOS_LISTA_MODIFICACIONES', 'List of modifications');} 
if (!defined('DOCUMENTOS_MAPA')) {define('DOCUMENTOS_MAPA', 'Map of documents');} 
if (!defined('DOCUMENTOS_MODIFDOC_ADMIN')) {define('DOCUMENTOS_MODIFDOC_ADMIN', 'Changes to documents');} 
if (!defined('DOCUMENTOS_MODIFDOC_DELETED')) {define('DOCUMENTOS_MODIFDOC_DELETED', 'Amendment deleted!');} 
if (!defined('DOCUMENTOS_MODIFICACION')) {define('DOCUMENTOS_MODIFICACION', 'Modification');} 
if (!defined('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR')) {define('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR', 'Do you want to delete this modification?');} 
if (!defined('DOCUMENTOS_MODIFICACIONES')) {define('DOCUMENTOS_MODIFICACIONES', 'Modifications to the document:');} 
if (!defined('DOCUMENTOS_MODIFICACIONES_DETALLES')) {define('DOCUMENTOS_MODIFICACIONES_DETALLES', 'Details of the modification');} 
if (!defined('DOCUMENTOS_MODIFICADOS')) {define('DOCUMENTOS_MODIFICADOS', 'Modified documents');} 
if (!defined('DOCUMENTOS_MODIFICAROTRO_DOCUMENTO')) {define('DOCUMENTOS_MODIFICAROTRO_DOCUMENTO', 'Modify document');}
if (!defined('DOCUMENTOS_NUMEROREVISION')) {define('DOCUMENTOS_NUMEROREVISION', 'Review No.');} 
if (!defined('DOCUMENTOS_PRINT_DETAILS')) {define('DOCUMENTOS_PRINT_DETAILS', 'Details of the document');} 
if (!defined('DOCUMENTOS_QUIERE_BORRAR')) {define('DOCUMENTOS_QUIERE_BORRAR', 'Do you want to delete this document?');} 
if (!defined('DOCUMENTOS_SECCIONID')) {define('DOCUMENTOS_SECCIONID', 'ID section');} 
if (!defined('DOCUMENTOS_THEAD_ADVERTICE')) {define('DOCUMENTOS_THEAD_ADVERTICE', 'Click on a link for details');} 
if (!defined('DOCUMENTOS_THEAD_ADVERTICE_JOIN')) {define('DOCUMENTOS_THEAD_ADVERTICE_JOIN', 'Click on a document for changes');} 
if (!defined('DOCUMENTOS_ULTIMA_REVISION')) {define('DOCUMENTOS_ULTIMA_REVISION', 'Click on the button to see the latest revision annotated document. Documents that do not appear in the pop-up list, or not have revised, or are not reviewable, not be subject to change.');} 
if (!defined('DOCUMENTOS_ULTIMAS_MODIFICACIONES')) {define('DOCUMENTOS_ULTIMAS_MODIFICACIONES', 'Latest modifications');} 
if (!defined('DOCUMENTOS_ENCONTRADOS')) {define('DOCUMENTOS_ENCONTRADOS', 'Documents found in:.');} 
if (!defined('EDITAR_AVISO')) {define('EDITAR_AVISO', 'Edit notice');} 
if (!defined('EDITAR_BORRAR_DOCUMENTO')) {define('EDITAR_BORRAR_DOCUMENTO', 'Edit and delete documents');} 
if (!defined('EDITAR_BORRAR_MODIFDOC')) {define('EDITAR_BORRAR_MODIFDOC', 'Edit and delete changes on the fly');} 
if (!defined('EDITAR_INSPECTOR')) {define('EDITAR_INSPECTOR', 'Editing inspector');}
if (!defined('EDITAR_TAREA')) {define('EDITAR_TAREA', 'Edit Task');}
if (!defined('EJECUTAR_REVISION')) {define('EJECUTAR_REVISION', 'Run review');}
if (!defined('EQUIPO_BORRADO')) {define('EQUIPO_BORRADO', 'Delete team!');} 
if (!defined('EQUIPOS_ADMINISTRAR')) {define('EQUIPOS_ADMINISTRAR', 'Manage computers');} 
if (!defined('EQUIPOS_ANADIR')) {define('EQUIPOS_ANADIR', 'Add measuring equipment');} 
if (!defined('EQUIPOS_BORRAR')) {define('EQUIPOS_BORRAR', 'Delete measurement equipment');} 
if (!defined('EQUIPOS_BORRAR_OTRO')) {define('EQUIPOS_BORRAR_OTRO', 'Delete another computer');}
if (!defined('EQUIPOS_CALIBRACION')) {define('EQUIPOS_CALIBRACION', 'Calibration');} 
if (!defined('EQUIPOS_CAMBIAR')) {define('EQUIPOS_CAMBIAR', 'Modify team');} 
if (!defined('EQUIPOS_CRITERIO')) {define('EQUIPOS_CRITERIO', 'Acceptance criteria:');} 
if (!defined('EQUIPOS_EDITAR')) {define('EQUIPOS_EDITAR', 'Edit team');} 
if (!defined('EQUIPOS_EQUIPO')) {define('EQUIPOS_EQUIPO', 'Team:');} 
if (!defined('EQUIPOS_EQUIPOS')) {define('EQUIPOS_EQUIPOS', 'Metrology');} 
if (!defined('EQUIPOS_FRECUENCALIB')) {define('EQUIPOS_FRECUENCALIB', 'Calibration frequency:');} 
if (!defined('EQUIPOS_LISTA')) {define('EQUIPOS_LISTA', 'List of measuring equipment');} 
if (!defined('EQUIPOS_MODELO')) {define('EQUIPOS_MODELO', 'Model:');} 
if (!defined('EQUIPOS_PRINT_DETAILS')) {define('EQUIPOS_PRINT_DETAILS', 'Equipment details');} 
if (!defined('EQUIPOS_QUIERE_BORRAR')) {define('EQUIPOS_QUIERE_BORRAR', 'Delete team?');} 
if (!defined('EQUIPOS_THEAD_ADVERTICE')) {define('EQUIPOS_THEAD_ADVERTICE', 'Click on a team to view details');} 
if (!defined('EQUIPOS_UBICACION')) {define('EQUIPOS_UBICACION', 'Location:');} 
if (!defined('EXTINTOR_QUIERE_BORRAR')) {define('EXTINTOR_QUIERE_BORRAR', 'Delete fire extinguisher (s)?');} 
if (!defined('EXTINTORES_ADMINISTRAR_EXTINTORES')) {define('EXTINTORES_ADMINISTRAR_EXTINTORES', 'Manage fire extinguishers');} 
if (!defined('EXTINTORES_AGENTE_EXTINTOR')) {define('EXTINTORES_AGENTE_EXTINTOR', 'Fire extinguishing agent');} 
if (!defined('EXTINTORES_ANADIR_EXTINTOR')) {define('EXTINTORES_ANADIR_EXTINTOR', 'Add fire extinguisher');} 
if (!defined('EXTINTORES_BORRAR_EXTINTOR')) {define('EXTINTORES_BORRAR_EXTINTOR', 'Delete fire extinguisher');} 
if (!defined('EXTINTORES_BUSCAR_EXTINTOR')) {define('EXTINTORES_BUSCAR_EXTINTOR', 'Search extinguisher');} 
if (!defined('EXTINTORES_CLIENTE')) {define('EXTINTORES_CLIENTE', 'Customer');} 
if (!defined('EXTINTORES_DETALLES')) {define('EXTINTORES_DETALLES', 'Details of the fire extinguisher');} 
if (!defined('EXTINTORES_EDITAR_EXTINTOR')) {define('EXTINTORES_EDITAR_EXTINTOR', 'Edit fire extinguisher');} 
if (!defined('EXTINTORES_EJECUCION')) {define('EXTINTORES_EJECUCION', 'Execution');} 
if (!defined('EXTINTORES_EXTINTOR')) {define('EXTINTORES_EXTINTOR', 'Fire extinguisher');} 
if (!defined('EXTINTORES_EXTINTOR_ACTUALIZADO')) {define('EXTINTORES_EXTINTOR_ACTUALIZADO', 'Updated fire extinguisher!');} 
if (!defined('EXTINTORES_EXTINTOR_ANADIDO')) {define('EXTINTORES_EXTINTOR_ANADIDO', 'Added fire extinguisher');} 
if (!defined('EXTINTORES_EXTINTOR_BORRADO')) {define('EXTINTORES_EXTINTOR_BORRADO', 'Delete fire extinguisher');} 
if (!defined('EXTINTORES_EXTINTORES')) {define('EXTINTORES_EXTINTORES', 'Fire extinguishers');} 
if (!defined('EXTINTORES_FECHA_FABRICACION')) {define('EXTINTORES_FECHA_FABRICACION', 'Date of manufacture');} 
if (!defined('EXTINTORES_LISTA')) {define('EXTINTORES_LISTA', 'List of fire extinguishers');} 
if (!defined('EXTINTORES_MODIFICAR_EXTINTOR')) {define('EXTINTORES_MODIFICAR_EXTINTOR', 'Modified fire extinguisher');} 
if (!defined('EXTINTORES_NDESERIE')) {define('EXTINTORES_NDESERIE', 'Serial No.');} 
if (!defined('EXTINTORES_NUMEXTINTORES')) {define('EXTINTORES_NUMEXTINTORES', 'number of fire extinguishers');} 
if (!defined('EXTINTORES_PROXIMA_EJECUCION')) {define('EXTINTORES_PROXIMA_EJECUCION', 'Next run');} 
if (!defined('EXTINTORES_THEAD_ADVERTICE')) {define('EXTINTORES_THEAD_ADVERTICE', 'Click on a fire extinguisher to edit');} 
if (!defined('FORMACION_ADMINISTRAR_FORMACION')) {define('FORMACION_ADMINISTRAR_FORMACION', 'Manage training');} 
if (!defined('FORMACION_ANADIR_CURSO')) {define('FORMACION_ANADIR_CURSO', 'Add course');} 
if (!defined('FORMACION_BORRAR_CURSO')) {define('FORMACION_BORRAR_CURSO', 'Delete course');}
if (!defined('FORMACION_CAPTION_ADD')) {define('FORMACION_CAPTION_ADD', 'Add a training course');} 
if (!defined('FORMACION_CAPTION_MODIFY')) {define('FORMACION_CAPTION_MODIFY', 'Modify a training course');} 
if (!defined('FORMACION_CURSO')) {define('FORMACION_CURSO', 'Course');} 
if (!defined('FORMACION_CURSO_BORRADO')) {define('FORMACION_CURSO_BORRADO', 'Deleted course!');} 
if (!defined('FORMACION_CURSOS_REALIZADOS')) {define('FORMACION_CURSOS_REALIZADOS', 'Courses');} 
if (!defined('FORMACION_CURSOS_REALIZADOS_TRABAJADOR')) {define('FORMACION_CURSOS_REALIZADOS_TRABAJADOR', 'Courses conducted by the worker');} 
if (!defined('FORMACION_HORAS')) {define('FORMACION_HORAS', 'Hours');} 
if (!defined('FORMACION_LISTACURSOS')) {define('FORMACION_LISTACURSOS', 'List of courses');} 
if (!defined('FORMACION_LUGAR')) {define('FORMACION_LUGAR', 'Place');} 
if (!defined('FORMACION_MODIFICAR_CURSO')) {define('FORMACION_MODIFICAR_CURSO', 'Modify course');} 
if (!defined('FORMACION_THEAD_MODIFY_ADVERTICE')) {define('FORMACION_THEAD_MODIFY_ADVERTICE', 'Click on a link to edit the course');} 
if (!defined('FORMACION_VALIDACION')) {define('FORMACION_VALIDACION', 'Validation');} 
if (!defined('ABRIR')) {define('ABRIR', 'Open');} 
if (!defined('ACCION')) {define('ACCION', 'Action');} 
if (!defined('ACTIVAR')) {define('ACTIVAR', 'Activate');} 
if (!defined('ACTIVIDAD')) {define('ACTIVIDAD', 'Activity');} 
if (!defined('ACTIVO')) {define('ACTIVO', 'Active');} 
if (!defined('ACTUALIZAR')) {define('ACTUALIZAR', 'Update');} 
if (!defined('ADVERTICE')) {define('ADVERTICE', 'Click to view details');} 
if (!defined('ALMACEN')) {define('ALMACEN', 'Warehouse');} 
if (!defined('ANADIR')) {define('ANADIR', 'Add');}
if (!defined('ANO')) {define('ANO', 'Year');} 
if (!defined('ANO')) {define('ANO', 'Year');} 
if (!defined('ANO_MES_DIA')) {define('ANO_MES_DIA', 'Year-month - day');} 
if (!defined('APROBADO')) {define('APROBADO', 'Approved:');}
if (!defined('AUDITORIAS')) {define('AUDITORIAS', 'Audits.');}
if (!defined('AYUDA')) {define('AYUDA', 'Help');} 
if (!defined('BACK')) {define('BACK', 'Back');} 
if (!defined('BACKUP')) {define('BACKUP', 'The BD backup');} 
if (!defined('BAJA')) {define('BAJA', 'Low');} 
if (!defined('BORRAR')) {define('BORRAR', 'Delete');} 
if (!defined('BORRAR_OTRO')) {define('BORRAR_OTRO', 'Delete another record');}
if (!defined('BORRAR_SELECCIONADOS')) {define('BORRAR_SELECCIONADOS', 'Delete selected');}
if (!defined('BUSCAR')) {define('BUSCAR', 'To find!');} 
if (!defined('CALCULAR')) {define('CALCULAR', 'Calculate');}
if (!defined('CALIDAD')) {define('CALIDAD', 'Quality');} 
if (!defined('CAMBIOS')) {define('CAMBIOS', 'Changes that may affect the system.');}
if (!defined('CENTRO')) {define('CENTRO', 'Center');}
if (!defined('CIF')) {define('CIF', 'CIF');} 
if (!defined('CLIENTE')) {define('CLIENTE', 'Customer');} 
if (!defined('CLIENTES')) {define('CLIENTES', 'Clients.');}
if (!defined('CODIGO')) {define('CODIGO', 'Code');}
if (!defined('CODIGO')) {define('CODIGO', 'Code');}
if (!defined('CODIGO_ACTUALIZADO')) {define('CODIGO_ACTUALIZADO', 'Updated code!');}
if (!defined('CODIGO_INCIDENCIA')) {define('CODIGO_INCIDENCIA', 'Code of incidence:');} 
if (!defined('COMENTARIOS')) {define('COMENTARIOS', 'Reviews');} 
if (!defined('COMIENZO')) {define('COMIENZO', 'Start');}
if (!defined('COMPRAS')) {define('COMPRAS', 'Shopping');} 
if (!defined('CONSULTAR')) {define('CONSULTAR', 'Consult');}
if (!defined('CONTENIDO')) {define('CONTENIDO', 'Content');} 
if (!defined('DEBE_SELECCIONAR')) {define('DEBE_SELECCIONAR', 'You must select any record!');}
if (!defined('DELETE_ADVERTICE')) {define('DELETE_ADVERTICE', 'The erase button is at the end of the list');} 
if (!defined('DESACTIVAR')) {define('DESACTIVAR', 'Disable');} 
if (!defined('DESCRIPCION')) {define('DESCRIPCION', 'Description');} 
if (!defined('DESVIACION')) {define('DESVIACION', 'Deviation');} 
if (!defined('DIRECCION')) {define('DIRECCION', 'Address');} 
if (!defined('DIRECTIVOS')) {define('DIRECTIVOS', 'Managers');}
if (!defined('DISTRIBUCION')) {define('DISTRIBUCION', 'Distribution');}
if (!defined('DISTRIBUIDO')) {define('DISTRIBUIDO', 'Distributed');}
if (!defined('DOCUMENTACION')) {define('DOCUMENTACION', 'Documentation');} 
if (!defined('DOCUMENTOS')) {define('DOCUMENTOS', 'Documents');} 
if (!defined('EDITAR')) {define('EDITAR', 'Edit');} 
if (!defined('EMPLEADO')) {define('EMPLEADO', 'Employee');}
if (!defined('ENVIAR')) {define('ENVIAR', 'Send');} 
if (!defined('ERROR_ANADIR_REGISTRO')) {define('ERROR_ANADIR_REGISTRO', 'Error adding the registry');} 
if (!defined('ESCRITORIO')) {define('ESCRITORIO', 'Input messages - >');} 
if (!defined('ESTADO')) {define('ESTADO', 'State');} 
if (!defined('EXPLORAR_ARCHIVOS')) {define('EXPLORAR_ARCHIVOS', 'Explore files');} 
if (!defined('FECHA')) {define('FECHA', 'Date');}
if (!defined('FECHA')) {define('FECHA', 'Date');} 
if (!defined('FORMACION')) {define('FORMACION', 'Training');}  
if (!defined('GRAVEDAD')) {define('GRAVEDAD', 'Code');}
if (!defined('HORA')) {define('HORA', 'Time');} 
if (!defined('IDIOMA')) {define('IDIOMA', 'Select language');} 
if (!defined('IMAGEN')) {define('IMAGEN', 'Image');}
if (!defined('IMAGEN')) {define('IMAGEN', 'Image');}
if (!defined('IMAGEN_HELP')) {define('IMAGEN_HELP', 'Select or click on the image to change');}
if (!defined('IMAGEN_URL')) {define('IMAGEN_URL', 'The image link');} 
if (!defined('IMAGEN_URLHELP')) {define('IMAGEN_URLHELP', 'You must put the link to the image');}
if (!defined('IMAGENACTUAL')) {define('IMAGENACTUAL', 'Current image');}
if (!defined('IMAGENES')) {define('IMAGENES', 'Images');}
if (!defined('IMPRIMIR')) {define('IMPRIMIR', 'Print log');} 
if (!defined('IMPRIMIR_PAPEL')) {define('IMPRIMIR_PAPEL', 'Print on paper');} 
if (!defined('INACTIVO')) {define('INACTIVO', 'Inactive');} 
if (!defined('INCIDENCIA')) {define('INCIDENCIA', 'Incidence');}
if (!defined('INCIDENCIAS')) {define('INCIDENCIAS', 'Incidents');} 
if (!defined('INDICADOR')) {define('INDICADOR', 'Indicator');} 
if (!defined('INDICADORES_DEPRODUCCION')) {define('INDICADORES_DEPRODUCCION', 'OP (operational) indicators');}
if (!defined('INDICADORES_DERECURSOS')) {define('INDICADORES_DERECURSOS', 'Indicators REC');}
if (!defined('INDICADORES_MEDICIONANALISISYMEJORA')) {define('INDICADORES_MEDICIONANALISISYMEJORA', 'Indicators of MAM.');} 
if (!defined('INFORME')) {define('INFORME', 'Report');}
if (!defined('INFORME')) {define('INFORME', 'Report');}
if (!defined('LIMITE')) {define('LIMITE', 'Limit');} 
if (!defined('LIMITE')) {define('LIMITE', 'Limit');}
if (!defined('LISTA')) {define('LISTA', 'List');} 
if (!defined('LUGAR')) {define('LUGAR', 'Place');} 
if (!defined('MEDICIONES')) {define('MEDICIONES', 'Measurements');}
if (!defined('MODIFICAR')) {define('MODIFICAR', 'Modify');} 
if (!defined('NOCONFORMIDADESYMEJORAS')) {define('NOCONFORMIDADESYMEJORAS', 'Non-conformities and improvements.');}
if (!defined('NOMBRE_INCIDENCIA')) {define('NOMBRE_INCIDENCIA', 'Name of the incidence');} 
if (!defined('NOSEHAENCONTRADO')) {define('NOSEHAENCONTRADO', 'No record found!');}
if (!defined('OBJETIVOS')) {define('OBJETIVOS', 'The quality objectives.');}
if (!defined('OBSERVACIONES')) {define('OBSERVACIONES', 'Observations');} 
if (!defined('OCUPACION')) {define('OCUPACION', 'Occupation');}
if (!defined('OPERACIONES')) {define('OPERACIONES', 'Operacion-servicio');}
if (!defined('OPERATIVO')) {define('OPERATIVO', 'Operating');} 
if (!defined('PAGINAR')) {define('PAGINAR', 'Paging');} 
if (!defined('POLITICADECALIDAD')) {define('POLITICADECALIDAD', 'Quality policy.');}
if (!defined('PRESENTACION')) {define('PRESENTACION', 'Cell phone-q is a software for the management of quality online office');} 
if (!defined('PROCEDIMIENTO')) {define('PROCEDIMIENTO', 'Procedure');} 
if (!defined('PRODUCCION')) {define('PRODUCCION', 'Production');} 
if (!defined('PROXIMA')) {define('PROXIMA', 'Next');}
if (!defined('QUEJASCLIENTE')) {define('QUEJASCLIENTE', 'Complaints and claims.');}
if (!defined('RECLAMACIONES')) {define('RECLAMACIONES', 'Claims.');}
if (!defined('RECOMENDACIONESYCONCLUSIONES')) {define('RECOMENDACIONESYCONCLUSIONES', 'Recommendations and conclusions.');} 
if (!defined('RECUERDE_LOS_CODIGOS')) {define('RECUERDE_LOS_CODIGOS', '0 Uneventful < br / > 1 lack of instrumental < br / > 2 lack of product < br / > 3 poor treatment < br / > 4 lack of protection measures < br / > 5 lack of planning of work < br / > 6 lack of treatments certificates < br / > 7 lack of clothes, toiletries and personal hygiene < br / > 8 lack of conservation and cleaning of the vehicle');} 
if (!defined('RECUERDE_SELECCIONAR')) {define('RECUERDE_SELECCIONAR', 'Remember that you must select any record!');}
if (!defined('RECURSOS')) {define('RECURSOS', 'Resources');}
if (!defined('RESPONSABLE')) {define('RESPONSABLE', 'Responsible for');} 
if (!defined('RESULTADO')) {define('RESULTADO', 'Result');} 
if (!defined('SATISFACCION')) {define('SATISFACCION', 'Satisfaction.');}
if (!defined('SELECCIONAR')) {define('SELECCIONAR', 'Select');}
if (!defined('SELECCIONAR_Y_BORRAR')) {define('SELECCIONAR_Y_BORRAR', 'Select and delete');}
if (!defined('SELECCIONE_EL_CODIGO')) {define('SELECCIONE_EL_CODIGO', 'Select the code. The code 0 - uneventful - appears by default.If appears another code, select it from the drop-down list.Although the description appears, it takes only the numerical value, in order to automate the incidences of inspection indicator graphs.');} 
if (!defined('TALLER')) {define('TALLER', 'Workshop');} 
if (!defined('TERMINACION')) {define('TERMINACION', 'Termination');} 
if (!defined('TERMINACION')) {define('TERMINACION', 'Termination');}
if (!defined('TIPO')) {define('TIPO', 'Type');}
if (!defined('ULTIMA')) {define('ULTIMA', 'Last');}
if (!defined('ULTIMO_COMUNICADO')) {define('ULTIMO_COMUNICADO', 'latest release');} 
if (!defined('UPLOADIMAGE')) {define('UPLOADIMAGE', 'Upload image');}
if (!defined('VEHICULOS')) {define('VEHICULOS', 'Vehicles');} 
if (!defined('VISIBLE')) {define('VISIBLE', 'Visible?');} 
if (!defined('VOLVER')) {define('VOLVER', 'Return');} 
if (!defined('HEADER_TITLE')) {define('HEADER_TITLE', 'Quality systems');} 
if (!defined('HEADING')) {define('HEADING', 'Heading');}
if (!defined('IMPRIMIR_AUDITOR')) {define('IMPRIMIR_AUDITOR', 'Print auditor');} 
if (!defined('IMPRIMIR_AUDITORIA')) {define('IMPRIMIR_AUDITORIA', 'Print audit');}
if (!defined('IMPRIMIR_INSPECCION')) {define('IMPRIMIR_INSPECCION', 'Print inspection');}
if (!defined('IMPRIMIR_INSPECTOR')) {define('IMPRIMIR_INSPECTOR', 'Print inspector');}
if (!defined('IMPRIMIR_OBJETIVO')) {define('IMPRIMIR_OBJETIVO', 'Print target');} 
if (!defined('IMPRIMIR_REVISION')) {define('IMPRIMIR_REVISION', 'Print system review');}
if (!defined('INCIDENCIAS_QUIERE_BORRAR')) {define('INCIDENCIAS_QUIERE_BORRAR', 'Delete advocacy/s?');} 
if (!defined('INDICADOR_ALMACEN_HELP')) {define('INDICADOR_ALMACEN_HELP', '< 4 minor incidents');}
if (!defined('INDICADOR_COMPRAS_HELP')) {define('INDICADOR_COMPRAS_HELP', '* No more than 2.5% of incidents on the quality of the suppliers');}
if (!defined('INDICADOR_DOCUMENTACION_HELP')) {define('INDICADOR_DOCUMENTACION_HELP', '< 4 minor incidents');}
if (!defined('INDICADOR_FORMACION_HELP')) {define('INDICADOR_FORMACION_HELP', '> = 4 hours a year of internal training');}
if (!defined('INDICADOR_INFRAESTRUCTURA_HELP')) {define('INDICADOR_INFRAESTRUCTURA_HELP', '< 4 minor incidents');}
if (!defined('INDICADOR_OFICINA_HELP')) {define('INDICADOR_OFICINA_HELP', '< 4 minor incidents');}
if (!defined('INDICADOR_SERVICIO_HELP')) {define('INDICADOR_SERVICIO_HELP', '* Zero complaints customer < br / > * not more than 1 incidence slight in service inspections < br / > * not more than 2.5% of incidents due to our services < br / > * not more than 16% of claims (calls) monthly customers');}
if (!defined('INDICADORES_DESVIACIONCIERRESNCS')) {define('INDICADORES_DESVIACIONCIERRESNCS', 'Deviations from closure of non-conformities');} 
if (!defined('INDICADORES_FORMACIONANUAL')) {define('INDICADORES_FORMACIONANUAL', 'Annual training hours');}
if (!defined('INDICADORES_GRAFICACONTROLAVISOS')) {define('INDICADORES_GRAFICACONTROLAVISOS', 'Percentage of listings per month');} 
if (!defined('INDICADORES_GRAFICAINCIDENCIASALMACEN')) {define('INDICADORES_GRAFICAINCIDENCIASALMACEN', 'Incidences in inspections of warehouse');} 
if (!defined('INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR')) {define('INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR', 'Incidences of supplier');} 
if (!defined('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES')) {define('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES', 'Incidents in service inspections');} 
if (!defined('INDICADORES_GRAFICAS')) {define('INDICADORES_GRAFICAS', 'Graphical indicators');} 
if (!defined('INDICADORES_HELP')) {define('INDICADORES_HELP', 'The calculation is made from the selected at later date');}
if (!defined('INDICADORES_INCIDENCIASDEALMACEN')) {define('INDICADORES_INCIDENCIASDEALMACEN', 'Incidences of warehouse');} 
if (!defined('INDICADORES_INCIDENCIASDEINSPECCION')) {define('INDICADORES_INCIDENCIASDEINSPECCION', 'Incidents in service inspections');}
if (!defined('INDICADORES_INCIDENCIASDEPROVEEDOR')) {define('INDICADORES_INCIDENCIASDEPROVEEDOR', 'Incidences of supplier');}
 if (!defined('INDICADORES_INDICADORES')) {define('INDICADORES_INDICADORES', 'Indicators');} 
if (!defined('INDICADORES_NCSPORAREA')) {define('INDICADORES_NCSPORAREA', 'Number of nonconformities per area');} 
if (!defined('INDICADORES_NOCONFORMIDADESPORAREA')) {define('INDICADORES_NOCONFORMIDADESPORAREA', 'Non-conformities by area');}  
if (!defined('INDICADORES_TODOS')) {define('INDICADORES_TODOS', 'All indicators');} 
if (!defined('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR')) {define('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR', 'Total hours of training per worker');} 
if (!defined('INDICADORES_VALORACIONGLOBALCLIENTES')) {define('INDICADORES_VALORACIONGLOBALCLIENTES', 'Overall assessment of customers');} 
if (!defined('INSPECCIONES')) {define('INSPECCIONES', 'Inspections');}
if (!defined('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS')) {define('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Manage codes of incidents');}  
if (!defined('INSPECCIONES_ADMINISTRAR_INSPECCIONES')) {define('INSPECCIONES_ADMINISTRAR_INSPECCIONES', 'Manage inspections');} 
if (!defined('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA')) {define('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA', 'Add code of incidence');}  
if (!defined('INSPECCIONES_ANADIR_INSPECCION')) {define('INSPECCIONES_ANADIR_INSPECCION', 'Add inspection');} 
if (!defined('INSPECCIONES_BORRAR_INSPECCION')) {define('INSPECCIONES_BORRAR_INSPECCION', 'Delete inspection');} 
if (!defined('INSPECCIONES_BORRAR_OTRA')) {define('INSPECCIONES_BORRAR_OTRA', 'Delete another inspection');}
if (!defined('INSPECCIONES_BUSCAR')) {define('INSPECCIONES_BUSCAR', 'Search for inspection');} 
if (!defined('INSPECCIONES_CAMBIAR_INSPECCION')) {define('INSPECCIONES_CAMBIAR_INSPECCION', 'Change inspection');} 
if (!defined('INSPECCIONES_CODIGOS_ADVERTICE')) {define('INSPECCIONES_CODIGOS_ADVERTICE', 'Click on a code to edit');} 
if (!defined('INSPECCIONES_CODIGOSINCIDENCIAS_HELP')) {define('INSPECCIONES_CODIGOSINCIDENCIAS_HELP', 'Always place a numeric code. If it isn´t, the graph of incidences of inspections will not draw.');}
if (!defined('INSPECCIONES_EDITAR_INSPECCION')) {define('INSPECCIONES_EDITAR_INSPECCION', 'Edit inspection');}
if (!defined('INSPECCIONES_INSPECCION_BORRADA')) {define('INSPECCIONES_INSPECCION_BORRADA', 'Deleted inspection!');} 
if (!defined('INSPECCIONES_INSPECTOR')) {define('INSPECCIONES_INSPECTOR', 'Inspector');}
if (!defined('INSPECCIONES_LISTA')) {define('INSPECCIONES_LISTA', 'List of inspections');} 
if (!defined('INSPECCIONES_LISTA_CODIGOS')) {define('INSPECCIONES_LISTA_CODIGOS', 'List of codes of incidents');} 
if (!defined('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA')) {define('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA', 'Modify code of incidence');}  
if (!defined('INSPECCIONES_PRINTSCREEN')) {define('INSPECCIONES_PRINTSCREEN', 'Details of the inspection');} 
if (!defined('INSPECCIONES_QUIERE_BORRAR')) {define('INSPECCIONES_QUIERE_BORRAR', 'Delete inspection?');} 
if (!defined('INSPECCIONES_THEAD_ADVERTICE')) {define('INSPECCIONES_THEAD_ADVERTICE', 'Click on a date to view details');} 
if (!defined('INSPECCION_SERVICIOS')) {
    define('INSPECCION_SERVICIOS', '<ol type=1><li>Verify that each extinguisher is in place that is assigned<li>Check that the extinguisher is adequate to protect risk.<li>Check that fire extinguishers have obstructed access, are visible or marked and the management INSTRUCTION located in the front.<li>Check the instructions that are clearly legible handling.<li>Check for samples having apparent damage.<li>Check that fire extinguishers with pressure gauge, it is in the area of ​​operation.<li>Check visually, the external state of the mechanical parts (nozzles, valve, hose, etc.).<li>Sure they are not broken or missing seals or plugs use indicators.<li>Verifying that have not been downloaded completely or partially.</ol>');
} 
if (!defined('INSPECTOR_ACTUALIZADO')) {define('INSPECTOR_ACTUALIZADO', 'Updated property inspector!');} 
if (!defined('INSPECTORES')) {define('INSPECTORES', 'Inspectors');} 
if (!defined('INSPECTORES_ADMINISTRAR_INSPECTORES')) {define('INSPECTORES_ADMINISTRAR_INSPECTORES', 'Manage inspectors');} 
if (!defined('INSPECTORES_ANADIR_INSPECTOR')) {define('INSPECTORES_ANADIR_INSPECTOR', 'Add inspector');} 
if (!defined('INSPECTORES_CAMBIAR_INSPECTOR')) {define('INSPECTORES_CAMBIAR_INSPECTOR', 'Change inspector');} 
if (!defined('INSPECTORES_EDITAR_INSPECTOR')) {define('INSPECTORES_EDITAR_INSPECTOR', 'Editing inspector');} 
if (!defined('INSPECTORES_INSPECTOR_ANADIDO')) {define('INSPECTORES_INSPECTOR_ANADIDO', 'Added Inspector!');}
if (!defined('INSPECTORES_INSPECTOR_BORRADO')) {define('INSPECTORES_INSPECTOR_BORRADO', 'Delete Inspector!');} 
if (!defined('INSPECTORES_LISTA')) {define('INSPECTORES_LISTA', 'List of inspectors');} 
if (!defined('INSPECTORES_QUIERE_BORRAR')) {define('INSPECTORES_QUIERE_BORRAR', 'Delete inspector?');} 
if (!defined('LAULTIMAAUDITORIA_FUE')) {define('LAULTIMAAUDITORIA_FUE', 'The last audit was:');} 
if (!defined('MENU_AINFORMES')) {define('MENU_AINFORMES', 'Audit reports');} 
if (!defined('MENU_ALT_ADDTASK_OBJETIVOS')) {define('MENU_ALT_ADDTASK_OBJETIVOS', 'Add a task to a target');} 
if (!defined('MENU_ALT_ADMINISTRAR_AINFORMES')) {define('MENU_ALT_ADMINISTRAR_AINFORMES', 'Manage audit reports');} 
if (!defined('MENU_ALT_ADMINISTRAR_AUDITOR')) {define('MENU_ALT_ADMINISTRAR_AUDITOR', 'Managing auditor');} 
if (!defined('MENU_ALT_ADMINISTRAR_AUDITORIAS')) {define('MENU_ALT_ADMINISTRAR_AUDITORIAS', 'Manage audit');} 
if (!defined('MENU_ALT_ADMINISTRAR_CALIBRACIONES')) {define('MENU_ALT_ADMINISTRAR_CALIBRACIONES', 'Manage settings: Add & edit');} 
if (!defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS')) {define('MENU_ALT_ADMINISTRAR_DOCUMENTOS', 'Adds a document quickly (for that you have to know about memory code of the category to which it belongs, or modifies an existing document for errors when it scored');} 
if (!defined('MENU_ALT_ADMINISTRAR_EQUIPOS')) {define('MENU_ALT_ADMINISTRAR_EQUIPOS', 'Manage measuring equipment: Add & edit');} 
if (!defined('MENU_ALT_ADMINISTRAR_EXTINTORES')) {define('MENU_ALT_ADMINISTRAR_EXTINTORES', 'Manage fire extinguishers: Add & edit');} 
if (!defined('MENU_ALT_ADMINISTRAR_FORMACION')) {define('MENU_ALT_ADMINISTRAR_FORMACION', 'Manage training: Add & edit');} 
if (!defined('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION')) {define('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION', 'Manage the impact of inspection');}
if (!defined('MENU_ALT_ADMINISTRAR_INSPECCION')) {define('MENU_ALT_ADMINISTRAR_INSPECCION', 'Manage inspections');}
if (!defined('MENU_ALT_ADMINISTRAR_INSPECTOR')) {define('MENU_ALT_ADMINISTRAR_INSPECTOR', 'Manage inspectors');} 
if (!defined('MENU_ALT_ADMINISTRAR_OBJETIVOS')) {define('MENU_ALT_ADMINISTRAR_OBJETIVOS', 'Managing objectives: Add & edit');} 
if (!defined('MENU_ALT_ADMINISTRAR_PARTES')) {define('MENU_ALT_ADMINISTRAR_PARTES', 'Manage parts of work: Add & edit');} 
if (!defined('MENU_ALT_ADMINISTRAR_SERVICIOS')) {define('MENU_ALT_ADMINISTRAR_SERVICIOS', 'Manage services: Add & edit');} 
if (!defined('MENU_ALT_ADMINISTRAR_TRABAJADORES')) {define('MENU_ALT_ADMINISTRAR_TRABAJADORES', 'Manage workers: Add & edit');} 
if (!defined('MENU_ALT_ANOTAR_DOCMANAGER')) {define('MENU_ALT_ANOTAR_DOCMANAGER', 'Insert a document directly in the database, for frequently used documents.');} 
if (!defined('MENU_ALT_ANOTAR_DOCUMENTOS')) {define('MENU_ALT_ANOTAR_DOCUMENTOS', 'Annotate a document: right way to annotate a document.This sends a request to the administrator that the approved document. Since that time, it will be shown on the general list');} 
if (!defined('MENU_ALT_APROBAR_DOCUMENTOS')) {define('MENU_ALT_APROBAR_DOCUMENTOS', 'It approved a document that has been previously entered.');} 
if (!defined('MENU_ALT_BORRAR_AINFORMES')) {define('MENU_ALT_BORRAR_AINFORMES', 'Delete report audits');} 
if (!defined('MENU_ALT_BORRAR_AUDITOR')) {define('MENU_ALT_BORRAR_AUDITOR', 'Delete auditor');}
if (!defined('MENU_ALT_BORRAR_AUDITORIAS')) {define('MENU_ALT_BORRAR_AUDITORIAS', 'Delete audit');} 
if (!defined('MENU_ALT_BORRAR_CALIBRACIONES')) {define('MENU_ALT_BORRAR_CALIBRACIONES', 'Delete calibrations');} 
if (!defined('MENU_ALT_BORRAR_DOCUMENTOS')) {define('MENU_ALT_BORRAR_DOCUMENTOS', 'Delete a document');} 
if (!defined('MENU_ALT_BORRAR_EQUIPOS')) {define('MENU_ALT_BORRAR_EQUIPOS', 'Delete measurement equipment');} 
if (!defined('MENU_ALT_BORRAR_EXTINTORES')) {define('MENU_ALT_BORRAR_EXTINTORES', 'Delete fire extinguishers');} 
if (!defined('MENU_ALT_BORRAR_FORMACION')) {define('MENU_ALT_BORRAR_FORMACION', 'Delete formation');} 
if (!defined('MENU_ALT_BORRAR_INSPECCION')) {define('MENU_ALT_BORRAR_INSPECCION', 'Delete inspection');} 
if (!defined('MENU_ALT_BORRAR_INSPECTOR')) {define('MENU_ALT_BORRAR_INSPECTOR', 'Delete inspectors');}
if (!defined('MENU_ALT_BORRAR_MODIFDOC')) {define('MENU_ALT_BORRAR_MODIFDOC', 'Delete changes made to specific documents');} 
if (!defined('MENU_ALT_BORRAR_OBJETIVOS')) {define('MENU_ALT_BORRAR_OBJETIVOS', 'Clear objectives');} 
if (!defined('MENU_ALT_BORRAR_PARTES')) {define('MENU_ALT_BORRAR_PARTES', 'Delete parts');} 
if (!defined('MENU_ALT_BORRAR_SERVICIOS')) {define('MENU_ALT_BORRAR_SERVICIOS', 'Delete services');} 
if (!defined('MENU_ALT_BORRAR_TRABAJADORES')) {define('MENU_ALT_BORRAR_TRABAJADORES', 'Delete workers');} 
if (!defined('MENU_ALT_BUSCAR_AINFORMES')) {define('MENU_ALT_BUSCAR_AINFORMES', 'Search audit report');} 
if (!defined('MENU_ALT_BUSCAR_AUDITORIAS')) {define('MENU_ALT_BUSCAR_AUDITORIAS', 'Search audits');} 
if (!defined('MENU_ALT_BUSCAR_CALIBRACIONES')) {define('MENU_ALT_BUSCAR_CALIBRACIONES', 'Search for calibration');} 
if (!defined('MENU_ALT_BUSCAR_DOCUMENTOS')) {define('MENU_ALT_BUSCAR_DOCUMENTOS', 'Search for a document');} 
if (!defined('MENU_ALT_BUSCAR_EQUIPOS')) {define('MENU_ALT_BUSCAR_EQUIPOS', 'Search for measuring equipment');} 
if (!defined('MENU_ALT_BUSCAR_EXTINTORES')) {define('MENU_ALT_BUSCAR_EXTINTORES', 'Search extinguisher');} 
if (!defined('MENU_ALT_BUSCAR_INSPECCION')) {define('MENU_ALT_BUSCAR_INSPECCION', 'Search for inspection');} 
if (!defined('MENU_ALT_BUSCAR_OBJETIVOS')) {define('MENU_ALT_BUSCAR_OBJETIVOS', 'Search objectives');} 
if (!defined('MENU_ALT_BUSCAR_PARTES')) {define('MENU_ALT_BUSCAR_PARTES', 'Search parties');}
if (!defined('MENU_ALT_CONTROLAVISOS')) {define('MENU_ALT_CONTROLAVISOS', 'Control service notices');} 
if (!defined('MENU_ALT_DOC_PRINTSCREEN')) {define('MENU_ALT_DOC_PRINTSCREEN', 'It displays inserts documents directly in the database; of much use.');}
if (!defined('MENU_ALT_EDITAR_BDDOC')) {define('MENU_ALT_EDITAR_BDDOC', 'Edit documents that have been inserted directly to the database.');} 
if (!defined('MENU_ALT_GRAFICAVISOS')) {define('MENU_ALT_GRAFICAVISOS', 'Graph of listings by months');}
if (!defined('MENU_ALT_IMPRIMIR_AINFORMES')) {define('MENU_ALT_IMPRIMIR_AINFORMES', 'Print audit report');} 
if (!defined('MENU_ALT_IMPRIMIR_AUDITOR')) {define('MENU_ALT_IMPRIMIR_AUDITOR', 'Print auditor');} 
if (!defined('MENU_ALT_IMPRIMIR_AUDITORIAS')) {define('MENU_ALT_IMPRIMIR_AUDITORIAS', 'Print audit');} 
if (!defined('MENU_ALT_IMPRIMIR_CALIBRACIONES')) {define('MENU_ALT_IMPRIMIR_CALIBRACIONES', 'Screen shows the details of the calibration');} 
if (!defined('MENU_ALT_IMPRIMIR_EQUIPOS')) {define('MENU_ALT_IMPRIMIR_EQUIPOS', 'Screen shows the details of the measuring equipment');} 
if (!defined('MENU_ALT_IMPRIMIR_EXTINTORES')) {define('MENU_ALT_IMPRIMIR_EXTINTORES', 'Screen shows the details of the fire extinguisher');} 
if (!defined('MENU_ALT_IMPRIMIR_INSPECCION')) {define('MENU_ALT_IMPRIMIR_INSPECCION', 'Print inspection');} 
if (!defined('MENU_ALT_IMPRIMIR_INSPECTOR')) {define('MENU_ALT_IMPRIMIR_INSPECTOR', 'Print inspectors');} 
if (!defined('MENU_ALT_IMPRIMIR_OBJETIVOS')) {define('MENU_ALT_IMPRIMIR_OBJETIVOS', 'Screen shows details of the objective');} 
if (!defined('MENU_ALT_IMPRIMIR_PARTES')) {define('MENU_ALT_IMPRIMIR_PARTES', 'Screen shows the details of the party');} 
if (!defined('MENU_ALT_IMPRIMIR_TRABAJADOR')) {define('MENU_ALT_IMPRIMIR_TRABAJADOR', 'Print worker');}
if (!defined('MENU_ALT_JOIN_CALIBRACIONES')) {define('MENU_ALT_JOIN_CALIBRACIONES', 'Show calibrations by team');} 
if (!defined('MENU_ALT_JOIN_FORMACION')) {define('MENU_ALT_JOIN_FORMACION', 'Courses by worker');}
if (!defined('MENU_ALT_JOIN_INSPECCIONES')) {define('MENU_ALT_JOIN_INSPECCIONES', 'Number of inspections by service');}
if (!defined('MENU_ALT_JOIN_OBJETIVOS')) {define('MENU_ALT_JOIN_OBJETIVOS', 'Displays the tasks that correspond to each objective');}
if (!defined('MENU_ALT_LISTA_AINFORMES')) {define('MENU_ALT_LISTA_AINFORMES', 'List of audit reports');}
if (!defined('MENU_ALT_LISTA_AUDITORIAS')) {define('MENU_ALT_LISTA_AUDITORIAS', 'List of audits');} 
if (!defined('MENU_ALT_LISTA_CALIBRACIONES')) {define('MENU_ALT_LISTA_CALIBRACIONES', 'List of calibrations');} 
if (!defined('MENU_ALT_LISTA_DOCUMENTOS')) {define('MENU_ALT_LISTA_DOCUMENTOS', 'General list of documents: ranked list by document id');} 
if (!defined('MENU_ALT_LISTA_EQUIPOS')) {define('MENU_ALT_LISTA_EQUIPOS', 'List of measuring equipment');}
if (!defined('MENU_ALT_LISTA_EXTINTORES')) {define('MENU_ALT_LISTA_EXTINTORES', 'List of fire extinguishers');}
if (!defined('MENU_ALT_LISTA_FORMACION')) {define('MENU_ALT_LISTA_FORMACION', 'List of courses');} 
if (!defined('MENU_ALT_LISTA_OBJETIVOS')) {define('MENU_ALT_LISTA_OBJETIVOS', 'List of goals');} 
if (!defined('MENU_ALT_MAPA_DOCUMENTOS')) {define('MENU_ALT_MAPA_DOCUMENTOS', 'Document map: displays our documentary tree of categories of documents');} 
if (!defined('MENU_ALT_MODIFDOC')) {define('MENU_ALT_MODIFDOC', 'Managing changes in documents: annotate / edit changes made to specific documents');}
if (!defined('MENU_ALT_MODIFDOCPRINT')) {define('MENU_ALT_MODIFDOCPRINT', 'Print documents of the BD');} 
if (!defined('MENU_ALT_MODIFICAR_CATEGORIAS')) {define('MENU_ALT_MODIFICAR_CATEGORIAS', 'Manages the categories of document tree: adds, modifies, deletes.');} 
if (!defined('MENU_ALT_SUBIR_DOCUMENTOS')) {define('MENU_ALT_SUBIR_DOCUMENTOS', 'Upload documents: upload');} 
if (!defined('MENU_AUDITORES')) {define('MENU_AUDITORES', 'Auditors');} 
if (!defined('MENU_AUDITORIAS')) {define('MENU_AUDITORIAS', 'Audits');} 
if (!defined('MENU_AVISOS')) {define('MENU_AVISOS', 'Notices');} 
if (!defined('MENU_BDDOCS')) {define('MENU_BDDOCS', 'BD docs.');} 
if (!defined('MENU_DOCUMENTOS')) {define('MENU_DOCUMENTOS', 'Docs.');} 
if (!defined('MENU_ENCUESTAS')) {define('MENU_ENCUESTAS', 'Surveys');}
if (!defined('MENU_FORMACION')) {define('MENU_FORMACION', 'Courses');} 
if (!defined('MENU_IMPRIMIR_REVSISTEMA')) {define('MENU_IMPRIMIR_REVSISTEMA', 'Print system review');}  
if (!defined('MENU_INSPECCIONES')) {define('MENU_INSPECCIONES', 'Inspections');} 
if (!defined('MENU_INSPECTORES')) {define('MENU_INSPECTORES', 'Inspectors');} 
if (!defined('MENU_MODIFDOCS')) {define('MENU_MODIFDOCS', 'Modif. docs.');} 
if (!defined('MENU_NCS')) {define('MENU_NCS', 'Non-conformities');}
if (!defined('MENU_OBJETIVOS')) {define('MENU_OBJETIVOS', 'Objectives');} 
if (!defined('MENU_OTROS_DOCUMENTOS')) {define('MENU_OTROS_DOCUMENTOS', 'Another documentary control.');} 
if (!defined('MENU_PARTES')) {define('MENU_PARTES', 'Worksheets');} 
if (!defined('MENU_PROVEEDORES')) {define('MENU_PROVEEDORES', 'Suppliers');} 
if (!defined('MENU_REVSISTEMA')) {define('MENU_REVSISTEMA', 'Review system');} 
if (!defined('MENU_SERVICIOS')) {define('MENU_SERVICIOS', 'Services');} 
if (!defined('MENU_TRABAJADORES')) {define('MENU_TRABAJADORES', 'Worker');} 
if (!defined('MODIFDOC_PRINT')) {define('MODIFDOC_PRINT', 'Print changes to documents.');} 
if (!defined('MODIFICACION_ACTUALIZADA')) {define('MODIFICACION_ACTUALIZADA', 'Updated modification! < br / > also updated the number of revision in the list of documents.');} 
if (!defined('MODIFICACION_ANOTADA')) {define('MODIFICACION_ANOTADA', 'Annotated modification! < br / > also updated the revision number and date in the list of documents.');} 
if (!defined('MODIFICAR_REVISION')) {define('MODIFICAR_REVISION', 'Change review');}
if (!defined('NC_ANADIDA')) {define('NC_ANADIDA', 'Added NC');}
if (!defined('NCS')) {define('NCS', 'Non-conformities');} 
if (!defined('NCS_ABIERTOPOR')) {define('NCS_ABIERTOPOR', 'Opened by');} 
if (!defined('NCS_ABRIR_NC')) {define('NCS_ABRIR_NC', 'Open a non-conformity');} 
if (!defined('NCS_ACCIONES')) {define('NCS_ACCIONES', 'Actions');} 
if (!defined('NCS_ADMINISTRAR_NCS')) {define('NCS_ADMINISTRAR_NCS', 'Manage NC & acute; s');} 
if (!defined('NCS_ADVERTICE')) {define('NCS_ADVERTICE', 'Click on a link to edit non-conformity');} 
if (!defined('NCS_ADVERTICE_LISTANCS')) {define('NCS_ADVERTICE_LISTANCS', 'This list combines audits with their non-conformities.Does not display the Unassigned');}
if (!defined('NCS_AFECTAA')) {define('NCS_AFECTAA', 'affected area');} 
if (!defined('NCS_AI_HELP')) {define('NCS_AI_HELP', 'If the nonconformance is not derived from any audit, you don´t have to put anything here.');} 
if (!defined('NCS_ANADIR_NC')) {define('NCS_ANADIR_NC', 'Add NC');}
if (!defined('NCS_AUDITS_JOIN_LIST')) {define('NCS_AUDITS_JOIN_LIST', 'NC & acute; s and audits, lists combined. Click to view details');} 
if (!defined('NCS_BORRAR_NC')) {define('NCS_BORRAR_NC', 'Delete NC & acute; s');} 
if (!defined('NCS_BUSCAR_NCS')) {define('NCS_BUSCAR_NCS', 'Search NC & acute; s');} 
if (!defined('NCS_CAUSAS')) {define('NCS_CAUSAS', 'Causes');} 
if (!defined('NCS_CIERRE_PARCIAL')) {define('NCS_CIERRE_PARCIAL', 'Partial closure');} 
if (!defined('NCS_CODIGO_HELP')) {define('NCS_CODIGO_HELP', 'This code is voluntary. Use the code that come you well.');} 
if (!defined('NCS_CODIGO_NC')) {define('NCS_CODIGO_NC', 'Code');} 
if (!defined('NCS_DESCRIPCION')) {define('NCS_DESCRIPCION', 'Description');} 
if (!defined('NCS_DESVIACION')) {define('NCS_DESVIACION', 'Deviation');} 
if (!defined('NCS_DETAILS')) {define('NCS_DETAILS', 'Details of the NC');}
if (!defined('NCS_EDITAR')) {define('NCS_EDITAR', 'Edit NC');} 
if (!defined('NCS_EDITAR_NC')) {define('NCS_EDITAR_NC', 'Edit NC');} 
if (!defined('NCS_EFICACIA')) {define('NCS_EFICACIA', 'Efficiency');} 
if (!defined('NCS_FECHA_APERTURA')) {define('NCS_FECHA_APERTURA', 'Open date');} 
if (!defined('NCS_FECHACIERRE')) {define('NCS_FECHACIERRE', 'Closing date');} 
if (!defined('NCS_GRAFICA')) {define('NCS_GRAFICA', 'NC´s graphic');} 
if (!defined('NCS_GRAFICA')) {define('NCS_GRAFICA', 'NC graphics & acute; s by area');} 
if (!defined('NCS_IMPRIMIR')) {define('NCS_IMPRIMIR', 'Print NC');} 
if (!defined('NCS_IMPRIMIR_NCS')) {define('NCS_IMPRIMIR_NCS', 'Audits & NC & acute; s');} 
if (!defined('NCS_JOIN_ADVERTICE')) {define('NCS_JOIN_ADVERTICE', 'Click on a brand or an audit to see details');} 
if (!defined('NCS_LASTID_HELP')) {define('NCS_LASTID_HELP', 'Put the id immediate superior which appears next to the inclusion');} 
if (!defined('NCS_LISTA')) {define('NCS_LISTA', 'List of NC & acute; s');} 
if (!defined('NCS_MODIFICAR_NC')) {define('NCS_MODIFICAR_NC', 'Modify CN');} 
if (!defined('NCS_NC_BORRADA')) {define('NCS_NC_BORRADA', 'NC delete!');} 
if (!defined('NCS_NUMERO')) {define('NCS_NUMERO', 'Sheet No.');} 
if (!defined('NCS_PLAZO')) {define('NCS_PLAZO', 'Term');} 
if (!defined('NCS_PORAREA')) {define('NCS_PORAREA', 'NC & acute; s by area');} 
if (!defined('NCS_QUIERE_BORRAR')) {define('NCS_QUIERE_BORRAR', 'Do Delete NC & acute; / s?');} 
if (!defined('NCS_REALIZAR_GRAFICA')) {define('NCS_REALIZAR_GRAFICA', 'Make graphics');} 
if (!defined('NCS_REF_DOC')) {define('NCS_REF_DOC', 'Docs. reference');} 
if (!defined('NCS_REFERENCIA_DOCUMENTAL')) {define('NCS_REFERENCIA_DOCUMENTAL', 'REF. doc');} 
if (!defined('NCS_SELECCIONE_PARA_CAMBIAR')) {define('NCS_SELECCIONE_PARA_CAMBIAR', 'Select to change');} 
if (!defined('NCS_VISIBLE')) {define('NCS_VISIBLE', 'Visible');} 
if (!defined('NOMBRE_DOCUMENTO')) {define('NOMBRE_DOCUMENTO', 'Title');} 
if (!defined('OBJETIVO_ACTUALIZADO')) {define('OBJETIVO_ACTUALIZADO', 'Target updated!');} 
if (!defined('OBJETIVOS_ACCION')) {define('OBJETIVOS_ACCION', 'Action');} 
if (!defined('OBJETIVOS_ADMINISTRAR_OBJETIVOS')) {define('OBJETIVOS_ADMINISTRAR_OBJETIVOS', 'Managing objectives');} 
if (!defined('OBJETIVOS_ADVERTICE')) {define('OBJETIVOS_ADVERTICE', 'Click on a task to edit');} 
if (!defined('OBJETIVOS_ANADIR_OBJETIVO')) {define('OBJETIVOS_ANADIR_OBJETIVO', 'Add target');} 
if (!defined('OBJETIVOS_ANADIR_TAREA')) {define('OBJETIVOS_ANADIR_TAREA', 'Add Task');}
if (!defined('OBJETIVOS_ANOTAR_TAREA')) {define('OBJETIVOS_ANOTAR_TAREA', 'Note task');} 
if (!defined('OBJETIVOS_BORRAR_OBJETIVO')) {define('OBJETIVOS_BORRAR_OBJETIVO', 'Delete target');} 
if (!defined('OBJETIVOS_BORRAR_TAREA')) {define('OBJETIVOS_BORRAR_TAREA', 'Delete tasks');} 
if (!defined('OBJETIVOS_CAMBIAR_OBJETIVO')) {define('OBJETIVOS_CAMBIAR_OBJETIVO', 'Change target');} 
if (!defined('OBJETIVOS_CAMBIAR_SEGUIMIENTO')) {define('OBJETIVOS_CAMBIAR_SEGUIMIENTO', 'Modify a task');} 
if (!defined('OBJETIVOS_CAUSAS')) {define('OBJETIVOS_CAUSAS', 'Causes');} 
if (!defined('OBJETIVOS_CODIGO_HELP')) {define('OBJETIVOS_CODIGO_HELP', 'Remember the coding of objectives. Put the immediate superior which appears next to the field of inclusion. If you put 220, you should put 320, i.e. objective 3 of 2020!');} 
if (!defined('OBJETIVOS_DETAILS')) {define('OBJETIVOS_DETAILS', 'Details of the objective');} 
if (!defined('OBJETIVOS_DETECCION')) {define('OBJETIVOS_DETECCION', 'Detection');} 
if (!defined('OBJETIVOS_EDITAR_OBJETIVO')) {define('OBJETIVOS_EDITAR_OBJETIVO', 'Edit target');}
if (!defined('OBJETIVOS_EJECUTOR')) {define('OBJETIVOS_EJECUTOR', 'Executor');} 
if (!defined('OBJETIVOS_FECHALIMITE_TAREA')) {define('OBJETIVOS_FECHALIMITE_TAREA', 'Deadline');} 
if (!defined('OBJETIVOS_FECHATERMINACION_TAREA')) {define('OBJETIVOS_FECHATERMINACION_TAREA', 'Termination date');} 
if (!defined('OBJETIVOS_FOLLOWUP')) {define('OBJETIVOS_FOLLOWUP', 'The goal tracking');} 
if (!defined('OBJETIVOS_FOLLOWUP_ADDED')) {define('OBJETIVOS_FOLLOWUP_ADDED', 'Added tracking');}
if (!defined('OBJETIVOS_FRECUENCIA')) {define('OBJETIVOS_FRECUENCIA', 'Frequency');} 
if (!defined('OBJETIVOS_FUENTE')) {define('OBJETIVOS_FUENTE', 'Source');} 
if (!defined('OBJETIVOS_IMPRIMIR_OBJETIVO')) {define('OBJETIVOS_IMPRIMIR_OBJETIVO', 'Print target');}
if (!defined('OBJETIVOS_JOIN')) {define('OBJETIVOS_JOIN', 'List of goals & tracking');}
if (!defined('OBJETIVOS_JOIN_THEAD')) {define('OBJETIVOS_JOIN_THEAD', 'Click on a target to show the tracking');} 
if (!defined('OBJETIVOS_LISTA')) {define('OBJETIVOS_LISTA', 'List of goals');} 
if (!defined('OBJETIVOS_LISTA_TAREAS')) {define('OBJETIVOS_LISTA_TAREAS', 'Task list');} 
if (!defined('OBJETIVOS_MODIFICAR_TAREA')) {define('OBJETIVOS_MODIFICAR_TAREA', 'Modify task');} 
if (!defined('OBJETIVOS_NOMBRE_OBJETIVO')) {define('OBJETIVOS_NOMBRE_OBJETIVO', 'Title');} 
if (!defined('OBJETIVOS_OBJETIVO_BORRADO')) {define('OBJETIVOS_OBJETIVO_BORRADO', 'Clear goal!');} 
if (!defined('OBJETIVOS_OBJETIVOS')) {define('OBJETIVOS_OBJETIVOS', 'Objectives');}
if (!defined('OBJETIVOS_ORIGEN')) {define('OBJETIVOS_ORIGEN', 'Origin');} 
if (!defined('OBJETIVOS_PERSEGUIDOR')) {define('OBJETIVOS_PERSEGUIDOR', 'Tracker');} 
if (!defined('OBJETIVOS_PLAZO')) {define('OBJETIVOS_PLAZO', 'Term');} 
if (!defined('OBJETIVOS_PRINTSCREEN')) {define('OBJETIVOS_PRINTSCREEN', 'View details of the objective');} 
if (!defined('OBJETIVOS_QUIERE_BORRAR')) {define('OBJETIVOS_QUIERE_BORRAR', 'Delete target?');} 
if (!defined('OBJETIVOS_RECURSOS')) {define('OBJETIVOS_RECURSOS', 'Resources');} 
if (!defined('OBJETIVOS_TAREA')) {define('OBJETIVOS_TAREA', 'Task');} 
if (!defined('OBJETIVOS_TAREA_ANADIDA')) {define('OBJETIVOS_TAREA_ANADIDA', 'Added task');} 
if (!defined('OBJETIVOS_TAREA_BORRADA')) {define('OBJETIVOS_TAREA_BORRADA', 'Task deleted');} 
if (!defined('OBJETIVOS_TAREA_MODIFICADA')) {define('OBJETIVOS_TAREA_MODIFICADA', 'Task modified');} 
if (!defined('OBJETIVOS_TAREAS_HELP')) {define('OBJETIVOS_TAREAS_HELP', 'Only are the objectives that have been assigned tasks.Assume that you must assign tasks to the objective.');} 
if (!defined('OBJETIVOS_THEAD')) {define('OBJETIVOS_THEAD', 'Enter a task of monitoring for a target');} 
if (!defined('PAGE_TITLE')) {define('PAGE_TITLE', 'Handy-Quality. Quality online');} 
if (!defined('PARTE_ACTUALIZADO')) {define('PARTE_ACTUALIZADO', 'Part of work successfully updated!');}  
if (!defined('PARTE_ANADIDO')) {define('PARTE_ANADIDO', 'Added part!');} 
if (!defined('PARTE_DEL_TRABAJADOR')) {define('PARTE_DEL_TRABAJADOR', 'Part of the worker');} 
if (!defined('PARTE_DETALLES')) {define('PARTE_DETALLES', 'Details of the party');} 
if (!defined('PARTES_ADMINISTRAR_PARTES')) {define('PARTES_ADMINISTRAR_PARTES', 'Manage parts of work');} 
if (!defined('PARTES_ANADIR_PARTE')) {define('PARTES_ANADIR_PARTE', 'Add part of work');} 
if (!defined('PARTES_BORRAR')) {define('PARTES_BORRAR', 'Delete part/s');} 
if (!defined('PARTES_BUSCAR')) {define('PARTES_BUSCAR', 'Find part/s');} 
if (!defined('PARTES_CAMBIAR_PARTE')) {define('PARTES_CAMBIAR_PARTE', 'Edit part');} 
if (!defined('PARTES_EDITAR_PARTE')) {define('PARTES_EDITAR_PARTE', 'Edit part of work');} 
if (!defined('PARTES_HOJAS')) {define('PARTES_HOJAS', 'Worksheets');} 
if (!defined('PARTES_PARTE_BORRADO')) {define('PARTES_PARTE_BORRADO', 'Part of job deleted!');} 
if (!defined('PARTES_PRINT')) {define('PARTES_PRINT', 'Print part of work');} 
if (!defined('PARTES_QUIERE_BORRAR')) {define('PARTES_QUIERE_BORRAR', 'Delete part/s?');} 
if (!defined('PARTES_THEAD_ADVERTICE')) {define('PARTES_THEAD_ADVERTICE', 'Click on a part to show details');} 
if (!defined('PROVEEDORES_ACTIVESTATUS')) {define('PROVEEDORES_ACTIVESTATUS', 'Active');} 
if (!defined('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES')) {define('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES', 'Manage sensitive areas');} 
if (!defined('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS')) {define('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Manage codes of incidents');} 
if (!defined('PROVEEDORES_ADMINISTRAR_PROVEEDORES')) {define('PROVEEDORES_ADMINISTRAR_PROVEEDORES', 'Manage suppliers');} 
if (!defined('PROVEEDORES_ANADIR_AREASENSIBLE')) {define('PROVEEDORES_ANADIR_AREASENSIBLE', 'Add sensitive area');} 
if (!defined('PROVEEDORES_ANADIR_CODIGOINCIDENCIA')) {define('PROVEEDORES_ANADIR_CODIGOINCIDENCIA', 'Add code of incidence');} 
if (!defined('PROVEEDORES_ANADIR_PROVEEDOR')) {define('PROVEEDORES_ANADIR_PROVEEDOR', 'Add supplier');} 
if (!defined('PROVEEDORES_ANOTAR_INCIDENCIA')) {define('PROVEEDORES_ANOTAR_INCIDENCIA', 'Record incidence');} 
if (!defined('PROVEEDORES_AREA_SENSIBLE_BORRADA')) {define('PROVEEDORES_AREA_SENSIBLE_BORRADA', 'Deleted sensitive area!');} 
if (!defined('PROVEEDORES_AREASENSIBLE')) {define('PROVEEDORES_AREASENSIBLE', 'Sensitive area');} 
if (!defined('PROVEEDORES_AREASENSIBLE_ACTUALIZADA')) {define('PROVEEDORES_AREASENSIBLE_ACTUALIZADA', 'sensitive area updated!');} 
if (!defined('PROVEEDORES_AREASENSIBLE_ANADIDA')) {define('PROVEEDORES_AREASENSIBLE_ANADIDA', 'Added sensitive area!');} 
if (!defined('PROVEEDORES_AREASSENSIBLES_ADVERTICE')) {define('PROVEEDORES_AREASSENSIBLES_ADVERTICE', 'Click on a sensitive area to edit');} 
if (!defined('PROVEEDORES_BORRAR_AREASSENSIBLES')) {define('PROVEEDORES_BORRAR_AREASSENSIBLES', 'Delete sensitive area');} 
if (!defined('PROVEEDORES_BORRAR_CODIGOINCIDENCIA')) {define('PROVEEDORES_BORRAR_CODIGOINCIDENCIA', 'Clear codes of incidents');} 
if (!defined('PROVEEDORES_BORRAR_INCIDENCIAS')) {define('PROVEEDORES_BORRAR_INCIDENCIAS', 'Delete incidents');} 
if (!defined('PROVEEDORES_BORRAR_PROVEEDOR')) {define('PROVEEDORES_BORRAR_PROVEEDOR', 'Delete provider');} 
if (!defined('PROVEEDORES_CIF')) {define('PROVEEDORES_CIF', 'CIF');} 
if (!defined('PROVEEDORES_CODIGO_ACTUALIZADO')) {define('PROVEEDORES_CODIGO_ACTUALIZADO', 'Updated code!');} 
if (!defined('PROVEEDORES_CODIGO_ANADIDO')) {define('PROVEEDORES_CODIGO_ANADIDO', 'Code added!');} 
if (!defined('PROVEEDORES_CODIGO_INCIDENCIA')) {define('PROVEEDORES_CODIGO_INCIDENCIA', 'Code of incidence');} 
if (!defined('PROVEEDORES_CODIGOINCIDENCIA_BORRADO')) {define('PROVEEDORES_CODIGOINCIDENCIA_BORRADO', 'Delete incidence code!');} 
if (!defined('PROVEEDORES_CODIGOS_ADVERTICE')) {define('PROVEEDORES_CODIGOS_ADVERTICE', 'Click on a code to modify');} 
if (!defined('PROVEEDORES_CRITERIOS_EVALUACION')) {define('PROVEEDORES_CRITERIOS_EVALUACION', 'Criteria of evaluation');} 
if (!defined('PROVEEDORES_DATOS')) {define('PROVEEDORES_DATOS', 'Data');} 
if (!defined('PROVEEDORES_DETALLES')) {define('PROVEEDORES_DETALLES', 'Details of the supplier');}
if (!defined('PROVEEDORES_INCIDENCIA')) {define('PROVEEDORES_INCIDENCIA', 'Incidence');} 
if (!defined('PROVEEDORES_INCIDENCIA_BORRADA')) {define('PROVEEDORES_INCIDENCIA_BORRADA', 'Incidence deleted!');} 
if (!defined('PROVEEDORES_INCIDENCIA_CODIGO')) {define('PROVEEDORES_INCIDENCIA_CODIGO', 'Code');} 
if (!defined('PROVEEDORES_INCIDENCIAS')) {define('PROVEEDORES_INCIDENCIAS', 'Incidents');} 
if (!defined('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR')) {define('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR', 'Incidences of supplier');} 
if (!defined('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR')) {define('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR', 'Incidents by supplier');} 
if (!defined('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN')) {define('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN', 'Manage incidents of suppliers');} 
if (!defined('PROVEEDORES_JOIN')) {define('PROVEEDORES_JOIN', 'List of suppliers and incidents');}
if (!defined('PROVEEDORES_LISTA')) {define('PROVEEDORES_LISTA', 'List of suppliers');} 
if (!defined('PROVEEDORES_LISTA_AREASSENSIBLES')) {define('PROVEEDORES_LISTA_AREASSENSIBLES', 'List of sensitive areas');} 
if (!defined('PROVEEDORES_LISTA_CODIGOS')) {define('PROVEEDORES_LISTA_CODIGOS', 'List of codes');} 
if (!defined('PROVEEDORES_MODIFICAR_AREASENSIBLE')) {define('PROVEEDORES_MODIFICAR_AREASENSIBLE', 'Modify sensitive area');} 
if (!defined('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA')) {define('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA', 'Modify code of incidence');} 
if (!defined('PROVEEDORES_MODIFICAR_INCIDENCIA')) {define('PROVEEDORES_MODIFICAR_INCIDENCIA', 'Modify incidence');} 
if (!defined('PROVEEDORES_MODIFICAR_PROVEEDOR')) {define('PROVEEDORES_MODIFICAR_PROVEEDOR', 'Change provider');} 
if (!defined('PROVEEDORES_NOMBRE_INCIDENCIA')) {define('PROVEEDORES_NOMBRE_INCIDENCIA', 'Name of the incidence');} 
if (!defined('PROVEEDORES_PROVEEDOR')) {define('PROVEEDORES_PROVEEDOR', 'Supplier');} 
if (!defined('PROVEEDORES_PROVEEDOR_ACTUALIZADO')) {define('PROVEEDORES_PROVEEDOR_ACTUALIZADO', 'Updated supplier!');} 
if (!defined('PROVEEDORES_PROVEEDOR_APROBADO')) {define('PROVEEDORES_PROVEEDOR_APROBADO', 'Approved');} 
if (!defined('PROVEEDORES_PROVEEDOR_BORRADO')) {define('PROVEEDORES_PROVEEDOR_BORRADO', 'Delete provider!');} 
if (!defined('PROVEEDORES_PROVEEDOR_ENPRUEBAS')) {define('PROVEEDORES_PROVEEDOR_ENPRUEBAS', 'In tests');} 
if (!defined('PROVEEDORES_QUIERE_BORRAR')) {define('PROVEEDORES_QUIERE_BORRAR', 'Delete vendor (s)?');} 
if (!defined('PROVEEDORES_SUMINISTRO')) {define('PROVEEDORES_SUMINISTRO', 'Supply');} 
if (!defined('PROVEEDORES_THEAD_ADVERTICE')) {define('PROVEEDORES_THEAD_ADVERTICE', 'Click on a provider for details');}
if (!defined('REVISAR_SISTEMA')) {define('REVISAR_SISTEMA', 'Review the system');}
if (!defined('REVISION_SISTEMA')) {define('REVISION_SISTEMA', 'Quality system review');}
if (!defined('REVISION_ANADIDA')) {define('REVISION_ANADIDA', 'Review added!');}
if (!defined('REVSISTEMA_ADVERTICE')) {define('REVSISTEMA_ADVERTICE', 'Click on a review to print');}
if (!defined('REVSISTEMA_INDICADORES')) {define('REVSISTEMA_INDICADORES', 'Quality indicators');}  
if (!defined('REVSISTEMA_LISTA_PRINTSCREEN')) {define('REVSISTEMA_LISTA_PRINTSCREEN', 'List of revisions');}
if (!defined('REVSISTEMA_NUM')) {define('REVSISTEMA_NUM', 'Review No.');}
if (!defined('REVSISTEMA_PRINT_DETAILS')) {define('REVSISTEMA_PRINT_DETAILS', 'Revision of the system of date');} 
if (!defined('REVSISTEMA_USTEDESTA')) {define('REVSISTEMA_USTEDESTA', 'You is reviewing its quality system');}
if (!defined('SEGUIMIENTO_ACTUALIZADO')) {define('SEGUIMIENTO_ACTUALIZADO', 'Updated tracking!');}
if (!defined('SEGUIMIENTO_QUIERE_BORRAR')) {define('SEGUIMIENTO_QUIERE_BORRAR', 'Do you want to delete this task?');} 
if (!defined('SEGUIMIENTOS_CHANGE_DETAILS')) {define('SEGUIMIENTOS_CHANGE_DETAILS', 'Corresponding to the target task:');}
if (!defined('SELECCIONAR_AREAAFECTADA')) {define('SELECCIONAR_AREAAFECTADA', 'Select the affected area.');}  
if (!defined('SELECCIONAR_AUDITORIA')) {define('SELECCIONAR_AUDITORIA', 'Select Audit:');}
if (!defined('SELECCIONAR_CATEGORIA')) {define('SELECCIONAR_CATEGORIA', 'Select category');} 
if (!defined('SELECCIONAR_DOCUMENTO')) {define('SELECCIONAR_DOCUMENTO', 'Select document');} 
if (!defined('SELECCIONAR_FECHA')) {define('SELECCIONAR_FECHA', 'Select date');}
if (!defined('SELECCIONAR_IMAGEN')) {define('SELECCIONAR_IMAGEN', 'Select image');}
if (!defined('SELECCIONAR_TRABAJADOR')) {define('SELECCIONAR_TRABAJADOR', 'Select worker');}
if (!defined('SERVICIO_ACTIVESTATUS')) {define('SERVICIO_ACTIVESTATUS', 'Active');} 
if (!defined('SERVICIO_ACTUALIZADO')) {define('SERVICIO_ACTUALIZADO', 'Updated service!');} 
if (!defined('SERVICIO_ADMINISTRAR_SERVICIOS')) {define('SERVICIO_ADMINISTRAR_SERVICIOS', 'Manage services');} 
if (!defined('SERVICIO_ANADIDO')) {define('SERVICIO_ANADIDO', 'Service added!');} 
if (!defined('SERVICIO_ANADIR_SERVICIO')) {define('SERVICIO_ANADIR_SERVICIO', 'Add Service');} 
if (!defined('SERVICIO_AVISOS_GRAFICA')) {define('SERVICIO_AVISOS_GRAFICA', 'Graph of service announcements');}
if (!defined('SERVICIO_BORRAR_SERVICIO')) {define('SERVICIO_BORRAR_SERVICIO', 'Delete service');} 
if (!defined('SERVICIO_ERROR_ANADIR')) {define('SERVICIO_ERROR_ANADIR', 'Error & ntildir service');} 
if (!defined('SERVICIO_INCIDENCIA')) {define('SERVICIO_INCIDENCIA', 'Incidence');} 
if (!defined('SERVICIO_LISTA_SERVICIOS')) {define('SERVICIO_LISTA_SERVICIOS', 'List of services');} 
if (!defined('SERVICIO_MODIFICAR_SERVICIO')) {define('SERVICIO_MODIFICAR_SERVICIO', 'Modify service');} 
if (!defined('SERVICIO_MODIFY_THEAD')) {define('SERVICIO_MODIFY_THEAD', 'Click on a service to show details');} 
if (!defined('SERVICIO_QUIERE_BORRAR')) {define('SERVICIO_QUIERE_BORRAR', 'Delete service/s?');} 
if (!defined('SERVICIO_SERVICIO')) {define('SERVICIO_SERVICIO', 'Service');} 
if (!defined('SERVICIO_SERVICIO_BORRADO')) {define('SERVICIO_SERVICIO_BORRADO', 'Service deleted!');} 
if (!defined('SERVICIO_SERVICIOS_ACTIVOS')) {define('SERVICIO_SERVICIOS_ACTIVOS', 'Active services');} 
if (!defined('SERVICIO_SERVICIOS_ADVERTICE')) {define('SERVICIO_SERVICIOS_ADVERTICE', 'Click on a service to display the number of inspections carried out');} 
if (!defined('SERVICIO_TRABAJADOR')) {define('SERVICIO_TRABAJADOR', 'Worker');} 
if (!defined('SITE_NAME')) {define('SITE_NAME', 'Company, S.A.');} 
if (!defined('SLOGAN')) {define('SLOGAN', 'Zero defects');} 
if (!defined('SUBIR_DOCUMENTOS')) {define('SUBIR_DOCUMENTOS', 'Upload documents');} 
if (!defined('SELECCIONAR_EQUIPO')) {define('SELECCIONAR_EQUIPO', 'Select Equipe');} 
if (!defined('TRABAJADOR_ACTIVIDAD')) {define('TRABAJADOR_ACTIVIDAD', 'Activity');} 
if (!defined('TRABAJADOR_ACTUALIZADO')) {define('TRABAJADOR_ACTUALIZADO', 'Updated worker!');} 
if (!defined('TRABAJADOR_ADMINISTRAR_TRABAJADORES')) {define('TRABAJADOR_ADMINISTRAR_TRABAJADORES', 'Manage employees');} 
if (!defined('TRABAJADOR_ANADIDO')) {define('TRABAJADOR_ANADIDO', 'Added worker');}
if (!defined('TRABAJADOR_ANADIR_TRABAJADOR')) {define('TRABAJADOR_ANADIR_TRABAJADOR', 'Add worker');}
if (!defined('TRABAJADOR_BORRAR_TRABAJADOR')) {define('TRABAJADOR_BORRAR_TRABAJADOR', 'Delete worker');} 
if (!defined('TRABAJADOR_CAMBIAR_TRABAJADOR')) {define('TRABAJADOR_CAMBIAR_TRABAJADOR', 'Edit worker');} 
if (!defined('TRABAJADOR_EDITAR_TRABAJADOR')) {define('TRABAJADOR_EDITAR_TRABAJADOR', 'Edit worker');} 
if (!defined('TRABAJADOR_HA_HECHO')) {define('TRABAJADOR_HA_HECHO', 'Workers who have received training');} 
if (!defined('TRABAJADOR_IMG')) {define('TRABAJADOR_IMG', 'Worker-img');} 
if (!defined('TRABAJADOR_LISTA_TRABAJADORES')) {define('TRABAJADOR_LISTA_TRABAJADORES', 'List of active workers');} 
if (!defined('TRABAJADOR_QUIERE_BORRAR')) {define('TRABAJADOR_QUIERE_BORRAR', 'Delete worker/s?');} 
if (!defined('TRABAJADOR_THEAD_ADVERTICE')) {define('TRABAJADOR_THEAD_ADVERTICE', 'Click on a worker to show the number of courses');} 
if (!defined('TRABAJADOR_THEAD_EDIT')) {define('TRABAJADOR_THEAD_EDIT', 'Click on a worker to edit');} 
if (!defined('TRABAJADOR_TRABAJADOR')) {define('TRABAJADOR_TRABAJADOR', 'Worker');} 
if (!defined('TRABAJADOR_TRABAJADOR_BORRADO')) {define('TRABAJADOR_TRABAJADOR_BORRADO', 'Delete worker!');} 
if (!defined('TRABAJADORES')) {define('TRABAJADORES', 'Workers');} 
if (!defined('TRABAJADORES_LISTA')) {define('TRABAJADORES_LISTA', 'List of workers');} 
if ( defined ('DESCARGAR')) {define('DESCARGAR ' , 'Download'); }
if ( defined ('VISTAPREVIA')) {define('VISTAPREVIA ' , 'Preview Document'); }
if ( defined ('BORRAR_AUDITORIAS')) {define('BORRAR_AUDITORIAS', 'Delete audits'); }
if ( defined ('FRECUENCIA_CALIBRACION')) {define('FRECUENCIA_CALIBRACION','freq calibration.'); }
if ( defined ('ACTUALIZADA')) {define('ACTUALIZADA','updated' ); }
if ( defined ('AJUSTE')) {define('AJUSTE','setting'); }
if ( defined ('ANADIDO')) {define('ANADIDO','added'); }
if ( defined ('ATENCION')) {define('ATENCION ' , 'Warning'); }
if ( defined ('CERRADOFECHA')) {define('CERRADOFECHA','Closed Date' ); }
if ( defined ('CUESTIONARIO')) {define('CUESTIONARIO ' , 'Quiz' ); }
if ( defined ('DOCUMENTO')) {define('DOCUMENTO','Document'); }
if ( defined ('INFORMACION')) {define('INFORMACION','Information'); }
if ( defined ('LAULTIMAANOTADA')) {define('LAULTIMAANOTADA','The last recorded was:'); }
if ( defined ('MODIFICACIONES')) {define('MODIFICACIONES','Changes'); }
if ( defined ('PRIMERA')) {define('PRIMERA','First'); }
if ( defined ('PRUEBA')) {define('PRUEBA ' , 'Test' ); }
if ( defined ('REPARACION')) {define('REPARACION','Repair'); }
if ( defined ('REVISIONUM')) {define('REVISIONUM','Revision Number'); }
if ( defined ('SIGUIENTE')) {define('SIGUIENTE','Next'); }
if ( defined ('VALIDACION')) {define('VALIDACION','validation'); }
if ( defined ('IMPRIMIR_AUDITORIAS')) {define('IMPRIMIR_AUDITORIAS','Print audits'); }
if ( defined ('IMPRIMIR_CURSOS')) {define('IMPRIMIR_CURSOS','Print courses'); }
if ( defined ('MENU_ALT_BORRAR_INFORMEAUDITORIAS')) {define('MENU_ALT_BORRAR_INFORMEAUDITORIAS', 'Delete audit reports'); }
if ( defined ('MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS')) {define('MENU_ALT_IMPRIMIR_INFORMESAUDITORIAS','Print audit reports'); }
if ( defined ('MENU_MANTENIMIENTO')) {define('MENU_MANTENIMIENTO','Computer Maintenance'); }
if ( defined ('MIEMPRESA_HOY')) {define('MIEMPRESA_HOY','My company, today :'); }
if ( defined ('NOREQUIERE_CALIBRACION')) {define('NOREQUIERE_CALIBRACION', 'No calibration required'); }
if ( defined ('OBJETIVOS_VER_TAREAS')) {define('OBJETIVOS_VER_TAREAS', 'View tasks'); }
if ( defined ('PERSONAL_MENU_PRINCIPAL')) {define('PERSONAL_MENU_PRINCIPAL','Personal Main Menu.'); }

?>