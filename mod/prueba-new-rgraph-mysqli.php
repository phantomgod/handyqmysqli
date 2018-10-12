<?php

    include '../includes/mysqli.php';
    
    // Make the query
    $result = $mysqli->query("SELECT * FROM `horasformacionportrabajador`");

    if ($result) {
        
        $labels = array();
        $data   = array();
    
        $result->data_seek(0);
        while ($row = $result->fetch_assoc()) {
            $labels[] = $row["trabajador"];
            $data[]   = $row["totalhoras"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . $mysqli->error);
    }
?>
<html>
<head>

    <!-- Don't forget to update these paths -->

    <script src="../Rgraph/libraries/RGraph.common.core.js"></script>
    <script src="../Rgraph/libraries/RGraph.line.js" ></script>
    <script src="../Rgraph/libraries/RGraph.common.dynamic.js"></script>
    <script src="../Rgraph/libraries/RGraph.common.context.js" ></script>
    <script src="../Rgraph/libraries/RGraph.common.tooltips.js"></script>
    <script src="../Rgraph/libraries/RGraph.common.annotate.js" ></script>

</head>
<body>
    
    <canvas id="cvs" width="600" height="800">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Line({
            id: 'cvs',
            data: <?php print($data_string) ?>,
            options: {
			textAngle: 30,
                hmargin: 10,
                tickmarks: 'endcircle',
				colors: ['Gradient(#fff:red)'],
				strokestyle: 'rgba(0,0,0,0)',
				textSize: 14,
				title: 'A grouped Bar chart using the Wave effect',
				numyticks: 5,
				noaxes: true,
				hmargin: -5,
				shadow: 0,
				backgroundGridVlines: false,
				backgroundGridBorder: false,
				gutterLeft:100,
                    gutterRight: 5,
                    gutterBottom:400,
				
                labels: <?php print($labels_string) ?>
            }
        }).draw()
    </script>

</body>
</html>