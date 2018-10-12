<?php
/**
* Mod todos los indicadores juntos
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

<script type="text/javascript" src="../jscripts/styleswitcher.js"></script>
<script type="text/javascript" src="../jscripts/indexcapaemergente.js"></script>
<script type="text/javascript" src="../jscripts/print.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="../jscripts/sorttable.js"></script>
<script src="../jscripts/checkbox3.js"></script>
<script src="../jscripts/queriesttip.js"></script>
<script src="../jscripts/windowopen.js"></script>
<script src="../jscripts/windowopenajaxupload.js"></script>
<!-- Datepicker chrishulbert-datepicker-8a22db6 [http://splinter.com.au/blog/?p=278](http://splinter.com.au/blog/?p=278) -->
<link rel="stylesheet" type="text/css" href="../templates/datepicker.css" />
<script type="text/javascript" src="../jscripts/datepicker.js"></script>
<!-- FIN Datepicker chrishulbert-datepicker-->

<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen" />


</head>
<body>
<div id="flotante" style="z-index:4;filter:alpha(opacity=80);float:left;-moz-opacity:.80;opacity:.80">    </div>


 <?php

require_once '../includes/mysql.php';
$db = new MySQL();
 require "../lang/spanish.lang.php";

 ?>
<h1>1. <?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?></h1><br /><br />

<?php

/*--------------------------------------SELECTOR------------------------
  // requires the class
       require "../class.datepicker.php";

       // instantiate the object
       $db=new datepicker();

       // uncomment the next line to have the calendar show up in german
       $db->language = "spanish";

       $db->firstDayOfWeek = 1;

       // set the format in which the date to be returned
       $db->dateFormat = "Y-m-d";
/*--------------------------------------FIN SELECTOR------------------------*/



/*---------------------------------------------------------- HORAS DE FORMACIÓN POR TRABAJADOR--------------------------------------------------*/

    /**
    * Change these to your own credentials */

    if (isset($_POST['seleccione'])) {
     $from_date = $_POST['seleccione'];
}
    if (isset($_POST['seleccione2'])) {
     $to_date = $_POST['seleccione2'];
}

			@$from_date = $_POST['seleccione'];
            @$to_date = $_POST['seleccione2'];

    $result = mysqli_query($mysqli, "SELECT trabajador, SUM( horas ) AS horas
                            FROM cursos
                            WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'
                            GROUP BY trabajador");
    if ($result) {

        $labels = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["trabajador"];
            $data[]   = $row["horas"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }
?>

<script src="../jscripts/windowopen.js"></script>

    <!-- Don't forget to update these paths -->

    <script src="../libraries/RGraph.common.core.js" ></script>
    <script src="../libraries/RGraph.bar.js"></script>
    <script src="../libraries/RGraph.line.js" ></script>
    <script src="../libraries/RGraph.common.dynamic.js"></script>
    <script src="../libraries/RGraph.common.context.js" ></script>
    <script src="../libraries/RGraph.common.tooltips.js"></script>
    <script src="../libraries/RGraph.common.annotate.js" ></script>

 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>

<div id="help" onMouseOver="showdiv(event,'<?php echo INDICADORES_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<img src="../images/help.png"></div>
<table class="print">
<tr>
<td>

<form action="todos2.php" method="POST">

<!--<input input type="text" id="date" class="inputnormal" name="seleccione" value="< ?php echo SELECCIONAR_FECHA; ?>">
<input type="button" value="::" onclick="< ?php echo $db->show('date') ? >">-->


<input id='date' class='datepicker' name='seleccione' value='<?php echo SELECCIONAR_FECHA; ?>' />
<input id='date2' class='datepicker' name='seleccione2'	value='<?php echo SELECCIONAR_FECHA; ?>' />
<button type="submit" class="btn btn-info"><?php echo CALCULAR; ?></button>
</form>

</td>

</tr>
</table>

    <canvas id="cvs1" width="1100px" height="350px">[No canvas support]</canvas>
    <script>
        bar1 = new RGraph.Bar('cvs1', <?php print($data_string) ?>);
        bar1. Set('chart.title', 'Total de horas de formación por trabajador');
        bar1. Set('chart.annotatable', true);
        bar1. Set('chart.events.click', myFunc3);
        bar1. Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        bar1. Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar1.canvas);
                                            RGraph.ClearAnnotations(bar1.canvas);
                                            bar1.Draw();
                                           }
                                 ]
                                ]);
        bar1. Set('chart.background.grid.autofit', true);
        bar1. Set('chart.gutter.left', 35);
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

    <input type="button" value="Actualizar valores" onclick="Abrir_ventana('dbscript.php');">
    <!--<a href="mod/dbscript.php" target="blank">actualizar</a>-->

    <?php
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>

