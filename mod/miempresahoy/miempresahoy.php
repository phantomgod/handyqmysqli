<?php
//*require('conexion.php');
require_once ("../../includes/mysql.php");
require_once ("../../lang/spanish.lang.php");
$db = new MySQL();
//capturar el valor
@$interval=$_POST['lista'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 

</head> 
<body>
<div id="flotante" style="z-index:4;filter:alpha(opacity=80);float:left;-moz-opacity:.80;opacity:.80">    </div>
<h1>

<?php echo MIEMPRESA_HOY;
      echo "&nbsp;&nbsp;";
      echo date('Y-m-d');

echo ",&nbsp;&nbsp; $interval días atrás";

?>
</h1>
<br /><br />
<h2>1. <?php echo OBJETIVOS_OBJETIVOS; ?></h2><br /><br />

<?php
         /*---------------------------------Mostramos los objetivos al modo mangui -------------------------------*/ 
        @$interval=$_POST['lista'];
        $sql = mysql_query("SELECT * 
                    FROM objetivosdatosgenerales
                    WHERE Fecha
                    BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval 
                    DAY ) 
                    AND NOW( )" 
        ); 
            echo '<table class="sortable">';  
            echo '<tbody>'; 
                echo '<tr>'; 
                    echo '<th style="width:35%">'; 
                        echo OBJETIVOS_NOMBRE_OBJETIVO; 
                    echo '</th>'; 
                  //echo '<th>Origen</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th>'; 
                    echo '<th>Indicador</th>'; 
                  //echo '<th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th>-->'; 
                    echo '<th>'; 
                        echo RESULTADO; 
                    echo '</th>'; 
                    echo '<th style="width:50px">'; 
                        echo FECHA; 
                    echo '</th>'; 
                echo '</tr>'; 
 
        while ($row = mysql_fetch_row($sql)) { 
                 echo "<tr>"; 
                    echo "<td>";
                    
                    
                    /*<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a>*/
                    
                    echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print2>";       
                            echo "<caption>Objetivo: <span class=documenttitle>"; echo "$row[2]"; echo "</span></caption>";                                                                       
                            echo "<tbody>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo CODIGO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[1]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_NOMBRE_OBJETIVO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[2]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo ANO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[3]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_ORIGEN; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[4]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_DETECCION; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[5]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_CAUSAS; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[6]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_RECURSOS; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[7]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo INDICADOR; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[8]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                       echo OBJETIVOS_FUENTE; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[9]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                       echo OBJETIVOS_FRECUENCIA; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[10]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                       echo OBJETIVOS_PLAZO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[11]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                        echo OBJETIVOS_EJECUTOR; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[12]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                         echo OBJETIVOS_PERSEGUIDOR; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[13]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th>VºBº: </th>"; 
                                        echo "<td>"; echo "$row[14]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                         echo RESULTADO; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[15]"; echo "</td>"; 
                                echo "</tr>"; 
                                echo "<tr>"; 
                                    echo "<th style=width:50px>"; 
                                         echo FECHA; 
                                    echo "</th>"; 
                                        echo "<td>"; echo "$row[16]"; echo "</td>"; 
                                echo "</tr>"; 
                            echo "</tbody>";         
                            echo "</table>'>"; echo "$row[2]"; echo "</a>";
                    
                    
                    
                    echo "</td>"; 
                    echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['8']."</a></td>";             
                    echo "<td><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['15']."</a></td>"; 
                    echo "<td style=width:100px><a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['16']."</a></td>"; 
                    echo "</tr>"; 
        } 
            echo '<tbody>'; 
            echo '</table>';
            
            echo '<br /><br />'; 
            echo "Objetivos $interval días atrás";
            
                  /*----------------------------FIN mostrar objetivos---------------------------------*/ 
                  

            echo '<h2>2. '; 
                echo AUDITORIAS; 
            echo '</h2>';  
            echo '<br />'; 
             
        //-----------------------------------------------------Mostramos las auditorías-------------------------------------------------------*/ 
 
        @$interval=$_POST['lista']; 
        $sql = mysql_query(
            "SELECT aisgc. * , informeauditoria.id id1, informeauditoria . * 
            FROM informeauditoria, aisgc
            WHERE informeauditoria.ai = aisgc.ai
            AND aisgc.fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval 
            DAY ) 
            AND NOW( )
            AND informeauditoria.Fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval 
            DAY ) 
            AND NOW( )
            GROUP BY informeauditoria.ai"
        );       
            echo '<table class="print">'; 
            echo "<tbody>"; 
                echo ' <tr>'; 
                     echo '<th>'; echo AUDITORIAS_AUDITORIA; echo '</th><th>';echo INFORME; echo '</th><th>'; echo FECHA; echo '</th><th>'; echo RESULTADO; echo '</th></tr>'; 
        while ($row = mysql_fetch_row($sql)) { 
                echo "<tr>";   
                    echo "<td>";
                    
                     echo "<a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>"; 
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>"; 
                    echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th colspan=2>"; echo CUESTIONARIO_CALIDAD; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[13]"; echo"</td><td colspan=2>"; echo "$row[14]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[15]"; echo "</td><td colspan=2>"; echo "$row[16]"; echo"</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo"</th><th colspan=2>"; echo CUESTIONARIO_DOCUMENTACION;echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[17]"; echo "</td><td colspan=2>"; echo "$row[18]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[19]"; echo "</td></tr></table>'>"; 
  
            echo "$row[2]</a>";     
                    
                    //<a href='?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['2']."</a>
                    
                    
                    
                    echo "</td>"; 
                    echo "<td>";
                    
                    
                    echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['20']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>"; 
                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>"; 
                    echo "<tr><td>"; echo "$row[22]"; echo "</td><td>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo "$row[24]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[25]"; echo"</td><td colspan=2>"; echo "$row[26]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[27]"; echo "</td><td colspan=2>"; echo "$row[28]"; echo"</td></tr>"; 
                    echo "</td></tr></table>'>"; 
                                                             
                        echo "$row[22]</a>"; 
                    
                    //<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['20']."' target='blank'>".$row['22']."</a>
                    
                    echo "</td>"; 
                    echo "<td>".$row['23']."</td>"; 
                    echo "<td>".$row['28']."</td>"; 
                    echo "</tr>"; 
        } 
            echo "</tbody>";   
            echo "</table>"; 
             echo '<br /><br /><br />';
            
             echo "Auditorías e informes $interval días atrás";
        
                echo '<br /><br /><br /><br />';
                   
        //-------------------------------------------------------FIN mostrar las auditorías----------------------------------------------------*/   
                 
                echo '<br />'; 


