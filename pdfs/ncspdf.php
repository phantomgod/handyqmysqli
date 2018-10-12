<?php 
require_once('class.ezpdf.php'); 
$pdf = new Cezpdf('a4'); 
$pdf->selectFont('../fonts/courier.afm'); 
$pdf->ezSetCmMargins(1,1,1.5,1.5); 

require_once "../includes/mysqlpdf.php"; 


$queEmp = "SELECT numhoja, descripcion, fecha, acciones, cerradofecha FROM hojasdemejora ORDER BY fecha ASC"; 

$resEmp = mysqli_query($mysqli, $queEmp); 

$totEmp = mysqli_num_rows($resEmp); 

$ixx = 0; 
while($datatmp = mysqli_fetch_assoc($resEmp)) {  
    $ixx = $ixx+1; 
    $data[] = array_merge($datatmp, array('num'=>$ixx)); 
         
} 



$titles = array( 
                'numhoja'=>'<b>Ns</b>', 
                'descripcion'=>'<b>Descripción</b>', 
                'fecha'=>'<b>Fecha</b>', 
              //'acciones'=>'<b>Acción</b>', 
                'cerradofecha'=>'<b>Cierre</b>', 
                ); 
$options = array( 
                'shadeCol'=>array(0.9,0.9,0.9), 
                'xOrientation'=>'center', 
                'width'=>500 
            ); 
$txttit = "<b>MIPROMA BIOCONTROL</b>\n"; 
$txttit.= "LISTA DE NO CONFORMIDADES \n"; 

$pdf->ezText($txttit, 12); 
$pdf->ezTable($data, $titles, 'ooo', $options); 
$pdf->ezText("\n\n\n", 10); 
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10); 
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10); 
$pdf->ezStream(); 