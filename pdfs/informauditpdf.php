<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "phantom_bio", "bio-5940");
mysql_select_db("phantom_bio", $conexion);
$queEmp = "SELECT codaudit, fechaudit, areaudit, auditor, resultado FROM informaudit ORDER BY fechaudit ASC";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'codaudit'=>'<b>Cod</b>',
				'fechaudit'=>'<b>Fecha</b>',
				'areaudit'=>'<b>�rea</b>',
                'auditor'=>'<b>Auditor</b>',
                'resultado'=>'<b>Resultado</b>',
    			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>BIOCONTROL</b>\n";
$txttit.= "LISTA DE AUDITOR�AS \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>
