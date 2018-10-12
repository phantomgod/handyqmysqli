<?php
	
$log_directory = 'uploads/pdf';

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


$myurl = 'uploads/pdf/cartulina_desinfeccion.pdf[0]';
$image = new Imagick($myurl);
$image->setResolution( 300, 300 );
$image->setImageFormat( "png" );
$image->writeImage('' . $value . '.png');
echo $image;