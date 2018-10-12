<?php
    /**
    * Change these to your own credentials*/
    
    require_once ("../includes/mysql.php");
    $db = new MySQL();
    
    $result = mysqli_query($mysqli, "SELECT COUNT( * ) ,  `proveedor` 
                            FROM  `incidenciasdeproveedor` 
                            GROUP BY  `proveedor` 
                            LIMIT 0 , 30");
    if ($result) {
    
        $labels = array();
        $data   = array();
    
        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["proveedor"];
            $data[]   = $row["COUNT(*)"];
        }

         // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }

?>

<html>
<head>

    <!-- Don't forget to update these paths -->

    <script src="libraries/RGraph.common.core.js" ></script>
    <script src="libraries/RGraph.bar.js"></script>
    <script src="libraries/RGraph.common.dynamic.js"></script>
    <script src="libraries/RGraph.common.context.js" ></script>
    <script src="libraries/RGraph.common.tooltips.js"></script>
    <script src="libraries/RGraph.common.annotate.js" ></script>
   
 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
      
</head>
<body>
    
    <canvas id="cvs" width="1000px" height="300px">[No canvas support]</canvas>
    <script>
        chart = new RGraph.Bar('cvs', <?php print($data_string) ?>);
        chart.Set('chart.title', 'No conformidades por área');
        chart.Set('chart.annotatable', true);
        chart.Set('chart.contextmenu', [
                                ['Show palette', RGraph.Showpalette],
                                ['Clear', function () {RGraph.Clear(bar.canvas); bar.Draw();}]
                               ]);
        chart.Set('chart.background.grid.autofit', true);
        chart.Set('chart.gutter.left', 35);
        chart.Set('chart.gutter.right', 5);        
        chart.Set('chart.hmargin', 10);
        chart.Set('chart.tickmarks', 'endcircle');
        chart.Set('chart.tooltips', <?php print($labels_string) ?>);
        chart.Set('chart.labels', <?php print($labels_string) ?>);        
        chart.Draw();
    </script>      
    
</body>
</html>