?>

<h2>3. <?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?></h2><br /><br />

<?php 

/*---------------------------------------------------------- HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------------------*/
 
    /** 
    * Change these to your own credentials */ 
    
                @$interval=$_POST['lista'];
                $result = mysql_query(
                    "SELECT trabajador, SUM( horas ) AS horas 
                            FROM cursos 
                            WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval 
                            DAY ) 
                            AND NOW( ) 
                            GROUP BY trabajador"
                ); 
   

   if ($result) { 
     
        $labels = array(); 
        $data   = array(); 
     
        while ($row = mysql_fetch_assoc($result)) { 
            $labels[] = $row["trabajador"]; 
            $data[]   = $row["horas"]; 
        } 
 
        // Now you can aggregate all the data into one string 
        $data_string = "[" . join(", ", $data) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']"; 
    } else { 
        print('MySQL query failed with error: ' . mysql_error()); 
    } 
?> 

<script src="../../jscripts/windowopen.js"></script>
 
    <!-- Don't forget to update these paths --> 
 
    <script src="../../libraries/RGraph.common.core.js" ></script> 
    <script src="../../libraries/RGraph.bar.js"></script>
    <script src="../../libraries/RGraph.line.js" ></script> 
    <script src="../../libraries/RGraph.common.dynamic.js"></script> 
    <script src="../../libraries/RGraph.common.context.js" ></script> 
    <script src="../../libraries/RGraph.common.tooltips.js"></script> 
    <script src="../../libraries/RGraph.common.annotate.js" ></script> 
     
 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
     
    <canvas id="cvs1" width="1100px" height="350px">[No canvas support]</canvas> 
    <script> 
        bar1 = new RGraph.Bar('cvs1', <?php print($data_string) ?>); 
        bar1.Set('chart.title', 'Total de horas de formación por trabajador'); 
        bar1.Set('chart.annotatable', true); 
        bar1.Set('chart.colors', ['black']);
        bar1.Set('chart.events.click', myFunc3); 
        bar1.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        bar1.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar1.canvas);
                                            RGraph.ClearAnnotations(bar1.canvas)
                                            bar1.Draw();
                                           }
                                 ]
                                ]); 
        bar1.Set('chart.background.grid.autofit', true); 
        bar1.Set('chart.gutter.left', 35); 
        bar1.Set('chart.gutter.right', 5); 
        bar1.Set('chart.gutter.bottom', 150); 
        bar1.Set('chart.text.angle', 45); 
        bar1.Set('chart.hmargin', 10); 
        bar1.Set('chart.tickmarks', 'endcircle'); 
        bar1.Set('chart.tooltips', <?php print($labels_string) ?>); 
        bar1.Set('chart.labels', <?php print($labels_string) ?>);         
        bar1.Draw(); 
         
        /** 
        * This is the function that is called when the Pie chart is clicked on 
        */ 
        function myFunc3 (e, shape) 
        { 
            // If you have multiple charts on your canvas the .__object__ is a reference to 
            // the last one that you created 
            var obj   = e.target.__object__; 
     
            var dataset = shape['dataset']; 
            var index   = shape['index_adjusted']; 
            var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset]; 
     
            alert('Value: ' + value); 
        } 
		/** 
        * This is the function is ajax call 
        */ 
		function myCallback ()
    {
        alert(this.responseText);
    }
    
    RGraph.AJAX('lista.php', myCallback);
         
    </script> 
     
    <!--<input type="button" value="Actualizar valores" onclick="Abrir_ventana('dbscript.php');"> 
    <!-- <a href="mod/dbscript.php" target="blank">actualizar</a>--> 
    <br /><br />
            Formación <?php echo $interval ?> días atrás
