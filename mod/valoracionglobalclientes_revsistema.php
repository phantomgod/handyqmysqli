<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen">

</head>
<body>
<?php

//----------------------------------------- GRANJAS ----------------------------------
    /**
    * Change these to your own credentials*/

    require_once ("../includes/mysqli_satisfaction.php");

    $result = mysqli_query($mysqli, "SELECT submitdate, 75817X9X23 FROM lime_survey_75817");
    if ($result) {

        $labels = array();
		$labels2 = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = substr($row["submitdate"],0,-9);
			$labels2[] = $row["75817X9X23"];
            $data[]   = $row["75817X9X23"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
		$labels2_string = "['" . join("', '", $labels2) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }
?>

    <!-- Don't forget to update these paths -->

    <script src="../libraries/RGraph.common.core.js" ></script>
    <script src="../libraries/RGraph.line.js" ></script>
    <script src="../libraries/RGraph.common.dynamic.js"></script>
    <script src="../libraries/RGraph.common.context.js" ></script>
    <script src="../libraries/RGraph.common.tooltips.js"></script>
    <script src="../libraries/RGraph.common.annotate.js" ></script>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>


</head>
<body>


<?php

//--------------------------contamos los registros GRANJAS -------------------------

$result2 = mysqli_query($mysqli, "SELECT COUNT(*) FROM lime_survey_75817");

while($row2 = mysqli_fetch_array($result2))
{
    echo '<div align="left"><span class="white">Nº registros: ';
	echo $row2['0'];
	echo '</span></div>';
}

if($result2 === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row2 = mysqli_fetch_array($result2))
{
    echo '<div align="left">Nº registros: ';
	echo $row2['0'];
	echo '</div>';
}
?>

<!--------------------------fin contar registros GRANJAS -------------------------------->


    <canvas id="cvs" width="1100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Valoración global Granjas lime_survey_75817');
        chart.Set('chart.title.yaxis', 'Valor');
        chart.Set('chart.title.color', 'white');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc3);
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
        chart.Set('chart.linewidth', 5);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 35);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		    chart.Set('chart.text.angle', 45);
        chart.Set('chart.text.color', 'white');
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		    chart.Set('chart.background.hbars', [
                                          [0,4,'rgba(255,104,56,0.5)'],
                                          [4,null,'rgba(60, 238, 33, 0.5)'],
                                          [null,5,'rgba(255,0,0,0.2)']
                                         ]);

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


	<!----------------------------------------- FIN DE GRANJAS ---------------------------------->
	<br />
	<!----------------------------------------- COMUNIDADES ---------------------------------->


	<?php
    /**
    * Change these to your own credentials*/



    $result = mysqli_query($mysqli, "SELECT submitdate, 19246X5X12 FROM lime_survey_19246");
    if ($result) {

        $labels = array();
		$labels2 = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = substr($row["submitdate"],0,-9);
			$labels2[] = $row["19246X5X12"];
            $data[]   = $row["19246X5X12"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
		$labels2_string = "['" . join("', '", $labels2) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }


//--------------------------contamos los registros

$result3 = mysqli_query($mysqli, "SELECT COUNT(*) FROM lime_survey_19246");

while($row3 = mysqli_fetch_array($result3))
{
    echo '<div align="left">Nº registros: ';
	echo $row3['0'];
	echo '</div>';
}

if($result3 === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row3 = mysqli_fetch_array($result3))
{
    echo '<div align="left">Nº registros: ';
	echo $row3['0'];
	echo '</div>';
}
?>
<!--------------------------fin contar registros-------------------------------->

	<canvas id="cvs2" width="1100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs2', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Valoración global Comunidades lime_survey_19246');
        chart.Set('chart.title.yaxis', 'Valor');
        chart.Set('chart.title.color', 'white');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc3);
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
        chart.Set('chart.colors', ['orange']);
		    chart.Set('chart.shadow', true);
        chart.Set('chart.linewidth', 5);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 35);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
		    chart.Set('chart.text.angle', 45);
        chart.Set('chart.text.color', 'white');
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
		    chart.Set('chart.background.hbars', [
                                          [0,4,'rgba(255,104,56,0.5)'],
                                          [4,null,'rgba(60, 238, 33, 0.5)'],
                                          [null,5,'rgba(255,0,0,0.2)']
                                         ]);
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

	<!--------------------------- FIN DE COMUNIDADES ---------------------------------->
		<br />
	<!----------------------------------------- LEGIONELA ----------------------------->
	<?php

	//--------------------------contamos los registros LEGIONELA -------------------------

$result2 = mysqli_query($mysqli, "SELECT COUNT(*) FROM lime_survey_54386");

while($row4 = mysqli_fetch_array($result2))
{
    echo '<div align="left">Nº registros: ';
	echo $row4['0'];
	echo '</div>';
}

if($result2 === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row4 = mysqli_fetch_array($result2))
{
    echo '<div align="left">Nº registros: ';
	echo $row4['0'];
	echo '</div>';
}


//--------------------------fin contar registros LEGIONELA -------------------------------->



    /**
    * Change these to your own credentials*/



    $result = mysqli_query($mysqli, "SELECT submitdate, 54386X4X7 FROM lime_survey_54386");
    if ($result) {

        $labels = array();
		$labels2 = array();
        $data   = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = substr($row["submitdate"],0,-9);
			$labels2[] = $row["54386X4X7"];
            $data[]   = $row["54386X4X7"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
		$labels2_string = "['" . join("', '", $labels2) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }
?>

	<canvas id="cvs3" width="1100" height="300">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line('cvs3', <?php print($data_string) ?>);
        chart.Set('chart.title', 'Valoración global Legionella lime_survey_54386');
        chart.Set('chart.title.yaxis', 'Valor');
        chart.Set('chart.title.color', 'white');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.events.click', myFunc3);
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
        chart.Set('chart.colors', ['red']);
        chart.Set('chart.shadow', true);
        chart.Set('chart.linewidth', 5);
        chart.Set('chart.curvy', 1);
        chart.Set('chart.curvy.factor', 0.25);
        chart.Set('chart.filled', false);
        chart.Set('chart.gutter.left', 35);
        chart.Set('chart.gutter.right', 5);
        chart.Set('chart.gutter.top', 50);
        chart.Set('chart.gutter.bottom', 100);
        chart.Set('chart.text.angle', 45);
        chart.Set('chart.text.color', 'white');
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels2_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);
        chart.Set('chart.tooltips.effect', 'contract');
        chart.Set('chart.background.hbars', [
                                          [0,4,'rgba(255,104,56,0.5)'],
                                          [4,null,'rgba(60, 238, 33, 0.5)'],
                                          [null,5,'rgba(255,0,0,0.2)']
                                         ]);
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
<!----------------------------------------- FIN DE LEGIONELLA ---------------------------------->
</body>
</html>
