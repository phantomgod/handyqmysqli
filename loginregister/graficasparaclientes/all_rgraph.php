<?php
	require '../../lang/spanish.lang.php';
    require_once ("../../includes/mysqli.php");
	
/************************************   BIOCIDA BEBEDERO   ***************************/
/************************************   BIOCIDA BEBEDERO   ***************************/
	

$result1 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `bbiocida` FROM `analiticas` WHERE bbiocida IS NOT NULL" );


if ($result1) {

	$labels = array ();
	$labels1 = array ();
	$data = array ();

	while ( $row1 = mysqli_fetch_assoc( $result1 ) ) {
		$labels [] = substr($row1 ["fechainicioensayo"],0,4);
		$labels1 [] = $row1 ["bbiocida"];
		$data [] = $row1 ["bbiocida"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels1_string = "['" . join ( "', '", $labels1 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 
?>
<style>
.pepe {
    margin-right: auto;
    margin-left: 50px;
	margin-top: 50px;
}
</style>
<link rel="shortcut icon" href="../../assets/ico/favicon.png">
<link href="../../assets/css/bootstrap.css" rel="stylesheet">
   
<script src="../../libraries/RGraph.common.core.js" type="text/javascript"></script>
<script src="../../libraries/RGraph.line.js" type="text/javascript"></script>
<script src="../../libraries/RGraph.common.dynamic.js" type="text/javascript"></script>
<script src="../../libraries/RGraph.common.context.js" type="text/javascript"></script>
<script src="../../libraries/RGraph.common.tooltips.js" type="text/javascript"></script>
<script src="../../libraries/RGraph.common.annotate.js" type="text/javascript"></script>

	<script type="text/javascript"
	src="https://apis.google.com/js/plusone.js"></script>
    <script   
   src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js">
    </script>

 <div class="pepe">
 <div class='text-left'>
 <h3>Muestra los valores de los parámetros analizados en todos los ensayos realizados.</h3>
 </div>
 
 <?php
 
		echo "<div class='text-left'>";
		echo "<span class='text-success'>Biocida (ppm) de Bebederos:</span>";
		echo "</div>";
		?>
    <canvas id="cvs1" width="2100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs1', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Biocida bebederos');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels1_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,0.25,'rgba(0, 255, 0, 0.4)'],
									[0.25,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--************************************   FIN BIOCIDA BEBEDERO   ***************************-->
	
	
	<!--************************************   DUREZA BEBEDERO  ***************************-->
	
<?php

$result2 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `bdureza` FROM `analiticas` WHERE bdureza IS NOT NULL" );


if ($result2) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row2 = mysqli_fetch_assoc( $result2 ) ) {
		$labels [] = substr($row2 ["fechainicioensayo"],0,4);
		$labels2 [] = $row2 ["bdureza"];
		$data [] = $row2 ["bdureza"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 


		echo "<div class='text-left'>";
		echo "<span class='text-success'>Dureza (&deg;f) de Bebederos:</span>";
		echo "</div>";
		?>
    <canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs2', <?php print($data_string) ?>);
        chart.Set('chart.title', 'DUREZA Bebedero');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,37,'rgba(0, 255, 0, 0.4)'],
									[37,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--************************************   FIN DUREZA BEBEDERO  ***************************-->
	<!--************************************   EC BEBEDERO  ***************************-->
	
	<?php
	
	$result3 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `bec` FROM `analiticas` WHERE bec IS NOT NULL" );


if ($result3) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
		$labels [] = substr($row3 ["fechainicioensayo"],0,4);
		$labels2 [] = $row3 ["bec"];
		$data [] = $row3 ["bec"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>Ec(&micro;S) de Bebederos:</span>";
		echo "</div>";
		?>
    <canvas id="cvs3" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs3', <?php print($data_string) ?>);
        chart.Set('chart.title', 'EC(&micro;S) Bebedero');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,3500,'rgba(0, 255, 0, 0.4)'],
									[3500,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--************************************  FIN EC BEBEDERO  ***************************-->
	
	<!--************************************  PH BEBEDERO  ***************************-->
	
	<?php
	
	$result4 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `bph` FROM `analiticas` WHERE bph IS NOT NULL" );


if ($result4) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
		$labels [] = substr($row4 ["fechainicioensayo"],0,4);
		$labels2 [] = $row4 ["bph"];
		$data [] = $row4 ["bph"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>pH de Bebederos:</span>.";
		echo "</div>";
		?>
    <canvas id="cvs4" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs4', <?php print($data_string) ?>);
        chart.Set('chart.title', 'pH Bebedero');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,6.1,'rgba(0, 255, 0, 0.4)'],
									[6.1,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	
	<!--************************************ FIN PH BEBEDERO  ***************************-->
	
	<!--************************************  REDOX BEBEDERO  ***************************-->
	
	<?php
	
	$result5 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `bredox` FROM `analiticas` WHERE bredox IS NOT NULL" );


if ($result5) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row5 = mysqli_fetch_assoc( $result5 ) ) {
		$labels [] = substr($row5 ["fechainicioensayo"],0,4);
		$labels2 [] = $row5 ["bredox"];
		$data [] = $row5 ["bredox"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>Redox (mV) de Bebederos:</span>";
		echo "</div>";
		?>
    <canvas id="cvs5" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs5', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Redox Bebedero');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,330,'rgba(0, 255, 0, 0.4)'],
									[330,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--************************************ FIN REDOX BEBEDERO  ***************************-->
	
	<!--************************************ TDS BEBEDERO  ***************************-->
<?php
	
	$result6 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `btds` FROM `analiticas` WHERE btds IS NOT NULL" );


if ($result6) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row6 = mysqli_fetch_assoc( $result6 ) ) {
		$labels [] = substr($row6 ["fechainicioensayo"],0,4);
		$labels2 [] = $row6 ["btds"];
		$data [] = $row6 ["btds"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>TDS (ppm) de Bebederos:</span>";
		echo "</div>";
		?>
    <canvas id="cvs6" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs6', <?php print($data_string) ?>);
        chart.Set('chart.title', 'TDS (ppm) Bebederos');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,2000,'rgba(0, 255, 0, 0.4)'],
									[2000,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
		<!--********************************* FIN TDS BEBEDERO  ***************************-->	
		
		<!--******************************** BIOCIDA LABORATORIO  ***************************-->
<?php
		$result13 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `obiocida` FROM `analiticas` WHERE obiocida IS NOT NULL" );


if ($result13) {

	$labels = array ();
	$labels1 = array ();
	$data = array ();

	while ( $row13 = mysqli_fetch_assoc( $result13 ) ) {
		$labels [] = substr($row1 ["fechainicioensayo"],0,4);
		$labels1 [] = $row13 ["obiocida"];
		$data [] = $row13 ["obiocida"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels1_string = "['" . join ( "', '", $labels1 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>Biocida (ppm) de Laboratorio:</span>";
		echo "</div>";
		?>
    <canvas id="cvs13" width="2100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs13', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Biocida (ppm) laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels1_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,0.25,'rgba(0, 255, 0, 0.4)'],
									[0.25,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
		
		
		<!--*************************** FIN BIOCIDA LABORATORIO  ***************************-->
		
	<!--************************************ DUREZA LABORATORIO  ***************************-->
	
	<?php
	
	$result7 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `odureza` FROM `analiticas` WHERE odureza IS NOT NULL" );


if ($result7) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row7 = mysqli_fetch_assoc( $result7 ) ) {
		$labels [] = substr($row7 ["fechainicioensayo"],0,4);
		$labels2 [] = $row7 ["odureza"];
		$data [] = $row7 ["odureza"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 
		echo "<div class='text-left'>";
		echo "<span class='text-success'>Dureza (&deg;f) LABORATORIO:</span>";
		echo "</div>";
		?>
    <canvas id="cvs7" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs7', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Dureza laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,2000,'rgba(0, 255, 0, 0.4)'],
									[2000,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--********************************* FIN DUREZA LABORATORIO  ***************************-->
	
	<!--************************************ EC LABORATORIO  ***************************-->
	
<?php

$result8 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `oec` FROM `analiticas` WHERE oec IS NOT NULL" );


if ($result8) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row8 = mysqli_fetch_assoc( $result8 ) ) {
		$labels [] = substr($row8 ["fechainicioensayo"],0,4);
		$labels2 [] = $row8 ["oec"];
		$data [] = $row8 ["oec"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>Ec(&micro;S) LABORATORIO:</span>";
		echo "</div>";
		?>
    <canvas id="cvs8" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs8', <?php print($data_string) ?>);
        chart.Set('chart.title', 'EC(&micro;S) laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,2000,'rgba(0, 255, 0, 0.4)'],
									[2000,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--******************************** FIN EC LABORATORIO  ***************************-->
	
	<!--************************************ PH LABORATORIO  ***************************-->

<?php
	$result9 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `oph` FROM `analiticas` WHERE oph IS NOT NULL" );


if ($result9) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row9 = mysqli_fetch_assoc( $result9 ) ) {
		$labels [] = substr($row9 ["fechainicioensayo"],0,4);
		$labels2 [] = $row9 ["oph"];
		$data [] = $row9 ["oph"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>PH LABORATORIO:</span>";
		echo "</div>";
		?>
    <canvas id="cvs9" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs9', <?php print($data_string) ?>);
        chart.Set('chart.title', 'pH laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,6.5,'rgba(0, 255, 0, 0.4)'],
									[6.5,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--******************************** FIN PH LABORATORIO  ***************************-->
	
	<!--************************************ REDOX LABORATORIO  ***************************-->
	<?php
	$result10 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `oredox` FROM `analiticas` WHERE oredox IS NOT NULL" );


if ($result10) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row10 = mysqli_fetch_assoc( $result10 ) ) {
		$labels [] = substr($row10 ["fechainicioensayo"],0,4);
		$labels2 [] = $row10 ["oredox"];
		$data [] = $row10 ["oredox"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>REDOX (mV) LABORATORIO:</span>";
		echo "</div>";
		?>
    <canvas id="cvs10" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs10', <?php print($data_string) ?>);
        chart.Set('chart.title', 'REDOX (mV) laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,330,'rgba(0, 255, 0, 0.4)'],
									[330,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	<!--****************************** FIN REDOX LABORATORIO  ***************************-->
	<!--************************************ TDS LABORATORIO  ***************************-->
	
<?php
	
	$result11 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `otds` FROM `analiticas` WHERE otds IS NOT NULL" );


if ($result11) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row11 = mysqli_fetch_assoc( $result11 ) ) {
		$labels [] = substr($row11 ["fechainicioensayo"],0,4);
		$labels2 [] = $row11 ["otds"];
		$data [] = $row11 ["otds"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>TDS (ppm) LABORATORIO:</span>";
		echo "</div>";
		?>
    <canvas id="cvs11" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs11', <?php print($data_string) ?>);
        chart.Set('chart.title', 'TDS (ppm) laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,3000,'rgba(0, 255, 0, 0.4)'],
									[3000,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
		
	<!--****************************** FIN TDS LABORATORIO  **************************-->
	
	<!--*************************** TEMPERATURA LABORATORIO  *************************-->
	
	<?php
	
	$result12 = mysqli_query($mysqli,  "SELECT `username`, `fechainicioensayo`, `tempotros` FROM `analiticas` WHERE tempotros IS NOT NULL" );


if ($result12) {

	$labels = array ();
	$labels2 = array ();
	$data = array ();

	while ( $row12 = mysqli_fetch_assoc( $result12 ) ) {
		$labels [] = substr($row12 ["fechainicioensayo"],0,4);
		$labels2 [] = $row12 ["tempotros"];
		$data [] = $row12 ["tempotros"];
	}

	// Now you can aggregate all the data into one string
	$data_string = "[" . join ( ", ", $data ) . "]";
	$labels_string = "['" . join ( "', '", $labels ) . "']";
	$labels2_string = "['" . join ( "', '", $labels2 ) . "']";
	
} else {
	print ('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))) ;
} 

		echo "<div class='text-left'>";
		echo "<span class='text-success'>TEMPERATURA (&deg;C) MUESTRA LABORATORIO:</span>";
		echo "</div>";
		?>
    <canvas id="cvs12" width="4100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs12', <?php print($data_string) ?>);
        chart.Set('chart.title', 'T&ordf;(&deg;C) laboratorio');
        chart.Set('chart.title.yaxis', '');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc);
        chart.Set('chart.events.mousemove', function (e, shape) {e.target.style.cursor = 'pointer';});
        chart.Set('chart.contextmenu', [
                                 ['Show palette', RGraph.Showpalette],
                                 ['Clear', function ()
                                           {
                                            RGraph.Clear(chart.canvas);
                                            RGraph.ClearAnnotations(chart.canvas);
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
        chart.Set('chart.gutter.left', 75);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		chart.Set('chart.text.angle', 45);
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		chart.Set('chart.background.hbars', [
									[0,22,'rgba(0, 255, 0, 0.4)'],
									[22,null,'rgba(255, 0, 0, 0.4)']
                                ]);
           chart.Draw();

            /**
        * This is the function that is called when the Pie chart is clicked on
        */
        function myFunc (e, shape)
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
	
	
	
	
</div>
	
	
	
	<!--************************** FIN TEMPERATURA LABORATORIO  ************************-->

	
	
	
	
	