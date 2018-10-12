<?php
 
/* Include all the classes */ 
include("../class/pData.class.php"); 
include("../class/pDraw.class.php"); 
include("../class/pImage.class.php"); 
 
/* Create your dataset object */ 
$myData = new pData(); 
 
 include '../../includes/mysqli_pchart.php';
//$db = ($mysqli = mysqli_connect("localhost",  "root",  "")); 
//((bool)mysqli_query($db, "USE handyq"));
 
$Requete = "SELECT * FROM `cursos` WHERE `trabajador`='IGNACIO RODRIGUEZ ESTEBAN'"; //table name
$Result  = mysqli_query($db, $Requete); 
 
/*This fetches the data from the mysql database, and adds it to pchart as points*/
while($row = mysqli_fetch_array($Result)) 
   { 
	//$Sample_Number = $row["Sample_Number"]; //Not using this data
	//$myData->addPoints($Sample_Number,"Sample_Number");
	
	$fecha = $row["fecha"];
	$myData->addPoints($fecha,"fecha");	
	
	$horas = $row["horas"];
	$myData->addPoints($horas,"horas");
	
	 $trabajador = $row["trabajador"];
}



//$myData->addPoints($trabajador,"trabajador");

/* Draw serie 1 in red with a 80% opacity */
$serieSettings = array("R"=>229,"G"=>240,"B"=>11,"Alpha"=>80);
$myData->setPalette("horas",$serieSettings);
 
$myData-> setSerieOnAxis("horas", 0); //assigns the data to the frist axis
$myData-> setAxisName(0, "Horas"); //adds the label to the first axis

//$myData-> setSerieOnAxis("trabajador", 1); //assigns the data to the second axis
//$myData-> setAxisName(1, "$trabajador"); //adds the label to the first axis


$myData-> setAxisPosition(1,AXIS_POSITION_RIGHT); //moves the second axis to the far left
 
$myData->setAbscissa("fecha"); //sets the fecha data set as the x axis label

$myData->setSerieWeight("horas",4);
//$myData->setSerieWeight("trabajador",0);
 
$myPicture = new pImage(1100,380,$myData); /* Create a pChart object and associate your dataset */ 

$myData->setAxisDisplay(0,AXIS_FORMAT_METRIC);

/* Draw the background */
 $Settings = array("R"=>170, "G"=>183, "B"=>87, "Dash"=>1, "DashR"=>190, "DashG"=>203, "DashB"=>107);
 $myPicture->drawFilledRectangle(0,40,1100,380,$Settings);

 /* Overlay with a gradient */
 $Settings = array("StartR"=>219, "StartG"=>231, "StartB"=>139, "EndR"=>1, "EndG"=>138, "EndB"=>68, "Alpha"=>50);
 $myPicture->drawGradientArea(0,20,1100,380,DIRECTION_VERTICAL,$Settings);
 $myPicture->drawGradientArea(0,0,1100,40,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>80));

 /* Draw the picture border */ 
 $myPicture->drawRectangle(0,0,1098,378,array("R"=>0,"G"=>0,"B"=>0));
 
/* Write the chart title */  
$myPicture->setFontProperties(array("FontName"=>"../fonts/Forgotte.ttf","FontSize"=>14)); 
$myPicture->drawText(150,30,"$trabajador",array("R"=>255,"G"=>255,"B"=>255,"FontSize"=>20,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 

$myPicture->setGraphArea(60,60,1000,300); /* Define the boundaries of the graph area */

/* Draw the scale */ 
$scaleSettings = array("XMargin"=>20,"YMargin"=>20,"Floating"=>TRUE,"LabelRotation"=>320); 
$myPicture->drawScale($scaleSettings); 

/* Turn on Antialiasing */ 
$myPicture->Antialias = TRUE; 
 
 /*The combination makes a cool looking graph*/
$myPicture->drawPlotChart();
$myPicture->drawLineChart(array("DisplayValues"=>TRUE, "DisplayR"=>255, "DisplayG"=>255,"DisplayB"=>255, "DisplayShadow"=>TRUE, "Surrounding"=>30));

$Config = array("R"=>0, "G"=>0, "B"=>0, "Alpha"=>100, "Weight"=>2, "AxisID"=>0, "Ticks"=>8, "WriteCaption"=>TRUE, "Caption"=>"Límite INF", "DrawBox"=>TRUE);
$myPicture->drawThreshold(10,$Config);
$Config2 = array("R"=>220, "G"=>30, "B"=>40, "Alpha"=>100, "Weight"=>2, "AxisID"=>0, "Ticks"=>8, "WriteCaption"=>1, "Caption"=>"Límite SUP", "DrawBox"=>TRUE);
$myPicture->drawThreshold(30,$Config2);
 
$myPicture->drawLegend(890,60); //adds the legend

$myPicture->autoOutput(); /* Build the PNG file and send it to the web browser */ 