<?php

$log_directory = '../uploads/pdf';

$results_array = array();

if (is_dir($log_directory))
{
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
                        $results_array[] = $file;
                }
                closedir($handle);
        }
}

//Output findings
foreach($results_array as $value)
{
    echo $value . '<br />';
	//genPdfThumbnail('uploads/calidad/pdf' . $value . '','' . $value . '.jpg'); // generates /uploads/my.jpg
	
}


$pdf = '../uploads/pdf/control-registros.pdf[0]';
$image = new Imagick($pdf);
$image->resizeImage( 240, 320, imagick::FILTER_LANCZOS, 0);
$image->setImageFormat( "png" );
$image->writeImage('pdfAsImage.png');
$thumbnail = $image->getImageBlob();
echo $image;
echo "<img src='../uploads/pdf/png;base64,".base64_encode($thumbnail)."' /><br />";
	
