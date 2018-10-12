<?php 


/* Connect to the MySQL database */ 
$db = ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "antenast_antenas",  "antenas@@@#5940")); 
((bool)mysqli_query($db, "USE antenast_php_event_calendar")); 

/* Build the query that will returns the data to graph */ 
$Requete = "SELECT * FROM `timestamp`"; 
$Result  = mysqli_query($db, $Requete); 
while($row = mysqli_fetch_array($Result)) 
   { 
       /* Push the results of the query in an array */ 
       $timestamp[]   = $row["timestamp"]; 
       $temperature[] = $row["temperature"]; 
       $humidity[]    = $row["humidity"]; 
   } 

    makeachart($timestamp, $temperature, $humidity); 




function makeachart($timestamp, $temperature, $humidity) 
{
/* CAT:Line chart */ 
/* pChart library inclusions */ 
include("../class/pData.class.php"); 
include("../class/pDraw.class.php"); 
include("../class/pImage.class.php"); 

/* Create and populate the pData object */ 
$MyData = new pData();   


$MyData->addPoints($timestamp,"Probe 1"); 
$MyData->addPoints($temperature,"Probe 2"); 
$MyData->addPoints($humidity,"Probe 3"); 


$MyData->setSerieTicks("Probe 2",4); 
$MyData->setSerieWeight("Probe 3",2); 
$MyData->setAxisName(0,"Temperatures"); 
$MyData->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels"); 
$MyData->setSerieDescription("Labels","Months"); 
$MyData->setAbscissa("Labels"); 

   
/* Create the pChart object */ 
$myPicture = new pImage(700,230,$MyData); 

/* Turn of Antialiasing */ 
$myPicture->Antialias = FALSE; 

/* Add a border to the picture */ 
$myPicture->drawRectangle(0,0,699,229,array("R"=>253,"G"=>57,"B"=>23)); 

/* Write the chart title */  
$myPicture->setFontProperties(array("FontName"=>"../fonts/Forgotte.ttf","FontSize"=>11)); 
$myPicture->drawText(150,35,"Average temperature",array("FontSize"=>20,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 

/* Set the default font */ 
$myPicture->setFontProperties(array("FontName"=>"../fonts/pf_arma_five.ttf","FontSize"=>6)); 

/* Define the chart area */ 
$myPicture->setGraphArea(60,40,650,200); 

/* Draw the scale */ 
$scaleSettings = array("XMargin"=>10,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE); 
$myPicture->drawScale($scaleSettings); 

/* Turn on Antialiasing */ 
$myPicture->Antialias = TRUE; 

/* Draw the line chart */ 
$myPicture->drawLineChart(); 

/* Write the chart legend */ 
$myPicture->drawLegend(540,20,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL)); 

/* Render the picture (choose the best way) */ 
$myPicture->autoOutput("pictures/example.drawLineChart.simple.png"); 

}