<!----------------------------------------------------------- FIN HORAS DE FORMACIÓN POR TRABAJADOR------------------------>
    <br /><br />
    <h2>4. <?php echo INDICADORES_INCIDENCIASDEALMACEN; ?></h2><br /><br />

<?php

/*---------------------------------------------------------- GRÁFICA DE INCIDENCIAS DE ALMACÉN --------------------------------------------------*/ 
 
    /** 
    * Change these to your own credentials */ 
    
    @$interval=$_POST['lista'];
    $result = mysql_query(
        "SELECT COUNT( obsalmac ) AS incidencias, fecha 
         FROM aisgc 
         WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
         AND NOW( ) 
         GROUP BY fecha"
    ); 
if ($result) {     
        $labels = array(); 
        $data   = array(); 
     
    while ($row = mysql_fetch_assoc($result)) { 
            $labels[] = $row["fecha"]; 
            $data[]   = $row["incidencias"]; 
    } 
 
        // Now you can aggregate all the data into one string 
        $data_string = "[" . join(", ", $data) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']"; 
} else { 
      print('MySQL query failed with error: ' . mysql_error()); 
} 

?> 

    <canvas id="cvs2" width="1100px" height="300px">[No canvas support]</canvas> 
     <script> 
        line1 = new RGraph.Line('cvs2', <?php print($data_string) ?>); 
        line1.Set('chart.title', 'Incidencias en inspecciones de almacén'); 
        line1.Set('chart.colors', ['black']); 
        line1.Set('chart.title.yaxis', 'Nº incid'); 
        line1.Set('chart.title.xaxis', ''); 
        line1.Set('chart.annotatable', true); 
        line1.Set('chart.events.click', myFunc3); 
        line1.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        line1.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line1.canvas);
                                            RGraph.ClearAnnotations(line1.canvas)
                                            line1.Draw();
                                           }
                                 ]
                                ]); 
        line1.Set('chart.background.grid.autofit', true); 
         
        /*line1.Set('chart.background.barcolor1', '#f2f2f2'); 
        line1.Set('chart.background.barcolor2', '#f2f2f2'); 
        line1.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/ 
        line1.Set('chart.background.grid.autofit.numhlines', 10); 
        line1.Set('chart.colors', ['black']); 
        line1.Set('chart.shadow', true); 
        line1.Set('chart.linewidth', 3);         
        line1.Set('chart.curvy', 1); 
        line1.Set('chart.curvy.factor', 0.25); 
        line1.Set('chart.filled', false);         
        line1.Set('chart.gutter.left', 50); 
        line1.Set('chart.gutter.right', 5); 
        line1.Set('chart.gutter.bottom', 100); 
        line1.Set('chart.text.angle', 45); 
        line1.Set('chart.hmargin', 10); 
        line1.Set('chart.tickmarks', 'endcircle'); 
        line1.Set('chart.tooltips', <?php print($labels_string) ?>); 
        line1.Set('chart.labels', <?php print($labels_string) ?>); 
        line1.Set('chart.tooltips.effect', 'contract');         
           line1.Draw(); 
         
        /** 
    * This is the function that is called when the Pie chart is clicked on 
    */ 
    function myFunc3 (e, shape) 
    { 
        // If you have multiple charts on your canvas the .__object__ is a reference to 
        // the last one that you created 
        var obj   = e.target.__object__; 
 
        var dataset = shape['dataset']; 
        var index   = shape['index_adjusted']; 
        var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset]; 
 
        alert('Value: ' + value); 
    } 
     
         
    </script> 


<!----------------------------------------------------------- FIN GRÁFICA DE INCIDENCIAS DE ALMACÉN------------------------>  

