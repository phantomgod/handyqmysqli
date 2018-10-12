<?php
/**
* Mod REVISAR el sistema de calidad
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<script src="jscripts/even.js"></script> 
</head> 
<body> 
 
<table class="print"> 
      <tbody> 
          <tr> 
            <td> 
              <a href="?seccion=revsistema&aktion=add"><?php echo REVISAR_SISTEMA; ?></a> :: 
              <a href="?seccion=revsistema&aktion=change"><?php echo MODIFICAR_REVISION; ?></a> 
             </td> 
          </tr> 
      </tbody> 
</table> 
<br> 
 
<?php 
 
// requires the class 
        require "class.datepicker.php"; 
             
        // instantiate the object 
        $db=new datepicker(); 
             
        // uncomment the next line to have the calendar show up in german 
        $db->language = "spanish"; 
             
        $db->firstDayOfWeek = 1; 
 
        // set the format in which the date to be returned 
         $db->dateFormat = "Y-m-d"; 
             
 
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "add") { 
    if ((empty($_POST['fecha'])) 
        AND (empty($_POST['analisisobjetivos'])) 
        AND (empty($_POST['analisissatisfaccionclientes'])) 
        AND (empty($_POST['analisisreclamacionesclientes'])) 
        AND (empty($_POST['analisisnoconformidadesporarea'])) 
        AND (empty($_POST['analisiscierresncs'])) 
        AND (empty($_POST['analisisincidenciasinspecciones'])) 
        AND (empty($_POST['analisisformacion'])) 
        AND (empty($_POST['analisisincidenciasalmacen'])) 
        AND (empty($_POST['analisisincidenciasproveedor'])) 
        AND (empty($_POST['analisisauditorias'])) 
        AND (empty($_POST['analisisnoconformidades'])) 
        AND (empty($_POST['analisispolitica'])) 
        AND (empty($_POST['analiscambios'])) 
        AND (empty($_POST['recomendaciones']))
    ) {   
        echo '<span class="analisis_revsistema">'.REVSISTEMA_USTEDESTA.'</span>'; 
        echo '<form action="" method="POST">'; 
            echo '<h1>'.FECHA.':</h1>'; 
                echo '<input type="text" id="date" class="inputfecha" name="fecha" value="">'; 
                 ?>           
                    <input type="button" value="::" onclick="<?php echo $db->show('date')?>">                   
                 <?php    
            echo '<h1>1. '.OBJETIVOS_OBJETIVOS.'</h1><br /><br /><br />'; 
 
 
        /*---------------------------------Mostramos los objetivos al modo mangui -------------------------------*/ 
 

    
     @$date = $_POST['seleccione'];

       $sql = mysql_query("SELECT * FROM objetivosdatosgenerales WHERE Fecha >  '$date' ORDER BY Id DESC"); 
        $result = mysql_fetch_row($sql); 

            echo "<table class=sortable' summary='Esta tabla imprime un objetivo en pantalla'>";              
            echo "<tbody>"; 
                echo "<tr>";         
                    echo '<th>'.OBJETIVOS_NOMBRE_OBJETIVO.'</th>';
                  //echo "<th>Origen</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th>"; 
                    echo "<th>Indicador</th>"; 
                  //echo "<th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th>"; 
                    echo '<th>'.RESULTADO.'</th>'; 
                    echo '<th>'.FECHA.'</th>';
                echo "</tr>"; 
        while ($row = mysql_fetch_row($sql)) { 
                echo "<tr>";             
                    echo "<td>"; 

                        echo "<a href=# alt=Image Tooltip rel=tooltip content='<table class=print style=width:100% summary=Esta tabla imprime un objetivo en pantalla>";       
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
                            echo "<td><a href='?seccion=objetivos_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['8']."</a></td>";                 
                            echo "<td><a href='?seccion=objetivos_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['15']."</a></td>"; 
                            echo "<td style=width:100px><a href='?seccion=objetivos_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['16']."</a></td>"; 
                            echo "</tr>"; 
        } 
                            echo "<tbody>"; 
                            echo "</table>"; 
           
          /*----------------------------FIN mostrar objetivos---------------------------------*/ 
 
           
                    echo '<br /><br />'; 
                    echo '<div style="text-indent: 1cm;">';                 
                    echo '<span class="analisis_revsistema">Análisis del cumplimiento de objetivos:</span>'; 
                    echo '</div>'; 
                    echo '<br />';                     
                     
                    echo '<textarea class="textareanormal" name="analisisobjetivos" placeholder="Valor de control: 100%" value=""></textarea>';  
                    echo '<br />';     
             
             
        echo '<h1>2. Indicadores.</h1>';  
            echo '<h2>2.1. Clientes.</h2>';  
                echo '<h3>2.1.1. Satisfacción</h3>';  
                        
                        /*echo '<iframe width="800px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/valoracionglobalclientes_revsistema.php">';  
                        echo '<p>Your browser does not support iframes.</p></iframe>';*/                    
                            
/*------------------------------------------------GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/

/** 
    * Change these to your own credentials*/ 
     
     @$date = $_POST['seleccione'];
     
    $result = mysql_query("SELECT * FROM globalclientes WHERE fecha > '$date'");  
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
 
    <!-- Don't forget to update these paths --> 
 
    <script src="libraries/RGraph.common.core.js" ></script> 
    <script src="libraries/RGraph.line.js" ></script> 
    <script src="libraries/RGraph.bar.js"></script> 
    <script src="libraries/RGraph.common.dynamic.js"></script> 
    <script src="libraries/RGraph.common.context.js" ></script> 
    <script src="libraries/RGraph.common.tooltips.js"></script> 
    <script src="libraries/RGraph.common.annotate.js" ></script> 
     
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
 
 
</head> 
<body> 
     
    <canvas id="cvs1" width="1100" height="300">[No canvas support]</canvas> 
    <script> 
        line1 = new RGraph.Line('cvs1', <?php print($data_string) ?>); 
        line1.Set('chart.title', 'Valoración global clientes'); 
        line1.Set('chart.title.yaxis', 'Valor'); 
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
        line1.Set('chart.colors', ['yellow']); 
        line1.Set('chart.shadow', true); 
        line1.Set('chart.linewidth', 3);         
        line1.Set('chart.curvy', 1); 
        line1.Set('chart.curvy.factor', 0.25); 
        line1.Set('chart.filled', false);         
        line1.Set('chart.gutter.left', 35); 
        line1.Set('chart.gutter.right', 5); 
        line1.Set('chart.gutter.top', 50); 
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
    <br />
    
    <?php
        echo "Gráfica desde la fecha: '$date' en adelante";

     ?>

     <br /><br /><br /><br /><br />
                            
<?php                            
                            
/*------------------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/                            
                            
                            
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de la satisfacción del cliente:</span>'; 
                            echo '</div>';                     
                            echo '<br />'; 
                            echo '<textarea class="textareanormal" name="analisissatisfaccionclientes" placeholder="Valoraciones globales encuestas > 4. Impresiones fundadas de los trabajadores" value=""></textarea>';  
                            echo '<br />'; 
                     
                echo '<h3>2.1.2. Quejas y reclamaciones</h3>';   
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de las quejas y reclamaciones:</span>'; 
                            echo '</div>';                     
                            echo '<br />'; 
                            echo '<textarea class="textareanormal" name="analisisreclamacionesclientes" placeholder="Reclamaciones = 0" value=""></textarea>';  
                            echo '<br />'; 
                     
            echo '<h2>2.2. Indicadores de MEDICIÓN, ANÁLISIS Y MEJORA</h2>';   
                echo '<h3>2.2.1. Nº de no conformidades por área</h3>';   
                        
                        
                        /*echo '<iframe width="1200px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/ncsporarea_revsistema.php">';  
                        echo '<p>Your browser does not support iframes.</p>';  
                        echo '</iframe>'; */
                        
