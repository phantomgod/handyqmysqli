<?php
/**
--------------------------------
Index

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





// ----------------------------------------------------------------------------------------------------
// - Display Errors
// ----------------------------------------------------------------------------------------------------
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

// ----------------------------------------------------------------------------------------------------
// - Error Reporting
// ----------------------------------------------------------------------------------------------------
error_reporting(-1);

// ----------------------------------------------------------------------------------------------------
// - Shutdown Handler
// ----------------------------------------------------------------------------------------------------
function ShutdownHandler()
{
    if(@is_array($error = @error_get_last()))
    {
        return(@call_user_func_array('ErrorHandler', $error));
    };

    return(TRUE);
};

register_shutdown_function('ShutdownHandler');

// ----------------------------------------------------------------------------------------------------
// - Error Handler
// ----------------------------------------------------------------------------------------------------
function ErrorHandler($type, $message, $file, $line)
{
    $_ERRORS = Array(
        0x0001 => 'E_ERROR',
        0x0002 => 'E_WARNING',
        0x0004 => 'E_PARSE',
        0x0008 => 'E_NOTICE',
        0x0010 => 'E_CORE_ERROR',
        0x0020 => 'E_CORE_WARNING',
        0x0040 => 'E_COMPILE_ERROR',
        0x0080 => 'E_COMPILE_WARNING',
        0x0100 => 'E_USER_ERROR',
        0x0200 => 'E_USER_WARNING',
        0x0400 => 'E_USER_NOTICE',
        0x0800 => 'E_STRICT',
        0x1000 => 'E_RECOVERABLE_ERROR',
        0x2000 => 'E_DEPRECATED',
        0x4000 => 'E_USER_DEPRECATED'
    );

    if(!@is_string($name = @array_search($type, @array_flip($_ERRORS))))
    {
        $name = 'E_UNKNOWN';
    };

    return(print(@sprintf("%s Error in file \xBB%s\xAB at line %d: %s\n", $name, @basename($file), $line, $message)));
};

$old_error_handler = set_error_handler("ErrorHandler");

// other php code



require 'access.php';
require 'lang/spanish.lang.php';
require 'secciones.php' ;
require_once 'includes/mysqli.php';
//header('Content-Type: text/html;charset=UTF-8');
//include('php-counter-mysql/visitor_tracking.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script  src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/favicon.png">
<title><?php echo PAGE_TITLE; ?> <?php echo" &raquo; ".$seccionweb."";?></title>
	<link type="text/css" rel="stylesheet" href="templates/style.css" media="screen" />
	 <link href="templates/docs.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="templates/printstyle.css" media="print" />
	<link type="text/css" rel="stylesheet" href="accordion-menu/style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="templates/bootstrap-datetimepicker.min.css">
	<!-- Datepicker chrishulbert-datepicker-8a22db6 [http://splinter.com.au/blog/?p=278](http://splinter.com.au/blog/?p=278) -->
	<link type="text/css" rel="stylesheet" href="templates/datepicker.css" />
	<!-- FIN Datepicker chrishulbert-datepicker-->
	<link type="text/css" rel="stylesheet" href="templates/thickbox.css"  media="screen" />
	<link type="text/css" rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">


<!-- TinyMCE -->
<!-- Place inside the head of your HTML -->
<script  src="tinymce/tinymce.min.js"></script>
<script >
tinymce.init({
        selector: "textarea",
        menubar: false,
        plugins: "textcolor, table, charmap, link, code, image",
        language: "es",
        custom_undo_redo : true,
        toolbar: "bold italic underline undo redo link unlink image code"
    });
</script>
<!-- /TinyMCE -->

<!-- Don't forget to update these paths -->

<script src="RGraph/libraries/RGraph.common.core.js"></script>
<script src="RGraph/libraries/RGraph.common.dynamic.js"></script>   <!-- Just needed for dynamic features -->

<script src="RGraph/libraries/RGraph.common.annotate.js"></script>  <!-- Just needed for annotating -->
<script src="RGraph/libraries/RGraph.common.context.js"></script>   <!-- Just needed for context menus -->
<script src="RGraph/libraries/RGraph.common.effects.js"></script>   <!-- Just needed for visual effects -->
<script src="RGraph/libraries/RGraph.common.key.js"></script>       <!-- Just needed for keys -->
<script src="RGraph/libraries/RGraph.common.resizing.js"></script>  <!-- Just needed for resizing -->
<script src="RGraph/libraries/RGraph.common.tooltips.js"></script>  <!-- Just needed for tooltips -->
<script src="RGraph/libraries/RGraph.common.zoom.js"></script>      <!-- Just needed for zoom -->

<script src="RGraph/libraries/RGraph.bar.js"></script>              <!-- Just needed for Bar charts -->
<script src="RGraph/libraries/RGraph.bipolar.js"></script>          <!-- Just needed for Bi-polar charts -->
<script src="RGraph/libraries/RGraph.fuel.js"></script>             <!-- Just needed for Fuel charts -->
<script src="RGraph/libraries/RGraph.funnel.js"></script>           <!-- Just needed for Funnel charts -->
<script src="RGraph/libraries/RGraph.gantt.js"></script>            <!-- Just needed for Gantt charts -->
<script src="RGraph/libraries/RGraph.gauge.js"></script>            <!-- Just needed for Gauge charts -->
<script src="RGraph/libraries/RGraph.hbar.js"></script>             <!-- Just needed for Horizontal Bar charts -->
<script src="RGraph/libraries/RGraph.hprogress.js"></script>        <!-- Just needed for Horizontal Progress bars -->
<script src="RGraph/libraries/RGraph.line.js"></script>             <!-- Just needed for Line charts -->
<script src="RGraph/libraries/RGraph.meter.js"></script>            <!-- Just needed for Meter charts -->
<script src="RGraph/libraries/RGraph.odo.js"></script>              <!-- Just needed for Odometers -->
<script src="RGraph/libraries/RGraph.pie.js"></script>              <!-- Just needed for Pie AND Donut charts -->
<script src="RGraph/libraries/RGraph.radar.js"></script>            <!-- Just needed for Radar charts -->
<script src="RGraph/libraries/RGraph.rose.js"></script>             <!-- Just needed for Rose charts -->
<script src="RGraph/libraries/RGraph.rscatter.js"></script>         <!-- Just needed for Rscatter charts -->
<script src="RGraph/libraries/RGraph.scatter.js"></script>          <!-- Just needed for Scatter charts -->
<!--<script src="RGraph/libraries/RGraph.semicircularprogress.js"></script>  Just needed for SemiCircular Progress charts charts -->
<script src="RGraph/libraries/RGraph.thermometer.js"></script>      <!-- Just needed for Thermometer charts -->
<script src="RGraph/libraries/RGraph.vprogress.js"></script>        <!-- Just needed for Vertical Progress bars -->
<script src="RGraph/libraries/RGraph.waterfall.js"></script>        <!-- Just needed for Waterfall charts  -->
 <script  src="https://apis.google.com/js/plusone.js"></script>

<style>
    .RGraph_tooltip {
        z-index: 999 !important;
    }
</style>

</head>

<body>
<div id="header"></div>
	 <!--<div id="avion">
			< ?php
			require "randomtext/cxrandom.php";
			?>
	 </div>-->
    <div id="flotante"
        style="z-index: 4; filter: alpha(opacity = 80); float: left; -moz-opacity: .80; opacity: .80">
    </div>

<div id="cabecera">
		<!--<div id="escarabajo">
		< ?php $_GET['type'] = 0; require 'Rantex/rantex.php'; ?>
		</div>-->
		<?php include('acciones/acciones_avisos_slide_push.php');
			//include('mod/tabs2.php');?>

		<div id="print">
			<div onMouseOver="showdiv(event,'<?php echo IMPRIMIR_PAPEL; ?>');"
				onMouseOut="hiddenDiv()" style='display: table;'>
				<a href="javascript:imprimir()"> <i class="fa fa-print"></i>
				</a>
			</div>
		</div>
		<div id="backup">
			<div onMouseOver="showdiv(event,'<?php echo BACKUP; ?>');"
				onMouseOut="hiddenDiv()" style='display: table;'>
				<a href="?seccion=back_up"> <i class="fa fa-download"></i>
				</a>
			</div>
		</div>
		<div id="escarabajo">
			<div onMouseOver="showdiv(event,'Logout');"
				onMouseOut="hiddenDiv()" style='display: table;'>
				<a href="logout.php"> <i class="fa fa-sign-out"></i>
				</a>
			</div>
		</div>
</div>

    <div id="acciones">
        <?php require $acciones; ?>
    </div>
</div>
    <div id="variante">

			<script>
			$(document).ready(function(){
				$('#myTable').dataTable();
			});

		</script>
        <?php

		include 'footer.php';

		require $incluir; ?>
    </div>


</body>

<script  src="jscripts/bootstrap.js"></script>
<script  src="jscripts/bootstrap.min.js"></script>
<script  src="jscripts/bootstrap-alert.js"></script>
<script src="jscripts/bootstrap-modal.js"></script>
<script  src="jscripts/bootstrap-datetimepicker.min.js"></script>
		<script >
					  $('#datetimepicker').datetimepicker({
						format: 'yyyy-MM-dd hh:mm:ss',
						language: 'es'
					  });
		</script>

		<script >
					  $('#datetimepicker2').datetimepicker({
						format: 'yyyy-MM-dd hh:mm:ss',
						language: 'es'
					  });
		</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script  src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script  src="jscripts/jquery.nicescroll.min.js"></script>

<script  src="jscripts/styleswitcher.js"></script>
<script  src="jscripts/indexcapaemergente.js"></script>
<script  src="jscripts/print.js"></script>
<script  src="jscripts/sorttable.js"></script>
<script  src="jscripts/checkbox3.js"></script>
<script  src="jscripts/queriesttip.js"></script>
<script  src="jscripts/windowopen.js"></script>
<!--<script src="jscripts/even.js"></script>-->
<script  src="jscripts/windowopenajaxupload.js"></script>
<script  src="jscripts/thickbox.js"></script>
<!--<script  src="jscripts/resizable-table.js"></script>-->
<!-- Datepicker chrishulbert-datepicker-8a22db6 [http://splinter.com.au/blog/?p=278](http://splinter.com.au/blog/?p=278) -->
<script  src="jscripts/datepicker.js"></script>
<!-- FIN Datepicker chrishulbert-datepicker-->

	<script  src="mod/ajaximage/scripts/jquery.form.js"></script>
</html>