<?php
/*--------------------------------------------------Mostramos las incidencias de almacén------------------------------------------*/ 
 

        @$interval=$_POST['lista'];
        $result = mysql_query(
            "SELECT * 
             FROM  `aisgc`  
             WHERE  `fecha` BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
             AND NOW( )
             AND  obsalmac >  ''             
             ORDER BY  `aisgc`.`id` ASC"
        );  
        if ($row = mysql_fetch_array($result)) {  
                echo "<table class = 'print'> ";  
                    echo "<tr><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo INCIDENCIAS; echo "</th></tr> ";  
            do {  
                    echo "<tr>";
                    echo "<td>";
                    
                    
                    echo "<a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo TRABAJADOR_TRABAJADOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[6]"; echo"</td><td colspan=2>"; echo "$row[7]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo SERVICIO_SERVICIO; echo "</th><th>"; echo VEHICULOS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[10]"; echo "</td><td colspan=2>"; echo "$row[12]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th>"; echo CUESTIONARIO_CALIDAD; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[13]"; echo "</td><td colspan=2>"; echo "$row[14]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[15]"; echo "</td><td colspan=2>"; echo "$row[16]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo "</th><th>"; echo CUESTIONARIO_DOCUMENTACION; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[17]"; echo "</td><td colspan=2>"; echo "$row[18]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[19]"; echo "</td></tr>";
                    
                    echo "</td></tr></table>'>";
                                                
                    echo "$row[2]</a>";
                    
                    
                    
                    //echo "$row[ai]"; 
                    
                    echo "</td>"; 
                    
                    echo "<td>".$row["fecha"]."</td><td>".$row["obsalmac"]."</td></tr> ";  
            } while ($row = mysql_fetch_array($result));  
                echo "</table> ";  
        } else {  
             echo NOSEHAENCONTRADO;        
             
        }  
        
        echo '<br /><br />';
   /*-----------------------------------------------------  FIN mostrar incidencias de almacén---------------------------------------*/ 

?>

<br /><br />
<h2>5. <?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?></h2><br /><br />

<!-----------------------------------------------------------GRÁFICA DE INCIDENCIAS DE PROVEEDORES ------------------------>  

<?php
    /** 
    * Change these to your own credentials */ 
                        
        @$interval=$_POST['lista'];
        $result = mysql_query("SELECT  `fecha` ,  `codigoincidencia`  
                  FROM  `incidenciasdeproveedor`  
                  WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
                  AND NOW( )"
        ); 
    if ($result) { 
        $labels = array(); 
        $data   = array(); 
     
        while ($row = mysql_fetch_assoc($result)) { 
            $labels[] = $row["fecha"]; 
            $data[]   = $row["codigoincidencia"]; 
        } 
 
        // Now you can aggregate all the data into one string 
        $data_string = "[" . join(", ", $data) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']"; 
    } else { 
        print('MySQL query failed with error: ' . mysql_error()); 
    } 
?> 


    <canvas id="cvs3" width="1100px" height="300px">[No canvas support]</canvas> 
    <script> 
        line2 = new RGraph.Line('cvs3', <?php print($data_string) ?>); 
        line2.Set('chart.title', 'Códigos de incidencias de proveedor'); 
        line2.Set('chart.title.yaxis', 'Código'); 
        line2.Set('chart.annotatable', true); 
        line2.Set('chart.events.click', myFunc3); 
        line2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        line2.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line2.canvas);
                                            RGraph.ClearAnnotations(line2.canvas)
                                            line2.Draw();
                                           }
                                 ]
                                ]);  
        line2.Set('chart.background.grid.autofit', true); 
        line2.Set('chart.colors', ['black']); 
        line2.Set('chart.background.grid.autofit.numhlines', 10); 
        line2.Set('chart.shadow', true); 
        line2.Set('chart.linewidth', 3);         
        line2.Set('chart.curvy', 1); 
        line2.Set('chart.curvy.factor', 0.25); 
        line2.Set('chart.filled', false); 
        line2.Set('chart.text.angle', 45); 
        line2.Set('chart.gutter.left', 35); 
        line2.Set('chart.gutter.right', 5); 
        line2.Set('chart.gutter.bottom', 100); 
        line2.Set('chart.hmargin', 10); 
        line2.Set('chart.tickmarks', 'endcircle'); 
        line2.Set('chart.tooltips', <?php print($labels_string) ?>); 
        line2.Set('chart.labels', <?php print($labels_string) ?>); 
        line2.Set('chart.tooltips.effect', 'contract');         
           line2.Draw(); 
            
           /** 
        * This is the function that is called when the Pie chart is clicked on 
        */ 
        function myFunc3 (e, shape) 
        { 
            // If you have multiple charts on your canvas the .__object__ is a reference to 
            // the last one that you created 
            var obj   = e.target.__object__; 
     
            var dataset = shape['dataset']; 
            var index   = shape['index_adjusted']; 
            var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset]; 
     
            alert('Value: ' + value); 
        }            
            
    </script>
    <br /><br />
            Incidencias <?php echo $interval ?> días atrás