/*------------------------------------------------ GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/                        
    
    
    
    @$date = $_POST['seleccione'];    
    $result = mysql_query("SELECT afectaa, COUNT( * ) AS cantidad
                           FROM hojasdemejora
                           WHERE fecha >  '$date'
                           GROUP BY afectaa"); 
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

<a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png"><br /><strong>Coded by rgraph.net</strong></a> 
 
    <!-- Don't forget to update these paths --> 
 
   

     
    <canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas> 
    <script> 
        bar1 = new RGraph.Bar('cvs2', <?php print($data_string) ?>); 
        bar1. Set('chart.title', 'No conformidades por área'); 
        bar1. Set('chart.colors', ['Tan','#9fff30','transparent']);
        bar1. Set('chart.title.yaxis', 'Nº de NC´s');         
        bar1. Set('chart.annotatable', true); 
        bar1. Set('chart.events.click', myFunc3); 
        bar1. Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        bar1. Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar1.canvas);
                                            RGraph.ClearAnnotations(bar1.canvas)
                                            bar1.Draw();
                                           }
                                 ]
                                ]); 
        bar1. Set('chart.background.grid.autofit', true); 
        bar1. Set('chart.gutter.left', 45); 
        bar1. Set('chart.gutter.right', 5); 
        bar1. Set('chart.gutter.bottom', 150); 
        bar1. Set('chart.text.angle', 45); 
        bar1. Set('chart.hmargin', 10); 
        bar1. Set('chart.tickmarks', 'endcircle'); 
        bar1. Set('chart.tooltips', <?php print($labels_string) ?>); 
        bar1. Set('chart.labels', <?php print($labels_string) ?>);         
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
         
    </script> 
    
         <br /><br /><br />
    
        <?php
        echo "Gráfica desde la fecha: '$date' en adelante";

     ?>

     <br /><br /><br /><br /><br />
    
 <!------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA-------------------------------------->     
    
    
    <?php
                        echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de las no conformidades por área:</span>'; 
                            echo '</div>';                     
                            echo '<br />';  
                            echo '<textarea class="textareanormal" name="analisisnoconformidadesporarea" placeholder="Valor de control= 0" value=""></textarea>';                          
                            echo '<br />';  
                         
                echo '<h3>2.2.2. Desviaciones en el plazo de cierre de las NC´s</h3>';  
                        
/*------------------------------------------------ GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/    


                    
                        /*echo '<iframe width="1000px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/desviacioncierresncs_revsistema.php">';  
                        echo '<p>Your browser does not support iframes.</p>';  
                        echo '</iframe>';*/ 

    
     @$date = $_POST['seleccione'];

  $result = mysql_query(
        "SELECT numhoja, desviacion 
        FROM hojasdemejora 
        WHERE fecha >  '$date'"
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
     
    <canvas id="cvs3" width="1100" height="250">[No canvas support]</canvas> 
    <script> 
        line2 = new RGraph.Line('cvs3', <?php print($data_string) ?>); 
        line2.Set('chart.colors', ['red','#9fff30','transparent']); 
        line2.Set('chart.title', 'Desviación plazos cierre ncs'); 
        line2.Set('chart.title.yaxis', 'Nº de días'); 
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
         
        //line2.Set('chart.background.barcolor1', '#f2f2f2'); 
        //line2.Set('chart.background.barcolor2', '#f2f2f2'); 
        //line2.Set('chart.background.grid.color', 'rgba(238,238,238,1)'); 
        line2.Set('chart.background.grid.autofit.numhlines', 10); 
        //line2.Set('chart.colors', ['red']); 
        line2.Set('chart.shadow', true); 
        line2.Set('chart.linewidth', 3);         
        line2.Set('chart.curvy', 1); 
        line2.Set('chart.curvy.factor', 0.25); 
        line2.Set('chart.filled', false); 
        line2.Set('chart.gutter.left', 55); 
        line2.Set('chart.gutter.right', 5);         
        line2.Set('chart.gutter.bottom', 100); 
        line2.Set('chart.text.angle', 45); 
        line2.Set('chart.hmargin', 30); 
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

         <br /><br /><br />
    
        <?php
        echo "Gráfica desde la fecha: '$date' en adelante";

     ?>

     <br /><br /><br /><br /><br />    
 

<?php
                        
/*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/                                
                            
                            
                            
                            
                            
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de las desviaciones de plazo:</span>'; 
                            echo '</div>';                     
                            echo '<br />'; 
                            echo '<textarea class="textareanormal" name="analisiscierresncs" value="">Valor de control: 0.</textarea>';  
 
                         
                echo '<h3>2.2.3. Incidencias de inspección</h3>';  
                        
                        
/*------------------------------------------------GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

                     

     @$date = $_POST['seleccione'];     
                        
             $result = mysql_query(
            "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia 
             FROM inspecciones 
             WHERE fecha > '$date'
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

    <canvas id="cvs4" width="1100px" height="350px">[No canvas support]</canvas> 
    <script> 
        bar2 = new RGraph.Bar('cvs4', <?php print($data_string) ?>); 
        bar2.Set('chart.colors', ['lavender','#9fff30','transparent']); 
        bar2.Set('chart.title', 'Número de incidencias por código'); 
        bar2.Set('chart.title.yaxis', 'Nº de incidencias'); 
        bar2.Set('chart.title.xaxis', 'Código de la incidencia'); 
        bar2.Set('chart.annotatable', true); 
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
        bar2.Set('chart.gutter.left', 100); 
        bar2.Set('chart.gutter.right', 5); 
        bar2.Set('chart.gutter.bottom', 100); 
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
    
    <br /><br /><br />
    
        <?php
        echo "Gráfica desde la fecha: '$date' en adelante";

     ?>

     <br /><br /><br /><br /><br />    
                            
    

<?php    
/*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

                            
                            
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de las incidencias de inspección:</span>'; 
                            echo '</div>';                     
                            echo '<br />'; 
                            echo '<textarea class="textareanormal" name="analisisincidenciasinspecciones" value="">1 incidencia leve por inspección.</textarea>';                              
                            echo '<br />'; 
          
            echo '<h2>2.3. Indicadores de RECURSOS</h2>';  
                echo '<h3>2.3.1. Formación anual</h3>';  
                        
/*------------------------------------------------ GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/                        
                        

 /** 
    * Change these to your own credentials*/ 
     @$date = $_POST['seleccione'];
     
     
    $result = mysql_query("SELECT trabajador, SUM( horas ) AS horas 
            FROM cursos 
            WHERE fecha >  '$date' 
            GROUP BY trabajador"); 
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

    <canvas id="cvs5" width="1100px" height="350px">[No canvas support]</canvas> 
    <script> 
        bar3 = new RGraph.Bar('cvs5', <?php print($data_string) ?>); 
        bar3.Set('chart.title', 'Total de horas de formación por trabajador'); 
        bar3.Set('chart.colors', ['PowderBlue','#9fff30','transparent']); 
        bar3.Set('chart.annotatable', true); 
        bar3.Set('chart.events.click', myFunc3); 
        bar3.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        bar3.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar3.canvas);
                                            RGraph.ClearAnnotations(bar3.canvas)
                                            bar3.Draw();
                                           }
                                 ]
                                ]); 
        bar3.Set('chart.background.grid.autofit', true); 
        bar3.Set('chart.gutter.left', 35); 
        bar3.Set('chart.gutter.right', 5); 
        bar3.Set('chart.gutter.bottom', 150); 
        bar3.Set('chart.text.angle', 45); 
        bar3.Set('chart.hmargin', 10); 
        bar3.Set('chart.tickmarks', 'endcircle'); 
        bar3.Set('chart.tooltips', <?php print($labels_string) ?>); 
        bar3.Set('chart.labels', <?php print($labels_string) ?>);         
        bar3.Draw(); 
         
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
    
    <br /><br /><br />
    
        <?php
        echo "Gráfica desde la fecha: '$date' en adelante";

     ?>

     <br /><br /><br /><br /><br />    
    

