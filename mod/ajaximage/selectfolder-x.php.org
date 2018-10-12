<?php 
//Get subfolder list
$folders = glob('../../images',GLOB_ONLYDIR);
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
    $files = glob('../../'.basename($_POST['location']).'/*.*');
    //$files = glob('../../mod/ajaximage/'.basename($_POST['location']).'/*.png');
    foreach($files as $file){
        
        
        
        
        
        
        echo '<img src="../../images/'.basename($file).'">'.PHP_EOL;
    }
    echo '</div>';
}
?>