<!----------------------------------------------------------- FIN GRÁFICA DE INCIDENCIAS DE PROVEEDORES ------------------------> 

<?php
         /*--------------------------------------------Mostramos las incidencias de proveedor------------------------------------------*/  

        
        @$interval=$_POST['lista'];
        $sql2 = mysql_query(
            "SELECT *  
             FROM incidenciasdeproveedor 
             WHERE  `fecha` BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
             AND NOW( ) 
             ORDER BY fecha ASC "
        ); 

        
        echo '<table class="print">'; 
        echo "<tbody>";                           
            echo ' <tr>'; 
                echo '<th>Proveedor</th><th>Incidencia</th><th>Fecha</th></tr>'; 
        while ($row = mysql_fetch_row($sql2)) { 
            echo "<tr>";   
              //echo "<td>".$row['0']."</td>"; 
                echo "<td>".$row['1']."</td>"; 
                echo "<td>".$row['2']."</td>"; 
                echo "<td>".$row['5']."</td>"; 
            echo "</tr>"; 
        } 
        if ($sql2) {

                 echo "</tbody>";   
                 echo "</table>"; 
                  echo NOSEHAENCONTRADO;// no rows found
        }

         
        /*---------------------------------------------------- FIN mostrar las incidencias de proveedor--------------------------------------*/  

?>

<br /><br />
<h2>6. <?php echo INDICADORES_NCSPORAREA; ?></h2><br /><br />

            <!----------------------------------------------------------- GRÁFICA DE NO CONFORMIDADES POR ÁREA ------------------------>  

<?php


    @$interval=$_POST['lista'];
    $result = mysql_query("SELECT afectaa, COUNT( * ) AS cantidad
                  FROM hojasdemejora
                  WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
                  AND NOW( )
                  GROUP BY afectaa"
    ); 
if ($result) { 
     
        $labels = array(); 
        $data   = array(); 
     
    while ($row = mysql_fetch_assoc($result)) { 
            $labels[] = $row["afectaa"]; 
            $data[]   = $row["cantidad"]; 
    } 
 
        // Now you can aggregate all the data into one string 
        $data_string = "[" . join(", ", $data) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']"; 
} else { 
        print('MySQL query failed with error: ' . mysql_error()); 
} 
?> 
 
     
    <canvas id="cvs4" width="1100" height="300">[No canvas support]</canvas> 
    <script> 
        bar2 = new RGraph.Bar('cvs4', <?php print($data_string) ?>); 
        bar2.Set('chart.title', 'No conformidades por área'); 
        bar2.Set('chart.title.yaxis', 'Nº de NC´s');         
        bar2.Set('chart.annotatable', true); 
        bar2.Set('chart.colors', ['black']);
        bar2.Set('chart.events.click', myFunc3); 
        bar2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        bar2.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar2.canvas);
                                            RGraph.ClearAnnotations(bar2.canvas)
                                            bar2.Draw();
                                           }
                                 ]
                                ]); 
        bar2.Set('chart.background.grid.autofit', true); 
        bar2.Set('chart.gutter.left', 45); 
        bar2.Set('chart.gutter.right', 5); 
        bar2.Set('chart.gutter.bottom', 150); 
        bar2.Set('chart.text.angle', 45); 
        bar2.Set('chart.hmargin', 10); 
        bar2.Set('chart.tickmarks', 'endcircle'); 
        bar2.Set('chart.tooltips', <?php print($labels_string) ?>); 
        bar2.Set('chart.labels', <?php print($labels_string) ?>);         
        bar2.Draw(); 
         
        /** 
        * This is the function that is called when the Pie chart is clicked on 
        */ 
        function myFunc3 (e, shape) 
        { 
            // If you have multiple charts on your canvas the .__object__ is a reference to 
            // the last one that you created 
            var obj   = e.target.__object__; 
     
            var dataset = shape['dataset']; 
            var index   = shape['index_adjusted']; 
            var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset]; 
     
            alert('Value: ' + value); 
        } 
         
    </script> 
       