<?php    
                            
                            
/*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/                            
                            
                            
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de la formación anual:</span>'; 
                            echo '</div>';                     
                            echo '<textarea class="textareanormal" name="analisisformacion" placeholder="4 h / año / trabajador" value=""></textarea>';  
                            echo '<br />'; 
                             
                             
                echo '<h3>2.3.2. Incidencias de almacén</h3>'; 
                 
                        //echo '<div style="text-indent: 2cm;">';  

                        
/*------------------------------------------------GRÁFICO DE INCIDENCIAS DE ALMACÉN--------------------------------------------*/                        

    
     @$date = $_POST['seleccione'];

        $result = mysql_query(
        "SELECT COUNT( obsalmac ) AS incidencias, fecha 
         FROM aisgc 
         WHERE fecha > '$date'
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

    <canvas id="cvs6" width="1100px" height="300px">[No canvas support]</canvas> 
     <script> 
        line3 = new RGraph.Line('cvs6', <?php print($data_string) ?>); 
        line3.Set('chart.title', 'Incidencias en inspecciones de almacén'); 
        line3.Set('chart.colors', ['red','#9fff30','transparent']); 
        line3.Set('chart.title.yaxis', 'Nº'); 
        line3.Set('chart.title.xaxis', ''); 
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
        chart.Set('chart.background.grid.autofit', true); 
         
      /*line3.Set('chart.background.barcolor1', '#f2f2f2'); 
        line3.Set('chart.background.barcolor2', '#f2f2f2'); 
        line3.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/ 
        line3.Set('chart.background.grid.autofit.numhlines', 10); 
        line3.Set('chart.colors', ['orange']); 
        line3.Set('chart.shadow', true); 
        line3.Set('chart.linewidth', 3);         
        line3.Set('chart.curvy', 1); 
        line3.Set('chart.curvy.factor', 0.25); 
        line3.Set('chart.filled', false);         
        line3.Set('chart.gutter.left', 100); 
        line3.Set('chart.gutter.right', 5); 
        line3.Set('chart.gutter.bottom', 100); 
        line3.Set('chart.text.angle', 45); 
        line3.Set('chart.hmargin', 10); 
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
    

   <br /><br /><br />    
     <?php
        echo "Gráfica desde la fecha: '$date' en adelante";
     ?>
   <br /><br /><br /><br /><br />    
    
<!------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS DE ALMACÉN-------------------------------------->    
    
    <?php
                        
 
   // echo '</div>'; 
 
/*-------------------------------------------------Mostramos las incidencias de almacén -------------------------------------------------------*/ 

     @$date = $_POST['seleccione'];

     
        $result = mysql_query(
            "SELECT * 
             FROM  `aisgc`  
             WHERE  `fecha` >  '$date' 
             ORDER BY  `aisgc`.`id` ASC"
        );  
        if ($row = mysql_fetch_array($result)) {  
                  echo "<table class = 'sortable'> ";  
                  echo '<tr><th>AI</th><th>'.INDICADORES_INCIDENCIASDEALMACEN.'</th></tr>';  
            do {
                 echo "<tr><td>";
                 
                  echo "<a href=?seccion=aisgc_admin&aktion=change_id&id=".$row['0']." alt=Image Tooltip rel=tooltip content='<table class=print><tr>";
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[fecha]"; echo "</td><td>"; echo "$row[ai]"; echo "</td><td colspan=2>"; echo "$row[auditor1]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo TRABAJADOR_TRABAJADOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[docum]"; echo"</td><td colspan=2>"; echo "$row[trabajador1]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo SERVICIO_SERVICIO; echo "</th><th>"; echo VEHICULOS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[servicio1]"; echo "</td><td colspan=2>"; echo "$row[vehiculos]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th>"; echo CUESTIONARIO_CALIDAD; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obstrat]"; echo "</td><td colspan=2>"; echo "$row[obscal]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obsalmac]"; echo "</td><td colspan=2>"; echo "$row[obscompras]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo "</th><th>"; echo CUESTIONARIO_DOCUMENTACION; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obsformac]"; echo "</td><td colspan=2>"; echo "$row[obsdocum]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[obslegio]"; echo "</td></tr>";
                    
                    echo "</td></tr></table>'>";
                                                
            echo "$row[ai]</a>";
                 
                 
                 //".$row["ai"]."
                 
                 
                 echo "</td><td>".$row["obsalmac"]."</td></tr> ";  
            } while ($row = mysql_fetch_array($result));  
                  echo "</table> ";  
        } else {  
              echo "¡ No se ha encontrado ningún registro !";  
        }  
 
/*----------------------------------------------FIN mostrar incidencias de almacén----------------------------------------------------------*/ 

 
                            echo '<br />';  
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de las incidencias de almacén:</span>'; 
                            echo '</div>';                     
                            echo '<br />'; 
                            echo '<textarea class="textareanormal" name="analisisincidenciasalmacen" placeholder="< 3 incidencias leves/ auditoría" value=""></textarea>';  
                            echo '<br />'; 
                             
                             
            echo '<h2>2.4. Indicadores de PRODUCCIÓN</h2>';  
                echo '<h3>2.4.1. Incidencias de proveedor</h3>'; 
 
                        echo '<div style="text-indent: 0cm;">'; 
                        
/*------------------------------------------------------------- GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/                        

    
        @$date = $_POST['seleccione'];
        $result = mysql_query("SELECT  `fecha` ,  `codigoincidencia`  
                            FROM  `incidenciasdeproveedor`  
                            WHERE fecha >  '$date'"); 
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

    <canvas id="cvs7" width="1000px" height="300px">[No canvas support]</canvas> 
    <script> 
        line4 = new RGraph.Line('cvs7', <?php print($data_string) ?>); 
        line4.Set('chart.title', 'Códigos de incidencias de proveedor'); 
        line4.Set('chart.title.yaxis', 'Código'); 
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
        line4.Set('chart.colors', ['red','#9fff30','transparent']); 
      //line4.Set('chart.background.barcolor1', '#f2f2f2'); 
      //line4.Set('chart.background.barcolor2', '#f2f2f2'); 
      //line4.Set('chart.background.grid.color', 'rgba(238,238,238,1)'); 
        line4.Set('chart.background.grid.autofit.numhlines', 10); 
        line4.Set('chart.colors', ['red']); 
        line4.Set('chart.shadow', true); 
        line4.Set('chart.linewidth', 3);         
        line4.Set('chart.curvy', 1); 
        line4.Set('chart.curvy.factor', 0.25); 
        line4.Set('chart.filled', false); 
        line4.Set('chart.text.angle', 45); 
        line4.Set('chart.gutter.left', 35); 
        line4.Set('chart.gutter.right', 5); 
        line4.Set('chart.gutter.bottom', 100); 
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

   <br /><br /><br />    
     <?php
        echo "Gráfica desde la fecha: '$date' en adelante";
     ?>
   <br /><br /><br /><br /><br />      
                        
                        
<?php                        
/*----------------------------------FIN DE AL GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/                        
                        
                        echo '</div>'; 
                         
                        echo '<br />'; 
         
        /*-----Mostramos las incidencias de proveedor---*/   
 
                        /*$sql = mysql_query(
                            "SELECT *  
                             FROM incidenciasdeproveedor 
                             WHERE fecha >  '2012-12-31' 
                             ORDER BY fecha ASC "
                        );*/


    
        @$date = $_POST['seleccione'];


                        
                        $sql = mysql_query(
                            "SELECT p.id id1, p. * , i.id id2, i. * 
                             FROM proveedores p
                             JOIN incidenciasdeproveedor i ON p.proveedor = i.proveedor
                             AND i.fecha >  '$date'
                             ORDER BY fecha ASC "
                        );

                        
                          echo '<table class="sortable" summary="Esta tabla imprime las NCs y auditorías en pantalla">'; 
                          echo "<tbody>";                      
                             echo ' <tr>'; 
                                  echo '<th>ID</th><th>'.INCIDENCIA.'</th><th>'.PROVEEDORES_PROVEEDOR.'</th><th>'.FECHA.'</th></tr>'; 
        while ($row = mysql_fetch_row($sql)) { 
                             echo "<tr>";   
                                 echo "<td>".$row['0']."</td>";
                                 echo "<td>";
                                 
                                    echo "<a href=?seccion=proveedores_admin&aktion=change_id&id=".$row['0']." alt=Image Tooltip rel=tooltip content='<table class=print><tr>";
                                    echo "<th>ID</th><th>"; echo PROVEEDORES_PROVEEDOR; echo "</th></tr>";
                                    echo "<tr><td>"; echo "$row[11]"; echo "</td><td colspan=2>"; echo "$row[12]"; echo "</td></tr>"; 
                                    echo "<tr><th>"; echo INCIDENCIA; echo"</th><th colspan=2>"; echo CODIGO; echo "</th></tr>";
                                    echo "<tr><td>"; echo "$row[13]"; echo"</td><td>"; echo "$row[14]"; echo "</td></tr>";
                                    echo "<tr><th>"; echo NCS_AFECTAA; echo "</th><th>"; echo FECHA; echo "</th></tr>";
                                    echo "<tr><td>"; echo "$row[15]"; echo "</td><td>"; echo "$row[16]"; echo "</td></tr>";
                                    echo "</td></tr></table>'>";
                                                
                                    echo "$row[13]</a>";
                                    
                                 echo "<td>".$row['2']."</td>";                                  
                                 echo "</td>";
                                 
                                 echo "<td>".$row['16']."</td>"; 
                             echo "</tr>"; 
        } 
                           echo "</tbody>";   
                           echo "</table>"; 
        /*-----FIN mostrar las incidencias de proveedor---*/    
   
                        echo '<br />';  
                         
                        echo '<div style="text-indent: 1cm;">';                 
                        echo '<span class="analisis_revsistema">Análisis de las incidencias de proveedor:</span>'; 
                        echo '</div>'; 
                        echo '<br />';  
                        echo '<textarea class="textareanormal" name="analisisincidenciasproveedor" placeholder="2,5% producto" value=""></textarea>';  
                        echo '<br />'; 
                         
                        echo '<h1>3. Auditorías.</h1>';  
  
        //-----Mostramos las auditorías-------*/ 
 
 

    
        @$date = $_POST['seleccione'];
 
                $sql = mysql_query(
                    "SELECT a.id id1, a. * , i.id id2, i. * 
                     FROM aisgc a
                     JOIN informeauditoria i ON a.ai = i.ai
                     AND i.fecha >  '$date'
                     ORDER BY i.fecha ASC "
                );       
                  echo '<table class="sortable" summary="Esta tabla imprime las NCs y auditorías en pantalla">'; 
                    echo "<tbody>"; 
                  echo ' <tr>'; 
                  echo '<th>'.AUDITORIAS_AUDITORIA.'</th><th>'.INFORME.'</th><th>'.FECHA.'</th><th>'.RESULTADO.'</th></tr>'; 
        while ($row = mysql_fetch_row($sql)) { 
                    echo "<tr>";   
                    echo "<td>";
                    
                    echo "<a href=?seccion=aisgc_print&aktion=change_id&id=".$row['0']." alt=Image Tooltip rel=tooltip content='<table class=print><tr>";
                    echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>";
                    echo "<tr><td>"; echo "$row[2]"; echo "</td><td>"; echo "$row[3]"; echo "</td><td colspan=2>"; echo "$row[4]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo TRABAJADOR_TRABAJADOR; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[7]"; echo"</td><td colspan=2>"; echo "$row[8]"; echo "</td></tr>";
                    echo "<tr><th colspan=2>"; echo SERVICIO_SERVICIO; echo "</th><th>"; echo VEHICULOS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[11]"; echo "</td><td colspan=2>"; echo "$row[13]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th>"; echo CUESTIONARIO_CALIDAD; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[14]"; echo "</td><td colspan=2>"; echo "$row[15]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[16]"; echo "</td><td colspan=2>"; echo "$row[17]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo "</th><th>"; echo CUESTIONARIO_DOCUMENTACION; echo"</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[18]"; echo "</td><td colspan=2>"; echo "$row[19]"; echo"</td></tr>";
                    echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>";
                    echo "<tr><td colspan=2>"; echo "$row[20]"; echo "</td></tr>";
                    
                    echo "</td></tr></table>'>";
                                                
            echo "$row[3]</a>";
                    
                    
                    //<a href='?seccion=aisgc_print&aktion=print_id&id=".$row['0']."'>".$row['3']."</a>
                    
                    
                    echo "</td>"; 
                    echo "<td><a href='?seccion=auditorias_print&aktion=print_id&id=".$row['21']."'>".$row['23']."</a></td>"; 
                    echo "<td>".$row['24']."</td>"; 
                    echo "<td>".$row['29']."</td>"; 
                    echo "</tr>"; 
        } 
                   echo "</tbody>";   
                  echo "</table>"; 
                   
        //-----FIN mostrar las auditorías-------*/                              
 
                        echo '<br />';  
                        echo '<div style="text-indent: 1cm;">';                 
                        echo '<span class="analisis_revsistema">Análisis de los resultados de auditorías:</span>'; 
                        echo '</div>';     
                        echo '<br />'; 
                        echo '<textarea class="textareanormal" name="analisisauditorias" placeholder="Análisis de los resultados de las auditorías" value=""></textarea>';  
                        echo '<br />'; 
                         
                        echo '<h1>4. No conformidades y mejoras.</h1>'; 
 
                        ?> 
                        <div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'> 
                        <?php         
                        echo '&nbsp;&nbsp;&nbsp;&nbsp;';           
                        echo '<img src="images/help.png">';             
                        echo '</div>'; 
              
        //-----Mostramos las no conformidades-------*/  
 
 
 
 
 
        $sql = mysql_query(
            "SELECT hojas.id id_1, hojas.numhoja, hojas.descripcion, hojas.acciones, hojas.fecha, hojas.afectaa, hojas.cerradofecha, audit.ai, audit.id id_2 
             FROM hojasdemejora AS hojas 
             LEFT JOIN informeauditoria AS audit ON hojas.ai = audit.ai 
             WHERE hojas.fecha > '$date' 
             GROUP BY hojas.id DESC  
             ORDER BY  `audit`.`id` ASC"
        );
        echo "<table class='sortable' summary='Esta tabla imprime las NCs y auditorías en pantalla'>"; 
        echo "<tbody>"; 
            echo "<tr>"; 
                echo "<th>AI</th><th>NC</th><th>"; echo DESCRIPCION; echo "</th></tr>"; 
        while ($row = mysql_fetch_row($sql)) { 
            echo "<tr>";   
                echo "<td><a href='?seccion=auditorias_print&aktion=print_id&id=".$row['8']."' target='blank'>".$row['7']."</a></td>"; 
                echo "<td><a href='?seccion=ncs_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['1']."</a></td>"; 
                echo "<td><a href='?seccion=ncs_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['2']."</a></td>"; 
            echo "</tr>"; 
        } 
        echo "</tbody>";   
        echo "</table>"; 
               
         //----FIN mostrar las no conformidades-------*/      
   
 
                            echo '<br />';  
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de las no conformidades y mejoras:</span>'; 
                            echo '</div>';     
                            echo '<br />'; 
                            echo '<textarea class="textareanormal" name="analisisnoconformidades" placeholder="Análisis de los resultados de las no conformidades" value=""></textarea>';  
                            echo '<br />';  
                             
            echo '<h1>5. Política de calidad.</h1>';  
                            echo '<br />';  
                            echo '<br />';  
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de la política de calidad:</span>'; 
                            echo '</div>';      
                            echo '<textarea class="textareanormal" name="analisispolitica" placeholder="Análisis de la política" value=""></textarea>';                               
                            echo '<br />';  
                             
            echo '<h1>6. Cambios.</h1>';  
                            echo '<br />';  
                            echo '<br />';  
                            echo '<div style="text-indent: 1cm;">';                 
                            echo '<span class="analisis_revsistema">Análisis de los posibles cambios:</span>'; 
                            echo '</div>';      
                            echo '<textarea class="textareanormal" name="analisiscambios" placeholder="Análisis de los cambios que afecten al sistema de calidad" value=""></textarea>';  
                            echo '<br />';  
                             
            echo '<h1>7. Recomendaciones de mejora.</h1>';  
                            echo '<br />';  
                            echo '<br />';                              
                            echo '<textarea class="textareanormal" name="recomendaciones" placeholder="Recomendaciones" value=""></textarea>';  
                            echo '<br />';  
                              
            echo '<h1>8. Conclusiones.</h1>';  
                            echo '<br />';                               
                            echo '<textarea class="textareanormal" name="conclusiones" placeholder="Conclusiones" value=""></textarea>';                              
                            echo '<br />'; 
                            echo '<input type="submit" value="Enviar">'; 
                             echo '</form>'; 
    } else { 
            $fecha_Post = $_POST['fecha']; 
            $analisisobjetivos_Post = $_POST['analisisobjetivos']; 
            $analisissatisfaccionclientes_Post = $_POST['analisissatisfaccionclientes']; 
            $analisisreclamacionesclientes_Post = $_POST['analisisreclamacionesclientes']; 
            $analisisnoconformidadesporarea_Post = $_POST['analisisnoconformidadesporarea']; 
            $analisiscierresncs_Post = $_POST['analisiscierresncs']; 
            $analisisincidenciasinspecciones_Post = $_POST['analisisincidenciasinspecciones']; 
            $analisisformacion_Post = $_POST['analisisformacion']; 
            $analisisincidenciasalmacen_Post = $_POST['analisisincidenciasalmacen']; 
            $analisisincidenciasproveedor_Post = $_POST['analisisincidenciasproveedor']; 
            $analisisauditorias_Post = $_POST['analisisauditorias']; 
            $analisisnoconformidades_Post = $_POST['analisisnoconformidades']; 
            $analisispolitica_Post = $_POST['analisispolitica']; 
            $analisiscambios_Post = $_POST['analisiscambios']; 
            $recomendaciones_Post = $_POST['recomendaciones']; 
            $sql =    mysql_query("INSERT INTO revsistema (fecha, analisisobjetivos, analisissatisfaccionclientes,analisisreclamacionesclientes,analisisnoconformidadesporarea,analisiscierresncs,analisisincidenciasinspecciones,analisisformacion,analisisincidenciasalmacen,analisisincidenciasproveedor,analisisauditorias,analisisnoconformidades,analisispolitica,analisiscambios,recomendaciones) VALUES ('".$fecha_Post."', '".$analisisobjetivos_Post."', '".$analisissatisfaccionclientes_Post."', '".$analisisreclamacionesclientes_Post."', '".$analisisnoconformidadesporarea_Post."', '".$analisiscierresncs_Post."', '".$analisisincidenciasinspecciones_Post."', '".$analisisformacion_Post."', '".$analisisincidenciasalmacen_Post."', '".$analisisincidenciasproveedor_Post."', '".$analisisauditorias_Post."', '".$analisisnoconformidades_Post."', '".$analisispolitica_Post."', '".$analisiscambios_Post."', '".$recomendaciones_Post."')"); 
        if ($sql) {
                echo REVISION_ANADIDA;
        } else {
             echo "Error message = ".mysql_error();
        }                
    } 
} 
 
