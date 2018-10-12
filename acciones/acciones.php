<?php
// switch ($_GET["accion"]){ aqui puede variar segun queramos que nos aparezca nuestra url 
// en este caso quedaria index.php?accion=loquesea
// by Fko; ~

if (isset($_GET['accion'])) 
switch ($_GET["accion"]){



//...........................................................PORTADA
//Acciones x defecto
        default:
        $acciones = 'acciones/acciones_documentos.php';
        break;

        

//...........................................................PORTADA
//Acciones menu documentos


        case 'acciones_portada';
        $acciones = 'acciones/acciones_portada.php';
        break;


        

        
//...........................................................DOCUMENTOS_LOGOUT
//Acciones menu documentos
        case 'acciones_documentos_logout';
        $acciones = 'acciones/acciones_documentos_logout.php';
        break;

//...........................................................BDDOCS
//Acciones menu bddocs
        case 'acciones_bddocs';
        $acciones = 'acciones/acciones_bddocs.php';
        break;
        
//Acciones menu bddocs_logout
        case 'acciones_bddocs_logout';
        $acciones = 'acciones/acciones_bddocs_logout.php';
        break;
        
        
//...........................................................MODIFDOCS
//Acciones menu modifdocs
        case 'acciones_modifdocs';
        $acciones = 'acciones/acciones_modifdocs.php';
        break;
        
//Acciones menu modifdocs_logout
        case 'acciones_modifdocs_logout';
        $acciones = 'acciones/acciones_modifdocs_logout.php';
        break;        

        
//...........................................................AISGC
//Acciones menu aisgc
        case 'acciones_aisgc';
        $acciones = 'acciones/acciones_aisgc.php';
        break;

//Acciones menu aisgc_logout
        case 'acciones_aisgc_logout';
        $acciones = 'acciones/acciones_aisgc_logout.php';
        break;        
        
        
        
//...........................................................AINFORMES
//Acciones informes de auditoría 
        case 'acciones_ainformes';
        $acciones = 'acciones/acciones_ainformes.php';
        break;
        
        
//Acciones informes de auditoría_logout
        case 'acciones_ainformes_logout';
        $acciones = 'acciones/acciones_ainformes_logout.php';
        break;
        
    
        
//...........................................................AUDITORES
//Acciones auditores
        case 'acciones_auditores';
        $acciones = 'acciones/acciones_auditores.php';
        break;

//Acciones auditores_logout
        case 'acciones_auditores_logout';
        $acciones = 'acciones/acciones_auditores_logout.php';
        break;        
        
        
        
//...........................................................INSPECCIONES
//Acciones auditores
        case 'acciones_inspecciones';
        $acciones = 'acciones/acciones_inspecciones.php';
        break;
        
//Acciones auditores_logout
        case 'acciones_inspecciones_logout';
        $acciones = 'acciones/acciones_inspecciones_logout.php';
        break;        
        
        

//...........................................................INSPECCIONES
//Acciones inspectores
        case 'acciones_inspectores';
        $acciones = 'acciones/acciones_inspectores.php';
        break;
        
//Acciones inspectores_logout
        case 'acciones_inspectores_logout';
        $acciones = 'acciones/acciones_inspectores_logout.php';
        break;        
        
        

//...........................................................NCS
//Acciones ncs
        case 'acciones_ncs';
        $acciones = 'acciones/acciones_ncs.php';
        break;
        
//Acciones ncs_logout
        case 'acciones_ncs_logout';
        $acciones = 'acciones/acciones_ncs_logout.php';
        break;        
        
        

//...........................................................CALIBRACIONES
//Acciones calibraciones
        case 'acciones_calibraciones';
        $acciones = 'acciones/acciones_calibraciones.php';
        break;
        
//Acciones calibraciones_logout
        case 'acciones_calibraciones_logout';
        $acciones = 'acciones/acciones_calibraciones_logout.php';
        break;        


//...........................................................EQUIPOS
//Acciones equipos
        case 'acciones_equipos';
        $acciones = 'acciones/acciones_equipos.php';
        break;    


//Acciones equipos_logout
        case 'acciones_equipos_logout';
        $acciones = 'acciones/acciones_equipos_logout.php';
        break;    
        

        
//...........................................................OBJETIVOS
//Acciones objetivos
        case 'acciones_objetivos';
        $acciones = 'acciones/acciones_objetivos.php';
        break;        
        
        
//Acciones objetivos_logout
        case 'acciones_objetivos_logout';
        $acciones = 'acciones/acciones_objetivos_logout.php';
        break;            
        
        
//...........................................................PARTES DE TRABAJO
//Acciones partes
        case 'acciones_partes';
        $acciones = 'acciones/acciones_partes.php';
        break;

//Acciones partes_logout
        case 'acciones_partes_logout';
        $acciones = 'acciones/acciones_partes_logout.php';
        break;
        
        
//...........................................................TRABAJADORES
//Acciones trabajadores
        case 'acciones_trabajadores';
        $acciones = 'acciones/acciones_trabajadores.php';
        break;

//Acciones trabajadores_logout
        case 'acciones_trabajadores_logout';
        $acciones = 'acciones/acciones_trabajadores_logout.php';
        break;

        
        
//...........................................................SERVICIOS
//Acciones servicios
        case 'acciones_servicios';
        $acciones = 'acciones/acciones_servicios.php';
        break;
        
//Acciones servicios_logout
        case 'acciones_servicios_logout';
        $acciones = 'acciones/acciones_servicios_logout.php';
        break;


//...........................................................PROVEEDORES
//Acciones proveedores
        case 'acciones_proveedores';
        $acciones = 'acciones/acciones_proveedores.php';
        break;

//Acciones proveedores_logout
        case 'acciones_proveedores_logout';
        $acciones = 'acciones/acciones_proveedores_logout.php';
        break;
        
//...........................................................FORMACION
//Acciones formacion
        case 'acciones_formacion';
        $acciones = 'acciones/acciones_formacion.php';
        break;

//Acciones formacion_logout
        case 'acciones_formacion_logout';
        $acciones = 'acciones/acciones_formacion_logout.php';
        break;        




        
        
}
?>