<!----------------------------------------------------------- FIN HORAS DE FORMACIÓN POR TRABAJADOR------------------------>
<br /><br />
<h1>2. <?php echo INDICADORES_INCIDENCIASDEALMACEN; ?></h1><br /><br />

<?php

/*---------------------------------------------------------- INCIDENCIAS DE ALMACÉN --------------------------------------------------*/

    /**
    * Change these to your own credentials */


    $result = mysqli_query($mysqli, 
        "SELECT COUNT( obsalmac ) AS incidencias, fecha
         FROM aisgc
         WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'
         GROUP BY fecha"
    );
if ($result) {
        $labels = array();
        $data   = array();

    while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["fecha"];
            $data[]   = $row["incidencias"];
    }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
} else {
      print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
}

?>

    <canvas id="cvs2" width="1100px" height="300px">[No canvas support]</canvas>
     <script>
        line1 = new RGraph.Line('cvs2', <?php print($data_string) ?>);
        line1.Set('chart.title', 'Incidencias en inspecciones de almacén');
        line1.Set('chart.colors', ['red','#9fff30','transparent']);
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
                                            RGraph.ClearAnnotations(line1.canvas);
                                            line1.Draw();
                                           }
                                 ]
                                ]);
        line1.Set('chart.background.grid.autofit', true);

        /*line1.Set('chart.background.barcolor1', '#f2f2f2');
        line1.Set('chart.background.barcolor2', '#f2f2f2');
        line1.Set('chart.background.grid.color', 'rgba(238,238,238,1)');*/
        line1.Set('chart.background.grid.autofit.numhlines', 10);
        line1.Set('chart.colors', ['orange']);
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


<?php
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>

<!----------------------------------------------------------- FIN INCIDENCIAS DE ALMACÉN------------------------>

<br /><br />
<h1>3. <?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?></h1><br /><br />

<!----------------------------------------------------------- INCIDENCIAS DE PROVEEDORES ------------------------>

<?php
    /**
    * Change these to your own credentials */


$result = mysqli_query($mysqli, "SELECT  `fecha` ,  `codigoincidencia`
                            FROM  `incidenciasdeproveedor`
                            WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'");
    if ($result) {
        $labels = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["fecha"];
            $data[]   = $row["codigoincidencia"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
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
                                            RGraph.ClearAnnotations(line2.canvas);
                                            line2.Draw();
                                           }
                                 ]
                                ]);
        line2.Set('chart.background.grid.autofit', true);
        line2.Set('chart.colors', ['red','#9fff30','transparent']);
      //line2.Set('chart.background.barcolor1', '#f2f2f2');
      //line2.Set('chart.background.barcolor2', '#f2f2f2');
     // line2.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        line2.Set('chart.background.grid.autofit.numhlines', 10);
        line2.Set('chart.colors', ['red']);
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
    <br />

<?php
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>



<!----------------------------------------------------------- FIN INCIDENCIAS DE PROVEEDORES ------------------------>

<br /><br />
<h1>4. <?php echo INDICADORES_NCSPORAREA; ?></h1><br /><br />

<!----------------------------------------------------------- NO CONFORMIDADES POR ÁREA ------------------------>

<?php


    $result = mysqli_query($mysqli, "SELECT afectaa, COUNT( * ) AS cantidad
                           FROM hojasdemejora
                           WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'
                           GROUP BY afectaa");
if ($result) {

        $labels = array();
        $data   = array();

    while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["afectaa"];
            $data[]   = $row["cantidad"];
    }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
} else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
}
?>


    <canvas id="cvs4" width="1100" height="300">[No canvas support]</canvas>
    <script>
        bar2 = new RGraph.Bar('cvs4', <?php print($data_string) ?>);
        bar2.Set('chart.title', 'No conformidades por área');
        bar2.Set('chart.title.yaxis', 'Nº de NC´s');
        bar2.Set('chart.annotatable', true);
        bar2.Set('chart.events.click', myFunc3);
        bar2.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        bar2.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(bar2.canvas);
                                            RGraph.ClearAnnotations(bar2.canvas);
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
       echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>