if ($aktion == "change") { 
    $sql = mysql_query("SELECT * FROM revsistema ORDER BY id DESC"); 
   
        echo '<table class="sortable">';  
        echo '<tbody>';  
            echo '<tr><td>Id</td><td>Fecha</td><!--<td>Comunicado por</td><td>Comentarios</td>--></tr>'; 
    while ($row = mysql_fetch_row($sql)) { 
            echo "<tr>"; 
                echo "<td><a href='?seccion=revsistema2&aktion=change_id&id=".$row['0']."'>".$row['0']."</a></td>"; 
                echo "<td><a href='?seccion=revsistema2&aktion=change_id&id=".$row['0']."'>".$row['1']."</a></td>"; 
              /*echo "<td><a href='?seccion=revsistema&aktion=change_id&id=".$row['0']."'>".$row['2']."</a></td>";*/ 
            echo "</tr>"; 
    } 
       echo '</tbody>'; 
       echo "</table>"; 
} 
 
if ($aktion == "change_id") { 
    if ((empty($_POST['fecha'])) 
        AND (empty($_POST['analisisobjetivos'])) 
        AND (empty($_POST['analisissatisfaccionclientes'])) 
        AND (empty($_POST['analisisreclamacionesclientes'])) 
        AND (empty($_POST['analisisnoconformidadesporarea'])) 
        AND (empty($_POST['analisiscierresncs'])) 
        AND (empty($_POST['analisisincidenciasinspecciones'])) 
        AND (empty($_POST['analisisformacion'])) 
        AND (empty($_POST['analisisincidenciasalmacen'])) 
        AND (empty($_POST['analisisincidenciasproveedor'])) 
        AND (empty($_POST['analisisauditorias'])) 
        AND (empty($_POST['analisisnoconformidades'])) 
        AND (empty($_POST['analisispolitica'])) 
        AND (empty($_POST['analisiscambios'])) 
        AND (empty($_POST['recomendaciones']))
    ) { 
        $id = $_GET['id']; 
        $sql = mysql_query("SELECT * FROM revsistema WHERE id = $_GET[id] "); 
        $data = mysql_fetch_row($sql); 
   
   
        echo '<form action="" method="POST">'; 
          echo FECHA; 
           ?>            
          <input type="text" id="date" class="inputfecha" name="fecha" value="<?php echo $data[1];?>" /><input type="button" value="::" onclick="<?php echo $db->show('date') ?>"> 
          <?php     
           
          echo '<h1>1. '.OBJETIVOS_OBJETIVOS.'.</h1>'; 
         
          /*---------------------------------Mostramos los objetivos al modo mangui -------------------------------*/ 
 
        $sql = mysql_query("SELECT * FROM objetivosdatosgenerales WHERE Ano >11 ORDER BY Id DESC"); 
            echo '<table class="sortable" style="width:100%" summary="Esta tabla imprime un objetivo en pantalla">';       
            echo '<caption>';          
            echo '</caption>';   
            echo '<tbody>'; 
                echo '<tr>';         
                    echo '<th style="width:35%">'; 
                        echo OBJETIVOS_NOMBRE_OBJETIVO; 
                    echo '</th>';         
                  //echo '<th>Origen</th><th>Detecci&oacuten</th><th>Causas</th><th>Recursos</th>'; 
                    echo '<th>Indicador</th>'; 
                  //echo '<th>Fuente</th><th>Frecuencia</th><th>Plazo</th><th>Ejecuta</th><th>Persigue</th><th>VºBº</th>'; 
                    echo '<th>'; 
                        echo RESULTADO; 
                    echo '</th>'; 
                    echo '<th style="width:50px">'; 
                        echo FECHA; 
                    echo '</th>'; 
                echo '</tr>'; 
 
        while ($row = mysql_fetch_row($sql)) { 
                    echo "<tr>";                     
                        echo "<td><a href='?seccion=objetivos_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['2']."</a></td>";                 
                        echo "<td><a href='?seccion=objetivos_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['8']."</a></td>";                             
                        echo "<td><a href='?seccion=objetivos_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['15']."</a></td>"; 
                        echo "<td style=width:100px><a href='?seccion=objetivos_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['16']."</a></td>"; 
                    echo "</tr>"; 
        } 
            echo '</tbody>'; 
            echo "</table>"; 
           
        /*----------------------------FIN mostrar objetivos---------------------------------*/ 
          
            echo "<br /><br />";           
                echo '<textarea class="textareanormal" name="analisisobjetivos">'.$data[2].'</textarea>'; 
            echo "<br /><br />"; 
     
          echo '<h1>2. '.SATISFACCION.'.</h1>:';           
           
            /*echo '<iframe width="1200px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/valoracionglobalclientes_revsistema.php">';  
            echo '<p>Your browser does not support iframes.</p></iframe>';*/


/*------------------------------------------------GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/

/** 
    * Change these to your own credentials*/ 
     
     
    $result = mysql_query("SELECT mes, global FROM globalclientes"); 
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
 
    <!-- Don't forget to update these paths --> 
 
    <script src="libraries/RGraph.common.core.js" ></script> 
    <script src="libraries/RGraph.line.js" ></script> 
    <script src="libraries/RGraph.common.dynamic.js"></script> 
    <script src="libraries/RGraph.common.context.js" ></script> 
    <script src="libraries/RGraph.common.tooltips.js"></script> 
    <script src="libraries/RGraph.common.annotate.js" ></script> 
     
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
 
 
</head> 
<body> 
     
    <canvas id="cvs1" width="1100" height="300">[No canvas support]</canvas> 
    <script> 
        chart = new RGraph.Line('cvs1', <?php print($data_string) ?>); 
        chart.Set('chart.title', 'Valoración global clientes 2012'); 
        chart.Set('chart.title.yaxis', 'Valor'); 
        chart.Set('chart.annotatable', true); 
        chart.Set('chart.events.click', myFunc3); 
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas)
                                            chart.Draw();
                                           }
                                 ]
                                ]); 
        chart.Set('chart.background.grid.autofit', true); 
         
        /*chart.Set('chart.background.barcolor1', '#f2f2f2'); 
        chart.Set('chart.background.barcolor2', '#f2f2f2'); 
        chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/ 
    chart.Set('chart.background.grid.autofit.numhlines', 10); 
        chart.Set('chart.colors', ['yellow']); 
    chart.Set('chart.shadow', true); 
        chart.Set('chart.linewidth', 3);         
        chart.Set('chart.curvy', 1); 
        chart.Set('chart.curvy.factor', 0.25); 
        chart.Set('chart.filled', false);         
        chart.Set('chart.gutter.left', 35); 
        chart.Set('chart.gutter.right', 5); 
        chart.Set('chart.gutter.top', 50); 
        chart.Set('chart.gutter.bottom', 100); 
    chart.Set('chart.text.angle', 45); 
        chart.Set('chart.hmargin', 10); 
        chart.Set('chart.tickmarks', 'endcircle'); 
        chart.Set('chart.tooltips', <?php print($labels_string) ?>); 
        chart.Set('chart.labels', <?php print($labels_string) ?>); 
        chart.Set('chart.tooltips.effect', 'contract');         
           chart.Draw(); 
            
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
                            
/*------------------------------------------------FIN DEL GRÁFICO DE VALORACIÓN GLOBAL DE CLIENTES--------------------------------------*/    


            
           
          echo '<textarea class="textareanormal" name="analisissatisfaccionclientes">'.$data[3].'</textarea>'; 
      
          echo '<h1>3. '.RECLAMACIONES.'.</h1>:';           
          echo '<textarea class="textareanormal" name="analisisreclamacionesclientes">'.$data[4].'</textarea>'; 
        
          echo 'NC´s:'; 
           
         /* echo '<iframe width="1200px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/ncsporarea_revsistema.php">';  
            echo '<p>Your browser does not support iframes.</p>';  
            echo '</iframe>';*/
            
            
            
            /*------------------------------------------------NO CONFORMIDADES POR ÁREA--------------------------------------*/                        
    
    

    
     @$date = $_POST['seleccione'];
    
    $result = mysql_query("SELECT afectaa, COUNT( * ) AS cantidad
                           FROM hojasdemejora
                           WHERE fecha >  '$date'
                           GROUP BY afectaa"); 
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
<html> 
<head> 
<a href="http://www.rgraph.net/"><img src="http://www.rgraph.net/images/logo.png"><br /><strong>Coded by rgraph.net</strong></a> 
 
    <!-- Don't forget to update these paths --> 
 
   
    <script src="libraries/RGraph.bar.js"></script> 
    <script src="libraries/RGraph.common.dynamic.js"></script> 
    
     
    <canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas> 
    <script> 
        chart = new RGraph.Bar('cvs2', <?php print($data_string) ?>); 
        chart.Set('chart.title', 'No conformidades por área'); 
        chart.Set('chart.colors', ['Tan','#9fff30','transparent']);
        chart.Set('chart.title.yaxis', 'Nº de NC´s');         
        chart.Set('chart.annotatable', true); 
        chart.Set('chart.events.click', myFunc3); 
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas)
                                            chart.Draw();
                                           }
                                 ]
                                ]); 
        chart.Set('chart.background.grid.autofit', true); 
        chart.Set('chart.gutter.left', 45); 
        chart.Set('chart.gutter.right', 5); 
        chart.Set('chart.gutter.bottom', 150); 
        chart.Set('chart.text.angle', 45); 
        chart.Set('chart.hmargin', 10); 
        chart.Set('chart.tickmarks', 'endcircle'); 
        chart.Set('chart.tooltips', <?php print($labels_string) ?>); 
        chart.Set('chart.labels', <?php print($labels_string) ?>);         
        chart.Draw(); 
         
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