<?php
        echo "No conformidades $interval días atrás";
        //----------------------------------------------------------Mostramos las no conformidades-------------------------------------------------*/  
 
        @$interval=$_POST['lista'];
        $sql = mysql_query(
            "SELECT hojas. * , audit. * 
             FROM hojasdemejora AS hojas
             JOIN informeauditoria AS audit ON hojas.ai = audit.ai
             WHERE hojas.fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
             AND NOW( )
             GROUP BY hojas.id DESC 
             ORDER BY  `audit`.`id` ASC "
        );
        echo "<table class='sortable'>"; 
        echo "<tbody>"; 
            echo "<tr>"; 
                echo "<th>"; echo FECHA; echo "</th><th>"; echo INFORME; echo "</th><th>NC</th><th>"; echo DESCRIPCION; echo "</th></tr>"; 
        while ($row = mysql_fetch_row($sql)) { 
            echo "<tr>"; 
                echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['5']."</a></td>";
                echo "<td>";
                
                    echo "<a href='?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['17']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>"; 
                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>"; 
                    echo "<tr><td>"; echo "$row[18]"; echo "</td><td>"; echo "$row[19]"; echo "</td><td colspan=2>"; echo "$row[20]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[21]"; echo"</td><td colspan=2>"; echo "$row[22]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[23]"; echo "</td><td colspan=2>"; echo "$row[24]"; echo"</td></tr>"; 
                    echo "</td></tr></table>'>";                                                              
                    echo "$row[18]</a>"; 
                               
                echo "</td>"; 
                echo '<td>';
    
    
                    echo '<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id='.$row[10].'" alt="Image Tooltip" rel="tooltip" content="<table class=print><tr>'; 
                    echo '<th>'; echo NCS_NUMERO; echo '</th><th>'; echo FECHA; echo '</th></tr>'; 
                    echo '<tr><td>'; echo $row[2]; echo '</td><td>'; echo $row[5]; echo '</td></tr>'; 
                    echo '<tr><th>'; echo AUDITORIAS_NUMERO_AUDITORIA; echo'</th><th>'; echo DOCUMENTACION; echo '</th></tr>'; 
                    echo '<tr><td>'; echo $row[1]; echo '</td><td>'; echo $row[6]; echo'</td></tr>'; 
                    echo '<tr><th>'; echo NCS_ABIERTOPOR; echo '</th><th>'; echo NCS_AFECTAA; echo '</th></tr>'; 
                    echo '<tr><td>'; echo $row[7]; echo '</td><td>'; echo $row[8]; echo '</td></tr>'; 
                    echo '<tr><th>'; echo NCS_CAUSAS; echo'</th><th>'; echo NCS_ACCIONES; echo'</th></tr>'; 
                    echo '<tr><td>'; echo $row[9]; echo'</td><td>'; echo $row[10]; echo '</td></tr>';
                    echo '<tr><th>'; echo NCS_PLAZO;echo '</th><th>'; echo NCS_CIERRE_PARCIAL; echo'</th></tr>'; 
                    echo '<tr><td>'; echo $row[11]; echo '</td><td>'; echo $row[12]; echo '</td></tr>';            
                    echo '<tr><th>'; echo NCS_EFICACIA;echo '</th><th>'; echo NCS_FECHACIERRE; echo'</th></tr>'; 
                    echo '<tr><td>'; echo $row[13]; echo '</td><td>'; echo $row[14]; echo '</td></tr>';
                    echo '<tr><th>'; echo NCS_DESVIACION; echo '</th></tr>';
                    echo '<tr><td>'; echo $row[15]; echo '</td></tr>';
                    echo '</table>">'; 
          
                    echo $row[2];
                    echo '</a>';
    
                echo '</td>'; 
                
                    echo "<td><a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' target='blank'>".$row['4']."</a></td>"; 
         echo "</tr>"; 
        } 
        echo "</tbody>";   
        echo "</table>";
        
            echo '<br /><br /><br />';
             echo "No conformidades $interval días atrás";
             echo '<br /><br />';
        //------------------------------------------------------FIN mostrar las no conformidades----------------------------------------------------------*/                 

?>


<!----------------------------------------------------------- FIN NO CONFORMIDADES POR ÁREA ------------------------> 


<br /><br />
<h2>7. <?php echo INDICADORES_DESVIACIONCIERRESNCS; ?></h2><br /><br />


<!----------------------------------------------------------- DESVIACIONES DE FECHA DE CIERRE DE LAS AACC ----------------------------->  


<?php 

    @$interval=$_POST['lista'];
    $result = mysql_query(
        "SELECT * 
        FROM hojasdemejora 
        WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
        AND NOW( )"
    ); 
    
    if ($result) { 
     
        $labels = array(); 
        $data   = array(); 
     
    while ($row = mysql_fetch_assoc($result)) { 
            $labels[] = $row["numhoja"]; 
            $data[]   = $row["desviacion"]; 
    } 
 
        // Now you can aggregate all the data into one string 
        $data_string = "[" . join(", ", $data) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']"; 
} else { 
        print('MySQL query failed with error: ' . mysql_error()); 
}

