<?php 
//Get subfolder list
$folders = glob('./mod/ajaximage/uploads',GLOB_ONLYDIR);
?>

<form action="" method="post">
<select name="location" onchange="javascript:this.form.submit()">
<option>-Ver las imágenes almacenadas...-</option>
<?php
foreach($folders as $folder){
    echo '<option value="'.basename($folder).'">'.basename($folder).'</option>'.PHP_EOL;
}
?>
</select>
</form>

<?php
//List of files once post was submitted
if(isset($_POST['location'])){
    echo '<div id="List_Generated">';
    $files = glob('./mod/ajaximage/'.basename($_POST['location']).'/*.png');
    //$files = glob('./mod/ajaximage/'.basename($_POST['location']).'/*.png');
    foreach($files as $file){
        echo '<img src="./mod/ajaximage/uploads/'.basename($file).'" width="80px" height="113px" alt="' . basename($file) . '" title="' . basename($file) . '">'.PHP_EOL;
    }
    echo '</div>';
}
?>