/*------------------------------------------------FIN DEL GRÁFICO DE NO CONFORMIDADES POR ÁREA--------------------------------------*/    

            
            
            
            
           
          echo '<textarea class="textareanormal" name="analisisnoconformidadesporarea">'.$data[5].'</textarea>'; 
       
          echo '<h1>4. '.INDICADORES_DESVIACIONCIERRESNCS.'.</h1>:'; 
           
          /*echo '<iframe width="1000px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/desviacioncierresncs_revsistema.php">';  
            echo '<p>Your browser does not support iframes.</p>';  
            echo '</iframe>'; */



/*------------------------------------------------GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/    

                            
    
     @$date = $_POST['seleccione'];


  $result = mysql_query(
        "SELECT numhoja, desviacion 
        FROM hojasdemejora 
        WHERE fecha >  '$date'"
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
     
    <canvas id="cvs3" width="1100" height="250">[No canvas support]</canvas> 
    <script> 
        chart = new RGraph.Line('cvs3', <?php print($data_string) ?>); 
        chart.Set('chart.colors', ['red','#9fff30','transparent']); 
        chart.Set('chart.title', 'Desviación plazos cierre ncs'); 
        chart.Set('chart.title.yaxis', 'Nº de días'); 
        chart.Set('chart.annotatable', true); 
        chart.Set('chart.events.click', myFunc3); 
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas)
                                            chart.Draw();
                                           }
                                 ]
                                ]); 
        chart.Set('chart.background.grid.autofit', true); 
         
        //chart.Set('chart.background.barcolor1', '#f2f2f2'); 
        //chart.Set('chart.background.barcolor2', '#f2f2f2'); 
        //chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)'); 
        chart.Set('chart.background.grid.autofit.numhlines', 10); 
        //chart.Set('chart.colors', ['red']); 
        chart.Set('chart.shadow', true); 
        chart.Set('chart.linewidth', 3);         
        chart.Set('chart.curvy', 1); 
        chart.Set('chart.curvy.factor', 0.25); 
        chart.Set('chart.filled', false); 
        chart.Set('chart.gutter.left', 55); 
        chart.Set('chart.gutter.right', 5);         
        chart.Set('chart.gutter.bottom', 100); 
        chart.Set('chart.text.angle', 45); 
        chart.Set('chart.hmargin', 30); 
        chart.Set('chart.tickmarks', 'endcircle'); 
        chart.Set('chart.tooltips', <?php print($labels_string) ?>); 
        chart.Set('chart.labels', <?php print($labels_string) ?>); 
        chart.Set('chart.tooltips.effect', 'contract');         
           chart.Draw(); 
            
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
                        
/*------------------------------------------------FIN DEL GRÁFICO DE DESVIACIONES EN EL CIERRE DE NCS--------------------------------------*/                                



            
             
          echo '<textarea class="textareanormal" name="analisiscierresncs">'.$data[6].'</textarea>'; 
       
          echo '<h1>5. '.INSPECCIONES.'.</h1>:'; 
           
          /*echo '<iframe width="1000px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/graficaincidenciasinspecciones_revsistema.php">';  
            echo '<p>Your browser does not support iframes.</p>';  
            echo '</iframe>';  */
            
            
