<?php 
include '../includes/mysqli.php';
  
$qry = "SELECT trabajador, SUM( horas ) AS horas
FROM cursos
GROUP BY trabajador";
 
$result = mysqli_query($con,$qry);
mysqli_close($mysqli);
  
$table = array();
$table['cols'] = array(
    //Labels for the chart, these represent the column titles
    array('id' => '', 'label' => 'Trabajador', 'type' => 'string'),
    array('id' => '', 'label' => 'Horas', 'type' => 'number')
    );
	
	$rows = array();
foreach($result as $row){
    $temp = array();
     
    //Values
    $temp[] = array('v' => (string) $row['trabajador']);
    $temp[] = array('v' => (float) $row['horas']); 
    $rows[] = array('c' => $temp);
    }
	
	$result->free();
 
	$table['rows'] = $rows;
	 
	$jsonTable = json_encode($table, true);
	echo $jsonTable;
	
function drawChart() {
      var jsonData = $.ajax({
          url: "json.php",
          dataType: "json",
          async: false
          }).responseText;
	   
	// Create our data table out of JSON data loaded from server.
	var data = new google.visualization.DataTable(jsonData);