?> 

     
    <canvas id="cvs5" width="1100" height="250">[No canvas support]</canvas> 
    <script> 
        line3 = new RGraph.Line('cvs5', <?php print($data_string) ?>); 
        line3.Set('chart.title', 'Desviación plazos cierre ncs'); 
        line3.Set('chart.title.yaxis', 'Nº de días'); 
        line3.Set('chart.annotatable', true); 
        line3.Set('chart.events.click', myFunc3); 
        line3.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        line3.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line3.canvas);
                                            RGraph.ClearAnnotations(line3.canvas)
                                            line3.Draw();
                                           }
                                 ]
                                ]);
        line3.Set('chart.background.grid.autofit', true);          
        /*line3.Set('chart.background.barcolor1', '#f2f2f2'); 
        line3.Set('chart.background.barcolor2', '#f2f2f2');*/ 
        line3.Set('chart.background.grid.color', 'rgba(238,238,238,1)'); 
        line3.Set('chart.background.grid.autofit.numhlines', 10); 
        line3.Set('chart.colors', ['black']); 
        line3.Set('chart.shadow', true); 
        line3.Set('chart.linewidth', 3);         
        line3.Set('chart.curvy', 1); 
        line3.Set('chart.curvy.factor', 0.25); 
        line3.Set('chart.filled', false); 
         
        line3.Set('chart.gutter.left', 35); 
        line3.Set('chart.gutter.right', 5);
        line3.Set('chart.gutter.bottom', 100);
        line3.Set('chart.hmargin', 10); 
        line3.Set('chart.text.angle', 45);
        line3.Set('chart.tickmarks', 'endcircle'); 
        line3.Set('chart.tooltips', <?php print($labels_string) ?>); 
        line3.Set('chart.labels', <?php print($labels_string) ?>); 
        line3.Set('chart.tooltips.effect', 'contract');         
        line3.Draw(); 
            
           /** 
        * This is the function that is called when the Pie chart is clicked on 
        */ 
        function myFunc3 (e, shape) 
        { 
            // If you have multiple charts on your canvas the .__object__ is a reference to 
            // the last one that you created 
            var obj   = e.target.__object__; 
     
            var dataset = shape['dataset']; 
            var index   = shape['index_adjusted']; 
            var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset]; 
     
            alert('Value: ' + value); 
        }            
            
    </script> 
    
<?php
        echo "Gráfica $interval días atrás";

?>


<!----------------------------------------------------------- FIN DESVIACIONES DE FECHA DE CIERRE DE LAS AACC -------------------------> 


<br /><br />
<h2>8. <?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?></h2><br /><br />


<!----------------------------------------------------------- INCIDENCIAS EN LAS INSPECCIONES DE SERVICIO -------------------------> 


<?php 
    
    @$interval=$_POST['lista'];    
    $result = mysql_query(
        "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia 
             FROM inspecciones 
             WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
             AND NOW( )
             GROUP BY codigo_incidencia"
    ); 
    if ($result) {     
        $labels = array(); 
        $data   = array(); 
     
        while ($row = mysql_fetch_assoc($result)) { 
            $labels[] = $row["codigo_incidencia"]; 
            $data[]   = $row["numincidencias"]; 
        } 
 
        // Now you can aggregate all the data into one string 
        $data_string = "[" . join(", ", $data) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']"; 
    } else { 
    
        print('MySQL query failed with error: ' . mysql_error()); 
    } 

?> 
     
    <canvas id="cvs6" width="1100" height="250">[No canvas support]</canvas> 
     <script> 
        line4 = new RGraph.Line('cvs6', <?php print($data_string) ?>); 
        line4.Set('chart.title', 'Incidencias en inspecciones de servicio'); 
        line4.Set('chart.title.yaxis', 'Nº de incidencias'); 
        line4.Set('chart.title.xaxis', 'Código de la incidencia'); 
        line4.Set('chart.annotatable', true); 
        line4.Set('chart.events.click', myFunc3); 
        line4.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        line4.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line4.canvas);
                                            RGraph.ClearAnnotations(line4.canvas)
                                            line4.Draw();
                                           }
                                 ]
                                ]); 
        line4.Set('chart.background.grid.autofit', true); 
         
        /*line4.Set('chart.background.barcolor1', '#f2f2f2'); 
        line4.Set('chart.background.barcolor2', '#f2f2f2'); */
        line4.Set('chart.background.grid.color', 'rgba(238,238,238,1)'); 
        line4.Set('chart.background.grid.autofit.numhlines', 10); 
        line4.Set('chart.colors', ['black']); 
        line4.Set('chart.shadow', true); 
        line4.Set('chart.linewidth', 3);         
        line4.Set('chart.curvy', 1); 
        line4.Set('chart.curvy.factor', 0.25); 
        line4.Set('chart.filled', false);         
        line4.Set('chart.gutter.left', 35); 
        line4.Set('chart.gutter.right', 5); 
        line4.Set('chart.gutter.bottom', 50); 
        line4.Set('chart.hmargin', 10); 
        line4.Set('chart.tickmarks', 'endcircle'); 
        line4.Set('chart.tooltips', <?php print($labels_string) ?>); 
        line4.Set('chart.labels', <?php print($labels_string) ?>); 
        line4.Set('chart.tooltips.effect', 'contract');         
        line4.Draw(); 
         
        /** 
    * This is the function that is called when the Pie chart is clicked on 
    */ 
    function myFunc3 (e, shape) 
    { 
        // If you have multiple charts on your canvas the .__object__ is a reference to 
        // the last one that you created 
        var obj   = e.target.__object__; 
 
        var dataset = shape['dataset']; 
        var index   = shape['index_adjusted']; 
        var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset]; 
 
        alert('Value: ' + value); 
    } 
     
         
    </script> 
    