/*------------------------------------------------GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

                        
             if (!defined('seleccione')) { 
             define('SELECCIONE', 'seleccione'); 
             }
    
     @$date = $_POST['seleccione'];                
                        
                        
             $result = mysql_query(
            "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia 
             FROM inspecciones 
             WHERE fecha > '$date'
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

    <canvas id="cvs4" width="1100px" height="350px">[No canvas support]</canvas> 
    <script> 
        chart = new RGraph.Bar('cvs4', <?php print($data_string) ?>); 
        chart.Set('chart.colors', ['lavender','#9fff30','transparent']); 
        chart.Set('chart.title', 'Número de incidencias por código'); 
        chart.Set('chart.title.yaxis', 'Nº de incidencias'); 
        chart.Set('chart.title.xaxis', 'Código de la incidencia'); 
        chart.Set('chart.annotatable', true); 
        chart.Set('chart.events.click', myFunc3); 
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas)
                                            chart.Draw();
                                           }
                                 ]
                                ]); 
        chart.Set('chart.background.grid.autofit', true); 
        chart.Set('chart.gutter.left', 100); 
        chart.Set('chart.gutter.right', 5); 
        chart.Set('chart.gutter.bottom', 100); 
        chart.Set('chart.text.angle', 45); 
        chart.Set('chart.hmargin', 10); 
        chart.Set('chart.tickmarks', 'endcircle'); 
        chart.Set('chart.tooltips', <?php print($labels_string) ?>); 
        chart.Set('chart.labels', <?php print($labels_string) ?>);         
        chart.Draw(); 
         
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
/*------------------------------------------------FIN DEL GRÁFICO DE INCIDENCIAS EN INSPECCIONES DE SERVICIO--------------------------------------*/

            
            
            
            
           
          echo '<textarea class="textareanormal" name="analisisincidenciasinspecciones">'.$data[7].'</textarea>'; 
         
          echo '<h1>6. '.FORMACION.'.</h1>:'; 
           
          /*echo '<iframe width="1000px" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="mod/totalhorasformacionportrabajador_revsistema.php">';  
            echo '<p>Your browser does not support iframes.</p>';  
            echo '</iframe>';*/