<!----------------------------------------------------------- FIN NO CONFORMIDADES POR ÁREA ------------------------>


<br /><br />
<h1>5. <?php echo INDICADORES_DESVIACIONCIERRESNCS; ?></h1><br /><br />


<!----------------------------------------------------------- DESVIACIONES DE FECHA DE CIERRE DE LAS AACC ----------------------------->


<?php


  $result = mysqli_query($mysqli, 
        "SELECT *
        FROM hojasdemejora
        WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'"
    );

    if ($result) {

        $labels = array();
        $data   = array();

    while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["numhoja"];
            $data[]   = $row["desviacion"];
    }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
} else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
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
                                            RGraph.ClearAnnotations(line3.canvas);
                                            line3.Draw();
                                           }
                                 ]
                                ]);
        line3.Set('chart.background.grid.autofit', true);
        /*line3.Set('chart.background.barcolor1', '#f2f2f2');
        line3.Set('chart.background.barcolor2', '#f2f2f2');*/
        line3.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        line3.Set('chart.background.grid.autofit.numhlines', 10);
        line3.Set('chart.colors', ['red']);
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
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>


<!----------------------------------------------------------- FIN DESVIACIONES DE FECHA DE CIERRE DE LAS AACC ------------------------->


<br /><br />
<h1>6. <?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?></h1><br /><br />


<!----------------------------------------------------------- INCIDENCIAS EN LAS INSPECCIONES DE SERVICIO ------------------------->


<?php


    $result = mysqli_query($mysqli, 
        "SELECT COUNT( codigo_incidencia ) AS numincidencias, codigo_incidencia
             FROM inspecciones
             WHERE  `Fecha` BETWEEN '$from_date' AND  '$to_date'
             GROUP BY codigo_incidencia"
    );
    if ($result) {
        $labels = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["codigo_incidencia"];
            $data[]   = $row["numincidencias"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {

        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
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
                                            RGraph.ClearAnnotations(line4.canvas);
                                            line4.Draw();
                                           }
                                 ]
                                ]);
        line4.Set('chart.background.grid.autofit', true);

        /*line4.Set('chart.background.barcolor1', '#f2f2f2');
        line4.Set('chart.background.barcolor2', '#f2f2f2'); */
        line4.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        line4.Set('chart.background.grid.autofit.numhlines', 10);
        line4.Set('chart.colors', ['orange']);
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


<?php
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>

<!----------------------------------------------------------- FIN INCIDENCIAS EN LAS INSPECCIONES DE SERVICIO ------------------------->

<br /><br />
<h1>7. <?php echo INDICADORES_VALORACIONGLOBALCLIENTES; ?></h1><br /><br />

<!----------------------------------------------------------- VALORACIÓN GLOBAL DE CLIENTES ------------------------------------------->


<?php


    //@$date = $_POST['seleccione'];

    $result = mysqli_query($mysqli, "SELECT * FROM globalclientes
	                          WHERE fecha BETWEEN '$from_date' AND  '$to_date'");
    if ($result) {

        $labels = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["mes"];
            $data[]   = $row["global"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
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
                                            RGraph.ClearAnnotations(line5.canvas);
                                            line5.Draw();
                                           }
                                 ]
                                ]);
        line5.Set('chart.background.grid.autofit', true);

      /*line5.Set('chart.background.barcolor1', '#f2f2f2');
        line5.Set('chart.background.barcolor2', '#f2f2f2');*/
        line5.Set('chart.background.grid.color', 'rgba(238,238,238,1)');
        line5.Set('chart.background.grid.autofit.numhlines', 10);
        line5.Set('chart.colors', ['lightpink']);
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
        echo "Gráfica desde la fecha: '$from_date' a  '$to_date'";

?>


<!----------------------------------------------------------- FIN VALORACIÓN GLOBAL DE CLIENTES ------------------------------------->


</body>
</html>