<br /><br />
Gráfica <?php echo $interval ?> días atrás

<!----------------------------------------------------------- FIN INCIDENCIAS EN LAS INSPECCIONES DE SERVICIO -------------------------> 

<br /><br />
<h2>9. <?php echo INDICADORES_VALORACIONGLOBALCLIENTES; ?></h2><br /><br />

<!----------------------------------------------------------- VALORACIÓN GLOBAL DE CLIENTES ------------------------------------------->


<?php 
     
    @$interval=$_POST['lista'];
    $result = mysql_query("SELECT * FROM globalclientes 
                    WHERE fecha BETWEEN DATE_SUB( NOW( ) , INTERVAL $interval DAY ) 
                   AND NOW( )"
    ); 
    
    
    if ($result) { 
     
        $labels = array(); 
        $data   = array(); 
     
        while ($row = mysql_fetch_assoc($result)) { 
            $labels[] = $row["mes"]; 
            $data[]   = $row["global"]; 
        } 
 
        // Now you can aggregate all the data into one string 
        $data_string = "[" . join(", ", $data) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']"; 
    } else { 
        print('MySQL query failed with error: ' . mysql_error()); 
    } 
?> 
     
    <canvas id="cvs7" width="1100" height="300">[No canvas support]</canvas> 
    <script> 
        line5 = new RGraph.Line('cvs7', <?php print($data_string) ?>); 
        line5.Set('chart.title', 'Valoración global clientes 2012'); 
        line5.Set('chart.title.yaxis', 'Valor'); 
        line5.Set('chart.annotatable', true); 
        line5.Set('chart.events.click', myFunc3); 
        line5.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        line5.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(line5.canvas);
                                            RGraph.ClearAnnotations(line5.canvas)
                                            line5.Draw();
                                           }
                                 ]
                                ]); 
        line5.Set('chart.background.grid.autofit', true); 
         
      /*line5.Set('chart.background.barcolor1', '#f2f2f2'); 
        line5.Set('chart.background.barcolor2', '#f2f2f2');*/
        line5.Set('chart.background.grid.color', 'rgba(238,238,238,1)'); 
        line5.Set('chart.background.grid.autofit.numhlines', 10); 
        line5.Set('chart.colors', ['black']); 
        line5.Set('chart.shadow', true); 
        line5.Set('chart.linewidth', 3);         
        line5.Set('chart.curvy', 1); 
        line5.Set('chart.curvy.factor', 0.25); 
        line5.Set('chart.filled', false);         
        line5.Set('chart.gutter.left', 35); 
        line5.Set('chart.gutter.right', 5); 
        line5.Set('chart.gutter.top', 50); 
        line5.Set('chart.gutter.bottom', 100); 
        line5.Set('chart.text.angle', 45); 
        line5.Set('chart.hmargin', 10); 
        line5.Set('chart.tickmarks', 'endcircle'); 
        line5.Set('chart.tooltips', <?php print($labels_string) ?>); 
        line5.Set('chart.labels', <?php print($labels_string) ?>); 
        line5.Set('chart.tooltips.effect', 'contract');         
        line5.Draw(); 
            
            /** 
        * This is the function that is called when the Pie chart is clicked on 
        */ 
        function myFunc3 (e, shape) 
        { 
            // If you have multiple charts on your canvas the .__object__ is a reference to 
            // the last one that you created 
            var obj   = e.target.__object__; 
     
            var dataset = shape['dataset']; 
            var index   = shape['index_adjusted']; 
            var value = typeof(index) == 'number' ? obj.data[dataset][index] : obj.data[dataset]; 
     
            alert('Value: ' + value); 
        } 
            
    </script> 
    
<?php
        echo "Gráfica $interval días atrás";

?>


<!----------------------------------------------------------- FIN VALORACIÓN GLOBAL DE CLIENTES -------------------------------------> 


 
</body> 
</html>