/*------------------------------------------------GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/                        


 /** 
    * Change these to your own credentials*/ 
     

    
     @$date = $_POST['seleccione'];
     
     
    $result = mysql_query("SELECT trabajador, SUM( horas ) AS horas 
            FROM cursos 
            WHERE fecha >  '$date' 
            GROUP BY trabajador"); 
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

    <canvas id="cvs5" width="1100px" height="350px">[No canvas support]</canvas> 
    <script> 
        chart = new RGraph.Bar('cvs5', <?php print($data_string) ?>); 
        chart.Set('chart.title', 'Total de horas de formación por trabajador'); 
        chart.Set('chart.colors', ['PowderBlue','#9fff30','transparent']); 
        chart.Set('chart.annotatable', true); 
        chart.Set('chart.events.click', myFunc3); 
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas)
                                            chart.Draw();
                                           }
                                 ]
                                ]); 
        chart.Set('chart.background.grid.autofit', true); 
        chart.Set('chart.gutter.left', 35); 
        chart.Set('chart.gutter.right', 5); 
        chart.Set('chart.gutter.bottom', 150); 
        chart.Set('chart.text.angle', 45); 
        chart.Set('chart.hmargin', 10); 
        chart.Set('chart.tickmarks', 'endcircle'); 
        chart.Set('chart.tooltips', <?php print($labels_string) ?>); 
        chart.Set('chart.labels', <?php print($labels_string) ?>);         
        chart.Draw(); 
         
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
                            
                            
/*------------------------------------------------FIN DEL GRÁFICO DEL TOTAL DE HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------*/                            




            
           
          echo '<textarea class="textareanormal" name="analisisformacion">'.$data[8].'</textarea>'; 
       
          echo '<h1>7. '.ALMACEN.'.</h1>:'; 
           
/*------------------------------------------------------------Mostramos las incidencias de almacén--------------------------------------------------*/ 
        


            
         @$date = $_POST['seleccione'];
        
            $result = mysql_query(
                "SELECT ai, obsalmac 
                 FROM  `aisgc`  
                 WHERE fecha >  '$date'  
                 ORDER BY  `aisgc`.`id` ASC"
            );  
        if ($row = mysql_fetch_array($result)) {  
               echo "<table class = 'sortable'> ";  
               echo '<tr><th>AI</th><th>'.INDICADORES_INCIDENCIASDEALMACEN.'</th></tr>';  
            do {  
                echo "<tr><td>".$row["ai"]."</td><td>".$row["obsalmac"]."</td></tr> ";  
            } while ($row = mysql_fetch_array($result));  
               echo "</table> ";  
        } else {  
            echo NOSEHAENCONTRADO;  
        }  
 
/*---------------------------------------------------FIN mostrar incidencias de almacén-------------------------------------------------------*/ 
           
                echo ' <br />';           
          echo '<textarea class="textareanormal" name="analisisincidenciasalmacen">'.$data[9].'</textarea>'; 
       
          echo '<h1>8. Proveedores.</h1>:';       
           
                 /*echo '<div style="text-indent: 2cm;">'; 
                
                
               echo '<iframe width="1200px" height="300px" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="mod/incidenciasdeproveedor_revsistema.php">';  
                echo '<p>Your browser does not support iframes.</p>';  
                echo '</iframe>';*/

/*----------------------------------GRÁFICA DE INCIDENCIAS DE PROVEEDOR----------------------------------*/                        
                        


     @$date = $_POST['seleccione'];


                        
$result = mysql_query("SELECT  `fecha` ,  `codigoincidencia`  
                            FROM  `incidenciasdeproveedor`  
                            WHERE fecha >  '$date'"); 
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

    <canvas id="cvs7" width="1000px" height="300px">[No canvas support]</canvas> 
    <script> 
        chart = new RGraph.Line('cvs7', <?php print($data_string) ?>); 
        chart.Set('chart.title', 'Códigos de incidencias de proveedor'); 
        chart.Set('chart.title.yaxis', 'Código'); 
        chart.Set('chart.annotatable', true); 
        chart.Set('chart.events.click', myFunc3); 
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';}); 
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas)
                                            chart.Draw();
                                           }
                                 ]
                                ]);  
        chart.Set('chart.background.grid.autofit', true); 
        chart.Set('chart.colors', ['red','#9fff30','transparent']); 
        //chart.Set('chart.background.barcolor1', '#f2f2f2'); 
        //chart.Set('chart.background.barcolor2', '#f2f2f2'); 
       // chart.Set('chart.background.grid.color', 'rgba(238,238,238,1)'); 
    chart.Set('chart.background.grid.autofit.numhlines', 10); 
        chart.Set('chart.colors', ['red']); 
    chart.Set('chart.shadow', true); 
        chart.Set('chart.linewidth', 3);         
        chart.Set('chart.curvy', 1); 
        chart.Set('chart.curvy.factor', 0.25); 
        chart.Set('chart.filled', false); 
        chart.Set('chart.text.angle', 45); 
        chart.Set('chart.gutter.left', 35); 
        chart.Set('chart.gutter.right', 5); 
        chart.Set('chart.gutter.bottom', 100); 
        chart.Set('chart.hmargin', 10); 
        chart.Set('chart.tickmarks', 'endcircle'); 
        chart.Set('chart.tooltips', <?php print($labels_string) ?>); 
        chart.Set('chart.labels', <?php print($labels_string) ?>); 
        chart.Set('chart.tooltips.effect', 'contract');         
           chart.Draw(); 
            
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
/*---------------------------------------------------FIN DE AL GRÁFICA DE INCIDENCIAS DE PROVEEDOR---------------------------------------------------*/                        



                
                //echo '</div>'; 
                echo ' <br />'; 
           
/*--------------------------------------------------Mostramos las incidencias de proveedor----------------------------------------------*/   
 

            
         @$date = $_POST['seleccione'];
 
            $sql = mysql_query(
                "SELECT *  
                 FROM incidenciasdeproveedor 
                  WHERE fecha >  '$date'  
                 ORDER BY fecha ASC "
            );       
              echo '<table class="sortable" summary="Esta tabla imprime las incidencias de proveedor">'; 
                echo "<tbody>";               
              echo ' <tr>'; 
              echo '<th>Proveedor</th><th>Incidencia</th><th>Fecha</th></tr>'; 
        while ($row = mysql_fetch_row($sql)) { 
                echo "<tr>";   
                //echo "<td>".$row['0']."</td>"; 
                echo "<td>".$row['1']."</td>"; 
                echo "<td>".$row['2']."</td>"; 
                echo "<td>".$row['5']."</td>"; 
                echo "</tr>"; 
        } 
               echo "</tbody>";   
              echo "</table>"; 
/*-----------------------------------------------FIN mostrar las incidencias de proveedor-----------------------------------------------*/    
           
                    echo ' <br />';       
                    echo ' <br />';     
                    echo '<textarea class="textareanormal" name="analisisincidenciasproveedor">'.$data[10].'</textarea>'; 
                     echo ' <br />'; 
                    echo ' <br />';        
          echo '<h1>9. Auditorías.</h1>:'; 
           
           
//-------------------------------------------------Mostramos las auditorías---------------------------------------------------------------*/ 
 
            $sql = mysql_query(
                "SELECT aisgc.id id1, informeauditoria.id, informeauditoria.ai, informeauditoria.Fecha, informeauditoria.Resultado 
                 FROM informeauditoria, aisgc 
                 WHERE informeauditoria.ai = aisgc.ai 
                 GROUP BY informeauditoria.ai "
            );       
                      
            echo '<table class="sortable" summary="Esta tabla imprime las NCs y auditorías en pantalla">'; 
            echo "<tbody>"; 
                echo ' <tr>'; 
                    echo '<th>Auditoría</th><th>Informe</th><th>Fecha del informe</th><th>Resultado</th></tr>'; 
        while ($row = mysql_fetch_row($sql)) { 
                echo "<tr>";   
                    echo "<td><a href='?seccion=aisgc_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['2']."</a></td>"; 
                    echo "<td><a href='?seccion=auditorias_print&aktion=print_id&id=".$row['1']."' target='blank'>".$row['2']."</a></td>"; 
                    echo "<td>".$row['3']."</td>"; 
                    echo "<td>".$row['4']."</td>"; 
                echo "</tr>"; 
        } 
            echo "</tbody>";   
            echo "</table>"; 
                   
        //-----FIN mostrar las auditorías-------*/   
           
                echo ' <br />'; 
                echo ' <br />';               
                echo '<textarea class="textareanormal" name="analisisauditorias">'.$data[11].'</textarea>'; 
                echo ' <br />'; 
                echo ' <br />';     
        
          echo '<h1>10. No conformidades.'; 
            ?> 
            <div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'> 
            <?php         
            echo '&nbsp;&nbsp;&nbsp;&nbsp;';           
            echo '<img src="images/help.png">';             
            echo '</div>'; 
          echo '</h1>:'; 
           
                    echo ' <br />'; 
                    echo ' <br />';     
           
           
//------------------------------------------------Mostramos las no conformidades--------------------------------------------------------------*/  
 


            
         @$date = $_POST['seleccione'];
        $sql = mysql_query(
            "SELECT hojas.id id_1, hojas.numhoja, hojas.descripcion, hojas.acciones, hojas.fecha, hojas.afectaa, hojas.cerradofecha, audit.ai, audit.id id_2 
             FROM hojasdemejora AS hojas 
             LEFT JOIN informeauditoria AS audit ON hojas.ai = audit.ai 
             WHERE hojas.fecha > '$date' 
             GROUP BY hojas.id DESC  
             ORDER BY  `audit`.`id` ASC"
        );       
                echo '<table class="sortable" summary="Esta tabla imprime las NCs y auditorías en pantalla">'; 
                echo ' <tbody>';
                    echo ' <tr>'; 
                        echo '<th>'.AUDITORIAS_AUDITORIA.'</th><th>'.NCS.'</th><th>'.DESCRIPCION.'</th></tr>'; 
                                echo "<tbody>"; 
        while ($row = mysql_fetch_row($sql)) { 
                    echo "<tr>";   
                        echo "<td><a href='?seccion=auditorias_print&aktion=print_id&id=".$row['8']."' target='blank'>".$row['7']."</a></td>"; 
                        echo "<td><a href='?seccion=ncs_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['1']."</a></td>"; 
                        echo "<td><a href='?seccion=ncs_print&aktion=print_id&id=".$row['0']."' target='blank'>".$row['2']."</a></td>"; 
                    echo "</tr>"; 
        } 
                echo "</tbody>";   
                echo "</table>"; 
               
//------------------------------------------------------FIN mostrar las no conformidades---------------------------------------------*/      
                     
                     
                    echo ' <br />'; 
                    echo ' <br />';     
           
                      echo '<textarea class="textareanormal" name="analisisnoconformidades">'.$data[12].'</textarea>'; 
                    echo ' <br />'; 
                    echo ' <br />';     
                    
            echo '<h1>11. Política de calidad.</h1>:'; 
             
                    echo ' <br />'; 
                    echo ' <br />';     
                      echo '<textarea class="textareanormal" name="analisispolitica">'.$data[13].'</textarea>'; 
                       
                    echo ' <br />'; 
                    echo ' <br />';     
                     
           echo '<h1>12. Cambios.</h1>:'; 
            
                    echo ' <br />'; 
                    echo ' <br />';     
                      echo '<textarea class="textareanormal" name="analisiscambios">'.$data[14].'</textarea>'; 
                   echo ' <br />'; 
                    echo ' <br />';     
                     
            echo '<h1>13. Recomendaciones.</h1>:'; 
             
                    echo ' <br />'; 
                    echo ' <br />';     
                      echo '<textarea class="textareanormal" name="recomendaciones">'.$data[15].'</textarea>';         
                    echo ' <br />'; 
 
                      echo '<input type="submit" value="Enviar">'; 
         
        echo '</form>';  
    } else { 
            $sql = mysql_query(
                "UPDATE revsistema SET fecha='$_POST[fecha]',
                analisisobjetivos='$_POST[analisisobjetivos]',
                analisissatisfaccionclientes='$_POST[analisissatisfaccionclientes]',
                analisisreclamacionesclientes='$_POST[analisisreclamacionesclientes]',
                analisisnoconformidadesporarea='$_POST[analisisnoconformidadesporarea]',
                analisiscierresncs='$_POST[analisiscierresncs]',
                analisisincidenciasinspecciones='$_POST[analisisincidenciasinspecciones]',
                analisisformacion='$_POST[analisisformacion]',
                analisisincidenciasalmacen='$_POST[analisisincidenciasalmacen]',
                analisisincidenciasproveedor='$_POST[analisisincidenciasproveedor]',
                analisisauditorias='$_POST[analisisauditorias]',
                analisisnoconformidades='$_POST[analisisnoconformidades]',
                analisispolitica='$_POST[analisispolitica]',
                analisiscambios='$_POST[analisiscambios]',
                recomendaciones='$_POST[recomendaciones]' 
                WHERE id=$_GET[id]"
            ); 
        if ($sql) {
                  echo 'Revisión del sistema modificada!'; 
        }
    } 
} 
 
 
?> 
</body> 
</html>